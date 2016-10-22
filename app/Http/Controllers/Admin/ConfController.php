<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Conf;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ConfController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $conf = Conf::paginate(15);

        return view('admin.conf.index', compact('conf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('admin.conf.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        Conf::create($request->all());

        Session::flash('flash_message', 'Conf added!');

        return redirect('admin/conf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $conf = Conf::findOrFail($id);

        return view('admin.conf.show', compact('conf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $conf = Conf::findOrFail($id);

        return view('admin.conf.edit', compact('conf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        
        $conf = Conf::findOrFail($id);
        $conf->update($request->all());

        Session::flash('flash_message', 'Conf updated!');

        return redirect('admin/conf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        Conf::destroy($id);

        Session::flash('flash_message', 'Conf deleted!');

        return redirect('admin/conf');
    }
}
