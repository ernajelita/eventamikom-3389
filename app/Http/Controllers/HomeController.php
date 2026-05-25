<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Partner;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Event terbaru
        $events = Event::with('category')
            ->where('date', '>=', now())
            ->latest()
            ->take(6)
            ->get();

        // Semua kategori
        $categories = Category::all();

        // Partner aktif (8 terbaru)
        $partners = Partner::where('is_active', true)
            ->latest()
            ->take(8)
            ->get();

        return view('welcome', compact('events', 'categories', 'partners'));
    }
}