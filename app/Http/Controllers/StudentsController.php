<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    private $students;

    public function __construct() {
        $this->students = config('students');
    }

    private function searchStudentbyId($id) {
        foreach($this->students as $student) {
            if ($student['id'] == $id) {
                return $student;
            }
        }
        throw new Exception('No student found with id: ' - $id . '.');
    }

    public function index() {
        return view('students.index', ['students' => $this->students]);
    }

    public function show($id) {
        try {
            $student = $this->searchStudentbyId($id);
        } catch (Exception $e) {
            abort('404');
        }
        return view('students.show', compact('student'));
    }
}
