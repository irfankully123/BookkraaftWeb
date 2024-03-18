<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerQuery;
use Inertia\Inertia;
use Inertia\Response;

class MailInboxController extends Controller
{
    public function index(Request $request): Response
    {
        return Inertia::render('Inbox/InboxIndex', [
            'mails' => CustomerQuery::query()
                ->when($request->input('search'), function ($query, $search) {
                    $query->where('id', 'like', '%' . $search . '%')
                        ->orWhere('name', 'like', '%' . $search . '%')
                        ->orWhere('email', 'like', '%' . $search . '%')
                        ->orWhere('phone', 'like', '%' . $search . '%')
                        ->orWhere('project_detail', 'like', '%' . $search . '%');
                })
                ->orderBy('id', 'desc')
                ->paginate(8)
                ->withQueryString()
        ]);
    }

    public function show(CustomerQuery $mail): Response
    {
        return Inertia::render('Inbox/InboxDetail', [
            'mail' => $mail
        ]);
    }

    public function destroy(CustomerQuery $mail): void
    {
        $mail->delete();
    }
}
