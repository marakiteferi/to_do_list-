namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
public function run()
{
$categories = ['Work', 'Personal', 'Urgent'];

foreach ($categories as $category) {
Category::create(['name' => $category]);
}
}
}