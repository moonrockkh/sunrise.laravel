<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
    public function save(Request $r)
    {
        $r->validate([
            'name' => 'required|min:3'
        ],[
            'name.required' =>'ចាំបាច់ត្រូវតែបញ្ចូលឈ្មោះ!',
            'name.min' => 'ឈ្មោះរបស់អ្នកមិនអាចខ្លីពេកទេ!'
        ]);
    }
    // update
    public function update(Request $r)
    {
        $id = my_decrypt($r->id);
        $data = array(
            'name' => my_encrypt($r->name),
            'email' => my_encrypt($r->email)
        );
        DB::table('users')
            ->where("id", $id)
            ->update($data);
        return redirect('user');
    }
}
