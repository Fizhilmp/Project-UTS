<?php
include '../model/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
$db->input($_POST['nama'],$_POST['asal'],$_POST['tujuan'],$_POST['tanggal'],$_POST['kelas']);
header("location: ../view/tampil.php");
}
elseif($aksi=="add"){
    $db->input($_POST['nama'],$_POST['asal'],$_POST['tujuan'],$_POST['tanggal'],$_POST['kelas']);
header("location: ../view/admin.php");
}
elseif($aksi=="adduser"){
    $db->inputuser($_POST['username'],md5($_POST['password']),$_POST['email']);
    header("location: ../view/user.php");
}
elseif($aksi=="registrasi"){
    $db->inputuser($_POST['username'],md5($_POST['password']),$_POST['email']);
    header("location: ../view/login.php");
}
elseif ($aksi == "hapus") {
$db->hapus($_GET['id']);
header("location: ../view/admin.php");
}
elseif ($aksi == "hapususer") {
    $db->hapususer($_GET['id']);
    header("location: ../view/user.php");
}
elseif ($aksi == "edit") {
$db->update($_POST['id'],$_POST['nama'],$_POST['asal'],$_POST['tujuan'],$_POST['tanggal'],$_POST['kelas']);
header("location: ../view/admin.php");
}
elseif ($aksi == "edituser") {
    $db->updateuser($_POST['id'],$_POST['username'],md5($_POST['password']),$_POST['email']);
    header("location: ../view/user.php");
}
elseif($aksi == "login"){
    if($_POST['username'] == "admin") {
        header("Location:../view/admin.php");
    }

    else {
        foreach ($db->tampil() as $u ) {
            if($_POST['username'] == $u['username'] && md5($_POST['password']) == $u['password']) {
                header("Location:../view/input.php");
                break;
            }
            else {
                header("Location:../view/login.php");
            }
        }
    }
}
elseif($aksi == "logingoogle") {
    include("../controller/config.php");
        if(isset($_SESSION['acces_token'])){
            $google_client->setAccessToken($_SESSION['access_token']);
        }
        elseif (isset($_GET['code'])) {
            $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
            $_SESSION['access_token'] = $token;
        }

        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo_v2_me->get();
        $_SESSION['email'] = $data['email'];
        $_SESSION['username'] = $data['name'];
        $password=10;
        $db->inputuser($_SESSION['username'], $password,$_SESSION['email']);
    foreach ($db->tampil() as $u ) {
        if($_SESSION['email'] == $u['email']) {
            header("Location:../view/input.php");
            break;
        }

        else {
            header("Location:../view/registrasi.php");
        }
    }
}
?>