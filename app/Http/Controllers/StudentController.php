<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Categories;
use Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Students::paginate(10);
        return view('admin.student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('admin.student.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nis' => 'required',
            'nama' => 'required',
            'categories_id' => 'required',
            'angkatan' => 'required',
            'tanggal_lahir' => 'required',
            'notelp' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);
        $student = Students::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'categories_id' => $request->categories_id,
            'angkatan' => $request->angkatan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'notelp' => $request->notelp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'users_id' => Auth::id()
        ]);
        return redirect()->back()->with('success', 'Tambah Data Alumni Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categories::all();
        $student = Students::find($id);
        return view('admin.student.edit', compact('categories', 'student'));
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
        $this->validate($request, [
            'nis' => 'required',
            'nama' => 'required',
            'categories_id' => 'required',
            'angkatan' => 'required',
            'tanggal_lahir' => 'required',
            'notelp' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);
        $student_data = [
            'nis' => $request->nis,
            'nama' => $request->nama,
            'categories_id' => $request->categories_id,
            'angkatan' => $request->angkatan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'notelp' => $request->notelp,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ];
        Students::whereId($id)->update($student_data);
        return redirect()->route('student.index')->with('success', 'Perubahan Data Berhasil');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Students::find($id);
        $student->delete();
        return redirect()->back()->with('danger', 'Hapus Data Berhasil');
    }
}
