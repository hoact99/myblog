<?php

    class SubscriberModel extends Model {

        protected $_table = 'blog_subscriber';
        public $_primarykey = 'n_sub_id';

        public $_columns = [
            'n_sub_id',
            'v_sub_email',
            'd_date_created',
            'd_time_created',
            'f_sub_status',
        ];

        function __construct() {
            parent::__construct();
        }

    }