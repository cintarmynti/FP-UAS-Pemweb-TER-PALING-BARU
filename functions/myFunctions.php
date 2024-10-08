<?php

    include(__DIR__ . '/../config/dbcon.php'); 

    function redirect($url, $message){
        header('Location: '.$url.'?message='.urlencode($message));
        exit();
    }

    function getAll($table){
        global $conn;
        $query = "SELECT * FROM $table";
        $query_run = mysqli_query($conn, $query);

        if (!$query_run) {
            die("Query error: " . mysqli_error($conn));
        }
        
        return $query_run;
    }

    function getByAduan($table, $nomorAduan){
        global $conn;
        $query = "SELECT * FROM $table WHERE no_aduan = '$nomorAduan'";
        $result = mysqli_query($conn, $query);
        
        if (!$query) {
            die("Query error: " . mysqli_error($conn));
        }
        
        return $result;
    }

    function getById($table, $id){
        global $con;
        $query = "SELECT * FROM $table WHERE id = $id";
        $query_run = mysqli_query($con, $query);
        
        if (!$query_run) {
            die("Query error: " . mysqli_error($con));
        }
        
        return $query_run;
    }

?>