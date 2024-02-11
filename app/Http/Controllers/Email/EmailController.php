<?php

namespace App\Http\Controllers\Email;

use App\Events\SendEmail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        Session::flash('toggleBtn', true);
        $validated = $request->validate([
            'first-name' => 'required|string|max:25',
            'last-name' => 'required|string|max:25',
            'email' => 'required|string|email',
            'phone-number' => 'required|max:255',
            'company-name' => 'required|string|max:25',
            'company-year' => 'required|max:25',
            'company-description' => 'required|string|max:255',
            'strategy-quest1' => 'required|string|max:255',
            'strategy-quest2' => 'required|string|max:120',
            'strategy-quest3' => 'required|string|max:120',
            'strategy-quest4' => 'required|string|max:120',
            'strategy-quest5' => 'required|string|max:255',
        ]);
        if ($validated) {
            SendEmail::dispatch($validated);
            return redirect(route('simulator'))->with('success', 'Orçamento enviado com sucesso. Por favor, verifique sua caixa de entrada, bem como a pasta de spam, para garantir que nossa resposta não seja perdida.');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }
}
