<?php 

    class CategoryModel extends Model {

        protected $_table = 'blog_category';
        public $_primarykey = 'n_category_id';

        public $_columns = [
            'n_category_id' => '',	
            'v_category_title' => '',	
            'v_category_meta_title' => '',	
            'v_category_path' => '',	
            'd_date_created' => '',	
            'd_time_created' => '',
        ];

        function __construct() {
            parent::__construct();
        }

    }