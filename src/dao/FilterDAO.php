<?php

require_once __DIR__ . '/DAO.php';

class FilterDAO extends DAO {

  public function search($day, $act){

    $sql = "SELECT events .*, moments.location_id, moments.time, days.day, days.id as day_id
    FROM events
    INNER JOIN moments
    ON events.id = moments.event_id
    INNER JOIN days
    ON moments.day_id = days.id
    WHERE 1";

    $bindValues= array();

    if (!empty($day)) {
      $sql .= " AND days.day LIKE :day";
      $bindValues[':day']=$day;
    }
    if (!empty($act)) {
      $sql .= " AND events.type LIKE :act";
      $bindValues[':act']=$act;
    }

    $sql .= " ORDER BY days.day, moments.time ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($bindValues);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

  public function selectById($id){
    $sql = "SELECT events .*, moments.location_id, moments.time, days.day,
    locations.place, locations.link, days.id as day_id, moments.event_id
    FROM events
    INNER JOIN moments
    ON events.id = moments.event_id
    INNER JOIN days
    ON moments.day_id = days.id
    INNER JOIN locations
    ON moments.location_id = locations.id
    WHERE moments.event_id = :id";

    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectOthersById($id){
    $sql = "SELECT events .*, moments.location_id, moments.time, days.day,
    locations.place, locations.link, days.id as day_id, moments.event_id
    FROM events
    INNER JOIN moments
    ON events.id = moments.event_id
    INNER JOIN days
    ON moments.day_id = days.id
    INNER JOIN locations
    ON moments.location_id = locations.id
    WHERE events.id != :id";

    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
