<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function __costruct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $categories = Category::with('articles')->orderBy('created_at', 'DESC')->paginate(10);
        return view('backend.category.list', compact('categories'));
    }

    public function getAdd()
    {
        return view('backend.category.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ], [
            'name.required' => "Specificare il nome",
            'description.required' => "Specificare la descrizione"
        ]);

        $category = new Category;

        $category->name = $request->input('name');
        $category->slug = Str::slug($category->name);
        $category->description = $request->input('description');

        $category->save();

        return redirect('backend/categories')->with('success_message', 'Categoria aggiunta correttamente.');
    }

    public function getEdit($categoryId)
    {
        $category = Category::find($categoryId);
        return view('backend.category.edit', compact('category'));
    }

    public function postEdit(Request $request, $categoryId)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ], [
            'name.required' => "Specificare il nome",
            'description.required' => "Specificare la descrizione"
        ]);

        $category = Category::find($categoryId);

        $category->name = $request->input('name');
        $category->slug = Str::slug($category->name);
        $category->description = $request->input('description');

        $category->save();

        return redirect('backend/categories/edit' . $categoryId)->with('success_message', 'Categoria modificata correttamente.');
    }

    public function getDelete($categoryId)
    {
        Category::find($categoryId)->delete();
        return redirect('backend/categories')->with('success_message', 'Categoria cancellata correttamente.');
    }
}
