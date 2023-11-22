<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserModel_model extends Model {
	public function Get_data(){

            return $this->db->table('logtbl')->get_All();
    }

    public function Store($name, $username, $password){
        $data= array(
            'Fullname'=> $name,
            'Username' => $username,
            'Password' => $password
        );
        return $this->db->table('logtbl')->get_all();

    }
}
?>
