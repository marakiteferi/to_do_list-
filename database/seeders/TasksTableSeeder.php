namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\Status;
use App\Models\Category;

class TasksTableSeeder extends Seeder
{
public function run()
{
$status = Status::first();
$category = Category::first();

Task::create([
'name' => 'Sample Task 1',
'description' => 'This is a sample task description.',
'priority' => 'High',
'status_id' => $status->id,
'category_id' => $category->id,
]);

// Add more tasks if necessary
}
}