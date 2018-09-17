<h1><?= $title ?></h1>
<p><?= $text ?></p>
<table id="table_id" align="center" class="t">
    <thead>
        <th>Id</th>
        <th>Titre</th>
        <th>Année</th>
        <th>Score</th>
        <th>Genre</th>
        <th>Directeur name</th>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
    </tbody>
</table>
<script type="javascript">$(document).ready( function () {
        $('#table_id').DataTable();
    } );</script>
