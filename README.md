# Formulario-de-POST-com-PHP


# Formulario Simples em PHP

Este projeto contem um formulario simples feito com HTML, PHP e CSS. Ele recebe nome, email e senha, valida os campos enviados por `POST` e mostra mensagens de erro ou sucesso na propria pagina.

## Arquivos

- `index.php`: contem o formulario e a validacao dos dados enviados.
- `style.css`: contem a estilizacao visual do formulario.
- `teste.php`: arquivo auxiliar do projeto.

## Campos do formulario

- Nome: campo de texto obrigatorio.
- Email: campo obrigatorio validado com `FILTER_VALIDATE_EMAIL`.
- Senha: campo de senha obrigatorio.

## Como usar

1. Coloque os arquivos dentro da pasta do servidor local, como `htdocs` no XAMPP.
2. Inicie o Apache pelo painel do XAMPP.
3. Acesse no navegador:

```text
http://localhost/index.php
```

4. Preencha nome, email e senha.
5. Clique em `submit`.

Se algum campo estiver vazio ou o email for invalido, a pagina mostra uma mensagem de erro. Se todos os dados estiverem corretos, a pagina mostra a mensagem de cadastro enviado com sucesso junto com o nome e o email informados.

## Observacao

Este formulario e apenas um exemplo de estudo. Ele nao salva os dados em banco de dados e tambem nao deve ser usado em producao sem melhorias de seguranca, como tratamento de saida com `htmlspecialchars`, validacoes extras e armazenamento seguro de senhas.
