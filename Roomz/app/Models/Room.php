<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['name', 'is_reserved', 'is_cleaned', 'daily_price'];

    use HasFactory;

    public static function create($data):self
    {
        $room = new self($data);
        $room->save();
        return $room;
    }

    public function edit($data)
    {
        $this->update($data);
        return $this;
    }

    public function remove()
    {
        $this->delete();
        return $this;
    }

}
