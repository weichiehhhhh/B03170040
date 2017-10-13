<?php


class Email extends CI_Controller{
    
    function __construct(){
        
        parent::__construct();
    }
    
    
    function index(){
        
        $this->load->view('newsletter');      
    }


    function send(){
            
        echo 'The email/send function';
        $config = Array ('protocol' =>'smtp',
                        'smtp_host' => 'smtp.must.edu.tw',
                        'smtp_port' => 25,
                        'smtp_user' => 'mlee@must.edu.tw',
                        'smtp_pass' => '');
        
        $this->load->library('email', $config);
        $this->load->library('email');
        $this->email->set_newline("\r\n");
        $this->email->from("mlee@must.edu.tw");
        $this->email->to("mchenglee101@gmail.com");
        $this->email->subject('this is a test mail');
        $this->email->message('this is working fine !');
        
        if($this->email->send()) {
            
            $this->load->view('signup_confirmation');
        }
        else {
            
            show_error($this->email->print_debugger());
        }
           
        
    }
}