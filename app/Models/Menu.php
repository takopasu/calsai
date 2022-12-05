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
    
    public function saves(){
        //1つの科目を多数の生徒が履修。
        return $this->belongsToMany(Save::class);
    }
    
    public function kcal_knapsack($input)
    {
                
        $budget = $input['input'];
        $switch = $input['switch'];
        
        // dd($budget);
        if($budget === null){
            $budget = 0;
        }
        
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
    
    public function price_knapsack($input)
    {
        $budget = $input['input'];
        $switch = $input['switch'];
        
        // dd($budget);
        if($budget === null){
            $budget = 0;
        }
        
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
