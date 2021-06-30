<?php

// Replace the URL with your own webhook url
$url = "https://discordapp.com/api/webhooks/859768691638272028/Nxx4iyq-NUTAu4VmcF00QV6txBtEE4yKkqScWj2QI27Fph_9pP8U-60OveNFlTvOp79y";

$hookObject = json_encode([
    /*
     * The general "message" shown above your embeds
     */
    "content" => "",
    /*
     * The username shown in the message
     */
    "username" => "Project LFM",
    /*
     * The image location for the senders image
     */
    "avatar_url" => "https://pbs.twimg.com/profile_images/972154872261853184/RnOg6UyU_400x400.jpg",
    /*
     * Whether or not to read the message in Text-to-speech
     */
    "tts" => false,
    /*
     * File contents to send to upload a file
     */
    // "file" => "",
    /*
     * An array of Embeds
     */
    "embeds" => [
        /*
         * Our first embed
         */
        [
            // Set the title for your embed
            "title" => "Rules",

            // The type of your embed, will ALWAYS be "rich"
            "type" => "rich",

            // A description for your embed
            "description" => "",

            // The URL of where your title will be a link to
            "url" => "",

            /* A timestamp to be displayed below the embed, IE for when an an article was posted
             * This must be formatted as ISO8601
             */
            "timestamp" => "2018-03-10T19:15:45-05:00",

            // The integer color to be used on the left side of the embed
            "color" => hexdec( "FFFFFF" ),

            // Field array of objects
            "fields" => [
                // Field 1
                [
                    "name" => "1. Discord Terms of Service",
                    "value" => "1.1 Any action that breaks Discord's TOS (Terms of Service) will result in ban.",
                    "inline" => false
                ],
                // Field 2
                [
                    "name" => "2. Using voice and text channels",
                    "value" => "2.1. Do not swear in text and voice channels or try to bypass the swear filter (for example f...). Racial insults and statements are punished with an immediate ban.
                    2.2. Do not post malicious links, files or comparable things.
                    2.3. Spamming in every way is not allowed.
                    2.4. Team decisions are valid. Discussions about these decisions can result in more severe punishment.
                    2.5. English is the only language on this server except for the German channels (they are declared).
                    2.6. Any posts related to racism, NSFW content, etc. are strictly forbidden.
                    2.7. Politics and relating sensitive subjects are not to be discussed in this server.",
                    "inline" => false
                ],
                // Field 3
                [
                    "name" => "3. Profile",
                    "value" => "3.1. Inappropriate avatars and usernames are not allowed.",
                    "inline" => false
                ],
                // Field 4
                [
                    "name" => "4. Advertisement",
                    "value" => "4.1. Any form of advertisement is strictly forbidden except for the channels declared for advertisement.",
                    "inline" => false
                ],
                // Field 4
                [
                    "name" => "5. Updates to the rules",
                    "value" => "5.1. The user must inform himself about changes to the rules.",
                    "inline" => false
                ],
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec( $ch );
curl_close( $ch );

?>
