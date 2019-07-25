<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['pictures' => [
            ['url' => '#', 'src' => 'https://scontent-atl3-1.cdninstagram.com/vp/f33c5864bf9193baa9d841d150592766/5DE24F9B/t51.2885-15/e35/39381485_474464569719262_8419819630419247104_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com'],
            ['url' => '#', 'src' => 'https://cdn.dribbble.com/users/40032/screenshots/5815551/ship-interior-dribbble.png'],
            ['url' => '#', 'src' => 'https://cdn.dribbble.com/users/40032/screenshots/4724994/polaris-away-dribbble.png'],
            ['url' => '#', 'src' => 'https://scontent-atl3-1.cdninstagram.com/vp/f33c5864bf9193baa9d841d150592766/5DE24F9B/t51.2885-15/e35/39381485_474464569719262_8419819630419247104_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com'],
            ['url' => '#', 'src' => 'https://cdn.dribbble.com/users/40032/screenshots/5815551/ship-interior-dribbble.png'],
            ['url' => '#', 'src' => 'https://cdn.dribbble.com/users/40032/screenshots/4724994/polaris-away-dribbble.png'],
        ]];

        return view('pictures.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
