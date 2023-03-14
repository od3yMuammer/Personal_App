<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Process extends Model
{
    use HasFactory;
    protected $table = 'proceses_log';
    protected $fillable = [
        'id', 'name', 'email', 'ip', 'type', 'file_id','file_name'
    ];

    public function insert_log($ip, $type, $file_id,$file_name)
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->ip = $ip;
        $this->type = $type;
        $this->file_id = $file_id;
        $this->file_name = $file_name;
        $this->save();
    }
}
