<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'content',
        'user_id',
        'article_id'
        
    ];

    protected $dates = ['deleted_at'];


    public function user(){

      return $this->belongsTo(User::class);
      
    }

    public function categories(){
      return $this->belongsToMany(Category::class,
      'article_categories','article_id','category_id');
    }

    public function comments(){
      return $this->hasMany(Comment::class);

  }
    
}
