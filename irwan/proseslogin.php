<?php
session_start();
include ("koneksi.php");
date_default_timezone_set('Asia/Jakarta');
$username = $_POST['username'];
$password = md5($_POST['password']);
$query = "SELECT * FROM admin WHERE username = '$username' and password='$password'";
$hasil = mysqli_query($db, $query);
$data_user = mysqli_fetch_assoc($hasil);
if ($data_user != null) {
    if ($password == $data_user['password']) {
        $_SESSION['user'] = $data_user;
        if ($data_user['level'] == 'admin') {
            $_SESSION['id'] = $data_user['id'];
            $_SESSION['username'] = $username;
            header('Location: admin/dashboard.php');
        }
        else {
          echo "<script type='text/javascript'>
          alert('Username Atau Password Anda Salah!');
          history.back(self);
          </script>";
        }
    } else {
        echo "<script type='text/javascript'>
          alert('Username Atau Password Anda Salah!');
          history.back(self);
          </script>";
    }
} 
else if($data_user == null){
$query2 = "SELECT * FROM ami WHERE username = '$username'";
  $hasil2 = mysqli_query($db, $query2);
  $data_user2 = mysqli_fetch_assoc($hasil2);
  if ($data_user2 != null) {
      if ($password == $data_user2['password']) {
          $_SESSION['user'] = $data_user2;
          if ($data_user2['level'] == 'ami') {
            $_SESSION['id'] = $data_user2['id'];
            $_SESSION['nama'] = $data_user2['nama'];
            $_SESSION['username'] = $username;
            header('Location: ami/dashboard.php');
        }
        else {
          echo "<script type='text/javascript'>
          alert('Username Atau Password Anda Salah!');
          history.back(self);
          </script>";
        }
    } else {
        echo "<script type='text/javascript'>
          alert('Username Atau Password Anda Salah!');
          history.back(self);
          </script>";
    }
}else{
 $query2 = "SELECT * FROM spmi WHERE username = '$username'";
  $hasil2 = mysqli_query($db, $query2);
  $data_user2 = mysqli_fetch_assoc($hasil2);
  if ($data_user2 != null) {
      if ($password == $data_user2['password']) {
          $_SESSION['user'] = $data_user2;
          if ($data_user2['level'] == 'spmi') {
            $_SESSION['id'] = $data_user2['id'];
            $_SESSION['nama'] = $data_user2['nama'];
            $_SESSION['username'] = $username;
            header('Location: spmi/dashboard.php');
          }
          else {
            echo "<script type='text/javascript'>
            alert('Username Atau Password Anda Salah!');
            history.back(self);
            </script>";
          }
      } else {
          echo "<script type='text/javascript'>
            alert('Username Atau Password Anda Salah!');
            history.back(self);
            </script>";
      }
  }else {
      echo "<script type='text/javascript'>
            alert('Akun anda tidak terdaftar pada sistem!');
            history.back(self);
            </script>";
      }
  }
}

else {
    echo "<script type='text/javascript'>
          alert('Akun anda tidak terdaftar pada sistem!');
          history.back(self);
          </script>";
    }
?>