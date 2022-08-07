<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pharmaceutical_items extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'pharmaceuticalItemID';
    protected $table= 'pharmaceutical_items';
}