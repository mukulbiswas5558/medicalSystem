<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller 
{
 
	function __construct()
	{
	   parent::__construct();
	   $this->load->helper('form');
	   $this->load->library('form_validation');
	   $this->load->library('session');
	   $this->load->model('login_model','',TRUE);
	   $this->load->library('table');
	   //$this->load->database();   
	}

	function index()
	{
		$this->load->library('form_validation');
	 	$this->form_validation->set_rules('username', 'Username', 'required');
	 	$this->form_validation->set_rules('password', 'Password', 'required');
		
	
	    if($this->form_validation->run() == FALSE)
	    {
	        $this->load->view('login_view');
	   	}
	    else
	    {
	    	  $username = $this->input->post('username');
			  $password = $this->input->post('password');
			
		    
			
			$result = $this->login_model->login($username, $password);
			// echo "mukul";
			//  print_r($result);

		
		
			if($result == TRUE)
	    	{
		   
			    
			    $newarray = array('id' => $result[0]->id,		
			    				  'name' => $result[0]->Name,   
								  'username' => $result[0]->UserName,
								  'acct_type' => $result[0]->Account_For,
								  'status' => $result[0]->Status
							);
						
				
					
			    $this->session->set_userdata('logged_in', $newarray);
				
				
				

			    $logintime = date('Y-m-d H:i:s', time());

			    $last_login_data = array('id' => $this->session->userdata['logged_in']['id'],
								  'last_login' => $logintime
							);
							
			    $this->login_model->lastLoginSet($last_login_data);
			
				
		   		
		   	
		   		redirect('details', 'refresh');
		   		
		   			
		    }
	        else
	        {
			    $data = array('error_message' => 'Error: Username or Password...!');
				$this->load->view('login_view', $data);
	    	}
		 	 
		}
 
	}
 

	public function logout() 
	{

		// Removing session data
		$sess_array = array('id' => '',
							'name' => '',   
							'username' => '',
							'acct_type' => '',
							'asso_type' => '',
							'currency' => '',
							'status' => '');
		$this->session->unset_userdata('logged_in', $sess_array);

		$sess_array2 = array('member' => '',
							'priority' => '',
							'status' => '',
							'task' => '');
		$this->session->unset_userdata('filtered_value', $sess_array2);
		$data = array('success_message' => 'Successfully Log Out');
		$this->load->view('login_view', $data);
		
	}
 
}
?>