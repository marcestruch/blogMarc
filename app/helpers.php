<?php

if (! function_exists('fechaActual')) {
    function fechaActual($format = 'd/m/Y')
    {
        return now()->format($format);
    }
}
