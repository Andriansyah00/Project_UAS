<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
			'username' => 'andri',
			'useremail' => 'andri.a13@mhs.pelitabangsa.ac.id',
			'userpassword' => password_hash('andri', PASSWORD_DEFAULT),
		]);
	}
}
