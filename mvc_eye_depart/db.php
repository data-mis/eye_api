<?php

    $servername = "11.0.0.1";
    $username = "root";
    $password = "istyle8885";
    $dbname = "eye_depart";
    
    // Create connection
    global $conn;
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    mysqli_query($conn,"set names tis620");
    mysqli_query($conn,"set character_set_results=utf8");
    mysqli_query($conn,"set character_set_client=utf8");
    mysqli_query($conn,"set character_set_connection=utf8");
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    function dbQuery($sql) {
        global $conn;
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        return $result;
    }

    function dbFetchAssoc($result) {
        return mysqli_fetch_assoc($result);
    }
    
    function dbNumRows($result) {
        return mysqli_num_rows($result);
    }
    
    function closeConn() {
        mysqli_close($dbConn);
    }
?>