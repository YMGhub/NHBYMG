<?php

namespace App\Http\Controllers;

use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\PropertyController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $ourServiceController;
    protected $propertyController;

    public function __construct(OurServiceController $ourServiceController, PropertyController $propertyController)
    {
        $this->ourServiceController = $ourServiceController;
        $this->propertyController = $propertyController;
    }

    public function index()
    {
        // Llama a los métodos de cada controlador para obtener la información
        $data    = $this->ourServiceController->ourservices_info2();
        $dataproperties  = $this->propertyController->properties_info2(); // Si tienes otro método específico, reemplázalo aquí

        // Pasa la información a la vista
        return view('welcome', compact('data', 'dataproperties'));
    }
}
