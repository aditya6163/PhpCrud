<?php
$user='root';
$pass='root';
$db='crudclass';
$conn=mysqli_conect('localhost',$user,$pass,$db);

if($conn)
{
    echo "connection successful";
}



?>