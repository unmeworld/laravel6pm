<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News\News;
class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsData=[
            [
                'category_id'=>1,
                'user_id'=>1,
                'title'=>'News-title-one',
                'slug'=>'news-title-one',
                'summary'=>'News Summary 1',
                'description'=>'News Description 1',
            ],
            [
                'category_id'=>2,
                'user_id'=>1,
                'title'=>'News-title-one',
                'slug'=>'news-title-one',
                'summary'=>'News Summary 1',
                'description'=>'News Description 1',
            ],
            [
                'category_id'=>3,
                'user_id'=>1,
                'title'=>'News-title-one',
                'slug'=>'news-title-one',
                'summary'=>'News Summary 1',
                'description'=>'News Description 1',
            ],
            [
                'category_id'=>4,
                'user_id'=>1,
                'title'=>'News-title-one',
                'slug'=>'news-title-one',
                'summary'=>'News Summary 1',
                'description'=>'News Description 1',
            ],
            [
                'category_id'=>5,
                'user_id'=>1,
                'title'=>'News-title-one',
                'slug'=>'news-title-one',
                'summary'=>'News Summary 1',
                'description'=>'News Description 1',
            ],
        ];

        foreach ($newsData as $news) {
            $title = $news['title'];
            $newsExists = News::where('title', '=', $title)->first();
            if (!$newsExists) {
                News::create($news);
            }
        }
    }
}
