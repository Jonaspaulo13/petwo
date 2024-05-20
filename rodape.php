<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script>
    // Função para substituir o endereço IP no link
    function replaceIP(page) {
        var ip = window.location.hostname;
        var link = 'http://' + ip + '/dashboard/Site_TCC/Web/' + page; // Substitua 'SeuDiretorio' pelo caminho do diretório onde suas páginas estão localizadas
        window.location.href = link;
    }
</script>

<style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        footer {
            width: 100%;
            background-color: #343a40; /* Cor de fundo do rodapé */
            color: white; /* Cor do texto no rodapé */
            padding: 20px 0; /* Espaçamento interno */
            text-align: center; /* Centraliza o texto */
            bottom: 0; /* Alinha o rodapé na parte inferior */
            margin-top: 50px; /* Adiciona espaço entre o conteúdo e o rodapé */
        }

        .content {
            flex: 1;
        }
    </style>

<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5 class="text-light">Categorias</h5>
                <ul class="list-unstyled">
                    <li><a href="#" onclick="replaceIP('index.php')" class="text-info">Início</a></li>
                    <li><a href="#" onclick="replaceIP('historia.php')" class="text-info">História</a></li>
                    <li><a href="#" onclick="replaceIP('contato.php')" class="text-info">Contato</a></li>
                </ul>
            </div>
            <div class="col">
                <h5 class="text-light">Sobre</h5>
                <ul class="list-unstyled">
                    <li><a href="#" onclick="replaceIP('institucional.php')" class="text-info">Institucional</a></li>
                    <li><a href="#" onclick="replaceIP('sobre_a_ONG.php')" class="text-info">Sobre a ONG</a></li>
                </ul>
            </div>
            <div class="col">
                <h5 class="text-light">Termos e Políticas</h5>
                <ul class="list-unstyled">
                    <li><a href="https://www.planalto.gov.br/ccivil_03/_ato2015-2018/2018/lei/l13709.htm" class="text-info">Política de Proteção de Dados (LGPD)</a></li>
                    <li><a href="#" onclick="replaceIP('termos.php')" class="text-info">Termos de Uso</a></li>
                </ul>
            </div> 
            <div class="col">
                <h5 class="text-light">Ajuda</h5>
                <ul class="list-unstyled">
                    <li><a href="#" onclick="replaceIP('orientacoes.php')" class="text-info">Orientações</a></li>
                    <li><a href="#" onclick="replaceIP('denuncie.php')" class="text-info">Denuncie</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>