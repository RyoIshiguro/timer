<?php 

  App::uses('AppController','Controller');
  
  /**
   * 
   */
  class TimerController extends AppController
  {
    //use table
    public $uses = array(
      'Timer'
    );
    
    function index()
    {
      // echo "hello world";
    }
    
  }
  
 ?>