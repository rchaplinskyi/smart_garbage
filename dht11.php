<?php
require_once ('include/function.php');
class dht11{
 public $link='';
 function __construct($distance, $temp, $humidity){
  $this->connect();
  $this->storeInDB($distance, $temp, $humidity);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','admin','Qwerty-592986') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'belajar') or die('Cannot select the DB');
 }
 
 function storeInDB($distance, $temp, $humidity){
  $query = "insert into sensor set data_sensor='".$distance."', data_hum='".$humidity."', data_temp='".$temp."',waktu='".time()."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['distance'] != '' and $_GET['temp'] != '' and  $_GET['humidity'] != ''){
 $dht11=new dht11(100-($_GET['distance']), $_GET['temp'],$_GET['humidity']);
}
?>
