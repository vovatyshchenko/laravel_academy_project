<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\StoreRequest;
use App\Http\Requests\Orders\EditRequest;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $orders = Order::orderBy('id', 'desc')->paginate(5);
        return view('admin.orders.index', compact('orders'));
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
       /* $value = $request->session()->get('reservation');
        $data = [
            'name' => $value[0],
            'tel' => $value[1],
            'master_id' => $value[2],
            'service' => $request->service,
            'date' => $request->date,
        ];
        Order::create($data);
        $request->session()->forget('reservation');
        return redirect()->route('index')->with('succsess', 'Спасибо. Бронирование прошло успешно. Администратор свяжется с Вами в ближайшее время.');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        $request->validated();
        $order = Order::find($id);
        //dd($request->master_id);
        $order->fill($request->all());
        $order->save();
        return redirect()->route('admin.orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::find($id)->delete();
        return redirect()->route('admin.orders.index');
    }
}
