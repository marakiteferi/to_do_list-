<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    public function run()
    {
        $statuses = ['Not Started', 'In Progress', 'Completed'];

        foreach ($statuses as $status) {
            Status::create(['status_name' => $status]);
        }
    }
}
