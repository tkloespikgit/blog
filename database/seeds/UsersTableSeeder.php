<?php
/**
 * Created by PhpStorm.
 * User: tkloespik
 * Date: 17-12-4
 * Time: 下午8:48
 */
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Users::class, 50)->create(
            [
                'password' => bcrypt('123456')
            ]
        );
    }
}
