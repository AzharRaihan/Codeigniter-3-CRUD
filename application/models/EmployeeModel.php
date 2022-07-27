<?php

class EmployeeModel extends CI_Model
{

  public function employeeLists()  
  {  
    $query = $this->db->get('employee');  
    return $query;  
  }  
  public function storeEmployee($data)
  {
    return $this->db->insert('employee', $data);
  }
  public function editEmployee($id)
  {
    $getId = $this->db->get_where('employee', ['id'=> $id]);
    return $getId->row();
  }
  public function updateEmployee($data, $id)
  {
    return $this->db->update('employee', $data, ['id'=> $id]);
  }
  public function deleteEmployee($id)
  {
    return $this->db->delete('employee', ['id'=> $id]);
  }
}