<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class AdminCategoryController extends Controller
{
    public function categoryIndex()
    {
        //fetch all Model of this user
        $userId = Auth::user()->id;

        return view('admin.category');
    }

    public function StoreCategory(Request $request)
    {
        return $this->UpsertRecord($request, Category::class);
    }

    public function UpsertRecord(Request $request, $modelClass)
    {
        $input = $request->all();
        try {
            DB::beginTransaction();
            $input['user_id'] = Auth::user()->id;

            if ($request->id) {
                $record = $modelClass::find($request->id);
                if (!$record) {
                    return response()->json(['message' => 'Record not found'], 404);
                }
                $record->update($input);
                DB::commit();
                return response()->json(['message' => 'Record updated successfully'], 200);
            } else {
                $modelClass::create($input);
                DB::commit();
                return response()->json(['message' => 'Record created successfully'], 200);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
