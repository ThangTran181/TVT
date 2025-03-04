<?php

namespace App\Http\Controllers;
use App\Models\Nhasanxuat;
use Illuminate\Http\Request;

class ThuctapController extends Controller
{
    //
    public function get_all()
    {
        $nsx = Nhasanxuat::all();
        return view('nsx.index', ['nsx'=>$nsx]);
    }

    public function add()
    {
        $nsx = new Nhasanxuat();
        $nsx->ten = 'CongTy5';
        $nsx->logo = 'logo5.png';
        $nsx->status = 1;
        $nsx->save();
        $kq = Nhasanxuat::create(['ten' => "Apple", 'logo' => 'logo_apple.png', 'status' => 0]);
        return redirect('/nsx');
    }
}
