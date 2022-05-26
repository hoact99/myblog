<?php

    class CommentModel extends Model {

        protected $_table = 'blog_comment';
        public $_primarykey = 'n_blog_comment_id';

        public $_columns = [
            'n_blog_comment_id',
            'n_blog_comment_parent_id',
            'n_blog_post_id',
            'v_comment_author',
            'v_comment_author_email',
            'v_comment',
            'd_date_created',
            'd_time_created',
        ];

        function __construct() {
            parent::__construct();
        }
        
    }