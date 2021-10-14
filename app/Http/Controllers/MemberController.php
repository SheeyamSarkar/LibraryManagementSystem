<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=member::all();
        return view('admin.memberlist',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addmember(Request $request, $id='')
    {
        if($id>0){
            $arr=member::where(['id'=>$id])->get();

            $result['name']=$arr['0']->name;
            $result['email']=$arr['0']->email;
            $result['phone']=$arr['0']->phone;
            $result['address']=$arr['0']->address;
            $result['id']=$arr['0']->id;
        }
        else{
            $result['name']='';
            $result['email']='';
            $result['phone']='';
            $result['address']='';
            $result['id']='';
        }
        return view('admin.addmember',$result);
    }

    public function createmember(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required|unique:members,phone,'.$request->post('id'),
            'address'=>'required',
        ]);
        if($request->post('id')>0){
            $member=member::find($request->post('id'));
        }
        else{
            $member= new member;
        }
        $member->name=$request->post('name');
        $member->email=$request->post('email');
        $member->phone=$request->post('phone');
        $member->address=$request->post('address');
        $save=$member->save();

        
        $request->session()->flash('message','Successfully Added');

        return redirect('admin/member/memberlist');
    }

    public function delete(Request $request, $id)
    {
        $model=member::find($id);
        $model->delete();
        $request->session()->flash('message','Successfully Delete');

        return redirect('admin/member/memberlist');
    }
    
    
}
