<h1>Teste de envio de requisições</h1>

<h3>Requisição GET</h3>
<a href="/req1/uma_mensagem/outra_mensagem">Clique aqui para fazer uma requisição GET</a>

<h3>Requisição POST</h3>
<form method="post" action="/req2">
    @csrf
    
    parâmetro 1:
    <input type="text" name="param1"/><br>

    parâmetro 2:
    <input type="text" name="param2"/><br>
    
    <button type="submit">Clique aqui para fazer uma requisição POST</button>
</form>