<?php

namespace Modules\ContactManagement\Entities;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Eloquent\SoftDeletes;
class ContactCompany extends Model
{
    use SoftDeletes;
    // use HasFactory;
    use Factory;
    
    public $table = 'contact_companies';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'company_name',
        'company_address',
        'company_website',
        'company_email',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}