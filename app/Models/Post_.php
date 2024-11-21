<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Park Chaeyoung",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus incidunt adipisci, et natus aliquam maiores repellat illo esse iste. Vel asperiores, sed nesciunt blanditiis itaque impedit minima atque sunt incidunt earum, sequi expedita, eos exercitationem doloremque est qui quam nam in vero distinctio magnam! A eos nostrum consequuntur aliquid vitae quas, eveniet impedit iure? Quis unde minima cupiditate at sit hic. Hic illo ratione quo aut inventore voluptas aliquam fuga reiciendis non dicta. Sed, voluptates. Dolores consequatur accusamus quidem vitae."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kim Jisoo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, maiores eius. Vero quidem, illo harum dolorem saepe quod et nulla explicabo sint assumenda repudiandae molestiae optio at praesentium a dignissimos porro labore deleniti fuga hic animi, quae necessitatibus tempore quasi. In cum exercitationem eligendi expedita nesciunt repellendus recusandae qui harum necessitatibus, ducimus pariatur assumenda eaque, hic nam fuga rerum soluta autem labore. Veniam, delectus debitis. Consequatur enim eveniet facere deserunt animi, autem sed maxime dolor nesciunt, veritatis ab! Voluptatem sed vitae fugiat amet assumenda exercitationem. In enim ad reprehenderit veritatis quam. Temporibus id omnis ratione sapiente repellat dolorum nam expedita!"
        ]
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
