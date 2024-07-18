<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;

    public function up()
    {
        Schema::create('reg_user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique;
            $table->string('password');
            $table->timestamps();
        });
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
