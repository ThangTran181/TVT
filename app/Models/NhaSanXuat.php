<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhaSanXuat extends Model
{
    //
    use HasFactory;
    protected $table = 'nhasanxuat';
    // protected $primaryKey = 'maNSX';
    protected $fillable = ['ten', 'logo', 'status'];
    public $incrementing = false;
    public $timestamps = false;
    protected $atributes = ['logo' => '', 'status' => 0];

    // $nsx = app\Models\NhaSanXuat::find(1);
    // $nsx->delete();
    use SoftDeletes;
}
