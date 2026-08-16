<?php 
    // koneksi ke database
    // struktur => ("nama host", "username mysql", "password mysql", "database")
    $db = mysqli_connect("localhost", "root", "", "r2uh2");

    function query($query){
        global $db;
        $result = mysqli_query($db, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $db;
        // ambil data dari setiap elemen dalam form
        $nama = htmlspecialchars($data["nama"]);
        $jenis = $data["jenis"];
        $menu = $data["menu"];
        $harga = htmlspecialchars($data["harga"]);
        $jumlah = htmlspecialchars($data["jumlah"]);

        // query insert data
        $query = "INSERT INTO restoran VALUES
                    (NULL, '$nama', '$jenis', '$menu', '$harga', '$jumlah')
                ";
        mysqli_query($db, $query);

        return mysqli_affected_rows($db);
    }

    function hapus($kode){
        global $db;
        mysqli_query($db, "DELETE FROM restoran WHERE kode_pelanggan = $kode");
        return mysqli_affected_rows($db);
    }

    function edit($data){
        global $db;
        // ambil data dari setiap elemen dalam form
        $kode = $data["kode"];
        $nama = htmlspecialchars($data["nama"]);
        $jenis = $data["jenis"];
        $menu = $data["menu"];
        $harga = htmlspecialchars($data["harga"]);
        $jumlah = htmlspecialchars($data["jumlah"]);

        // query update data
        $query = "UPDATE restoran SET
                    nama_pelanggan = '$nama',
                    jenis_pemesanan = '$jenis',
                    menu_pesanan = '$menu',
                    harga = '$harga',
                    jumlah = '$jumlah'
                    WHERE kode_pelanggan = $kode
        ";
        mysqli_query($db, $query) or die(mysqli_error($db));

        return mysqli_affected_rows($db);
    }

    function cari($keyword){
        $query = "SELECT * FROM restoran
                    WHERE
                    nama_pelanggan LIKE '%$keyword%' OR
                    jenis_pemesanan LIKE '%$keyword%' OR
                    menu_pesanan LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%' OR
                    jumlah LIKE '%$keyword%'
        ";

        return query($query);
    }
?>