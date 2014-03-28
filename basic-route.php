//--> Basic route GET
Route::get('/', function()
{
    return 'Hello World';
});

//--> Basic route POST
Route::post('foo/bar', function()
{
    return 'Hello World';
});

//--> Registering A Route Responding To Any HTTP Verb
Route::any('foo', function()
{
    return 'Hello World';
});

//--> Different approach Registering A Route For Multiple Verbs
Route::match(array('GET', 'POST'), '/', function()
{
    return 'Hello World';
});

//--> Forcing A Route To Be Served Over HTTPS
Route::get('foo', array('https', function()
{
    return 'Must be over HTTPS';
}));
