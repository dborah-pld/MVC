<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Licorne;

class LicorneController extends Controller
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
      $licornes = Licorne::all();

      return view('licornes.index', compact('licornes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('licornes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $licorne = new Licorne();
      $licorne->name = $request->get('name');
      $licorne->tourniquet = $request->get('tourniquet');
      $licorne->birth_date = $request->get('birth_date');
      $licorne->birth_place = $request->get('birth_place');
      $licorne->mane_color = $request->get('mane_color');
      $licorne->sex = $request->get('sex');

      $licorne->save();

      return redirect()->route('licornes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $licorne = Licorne::find($id);
      return view('licornes.show', compact('licorne'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $licorne = Licorne::find($id);

      return view('licornes.edit', compact('licorne'));
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
      $licorne = Licorne::find($id);
      $licorne->name = $request->get('name');
      $licorne->tourniquet = $request->get('tourniquet');
      $licorne->birth_date = $request->get('birth_date');
      $licorne->birth_place = $request->get('birth_place');
      $licorne->mane_color = $request->get('mane_color');
      $licorne->sex = $request->get('sex');
      $licorne->save();

      return redirect()->route('licornes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $licorne = Licorne::find($request->get('id'));
      $licorne->delete();

      return redirect()->route('licornes.index');
    }
}
