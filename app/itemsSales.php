<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemsSales extends Model
{
    protected $table = 'items_sales';
    protected $fillable = [
        'warehouseId',
        'item_code',
        'qtyOrdered',
        'qtyShipped',
        'qtyReturns',
        'unit',
        'price',
        'purpose',
        'requested_by',
        'used_by',
        'remarks',
        'so_status',
        'si_status',
        'prequest_status',
        'preturn_status',
        'salesingId',
        'isSalesInvoice',
        'created_by',
        'updated_by',
        'updated_by',
        'customerId',
        'driver_name',
        'driver_nopol'

    ];
    public function customer()
    {
        return $this->belongsTo(customers::class, 'customerId');
    }
    public function item()
    {
        return $this->belongsTo(inventoryItem::class, 'item_code');
    }
    public function requestedBy()
    {
        return $this->belongsTo(User::class, 'requested_by');
    }
    public function used()
    {
        return $this->belongsTo(User::class, 'used_by');
    }
    public function usedBy()
    {
        return $this->belongsTo(User::class, 'used_by');
    }
    public function salesOrder()
    {
        return $this->belongsTo(salesOrder::class, 'salesId');
    }
}
