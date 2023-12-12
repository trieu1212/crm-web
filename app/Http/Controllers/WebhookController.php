<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class WebhookController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $response = Http::post('https://open-sg.larksuite.com/anycross/trigger/callback/MDBiMDE4MjQ2ZDkxZThmNGQ0OWMwYmQ4OWJlZWY3OTRi', $data);
        if ($response->successful()) {
            return redirect('/contact')->with('success', 'Form đã được gửi thành công!');
        } else {
            return redirect('/contact')->with('error', 'Có lỗi xảy ra khi gửi form, vui lòng thử lại!');
        }
    }
}
