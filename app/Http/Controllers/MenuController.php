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
    
    public function get(Menu $menu)
    {
    # params
    $budget = 1000;
    $menu= [];

    $menus = DB::table('menus')
                    ->where('price', '<', $budget)
                    ->get();
    // dd($menus);
    // $test[];
    $set=[];
    
    while(true){
        // $menus =  array_filter($menus, function($filter){
        //       return $menus['price'] <= $budget;
        //     });
        
        $test=[];
        
        foreach($menus as $menu){
            if($menu->price < $budget){
                array_push($test,$menu);
            }
        }
            
        if(count($test) === 0){
            break;
        }
        // dd($test);
        // dump($test);
        // dd(count($test));
        
        $rand = rand(0,count($test)-1);
        
        // dump($menus->count());
        // dd($rand);
        
        $price = $test[$rand] ->price;
        // dd($price);
        // dd($test[$rand]);
        // dump($test[$rand]);
        // dd($test[$rand]->id);
        
        if($price < $budget){
            array_push($set,$test[$rand]);
            // dd($set);
                // dd($price);
                // dump($price);
        }else{
            continue;
        }
        
        // # no candidate break

        # select food
        // foreach($menus as $menu){
        //     $price = $menu -> price;
            // dd($price);
            // dump($price);
        // }
        
        
        // dd($menu);
        
        # calc
        $budget -= $price;
        // if ($budget === 0){
        //     break;
        // }
    
        // // dd($budget);
        // dump($budget);
        
    }
    
    // dump($menu);
    $menu = $set;
    // dd($menu);
    
    return view('menus/get') -> with(['menus' => $menu]);
    }
    
    public function save(Menu $menu){
    return view('menus/save') -> with(['menus' => $menu ->get()]);
    }
}
