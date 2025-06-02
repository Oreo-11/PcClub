<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\AccessRights;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(AccessRights::class, 'roles_accessRights', 'id_roles', 'id_accessRights');
    }
}
