<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        // N+1 Query Problem
        $students = Student::all(); // This will cause multiple queries

        return view('students.index', compact('students'));
    }

    public function optimized()
    {
        // Solving the N+1 Problem with Query Optimization
        $students = Student::query()->select('id', 'name', 'email', 'phone', 'address')->get();

        return view('students.index', compact('students'));
    }
}

