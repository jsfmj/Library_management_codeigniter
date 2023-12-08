<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {
public function __construct() {
        parent::__construct();
        $this->load->helper('url');
          $this->load->database();
		$this->load->model('Admin_model');
        }

	
	public function admin_login()
	{
		$this->load->view('admin_login');
	}
	public function data()
	{
		
	
		if ($this->input->post('logg') == 'loggi')
        {
           
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            
            $login_result = $this->Admin_model->checkLogin($email, $password);

            if ($login_result) {
                $cookie_value=$login_result['email'];
				$this->input->set_cookie('admin',$cookie_value,3600);
				$data['users'] = $this->Admin_model->getAllUsers();
        $this->load->view('admin_panel', $data);
                // redirect('admin/admin_panel');
            } else {
                echo "Invalid login credentials!";
            }
        }
    

	}
    public function admin_panel()
	{
		$this->load->view('admin_panel');
	}
    public function blockUser() {
		$userId = $this->input->post('userId');
		$user_status =	$this->Admin_model->blockUser($userId);
		if ($user_status['status'] == 0) {
				echo json_encode(['status' => '0']);
		} else {
				echo json_encode(['status' => '1']);
		}
}

public function deleteUser() {
	$userId = $this->input->post('userId');

	if ($userId) {
			$this->Admin_model->deleteUser($userId);

			echo json_encode(['status' => 'success']);
	} else {
			echo json_encode(['status' => 'error', 'message' => 'Invalid user ID']);
	}
}
public function logout()
	{
		$this->load->helper('cookie');
		delete_cookie('admin');

    redirect('');
	}
	public function addbook() {
		$this->load->view('addbook');
}

public function save_book() {
  
			

	$config['upload_path'] = './uploads/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size'] = 2000;
	// $config['max_width'] = 1500;
	// $config['max_height'] = 1500;

	$this->load->library('upload', $config);

	if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('files/upload_form', $error);
	} else {
			$data = array('image_metadata' => $this->upload->data());
			if ($this->input->server('REQUEST_METHOD') == 'POST') {
				
				$book_data = array(
						'book_name' => $this->input->post('book_name'),
						'book_author' => $this->input->post('book_author'),
						'count' => $this->input->post('count'),
						'image' => 'http://localhost/library_management/uploads/' . $data['image_metadata']['file_name']
				);

			// $this->load->view('files/upload_result', $data);
			$this->Admin_model->save_book($book_data);
			echo("success");
	}
   }
}
public function viewbooks() {
	$data['views'] = $this->Admin_model->getAllbooks();
        $this->load->view('viewbooks', $data);
}
public function deletebook() {
	$userId = $this->input->post('userId');

	if ($userId) {
			$this->Admin_model->deletebook($userId);

			echo json_encode(['status' => 'success']);
	} else {
			echo json_encode(['status' => 'error', 'message' => 'Invalid user ID']);
	}
}
public function req() {
	$data['reqs'] = $this->Admin_model->getreqs();
        $this->load->view('requests', $data);
}


public function approveRequest()
{
	$reqId = $this->input->post('reqId');
	$username = $this->input->post('username');
	$bookname = $this->input->post('bookname');
	if ($reqId) {
		$this->sendApprovalMessage($username, $bookname);
		$this->decrementBookCount($bookname);
		$this->Admin_model->updateRequestStatus($reqId);
		
		echo json_encode(['status' => 'success']);
} else {
		echo json_encode(['status' => 'error', 'message' => 'Invalid request ID']);
}
        // // Decrement the count of available books
        // $this->Admin_model->decrementBookCount($requestDetails['book_id']);

        // // Optionally, you might want to redirect to a page or load a view
        // redirect('admin/book_requests');
}
private function sendApprovalMessage($username, $bookname)
{
	$username = $this->input->post('username');
	$bookname = $this->input->post('bookname');

	$notificationSent = $this->Admin_model->sendNotification($username, $bookname);

	if ($notificationSent) {
			echo json_encode(['status' => 'success']);
	} else {
			echo json_encode(['status' => 'error', 'message' => 'Failed to send notification']);
	}
}
private function decrementBookCount($bookname)
{
	$username = $this->input->post('username');
	$bookname = $this->input->post('bookname');

	$decresuccess = $this->Admin_model->decrement( $bookname);

	if ($decresuccess) {
			echo json_encode(['status' => 'success']);
	} else {
			echo json_encode(['status' => 'error', 'message' => 'Failed to send notification']);
	}
}


    // TODO: Implement logic to send notification to the user's home page
    // You can use AJAX, WebSockets, or any other method to update the user interface




public function denyRequest()
{
	$reqId = $this->input->post('reqId');
	if ($reqId) {
		$this->Admin_model->denyRequestStatus($reqId);

		echo json_encode(['status' => '1']);
} else {
		echo json_encode(['status' => 'error', 'message' => 'Invalid request ID']);
}
        // Save the book details to the database
        // $bookData = array(
        //     'book_name' => $requestDetails['book_name'],
        //     'book_author' => $requestDetails['book_author'],
        //     'image' => $requestDetails['image'], // You might want to copy the image to a permanent location
        // );

        // $this->Admin_model->saveBook($bookData);

        // // Decrement the count of available books
        // $this->Admin_model->decrementBookCount($requestDetails['book_id']);

        // // Optionally, you might want to redirect to a page or load a view
        // redirect('admin/book_requests');
}

}