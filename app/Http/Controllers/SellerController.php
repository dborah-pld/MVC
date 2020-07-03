<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seller_sheet;
use App\Models\Licorne;
use App\User;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sellers_sheet = Seller_sheet::all();
      $users = User::all();
      $licornes = Licorne::all();
      return view('sellers.index', compact('sellers_sheet', 'users', 'licornes'));
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
      return view('sellers.create', compact('users', 'licornes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $seller_sheet = new Seller_sheet();
      $seller_sheet->seller_id = $request->get('user_id') != null ? $request->get('user_id') : 'Non-renseigné';
      $seller_sheet->unicorn_id = $request->get('licorne_id') != null ? $request->get('licorne_id') : 'Non-renseigné';
      $seller_sheet->references = $request->get('references') != null ? $request->get('references') : 'Non-renseignée';
      $seller_sheet->price = $request->get('price') != null ? $request->get('price') : 0;
      $seller_sheet->sell_place = $request->get('sell_place') != null ? $request->get('sell_place') : 'Non-renseignée';

      $seller_sheet->save();

      return redirect()->route('sellers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seller_sheet = Seller_sheet::find($id);
        return view('sellers.show', compact('seller_sheet'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $seller_sheet = Seller_sheet::find($id);
      $users = User::all();
      $licornes = Licorne::all();
      return view('sellers.edit', compact('seller_sheet', 'users', 'licornes'));
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
      $seller_sheet = Seller_sheet::find($id);
      $seller_sheet->seller_id = $request->get('user_id') != null ? $request->get('user_id') : 'Non-renseigné';
      $seller_sheet->unicorn_id = $request->get('licorne_id') != null ? $request->get('licorne_id') : 'Non-renseigné';
      $seller_sheet->references = $request->get('references') != null ? $request->get('references') : 'Non-renseignée';
      $seller_sheet->price = $request->get('price') != null ? $request->get('price') : 'Non-renseigné';
      $seller_sheet->sell_place = $request->get('sell_place') != null ? $request->get('sell_place') : 'Non-renseignée';

      $seller_sheet->save();

      return redirect()->route('sellers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $seller_sheet = Seller_sheet::find($request->get('id'));
      $seller_sheet->delete();

      return redirect()->route('sellers.index');
    }
}
