<?php

namespace Database\Seeders;

use App\Models\DetailType;
use Illuminate\Database\Seeder;

class DetailTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detailTypes = [
            [
                'id' => 1,
                'title' => 'Unknown',
                'description' => 'Unknown type of detail',
            ],
            [
                'id' => 100,
                'title' => 'Mobile',
                'description' => 'Mobile phone number',
            ],
            [
                'title' => 'Mobile (Personal)',
                'description' => 'Personal mobile phone number',
            ],
            [
                'title' => 'Mobile (Work)',
                'description' => 'Business mobile phone number',
            ],
            [
                'title' => 'Phone (Work)',
                'description' => 'Work phone number',
            ],
            [
                'title' => 'Email (Personal)',
                'description' => 'Personal email address',
            ],
            [
                'title' => 'Email (Work)',
                'description' => 'Business email address',
            ],
            [
                'title' => 'WWW (Work)',
                'description' => 'Business Website',
            ],
            [
                'title' => 'WWW (Personal)',
                'description' => 'Personal Website',
            ],
            [
                'title' => 'Social Media (Personal, Facebook)',
                'description' => 'Personal Facebook',
            ],
        ];

        foreach ($detailTypes as $detailType) {
            DetailType::create($detailType);
        }
    }
}
