<?php

namespace App\Models;
use CodeIgniter\Model;

class AlumnoModel extends Model
{
  protected $table      = 'alumno';
  protected $primaryKey = 'id_alumno';

  protected $returnType = 'array';

  protected $allowedFields = ['no_control' ,'nombre_alumno', 'apellidos', 'fecha_nacimiento', 'semestre_actual', 'carrera', 'especialidad'];

  protected $useTimestamps  = true;
  protected $createdField   = 'created_at';
  protected $updateField    = 'updated_at';
}
