<?php
    class Config{

  	  public  function getConnection(){
  	  	$conn=new mysqli("localhost","root","","blog");
  	  	return $conn;
  	  }
  	  
  }
?>