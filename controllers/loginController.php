<?php
class loginController extends Controller {

  public function index() {
    $data = array(
        'msg' => ''
    );

    if(!empty($_POST['number'])) {
      $unumber = $_POST['number'];// Pega numero digitado
      $upass = $_POST['password'];// Pega senha digitada

      $users = new Users();// Chama model Users

      //Verifica se usuario existe
      if($users->verifyUser($unumber, $upass)) {
        $token = $users->createToken($unumber);// Cria o token
        $_SESSION['token'] = $token; // Salva o token na sessão

        header("Location: ".BASE_URL);// Envia para home
        exit;
      } else {
        $data['msg'] = 'Número e/ou senha errados!';
      }
    }
    
    $this->loadTemplate('login', $data);
  }

  public function sair() {
    unset($_SESSION['token']);// Mata a sessão
    header("Location: ".BASE_URL."login");// Volta para login
  }
}