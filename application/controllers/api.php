<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;
class api extends REST_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('stud_model');
    }
    public function get(){
        $data=$this->stud_model->get();
        $this->response($data, 200);

    }
}