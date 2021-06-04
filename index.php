<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li>
                        <a href="exercicio.php?dir=basico&file=ola">
                        Olá PHP
                        </a>
                        <li>
                        <a href="exercicio.php?dir=basico&file=html">
                        Integração HTML
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=basico&file=css">
                        Integração CSS
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=basico&file=css">
                        Integração CSS
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=basico&file=desafio">
                        Desafio
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li>
                        <a href="exercicio.php?dir=tipos&file=inteiro">
                        Tipo Inteiro
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=tipos&file=flutuante">
                        Tipo Float
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=tipos&file=aritimeticas">
                        Ope Aritiméticas
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                        Desafio Precedência
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=tipos&file=string">
                        Tipo String
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=tipos&file=desafio_string">
                        Desafio String
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=tipos&file=booleano">
                        Tipo booleano
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=tipos&file=conversao">
                        Conversões
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Variáveis</h3>
                    <ul>
                        <li>
                        <a href="exercicio.php?dir=variaveis&file=basico">
                        Básico
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                        Desafio Equação
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                        Atribuições
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=variaveis&file=interpolacao">
                        Interpolação
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                        Variáveis Variáveis
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=variaveis&file=valor_referencia">
                        Valor vs Referências
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=variaveis&file=Constante">
                        Constante
                        </a>
                        </li>
                    </ul>
                    </div>
                    <div class="modulo roxo">
                        <h3>Condicionais I</h3>
                        <ul>
                        <li>
                        <a href="exercicio.php?dir=controle&file=if_else">
                        IF e ELSE
                        </a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=controle&file=operadores_relacionais">
                        Op. Relacionais
                        </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Marco Silva © <?= date('Y'); ?>
    </footer>
</body>
</html>