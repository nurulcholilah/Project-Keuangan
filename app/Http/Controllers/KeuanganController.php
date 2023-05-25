<?php

namespace App\Http\Controllers;
use App\Models\Keuangan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Keuangan::all();
        return view('keuangan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keuangan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tanggal' => 'required',
            'keterangan' => 'required',
            'pemasukan' => 'required',
            'pengeluaran' => 'required',
            'saldo' => 'required',
        ]);

        Keuangan::create([
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'pemasukan' => $request->pemasukan,
            'pengeluaran' => $request->pengeluaran,
            'saldo' => $request->saldo,
        ]);

        return redirect()->route('keuangan.index')->with('toast_success', 'Data berhasil disimpan');
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
        $data = Keuangan::find($id);
        return view('keuangan.edit', compact('data'));
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
        $this->validate($request,[
            'tanggal' => 'required',
            'keterangan' => 'required',
            'pemasukan' => 'required',
            'pengeluaran' => 'required',
            'saldo' => 'required',
        ]);

        DB::table('keuangans')->where('id',$id)->update([
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'pemasukan' => $request->pemasukan,
            'pengeluaran' => $request->pengeluaran,
            'saldo' => $request->saldo,
        ]);

        return redirect()->route('keuangan.index')->with('toast_success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('keuangans')->where('id',$id)->delete();
        return redirect()->route('keuangan.index')->with('toast_success', 'Data berhasil disimpan');
    }
}
