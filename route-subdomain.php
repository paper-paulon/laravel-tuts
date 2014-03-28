//--> Registering Sub-Domain Routes
Route::group(array('domain' => '{account}.myapp.com'), function()
{
    Route::get('user/{id}', function($account, $id)
    {
        //
    });

});
