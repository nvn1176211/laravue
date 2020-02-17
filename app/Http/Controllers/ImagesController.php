<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Constants;

class ImagesController extends Controller
{
    public function download(Request $request){
        $rUrl = $request->url;

        $type = pathinfo($rUrl, PATHINFO_EXTENSION);
        $imgContent = file_get_contents($rUrl);
        $base64Img = 'data:image/' . $type . ';base64,' . base64_encode($imgContent);
        echo($base64Img);die;
    }


}
