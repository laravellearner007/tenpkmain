<?php

namespace App\Http\Controllers\Tenacademy;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function grid()
    {
        return view('pages.tenacademy.course.course');
    }

    public function list()
    {
        return view('pages.tenacademy.course.course-list');
    }

    public function topic()
    {
        return view('pages.tenacademy.course.course-path');
    }

    public function lesson()
    {
        return view('pages.tenacademy.course.course-lesson');
    }

    public function detail($id)
    {
        $course = Courses::where('id', $id)->get();
        foreach ($course as $row) {
            $course_id = $row->id;
            $price = $row->price;
            $title = $row->title;
            $duration = $row->duration;
        }
        // dd($course);
        return view('pages.tenacademy.course.course-detail', compact('price', 'duration', 'title', 'course_id'));
    }
}