<?php
class Delete_category extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('category');

    }

    public function index()
    {
        $result['category'] = $this->category->get_category_list();
        $this->load->view('admin/header', $result);
        $this->load->view('admin/category/view_category');
        $this->load->view('admin/footer');
    }

    public function delete_category_form()
    {

        $this->load->view('admin/header');
        $this->load->view('admin/category/delete_a_category');
        $this->load->view('admin/footer');
    }

    public function delete_category()
    {   /*$this->db->select('category_id');
        $this->db->from('db_voguish-villa');
        $query = $this->db->get();
        */
        $data = array(
            'category_id' => $this->input->post('category_id'));//pass category name to model category
        $result = $this->category->category_delete($data);//pass value to model function
        if ($result) {
            redirect('admin/delete_category');
        }
    }
}