<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="js/fct.js"></script>
<script src="js/sorttable.js"></script>
<h1><?= $title ?></h1>
<h1><?= $text ?></h1>
<table id="filmTable" align="center" class="t sortable">
    <thead>
    <tr>
        <th></th>
        <th></i>ID</th>
        <th><i class="fa fa-fw fa-sort"></i>Titre</th>
        <th><i class="fa fa-fw fa-sort"></i>Année</th>
        <th><i class="fa fa-fw fa-sort"></i>Genre</th>
        <th><i class="fa fa-fw fa-sort"></i>Réalisateur</th>
        <th><i class="fa fa-fw fa-sort"></i>Score</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($films as $film): ?>
        <tr>
            <td><input type="checkbox"/></td>
            <td><?= $film->getId() ?></td>
            <td><?= $film->getTitle() ?></td>
            <td><?= $film->getYear() ?></td>
            <td><?= $film->getTypeByMovie() ?></td>
            <td><?= $film->getDirectorByMovie() ?></td>
            <td class="rating"><?= $film->getScore() ?></td>
        </tr>
    <?php endforeach; ?>


    </tbody>
</table>

