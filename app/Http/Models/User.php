<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 用户信息
 * Class User
 * @package App\Http\Models
 */
class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';

    function payment() {
        return $this->hasMany(Payment::class, 'user_id', 'id');
    }
}