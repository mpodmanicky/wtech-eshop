<?php
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserType;
use App\Models\Product;
use App\Models\Description;

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
        
        Product::factory()->create([
            'name' => 'Fender Stratocaster',
            'category' => 'electric_guitar',
            'description' => 'The Fender Stratocaster is a model of electric guitar designed from 1952 into 1954 by Leo Fender, Bill Carson, George Fullerton and Freddie Tavares. The Fender Musical Instruments Corporation has continuously manufactured the Stratocaster from 1954 to the present. It is a double-cutaway guitar, with an extended top horn shape for balance. Along with the Gibson Les Paul, it is one of the most often copied electric guitar shapes. "Stratocaster" and "Strat" are trademark terms belonging to Fender.',
            'price' => 128.00,
            'color' => 'Black',
            'brand' => 'Fender',
            'available_stock' => 10,
        ]);

        Product::factory()->create([
            'name' => 'Fender Stratocaster 2',
            'category' => 'electric_guitar',
            'description' => 'The Fender Stratocaster is a model of electric guitar designed from 1952 into 1954 by Leo Fender, Bill Carson, George Fullerton and Freddie Tavares. The Fender Musical Instruments Corporation has continuously manufactured the Stratocaster from 1954 to the present. It is a double-cutaway guitar, with an extended top horn shape for balance. Along with the Gibson Les Paul, it is one of the most often copied electric guitar shapes. "Stratocaster" and "Strat" are trademark terms belonging to Fender.',
            'price' => 300.00,
            'color' => 'Red',
            'brand' => 'Fender',
            'available_stock' => 10,
        ]);

        Product::factory()->create([
            'name' => 'Gibson Les Paul',
            'category' => 'electric_guitar',
            'description' => 'The Gibson Les Paul is a solid body electric guitar that was first sold by the Gibson Guitar Corporation in 1952. The Les Paul was designed by Gibson president Ted McCarty, factory manager John Huis and their team with input from and endorsement by guitarist Les Paul. Its design typically comprises a solid mahogany body with a carved maple top and a single cutaway, a mahogany set-in neck with a rosewood fretboard, two pickups with independent volume and tone controls, and a stoptail bridge, although variants exist.',
            'price' => 456.99,
            'color' => 'Brown',
            'brand' => 'Gibson',
            'available_stock' => 10,
        ]);

    }
}
?>