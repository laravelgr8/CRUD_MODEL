<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;//model load
class User extends Controller
{
    //for dispaly record
    function show()
    {
    	$data=record::all();
    	return view('home',["data"=>$data]);
    }

    //for insert
    function signup(Request $req)
    {
    	$record=new Record;
    	$record->name=$req->input('name');
    	$record->email=$req->input('email');
    	$record->password=$req->input('password');
    	if($req->hasfile('pic'))
    	{
    		$file=$req->file('pic');
    		$extenson=$file->getClientOriginalExtension();
    		$filename=time().'.'.$extenson;
    		$file->move('img/',$filename);
    		$record->pic=$filename;
    	}
    	else
    	{
    		return $req;
    		$record->pic='';
    	}
    	$record->save();
    	return redirect('home');
    }


    //for edit
    function edit($id)
    {
    	$data=record::find($id);
    	return view('edit',["data"=>$data]);
    }

    //for update
    function update(Request $req)
    {
    	$data=record::find($req->id);
    	$data->name=$req->name;
    	$data->email=$req->email;
    	$data->save();
    	return redirect('home');
    }
}
