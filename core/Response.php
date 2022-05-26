<?php

    class Response {

        public function redirect($url = '') {
            header('Location: ' . $url);
            exit;
        }

    }