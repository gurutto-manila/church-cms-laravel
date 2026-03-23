<?php
namespace App\Traits;

use App\Models\Sermon;
use App\Models\Vote;

trait VoteProcess
{
    public function createlikeVote($request,$church_id,$user_id)
    {
        $sermon = Sermon::where([['church_id',$church_id],['id',$request->entity_id]])->first();
            
        if(count($sermon)>'0')
        {
            if($church_id==$sermon->church_id)
            {
                $existing_vote = Vote::where([['church_id',$church_id],['user_id',$user_id],['entity_id',$sermon->id],['unlike',1]])->first();

                if(count($existing_vote)>0) 
                {
                    $existing_vote->delete();
                }
                $existing_vote = Vote::where([['church_id',$church_id],['user_id',$user_id],['entity_id',$request->entity_id],['like',1]])->first();
                if (count($existing_vote)==0) 
                {
                    $like="1"; 
                    $unlike="0";

                    $vote=new Vote;

                    $vote->church_id    =   $church_id;
                    $vote->user_id      =   $user_id;
                    $vote->entity_id    =   $request->entity_id;
                    $vote->entity_name  =   get_class($sermon);
                    $vote->like         =   $like;
                    $vote->unlike       =   $unlike;

                    $vote->save();  

                    $res['message']='You have liked this sermon';
                }
                else
                {
                    $existing_vote->delete();
                    $res['message']='Like Deleted';
                }
            }
            else
            {
                $res['message']='Invalid';
            }
        }
        else
        {
            $res['message']='Invalid';
        }
        return $res;       
    }


    public function createunlikeVote($request,$church_id,$user_id)
    {
        $sermon = Sermon::where([['church_id',$church_id],['id',$request->entity_id]])->first();

        if(count($sermon)>'0')
        {
            if($church_id==$sermon->church_id)
            {
                $existing_vote = Vote::where([['church_id',$church_id],['user_id',$user_id],['entity_id',$sermon->id],['like',1]])->first();

                if(count($existing_vote)>0)  

                $existing_vote->delete();                

                $existing_vote = Vote::where([['church_id',$church_id],['user_id',$user_id],['entity_id',$sermon->id],['unlike',1]])->first();

                if (count($existing_vote)==0) 
                {
                    $unlike="1"; 
                    $like="0";

                    $vote=new Vote;

                    $vote->church_id    =   $church_id;
                    $vote->user_id      =   $user_id;
                    $vote->entity_id    =   $request->entity_id;
                    $vote->entity_name  =   get_class($sermon);
                    $vote->like         =   $like;
                    $vote->unlike       =   $unlike;

                    $vote->save();

                    $res['message']='You have disliked this sermon';
                }
                else
                {
                   $existing_vote->delete();
                   $res['message']='Dislike Deleted';
                }
            }
            else
            {
               $res['message']='Invalid';
            }
        }
        else
        {
            $res['message']='Invalid';
        }
        return $res;
    }
}