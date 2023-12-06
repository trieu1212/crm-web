<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;
class WebhookController extends Controller
{
    // public function submitForm(Request $request)
    // {
    //     // Lấy dữ liệu từ biểu mẫu
    //     $data = $request->all();

    //     // Gửi dữ liệu đến webhook
    //     $response = Http::post('https://open-sg.larksuite.com/anycross/trigger/callback/MDBiMDE4MjQ2ZDkxZThmNGQ0OWMwYmQ4OWJlZWY3OTRi', $data);

    //     // Kiểm tra kết quả gửi webhook
    //     if ($response->successful()) {
    //         return redirect('/contact')->with('success', 'Biểu mẫu đã được gửi thành công!');
    //     } else {
    //         return redirect('/contact')->with('error', 'Có lỗi xảy ra khi gửi biểu mẫu!');
    //     }
    // }
    // private function getLarkSuiteConfig()
    // {
    //     return [
    //         'app_id' => 'cli_a5e588cb9038d010',
    //         'app_secret' => 'RLQbDf5i6I8C8tIHE4fAtXTwYH0DegkG',
    //         'base_app_id' => 'Puc3bois5aKZ3usuWH5lCWXKgxf',
    //         'lead_table_id' => 'tblQ4tkXjPvOlTUz',
    //         'lead_view_id' => 'vewKwIeD5M',
    //     ];
    // }
    // private function getAccessToken()
    // {
    //     $authClient = new Client([
    //         'verify' => false,
    //     ]);

    //     $authHeaders = [
    //         'Content-Type' => 'application/json',
    //     ];

    //     $authBody = [
    //         'app_id' => $this->getLarkSuiteConfig()['app_id'],
    //         'app_secret' => $this->getLarkSuiteConfig()['app_secret'],
    //     ];

    //     // dd($authBody);

    //     $authResponse = $authClient->post('https://open.larksuite.com/open-apis/auth/v3/tenant_access_token/internal', [
    //         'headers' => $authHeaders,
    //         'body' => json_encode($authBody),
    //     ]);

    //     // dd($authResponse);
    //     $authData = json_decode($authResponse->getBody(), true);
    //     // dd($authData);

    //     if (isset($authData['code']) && $authData['code'] === 0 && isset($authData['tenant_access_token'])) {
    //         return $authData['tenant_access_token'];
    //     } else {
    //         return null;
    //     }
    // }
    // public function postWithApi(Request $request)
    // {
    //     $accessToken = $this->getAccessToken();
    //     // dd($accessToken);
    //     if (!$accessToken) {
    //         return 'Failed to obtain access token';
    //     }

    //     $mainClient = new Client([
    //         'verify' => false,
    //     ]);

    //     $mainHeaders = [
    //         'Content-Type' => 'application/json',
    //         'Authorization' => 'Bearer ' . $accessToken,
    //     ];

    //     $mainBody = [
    //         'fields' => [
    //             'name' => $request->input('name'),
    //             'address' => $request->input('address'),
    //             'email' => $request->input('email'),
    //             'sdt' => $request->input('phone'),
    //             'product' => $request->input('product'),
    //             'quantity' => $request->input('quantity'),
    //         ],
    //     ];

    //     $mainRequest = $mainClient->post("http://open.larksuite.com/open-apis/bitable/v1/apps/{$this->getLarkSuiteConfig()['base_app_id']}/tables/{$this->getLarkSuiteConfig()['lead_table_id']}/records?user_id_type=user_id", [
    //         'headers' => $mainHeaders,
    //         'body' => json_encode($mainBody),
    //     ]);

    //     $responseData = json_decode($mainRequest->getBody(), true);

    //     if ($responseData['code'] === 0) {
    //         return response()->json(['success' => true]);
    //     } else {
    //         return response()->json(['success' => false]);
    //     }
    // }
    private function getLarkSuiteConfig()
    {
        return [
            'app_id' => 'cli_a5e588cb9038d010',
            'app_secret' => 'RLQbDf5i6I8C8tIHE4fAtXTwYH0DegkG',
            'base_app_id' => 'Puc3bois5aKZ3usuWH5lCWXKgxf',
            'lead_table_id' => 'tblQ4tkXjPvOlTUz',
            'lead_view_id' => 'vewKwIeD5M',
        ];
    }

    private function getAccessToken()
    {
        $authResponse = Http::withOptions(['verify' => false])
            ->post('https://open.larksuite.com/open-apis/auth/v3/tenant_access_token/internal', [
                'app_id' => $this->getLarkSuiteConfig()['app_id'],
                'app_secret' => $this->getLarkSuiteConfig()['app_secret'],
            ]);

        $authData = $authResponse->json();

        if (isset($authData['code']) && $authData['code'] === 0 && isset($authData['tenant_access_token'])) {
            return $authData['tenant_access_token'];
        } else {
            return null;
        }
    }

    public function postWithApi(Request $request)
    {
        $accessToken = $this->getAccessToken();
        dd($accessToken);
        if (!$accessToken) {
            return response()->json(['success' => false, 'message' => 'Failed to obtain access token']);
        }

        $mainResponse = Http::withOptions(['verify' => false])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $accessToken,
            ])
            ->post("http://open.larksuite.com/open-apis/bitable/v1/apps/{$this->getLarkSuiteConfig()['base_app_id']}/tables/{$this->getLarkSuiteConfig()['lead_table_id']}/records?user_id_type=user_id", [
                'fields' => [
                    'name' => $request->input('name'),
                    'address' => $request->input('address'),
                    'email' => $request->input('email'),
                    'sdt' => $request->input('phone'),
                    'product' => $request->input('product'),
                    // 'quantity' => $request->input('quantity'),
                ],
                
            ]);

        $responseData = $mainResponse->json();
        // dd($responseData);
        if ($responseData['code'] === 0) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Error posting data to Lark Base']);
        }
    }
}
