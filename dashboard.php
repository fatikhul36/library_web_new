<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head> 
</html>

<?php
    include './koneksi.php';
    require_once("auth.php");

    if(isset($_GET['cari-akun'])) {
        include "./cari-akun.php";
    }

    echo 
    
    "
    <div class='container'>
        <div class='row'>
            <nav class='navbar navbar-expand-lg navbar-light bg-white'>
                <div class='container-fluid'>
                    <h1>Data Buku</h1>                   
                    <a href='index.php'>
                        <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal'>
                        Tambah Data Buku
                        </button>
                    </a>
                    <a href='tampil_anggota.php'>
                    <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal'>
                    Data anggota
                    </button>
                    </a>
                    <a href='logout.php'>
                    <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal'>
                    logout
                    </button>
                    </a>
                    <form class='d-flex' role='search' method='post' action='cari.php'>
                        <input type='text' name='cari' class='form-control' placeholder='Cari Data Buku'>
                        &nbsp
                        <button class='btn btn-outline-success' type='submit' value'cari'>Search</button>
                    <form>
                </div>
            </nav>
        </div>
    </div>";

    $sql1 = "SELECT COUNT(*) as count FROM buku";
    $result1 = $conn->query($sql1);
    $sql2 = "SELECT COUNT(*) as count FROM anggota";
    $result2 = $conn->query($sql2);
    echo "<br>
    <div class='container'>
        <div class='card' style='width: 100%;'>
            <h1> Jumlah buku :</h1><br><h1>$result1</h1><br>
            <h1> Jumlah anggota :</h1><br><h1>$result2</h1>
        </div>    
    </div>  
    ";
    $conn->close();
    

?>