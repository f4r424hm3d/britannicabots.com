<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireResourcesCategory extends Model
{
  use HasFactory;
  protected $guarded = [];
  public function clientsLogo()
  {
    return $this->hasMany(HireResourcesCategoryClient::class, 'category_id', 'id');
  }
}
