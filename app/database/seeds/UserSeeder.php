<?php
/**
 * Created by PhpStorm.
 * User: bbarters
 * Date: 16-11-2014
 * Time: 08:47
 */

class UserSeeder extends Seeder
{
    public function run()
    {

        User::create(array('name'=>'Kaustubh Joshi','username'=>'ksjoshi88','password'=>'test','email'=>'test@best.com'));
        User::create(array('name' => 'Sahil Joshi','username'=>'sahilj88','password'=>'test','email'=>'ksjoshi88@gmail.com'));
        User::create(array('name' => 'Suman Joshi','username'=>'sumanj88','password'=>'test','email'=>'ksjoshi88@gmail.com'));
        User::create(array('name' => 'Chaman Joshi','username'=>'chamanj88','password'=>'test','email'=>'ksjoshi88@gmail.com'));
        User::create(array('name' => 'Raman Joshi','username'=>'ramanj88','password'=>'test','email'=>'ksjoshi88@gmail.com'));
    }

} 