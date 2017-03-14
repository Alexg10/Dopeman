<?php
/*
Template Name: Wait
*/
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dopeman Magazine - Webzine pour les addicts au hip-hop Articles, clips, sons, concerts, interviews</title>
        <meta name="description" content="Webzine pour les addicts au hip-hop Articles, clips, sons, concerts, interviews">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="dopeman.ico" />
        <link rel="stylesheet" href="landing/css/normalize.css">
        <link rel="stylesheet" href="landing/css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">


        <style type="text/css">
        	/*! HTML5 Boilerplate v5.3.0 | MIT License | https://html5boilerplate.com/ */

/*
 * What follows is the result of much research on cross-browser styling.
 * Credit left inline and big thanks to Nicolas Gallagher, Jonathan Neal,
 * Kroc Camen, and the H5BP dev community and team.
 */

/* ==========================================================================
   Base styles: opinionated defaults
   ========================================================================== */

html {
    color: #222;
    font-size: 1em;
    line-height: 1.4;
}

/*
 * Remove text-shadow in selection highlight:
 * https://twitter.com/miketaylr/status/12228805301
 *
 * These selection rule sets have to be separate.
 * Customize the background color to match your design.
 */

::-moz-selection {
    background: #b3d4fc;
    text-shadow: none;
}

::selection {
    background: #b3d4fc;
    text-shadow: none;
}

/*
 * A better looking default horizontal rule
 */

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
}

/*
 * Remove the gap between audio, canvas, iframes,
 * images, videos and the bottom of their containers:
 * https://github.com/h5bp/html5-boilerplate/issues/440
 */

audio,
canvas,
iframe,
img,
svg,
video {
    vertical-align: middle;
}

/*
 * Remove default fieldset styles.
 */

fieldset {
    border: 0;
    margin: 0;
    padding: 0;
}

/*
 * Allow only vertical resizing of textareas.
 */

textarea {
    resize: vertical;
}

/* ==========================================================================
   Browser Upgrade Prompt
   ========================================================================== */

.browserupgrade {
    margin: 0.2em 0;
    background: #ccc;
    color: #000;
    padding: 0.2em 0;
}

/* ==========================================================================
   Author's custom styles
   ========================================================================== */

















/* ==========================================================================
   Helper classes
   ========================================================================== */

/*
 * Hide visually and from screen readers
 */

.hidden {
    display: none !important;
}

/*
 * Hide only visually, but have it available for screen readers:
 * http://snook.ca/archives/html_and_css/hiding-content-for-accessibility
 */

.visuallyhidden {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}

/*
 * Extends the .visuallyhidden class to allow the element
 * to be focusable when navigated to via the keyboard:
 * https://www.drupal.org/node/897638
 */

.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus {
    clip: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    position: static;
    width: auto;
}

/*
 * Hide visually and from screen readers, but maintain layout
 */



.invisible {
    visibility: hidden;
}

/*
 * Clearfix: contain floats
 *
 * For modern browsers
 * 1. The space content is one way to avoid an Opera bug when the
 *    `contenteditable` attribute is included anywhere else in the document.
 *    Otherwise it causes space to appear at the top and bottom of elements
 *    that receive the `clearfix` class.
 * 2. The use of `table` rather than `block` is only necessary if using
 *    `:before` to contain the top-margins of child elements.
 */

.clearfix:before,
.clearfix:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.clearfix:after {
    clear: both;
}

/* ==========================================================================
   EXAMPLE Media Queries for Responsive Design.
   These examples override the primary ('mobile first') styles.
   Modify as content requires.
   ========================================================================== */

@media only screen and (min-width: 35em) {
    /* Style adjustments for viewports that meet the condition */
}

@media print,
       (-webkit-min-device-pixel-ratio: 1.25),
       (min-resolution: 1.25dppx),
       (min-resolution: 120dpi) {
    /* Style adjustments for high resolution devices */
}

/* ==========================================================================
   Print styles.
   Inlined to avoid the additional HTTP request:
   http://www.phpied.com/delay-loading-your-print-css/
   ========================================================================== */

@media print {
    *,
    *:before,
    *:after,
    *:first-letter,
    *:first-line {
        background: transparent !important;
        color: #000 !important; /* Black prints faster:
                                   http://www.sanbeiji.com/archives/953 */
        box-shadow: none !important;
        text-shadow: none !important;
    }

    a,
    a:visited {
        text-decoration: underline;
    }

    a[href]:after {
        content: " (" attr(href) ")";
    }

    abbr[title]:after {
        content: " (" attr(title) ")";
    }

    /*
     * Don't show links that are fragment identifiers,
     * or use the `javascript:` pseudo protocol
     */

    a[href^="#"]:after,
    a[href^="javascript:"]:after {
        content: "";
    }

    pre,
    blockquote {
        border: 1px solid #999;
        page-break-inside: avoid;
    }

    /*
     * Printing Tables:
     * http://css-discuss.incutio.com/wiki/Printing_Tables
     */

    thead {
        display: table-header-group;
    }

    tr,
    img {
        page-break-inside: avoid;
    }

    img {
        max-width: 100% !important;
    }

    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
    h3 {
        page-break-after: avoid;
    }
}





@font-face {
    font-family: 'libre_baskervilleregular';
    src: url('librebaskerville-regular-webfont.woff2') format('woff2'),
         url('librebaskerville-regular-webfont.woff') format('woff'),
         url('librebaskerville-regular-webfont.svg#libre_baskervilleregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
.page-template-landing {
  overflow: hidden;
  height: 100vh;
  box-sizing: border-box;
  background: white;
  border: 10px solid white; 
}
.page-template-landing .grey_line a:after {
    display: none; }
  .page-template-landing .site-content {
    position: absolute;
    width: 100%; }
  .page-template-landing .landing_content {
    position: absolute;
    width: 100%;
    color: #fefefe;
    text-align: center; 

  }
    .page-template-landing .landing_content .video_bg {
      box-sizing: border-box;
      position: fixed;
      top: 50%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: -100;
      transform: translateX(-50%) translateY(-50%);
      background-size: cover; }
    .page-template-landing .landing_content h1 {
      font-size: 120px;
      letter-spacing: 70px;
      text-transform: uppercase;
      font-family: 'Oswald', sans-serif;
      font-weight: 100;
      margin-top: 0; 
    margin-bottom: 20px;}
      @media screen and (max-width: 580px) {
        .page-template-landing .landing_content h1 {
          font-size: 60px;
          letter-spacing: 10px; } }
    .page-template-landing .landing_content .dopeman_description {
      top: 50%;
      transform: translateY(50%); }
      .page-template-landing .landing_content .dopeman_description .description {
        max-width: 480px;
        font-family: 'libre_baskervilleregular';
        font-size: 17px;
        margin: 0 auto;
        color: rgba(254, 254, 254, 0.7);
        line-height: 25px; 
    -webkit-font-smoothing: antialiased;
     -moz-osx-font-smoothing: grayscale;}
    .page-template-landing .landing_content .share_part {
      font-size: 17px;
      font-weight: bold; 
        margin-top: 42px;}
      .page-template-landing .landing_content .share_part .btn_display {
        margin-top: 17px; }
        .page-template-landing .landing_content .share_part .btn_display a {
          background-color: #fefefe;
          color: #1c1c1c;
          line-height: 40px;
          width: 145px;
          border-radius: 18px;
          display: inline-block;
          font-weight: normal;
          text-decoration: none;
          margin: 0 10px; }
          @media screen and (max-width: 580px) {
            .page-template-landing .landing_content .share_part .btn_display a {
              margin-bottom: 20px; } }
  .page-template-landing .site-header {
    display: none; }



@media screen and (max-width: 1024px) {

  .page-template-landing .landing_content h1{
    font-size: 80px;
    letter-spacing: 30px;
  }

}
@media screen and (max-width: 580px) {
  .page-template-landing .landing_content {
    position:  initial;
    height: 100%;
    background-image: url('../img/background_landing.jpg');
    background-size:  cover;
    background-position: 50%;
  }
  .page-template-landing .landing_content h1{
    font-size:  50px;
    letter-spacing: 10px;

  }
  .page-template-landing .landing_content .dopeman_description .description{
    font-size:  15px;
    max-width: 80%;
  }


  .page-template-landing .landing_content .dopeman_description{
          transform: translateY(30%);

  video{
    display:  none;
  }
}
        </style>
    </head>
    
    <body class="page-template-landing">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

       <div class="landing_content">
        <video class="video_bg" autoplay loop poster="landing/img/background_landing.jpg" id="bgvid">
          <source src="landing/img/video_bg.webm" type="video/webm">
          <source src="landing/img/video_bg.mp4" type="video/mp4">
        </video>
        <div class="dopeman_description">
            <h1>Dopeman</h1>
            <p class="description">
                Webzine pour les addicts au hip-hop <br>
                Articles, clips, sons, concerts, interviews, etc
            </p>
            <div class="share_part">
                <div class="btn_display">
                    <a href="https://www.facebook.com/dopemanmagazine/" target="_blank">Facebook</a>
                    <a href="https://www.instagram.com/dopeman_magazine/" target="_blank">Instagram</a>
                </div>
            </div>
        </div>
       </div>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="landing/js/plugins.js"></script>
        <script src="landing/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
