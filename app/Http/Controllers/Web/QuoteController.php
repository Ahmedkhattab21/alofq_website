<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\QuoteRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class QuoteController extends Controller
{
    public function index(): View
    {
        return view('pages.quote.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:150'],
            'company' => ['nullable', 'string', 'max:150'],
            'project_type' => ['required', 'string', 'in:app,web,system,ux,ai,other'],
            'budget' => ['required', 'string', 'in:starter,growth,enterprise'],
            'details' => ['required', 'string', 'max:4000'],
        ]);

        QuoteRequest::create([
            ...$validated,
            'status' => 'new',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return redirect()
            ->route('thank-you')
            ->with('submission', 'quote');
    }
}
