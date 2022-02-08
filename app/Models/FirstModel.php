<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FirstModel
 *
 * @property int $id
 * @property string $name
 * @property int $volume
 * @property int $action
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FirstModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FirstModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FirstModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|FirstModel whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FirstModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FirstModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FirstModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FirstModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FirstModel whereVolume($value)

 */
class FirstModel extends Model
{
    use HasFactory;

}
