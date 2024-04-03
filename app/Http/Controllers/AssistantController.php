<?php

namespace App\Http\Controllers;
use App\Http;
use App\Http\Models;
use App\Models\aspect_socio_demographique;
use App\Models\Medecin;
use App\Models\Event;
use App\Models\Ordonnance;
use App\Models\Patient;
use App\Models\Disponibilite;
use App\Models\Assistant;
use App\Models\Hopital;
use App\Models\LoginController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use Validator;
use DB;

class AssistantController extends Controller
{
    public function assistant()
    {
        $Hopitals = Hopital::all();
        $Medecins = Medecin::all();
        $Assistants = Assistant::all();
        return view('Medecin.assistants', compact('Hopitals', 'Medecins', 'Assistants'));
    }
}
