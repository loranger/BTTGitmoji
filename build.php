<?php
require_once 'vendor/autoload.php';

$preset = 'BTTGitmojis.bttpreset';

$client = new GuzzleHttp\Client();
$response = $client->get('https://raw.githubusercontent.com/carloscuesta/gitmoji/master/src/data/gitmojis.json');
$json = json_decode($response->getBody());

$group = new BTT\BTTGroup('Gitmoji ✍🏻');
(new BTT\BTTCloseButton)->addToGroup($group);

foreach ($json->gitmojis as $gitmoji) {
    echo "Building $gitmoji->emoji button\n";
    (new BTT\BTTButton(
        sprintf(
            '%s %s',
            $gitmoji->emoji,
            rtrim($gitmoji->description, '.')
        )
    ))
        ->setStringToType($gitmoji->code)
        ->setFontSize(13)
        ->addToGroup($group);
}

file_put_contents($preset, $group);
echo "Preset complete. Please open $preset\n";
