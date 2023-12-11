<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
//creating and sotring books into the database
class BookController extends Controller
{
    public function index(){
        //Finding Books
        $Books = Book::all();

        return view('Books.index',compact('books'));
    }

    public function show(string $id){
        //finding books using ID
        return view('Book.profile', [
            'Book' => Book::findOrFail($id)
        ]);
    }

    public function create(){
        //creating a book
        return view('books.create');
    }

    public function store(Request $request){
        //storing a created book and return to index
        Book::create($request->all);
        return redirect()->route('books.index');
    }

}
