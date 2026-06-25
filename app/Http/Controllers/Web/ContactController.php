<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('pages.contact.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:150'],
            'service' => ['required', 'string', 'in:web,mobile,systems,design,cloud,support,other'],
            'budget' => ['nullable', 'string', 'max:100'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        ContactMessage::create([
            ...$validated,
            'status' => 'new',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return redirect()
            ->route('thank-you')
            ->with('submission', 'contact');
    }
}
