<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 function __construct()
	{

	parent::__construct();
	

	$this->load->database();
	
	$this->load->model('Welcome_model');
	$this->load->library('session');




	}
	public function index()
	{


		$this->load->view('home');
	}

	public function login()
	{


		$this->load->view('login');
	}
	public function data()
	{
		
		
	
		if ($this->input->post('reg') == 'register')
		{
		    $data['username']=$this->input->post('username');
			$data['email']=$this->input->post('email');
      $data['password']=$this->input->post('password');
			$response=$this->Welcome_model->saverecords($data);
			if($response==true){
        $this->load->view('login');
			}
			else{
					echo "Insert error !";
			}
		}
    elseif ($this->input->post('logg') == 'loggi')
        {
           
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            
            $login_result = $this->Welcome_model->checkLogin($email, $password);

            if (isset($login_result['status']) && $login_result['status'] == 1) { 
                            $cookie_data = array(
                                'id' => $login_result['id'],
                                'username' => $login_result['username'],
                                'email' => $login_result['email'],
                            );
                            $cookie_value = serialize($cookie_data);
							$this->input->set_cookie('user',$cookie_value,3600);

							
							$data['books'] = $this->Welcome_model->getAvailableBooks();
							$this->load->view('shop', $data);
					} elseif (isset($login_result['status']) && $login_result['status'] == 0) {
							$data['error_message'] = "User blocked!";
							$this->load->view('login', $data);
					} else {
							$data['error_message'] = "Invalid credentials!";
							$this->load->view('login', $data);
					}
        }
    

	}
	public function shop()
	{
  	$this->load->view('shop');
	}
	public function cart()
	{
  	$this->load->view('cart');
	}
	public function addToCart()
    {
        
        $bookId = $this->input->post('book_id');
        $bookName = $this->input->post('book_name');
        $bookAuthor = $this->input->post('book_author');
        $bookImage = $this->input->post('book_image');

        
        $cartItems = $this->session->userdata('cart_items') ?? [];

        $existingItemIndex = $this->findCartItemIndex($bookId, $cartItems);

        if ($existingItemIndex !== false) {
            $cartItems[$existingItemIndex]['quantity'] += 1;
        } else {
            $cartItems[] = [
                'book_id' => $bookId,
                'book_name' => $bookName,
                'book_author' => $bookAuthor,
                'book_image' => $bookImage,
                'quantity' => 1, 
            ];
        }

        $this->session->set_userdata('cart_items', $cartItems);

        echo json_encode(['status' => 'success']);
    }

    private function findCartItemIndex($bookId, $cartItems)
    {
        foreach ($cartItems as $index => $item) {
            if ($item['book_id'] == $bookId) {
                return $index;
            }
        }

        return false;
    }
	
    
public function removeProduct()
{
    $bookId = $this->input->post('bookId');
    $cartItems = $this->session->userdata('cart_items') ?? [];
    $itemIndex = $this->findCartItemIndex($bookId, $cartItems);

    if ($itemIndex !== false) {
        unset($cartItems[$itemIndex]);

        $this->session->set_userdata('cart_items', array_values($cartItems));

        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Product not found in the cart']);
    }
}
public function displayCart()
{
    $cartItems = $this->session->userdata('cart_items') ?? [];
    $data['cartItems'] = $cartItems;
    $this->load->view('cart', $data);
}
public function sendRequest()
{
    $cookie = $this->input->cookie('user', true);
    $user_data = unserialize($cookie);
    $username = $user_data['username'];
    $id = $user_data['id'];
    $bookId = $this->input->post('bookId');
    $bookname= $this->input->post('bookname');
      
     

    // Save the request details to the database or perform necessary actions
    $this->Welcome_model->saveRequest($bookId, $id, $username, $bookname);

    // Return a response (e.g., success or error message)
    echo json_encode(['status' => 'success']);
}
public function notification()
	{
    $cookie = $this->input->cookie('user', true);
    $user_data = unserialize($cookie);
    $username = $user_data['username'];
    $data['notifications'] = $this->Welcome_model->notification($username);
    $this->load->view('notification', $data);
	}
    public function logout()
	{
		$this->load->helper('cookie');
		delete_cookie('user');

    // Redirect or load your desired view
    redirect('');
	}
    public function clearnotification() {
        $username = $this->input->post('username');
    
        if ($username) {
                $this->Welcome_model->deletemessage($username);
    
                echo json_encode(['status' => 'success']);
        } else {
                echo json_encode(['status' => 'error', 'message' => 'Invalid user ID']);
        }
    }
    public function contact()
	{
  	$this->load->view('contact');
	}

	




}

