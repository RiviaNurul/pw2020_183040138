<?php 
    function koneksi(){
        $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal!");
        mysqli_select_db($conn, "pw_183040138") or die ("Database salah!");

        return $conn;
    }

    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");

        $row = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }

?>