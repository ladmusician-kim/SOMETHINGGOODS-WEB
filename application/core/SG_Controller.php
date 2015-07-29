<?php
class SG_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        if(!$this->input->is_cli_request())
            $this->load->library('session');

        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
    }

    function __get_views($viewStr, $data = null) {
        $this->load->view('_Layout/header.php');
        $this->load->view('_Layout/nav.php');

        if ($data != null) {
            $this->load->view($viewStr, $data);
        } else {
            $this->load->view($viewStr);
        }

        $this->load->view('_Layout/footer.php');
    }

    function __require_login($return_url = "") {
        // 로그인이 되어 있지 않다면 로그인 페이지로 리다이렉션
        if(!$this->session->userdata('is_login')){
            if ($return_url == "") {
                redirect('/Auth/login');
            }
            redirect('/Auth/login?returnURL='.rawurlencode($return_url));
        }
    }

    // 로그인이 되어 있지 않다면 로그인 페이지로 리다이렉션
    function __require_admin_login($return_url = "") {
        if(!$this->session->userdata('is_login')){
            if ($return_url == "") {
                redirect('/Auth/login');
            }
            redirect('/Auth/login?returnURL='.rawurlencode($return_url));
        }

        if (!$this->session->userdata('is_admin')) {
            if ($return_url == "") {
                redirect('/Home/index');
            }
            redirect(rawurlencode($return_url));
        }
    }
}