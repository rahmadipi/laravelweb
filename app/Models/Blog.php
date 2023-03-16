<?php

namespace App\Models;

class Blog
{
    private static $blog_posts = [
        [
            "title" => "Welcome to abcde",
            "slug" => "welcome-to-abcde",
            "author" => "Putra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, necessitatibus! Ratione cumque quasi consectetur. Recusandae aliquid, culpa, beatae cumque molestias ipsum est ipsa dignissimos, inventore quisquam nam iure facilis ipsam! Iste non enim deleniti repudiandae, dolores necessitatibus labore recusandae consequatur molestias at modi pariatur corrupti fuga cum culpa eveniet totam consectetur rerum eum similique nihil? Dolore omnis iste, voluptates, et debitis quo voluptate recusandae suscipit laborum, nisi error? Culpa distinctio quis facere id qui voluptate earum veritatis sint suscipit hic quidem porro repellat aliquid doloribus accusamus inventore fuga dicta repudiandae, eos deleniti facilis illum tempora. Ipsam consectetur quas iste repellendus, nobis in, illum molestiae sequi recusandae voluptatum corrupti omnis deleniti fugit, quos quis deserunt. Accusamus alias earum placeat sapiente voluptatum unde voluptate saepe eveniet, facilis quasi facere, ea molestias exercitationem enim, reiciendis laboriosam maxime nihil repudiandae. Temporibus, blanditiis ipsam odit est commodi magni, et dolorum rem delectus in facere suscipit! Ut temporibus veritatis commodi magnam voluptatem alias eligendi quod? Autem doloribus maiores pariatur ut excepturi commodi recusandae debitis a rerum perferendis quidem obcaecati odit nam, minima, voluptate consequuntur expedita quaerat totam ab explicabo. Sequi ad ea, ratione tempore maiores iusto sed quis quam consequatur aliquid harum distinctio itaque iste id.",
        ],
        [
            "title" => "Profile abcde",
            "slug" => "profile-abcde",
            "author" => "Rahmadi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat eaque numquam expedita laboriosam, alias impedit. Minus voluptates corrupti voluptatem illum aperiam sequi nemo? Repudiandae, fugiat nobis aliquid iste sit neque aperiam exercitationem, amet eligendi deserunt, placeat deleniti veritatis? Sed officia vel cumque, commodi odit officiis vitae explicabo dolore amet error eaque. Quis quasi non nesciunt voluptate hic unde voluptates maiores inventore dolorem minus ex quaerat ipsa doloribus illo, saepe facilis fugit beatae fugiat ut? Quam, quos sint. Id qui porro et corrupti natus sunt illum cupiditate, voluptates iusto blanditiis inventore dignissimos itaque facere, possimus repudiandae aut facilis vel pariatur accusantium! Magnam hic consequatur reprehenderit suscipit qui illo excepturi distinctio tempore molestiae? Quasi illum eaque vero fugiat ad quibusdam unde? Doloribus molestias voluptatibus debitis a enim possimus facilis, aliquid eligendi. Magnam minus unde numquam autem accusantium, quis libero fugit. Veniam doloribus vero ad maxime ratione assumenda beatae modi praesentium, architecto animi!"
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
