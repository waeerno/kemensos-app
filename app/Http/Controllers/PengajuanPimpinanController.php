<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Sesi;
use Illuminate\Http\Request;

class PengajuanPimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $sesi               = Sesi::where('status', '=', 'Aktif')->first();
        // $id_sesi            = $sesi->id;

        $params = [
            'title'         => 'Pengajuan Baru',
            'page_category' => 'Pengajuan',
            'data'          => Pengajuan::with('lansia', 'sesi')->where('keputusan', NULL)
                // ->whereHas('sesi', function ($q) {
                //     $q->where('status', '=', 'Aktif');
                // })
                ->get(),
            'sesi'          => Sesi::where('status', '=', 'Aktif')->first(),
        ];

        // dd($params);

        return view('pengajuan.pimpinan.index')->with($params);
    }

    public function show($id)
    {
        //
    }

    public function terima(Request $request, $id)
    {
        $data = Pengajuan::find($id);
        $data->keputusan    = 1;
        $data->save();

        return to_route('pengajuan-baru.index')->with('status', 'Pengajuan berhasil di proses menjadi diterima');
    }

    public function tolak($id)
    {
        $data = Pengajuan::find($id);
        $data->keputusan    = 2;
        $data->save();

        return to_route('pengajuan.pimpinan.index')->with('status', 'Pengajuan berhasil di proses menjadi diterima');
    }
}
