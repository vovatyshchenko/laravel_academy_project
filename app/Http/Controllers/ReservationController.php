<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Masters\StoreRequest;
use App\Models\Master;
use App\Models\Service;
use App\Models\Schedule;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reservation.index');
    }

    public function redirect(Request $request)
    {
        $reservationFirstStep = [
            'name' => $request->name,
            'tel' => $request->tel,
            'master' => $request->master,
        ];
        $request->session()->put('reservation', [$request->name, $request->tel, $request->master]);
        return redirect()->route('reservation.date')->with('reservationFirstStep', $reservationFirstStep);
    }

    public function date(Request $request)
    {
        $value = $request->session()->get('reservationFirstStep');
        $master = Schedule::Where('master_id', $value['master'])->get();
        return view('reservation.date', compact('master'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value = $request->session()->get('arr');
    }

}
