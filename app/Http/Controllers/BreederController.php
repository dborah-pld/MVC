<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Breeder_sheet;
use App\Models\Licorne;
use App\User;

class BreederController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $breeders_sheet = Breeder_sheet::all();
      $users = User::all();
      $licornes = Licorne::all();
      return view('breeders.index', compact('breeders_sheet', 'users', 'licornes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $users = User::all();
      $licornes = Licorne::all();
      return view('breeders.create', compact('users', 'licornes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $breeder_sheet = new Breeder_sheet();
      $breeder_sheet->breeder_id = $request->get('user_id') != null ? $request->get('user_id') : 'Non-renseigné';
      $breeder_sheet->unicorn_id = $request->get('licorne_id') != null ? $request->get('licorne_id') : 'Non-renseigné';
      $breeder_sheet->reproduction_date1 = $request->get('reproduction_date1') != null ? $request->get('reproduction_date1') : '0000-01-01';
      $breeder_sheet->reproduction_date2 = $request->get('reproduction_date2') != null ? $request->get('reproduction_date2') : '0000-01-01';
      $breeder_sheet->reference = $request->get('reference') != null ? $request->get('reference') : 'Non-renseignée';
      $breeder_sheet->is_pregnant = $request->get('is_pregnant') != null ? $request->get('is_pregnant') : '0';
      $breeder_sheet->nb_childs = $request->get('nb_childs') != null ? $request->get('nb_child') : '0';

      $breeder_sheet->save();

      return redirect()->route('breeders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $breeder_sheet = Breeder_sheet::find($id);
      return view('breeders.show', compact('breeder_sheet'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $breeder = Breeder_sheet::find($id);
      $users = User::all();
      $licornes = Licorne::all();
      return view('breeders.edit', compact('breeder_sheet', 'users', 'licornes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $breeder_sheet = Breeder_sheet::find($id);
      $breeder_sheet->breeder_id = $request->get('user_id') != null ? $request->get('user_id') : 'Non-renseigné';
      $breeder_sheet->unicorn_id = $request->get('licorne_id') != null ? $request->get('licorne_id') : 'Non-renseigné';
      $breeder_sheet->reproduction_date1 = $request->get('reproduction_date1') != null ? $request->get('reproduction_date1') : '0000-01-01';
      $breeder_sheet->reproduction_date2 = $request->get('reproduction_date2') != null ? $request->get('reproduction_date2') : '0000-01-01';
      $breeder_sheet->reference = $request->get('reference') != null ? $request->get('reference') : 'Non-renseignée';
      $breeder_sheet->is_pregnant = $request->get('is_pregnant') != null ? $request->get('is_pregnant') : '0';
      $breeder_sheet->nb_childs = $request->get('nb_childs') != null ? $request->get('nb_child') : '0';

      $breeder_sheet->save();

      return redirect()->route('breeders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Request $request)
     {
       $breeder_sheet = Breeder_sheet::find($request->get('id'));
       $breeder_sheet->delete();

       return redirect()->route('breeders.index');
     }
}
