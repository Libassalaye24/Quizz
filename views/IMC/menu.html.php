<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">Quizz</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <?php if(est_admin()): ?>
                <li class="nav-item active">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=admin&view=list.question'?>">Liste des questions <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=admin&view=list.joueur'?>">Liste des joueurs</a>
            </li>
                <?php endif ?>
                <?php if(est_joueur()): ?> 
            <li class="nav-item">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=admin&view=jeu'?>">Jeu</a>
            </li>
            <?php endif ?>
            <?php if(est_connect()): ?>
                <li class="nav-item">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=security&view=deconnexion'?>">Deconnexiion</a>
            </li>
            <?php endif ?>
            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>