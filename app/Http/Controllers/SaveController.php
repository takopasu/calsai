<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Save;

class SaveController extends Controller
{
    public function is_saved(){
        $save = Save::latest('id')
        ->first()
        ->update(['is_saved' => 1, 'updated_at' => now()]);
        
        return redirect('/save');
    }
    
    public function delete_saved(){
        $save = Save::latest('id')
        ->first()
        ->update(['is_saved' => 0, 'updated_at' => now()]);
        
        return redirect('/save');
    }
    
    public function save(Menu $menu,Save $save){
        return view('menus/save') -> with(['menus' => $menu ->get(),'saves'=> $save->get()]);
    }
    
    
}
