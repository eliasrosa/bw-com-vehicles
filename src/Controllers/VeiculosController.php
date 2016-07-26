<?php

namespace Automoveis\Controllers;

use Validator;
use BW\Forms\UserForm;
use Illuminate\Http\Request;
use BW\Util\DataGrid\DataGrid;
use BW\Controllers\BaseController;

class VeiculosController extends BaseController
{

    //
    public function index(){

        // //
        // $filter = \DataFilter::source(User::with('group'));
        // $filter->add('name','Nome', 'text');
        // $filter->add('email','E-mail', 'text');
        // $filter->submit('Pesquisar');
        // $filter->reset('Limpar');
        // $filter->build();

        // //
        // $grid = DataGrid::source($filter);
        // $grid->add('id', 'ID', true);
        // $grid->add('name', 'Nome', true);
        // $grid->add('email', 'E-mail', true);
        // $grid->add('group.name', 'Grupo', 'group_id');
        // $grid->addStatus();
        // $grid->addOptions('bw.users.edit', 'bw.users.destroy');
        // $grid->orderBy('id','desc');

        //
        return $this->view('Automoveis::veiculos.index')
            ->with([
                'grid' => $grid->build(),
                'filter' => $filter,
             ]
        );
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
