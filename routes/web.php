<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('pagina-home');

Route::get('/prodotti', function () {
    $pasta = [
        [
        'src' => 'https://www.lamolisana.it/wp-content/uploads/2017/06/6-linguine-m.jpg',
        "src-h" => "https://www.lamolisana.it/wp-content/uploads/2017/06/4-spaghetto-quadrato-bucatoh.jpg",
        "src-p" => "https://www.lamolisana.it/wp-content/uploads/2017/06/4-spaghetto-quadrato-bucatop.jpg",
        "titolo" => "N.4 Spaghetto Quadrato Bucato",
        "tipo" => "lunga",
        "cottura" => "6 min",
        "peso" => "500g",
        "descrizione"=> "È la vera rivelazione della gamma! Lo Spaghetto Quadrato Bucato n.4 fa pensare
        subito ad una pasta molto succulenta che ha lo stesso potenziale dello Spaghetto Quadrato (N.1 Spaghetto
        Quadrato). La sua consistenza soda si sprigiona in bocca con un’esplosione di emozioni, grazie agli spes
        sori corposi, al colore elegantemente ambrato, alla texture delicatamente ruvida, cangiante e piacevolis
        sima al tatto che trattiene il condimento sulla superficie. <br> Da provare per rivoluzionare le sorti d
        el primo piatto sia a casa che al ristorante.Dedicato a chi in cucina ama sperimentare nuove forme del g
        usto, ma vuole stupire affidandosi ad una pasta che garantisce ottime performance in cottura, lo Spaghet
        to Quadrato Bucato n .4 è il formato perfetto che racchiude tutte caratteristiche uniche di Pasta La Mol
        isana. <br> Da provare per quelli che… il Bucatino già mi piace, lo Spaghetto Quadrato Bucato n .4 sarà
        il paradiso della pasta!"
        ],
        [
        "src"=> "https://www.lamolisana.it/wp-content/uploads/2017/06/5-fettuccine-m.jpg",
        "src-h"=> "https://www.lamolisana.it/wp-content/uploads/2017/06/5-fettuccine-h.jpg",
        "src-p"=> "https://www.lamolisana.it/wp-content/uploads/2017/06/5-fettuccine-p-2018.jpg",
        "titolo"=> "N.5 Fettuccine",
        "tipo"=> "lunga",
        "cottura"=> "13 min",
        "peso"=> "500g",
        "descrizione"=> "Forse di origine romana le fettuccine hanno sicuramente natali centromeridionali, ma la versione più famosa in tutto il mondo è quella delle Fettuccine alla Alfredo. Un prim
        o piatto veloce e facile da realizzare con burro e parmigiano che delizia il palato grazie alla succulen
        ta emulsione di formaggio che avvolge la pasta con una crema liscia e vellutata. <br> Molto amate anche
        le fettuccine ai funghi o alla boscaiola, oppure nella versione più semplice al limone o al tartufo. Le
        nostre fettuccine sono disponibili sia nella versione di semola che all’uovo e sono entrambe perfette pe
        r salse dense che assorbono il sugo. <br> Noi le prepariamo con vongole, branzino e un misto di verdure
        aromatizzate allo zenzero, oppure sempre a base di pesce con cozze, calamari e gamberetti."
        ],
        [
        "src"=> "https://www.lamolisana.it/wp-content/uploads/2017/06/6-linguine-m.jpg",
        "src-h"=> "https://www.lamolisana.it/wp-content/uploads/2017/06/6-linguine-h.jpg",
        "src-p"=> "https://www.lamolisana.it/wp-content/uploads/2017/06/6-linguine-p-2018.jpg",
        "titolo"=> "N.6 Linguine",
        "tipo"=> "lunga",
        "cottura"=> "12 min",
        "peso"=> "500g",
        "descrizione"=> "Nel nostro Molino, situato a 500 m di distanza dal Pastificio di Campobasso, in
        izia il processo di trasformazione del grano duro, selezionato con cura maniacale ed una competenza tram
        andata da 4 generazioni. Il chicco, prima di essere macinato, viene decorticato a pietra e purificato co
        n cura, raggiungendo standard di sicurezza e salubrità altissimi. <br> Il risultato delle numerose fasi
        di macinazione è una semola purissima, dal colore giallo ambrato, dalla consistenza piacevolmente granul
        osa, perfetta per essere impastata con le acque dalle caratteristiche oligominerali originate nel cuore
        del Massiccio del Matese. Il Molise, infatti, è per le sue caratteristiche fisiche una terra ideale per
        la produzione di pasta, come testimonia il proliferare di opifici e molini già agli inizi del secolo sco
        rso.Un’ importante tradizione di maccaronai che La Molisana ha raccolto e perpetuato nel segno della Qua
        lità. <br> Questa è la materia prima che caratterizza la nostra pasta, un prodotto ricco di alte protein
        e, che tiene perfettamente la cottura, dalla superficie dolcemente rugosa che attira e trattiene sapient
        emente i condimenti ed è adatta ad ogni tipo di preparazione.Come le nostre Linguine 6. <br> Note anche
        con il nome di bavette o trenette, le linguine appartengono alla stessa famiglia degli spaghetti, da cui
        si differenziano per la sezione che, anziché essere cilindrica, è piatta.In pratica è uno spaghetto schi
        acciato a sezione rettangolare con uno spessore medio.Rispetto alle linguine, le trenette hanno una sezi
        one quadrata, uno spessore maggiore ed una minore larghezza.Il formato sembra avere origini liguri, in p
        articolare genovesi ed è notoriamente abbinato al pesto o ai sughi di pesce. <br> Nell\'immaginario coll
        ettivo sono associate ad un abbinamento di pesce: linguine all\'astice oppure allo scoglio o ancora ai f
        rutti di mare, agli scampi e vongole o anche semplicemente al limone.Da provare la ricetta delle linguin
        e al nero di seppia. <br> Le nostre Linguine 6 al bronzo sono piacevolmente corpose, leggermente più spe
        sse di quella classiche e perfette se abbinate a prosciutto croccante e perle di melone."
        ],
        [
        "src"=> "https://www.lamolisana.it/wp-content/uploads/2017/06/7-mezze-linguine-m.jpg",
        "src-h"=> "https://www.lamolisana.it/wp-content/uploads/2017/06/7-mezze-linguine-h.jpg",
        "src-p"=> "https://www.lamolisana.it/wp-content/uploads/2017/06/7-mezze-linguine-p-2018.jpg",
        "titolo"=> "N.7 Mezze Linguine",
        "tipo"=> "lunga",
        "cottura"=> "11 min",
        "peso"=> "500g",
        "descrizione"=> "Non ci stancheremo mai di dire che se c’è qualcosa che ci rende diversi dagli a
        ltri è la possibilità di offrire un prodotto di cui controlliamo l’intero processo di produzione. Questa
        cura, che parte dal chicco di grano ed arriva fino alla tavola, rappresenta per il consumatore una certe
        zza=> tracciabilità e trasparenza. Questo asset che appartiene solo al 10% delle aziende del settore agr
        oalimentare, è una garanzia di Qualità costante e controllata sia di prodotto che di processo. <br> Appa
        rtengono al nostro assortimento di paste classiche, le Mezze linguine 7 della stessa famiglia delle ling
        uine, da cui differiscono per la larghezza leggermente inferiore.Una caratteristica che offre il vantagg
        io della maggiore facilità di“ arrotolamento” intorno forchetta tipico della pasta a sezione piatta. <br
        > Sono versatili e particolarmente amate con le preparazioni a base di pesce come ad esempio con gamberi
        e radicchio o tonno e pomodori. <br> Le nostre Mezze linguine 7 sono trafilate al bronzo e hanno una tex
        ture ruvida che cattura il condimento.A noi piacciono abbinate alla colatura di alici e ad un buon bicch
        iere di vino bianco!"
        ],
        [
        "src"=> "https://www.lamolisana.it/wp-content/uploads/2017/06/11-spaghettino-quadrato-m.jpg",
        "src-h"=> "https://www.lamolisana.it/wp-content/uploads/2017/06/11-spaghettino-quadrato-h.jpg",
        "src-p"=> "https://www.lamolisana.it/wp-content/uploads/2017/06/11-spaghettino-quadrato-p.jpg",
        "titolo"=> "n.11 Spaghettino Quadrato",
        "tipo"=> "lunga",
        "cottura"=> "9 min",
        "peso"=> "500g",
        "descrizione"=> "Figlio di cotanto padre, lo Spaghettino Quadrato 11, è venuto al mondo per acco
        ntentare quei pochi che non si erano innamorati dello Spaghetto Quadrato per via dello spessore esagerat
        o. Con i suoi 1.75 centimetri di spessore lo spaghettino va benissimo per quelli che… less is more!<br>
        È superversatile e si presta perfettamente a tutte le possibili ricette: leggere e vegetariane, condimen
        ti cremosi e ricchi di ingredienti.Se spezzato, lo Spaghettino Quadrato 11, può accompagnare brodetti di
        pesce e arrotolato può accogliere come un nido i condimenti più svariati…<br> Insomma, lo Spaghettino Qu
        adrato 11 de La Molisana è destinato a grandi cose. Il nostro chef lo propone in una ricetta delicatissi
        ma, ma succulenta, con tocchetti di filetto di cernia profumato al basilico e straccetti di burrata pugl
        iese.Il tutto completato da preziose gocce di caviale di peperoncino."
        ],
        [
        "src"=> "https://www.lamolisana.it/wp-content/uploads/2019/02/38-mezze-maniche-m.jpg",
        "src-h"=> "https://www.lamolisana.it/wp-content/uploads/2019/02/38-mezze-maniche-h.jpg",
        "src-p"=> "https://www.lamolisana.it/wp-content/uploads/2019/02/38-mezze-maniche-p.jpg",
        "titolo"=> "N.38 Mezze maniche",
        "tipo"=> "corta",
        "cottura"=> "12 min",
        "peso"=> "500g",
        "descrizione"=> "In tutte le espressioni artistiche, come nel mondo della pasta, sono i dettagli
        a fare la differenza, per questo non potevano mancare in assortimento le Mezze Maniche 38, a completare
        l\'offerta delle corte bucate e rigate, accanto ai rigatoni e ai mezzi rigatoni.<br> A rendere questo fo
        rmato unico è la rigatura leggermente più larga che sembra dilatare la superficie e fare spazio al condi
        mento, il quale lega ancora di più con la texture ruvida.Appena più corte e dal diametro un po\' più lar
        go, le Mezze Maniche 38 diventano una declinazione raffinata per palati attenti.<br> Roma ha dedicato a
        questa pasta ricette iconiche che hanno fatto la storia della gastronomia italiana: dalla gricia, ovvero
        l\'amatriciana in bianco, alla carbonara, dalla pasta alla norma fino alla norcina, le mezze maniche sem
        brano abbinarsi perfettamente alle preparazioni della tradizione."
        ],
        [
        "src"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/44-sedani-m.jpg",
        "src-h"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/44-sedani-h.jpg",
        "src-p"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/44-sedani-p-2018.jpg",
        "titolo"=> "N.44 Sedani",
        "tipo"=> "corta",
        "cottura"=> "8 min",
        "peso"=> "500g",
        "descrizione"=> "La semola che viene utilizzata per produrre pasta La Molisana presenta le migli
        ori caratteristiche qualitative che si identificano in un colore giallo paglierino, che riflette il colo
        re dei campi, nella purezza e nell’alto valore nutritivo.<br>La semola, alla stregua del grano, si compo
        ne di Carboidrati e Proteine.I primi sono rappresentati dall’ amido, le seconde prevalentemente dal Glut
        ine e per la parte restante da proteine minori, ma ugualmente importanti.Le proteine della pasta La Moli
        sana si caratterizzano per: <ol><li>elevato contenuto, mai inferiore al 14 % a fronte del minimo di legg
        e del 10, 5 %</li><li>elevata tenacità</li></ol> Due aspetti essenziali che definiscono la pasta di qual
        ità e rendono La Molisana una pasta speciale, come i nostri Sedani Rigati 44. In passato erano noti come
        zanne di elefante, per via della leggera curvatura, poi hanno preso il nome di sedani rigati per via del
        la rigatura che ricorda appunto quell’ ortaggio!<br>Molto simili ai maccheroni, però più delicati nella
        forma, i Sedani Rigati 44 sono presenti sia nella gamma retail che in quella della ristorazione.<br>Agli
        chef e ai professionisti della cucina particolarmente esigenti che lavorano con tempi molto stretti e ri
        chiedono alla pasta affidabilità nei processi di trasformazione, i nostri Sedani Rigati 44<br>garantisco
        no ottime prestazioni sia in cottura espressa che in doppia cottura, inoltre una texture sempre al dent
        e, grazie ad un indice proteico del 14, 5%, ed una superficie deliziosamente ruvida che cattura il condi
        mento grazie alla trafilatura al bronzo."
        ],
        [
        "src"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/49-sedanini-m.jpg",
        "src-h"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/49-sedanini-h.jpg",
        "src-p"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/49-sedanini-p-2018.jpg",
        "titolo"=> "N.49 Sedanini",
        "tipo"=> "corta",
        "cottura"=> "8 min",
        "peso"=> "500g",
        "descrizione"=> "La semola che viene utilizzata per produrre pasta La Molisana presenta le migli
        ori caratteristiche qualitative che si identificano in un colore giallo paglierino, che riflette il colo
        re dei campi, nella purezza e nell’alto valore nutritivo.<br>La semola, alla stregua del grano, si compo
        ne di Carboidrati e Proteine.I primi sono rappresentati dall’ amido, le seconde prevalentemente dal Glut
        ine e per la parte restante da proteine minori, ma ugualmente importanti.Le proteine della pasta La Moli
        sana si caratterizzano per: <ol><li>elevato contenuto, mai inferiore al 14 % a fronte del minimo di legg
        e del 10, 5 %</li><li>elevata tenacità</li></ol> Due aspetti essenziali che definiscono la pasta di qual
        ità e rendono La Molisana una pasta speciale, come i nostri Sedani Rigati 44. In passato erano noti come
        zanne di elefante, per via della leggera curvatura, poi hanno preso il nome di sedani rigati per via del
        la rigatura che ricorda appunto quell’ ortaggio!<br>Molto simili ai maccheroni, però più delicati nella
        forma, i Sedani Rigati 44 sono presenti sia nella gamma retail che in quella della ristorazione.<br>Agli
        chef e ai professionisti della cucina particolarmente esigenti che lavorano con tempi molto stretti e ri
        chiedono alla pasta affidabilità nei processi di trasformazione, i nostri Sedani Rigati 44<br>garantisco
        no ottime prestazioni sia in cottura espressa che in doppia cottura, inoltre una texture sempre al dent
        e, grazie ad un indice proteico del 14, 5%, ed una superficie deliziosamente ruvida che cattura il condi
        mento grazie alla trafilatura al bronzo."
        ],
        [
        "src"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/53-lumachine-m.jpg",
        "src-h"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/53-lumachine-h.jpg",
        "src-p"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/53-lumachine-p-2018.jpg",
        "titolo"=> "N.53 Lumachine",
        "tipo"=> "corta",
        "cottura"=> "12 min",
        "peso"=> "500g",
        "descrizione"=>"Molti formati di pasta hanno preso il nome della realtà che ci circonda. Dalla n
        atura arrivano lumache, lumachine, lisce o rigate. Le nostre Lumachine 53 hanno davvero una forma molto
        graziosa, sembrano dei piccoli gioielli da indossare, forse per la fattura perfetta, per la compattezza
        e il dolce colore ambrato.<br>Ai più piccoli piacciono molto perché sembrano docili conchiglie dorate, c
        he noi proponiamo con una saporita ricetta a base di pesce.<br>Mentre la pasta cuoce brevemente, si prep
        ara un sughetto veloce e succulento, tagliando le melanzane a cubetti e cuocendole in olio extra vergine
        di oliva e saltando in padella con del pomodorino fresco e un rametto di timo, un trancio di pesce spada
        pulito e privato dell’ osso centrale.Quando la pasta è cotta al dente, si amalgama tutto e si serve… i b
        ambini impazziranno!"
        ],
        [
        "src"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/55-chifferi-rigati-m.jpg",
        "src-h"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/55-chifferi-rigati-h.jpg",
        "src-p"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/55-chifferi-rigati-p-2018.jpg",
        "titolo"=> "N.55 Chifferi rigati",
        "tipo"=> "corta",
        "cottura"=> "12 min",
        "peso"=> "500g",
        "descrizione"=> "Di etimo probabilmente straniero, i chifferi hanno una forma decisamente partic
        olare che ricorda una conchiglia di medie dimensioni pronta ad accogliere nelle sue cavità succulenti su
        ghi e condimenti. Come tutto il resto della gamma, anche i Chifferi rigati 55 nascono dal grano più preg
        iato al mondo.<br>Lo stesso inconfondibile tesoro che da oltre un secolo è il protagonista di una storia
        straordinaria che si rinnova grazie alla generosità di uomini e donne che amano il loro lavoro, al profo
        ndo rispetto per il tempo e l’ esperienza centenaria di una famiglia di maestri mugnai.Tutto questo è La
        Molisana, tutto questo è quello che da oltre 100 anni portiamo sulla vostra tavola."
        ],
        [
        "src"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/58-misto-corto-m.jpg",
        "src-h"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/58-misto-corto-h.jpg",
        "src-p"=> "https://www.lamolisana.it/wp-content/uploads/2017/07/58-misto-corto-p.jpg",
        "titolo"=> "N.58 Misto corto",
        "tipo"=> "corta",
        "cottura"=> "9 min",
        "peso"=> "500g",
        "descrizione"=> "Incontrare tanti formati di pasta diversi… in un solo pack è un\'idea assoluta
        mente originale! Ogni singolo formato è stato scelto e abbinato con cura, studiando il giusto equilibrio
        tra affinità e differenze, per ottenere un prodotto versatile, originale e gustosissimo.<br> Questa è la
        nostra mission… portare quotidianamente sulla tavola una pasta di Qualità, intesa prima di tutto come im
        pegno di natura etica, fondamento su cui costruiamo il nostro business.<br> Da oltre 100 anni l\'amore p
        er la Qualità si è rinnovato ed è maturato, un sentimento che ci induce a compiere tutto con passione e
        nel modo migliore, attratti da una formula naturale, semplice quanto incredibile: acqua e semola!"
        ],
        [
        "src"=> "https://www.lamolisana.it/wp-content/uploads/2018/06/84-ditale-quadrato-m.jpg",
        "src-h"=> "https://www.lamolisana.it/wp-content/uploads/2018/06/84-ditale-quadrato-h.jpg",
        "src-p"=> "https://www.lamolisana.it/wp-content/uploads/2018/06/84-ditale-quadrato-p.jpg",
        "titolo"=> "N.84 Ditale Quadrato",
        "tipo"=> "cortissima",
        "cottura"=> "12 min",
        "peso"=> "500g",
        "descrizione"=> "Altro elemento cult della famiglia de lo Spaghetto Quadrato (N.1 Spaghetto Quad
        rato. Una new entry che sarà molto apprezzata sia dai consumatori che dagli chef, perché il Ditale Quadr
        ato è un formato deliziosamente piccolo ma sostanzioso.<br>A dispetto del nome che fa pensare ad una pas
        tina è un formato di pasta assolutamente versatile, adatto a moltissime ricette di primi piatti.<br>La s
        ua consistenza soda si sprigiona in bocca con un\'esplosione di emozioni, grazie agli spessori corposi,
        al colore elegantemente ambrato, alla texture delicatamente ruvida, cangiante e piacevolissima al tatto
        che trattiene il condimento sulla superficie.<br>Il Ditale Quadrato sembra ideale per preparazioni strut
        turate come la ricetta con crema di broccoletto siciliano, calamari e pomodori semi secchi profumata al
        limone e carbone d\'olive nere."
        ]
    ];
    $data = ['formati' => $pasta];
    return view('/products', $data);
})->name('pagina-prodotti');

Route::get('/notizie', function () {
    return view('news');
})->name('pagina-notizie');
