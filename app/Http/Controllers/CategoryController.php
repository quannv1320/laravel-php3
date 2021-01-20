<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request) {
        //search
        if($request->keyword){
            $cates = Category::where(
                    'name', 'like', "%".$request->keyword."%"
                )->paginate(10);
            $cates->withPath('?keyword=' . $request->keyword);
        //endSearch
        }else{
        //in ra màn hình
            $cates = Category::paginate(10);
        }

        return view('cate.index', ['cates' => $cates,
                                    'keyword' => $request->keyword,
                                ]);
    }

    public function remove ($id) {
        Category::destroy($id);
        return redirect(route('cate.index'));
    }
}
