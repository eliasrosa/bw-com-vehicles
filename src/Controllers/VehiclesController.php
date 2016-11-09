<?php

namespace Vehicles\Controllers;

use Vehicles\Models\Vehicle;
use Illuminate\Http\Request;
use Vehicles\Views\VehicleForm;
use BW\Util\Validation\Validator;
use BW\Controllers\BaseController;

class VehiclesController extends BaseController
{
    //
    public function index(){

        $vehicles = Vehicle::all();
        $relations_menu = \BWAdmin::createRelationshipsMenu(Vehicle::class);

        //
        return view('BW\Vehicles::index')->with([
            'vehicles' => $vehicles,
            'relations_menu' => $relations_menu,
        ]);
    }

    //
    public function create()
    {
        //
        $form = new VehicleForm();

        //
        return $this->view('BW\Vehicles::create')
            ->with(compact('form'));
    }

    //
    public function store(Request $request)
    {
        //
        $validator = Validator::make(Vehicle::class, VehicleForm::class, $request->all(), [
            'model'         => 'required',
            'motor'         => 'required',
            'year'          => 'required',
            'doors'         => 'required',
            'price'         => 'required',
            'license_plate' => 'required',
            'km'            => 'required',
        ]);

        //
        if ($validator->fails()) {

            $this->flash()->error('Ops! Alguns campos não foram preenchidos corretamente');

            return back()
                ->withErrors($validator)
                ->withInput();
        }

        //
        $u = new Vehicle();
        $u->km = $request->get('km');
        $u->model = $request->get('model');
        $u->motor = $request->get('motor');
        $u->year = $request->get('year');
        $u->doors = $request->get('doors');
        $u->price = str_replace(',', '.', str_replace('.', '', $request->get('price')));
        $u->license_plate = strtoupper($request->get('license_plate'));
        $u->comments = $request->get('comments');
        $u->save();

        //
        $u->saveRelationships();

        //
        $this->flash()->success('Veículo adicionado com sucesso!');
        return redirect()->route('bw.vehicles.index');
    }

    //
    public function edit($id)
    {
        //
        $form = new VehicleForm($id);

        //
        return $this->view('BW\Vehicles::create')
            ->with(compact('form'));
    }

    //
    public function update(Request $request)
    {
        $validator = Validator::make(Vehicle::class, VehicleForm::class, $request->all(), [
            'model'         => 'required',
            'motor'         => 'required',
            'year'          => 'required',
            'doors'         => 'required',
            'price'         => 'required',
            'km'            => 'required',
            'license_plate' => 'required',
        ]);

        //
        if ($validator->fails()) {

            $this->flash()->error('Alguns campos não foram preenchidos corretamente');

            return back()
                ->withErrors($validator)
                ->withInput();
        }

        //
        $u = Vehicle::find($request->get('id'));
        $u->km = $request->get('km');
        $u->model = $request->get('model');
        $u->motor = $request->get('motor');
        $u->year = $request->get('year');
        $u->doors = $request->get('doors');
        $u->price = str_replace(',', '.', str_replace('.', '', $request->get('price')));
        $u->license_plate = strtoupper($request->get('license_plate'));
        $u->comments = $request->get('comments');
        $u->save();

        //
        $u->saveRelationships();

        //
        $this->flash()->success('Veículo atualizado com sucesso!');
        return redirect()->route('bw.vehicles.index');
    }

    //
    public function destroy($id)
    {
        // delete
        $u = Vehicle::find($id);
        $u->deleteRelationships();
        $u->delete();

        // redirect
        $this->flash()->success('Veículo removido com sucesso!');
        return redirect()->route('bw.vehicles.index');
    }

}
