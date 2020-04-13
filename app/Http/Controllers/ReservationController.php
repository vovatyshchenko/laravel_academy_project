<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\StoreRequest;
use App\Http\Requests\Orders\Step2Request;
use App\Models\Master;
use App\Models\Order;
use App\Models\Service;
use App\Models\Schedule;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReservationController extends Controller
{
    public static function sendToTelega()
    {
        $txt = '';
        $mes = 'Поступило новое бронирование';
        $link = '<a href="laravelproject.s-host.net/admin/orders">ПОСМОТРЕТЬ</a>';
        $token = "1026444594:AAGkI6Tfvqw_VMydLWXmnK3_U4MG8Gpih-g";
        $chat_id = "-295683968";
        $txt .= "<b>".$mes."</b> ".$link."%0A";
        fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masters = Master::with('position')->get();
        return view('reservation.index', compact('masters'));
    }

    public function redirect(StoreRequest $request)
    {
        $request->validated();
        $reservationFirstStep = [
            'name' => $request->name,
            'tel' => $request->tel,
            'master' => $request->master,
        ];
        $request->session()->put('reservation', [$request->name, $request->tel, $request->master]);
        return redirect()->route('reservation.step2')->with('reservationFirstStep', $reservationFirstStep);
    }

    public function step2(Request $request)
    {
        $services = Service::all();
        $value = $request->session()->get('reservationFirstStep');
        $master = Schedule::Where('master_id', $value['master'])->get();
        return view('reservation.step2', compact('master', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Step2Request $request)
    {
        $request->validated();
        $value = $request->session()->get('reservation');
        $data = [
            'name' => $value[0],
            'tel' => $value[1],
            'master_id' => $value[2],
            'service' => $request->service,
            'date' => $request->date,
        ];
        Order::create($data);
        $request->session()->forget('reservation');
        ReservationController::sendToTelega();
        return redirect()->route('index')->with('succsess', 'Спасибо. Бронирование прошло успешно. Администратор свяжется с Вами в ближайшее время.');
    }

}
