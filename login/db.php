<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("sql6.freemysqlhosting.net","sql6587436","J29pAs6qdm","sql6587436");
    $conS = mysqli_connect("db4free.net", "variant", "variant123", "backupuser");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>