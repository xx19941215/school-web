<?php
namespace App\Repositories;

use App\City;

class CityRepository
{
	use BaseRepository;

	protected $model;

	public function __construct(City $city)
	{
		$this->model = $city;
	}
}