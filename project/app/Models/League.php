<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class League
{

    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *
     *
     */

    protected $fillable = [
        'user_id','name',
    ];
    protected $table = 'league';
    public function key(): string
    {
        return 'model_league_'.$this->id;
    }

}
