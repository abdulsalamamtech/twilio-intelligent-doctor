<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Expense;
use App\Models\Category;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function categories(){
        return $this->hasMany(Category::class, 'user_id', 'id');
    }

    public function expenses(){
        return $this->hasMany(Expense::class, 'user_id', 'id');
    }

    // public function scopeBudget(){
    //     $cat = $this->categories();
    //     $budgets = [];
    //     foreach($cat as $c){
    //         $budgets = $c->budget;
    //     }
    //     return array_sum((array) $budgets);
    // }
}
