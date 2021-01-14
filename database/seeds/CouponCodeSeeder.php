<?php

use App\Models\CouponCode;
use Illuminate\Database\Seeder;

class CouponCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 生成数据集合
        $couponCodes = factory(CouponCode::class)->times(30)->create();
    }
}
