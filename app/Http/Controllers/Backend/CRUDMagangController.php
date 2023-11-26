<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Magang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables as DataTablesDataTables;
use Yajra\DataTables\Facades\DataTables;

class CRUDMagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Magang::select('*'))
                ->addColumn('action', 'backend/magang/action')
                ->addColumn('foto', 'backend/magang/foto')
                ->rawColumns(['action','foto'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.magang.index');
            
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

        
        $request->validate([
            'nama_instansi' => 'required',
            'jurusan' => 'required|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi_kegiatan' => 'required',
            'tgl_mulai' => 'required',
            'tgl_berakhir' => 'required',
        ]);

        $productId = $request->magang_id;

        $details = 
        [
            'nama_instansi' => $request->nama_instansi,
            'jurusan' => $request->jurusan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_berakhir' => $request->tgl_berakhir,
        ];

        if ($files = $request->file('foto')) {

            //delete old file

            \File::delete('public/magang/'.$request->hidden_image);

            //insert new file
            $destinationPath = 'public/magang/'; // upload path

            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();

            $files->move($destinationPath, $profileImage);

            $details['foto'] = "$profileImage";

        }

        $product = Magang::updateOrCreate(
            ['id' => $productId], 
            $details
        ); 
        return Response::json($product);
            
            
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
        $where = array('id' => $id);
        $product  = Magang::where($where)->first();

        return Response::json($product);
        
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
        $data = Magang::where('id',$id)->first(['foto']);
        \File::delete('public/magang/'.$data->foto);
        $product = Magang::where('id',$id)->delete();
        return Response::json($product);

    }
}
