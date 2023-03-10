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
    
    $id_anggota = $_GET['id_anggota'];

    $sql = ("SELECT * FROM anggota WHERE id_anggota = '$id_anggota'");
    $result = $conn->query($sql);

    $result= $result->fetch_assoc();

?>

        <div class="container">
            <div class="row mt-5">
               
                <form action="ubah_data_anggota.php" method="POST"> 
                    <input type="hidden" name="id_anggota" value="<?php echo $result['id_anggota']?>"> 
                        <div class="mb-3">
                            <label class="form-label">nama lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $result['nama_lengkap']?>"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">tempat tinggal</label>
                            <input type="text" name="tempat_tinggal" class="form-control" value="<?php echo $result['tempat_tinggal']?>"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">tanggal lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $result['tanggal_lahir']?>"></label>
                        </div>         
                    <button name="simpan" value="stok" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>