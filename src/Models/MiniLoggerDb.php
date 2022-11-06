<?php

namespace Websay\MiniLoggerDb\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Websay\MiniLoggerDb\Models\Interfaces\MiniLoggerDbInterface;
use Websay\MiniLoggerDb\Models\Traits\MiniLoggerDbTrait;

class MiniLoggerDb extends Model implements MiniLoggerDbInterface
{
    use HasFactory, MiniLoggerDbTrait;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = null;

    protected $table = 'mini_loggers';

    protected $fillable = [
        'user_id',
        'level',
        'message'
    ];

    public function showLog($user_id, $level, $message)
    {
        $this->fill(['user_id' => $user_id, 'level' => $level, 'message' => $message])->save();
    }
}
