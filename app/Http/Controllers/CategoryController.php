<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * showCategory
     *
     * @return void
     */
    public function showCategory()
    {
        return view('categories.create');
    }
    public function saveCategory(Request $request)
    {
        $request->validate([
            'name' => 'required'

        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();

        flashy()->success('La catégorie a été inserée avec succès');
        return back()->with('success', 'Votre Catégorie a été enregistrée');
    }
    /**
     *  show allCategories
     *
     * @return void
     */
    public function allCategories()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    /**
     * show Edit Category
     *
     * @return void
     */
    public function showEditCategory($id)
    {
        $category = Category::findOrFail(decrypt($id));
        if ($category) {
            return view('categories.edit', compact('category'));
        } else {
            flashy()->error('La catégorie est introuvable');
            return back();
        }
    }
    public function saveEditCategory(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'

        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        flashy()->success('La catégorie a été modifiée avec succès');
        return redirect()->route('all-categories');
    }
    public function deleteCategory($id)
    {
        if (Category::destroy($id)) {
            flashy()->success('The category is deleted');
        } else {
            flashy()->error('The categorie is not deleted');
        }
        return back();
    }
}
