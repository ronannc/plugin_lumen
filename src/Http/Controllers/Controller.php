<?php

namespace Ronannc\PluginLumen\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
