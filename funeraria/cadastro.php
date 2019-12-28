<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Conectados - Cadastre-se </title>
  </head>
  <body>
  <h1 id="conteudo">Cadastro de Usu�rios</h1>
<p>Informe os seus dados abaixo </p>
<form>
<label for="nome">Informe o seu nome Completo </label>
<input type="text" name="nome" id="nome" required placeholder="Aluno da Silva" autocomplete autofocus/>
<label for="cpf">Informe seu CPF </label>
<input type="number" name="cpf" id="cpf" required placeholder="999999999-99" size="11" maxlength="11" />
<label for="rg">Informe seu RG</label>
<input type="text" name="rg" id="rg" required />
<label for="pas">Crie uma senha</label>
<input type="password" name="pas" id="pas" required />
<label for="cpas">Confirme sua senha</label>
<input type="password" name="cpas" id="cpas" required />
<label for="email">Informe seu e-mail </label>
<input type="email" name="email" id="email" required placeholder="aluno@conectados.com" />

<label for="cel">Informe o seu celular/whatsapp com DDD </label>
<input type="number" name="cel" id="cel" required placeholder="11 99999-0000" size="12" maxlength="12" />
<label for="end">Informe o seu endereço Completo </label>
<input type="text" name="end"id="end" required placeholder="Rua/Avenida, Número, Complemento" />
<label for="nasc">Informe sua data de nascimento</label>
<input type="number" name="nasc" id="nasc" required placeholder="dd/mm/aaaa" size="10" maxlenght="10" />
<fieldset>
<legend>Genero</legend>
<label for="m">Masculino</label>
<input type="radio" name="genero" id ="m" value="m" />
<label for="f">Feminino</label>
<input type="radio" name="genero" id="f" value="f" />
</fieldset>
<fieldset>
<legend>termos de uso</legend>
<label for="ter">Aceito os termos</label>
<input type="checkbox" name="ter" id="ter" value="termos"/>
</fieldset>
<a href="termos.php">Ter		mos de Uso</a>
<a href="index.php" role="button">Enviar cadastro</a>
</form>
  
  </body>
</html>