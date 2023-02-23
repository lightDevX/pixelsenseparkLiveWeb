<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'name' => 'Admin',
      'email' => 'admin@app.com',
      'is_admin' => '1',
      'password' => bcrypt('123123123'),
    ]);

    User::create([
      'name' => 'Shuvo Mohajan',
      'email' => 'user@app.com',
      'is_admin' => '0',
      'password' => bcrypt('123123123'),
    ]);
  }
}
