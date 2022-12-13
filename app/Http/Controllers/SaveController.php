<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Save;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SaveController extends Controller
{
    public function is_saved(){
        Save::latest('id')
        ->first()
        ->update(['is_saved' => 1, 'user_id' => Auth::id(),'updated_at' => now()]);
        
        return redirect('/saves');
    }
    
    public function delete(Request $request){
        $input = [
           'delete' => $request['delete'],
           ];
           
        #保存内容を削除する
        if($input['delete'] != NULL){
        Save::find($input['delete'])
        ->update(['is_saved' => 0,'is_favorite'=> 0, 'updated_at' => now()]);
        }
        
        return redirect('/saves');
    }    
    
    public function favorite(Request $request){
        $request->merge([
        'add_favorite' => $request->boolean('add_favorite') ? 1 : 0,
        ]);
        
        $input = [
           'favorite' => $request['favorite'],
           'add_favorite' => $request['add_favorite']
           ];
           
        // dd($input);
           
        #お気に入りの判定
        if($input['favorite'] != NULL){
            if($input['add_favorite'] ===1){
                Save::find($input['favorite'])
                ->update(['is_favorite' => 1, 'updated_at' => now()]);
            }else{
                Save::find($input['favorite'])
                ->update(['is_favorite' => 0, 'updated_at' => now()]);
            }
        }
        
        return redirect('/saves');
    }
    
    public function save(Menu $menu,Save $save,User $user){
        return view('menus/save') -> with(['menus' => $menu ->get(),'saves'=> Auth::user()->saves()->get()]);
    }    
    
    public function only_favorite(Menu $menu,Save $save){
        return view('menus/only_favorite') -> with(['menus' => $menu ->get(),'saves'=> Auth::user()->saves()->get()]);
    }    
    
    public function show(Request $request ,Menu $menu,Save $save){
        $input = ['show_id' => $request['show']];
        return view('menus/show') -> with(['menus' => $menu ->get(),'save'=> $save->find($input['show_id'])]);
    }
    
    
}
