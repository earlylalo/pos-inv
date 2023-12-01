<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model
{
    use HasFactory;

    protected $table = 'transaction';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'user_id',
        'timestamp',
        'total_amount',
        'total_profit',
        'total_amount_with_discount',
        'updated_at',
        'created_at',
        'discount',
        'amount_received',
        'change'
    ];

    public function orders()
    {
        return $this->hasMany(OrderModel::class ,'transaction_id');
    }

    public function user()
    {
        return $this->hasOne(User::class ,'id','user_id');
    }
}
