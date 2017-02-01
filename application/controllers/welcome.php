<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		require 'vendor/autoload.php';
	}

	public function index()
	{
    if($_POST)
	{
		$firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		$path='/users_mst/';
		$email='admin@admin.com';
		$value = $firebase->get($path,array('orderBy' => '"email"', 'equalTo' => '"'.$email.'"','limitToFirst' => '1'));
		$data = json_decode($value ,TRUE);
		if($data)
		{
		foreach($data as $key => $value)
		{
			echo $key;
			
			if($value['password'] == $this->input->post('password'))
			{
			
			$newdata = array(
            'username'  => $value['username'],
            'email'     => $value['email'],
            'logged_in' => TRUE
           );
           $this->session->set_userdata($newdata);
		   redirect('/dashboard');
		   
			}
			else{
				$value="Enter Password is invalid";
				$this->session->set_flashdata('error', $value);
				redirect('welcome/');
				
				
			}
			
		}
		
		
		}else
		{
		$value="Enter Email and paswword  is invalid";
				$this->session->set_flashdata('error', $value);	
				redirect('welcome/');
		}
		
		
	}

$firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');

//$d =$this->randomKey();

//$firebase->set('/' . '/' . 'users_mst/'.$d, $test);
//$value = $firebase->get($path, array('orderBy' => '"height"'));
//$path='/users_mst/';
//$value = $firebase->get($path,array('orderBy' => '"email"', 'equalTo' => '"admin@admin.com"','limitToFirst' => '1'));
//$names = $firebase->get('/'. '/users_mst/CTVychfhY9sh/',array());
//$name = $firebase->get('/' . '/users_mst/',equalTo);
//echo $name;
//$data = json_decode($value ,TRUE);
$this->load->view('login');

         }

    public function test()
	{

require 'v/autoload.php';

//use Firebase\Firebase;

$fb = Firebase::initialize(YOUR_FIREBASE_URL, YOUR_FIREBASE_SECRET);

//or set your own implementation of the ClientInterface as second parameter of the regular constructor
$fb = new Firebase([ 'base_url' => YOUR_FIREBASE_BASE_URL, 'token' => YOUR_FIREBASE_SECRET ], new GuzzleHttp\Client());

//retrieve a node
$nodeGetContent = $fb->get('/node/path',array('email'=>'admin@admin.com'));

$data = json_decode($name, TRUE);
echo "<pre>";
print_r($data);

         }
function randomKey($length=12) {
    $pool = array_merge(range(0,9), range('a', 'z'),range('A', 'Z'));
  $key='';
    for($i=0; $i < $length; $i++) {
        $key .= $pool[mt_rand(0, count($pool) - 1)];
    }
    return $key;
}
}
