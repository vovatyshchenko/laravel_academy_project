<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use App\Http\Requests\Masters\StoreRequest;
use App\Models\Master;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $masters = Master::with('position')->get();
        return view('admin.masters.index', compact('masters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = Position::all();
        return view('admin.masters.create', compact('positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $validated
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $request->validated();
        if ($request->file('image')){
            $path = $request->file('image')->store('images','public');
        }
        $data = [
            'image' => $path,
            'name' => $request->name,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'b_day' => $request->b_day,
            'position_id' =>$request->position_id,
        ];
        Master::create($data);

        return redirect()->route('admin.masters.index')->with('succsess', 'Данные были добавленны успешно');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $positions = Position::all();
        $master = Master::find($id);
        return view('admin.masters.edit', compact('master', 'positions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
        if ($request->file('image')){
            $path = $request->file('image')->store('images','public');
            $request->validated();
            $data = [
                'image' => $path,
                'name' => $request->name,
                'surname' => $request->surname,
                'patronymic' => $request->patronymic,
                'b_day' => $request->b_day,
                'position_id' =>$request->position_id,
            ];
            Master::whereId($id)->update($data);
            return redirect()->route('admin.masters.index')->with('succsess', 'Данные были обновленны успешно');
        }
        else{
            $request->validated();
            $data = [
                'image' => $request->hiddenImage,
                'name' => $request->name,
                'surname' => $request->surname,
                'patronymic' => $request->patronymic,
                'b_day' => $request->b_day,
                'position_id' =>$request->position_id,
            ];
            Master::whereId($id)->update($data);
            return redirect()->route('admin.masters.index')->with('succsess', 'Данные были обновлены успешно');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Master::find($id)->delete();
        return redirect()->route('admin.masters.index');
    }
}
