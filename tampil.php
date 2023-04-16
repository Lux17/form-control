<?php
//session
session_start();


//tampil get
$nama = $_GET['nama'];
$dosen = $_GET['dosen'];
$mk = $_GET['mk'];
$_SESSION['name'] = $nama; 

//setcookie
setcookie("name", $nama, time()+3600); /* expire in 1 hour */

if (isset($_GET['submit'])) {

    echo "<h2>Nama Anda : <b>$nama</b> <br></h2>";
    echo "<h2>Mata Kuliah : <b>$mk</b> <br></h2>";
    echo "<h2>Nama Dosen : <b>$dosen</b></h2>";

}else{
    echo "Anda Belum Memasukan Input.";
}

if(isset($_COOKIE['name'])) {
    echo "==================================================";
    echo "<h1>Cookie 'name' ada. Isinya : " . $_COOKIE['name'];
} else {
    echo "==================================================";
    echo "<h1>Cookie 'name' TIDAK ada.</h1>";
    echo "<a href='index.php' '> Kembali </a>";
}

if(isset($_SESSION['name'])) {
    echo "<br>==========================";
    echo "<h1>Session 'name' ada. Isinya : " .$_SESSION['name'];
} else {
    echo "<br>==========================";
    echo "<h1>Session 'name' TIDAK ada.</h1>";
    echo "<a href='index.php' '> Kembali </a>";
}

?>