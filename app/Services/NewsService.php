<?php

namespace App\Services;

use App\Models\News;

class NewsService
{

    public function index()
    {
        return News::query()->get();
    }

    public function createNews(array $validated)
    {
        $news  = new News();
        $news->name = $validated['name'];
        $news->description = $validated['description'];
        $news->CategoryId = $validated['CategoryId'];
        $news->Team_categoryId = $validated['Team_categoryId'];
        $news->addMedia($validated['image'])->toMediaCollection('images');
        $news->save();
        return $news;
    }

    public function updateNews(array $validated, News $news)
    {
        $news->name = $validated['name'];
        $news->description = $validated['description'];
        $news->CategoryId = $validated['CategoryId'];
        $news->Team_categoryId = $validated['Team_categoryId'];
        if(isset($validated["image"]))
        {
            if ($news->getMedia('images')->first())
            {
                $news->getMedia('images')->first()->delete();
            }
            $news->addMedia($validated['image'])->toMediaCollection('images');
        }
        $news->save();
        return $news;
    }

    public function deleteNews(News $news)
    {
        $news->delete();
    }
}

?>
