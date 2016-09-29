<?php

namespace Vehicles\Controllers;

use Illuminate\Http\Request;
use BW\Controllers\BaseController;
use Vehicles\Models\Veiculo;

class VehiclesController extends BaseController
{

    //
    public function index(){
        return view('BW\Vehicles::index');
    }

    //
    public function create()
    {
    }

    //
    public function store(Request $request)
    {
    }

    //
    public function edit($id)
    {
    }

    //
    public function update(Request $request)
    {
    }

    //
    public function destroy($id)
    {
    }

}
