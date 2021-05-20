<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Music;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $genres;
    public function __construct()
    {
        $this->genres=[
            "Action and adventure","Art/architecture","Alternate history","Autobiography","Anthology","Biography","Chick lit","Business/economics","Children's","Crafts/hobbies","Classic","Cookbook","Comic book","Diary","Coming-of-age","Dictionary","Crime","Encyclopedia","Drama","Guide","Fairytale","Health/fitness","Fantasy","History","Graphic novel","Home and garden","Historical fiction","Humor","Horror","Journal","Mystery","Math","Paranormal romance","Memoir","Picture book","Philosophy","Poetry","Prayer","Political thriller","Religion", "spirituality" ,"new age","Romance","Textbook","Satire","True crime","Science fiction","Review","Short story","Science","Suspense","Self help","Thriller","Sports and leisure","Western","Travel","Young adult","True crime"
        ];
        // $this->middleware('auth');
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
    public function landing(){
    return view('front-end.landing');

    }
    public function books(){
        $books=Book::all();
        return view('book.booklist',compact('books'));
    }
    public function musics(){
        $musics=Music::all();
        return view('music.musiclist',compact('musics'));
    }
    public function dashboard(){
        $book_count=Book::all()->count();
        $music_count=Music::all()->count();
        return view('admin.admindash',compact('book_count','music_count'));
    }
    public function add_book(){
        $genres=$this->genres;

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
        $link=str_replace("watch","embed",$request->link);

        Music::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'thumb'=>$image_fileName,
            'link'=>$link
        ]);
        return back()->with(['message'=>'Music Added To the Collection Successfully..!!','stat'=>'success']);
    }
    public function book_delete(Request $request){
        $book=Book::findOrFail($request->book_id);
// dd(public_path().'/pdfs'.'/'.$book->path);
        if (File::exists(public_path().'/pdfs'.'/'.$book->path)) {
            File::delete(public_path().'/pdfs'.'/'.$book->path);
            // unlink(public_path().'/pdfs'.'/'.$book->path);
        }if(File::exists(public_path().'/images'.'/'.$book->image)){
            File::delete(public_path().'/images'.'/'.$book->image);
            // unlink(public_path().'/images'.'/'.$book->image);

        }
        $book->delete();
        return back()->with(['message'=>'Deleted Successfully..!!','stat'=>'danger']);
    }
    public function music_delete(Request $request){
        $music=Music::findOrFail($request->music_id);
        if(File::exists(public_path().'/images'.'/'.$music->thumb)){
            File::delete(public_path().'/images'.'/'.$music->thumb);
            // unlink(public_path().'/images'.'/'.$book->image);
        }
        $music->delete();
        return back()->with(['message'=>'Deleted Successfully..!!','stat'=>'danger']);

    }
    public function book_edit(Book $book){
        $genres=$this->genres;
        return view('book.edit',compact('book','genres'));
    }
    public function update_book(Request $request){
        $image_fileName="";
        $book=Book::findOrFail($request->id);
        if($request->image){
            if(File::exists(public_path().'/images'.'/'.$book->image)){
                File::delete(public_path().'/images'.'/'.$book->image);
                $image_fileName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $image_fileName);
            }
            $book->update([
                'genre'=>$request->genre,
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>$image_fileName
            ]);
        }else{
            $book->update([
                'genre'=>$request->genre,
                'title'=>$request->title,
                'description'=>$request->description,
            ]);
        }
        return back()->with(['message'=>'updated successfully..!!','stat'=>'success']);

    }
    public function update_music(Request $request){

        $image_fileName="";

        $music=Music::findOrFail($request->id);
        $link=$request->link !=null?$request->link:$music->link;
        if($request->image){
            if(File::exists(public_path().'/images'.'/'.$music->thumb)){
                File::delete(public_path().'/images'.'/'.$music->thumb);
                $image_fileName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $image_fileName);
            }
            $music->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'thumb'=>$image_fileName,
            'link'=>$link
            ]);
        }else{
            $music->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'link'=>$link
            ]);
        }
        return back()->with(['message'=>'updated successfully..!!','stat'=>'success']);
    }
    public function music_edit(Music $music){
        // dd($music);
        return view('music.edit',compact('music'));
    }
}
