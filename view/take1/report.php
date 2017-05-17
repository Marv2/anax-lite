<article>

    <header>
        <h1>Redovisning av moment i kursen oophp</h1>
    </header>

    <section>
        <h2>Kmom01</h2>
        <p><strong>Hur känns det att hoppa rakt in i klasser med PHP, gick det bra?</strong><br>Det gick ganska bra men uppgifterna var väldigt omfattande och lite väl vaga för min del. Jag hade bitvis svårt att förstå vad uppgiften går ut på som helhet och av det skälet också vad som ska göras. Uppgiften gissa numret upplevde jag som både väldigt vag och bestämd samtidigt och för mig hamnade fokus som det ofta gör mer på att försöka komma fram till vad som efterfrågas än att tänka kring själva lösningen. Stort tack för en bra genomgång!</p>
        <p><strong>Berätta om dina reflektioner kring ramverk, anax-lite och din me-sida.</strong><br>Jag har inte jobbat med ramverk tidigare bortsett från design-kursen. Det jag tänkte på är att flödet styrs från ramverket och det går att lägga till egen kod som ramverket kan använda. Jag uppfattar det som om att man skriver egna bibliotek/moduler till ramverket eller använder andras färdiga moduler. I övrigt antar jag att med erfarenhet av ramverk kan det spara mycket tid och att det som vanligt är en fråga om det behövs och att göra ett val. För me-sidan kändes det först lite konstigt att ha innehållet i vyerna men det kanske är rimligt för ett mindre projekt och här antar jag att det ska flyttas till en databas i senare uppgifter.</p>
        <p><strong>Gick det bra att komma igång med MySQL, har du liknande erfarenheter sedan tidigare?</strong><br>Det var inga större bekymmer, jag har använt språket tidigare men i mindre omfattning. Det var bra att börja använda och vänja sig vid refmanualen. </p>
    </section>

    <section>
        <h2>Kmom02</h2>
        <p><strong>Hur känns det att skriva kod utanför och inuti ramverket, ser du fördelar och nackdelar med de olika sätten?</strong>Eftersom Anax tillåter att man använder moduler som inte har någon koppling till ramveket känns det som ett ganska fritt om än lite ovant att organisera koden på. Att det går bra med php-kod i vyerna är nog både bra och dåligt. Generellt verkar fördelen med ramverk vara att man är snabbt på banan och nackdelen att de kan vara hårt styrda och kräver lite inlärning, som allt annat...</p>
        <p><strong>Hur väljer du att organisera dina vyer?</strong><br>Jag har behållit dem i routern och avvaktar lite med att organisera dem som layout.</p>
        <p><strong>Berätta om hur du löste integreringen av klassen Session.</strong><br>Session är integrerat som en del av $app men inte från frontcontrollern. Den instansieras är gjord i vyerna och jag har valt att behålla det så som exempel för mig själv, men kan flyttas till routen för att hålla vyerna rena, vyerna increment och decrement behövs egentligen inte alls eftersom de inte renderar någon sida utan gör redirect. </p>
        <p><strong>Berätta om hur du löste uppgiften med Tärningsspelet 100?</strong><br>Det hade fungerat att använda sessionsklassen som redan finns men eftersom den inte skulle ha några externa beroenden av andra klasser lade jag till en egen sessionklass i ”Modulen”. Sessionsobjektet instansieras i routern i $app och jag lade ett Gameobjekt i sessionen. Hela sessionsobjektet injectas i gameobjektets metod play, som sedan styr spelet. Spelets view är enkel att använda och gör enbart echo på de metoder i gameobjektet som skriver ut länkarna som styr spelet och resultatet av det.</p>
        <p>Det hade fungerat att använda sessionsklassen som redan finns men eftersom den inte skulle ha några externa beroenden av andra klasser lade jag till en egen sessionklass i ”Modulen”. Sessionsobjektet instansieras i routern i $app och jag lade ett Gameobjekt i sessionen. Hela sessionsobjektet injectas i gameobjektets metod play, som sedan styr spelet. Spelets view är enkel att använda och gör enbart echo på de metoder i gameobjektet som skriver ut länkarna som styr spelet och resultatet av det.</p>
        <p>Game och round har ett gemensamt interface som implementerar metoderna play och 	getTotal. Game har en arvsrelation till till sessionsobjektet som jag är osäker på om den 	behövs eftersom sessionsobjektet injectas i Game. Jag började med mer ganska mycket kod i 	routern eftersom det är tydligare vad den gör och har sedan försökt flytta den till klasserna. 	Min upplevelse är att jag har trasslat till objekten i onödigt många lager och att funktionalitet 	skulle kunna flyttas nedåt i klasshirearkin.</p>
        <p>Uppgiftens instruktioner var för mig alltför vaga och delvis motstridiga vad gäller  	prefektion kontra efter bästa förmåga. Jag förstod inte hur det var tänkt att koden skulle 	organiseras och skrev om den flera gånger utan att bli nöjd. Att pröva sig fram är på många 	sätt en 	bra metod, men för att bli meningsfull krävs det någon form av återkoppling. Jag skulle föredra återkoppling i form av genomgång av olika lösningar.</p>
        <p><strong>Några tankar kring SQL så här långt?</strong><br>SQL känns helt okej men ibland är det lite knepigt klura ut i vilken ordning saker ska göras i de mer komplxa frågorna.</p>
    </section>

    <section>
        <h2>Kmom03</h2>
        <p><strong></strong><br></p>
        <p><strong></strong><br></p>
        <p><strong></strong><br></p>
        <p><strong></strong><br></p>
    </section>

    <section>
        <h2>Kmom04</h2>
        <p><strong></strong><br></p>
        <p><strong></strong><br></p>
        <p><strong></strong><br></p>
        <p><strong></strong><br></p>
    </section>

    <section>
        <h2>Kmom05</h2>
        <p><strong></strong><br></p>
        <p><strong></strong><br></p>
        <p><strong></strong><br></p>
        <p><strong></strong><br></p>
    </section>

    <section>
        <h2>Kmom06</h2>
        <p><strong></strong><br></p>
        <p><strong></strong><br></p>
        <p><strong></strong><br></p>
        <p><strong></strong><br></p>
    </section>

    <section>
        <h2>Kmom07-10</h2>
        <p></p>
    </section>

</article>
