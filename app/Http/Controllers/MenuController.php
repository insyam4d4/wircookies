<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Traits\Media;
use DataTables;
use Alert;

class MenuController extends Controller
{
    use Media;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Menu::orderBy('id', 'DESC')->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('menu_category_name', function ($row) {
                    return $row->menuCategory->name;
                })->editColumn('price', function ($row) {
                    return currencyFormat($row->price, 'idr');
                })->editColumn('is_favorite', function ($row) {
                    return $row->is_favorite ? 'Ya' : 'Tidak';
                })->editColumn('is_active', function ($row) {
                    return $row->is_active ? 'Aktif' : 'Tidak Aktif';
                })->addColumn('action', function ($row) {
                    $key = $row->id;
                    $show = true;
                    $edit = true;
                    $delete = true;
                    $routePath = 'console.menu';

                    return view('layouts.partials.datatables-action', compact('row', 'key', 'show', 'edit', 'delete', 'routePath'));
                })->rawColumns(['action'])
                ->make(true);
        }

        return view('menu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menuCategories = MenuCategory::all();

        return view('menu.create', compact('menuCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'menu_category_id' => 'required|integer|exists:menu_categories,id',
            'name' => 'required|string',
            'description' => 'string',
            'price' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:10240',
        ]);

        $request['code'] = generateCode('M', Menu::withTrashed()->latest('id')->first()?->id, 2);
        $request['is_favorite'] = $request->is_favorite ?? 0;

        if ($file = $request->file('image')) {
            $fileData = $this->uploadFile($file, 'menu/');
            $request['image_url'] = \App::make('url')->to('/') . '/' . $fileData['filePath'];
        }

        Menu::create($request->all());

        Alert::success('Sukses!', 'Data berhasil disimpan');
        return redirect()->route('console.menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        $createdDates = $menu->products()->selectRaw("DATE_FORMAT(created_at, '%Y-%m-%d %H') AS created_date")->groupByRaw("created_date")->orderBy('created_at', 'desc')->get();

        return view('menu.show', compact('Menu', 'createdDates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $menuCategories = MenuCategory::all();

        return view('menu.edit', compact('menu', 'menuCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'menu_category_id' => 'required|integer|exists:menu_categories,id',
            'name' => 'required|string',
            'description' => 'string',
            'price' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:10240',
        ]);

        $request['is_favorite'] = $request->is_favorite ?? 0;
        $request['is_active'] = $request->is_active ?? 0;

        if ($file = $request->file('image')) {
            $fileData = $this->updateFile($menu->image, $file, 'menu/');
            $request['image_url'] = \App::make('url')->to('/') . '/' . $fileData['filePath'];
        }

        $menu->update($request->all());
        Alert::success('Sukses!', 'Data berhasil disimpan');
        return redirect()->route('console.menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        try {
            $this->removeFile($menu->image_url);
            $menu->delete();
        } catch (Exception $e) {
            return $this->ajaxError($e->getMessage());
        }

        return $this->ajaxSuccess('Data berhasil dihapus!');
    }
}
