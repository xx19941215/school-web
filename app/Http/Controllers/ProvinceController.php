<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProvinceRepository;

class ProvinceController extends Controller
{
	protected $province;

	public function __construct(ProvinceRepository $province)
	{
		$this->province = $province;
	}

    public function index()
    {
    	$provinces = $this->province->all();

    	return view('province.index', compact('provinces'));
    }

    public function show(Request $request)
    {
    	$province = $this->province->getById($request->id);

    	return view('province.show', compact('province'));
    }
}
