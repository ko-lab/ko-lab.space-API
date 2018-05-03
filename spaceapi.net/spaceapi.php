<?php /* Template Name: SPACEAPI */
    # Need to add this header, so that the website can scrape the info.
    header('Access-Control-Allow-Origin: *');

    # echo JSON object with all important info (see the docs on the website or see other space's API's).
    echo '{
        "api": "0.13",
        "space": "Ko-Lab",
        "logo": "https://ko-lab.space/wp-content/uploads/2018/04/Logo_Ko-lab_big.png",
        "url": "https://ko-lab.space/",
        "location": {
            "address": "Potterijstraat 5, 2800 Mechelen, Belgium",
            "lat": 51.022108,
            "lon": 4.482780
        },
        "contact": {
            "email": "info@ko-lab.space",
            "irc": "irc://freenode.net/ko-lab"
        },
        "issue_report_channels": ["email"]
    }'
?>
