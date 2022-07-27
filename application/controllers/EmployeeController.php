<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EmployeeController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('EmployeeModel', 'employee');  
    $this->load->library('form_validation');
    $this->load->helper('form');
  }
  public function lists()
  {
    $data['employee'] = $this->employee->employeeLists();
    $data['title'] = 'Employee Lists';
    $this->load->view('layouts/header', $data);
    $this->load->view('employee/employee-lists', $data);
    $this->load->view('layouts/footer');
  }
  public function addEmployee()
  {
    $data['title'] = 'Add New Employee';
    $this->load->view('layouts/header', $data);
    $this->load->view('employee/add-employee');
    $this->load->view('layouts/footer');
  }
  public function employeeStore()
  {
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('roll', 'Roll', 'required');
    $this->form_validation->set_rules('mobile', 'Mobile', 'required');
    $this->form_validation->set_rules('address', 'Address', 'required');
    if ($this->form_validation->run())
    {
      $file_name = $_FILES['photo']['name'];
      $new_name = time(). '-' . str_replace('', '-', $file_name);
      $config = [
        'upload_path' => './uploads/',
        'allowed_types' => 'jpeg|jpg|png',
        'file_name' => $new_name,
      ];  
      $this->load->library('upload', $config);   
      if (!$this->upload->do_upload('photo'))
      {
        $imageError = array('imageError'=> $this->upload->display_errors());
        $this->load->view('layouts/header');
        $this->load->view('employee/add-employee', $imageError);
        $this->load->view('layouts/footer');
      }
      else
      {
        $file_name = $this->upload->data('file_name');
        $data = [
          'name' => $this->input->post('name'),
          'roll' => $this->input->post('roll'),
          'mobile' => $this->input->post('mobile'),
          'address' => $this->input->post('address'),
          'photo' => $file_name,
        ];
        $this->employee->storeEmployee($data);
        $this->session->set_flashdata('status', 'Data Successfully Added');
        redirect(base_url('employee-lists'));
      }
    }
    else
    {
      $this->addEmployee();
    }
  }
  public function employeeEdit($id)
  {
    $data['title'] = 'Employee Edit';
    $this->load->view('layouts/header', $data);
    $data['employee'] = $this->employee->editEmployee($id);
    $this->load->view('employee/edit-employee', $data);
    $this->load->view('layouts/footer');
  }
  public function employeeUpdate($id)
  {
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('roll', 'Roll', 'required');
    $this->form_validation->set_rules('mobile', 'Mobile', 'required');
    $this->form_validation->set_rules('address', 'Address', 'required');
    if ($this->form_validation->run())
    {
      $data = [
        'name' => $this->input->post('name'),
        'roll' => $this->input->post('roll'),
        'mobile' => $this->input->post('mobile'),
        'address' => $this->input->post('address'),
      ];
      $this->employee->updateEmployee($data, $id);
      $this->session->set_flashdata('status', 'Data Successfully Updated');
      redirect(base_url('employee-lists'));
    }
    else
    {
      $this->employeeEdit($id);
    }
  }
  public function employeeDelete($id)
  {
    if($id)
    {
      $this->employee->deleteEmployee($id);
      redirect(base_url('employee-lists'));
    }
    else
    {
      echo "This Data Not Found, Please Try Again Letter";
    }

  }
}