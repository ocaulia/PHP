<?php
    header('Content-type: application/json; charset=utf-8');
    include "conn.php";

    if(isset($_POST['id'])) {
        $id = $_POST['id'];

        $q = mysqi_query($conn, "DELETE FROM mahasiswa WHERE id='$id'");
        $response = array();

        if($q) {
            $response["success"] = 1;
            $response["message"] = "Data berhasil dihapus";
            echo json_encode($response);
        } else {
            $response["success"] = 0;
            $response["message"] = "Data gagal dihapus";
            echo json_encode($response);
        }
    } else {
        $response["success"] = -1;
        $response["message"] = "Data kosong";
        echo json_encode($response);
    }
?>
