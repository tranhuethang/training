<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call(TimesheetTableSeeder::class);
         $this->call(AdminTableSeeder::class);
         $this->call(ConfigTableSeeder::class);
         $this->call(StaffTableSeeder::class);
         $this->call(StatisticsTableSeeder::class);
    }
}

