<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Testimoni::all();

        return view('frontend.home', compact('data'));
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
        $data = $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'pekerjaan' => 'required|string|max:255',
                'instansi' => 'required|string|max:255',
                'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'rate' => 'required|integer',
                'komentar' => 'required'
            ], 
            [
                'nama_lengkap.required' => 'Nama lengkap harus di isi!',
                'pekerjaan.required' => 'Pekerjaan harus di isi!',
                'instansi.required' => 'Instansi harus di isi!',
                'rate.required' => 'Rate harus di isi!',
                'komentar.required' => 'Komentar harus di isi!'    
            ]);
                if($request->foto){
                    $image = $request->file('foto');
                    $foto = $image->storeAs('public/foto', $image->hashName());
                }else{
                    $foto = NULL;
                }
                
            Testimoni::create([
                'nama_lengkap' => $request->nama_lengkap,
                'pekerjaan' => $request->pekerjaan,
                'instansi' => $request->instansi,
                'foto' => $foto,
                'rate' => $request->rate,
                'komentar' => $request->komentar
            ]);

            return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
