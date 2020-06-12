<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    private $students;
    private $genders;

    public function __construct() {
        $this->students = config('students.students');
        $this->genders = config('students.genders');
    }

    private function searchStudentbySlug($slug) {
        foreach($this->students as $student) {
            if ($student['slug'] == $slug) {
                return $student;
            }
        }
        throw new Exception('No student found with id: ' - $slug . '.');
    }

    public function index() {
        return view('students.index', ['students' => $this->students, 'genders' => $this->genders]);
    }

    public function show($slug) {
        try {
            $student = $this->searchStudentbySlug($slug);
        } catch (Exception $e) {
            abort('404');
        }
        return view('students.show', compact('student'));
        
    }
}
