<?php

$host="sql204.infinityfree.com";
$user="if0_37387542";
$password="eZID79sSYUnRyCn";
$db="crud";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>