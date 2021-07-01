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
    "avatar_url" => "https://cdn.discordapp.com/attachments/797004086175203358/859777448451244062/unknown.png",
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
            "title" => "About Project LFM",

            // The type of your embed, will ALWAYS be "rich"
            "type" => "rich",

            // A description for your embed
            "description" => "",

            // The URL of where your title will be a link to
            "url" => "",

            /* A timestamp to be displayed below the embed, IE for when an an article was posted
             * This must be formatted as ISO8601
             */
            "timestamp" => "2021-06-30 14:25:20",

            // The integer color to be used on the left side of the embed
            "color" => hexdec("0094cc"),

            // Field array of objects
            "fields" => [
                // Field 1
                [
                    "name" => "This is a new project to find new trucking mates.",
                    "value" => "We all know how it feels to find a new friend in TruckersMP. You are driving through duisburg or kirkenes and 2 minutes later you're writing with someone you've never heard of.
                                And this is great! We all love to see this and thats why we, Project LFM, have been thinking about something new, something easy to manage and something, we can all enjoy.
                                A new system to find friends and to drive together.",
                    "inline" => false
                ],

                [
                    "name" => "We are currently working on some features like the following:",
                    "value" => "- looking for mates
                                - permission system
                                - user profile system
                                - in-build vtc system",
                    "inline" => false
                ],

                [
                    "name" => "So what are you waiting for?",
                    "value" => "Join now and experience an even better driving with more friends!",
                    "inline" => false
                ],

                [
                    "name" => "Something's not working or up-to-date?",
                    "value" => "Check out our status page for more details:
                                https://lfm.statuspage.io/",
                    "inline" => false
                ],
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec($ch);
curl_close($ch);
