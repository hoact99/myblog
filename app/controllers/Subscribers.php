<?php 

    class Subscribers extends Controller {

        public $data = [];

        public function index() {
            $model = $this->model('SubscriberModel');

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
                        $_SESSION['message'] = "Edit subscriber successfully";
                    }
                }
                 
                // Delete
                if ($_POST['form_name'] == 'delete') {
                    if ($model->delete($_POST[$model->_primarykey])) {
                        $_SESSION['message'] = "Delete subscriber successfully";
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
                        $_SESSION['message'] = "Create subscriber successfully";
                    }
                }

                $this->_response->redirect('subscribers');

            }

            // Read
            $title = 'Blog Subscribers';
            $this->data['sub_content']['dataArr'] = $model->read();
            $this->data['title'] = $title;
            $this->data['content'] = 'pages/subscribers';
            
            // Render views
            $this->render($this->_layout, $this->data);
        }

    }