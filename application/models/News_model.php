<?php 

class News_model extends CI_Model
{
	
public function __construct()
{
	
$this->load->database();	
	
}
	

public function get_news($slug = FALSE)
//$slugはデフォルトでFALSEを返す。get_newsに何かしらのデータが引き渡された場合はFALSEを返さない。
{
if(($slug === FALSE))
{
$query = $this->db->get('news');
return $query->result_array();
}

$query = $this->db->get_where('news',array('slug' => $slug ));
return $query->row_array();
	
}
	
public function set_news()
{
  
    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text')
    );
	

$config = array(
    'source_image' => 'images/2.jpg',
    'width' => 800,
    'maintain_ratio' => TRUE,
    'master_dim' => 'width',
);
$this->load->library('image_lib', $config);

$this->image_lib->resize();
    return $this->db->insert('news', $data);
	
}	
	
	
}








?>
