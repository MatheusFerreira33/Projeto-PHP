<!DOCTYPE html>
<html lang="en">
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
                    <h3>Basicos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Ola PHP</a></li>
                        <?php /* essa linha e para um arquivo abrir dentro de outra */ ?>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Integração de Comentarios</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmetricas">OP.Aritmetricas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precendencia">Desafio Precedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipos String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Tipos Booleano</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                <h3>Variaveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Variaveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuições">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variaveis Variaveis </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio Variaveis </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor VS Referencia </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constante">Constante</a></li>
                    </ul>              
                </div>
                <div class="modulo laranja">
                <h3>Controle</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">If Else</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Logicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">Desafio Operadores Logicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operador_ternario">Operador Ternario</a></li>
                        <li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_switch">Desafio Switch</a></li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                <h3>Array</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=Array&file=basico">Array Basico</a></li>
                        <li><a href="exercicio.php?dir=Array&file=mapas">Mapas</a></li>
                        <li><a href="exercicio.php?dir=Array&file=desafio_index">Desafio Array </a></li>
                        <li><a href="exercicio.php?dir=Array&file=desafio_meses">Desafio_meses </a></li>
                        <li><a href="exercicio.php?dir=Array&file=operações">Operações </a></li> 
                        <li><a href="exercicio.php?dir=Array&file=desafio_sorteio">Desafio Sorteio </a></li>
                        <li><a href="exercicio.php?dir=Array&file=arrays_multidimensionais">Arrays 3 Dimensões</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                <h3>Array VL.2</h3>
                    <ul>
                    <li><a href="exercicio.php?dir=licao&file=licao_do_array">Lição do Array</a></li>
                    <li><a href="exercicio.php?dir=licao&file=licao_de_ifelse">Lição Ifelse</a></li>
                    <li><a href="exercicio.php?dir=licao&file=Arrays_Constantes">Arrays Constantes</a></li>
                    <li><a href="exercicio.php?dir=licao&file=GET">GET</a></li>
                    <li><a href="exercicio.php?dir=licao&file=POST">POST</a></li>
                    <li><a href="exercicio.php?dir=licao&file=comparação">Comparação</a></li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>Repetição</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=repetiçoes&file=for">Laço FOR</a></li>
                        <li><a href="exercicio.php?dir=repetiçoes&file=desafio_for">Desafio  FOR</a></li>
                        <li><a href="exercicio.php?dir=repetiçoes&file=forech">Forech</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>