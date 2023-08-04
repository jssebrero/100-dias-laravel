<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasFactory;

    public function scopePages(Builder $query):void {
        $query -> whereTipo('pagina');
    }

    public function scopePosts(Builder $query):void {
        $query -> whereTipo('publicacion') -> orderByDESC('id');
    }
}
