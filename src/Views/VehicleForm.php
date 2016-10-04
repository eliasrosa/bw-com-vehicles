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
    }

    private function createForm()
    {
        $this->addPanel('Dados do veículo', function($panel){
            $panel->addText('model', 'Modelo');
            $panel->addText('motor', 'Motor');
            $panel->addLicensePlate('license_plate', 'Placa');
            $panel->addCurrency('price', 'Preço');
            $panel->addInteger('year', 'Ano');
            $panel->addInteger('doors', 'Número de portas');
            $panel->addInteger('km', 'KM');
        });

        $this->addPanel('Comentário', function($panel){
            $panel->addTextArea('comments', 'Comentário')
                  ->addAttribute('style', 'height: 118px;');
        });

        return $this;
    }
}

