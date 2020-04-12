<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index()
    {
        $masters = Master::with('position')->get();
        $services = Service::all();
        $sliders = Slider::all();
        return view('index', compact('masters', 'services', 'sliders'));
    }

    public function about()
    {
        return view('about');
    }
}
