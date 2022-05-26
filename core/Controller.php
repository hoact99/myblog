<?php

    class Controller {
        
        protected $_layout = 'admin_layout';
        public $db;
        protected $_request;
        protected $_response;

        public function __construct() {
            $this->_request = new Request();
            $this->_response = new Response();
        }

        public function model($model) {
            if (file_exists(FILE_ROOT . '/app/models/' . $model . '.php')) {
                require_once FILE_ROOT . '/app/models/' . $model . '.php';
                if (class_exists($model)) {
                    return new $model();
                }
            }
            return false;
        }

        public function render($view, $data = []) {
            if (!empty($data)) {
                extract($data);
            }

            if (file_exists(FILE_ROOT . '/app/views/' . $view . '.php')) {
                require_once FILE_ROOT . '/app/views/' . $view . '.php';
            }
            
        }

    }