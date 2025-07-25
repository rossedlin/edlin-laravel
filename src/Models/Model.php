<?php

namespace Edlin\Laravel\Models;

use App\Enums\Date;
use \Illuminate\Database\Eloquent\Builder;

/**
 * Class Model
 * @package App
 *
 * @property $id
 * @property $created_at
 * @property $created_at_display
 * @property $updated_at
 * @property $updated_at_display
 *
 * @method static Builder find($id, $columns = ['*'])
 * @method static Builder findOrFail($id, $columns = ['*'])
 * @method static Builder select($columns = ['*'])
 * @method static Builder selectRaw($expression, array $bindings = [])
 * @method static Builder join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Builder whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static Builder whereNull($columns, $boolean = 'and', $not = false)
 * @method static Builder whereNotNull($columns, $boolean = 'and')
 * @method static Builder orderBy($column, $direction = 'asc')
 */
class Model extends \Illuminate\Database\Eloquent\Model
{
    /**
     * @noinspection PhpUnused
     * @return string
     */
    public function getCreatedAtDisplayAttribute(): string
    {
        return date(Date::DISPLAY_DATE_FRONTEND, strtotime($this->created_at));
    }

    /**
     * @noinspection PhpUnused
     * @return string
     */
    public function getUpdatedAtDisplayAttribute(): string
    {
        return date(Date::DISPLAY_DATE_FRONTEND, strtotime($this->updated_at));
    }
}
