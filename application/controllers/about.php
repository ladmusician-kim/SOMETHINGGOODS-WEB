<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends SG_Controller {
    function __construct () {
        parent::__construct();
    }

    public function info()
    {
        $this->__get_views('/_About/info');
    }

    public function agree()
    {
        $this->__get_views('/_About/agree');
    }

    public function policy()
    {
        $this->__get_views('/_About/policy');
    }

    public function service()
    {
        $this->__get_views('/_About/service');
    }
}
