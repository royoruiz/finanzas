<?php

namespace Database\Seeders;

use App\Models\Accounts;
use App\Models\Categorys;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        /**
         * Categorys 
         */
        /**
        Categorys::factory()->create([
            'scope' => 'A',
            'category' => 'Planes de pensiones',
            'subcategory' => '',
        ]);
        */
        /**
         * Categorys 
         */
        /**
        Categorys::factory()->create([
            'scope' => 'A',
            'category' => 'Cuentas corrientes',
            'subcategory' => '',
        ]);
        */
        /**
         * Categorys 
         */
        /**
        Categorys::factory()->create([
            'scope' => 'A',
            'category' => 'Cuentas de valores',
            'subcategory' => '',
        ]);
        
        $this->call([AccountsSeeder::class]);
        */
    }
}
