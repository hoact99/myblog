<?php 

    // Base Model
    class Model extends Database {

        protected $_db;
        protected $_table;
        protected $_columns;
        protected $_primarykey;

        public function __construct() {
            $database = new Database();
            $this->_db = $database->connect();
        }

        public function read() {
            $sql = "SELECT * FROM $this->_table";

            $stmt = $this->_db->prepare($sql);
            $stmt->execute();

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $rows;
        }

        public function read_single() {
            // Create query
            $sql = "SELECT * FROM $this->_table WHERE $this->_primarykey = :$this->_primarykey";

            // Prepare statement
            $stmt = $this->_db->prepare($sql);

            // Bind data
            $stmt->bindParam(":$this->_primarykey", $this->__primarykey);

            // Execute query
            $stmt->execute();

            // Fetch
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row;
        }

        public function create() {
            $this->_columns['d_date_created'] = date("Y/m/d", time());
            $this->_columns['d_time_created'] = date("h:i:s", time());

            $setParams = '';

            foreach ($this->_columns as $key => $value) {
                $setParams .= $key . ' = :' . $key . ',';
            }
            $setParams = rtrim($setParams, ',');

            // Create query
            $sql = "INSERT INTO $this->_table 
                    SET $setParams";

            
            // Prepare statement
            $stmt = $this->_db->prepare($sql);

            // Clean data
            foreach ($this->_columns as $key => $value) {
                $this->_columns[$key] = htmlspecialchars(strip_tags($value));
            }

            // Bind data
            foreach ($this->_columns as $key => &$value) {
                $stmt->bindParam(":$key", $value);
            }

            // Execute query
            if ($stmt->execute()) {
                return true;
            }

            // Print error if something goes wrong
            printf("Error: %s\n", $stmt->error);
            return false;
        }

        public function update() {

            $setParams = '';

            foreach ($this->_columns as $key => $value) {
                $setParams .= $key . ' = :' . $key . ',';
            }
            $setParams = rtrim($setParams, ',');

            // Create query
            $sql = "UPDATE $this->_table 
                    SET $setParams
                    WHERE $this->_primarykey = :$this->_primarykey";

            // Prepare statement
            $stmt = $this->_db->prepare($sql);

            // Clean data
            foreach ($this->_columns as $key => $value) {
                $this->_columns[$key] = htmlspecialchars(strip_tags($value));
            }

            // Bind data
            foreach ($this->_columns as $key => &$value) {
                $stmt->bindParam(":$key", $value);
            }

            // Execute query
            if ($stmt->execute()) {
                return true;
            }

            // Print error if something went wrong
            printf("Error: %s\n", $stmt->error);
            return false;
        }

        public function delete($id) {
            // Create query
            $sql = "DELETE FROM $this->_table 
                    WHERE $this->_primarykey = :$this->_primarykey";

            // Prepare statement
            $stmt = $this->_db->prepare($sql);

            // Clean data
            $id = htmlspecialchars(strip_tags($id));

            // Bind data
            $stmt->bindParam("$this->_primarykey", $id);

            // Execute query
            if ($stmt->execute()) {
                return true;
            }

            // Print error if something goes wrong
            printf("Error: %s\n", $stmt->error);
            return false;
        }

    }