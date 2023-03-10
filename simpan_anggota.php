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

    if(isset($_POST['simpan'])){
        $nama_lengkap = $_POST['nama_lengkap'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $tempat_tinggal = $_POST['tempat_tinggal'];
        
        $sql = "INSERT INTO anggota (nama_lengkap , tempat_tinggal , tanggal_lahir) value ('$nama_lengkap','$tempat_tinggal','$tanggal_lahir');";
        $result= mysqli_query($conn, $sql);
        if($result){
            echo "<div class='alert alert-primary alert-success' role='alert'> <a href='tampil.php' >Kembali</a> <br>pendaftaran berhasil</div>";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $conn->close();

?>