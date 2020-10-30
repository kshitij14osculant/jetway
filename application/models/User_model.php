<?php

  class User_model extends CI_model
  {

  
     function create($formArray)
     {
     	$this->db->insert('users',$formArray); //Insert into users (name,email) values (?,?);

     }

  }

 ?>