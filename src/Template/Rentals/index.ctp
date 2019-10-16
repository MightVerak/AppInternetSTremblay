<h1>Rentals</h1>

<p><?= $this->Html->link('Ajouter une location', ['action' => 'add']) ?></p>

<table>
    <tr>
        <th>Titre</th>
        <th>Créé le</th>
        <th>Action</th>
    </tr>

    <!-- C'est ici que nous bouclons sur notre objet Query $rentals pour afficher les informations de chaque locations -->

    <?php foreach ($rentals as $rental): ?>
        <tr>
            <td>
                <?= $this->Html->link($rental->title, ['action' => 'view', $rental->slug]) ?>
            </td>
            <td>
                <?= $rental->created->format(DATE_RFC850) ?>
            </td>
            <td>
                <?= $this->Html->link('Modifier', ['action' => 'edit', $rental->slug]) ?>
                <?= $this->Form->postLink(
                    'Supprimer',
                    ['action' => 'delete', $rental->slug],
                    ['confirm' => 'Êtes-vous sûr ?'])
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
