<?php
class Admin_model extends CI_Model 
{
	public function __construct()
{
    $this->load->database();  
}
public function checkLogin($email, $password)
{
		$this->db->where('email', $email);
		$this->db->where('password', $password); 
		$query = $this->db->get('admin_login');

		if ($query->num_rows() > 0) {
			$user = $query->row_array();

			return ['email' => $email];
		}
}
public function getAllUsers()
    {
        $query = $this->db->get('register');
        return $query->result_array();
    }
		public function blockUser($userId) {
			$this->db->select('status');
			$this->db->where('id', $userId);
			$query = $this->db->get('register');
	
			if ($query->num_rows() > 0) {
					$user = $query->row_array();
	
					$newStatus = ($user['status'] == 1) ? 0 : 1;
	
					$this->db->where('id', $userId);
					$this->db->update('register', ['status' => $newStatus]);

					$this->db->select('status');
					$this->db->where('id', $userId);
					$query = $this->db->get('register');
					if ($query->num_rows() > 0) {
							$user = $query->row_array();
					}  
					return $user;  

	}
}
public function deleteUser($userId) {
	$this->db->where('id', $userId);
	$this->db->delete('register');
}	
public function save_book($book_data) {
	$this->db->insert('book_info', $book_data);
}
public function getAllbooks()
    {
        $query = $this->db->get('book_info');
        return $query->result_array();
    }
		public function deletebook($userId) {
			$this->db->where('id', $userId);
			$this->db->delete('book_info');
		}	
		public function getreqs()
    {
        $query = $this->db->get('requests');
        return $query->result_array();
    }
		public function getRequestDetails($reqId)
    {
			$this->db->where('id', $reqId);
        $query = $this->db->get('requests');
        return $query->result_array();
    }
		public function updateRequestStatus($reqId)
    {
        $data = array(
            'status' => 'approved',
        );

        $this->db->where('id', $reqId);
        $this->db->update('requests', $data);
    }
		public function denyRequestStatus($reqId)
    {
        $data = array(
            'status' => 'denied',
        );

        $this->db->where('id', $reqId);
        $this->db->update('requests', $data);
    }
    public function sendNotification($username, $bookname)
    {
        $data = array(
            'message' => "Your request for '$bookname' has been accepted. Return the book in 20 days from the date of approval",
            'username' => $username
        );
    
        $this->db->insert('notifications', $data);
    
        return true;
    }
    public function decrement($bookname)
    {
        $this->db->where('book_name', $bookname);
        $this->db->set('count', 'count - 1', FALSE);
        $this->db->update('book_info');

        return $this->db->affected_rows() > 0;
    }



		
	}
?>
