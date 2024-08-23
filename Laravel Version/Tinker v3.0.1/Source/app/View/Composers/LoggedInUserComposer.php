<?php

namespace App\View\Composers;

use Illuminate\View\View;

class LoggedInUserComposer
{
    /**
     * Bind loggedin user value to the view.
     */
    public function compose(View $view): void
    {
        $view->with('loggedinUser', request()->user());
    }
}
