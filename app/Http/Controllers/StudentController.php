<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Pagination\Paginator;
use DB;
use GuzzleHttp\Client;

      
class StudentController extends Controller
{
    function show(){
        $sort = 'ASC';
        $data = Student::paginate(5);
        return view('list',compact('data','sort'));
    }

    function delete($sid){
        $data =Student::find($sid);
        $data->delete();
        return redirect('');
    }

    function showData($sid){
        $data = Student::find($sid);
        return view('edit',['data'=>$data]);
    }

    function update(Request $req){
        $data = Student::find($req->sid);
        $data ->fname=$req->fname;
        $data ->lname=$req->lname;
        $data ->birthplace=$req->birthplace;
        $data ->birthDate=$req->birthDate;
        $data->save();
        return redirect('');
    }

    function insert(Request $request){
        Student::create([
            'sid'=>$request->sid,
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'birthplace'=>$request->birthplace,
            'birthDate'=>$request->birthDate,
        ]);
        return redirect('')->with('success','Data inserted successfully!');
    } 


    public function orderBy($sort){
        $sort = $sort=="ASC" ? "DESC" : "ASC";
        $data = Student::orderby($_GET['order'],$sort)->paginate(5)->withQueryString();
        return view('list',compact('data','sort'));
     }

    public function search(Request $request){

        $sort = 'ASC';
        $sid=$request->get('sid_search');
        $fname=$request->get('fname_search');
        $lname=$request->get('lname_search');
        $birthplace=$request->get('birthplace_search');
        $birthDate=$request->get('birthDate_search');

        $data = Student::where('sid', 'LIKE', $sid.'%')->where('fname', 'LIKE', $fname.'%')->
        where('lname', 'LIKE', $lname.'%')->where('birthplace', 'LIKE', $birthplace.'%')->where('birthDate', 'LIKE', $birthDate.'%')->paginate(5)->withQueryString();
        return view('list', compact('data'));
    }

}
