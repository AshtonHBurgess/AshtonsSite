<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description','image'];
//    use SoftDeletes;
    function type(){
        return $this->hasMany(Type::class);
    }
//    function createdBy(){
//        return $this->belongsTo(User::class, 'created_by');
//    }
//
//
//    function deletedBy(){
//        return $this->belongsTo(User::class, 'deleted_by');
//    }
}
