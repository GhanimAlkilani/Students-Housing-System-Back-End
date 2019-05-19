<?php

// Auth
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');
Route::post('/refresh', 'AuthController@refresh');
Route::post('/getInfo', 'AuthController@getInfo');
Route::post('/getInfoByID', 'Controller@getInfoByID' ) ;
Route::post('/test', 'Controller@test' ) ;
Route::post('/createStudentAccount', 'Controller@createStudentAccount' ) ;

// Rooms
Route::post('/getStudentRoom', 'RoomController@getStudentRoom');
Route::post('/setStudentRoom', 'RoomController@setStudentRoom');
Route::post('/getAllRooms', 'RoomController@getAllRooms');
Route::post('/changeStudentRoom', 'RoomController@changeStudentRoom');
Route::post('/clearStudentRoom', 'RoomController@clearStudentRoom');
Route::post('/getRoomInfo', 'RoomController@getRoomInfo');
Route::post('/getRoomID', 'RoomController@getRoomID');
Route::post('/getRoomsForWing', 'RoomController@getRoomsForWing');
Route::post('/getRoomsCount', 'RoomController@getRoomsCount');
Route::post('/getAvailableRoomsCount', 'RoomController@getAvailableRoomsCount', ['middleware' => 'cors']);
Route::post('/getStudentForRoom', 'RoomController@getStudentForRoom');

// Complaints
Route::post('/getAllComplaints', 'ComplaintController@getAllComplaints');
Route::post('/createComplaint', 'ComplaintController@createComplaint');
Route::post('/closeComplaint', 'ComplaintController@closeComplaint');
Route::post('/replayToComplaint', 'ComplaintController@replayToComplaint');
Route::post('/getComplaintsForStudent', 'ComplaintController@getComplaintsForStudent');

// MaintenanceRequests
Route::post('/getAllMaintenanceRequests', 'MaintenanceRequestController@getAllMaintenanceRequests');
Route::post('/createMaintenanceRequest', 'MaintenanceRequestController@createMaintenanceRequest');
Route::post('/closeMaintenanceRequest', 'MaintenanceRequestController@closeMaintenanceRequest');
Route::post('/getMaintenanceRequestsForStudent', 'MaintenanceRequestController@getMaintenanceRequestsForStudent');
Route::post('/setMaintenanceRequestAsInProcess', 'MaintenanceRequestController@setMaintenanceRequestAsInProcess');
