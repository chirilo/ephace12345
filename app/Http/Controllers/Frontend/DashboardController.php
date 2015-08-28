<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Frontend
 */
class DashboardController extends Controller {

	/**
	 * @return mixed
	 */
	public function index()
	{
		//return view('frontend.user.dashboard')
		return view('frontend.new_user.pages.home')
			->withUser(auth()->user());
	}

	/**
         * @return mixed
         */
        public function timelineProfile()
        {
                return view('frontend.new_user.pages.profile')
                        ->withUser(auth()->user());
        }

	/**
         * @return mixed
         */
        public function messages()
        {
                return view('frontend.new_user.pages.messages')
                        ->withUser(auth()->user());
        }

	/**
         * @return mixed
         */
        public function profile()
        {
                return view('frontend.new_user.pages.profile')
                        ->withUser(auth()->user());
        }
}
