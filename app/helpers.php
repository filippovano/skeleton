<?php

function in_production()
{
    return app()->environment('production');
}
