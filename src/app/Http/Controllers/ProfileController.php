<?php
namespace Sitebill\User\app\Http\Controllers;

use App\Http\Controllers\Controller;

class ProfileController extends Controller {
    public function index () {
        return view('sitebill::profile.index');
    }
}
