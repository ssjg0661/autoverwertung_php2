<?php 
require_once __DIR__ . '/../config/contentAutoverwertung.php';

require_once __DIR__ . '/../src/components/header.php';
require_once __DIR__ . '/../src/components/secondaryHero.php';

?>

<div class="container mx-auto">
   <div class="p-6 md:p-10">
      <!-- Header -->
      <h1 class="text-3xl font-bold text-gray-900 mb-6">Datenschutzerklärung</h1>
      <!-- Introduction -->
      <div class="space-y-4 text-gray-700 leading-relaxed mb-8">
         <p>Personenbezogene Daten (nachfolgend zumeist nur „Daten" genannt) werden von uns nur im Rahmen der Erforderlichkeit sowie zum Zwecke der Bereitstellung eines funktionsfähigen und nutzerfreundlichen Internetauftritts, inklusive seiner Inhalte und der dort angebotenen Leistungen, verarbeitet.</p>
         <p>Gemäß Art. 4 Ziffer 1. der Verordnung (EU) 2016/679, also der Datenschutz-Grundverordnung (nachfolgend nur „DSGVO" genannt), gilt als „Verarbeitung" jeder mit oder ohne Hilfe automatisierter Verfahren ausgeführter Vorgang oder jede solche Vorgangsreihe im Zusammenhang mit personenbezogenen Daten, wie das Erheben, das Erfassen, die Organisation, das Ordnen, die Speicherung, die Anpassung oder Veränderung, das Auslesen, das Abfragen, die Verwendung, die Offenlegung durch Übermittlung, Verbreitung oder eine andere Form der Bereitstellung, den Abgleich oder die Verknüpfung, die Einschränkung, das Löschen oder die Vernichtung.</p>
         <p>Mit der nachfolgenden Datenschutzerklärung informieren wir Sie insbesondere über Art, Umfang, Zweck, Dauer und Rechtsgrundlage der Verarbeitung personenbezogener Daten, soweit wir entweder allein oder gemeinsam mit anderen über die Zwecke und Mittel der Verarbeitung entscheiden. Zudem informieren wir Sie nachfolgend über die von uns zu Optimierungszwecken sowie zur Steigerung der Nutzungsqualität eingesetzten Fremdkomponenten, soweit hierdurch Dritte Daten in wiederum eigener Verantwortung verarbeiten.</p>
         <p class="font-semibold">Unsere Datenschutzerklärung ist wie folgt gegliedert:</p>
         <p>I. Informationen über uns als Verantwortliche<br>
            II. Rechte der Nutzer und Betroffenen<br>
            III. Informationen zur Datenverarbeitung
         </p>
      </div>
      <!-- Section I -->
      <section class="mb-8">
         <h2 class="text-2xl font-bold text-gray-900 mb-4">I. Informationen über uns als Verantwortliche</h2>
         <p class="text-gray-700 mb-4">Verantwortlicher Anbieter dieses Internetauftritts im datenschutzrechtlichen Sinne ist:</p>
         <div class="bg-gray-50 p-4 rounded-lg text-gray-700">
            <p class="font-semibold">Autoankauf <?= $cityName ?></p>
            <p><?= $adresse ?></p>
            <p class="mb-3"><?= $plz ?></p>
            <p>Telefon: <a href="tel:<?= $phone3 ?>" class="text-blue-600 hover:text-blue-800 hover:underline"><?= $phone1 ?></a></p>
            <p>E-Mail: <a href="mailto:<?= $email ?>" class="text-blue-600 hover:text-blue-800 hover:underline"><?= $email ?></a></p>
         </div>
      </section>
      <!-- Section II -->
      <section class="mb-8">
         <h2 class="text-2xl font-bold text-gray-900 mb-4">II. Rechte der Nutzer und Betroffenen</h2>
         <div class="space-y-4 text-gray-700 leading-relaxed">
            <p>Mit Blick auf die nachfolgend noch näher beschriebene Datenverarbeitung haben die Nutzer und Betroffenen das Recht</p>
            <div class="pl-4 space-y-2">
               <p>• auf Bestätigung, ob sie betreffende Daten verarbeitet werden, auf Auskunft über die verarbeiteten Daten, auf weitere Informationen über die Datenverarbeitung sowie auf Kopien der Daten (vgl. auch Art. 15 DSGVO);</p>
               <p>• auf Berichtigung oder Vervollständigung unrichtiger bzw. unvollständiger Daten (vgl. auch Art. 16 DSGVO);</p>
               <p>• auf unverzügliche Löschung der sie betreffenden Daten (vgl. auch Art. 17 DSGVO), oder, alternativ, soweit eine weitere Verarbeitung gemäß Art. 17 Abs. 3 DSGVO erforderlich ist, auf Einschränkung der Verarbeitung nach Maßgabe von Art. 18 DSGVO;</p>
               <p>• auf Erhalt der sie betreffenden und von ihnen bereitgestellten Daten und auf Übermittlung dieser Daten an andere Anbieter/Verantwortliche (vgl. auch Art. 20 DSGVO);</p>
               <p>• auf Beschwerde gegenüber der Aufsichtsbehörde, sofern sie der Ansicht sind, dass die sie betreffenden Daten durch den Anbieter unter Verstoß gegen datenschutzrechtliche Bestimmungen verarbeitet werden (vgl. auch Art. 77 DSGVO).</p>
            </div>
            <p>Darüber hinaus ist der Anbieter dazu verpflichtet, alle Empfänger, denen gegenüber Daten durch den Anbieter offengelegt worden sind, über jedwede Berichtigung oder Löschung von Daten oder die Einschränkung der Verarbeitung, die aufgrund der Artikel 16, 17 Abs. 1, 18 DSGVO erfolgt, zu unterrichten. Diese Verpflichtung besteht jedoch nicht, soweit diese Mitteilung unmöglich oder mit einem unverhältnismäßigen Aufwand verbunden ist. Unbeschadet dessen hat der Nutzer ein Recht auf Auskunft über diese Empfänger.</p>
            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 my-4">
               <p class="font-semibold">Ebenfalls haben die Nutzer und Betroffenen nach Art. 21 DSGVO das Recht auf Widerspruch gegen die künftige Verarbeitung der sie betreffenden Daten, sofern die Daten durch den Anbieter nach Maßgabe von Art. 6 Abs. 1 lit. f) DSGVO verarbeitet werden. Insbesondere ist ein Widerspruch gegen die Datenverarbeitung zum Zwecke der Direktwerbung statthaft.</p>
            </div>
         </div>
      </section>
      <!-- Section III -->
      <section class="mb-8">
         <h2 class="text-2xl font-bold text-gray-900 mb-6">III. Informationen zur Datenverarbeitung</h2>
         <p class="text-gray-700 leading-relaxed mb-6">Ihre bei Nutzung unseres Internetauftritts verarbeiteten Daten werden gelöscht oder gesperrt, sobald der Zweck der Speicherung entfällt, der Löschung der Daten keine gesetzlichen Aufbewahrungspflichten entgegenstehen und nachfolgend keine anderslautenden Angaben zu einzelnen Verarbeitungsverfahren gemacht werden.</p>
         <!-- Kontaktanfragen -->
         <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Kontaktanfragen / Kontaktmöglichkeit</h3>
            <div class="space-y-3 text-gray-700 leading-relaxed">
               <p>Sofern Sie per Kontaktformular oder E-Mail mit uns in Kontakt treten, werden die dabei von Ihnen angegebenen Daten zur Bearbeitung Ihrer Anfrage genutzt. Die Angabe der Daten ist zur Bearbeitung und Beantwortung Ihre Anfrage erforderlich – ohne deren Bereitstellung können wir Ihre Anfrage nicht oder allenfalls eingeschränkt beantworten.</p>
               <p>Rechtsgrundlage für diese Verarbeitung ist Art. 6 Abs. 1 lit. b) DSGVO.</p>
               <p>Ihre Daten werden gelöscht, sofern Ihre Anfrage abschließend beantwortet worden ist und der Löschung keine gesetzlichen Aufbewahrungspflichten entgegenstehen, wie bspw. bei einer sich etwaig anschließenden Vertragsabwicklung.</p>
            </div>
         </div>
         <!-- Stellenbewerbungen -->
         <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Online-Stellenbewerbungen / Veröffentlichung von Stellenanzeigen</h3>
            <div class="space-y-3 text-gray-700 leading-relaxed">
               <p>Wir bieten Ihnen die Möglichkeit an, sich bei uns über unseren Internetauftritt bewerben zu können. Bei diesen digitalen Bewerbungen werden Ihre Bewerber- und Bewerbungsdaten von uns zur Abwicklung des Bewerbungsverfahrens elektronisch erhoben und verarbeitet.</p>
               <p>Rechtsgrundlage für diese Verarbeitung ist § 26 Abs. 1 S. 1 BDSG i.V.m. Art. 88 Abs. 1 DSGVO.</p>
               <p>Sofern nach dem Bewerbungsverfahren ein Arbeitsvertrag geschlossen wird, speichern wir Ihre bei der Bewerbung übermittelten Daten in Ihrer Personalakte zum Zwecke des üblichen Organisations- und Verwaltungsprozesses – dies natürlich unter Beachtung der weitergehenden rechtlichen Verpflichtungen.</p>
               <p>Rechtsgrundlage für diese Verarbeitung ist ebenfalls § 26 Abs. 1 S. 1 BDSG i.V.m. Art. 88 Abs. 1 DSGVO.</p>
               <p>Bei der Zurückweisung einer Bewerbung löschen wir die uns übermittelten Daten automatisch zwei Monate nach der Bekanntgabe der Zurückweisung. Die Löschung erfolgt jedoch nicht, wenn die Daten aufgrund gesetzlicher Bestimmungen, bspw. wegen der Beweispflichten nach dem AGG, eine längere Speicherung von bis zu vier Monaten oder bis zum Abschluss eines gerichtlichen Verfahrens erfordern.</p>
               <p>Rechtsgrundlage ist in diesem Fall Art. 6 Abs. 1 lit. f) DSGVO und § 24 Abs. 1 Nr. 2 BDSG. Unser berechtigtes Interesse liegt in der Rechtsverteidigung bzw. -durchsetzung.</p>
               <p>Sofern Sie ausdrücklich in eine längere Speicherung Ihrer Daten einwilligen, bspw. für Ihre Aufnahme in eine Bewerber- oder Interessentendatenbank, werden die Daten aufgrund Ihrer Einwilligung weiterverarbeitet. Rechtsgrundlage ist dann Art. 6 Abs. 1 lit. a) DSGVO. Ihre Einwilligung können Sie aber natürlich jederzeit nach Art. 7 Abs. 3 DSGVO durch Erklärung uns gegenüber mit Wirkung für die Zukunft widerrufen.</p>
            </div>
         </div>
         <!-- Google Analytics -->
         <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Google Analytics</h3>
            <div class="space-y-3 text-gray-700 leading-relaxed">
               <p>In unserem Internetauftritt setzen wir Google Analytics ein. Hierbei handelt es sich um einen Webanalysedienst der Google Ireland Limited, Gordon House, Barrow Street, Dublin 4, Irland, nachfolgend nur „Google" genannt.</p>
               <p>Der Dienst Google Analytics dient zur Analyse des Nutzungsverhaltens unseres Internetauftritts. Rechtsgrundlage ist Art. 6 Abs. 1 lit. f) DSGVO. Unser berechtigtes Interesse liegt in der Analyse, Optimierung und dem wirtschaftlichen Betrieb unseres Internetauftritts.</p>
               <p>Nutzungs- und nutzerbezogene Informationen, wie bspw. IP-Adresse, Ort, Zeit oder Häufigkeit des Besuchs unseres Internetauftritts, werden dabei an einen Server von Google in den USA übertragen und dort gespeichert. Allerdings nutzen wir Google Analytics mit der sog. Anonymisierungsfunktion. Durch diese Funktion kürzt Google die IP-Adresse schon innerhalb der EU bzw. des EWR.</p>
               <p>Die so erhobenen Daten werden wiederum von Google genutzt, um uns eine Auswertung über den Besuch unseres Internetauftritts sowie über die dortigen Nutzungsaktivitäten zur Verfügung zu stellen. Auch können diese Daten genutzt werden, um weitere Dienstleistungen zu erbringen, die mit der Nutzung unseres Internetauftritts und der Nutzung des Internets zusammenhängen.</p>
               <p>Google gibt an, Ihre IP-Adresse nicht mit anderen Daten zu verbinden. Zudem hält Google unter</p>
               <p><a href="https://www.google.com/intl/de/policies/privacy/partners" target="_blank" rel="noopener nofollow" class="text-blue-600 hover:text-blue-800 hover:underline break-all">https://www.google.com/intl/de/policies/privacy/partners</a></p>
               <p>weitere datenschutzrechtliche Informationen für Sie bereit, so bspw. auch zu den Möglichkeiten, die Datennutzung zu unterbinden.</p>
               <p>Zudem bietet Google unter</p>
               <p><a href="https://tools.google.com/dlpage/gaoptout?hl=de" target="_blank" rel="noopener nofollow" class="text-blue-600 hover:text-blue-800 hover:underline break-all">https://tools.google.com/dlpage/gaoptout?hl=de</a></p>
               <p>ein sog. Deaktivierungs-Add-on nebst weiteren Informationen hierzu an. Dieses Add-on lässt sich mit den gängigen Internet-Browsern installieren und bietet Ihnen weitergehende Kontrollmöglichkeit über die Daten, die Google bei Aufruf unseres Internetauftritts erfasst. Dabei teilt das Add-on dem JavaScript (ga.js) von Google Analytics mit, dass Informationen zum Besuch unseres Internetauftritts nicht an Google Analytics übermittelt werden sollen. Dies verhindert aber nicht, dass Informationen an uns oder an andere Webanalysedienste übermittelt werden. Ob und welche weiteren Webanalysedienste von uns eingesetzt werden, erfahren Sie natürlich ebenfalls in dieser Datenschutzerklärung.</p>
            </div>
         </div>
         <!-- Google AdSense -->
         <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Google AdSense</h3>
            <div class="space-y-3 text-gray-700 leading-relaxed">
               <p>In unserem Internetauftritt setzen wir zur Einbindung von Werbeanzeigen Google AdSense ein. Es handelt sich hierbei um einen Dienst der Google Ireland Limited, Gordon House, Barrow Street, Dublin 4, Irland, nachfolgend nur „Google" genannt.</p>
               <p>Durch Google AdSense werden Cookies sowie sog. Web Beacons über Ihren Internet-Browser auf Ihrem Endgerät gespeichert. Hierdurch ermöglicht uns Google die Analyse der Nutzung unseres Internetauftritts durch Sie. Die so erfassten Informationen werden neben Ihrer IP-Adresse und der Ihnen angezeigten Werbeformate an Google in die USA übertragen und dort gespeichert. Ferner kann Google diese Informationen an Vertragspartner weitergeben. Google erklärt allerdings, dass Ihre IP-Adresse nicht mit anderen Daten von Ihnen zusammengeführt würden.</p>
               <p>Im Falle einer von Ihnen erteilten Einwilligung für diese Verarbeitung ist Rechtsgrundlage Art. 6 Abs. 1 lit. a DSGVO. Rechtsgrundlage kann auch Art. 6 Abs. 1 lit. f DSGVO sein. Unser berechtigtes Interesse liegt in der Analyse, Optimierung und dem wirtschaftlichen Betrieb unseres Internetauftritts.</p>
               <p>Sofern Sie mit dieser Verarbeitung nicht einverstanden sind, haben Sie die Möglichkeit, die Installation der Cookies durch die entsprechenden Einstellungen in Ihrem Internet-Browser zu verhindern. Einzelheiten hierzu finden Sie vorstehend unter dem Punkt „Cookies".</p>
               <p>Zudem bietet Google unter</p>
               <p><a href="https://policies.google.com/privacy" target="_blank" rel="noopener nofollow" class="text-blue-600 hover:text-blue-800 hover:underline break-all">https://policies.google.com/privacy</a></p>
               <p><a href="https://adssettings.google.com/authenticated" target="_blank" rel="noopener nofollow" class="text-blue-600 hover:text-blue-800 hover:underline break-all">https://adssettings.google.com/authenticated</a></p>
               <p>weitere Informationen an und zwar insbesondere zu den Möglichkeiten der Unterbindung der Datennutzung.</p>
            </div>
         </div>
         <!-- WhatsApp -->
         <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">WhatsApp Kontaktaufnahme</h3>
            <div class="space-y-3 text-gray-700 leading-relaxed">
               <p>Zur Kontaktaufnahme ermöglicht der Anbieter dem Kunden unter anderem die Kontaktmöglichkeit über den Messenger-Dienst WhatsApp. WhatsApp ist ein Dienst der WhatsApp Ireland Limited, 4 Grand Canal Square, Grand Canal Harbour, Dublin 2, Irland, nachfolgend WhatsApp, eine Tochtergesellschaft von Facebook.</p>
               <p>Durch die Kommunikation des Nutzers mit dem Anbieter über WhatsApp erhält sowohl der Anbieter, als auch WhatsApp die Mobilrufnummer des Nutzers und die Information, dass der Nutzer den Anbieter kontaktiert hat.</p>
               <p>Die vorgenannten Daten werden von WhatsApp auch an Server von Facebook in den USA weitergeleitet und von WhatsApp und Facebook entsprechend der WhatsApp-Datenschutzrichtlinie verarbeitet, was auch die Verarbeitung zu deren eigenen Zwecken, wie der Verbesserung des WhatsApp-Dienstes, beinhaltet.</p>
               <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 my-4">
                  <p class="font-semibold">Die USA verfügen gegenwärtig nach Ansicht der Datenschutzaufsichtsbehörden allerdings nicht über ein angemessenes Datenschutzniveau. Es bestehen allerdings sogenannte Standardvertragsklauseln:</p>
                  <p class="mt-2"><a href="https://faq.whatsapp.com/general/about-standard-contractual-clauses" rel="nofollow noopener" target="_blank" class="text-blue-600 hover:text-blue-800 hover:underline break-all">https://faq.whatsapp.com/general/about-standard-contractual-clauses</a></p>
                  <p class="mt-2 font-semibold">Jedoch sind dies privatrechtliche Vereinbarungen und haben daher keine direkte Auswirkung auf die Zugriffsmöglichkeiten der Behörden in den USA.</p>
               </div>
               <p>Näheres zum Zweck und Umfang der Datenerhebung und der weiteren Verarbeitung dieser Daten durch WhatsApp und Facebook sowie diesbezügliche Rechte und Einstellungsmöglichkeiten zum Schutz der Privatsphäre sind in der Datenschutzrichtlinie von WhatsApp enthalten:</p>
               <p><a href="https://www.whatsapp.com/legal/#privacy-policy" rel="nofollow noopener" target="_blank" class="text-blue-600 hover:text-blue-800 hover:underline break-all">https://www.whatsapp.com/legal/#privacy-policy</a></p>
               <p>Rechtsgrundlage dieser Verarbeitungen und der Übermittlung an WhatsApp ist Art. 6 Abs. 1 S. 1 b. DSGVO, soweit die Kontaktaufnahme eine bestehende Vertragsbeziehung betrifft oder der Anbahnung einer solchen Vertragsbeziehung dient. Sollte die Kontaktaufnahme nicht aufgrund der vorstehenden Zwecke erfolgen, ist Rechtsgrundlage Art. 6 Abs. 1 lit. f DSGVO. Das berechtigte Interesse des Anbieters besteht an der Verbesserung der Servicequalität.</p>
            </div>
         </div>
      </section>
      <!-- Footer -->
      <div class="mt-8 pt-6 border-t border-gray-200 text-sm text-gray-600">
         <p>
            <a href="https://www.generator-datenschutzerklärung.de" target="_blank" rel="noopener" class="text-blue-600 hover:text-blue-800 hover:underline">Muster-Datenschutzerklärung</a> 
            der 
            <a href="https://www.ratgeberrecht.eu/datenschutz/datenschutzerklaerung-generator-dsgvo.html" target="_blank" rel="noopener" class="text-blue-600 hover:text-blue-800 hover:underline">Anwaltskanzlei Weiß & Partner</a>
         </p>
      </div>
   </div>
</div>


<?php require_once __DIR__ . '/../src/components/footer.php'; ?>