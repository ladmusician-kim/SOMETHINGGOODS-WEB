<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends SG_Controller {
    function __construct () {
        parent::__construct();
    }

    public function index()
    {
        $this->__get_views('/_Home/index');
    }

    function __get_slider_view () {
        $this->load->view('_Partial/main_slider');
    }
}
