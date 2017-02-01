<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		require 'vendor/autoload.php';
		if($this->session->userdata('logged_in')!= True)
		{
			
			redirect('welcome/');
		}
	}

	public function index()
	{
    redirect('dashboard/enquiry');
	$this->load->view('common/header');
	$this->load->view('dashboard');
	$this->load->view('common/footer');
	
	}
   
   public function courses()
   {
	   $firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		$path='/courses/';
		
		$value = $firebase->get($path);
		$courses = json_decode($value ,TRUE);
		
	$data['courses']=$courses;	
	$this->load->view('common/header');
	$this->load->view('courses',$data);
	$this->load->view('common/footer'); 
	   
   }
   public function enquiry()
   {
    $firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		$path='/enquiry/';
		
		$value = $firebase->get($path);
		$enquiry = json_decode($value ,TRUE);
		
	$data['enquiry']=$enquiry;	
	$this->load->view('common/header');
	$this->load->view('enquiry',$data);
	$this->load->view('common/footer'); 	
   }	
   function logout()
   {
	   $this->session->sess_destroy();
	   redirect('welcome/');
	   
   }
	function randomKey($length=12) {
    $pool = array_merge(range(0,9), range('a', 'z'),range('A', 'Z'));
  $key='';
    for($i=0; $i < $length; $i++) {
        $key .= $pool[mt_rand(0, count($pool) - 1)];
    }
    return $key;
}
   public function new_enquiry()
   {
    $firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		//$path='/enquiry/';
		
		//$value = $firebase->get($path);
		//$enquiry = json_decode($value ,TRUE);
		
	//$data['enquiry']=$enquiry;	
	   if($_POST)
	   {
				
		   
		   
		   $data=array("alternate_no"=>$this->input->post('alternative'),
					  "college"=>$this->input->post('college'),
					  "conact_no"=>$this->input->post('contact_number'),
					  "course_interested_1"=>$this->input->post('course'),
					  "course_interested_2"=>'',
					  "course_interested_3"=>'',
					   "created_date"=>date('Y-m-d'),
					   "dob"=>$this->input->post('dob'),
					   "dues"=>'100',
					   "email"=>$this->input->post('student_email'),
					   "inflow_source"=>$this->input->post('inflow_source'),
					   "name"=>$this->input->post('student_name'),
					   "qualification"=>$this->input->post('qualification'),
					   "stream"=>$this->input->post('stream'),
					   "time_of_preferance"=>$this->input->post('batch'),
					   "year_of_passing"=>$this->input->post('passing_year')
					  );
		  
$d =$this->randomKey();

$firebase->set('/' . '/' . 'enquiry/'.$d, $data);
 $value="New Enquiry Created";
				$this->session->set_flashdata('success', $value);
				redirect('dashboard/enquiry');
	   }
	    $path='/courses/';
		$value = $firebase->get($path);
		$courses = json_decode($value ,TRUE);
		
	$data['courses']=$courses;	   
	$this->load->view('common/header');
	$this->load->view('new_enquiry',$data);
	$this->load->view('common/footer'); 	
   }	
	public function batch()
	{
		$firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		$path='/batch/';
		$value = $firebase->get($path);
		$batch = json_decode($value ,TRUE);
		$data['batch']=$batch;	   
		$this->load->view('common/header');
		$this->load->view('batch',$data);
		$this->load->view('common/footer'); 
		
		
	}
	function batch_new()
	{
	$firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');

$d =$this->randomKey(16);
		

$firebase->set('/' . '/' . 'batch/'.$d, $bat);	
		
		
	}
	function get_batch()
	{
		
	    $c=$_REQUEST['course'];
	    $firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
        $path='/batch/';
		$value = $firebase->get($path,array('orderBy' => '"course"', 'equalTo' => '"'.$c.'"'));
        $data = json_decode($value ,TRUE);	
		$b='';
		if($data)
		{
			$b .= "<option value=''> Select Batch</option>";
		foreach($data as $d)
		{
		$b .= "<option value='".$d['batch_name']."'>".$d['batch_name']."</option>";	
		}	} else
		{
			$b .= "<option value=''> No Bacth Available</option>";
		}
		$path='/courses/';
		$value = $firebase->get($path,array('orderBy' => '"name"', 'equalTo' => '"'.$c.'"'));
        $data_c = json_decode($value ,TRUE);
		foreach($data_c as $d)
		{
			$fees=$d['fees'];
		}
	
		$data_b=array('batch'=>$b,'fees'=>$fees);
		echo json_encode($data_b);
	}
	public function new_course()
   {
    
		//$path='/enquiry/';
		
		//$value = $firebase->get($path);
		//$enquiry = json_decode($value ,TRUE);
		
	//$data['enquiry']=$enquiry;	
	   if($_POST)
	   {
		$firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');		
		   
		   
		   $data=array("name"=>$this->input->post('course'),
					  "start_date"=>$this->input->post('start_date'),
					  "end_date"=>$this->input->post('end_date'),
					  "duration"=>$this->input->post('course_duration'),
					  "fees"=>$this->input->post('fees')
					  
					  );
		  
$d =$this->randomKey(16);

$firebase->set('/' . '/' . 'courses/'.$d, $data);

$value="New Course Created";
				$this->session->set_flashdata('success', $value);
				redirect('dashboard/courses');
	   }
	    
		
		   
	$this->load->view('common/header');
	$this->load->view('new_course');
	$this->load->view('common/footer'); 	
   }	
	function new_batch()
	{
		$firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		 if($_POST)
	   {
				
		   
		   
		   $bat=array("course"=>$this->input->post('course'),"batch_name"=>$this->input->post('batch_name'),"batch_timing"=>$this->input->post('batch_timing'),"duration"=>$this->input->post('duration'));
		  
$d =$this->randomKey(16);

$firebase->set('/' . '/' . 'batch/'.$d, $bat);

$value="New Batch Created";
				$this->session->set_flashdata('success', $value);
				redirect('dashboard/batch');
	   }
	    
		
	$path='/courses/';
		$value = $firebase->get($path);
		$data['courses'] = json_decode($value ,TRUE);	   
		
	$this->load->view('common/header');
	$this->load->view('new_batch',$data);
	$this->load->view('common/footer'); 
	}
	public function view_enquiry($id)
	{
		$firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		$path='/enquiry/'.$id;
		$value = $firebase->get($path);
		$data['enquiry'] = json_decode($value ,TRUE);
		$data['id']=$id;
		$this->load->view('common/header');
	    $this->load->view('view_enquiry',$data);
	    $this->load->view('common/footer');
		
	}
	public function view_admission($id)
	{
		$firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		$path='/student_base/'.$id;
		$value = $firebase->get($path);
		$data['enquiry'] = json_decode($value ,TRUE);
		$data['id']=$id;
		$this->load->view('common/header');
	    $this->load->view('view_admission',$data);
	    $this->load->view('common/footer');
		
	}
	
	public function convert_admission($id)
	{
		$firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		
		if($_POST)
		{
			$data_s=array("alternate_no"=>$this->input->post('alternative'),
					  "college"=>$this->input->post('college'),
					  "conact_no"=>$this->input->post('contact_number'),
					  "course"=>$this->input->post('course'),
					  "course_id"=>$this->input->post('course_id'),
					  "enquiry_id"=>$id,
					  "father_name"=>$this->input->post('father_name'),
					   "mother_name"=>$this->input->post('mother_name'),
					   "created_date"=>date('Y-m-d'),
					   "dob"=>$this->input->post('dob'),
					   "dues"=>$this->input->post('fees'),
					   "fees_paid"=>$this->input->post('fees_paid'),
					   "pending_due"=>$this->input->post('pending_fee'),
					   "pending_due_date"=>$this->input->post('pending_fee_date'),
					   "email"=>$this->input->post('student_email'),
					   "friend_intrested"=>$this->input->post('friend'),
					   "name"=>$this->input->post('student_name'),
					   "qualification"=>$this->input->post('qualification'),
					   "stream"=>$this->input->post('stream'),
					   "batch_id"=>$this->input->post('batch'),
					   "year_of_passing"=>$this->input->post('passing_year'),
					   "Address"=>$this->input->post('address'),
					   
					  );
		  
           $d =$this->randomKey(20);
		   $d_s =$this->randomKey(20);
		   $f=$this->input->post('fees_paid');
            $sp=array("amount"=>$f,"date_of_payment"=>date('Y-m-d'),"student_id"=>$d);
              $firebase->set('/' . '/' . 'student_base/'.$d, $data_s);
			  $firebase->set('/' . '/' . 'payments/'.$d_s, $sp);
			  
			  $value="New Admission Created";
				$this->session->set_flashdata('success', $value);
				redirect('dashboard/admission');
			
		}
		$path='/enquiry/'.$id;
		$value = $firebase->get($path);
		$data['enquiry'] = json_decode($value ,TRUE);
		
		$path='/courses/';
		$value = $firebase->get($path);
		$data['courses'] = json_decode($value ,TRUE);
		$data['id']=$id;
		$this->load->view('common/header');
	    $this->load->view('admission_form',$data);
	    $this->load->view('common/footer');
	}
	
	public function admission()
	{
		$firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		$path='/student_base/';
		
		$value = $firebase->get($path);
		$admission = json_decode($value ,TRUE);
		
	    $data['admission']=$admission;	
	    $this->load->view('common/header');
	    $this->load->view('admission',$data);
	    $this->load->view('common/footer');	
		
	}
	public function delete_enquiry($id)
	{  
	    $firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		$path='/enquiry/'.$id;
		$firebase->delete($path); 
		$value="Enquiry Deleted Successfully";
				$this->session->set_flashdata('success', $value);
				redirect('dashboard/enquiry');
	}
	public function delete_courses($id)
	{  
	    $firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		$path='/courses/'.$id;
		$firebase->delete($path); 
		$value="Courses Deleted Successfully";
				$this->session->set_flashdata('success', $value);
				redirect('dashboard/courses');
	}
	public function delete_batch($id)
	{  
	    $firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		$path='/batch/'.$id;
		$firebase->delete($path); 
		$value="Batch Deleted Successfully";
				$this->session->set_flashdata('success', $value);
				redirect('dashboard/batch');
	}
   public function edit_enquiry($id)
   {
	   $firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		
	   if($_POST)
	   {
				
		   
		   
		   $data=array("alternate_no"=>$this->input->post('alternative'),
					  "college"=>$this->input->post('college'),
					  "conact_no"=>$this->input->post('contact_number'),
					  "course_interested_1"=>$this->input->post('course'),
					  "course_interested_2"=>'',
					  "course_interested_3"=>'',
					   "created_date"=>date('Y-m-d'),
					   "dob"=>$this->input->post('dob'),
					   "dues"=>'100',
					   "email"=>$this->input->post('student_email'),
					   "inflow_source"=>$this->input->post('inflow_source'),
					   "name"=>$this->input->post('student_name'),
					   "qualification"=>$this->input->post('qualification'),
					   "stream"=>$this->input->post('stream'),
					   "time_of_preferance"=>$this->input->post('batch'),
					   "year_of_passing"=>$this->input->post('passing_year')
					  );
		  
			     $path='/enquiry/'.$id;
				 $firebase->update($path, $data);
			     $value=" Enquiry Updated ";
							$this->session->set_flashdata('success', $value);
							redirect('dashboard/enquiry');
	   }
	    $path='/courses/';
		$value = $firebase->get($path);
		$courses = json_decode($value ,TRUE);
		$path='/enquiry/'.$id;
		$value_e = $firebase->get($path);
		$data['enquiry']= json_decode($value_e ,TRUE);
		
	$data['courses']=$courses;	   
	$this->load->view('common/header');
	$this->load->view('edit_enquiry',$data);
	$this->load->view('common/footer'); 
   }
   function edit_admission($id)
   {
	 $firebase = new \Firebase\FirebaseLib('https://arifin-89206.firebaseio.com/','AfUl07y4YkzIecWlHFgQ95BqgMix3Fwx3tsPydwM');
		
		if($_POST)
		{
			$data_s=array("alternate_no"=>$this->input->post('alternative'),
					  "college"=>$this->input->post('college'),
					  "conact_no"=>$this->input->post('contact_number'),
					  "course"=>$this->input->post('course'),
					  "course_id"=>$this->input->post('course_id'),
					 
					  "father_name"=>$this->input->post('father_name'),
					   "mother_name"=>$this->input->post('mother_name'),
					   "created_date"=>date('Y-m-d'),
					   "dob"=>$this->input->post('dob'),
					   "dues"=>$this->input->post('fees'),
					   "fees_paid"=>$this->input->post('fees_paid'),
					   "pending_due"=>$this->input->post('pending_fee'),
					   "pending_due_date"=>$this->input->post('pending_fee_date'),
					   "email"=>$this->input->post('student_email'),
					   "friend_intrested"=>$this->input->post('friend'),
					   "name"=>$this->input->post('student_name'),
					   "qualification"=>$this->input->post('qualification'),
					   "stream"=>$this->input->post('stream'),
					   "batch_id"=>$this->input->post('batch'),
					   "year_of_passing"=>$this->input->post('passing_year'),
					   "Address"=>$this->input->post('address'),
					   
					  );
		   $path='/student_base/'.$id;
		 $firebase->update($path, $data_s);
         
		  $value_b = $firebase->get($path,array('orderBy' => '"student_id"', 'equalTo' => '"'.$id.'"'));
		  $p=json_decode($value_b ,TRUE);
		  foreach($p as $key=>$v)
		  {
			  $p_k=$key;
		  }
			 $path_p='/payment/'.$p_k;	 
            $sp=array("amount"=>$this->input->post('fees_paid'),"date_of_payment"=>date('Y-m-d'),"student_id"=>$id);
             $firebase->update($path_p, $sp);
			
			  
			  $value="Admission Updated";
				$this->session->set_flashdata('success', $value);
				redirect('dashboard/admission');
			
		}
		$path='/student_base/'.$id;
		$value = $firebase->get($path);
		$data['enquiry'] = json_decode($value ,TRUE);
		
		$path='/courses/';
		$value = $firebase->get($path);
		$data['courses'] = json_decode($value ,TRUE);
		
		 $c=$data['enquiry']['course'];
        $path='/batch/';
		$value_b = $firebase->get($path,array('orderBy' => '"course"', 'equalTo' => '"'.$c.'"'));
        $data['b'] = json_decode($value_b ,TRUE);	
		$this->load->view('common/header');
	    $this->load->view('edit_admission',$data);
	    $this->load->view('common/footer');  
   }
   
} 