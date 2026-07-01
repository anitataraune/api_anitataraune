<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //GET / api/categories
    public function index()
    {
        $categories = Category::all();
        return response()->json([
            'success' => true,
            'message' => 'Lista de categorias',
            'data' => $categories

        ], 200);

    }
    // POST / api/categories
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|string',
        ]);

        $category = Category::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Categoria creada correctamente',
            'data' => $category
        ], 201);
    }
    // GET / api/categories/{id}
    public function show(string $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Categoria no encontrada',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Categoria encontrada',
            'data' => $category
        ], 200);
    }
    // PUT / api/categories/{id}
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Categoria no encontrada',
            ], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|string',
        ]);

        $category->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Categoria actualizada correctamente',
            'data' => $category
        ], 200);

    }
    // DELETE / api/categories/{id}
    public function destroy(string $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Categoria no encontrada',
            ], 404);
        }

        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Categoria eliminada correctamente',
        ], 200);
        
    }
}
