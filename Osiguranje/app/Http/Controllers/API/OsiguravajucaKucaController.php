<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\OsiguravajucaKuca;
use Illuminate\Http\Request;
use App\Http\Resources\OsiguravajucaKucaResource;
use Illuminate\Support\Facades\Validator;

class OsiguravajucaKucaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kuce = OsiguravajucaKuca::all();
        return OsiguravajucaKucaResource::collection($kuce); 

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
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'adresa' => 'required|string',
            'email' => 'required|email',
            'website' => 'required|string',
            'drzava' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greska pri validaciji!', $validator->errors()]);
        }

        $osigkuca = OsiguravajucaKuca::create([
            'naziv' => $request->naziv,
            'adresa' => $request->adresa,
            'email' => $request->email,
            'website' => $request->website,
            'drzava' => $request->drzava
        ]);

        return response()->json(['Osiguravajuca kuca je dodata!.', new OsiguravajucaKucaResource($osigkuca)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsiguravajucaKuca  $osiguravajucaKuca
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kuca = OsiguravajucaKuca::find($id);
        return new OsiguravajucaKucaResource($kuca);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OsiguravajucaKuca  $osiguravajucaKuca
     * @return \Illuminate\Http\Response
     */
    public function edit(OsiguravajucaKuca $osiguravajucaKuca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsiguravajucaKuca  $osiguravajucaKuca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsiguravajucaKuca $osiguravajucaKuca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsiguravajucaKuca  $osiguravajucaKuca
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kuca = OsiguravajucaKuca::find($id);
        if ($kuca) {
            $kuca->delete();
            return response()->json(['Uspesno ste obrisali osiguravajucu kucu!', new OsiguravajucaKucaResource($kuca)]);
        } else {
            return response()->json('Osiguravajuca kuca koju zelite da obrisete ne postoji u bazi!');
        }
    }

}
