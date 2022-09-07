<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KseiOutgoingLogs extends Model
{
    public $primaryKey  = 'msg_id';

    public $timestamps = false;
    
    protected $table = 'ksei_outgoing_logs';

    protected $fillable = [
        "msg_id",
        "method_ksei",
        "json_request",
        "xml_request",
        "response",
        "status",
        "external_reference",
        "no_cif",
        "created_at",
    ];
}
