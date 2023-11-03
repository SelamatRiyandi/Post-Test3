<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pusatlayanan extends Model
{
    use HasFactory;
    protected $table = 'pusatlayanan';
    protected $fillable = ['NIK','Pertanyaan'];
}
