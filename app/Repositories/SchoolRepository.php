<?php
namespace App\Repositories;

use App\School;

class SchoolRepository
{
	use BaseRepository;

	protected $model;

	public function __construct(School $city)
	{
		$this->model = $city;
	}
}