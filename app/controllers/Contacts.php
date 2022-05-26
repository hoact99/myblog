<?php 

    class Contacts extends Controller {

        public $data = [];

        public function index() {
            $model = $this->model('ContactModel');

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
                        $_SESSION['message'] = "Edit contact successfully";
                    }
                }
                 
                // Delete
                if ($_POST['form_name'] == 'delete') {
                    if ($model->delete($_POST[$model->_primarykey])) {
                        $_SESSION['message'] = "Delete contact successfully";
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
                        $_SESSION['message'] = "Create contact successfully";
                    }
                }

                $this->_response->redirect('contacts');

            }

            // Read
            $title = 'Blog Contacts';
            $this->data['sub_content']['dataArr'] = $model->read();
            $this->data['title'] = $title;
            $this->data['content'] = 'pages/contacts';
            
            // Render views
            $this->render($this->_layout, $this->data);
        }

    }