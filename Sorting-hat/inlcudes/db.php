<?php
    function connectWithDatabase() {
        // MySql credentials
        $db_host = 'localhost';
        $db_user = 'root';
        $db_password = 'root';
        $db_db = 'sortinghat';
        // Make the connection
        $connection = mysqli_connect(
            $db_host,
            $db_user,
            $db_password,
            $db_db
          );
        // Check if connections works
        if ($connection == false) {
            die("Connection failed");
        }

        return $connection;
    }

    function closeConnection($connection) {
        $connection->close();
    }

    function getQuery($sql) {
        // Connection with database
        $connection = connectWithDatabase();

        // Sql query uitvoeren
        $items = mysqli_query($connection, $sql);

        // Connection gaan sluiten 
        closeConnection($connection);

        // Een resultaat gaan teruggeven 
        return $items->fetch_all(MYSQLI_ASSOC);
    }

    function insertQuery($sql) {
        // Connection with database
        $connection = connectWithDatabase();

        // Sql query uitvoeren
        $status = mysqli_query($connection, $sql);
        

        // Connection gaan sluiten 
        closeConnection($connection);

        // Een resultaat gaan teruggeven
        return $status;
    }