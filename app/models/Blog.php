<?php
/**
 * Created by PhpStorm.
 * User: bbarters
 * Date: 16-11-2014
 * Time: 08:36
 */

class Blog extends Eloquent
{
    protected $table='blogs';
    protected $fillable = array('writerid','title', 'content');
    //relationships

    public function getAuthor()
    {
        return $this->belongsTo('User','writerid');
    }

    public function getReaders()
    {
        return $this->belongsToMany('User','blogreaders','blogid','readerid');
    }

} 