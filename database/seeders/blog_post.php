<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\blog_postFactory;
use Carbon\Carbon;

class blog_post extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'title' => 'Post 1',
                'description' => 'Post Description 1',
                'content' => 'This is the content of post 1.',
                'summary' => 'Summary of post 1.',
                'meta_data' => json_encode(['key1' => 'value1', 'key2' => 'value2']),
                'meta_description' => 'Meta description for post 1.',
                'author' => 'Author 1',
                'created_at' => Carbon::now(), // Add created_at
                'updated_at' => Carbon::now(), // Add updated_at
            ],
            [
                'title' => 'Post 2',
                'description' => 'Post Description 2',
                'content' => 'This is the content of post 2.',
                'summary' => 'Summary of post 2.',
                'meta_data' => json_encode(['key1' => 'value3', 'key2' => 'value4']),
                'meta_description' => 'Meta description for post 2.',
                'author' => 'Author 2',
                'created_at' => Carbon::now(), // Add created_at
                'updated_at' => Carbon::now(), // Add updated_at
            ],
            // Add more entries as needed
        ];

        DB::table('table_blogs')->insert($data);
        // DB::table('table_blogs')->factory()->count(10)->create();
        $factory = new blog_postFactory();
        foreach(range(1,10) as $index){
            DB::table('table_blogs')->insert($factory->definition());
        }
    }
}
