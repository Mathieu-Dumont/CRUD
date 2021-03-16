<?php
// Utilisateurs :

function getDatabaseConnexion(){
  try {
      $user = "root";
    $pass = "";
    $pdo = new PDO('mysql:host=localhost;dbname=groups', $user, $pass);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;

  } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
  }
}

function getAllUsers(){
  $con = getDatabaseConnexion();
  $requete = 'SELECT * FROM user';
  $rows = $con->query($requete);
  return $rows;
}

function readUser($id){
  $con = getDatabaseConnexion();
  $requete = "SELECT * FROM user where id = '$id'";
  $stmt = $con->query($requete);
  $row = $stmt->fetchAll();
  if (!empty($row)){
      return $row[0];
  }
}

function createUser($lastname, $firstname, $email, $password){
  try {
    $con = getDatabaseConnexion();
    $organization = 2;
    $sql = "INSERT INTO user (lastname, firstname, email, password, idOrganization)
        VALUES ('$lastname', '$firstname', '$email' ,'$password','$organization')";
      $con->exec($sql);
  }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
}

function updateUser($id, $lastname, $firstname, $email, $password){
  try {
    $con = getDatabaseConnexion();
    $requete = "UPDATE user set
          lastname = '$lastname',
          firstname = '$firstname',
          email = '$email',
          password = '$password'
          where id = '$id' ";
    $stmt = $con->query($requete);
  }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
}

function deleteUser($id){
  try {
    $con = getDatabaseConnexion();
    $requete = "DELETE from user where id = '$id' ";
    $stmt = $con->query($requete);
  }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
}

function getNewUser() {
  $user['id'] = "";
  $user['lastname'] = "";
  $user['firstname'] = "";
  $user['email'] = "";
  $user['password'] = "";

}
//Organization :

function getAllOrga(){
  $con = getDatabaseConnexion();
  $requete = 'SELECT * FROM organization';
  $rows = $con->query($requete);
  return $rows;
}

function readOrga($id){
  $con = getDatabaseConnexion();
  $requete = "SELECT * FROM organization where id = '$id'";
  $stmt = $con->query($requete);
  $row = $stmt->fetchAll();
  if (!empty($row)){
      return $row[0];
  }
}

function createOrga($name, $domain, $aliases){
  try {
    $con = getDatabaseConnexion();
    $sql = "INSERT INTO organization (name, domain, aliases)
        VALUES ('$name', '$domain', '$aliases')";
      $con->exec($sql);
  }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
}

function updateOrga($id, $name, $domain, $aliases){
  try {
    $con = getDatabaseConnexion();
    $requete = "UPDATE organization set
          name = '$name',
          domain = '$domain',
          aliases = '$aliases',
          where id = '$id' ";
    $stmt = $con->query($requete);
  }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
}

function deleteOrga($id){
  try {
    $con = getDatabaseConnexion();
    $requete = "DELETE from organization where id = '$id' ";
    $stmt = $con->query($requete);
  }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
}

function getNewOrga() {
  $user['id'] = "";
  $user['name'] = "";
  $user['domain'] = "";
  $user['aliases'] = "";

}
 ?>
