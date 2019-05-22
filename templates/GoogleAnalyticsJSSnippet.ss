<script async src="https://www.googletagmanager.com/gtag/js?id={$GoogleAnalyticsTrackingID}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '{$GoogleAnalyticsTrackingID}'<% if $GoogleAnalyticsConstructorParameters %>, {$GoogleAnalyticsConstructorParameters.RAW}<% end_if %>);<% if $GoogleAnalyticsParameters %>
    {$GoogleAnalyticsParameters.RAW}<% end_if %>
</script>
