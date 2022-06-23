<?php

namespace App\Http\Controllers;

use App\Models\Gledalac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isNull;

class GledalacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gledalac  = Gledalac:: all();

        return response()->json($gledalac, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator:: make($request -> all(),[
            'name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
        ]);

        if($validator -> fails())
        {
            return response()->json($validator -> errors());
        }

        $gledalac = Gledalac::create([
            'name' => $request->name,
            'last_name' => $request->last_name
        ]);

        return response()->json(["Gledalac je uspesno kreiran",$gledalac],200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gledalac  $gledalac
     * @return \Illuminate\Http\Response
     */
    public function show($gledalac_id)
    {
        $gledalac = Gledalac::find($gledalac_id);

        if(is_null($gledalac)) {
            return response() -> json("Gledalac sa unetim ID-jem nije pronadjen",404);
        }

        return response() -> json($gledalac,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gledalac  $gledalac
     * @return \Illuminate\Http\Response
     */
    public function edit(Gledalac $gledalac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gledalac  $gledalac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$gledalac_id)
    {
        $validator = Validator:: make($request -> all(),[
            'name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
        ]);

        if($validator -> fails())
        {
            return response()->json($validator -> errors());
        }

        $gledalac = Gledalac::find($gledalac_id);

        if(is_null($gledalac)) {
            return response() -> json("Gledalac sa unetim ID-jem nije pronadjen",404);
        }

        foreach($request-> all() as $key => $value) {
            $gledalac[$key] = $value;
        }

        $gledalac -> save();
        return response() -> json(["Gledalac je uspesno sacuvan",$gledalac],200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gledalac  $gledalac
     * @return \Illuminate\Http\Response
     */
    public function destroy($gledalac_id)
    {
        $gledalac = Gledalac::find($gledalac_id);

        if(is_null($gledalac)) {
            return response() -> json("Gledalac sa unetim ID-jem nije pronadjen",404);
        }

        $gledalac -> delete();
        return response()-> json("Gledalac je uspesno obrisan",200);
    }
}
