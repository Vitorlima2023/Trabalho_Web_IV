<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGNIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body class="dark-mode">
    <nav class="navbar navbar-expand-lg navbar-dark-mode">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/QUESTÃO6/css/OIP-removebg-preview.png" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">
            </a>
            <a id="LOGO" class="navbar-brand" href="#">IGNIS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MENSAGENS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">CURTIDAS</a>
                        <ul class="dropdown-menu dark-mode">
                            <li><a class="dropdown-item" href="#">Favoritados</a></li>
                            <li><a class="dropdown-item" href="#">Like</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Assistir mais tarde</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">VITOR</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 dark-mode" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success dark-mode" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-5 dark-mode">
        <h2>Postagens</h2>
        <form id="postForm" method="post" action="">
            <input type="hidden" name="action" value="create">
            <div class="mb-3">
                <label for="postContent" class="form-label">Escreva sua postagem:</label>
                <textarea class="form-control dark-mode" id="postContent" name="texto" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary dark-mode">Postar</button>
        </form>
        <div id="postContainer" class="mt-3">
            <?php foreach ($publicacoes as $publicacao): ?>
                <div class="card mb-3 dark-mode">
                    <div class="card-body">
                        <p class="card-text"><?= htmlspecialchars($publicacao['texto']) ?></p>
                        <button class="btn btn-sm btn-outline-primary like-button" data-id="<?= $publicacao['id'] ?>">
                            <?= $publicacao['curtida'] ? 'Curtido' : 'Curtir' ?>
                        </button>
                        <button class="btn btn-sm btn-outline-danger delete-button" data-id="<?= $publicacao['id'] ?>">Excluir</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="QUESTÃO6/js/script.js"> </script>
</body>
</html>
