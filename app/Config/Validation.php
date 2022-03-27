<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    public $alumno_validation = [
        'nombre_alumno' => [
            'label' => 'Nombre',
            'rules' => 'required|alpha_space|min_length[3]|max_length[100]',
            'errors' => [
                'required' => 'El nombre del alumno es requerido',
                'alpha_space' => 'El nombre del alumno debe contener solo letras y espacios',
                'min_length' => 'El nombre del alumno debe tener al menos {param} caracteres',
                'max_length' => 'El nombre del alumno debe tener como máximo {param} caracteres',
            ],
        ],
        'apellido_paterno' => [
            'label' => 'Apellido Paterno',
            'rules' => 'required|alpha_space|min_length[3]|max_length[100]',
            'errors' => [
                'required' => 'El apellido paterno del alumno es requerido',
                'alpha_space' => 'El apellido paterno del alumno debe contener solo letras y espacios',
                'min_length' => 'El apellido paterno del alumno debe tener al menos {param} caracteres',
                'max_length' => 'El apellido paterno del alumno debe tener como máximo {param} caracteres',
            ],
        ],
        'apellido_materno' => [
            'label' => 'Apellido Materno',
            'rules' => 'required|alpha_space|min_length[3]|max_length[100]',
            'errors' => [
                'required' => 'El apellido materno del alumno es requerido',
                'alpha_space' => 'El apellido materno del alumno debe contener solo letras y espacios',
                'min_length' => 'El apellido materno del alumno debe tener al menos {param} caracteres',
                'max_length' => 'El apellido materno del alumno debe tener como máximo {param} caracteres',
            ],
        ],
        'fecha_nacimiento' => [
            'label' => 'Fecha de Nacimiento',
            'rules' => 'required|date',
            'errors' => [
                'required' => 'La fecha de nacimiento del alumno es requerida',
                'date' => 'La fecha de nacimiento del alumno debe ser una fecha válida',
            ],
        ],
        'no_control' => [
            'label' => 'No. de control',
            'rules' => 'required|min_length[9]|max_length[9]',
            'errors' => [
                'required' => 'El número de control es requerido',
                'min_length' => 'El número de control debe tener al menos {param} caracteres',
                'max_length' => 'El número de control debe tener como máximo {param} caracteres',
            ],
        ],
        'semestre' => [
            'label' => 'Semestre',
            'rules' => 'required|min_length[1]|max_length[2]',
            'errors' => [
                'required' => 'El semestre es requerido',
                'min_length' => 'El semestre debe tener al menos {param} caracteres',
                'max_length' => 'El semestre debe tener como máximo {param} caracteres',
            ],
        ],
        'carrera' => [
            'label' => 'Carrera',
            'rules' => 'required|alpha_space|min_length[3]|max_length[100]',
            'errors' => [
                'required' => 'La carrera es requerida',
                'alpha_space' => 'La carrera debe contener solo letras y espacios',
                'min_length' => 'La carrera debe tener al menos {param} caracteres',
                'max_length' => 'La carrera debe tener como máximo {param} caracteres',
            ],
        ],
        'especialidad' => [
            'label' => 'Especialidad',
            'rules' => 'required|alpha_space|min_length[3]|max_length[100]',
            'errors' => [
                'required' => 'La especialidad es requerida',
                'alpha_space' => 'La especialidad debe contener solo letras y espacios',
                'min_length' => 'La especialidad debe tener al menos {param} caracteres',
                'max_length' => 'La especialidad debe tener como máximo {param} caracteres',
            ],
        ],
    ];
}
