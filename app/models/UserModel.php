<?php

    class UserModel extends Model {

        protected $__table = 'blog_user';
        public $_primarykey = 'n_user_id';

        public $_columns = [
            'n_user_id',
            'v_username',
            'v_password',
            'v_fullname',
            'v_phone',
            'v_email',
            'v_image',
            'v_message',
            'd_date_updated',
            'd_time_updated',
        ];

        function __construct() {
            parent::__construct();
        }

    }