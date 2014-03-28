//--> Route Model Binding
Route::model('user', 'User');
Route::get('profile/{user}', function(User $user)
{
    //
});
