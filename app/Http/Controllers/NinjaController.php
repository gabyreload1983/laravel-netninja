<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
use Illuminate\Http\Request;
use App\Models\Ninja;

class NinjaController extends Controller
{
    public function index() {
      // route --> /ninjas/
      // fetch all records & pass into the index view

      // $ninjas = Ninja::all();
      $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);

      return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    public function show($id) {
      // route --> /ninjas/{id}
      $ninja = Ninja::with('dojo')->findOrFail($id);
      
       return view('ninjas.show',[
        "ninja" => $ninja
    ]);
    }

    public function create() {
      // route --> /ninjas/create

      $dojos = Dojo::all();

      return view('ninjas.create', ['dojos' => $dojos]);
    }

    public function store(Request $request) {
      // --> /ninjas/ (POST)
      $validate = $request->validate([
        'name' => 'required|string|max:255',
        'skill' => 'required|integer|min:0|max:100',
        'bio' => 'required|string|min:20|max:1000',
        'dojo_id' => 'required|exists:dojos,id',
      ]);

      Ninja::create($validate);

      return redirect()->route('ninjas.index');
    }

    public function destroy($id) {
      // --> /ninjas/{id} (DELETE)
      // handle delete request to delete a ninja record from table
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}