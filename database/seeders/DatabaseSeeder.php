<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();

        Post::factory(30)->create();

//        $user = User::factory()->create();

//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Famikly',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'title' => 'My PEROSNAL POst',
//            'slug' => 'my-first-post',
//            'excerpt' => 'excerpt',
//            'body' => 'bodyoaeidn foadifn adofn aoidnf aoid[fnOSDIAFBN asdoFNISOADIFNG SDO[IFN ',
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My family POst',
//            'slug' => 'my-second-post',
//            'excerpt' => 'excerpt',
//            'body' => 'bodyoaeidn foadifn adofn aoidnf aoid[fnOSDIAFBN asdoFNISOADIFNG SDO[IFN ',
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My work POst',
//            'slug' => 'my-third-post',
//            'excerpt' => 'excerpt',
//            'body' => 'bodyoaeidn foadifn adofn aoidnf aoid[fnOSDIAFBN asdoFNISOADIFNG SDO[IFN ',
//        ]);
    }
}
