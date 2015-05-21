<?php
/**
 * Created by PhpStorm.
 * Profile: Tejas
 * Date: 14-11-2014
 * Time: 16:15
 */
class ProfileSeeder extends Seeder {

    public function run()
    {
        Profile::create(array('userid' => 1,'about'=>'Fuck OFF!'));
        Profile::create(array('userid' => 2,'about'=>'Fuck OFF!'));
        Profile::create(array('userid' => 3,'about'=>'Fuck OFF!'));
        Profile::create(array('userid' => 4,'about'=>'Fuck OFF!'));
        Profile::create(array('userid' => 5,'about'=>'Fuck OFF!'));

    }

}