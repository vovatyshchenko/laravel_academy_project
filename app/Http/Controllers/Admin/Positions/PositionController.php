<?php

namespace App\Http\Controllers\Admin\Positions;

use App\Http\Controllers\Controller;
use App\Http\Requests\Positions\StoreRequest;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $positions = Position::all();
        return view('admin.positions.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.positions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $request->validated();
        $data = $request->all();
        Position::create($data);

        return redirect()->route('admin.positions.index')->with('succsess', 'Данные были добавленны успешно');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $position = Position::find($id);
        return view('admin.positions.edit', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
        $request->validated();
        $position = Position::find($id);
        $position ->fill($request->all());
        $position->save();
        return redirect()->route('admin.positions.index')->with('succsess', 'Данные были обновлены успешно');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Position::find($id)->delete();
        return redirect()->route('admin.positions.index')->with('succsess', 'Данные были удалены успешно');
    }
}
