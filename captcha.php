<?php
/*
 * Author Abdulhakim Haliru
 * May, 2011.
 * A simple Arithmetic  Captcha Component for Cake Php 1.2.x and higher
 *
 *
 *
 */
class CaptchaComponent extends Object
{

var $components=array('Session');

function __init()
{

//$num_1 = $_SESSION['a'];
//$num_2 = $_SESSION['b'];

     $this->Session->write('p',rand(0,9));
     $this->Session->write('q',rand(0,9));


  
   
}

function getFirst()
{
      $first_number=$this->Session->read('p');
      //$first_number=$this->Session->read('p');
      return $first_number;
}

function getSecond()
{
  $second_number=$this->Session->read('q');

  return $second_number;
}



}

?>