<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(Menu $menu)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('menus/index')->with(['menus'=>$menu->get()]);
    }
    
    public function get(Menu $menu)
    {
        return view('menus/get')->with(['menus'=>$menu->get()]);    
    }
    
    public function delete(Menu $menu)
    {
        $menu->delete();
        return redirect('/');
    }
}
