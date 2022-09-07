<?php

namespace App\Http\Controllers\Tenacademy;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class TenAcademyController extends Controller
{
    public function index()
    {
        $course = Courses::all();
        return view('pages.tenacademy.frontPages.front', compact('course'));
    }
}