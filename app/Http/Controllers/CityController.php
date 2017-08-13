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
    	$schools = $city->schools;

    	return view('city.show', compact('city', 'schools'));
    }
}
