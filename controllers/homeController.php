<?php
class homeController extends Controller {

  private $user;

  public function __construct() {
    parent::__construct();
    // Verifica se tem token válido
    $this->user = new Users();
    if(!$this->user->checkLogin()) {
      header("Location: ".BASE_URL."login");
      exit;
    }
  }

  public function index() {
    $data = array(
      'menu' => array(
        BASE_URL.'home/add' => 'Adicionar Produto',
        BASE_URL.'relatorio' => 'Relatório',
        BASE_URL.'home/addBuy' => 'Adicionar Venda',
        BASE_URL.'login/sair' => 'Sair'
      )
    );
    //print_r($_SESSION['token']);// Pega token do usuario logado
    $p = new Products();// Puxa model de produtos

    $s = '';
    if(!empty($_GET['busca'])) {
      $s = $_GET['busca'];
    }

    $data['list'] = $p->getProducts($s);

    $this->loadTemplate('home', $data);
  }

  public function add() {
    $data = array(
      'menu' => array(
        BASE_URL => 'Voltar'
      ) 
    );
    $p = new Products();
    $filters = new FiltersHelper();

    if(!empty($_POST['cod'])) {
      $cod = filter_input(INPUT_POST, 'cod', FILTER_VALIDATE_INT);
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
      $price = $filters->filter_post_money('price');
      $quantity = $filters->filter_post_money('quantity');
      $min_quantity = $filters->filter_post_money('min_quantity');
      
      if($cod && $name && $price && $quantity && $min_quantity) {
        $p->addProduct($cod, $name, $price, $quantity, $min_quantity);
        
        echo "<script>alert('Produto adicionado com sucesso!');</script>";
        echo "<script> document.location.href = '/estoque'; </script>";
        /*header("Location: ".BASE_URL);
        exit;*/
      } else {
        $data['warning'] = 'Digite os campos corretamente!';
      }
    }

    $this->loadTemplate('add', $data);
  }

  public function edit($id) {
    $data = array(
      'menu' => array(
        BASE_URL => 'Voltar'
      ) 
    );
    $p = new Products();
    $filters = new FiltersHelper();

    if(!empty($_POST['cod'])) {
      $cod = filter_input(INPUT_POST, 'cod', FILTER_VALIDATE_INT);
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
      $price = $filters->filter_post_money('price');
      $quantity = $filters->filter_post_money('quantity');
      $min_quantity = $filters->filter_post_money('min_quantity');
      
      if($cod && $name && $price && $quantity && $min_quantity) {
        $p->editProduct($cod, $name, $price, $quantity, $min_quantity, $id);

        echo "<script>alert('Produto editado com sucesso!');</script>";
        echo "<script> document.location.href = '/estoque'; </script>";
        //header("Location: ".BASE_URL);
        exit;

      } else {
        $data['warning'] = 'Digite os campos corretamente!';
      }      
    }

    $data['info'] = $p->getProduct($id);//Pega os dados do produto

    $this->loadTemplate('edit', $data);
    
  }

  public function addBuy() {
    $data = array(
      'menu' => array(
        BASE_URL => 'Voltar'
      ) 
    );
    $p = new Products();
    $filters = new FiltersHelper();

    if(!empty($_POST['cod_product'])) {
      $cod_product = filter_input(INPUT_POST, 'cod_product', FILTER_VALIDATE_INT);
      $qtde = $filters->filter_post_money('qtde');
      
      if($cod_product && $qtde) {
        $p->addBuyProduct($cod_product, $qtde);
        
        echo "<script>alert('Venda efetuada com sucesso!');</script>";
        echo "<script> document.location.href = 'addBuy'; </script>";
        //header("Location: ".BASE_URL."home/addBuy");
        //exit;
        
      } else {
        $data['warning'] = 'Digite os campos corretamente!';
      }
    }

    $this->loadTemplate('addBuy', $data);
  }
}