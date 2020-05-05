<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'url', 'budget', 'is_active', 'client_id'
    ];

    public function client()
    {

        return $this->belongsTo(Client::class);
    }
}
