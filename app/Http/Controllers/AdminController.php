<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Franchise;
use App\Models\Feature;
use App\Models\ProductVariety;
use App\Models\FeaturedVariety;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        $franchises = Franchise::latest()->get();
        $features = Feature::orderBy('position')->get();
        $varieties = ProductVariety::orderBy('position')->get();
        $featuredVarieties = FeaturedVariety::orderBy('position')->get();
        return view('admin.index', compact('contacts', 'franchises', 'features', 'varieties', 'featuredVarieties'));
    }

    public function storeFeature(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'position' => 'nullable|integer|min:0',
        ]);

        Feature::create($validated);
        return redirect()->route('admin.index')->with('success', 'Feature added.');
    }

    public function updateFeature(Request $request, Feature $feature)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'position' => 'nullable|integer|min:0',
        ]);

        $feature->update($validated);
        return redirect()->route('admin.index')->with('success', 'Feature updated.');
    }

    public function deleteFeature(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('admin.index')->with('success', 'Feature deleted.');
    }

    public function storeVariety(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'position' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        ProductVariety::create($validated);
        return redirect()->route('admin.index')->with('success', 'Product variety added.');
    }

    public function updateVariety(Request $request, ProductVariety $variety)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'position' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $variety->update($validated);
        return redirect()->route('admin.index')->with('success', 'Product variety updated.');
    }

    public function deleteVariety(ProductVariety $variety)
    {
        $variety->delete();
        return redirect()->route('admin.index')->with('success', 'Product variety deleted.');
    }

    public function storeFeaturedVariety(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'description' => 'required|string',
            'position' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        FeaturedVariety::create($validated);
        return redirect()->route('admin.index')->with('success', 'Featured variety added.');
    }

    public function updateFeaturedVariety(Request $request, FeaturedVariety $featuredVariety)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'description' => 'required|string',
            'position' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $featuredVariety->update($validated);
        return redirect()->route('admin.index')->with('success', 'Featured variety updated.');
    }

    public function deleteFeaturedVariety(FeaturedVariety $featuredVariety)
    {
        $featuredVariety->delete();
        return redirect()->route('admin.index')->with('success', 'Featured variety deleted.');
    }
}
