<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ColorSchemeController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function switch(Request $request): RedirectResponse
    {
        session([
            'color_scheme' => $request->color_scheme
        ]);

        return back();
    }
}
