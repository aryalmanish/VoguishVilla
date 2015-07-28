<?php
class Homepage_controller extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('form','url'));
        $this->load->model('category_model');

    }

    public function index()
    {$result['category'] = $this->category_model->get_category_list();
        $this->load->view('admin/header',$result);
        $this->load->view('admin/category/view_category');
        $this->load->view('admin/footer');
    }

}