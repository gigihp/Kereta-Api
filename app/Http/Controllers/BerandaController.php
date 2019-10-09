<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use DB;
use Sessions;
use Carbon\Carbon;

use\App\kota;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $client = new Client();

        $response = $client->post('http://api.jadipergi.com/train/search', [
            'body' => json_encode([
                'productCode' => 'WKAI',
                'origin' => 'SGU',
                'destination' => 'GMR',
                'date' => '2019-10-10'
            ])
        ]);

         if ($response->getStatusCode() == 200)
        {
            $json = $response->getBody(true);
            return json_decode($json, true);
        }
        else
        {
            echo "COK API mu gak genah asu";
        }
    }

    public function kota()
    {   
        $stasiun = Curl::to('http://api.jadipergi.com/train/station')
        ->get();

        $kota = kota::all();
        return view('beranda', ['kota' => $kota])->with('stasiun', json_decode($stasiun, true));
    }

    public function getApi(Request $request)
    {   
        $asal = $request->stasiun_asal;
        $tujuan = $request->stasiun_tujuan;
        $awal = $request->date_start;
        $akhir = $request->date_end;

        $request->session()->put('stasiun_asal', $asal);
        $request->session()->put('stasiun_tujuan', $tujuan);
        $request->session()->put('tanggal', $awal);

        $client = new Client();

        $response = $client->post('http://api.jadipergi.com/train/search', [
            'body' => json_encode([
                'productCode' => 'WKAI',
                'origin' => $asal,
                'destination' => $tujuan,
                'date' => $awal
            ])
        ]);

            $json = $response->getBody(true);
            $kereta = json_decode($json, true);
            return view('pencarian', compact('asal','tujuan','kereta'));

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
