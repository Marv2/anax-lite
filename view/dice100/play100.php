<article>
    <h1>Tärningsspelet 100</h1>
    <p>Kasta tärningen och samla poäng, först till 100 vinner.</p>
    <p>Blir slaget en etta förlorar du dina poäng i rundan. Kasta tärningen för att starta ny runda.<br>
    <p>Spara poängen du samlat i rundan när du själv vill.</p>


    <ul class="game">
        <li class="color1"><a href="?roll=roll">Kasta tärningen</a></li>
        <li class="color2"><a href="?save=save">Spara dina poäng i rundan</a></li>
        <li class="color3"><a href="?new=new">Starta om spelet</a></li>
    </ul>

    <div>
        <?= $app->game->getHTML() ?>
    </div>
</article>
