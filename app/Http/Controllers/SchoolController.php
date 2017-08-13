<?php
namespace App\Http\Controllers;

use App\Repositories\SchoolRepository;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    protected $school;

    public function __construct(SchoolRepository $school)
    {
        $this->school = $school;
    }

    public function show(Request $request)
    {
        $school = $this->school->getById($request->id);

        return view('school.show', compact('school'));
    }
}
