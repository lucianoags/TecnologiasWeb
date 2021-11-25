<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;



class UserController extends BaseController
{

    /**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
// 

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */

	public function index()
    {
		echo 'prueba';
        return view('test');
    }


	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
	}



    public function getTarjetas()
    {
		if($this-> request -> getMethod() == 'get') {
            $rules = [
                'id' => 'required|min_length[2]|max_length[99]',

            ];
            $errors = [
				'id' => [
                    'required' => 'No se ha definido una id de estudiante'
                ],
            ];
            if(!$this->validate($rules, $errors)){
                $data['validation'] = $this->validator;
            } else {
				$id = $this->request->getVar('id');

				$model = new ModuloModel();
				$users = $model->getModulosDeAlumno($id);
				echo json_encode($users);
            }
        }
    }

}