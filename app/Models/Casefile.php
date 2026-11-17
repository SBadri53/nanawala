<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
class Casefile extends Model
{
    use HasFactory;
    protected $table = "casefile";
    protected $fillable = [
        'pt_id',
        'case_no',
        'case_dt',
        'dr',
    ];
    public function patient(){
        return $this->belongsTo(Patient::class,'pt_id','id');
    }
}

