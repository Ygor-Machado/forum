<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();

        return view('admin.supports.index', compact('supports'));
    }

    public function show($id)
    {
        $support = Support::find($id);

        return view('admin.supports.show', compact('support'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(Request $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = 'a';

        $support = $support->create($data);

        return redirect()->route('supports.index');
    }

    public function edit(Support $support, $id)
    {
        if (!$support = $support->where('id', $id)->first()){
            return redirect()->back();
        }

        return view('admin.supports.edit', compact('support'));
    }

    public function update(Request $request, Support $support, $id)
    {
        if (!$support = $support->find($id)){
            return redirect()->back();
        }

        $support->update($request->only([
            'subject', 'body'
        ]));

        return redirect()->route('supports.index');
    }

}
