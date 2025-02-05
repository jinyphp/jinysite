<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YourModel; // 검색할 모델을 여기에 지정하세요

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query');
        $results = YourModel::where('name', 'LIKE', "%{$query}%")
                            ->orWhere('description', 'LIKE', "%{$query}%")
                            ->get();
        return response()->json($results);
    }
}
