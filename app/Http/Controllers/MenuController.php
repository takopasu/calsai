<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(Menu $menu)//インポートしたPostをインスタンス化して$postとして使用。
    {
    return $menu->get();//$postの中身を戻り値にする。
    }
}
