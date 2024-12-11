<?php

namespace App\Http\Controllers\Tierlist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Http;

class TierlistController extends Controller
{
    public function getTierlistUsers()
    {
        $options = array('http' => array('user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36'));
        $context = stream_context_create($options);
        $json = json_decode(file_get_contents('https://vrg-tierlist.misakanet.page/api/users', false, $context), true);

        return Response::json([
            'users' => $json
        ]);
    }
}
