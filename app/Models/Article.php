<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Article extends Model
{
    
protected $fillable = [
        'title','description', 'author_name'
    ];
}
?>