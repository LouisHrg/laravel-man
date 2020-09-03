<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function toSelectArray(): array
    {
      $categories = Category::all();
      $options = [];
      foreach ($categories as $category) {
          $options[$category->id] = $category->name;
      }
      return $options;
    }


}
