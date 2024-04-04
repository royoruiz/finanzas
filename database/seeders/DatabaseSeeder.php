<?php

namespace Database\Seeders;

use App\Models\Accounts;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
        /**
         * Account Unicaja - Cuenta corriente
         */
        Accounts::factory()->create([
            'account_name' => 'Unicaja - CC',
            'bank' => '2103',
            'office' => '7843',
            'account' => '0030693853',
            'dc' => '35',
            'iban' => 'ES49', 
        ]);
        /**
         * Account Santander - Cuenta corriente
         */
        Accounts::factory()->create([
            'account_name' => 'Santander - CC',
            'bank' => '0049',
            'office' => '6722',
            'account' => '2290054926',
            'dc' => '09',
            'iban' => 'ES74', 
        ]);
        /**
         * Account Santander - Plan de pensiones
         */
        Accounts::factory()->create([
            'account_name' => 'Santander - PP',
            'bank' => '0049',
            'office' => '6722',
            'account' => '3055961458',
            'dc' => '',
            'iban' => '', 
        ]);
        /**
         * Account Arquia - Cuenta corriente
         */
        Accounts::factory()->create([
            'account_name' => 'Arquia - CC',
            'bank' => '3183',
            'office' => '0300',
            'account' => '1000170520',
            'dc' => '14',
            'iban' => 'ES47', 
        ]);
        /**
         * Account Arquia - Plan de pensiones
         */
        Accounts::factory()->create([
            'account_name' => 'Arquia - PP Nico',
            'bank' => '3183',
            'office' => '0300',
            'account' => '0004827587',
            'dc' => '',
            'iban' => '', 
        ]);
        /**
         * Account Trade Republic - Cuenta corriente
         */
        Accounts::factory()->create([
            'account_name' => 'Trade Republic - CC',
            'bank' => '5021',
            'office' => '0900',
            'account' => '7017465257',
            'dc' => '',
            'iban' => 'DE86', 
        ]);
        
        /**
         * Account MyInvestor - Cuenta corriente
         */
        Accounts::factory()->create([
            'account_name' => 'MyInvestor - CC',
            'bank' => '1544',
            'office' => '7889',
            'account' => '6650775510',
            'dc' => '75',
            'iban' => 'ES16', 
        ]);
        /**
         * Account MyInvestor - Cartera automatizada
         */
        Accounts::factory()->create([
            'account_name' => 'MyInvestor - Robot',
            'bank' => '1544',
            'office' => '7889',
            'account' => '6650780518',
            'dc' => '73',
            'iban' => 'ES16', 
        ]);
        /**
         * Account MyInvestor - Cuenta de valores Fondos
         */
        Accounts::factory()->create([
            'account_name' => 'MyInvestor - Fondos',
            'bank' => '1544',
            'office' => '7889',
            'account' => '6650780519',
            'dc' => '72',
            'iban' => '', 
        ]);

    }
}
