<?php

namespace Vehicles\Views;

use BW\Util\Form\Form;
use Vehicles\Models\Vehicle;

class VehicleForm extends Form
{

    public function __construct($id = 0){

        if($id){
            parent::__construct('PUT', route('bw.vehicles.update', $id), Vehicle::find($id));
        }else{
            parent::__construct('post', route('bw.vehicles.store'));
        }

        //
        $this->createForm();

        //
        $this->createPanelsRelationships(Vehicle::getModel());
    }

    private function createForm()
    {
        $this->addPanel('Dados do veículo', function($panel){
            $panel->addText('model', 'Modelo')
                  ->setWidth(6);  
            $panel->addCurrency('price', 'Preço');
            $panel->addText('motor', 'Motor')
                  ->setWidth(6);

            $panel->addInteger('km', 'KM');
            $panel->addInteger('year', 'Ano');
            $panel->addInteger('year_model', 'Ano do modelo');
            $panel->addInteger('doors', 'Número de portas');
            $panel->addLicensePlate('license_plate', 'Placa');

            //
            $panel->addTextAreaEditor('comments', 'Informações adicionais');
        });
    }
}

