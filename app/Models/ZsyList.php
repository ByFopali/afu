<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZsyList extends Model
{
    use HasFactory;
    protected $table = 'zsy_lists';
    protected $guarded = false;

    public function zsyType(){
        return $this->belongsTo(ZsyType::class, 'zsy_type_id', 'id');
    }

}
