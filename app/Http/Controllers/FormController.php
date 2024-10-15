<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formRequest(Request $request)
    {
        $formFields = $request->validate([
            'title' => ['required', 'min:3', 'max:20'],
            'description' => ['required', 'min:20', 'max:300']
        ]);

        Blog::create($formFields);
        return "Thanks for your form request";
    }

}
// Deze pagina vangt alle fields op nadat ik in de form pagina alle gegevens door stuur dmv de action methode
