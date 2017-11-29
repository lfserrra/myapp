<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;

use App\Car;

class CarController extends BaseController
{
  public function index() 
  {

  }

  public function create()
  {

  }

  public function store()
  {

  }

  public function show($id)
  {
	  $car = [
		'id' => 1,
		'make' => 1,
		'model' => 1,
		'produced_on' => 'HOJE'
	];
	
    return view('cars.show', array('car' => $car));
  }

  public function edit($id)
  {

  }

  public function update($id)
  {

  }

  public function destroy($id)
  {

  }
}
