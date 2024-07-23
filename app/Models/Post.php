<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\tags;
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'gallery_id',
        'user_id',
        'category_id',
        'title',
        'description',
        'status'
    ];

    public function tags()
    {
        return $this->belongsToMany(tags::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function Category(){
        return $this->belongsTo(Category::class); //'category_id','id'
    }

    public function user(){
        return $this->belongsTo(User::class); //'user_id','id'
    }

    public function gallery(){
        return $this->belongsTo(Gallery::class);
    }

}
