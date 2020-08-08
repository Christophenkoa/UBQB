<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Entreprise;

class ClientsController extends Controller
{
    public function index() {
        $clients = Client::all();
        $entreprises = Entreprise::all();
    
        return view('clients.index', [
            'clients' => $clients,
            'entreprises' => $entreprises
        ]);
    }

    public function create() {
        $entreprises = Entreprise::all();
        return view('clients.create',compact('entreprises'));
    }

    public function store() {

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required|integer',
            'entreprise_id' => 'required'
        ]);

        Client::create($data);

        // $pseudo = request('name');
        // $email = request('email');
        // $status = request('status');


        // $client = new Client();
        // $client->name = $pseudo;
        // $client->email = $email;
        // $client->status = $status;
        // $client->save();

        return back();
    }
}
