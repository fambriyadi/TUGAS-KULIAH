<?php

$ID_PELANGGARAN = $_POST["ID_PELANGGARAN"];
$JENIS_PELANGGARAN =$_POST["JENIS_PELANGGARAN"];
$SANGSI_PELANGGARAN =$_POST["SANGSI_PELANGGARAN"];
echo 'Id :'.$ID_PELANGGARAN;
echo 'Id :'.$JENIS_PELANGGARAN;
echo 'Id :'.$SANGSI_PELANGGARAN;
require_once "../connect.php";

$query = mysqli_query($connect, "INSERT INTO tbpelanggaran VALUE('$ID_PELANGGARAN', '$JENIS_PELANGGARAN', '$SANGSI_PELANGGARAN')");

if($query){
    echo "<script>alert('Data berhasil diinput'); window.location.href = '../index.php'; </script>";
}else{
    echo "<script>alert('Data gagal diinput'); window.location.href = '../index.php'; </script>";
}

?>