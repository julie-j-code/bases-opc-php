<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercices codingame et divers</title>

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

    // on a asussi une fonction spécifique qui retourne la première clée d'un tableau associatif
    var_dump(array_key_first([
        "luc" => 32,
        "sophie" => 36,
        "julie" => 47
    ]));


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

    // FIN CodinGame ----------------------

    function creationPaires($array)
    {
        return array_chunk($array, 2);
    }
    var_dump(creationPaires([1, 2, 3, 4, 5, 6, 7]));

    // l'utilisation de reduce en PHP que je crois n'avoir JAMAIS utlisée
    function sum($out, $in)
    {
        $out += $in;
        return $out;
    }
    function product($out, $in)
    {
        $out *= $in;
        return $out;
    }
    function totalItems($array)
    {
        //   ok, mais je ne comprends pas la syntaxe "sum" pour référence à la fonction
        return array_reduce($array, "sum");
    }
    var_dump(totalItems([1, 2, 3, 4, 5, 6]));

    function productItems($array)
    {
        //   ok, mais je ne comprends pas la syntaxe "product" pour référence à la fonction
        return array_reduce($array, "product", 10);
    }
    var_dump(productItems([1, 2, 3, 4, 5, 6]));

    // plus compréhensible, concis et proche de l'utilisation qu'on en fait avec js 
    $totalAmount = array_reduce([1, 2, 3, 4, 5, 6], function ($out, $in) {
        return $out += $in;
    });
    var_dump($totalAmount);

    $filteredArray = array_filter([1, 2, 3, 4, 5, 6], function ($element) {
        return $element > 4;
    });
    var_dump($filteredArray);

    function filterArray($array)
    {
        return array_filter($array, function ($element) {
            return $element > 4;
        });
    }
    var_dump(filterArray([1, 2, 3, 4, 5, 6]));

    // tout simple pour rappel PHP vs JS
    function cube($n)
    {
        return ($n * $n * $n);
    }

    $a = [1, 2, 3, 4, 5];
    // une fois de plus le "cube" ne me vient pas spontanément. chaque méthode qui utilise une fonction de callback fera référence à cette fonction "..."
    $b = array_map("cube", $a);
    print_r($b);


    // c'est phoneNumber qu'on a en base
    $phoneNumber = "0667001438";
    // c'est tel qui est soumis pour comparaison avec de nombreuses options
    $tel = "+33 (0)6 67 00 14 38";
    // tableau des valeurs à virer
    $badChar = array(" ", "(", ")", "+");

    function formatTel($tel, $badChar)
    {
        $tel = str_replace($badChar, '', $tel);
        return $tel;
    };
    var_dump(formatTel($tel, $badChar));


    function filterContent($phoneNumber, $tel, $badChar)
    {
        $tel = str_replace($badChar, '', $tel);
        return str_contains($tel, $phoneNumber);
    }
    var_dump(filterContent($phoneNumber, $tel, $badChar));

    ?>

</body>

</html>