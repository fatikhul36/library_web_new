<?php 

include "./koneksi.php";

if(isset($_POST['Login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username='$username' OR email='$username'";
    
    $user = mysqli_query($conn, $sql);
    $verify = mysqli_query($conn, "SELECT password FROM users WHERE username='$username' OR email='$username'");

    // jika user terdaftar
    if($user){
        // verifikasi password
        $row = mysqli_fetch_assoc($user);
        $hashed_password = $row['password'];
        
        // Verify the user's password using the password_verify() function
        if (password_verify($password, $hashed_password)) {
            // The password is correct, set session variables and redirect to dashboard page
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        
        } else {
            // The password is incorrect, show an error message
            $error = "Invalid password.";
        
        };
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>