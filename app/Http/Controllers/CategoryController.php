<?php
// testGit4
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\SaveCategoryRequest;



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

        $cates->load('products');

        return view('cate.index', ['cates' => $cates,
                                    'keyword' => $request->keyword,
                                ]);
    }

    public function addForm()
    {
        return view('cate.add-form');
    }

    public function saveAdd(SaveCategoryRequest $request){
       
    $model = new Category();
    $model->name = $request->name;
    $model->detail = $request->detail;
    $model->save();

    return redirect(route('cate.index'));     
    }

    public function remove ($id) {
        Category::destroy($id);
        return redirect(route('cate.index'));
    }

    public function editForm($id)
    {
        $model = Category::find($id);
        if(!$model) return redirect(route('cate.index'));

        return view('cate.edit-form', ['model'=>$model]);
    }
    
    public function saveEdit($id, SaveCategoryRequest $request)
    {
        $model = Category::find($id);
        $model->name = $request->name;
        $model->detail = $request->detail;
        $model->save();

        return redirect(route('cate.index'));
    }
}
