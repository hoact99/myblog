<?php

    class Database {

        // DB Params
        private $__dsn = "mysql:host=localhost; dbname=myblog";
        private $__username = "root";
        private $__password = "";
        protected $_conn = null;

        // DB Connect
        public function connect() {
            try {
                $this->_conn = new PDO($this->__dsn, $this->__username, $this->__password);
                $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
            return $this->_conn;
        }

    }