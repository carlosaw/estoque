<?php 
class Users extends Model {

  private $info;

  public function verifyUser($number, $pass) {

    $sql = "SELECT * FROM users WHERE user_number = :unumber AND user_pass = :upass";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(":unumber", $number);
    $sql->bindValue(":upass", md5($pass));
    $sql->execute();

    if($sql->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function createToken($unumber) {
    // /cria o token para o usuário logado
    $token = md5(time().rand(0,9999).time().rand(0,9999));
    $sql = "UPDATE users SET user_token = :token WHERE user_number = :unumber";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':token', $token);
    $sql->bindValue(':unumber', $unumber);
    $sql->execute();

    return $token;
  }

  public function checkLogin() {
    if($_SESSION['token']) {// Se tiver token
      $token = $_SESSION['token'];// Pega token
      // Verifica se token existe e se é de algum usuário
      $sql = "SELECT * FROM users WHERE user_token = :token";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':token', $token);
      $sql->execute();

      if($sql->rowCount() > 0) {
        $this->info = $sql->fetch();// Pega usuario que achou

        return true;
      }
    }
    return false;
  }
}