<h1>Modifier une location</h1>
<?php
echo $this->Form->create($rental);
echo $this->Form->control('user_id', ['type' => 'hidden']);
echo $this->Form->control('title');
echo $this->Form->control('body', ['rows' => '3']);
echo $this->Form->control('categorie_string', ['type' => 'text']);
echo $this->Form->button(__('Sauvegarder la location'));
echo $this->Form->end();
?>
