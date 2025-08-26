<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Franchise;
use App\Models\Feature;
use App\Models\ProductVariety;
use App\Models\FeaturedVariety;
use App\Models\FAQ;
use App\Models\ActivityLog;
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
        $faqs = FAQ::orderBy('position')->get();
        $activityLogs = ActivityLog::latest()->take(10)->get();
        
        return view('admin.index', compact('contacts', 'franchises', 'features', 'varieties', 'featuredVarieties', 'faqs', 'activityLogs'));
    }

    public function storeFeature(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'position' => 'nullable|integer|min:0',
        ]);

        $feature = Feature::create($validated);
        
        // Log the activity
        ActivityLog::create([
            'action' => 'create',
            'model_type' => 'Feature',
            'model_id' => $feature->id,
            'description' => 'Feature "' . $feature->title . '" added',
            'data' => ['title' => $feature->title]
        ]);

        return redirect()->route('admin.index', ['#features'])->with('success', 'Feature added successfully!');
    }

    public function updateFeature(Request $request, Feature $feature)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'position' => 'nullable|integer|min:0',
        ]);

        $oldTitle = $feature->title;
        $feature->update($validated);
        
        // Log the activity
        ActivityLog::create([
            'action' => 'update',
            'model_type' => 'Feature',
            'model_id' => $feature->id,
            'description' => 'Feature "' . $oldTitle . '" updated to "' . $feature->title . '"',
            'data' => ['old_title' => $oldTitle, 'new_title' => $feature->title]
        ]);

        return redirect()->route('admin.index', ['#features'])->with('success', 'Feature updated successfully!');
    }

    public function deleteFeature(Feature $feature)
    {
        $title = $feature->title;
        $feature->delete();
        
        // Log the activity
        ActivityLog::create([
            'action' => 'delete',
            'model_type' => 'Feature',
            'model_id' => null,
            'description' => 'Feature "' . $title . '" deleted',
            'data' => ['title' => $title]
        ]);

        return redirect()->route('admin.index', ['#features'])->with('success', 'Feature deleted successfully!');
    }

    public function storeVariety(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'position' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $validated['image'] = $filename;
        }

        $variety = ProductVariety::create($validated);
        
        // Log the activity
        ActivityLog::create([
            'action' => 'create',
            'model_type' => 'ProductVariety',
            'model_id' => $variety->id,
            'description' => 'Product variety "' . $variety->name . '" added',
            'data' => ['name' => $variety->name, 'image' => $variety->image]
        ]);

        return redirect()->route('admin.index', ['#products'])->with('success', 'Product variety added.');
    }

    public function updateVariety(Request $request, ProductVariety $variety)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'position' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $oldName = $variety->name;
        
        // Handle file upload if new image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $validated['image'] = $filename;
            
            // Delete old image if it exists
            if ($variety->image && file_exists(public_path('images/' . $variety->image))) {
                unlink(public_path('images/' . $variety->image));
            }
        } else {
            // Keep existing image
            unset($validated['image']);
        }

        $variety->update($validated);
        
        // Log the activity
        ActivityLog::create([
            'action' => 'update',
            'model_type' => 'ProductVariety',
            'model_id' => $variety->id,
            'description' => 'Product variety "' . $oldName . '" updated to "' . $variety->name . '"',
            'data' => ['old_name' => $oldName, 'new_name' => $variety->name]
        ]);

        return redirect()->route('admin.index', ['#products'])->with('success', 'Product variety updated.');
    }

    public function deleteVariety(ProductVariety $variety)
    {
        $name = $variety->name;
        
        // Delete the image file if it exists
        if ($variety->image && file_exists(public_path('images/' . $variety->image))) {
            unlink(public_path('images/' . $variety->image));
        }
        
        $variety->delete();
        
        // Log the activity
        ActivityLog::create([
            'action' => 'delete',
            'model_type' => 'ProductVariety',
            'model_id' => null,
            'description' => 'Product variety "' . $name . '" deleted',
            'data' => ['name' => $name]
        ]);

        return redirect()->route('admin.index', ['#products'])->with('success', 'Product variety deleted.');
    }

    public function storeFeaturedVariety(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'position' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $validated['image'] = $filename;
        }

        $variety = FeaturedVariety::create($validated);
        
        // Log the activity
        ActivityLog::create([
            'action' => 'create',
            'model_type' => 'FeaturedVariety',
            'model_id' => $variety->id,
            'description' => 'Featured variety "' . $variety->name . '" added',
            'data' => ['name' => $variety->name, 'image' => $variety->image]
        ]);

        return redirect()->route('admin.index', ['#featured'])->with('success', 'Featured variety added.');
    }

    public function updateFeaturedVariety(Request $request, FeaturedVariety $featuredVariety)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'position' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $oldName = $featuredVariety->name;
        
        // Handle file upload if new image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $validated['image'] = $filename;
            
            // Delete old image if it exists
            if ($featuredVariety->image && file_exists(public_path('images/' . $featuredVariety->image))) {
                unlink(public_path('images/' . $featuredVariety->image));
            }
        } else {
            // Keep existing image
            unset($validated['image']);
        }

        $featuredVariety->update($validated);
        
        // Log the activity
        ActivityLog::create([
            'action' => 'update',
            'model_type' => 'FeaturedVariety',
            'model_id' => $featuredVariety->id,
            'description' => 'Featured variety "' . $oldName . '" updated to "' . $featuredVariety->name . '"',
            'data' => ['old_name' => $oldName, 'new_name' => $featuredVariety->name]
        ]);

        return redirect()->route('admin.index', ['#featured'])->with('success', 'Featured variety updated.');
    }

    public function deleteFeaturedVariety(FeaturedVariety $featuredVariety)
    {
        $name = $featuredVariety->name;
        
        // Delete the image file if it exists
        if ($featuredVariety->image && file_exists(public_path('images/' . $featuredVariety->image))) {
            unlink(public_path('images/' . $featuredVariety->image));
        }
        
        $featuredVariety->delete();
        
        // Log the activity
        ActivityLog::create([
            'action' => 'delete',
            'model_type' => 'FeaturedVariety',
            'model_id' => null,
            'description' => 'Featured variety "' . $name . '" deleted',
            'data' => ['name' => $name]
        ]);

        return redirect()->route('admin.index', ['#featured'])->with('success', 'Featured variety deleted.');
    }

    public function storeFAQ(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'position' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $faq = FAQ::create($validated);
        
        // Log the activity
        ActivityLog::create([
            'action' => 'create',
            'model_type' => 'FAQ',
            'model_id' => $faq->id,
            'description' => 'FAQ "' . $faq->question . '" added',
            'data' => ['question' => $faq->question]
        ]);

        return redirect()->route('admin.index', ['#faqs'])->with('success', 'FAQ added successfully!');
    }

    public function updateFAQ(Request $request, FAQ $faq)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'position' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $oldQuestion = $faq->question;
        $faq->update($validated);
        
        // Log the activity
        ActivityLog::create([
            'action' => 'update',
            'model_type' => 'FAQ',
            'model_id' => $faq->id,
            'description' => 'FAQ "' . $oldQuestion . '" updated to "' . $faq->question . '"',
            'data' => ['old_question' => $oldQuestion, 'new_question' => $faq->question]
        ]);

        return redirect()->route('admin.index', ['#faqs'])->with('success', 'FAQ updated successfully!');
    }

    public function deleteFAQ(FAQ $faq)
    {
        $question = $faq->question;
        $faq->delete();
        
        // Log the activity
        ActivityLog::create([
            'action' => 'delete',
            'model_type' => 'FAQ',
            'model_id' => null,
            'description' => 'FAQ "' . $question . '" deleted',
            'data' => ['question' => $question]
        ]);

        return redirect()->route('admin.index', ['#faqs'])->with('success', 'FAQ deleted successfully!');
    }
}
