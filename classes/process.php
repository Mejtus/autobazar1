<?php

$mysqli = new mysqli('localhost', 'root', '', 'autobazar')
or die(mysqli_error($mysqli));

$update = false;
$id = 0;
$nazov = '';
$popis = '';
$obrazok = '';
$najazd = '';
$cena = '';

if (isset($_POST['pridaj'])){
    $nazov = $_POST['nazov'];
    $obrazok = $_POST['obrazok'];
    $popis = $_POST['popis'];
    $najazd = $_POST['najazd'];
    $cena = $_POST['cena'];

    $mysqli->query("INSERT INTO vozidla (nazov, popis, img_path, najazd, cena) VALUES ('$nazov', '$popis', '$obrazok', '$najazd' , '$cena')") or die($mysqli->error);

    header("location: ../admin.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM vozidla WHERE id=$id") or die($mysqli->error);

    header("location: ../admin.php");
}

if (isset($_GET) && array_key_exists('edit',$_GET)){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM vozidla WHERE id='$id'") or die($mysqli->error);
        $tile = $result->fetch_array();
        $nazov = $tile['nazov'];
        $obrazok = $tile['img_path'];
        $popis = $tile['popis'];
        $najazd = $tile['najazd'];
        $cena = $tile['cena'];
}

if (isset($_POST['uprav'])){
    $id = $_POST['id'];
    $nazov = $_POST['nazov'];
    $obrazok = $_POST['obrazok'];
    $popis = $_POST['popis'];
    $najazd = $_POST['najazd'];
    $cena = $_POST['cena'];

    $mysqli->query("UPDATE vozidla SET nazov='$nazov', popis='$popis', img_path='$obrazok', najazd='$najazd', cena='$cena' WHERE id=$id") or
            die($mysqli->error);

    header("location: ../admin.php");
}