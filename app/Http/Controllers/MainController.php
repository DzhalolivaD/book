<?php

namespace App\Http\Controllers;

use App\Models\BD;
use App\Models\bookmarker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class MainController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function home()
    {
        $book = DB::table('book')
            ->join('author', 'book.id_author', '=', 'author.id_author')
            ->join('bookstyle', 'book.id_book', '=', 'bookstyle.id_book')
            ->join('style', 'bookstyle.id_style', '=', 'style.id_style')
            ->select(
                'book.name', 'book.id_book',
                DB::raw('concat (author.lastname, " ",author.name, " " , author.middlename) as author'),
                DB::raw('GROUP_CONCAT(style.name) as style'))
            ->groupBy('book.id_book')
            ->simplePaginate(5);

        $count = DB::table('book')
            ->select(DB::raw('count(book.id_book) as summa'))
            ->get();

        $cauthor = DB::table('author')
            ->select(DB::raw('count(author.id_author) as sumauthor'))
            ->get();

        return view('home', ['book' => $book, 'count' => $count,'cauthor'=>$cauthor]);
    }
public function author()
{
    $author=DB::table('author')
        ->select(DB::raw('CONCAT(author.lastname, " ", author.name, " ",author.middlename) as fullname'), 'author.id_author',
            DB::raw('Count(book.id_book) as sumbook'))
        ->leftJoin('book','author.id_author','=','book.id_author')
        ->groupBy('author.id_author')
        ->simplePaginate(3);



    $count = DB::table('book')
        ->select(DB::raw('count(book.id_book) as summa'))
        ->get();

    $cauthor = DB::table('author')
        ->select(DB::raw('count(author.id_author) as sumauthor'))
        ->get();

    return view('author',['author'=>$author, 'count' => $count,'cauthor'=>$cauthor]);
}

    public function idauthor($id_author)
    {
        $book= DB::table('book')
            ->join('bookstyle','book.id_book','=', 'bookstyle.id_book')
            ->join('style', 'bookstyle.id_style','=','style.id_style')
            ->select('book.name as bookname', DB::raw('Group_Concat(style.name) as style'))
            ->where('id_author', $id_author)
            ->groupBy('book.name')
        ->get();


        $author=DB::table('author')
            ->select(DB::raw('CONCAT(lastname, " ", name, " ",middlename) as fullname'))
            ->where('id_author', $id_author)
            ->get();
        return view('idauthor',['book'=>$book, 'author'=>$author]);

    }
    public function style()
    {
        $style = DB::table('style')
            ->select('style.name','style.id_style')
            ->simplePaginate(5);
        $count = DB::table('book')
            ->select(DB::raw('count(book.id_book) as summa'))
            ->get();

        $cauthor = DB::table('author')
            ->select(DB::raw('count(author.id_author) as sumauthor'))
            ->get();

        return view('style',['style'=>$style,'count' => $count,'cauthor'=>$cauthor]);

    }

    public function idstyle($id_style)
    {

        $book= DB::table('book')
            ->join('bookstyle','book.id_book','=', 'bookstyle.id_book')
            ->join('style', 'bookstyle.id_style','=','style.id_style')
            ->join('author', 'book.id_author','=','author.id_author')
            ->select('book.name as bookname', 'style.name as name', DB::raw('CONCAT(author.lastname, " ", author.name, " ",author.middlename) as fullname'))
            ->where('style.id_style', $id_style)
            ->simplePaginate(2);

        $style = DB::table('style')
            ->select('style.name')
            ->where('style.id_style', $id_style)
            ->get();



        return view('idstyle', ['book'=>$book,'style'=>$style]);

    }
    public function search( Request $request)

    {
        $text = $request->input('ids');


        if (!empty($text)) {
            $book = DB::table('book')
                ->join('bookstyle', 'book.id_book', '=', 'bookstyle.id_book')
                ->join('style', 'bookstyle.id_style', '=', 'style.id_style')
                ->join('author', 'book.id_author', '=', 'author.id_author')
                ->select('book.name as name', 'style.name as style', DB::raw('CONCAT(author.lastname, " ", author.name, " ",author.middlename) as fullname'))
                ->where("book.id_book", "=", $text)
                ->get();
        }

        if($book->count()===0)
        {
            $book = null;
        }



        return view('search',['book'=>$book]);

    }

    public function auth()
    {
        return view('auth');

    }
    public function userpage()
    {
        return view('userpage');
    }


}
