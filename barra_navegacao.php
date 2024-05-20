<html>

<!-- Estilo personalizado para ativar dropdowns ao passar o mouse -->

<script>
    // Função para substituir o endereço IP no link
    function replaceIP(page) {
        var ip = window.location.hostname;
        var link = 'http://' + ip + '/dashboard/Site_TCC/Web/' + page; // Substitua 'SeuDiretorio' pelo caminho do diretório onde suas páginas estão localizadas
        window.location.href = link;
    }
</script>

<style>
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#" onclick="replaceIP('index.php')">PeTwo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://localhost/dashboard/Site_TCC/Web/index.php" id="categoriasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="align-middle"><i class="bi bi-grid-fill"></i> Categorias</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="categoriasDropdown">
                        <a class="dropdown-item" href="#" onclick="replaceIP('index.php')"><i class="bi bi-house-fill"></i> Início</a>
                        <a class="dropdown-item" href="#" onclick="replaceIP('historia.php')"><i class="bi bi-book-fill"></i> História</a>
                        <a class="dropdown-item" href="#" onclick="replaceIP('contato.php')"><i class="bi bi-envelope-fill"></i> Contato</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="sobreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="align-middle"><i class="bi bi-info-circle-fill"></i> Sobre</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="sobreDropdown">
                        <a class="dropdown-item" href="#" onclick="replaceIP('institucional.php')"><i class="bi bi-building-fill"></i> Institucional</a>
                        <a class="dropdown-item" href="#" onclick="replaceIP('sobre_a_ONG.php')"><i class="bi bi-people-fill"></i> Sobre a ONG</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="termosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="align-middle"><i class="bi bi-file-earmark-text-fill"></i> Termos e Políticas</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="termosDropdown">
                        <a class="dropdown-item" href="https://www.planalto.gov.br/ccivil_03/_ato2015-2018/2018/lei/l13709.htm"><i class="bi bi-shield-fill"></i> Política de Proteção de Dados (LGPD)</a>
                        <a class="dropdown-item" href="#" onclick="replaceIP('termos.php')"><i class="bi bi-file-earmark-bar-graph-fill"></i> Termos de Uso</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ajudaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="align-middle"><i class="bi bi-question-circle-fill"></i> Ajuda</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="ajudaDropdown">
                        <a class="dropdown-item" href="#" onclick="replaceIP('orientacoes.php')"><i class="bi bi-bookmark-fill"></i> Orientações</a>
                        <a class="dropdown-item" href="#" onclick="replaceIP('denuncie.php')"><i class="bi bi-exclamation-circle-fill"></i> Denuncie</a>
                    </div>
                </li>
                    <?php
                    // Inclui o arquivo da barra de navegação
                    include 'usuarios/login_registro.php';
                    ?>
            </div>
            </ul>
        </div>
    </div>
</nav>


<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Font Awesome (ícones) -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<!-- Incluir Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Incluir Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

<!-- Incluir CSS do Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">



</html>
