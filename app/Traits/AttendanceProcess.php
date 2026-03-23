<?php

/**
 * Trait for processing AttendanceProcess
 */
namespace App\Traits;

use App\Models\Attendance;
use Exception;
use log;

/**
 *
 * @class trait
 * Trait for AttendanceProcess
 */
trait AttendanceProcess
{
  
    public function createAttendance($church_id,$user_id,$entity_id,$entity_name,$title,$category,$date)
    {
        try
        {
            $attendance              = new Attendance;
          
            $attendance->church_id   = $church_id;
            $attendance->user_id     = $user_id;
            $attendance->entity_id   = $entity_id;
            $attendance->entity_name = $entity_name;
            $attendance->title       = $title;
            $attendance->category    = $category;
            $attendance->date        = $date;
            $attendance->is_present  = 0;

            $attendance->save();
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }    
	}
}