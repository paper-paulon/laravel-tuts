Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest('toursite');
});

//--> grouping routes together
Route::group(array('before' => 'auth'), function()
{
    Route::get('scenes', function()
    {
        // Has Auth Filter
    });

    Route::get('updates', function()
    {
        // Has Auth Filter
    });
});

//--> named spacing route group
//--> namespace = reserved keyword to namespace
Route::group(array('namespace' => 'Loginusers'), function()
{
    //
});
