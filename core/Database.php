<?php

    class Database {

        // DB Params
        private $__dsn = "mysql:host=byt3adjecddqfpnhuj91-mysql.services.clever-cloud.com; dbname=byt3adjecddqfpnhuj91";
        private $__username = "ukjs091upjezxrbf";
        private $__password = "cXiAVmralrRtrA6i4IdE";
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