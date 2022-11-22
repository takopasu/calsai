<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class MenuController extends Controller
{
    public function index(Menu $menu)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('menus/index')->with(['menus'=>$menu->get()]);
    }
    
  public function input(Request $request)
  {
    //   dump($request);
        $request->merge([
        'switch' => $request->boolean('switch') ? 1 : 0,
        ]);
        
        // $input = $request['kcal'];
        // $switch = $request['switch'];
      
        $send = [
           'input' => $request['kcal'],
            'switch' => $request['switch'],
           ];
        
          
    //   dd($send);
      return redirect('/kcal')->withInput($send);
  }
    
    public function kcal(Request $request,Menu $menu)
    {
    # params
    // $budget=0;
    // $budget= $request->kcal;
    // $budget = $input;
    // $budget = 1000;
    // dd($budget);
    
    $input = [
        'input' => $request->old('input'),
        'switch' => $request->old('switch'),
    ];
    
    // dd($input);
    
    $budget = $input['input'];
    $switch = $input['switch'];
    // $budget = gettype($budget);
    // dump($switch);
    
    if($switch === "on"){
        $drinks = DB::table('menus')
                        ->where('category','=','drink')
                        ->get();
        }else{
        $drinks = DB::table('menus')
                        ->where('category','=','drink')
                        ->where('type','!=','alcohol')
                        ->get();
        }
        
    // dd($drinks);
                    
    $menus = DB::table('menus')
                ->where('category','!=','drink')
                ->where('kcal', '<=', $budget)
                // ->where('kcal', '!=',0)
                ->get();
                
    // dd($menus);
    // $test[];
    $menu= [];
    $set=[];
    
    #choose drink
    $rand = rand(0,count($drinks)-1);
    $kcal = $drinks[$rand];
    array_push($set,$drinks[$rand]);
    // dd($set);
    
    
    while(true){
        // $menus =  array_filter($menus, function($filter){
        //       return $menus['price'] <= $budget;
        //     });
        
        $food=[];
        
        foreach($menus as $menu){
            if($menu->kcal <= $budget){
                // dd($menu->price <= $budget);
                array_push($food,$menu);
            }
        }
            
        if(count($food) === 0){
            break;
        }
        // dd($test);
        // dump($test);
        // dd(count($test));
        
        $rand = rand(0,count($food)-1);
        
        // dump($menus->count());
        // dd($rand);
        
        $kcal = $food[$rand] ->kcal;
        // dd($price);
        // dd($test[$rand]);
        // dump($test[$rand]);
        // dd($test[$rand]->id);
        
        if($kcal <= $budget){
            array_push($set,$food[$rand]);
            // dd($set);
                // dd($price);
                // dump($price);
        }else{
            continue;
        }
        // dd($menu);
        
        # calc
        $budget -= $kcal;
        // if ($budget === 0){
        //     break;
        // }

    
        // // dd($budget);
        // dump($budget);
        
    }
    
    // dump($menu);
    $menu = $set;
    // dd($menu);
    
    return view('menus/kcal',['input'=>$input]) -> with(['menus' => $menu]);
    }
    
    public function save(Menu $menu){
    return view('menus/save') -> with(['menus' => $menu ->get()]);
    }
}
