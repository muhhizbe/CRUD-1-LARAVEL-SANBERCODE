<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table pertanyaans
		$data = DB::table('pertanyaans')->get();
 
    	// mengirim data pertanyaan ke view index pertanyaan
        return view('pertanyaan.idx_pertanyaan', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.new_pertanyaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table pertanyaan
		DB::table('pertanyaans')->insert([
			'judul' => $request->judul,
			'isi' => $request->isi,
			'created_at' => now(),
		]);
		// alihkan halaman ke halaman pertanyaan
		return redirect('/pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = DB::table('pertanyaans')->find($id);
        $jawaban = DB::table('jawabans')->where('pertanyaan_id', $id)->get();
        return view('pertanyaan.detail_pertanyaan', ['pertanyaan' => $pertanyaan, 'jawaban' => $jawaban]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('pertanyaans')->find($id);
    	// mengirim data pertanyaan ke view edit pertanyaan
        return view('pertanyaan.edit_pertanyaan', ['data' => $data]);
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
        // update data pertanyaan
		DB::table('pertanyaans')->where('id',$id)->update([
			'judul' => $request->judul,
			'isi' => $request->isi,
			'updated_at' => now()
		]);
		// alihkan halaman ke halaman pertanyaan
		return redirect('/pertanyaan/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data pertanyaan berdasarkan id yang dipilih
		DB::table('pertanyaans')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pertanyaan
		return redirect('/pertanyaan');
    }
}
