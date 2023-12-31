<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListDisplays;
use App\User;

class DisplayController extends Controller
{
    public function detail(int $displayId)
    // public function detail(ListDisplays, $listDisplays)
    {
        // URL
        $prevurl = url()->previous();
        // Load Display Infomation.
        $data = new ListDisplays;
        $data = $data->find($displayId);
        $display_imagefile = $data['image'];

        // Load User Infomation.
        $user = new User;
        $user = $user->find($data['user_id']);
        $icon_imagefile =  $user['image'];
        return view('detail', [
            'data' => $data,
            'dis_img' => $display_imagefile,
            'user' => $user,
            'icon_img' => $icon_imagefile,
            'prevurl' => $prevurl,
        ]);
    }

}
