//--> Named routes make referring to routes when generating redirects or URLs more convenient. You may specify a name for a route like so
Route::get('user/profile', array('as' => 'profile', function()
{
    //
}));

//--> You may also specify route names for controller actions
Route::get('user/profile', array('as' => 'profile', 'uses' => 'UserController@showProfile'));
$url = URL::route('profile');
$redirect = Redirect::route('profile');

//--> you may also encouter this named route sooner from templating
$name = Route::currentRouteName();
