<?php
/* 1-home 2-queue 3-contact 4-gallery 5-defaultSite*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PhotoController extends Controller
{
    public $photoDictionary = array(
        111 => "div1-light",
        118 => "div1-dark",
        121 => "div2-light",
        128 => "div2-dark",
        131 => "div3-light",
        138 => "div3-dark",
        141 => "div4-light",
        148 => "div4-dark",
        151 => "div5-light",
        158 => "div5-dark",
        161 => "div6-light",
        168 => "div6-dark",
        171 => "div7-light",
        178 => "div7-dark",
        20 => "camera_off",
        21 => "camera_off_SU",
        400 => "1",
        401 => "2",
        402 => "3",
        403 => "4",
        404 => "5",
        405 => "6",
        406 => "7",
        407 => "8",
        408 => "9",
        409 => "10",
        410 => "11",
        50 => "favicon",
        511 => "logo-light",
        518 => "logo-dark",
        521 => "language-light",
        528 => "language-dark",
        531 => "theme-light",
        538 => "theme-dark",
    );
    private function getString(Request $request)
    {
        $theme = $request->cookie('theme');
        if ($theme == 1) {
            return 'white';
        } else if ($theme == 2) {
            return 'dark';
        }
    }
    //TODO
    public function show($id, Request $request)
    {
        $theme = $this->getString($request);
        //return $this->photoDictionary[$id];

        if ($id >= 111 && $id <= 178) {
            return response()->file(resource_path("img/divs/" . $this->photoDictionary[$id] . ".jpg"));
        }
        if ($id >= 20 && $id <= 21) {
            return response()->file(resource_path("img/" . $this->photoDictionary[$id] . ".png"));
        }
        if ($id >= 400 && $id <= 410) {
            return response()->file(resource_path("img/gallery/" . $this->photoDictionary[$id] . ".jpg"));
        }
        if ($id >= 50 && $id <= 50) {
            return response()->file(resource_path("img/" . $this->photoDictionary[$id] . ".ico"));
        }
        if ($id >= 511 && $id <= 538) {
            return response()->file(resource_path("img/" . $this->photoDictionary[$id] . ".png"));
        }
        abort(404);
    }
}
