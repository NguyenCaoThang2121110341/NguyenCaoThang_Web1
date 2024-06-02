<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMenuRequest;

class MenuController extends Controller
{
    public function index()
    {
        $list = Menu::where('menu.status','!=',0)
        ->select('menu.id','menu.name','menu.link','menu.type')
        ->orderBy('menu.created_at','desc')
        ->get();
        $htmlsortorder = "";
        $htmlparentid = "";
        $htmlposition = "";
        foreach ($list as $item){
            $htmlsortorder .= "<option value='" . ($item->sort_order+1) . "'>Sau " . $item->name . "</option>";
            $htmlparentid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            $htmlposition .= "<option value='" . ($item->position+1) . "'>Sau " . $item->name . "</option>";
        }
        return view("backend.menu.index",compact("list","htmlsortorder","htmlparentid","htmlposition"));   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->link = $request->link;
        // $menu->sort_order =$request->sort_order;
        // $menu->parent_id =$request->parent_id;
        $menu->type =$request->type;
        // $menu->position =$request->position;
        $menu->created_at =date('Y-m-d H:i:s');
        $menu->created_by =Auth::id()??1; //Cái này là nếu có id của người tạo thì nó lấy id còn không có thì để mặc định là 1
        $menu->updated_by =Auth::id()??1;
        $menu->status = $request->status;
        $menu->save();
        return redirect()->route('admin.menu.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
