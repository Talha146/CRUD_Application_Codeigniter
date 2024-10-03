<?php
class User_model extends CI_model{

    function create($formArray)
    {
        $this->db->insert('users',$formArray); // Insert into users (name,email) values(?,?)
    }

    function All(){
        return $users = $this->db->get('users')->result_array(); // SELECT * FROM users
    }

    function getUser($userId){
        $this->db->where('user_id',$userId);
        return $user = $this->db->get('users')->row_array(); // SElECT * FROM users WHERE user_id = ?
    }

    function updateUser($userId,$formArray) {
        $this->db->where('user_id',$userId);
        $this->db->update('users',$formArray); //Update users SET name=? , email=? where user_id = ?
    }

    function deleteUser($userId){
        $this->db->where('user_id',$userId);
        $this->db->delete(users); // DELETE FROM users WHERE user_id=?
    }
}
?>
