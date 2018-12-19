<?php

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$faker = Faker\Factory::create('es_ES');

		$date = Carbon::now()->toDateTimeString();

		DB::table('users')->insert([
			'name' => 'Martin',
			'email' => 'martinlaizg@gmail.com',
			'username' => 'martinlaizg',
			'password' => Hash::make('martinlaizg'),
			'bdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
			'user_type' => 'admin',
			'created_at' => $date,
			'updated_at'=> $date
			]);

		$users = factory(App\User::class, 20)->create()->each(function($user){
			$user->createdMaps()->save(factory(App\Map::class)->make());
			$user->createdMaps()->save(factory(App\Map::class)->make());
		});
    }
}
