<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Utilisateur;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Seed the main admin account.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = Utilisateur::firstOrCreate(
            ['email' => 'abdelhakimbaalla50@gmail.com'],
            [
                'nom' => 'Baalla',
                'prenom' => 'Abdelhakim',
                'password' => Hash::make('Mahsoul2024!'),
                'telephone' => '0600000000',
                'adresse' => 'Casablanca, Maroc',
                'type' => 'admin',
                'photo' => '/images/seeds/avatars/admin.jpg',
                'about' => 'Administrateur principal de la plateforme Mahsoul',
            ]
        );

        Admin::firstOrCreate(
            ['compte' => $adminUser->id],
            [
                'domaines_expertise' => 'Gestion plateforme, Agriculture digitale',
                'contact_urgence' => '0600000000',
                'about' => 'Compte administrateur principal',
            ]
        );
    }
}
