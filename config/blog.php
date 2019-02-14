<?php
return [
    'name' => "Meetabug",
    'title' => "Meetabug",
    'subtitle' => 'http://blog.test',
    'description' => 'Laravel',
    'author' => 'Meetabug',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 5,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage/uploads',
    ],
    'contact_email'=>env('MAIL_FROM'),
];
