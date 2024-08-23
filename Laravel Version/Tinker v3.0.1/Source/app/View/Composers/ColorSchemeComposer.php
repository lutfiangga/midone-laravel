<?php

namespace App\View\Composers;

use Illuminate\View\View;

class ColorSchemeComposer
{
    /**
     * Bind color scheme value to the view.
     */
    public function compose(View $view): void
    {
        $view->with(
            'colorScheme',
            session()->has('color_scheme') ? session('color_scheme') : "default"
        );
    }
}
