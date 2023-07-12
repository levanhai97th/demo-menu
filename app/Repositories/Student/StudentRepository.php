<?php

namespace App\Repositories\Student;

use App\Models\Student;
use App\Repositories\EloquentRepository;
use Yajra\DataTables\DataTables;

class StudentRepository extends EloquentRepository implements StudentRepositoryInterface
{
    /***
     * @var Student
     */
    protected $model;

    /**
     * get model
     *
     * @return string
     */
    public function getModel()
    {
        return Student::class;
    }

    public function index(array $filter)
    {
        $searchName = $filter['name'];
        $searchUserName = $filter['userName'];
        $students = $this->model->select('*')
            ->when($searchName, function ($query, $searchName) {
            $query->where('name', 'like', "{$searchName}%");
            })
            ->when($searchUserName, function ($query, $searchUserName) {
                $query->where('username', 'like', "{$searchUserName}%");
            });
        return Datatables::of($students)
            ->addIndexColumn()
            ->addColumn('action', function ($p) {
                return '<a class="btn btn-xs btn-danger" onclick="return confirm(\'Delete this image ?\');" href="#"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
            })
            ->make(true);
    }
}
