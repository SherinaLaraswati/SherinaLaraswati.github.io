<head>
    <meta charset="UTF-8">
    <title>Hail pendataan</title>
    <link rel ="stylesheet"  href = "Pendataan.css">
</head>

<footer>
    <div class = "outer-footer">
    Copyright &copy; 2022 Desgin by SherinaLaraswati
</footer>

<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];
$nama = @$_REQUEST['nama'];
$nomer = @$_REQUEST['nomer'];
$alamat = @$_REQUEST['alamat'];

if ($email){
    echo "<strong>Email: </strong> {$email} <br>"; 
}
if ($password){
    echo "<strong>Password: </strong> {$password} <br>"; 
}
if ($nama){
    echo "<strong>Nama: </strong> {$nama} <br>"; 
}
if ($nomer){
    echo "<strong>Nomer Telepon: </strong> {$nomer} <br>"; 
}
if ($alamat){
    echo "<strong>Alamat: </strong> {$alamat} <br>"; 
}
echo "{$nama}, telah melakukan pendataan";
?>