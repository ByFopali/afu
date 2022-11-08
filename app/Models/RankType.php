<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RankType extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'rank_types';
    protected $guarded = false;
}
