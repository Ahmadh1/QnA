<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body'];

    // Relationship with User
    public function user() {
    	return $this->belongsTo(User::class);
    }

    // Mutator method for Slug
    public function setTitleAttribute($value) {
    	$this->attributes['title'] = $value;
    	$this->attributes['slug'] = str_slug($value);
    }

    // Accessorr method

    public function getUrlAttribute() {
        return route('questions.show', $this->id);
    }

    // Formated date

    public function formattedDate()  {
        return $this->created_at->diffForHumans();
    }
}
