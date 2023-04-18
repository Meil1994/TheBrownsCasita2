<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\Discount;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $user = User::factory()->create([
            'first_name' => 'meilchu',
            'last_name' => 'meilchu',
            'email' =>'meilchucabaluna1994@gmail.com'
        ]);

        Booking::create([
            'user_id' => 1,
            'checkin_date' => Carbon::parse('April 14, 2023')->format('Y-m-d'),
            'checkout_date' => Carbon::parse('April 15, 2023')->format('Y-m-d'),
            'total_days' => 1,
            'guests' => 1,
            'note' => 'I want tea in the morning',
            'amount' => 3500
        ]);

        Booking::create([
            'user_id' => 1,
            'checkin_date' => Carbon::parse('April 13, 2023')->format('Y-m-d'),
            'checkout_date' => Carbon::parse('April 14, 2023')->format('Y-m-d'),
            'total_days' => 1,
            'guests' => 3,
            'note' => 'I want milk in the morning',
            'amount' => 10500
        ]);

        Discount::create([
            'discount_1' => 10,
            'discount_2' => 15,
            'discount_3' => 20,
            'price' => 3500,
        ]);

        
       

    }
}

 /* Booking::create([
            'checkin_date' => Carbon::parse('April 13, 2023')->format('Y-m-d'),
            'checkout_date' => Carbon::parse('April 14, 2023')->format('Y-m-d'),
            'total_days' => 1,
            'guests' => 3,
            'note' => 'I want milk in the morning',
            'amount' => 10500
        ]);

        Booking::create([
            'checkin_date' => Carbon::parse('April 14, 2023')->format('Y-m-d'),
            'checkout_date' => Carbon::parse('April 15, 2023')->format('Y-m-d'),
            'total_days' => 1,
            'guests' => 1,
            'note' => 'I want tea in the morning',
            'amount' => 3500
        ]);

        Admin::create([
            'username' => 'meil1994',
            'email' => 'meilchucabaluna1994@gmail.com',
            'password' => Hash::make('password')
        ]);

        Discount::create([
            'discount_1' => 10,
            'discount_2' => 15,
            'discount_3' => 20,
            'price' => 3500,
        ]);
        */
