<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model{
    protected $guarded = [];
    protected $table = "permissions";
}