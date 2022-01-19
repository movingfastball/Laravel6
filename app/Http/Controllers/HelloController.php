<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

    public function index(Request $request, Response $response) {
        $html = <<<EOF
        <html>
        <head>
        <title>Hello</title>
        <style>
        body {font-size:16pt; color:#999; }
        h1 { font-size:30pt; text-align:right;
            color:#eee;
            margin:-15px 0px 0px 0px; }
        </style>
        </head>
        <body>
        <h1>Single Action</h1>
        <p>これはシングルアクションコントローラーのアクションです。</p>
        <h3>Request</h3>
        <pre>{$request}</pre>
        <h3>Response</h3>
        <pre>{$response}</pre>
        </body>
        </html>
        EOF;

        $response->setContent($html);
        return $response;
    }
}