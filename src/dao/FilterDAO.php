<?php

require_once __DIR__ . '/DAO.php';

class FilterDAO extends DAO {
  public function selectAllFridays(){
  $sql = "SELECT * FROM `moments`, `events`
  WHERE `day` = 'vrijdag'
  ORDER BY `time` ASC";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':id', $id);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllSaturdays(){

  }

  public function selectAllSundays(){

  }

  public function selectAllStreetActs(){

  }

  public function selectAllPresentations(){

  }

  public function selectById($id){
    $sql = "SELECT * FROM `events`, `moments`, `locations` WHERE `Id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
