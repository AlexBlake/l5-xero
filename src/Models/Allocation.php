<?php
namespace Assemble\l5xero\Models;

use Assemble\l5xero\Models\Model as Model;

class Allocation extends Model {
    

	 /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'allocations';

    public function __construct()
    {
        $this->table = config('xero.prefix').$this->table;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'AppliedAmount',
		'Date',
		'Invoice_id',
    ];


   	public function invoice()
   	{
   		return $this->belongsTo('Assemble\l5xero\Models\Invoice', 'Invoice_id');
   	}

   	public function overpayments()
   	{
   		return $this->hasMany('Assemble\l5xero\Models\Overpayment');
   	}
   	public function prepayments()
   	{
   		return $this->hasMany('Assemble\l5xero\Models\Prepayment');
   	}
   	public function credit_notes()
   	{
   		return $this->hasMany('Assemble\l5xero\Models\CreditNote');
   	}

}