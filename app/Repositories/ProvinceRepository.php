<?php
namespace App\Repositories;

use App\Province;

class ProvinceRepository
{
	use BaseRepository;

	protected $model;

	public function __construct(Province $province)
	{
		$this->model = $province;
	}
}