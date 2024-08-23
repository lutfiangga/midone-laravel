<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class DarkModeController extends Controller
{
    /**
     * Switch dark/light mode.
     *
     */
    public function switch(): RedirectResponse
    {
        session([
            'dark_mode' => session()->has('dark_mode') ? !session()->get('dark_mode') : true
        ]);

        return back();
    }
}
