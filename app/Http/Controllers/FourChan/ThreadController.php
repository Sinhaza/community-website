<?php

namespace App\Http\Controllers\FourChan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Http;


class ThreadController extends Controller
{

    public function getCatalog(string $board)
    {
        header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
        $options = array('http' => array('user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36'));
        $context = stream_context_create($options);
        $json = json_decode(file_get_contents('http://a.4cdn.org/' . $board . '/catalog.json', false, $context), true);

        return $json;
    }

    public function getThreadLink(string $subject, string $board)
    {

        foreach ($this->getCatalog($board) as $thread) {

            $arr = $thread['threads'];
            $thread = null;
            foreach ($arr as $obj) {
                $data = (object) $obj;

                if (str_contains($data->sub, $subject)) {
                    $number = $data->no;

                    $thread = 'https://a.4cdn.org/' . $board . '/thread/' . $number . '.json';

                    return $thread;
                }
            }
        }
        return null;
    }

    public function getThreadContent(string $subject, string $board)
    {
        $options = array('http' => array('user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36'));
        $context = stream_context_create($options);
        $json = json_decode(file_get_contents($this->getThreadLink($subject, $board), false, $context), true);
        return $json;
    }

    public function getVrgThread()
    {


        return Response::json([
            'thread' => $this->getThreadContent('/vrg/', 'vg')
        ]);
    }

}