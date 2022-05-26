<?php

    class TagModel extends Model {

        protected $__table = 'blog_tags';
        public $_primarykey = 'n_tag_id';

        public $_columns = [
            'n_tag_id',
            'n_blog_post_id',
            'v_tag',
        ];

        function __construct() {
            parent::__construct();
        }

    }