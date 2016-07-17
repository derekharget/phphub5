<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    protected $seeders = [
        'UsersTableSeeder',
        'TipsTableSeeder',
        'LinksTableSeeder',
        'CategoriesTableSeeder',
        'TopicsTableSeeder',
        'RepliesTableSeeder',
        'BannersTableSeeder',
        'FollowersTableSeeder',
    ];

    public function run()
    {
        insanity_check();

        Model::unguard();

        foreach ($this->seeders as $seedClass) {
            $this->call($seedClass);
        }

        Model::reguard();
    }
}
