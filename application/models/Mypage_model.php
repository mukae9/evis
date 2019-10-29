<?php 

class Mypage_model extends CI_Model
{
	
public function __construct()
{
	
$this->load->database();	
	
}
	


public function mypage()
{
  
$mail = $this->input->post('mail');
if($mail==""){$mail=$_SESSION['mail'];}
$artpass = $this->input->post('artpass');
if($artpass==""){$artpass2=$_SESSION['artpass'];}
$artpass2 = password_hash($artpass, PASSWORD_DEFAULT);
$query = $this->db->get_where('artist_tunebase', array('bandmail' => $mail ));

	
if($artpass2 = $query->row_array('artpass'))
{
	
return $query->row_array();
	
}
	
	
}
	
public function profile_ok()
{
$id=$_SESSION['id'];
	
$data = array(
'catch' => $this->input->post('catch'),
'area' => $this->input->post('area'),
'band' => $this->input->post('band'),
'song' => $this->input->post('song'),
'song2' => $this->input->post('song2')
);	
	
	
$this->db->where('id', $id);
return $query = $this->db->update('artist_tunebase', $data);
	

}
	
public function sns_ok()
{
$id=$_SESSION['id'];
	
$data = array(
'twitter' => $this->input->post('twitter'),
'hp' => $this->input->post('hp'),
'instagram' => $this->input->post('instagram'),
);	
		
$this->db->where('id', $id);
return $query = $this->db->update('artist_tunebase', $data);
	
}	
	
public function active_ok()
{
$id=$_SESSION['id'];
	
$data = array(
'active' => $this->input->post('active')
);	
		
$this->db->where('id', $id);
return $query = $this->db->update('artist_tunebase', $data);
	
}	
	
	
	
public function bandurl_ok()
{
$id=$_SESSION['id'];
	
$data = array(
'name' => $this->input->post('name'),
'tagname' => $this->input->post('tagname')
);	
		
$this->db->where('id', $id);
return $query = $this->db->update('artist_tunebase', $data);
	
}	
	
public function pass_check()
{
$id=$_SESSION['id'];
$s_artpass = $this->input->post('s_artpass');
$query = $this->db->get_where('artist_tunebase', array('id' => $id ));
$artpass_check = $query->row('artpass');	
	
	
if(!password_verify($s_artpass, $artpass_check )){

echo $s_artpass;
echo $artpass_check;
	
return FALSE;
	
}
else
{
	
return TRUE;
	
}
		

}	
	
	
public function pass_ok()
{
$id=$_SESSION['id'];
	
$artpass = $this->input->post('artpass');
$artpass = password_hash($artpass, PASSWORD_DEFAULT);
	
$data = array('artpass' => $artpass );	
		
$this->db->where('id', $id);
return $query = $this->db->update('artist_tunebase', $data);
}		
	
	
public function movie_ok()
{
	
$tube1 = $this->input->post('tube1');
$tube2 = $this->input->post('tube2');
$tube3 = $this->input->post('tube3');
$s_tube1 = $this->input->post('s_tube1');
$s_tube2 = $this->input->post('s_tube2');
$s_tube3 = $this->input->post('s_tube3');


if($tube1=="" && $tube1===$s_tube1)
 {}
else
{

 if (strstr($tube1, 'youtu.be'))
 {
preg_match('/https:\/\/youtu.be\/([^\/]*)/',$tube1,$match);
 }
else
{
preg_match('/\?v=([^&]+)/',$tube1,$match);	
}

$tube1 = $match[1]; 

if($tube1=="")
{$tube1="";}
 }
 

if($tube2=="" && $tube2===$s_tube2)
 {}
else
{

 if (strstr($tube2, 'youtu.be'))
 {
preg_match('/https:\/\/youtu.be\/([^\/]*)/',$tube2,$match);
 }
else
{
preg_match('/\?v=([^&]+)/',$tube2,$match);	
}

$tube2 = $match[1]; 

if($tube2=="")
{$tube2="";}
 }
 

if($tube3=="" && $tube3===$s_tube3)
 {}

else
{

 if (strstr($tube3, 'youtu.be'))
 {
preg_match('/https:\/\/youtu.be\/([^\/]*)/',$tube3,$match);
 }
else
{
preg_match('/\?v=([^&]+)/',$tube3,$match);	
}

$tube3 = $match[1]; 
	


if($tube3=="")
{
$tube3="";}
 }
 

	
$id=$_SESSION['id'];
	
$data = array(
'tube1' => $tube1,
'tube2' => $tube2,
'tube3' => $tube3
);	
	
	
$this->db->where('id', $id);
return $query = $this->db->update('artist_tunebase', $data);
	
	
if($artpass2 = $query->row_array('artpass'))
{
	
return $query->row_array();
	
}


	
	
	
	
}	
	
	
	
//メールのIDを使って登録名を引き出すコントローラーでGetの登録名を検証
public function check()
{
  
$id=$this->input->get('id');
$query = $this->db->get_where('artist',array('id' => $id ));
return $query->row_array();
}		
	
	
//imagepathのデータベース格納
public function image($path)
{
  
   $id=$_SESSION['id'];
   $path=base_url("bandimage/$path");
   $data = array(
        'imagepath' => $path
);

$this->db->where('id', $id);
$this->db->update('artist_tunebase', $data);
	
}		
	
	
public function mail_ok()
{
$id=$_SESSION['id'];
$mail=$_SESSION['se_bandmail'];
$_SESSION['mail']=$mail;
	
if($mail=="")
{
return FALSE;	
}
else{
$data = array(
'bandmail' => $mail

);	
	
	
$this->db->where('id', $id);
return $query = $this->db->update('artist_tunebase', $data);
	
	

}}
	
	
	
	
//ここから本登録を開始　テーブルはartist_tunebaseとなる
public function first()
{
  
   $id=$this->input->get('id');
   $query = $this->db->get_where('artist',array('id' => $id ));
   $artist = $query->row_array();

    return $this->db->insert('artist_tunebase', $artist);
	
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
