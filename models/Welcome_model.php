<?php

class Welcome_model extends CI_Model 
{
	function saverecords($data)
	{
        $this->db->insert('register',$data);
        return true;
	}
	public function checkLogin($email, $password)
    {
        $this->db->select('status');
        $this->db->select('email');
        $this->db->select('id');
        $this->db->select('username');
        $this->db->where('password', $password);
        $this->db->where('email', $email);
        $query = $this->db->get('register');

        if ($query->num_rows() > 0) {
                $user = $query->row_array();
                $newStatus = $user['status'];
                $username = $user['username'];
                $id = $user['id'];

                return ['status' => $newStatus,'email' => $email, 'username' => $username, 'id' => $id];
        }

        return ['status' => 2];
    }
    public function getAvailableBooks()
{
    $this->db->where('count >', 0);
    $query = $this->db->get('book_info');
    return $query->result_array();
}
public function saveRequest( $bookId, $id, $username, $bookname)
{
    $data = array(
        'user_id' => $id,
        'book_id' => $bookId,
        'book_name' => $bookname,
        'username' => $username,
        'status' => 'pending' 
    );

    $this->db->insert('requests', $data);
}
public function notification($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('notifications');
        return $query->result_array();
    }
    public function deletemessage($username) {
        $this->db->where('username', $username);
        $this->db->delete('notifications');
    }	
}
?>
