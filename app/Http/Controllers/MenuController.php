<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Save;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class MenuController extends Controller
{
    public function kcal_input(Request $request)
    {
    //   dump($request);
        $request->merge([
        'switch' => $request->boolean('switch') ? 1 : 0,
        ]);
        
        $input = [
           'input' => $request['kcal'],
            'switch' => $request['switch'],
           ];

      return redirect('/')->withInput($input);
    }
    
    public function price_input(Request $request)
    {
    //   dump($request);
        $request->merge([
        'switch' => $request->boolean('switch') ? 1 : 0,
        ]);
        
        $input = [
           'input' => $request['price'],
            'switch' => $request['switch'],
           ];

      return redirect('/price')->withInput($input);
    }
    
    public function kcal(Request $request,Menu $menu)
    {
        $menu_model = new Menu;
        
        $input = [
            'input' => $request->old('input'),
            'switch' => $request->old('switch'),
        ];
        
        #$inputを上限としてメニューをランダムに選定
        $menu = $menu_model -> kcal_knapsack($input);
        
        #中間テーブルを用いてsaveテーブルと紐づけ
        $menu_id = array_column($menu,'id');
    
        if($menu_id != NULL){
        
        #インスタンス化もここで含む
        $save_model = Save::create([
            'is_saved' => 0,
            'is_favorite' => 0,
            'created_at' => now(),
            'updated_at' => now(),
            ]);
        
        $save_model -> menus() ->attach($menu_id);
        }
        return view('menus/kcal',['input'=>$input,'menus'=>$menu]);
    }
    
    public function price(Request $request,Menu $menu)
    {
        
        $menu_model = new Menu;
        
        $input = [
            'input' => $request->old('input'),
            'switch' => $request->old('switch'),
        ];

        $menu = $menu_model -> price_knapsack($input);
        $menu_id = array_column($menu,'id');
        
        if($menu_id != NULL){
        
        #インスタンス化もここで含む
        $save_model = Save::create([
            'is_saved' => 0,
            'is_favorite' => 0,
            'created_at' => now(),
            'updated_at' => now(),
            ]);
        
        $save_model -> menus() ->attach($menu_id);
        }
        
        return view('menus/price',['input'=>$input,'menus'=>$menu]);
    }
    
}
