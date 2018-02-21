<?php
    class Logs{
        static function save($user, $activity) {
            $con = new mysqli(Config::$db_server, Config::$db_username, Config::$db_password, Config::$db_name);
            $sql = "INSERT INTO `inform_logs`(`user`,`activity`,`date`,`time`) VALUES (?,?,?,?)";
            $stmt = $con->prepare($sql);
            $date = date("Y-m-d");
            $time = date("h:i:sa");
            $stmt->bind_param("ssss", $user, $activity, $date, $time);
            $stmt->execute();
            $stmt->close();
            $con->close();
        }
    }
?>