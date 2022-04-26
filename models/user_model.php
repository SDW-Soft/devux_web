<?php

class User_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function userList()
    {
        return $this->db->select('SELECT * FROM `auth`');
    }
    
    public function userSingleList($userid)
    {
        return $this->db->select('SELECT * FROM auth WHERE id = :userid', array(':userid' => $userid));
    }
    
    public function create($data)
    {
        $this->db->insert('auth', array(
            'email' => $data['email'],
            'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
            // 'role' => $data['role']
        ));
    }
    
    public function editSave($data)
    {
        $postData = array(
            'email' => $data['email'],
            'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
            // 'role' => $data['role']
        );
        
        $this->db->update('auth', $postData, "`id` = {$data['userid']}");
    }
    
    public function delete($userid)
    {
        // $result = $this->db->select('SELECT role FROM auth WHERE userid = :userid', array(':userid' => $userid));

        // if ($result[0]['role'] == 'owner')
        // return false;
        
        $this->db->delete('auth', "id = '$userid'");
    }
}