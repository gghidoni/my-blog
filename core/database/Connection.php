<?php 

/*
in this file the connection class is initialized with the parameters 
to set the pdo connection
*/

class Connection {
    public static function make($config) {
        try{
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'], 
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
