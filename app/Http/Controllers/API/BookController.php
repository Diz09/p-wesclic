<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Borrow;

class BookController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function search(Request $request)
    {
        $q = $request->query('q');
        return Book::where('title', 'like', "%$q%")
            ->orWhere('author', 'like', "%$q%")
            ->get();
    }

    public function show($id)
    {
        return Book::findOrFail($id);
    }

    public function borrow($id)
    {
        return Borrow::create([
            'book_id' => $id,
            'user_id' => auth()->id(),
        ]);
    }

    public function return($id)
    {
        $borrow = Borrow::where('book_id', $id)
            ->where('user_id', auth()->id())
            ->whereNull('returned_at')
            ->firstOrFail();

        $borrow->update(['returned_at' => now()]);
        return response()->json(['message' => 'Buku dikembalikan']);
    }
}
