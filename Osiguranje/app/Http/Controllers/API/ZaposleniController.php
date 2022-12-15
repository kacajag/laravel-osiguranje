<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Zaposleni;
use Illuminate\Http\Request;
use App\Http\Resources\ZaposleniResource;

class ZaposleniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zaposleni = Zaposleni::all();
        return ZaposleniResource::collection($zaposleni);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zaposleni  $zaposleni
     * @return \Illuminate\Http\Response
     */
    public function show(Zaposleni $zaposleni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zaposleni  $zaposleni
     * @return \Illuminate\Http\Response
     */
    public function edit(Zaposleni $zaposleni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zaposleni  $zaposleni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zaposleni $zaposleni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zaposleni  $zaposleni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zaposleni = Zaposleni::find($id);
        if ($zaposleni) {
            $zaposleni->delete();
            return response()->json(['Uspesno ste obrisali zaposlenog!', new ZaposleniResource($zaposleni)]);
        } else {
            return response()->json('Nije moguce pronaci zaposlenog u bazi po navedenom id-u!');
        }

    }
}
