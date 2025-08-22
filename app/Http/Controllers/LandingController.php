<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Franchise;
use App\Models\Feature;
use App\Models\ProductVariety;
use App\Models\FeaturedVariety;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $featuredVarieties = FeaturedVariety::where('is_active', true)->orderBy('position')->get();
        return view('welcome', compact('featuredVarieties'));
    }

    public function about()
    {
        $features = Feature::orderBy('position')->get();
        return view('about', compact('features'));
    }

    public function products()
    {
        $varieties = ProductVariety::where('is_active', true)->orderBy('position')->get();
        return view('products', compact('varieties'));
    }

    public function branches()
    {
        return view('branches');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        Contact::create($validated);

        // Check if it's an AJAX request
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for contacting us! We will get back to you soon.'
            ]);
        }

        // For regular form submission, redirect
        return redirect()->route('landing')->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }

    public function submitFranchise(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        $franchise = Franchise::create($validated);

        // Check if it's an AJAX request
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for your franchise application! We will get back to you soon.'
            ]);
        }

        // For regular form submission, redirect
        return redirect()->route('landing')->with('success', 'Thank you for your franchise application! We will get back to you soon.');
    }
}
