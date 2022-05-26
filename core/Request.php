<?php

    class Request {

        public function getMethod() {
            return $_SERVER['REQUEST_METHOD'];
        }

        public function isPost() {
            return $this->getMethod() == 'POST' ? true : false;
        }

        public function isGet() {
            return $this->getMethod() == 'GET' ? true : false;
        }

    }