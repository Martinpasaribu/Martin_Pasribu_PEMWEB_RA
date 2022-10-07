<?php
include "conec.php";

if(isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $detail = $_POST['detail'];


$kirim =  "INSERT INTO data(nama,detail VALUES ('$nama,$detail')";

$result = mysqli_query($conn,$simpan);
if($result){
    echo "<script>alert(' Data berhasil di simpan '); window.location'dataku.php'</script>";

}
}
?>