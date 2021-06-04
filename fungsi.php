<?php 
//koneksi ke DB
    $conn = mysqli_connect("localhost", "root", "", "undian");

//fungsi query
    function query($sql){
        global $conn;
        $hasil = mysqli_query($conn, $sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($hasil)) {
            $data[] = $row;
        }
        return $data;
    }

//Fungsi update
    function update($perintah){
    	global $conn;
    	mysqli_query($conn, $perintah);
    }

?>