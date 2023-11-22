<?php
    header('Content-type:application/json;charset=utf-8');
    include "conn.php";

    if(isset($_POST['id']) && isset($_POST['nama']) && isset($_POST['alamat'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

    $q=mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', alamat='$alamat' WHERE id='$id'");
    $response = array();

    if($q){
        $response["success"] = 1;
        $response["message"]  = "Data berhasil diupdate";
        echo json_encode($response);
    }

    elsef{
        $response["success"] = 0;
        $response ["message"] = "Data gagal diupdate";
        echo  json_encode($response);
    }
}
elsef{
$response["success"] = -1;
$response["message"] = "Data kosong";
echo  json_encode($response);
}
?>