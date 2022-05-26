<?php 

    class WriteBlog extends Controller {

        public function index() {
            $title = 'Write A Blog';
            $this->data['sub_content']['dataArr'] = [];
            $this->data['title'] = $title;
            $this->data['content'] = 'pages/writeblog';
            
            // Render views
            $this->render($this->_layout, $this->data);
        }

    }