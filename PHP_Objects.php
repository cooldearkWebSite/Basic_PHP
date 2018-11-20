<?php   
    /*Defined variables*/
    $hostname="localhost";
    $username="test";
    $password="pass"
    $database="mydata";
   
    $myObject=new stdClass();//build a object
    $data=["hostname"=>$hostname,"username"=>$username,"password"=>$password,"database"=>$database];
    $myObject->property=$data;
??
