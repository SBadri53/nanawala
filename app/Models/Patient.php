<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Casefile;
class Patient extends Model
{
    use HasFactory;
    protected $table="patient";
    protected $fillable = [
        'pt_no',
        'pt_name',
        'pt_surname',
        'fname',
        'lname',
        'email',
        'password',
        'confirm',
        'gender',
        'dob',
        'english',
        'hindi',
        'gujarati',
        'marathi',
        'age',
        'address',
        'mobile',
    ];
    public function casefile()
    {
        return $this->hasMany(Casefile::class, 'pt_id', 'id');
    }
}
