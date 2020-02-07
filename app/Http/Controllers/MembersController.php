<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Members;

class MembersController extends Controller
{
    public function index(){
        $member = Members::all();
        return view('list_members',compact('member'));
    }
    
    public function create(){
        return view('add_member');
    }

    public function store(Request $request){
        $data = $request->all();
        Members::create($data);
        return redirect('list');
    }

    public function edit($id){
        $member = Members::find($id);
        return view('edit_member',compact('member'));
    }

    public function update(Request $request, $id){
        $data = $request->all();
        Members::create($data);
        return redirect('list');
    }

    public function destroy($id){
        $member = Members::find($id);
        $member->delete();
        return redirect('list');
    }
}
