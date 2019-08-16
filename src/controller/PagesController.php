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

  if(empty($_GET['chooseAct'])) {
    $act = '';
  }
  else {
    $act = $_GET['chooseAct'];
  }

  if(empty($_GET['chooseDay'])) {
    $day = '';
  }
  else {
    $day = $_GET['chooseDay'];
  }
  $results = $this->filterDAO->search($day, $act);

    $this->set('day', $day);
    $this->set('act', $act);
    $this->set('results', $results);
}

public function detail(){

    if(!empty($_GET['id'])) {
        $act = $this->filterDAO->selectEventById($_GET['id']);
        $this->set('act', $act);

      }else{
        header('Location: index.php');
        exit();
    }

    $nr1 = rand(1, 54);
    $nr2 = rand(1, 54);
    $nr3 = rand(1, 54);
    $others = $this->filterDAO->selectOtherEvents($nr1, $nr2, $nr3);

    $this->set('others', $others);

      // $others = $this->filterDAO->selectOthersById($_GET['id']);
      //$this->set('other', $other);

    $this->set('currentPage','detail');
  }
}
