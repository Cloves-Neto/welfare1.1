<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welfare | Agenda</title>
    <style>
        /* Reset */
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed, 
        figure, figcaption, footer, header, hgroup, 
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            font-family: Arial, Helvetica, sans-serif;
        }
        *,
        *::after,
        *::before{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure, 
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, 
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }


        /* Formatação da Home */
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-size: 1rem !important;
            font-family: Arial, Helvetica, sans-serif;
        }
        a{
            text-decoration: none;
            color: white;
            font-weight: 600;
            letter-spacing: 2px;

        }
        /* Organização container */
        .granbox{
            margin: auto;
            padding: 15px;
        
            width: 100%;
            max-width: 1440px;
            height: 100vh;
        
            display: grid;
            grid-template-areas: 'm i';
            grid-template-columns: 200px calc(100% - 200px);
            grid-template-rows: 100%;
            gap: 10px;
        
        }
        /* Organização aside - menu */
        aside.menu{
            grid-area: m;
            background-color: rgb(81, 189, 138);
            position: relative;
            padding: 10px;
            border-radius: 10px;
        
        }
        aside.menu .user-profile{
            width: 120px;
            height: 120px;
            margin-bottom: 10px;
        }
        
        aside.menu .user-profile a{
            display: block;
            padding: 5px;
            border-radius: 10pc;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;   
        }
        aside.menu .user-profile a img{
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
        aside.menu nav{
            display: flex;
            flex-direction: column;
            padding: 15px;
            gap: 5px;
            justify-content: space-between;
            align-items: center;
        }
        aside.menu nav ul{ 
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
            gap: 30px;
        }

        /* Organização da section infosite - conteudo principal */
        section.infosite{
            grid-area: i;    
            padding: 15px;
            display: grid;
            gap: 5px;
            grid-template-areas: 
            'ih'
            'im';
            grid-template-rows: 20% 80%;
            grid-template-columns: 100%;
        }   
        section.infosite header{
            grid-area: ih;
            background-color: aqua;
        }
        section.infosite main{
            grid-area: im;
            background-color: cadetblue;
            padding: 10px;
        }
        section.infosite main .select-area{
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            height: 60px;
            margin: 10px 0 20px 0;
        }

    </style>
</head>
<body>
    <div class="granbox">
        <aside class="menu">
            <nav>
                <div class="user-profile">
                    <a href="#" aria-label="area de informaçãoes do usuario">
                        <img class="img-perfil" src="../assets/user.png" alt="imagem de perfil do usuario">
                    </a>
                </div>
                <ul>
                    <li>
                    <h2>Cadastro</h2>
                    <ul>
                            <!--   AREA DO ADMINISTRADOR
                        <li>
                        <a href="#">Cadastro Médico</a>
                        </li> -->
                        
                        <li>
                        <a href="#">Paciente</a>
                        </li>
                    <!--     AREA DO ADMINISTRADOR
                        <li>
                        <a href="#">Cadastro Especialidade</a>
                        </li> -->
                    </ul>
                    </li>
                    
                    <li>
                    <h2>Dados</h2>
                    <ul>
                        <li>
                        <a href="#">Agenda</a>
                        </li>

                        <li>
                        <a href="#">Relatório</a>
                        </li>
                        
                        <li>
                        <a href="#">Financeiro</a>
                        </li>
                    </ul>
                    </li>
                </ul>
                <div class="exit">
                    <a href="#">
                    <ion-icon name="exit-outline"></ion-icon>
                    </a>
                </div>
            </nav>
        </aside>
        <section class="infosite">
            <header>
                <h2>Agenda</h2>
            </header>
            <main>
                <div class="select-area">
                    <select name="medico" id="medico">
                        <option value="5">teste</option>
                        
                    </select>

                    <select name="data" id="data">
                        <option value="5">10/02/2023</option>
                        <?php
                        include_once('./controleagenda.php');
                        for($item = 0; $item<60; $item++){
                            echo'<option>'. $dataAgenda[$item] .'</option>';
                        }

                    ?>
                    </select>

                </div>
                <div>
                <?php
                    include_once('../conexao.php');

                    $query = "SELECT * FROM `funcionario` WHERE cargo_funcionario = 'medico'";
                    $buscarusuario = $conexao->prepare($query);
                    $buscarusuario->execute();
                    
                    while($funcionario = $buscarusuario->fetch(PDO::FETCH_ASSOC)){
                        echo 
                        '<div value="'.$funcionario["id_funcionario"].'">'.    
                            $funcionario["nome_funcionario"].
                        '</div>';
                    }
                    ?>
                    
                    <!-- row-data conteúdo gerado conforme agendamento resgistrado -->
                    <div class="row-data">
                        <span>10:30</span>
                        <span>Nome Paciente</span>
                        <span><button>Cancelar</button></span> <!-- botão chamando função para excluir agendamendo-->
                    </div>
                    <!-- row-data conteúdo gerado conforme a disponibilidade se não tiver nenhum agendamento resgistrado -->
                    <div class="row-data">
                        <span>10:50</span>
                        <span>Disponível</span>
                        <span><button>Agendar</button></span> <!-- botão chamando função para fazer agendamendo / redireciona p/ outra página -->
                    </div>
                </div>
            </main>
        </section>
    </div>
</body>
</html>