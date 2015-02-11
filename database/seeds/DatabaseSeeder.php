<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User as User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		User::truncate();

		User::create([
			'email' => 'egor.semenof@yandex.ru',
			'password' => Hash::make('admin'),
			'name' => 'Borskiy',
		]);
	}

}
