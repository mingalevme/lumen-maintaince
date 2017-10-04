<?php

namespace Mingalevme\Lumen\Maintaince;

trait Maintaince
{
    /**
     * Get the the name of the file that uses to determine if application
     * is in maintaince mode
     * 
     * @return string filename
     */
    public static function getMaintainceModeFilename()
    {
        if (env('MAINTENANCE_MODE_FILENAME')) {
            $filename = env('MAINTENANCE_MODE_FILENAME');
        } else {
            $filename = sys_get_temp_dir() . '/' . (env('APP_KEY') ?: (function(){
                throw new \Exception('APP_KEY is not set');
            })());
        }
        return $filename;
    }
    
    /**
     * Determine if the application is currently down for maintenance.
     *
     * @return bool
     */
    public function isDownForMaintenance()
    {
        return file_exists(static::getMaintainceModeFilename());
    }
}
