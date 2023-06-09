<?php

namespace App\Models\Registration;

use App\Models\Drug\Drug;
use App\Models\Transaction\RepositoryStorage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Repository extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function owner()
    {
        return $this->belongsTo(Role::class,'owner_id');
    }

    public function drugs():BelongsToMany
    {
        return $this->belongsToMany(Drug::class,RepositoryStorage::class);
    }
}
