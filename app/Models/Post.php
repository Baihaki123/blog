<?php

namespace App\Models;

class Post 
{
   private static $blog_posts = [
            [
                "title" => "Blog Post 1",
                "slug" => "blog-post-1",
                "author" => "Aski Baihaki",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus doloremque exercitationem itaque aliquam debitis vel alias ducimus eum illum aliquid, quia voluptates expedita ullam sit, error, distinctio quos numquam tempore facilis? Distinctio aut est iusto recusandae, ex vel placeat! Voluptatem, ad, voluptas ipsa esse ipsum atque et ipsam eum libero accusantium, eaque deserunt a ex error laudantium. Aspernatur cum architecto asperiores. Aperiam, sit. Odio facilis itaque reiciendis laboriosam, adipisci id. Facere numquam sapiente animi eos voluptatibus quos provident exercitationem eveniet."
            ],
            [
                "title" => "Blog Post 2",
                "slug" => "blog-post-2",
                "author" => "Hamam Mu'arif",
                "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi eos minus debitis cumque nihil totam, fugit beatae quis voluptatum, quae sed quisquam! Maiores hic accusantium perferendis reiciendis doloremque quasi qui eaque fuga? Cupiditate nihil fugit aut assumenda eaque itaque atque consectetur facilis autem veritatis, odit pariatur? Odit ullam nam error quis ipsa dolores ab deserunt distinctio officia. Quis assumenda saepe, quae aut reprehenderit asperiores repudiandae ad officia possimus eum nam reiciendis cumque atque officiis nostrum quam omnis odit ullam? Nobis at doloribus aspernatur et voluptate ratione corrupti assumenda asperiores voluptas esse debitis, impedit repudiandae ea incidunt. Voluptas porro vel assumenda!"
            ],

        ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug) 
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
