<h1>Function's page</h1>
<table id="listfunct" class="table listfunc">
    <thead>
        <tr>
            <th>ID</th>
            <th>function name</th>
            <th>date de creation</th>
            <th>derniere modification</th>
        </tr>
    </thead>
    <tbody>
<?php 
    while ($donnees=$req->fetch()) {
        echo '<tr>';
        echo '<td>'.$donnees['ID'].'</td>';
        echo '<td>'.$donnees['name_func'].'</td>';
        echo '<td>'.$donnees['date_de_creation'].'</td>';
        echo '<td>'.$donnees['derniere_modif'].'</td>';
        echo '</tr>';
    }
?>
    </tbody>
</table>