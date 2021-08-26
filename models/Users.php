<?php 
class Users extends Model {

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

}