<?php

namespace App;

use App\Observers\EventObserver;
use App\Traits\IncrementVisits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Event extends Model
{
    use IncrementVisits;

    protected $fillable = [
        'name',
        'date',
        'place',
        'description',
        'banner',
        'featured_banner',
        'visits',
        'user_id',
        'city_id',
        'category_id',
        'age_rating_id',
        'status',
        'quantity_tickets'
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'visits' => 0,
        'banner' => 'https://bt-campaigns.s3.amazonaws.com/drive-park.jpeg'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date'              => 'datetime',
        'featured_banner'   => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date',
    ];

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    public function search($search)
    {
        return self::where('name', 'like', "%$search%")->get();
    }
}
