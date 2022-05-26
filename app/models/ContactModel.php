<?php

    class ContactModel extends Model {

        protected $_table = 'blog_contact';
        public $_primarykey = 'n_contact_id';

        public $_columns = [
            'n_contact_id',
            'v_fullname',
            'v_email',
            'v_phone',
            'v_message',
            'd_date_created',
            'd_time_created',
            'f_contact_status',
        ];

        function __construct() {
            parent::__construct();
        }

        

    }