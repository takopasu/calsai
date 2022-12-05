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
        $knapsack = new Menu;
        
        $input = [
            'input' => $request->old('input'),
            'switch' => $request->old('switch'),
        ];
        
        $menu = $knapsack -> kcal_knapsack($input);
        // dd($menu);
        
        return view('menus/kcal',['input'=>$input,'menus'=>$menu]);
    }
    
    public function price(Request $request,Menu $menu)
    {
        $knapsack = new Menu;
        $save = new Save;
        
        $input = [
            'input' => $request->old('input'),
            'switch' => $request->old('switch'),
        ];

        $menu = $knapsack -> price_knapsack($input);
        $save -> insert();
        // dump($menu);
        
        return view('menus/price',['input'=>$input,'menus'=>$menu]);
    }
    
}
