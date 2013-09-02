<?php 
/**
* Adding rows in users table
*/
class UserTableSeeder extends Seeder
{
	public function run()
		{
			DB::table('users')->delete();
			User::create(array(
				'username' => 'yuzdzhan',
				'password' => Hash::make('yuzdjan1993')
				));
			User::create(array(
				'username' => 'yuzdjan',
				'password' => Hash::make('123123123')
				));
			
		}	
}

 ?>