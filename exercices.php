<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Les exercices de codingame</title>

<body>

    <?php

    function concatenate($arg1, $arg2)
    {
        return $arg1 . $arg2;
    }
    var_dump(concatenate("julie", "jeannet"));

    function estIlMajeure($arg)
    {
        return $arg >= 18 ? true : false;
    }
    var_dump(estIlMajeure(25));
    function plusGrand($arg1, $arg2)
    {
        return max($arg1, $arg2);
    }
    var_dump(plusGrand(3, 7));
    function plusPetit($arg1, $arg2, $arg3)
    {
        return min($arg1, $arg2, $arg3);
    }
    var_dump(plusPetit(3, 7, 2));

    function premierElementTableau($array)
    {
        return $array[0];
    }
    var_dump(premierElementTableau([28, 36, 7]));


    function verificationPassword($arg)
    {
        return strlen($arg) >= 7 ? true : false;
    }

    var_dump(verificationPassword("1233d2358x"));

    function verificationPasswordOptimised($pass)
    {
        $match = preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)^[a-zA-Z\d]{8,}/', $pass);
        if ($match) return true;
        return false;
    }

    var_dump(verificationPasswordOptimised("123A255858b"));

    function capital($arg)
    {

        switch ($arg) {
            case "France":
                return "Paris";
                break;
            case "Allemagne":
                return "Berlin";
                break;
            case "Italie":
                return "Rome";
                break;
            case "Maroc":
                return "Rabat";
                break;
            case "Espagne":
                return "Madrid";
                break;
            case "Portugal":
                return "Lisbonne";
                break;
            case "Angleterre":
                return "Londres";
                break;
            default:
                return "Inconnu";
        };
    }

    var_dump(capital("France"));

    function listHTML($titre, $array)
    {
        if (is_null($titre) || empty($titre)) return null;
        if (empty($array)) return null;

        $result = "";
        foreach ($array as $element) {
            $result .= "<li>" . $element . "</li>";
        }
        return "<h3>" . $titre . "</h3><ul>" . $result . "</ul>";
    }

    var_dump(listHTML("Capitale", ["Paris", "Londres"]));


    //     include './libraryToInclude.php';
    // function getUtilisateursAutorises() {
    // $users = getAllUtilisateurs();
    // $array = array();
    // print_r($users);
    // for($i = 0; $i < count($users); $i++) {
    // if(!$users[$i]->blocked && !empty($users[$i]->email) && $users[$i]->age >= 18) array_push($array,$users[$i]);
    // }
    // print_r($array);
    // return $array;
    // }

    ?>

</body>

</html>