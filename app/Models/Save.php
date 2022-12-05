<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

class Save extends Model
{
    use HasFactory;

    public function menus(){
        //1つの科目を多数の生徒が履修。
        return $this->belongsToMany(Menu::class);
    }
    
    protected $fillable = [
        'id', 'is_saved', 'is_favorite',
    ];
    
    public function insert(){
        DB::table('saves')->insert([
            'is_saved' => 0,
            'is_favorite' =>0,
            'created_at' => now(),
            'updated_at' => now()
            ]);
    }
}
