<?php 
//Database , Privileges

$conn = mysqli_connect('localhost', 'root', 'root', 'database');

if(!$conn){  echo 'Error: ' . mysqli_connect_error();}
