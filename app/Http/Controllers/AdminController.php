<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use App\Comment;
use Carbon\Carbon; // Thêm Carbon để xử lý ngày tháng

class AdminController extends Controller
{
    public function index()
    {
        // Lấy 10 bình luận mới nhất
        $comment = Comment::latest()->take(10)->get();
        
        // Lấy 10 bài viết mới nhất
        $tintuc = TinTuc::latest()->take(10)->get();
        
        // Lấy ngày trong tuần
        $dayOfWeek = Carbon::now()->format('l'); // 'l' sẽ trả về ngày trong tuần như: Monday, Tuesday, ...
        
        // Trả về view và truyền dữ liệu
        return view('admin.home', [
            'comment' => $comment,
            'tintuc' => $tintuc,
            'dayOfWeek' => $dayOfWeek
        ]);
    }
}
