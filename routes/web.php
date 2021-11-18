<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
	return view('welcome');
});


Auth::routes();


Route::match(['get', 'post'], 'register', function(){
    return redirect('/');
});






//protección de las rutas para que solo los usuarios autenticados tengan acceso
Route::middleware(['auth'])->group( function() {

	Route::get('/dash', 'DashController@data')->middleware('permission:dash'); 

	Route::view('empresa', 'empresa')->middleware('permission:empresa_index'); 
	Route::view('cajones', 'cajones')->middleware('permission:cajones_index');
	Route::view('tipos', 'tipos')->middleware('permission:tipos_index'); 
	Route::view('tarifas', 'tarifas')->middleware('permission:tarifas_index'); 
	Route::view('cortes', 'cortes')->middleware('permission:cortes_index');
	Route::view('usuarios', 'usuarios')->middleware('permission:usuarios_index'); 

	
	Route::view('rentas', 'rentas')->middleware('permission:rentas_index');
	//Route::view('cotizaciones', 'cotizaciones'); 
	//Route::view('cuentasxpagar', 'cuentasxpagar'); 
	Route::view('usuarios', 'usuarios')->middleware('permission:usuarios_index');
	
	Route::view('movimientos', 'movimientos')->middleware('permission:movimientos_index');	
	Route::view('extraviados', 'extraviados')->middleware('permission:extraviados_index');
	Route::view('permisos', 'permisos')->middleware('permission:roles_index'); 

	Route::view('ventasdiarias', 'ventasdiarias')->middleware('permission:reporte_ventasdiarias_index'); 
	Route::view('ventasporfechas', 'ventasporfechas')->middleware('permission:reporte_ventasporfecha_index');
	Route::view('proximasrentas', 'proximasrentas')->middleware('permission:reporte_rentasavencer_index');
});

//rutas de impresión
Route::get('print/order/{id}', 'PrinterController@TicketVista');
Route::get('ejemplo/{id}', 'PrinterController@cargar');

Route::get('cortes/{ventas}/{entradas}/{salidas}/{balance}', 'PrinterController@PrintCorte');
Route::get('ticket/pension/{id}', 'PrinterController@TicketPension');






//tests
//Route::get('print', 'HomeController@PrintReceipt');
//Route::get('print/receipt/{id}', 'PrinterController@PrintOrder');




