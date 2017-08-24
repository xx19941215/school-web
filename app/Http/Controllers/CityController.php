<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CityRepository;

class CityController extends Controller
{
	protected $city;

	public function __construct(CityRepository $city)
	{
		$this->city = $city;
	}

    public function show(Request $request)
    {
    	$city = $this->city->getById($request->id);

    	$page = $request->get('page');

    	$schools = $city->schools->forPage($page, 10);

        $paginator = $this->paginate($city->schools, 10, $request->get('page'), [
            'path' => ''
        ]);

    	return view('city.show', compact('city', 'schools', 'paginator'));
    }
}
