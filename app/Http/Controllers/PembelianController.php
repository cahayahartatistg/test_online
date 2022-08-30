<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PembelianResource;
use Illuminate\Http\Request;
use App\PembelianModel;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelian = PembelianModel::latest()->get();
        return response()->json([PembelianResource::collection($pembelian), 'Programs fetched.']);
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
        $pembelian = PembelianModel::create([
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'total_harga' => $request->total_harga
        ]);

        return response()->json(['Program created successfully.', new PembelianResource($pembelian)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembelian = PembelianModel::find($id);
        if (is_null($pembelian)) {
            return response()->json('Data not found', 404);
        }
        return response()->json([new PembelianResource($pembelian)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $pembelian = PembelianModel::find($id);
        $pembelian->tanggal = $request->tanggal;
        $pembelian->keterangan = $request->keterangan;
        $pembelian->total_harga = $request->total_harga;
        $pembelian->save();

        return response()->json(['Program updated successfully.', new PembelianResource($pembelian)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembelianModel $pembelian)
    {
        $pembelian->delete();

        return response()->json('Program deleted successfully');
    }
}