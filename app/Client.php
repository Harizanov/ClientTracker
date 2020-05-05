<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'url', 'email'
    ];

    public function projects()
    {

        return $this->hasMany(Project::class);
    }
}
