<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller
{
    public function sayGoodbye()
    {
        echo 'Ouch!!';
    }
}
?>