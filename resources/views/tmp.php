Category::create([
'name'=>'News',
'slug'=>'news',
]);

Post::create([
'title'=>'Judul Ketiga',
'category_id'=>2,
'slug'=>'judul-ketiga',
'author'=>'Putra Rahmadi',
'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores accusamus rerum nam ex iste beatae consequuntur eaque aliquid dolorem magni aut modi.',
'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores accusamus rerum nam ex iste beatae consequuntur eaque aliquid dolorem magni aut modi, provident, in, voluptatum dignissimos commodi hic minus maxime veniam esse aspernatur. Ducimus, suscipit nulla. Exercitationem voluptatem hic sunt numquam nesciunt reprehenderit aperiam praesentium quaerat, quidem aliquid veniam eius quos fugiat natus consequatur obcaecati? Soluta, quisquam aspernatur dignissimos ab rerum optio. Assumenda reprehenderit natus, facere nulla minus ea magnam saepe ad non aspernatur similique vero corporis sint repellat quisquam sequi nisi soluta laboriosam incidunt eius aperiam possimus dolorem, veritatis facilis? Alias maxime nulla ullam, enim odio et cumque non?'
])