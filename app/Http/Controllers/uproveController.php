<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use app\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class uproveController extends Controller
{

    public function baptis()
    {
        $baptis['baptiss'] = Http::get('http://127.0.0.1:8070/api/baptis')->collect();

        $data = array_merge($baptis);

        return view('layouts.formSearch.uproveBaptis', $data);
    }

    public function uproveBaptis($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveBaptis/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Uprove Baptis', 'Uprove Baptis Berhasil');
                return redirect()->route('aksesUproveBaptis');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function prvJemaat()
    {
        $jemaat['prvJemaats'] = Http::get('http://127.0.0.1:8070/api/prvJemaat')->collect();

        $data = array_merge($jemaat);

        return view('layouts.formSearch.uproveJemaat', $data);
    }

    public function uproveJemaat($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveJemaat/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Uprove Jemaat', 'Uprove Jemaat Berhasil');
                return redirect()->route('aksesUproveJemaat');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function martumpol()
    {
        $martumpol['martumpols'] = Http::get('http://127.0.0.1:8070/api/martumpol')->collect();

        $data = array_merge($martumpol);

        return view('layouts.formSearch.uproveMartumpol', $data);
    }

    public function uproveMartumpol($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveMartumpol/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Uprove Martumpol', 'Uprove Martumpol Berhasil');
                return redirect()->route('aksesUproveMartumpol');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function pernikahan()
    {
        $nikah['nikahs'] = Http::get('http://127.0.0.1:8070/api/nikah')->collect();

        $data = array_merge($nikah);

        return view('layouts.formSearch.uprovePernikahan', $data);
    }

    public function uproveNikah($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveNikah/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Uprove Pernikahan', 'Uprove Pernikahan Berhasil');
                return redirect()->route('aksesUprovePernikahan');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function pindah()
    {
        $pindah['pindahs'] = Http::get('http://127.0.0.1:8070/api/pindah')->collect();

        $data = array_merge($pindah);

        return view('layouts.formSearch.uprovePindah', $data);
    }

    public function uprovePindah($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uprovePindah/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Uprove Jemaat Pindah', 'Uprove Jemaat Pindah Berhasil');
                return redirect()->route('aksesUprovePindah');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function sidi()
    {
        $sidi['sidis'] = Http::get('http://127.0.0.1:8070/api/sidi')->collect();

        $data = array_merge($sidi);

        return view('layouts.formSearch.uproveSidi', $data);
    }

    public function uproveSidi($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveSidi/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Uprove Sidi', 'Uprove Sidi Berhasil');
                return redirect()->route('aksesUproveSidi');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }
}
