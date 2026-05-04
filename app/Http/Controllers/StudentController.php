<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StudentController extends Controller
{
    public function index(): View
    {
        if (! Gate::allows(ability: 'view-students')) {
            abort(code: 401);
        }
        
        // $students = Student::with('majors')->get();
        // return view('students.index', compact('students'));

    }

    public function show(string $id)
    {
        if (! Gate::allows('view-student')) {
            abort(401);
        }
    }

    public function create()
    {
        if (! Gate::allows('store-student')) {
            abort(401);
        }
    }

    public function store(Request $request)
    {
        if (! Gate::allows('store-student')) {
            abort(401);
        }
    }

    public function edit(string $id)
    {
        if (! Gate::allows('edit-student')) {
            abort(401);
        }
    }

    public function update(Request $request, string $id)
    {
        if (! Gate::allows('edit-student')) {
            abort(401);
        }
    }

    public function destroy(string $id)
    {
        if (! Gate::allows('destroy-student')) {
            abort(401);
        }
    }
}
