<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer=[

            [
                'name'=>'veera',
                'email'=>'veera2910@gmai.com',
                'mobile_number'=>'876545678',
                'gender'=>'male'
            ],
            [
                'name'=>'Arun',
                'email'=>'Arun2910@gmai.com',
                'mobile_number'=>'876545678',
                'gender'=>'male'
            ],
            [
                'name'=>'divay',
                'email'=>'divay2910@gmai.com',
                'mobile_number'=>'876545678',
                'gender'=>'female'
            ],
            [
                'name'=>'vicky',
                'email'=>'vicky2910@gmai.com',
                'mobile_number'=>'876545678',
                'gender'=>'male'
            ],
            [
                'name'=>'suresh',
                'email'=>'suresh2910@gmai.com',
                'mobile_number'=>'876545678',
                'gender'=>'male'
            ],
            [
                'name'=>'seeni',
                'email'=>'seeni2910@gmai.com',
                'mobile_number'=>'876545678',
                'gender'=>'male'
            ],
            [
                'name'=>'mani',
                'email'=>'mani910@gmai.com',
                'mobile_number'=>'876545678',
                'gender'=>'male'
            ],

            [
                'name'=>'veera',
                'email'=>'veera2910@gmai.com',
                'mobile_number'=>'876545678',
                'gender'=>'male'
            ],

        ];
        DB::table('customers')->insert($customer);

    }
}
