<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'pname'			=> 'Andres',
            'lastname'		=> 'Romero',
            'cel'			=> '9988417622',
            'country'		=> 'México',
            'biography'	=> 'Hola soy un chico cualquiera!!',
            'type'			=> 'Pianista',
            'name'			=> 'Andres01',
            'email'			=> 'joandres098@gmail.com',
            'password'		=>  bcrypt('holamundo'),
            'followers'		=>  0,
        ]);

        DB::table('users')->insert([
            'pname'			=> 'Elvis',
            'lastname'		=> 'Tec',
            'cel'			=> '9988417622',
            'country'		=> 'México',
            'biography'	=> 'Hola, me gusta mucho la guitarra!!',
            'type'			=> 'Guitarrista',
            'name'			=> 'Elvistec',
            'email'			=> 'elvistec.yo@gmail.com',
            'password'		=>  bcrypt('holamundo'),
            'followers'		=>  0,
        ]);

        DB::table('users')->insert([
            'pname'         => 'Katherine',
            'lastname'      => 'Felix',
            'cel'           => '9988417622',
            'country'       => 'México',
            'biography'     => 'Hola, me gusta ',
            'type'          => 'Guitarrista',
            'name'          => 'Elvistec',
            'email'         => 'elvistec.yo@gmail.com',
            'password'      =>  bcrypt('holamundo'),
            'followers'     =>  0,
        ]);
    }
}
