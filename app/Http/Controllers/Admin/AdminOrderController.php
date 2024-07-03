<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $category = Order::findorFail($id);
            $category->delete();
            return response([ 'status' => 'success' , 'message' => 'Deleted successfully' ]);
        } catch (\Throwable $th) {
            return response([ 'status' => 'error' , 'message' => 'Something went wrong' ]);
        }
    }
}
