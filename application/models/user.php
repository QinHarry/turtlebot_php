<?php
/**
 * * User Model
 * */



class User
{

    private static $mysqli = null;
    function __construct(){
        mZelf::$mysqli = new mysqli("localhost", "qin", "123", "turtlebot");
        if (mysqli_connect_errno()){
            printf ('Could not connect:' . mysqli_connect_error());
            exit();
        }

    }

    function __destruct(){
        self::$mysqli->close();
    }

    public static function insert($name, $password){
        if(self::$mysqli == null){
            self::$mysqli = new mysqli("localhost", "qin", "123", "turtlebot");
        }
        $query = "INSERT INTO `user` (`username`, `password`) VALUES (?, ?)";
        $stmt = self::$mysqli->prepare($query);
        $stmt->bind_param("ss", $name, $password);
        $stmt->execute();
        $stmt->close();
    }

    public static function getOne($name, $password){
        if(self::$mysqli == null){
            self::$mysqli = new mysqli("localhost", "qin", "123", "turtlebot");
        }
        $query = "SELECT `username`, `password` from `user` where `username`='$name' AND `password`='$password'";
        if ($result = self::$mysqli->query($query)){
            if($row = $result->fetch_row()){
                return true;
            }
        }
        return false;

    }


    public static function getPositionId($name){
        if(self::$mysqli == null){
            self::$mysqli = new mysqli("localhost", "qin", "123", "turtlebot");
        }

        $query = "SELECT `position_id` from `user` where `username` = '$name'";
        if($result = self::$mysqli->query($query)){
            if($row = $result->fetch_row()){
                return $row[0];
            }
        }
        return 0;
    }


}

