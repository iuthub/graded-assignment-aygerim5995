<?php

use Illuminate\Database\Seeder;
App\Post;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post = new Post(['id'=>'New post name']);
          $post = new Post(['id'=>'New id']);
            $post = new Post(['id'=>'New name']);
    }
}
