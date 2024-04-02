<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cashbook;

class RevenueController extends Controller
{
    //
    public function index()
    {
        return view('revenue.oindex');
    }

    public function settings()
    {
        return view('revenue.settings');
    }

    public function newcashbook()
    {
        return view('revenue.newcashbook');

   
    }


   

    public function newcashbooksave(Request $request)
{
    // Access form data from the request

    $cashbookName = $request->input('cashbook');
    $year = $request->input('year');
    $cashbookReport = $request->input('cashbook_report');
    $amount = $request->input('amount');

    // Perform any necessary processing, validation, and database insertion here

    // Redirect back to the form or a success page
    return redirect()->back()->with('success', 'Form submitted successfully');
}


public function view()
{
    $tableData = Cashbook::all();
    // return view('housekeeping.index');
    
    return view('revenue.view', ['tableData' => $tableData]);
}

public function details($id)
{
    // Fetch the details of the box with the given ID
    $boxDetails = Cashbook::findorfail($id); // Replace 'Cashbook' with your model name

    if (!$boxDetails) {
        // Handle the case where the box details are not found, e.g., display an error or redirect to a 404 page.
        abort(404); // This will return a 404 response.
    }

    // Determine the view name based on the ID
    $viewName = '';

    if ($id == 1) {
        $viewName = 'revenue.details'; // View for ID 1
    } elseif ($id == 2) {
        $viewName = 'revenue.details2'; // View for ID 2
    } else {
        // Handle other cases or invalid IDs here (e.g., redirect to a default view)
        abort(404); // This will return a 404 response for unknown IDs.
    }

    // Return the details view with the box details
    return view($viewName, ['boxDetails' => $boxDetails]);
}



   
    
}



