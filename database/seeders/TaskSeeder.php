<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'name' => 'Website Villa Kanjeng'
        ],
        [
            'name' => 'Form Pendanaan Supllier'
        ],
        [
            'name' => 'Website Kids English Travel'
        ],
        [
            'name' => 'Biller APi'
        ],
        [
            'name' => 'Website Tupitu'
        ],
        [
            'name' => 'Private 1 On 1 Course Wordpress'
        ]];

        foreach($data as $key => $value)
            {
                Task::insert($value);
            }
    }
}
