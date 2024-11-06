<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContatoFormMail;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function enviarFormulario(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'mensagem' => 'required|string',
        ]);

        // Pegando os dados do formulário
        $dados = $request->only('nome', 'email', 'mensagem','numero','como_prefere_retorno');

        // Enviando o e-mail
        Mail::to('destinatario@gmail.com')->send(new ContatoFormMail($dados));

        // Retornando uma resposta
        return back()->with('success', 'Formulário enviado com sucesso!');
    }
}
