<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\Http\Requests\StorePromotionRequest;
use App\Http\Requests\UpdatePromotionRequest;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = "admin.promotions.";

    public function index()
    {   
        $data = Promotion::query()->latest('id')->get();
        return view(self::PATH_VIEW.__FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW.__FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePromotionRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'discount_amount' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        Promotion::query()->create($request->all());
        return redirect()->route('admin.promotions.index')->with('success', 'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promotion $promotion)
    {
        return view(self::PATH_VIEW.__FUNCTION__,compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePromotionRequest $request, Promotion $promotion)
    {
        $request->validate([
            'name' => 'required',
            'discount_amount' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
        $promotion->update($request->all());
        return redirect()->route('admin.promotions.index')->with('success', 'Cập nhật thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return back()->with('success', 'Xóa thành công');
    }
}
