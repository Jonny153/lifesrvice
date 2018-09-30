<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $pages;

    /**
     * PagesController constructor.
     */
    public function __construct()
    {
        $this->pages = config('common.pages');
    }

    public function main()
    {
        $comments = Comment::where('active', 1)->orderBy('created_at', 'desc')->take(5)->get();
        return view('main', [
            'comments' => $comments
        ]);
    }

    public function pages(string $page)
    {
        abort_if(!in_array($page, $this->pages), 404);


        if ($page === 'feedback') {

            $comments = Comment::where('active', 1)->orderBy('created_at', 'desc')->paginate(10);

        } else {

            $comments = null;

        }

        return view('pages.' . $page, [
            'comments' => $comments
        ]);

    }
}
