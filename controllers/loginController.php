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

                

            } else {
                $data['msg'] = 'Número e/ou senha errados!';
            }
        }
        
        $this->loadTemplate('login', $data);
    }

}