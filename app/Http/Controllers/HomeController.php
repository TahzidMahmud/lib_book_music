<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Music;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard(){
        return view('admin.admindash');
    }
    public function add_book(){
        $genres=[
            "Action and adventure","Art/architecture","Alternate history","Autobiography","Anthology","Biography","Chick lit","Business/economics","Children's","Crafts/hobbies","Classic","Cookbook","Comic book","Diary","Coming-of-age","Dictionary","Crime","Encyclopedia","Drama","Guide","Fairytale","Health/fitness","Fantasy","History","Graphic novel","Home and garden","Historical fiction","Humor","Horror","Journal","Mystery","Math","Paranormal romance","Memoir","Picture book","Philosophy","Poetry","Prayer","Political thriller","Religion", "spirituality" ,"new age","Romance","Textbook","Satire","True crime","Science fiction","Review","Short story","Science","Suspense","Self help","Thriller","Sports and leisure","Western","Travel","Young adult","True crime"
        ];
        return view('book.create',compact('genres'));
    }
    public function store_book(Request $request){
        $image_fileName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image_fileName);
        $pdf_fileName = time().'.'.$request->pdf->extension();
        $request->pdf->move(public_path('pdfs'), $pdf_fileName);

        Book::create([
            'genre'=>$request->genre,
            'title'=>$request->title,
            'description'=>$request->description,
            'path'=>$pdf_fileName,
            'image'=>$image_fileName
        ]);
        return back()->with(['message'=>'Book Added To the Collection Successfully..!!','stat'=>'success']);
    }
    public function add_music(){
        return view('music.create');
    }
    public function store_music(Request $request){
// dd($request);
        $image_fileName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image_fileName);
        Music::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'thumb'=>$image_fileName,
            'link'=>$request->link
        ]);
        return back()->with(['message'=>'Music Added To the Collection Successfully..!!','stat'=>'success']);
    }
}
