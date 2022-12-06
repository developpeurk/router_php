<h1>Ma homepage</h1>


<a href="<?= $router->generate('contact'); ?>">Nous contacter</a>
<a href="<?= $router->generate('article', ['id' => 60, 'slug' => 'nimporte-quoi']); ?>">Voir l'article</a>

<?php ob_start();?> 
<script>alert('hello')</script>
<?php $pageJavascripts = ob_get_clean(); ?>