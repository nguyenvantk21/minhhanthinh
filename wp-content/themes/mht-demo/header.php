<!DOCTYPE html>

<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<title>MHT Construction</title>
<link rel='stylesheet' id='mui-css-css'  href='https://cdnjs.cloudflare.com/ajax/libs/muicss/0.9.14/css/mui.min.css?ver=4.7.5' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css-css'  href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css?ver=4.7.5' type='text/css' media='all' />
<script type='text/javascript' src='wp-content/themes/minhhanthinh/js/jquery.js'></script>
<script type='text/javascript' src='wp-content/themes/minhhanthinh/js/wonderpluginslider.js'></script>
<style type="text/css">

html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%; }

body {
  margin: 0; }

article,
aside,
details,
figcaption,
figure,
footer,
header,
main,
menu,
nav,
section,
summary {
  display: block; }

audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline; }

audio:not([controls]) {
  display: none;
  height: 0; }

[hidden],
template {
  display: none; }

a {
  background-color: transparent; }

a:active,
a:hover {
  outline: 0; }

abbr[title] {
  border-bottom: 1px dotted; }

b,
strong {
  font-weight: bold; }

dfn {
  font-style: italic; }

h1 {
  font-size: 2em;
  margin: 0.67em 0; }

mark {
  background: #ff0;
  color: #000; }

small {
  font-size: 80%; }

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline; }

sup {
  top: -0.5em; }

sub {
  bottom: -0.25em; }

img {
  border: 0; }

svg:not(:root) {
  overflow: hidden; }

figure {
  margin: 1em 40px; }

hr {
  box-sizing: content-box;
  height: 0; }

pre {
  overflow: auto; }

code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em; }

button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0; }

button {
  overflow: visible; }

button,
select {
  text-transform: none; }

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer; }

button[disabled],
html input[disabled] {
  cursor: default; }

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0; }

input {
  line-height: normal; }

input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0; }

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto; }

input[type="search"] {
  -webkit-appearance: textfield;
  box-sizing: content-box; }

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em; }

legend {
  border: 0;
  padding: 0; }

textarea {
  overflow: auto; }

optgroup {
  font-weight: bold; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

td,
th {
  padding: 0; }

/*--------------------------------------------------------------
# Accessibility
--------------------------------------------------------------*/
/* Text meant only for screen readers. */
.screen-reader-text {
  clip: rect(1px, 1px, 1px, 1px);
  position: absolute !important;
  height: 1px;
  width: 1px;
  overflow: hidden; }
  .screen-reader-text:focus {
    background-color: #f1f1f1;
    border-radius: 3px;
    box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
    clip: auto !important;
    color: #21759b;
    display: block;
    font-size: 14px;
    font-weight: bold;
    height: auto;
    left: 5px;
    line-height: normal;
    padding: 15px 23px 14px;
    text-decoration: none;
    top: 5px;
    width: auto;
    z-index: 100000;
    /* Above WP toolbar. */ }

/* Do not show the outline on the skip link target. */
#content[tabindex="-1"]:focus {
  outline: 0; }

/*--------------------------------------------------------------
# Alignments
--------------------------------------------------------------*/
.alignleft {
  display: inline;
  float: left;
  margin-right: 1.5em; }

.alignright {
  display: inline;
  float: right;
  margin-left: 1.5em; }

.aligncenter {
  clear: both;
  display: block;
  margin-left: auto;
  margin-right: auto; }

/*--------------------------------------------------------------
# Clearings
--------------------------------------------------------------*/
.clear:before,
.clear:after,
.entry-content:before,
.entry-content:after,
.comment-content:before,
.comment-content:after,
.site-header:before,
.site-header:after,
.site-content:before,
.site-content:after,
.site-footer:before,
.site-footer:after {
  content: "";
  display: table;
  table-layout: fixed; }

.clear:after,
.entry-content:after,
.comment-content:after,
.site-header:after,
.site-content:after,
.site-footer:after {
  clear: both; }

/*--------------------------------------------------------------
# Typography
--------------------------------------------------------------*/
body,
button,
input,
select,
textarea {
  color: #000;
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5; }

h1, h2, h3, h4, h5, h6 {
  clear: both; }

p {
  margin-bottom: 1.5em; }

dfn, cite, em, i {
  font-style: italic; }

blockquote {
  margin: 0 1.5em; }

address {
  margin: 0 0 1.5em; }

pre {
  background: #eee;
  font-family: "Courier 10 Pitch", Courier, monospace;
  font-size: 15px;
  line-height: 1.6;
  margin-bottom: 1.6em;
  max-width: 100%;
  overflow: auto;
  padding: 1.6em; }

code, kbd, tt, var {
  font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
  font-size: 15px; }

abbr, acronym {
  border-bottom: 1px dotted #666;
  cursor: help; }

mark, ins {
  background: #fff9c0;
  text-decoration: none; }

big {
  font-size: 125%; }

blockquote, q {
  quotes: "" ""; }
  blockquote:before, blockquote:after, q:before, q:after {
    content: ""; }

/*--------------------------------------------------------------
# Forms
--------------------------------------------------------------*/
input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"],
textarea {
  color: #666;
  border: 1px solid #ccc;
  border-radius: 3px; }
  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="url"]:focus,
  input[type="password"]:focus,
  input[type="search"]:focus,
  input[type="number"]:focus,
  input[type="tel"]:focus,
  input[type="range"]:focus,
  input[type="date"]:focus,
  input[type="month"]:focus,
  input[type="week"]:focus,
  input[type="time"]:focus,
  input[type="datetime"]:focus,
  input[type="datetime-local"]:focus,
  input[type="color"]:focus,
  textarea:focus {
    color: #111; }

select {
  border: 1px solid #ccc; }

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"] {
  padding: 3px; }

textarea {
  padding-left: 3px;
  width: 100%; }

/*--------------------------------------------------------------
# Buttons
--------------------------------------------------------------*/
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
  border: 1px solid;
  border-color: #ccc #ccc #bbb;
  border-radius: 3px;
  background: #e6e6e6;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.5), inset 0 15px 17px rgba(255, 255, 255, 0.5), inset 0 -5px 12px rgba(0, 0, 0, 0.05);
  color: rgba(0, 0, 0, 0.8);
  font-size: 12px;
  line-height: 1;
  padding: .6em 1em .4em;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8); }
  button:hover,
  input[type="button"]:hover,
  input[type="reset"]:hover,
  input[type="submit"]:hover {
    border-color: #ccc #bbb #aaa;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.8), inset 0 15px 17px rgba(255, 255, 255, 0.8), inset 0 -5px 12px rgba(0, 0, 0, 0.02); }
  button:active, button:focus,
  input[type="button"]:active,
  input[type="button"]:focus,
  input[type="reset"]:active,
  input[type="reset"]:focus,
  input[type="submit"]:active,
  input[type="submit"]:focus {
    border-color: #aaa #bbb #bbb;
    box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 0.5), inset 0 2px 5px rgba(0, 0, 0, 0.15); }

/*--------------------------------------------------------------
# Formattings
--------------------------------------------------------------*/
hr {
  background-color: #ccc;
  border: 0;
  height: 1px;
  margin-bottom: 1.5em; }

/*--------------------------------------------------------------
# Lists
--------------------------------------------------------------*/
ul, ol {
  margin: 0 0 1.5em 3em; }

ul {
  list-style: disc; }

ol {
  list-style: decimal; }

li > ul,
li > ol {
  margin-bottom: 0;
  margin-left: 1.5em; }

dt {
  font-weight: bold; }

dd {
  margin: 0 1.5em 1.5em; }

/*--------------------------------------------------------------
# Tables
--------------------------------------------------------------*/
table {
  margin: 0 0 1.5em;
  width: 100%; }

/*--------------------------------------------------------------
# Navigation
--------------------------------------------------------------*/
#navi-anchor {
  display: none;
  width: 0;
  height: 0; }

.main-navigation {
  clear: both;
  position: fixed;
  z-index: 999;
  display: block;
  float: left;
  left: 0;
  top: 0;
  width: 100%;
  min-height: 34px; }
  .main-navigation label {
    display: block; }
  .main-navigation #nav-bars {
    display: inline-block;
    float: right;
    margin: 8px 15px 8px 0px; }
    .main-navigation #nav-bars .stripe {
      width: 18px;
      height: 3px;
      background: #3cb44a;
      margin-bottom: 3px;
      transform-origin: left;
      transition: .3s linear all; }
  .main-navigation ul {
    display: block;
    opacity: 0;
    visibility: hidden;
    transition: 0.3s linear all;
    list-style: none;
    margin: 0;
    padding-left: 0;
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 999;
    background: #fff;
    padding-top: 40px; }
    .main-navigation ul ul {
      box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
      position: absolute;
      display: block;
      height: auto;
      min-width: 200px;
      background: #fff;
      top: calc(100% + 15px);
      text-align: left;
      visibility: hidden;
      opacity: 0;
      transition: .4s ease-in-out all;
      left: 0;
      z-index: 99999; }
      .main-navigation ul ul ul {
        left: -999em;
        top: 0; }
        .main-navigation ul ul li {
            text-align: left;
            padding-left: 15px;
        }
      .main-navigation ul ul li:hover > ul, .main-navigation ul ul li.focus > ul {
        left: 100%; }
      .main-navigation ul ul a {
        min-width: 200px;
        text-transform: capitalize;
      }
    .main-navigation ul li:hover > ul,
    .main-navigation ul li.focus > ul {
      visibility: visible;
      top: 100%;
      opacity: 1;}
  .main-navigation li {
    float: left;
    position: relative;
    width: 100%;
    text-align: center; }
    .main-navigation li:hover > a, .main-navigation li.focus > a {
      color: #3cb44a; }
  .main-navigation a {
    display: block;
    color: #191919;
    text-decoration: none;
    font-size: 16px;
    text-transform: uppercase; }
    .main-navigation a:visited {
      color: #191919; }
  .main-navigation .current_page_item > a,
  .main-navigation .current-menu-item > a,
  .main-navigation .current_page_ancestor > a,
  .main-navigation .current-menu-ancestor > a {
    color: #3cb44a; }

/* Small menu. */
#navi-anchor:checked ~ div > ul {
  opacity: 1;
  visibility: visible; }

#navi-anchor:checked ~ #nav-bars {
  position: fixed;
  z-index: 99999;
  right: 0px; }
  #navi-anchor:checked ~ #nav-bars .stripe {
    background-color: #990000; }
  #navi-anchor:checked ~ #nav-bars .stripe:nth-child(1) {
    transform: rotate(45deg); }
  #navi-anchor:checked ~ #nav-bars .stripe:nth-child(2) {
    opacity: 0; }
  #navi-anchor:checked ~ #nav-bars .stripe:nth-child(3) {
    transform: rotate(-45deg); }

.menu-toggle:before {
  content: "\2630";
  display: inline-block;
  margin-right: 5px; }

@media screen and (min-width: 769px) {
  .main-navigation {
    position: relative;
    background: transparent;
    z-index: 99; }
    .main-navigation #nav-bars {
      display: none; }

  .menu-toggle {
    display: none; }

  .main-navigation ul {
    opacity: 1;
    padding-top: 0px;
    visibility: visible;
    position: static;
    background: transparent;
    display: flex;
    flex-flow: row nowrap;
    justify-content: space-between; }
    .main-navigation ul li {
      width: auto; }
      .main-navigation ul li a {
        line-height: 38px; } }
.site-main .comment-navigation, .site-main
.posts-navigation, .site-main
.post-navigation {
  margin: 0 0 1.5em;
  overflow: hidden; }
.comment-navigation .nav-previous,
.posts-navigation .nav-previous,
.post-navigation .nav-previous {
  float: left;
  width: 50%; }
.comment-navigation .nav-next,
.posts-navigation .nav-next,
.post-navigation .nav-next {
  float: right;
  text-align: right;
  width: 50%; }

/*--------------------------------------------------------------
# Links
--------------------------------------------------------------*/
a {
  color: royalblue; }
  a:visited {
    color: purple; }
  a:hover, a:focus, a:active {
    color: midnightblue; }
  a:focus {
    outline: thin dotted; }
  a:hover, a:active {
    outline: 0; }

/*--------------------------------------------------------------
# Layout
--------------------------------------------------------------*/
html {
  box-sizing: border-box; }

*,
*:before,
*:after {
  /* Inherit box-sizing to make it easier to change the property for components that leverage other behavior; see http://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
  box-sizing: inherit; }

body {
  background: #fff;
  /* Fallback for when there is no custom background color defined. */ }

.content-area {
  float: left;
  width: 100%; }

.site-content .widget-area {
  overflow: hidden; }

.site-content #tertiary.widget-area {
  margin: 0 0 0 -25%; }

.site-footer {
  clear: both;
  width: 100%; }

/*--------------------------------------------------------------
## Posts
--------------------------------------------------------------*/
.sticky {
  display: block; }

.hentry {
  margin: 0 0 1.5em; }

.byline,
.updated:not(.published) {
  display: none; }

.single .byline,
.group-blog .byline {
  display: inline; }

.page-content,
.entry-content,
.entry-summary {
  margin: 1.5em 0 0; }

/*--------------------------------------------------------------
## Pages
--------------------------------------------------------------*/
.page-links {
  clear: both;
  margin: 0 0 1.5em; }

/*--------------------------------------------------------------
# Comments
--------------------------------------------------------------*/
.comment-content a {
  word-wrap: break-word; }

.bypostauthor {
  display: block; }

/*--------------------------------------------------------------
# Widgets
--------------------------------------------------------------*/
.widget {
  margin: 0 0 1.5em;
  /* Make sure select elements fit in widgets. */ }
  .widget select {
    max-width: 100%; }

/*--------------------------------------------------------------
# Infinite scroll
--------------------------------------------------------------*/
/* Globally hidden elements when Infinite Scroll is supported and in use. */
.infinite-scroll .posts-navigation,
.infinite-scroll.neverending .site-footer {
  /* Theme Footer (when set to scrolling) */
  display: none; }

/* When Infinite Scroll has reached its end we need to re-display elements that were hidden (via .neverending) before. */
.infinity-end.neverending .site-footer {
  display: block; }

/*--------------------------------------------------------------
# Media
--------------------------------------------------------------*/
img {
  height: auto;
  /* Make sure images are scaled correctly. */
  max-width: 100%;
  /* Adhere to container width. */ }

.page-content .wp-smiley,
.entry-content .wp-smiley,
.comment-content .wp-smiley {
  border: none;
  margin-bottom: 0;
  margin-top: 0;
  padding: 0; }

/* Make sure embeds and iframes fit their containers. */
embed,
iframe,
object {
  max-width: 100%; }

.wp-caption {
  margin: 1em 0 1.5em;
  max-width: 100%; }
  .wp-caption img[class*="wp-image-"] {
    display: block;
    margin-left: auto;
    margin-right: auto; }
  .wp-caption .wp-caption-text {
    margin: 0.8075em 0; }

/* Ensure center-aligned captions center-align properly. */
.wp-caption.aligncenter {
  margin-left: auto;
  margin-right: auto; }

/* Give some padding to floated elements, to prevent them butting up against text. */
.wp-caption.alignleft {
  margin-right: 20px; }

.wp-caption.alignright {
  margin-left: 20px; }

.wp-caption-text {
  text-align: center; }

/*--------------------------------------------------------------
## Galleries
--------------------------------------------------------------*/
.gallery {
  margin-bottom: 1.5em; }

.gallery-item {
  display: inline-block;
  text-align: center;
  vertical-align: top;
  width: 100%; }
  .gallery-columns-2 .gallery-item {
    max-width: 50%; }
  .gallery-columns-3 .gallery-item {
    max-width: 33.33%; }
  .gallery-columns-4 .gallery-item {
    max-width: 25%; }
  .gallery-columns-5 .gallery-item {
    max-width: 20%; }
  .gallery-columns-6 .gallery-item {
    max-width: 16.66%; }
  .gallery-columns-7 .gallery-item {
    max-width: 14.28%; }
  .gallery-columns-8 .gallery-item {
    max-width: 12.5%; }
  .gallery-columns-9 .gallery-item {
    max-width: 11.11%; }

.gallery-caption {
  display: block; }

/*-------------------------------------------------------------
# Vinabits
-------------------------------------------------------------*/
body, button, input, select, textarea {
  font-family: 'Roboto Condensed'; }

.delay-0 {
  animation-delay: 0s; }

.delay-100 {
  animation-delay: 0.1s; }

.delay-200 {
  animation-delay: 0.2s; }

.delay-300 {
  animation-delay: 0.3s; }

.delay-400 {
  animation-delay: 0.4s; }

.delay-500 {
  animation-delay: 0.5s; }

.delay-600 {
  animation-delay: 0.6s; }

.delay-700 {
  animation-delay: 0.7s; }

.delay-800 {
  animation-delay: 0.8s; }

.delay-900 {
  animation-delay: 0.9s; }

.delay-1000 {
  animation-delay: 1s; }

.delay-1100 {
  animation-delay: 1.1s; }

.delay-1200 {
  animation-delay: 1.2s; }

.delay-1300 {
  animation-delay: 1.3s; }

.delay-1400 {
  animation-delay: 1.4s; }

.delay-1500 {
  animation-delay: 1.5s; }

.delay-1600 {
  animation-delay: 1.6s; }

.delay-1700 {
  animation-delay: 1.7s; }

.delay-1800 {
  animation-delay: 1.8s; }

.delay-1900 {
  animation-delay: 1.9s; }

.delay-2000 {
  animation-delay: 2s; }

.delay-2100 {
  animation-delay: 2.1s; }

.delay-2200 {
  animation-delay: 2.2s; }

.delay-2300 {
  animation-delay: 2.3s; }

.delay-2400 {
  animation-delay: 2.4s; }

.delay-2500 {
  animation-delay: 2.5s; }

.delay-2600 {
  animation-delay: 2.6s; }

.delay-2700 {
  animation-delay: 2.7s; }

.delay-2800 {
  animation-delay: 2.8s; }

.delay-2900 {
  animation-delay: 2.9s; }

.delay-3000 {
  animation-delay: 3s; }

.delay-3100 {
  animation-delay: 3.1s; }

.delay-3200 {
  animation-delay: 3.2s; }

.delay-3300 {
  animation-delay: 3.3s; }

.delay-3400 {
  animation-delay: 3.4s; }

.delay-3500 {
  animation-delay: 3.5s; }

.delay-3600 {
  animation-delay: 3.6s; }

.delay-3700 {
  animation-delay: 3.7s; }

.delay-3800 {
  animation-delay: 3.8s; }

.delay-3900 {
  animation-delay: 3.9s; }

.delay-4000 {
  animation-delay: 4s; }

.delay-4100 {
  animation-delay: 4.1s; }

.delay-4200 {
  animation-delay: 4.2s; }

.delay-4300 {
  animation-delay: 4.3s; }

.delay-4400 {
  animation-delay: 4.4s; }

.delay-4500 {
  animation-delay: 4.5s; }

.delay-4600 {
  animation-delay: 4.6s; }

.delay-4700 {
  animation-delay: 4.7s; }

.delay-4800 {
  animation-delay: 4.8s; }

.delay-4900 {
  animation-delay: 4.9s; }

.delay-5000 {
  animation-delay: 5s; }

.delay-5100 {
  animation-delay: 5.1s; }

.delay-5200 {
  animation-delay: 5.2s; }

.delay-5300 {
  animation-delay: 5.3s; }

.delay-5400 {
  animation-delay: 5.4s; }

.delay-5500 {
  animation-delay: 5.5s; }

.delay-5600 {
  animation-delay: 5.6s; }

.delay-5700 {
  animation-delay: 5.7s; }

.delay-5800 {
  animation-delay: 5.8s; }

.delay-5900 {
  animation-delay: 5.9s; }

.delay-6000 {
  animation-delay: 6s; }

.delay-6100 {
  animation-delay: 6.1s; }

.delay-6200 {
  animation-delay: 6.2s; }

.delay-6300 {
  animation-delay: 6.3s; }

.delay-6400 {
  animation-delay: 6.4s; }

.delay-6500 {
  animation-delay: 6.5s; }

.delay-6600 {
  animation-delay: 6.6s; }

.delay-6700 {
  animation-delay: 6.7s; }

.delay-6800 {
  animation-delay: 6.8s; }

.delay-6900 {
  animation-delay: 6.9s; }

.delay-7000 {
  animation-delay: 7s; }

.delay-7100 {
  animation-delay: 7.1s; }

.delay-7200 {
  animation-delay: 7.2s; }

.delay-7300 {
  animation-delay: 7.3s; }

.delay-7400 {
  animation-delay: 7.4s; }

.delay-7500 {
  animation-delay: 7.5s; }

.delay-7600 {
  animation-delay: 7.6s; }

.delay-7700 {
  animation-delay: 7.7s; }

.delay-7800 {
  animation-delay: 7.8s; }

.delay-7900 {
  animation-delay: 7.9s; }

.delay-8000 {
  animation-delay: 8s; }

.delay-8100 {
  animation-delay: 8.1s; }

.delay-8200 {
  animation-delay: 8.2s; }

.delay-8300 {
  animation-delay: 8.3s; }

.delay-8400 {
  animation-delay: 8.4s; }

.delay-8500 {
  animation-delay: 8.5s; }

.delay-8600 {
  animation-delay: 8.6s; }

.delay-8700 {
  animation-delay: 8.7s; }

.delay-8800 {
  animation-delay: 8.8s; }

.delay-8900 {
  animation-delay: 8.9s; }

.delay-9000 {
  animation-delay: 9s; }

.delay-9100 {
  animation-delay: 9.1s; }

.delay-9200 {
  animation-delay: 9.2s; }

.delay-9300 {
  animation-delay: 9.3s; }

.delay-9400 {
  animation-delay: 9.4s; }

.delay-9500 {
  animation-delay: 9.5s; }

.delay-9600 {
  animation-delay: 9.6s; }

.delay-9700 {
  animation-delay: 9.7s; }

.delay-9800 {
  animation-delay: 9.8s; }

.delay-9900 {
  animation-delay: 9.9s; }

.delay-10000 {
  animation-delay: 10s; }

.has-animation {
  opacity: 0; }

.smooth {
  transition: 1s linear all; }

#masthead {
  background: #fff; }
  #masthead .logo-container {
    font-size: 0px; }
  @media screen and (max-width: 37.5em) {
    #masthead {
      padding-top: 0px; }
      #masthead .logo-container {
        text-align: center; }
        #masthead .logo-container .mui--text-right {
          text-align: center !important; } }
  @media screen and (min-width: 37.5em) {
      #masthead > .mui-container > .mui-row {
        display: flex;
        align-items: center; }
  }

[class*="wonderpluginslider-container"] {
  overflow-x: hidden; }

[class*="amazingslider-nav"] {
  top: auto !important;
  bottom: 30px;
  margin-top: 0px; }
  [class*="amazingslider-nav"] [style*="left top"] {
    background-image: none !important;
    border-radius: 50%;
    background-color: #f3f3f3 !important; }
  [class*="amazingslider-nav"] [style*="left bottom"] {
    background-image: none !important;
    border-radius: 50%;
    background-color: #891307 !important; }

[class*="amazingslider-text-wrapper"] {
  left: calc(50% - 450px) !important;
  bottom: auto !important;
  top: 35%; }
  [class*="amazingslider-text-wrapper"] [class*="amazingslider-text"] > div {
    text-align: center;
    width: 100%; }

.wonderpluginslider [class*="amazingslider-arrow-left"] {
  left: calc(50% - 1170px / 2) !important; }
.wonderpluginslider [class*="amazingslider-arrow-right"] {
  right: calc(50% - 1170px / 2) !important; }

.section-1 {
  padding: 0px 15px; }

.section-1 > div > div {
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between; }
  .section-1 > div > div .card-layout {
    margin-top: 20px;
    flex-basis: 100%; }
    @media screen and (min-width: 37.5em) {
      .section-1 > div > div .card-layout {
        margin-top: 0px;
        flex-basis: 32.83%; } }
    @media screen and (min-width: 1170px) {
      .section-1 > div > div .card-layout {
        margin-top: 0px;
        flex-basis: 30.83%; } }

    .section-1 > div > div .card-layout a {
      text-decoration: none;
      color: #000;
      font-size: 16px; }
      .section-1 > div > div .card-layout a:hover img {
        filter: grayscale(0%); }
    .section-1 > div > div .card-layout .card-content {
      background: #3cb44a;
      
      padding: 10px; }
      @media screen and (min-width: 1200px) {
          .section-1 > div > div .card-layout .card-content {
              height: 153px;
          }
      }
    .section-1 > div > div .card-layout header {
      font-size: 22px;
      min-height: 2.5em;
      position: relative; }
      .section-1 > div > div .card-layout header h3.front-page-title {
        position: absolute;
        left: 0;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        font-size: 16px;
        text-align: center;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        margin-top: 0px;
        margin-bottom: 0px; }
        @media screen and (min-width: 1200px) {
          .section-1 > div > div .card-layout header h3.front-page-title {
            font-size: 21px;  
          }
        }
    .section-1 > div > div .card-layout p {
      text-align: center;
      margin-bottom: 0px;
      position: relative;
      transition: .2s ease-in-out all;
      font-size: 16px;
      line-height: 22px;
      color: #fff;
      font-weight: 300; }
    .section-1 > div > div .card-layout .card-image {
      min-width: 100%;
      min-height: 176px;
      overflow: hidden;
      position: relative; }
      @media screen and (min-width: 1200px) {
        .section-1 > div > div .card-layout .card-image {
          min-width: 370px; } }
          .section-1 > div > div .card-layout .card-image {
              background: #ccc;
          }
      .section-1 > div > div .card-layout .card-image img {
        position: absolute;
        top: 50%;
        left: 50%;
        filter: grayscale(50%);
        transition: .2s linear all;
        transform: translate(-50%, -50%); }
  .section-1 > div > div:after, .section-1 > div > div:before {
    content: none; }

@media screen and (min-width: 37.5em) {
  .section-1 {
    padding: 0px;
    margin-top: -153px;
    margin-bottom: 40px;
    position: relative; }
    .section-1 p {
      line-height: 22px; } }
.section-2 {
  padding: 0px 15px 20px;
  background: url("wp-content/themes/minhhanthinh/assets/images/sec2-bg.png") repeat left top transparent; }
  .section-2 .front-title {
    margin: 2em 0;
    text-align: center;
    width: 100%;
    position: relative; }
  .section-2 .introduce {
    line-height: 2em; }
  .section-2 .front-page-title {
    font-size: 20px;
    font-weight: bold;
    z-index: 1;
    color: #333;
    position: relative;
    margin-bottom: 0px;
    margin-top: 0px;
    display: inline-block;
    padding: 0px 1em;
    text-transform: uppercase; }
  .section-2 .product-tabs ul {
    text-align: center;
    margin: 0;
    width: 100%;
    margin-bottom: 30px; }
    .section-2 .product-tabs ul li {
      background: #999;
      margin-left: 8px; }
      .section-2 .product-tabs ul li.mui--is-active {
        border: none;
        background: #3cb44a; }
      .section-2 .product-tabs ul li a {
        border: none !important;
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        height: 38px;
        line-height: 38px;
        padding: 0;
        width: 200px; }
  .section-2 .product-tabs div.mui-tabs__pane .item h5 {
    font-size: 15px;
    color: #333;
    text-transform: uppercase;
    text-align: center; }

.textwidget {
  text-align: justify; }

/* .list-buttons {
 *   display: flex;
 *   flex-flow: row wrap;
 *   justify-content: space-between;
 *   margin-top: 2rem;
 *   a.su-button {
 *       flex-basis: 366px;
 *       text-transform: uppercase;
 *       margin-bottom: 10px;
 *       text-align: left;
 *       span {
 *           font-size: 14px !important;
 *           font-weight: 300;
 *           padding: 8px 5px !important;
 *           color: #fff !important;
 *           i {
 *               margin-right: 0px !important;
 *               font-size: 24px !important;
 *           }
 *       }
 *
 *   }
 * } */
@media screen and (min-width: 37.5em) {
  .section-2 {
    padding-left: 0px;
    padding-right: 0px; }
    .section-2 .front-page-title {
      font-size: 30px; }
    .section-2 .list-buttons {
      margin-top: 7rem; }
      .section-2 .list-buttons a.su-button {
        margin-bottom: 0px; } }






.section-3 {
  padding: 0px 15px;
  background: linear-gradient(to left, #f5f5f5, #fcfcfc); }
  .section-3 .front-page-title {
    font-size: 30px;
    font-weight: bold;
    color: #3cb44a;
    text-transform: uppercase;
    text-align: center;
    margin: 52px 0px 40px; }
  .section-3 .service {
    margin-top: 0px; }
  .section-3 p {
    line-height: 2; }
  .section-3 .news-card {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between; }
    .section-3 .news-card > div {
      flex-basis: calc(50% - 12px); }
  .section-3 .news-gallery {
    margin: 0px -2.5px;
    display: flex;
    flex-flow: column wrap; }
    @media screen and (min-width: 37.5em) {
        .section-3 {
            padding: 0;
        }
      .section-3 .news-gallery {
        height: 393px; } }
    .section-3 .news-gallery .news-gallery-item {
      position: relative;
      overflow: hidden;
      height: 150px;
      margin-bottom: 15px;
      flex-grow: 1; }
      .section-3 .news-gallery .news-gallery-item .thumb-container {
        height: inherit; }
        .section-3 .news-gallery .news-gallery-item .thumb-container img {
          max-width: none;
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%, -50%); }
      .section-3 .news-gallery .news-gallery-item a:hover .news-container {
        opacity: 1; }
      .section-3 .news-gallery .news-gallery-item .news-container {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 99;
        background: rgba(0, 0, 0, 0.35);
        opacity: 0;
        transition: 0.3s linear all;
        padding: 20px 30px; }
        .section-3 .news-gallery .news-gallery-item .news-container h3 {
          margin: 0px;
          font-size: 17px;
          text-transform: uppercase;
          color: #fff;
          font-weight: bold; }
      @media screen and (min-width: 37.5em) {
        .section-3 .news-gallery .news-gallery-item.item-1 {
          height: 152px; }
        .section-3 .news-gallery .news-gallery-item.item-2 {
          height: 230px; }
        .section-3 .news-gallery .news-gallery-item.item-3 {
          height: 388px; }
        .section-3 .news-gallery .news-gallery-item.item-4 {
          height: 190px; }
        .section-3 .news-gallery .news-gallery-item.item-5 {
          height: 190px; }
        .section-3 .news-gallery .news-gallery-item.item-6 {
          height: 235px; }
        .section-3 .news-gallery .news-gallery-item.item-7 {
          height: 147px; } }
      @media screen and (min-width: 37.5em) {
        .section-3 .news-gallery .news-gallery-item {
          width: calc(100% / 4 - 5px);
          margin: 2.55px; } }








.section-4 {
  padding-left: 15px;
  padding-right: 15px;
  background: url("wp-content/themes/minhhanthinh/assets/images/sec4-bg.png") center bottom / cover transparent; }
  @media screen and (min-width: 37.5em) {
    .section-4 {
      padding-left; 0px;
      padding-right: 0px;
      padding-top: 100px;
      padding-bottom: 35px; } }

    .section-4 .front-section {
        width: 100%;
    }
  @media screen and (min-width: 37.5em) {
  .section-4 > div > div {
    display: flex;
    justify-content: flex-start; }
    .section-4 .front-section {
        width: calc(50% - 15px); }
    .section-4 .front-section:last-child {
      margin-left: 30px; }

  }
      .section-4 .widget-header {
    position: relative; }
    .section-4 .widget-header:before {
      content: " ";
      width: 100%;
      height: 2px;
      position: absolute;
      top: calc(50% - 2px);
      left: 0px;
      background: #3cb44a; }
  .section-4 .front-page-title {
    background: #fafafa;
    padding-right: 15px;
    display: inline-block;
    position: relative;
    font-weight: bold;
    font-size: 30px;
    line-height: 1em;
    margin: 0px;
    text-transform: uppercase;
    color: #333; }
  .section-4 .testimonals .slick-list {
    padding: 35px 0px 0px !important; }
  .section-4 .testimonals .testimonial-item {
    display: flex;
    flex-flow: row nowrap;
    margin-bottom: 25px; }
    .section-4 .testimonals .testimonial-item .thumb {
      display: none;
      flex-basis: 23%; }
      .section-4 .testimonals .testimonial-item .thumb .frame {
        width: 100px;
        height: 100px;
        position: relative;
        border: 3px solid #333;
        border-radius: 50%;
        overflow: hidden; }
        .section-4 .testimonals .testimonial-item .thumb .frame img {
          position: absolute;
          max-width: none;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%); }
    .section-4 .testimonals .testimonial-item .author {
      flex-basis: 100%;
      padding-right: 15px;
      position: relative; }
      @media screen and (min-width: 769px) {
        .section-4 .testimonals .testimonial-item .thumb {
            display: block;
        }
        .section-4 .testimonals .testimonial-item .author {
            flex-basis: 77%;
        }
      }

      .section-4 .testimonals .testimonial-item .author:before {
        content: " ";
        position: absolute;
        width: 20px;
        border-top: 20px solid transparent;
        border-bottom: 20px solid transparent;
        border-right: 20px solid #f3f3f3;
        left: -20px;
        top: 28%; }
      .section-4 .testimonals .testimonial-item .author .text {
        background: #f3f3f3;
        border-radius: 10px;
        box-shadow: 1px 1px 2px -1px #999;
        padding: 10px 20px; }
        .section-4 .testimonals .testimonial-item .author .text h5, .section-4 .testimonals .testimonial-item .author .text .company {
          text-transform: uppercase;
          font-size: 16px;
          margin: 0px;
          font-weight: bold;
          color: #333; }
        .section-4 .testimonals .testimonial-item .author .text blockquote {
          margin: 0px;
          font-size: 16px;
          font-style: italic;
          color: #666; }
  .section-4 .news-featured-list {
    padding-top: 35px; }
    .section-4 .news-featured-list .news-featured-item {
      margin-bottom: 20px; }
      .section-4 .news-featured-list .news-featured-item a {
        display: flex;
        flex-flow: row nowrap;
        text-decoration: none; }
        .section-4 .news-featured-list .news-featured-item a .thumb-container {
            display: none;
        }
        @media screen and (min-width: 769px) {
            .section-4 .news-featured-list .news-featured-item a .thumb-container {
                display: block;
              flex-basis: 193px;
              flex-shrink: 0; }
        }
        .section-4 .news-featured-list .news-featured-item a .news-container {
          color: #333;
          font-size: 15px; }
          .section-4 .news-featured-list .news-featured-item a .news-container h3 {
            color: #ff0000;
            line-height: 2em;
            font-size: 15px;
            text-transform: uppercase;
            margin: 0px; }
          .section-4 .news-featured-list .news-featured-item a .news-container p {
            margin-bottom: 0px; }

#colophon {
  background: url("wp-content/themes/minhhanthinh/assets/images/footer-bg.png") no-repeat left center/cover transparent; }
  #colophon .footer-bar {
    display: flex;
    flex-flow: row wrap;
    padding: 30px 0px;
    color: #ccc; }
    #colophon .footer-bar .footer-section {
      width: 100%; }
      @media screen and (min-width: 37.5em) {
        #colophon .footer-bar .footer-section {
          width: 50%; } }
    #colophon .footer-bar p {
      margin-bottom: 0px;
      font-size: 13px;
      text-align: right; }
      #colophon .footer-bar p a {
        color: #ccc; }
        #colophon .footer-bar p a:hover {
          text-decoration: none; }
    #colophon .footer-bar .search-form {
      position: relative;
      margin-top: 1em;
      font-size: 15px;
      margin-bottom: 3.9em; }
      #colophon .footer-bar .search-form button {
        position: absolute;
        background: none !important;
        outline: none;
        box-shadow: none;
        border: none;
        right: .7em;
        top: .4em;
        font-size: 18px;
        text-shadow: none;
        padding: 0;
        color: #ccc; }
      #colophon .footer-bar .search-form input {
        width: 100%;
        background: transparent;
        box-shadow: none;
        outline: none;
        color: #ccc;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 15px;
        box-sizing: border-box !important; }
        #colophon .footer-bar .search-form input:input-placeholder {
          color: #ccc; }
    #colophon .footer-bar .contact-list ul li {
      font-size: 15px;
      margin-bottom: .5em;
      color: #fff7e2; }
      #colophon .footer-bar .contact-list ul li:before {
        width: 1.2em; }
      #colophon .footer-bar .contact-list ul li.home {
        text-transform: uppercase; }
        #colophon .footer-bar .contact-list ul li.home:before {
          content: ""; }
      #colophon .footer-bar .contact-list ul li.address:before {
        content: ""; }
      #colophon .footer-bar .contact-list ul li.phone:before {
        content: ""; }
      #colophon .footer-bar .contact-list ul li.email:before {
        content: ""; }
      #colophon .footer-bar .contact-list ul li.website:before {
        content: ""; }
  #colophon .footer-widget-title {
    font-size: 30px;
    color: #fff7e2;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 25px;
    position: relative;
    line-height: 30px; }
  #colophon .bottom-bar {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    padding: 25px 15px;
    margin-bottom: 38px; }
    #colophon .bottom-bar .bottom-item {
      flex-basis: 100%; }
    @media screen and (min-width: 37.5em) {
      #colophon .bottom-bar .bottom-item {
        flex-basis: 366px; } }
    #colophon .bottom-bar h4 {
      font-size: 14px;
      font-weight: 300;
      text-transform: uppercase;
      color: #333;
      line-height: 30px;
      margin: 0px; }
    @media screen and (min-width: 37.5em) {
      #colophon .bottom-bar {
        padding: 45px 0px 25px; } }
  #colophon ul {
    margin: 0px;
    padding: 0px;
    list-style: none; }
    #colophon ul li {
      margin-bottom: 10px; }
      #colophon ul li:before {
        content: "";
        font-family: FontAwesome;
        font-size: 17px;
        display: inline-block;
        margin-right: 10px;
        text-align: center;
        line-height: 30px; }
      #colophon ul li a {
        font-size: 14px;
        font-weight: 300;
        color: #333;
        text-transform: uppercase; }
  #colophon .connect-us {
    text-align: right;
    font-size: 14px;
    margin-bottom: 30px; }
    #colophon .connect-us ul {
      display: inline-block; }
      #colophon .connect-us ul li {
        margin-left: 15px !important; }
        #colophon .connect-us ul li a {
          background-color: transparent !important;
          padding: 0px !important;
          width: auto !important;
          height: auto !important; }

#secondary .widget-title {
  font-size: 18px;
  color: #333;
  text-transform: uppercase;
  font-weight: 700;
  margin-top: 25px;
  border-bottom: 1px solid #007639;
  margin-bottom: 15px;
  position: relative; }
#secondary .widget ul {
  margin: 0px;
  padding: 0px;
  list-style: none; }
#secondary .widget_nav_menu ul li {
  font-weight: 0px; }
  #secondary .widget_nav_menu ul li a {
    color: #000;
    background: #fff;
    border-left: 5px solid #007639;
    width: 100%;
    text-decoration: none;
    font-size: 16px;
    line-height: 2.5em;
    margin: 3px 0px;
    display: inline-block;
    padding-left: 10px;
    box-shadow: 1px 1px 1px 0px #999;
    transition: .3s linear all; }
    #secondary .widget_nav_menu ul li a:hover {
      text-indent: 5%; }
#secondary .news-aside-list .news-aside-item {
  padding: 10px 5px;
  font-size: 0px;
  border-bottom: 1px dotted #999;
  transition: .2s linear all; }
  #secondary .news-aside-list .news-aside-item:hover {
    background: #f9f9f9; }
  #secondary .news-aside-list .news-aside-item a {
    font-size: 14px;
    text-decoration: none;
    display: flex; }
    #secondary .news-aside-list .news-aside-item a .thumb-container {
      flex-basis: 100px;
      flex-shrink: 0;
      font-size: 0px; }
      #secondary .news-aside-list .news-aside-item a .thumb-container img {
          border: 1px solid #999;
      }
    #secondary .news-aside-list .news-aside-item a .news-container {
      flex-grow: 1;
      padding-left: 10px; }
      #secondary .news-aside-list .news-aside-item a .news-container h3 {
        margin-top: 0px;
        font-size: 16px;
        font-weight: bold;
        line-height: 1.5em;
        color: #007639; }

.news-list {
  margin: 1.5em 0px;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between; }
  .news-list > article {
    flex-basis: 100%;
    background: #fff;
    box-shadow: 1px 1px 2px -1px #ccc;
    transition: .3s ease-in-out all;
    padding: 15px 0px; }
    @media screen and (min-width: 769px) {
        .news-list > article {
            flex-basis: calc(100% / 3 - 12px);
        }
    }
    .news-list > article a {
      text-decoration: none; }
      .news-list > article a img {
        transition: .3s ease-in-out all;
        filter: grayscale(40%); }
      .news-list > article a:hover img {
        filter: grayscale(0%); }
      .news-list > article a h3 {
        font-size: 20px;
        color: #333;
        text-transform: uppercase;
        margin-top: 0px;
        margin-bottom: 0px; }
    .news-list > article a:visited {
      color: inherit; }
    .news-list > article .thumb-container a {
      display: inline-block;
      position: relative;
      width: 100%;
      height: 200px;
      overflow: hidden; }
      .news-list > article .thumb-container a img {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        max-width: none;
        transform: translate(-50%, -50%); }
    .news-list > article .thumb-container {
      transition: .3s ease-in-out all; }
    .news-list > article:hover .thumb-container {
      transform: translate(-5px, -5px); }

.wonderpluginslider-container [class*="amazingslider-title"] {
  text-transform: uppercase; }

@media screen and (max-width: 37.5em) {
  .xs-zero-padding {
    padding: 0px !important; } }
.no-padding {
  padding: 0px; }

#copyright {
  background: #3cb44a;
  text-align: center;
  font-size: 15px;
  color: #fff7e2;
  padding: 5px; }
  #copyright img {
    display: inline-block;
    vertical-align: middle; }

body:not(.front-page) #primary {
  background: #f3f3f3; }
body:not(.front-page) .title-bar {
  position: relative;
  margin-top: 0px;
  z-index: 1;
  color: #fff; }
  body:not(.front-page) .title-bar a {
    color: #fff; }
  body:not(.front-page) .title-bar h1 {
    text-transform: uppercase;
    margin-bottom: 0; }
  body:not(.front-page) .title-bar .breadcrumb {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    margin-bottom: 18px; }
    body:not(.front-page) .title-bar .breadcrumb li + li:before {
      content: "\f105";
      padding: 0px 5px;
      font-family: FontAwesome; }
    body:not(.front-page) .title-bar .breadcrumb li:last-child {
      font-weight: bold; }
  body:not(.front-page) .title-bar > div:before {
    content: " ";
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    position: absolute;
    display: block;
    z-index: -1;
    background: #3cb44a; }
  body:not(.front-page) .title-bar:before {
    content: " ";
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    z-index: -1;
    background: url("./assets/images/header-line.png") no-repeat center center/cover transparent; }

@media screen and (min-width: 37.5em) {
  .testimonials .author .text h5 {
    color: #cc00cc; }

  #copyright {
    background: rgba(4, 103, 52, 0.81); }

  #colophon {
    position: relative; }
    #colophon .contact {
      font-size: 14px;
      min-height: 300px; }
      #colophon .contact ul li {
        margin-bottom: 12px; }
      #colophon .contact .social-icon {
        text-align: left;
        padding-top: 0px;
        margin-bottom: 17px; }
      #colophon .contact .social-easy {
        display: inline-block; }
    #colophon .map {
      position: absolute;
      width: 50%;
      top: 0;
      font-size: 0;
      right: 0; } }

/*# sourceMappingURL=style.css.map */

      .main-content article.post.hentry {
          margin-top: 15px;
      }
      .main-content article.post.hentry .entry-meta {
          font-size: smaller;
          font-style: italic;
          color: #333;
      }
      .main-content article.post.hentry .entry-meta a {
          color: #333;
      }

      .card-view .entry-meta {
            font-size: 13px;
            font-weight: 400;
            margin: 5px 0px;
            color: #666;
      }
      .card-view .entry-meta span {
          margin-right: 15px;
      }
      .card-view .entry-meta a {
          color: #666;
      }

.as-btn-blue-medium {
        color: white;
        font-weight: bold;
        font-size: 2em;}
</style>

</head>









<body>
    <div>
