<?php

require_once __DIR__ .'/Controller.php';
require_once __DIR__ .'/../dao/FilterDAO.php';

class PagesController extends Controller{

  private $FilterDAO;

  function __construct(){
    $this->filterDAO = new FilterDAO();

  }

public function index(){
  $this->set('title', 'home');
  $this->set('currentPage', 'home');
}

public function lineup(){
  $this->set('title', 'lineup');
  $this->set('currentPage', 'lineup');

  if(!empty($_GET['action']) && $_GET['action'] == 'filter'){
    $results = $this->filterDAO->search($_GET['day'], $_GET['event']);
    $this->set('currentDay', $_GET['day']);
    $this->set('day', $_GET['day']);
    $this->set('currentEvent', $_GET['event']);
    $this->set('event', $_GET['event']);
  }else{
    $results = $this->filterDAO->search('1', '');
    $this->set('day', '1');
    $this->set('currentDay', '1');
    $this->set('event', '');
    $this->set('currentEvent', '');
   }
  $this->set('results', $results);
}

public function fallback(){
  $this->set('title', 'fallback');
  $this->set('currentPage', 'fallback');
}

public function detail(){
  $eventDAO  = new EventDAO();

if(!empty($_GET['id'] )) {
      $event = $eventDAO->selectById($_GET['id']);
    }
    if(empty($event)){
      header('Location: index.php');
      exit();
    }

    $this->set('currentPage','events');
    $this->set('event', $event);
}

}
