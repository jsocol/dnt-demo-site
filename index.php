<?php

$mc = 'mdnt';
$mr = '/(android|fennec|iemobile|iphone|opera (mini|mobi))/i';
$ier = '/MSIE 9\.0/i';
$ua = $_SERVER['HTTP_USER_AGENT'];

$dnt = $_SERVER['HTTP_DNT'] == '1';
$mobile = (($_COOKIE[$mc] != 'off' && preg_match($mr, $ua))
           || $_COOKIE[$mc] == 'on');
$ie9 = (bool)preg_match($ier, $ua);

?>
<!DOCTYPE html>
<html>
<head>
<title>Mozilla: Do Not Track</title>
   <meta name="og:image" content="http://mozcom-cdn.mozilla.net/img/firefox-100.jpg">

<style>
    /* MetaWebPro font family licensed from fontshop.com. WOFF-FTW! */
    @font-face {
        font-family: 'MetaBlack';
        src: url('http://mozcom-cdn.mozilla.net/img/fonts/MetaWebPro-Black.eot');
        src: local('☺'), url('http://mozcom-cdn.mozilla.net/img/fonts/MetaWebPro-Black.woff') format('woff');
        font-weight: bold;
    }
</style>
  <link href="http://mozcom-cdn.mozilla.net/includes/min/min.css?g=css" rel="stylesheet">
    <script src="http://mozcom-cdn.mozilla.net/includes/min/min.js?g=js"></script>
    <meta name="WT.ad" content="Do Not Track;Do-not-track;DNT;Privacy;Advertising;Tracking" />
    <link rel="stylesheet" href="http://mozcom-cdn.mozilla.net/style/covehead/home-fx.css" media="screen" />
    <link rel="stylesheet" href="styles.css" media="screen" />
    <link rel="stylesheet" href="http://mozcom-cdn.mozilla.net/style/covehead/mozilla-expanders.css" media="screen" />
    <script src="http://mozcom-cdn.mozilla.net/js/mozilla-expanders.js"></script>

</head>
<body class="">
<noscript><div id="no-js-feature"></div></noscript>
<div id="wrapper">
<div id="doc">

  <div id="header">
     <div>
        <h1><a href="http://www.mozilla.com/" title="Back to home page">Mozilla</a></h1>
        <a href="http://www.mozilla.org/" class="mozilla">visit <span>mozilla</span></a>
     </div>
  </div>

<?php # start breadcrumbs #breadcrumbs ?>
<p id="breadcrumbs"><a href="http://www.mozilla.com/" class="home">Home</a> <b>&#187;</b>
  <span>Do Not Track FAQ</span>
</p>
<?php # end breadcrumbs #breadcrumbs ?>


<?php # start #sidebar ?>
<div id='sidebar'>
<div style="text-align:center;margin-bottom:70px;margin-top:60px;">
  <img style="border:1px solid blue;"
       src="/dnt_status.php"
       alt="Do Not Track Indicator"
       title="Mozilla's Do Not Track Indicator."/>
</div>

<div class='sidebar-box' style="margin-bottom:50px;">
  <?php if ($mobile): ?>
    <h3>Enable Do Not Track in<span style="text-transform: capitalize">Firefox 4 Mobile</span></h3>
    <p style="text-align:center;">
      <a href="images/dnt-mobile-config-screenshot.png">
        <img alt="Settings panel - Do Not Track"
           class="frameless"
           src="images/dnt-mobile-config-screenshot-thumb.png"
           title="Enabling Do Not Track"></a>
        <br/>
        Open the settings window, then set &quot;Tell sites not to track me&quot; to Yes.
      </a>
    </p>
  <?php else: ?>
    <h3>Enable Do Not Track in<span style="text-transform: capitalize">Firefox 4</span></h3>
    <p style="text-align:center;">
      <a href="https://support.mozilla.com/en-US/kb/how-do-i-stop-websites-tracking-me">
        <img alt="Options window - Advanced panel - Do Not Track"
           class="frameless"
           src="images/dnt-config-screenshot-thumb.jpg"
           title="Enabling Do Not Track">
        <br/>
        Click for Instructions
      </a>
    </p>
  <?php endif; ?>
</div>

<div class="sidebar-box">
  <?php if ($ie9): ?>
    <h3>Do Not Track in your<span style="text-transform: capitalize">browser</span></h3>
    <?php if ($dnt): ?>
      <p>You're using Internet Explorer 9 (IE 9), and your browser is sending the DNT header because you've enabled Tracking Protection!  This means you're using one or more <a href="http://ie.microsoft.com/testdrive/Browser/TrackingProtectionLists/faq.html">Tracking Protection Lists</a>, and as a result, Internet Explorer is asking all sites to stop tracking you.</p>
    <?php else: ?>
      <p>To enable Do Not Track, you need to enable IE 9's <a href="http://ie.microsoft.com/testdrive/Browser/TrackingProtectionLists/faq.html">Tracking Protection</a> feature. The easiest way to do that is to install Mozilla's Simple Tracking Protection List. <a href="javascript:window.external.msAddTrackingProtectionList('dnt-enabler.tpl', 'Mozilla\'s DNT Helper for IE');  window.location.reload()">Click here to install</a> and enable the DNT header.</p>
    <?php endif; ?>
  <?php else: ?>
    <h3>Enable Do Not Track in <span style="text-transform: capitalize">Internet Explorer 9</span></h3>
    <p>To enable Do Not Track in IE 9, you need to enable IE 9's <a href="http://ie.microsoft.com/testdrive/Browser/TrackingProtectionLists/faq.html">Tracking Protection</a> feature. The easiest way to do that is to install <a href="./dnt-enabler.tpl">Mozilla's Simple Tracking Protection List</a>. If you view this page in IE 9, there will be instructions right here.</p>
  <?php endif; ?>
</div>

</div>
<?php # end #sidebar ?>

<div id="main-feature" style="z-index:1">
<h2><span style="text-transform: capitalize">Do Not Track</span></h2>
<p>Mozilla is a global, nonprofit organization dedicated to making the Web better. We emphasize principle over profit, and believe that the Web is a shared public resource to be cared for, not a commodity to be sold. We answer to no one but you and believe it is crucial to put you in control of your online experience. We are aiming to give you better insight and control into the ways your personal information is collected, used, stored and shared online. </p>

<p>Mozilla Firefox 4 offers a Do Not Track feature that lets you express a preference not to be tracked by websites. When the feature is enabled, Firefox will tell advertising networks and other websites and applications that you want to opt-out
of tracking for purposes like behavioral advertising.</p>
</div>

<div id="main-content">
  <h3>Frequently Asked <span>Questions</span></h3>
<div>
      <div class="expander expander-even expander-first">
      <h4 class="expander-header">What is Do Not Track?</h4>
    <div class="expander-content">
          <p>Do Not Track is a step toward putting you in control of the way your
information is collected and used online. Do Not Track is a feature in Firefox 4 that
allows you to let a website know you would like to opt-out of third-party tracking for
purposes including behavioral advertising. It does this by transmitting a Do Not Track
HTTP header every time your data is requested from the Web.</p>
        </div>

      </div>
      <div class="expander expander-odd">
      <h4 class="expander-header">Is Do Not Track available on Firefox for Android?</h4>
    <div class="expander-content">
          <p>Yes. Firefox for Android is the first mobile Web browser to offer
the Do Not Track privacy feature, and behaves the same way it does on the
desktop. To turn Do Not Track on in Firefox for Android, simply swipe left and
tap on Browser Tools. From the Preferences pane, tap on the box next to &quot;Tell
sites not to track me&quot; to turn this option on or off.  </p>
        </div>
        </div>
        <div class="expander expander-even">
      <h4 class="expander-header">Does Do Not Track block ads?</h4>
    <div class="expander-content">
          <p>No, you will still see ads with Do Not Track enabled. However, Do Not Track
may change the type of ads you see. For example, behavioral ads are targeted to your
interests based on the websites you visit and the search terms you use. If you request
that websites Do Not Track you, and the sites respect your privacy preferences, you
will see more generic ads in place of behavioral ads.</p>
        </div>
     </div>

           <div class="expander expander-odd">
      <h4 class="expander-header">How does Do Not Track work with other privacy tools?</h4>
    <div class="expander-content">
     <p>Do Not Track is one of many privacy solutions. Do Not Track does not replace your
anti-virus software, will not encrypt data, and is not a security mechanism. There are
several other <a href="http://www.mozilla.com/firefox/security">privacy and
security</a> features within Firefox.
        </div>
     </div>

    <div class="expander expander-even">
        <h4 class="expander-header">Will Do Not Track affect the rest of my Web experience?</h4>
        <div class="expander-content">
          <p>Do Not Track may interfere with some personalized services you enjoy. For example, a Do Not Track request might mean you would have to type in your zip code each time you want to view a weather report, rather than seeing the weather automatically displayed. Personalization on websites can save you time and repetitive typing, but it requires data.</p>
        </div>
    </div>

      <div class="expander expander-odd">
  <h4 class="expander-header">How do I enable Do Not Track in Firefox 4?</h4>
  <div class="expander-content">
      <p>This feature is not enabled by default. You can find the Do Not Track
            request on the Advanced pane. <span id="platform-note">On Windows,
            go to Tools &gt; Options... &gt; Advanced.</span></p>
    <noscript>
          <p>On Mac OS X, go to Firefox &gt; Preferences… &gt; Advanced. On Linux, go to Tools &gt; Options &gt; Advanced.</p>
          </noscript>
          Click to check the box next to &quot;Tell websites I do not want to
          be tracked&quot;. For more information, see the help file on
      <a href="https://support.mozilla.com/en-US/kb/how-do-i-stop-websites-tracking-me">how to stop websites from tracking you</a>.</p>
      </div>
  </div>

      <div class="expander expander-even">
  <h4 class="expander-header">Will companies honor my Do Not Track preference?</h4>
  <div class="expander-content">
          <p>Companies are starting to support Do Not Track, but you may not notice any changes initially. We are actively working with companies that have started to implement Do Not Track, with others who have committed to doing so soon.</p>
    </div>
  </div>

        <div class="expander expander-odd">
      <h4 class="expander-header">Where can I learn more?</h4>

        <div class="expander-content"> Other interesting work about Do Not Track and online privacy:
          <ul style='list-style-position:inside'>
            <li><a href="http://support.mozilla.com/en-US/kb/Private%20Browsing">Private
              browsing</a> in Firefox &#8212; limits saving data about which sites and pages you have visited online</li>
            <li><a href="http://support.mozilla.com/en-US/kb/Enabling%20and%20disabling%20cookies">Managing
              cookies</a> in Firefox &#8212; lets you control how <a href="http://support.mozilla.com/kb/Cookies">cookies</a> are saved on your computer</li>
      <li><a href="http://blog.mozilla.com/blog/author/afowlermozilla-com/">Alex Fowler's Mozilla Blog</a> &#8212; latest news from Mozilla's Technology and Privacy Officer</li>
            <li><a href="http://donottrack.us/">donotrack.us</a> project &#8212; Stanford researchers working on the ideas behind Do Not Track</li>
            <li>Mozilla and Stanford's Do Not Track <a href="http://datatracker.ietf.org/doc/draft-mayer-do-not-track/">submission
              to the IETF</a> &#8212; IETF is a standards body that helps define how the Web works, regardless of which Internet browser you use</li>
            <li><a href="http://www.ghostery.com">Ghostery</a> &#8212; a tool that lets you learn which sites are tracking you online</li>
            <li>See <a href="http://www.futureofprivacy.org/wp-content/uploads/2009/11/data.gif">where your data goes</a> before you click &#8212; an image from the Future of Privacy Forum</li>
          </ul>

      </div>
      </div>
</div>

</div><!-- end main-content -->

</div><!-- end doc -->
</div><!-- end wrapper -->

        <div id="footer">
        <div id="footer-contents" role="contentinfo">

                <div id="copyright">
                        <p>Except where otherwise <a href="http://www.mozilla.com/en-US/about/legal.html#site">noted</a>, content on this site is licensed under the <br /><a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution Share-Alike License v3.0</a> or any later version.</p>

                </div>

        </div>
        </div>


</body>
</html>
