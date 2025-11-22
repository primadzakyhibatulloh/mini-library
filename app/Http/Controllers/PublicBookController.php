<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicBookController extends Controller
{
    public function index(Request $request)
    {
        // 1. Ambil semua kategori untuk dropdown filter
        $categories = Category::all();

        // 2. Query Buku
        $books = Book::query()
            ->with('category') // Eager load relasi kategori agar performa ringan
            
            // Logika Pencarian (Judul ATAU Penulis)
            ->when($request->search, function ($query) use ($request) {
                $query->where(function($q) use ($request) {
                    $q->where('title', 'like', '%' . $request->search . '%')
                      ->orWhere('author', 'like', '%' . $request->search . '%');
                });
            })
            
            // Logika Filter Kategori
            ->when($request->category_id, function ($query) use ($request) {
                $query->where('category_id', $request->category_id);
            })
            
            ->latest() // Urutkan dari yang terbaru
            ->paginate(10) // Batasi 10 buku per halaman
            ->withQueryString(); // Agar parameter search tidak hilang saat klik halaman 2

        return view('welcome', compact('books', 'categories'));
    }
}