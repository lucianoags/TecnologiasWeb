<?php
namespace App\Controllers;

use App\Models\AlumnoModel;

class Login extends BaseController{
	protected $helpers = [];
	protected $db;

	public function login(){
		helper(['form']);
		if (session_status() == PHP_SESSION_NONE){
			$this->session = \Config\Services::session();
		}


		$request = $this->request; 
		$email = $request->getVar('email');
		$password = $request->getVar('pass');
		
		$email_exploded = explode("@",$email);

		// Redirección alumno
		if ($email_exploded[1] == "alumnos.utalca.cl") {

			$alumnoModel = new AlumnoModel();
			$data_alumno = $alumnoModel->where('correo', $email)->first();

			if($data_alumno){
				$pass = $data_alumno['password'];
				$authenticatePassword = password_verify($password, password_hash($pass, PASSWORD_DEFAULT));
				if($authenticatePassword){
					$ses_data = [
						'id' => $data_alumno['id'],
						'nombre' => $data_alumno['nombre'],
						'apellido' => $data_alumno['apellido_1'],
						'correo' => $data_alumno['correo'],
						'isLoggedIn' => TRUE
					];
	
					session()->set($ses_data);
					return redirect()->to('http://localhost/TecnologiasWeb/public/ask'); 

				
				}else{
					session()->setFlashdata('msg', 'Password is incorrect.');
					return redirect()->to('http://localhost/TecnologiasWeb/public/login'); 
				}
	
			}else{
				session()->setFlashdata('msg', 'Email does not exist.');
				return redirect()->to('http://localhost/TecnologiasWeb/public/ask'); 
			}

		}

		
		// load view
		//return view('alumno',$data);

	}

	public function index(){
		helper(['form']);
		$data['title'] = 'Login';
		return view('login', $data);
	} 
 
	public function auth(){
		$session 	= session();
		$model 		= new AlumnoModel();
		$email 		= $this->request->getVar('email');
		$password 	= $this->request->getVar('password');
		$data 		= $model->where('user_email', $email)->first();
		if($data){
			$pass 			= $data['user_password'];
			$verify_pass 	= password_verify($password, $pass);
			if($verify_pass){
				$ses_data = [
					'user_id'       => $data['user_id'],
					'user_name'     => $data['user_name'],
					'user_email'    => $data['user_email'],
					'logged_in'     => TRUE
				];
				$session->set($ses_data);
				return redirect()->to('/dashboard');
			}else{
				$session->setFlashdata('msg', 'Wrong Password');
				return redirect()->to('/login');
			}
		}else{
			$session->setFlashdata('msg', 'Email not Found');
			return redirect()->to('/login');
		}
	}
 
	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to('login');
	}
}