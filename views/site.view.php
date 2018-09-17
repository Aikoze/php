<h1><?= $title ?></h1>
<h1><?= $text ?></h1>
<table id="filmTable" align="center" class="t">
    <thead>
    <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>Année</th>
        <th>Genre</th>
        <th>Réalisateur</th>
        <th>score</th>
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

