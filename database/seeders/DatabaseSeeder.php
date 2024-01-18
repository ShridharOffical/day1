<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Student;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        
        User::truncate();
        Category::truncate();
        Student::truncate();


       $user= User::factory()->create();

        $personal=Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);
        $family=Category::create([
            'name'=>'Family',
            'slug'=>'family'
        ]);
        $work=Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);

        Student::create([

            'user_id'=>$user->id,
            'category_id'=>$personal->id,
            'title'=>'My Personal Post',
            'slug'=>'my-personal-post',
            'excerpt'=>'lorem personal doller si amet',
            'body'=>'If you have manually added a column to a database table without using Laravel migrations and you want to reflect this change in your Laravel application, you have a few options:'
            
        ]);
        Student::create([

            'user_id'=>$user->id,
            'category_id'=>$family->id,
            'title'=>'My Family Post',
            'slug'=>'my-family-post',
            'excerpt'=>'lorem family doller si amet',
            'body'=>'If you have manually added a column to a database table without using Laravel migrations and you want to reflect this change in your Laravel application, you have a few options:'
            
        ]);
       
        Student::create([

            'user_id'=>$user->id,
            'category_id'=>$work->id,
            'title'=>'My Work Post',
            'slug'=>'my-work-post',
            'excerpt'=>'lorem work doller si amet',
            'body'=>'If you have manually added a column to a database table without using Laravel migrations and you want to reflect this change in your Laravel application, you have a few options:'
            
        ]);



    }
}
