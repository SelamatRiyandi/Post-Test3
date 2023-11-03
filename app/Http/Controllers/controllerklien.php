<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\klien;
// use App\Http\klien;
use Illuminate\Support\Facades\DB;

class controllerklien extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posting = DB::table('klien')->get();

        return view('client',['posting' => $posting]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addclient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table("klien")->insert([
            'NIK' => $request->NIK,
            'Nama' => $request->Nama,
            'Tanggal_Lahir' => $request->Tanggal_Lahir,
            'Gender' => $request->Gender,
            'Kategori' => $request->Kategori,
        ]);

        return redirect('/client');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
