<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubServices extends Model
{
  use HasFactory;
  public function getService()
  {
    return $this->hasOne(Services::class, 'id', 'service_id');
  }
}
