<div class="container">
    <h1><?= $title ?></h1>
    <h1><?= $text ?></h1>
    <p id="demo"></p>
    <a class="button" href="addMovie">Ajouter un film</a>
</div>
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

