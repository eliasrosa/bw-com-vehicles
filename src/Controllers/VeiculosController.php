<?php

namespace Veiculos\Controllers;

use Illuminate\Http\Request;
use BW\Controllers\BaseController;
use Veiculos\Models\Veiculo;

class VeiculosController extends BaseController
{

    //
    public function index(){
        return view('BW\Veiculos::index');
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
