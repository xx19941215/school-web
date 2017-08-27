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

        $school->increment('view_count', 1);

        $nearBySchools = $school->city->schools()
                        ->orderBy(\DB::raw('RAND()'))
                        ->take(10)
                        ->get();

        return view('school.show', compact('school', 'nearBySchools'));
    }
}
