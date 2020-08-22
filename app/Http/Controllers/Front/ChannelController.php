<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Channel;
use App\Models\News;

use Illuminate\Http\Request;

class ChannelController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        // echo 'asda';
        // dd($request->all());

        $rows = Channel::latest()->paginate(40);

        $compact = compact('rows');
        return view('front.channel.index')->with($compact);
    }


    public function store(Request $request)
    {
        // echo 'asda';
        // dd($request->all());

        $model = Channel::create([
            'name' => 'adsas',
        ]);

        $model->tag(['Apple', 'Banana', 'Cherry']);



        return redirect()->back();
    }

    public function show($id)
    {
        // echo 'asda';
        // dd($request->all());

        $row = Channel::where('id',$id)->first();


        $compact = compact('row');
        return view('front.channel.show')->with($compact);
    }


}
