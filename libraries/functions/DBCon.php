<?php
    function connectDatabase() {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "kenha innovation portal";

        $con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        if ($con->connect_error) {
            error_log("Database connection failed: " . $con->connect_error);
            die("Connection to the database has failed: " . $con->connect_error);
        }

        return $con;
    }
?>