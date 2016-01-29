<?php

class statistic extends CI_Controller {

  function __construct() {
    date_default_timezone_set('Asia/Jakarta');
    parent::__construct();
    $this->load->model('dashboard/model_admin', '', TRUE);
    $this->load->model('dashboard/model_member', '', TRUE);
    $this->load->model('dashboard/model_product', '', TRUE);
    $this->load->model('dashboard/model_order', '', TRUE);
  }

  function index() {
    redirect('/mmcp/statistic/member/');
    die();
  }
  
  function member() {
    //Data
    $content['page'] = "Statistic";
    $content['pagesize'] = 10;

    //JS
    $content['js'][0] = 'js/dashboard/private/statistic_member.js';

    $data['content'] = $this->load->view('dashboard/statistic/member', $content, TRUE);
    $this->load->view('dashboard/template_index', $data);
  }
  
  function product() {
    //Data
    $content['page'] = "Statistic";
    $content['pagesize'] = 10;

    //JS
    $content['js'][0] = 'js/dashboard/private/statistic_product.js';

    $data['content'] = $this->load->view('dashboard/statistic/product', $content, TRUE);
    $this->load->view('dashboard/template_index', $data);
  }
  
  function order() {
    //Data
    $content['page'] = "Statistic";
    $content['pagesize'] = 10;

    //JS
    $content['js'][0] = 'js/dashboard/private/statistic_order.js';

    $data['content'] = $this->load->view('dashboard/statistic/order', $content, TRUE);
    $this->load->view('dashboard/template_index', $data);
  }

}
