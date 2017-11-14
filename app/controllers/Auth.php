

<?php

class Auth extends Controller {

    public function index() {

       
        $data['body'] = "This is the best game!";
       	$data['error'] = "";
        $this->view("login", $data);
    }

    public function login() {
    	if(isset($_POST['nickname'])) {
    	$login = $this->model('RegLog');  
        if (!empty($data = $login->login($_POST['nickname']))) {
       if(password_verify($_POST['password'], $data[0]['password'])){
   			$_SESSION['nickname'] = $_POST['nickname'];
			setcookie("sausainukas",$_SESSION['nickname'], time() + (60 * 2), "/"); // 86400 = 1 day
			setcookie("lastTime",date('Y-m-d h:i:sa'), time() + (60 * 2), "/"); // 86400 = 1 day
			header('Location: ../');
         }else {
         	$data['error'] = '<div class="alert alert-danger" role="alert">
			 <strong>ERROR!</strong> Check your username or password.
			 </div>';
			 header('Location: ../auth');
       }
   

     }else {
         	$data['error'] = '<div class="alert alert-danger" role="alert">
			 <strong>ERROR!</strong> Check your username or password.
			 </div>';

			 $this->view("login", $data);

        }
}
}
    public function logout() {

        session_destroy();
		$_SESSION=null;

        header('Location: ../auth');
 
    }
    public function register() {

        $data['title'] = "Register";
        $data['header'] = "Register";
$data['error'] = '';
        $this->view("register", $data);
 
    }
     public function registerForm() {

     $reg = $this->model('RegLog');

        
 		if(isset($_POST['form_nickname'])) {

 			$reg = $this->model('RegLog');
 			if (!empty($data = $reg->login($_POST['form_nickname']))) {
 				$data['title'] = "Register";
        		$data['header'] = "Register";
 				$data['error'] = '<div class="alert alert-warning" role="alert">This nickname is exist</div>';
 				$this->view("register", $data);
        }else{
        	$reg->register($_POST['form_nickname'],$_POST['form_name'],$_POST['form_surname'],$_POST['form_age'],$_POST['form_password']);
        	header('Location: ../auth');
        }
    }
}
}


