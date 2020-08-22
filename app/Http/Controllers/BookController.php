<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Category;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::all();
        // dd($items);

        return view('backend.books.index',
        compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors=Author::all();
        // to retrieve data from subcategory
        $categories=Category::all();
        return view('backend.books.create',compact('authors','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codeno'=>'required|min:4',
            'name'=>'required',
            'photo'=>'required',
            'noc'=>'required',
            'edition'=>'required',
            'description'=>'required',
            'author'=>'required',
            'category'=>'required'


        ]);
        //if include file,upload
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/bookimg'),$imageName);
        $myfile='backend/bookimg/'.$imageName;
        //data insert
        $book=new Book;
         // $item->table-column=$request->form input type name;
        $book->codeno=$request->codeno;
        $book->name=$request->name;
        $book->photo=$myfile;
        $book->noc=$request->noc;
        $book->edition=$request->edition;
        $book->description=$request->description;
        $book->author_id=$request->author;
        $book->category_id=$request->category;
        $book->save();
        //redirect
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        // dd($book);
        return view('backend.books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $authors=Author::all();
        // to retrieve data from subcategory
        $categories=Category::all();
        $book =Book::find($id);
        return view('backend.books.edit',compact('authors','categories','book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'codeno'=>'required|min:4',
            'name'=>'required',
            'photo'=>'sometimes',
            'noc'=>'required',
            'edition'=>'required',
            'description'=>'required',
            'author'=>'required',
            'category'=>'required'


        ]);
        //if include file,upload
        if($request->hasFile('photo')){



         $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/bookimg'),$imageName);
        $myfile='backend/bookimg/'.$imageName;
        unlink($request->oldphoto);
    }
        else{
            $myfile=$request->oldphoto;
        }
        //data upload
        $book=Book::find($id);
         // $item->table-column=$request->form input type name;
        $book->codeno=$request->codeno;
        $book->name=$request->name;
        $book->photo=$myfile;
        $book->noc=$request->noc;
        $book->edition=$request->edition;
        $book->description=$request->description;
        $book->author_id=$request->author;
        $book->category_id=$request->category;
        $book->save();
        //redirect
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Book::find($id);
        $book->delete();
         unlink($book->photo);
        // import swal from 'sweetalert';
        //redirect
        return redirect()->route('books.index');
        
    }
}
