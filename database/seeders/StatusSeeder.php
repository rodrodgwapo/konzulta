<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert(
            [
                'status_cd' => 'RQTD',
                'status_name' => 'Requested',
            ],
            [
                'status_cd' => 'APPR',
                'status_name' => 'Approved',
            ],
            [
                'status_cd' => 'CANC',
                'status_name' => 'Cancelled',
            ],
            [
                'status_cd' => 'EXPD',
                'status_name' => 'Expired',
            ],
            [
                'status_cd' => 'ACTV',
                'status_name' => 'Active',
            ],
            [
                'status_cd' => 'ICTV',
                'status_name' => 'Inactive',
            ],
            [
                'status_cd' => 'DLTD',
                'status_name' => 'Deleted',
            ]

    );
    }
}
