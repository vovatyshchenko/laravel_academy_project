<?php

namespace App\Http\Controllers\Admin\Sliders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sliders\StoreRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() :View
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
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
        if ($request->file('image')){
            $path = $request->file('image')->store('images','public');
        }
        else{
            $path = 'images/default_slider_image.jpg';
        }
        $data = [
            'image' => $path,
            'title' => $request->title,
            'text' => $request->text,
        ];
        Slider::create($data);

        return redirect()->route('admin.sliders.index')->with('succsess', 'Данные были добавленны успешно');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.sliders.edit', compact('slider'));
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
                'title' => $request->title,
                'text' => $request->text,
            ];
            Slider::whereId($id)->update($data);
            return redirect()->route('admin.sliders.index')->with('succsess', 'Данные были обновленны успешно');
        }
        else {
            $request->validated();
            $data = [
                'image' => $request->hiddenImage,
                'title' => $request->title,
                'text' => $request->text,
            ];
            Slider::whereId($id)->update($data);
            return redirect()->route('admin.sliders.index')->with('succsess', 'Данные были обновлены успешно');
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
        Slider::find($id)->delete();
        return redirect()->route('admin.sliders.index')->with('succsess', 'Данные были удалены успешно');
    }
}
