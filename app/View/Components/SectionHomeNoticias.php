<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionHomeNoticias extends Component
{
    public $news = [
    [
        'title' => 'Lorem Ipsum',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'url' => 'https://example.com/news1',
        'tags' => ['Lorem', 'Ipsum', 'News'],
        'category' => 'General',
        'createDate' => '2024-03-10',
    ],
    [
        'title' => 'Dolor Sit Amet',
        'description' => 'Dolor sit amet, consectetur adipiscing elit. Proin ut justo ut justo vulputate dapibus.',
        'url' => 'https://example.com/news2',
        'tags' => ['Dolor', 'Sit', 'Amet', 'News'],
        'category' => 'Technology',
        'createDate' => '2024-03-09',
    ],
    [
        'title' => 'Consectetur Adipiscing',
        'description' => 'Consectetur adipiscing elit. Quisque ut justo vel nulla euismod ultrices.',
        'url' => 'https://example.com/news3',
        'tags' => ['Consectetur', 'Adipiscing', 'News'],
        'category' => 'Health',
        'createDate' => '2024-03-08',
    ],
    [
        'title' => 'Vulputate Dapibus',
        'description' => 'Vulputate dapibus. Nunc ullamcorper justo nec augue pellentesque, in bibendum mauris condimentum.',
        'url' => 'https://example.com/news4',
        'tags' => ['Vulputate', 'Dapibus', 'News'],
        'category' => 'Science',
        'createDate' => '2024-03-07',
    ],
    [
        'title' => 'Justo Nulla Euismod',
        'description' => 'Justo nulla euismod ultrices. Sed quis justo at velit tincidunt ultricies.',
        'url' => 'https://example.com/news5',
        'tags' => ['Justo', 'Nulla', 'Euismod', 'News'],
        'category' => 'Sports',
        'createDate' => '2024-03-06',
    ],
    [
        'title' => 'Pellentesque Bibendum',
        'description' => 'Pellentesque bibendum mauris condimentum. Fusce non odio eu ex commodo tristique vel a leo.',
        'url' => 'https://example.com/news6',
        'tags' => ['Pellentesque', 'Bibendum', 'News'],
        'category' => 'Entertainment',
        'createDate' => '2024-03-05',
    ],
    [
        'title' => 'Leo Ex Commodo',
        'description' => 'Leo ex commodo tristique. Duis at elit nec orci feugiat eleifend at vel mi.',
        'url' => 'https://example.com/news7',
        'tags' => ['Leo', 'Ex', 'Commodo', 'News'],
        'category' => 'Business',
        'createDate' => '2024-03-04',
    ],
];
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section-home-noticias');
    }
}
