<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Api extends REST_Controller{

  public $data = array();

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
  }//end:construcutor

  function index(){ }//end:index


  //NOTE: All of our REST API calls are - resourceName_httpMethodCalls.
  //NOTE: For a list applicable http calls - see line #172 of REST_Controller.php

  function student_get(){
    $this->data[1] = array('name' => 'Pramod', 'age'=>'29');
    $this->data[2] = array('name' => 'Shwetha', 'age'=>'28');
    $this->data[3] = ['one','two','three'];
    $this->response($this->data);
  }//end:get_students

}/*end:ApiController*/
