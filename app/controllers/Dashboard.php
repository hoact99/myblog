<?php 

    class Dashboard extends Controller {

        public $data = [];

        public function index() {
            $title = 'Dashboard';
            $this->data['sub_content']['dataArr'] = [];
            $this->data['title'] = $title;
            $this->data['content'] = 'pages/dashboard';
            
            // Render views
            $this->render($this->_layout, $this->data);
        }

    }