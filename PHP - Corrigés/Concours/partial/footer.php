            <div>
        </div>

        <footer>
            <div>
                <h3>MVC complet en PHP, incluant session et fichiers</h3>
                <div>
                    L'objectif est de compléter ce site Web en utilisant la matière vue en classe (MVC, fichiers et variables de session). Ce site possède un formulaire d'inscription ainsi qu'une page de statistiques
                </div>
                <div>Étapes:</div>
                <ol>
                    <li>
                        Faire en sorte de sauvegarder les informations du formulaire dans un fichier.
                        <ol>
                            <li>Créer un fichier <code>action/DAO/StatsDAO.php</code>.</li>
                            <li>Dans ce fichier, créer la méthode statique <code>save($name, $roomType)</code>, qui permet d'ajouter une ligne dans un fichier texte avec ces informations (ex: <code>JohnSmith;Double;</code>). Dans mon exemple, le <code>;</code> est utilisé comme séparateur.</li>
                            <li>Dans l'action, si le formulaire a été rempli, alors appeler la méthode save() du DAO.</li>
                            <li>Ajouter une variable de session indiquant que la personne s'est inscrite au concours.</li>
                            <li>Si la personne s'est déjà inscrite au concours, alors elle ne peut pas se réinscrire. Un message d'erreur est affiché si elle tente de se réinscrire à nouveau.</li>
                        </ol>
                    </li>
                    <li>
                        Afficher les statistiques dans la page stats.php
                        <ol>
                            <li>Dans StatsDAO.php, créer les méthodes statiques <code>count()</code> et <code>countPerRoomType()</code>.</li>
                            <li><code>count()</code> permet de retourner le nombre de lignes dans le fichier des inscriptions.</li>
                            <li><code>countPerRoomType()</code> doit retourner un tableau avec le nombre de participation par type de chambre.</li>
                            <li>StatsAction.php doit appeler ces fonctions et les retourner à la vue via <code>compact()</code>.</li>
                            <li>Modifier stats.php afin d'afficher ces informations au lieu d'utiliser les valeurs <i>hardcodées</i>.</li>
                        </ol>
                    </li>
                </ol>
            </div>
        </footer>
    </body>
</html>