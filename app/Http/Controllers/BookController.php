<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        
        // $books = Book::get();
        // return view('book',compact('books'));

        $book = Book::find($id);
        //dd($book);

        $emprunt=DB::table('emprunts')
        ->join('books', 'book_id','=','books.id')
        ->select('*')
        ->where('books.id','=',$id)->get();
        //dd($emprunt);
        return view('book',compact('emprunt','book'));


        // $loanHistory = DB::table('loans')
        //     ->join('users', 'user_id', '=', 'users.id')
        //     ->select("*")
        //     ->where('loans.user_id', "=", $book->id)
        //     ->get();
        // // dd($loanHistory);
        // return view('showBookDetails', compact('book', 'loanHistory'));

        
    }
}
