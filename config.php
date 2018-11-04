<?php
    #define('ROOT_URL', 'index.php');
    #define('BASE_URL', 'signup.php');
    #define('BOOT_URL', 'boot.php');
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','8704');
    define('DB_BASE','shit');
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_BASE);
    if (mysqli_connect_errno()) {
        echo "connection failed".mysqli_connect($conn);
    }
    



