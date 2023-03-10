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
   
    $id_buku = $_POST['id_buku'];
    $id_anggota = $_POST['id_anggota'];

    $sql = "UPDATE peminjaman SET id_anggota = '$id_anggota' , tanggal_dipinjam = 'now()' WHERE id_buku = '$id_buku'";
    $result= mysqli_query($conn, $sql);
    ?>
      <div class="container">
            <div class="row mt-5">
               
                <form action="upload_peminjaman.php" method="POST"> 
                    <input type="hidden" name="id_buku" value="<?php echo $result['id_buku']?>"> 
                        <div class="mb-3">
                            <label class="form-label">tanggal kembali :</label>
                            <input type="date" name="tanggal_pengembalian" class="form-control" value="<?php echo $result['tanggal_pengembalian']?>"></label>
                        </div>             
                    <button name="simpan" value="stok" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>