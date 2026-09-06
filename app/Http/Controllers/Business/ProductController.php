<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Auth::user()->business->products()->with('category')->latest()->paginate(15);

        return view('business.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('business.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'description' => 'nullable|string',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'preparation_time' => 'required|integer|min:1',
            'image' => 'nullable|image|max:2048',
        ]);

        $business = Auth::user()->business;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $business->products()->create($data);

        return redirect()->route('business.products.index')->with('success', 'غذا/شیرینی با موفقیت اضافه شد.');
    }

    public function edit(Product $product)
    {
        $this->authorizeOwnership($product);
        $categories = Category::all();

        return view('business.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $this->authorizeOwnership($product);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'description' => 'nullable|string',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'preparation_time' => 'required|integer|min:1',
            'is_available' => 'nullable|boolean',
            'image' => 'nullable|image|max:2048',
        ]);

        $data['is_available'] = $request->boolean('is_available');

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('business.products.index')->with('success', 'محصول بروزرسانی شد.');
    }

    public function destroy(Product $product)
    {
        $this->authorizeOwnership($product);
        $product->delete();

        return back()->with('success', 'محصول حذف شد.');
    }

    protected function authorizeOwnership(Product $product): void
    {
        if ($product->business_id !== Auth::user()->business->id) {
            abort(403);
        }
    }
}
