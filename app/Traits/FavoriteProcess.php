<?php
namespace App\Traits;
use App\Models\Favorite;



trait FavoriteProcess
{
  
     public function favoriteProcess($church_id,$user_id,$entity_id,$entity_name)

     {

          $favorite=new Favorite;
          $favorite->church_id=$church_id;
          $favorite->user_id=$user_id;
          $favorite->entity_id=$entity_id;
          $favorite->entity_name=$entity_name;
          
          $favorite->save();         
        
     		return true;
	}
}