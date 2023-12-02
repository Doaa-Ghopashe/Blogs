<?php

namespace App\Models;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post1 {

    public  $title;

    public $body;

    public $slug;

    public $date;

    public $sluge;

    public function __construct($title,$body,$slug,$date){
        $this->body = $body;
        $this->title = $title;
        $this->date = $date;
        $this->slug = $slug;
        $this->sluge = implode('-',explode(' ',strtolower($title)));
    }
    public static function find($slug)
    {
        $post = static::all()->firstWhere('slug',$slug);

        if(!$post){
            throw new ModelNotFoundException();
        }
        return $post;
    }

    public static  function  all(){
        return cache()->rememberForever('posts.all',function (){
            return collect( File::files(resource_path('posts')))
                ->map(fn ($file) =>  YamlFrontMatter::parseFile($file))
                ->map(fn ($document)  => new Post1(
                    $document->title,
                    $document->body(),
                    $document->slug,
                    $document->date
                ))
                ->sortByDesc('date');
        });
    }
}
