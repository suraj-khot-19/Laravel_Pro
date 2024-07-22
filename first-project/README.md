<pre>
Laravel IMP
1.	How to create a route in Laravel:
a.	Syntax:
1 method=>
Route::get('/url',function(){
    return view('page name');
});


b.	Syntax:
2 method=>
Route::view( '/url', 'page name' );


2.	Now Example:
    //home route
    Route::get('/', function () {
        return view('welcome');
    });

    //about route
    Route::view("about","about");


3.	What if we create same route url with different view name:
    //home route
    Route::view('/',"welcome");

    //contact route
    Route::view('/',"contact");

Fact: It will consider the last one (Updated one) with program flow

4.	How to create a router’s like one page pointing to other and so on… :
    
    //home route
    Route::view('/',"welcome");

    //contact route
    Route::view('/contact',"contact");

    //about route
    Route::view("/contact/about","about");
  

</pre>