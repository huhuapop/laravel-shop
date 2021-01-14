<?php

use App\Models\User;
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
        // 生成数据集合
        $users = factory(User::class)->times(100)->create();

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = 'Huafu';
        $user->email = 'huhuapop@outlook.com';
        $user->save();

    }
}
