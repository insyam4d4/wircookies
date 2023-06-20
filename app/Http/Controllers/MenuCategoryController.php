<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use Illuminate\Http\Request;
use App\Traits\Media;
use DataTables;
use Alert;

class MenuCategoryController extends Controller
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
            $data = MenuCategory::orderBy('id', 'DESC')->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('is_active', function ($row) {
                    return $row->is_active ? 'Aktif' : 'Tidak Aktif';
                })->addColumn('action', function ($row) {
                    $key = $row->id;
                    $show = false;
                    $edit = true;
                    $delete = true;
                    $routePath = 'console.menu-category';

                    return view('layouts.partials.datatables-action', compact('row', 'key', 'show', 'edit', 'delete', 'routePath'));
                })->rawColumns(['action'])
                ->make(true);
        }

        return view('menu-category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu-category.create');
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
            'name' => 'required|string'
        ]);

        MenuCategory::create($request->all());

        Alert::success('Sukses!', 'Data berhasil disimpan');
        return redirect()->route('console.menu-category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MenuCategory $menuCategory)
    {
        $createdDates = $menuCategory->products()->selectRaw("DATE_FORMAT(created_at, '%Y-%m-%d %H') AS created_date")->groupByRaw("created_date")->orderBy('created_at', 'desc')->get();

        return view('menu-category.show', compact('menuCategory', 'createdDates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuCategory $menuCategory)
    {
        return view('menu-category.edit', compact('menuCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuCategory $menuCategory)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $request['is_active'] = $request->is_active ?? 0;

        $menuCategory->update($request->all());

        Alert::success('Sukses!', 'Data berhasil disimpan');
        return redirect()->route('console.menu-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuCategory $menuCategory)
    {
        try {
            $menuCategory->delete();
        } catch (Exception $e) {
            return $this->ajaxError($e->getMessage());
        }

        return $this->ajaxSuccess('Data berhasil dihapus!');
    }
}
