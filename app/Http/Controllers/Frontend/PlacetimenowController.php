<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class PlacetimenowController
 * @package App\Http\Controllers
 */
class PlacetimenowController extends Controller {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		javascript()->put([
			'test' => 'it works, im on placetimenow!'
		]);

		/*return view('frontend.index');*/
		return view('frontend.placetimenow');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function joyride()
	{
		return view('frontend.placetimenow_user.joyride.joyride');
	}
}
