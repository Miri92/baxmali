<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        // echo 'asda';
        // dd($request->all());


        $shops  = Shop::limit(10)->orderBy('sorting')->orderBy('id', false)->get();
        $isMain = true;
        //dd($shops);

        $news = News::latest()->paginate(6);

        $tariffs = Tariff::select([
            'min_weight',
            'max_weight',
            'price',
        ])->get();

        return view('front.index.index')->with(compact('shops', 'tariffs', 'isMain','news'));
    }


}
