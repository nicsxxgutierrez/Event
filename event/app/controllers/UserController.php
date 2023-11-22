<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller {
    public function __construct()
    {
      parent::__construct();
      $this->call->model('UserModel_model');
    }
	public function get(){
        $data['users'] = $this->UserModel_model->Get_data();
        return $this->call->view('user/register');
    }
    public function Register() 
    {
    $name = $this->io->post('Fullname');
    $username = $this->io->post('Username');
    $password = $this->io->post('Password');

    $this->User_model->save($name, $username, $password);

    redirect('/user');
    
    }
}
?>
