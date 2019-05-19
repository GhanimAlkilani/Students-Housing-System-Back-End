<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaintenanceRequest;

class MaintenanceRequestController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', [
            'except' => [
                'getAllMaintenanceRequests',
                'closeMaintenanceRequest',
                'setMaintenanceRequestAsInProcess'
            ]
        ]);
    }
    
    public function getAllMaintenanceRequests() {
        return MaintenanceRequest::with('student')->get();
    }
    
    public function createMaintenanceRequest(Request $request) {
        $newMaintenanceRequest = new MaintenanceRequest();
        $newMaintenanceRequest->student_id = auth()->user()->id;
        $newMaintenanceRequest->title = $request->title;
        $newMaintenanceRequest->description = $request->description;
        $newMaintenanceRequest->type = $request->type;
        $newMaintenanceRequest->save();
        return $newMaintenanceRequest;
    }
    
    public function setMaintenanceRequestAsInProcess(Request $request) {
        $maintenanceRequest = MaintenanceRequest::find($request->request_id);
        $maintenanceRequest->status = 'in_process';
        $maintenanceRequest->save();
        return $maintenanceRequest;
    }
    
    public function closeMaintenanceRequest(Request $request) {
        $maintenanceRequest = MaintenanceRequest::find($request->request_id);
        $maintenanceRequest->status = 'closed';
        $maintenanceRequest->save();
        return $maintenanceRequest;
    }
    
    public function getMaintenanceRequestsForStudent(Request $requst) {
        return auth()->user()->maintenance_requests;
    }

}
