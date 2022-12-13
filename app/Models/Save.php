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
        //中間テーブル用
        return $this->belongsToMany(Menu::class);
    }
    
    public function user(){
    //   ユーザー紐づけ用
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'id', 'is_saved', 'is_favorite','user_id'
    ];

}
