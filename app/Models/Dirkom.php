<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dirkom extends Model
{
    use HasFactory;
    protected $table = 'tb_dirkom';

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
