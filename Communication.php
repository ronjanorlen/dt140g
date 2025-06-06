<?php
/**
 * Communication model
 */

namespace Domain\Communication\Models;

use Domain\Support\Concerns\Unguarded;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    use Unguarded;
}
