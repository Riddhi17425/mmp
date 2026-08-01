<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Review::orderBy('sort_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->where('is_delete', '0')
            ->paginate(15);

        return view('admin.review.reviewlisting', compact('data'));
    }

    public function create()
    {
        return view('admin.review.addreview');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'rating'        => 'required|integer|min:1|max:5',
            'review_text'   => 'required|string',
            'image'         => 'nullable|image|max:2048',
        ]);

        $payload = [
            'customer_name' => $request->customer_name,
            'rating'        => $request->rating,
            'review_text'   => $request->review_text,
            'sort_order'    => $request->sort_order ?? 0,
            'status'        => $request->status,
            'is_delete'     => 0,
        ];

        if ($request->hasFile('image')) {
            $image     = $request->file('image');
            $imageName = 'review_' . time() . '.' . $image->extension();
            $image->move(public_path('reviews'), $imageName);
            $payload['image'] = $imageName;
        }

        DB::table('reviews')->insert($payload);

        return redirect('admin/review')->with('success', 'Review has been added successfully!');
    }

    public function edit($id)
    {
        $data = Review::where('id', $id)->first();
        return view('admin.review.editreview', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'rating'        => 'required|integer|min:1|max:5',
            'review_text'   => 'required|string',
            'image'         => 'nullable|image|max:2048',
        ]);

        $payload = [
            'customer_name' => $request->customer_name,
            'rating'        => $request->rating,
            'review_text'   => $request->review_text,
            'sort_order'    => $request->sort_order ?? 0,
            'status'        => $request->status,
        ];

        if ($request->hasFile('image')) {
            $image     = $request->file('image');
            $imageName = 'review_' . time() . '.' . $image->extension();
            $image->move(public_path('reviews'), $imageName);
            $payload['image'] = $imageName;
        }

        DB::table('reviews')->where('id', $request->id)->update($payload);

        return redirect('admin/review')->with('success', 'Review has been updated successfully!');
    }

    public function destroy($id)
    {
        $review            = Review::find($id);
        $review->is_delete = '1';
        $review->update();

        return redirect()->back()->with('success', 'Review has been deleted successfully!');
    }
}
