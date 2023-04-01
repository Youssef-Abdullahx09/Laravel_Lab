<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public $postsArray = [
        [
            'id' => 1,
            'title' => 'Laravel',
            'description' => 'hello laravel',
            'posted_by' => 'Ahmed',
            'created_at' => '2023-04-01 10:00:00',
        ],

        [
            'id' => 2,
            'title' => 'PHP',
            'description' => 'hello php',
            'posted_by' => 'Mohamed',
            'created_at' => '2023-04-01 10:00:00',
        ],

        [
            'id' => 3,
            'title' => 'Javascript',
            'description' => 'hello javascript',
            'posted_by' => 'Mustafa',
            'created_at' => '2023-04-01 10:00:00',
        ],
        [
            'id' => 4,
            'title' => 'C#',
            'description' => 'hello C#',
            'posted_by' => 'Youssef',
            'created_at' => '2023-04-01 10:00:00',
        ],
    ];

    function index()
    {

        return view('post.index', [
            'postsArray' => $this->postsArray,
        ]);
    }

    function create()
    {
        return view("post.create");
    }

    function store()
    {
        return redirect()->route("posts");
    }

    function show($id)
    {
        $post = [
            'id' => 4,
            'title' => 'C#',
            'description' => 'hello C#',
            'posted_by' => 'Youssef',
            'created_at' => '2023-04-01 10:00:00',
        ];

        return view("post.show", [
            "post" => $post
        ]);
    }

    function edit()
    {
        $post = [
            'id' => 4,
            'title' => 'C#',
            'description' => 'hello C#',
            'posted_by' => 'Youssef',
            'created_at' => '2023-04-01 10:00:00',
        ];
        return view("post.edit", [
            "post" => $post
        ]);
    }
    function update()
    {
        return redirect()->route("posts");
    }

    function destroy()
    {
        return redirect()->route("posts");
    }
}
