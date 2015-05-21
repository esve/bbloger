<?php
/**
 * Created by PhpStorm.
 * User: bbarters
 * Date: 16-11-2014
 * Time: 08:31
 */

class Profile extends Eloquent
{
    protected $table='profile';
    protected $fillable=array('userid','about');
    protected $primaryKey='userid';


    //relationships

    public function getUser()
    {
        return $this->belongsTo('User','userid');
    }


} 