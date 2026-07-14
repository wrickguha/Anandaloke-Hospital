<?php
//==============Sanitize data===============
function sanitize($con, $data)
{
    $data = trim($data);
    while (strpos($data, '..') !== FALSE) {
        $data = str_replace('..', '.', $data);
    }
    if (get_magic_quotes_gpc()) {
        $data = stripslashes($data);
    }
    return htmlentities(strip_tags(mysqli_real_escape_string($con,$data)), ENT_QUOTES, 'UTF-8');
}

function confirm($query){
    global $con;
    if(!$query){
        die("Query failed ".mysqli_error($con));
    }
}

function limit_string($string){
     $string = substr($string,0,150);
     $string = substr($string,0,strrpos($string," "));
     return $string;
}

function short($service){
     $service = substr($service,0,90);
     $service = substr($service,0,strrpos($service," "));
     return $service;
}

function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}
