<?php

function addVisitor($fName, $lName, $email, $password, $type){
  global $db;
  $statement = $db->prepare(
    'INSERT INTO users (email, password, firstName, lastName, accountType)
    VALUES (:email, :password, :fName, :lName, :accountType)'
  );
  $statement->bindValue(':email', $email);
  $statement->bindValue(':password', $password);
  $statement->bindValue(':fName', $fName);
  $statement->bindValue(':lName', $lName);
  $statement->bindValue(':accountType', $type);
  $result = $statement->execute();
  $statement->closeCursor();
  return $result;
};

function getGroups(){

};
?>
