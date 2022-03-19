<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>TripReport - Ajouter un vol</title>
</head>
<body>
    <main>
        <h1>TripReport</h1>
        <hr>
        <h2>Ajouter un vol</h2>
        <p>Veuillez remplir les champs suivants</p><br>

        <form action="#" method="post">
            <label for="code">Code de vol :</label>
            <input type="text" name="code" placeholder="Code de vol" required>
            <label for="flightnumber">Numéro de vol :</label>
            <input type="text" name="flightnumber" placeholder="Numéro de vol" required><br>

            <label for="departure_airport">Aéroport de Départ :</label>
            <input type="text" name="departure_airport" placeholder="Aéroport de Départ" required>
            <label for="departure_date">Date de Départ :</label>
            <input type="date" name="departure_date" placeholder="Date de Départ" required>
            <label for="departure">Heure de Départ :</label>
            <input type="time" name="departure" placeholder="Heure de Départ" required><br>

            <label for="arrival_airport">Aéroport d'Arrivée :</label>
            <input type="text" name="arrival_airport" placeholder="Aéroport d'Arrivée" required>
            <label for="arrival_date">Date d'Arrivée :</label>
            <input type="date" name="arrival_date" placeholder="Date d'Arrivée" required>
            <label for="arrival">Heure d'Arrivée :</label>
            <input type="time" name="arrival" placeholder="Heure d'Arrivée" required><br>

            <label for="late_time">Temps de retards en min (s'il y en a) :</label>
            <input type="text" name="late_time" placeholder="Temps de retard en min">

            <label for="type_of_delay">Raison du retard (s'il y en a): </label>
            <select name="type_of_delay">
                <option>Choisir une option ...</option>
                <option value="Occupation des pistes">Occupation des pistes</option>
                <option value="Vent défavorable">Vent défavorable</option>
                <option value="Situation climatique">Situation climatique</option>
            </select>

            <label for="plane">Avion utilisé</label>
            <input type="text" name="plane" placeholder="Avion utilisé" required>

            <input type="submit" value="Envoyer">
        </form>

        <?php

            if(isset($_POST['code']) && isset($_POST['flightnumber']) && isset($_POST['departure_airport']) && isset($_POST['departure']) && isset($_POST['departure_date']) && isset($_POST['arrival_airport']) && isset($_POST['arrival']) && isset($_POST['arrival_date']) && isset($_POST['plane'])){

                $_code = $_POST['code'] /* = 'LH' */;
                $_flightnumber = $_POST['flightnumber']  /* = 'LH1234' */;

                $_departure_airport = $_POST['departure_airport'] /* = 'Paris' */;
                $_departure = $_POST['departure'] /* = '12:34:23' */;
                $_departure_date = $_POST['departure_date'] /* = '2018-12-12' */;

                $_arrival_airport = $_POST['arrival'] /* = 'Paris' */;
                $_arrival_date = $_POST['arrival_date'] /* = '2018-12-12' */;
                $_arrival = $_POST['arrival'] /* = '12:34:34' */;

                $_departure_airport = $_POST['arrival_airport'] /* = 'Paris' */;

                $_late_time = $_POST['late_time'] /* = '23' */;
                $_type_of_delay = $_POST['type_of_delay']; /* = 'Occupation des pistes' */;
                $_plane = $_POST['plane'] /* = 'Airbus A320' */;

                echo '<p>Le vol a bien été ajouté</p><br>
                <p>Vol : '.$_code.'<br>
                </p><br> Avion : '.$_plane.
                '<br> <p>Départ de '.$_departure_airport.' le '.$_departure_date.' à '.$_departure.'
                </p>
                <br><p>Arrivée à '.$_arrival_airport.' le '.$_arrival.'
                </p><br> <p>Numéro de vol : '.$_flightnumber.'</p><br>';

                if ($_late_time == null && $_type_of_delay == null) {
                    echo '

                        <hr>
                        <table>
                    
                        <tr>
                            <th>Durée</th>
                            <th>Commentaire</th>
                            <th>Type de retard</th>
                        </tr>

                        <tr>
                            <td>'.$_late_time.' min.</th>
                            <td>Piste occupée</td>
                            <td>'.$_type_of_delay.'</td>
                        </tr>

                        <tr>
                            <td>'.$_late_time.' min.</th>
                            <td>Vent défavorable</td>
                            <td>'.$_type_of_delay.'</td>
                        </tr>

                    </table>';
                } else {
                    echo '<p>Le vol n\'a pas été ajouté veuillez réessayez.</p>';
                }
            }
        ?>  
    </main>
</body>
</html>