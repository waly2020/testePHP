<?php
require_once(__DIR__ . '/vendor/autoload.php');

use \Mailjet\Resources;

define('API_USER', '8150f34edfb4e64603ca9c147e273f23');
define('API_LOGIN', '86b019fb47a8b63b311b1de36f735cae');

$mj = new \Mailjet\Client(API_USER, API_LOGIN, true, ['version' => 'v3.1']);

if (!empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['sexe'])) {
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $sexe = htmlspecialchars($_POST['sexe']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "walyguema@gmail.com",
                        'Name' => "NoSignal"
                    ],
                    'To' => [
                        [
                            'Email' => "walyguema@gmail.com",
                            'Name' => "NoSignal"
                        ]
                    ],
                    'Subject' => "donnees du formulaire",
                    // 'TextPart' => "$surname, $email,$message,$sexe",
                    'HTMLPart' => "<h3>nom : $surname <br>,Email : $email <br>,Message : $message <br>, sexe : $sexe</h3>"
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();
        echo "Email envoye avec succes";
    } else {
        echo "Email non valide";
    }
} else {
    header('Location:index.php');
    die();
}
