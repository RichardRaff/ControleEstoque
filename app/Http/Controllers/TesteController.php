<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller {

    public function minhafuncao() {
        return view("pagina");
    }

    // A variavel $variavel foi passada pelo usuario atraves da url
    function teste($var) {
        $outra_variavel = 'programando laravel';
        $meu_nome = 'Fulano de Tal';
        // A funçao view tbm aceita um segundo parametro, que é um vetor variaveis que sao enviadas para a view especificada no primeiro parametro
        //compact serve para enviar as variáveis para a view especificada
        return view('teste', compact('var', 'outra_variavel', 'meu_nome'));
    }

    //a variavel $idade foi passada pelo usuario atraves da URL
    function permissao($idade) {
        if ($idade < 18) {
            return 'Você não tem idade suficiente para acessar aqui!';
        } else {
            return view('restrito', compact('idade'));
        }
    }

    function funcao1() {
        //uma string
        $disciplina = "Desenvolvimento Web2";
        //um int
        $periodo = 7;
        //um vetor
        $alunos = ["pedro", "wendhel", "larissa"];
        //outro vetor
        $frutas = ["abacate", "melancia", "laranja", "açaí", "maçã"];
        //a funcao compact envia as variaveis para a view
        return view("child3", compact("disciplina", "periodo", "alunos", "frutas"));
    }

    function funcaoGet($param1, $param2) {
        //abre a view 'requisicaoget',
        // passando as variaveis 'param1' e 'param2' pra view
        return view('requisicaoget', compact('param1', 'param2'));
    }

    function funcaoPost(Request $request) {
        //recupera dois parametros do formulario
        $param1 = $request->input('param1');
        $param2 = $request->input('param2');
        
        //abre a view 'requisicaoget',
        // passando as variaveis 'param1' e 'param2' pra view
        return view('requisicaopost', compact('param1', 'param2'));
    }

}
