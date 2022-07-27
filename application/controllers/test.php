$file_name = $_FILES['photo'];
$new_name = time(). '' . str_replace('', '-', $file_name);
$config = [
  'upload_path' => './uploads/',
  'allowed_types' => 'gif|jpg|png',
  'max_size' => 100,
  'max_width' => 1024,
  'max_height' => 768,
  'file_name' => $new_name,
];  
$this->load->library('upload', $config);   
if (!$this->upload->do_upload('userfile'))
{
  $error = array('error' => $this->upload->display_errors());
  $this->load->view('upload_form', $error);
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
}