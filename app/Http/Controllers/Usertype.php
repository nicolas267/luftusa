<?php

namespace App\Http\Controllers;

use App\models\usertypeModel;
use Illuminate\Http\Request;

class Usertype extends Controller
{
    public function index()
    {
        $userstype = usertypeModel::all();
        return view('userstype/index')->with('userstype', $userstype);
    }

    public function create()
    {
        return view('userstype/create');
    }

    public function store()
    {
        $data = Request()->all();

        usertypeModel::create([

            'user_type' => $data['usertype'],
        ]);

        return redirect('/userstype');
    }

    public function edit(usertypeModel $data)
    {
        return view('userstype/edit', compact('data'));
    }

    public function upgrade()
    {
        $data = Request()->all();

        usertypeModel::where('user_types_id', $data['usertypeid'])
            ->update([
                'user_type' => $data['usertype'],
            ]);
        return redirect('/userstype');
    }

    public function destroy($usertypeid)
    {
        usertypeModel::where('user_types_id', $usertypeid)->delete();

        return redirect('userstype/');

    }
}
