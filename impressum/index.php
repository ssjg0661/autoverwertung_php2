<?php 
require_once __DIR__ . '/../config/contentAutoverwertung.php';

require_once __DIR__ . '/../src/components/header.php';
require_once __DIR__ . '/../src/components/secondaryHero.php';
?>

<div class="container mx-auto">
   <div class="p-6 mdy:p-8">
      <!-- Header -->
      <div class="mb-6 pb-4 border-b border-gray-200">
         <h1 class="text-2xl font-bold text-gray-900 mb-4">Angaben gemäß § 5 TMG</h1>
         <div class="text-gray-700 space-y-1">
            <p class="font-semibold">Autoankauf <?= $cityName ?></p>
            <p><?= $adresse ?></p>
            <p><?= $plz?></p>
         </div>
         <div class="mt-4 space-y-1">
            <p>Telefon: <a href="tel:<?= $phone3 ?>" class="text-blue-600 hover:text-blue-800 hover:underline"><?= $phone1 ?></a></p>
            <p>E-Mail: <a href="mailto:<?= $email ?>" class="text-blue-600 hover:text-blue-800 hover:underline"><?= $email ?></a></p>
         </div>
      </div>
      <!-- Disclaimer Section -->
      <div class="space-y-6">
         <h2 class="text-xl font-bold text-gray-900 mb-4">Haftungsausschluss</h2>
         <!-- Haftung für Inhalte -->
         <section>
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Haftung für Inhalte</h3>
            <p class="text-gray-700 leading-relaxed">
               Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen. Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.
            </p>
         </section>
         <!-- Haftung für Links -->
         <section>
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Haftung für Links</h3>
            <p class="text-gray-700 leading-relaxed">
               Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.
            </p>
         </section>
         <!-- Urheberrecht -->
         <section>
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Urheberrecht</h3>
            <p class="text-gray-700 leading-relaxed">
               Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.
            </p>
         </section>
         <!-- Datenschutz -->
         <section>
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Datenschutz</h3>
            <p class="text-gray-700 leading-relaxed">
               Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder eMail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben. Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich. Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten durch Dritte zur Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit ausdrücklich widersprochen. Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.
            </p>
         </section>
         <!-- Google Analytics -->
         <section>
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Google Analytics</h3>
            <p class="text-gray-700 leading-relaxed">
               Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. (''Google''). Google Analytics verwendet sog. ''Cookies'', Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglicht. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website (einschließlich Ihrer IP-Adresse) wird an einen Server von Google in den USA übertragen und dort gespeichert. Google wird diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten für die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google diese Informationen gegebenenfalls an Dritte übertragen, sofern dies gesetzlich vorgeschrieben oder soweit Dritte diese Daten im Auftrag von Google verarbeiten. Google wird in keinem Fall Ihre IP-Adresse mit anderen Daten der Google in Verbindung bringen. Sie können die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website voll umfänglich nutzen können. Durch die Nutzung dieser Website erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden.
            </p>
         </section>
      </div>
      <!-- Footer -->
      <div class="mt-8 pt-6 border-t border-gray-200 text-sm text-gray-600">
         <p>
            Impressum vom 
            <a href="https://www.impressum-generator.de" class="text-blue-600 hover:text-blue-800 hover:underline">Impressum Generator</a> 
            der 
            <a href="https://www.kanzlei-hasselbach.de/" class="text-blue-600 hover:text-blue-800 hover:underline">Kanzlei Hasselbach, Rechtsanwälte für Arbeitsrecht und Familienrecht</a>
         </p>
      </div>
   </div>
</div>

<?php require_once __DIR__ . '/../src/components/footer.php'; ?>