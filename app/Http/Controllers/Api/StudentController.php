<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{   
    public function gender(Request $request) {
        $students = config('students.students');
        $genders = config('students.genders');

        $gender = $request->input('filter');
        $result = [
            'error' => '',
            'response' => [],
        ];
        if (in_array($gender, $genders)) {
            if ($gender == 'all') {
                $result['response'] = $students;
            } else {
                foreach ($students as $student) {
                    if ($student['gender'] == $gender) {
                        $result['response'][] = $student;
                    }
                }
            }
        } else {
            $result['error'] = 'Filter not allowed';
        }
        return response()->json($result);
    }
}
