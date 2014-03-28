//--> Basics
Route::get('user/{id}', function($id)
{
    return 'User '.$id;
});

//--> Optional
Route::get('user/{name?}', function($name = null)
{
    return $name;
});

//--> Optional with default value
Route::get('user/{name?}', function($name = 'John')
{
    return $name;
});

//--> Regular expressions
Route::get('user/{name}', function($name)
{
    //
})->where('name', '[A-Za-z]+');
Route::get('user/{id}', function($id)
{
    //
})->where('id', '[0-9]+');

//--> Regular expressions multiple parameters
Route::get('user/{id}/{name}', function($id, $name)
{
    //
})->where(array('id' => '[0-9]+', 'name' => '[a-z]+'))

//--> Defining global expressions
Route::pattern('id', '[0-9]+');
Route::get('user/{id}', function($id)
{
    // Only called if {id} is numeric.
});

//--> Accessing route parameter from filter
Route::filter('foo', function()
{
    if (Route::input('id') == 1)
    {
        //
    }
});
