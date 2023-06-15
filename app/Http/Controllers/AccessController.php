<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        switch (auth()->user()->role) {
            case 'admin':
                return redirect()->route('admin.dashboard');
                break;
            case 'carer':
                return redirect()->route('carer.dashboard');
                break;
            default:
                return redirect()->route('login');
                break;
        }
    }
}
