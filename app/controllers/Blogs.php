<?php 

    class Blogs extends Controller {

        public $data = [];

        public function index() {
            $model = $this->model('BlogModel');

            if ($this->_request->isPost()) {
                
                // Edit
                if ($_POST['form_name'] == 'edit') {
                    foreach ($model->_columns as $key => $column) {
                        if (isset($_POST[$key])) {
                            $model->_columns[$key] = $_POST[$key];
                        }
                    }
                    unset($model->_columns['d_date_created']);
                    unset($model->_columns['d_time_created']);

                    if ($model->update()) {
                        $_SESSION['message'] = "Edit blog successfully";
                    }
                }
                 
                // Delete
                if ($_POST['form_name'] == 'delete') {
                    if ($model->delete($_POST[$model->_primarykey])) {
                        $_SESSION['message'] = "Delete blog successfully";
                    }
                }
                
                // Create
                if ($_POST['form_name'] == 'create') {
                    foreach ($model->_columns as $key => $column) {
                        if (isset($_POST[$key])) {
                            $model->_columns[$key] = $_POST[$key];
                        }
                    }
                    unset($model->_columns[$model->_primarykey]);
        
                    if ($model->create()) {
                        $_SESSION['message'] = "Create blog successfully";
                    }
                }

                $this->_response->redirect('blogs');

            }

            // Read
            $title = 'Blogs';
            $this->data['sub_content']['dataArr'] = $model->read();
            $this->data['title'] = $title;
            $this->data['content'] = 'pages/blogs';
            
            // Render views
            $this->render($this->_layout, $this->data);
        }

    }