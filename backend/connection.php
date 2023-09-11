<?php

//Here we can make the connection with the db, in this case I use MySQL Workbench

Class Connection
{
    const DB_SERVER = "localhost"; //server name
    const DB_USERNAME = "root"; //server user
    const DB_PASSWORD = "1423"; //server pass
    const DB_NAME = "db_test"; //name of the schema i will use

    public function connect()
    {
        //send the parameters of connection
        $server = self::DB_SERVER;
        $user = self::DB_USERNAME;
        $pass = self::DB_PASSWORD;
        $db = self::DB_NAME;
        $connection = mysqli_connect($server, $user, $pass, $db) or die ("connection error");
       
        return $connection;
    }
    public function disconnect($connection)
    {
       
        mysqli_close($connection);
    }
}

