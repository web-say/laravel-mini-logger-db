<?php

namespace Websay\MiniLoggerDb\Models\Traits;

use Illuminate\Support\Facades\Auth;

trait MiniLoggerDbTrait
{

    /**
     * @param $message
     * @return void
     */

    public static function error($message): void
    {
        parent::showLog(Auth::id() ?? 0, 'error', $message);
    }

    /**
     * @param $message
     * @return void
     */

    public static function info($message): void
    {
        parent::showLog(Auth::id() ?? 0, 'info', $message);
    }

    /**
     * @param $user_id
     * @param $level
     * @param $message
     * @return array
     */

    public function showLog($user_id, $level, $message): array
    {
        return (['user_id' => $user_id, 'level' => $level, 'message' => $message]);
    }
}
