<?php
namespace App\Controllers;

use App\Models\AlumnoModel;
use App\Models\ProfesorModel;
use App\Models\ModuloModel;
use App\Models\ModuloEstudianteModel;


class Login extends BaseController{
	protected $helpers = [];
	protected $db;

	public function login1(){
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

					$moduloModelAlumno = new ModuloEstudianteModel();
					$moduloModel = new ModuloModel();

					$data_modulos_alumno = $moduloModelAlumno->where('estudiante', $data_alumno['id'])->findAll();
					//$data_modulos_alumno = $moduloModelAlumno->getModulosAlumno($data_alumno['id']);
					$result['modulos'] = $data_modulos_alumno;

					$id_modulos = array();

					foreach ($result['modulos'] as $key => $value) {
						$id_modulos[] = $value['modulo'];
					}

					$data['modulos'] = $moduloModel->getModulosAlumno($id_modulos);

					session()->set($ses_data);
					return view('alumno', $data);

				
				}else{
					session()->setFlashdata('msg', 'Password is incorrect.');
					return redirect()->to('http://localhost/TecnologiasWeb/public/login'); 
				}
	
			}else{
				session()->setFlashdata('msg', 'Email does not exist.');
				return redirect()->to('http://localhost/TecnologiasWeb/public/login'); 
			}

		} elseif ($email_exploded[1] == "utalca.cl") {

			$profesormodel = new ProfesorModel();
			$data_profesor = $profesormodel->where('correo', $email)->first();

			if($data_profesor){
				$pass = $data_profesor['password'];
				$authenticatePassword = password_verify($password, password_hash($pass, PASSWORD_DEFAULT));
				if($authenticatePassword){
					$ses_data = [
						'id' => $data_profesor['id'],
						'nombre' => $data_profesor['nombre'],
						'apellido' => $data_profesor['apellido_1'],
						'correo' => $data_profesor['correo'],
						'isLoggedIn' => TRUE
					];
	
					session()->set($ses_data);
					return redirect()->to('http://localhost/TecnologiasWeb/public/profesor'); 

				
				}else{
					session()->setFlashdata('msg', 'Password is incorrect.');
					return redirect()->to('http://localhost/TecnologiasWeb/public/profesor'); 
				}
	
			}else{
				session()->setFlashdata('msg', 'Email does not exist.');
				return redirect()->to('http://localhost/TecnologiasWeb/public/login'); 
			}

		}

	}

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
					return redirect()->to('http://localhost/TecnologiasWeb/public/alumno'); 

				}else{
					session()->setFlashdata('msg', 'Password is incorrect.');
					return redirect()->to('http://localhost/TecnologiasWeb/public/login'); 
				}
	
			}else{
				session()->setFlashdata('msg', 'Email does not exist.');
				return redirect()->to('http://localhost/TecnologiasWeb/public/login'); 
			}

		} elseif ($email_exploded[1] == "utalca.cl") {
			
			$profesormodel = new ProfesorModel();
			$administradormodel = new AdministradorModel();
			$encargadomodel = new EncargadoModel();
			
			$data_profesor = $profesormodel->where('correo', $email)->first();
			$data_administrador = $administradormodel->where('correo', $email)->first();
			$data_encargado = $encargadomodel->where('correo', $email)->first();
			

			if($data_profesor){
				$pass = $data_profesor['password'];
				$authenticatePassword = password_verify($password, password_hash($pass, PASSWORD_DEFAULT));
				if($authenticatePassword){
					$ses_data = [
						'id' => $data_profesor['id'],
						'nombre' => $data_profesor['nombre'],
						'apellido' => $data_profesor['apellido_1'],
						'correo' => $data_profesor['correo'],
						'isLoggedIn' => TRUE
					];
	
					session()->set($ses_data);
					return redirect()->to('http://localhost/TecnologiasWeb/public/profesor'); 

				
				}else{
					session()->setFlashdata('msg', 'Password is incorrect.');
					return redirect()->to('http://localhost/TecnologiasWeb/public/login'); 
				}
	
			}elseif ($data_administrador) {
				$pass = $data_administrador['password'];
				$authenticatePassword = password_verify($password, password_hash($pass, PASSWORD_DEFAULT));
				if($authenticatePassword){
					$ses_data = [
						'id' => $data_administrador['id'],
						'nombre' => $data_administrador['nombre'],
						'apellido' => $data_administrador['apellido_1'],
						'correo' => $data_administrador['correo'],
						'isLoggedIn' => TRUE
					];
	
					session()->set($ses_data);
					return redirect()->to('http://localhost/TecnologiasWeb/public/administrador'); 

				
				}else{
					session()->setFlashdata('msg', 'Password is incorrect.');
					return redirect()->to('http://localhost/TecnologiasWeb/public/login'); 
				}
			}elseif ($data_encargado) {
				$pass = $data_encargado['password'];
				$authenticatePassword = password_verify($password, password_hash($pass, PASSWORD_DEFAULT));
				if($authenticatePassword){
					$ses_data = [
						'id' => $data_encargado['id'],
						'nombre' => $data_encargado['nombre'],
						'apellido' => $data_encargado['apellido_1'],
						'correo' => $data_encargado['correo'],
						'isLoggedIn' => TRUE
					];
	
					session()->set($ses_data);
					return redirect()->to('http://localhost/TecnologiasWeb/public/encargado'); 

				
				}else{
					session()->setFlashdata('msg', 'Password is incorrect.');
					return redirect()->to('http://localhost/TecnologiasWeb/public/login'); 
				}
			}
			else{
				session()->setFlashdata('msg', 'Email does not exist.');
				return redirect()->to('http://localhost/TecnologiasWeb/public/login'); 
			}

		}

	}

	public function alumno(){
		$moduloModelAlumno = new ModuloEstudianteModel();
		$moduloModel = new ModuloModel();

		$data_modulos_alumno = $moduloModelAlumno->where('estudiante', session('id'))->findAll();
		//$data_modulos_alumno = $moduloModelAlumno->getModulosAlumno($data_alumno['id']);
		$result['modulos'] = $data_modulos_alumno;

		$id_modulos = array();

		foreach ($result['modulos'] as $key => $value) {
			$id_modulos[] = $value['modulo'];
		}

		$data['modulos'] = $moduloModel->getModulosAlumno($id_modulos);

		return view('alumno', $data);
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
		return redirect()->to('public/login');
	}

	public function test1(){
		$moduloModelAlumno = new ModuloEstudianteModel();
		$moduloModel = new ModuloModel();

		$data_modulos_alumno = $moduloModelAlumno->where('estudiante', 1)->findAll();
		$data['modulos'] = $data_modulos_alumno;
		
		$info_modulos = array();

			foreach ($data['modulos'] as $key => $value) {
			  
				//echo $value['modulo'];
			  
				$info_modulos[] = $moduloModel->getModuloAlumno($value['modulo']);
				
			}

			print_r($info_modulos);
		  
	}

	public function test(){
		$moduloModelAlumno = new ModuloEstudianteModel();
		$moduloModel = new ModuloModel();

		$data_modulos_alumno = $moduloModelAlumno->where('estudiante', 1)->findAll();
		$data['modulos'] = $data_modulos_alumno;
		
		$info_modulos = array();
		$id_modulos = array();

			foreach ($data['modulos'] as $key => $value) {
			  
				//echo $value['modulo'];
				$id_modulos[] = $value['modulo'];
				//$info_modulos[] = $moduloModel->getModuloAlumno($value['modulo']);
				
			}

			$result = $moduloModel->getModulosAlumno($id_modulos);

			foreach ($result as $key => $value) {
			  
				echo $value['nombre'];
				
			}

			//print_r($info_modulos);
		  
	}

}