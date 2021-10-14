<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $result['data']=Book::all();
        return view('admin.booklist',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addbook(Request $request, $id='')
    {
        if($id>0){
            $arr=Book::where(['id'=>$id])->get();

            $result['bookid']=$arr['0']->bookid;
            $result['bookname']=$arr['0']->bookname;
            $result['authorname']=$arr['0']->authorname;
            $result['id']=$arr['0']->id;
        }
        else{
            $result['bookid']='';
            $result['bookname']='';
            $result['authorname']='';
            $result['id']='';
        }
        return view('admin.addbook',$result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function createbook(Request $request)
    {
        $request->validate([
            'bookname'=>'required',
            'authorname'=>'required',
            'bookid'=>'required|unique:books,bookid,'.$request->post('id'),
        ]);

        if($request->post('id')>0){
            $book=Book::find($request->post('id'));
            $request->session()->flash('message','Successfully Updated');
        }
        else{
            $book= new Book;
            $request->session()->flash('message','Successfully Added');
        }
        $book->bookid=$request->post('bookid');
        $book->bookname=$request->post('bookname');
        $book->authorname=$request->post('authorname');
        
        $save=$book->save();

        

        return redirect('admin/book/booklist');
    }
    public function delete(Request $request, $id)
    {
        $model=Book::find($id);
        $model->delete();
        $request->session()->flash('message','Successfully Delete');
        return redirect('admin/book/booklist');
    }
}
