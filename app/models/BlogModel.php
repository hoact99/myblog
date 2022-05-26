<?php 

    class BlogModel extends Model {

        protected $_table = 'blog_post';
        public $_primarykey = 'n_blog_post_id';

        public $_columns = [
            'n_blog_post_id' => '',
            'n_category_id' => '',
            'v_post_title' => '',
            'v_post_meta_title' => '',
            'v_post_path' => '',
            'v_post_summary' => '',
            'v_post_content' => '',
            'v_main_image_url' => '',
            'v_alt_image_url' => '',
            'n_blog_post_views' => '',
            'n_home_page_place' => '',
            'f_post_status' => '',
            'd_date_created' => '',
            'd_time_created' => '',
            'd_date_updated' => '',
            'd_time_updated' => '',
        ];

        function __construct() {
            parent::__construct();
        }

    }