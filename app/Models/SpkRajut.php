<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use DateTimeInterface;

class SpkRajut extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'spk_rajuts';
    
    protected $fillable = [
        'no',
        'tanggal',
        'customer_id', 
        'total_qty',   
        'status',
        'status_at',
        'history',
        'deleted_at',
        'created_by', 
        'created_at',
        'updated_by', 
        'updated_at'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function details()
    {
        return $this->hasMany(SpkRajutDetail::class, 'spk_rajut_id');
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    
    public function createdby()
    {
        return $this->belongsTo(User::class,'created_by');
    }
    
    public function updatedby()
    {
        return $this->belongsTo(User::class,'updated_by');
    }

}
