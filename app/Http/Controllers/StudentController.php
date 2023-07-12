<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Repositories\Student\StudentRepositoryInterface;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $model;
    private $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->model = app()->make(Student::class);
        $this->studentRepository = $studentRepository;
    }

    public function index()
    {
        return view('students.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getStudents(Request $request)
    {
        $filter = $request->all();
        $students = $this->studentRepository->index($filter);

        return $students;
    }
}
