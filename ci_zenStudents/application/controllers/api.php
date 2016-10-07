<?php defined('BASEPATH') OR exit('No direct script access allowed');

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
    // Request Param are obtained by using $this->get()
    // $id = $this->get('id');
    // Instead you can use the uri Index for primary keys/indices
    $id = $this->uri->segment(3);
    $this->data[1] = array('name' => 'Pramod', 'age'=>'29');
    $this->data[2] = array('name' => 'Shwetha', 'age'=>'28');
    $this->data[3] = ['one','two','three'];
    if(isset($this->data[$id])){
      $this->response($this->data[$id]);
    }else{
      // You can also use the parent class' REST_Controller's constant values instead of 404
      $this->response('The specified student ID cannot be found', parent::HTTP_NOT_FOUND);
    }
  }//end:get_students

}/*end:ApiController*/
