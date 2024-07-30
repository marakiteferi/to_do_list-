namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Userr;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
public function run()
{
User::create([
'name' => 'Admin',
'email' => 'admin@example.com',
'password' => Hash::make('password'),
]);

// Add more users if necessary
}
}