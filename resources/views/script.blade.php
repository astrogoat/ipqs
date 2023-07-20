@if(Astrogoat\Ipqs\Settings\IpqsSettings::isEnabled())
    <!-- [Ipqs] Start -->
     @php
        $key = settings(Astrogoat\Ipqs\Settings\IpqsSettings::class, 'key');
     @endphp

    <script src="https://www.ipqscdn.com/api/*/{{ $key }}/learn.js" crossorigin="anonymous"></script>
    <noscript><img src="https://www.ipqscdn.com/api/*/{{ $key }}/pixel.png"></noscript>

    <script>

        // Optional tracking variables that can be used to pass data and subIDs.
        // Please set any new variables to track here: https://www.ipqualityscore.com/user/settings#variables
        // Must be manually added to <noscript> <img> tag above such as: ...pixel.png?userID=123&transactionID=11
        // Strongly suggested to pass "email" and "userID" for better device tracking and performance

        if (typeof Startup !== "undefined") {

            // Parse "utm_content" and "irclickid" from URL and store in Startup

            var urlParams = new URLSearchParams(window.location.search);
            var utm_content = urlParams.get('utm_content');
            var irclickid = urlParams.get('irclickid');

            // Store "utm_content" and "irclickid" and "domain" name in Startup

            Startup.Store('publisherID', utm_content);
            Startup.Store('clickID', irclickid);
            Startup.Store('domain', window.location.hostname);

            // Evaluation of publisher ID existence
            // If it's parsed from the URL, run the script
            // Otherwise, prevent the script from running

            if (typeof utm_content !== "undefined") {
                Startup.Init();
            }
            else {
                Startup.Pause();
            }
        }

    </script>
<!-- [Ipqs] End -->
@endif
