<?php

namespace App\Http\Controllers;

use App\Models\Bookissue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookissueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Bookissue::all();
        return view('admin.issuebooklist',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function issuebook(Request $request, $id='')
    {
        if($id>0){
            $arr=Bookissue::where(['id'=>$id])->get();

            $result['name']=$arr['0']->name;
            $result['bookid']=$arr['0']->bookid;
            $result['status']=$arr['0']->status;
            $result['id']=$arr['0']->id;
        }
        else{
            $result['name']='';
            $result['bookid']='';
            $result['status']='';
            $result['id']='';
        }
        /*$result['name']=DB::table('members')->where(['status'=>1])->get();*/
        /*$result['book']=DB::table('books')->where(['status'=>1])->get();*/

        
        return view('admin.issuebook',$result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createissue(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'bookid'=>'required',
            'issuedate'=>'required',
            'status'=>'required',
        ]);
        if($request->post('id')>0){
            $issue=Bookissue::find($request->post('id'));
        }
        else{
            $issue= new Bookissue;
        }
        $issue->name=$request->post('name');
        $issue->bookid=$request->post('bookid');
        $issue->issuedate=$request->post('issuedate');
        $issue->status=$request->post('status');
        $save=$issue->save();

        
        $request->session()->flash('message','Successfully Added');

        return redirect('admin/issue/issuebooklist');
    }

    public function delete(Request $request, $id)
    {
        $model=Bookissue::find($id);
        $model->delete();
        $request->session()->flash('message','Successfully Delete');

        return redirect('admin/issue/issuebooklist');
    }
}
