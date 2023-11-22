<?php
    header('Content-type: application/json; charset=utf-8');
    include "conn.php";

    // Example data for 5 sets
    $dataSets = array(
        array('Rosa Aulia', 'jln Utama Raya'),
        array('Evangeline', 'jln Boulveard '),
        array('Nurfajriah', 'jln Perum Raya'),
        array('Nafesha Audrey', 'jln Scientia Convention Center'),
        array('Noveria Clara', 'jln Gading Raya ')
    );

   
    foreach ($dataSets as $data) {
       
        if (isset($data[0]) && isset($data[1])) {
           
            $nama = $data[0];
            $alamat = $data[1];

           
            $q = mysqli_query($conn, "INSERT INTO mahasiswa(Nama, alamat) VALUES('$nama','$alamat')");

            
            $response = array();

            
            if ($q) {
                $response["success"] = 1;
                $response["message"] = "Data berhasil ditambah";
                echo json_encode($response);
            } else {
               
                $response["success"] = 0;
                $response["message"] = "Data gagal ditambah";
                echo json_encode($response);
            }
        } else {
           
            $response["success"] = -1;
            $response["message"] = "Data kosong";
            echo json_encode($response);
        }
    }
?>
