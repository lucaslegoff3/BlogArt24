<?php
include '../../../header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création d'un nouvel article</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">Titre de l'article</label>
                    <input id="libTitrArt" name="libTitrArt" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <div class="form-group">
                    <label for="libChapoArt">Chapô de l'article</label>
                    <input id="libChapoArt" name="libChapoArt" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="libAccrochArt">Accroche de l'article</label>
                    <input id="libAccrochArt" name="libAccrochArt" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="parag1Art">Paragraphe 1 de l'article</label>
                    <textarea id="parag1Art" name="parag1Art" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Sous-titre 1 de l'article</label>
                    <input id="libSsTitr1Art" name="libSsTitr1Art" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="parag2Art">Paragraphe 2 de l'article</label>
                    <textarea id="parag2Art" name="parag2Art" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous-titre 2 de l'article</label>
                    <input id="libSsTitr2Art" name="libSsTitr2Art" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="parag3Art">Paragraphe 3 de l'article</label>
                    <textarea id="parag3Art" name="parag3Art" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion de l'article</label>
                    <textarea id="libConclArt" name="libConclArt" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="urlPhotArt">URL de la photo de l'article</label>
                    <input id="urlPhotArt" name="urlPhotArt" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="libThem">Thème de l'article</label>
                    <input id="libThem" name="libThem" class="form-control" type="text" />
                </div>
                <br>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer la création</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';
?>