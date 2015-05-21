<?php
/**
 * Created by PhpStorm.
 * User: Tejas
 * Date: 14-11-2014
 * Time: 16:19
 */

class BlogSeeder extends Seeder {

    public function run()
    {

        Blog::create(array('writerid' => 1,'title'=>'Screw YOU','content'=>'Go **** Yourself!'));
        Blog::create(array('writerid' => 2,'title'=>'Go Away YOU Man','content'=>'Go **** Yourself!'));
        Blog::create(array('writerid' => 3,'title'=>'Spiderhombre','content'=>'Go**** Yourself!'));
        Blog::create(array('writerid' => 4,'title'=>'Get YOU bhau','content'=>'Go **** Yourself!'));
        Blog::create(array('writerid' => 5,'title'=>'Dark Knight Me','content'=>'Go **** Yourself!'));

    }

}