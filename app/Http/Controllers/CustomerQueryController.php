<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCustomerQueryRequest;
use App\Mail\SendUserQuery;
use App\Models\CustomerQuery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerQueryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(PostCustomerQueryRequest $request): RedirectResponse
    {
        $user = CustomerQuery::create($request->validated());
        Mail::to($request->input('email'))->send(new SendUserQuery('Thank You For Contacting', $user->name));
        return redirect()->back()->with('message', 'Form submitted successfully');
    }
}
