<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class ProminenseBuilderController
 * @package App\Http\Controllers
 */
class ProminenseBuilderController extends Controller {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		javascript()->put([
			'test' => 'it works, im on prominense builder!'
		]);

		/*return view('frontend.index');*/
		return view('frontend.prominense');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function joyride()
	{
		return view('frontend.prominense_user.joyride.joyride');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function builder()
	{
		return view('frontend.prominense_user.builder');
	}
}
