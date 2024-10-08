// Create Seeder Command 
php artisan make:seeder UserSeeder

//seeder basic body
<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
//Calling Additional Seeders
public function run(): void
{
    $this->call([
        UserSeeder::class,
        PostSeeder::class,
        CommentSeeder::class,
    ]);
}
//Running Seeders
php artisan db:seed
php artisan db:seed --class=UserSeeder
php artisan migrate:fresh --seed
php artisan migrate:fresh --seed --seeder=UserSeeder

  ////////////////////////////////////////////////////////////////////Package\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
1  https://packagist.org/packages/tyghaykal/laravel-seed-generator
2  https://github.com/orangehill/iseed
...........install..........
 1
  composer require tyghaykal/laravel-seed-generator
 2
 composer require orangehill/iseed

 Orangehill\Iseed\IseedServiceProvider::class,
..........command...........
1 php artisan iseed my_table,another_table
 2 php artisan seed:generate --table-mode --tables=model_has_permissions,model_has_roles,password_reset_tokens,permissions,personal_access_tokens,roles,role_has_permissions  

