<?php

namespace App\Http\Controllers;
use App\Http;
use App\Http\Models;
use App\Models\aspect_socio_demographique;
use App\Models\Medecin;
use App\Models\Event;
use App\Models\Ordonnance;
use App\Models\Patient;
use App\Models\Hopital;
use App\Models\Disponibilite;
use App\Models\Assistant;
use App\Models\LoginController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use Validator;
use DB;

class MedecinController extends Controller
{
    public function RendezVous()
    {
        $planning = Event::all();
        $patients = Patient::all();
        return view('Medecin.RendezVous', compact('planning', 'patients'));
    }
    public function dashboard()
    {
        if (Auth::check() && Auth::user()->role === 'medecin') {
            $plannings = Event::all();
            $assistants = Assistant::all();
            $patients = Patient::all();
            $count = Patient::count();
            $assist = Assistant::count();
            $plan = Event::count();
            $dispo = Disponibilite::count();
            $medecins = Medecin::all();
            return view('dashboard', compact('plannings', 'assistants', 'patients', 'count', 'assist', 'plan', 'dispo', 'medecins'));
        }
    }
    public function dossier()
    {
        $patients = Patient::all();
        return view('Medecin.dossier', compact('patients'));
    }
    public function createDossier(Request $request)
    {
        $count = Patient::count();
        $counts = $count + 1;
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'idSigneClinique' => 'required',
            'idAntecedent' => 'required',
            'idTraitement' => 'required',
            'idEvolution' => 'required',
            'idSigneParaclinique' => 'required',
            'idSigneParaclinique' => 'required',
            'idAspect' => 'required',
            'matricules' => 'required',
        ]);
        $patient = new Patient();
        $patient->nom = $request->input('nom');
        $patient->prenom = $request->input('prenom');
        $patient->idSigneClinique = $counts;
        $patient->idAntecedent = $counts;
        $patient->idTraitement = $counts;
        $patient->idEvolution = $counts;
        $patient->idSigneParaclinique = $counts;
        $patient->idAspect = $counts;
        $patient->Matricules = $request->input('matricules');

        $patient->save();
        $validator = Validator::make($request->all(), [
            'age' => 'required',
            'initiale' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'profession' => 'required',
            'sexe' => 'required',
            'matrimoniale' => 'required',
            'economique' => 'required',
        ]);
        $aspets = new aspect_socio_demographique();
        $aspets->Age = $request->input('age');
        $aspets->Initiales = $request->input('initiale');
        $aspets->Adresse = $request->input('email');
        $aspets->Telephone = $request->input('phone');
        $aspets->Profession = $request->input('profession');
        $aspets->Sexe = $request->input('sexe');
        $aspets->Status_Matrimonial = $request->input('matrimoniale');
        $aspets->Niveau_Socio_Economique = $request->input('economique');

        $patient->save();
        $aspets->save();
        return redirect('/dossier')->with('success', 'Dossier Ajouté avec succès');
    }
    public function index()
    {
        return view('Medecin.index');
    }

    public function create(Request $request)
    {
        $item = new Event();
        $item->title = $request->title;
        $item->start = $request->start;
        $item->finish = $request->finish;
        $item->description = $request->description;
        $item->color = $request->color;
        $item->save();

        return redirect('/fullcalender');
    }


    public function getEvents()
    {
        $schedules = Event::all();
        return response()->json($schedules);
    }

    public function deleteEvent($id)
    {
        $schedule = Event::findOrFail($id);
        $schedule->delete();

        return response()->json(['message' => 'Event deleted successfully']);
    }

    public function update(Request $request, $id)
    {
        $schedule = Event::findOrFail($id);

        $schedule->update([
            'start' => Carbon::parse($request->input('start_date'))->setTimezone('UTC'),
            'finish' => Carbon::parse($request->input('end_date'))->setTimezone('UTC'),
        ]);

        return response()->json(['message' => 'Event moved successfully']);
    }

    public function resize(Request $request, $id)
    {
        $schedule = Event::findOrFail($id);

        $newEndDate = Carbon::parse($request->input('end_date'))->setTimezone('UTC');
        $schedule->update(['finish' => $newEndDate]);

        return response()->json(['message' => 'Event resized successfully.']);
    }

    public function search(Request $request)
    {
        $searchKeywords = $request->input('title');

        $matchingEvents = Event::where('title', 'like', '%' . $searchKeywords . '%')->get();

        return response()->json($matchingEvents);
    }
    public function ordonnance()
    {
        $patients = Patient::all();
        return view('Medecin.ordonnance', compact('patients'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nomMedecin' => 'required',
            'Medicament' => 'required',
            'Posologie' => 'required',
            'date' => 'required',
            'num' => 'required',
            'mat' => 'required',
        ]);
        $ordonnance = new Ordonnance();
        $ordonnance->nomMedecin = $request->input('medecin');
        $ordonnance->Medicament = $request->input('medicaments');
        $ordonnance->Posologie = $request->input('posologie');
        $ordonnance->date = $request->input('date');
        $med = Auth::user()->name;
        $ordonnance->signature = $med;
        $ordonnance->Numero = $request->input('num');
        $ordonnance->Matricule = $request->input('mat');
        $ordonnance->save();
         return redirect()->route('ordonnance.store')->with('success', 'Ordonnance créée avec succès!');
    }
    public function patient()
    {
        $Hopitals = Hopital::all();
        $Medecins = Medecin::all();
        $patients = Patient::all();
        return view('Medecin.patient', compact('Hopitals', 'Medecins', 'patients'));
    }
}
