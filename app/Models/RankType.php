<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RankType extends Model
{
    use HasFactory;
    protected $table = 'rank_types';
    protected $guarded = false;
}
