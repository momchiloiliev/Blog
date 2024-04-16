<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body', 'category_id', 'slug'];
    //fillable e koga odredante promenlivi ke moze da sa menat
    protected $guarded = ['id'];
    //guraded e koga moze se da sa mene osven toa uf guarded-> id


    //$guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
