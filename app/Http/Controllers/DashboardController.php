<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('superadmin.dashboard');
    }

    public function psikiater()
    {
        return view('superadmin.psikiater');
    }

    public function client()
    {
        return view('superadmin.client');
    }

    public function konsultasi()
    {
        return view('superadmin.konsultasi');
    }

    public function chatbotLogs()
    {
        return view('superadmin.chatbot-logs');
    }

    public function pembayaran()
    {
        return view('superadmin.pembayaran');
    }
}