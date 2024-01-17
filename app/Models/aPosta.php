<?php

namespace App\Models;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title, $date, $body, $slug;

    public function __construct($title, $date, $body, $slug)
    {
        $this->title = $title;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function find($slug)
    {
        return Cache::remember("posts.{$slug}", 1200, function () use ($slug) {
            $path = resource_path("posts/{$slug}.html");

            if (!file_exists($path)) {
                throw new ModelNotFoundException();
            }

            $document = YamlFrontMatter::parseFile($path);

            return new Post(
                $document->title,
                $document->date,
                $document->body(),
                $document->slug
            );
        });
    }

    public static function all()
    {
        return Cache::remember('posts', 3, function () {

            $files = File::files(resource_path("posts/"));

            return collect($files)->map(function ($file) {
                $document = YamlFrontMatter::parseFile($file);

                return new Post(
                    $document->title,
                    $document->date,
                    $document->body(),
                    $document->slug
                );
            })->sortBy('date')->values();
        });
    }
}