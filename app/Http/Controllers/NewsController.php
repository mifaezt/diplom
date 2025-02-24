<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news() {
        $news = News::all();
        return view('news', compact('news'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
 
        News::create($request->all());
 
        return redirect()->route('adminPage')->with('success', 'Новость добавлена успешно');
    }
 
    public function index()
    {
        $news = News::all();
        return view('adminPage', compact('news'));
    }

    // для редактирования
    public function edit($id)
{
    $news = News::findOrFail($id);
    return view('edit', compact('news'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    $news = News::findOrFail($id);
    $news->update($request->all());

    return redirect()->route('news')->with('success', 'Новость обновлена успешно');
}

public function destroy($id)
{
    $news = News::findOrFail($id);
    $news->delete();
    
    return redirect()->route('news')->with('success', 'Новость удалена успешно');
}

    
}
