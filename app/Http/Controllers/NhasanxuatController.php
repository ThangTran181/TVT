<?php

namespace App\Http\Controllers;
use App\Models\Nhasanxuat;
use Illuminate\Http\Request;

 class NhasanxuatController extends Controller
{
    //
    public function index()
    {
       $nhasanxuats = Nhasanxuat::all();
        return view('nhasanxuats.index', compact('nhasanxuats'));
    }

    public function create()
    {
        return view('nhasanxuats.create');
    }

    public function store(Request $request)
    {
       $validated = $request->validate([
            'ten' => 'required|String|max:255',
            'logo' => 'nullable|String',
            'status' => 'required|Boolean',
        ]);
       Nhasanxuat::create($validated);

        return redirect()->route('nhasanxuats.index')->with('success', 'Tạo mới thành công');

    }

    public function destroy($id)
    {
       $nhasanxuat = Nhasanxuat::find($id);
       $nhasanxuat->delete();

        return redirect()->route('nhasanxuats.index')->with('success', 'Xóa thành công');
    }

    public function edit($id)
    {
       $nhasanxuat = Nhasanxuat::findOrFail($id);
        return view('nhasanxuats.edit', compact('nhasanxuat'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'ten' => 'required|String|max:255',
            'logo' => 'nullable|String',
            'status' => 'required|boolean',
        ]);
        Nhasanxuat::find($id)->update($validated);
        return redirect()->route('nhasanxuats.index')->with('success', 'Cập nhật thành công');
    }
}
