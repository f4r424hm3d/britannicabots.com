<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireResourcesSubCategory extends Model
{
  use HasFactory;
  protected $guarded = [];
  public function category()
  {
    return $this->belongsTo(HireResourcesCategory::class, 'category_id', 'id');
  }
  public function clientsLogo()
  {
    return $this->hasMany(HireResourcesSubCategoryClient::class, 'sub_category_id', 'id');
  }
}
