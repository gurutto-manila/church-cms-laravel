<?php
/**
* Trait for processing common
*/
namespace App\Traits;

use App\Models\User;
use Exception;
use Log;

/**
*
* @class trait
* Trait for Common Processes
*/
trait Common {

     public function postResponse($url,$header,$params){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); //Remote Location URL  
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 7); //Timeout after 7 seconds
        curl_setopt($ch, CURLOPT_HEADER, false);//true
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params); //parameters data
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );   
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
        $result = curl_exec($ch);
        if(curl_exec($ch) === false)
        {
            echo 'Curl error: ' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
       

       }
   public function getResponse($url,$headers){
   
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url); //Remote Location URL  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 7); //Timeout after 7 seconds
    curl_setopt($ch, CURLOPT_HEADER, false);//true
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);

    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );   
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 

    $result = curl_exec($ch);
    /*if(curl_exec($ch) === false)
    {
        echo 'Curl error: ' . curl_error($ch);
    }*/
    curl_close($ch);

    return $result;

   }
    public function deleteResponse($url,$headers){
   
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url); //Remote Location URL  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 7); //Timeout after 7 seconds
    curl_setopt($ch, CURLOPT_HEADER, false);//true
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"DELETE");
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );   
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 

    $result = curl_exec($ch);
    /*if(curl_exec($ch) === false)
    {
        echo 'Curl error: ' . curl_error($ch);
    }*/
    curl_close($ch);

    return $result;

   }

    public function getFilePath( $file ) {
        $path = '';

        try {
            $path = \Storage::url( $file );
        } catch( Exception $e ) {
            Log::info($e->getMessage());
            //dd( $e->getMessage() );
        }

        return $path;
    }

    public function uploadFile( $folder, $file ) {
        $path = '';

        try {
            $path = \Storage::putFile( $folder, $file );
        } catch( Exception $e ) {
            Log::info($e->getMessage());
            //dd( $e->getMessage() );
        }

        return $path;
    }

    public function getRequestIP() {
        $ip = request()->ip();
        try {
            if ( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
        } catch( Exception $e ) {
            Log::info($e->getMessage());
            // dd( $e->getMessage() );
        }
        return $ip;
    }

    public function eventImagePath( $category, $image ) {
        $image = '';
        try {
            if ( $category == 'prayer' ) {
                $image = \Storage::url( 'uploads/images/prayer.jpg' );
            } elseif ( $category == 'culturals' ) {
                $image = \Storage::url( 'uploads/images/culturals.jpg' );
            } elseif ( $category == 'meeting' ) {
                $image = \Storage::url( 'uploads/images/meeting.jpg' );
            } elseif ( $category == 'education' ) {
                $image = \Storage::url( 'uploads/images/education.jpg' );
            } elseif ( $category == 'sermon' ) {
                $image = \Storage::url( 'uploads/images/sermon.jpg' );
            }

            return $image;
        } catch( Exception $e ) {
            Log::info($e->getMessage());
            //dd( $e->getMessage() );
        }

    }

    public function putContents( $folder, $contents ) {
        $path = '';
        try {
            $path = \Storage::put( $folder, $contents, 'public' );
        } catch( Exception $e ) {
            Log::info($e->getMessage());
            // dd( $e->getMessage() );
        }
        return $path;
    }

    public function putContentsByFilename( $folder, $contents, $filename ) {
        $path = '';
        try {
            $path = \Storage::putFileAs( $folder, $contents, $filename );
        } catch( Exception $e ) {
            Log::info($e->getMessage());
            // dd( $e->getMessage() );
        }
        return $path;
    }

    public function getFilePathforDownload( $file, $disk = '' ) {
        $path = '';
        try {
            if ( $disk != '' ) {
                $path = \Storage::disk( $disk )->get( $file );
            } else {
                $path = \Storage::get( $file );
            }
            return $path;
        } catch( Exception $e ) {
            Log::info($e->getMessage());
            //dd( $e->getMessage() );
        }
    }

    public static function is_admin( $userid ) {
        if ( $userid == '' ) {
            return FALSE;
        } else {
            $user = User::where( 'id', $userid )->first();

            if ( $user->usergroup_id == 3 ) {
                return TRUE;
            }
            return FALSE;
        }
    }
}