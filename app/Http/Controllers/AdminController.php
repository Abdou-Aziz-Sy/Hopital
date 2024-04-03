<?php

namespace App\Http\Controllers;
use App\Models\Medecin;
use App\Models\Compte;
use App\Models\Hopital;
use App\Models\User;
use App\Models\Assistant;
use App\Models\LoginController;
use App\Models\Event;
use App\Models\Patient;
use App\Models\Disponibilite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use DB;
class AdminController extends Controller
{
    public function admin()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $plannings = Event::all();
            $assistants = Assistant::all();
            $patients = Patient::all();
            $count = Patient::count();
            $assist = Assistant::count();
            $plan = Event::count();
            $dispo = Disponibilite::count();
            $medecins = Medecin::all();
            $med = Medecin::count();
            $Medecins = Medecin::all();
            $Hopitals = Hopital::all();
            return view('admin.admin', compact('plannings', 'assistants', 'patients', 'count', 'assist', 'plan', 'dispo', 'medecins', 'med', 'Hopitals'));
        }    
    }
    public function doctor()
    {
        $Hopitals = Hopital::all();
        $Medecins = Medecin::all();
        return view('admin.gestionDoctor', compact('Hopitals', 'Medecins'));
    }
    public function hopital()
    {
        $Hopitals = Hopital::all();
        return view('admin.hopital', compact('Hopitals'));
    }
    public function adminDoss()
    {
        return view('admin.dossier');
    }
    public function assist()
    {
        $Medecins = Medecin::all();
        $assistants = Assistant::all();
        return view('admin.assistant', compact('Medecins', 'assistants'));
    }
    public function Rdv()
    {
        return view('admin.RendezVous');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'adresse' => 'required',
            'services' => 'required',
        ]);
        $Hopital = new Hopital();
        $Hopital->nom = $request->input('nom');
        $Hopital->adresse = $request->input('adresse');
        $Hopital->services = $request->input('services');
        $Hopital->save();
        // Redirection avec un message de succès
        return redirect()->route('hopital.store')->with('success', 'L\'hôpital a été créé avec succès.');
    }
    public function docteur(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Matricule' => 'required',
            'Nom' => 'required',
            'Prenom' => 'required',
            'Mail' => 'required',
            'Adresse' => 'required',
            'Hopital' => 'required',
        ]);
        $medecin = new Medecin();
        $medecin->Matricule = $request->input('matricule');
        $medecin->Nom = $request->input('nom');
        $medecin->Prenom = $request->input('prenom');
        $medecin->Mail = $request->input('mail');
        $medecin->Adresse = $request->input('adresse');
        $medecin->Hopital = $request->input('hopital');
        $medecin->save();
        $compte = new Compte();
        $compte->Matricule = $request->input('matricule');
        $mdp = '12345678';
        $role = 'Medecin';
        $compte->motDePasse = $mdp;
        $compte->Role = $role;
        $compte->Login = $request->input('adresse');
        $compte->save();
        $user = new User();
        $user->email = $request->input('mail');
        $user->matricule = $request->input('matricule');
        $mdp = Hash::make('12345678');
        $user->password = $mdp; 
        $user->role = $role;
        $user->save();

        return redirect()->route('admin.docteur')->with('success', 'Medecin ajouté avec succès!');
    }
    public function Assistant(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'mail' => 'required',
            'adresse' => 'required',
            'medecin' => 'required',
        ]);
        $assistant = new Assistant();
        $assistant->matricule = $request->input('matricule');
        $assistant->nom = $request->input('nom');
        $assistant->prenom = $request->input('prenom');
        $assistant->email = $request->input('mail');
        $assistant->adresse = $request->input('adresse');
        $assistant->Matricule_1 = $request->input('medecin');
        $assistant->save();
        // Redirection avec un message de succès
        $users = new User();
        $users->email = $request->input('mail');
        $users->matricule = $request->input('matricule');
        $mdps = Hash::make('12345678');
        $users->password = $mdps; 
        $roles = 'Assistant';
        $users->role = $roles;
        $users->save();

        return redirect()->route('admin.assistant')->with('success', 'L\'Assistant a été créé avec succès.');
    }
}