<?php namespace App\Api\V1\Controllers;

use JWTAuth;
use App\Http\Controllers\Controller;

class UserActivityController extends Controller {


    /**
     * View list of notification config
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function config()
    {
        $currentUser = JWTAuth::parseToken()->authenticate();
    }

}
