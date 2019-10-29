<?php 

class Regist_model extends CI_Model
{
	
public function __construct()
{
	
$this->load->database();	
	
}
	
//最初の仮登録 artist_tableに保管する
public function sub($id)
{
  
   $artpass=$this->input->post('artpass');
   $artpass_hash = password_hash($artpass, PASSWORD_DEFAULT);
   $data = array(
        'name' => $this->input->post('name'),
        'artpass' => $artpass_hash,
	   'id' => $id,
        'area' => $this->input->post('area'),
	   'bandmail' => $this->input->post('bandmail')
	   
    );

    return $this->db->insert('artist', $data);
	return $id;
	
}	
	
//メールのIDを使って登録名を引き出すコントローラーでGetの登録名を検証
public function check()
{
  
$id=$this->input->get('id');
$query = $this->db->get_where('artist',array('id' => $id ));
return $query->row_array();
}	
	
//ここから本登録を開始　テーブルはartist_tunebaseとなる
public function first()
{
  
   $id=$this->input->get('id');
   $query = $this->db->get_where('artist',array('id' => $id ));
   $artist = $query->row_array();

    return $this->db->insert('artist_tunebase', $artist);
	
}	

//imagepathのデータベース格納
public function image($path)
{
  
   $id=$this->input->post('id');
   $path=base_url("bandimage/$path");
   $data = array(
        'imagepath' => $path
);

$this->db->where('id', $id);
$this->db->update('artist_tunebase', $data);
	
}	
	
//さらに登録
public function second()
{
  
   $id=$this->input->post('id');
   $area=$this->input->post('area');
   $name=$this->input->post('name');
   $tagname=$this->input->post('tagname');
   $data = array(
        'tagname' => $tagname,
	    'area' => $area,
	    'name' => $name,

);

$this->db->where('id', $id);
$this->db->update('artist_tunebase', $data);
	
}	
	
public function regist_end()
{
  
   $id=$this->input->post('id');
   $tube1=$this->input->post('tube1');
	 $tube2=$this->input->post('tube2');
	 $tube3=$this->input->post('tube3');
	 $twitter=$this->input->post('twitter');
	$instagram=$this->input->post('instagram');
	$hp=$this->input->post('hp');
	$timeline=$this->input->post('timeline');
	
   $data = array(
        'tube1' => $tube1,
	      'tube2' => $tube2,
	      'tube3' => $tube3,
	    'twitter' => $twitter,
	    'instagram' => $instagram,
	   'hp' => $hp,
	    'timeline' => $timeline


);

$this->db->where('id', $id);
$this->db->update('artist_tunebase', $data);
	
}	
	
	
	
}








?>
