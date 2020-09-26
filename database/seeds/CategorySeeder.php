<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('admin_menu')->truncate();
        DB::table('admin_menu')->insert([
        	[
        		'parent_id' => 0,
        		'order' => 8,
        		'title' => 'Danh mục',
        		'icon' => 'fa-code-fork',
        		'uri' => 'categories'
        	],
            [
                'parent_id' => 0,
                'order' => 9,
                'title' => 'Loại bài viết',
                'icon' => 'fa-asterisk',
                'uri' => 'post-types'
            ],
        	[
        		'parent_id' => 0,
        		'order' => 10,
        		'title' => 'Bài viết',
        		'icon' => 'fa-pencil-square-o',
        		'uri' => 'posts'
        	],
            [
                'parent_id' => 0,
                'order' => 11,
                'title' => 'File Manager',
                'icon' => 'fa-pencil-square-o',
                'uri' => 'file-manager'
            ]
        ]);
    }
}
