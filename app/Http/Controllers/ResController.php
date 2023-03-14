<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResController extends Controller
{
    public function sendIt($id)
    {
        switch ($id) {
            case 0:
                return response()->file(resource_path("js/scripts.js"));
                break;
            case 1:
                return response()->file(resource_path("css/style.css"));
                break;
            default:
                abort(404);
                break;
        }
    }
}
