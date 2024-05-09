<?php
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create user types
        $adminType = UserType::create(['user_type' => 'admin']);
        $customerType = UserType::create(['user_type' => 'customer']);

        // Create users
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'type_id' => $customerType->id,
        ]);

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'type_id' => $adminType->id,
        ]);
    }
}
?>