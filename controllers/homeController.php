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
    $data = array();
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
    $data = array();
    $p = new Products();

    if(!empty($_POST['cod'])) {
      $cod = $_POST['cod'];
      $name = $_POST['name'];
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];
      $min_quantity = $_POST['min_quantity'];

      $p->addProduct($cod, $name, $price, $quantity, $min_quantity);
      header("Location: ".BASE_URL);
      exit;
    }

    $this->loadTemplate('add', $data);
  }

  public function edit($id) {
    $data = array(
      'msg' => ''
    );
    $p = new Products();

    if(!empty($_POST['cod'])) {
      $cod = $_POST['cod'];
      $name = $_POST['name'];
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];
      $min_quantity = $_POST['min_quantity'];

      $p->editProduct($cod, $name, $price, $quantity, $min_quantity, $id);
     
      header("Location: ".BASE_URL);
      exit;      
    }

    $data['info'] = $p->getProduct($id);//Pega os dados do produto

    $this->loadTemplate('edit', $data);
    
  }
  
}