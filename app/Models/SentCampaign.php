<?php
namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

class SentCampaign extends Model
{
    use Filterable;

    protected $fillable = [
        'campaign_id'        
    ];
}
