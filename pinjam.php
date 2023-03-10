<?php require_once("auth.php");?>
<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
                     
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    include './koneksi.php';
    
    $id_buku = $_GET['id_buku'];

    $sql = ("SELECT * FROM buku WHERE id_buku = '$id_buku'");
    $result = $conn->query($sql);

    $result= $result->fetch_assoc();

?>

<?php
$sql = "SELECT * FROM anggota";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        
        echo 
        "<br>
        <div class='container'>
         
                  

                    <div class='card' style='width: 100%;'>
                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item'><h6>nama anggota:</h6>  $baris[1]</li>
                            <li class='list-group-item'><h6>tempat tinggal:</h6> $baris[2]</li>
                            <li class='list-group-item'><h6>tanggal lahir :</h6> $baris[3]</li>
                            <li class='list-group-item'><h6><a href='update_pinjam.php?id_anggota=$baris[0]?id_buku=$id_buku' class='btn btn-warning btn-sm'>pinjam</a></li>
                        </ul>
                    </div>    
        </div>  
        ";
        
        $a++;
        
    }
    $conn->close();
?>