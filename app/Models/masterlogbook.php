<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masterlogbook extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function modelunit()
    {
        return $this->belongsTo(unitmodel::class,'unit');    
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');    
    }
    public function usereditby()
    {
        return $this->belongsTo(User::class,'edited_by','id');    
    }

}
