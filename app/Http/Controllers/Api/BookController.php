<?php

namespace App\Http\Controllers\Api;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    /**
     * Return a paginated list of books.
     *
     * @return BookResource
     */
    public function index()
    {
        $books = Book::latest()
            ->paginate(20);

        return BookResource::collection($books);
    }

    /**
     * Fetch and return the book.
     *
     * @param Book $book
     * @return BookResource
     */
    public function show(Book $book)
    {
        return new BookResource($book);
    }
}
