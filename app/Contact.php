<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    public $table = 'contact';

    public $fillable = [
        'id',
        'name',
        'activity',
        'mobile',
        'email',
        'create_at',
        'last_contact',
        'status'
    ];
}
