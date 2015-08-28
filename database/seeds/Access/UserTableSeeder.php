<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon as Carbon;

class UserTableSeeder extends Seeder {

	public function run() {

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		//Add the master administrator, user id of 1
		DB::table(config('auth.table'))->truncate();

		$users = [
			[
				'name' => 'I Am Iron Man (Administrator)',
				'email' => 'chithewebdeveloper@gmail.com',
				'password' => bcrypt('smilingisforthew3Ak'),
				'confirmation_code' => md5(uniqid(mt_rand(), true)),
				'confirmed' => true,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'name' => 'Default User',
				'email' => 'user@user.com',
				'password' => bcrypt('default123456'),
				'confirmation_code' => md5(uniqid(mt_rand(), true)),
				'confirmed' => true,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'name' => 'Jason Criddle',
				'email' => 'jasoncriddle@gmail.com',
				'password' => bcrypt('jasoncriddle123456'),
				'confirmation_code' => md5(uniqid(mt_rand(), true)),
				'confirmed' => true,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'name' => 'Chi Rilo',
				'email' => 'developer@legacystatus.com',
				'password' => bcrypt('smilingisforthew3Ak'),
				'confirmation_code' => md5(uniqid(mt_rand(), true)),
				'confirmed' => true,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
			[
				'name' => 'Noeh The Great',
				'email' => 'noehthegreat91@gmail.com',
				'password' => bcrypt('noeh123456'),
				'confirmation_code' => md5(uniqid(mt_rand(), true)),
				'confirmed' => true,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
		];

		DB::table(config('auth.table'))->insert($users);

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
