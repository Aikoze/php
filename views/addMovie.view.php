<div class="container">
    <h1><?= $title ?></h1>
    <form id="ajouterFilm" method="post" action="#">
        <div class="row">
            <div class="four columns">
                <label for="titre_film">Titre</label>
                <input name="title" class="u-full-width" type="text" placeholder="Batman" id="titre_film">
            </div>
            <div class="four columns">
                <label for="titre_filmfr">Titre du film en français</label>
                <input name="title_fr" class="u-full-width" type="text" placeholder="Batman" id="titre_filmfr">
            </div>
            <div class="two columns">
                <label for="annee_film">Année</label>
                <select name="year" class="u-full-width" id="exampleRecipientInput">
                    <?php for ($i = 1895; $i <= 2020; $i++): ?>
                        <option typeof="year" value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="four columns">
                <label for="genre_film">Genre</label>
                <select name="type" class="u-full-width" id="exampleRecipientInput">
                    <?php foreach ($types as $type): ?>
                        <option value="<?= $type->getId() ?>"><?= $type->getName() ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="four columns">
                <label for="real_film">Réalisateur du film</label>
                <input name="director" class="u-full-width" type="text" placeholder="Théo wisniewski" id="real_film">
            </div>
            <div class="two columns">
                <label for="score_film">Score</label>
                <input name="score" value="5" class="u-full-width" type="number" max="10" min="0" placeholder="9" id="score_film">
            </div>
        </div>
        <input  class="button-primary" type="submit" value="Submit">
    </form>
    <h1><?= $text ?></h1>
    <table id="filmTable" align="center" class="t">
        <thead>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Année</th>
            <th>Genre</th>
            <th>Réalisateur</th>
            <th>Score</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($films as $film): ?>
            <tr>
                <td><?= $film->getId() ?></td>
                <td><?= $film->getTitle() ?></td>
                <td><?= $film->getYear() ?></td>
                <td><?= $film->getTypeByMovie() ?></td>
                <td><?= $film->getDirectorByMovie() ?></td>
                <td><?= $film->getScore() ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>