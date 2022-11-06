<?php

namespace Websay\MiniLoggerDb\Models\Interfaces;

interface MiniLoggerDbInterface {

    /**
     * @param $message
     * @return mixed
     */

    public static function error($message);

    /**
     * @param $message
     * @return mixed
     */

    public static function info($message);

    /**
     * @param $user_id
     * @param $level
     * @param $message
     * @return mixed
     */

    public function showLog($user_id, $level, $message);

}
