<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    protected $fillable = ['multiplier', 'season_name'];

    public static function create($data)
    {
        $season = new Season($data);
        $season->save();
        return $season;
    }

    public function remove()
    {
        $this->delete();
        return $this;
    }

    public function edit($data)
    {
        $this->update($data);
        return $this;
    }
}
