<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class SendMail extends Model
{
    //
    use Common;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'send_mail';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'church_id' , 'user_id' , 'entity_id' , 'entity_name' , 'from_address' , 'mode' , 'from' , 'to' , 'subject' , 'message' , 'attachments' , 'status' , 'type' , 'message_id' , 'read_at' , 'executed_at' , 'is_executed' , 'fired_at' , 'read_status'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['executed_at' , 'fired_at' , 'read_at' , 'deleted_at'];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function getAttachmentPathAttribute()
    {
        return $this->getFilePath($this->attachments);
    }

    public function group()
    {
        return $this->belongsTo('App\Models\Group','entity_id');
    }
}