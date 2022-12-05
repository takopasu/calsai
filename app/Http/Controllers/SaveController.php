<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Save;

class SaveController extends Controller
{
    public function menus_input(Request $request)
    {
        // dump($request);
        $get_menus = $request->input('send_menus');
        dd($get_menus);

        return redirect('/save');
    }
    
    public function save(Menu $menu){
        return view('menus/save') -> with(['menus' => $menu ->get()]);
    }
    
    
}
