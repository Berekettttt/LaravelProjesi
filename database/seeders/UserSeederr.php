<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kullanıcı silme
        DB::table('users')->where('email', 'suleyman@gmail.com')->delete();
        echo "User with email 'suleyman@gmail.com' deleted\n";

        // Kullanıcı güncelleme
        DB::table('users')
            ->where('email', 'suleyman@gmail.com')
            ->update([
                'name' => 'Güncellenmiş Ad',
                'password' => Hash::make('yeniSifre'),
            ]);
        echo "Updated user with email 'suleyman@gmail.com'\n";

        // Kullanıcıları listeleme
        $users = DB::table('users')->get();
        echo "List of Users:\n";
        foreach ($users as $user) {
            echo "ID: $user->id, Name: $user->name, Email: $user->email\n";
        }

        // Yeni kullanıcı ekleme
        DB::table('users')->insert([
            'name' => "Süleyman Bereket",
            'email' => "Sbereket@gmail.com",
            'password' => Hash::make('65321'),
        ]);
        echo "New user added\n";
    }
}
