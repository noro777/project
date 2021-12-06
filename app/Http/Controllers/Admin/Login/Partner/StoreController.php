<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Request\Student\StoreRequest;
use App\Models\Student;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Student::create($data);
        return redirect()->route('student.index');
    }
}
