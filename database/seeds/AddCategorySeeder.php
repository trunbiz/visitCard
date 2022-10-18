<?php

use Illuminate\Database\Seeder;

class AddCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Model\categoryModel::insert([
            [
                'title' => 'Thẻ in tên',
                'describe' => 'Thẻ in tên',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'title' => 'Thẻ thiết kế nâng cao',
                'describe' => 'Thẻ thiết kế nâng cao',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'title' => 'POPON BLACK',
                'describe' => 'POPON BLACK',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'title' => 'Danh thiếp thông minh',
                'describe' => 'Danh thiếp thông minh',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
        ]);
    }
}
