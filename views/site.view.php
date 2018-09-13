<h1><?= $title ?></h1>
<p><?= $text ?></p>
<table align="center">
    <thead>
    <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>Année</th>
        <th>Score</th>
        <th>Directeur id</th>
        <th>Directeur name</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($films as $film): ?>
        <tr>
            <td><?= $film->getId() ?></td>
            <td><?= $film->getTitle() ?></td>
            <td><?= $film->getYear() ?></td>
            <td><?= $film->getScore() ?></td>
            <td><?= $film->getIdDirector() ?></td>
            <td><?= $film->getDirectorByMovie() ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
