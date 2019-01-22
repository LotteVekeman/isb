<?php

require_once __DIR__ .'/Controller.php';

class PagesController extends Controller{

public function index(){
  $this->set('title', 'home');
  $this->set('currentPage', 'home');
}

public function lineup(){
  $this->set('title', 'lineup');
  $this->set('currentPage', 'lineup');
}

public function fallback(){
  $this->set('title', 'fallback');
  $this->set('currentPage', 'fallback');
}


}
