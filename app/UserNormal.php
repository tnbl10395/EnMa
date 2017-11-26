<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 11/18/2017
 * Time: 10:02 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
use Software_Engineer_Management;

class UserNormal extends Model
{
    protected $table = 'users';
    public $timestamps = false;
}
