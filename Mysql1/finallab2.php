<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
$sql="Select id, firstname, lastname From users";
$result=$conn->query($sql);

