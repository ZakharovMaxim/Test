<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentCategory extends Model
{
    protected $fillable = ['name', 'type', 'parent_id'];
}
