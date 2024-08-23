<?php

namespace App\View\Composers;

use Illuminate\View\View;

class DarkModeComposer
{
    /**
     * Bind dark mode value to the view.
     */
    public function compose(View $view): void
    {
        $view->with(
            'darkMode',
            session()->has('dark_mode') ? filter_var(session('dark_mode'), FILTER_VALIDATE_BOOLEAN) : false
        );
    }
}
