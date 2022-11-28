<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function kcal_knapsack($budget,$switch=null)
    {
        $set  =[];
        
        if($switch === 1){
            $drinks = DB::table('menus')
                            ->where('category','=','drink')
                            ->get();
            }else{
            $drinks = DB::table('menus')
                            ->where('category','=','drink')
                            ->where('type','!=','alcohol')
                            ->get();
            }
                        
        $menus = DB::table('menus')
                    ->where('category','!=','drink')
                    ->where('kcal', '<=', $budget)
                    // ->where('kcal', '!=',0)
                    ->get();
        
        while(true){
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
            
            $rand = rand(0,count($food)-1);
            
            $kcal = $food[$rand] ->kcal;
            
            if($kcal <= $budget){
                array_push($set,$food[$rand]);
            }else{
                continue;
            }
            
            # calc
            $budget -= $kcal;
        }
        
        #choose drink
        $rand = rand(0,count($drinks)-1);
        array_push($set,$drinks[$rand]);
        // dd($set);
        
        $menu = $set;
    
    return $menu;
    }
    
    public function price_knapsack($budget,$switch=null)
    {
        $set  =[];
        
        if($switch === 1){
            $menus = DB::table('menus')
                    ->where('price', '<=', $budget)
                    ->get();
            }else{
            $menus = DB::table('menus')
                    ->where('price', '<=', $budget)
                    ->where('type','!=','alcohol')
                    ->get();
            }
        
        while(true){
            $food=[];
            
            foreach($menus as $menu){
                if($menu->price <= $budget){
                    // dd($menu->price <= $budget);
                    array_push($food,$menu);
                }
            }
                
            if(count($food) === 0){
                break;
            }
            
            $rand = rand(0,count($food)-1);
            
            $price = $food[$rand] ->price;
            
            if($price <= $budget){
                array_push($set,$food[$rand]);
            }else{
                continue;
            }
            
            # calc
            $budget -= $price;
        }
        
        $menu = $set;
    
    return $menu;
    }
}
