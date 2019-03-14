<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api_controller extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
        $this->load->model('stud_model');
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, OPTIONS, POST");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
//        header("Access-Control-Allow-Methods: GET");
//        header("Access-Control-Allow-Methods: POST");
    }
    public function index(){
        $data=$this->stud_model->get();
//        print_r($data['records']);
        echo json_encode($data['records']);

    }
    public function add_stud_view(){
        $this->load->view('stud_add');
    }
    public function add_stud()
    {
        //$this->load->view('welcome_message');
        $data = array(
            'snm' => $this->input->post('snm'),
            'saddress' => $this->input->post('saddress'),
            'smob' => $this->input->post('smob'),
        );

        $this->stud_model->insert($data);
        //$this->index();
        echo json_encode('done');
    }
    public function delete_stud(){
        $roll_no = $this->uri->segment('3');
        $this->stud_model->delete($roll_no);
        echo json_encode('done');
    }
    public function update_stud(){
        $roll_no = $this->uri->segment('3');
        $data = array(
            'snm' => $this->input->post('snm'),
            'saddress' => $this->input->post('saddress'),
            'smob' => $this->input->post('smob'),
        );
        $this->stud_model->update($data,$roll_no);
        echo json_encode('done');
    }
}
