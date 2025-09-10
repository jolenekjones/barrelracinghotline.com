<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
   protected $connection = 'mysql_central';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
     protected $fillable = [
        'first_name',
        'last_name',
        'contacts',
        'business_name',
        'city',
        'fldstate',
        'profile150x150',
        'banner525x150',
        'header820x190',
        'biz_card370x200',
        'username',
        'user_status',
        'business_types',
        'email',
        'website',
        'facebook',
        'utube',
        'linkedin',
        'instagram',
        'pinterest',
        'event_design',
        'tiktok',
        'vimeo',
        'address',
        'featured',
        'feat_start_date',
        'feat_end_date',
        'googleplus',
        'x',
        'updated_reason',
        'managed_by',
        'owned_by',
        'created_by',
        'updated_by',
        'colors',
        'style',
        'font',
        'email_verified_at',
        'activation_code_resent',
        'subscription_expires',
        'password',
        'verified_date',
        'verified_status',
        'verified_by',
        'verified_source'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
  protected function casts(): array {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

}
