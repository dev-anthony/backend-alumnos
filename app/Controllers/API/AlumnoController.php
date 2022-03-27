<?php
namespace App\Controllers\API;

use App\Models\AlumnoModel;
use CodeIgniter\RESTful\ResourceController;


class AlumnoController extends ResourceController
{
  
  public function __construct()
  {
    $this->model = $this->setModel(new AlumnoModel() );
    $this->validation = \Config\Services::validation();
  }
    public function index()
    {
        try {
          if ( $alumno = $this->model->findAll() ):
            return $this->response->setJSON($alumno);
          else:
            return $this->failNotFound('No se encontraron alumnos');
          endif;
        } catch (\Exception $e) {
          return $this->failServerError('Error en el servidor', $e->getMessage() );
        }

    }

    public function show($id = null)
    {
      try {
        //code...
        if ( $id = $this->model->find($id) ){
          return $this->respond([
            'msg' => 'El alumno se encontro correctamente',
            'alumno' => $id
          ],200);

        } else {
          return $this->respond(
          ['error' => 'No se puede encontrar el alumno'],
          500);
        }
      } catch (\Exception $e) {
        //Exception $e;
        return $this->failServerError('Error en el servidor' ,$e->getMessage() );
      }
    }
}
