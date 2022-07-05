<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'surname', 'is_vip'];

    public static function showAll()
    {
        return self::all();
    }

    public function showSingle()
    {
        return $this;
    }

    public static function create($data)
    {
        $guest = new self($data);
        $guest->save();
        return $guest;
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
