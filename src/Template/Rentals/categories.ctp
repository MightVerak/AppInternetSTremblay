<h1>
    Location avec categories
    <?= $this->Text->toList(h($categories), 'ou') ?>
</h1>

<section>
    <?php foreach ($rentals as $rental): ?>
        <article>
            <!-- Utilisation du HtmlHelper pour créer le lien -->
            <h4><?= $this->Html->link(
                    $rental->title,
                    ['controller' => 'Rentals', 'action' => 'view', $rental->slug]
                ) ?></h4>
            <span><?= h($rental->created) ?>
        </article>
    <?php endforeach; ?>
</section>
