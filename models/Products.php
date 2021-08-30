<?php
class Products extends Model {

  public function getProducts($s='') {
    $array = array();

    if(!empty($s)) {
      $sql = "SELECT * FROM products WHERE cod = :cod OR name LIKE :name";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':cod', $s);
      $sql->bindValue(':name', '%'.$s.'%');
      $sql->execute();
    } else {
      $sql = "SELECT * FROM products";
      $sql = $this->db->query($sql);
    }
    if($sql->rowCount() > 0) {
      $array = $sql->fetchAll();
    }
    return $array;
  }

  private function verifyProduct($cod) {
    //...

    return true;
  }

  public function addProduct($cod, $name, $price, $quantity, $min_quantity) {
    if($this->verifyProduct($cod)) {

      $sql = "INSERT INTO products (cod, name, price, quantity, min_quantity)
              VALUES(:cod, :name, :price, :quantity, :min_quantity)";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':cod', $cod);
      $sql->bindValue(':name', $name);
      $sql->bindValue(':price', $price);
      $sql->bindValue(':quantity', $quantity);
      $sql->bindValue(':min_quantity', $min_quantity);
      $sql->execute();

    } else {
      return false;
    }
  }

  public function addBuyProduct($cod_product, $qtde) {

    $sql = "INSERT INTO buys (cod_product, qtde)
            VALUES(:cod_product, :qtde)";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':cod_product', $cod_product);
    $sql->bindValue(':qtde', $qtde);
    $sql->execute();
      
  }

  public function editProduct($cod, $name, $price, $quantity, $min_quantity, $id) {
    
      $sql = "UPDATE products SET cod =:cod, name = :name, price = :price, quantity = :quantity, min_quantity = :min_quantity WHERE id = :id";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':cod', $cod);
      $sql->bindValue(':name', $name);
      $sql->bindValue(':price', $price);
      $sql->bindValue(':quantity', $quantity);
      $sql->bindValue(':min_quantity', $min_quantity);
      $sql->bindValue(':id', $id);
      $sql->execute();
  }

  public function getProduct($id) {
    $array = array();

    $sql = "SELECT * FROM products WHERE id = :id";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0) {
      $array = $sql->fetch();
    }
    return $array;
  }

  public function getLowQuantityProducts() {
    $array = array();

    $sql = "SELECT * FROM products WHERE quantity < min_quantity";
    $sql = $this->db->query($sql);
    if($sql->rowCount() . 0) {
      $array = $sql->fetchAll();
    }
    return $array;
  }
}