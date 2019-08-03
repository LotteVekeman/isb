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

  // if(!empty($_GET['action']) && $_GET['action'] == 'filter'){
  //   $results = $this->filterDAO->search($_GET['days'], $_GET['acts']);
  //   $this->set('days', $_GET['days']);
  //   $this->set('acts', $_GET['acts']);
  // }else{
  //   $results = $this->filterDAO->search('', '');
  //   $this->set('day', '');
  //   $this->set('acts', '');
  // }

  // if(!empty($_GET['action']) && $_GET['action'] == 'filter'){
  //   $results = $this->filterDAO->search($_GET['day'], $_GET['event']);
  //   $this->set('currentDay', $_GET['day']);
  //   $this->set('day', $_GET['day']);
  //   $this->set('currentEvent', $_GET['event']);
  //   $this->set('event', $_GET['event']);
  // }else{
  //   $results = $this->filterDAO->search('', '');
  //   $this->set('day', '1');
  //   $this->set('currentDay', '1');
  //   $this->set('event', '');
  //   $this->set('currentEvent', 'voorstelling');
  //  }

   if(!empty($_GET['action']) && $_GET['action'] == 'filter'){
    $results = $this->filterDAO->search($_GET['chooseAct'], $_GET['chooseDay']);
    $this->set('act', $_GET['chooseAct']);
    $this->set('currentEvent', $_GET['chooseAct']);
    $this->set('day', $_GET['chooseDay']);
    $this->set('currentDay', $_GET['chooseDay']);
  }else{
    $results = $this->filterDAO->search('', '');
    $this->set('act', '');
    $this->set('currentEvent', '');
    $this->set('day', '');
    $this->set('currentDay', '');
   }
  $this->set('results', $results);
}

public function fallback(){
  $this->set('title', 'fallback');
  $this->set('currentPage', 'fallback');
}

public function detail(){

  if(!empty($_GET['id'])) {
        $act = $this->filterDAO->selectById($_GET['id']);
        $this->set('act', $act);
      }else{
        header('Location: index.php');
        exit();
      }

      $this->set('currentPage','detail');

      $other = $this->filterDAO->selectOthersById($_GET['id']);
      $this->set('other', $other);
  }
}
