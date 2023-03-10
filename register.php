<?php

include './koneksi.php';

if(isset($_POST['Register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES ('$name', '$username', '$email', '$password')";


    // eksekusi query untuk menyimpan ke database
    $saved = mysqli_query($conn, $sql);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) 
    {
        header("Location: login_akun.php");
        die();
    } 
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>