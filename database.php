<?php
    class Database {
        private $host;
        private $user;
        private $password;
        private $database;
        private $connection;

        public function __construct($host, $user, $password, $database) {
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
            $this->database = $database;

            $this->connect();
        }

        private function connect() {
            $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);

            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }
        }

        public function query($sql) {
            return $this->connection->query($sql);
        }

        // Other database-related methods can be added here
    }
?>
