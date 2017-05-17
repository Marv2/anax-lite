<article>
    <h1>Tärningsspelet 100</h1>
    <p>Kasta tärningen och samla poäng, först till 100 vinner.</p>
    <p>Blir slaget en etta förlorar du dina poäng i omgången. Kasta tärningen för att starta ny runda.<br>
    <p>Spara poängen du samlat när du själv vill.</p>


    <?= $app->game->getLinks() ?>

    <div class="game-result">
        <?= $app->game->getHTML() ?>
    </div>

</article>
