<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
					'name'=> 'Web Development',
					'slug' => 'web-dev',
					'color' => 'red'
				]);
        Category::create([
					'name'=> 'UI/UX Design',
					'slug' => 'uiux-design',
					'color' => 'teal'
				]);
        Category::create([
					'name'=> 'Data Analytics',
					'slug' => 'data-analytics',
					'color' => 'blue'
				]);
        Category::create([
					'name'=> 'Machine Learning',
					'slug' => 'machine-learning',
					'color' => 'green'
				]);
        Category::create([
					'name'=> 'Artificial Intelligence',
					'slug' => 'artificial-intelligence',
					'color' => 'yellow'
				]);
    }
}
