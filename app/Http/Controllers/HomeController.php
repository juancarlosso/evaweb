<?php

namespace App\Http\Controllers;

use App\Models\Autorizacion;
use Illuminate\Http\Request;

use App\Models\Empresa;
use App\Models\Cliente;
use App\Models\OrdenCompra;
use App\Models\GastosAdministrativos;
use App\Models\OrdenPago;
use App\Models\Proveedor;
use App\Models\Personal;
use App\Models\Requisicion;
use Illuminate\Routing\Route;
use PhpParser\Node\Stmt\Switch_;

class HomeController extends Controller
{
    /*
    *
    * @brief
    * @author Juan Carlos Salinas Ojeda
    * @param string
    * @return
    *
    */
    public function show()
    {
        return view('home.home');
    }
}
