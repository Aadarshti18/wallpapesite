<?php
session_start();
include "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['pwd'])) {
        $email = $_POST['email'];
        $pwd = md5($_POST['pwd']);

        if ($con) {
            $sql = "SELECT * FROM admin WHERE email='$email' AND pwd='$pwd'";
            $result = mysqli_query($con, $sql);
            $x = mysqli_num_rows($result);

            if ($x == 1) {
                $_SESSION['email'] = $email;
                header("Location: dashboard.php");
                exit();
            } else {
                echo '<script>
                        alert("Wrong login details");
                        window.location="index.php";
                      </script>';
            }
        } else {
            die("Database connection failed.");
        }
    } else {
        echo '<script>
                alert("Please fill in both fields.");
                window.location="index.php";
              </script>';
    }
} else {
    header("Location: index.php");
    exit();
}
?>
