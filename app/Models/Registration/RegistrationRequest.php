<?php

namespace App\Models\Registration;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistrationRequest extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];

    protected function Photo(): Attribute{
        return Attribute::make(
            get:fn ($value) => ($value != null) ? asset('assets/images/documents/'. $value) : asset('assets/images/documents/default_document.png')
        );
    }

    function user() : BelongsTo{
        return $this->belongsTo(User::class,'owner_id');
    }
}
