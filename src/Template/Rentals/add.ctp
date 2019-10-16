<h1>Ajouter une location</h1>
<?php
echo $this->Form->create($rental);
echo $this->Form->control('title');
echo $this->Form->control('date_rental');
echo $this->Form->control('date_return');
echo $this->Form->control('categorie_string', ['type' => 'text']);
echo $this->Form->button(__('Sauvegarder la location'));
echo $this->Form->end();
?>
