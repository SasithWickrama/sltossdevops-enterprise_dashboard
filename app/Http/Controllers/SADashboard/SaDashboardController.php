<?php
 
namespace App\Http\Controllers\SADashboard;
 
use App\Http\Controllers\Controller;
 
class SaDashboardController extends Controller
{
    /**
     * Show the dashboard.
     *
     * @return View
     */
    public function show()
    {
        return view('SADashboard.sadashboard');
    }
}