<?php

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Jobseeder extends Seeder
{

     public function run(): void
     {
          Job::factory(23)->create();
     }
}


