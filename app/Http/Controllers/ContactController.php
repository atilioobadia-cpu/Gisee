<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    /**
     * Store an incoming contact request from the homepage modal.
     */
    public function store(ContactRequest $request): RedirectResponse
    {
        ContactMessage::create($request->toContactMessage());

        return redirect()
            ->route('home')
            ->with('toast', 'Thanks — your message has been sent. We will get back to you soon.')
            ->with('toast_type', 'success');
    }
}
