<?php
        
// Start Routes for estudios 
Route::resource('services/estudios','Services\EstudiosController');
// End Routes for estudios 

                    
// Start Routes for imagenologia 
Route::resource('services/imagenologia','Services\ImagenologiaController');
// End Routes for imagenologia 

                    
// Start Routes for ubications 
Route::resource('services/ubications','Services\UbicationsController');
// End Routes for ubications 

                    
// Start Routes for equipment 
Route::resource('services/equipment','Services\EquipmentController');
// End Routes for equipment 

                    
// Start Routes for maintenance 
Route::resource('services/maintenance','Services\MaintenanceController');
// End Routes for maintenance 

                    
// Start Routes for estations 
Route::resource('services/estations','Services\EstationsController');
// End Routes for estations 

                    
// Start Routes for maintenanceegresos 
Route::resource('services/maintenanceegresos','Services\MaintenanceegresosController');
// End Routes for maintenanceegresos 

                    ?>