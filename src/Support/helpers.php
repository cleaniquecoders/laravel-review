<?php

if (! function_exists('review')) {
    function review()
    {
        return app(config('reviewer.models.review'));
    }
}
