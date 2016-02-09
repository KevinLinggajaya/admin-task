<?php

namespace App\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\BusinessRequest;
use App\Http\Controllers\Controller;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businesses = Business::all();
        return view("business.index", compact("businesses"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $business = new Business();
        return view("business.create", compact("business"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusinessRequest $request)
    {
        $business = new Business();
        $business->name = $request->name;
        $business->contact = $request->contact;
        $business->email = $request->email;
        $business->line_1 = $request->line_1;
        $business->line_2 = $request->line_2;
        $business->line_3 = $request->line_3;
        $business->city = $request->city;
        $business->state = $request->state;
        $business->postcode = $request->postcode;
        $business->save();

        $request->flash();
        return redirect(action("BusinessController@index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $business = Business::findOrFail($id);
        return view("business.edit", compact("business"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BusinessRequest $request, $id)
    {
        $business = Business::findOrFail($id);
        $business->name = $request->name;
        $business->contact = $request->contact;
        $business->email = $request->email;
        $business->line_1 = $request->line_1;
        $business->line_2 = $request->line_2;
        $business->line_3 = $request->line_3;
        $business->city = $request->city;
        $business->state = $request->state;
        $business->postcode = $request->postcode;
        $business->save();

        $request->flash();
        return redirect(action("BusinessController@index"));    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Business::destroy($id);
        return redirect(action('BusinessController@index'));
    }
}
