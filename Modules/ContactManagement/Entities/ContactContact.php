<?php

// namespace Modules\ContactManagement\Entities;

// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

// class ContactContact extends Model
// {
//     use HasFactory;

//     protected $fillable = [];
    
//     protected static function newFactory()
//     {
//         return \Modules\ContactManagement\Database\factories\ContactContactFactory::new();
//     }
// }

namespace Modules\ContactManagement\Entities;

use \DateTimeInterface;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ContactContact extends Model
{
    use SoftDeletes;
    // use HasFactory;
    use Factory;
    
    public $table = 'contact_contacts';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'company_id',
        'contact_first_name',
        'contact_last_name',
        'contact_phone_1',
        'contact_phone_2',
        'contact_email',
        'contact_skype',
        'contact_address',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function company()
    {
        return $this->belongsTo(ContactCompany::class, 'company_id');
    }
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}