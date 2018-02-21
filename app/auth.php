<?php
    session_start();
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $ip_address = $_SERVER["REMOTE_ADDR"]; 
    include("config.php");
    include("logs.php");

    class Authenticate{
        private $username;
        private $password;

        function __construct($username, $password) {
            //assign values
            $this->username = $username;
            $this->password = $password;

            //connect to database
            $con = new mysqli(Config::$db_server, Config::$db_username, Config::$db_password, Config::$db_name);
            
            //prepare SQL query
            $sql = "SELECT * FROM `inform_users` WHERE `username` = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("s", $this->username);

            //execute query
            $stmt->execute();

            //get result
            $result = $stmt->get_result();

            //check if result
            if($result->num_rows === 0) {
                Logs::save($this->username, "Wrong username");
                echo 0;
            } else {
                $row = $result->fetch_assoc();
                if(password_verify($this->password, $row["password"])) {
                    Logs::save($row["username"], "Successful login");
                    $_SESSION["username"] = $row["username"];
                    echo 1;
                } else {
                    Logs::save($row["username"], "Wrong password");
                    echo 0;
                }
            }

            //close prepared statement and connection
            $stmt->close();
            $con->close();
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(empty($_POST["username"]) || empty($_POST["password"])) {
            Logs::save($user_agent." ".$ip_address, "Unauthorized request");
            echo 2;
        } else {
            $app = new Authenticate($_POST["username"], $_POST["password"]);
        }
    } else {
        Logs::save($user_agent." ".$ip_address, "Unauthorized request");
        echo 3;
    }
?>