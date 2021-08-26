<?php
class relatorioController extends Controller {
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
    $p = new Products();

    $data['list'] = $p->getLowQuantityProducts();

    $this->loadTemplate('relatorio', $data);
  }
}