<h1><?= h($rental->title) ?></h1>
<p><?= h($rental->body) ?></p>
<p><small>Créé le : <?= $rental->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Modifier', ['action' => 'edit', $rental->slug]) ?></p>
