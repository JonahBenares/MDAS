<!-- modal -->
<?php
ini_set('memory_limit', '-1'); 
$ci =& get_instance(); ?>
<<<<<<< HEAD
=======
<style type="text/css">
   /*
Template Name: Admin Template
Author: Niravjoshi / Wrappixel
File: scss
*/
@import url(../../../assets/dist/css/googleapis.css);
/*Theme Colors*/
/**
 * Table Of Content
 *
 *  1. Color system
 *  2. Options
 *  3. Body
 *  4. Typography
 *  5. Breadcrumbs
 *  6. Cards
 *  7. Dropdowns
 *  8. Buttons
 *  9. Typography
 *  10. Progress bars
 *  11. Tables
 *  12. Forms
 *  14. Component
 */
@import url(../../../assets/icons/font-awesome/css/font-awesome.min.css);
@import url(../../../assets/icons/themify-icons/themify-icons.css);
@import url(../../../assets/dist/css/googleapis.css);
.skin-default-dark {
/*Theme Colors*/ }
.skin-default-dark .topbar {background: #fff; }
.skin-default-dark .topbar .navbar-dark .navbar-nav .nav-link {color: #adb5bd; }
.skin-default-dark .sidebar-nav ul li a.active, .skin-default-dark .sidebar-nav ul li a:hover {color: #009efb; }
.skin-default-dark .sidebar-nav ul li a.active i, .skin-default-dark .sidebar-nav ul li a:hover i {color: #009efb; }
.skin-default-dark .sidebar-nav > ul > li.active > a {color: #009efb; }
.skin-default-dark .sidebar-nav > ul > li.active > a i {color: #009efb; }
.skin-default-dark .page-titles .breadcrumb .breadcrumb-item.active {color: #009efb; }
.skin-default-dark .topbar .top-navbar .navbar-header .navbar-brand .dark-logo {display: inline-block;color: rgba(255, 255, 255, 0.8); }
.skin-default-dark .topbar .top-navbar .navbar-header .navbar-brand .light-logo {display: none; }
.skin-default-dark .left-sidebar {background: #2b2f3a; }
.skin-default-dark .left-sidebar .user-pro-body a.link {color: #8991a9; }
.skin-default-dark .left-sidebar .nav-text-box {border-color: transparent;background: rgba(0, 0, 0, 0.3); }
.skin-default-dark .left-sidebar .sidebar-nav > ul > li > a, .skin-default-dark .left-sidebar .sidebar-nav ul li a {color: #8991a9;-webkit-transition: 0.1s ease-in;-o-transition: 0.1s ease-in;transition: 0.1s ease-in; }
.skin-default-dark .left-sidebar .sidebar-nav > ul > li > a i, .skin-default-dark .left-sidebar .sidebar-nav ul li a i {color: #7f879b; }
.skin-default-dark .left-sidebar .sidebar-nav > ul > li > a:hover i, .skin-default-dark .left-sidebar .sidebar-nav > ul > li > a:hover, .skin-default-dark .left-sidebar .sidebar-nav ul li a:hover i, .skin-default-dark .left-sidebar .sidebar-nav ul li a:hover {color: #fff; }
.skin-default-dark .left-sidebar .sidebar-nav > ul > li > a.active, .skin-default-dark .left-sidebar .sidebar-nav > ul > li > a.active i, .skin-default-dark .left-sidebar .sidebar-nav ul li a.active, .skin-default-dark .left-sidebar .sidebar-nav ul li a.active i {color: #fff; }
.skin-default-dark .left-sidebar .sidebar-nav > ul > li.selected > a {color: #fff; }
.skin-default-dark .left-sidebar .sidebar-nav > ul > li.selected > a i {color: #fff; }
.skin-default-dark .left-sidebar .sidebar-nav ul li ul {background: rgba(0, 0, 0, 0.2); }
.skin-default-dark .ps > .ps__scrollbar-y-rail > .ps__scrollbar-y {background-color: rgba(255, 255, 255, 0.2); }
@media (min-width: 768px) {
  .skin-default-dark.mini-sidebar .sidebar-nav #sidebarnav > li > ul, .skin-default-dark.mini-sidebar .sidebar-nav #sidebarnav > li:hover > a {background: #1f2023; } 
}

/*!
 * Bootstrap v4.0.0 (https://getbootstrap.com)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
    --blue: #009efb;
    --indigo: #6610f2;
    --purple: #7460ee;
    --pink: #e83e8c;
    --red: #f62d51;
    --orange: #fb9678;
    --yellow: #ffbc34;
    --green: #36bea6;
    --teal: #20c997;
    --cyan: #01c0c8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --blue: #009efb;
    --indigo: #6610f2;
    --purple: #7460ee;
    --pink: #e83e8c;
    --red: #f62d51;
    --orange: #fb9678;
    --yellow: #ffbc34;
    --green: #36bea6;
    --teal: #20c997;
    --cyan: #01c0c8;
    --white: #fff;
    --gray: #6c757d;
    --primary: #7460ee;
    --secondary: #f8f9fa;
    --success: #36bea6;
    --info: #009efb;
    --warning: #ffbc34;
    --danger: #f62d51;
    --light: #f8f9fa;
    --dark: #343a40;
    --cyan: #01c0c8;
    --purple: #7460ee;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1600px;
    --font-family-sans-serif: "Rubik", sans-serif;
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

*,
*::before,
*::after { -webkit-box-sizing: border-box; box-sizing: border-box; }

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -ms-overflow-style: scrollbar;
    -webkit-tap-highlight-color: transparent; 
}

@-ms-viewport {width: device-width; }

article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section { display: block; }

body {
    margin: 0;
    font-family: "Rubik", sans-serif;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #edf1f5;
}

[tabindex="-1"]:focus { outline: 0 !important; }

hr {
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    height: 0;
    overflow: visible; 
}

h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem; 
}

p {
    margin-top: 0;
    margin-bottom: 1rem; 
}

abbr[title],
abbr[data-original-title] {
    text-decoration: underline;
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0; 
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit; 
}

ol,
ul,
dl {
    margin-top: 0;
    margin-bottom: 1rem; 
}

ol ol,
ul ul,
ol ul,
ul ol {
    margin-bottom: 0; 
}
dt {font-weight: 700; }
dd {margin-bottom: .5rem;margin-left: 0; }
blockquote {margin: 0 0 1rem; }
dfn {font-style: italic; }
b,strong {font-weight: bolder; }
small {font-size: 80%; }
sub,sup {position: relative;font-size: 75%;line-height: 0;vertical-align: baseline; }
sub {bottom: -.25em; }
sup {top: -.5em; }
a {color: #7460ee;text-decoration: none;background-color: transparent;-webkit-text-decoration-skip: objects; }
a:hover {color: #381be7;text-decoration: underline; }
a:not([href]):not([tabindex]) {color: inherit;text-decoration: none; }
a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {color: inherit;text-decoration: none; }
a:not([href]):not([tabindex]):focus {outline: 0; }

pre,code,kbd,samp {font-family: monospace, monospace;font-size: 1em; }

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar; }

figure {
  margin: 0 0 1rem; }

img {
  vertical-align: middle;
  border-style: none; }

svg:not(:root) {
  overflow: hidden; }

table {
  border-collapse: collapse; }

caption {
  padding-top: 1rem;
  padding-bottom: 1rem;
  color: #adb5bd;
  text-align: left;
  caption-side: bottom; }

th {
  text-align: inherit; }

label {
  display: inline-block;
  margin-bottom: .5rem; }

button {
  border-radius: 0; }

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color; }

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
input {
  overflow: visible; }

button,
select {
  text-transform: none; }

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none; }

input[type="radio"],
input[type="checkbox"] {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0; }

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox; }

textarea {
  overflow: auto;
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal; }

progress {
  vertical-align: baseline; }

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto; }

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none; }

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button; }

output {
  display: inline-block; }

summary {
  display: list-item;
  cursor: pointer; }

template {
  display: none; }

[hidden] {
  display: none !important; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-family: inherit;
  font-weight: 400;
  line-height: 1.2;
  color: inherit; }

h1, .h1 {
  font-size: 36px; }

h2, .h2 {
  font-size: 30px; }

h3, .h3 {
  font-size: 24px; }

h4, .h4 {
  font-size: 18px; }

h5, .h5 {
  font-size: 16px; }

h6, .h6 {
  font-size: 14px; }

h7, .h7 {
  font-size: 12px; }

h8, .h8 {
  font-size: 10px; }

.lead {
  font-size: 1.09375rem;
  font-weight: 300; }

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2; }

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2; }

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1); }

small,
.small {
  font-size: 80%;
  font-weight: 400; }

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3; }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 0.5rem; }

.initialism {
  font-size: 90%;
  text-transform: uppercase; }

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.09375rem; }

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d; }
  .blockquote-footer::before {
    content: "\2014 \00A0"; }

.img-fluid {
  max-width: 100%;
  height: auto; }

.img-thumbnail {
  padding: 0.25rem;
  background-color: #edf1f5;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto; }

.figure {
  display: inline-block; }

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1; }

.figure-caption {
  font-size: 90%;
  color: #6c757d; }

code,
kbd,
pre,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

code {
  font-size: 87.5%;
  color: #e83e8c;
  word-break: break-word; }
  a > code {
    color: inherit; }

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem; }
  kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700; }

pre {
  display: block;
  font-size: 87.5%;
  color: #212529; }
  pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal; }

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll; }

.container {
  width: 100%;
  padding-right: 10px;
  padding-left: 10px;
  margin-right: auto;
  margin-left: auto; }
  @media (min-width: 576px) {
    .container {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container {
      max-width: 960px; } }
  @media (min-width: 1600px) {
    .container {
      max-width: 1140px; } }

.container-fluid {
  width: 100%;
  padding-right: 10px;
  padding-left: 10px;
  margin-right: auto;
  margin-left: auto; }

.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -10px;
  margin-left: -10px; }

.no-gutters {
  margin-right: 0;
  margin-left: 0; }
  .no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0; }

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 10px;
  padding-left: 10px; }

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%; }

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: none; }

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 8.33333%;
  flex: 0 0 8.33333%;
  max-width: 8.33333%; }

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 16.66667%;
  flex: 0 0 16.66667%;
  max-width: 16.66667%; }

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%; }

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 33.33333%;
  flex: 0 0 33.33333%;
  max-width: 33.33333%; }

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 41.66667%;
  flex: 0 0 41.66667%;
  max-width: 41.66667%; }

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%; }

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 58.33333%;
  flex: 0 0 58.33333%;
  max-width: 58.33333%; }

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 66.66667%;
  flex: 0 0 66.66667%;
  max-width: 66.66667%; }

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%; }

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 83.33333%;
  flex: 0 0 83.33333%;
  max-width: 83.33333%; }

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 91.66667%;
  flex: 0 0 91.66667%;
  max-width: 91.66667%; }

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%; }

.order-first {
  -webkit-box-ordinal-group: 0;
  -ms-flex-order: -1;
  order: -1; }

.order-last {
  -webkit-box-ordinal-group: 14;
  -ms-flex-order: 13;
  order: 13; }

.order-0 {
  -webkit-box-ordinal-group: 1;
  -ms-flex-order: 0;
  order: 0; }

.order-1 {
  -webkit-box-ordinal-group: 2;
  -ms-flex-order: 1;
  order: 1; }

.order-2 {
  -webkit-box-ordinal-group: 3;
  -ms-flex-order: 2;
  order: 2; }

.order-3 {
  -webkit-box-ordinal-group: 4;
  -ms-flex-order: 3;
  order: 3; }

.order-4 {
  -webkit-box-ordinal-group: 5;
  -ms-flex-order: 4;
  order: 4; }

.order-5 {
  -webkit-box-ordinal-group: 6;
  -ms-flex-order: 5;
  order: 5; }

.order-6 {
  -webkit-box-ordinal-group: 7;
  -ms-flex-order: 6;
  order: 6; }

.order-7 {
  -webkit-box-ordinal-group: 8;
  -ms-flex-order: 7;
  order: 7; }

.order-8 {
  -webkit-box-ordinal-group: 9;
  -ms-flex-order: 8;
  order: 8; }

.order-9 {
  -webkit-box-ordinal-group: 10;
  -ms-flex-order: 9;
  order: 9; }

.order-10 {
  -webkit-box-ordinal-group: 11;
  -ms-flex-order: 10;
  order: 10; }

.order-11 {
  -webkit-box-ordinal-group: 12;
  -ms-flex-order: 11;
  order: 11; }

.order-12 {
  -webkit-box-ordinal-group: 13;
  -ms-flex-order: 12;
  order: 12; }

.offset-1 {
  margin-left: 8.33333%; }

.offset-2 {
  margin-left: 16.66667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.33333%; }

.offset-5 {
  margin-left: 41.66667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.33333%; }

.offset-8 {
  margin-left: 66.66667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.33333%; }

.offset-11 {
  margin-left: 91.66667%; }

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-sm-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-sm-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-sm-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-sm-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-sm-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-sm-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-sm-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-sm-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-sm-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-sm-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-sm-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-sm-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-sm-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-sm-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-sm-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-sm-0 {
    margin-left: 0; }
  .offset-sm-1 {
    margin-left: 8.33333%; }
  .offset-sm-2 {
    margin-left: 16.66667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.33333%; }
  .offset-sm-5 {
    margin-left: 41.66667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.33333%; }
  .offset-sm-8 {
    margin-left: 66.66667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.33333%; }
  .offset-sm-11 {
    margin-left: 91.66667%; } }

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-md-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-md-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-md-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-md-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-md-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-md-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-md-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-md-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-md-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-md-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-md-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-md-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-md-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-md-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-md-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-md-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-md-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-md-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-md-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-md-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-md-0 {
    margin-left: 0; }
  .offset-md-1 {
    margin-left: 8.33333%; }
  .offset-md-2 {
    margin-left: 16.66667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.33333%; }
  .offset-md-5 {
    margin-left: 41.66667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.33333%; }
  .offset-md-8 {
    margin-left: 66.66667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.33333%; }
  .offset-md-11 {
    margin-left: 91.66667%; } }

@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-lg-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-lg-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-lg-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-lg-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-lg-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-lg-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-lg-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-lg-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-lg-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-lg-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-lg-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-lg-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-lg-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-lg-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-lg-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-lg-0 {
    margin-left: 0; }
  .offset-lg-1 {
    margin-left: 8.33333%; }
  .offset-lg-2 {
    margin-left: 16.66667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.33333%; }
  .offset-lg-5 {
    margin-left: 41.66667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.33333%; }
  .offset-lg-8 {
    margin-left: 66.66667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.33333%; }
  .offset-lg-11 {
    margin-left: 91.66667%; } }

@media (min-width: 1600px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-xl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-xl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-xl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-xl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-xl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-xl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-xl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-xl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-xl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-xl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-xl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-xl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-xl-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-xl-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-xl-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-xl-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-xl-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-xl-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-xl-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-xl-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-xl-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-xl-0 {
    margin-left: 0; }
  .offset-xl-1 {
    margin-left: 8.33333%; }
  .offset-xl-2 {
    margin-left: 16.66667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.33333%; }
  .offset-xl-5 {
    margin-left: 41.66667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.33333%; }
  .offset-xl-8 {
    margin-left: 66.66667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.33333%; }
  .offset-xl-11 {
    margin-left: 91.66667%; } }

/*.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent; }
  .table th,
  .table td {
    padding: 1rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6; }
  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6; }
  .table tbody + tbody {
    border-top: 2px solid #dee2e6; }
  .table .table {
    background-color: #edf1f5; }*/
.table{
  font-size: 12px
}
.table-sm th,
.table-sm td {
  padding: 0.3rem; }

.table-bordered {
  border: 1px solid #dee2e6; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6; }
  .table-bordered thead th,
  .table-bordered thead td {
    border-bottom-width: 2px; }

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05); }

.table-hover tbody tr:hover {
  background-color: #f8f9fa; }

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #d8d2fa; }

.table-hover .table-primary:hover {
  background-color: #c4bbf7; }
  .table-hover .table-primary:hover > td,
  .table-hover .table-primary:hover > th {
    background-color: #c4bbf7; }

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #fdfdfe; }

.table-hover .table-secondary:hover {
  background-color: #ececf6; }
  .table-hover .table-secondary:hover > td,
  .table-hover .table-secondary:hover > th {
    background-color: #ececf6; }

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c7ede6; }

.table-hover .table-success:hover {
  background-color: #b4e7dd; }
  .table-hover .table-success:hover > td,
  .table-hover .table-success:hover > th {
    background-color: #b4e7dd; }

.table-info,
.table-info > th,
.table-info > td {
  background-color: #b8e4fe; }

.table-hover .table-info:hover {
  background-color: #9fdafe; }
  .table-hover .table-info:hover > td,
  .table-hover .table-info:hover > th {
    background-color: #9fdafe; }

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffecc6; }

.table-hover .table-warning:hover {
  background-color: #ffe4ad; }
  .table-hover .table-warning:hover > td,
  .table-hover .table-warning:hover > th {
    background-color: #ffe4ad; }

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #fcc4ce; }

.table-hover .table-danger:hover {
  background-color: #fbacba; }
  .table-hover .table-danger:hover > td,
  .table-hover .table-danger:hover > th {
    background-color: #fbacba; }

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe; }

.table-hover .table-light:hover {
  background-color: #ececf6; }
  .table-hover .table-light:hover > td,
  .table-hover .table-light:hover > th {
    background-color: #ececf6; }

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca; }

.table-hover .table-dark:hover {
  background-color: #b9bbbe; }
  .table-hover .table-dark:hover > td,
  .table-hover .table-dark:hover > th {
    background-color: #b9bbbe; }

.table-cyan,
.table-cyan > th,
.table-cyan > td {
  background-color: #b8edf0; }

.table-hover .table-cyan:hover {
  background-color: #a3e8ec; }
  .table-hover .table-cyan:hover > td,
  .table-hover .table-cyan:hover > th {
    background-color: #a3e8ec; }

.table-purple,
.table-purple > th,
.table-purple > td {
  background-color: #d8d2fa; }

.table-hover .table-purple:hover {
  background-color: #c4bbf7; }
  .table-hover .table-purple:hover > td,
  .table-hover .table-purple:hover > th {
    background-color: #c4bbf7; }

.table-active,
.table-active > th,
.table-active > td {
  background-color: #f8f9fa; }

.table-hover .table-active:hover {
  background-color: #e9ecef; }
  .table-hover .table-active:hover > td,
  .table-hover .table-active:hover > th {
    background-color: #e9ecef; }

.table .thead-dark th {
  color: #edf1f5;
  background-color: #212529;
  border-color: #32383e; }

.table .thead-light th {
  color: #4F5467;
  background-color: #e9ecef;
  border-color: #dee2e6; }

.table-dark {
  color: #edf1f5;
  background-color: #212529; }
  .table-dark th,
  .table-dark td,
  .table-dark thead th {
    border-color: #32383e; }
  .table-dark.table-bordered {
    border: 0; }
  .table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05); }
  .table-dark.table-hover tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.075); }

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-sm > .table-bordered {
      border: 0; } }

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-md > .table-bordered {
      border: 0; } }

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-lg > .table-bordered {
      border: 0; } }

@media (max-width: 1599.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-xl > .table-bordered {
      border: 0; } }

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar; }
  .table-responsive > .table-bordered {
    border: 0; }

.form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #4F5467;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #e9ecef;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  .form-control::-ms-expand {
    background-color: transparent;
    border: 0; }
  .form-control:focus {
    color: #4F5467;
    background-color: #fff;
    border-color: rgba(0, 0, 0, 0.1);
    outline: 0;
    -webkit-box-shadow: transparent;
    box-shadow: transparent; }
  .form-control::-webkit-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control:-ms-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control::-ms-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control::placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1; }

select.form-control:not([size]):not([multiple]) {
  height: calc(2.0625rem + 2px); }

select.form-control:focus::-ms-value {
  color: #4F5467;
  background-color: #fff; }

.form-control-file,
.form-control-range {
  display: block;
  width: 100%; }

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5; }

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.09375rem;
  line-height: 1.5; }

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.76563rem;
  line-height: 1.5; }

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  margin-bottom: 0;
  line-height: 1.5;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0; }
  .form-control-plaintext.form-control-sm, .input-group-sm > .form-control-plaintext.form-control,
  .input-group-sm > .input-group-prepend > .form-control-plaintext.input-group-text,
  .input-group-sm > .input-group-append > .form-control-plaintext.input-group-text,
  .input-group-sm > .input-group-prepend > .form-control-plaintext.btn,
  .input-group-sm > .input-group-append > .form-control-plaintext.btn, .form-control-plaintext.form-control-lg, .input-group-lg > .form-control-plaintext.form-control,
  .input-group-lg > .input-group-prepend > .form-control-plaintext.input-group-text,
  .input-group-lg > .input-group-append > .form-control-plaintext.input-group-text,
  .input-group-lg > .input-group-prepend > .form-control-plaintext.btn,
  .input-group-lg > .input-group-append > .form-control-plaintext.btn {
    padding-right: 0;
    padding-left: 0; }

.form-control-sm, .input-group-sm > .form-control,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.76563rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

select.form-control-sm:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.btn:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.btn:not([size]):not([multiple]) {
  height: calc(1.64844rem + 2px); }

.form-control-lg, .input-group-lg > .form-control,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.09375rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

select.form-control-lg:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.btn:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.btn:not([size]):not([multiple]) {
  height: calc(2.64063rem + 2px); }

.form-group {
  margin-bottom: 1rem; }

.form-text {
  display: block;
  margin-top: 0.25rem; }

.form-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px; }
  .form-row > .col,
  .form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px; }

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem; }

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem; }
  .form-check-input:disabled ~ .form-check-label {
    color: #adb5bd; }

.form-check-label {
  margin-bottom: 0; }

.form-check-inline {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem; }
  .form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0; }

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #36bea6; }

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(54, 190, 166, 0.8);
  border-radius: .2rem; }

.was-validated .form-control:valid, .form-control.is-valid, .was-validated
.custom-select:valid,
.custom-select.is-valid {
  border-color: #36bea6; }
  .was-validated .form-control:valid:focus, .form-control.is-valid:focus, .was-validated
  .custom-select:valid:focus,
  .custom-select.is-valid:focus {
    border-color: #36bea6;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.25); }
  .was-validated .form-control:valid ~ .valid-feedback,
  .was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
  .form-control.is-valid ~ .valid-tooltip, .was-validated
  .custom-select:valid ~ .valid-feedback,
  .was-validated
  .custom-select:valid ~ .valid-tooltip,
  .custom-select.is-valid ~ .valid-feedback,
  .custom-select.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #36bea6; }

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #36bea6; }
  .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
    background-color: #93e0d3; }

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #58cfba; }

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  -webkit-box-shadow: 0 0 0 1px #edf1f5, 0 0 0 0.2rem rgba(54, 190, 166, 0.25);
  box-shadow: 0 0 0 1px #edf1f5, 0 0 0 0.2rem rgba(54, 190, 166, 0.25); }

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #36bea6; }
  .was-validated .custom-file-input:valid ~ .custom-file-label::before, .custom-file-input.is-valid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.25);
  box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.25); }

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #f62d51; }

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(246, 45, 81, 0.8);
  border-radius: .2rem; }

.was-validated .form-control:invalid, .form-control.is-invalid, .was-validated
.custom-select:invalid,
.custom-select.is-invalid {
  border-color: #f62d51; }
  .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus, .was-validated
  .custom-select:invalid:focus,
  .custom-select.is-invalid:focus {
    border-color: #f62d51;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(246, 45, 81, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(246, 45, 81, 0.25); }
  .was-validated .form-control:invalid ~ .invalid-feedback,
  .was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
  .form-control.is-invalid ~ .invalid-tooltip, .was-validated
  .custom-select:invalid ~ .invalid-feedback,
  .was-validated
  .custom-select:invalid ~ .invalid-tooltip,
  .custom-select.is-invalid ~ .invalid-feedback,
  .custom-select.is-invalid ~ .invalid-tooltip {
    display: block; }

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #f62d51; }

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #f62d51; }
  .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
    background-color: #fba7b6; }

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  background-color: #f85e7a; }

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  -webkit-box-shadow: 0 0 0 1px #edf1f5, 0 0 0 0.2rem rgba(246, 45, 81, 0.25);
  box-shadow: 0 0 0 1px #edf1f5, 0 0 0 0.2rem rgba(246, 45, 81, 0.25); }

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #f62d51; }
  .was-validated .custom-file-input:invalid ~ .custom-file-label::before, .custom-file-input.is-invalid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(246, 45, 81, 0.25);
  box-shadow: 0 0 0 0.2rem rgba(246, 45, 81, 0.25); }

.form-inline {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }
  .form-inline .form-check {
    width: 100%; }
  @media (min-width: 576px) {
    .form-inline label {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      margin-bottom: 0; }
    .form-inline .form-group {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
      flex: 0 0 auto;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      margin-bottom: 0; }
    .form-inline .form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle; }
    .form-inline .form-control-plaintext {
      display: inline-block; }
    .form-inline .input-group {
      width: auto; }
    .form-inline .form-check {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      width: auto;
      padding-left: 0; }
    .form-inline .form-check-input {
      position: relative;
      margin-top: 0;
      margin-right: 0.25rem;
      margin-left: 0; }
    .form-inline .custom-control {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center; }
    .form-inline .custom-control-label {
      margin-bottom: 0; } }

.btn{box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);}
.btn {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  .btn:hover, .btn:focus {
    text-decoration: none; }
  .btn:focus, .btn.focus {
    outline: 0;
    -webkit-box-shadow: transparent;
    box-shadow: transparent; }
  .btn.disabled, .btn:disabled {
    opacity: 0.65; }
  .btn:not(:disabled):not(.disabled) {
    cursor: pointer; }
  .btn:not(:disabled):not(.disabled):active, .btn:not(:disabled):not(.disabled).active {
    background-image: none; }

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none; }


  .btn-split {
  padding-left: 0.85rem;
  padding-right: 1.25rem; }

.btn-link {
  background-color: transparent;
  box-shadow: none !important; }
  .btn-link:hover, .btn-link:focus {
    background-color: transparent;
    box-shadow: none !important; }

.btn-flat {
  box-shadow: none; }
  .btn-flat:active, .btn-flat:focus, .btn-flat:hover {
    box-shadow: none !important; }

.btn-hover:hover {
-webkit-animation-duration: 1s;
animation-duration: 1s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
-webkit-animation-iteration-count: infinite;
animation-iteration-count: infinite; 
-webkit-animation-name: tada;
animation-name: tada;   
}







.btn-primary-alt {
background-image: linear-gradient(45deg, red, yellow);
transition: 0.3s ease-out!important;  
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;
color: #fff !important;
}



.btn-primary-alt:focus, .btn-primary-alt:active, .btn-primary-alt.active {
background: linear-gradient(45deg, #e43a06, #f3c75e);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-primary-alt.dropdown-toggle {
background: linear-gradient(45deg, #e43a06, #f3c75e);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;  }
.btn-primary-alt.dropdown-toggle:hover, .btn-primary-alt.dropdown-toggle:focus {
background: linear-gradient(45deg, #e43a06, #f3c75e);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-primary-alt:not([disabled]):not(.disabled):active, .btn-primary-alt:not([disabled]):not(.disabled).active,
.show > .btn-primary-alt.dropdown-toggle {
background: linear-gradient(45deg, #e43a06, #f3c75e);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}


.btn-secondary-alt {
background-image: linear-gradient(45deg, #842f94,#6550db );
transition: 0.3s ease-out!important;  
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;
color: #fff !important;
}
.btn-secondary-alt:focus, .btn-secondary-alt:active, .btn-secondary-alt.active {
background: linear-gradient(45deg, #842f94,#6550db );
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-secondary-alt.dropdown-toggle {
background: linear-gradient(45deg, #842f94,#6550db );
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;  }
.btn-secondary-alt.dropdown-toggle:hover, .btn-secondary-alt.dropdown-toggle:focus {
background: linear-gradient(45deg, #842f94,#6550db );
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-secondary-alt:not([disabled]):not(.disabled):active, .btn-secondary-alt:not([disabled]):not(.disabled).active,
.show > .btn-secondary-alt.dropdown-toggle {
background: linear-gradient(45deg, #842f94,#6550db );
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}

.btn-info-alt {
background-image:linear-gradient(45deg, #005aff, #00fff3);
transition: 0.3s ease-out!important;  
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;
color: #fff !important;
}
.btn-info-alt:focus, .btn-info-alt:active, .btn-info-alt.active {
background:linear-gradient(45deg, #005aff, #00fff3);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-info-alt.dropdown-toggle {
background:linear-gradient(45deg, #005aff, #00fff3);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;  }
.btn-info-alt.dropdown-toggle:hover, .btn-info-alt.dropdown-toggle:focus {
background:linear-gradient(45deg, #005aff, #00fff3);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-info-alt:not([disabled]):not(.disabled):active, .btn-info-alt:not([disabled]):not(.disabled).active,
.show > .btn-info-alt.dropdown-toggle {
background:linear-gradient(45deg, #005aff, #00fff3);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}


.btn-success-alt {
background-image:linear-gradient(45deg, #0a9343, #ece922);
transition: 0.3s ease-out!important;  
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;
color: #fff !important;
}
.btn-success-alt:focus, .btn-success-alt:active, .btn-success-alt.active {
background:linear-gradient(45deg, #0a9343, #ece922);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-success-alt.dropdown-toggle {
background:linear-gradient(45deg, #0a9343, #ece922);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;  }
.btn-success-alt.dropdown-toggle:hover, .btn-success-alt.dropdown-toggle:focus {
background:linear-gradient(45deg, #0a9343, #ece922);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-success-alt:not([disabled]):not(.disabled):active, .btn-success-alt:not([disabled]):not(.disabled).active,
.show > .btn-success-alt.dropdown-toggle {
background:linear-gradient(45deg, #0a9343, #ece922);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}



.btn-warning-alt {
background-image:linear-gradient(45deg, #ff9900, #ffe358);
transition: 0.3s ease-out!important;  
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;
color: #fff !important;
}
.btn-warning-alt:focus, .btn-warning-alt:active, .btn-warning-alt.active {
background:linear-gradient(45deg, #ff9900, #ffe358);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-warning-alt.dropdown-toggle {
background:linear-gradient(45deg, #ff9900, #ffe358);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;  }
.btn-warning-alt.dropdown-toggle:hover, .btn-warning-alt.dropdown-toggle:focus {
background:linear-gradient(45deg, #ff9900, #ffe358);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-warning-alt:not([disabled]):not(.disabled):active, .btn-warning-alt:not([disabled]):not(.disabled).active,
.show > .btn-warning-alt.dropdown-toggle {
background:linear-gradient(45deg, #ff9900, #ffe358);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}




.btn-danger-alt {
background-image:linear-gradient(45deg, #da1219, #ff49bf);
transition: 0.3s ease-out!important;  
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;
color: #fff !important;
}
.btn-danger-alt:focus, .btn-danger-alt:active, .btn-danger-alt.active {
background:linear-gradient(45deg, #da1219, #ff49bf);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-danger-alt.dropdown-toggle {
background:linear-gradient(45deg, #da1219, #ff49bf);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;  }
.btn-danger-alt.dropdown-toggle:hover, .btn-danger-alt.dropdown-toggle:focus {
background:linear-gradient(45deg, #da1219, #ff49bf);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-danger-alt:not([disabled]):not(.disabled):active, .btn-danger-alt:not([disabled]):not(.disabled).active,
.show > .btn-danger-alt.dropdown-toggle {
background:linear-gradient(45deg, #da1219, #ff49bf);
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}



.btn-dark-alt {
background-image:linear-gradient(45deg, #2e3740,#455360 );
transition: 0.3s ease-out!important;  
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;
color: #fff !important;
}
.btn-dark-alt:focus, .btn-dark-alt:active, .btn-dark-alt.active {
background:linear-gradient(45deg, #2e3740,#455360 );
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-dark-alt.dropdown-toggle {
background:linear-gradient(45deg, #2e3740,#455360 );
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;  }
.btn-dark-alt.dropdown-toggle:hover, .btn-dark-alt.dropdown-toggle:focus {
background:linear-gradient(45deg, #2e3740,#455360 );
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}
.btn-dark-alt:not([disabled]):not(.disabled):active, .btn-dark-alt:not([disabled]):not(.disabled).active,
.show > .btn-dark-alt.dropdown-toggle {
background:linear-gradient(45deg, #2e3740,#455360 );
background-position: center;
background-size: 210% 150%;
background-repeat: no-repeat;}



/*------------ ORDINARY BUTTONS ------------*/

.btn-primary {
background-color: #4285F4 !important;
color: #fff !important; }
.btn-primary:hover {
background-color: #5a95f5; }
.btn-primary:focus, .btn-primary:active, .btn-primary.active {
background-color: #0d5fe6; }
.btn-primary.dropdown-toggle {
background-color: #4285F4 !important; }
.btn-primary.dropdown-toggle:hover, .btn-primary.dropdown-toggle:focus {
background-color: #5a95f5 !important; }
.btn-primary:not([disabled]):not(.disabled):active, .btn-primary:not([disabled]):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
background-color: #0d5fe6 !important; }

.btn-outline-primary {
border: 2px solid #4285F4;
color: #4285F4 !important;
background-color: transparent; }
.btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active, .btn-outline-primary:active:focus, .btn-outline-primary.active {
background-color: transparent;
color: #4285F4;
border-color: #4285F4; }
.btn-outline-primary:not([disabled]):not(.disabled):active, .btn-outline-primary:not([disabled]):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
background-color: transparent !important;
border-color: #4285F4 !important; }

.btn-danger {
background-color: #ff3547 !important;
color: #fff !important; }
.btn-danger:hover {
background-color: #ff4f5e; }
.btn-danger:focus, .btn-danger:active, .btn-danger.active {
background-color: #f20016; }
.btn-danger.dropdown-toggle {
background-color: #ff3547 !important; }
.btn-danger.dropdown-toggle:hover, .btn-danger.dropdown-toggle:focus {
background-color: #ff4f5e !important; }
.btn-danger:not([disabled]):not(.disabled):active, .btn-danger:not([disabled]):not(.disabled).active,
.show > .btn-danger.dropdown-toggle {
background-color: #f20016 !important; }

.btn-outline-danger {
border: 2px solid #ff3547;
color: #ff3547 !important;
background-color: transparent; }
.btn-outline-danger:hover, .btn-outline-danger:focus, .btn-outline-danger:active, .btn-outline-danger:active:focus, .btn-outline-danger.active {
background-color: transparent;
color: #ff3547;
border-color: #ff3547; }
.btn-outline-danger:not([disabled]):not(.disabled):active, .btn-outline-danger:not([disabled]):not(.disabled).active,
.show > .btn-outline-danger.dropdown-toggle {
background-color: transparent !important;
border-color: #ff3547 !important; }

.btn-warning {
background-color: #FF8800 !important;
color: #fff !important; }
.btn-warning:hover {
background-color: #ff941a; }
.btn-warning:focus, .btn-warning:active, .btn-warning.active {
background-color: #bd6500; }
.btn-warning.dropdown-toggle {
background-color: #FF8800 !important; }
.btn-warning.dropdown-toggle:hover, .btn-warning.dropdown-toggle:focus {
background-color: #ff941a !important; }
.btn-warning:not([disabled]):not(.disabled):active, .btn-warning:not([disabled]):not(.disabled).active,
.show > .btn-warning.dropdown-toggle {
background-color: #bd6500 !important; }

.btn-outline-warning {
border: 2px solid #FF8800;
color: #FF8800 !important;
background-color: transparent; }
.btn-outline-warning:hover, .btn-outline-warning:focus, .btn-outline-warning:active, .btn-outline-warning:active:focus, .btn-outline-warning.active {
background-color: transparent;
color: #FF8800;
border-color: #FF8800; }
.btn-outline-warning:not([disabled]):not(.disabled):active, .btn-outline-warning:not([disabled]):not(.disabled).active,
.show > .btn-outline-warning.dropdown-toggle {
background-color: transparent !important;
border-color: #FF8800 !important; }

.btn-success {
background-color: #36bea6  !important;
color: #fff !important; }
.btn-success:hover {
background-color: #00e25b; }
.btn-success:focus, .btn-success:active, .btn-success.active {
background-color: #008636; }
.btn-success.dropdown-toggle {
background-color: #36bea6  !important; }
.btn-success.dropdown-toggle:hover, .btn-success.dropdown-toggle:focus {
background-color: #00e25b !important; }
.btn-success:not([disabled]):not(.disabled):active, .btn-success:not([disabled]):not(.disabled).active,
.show > .btn-success.dropdown-toggle {
background-color: #008636 !important; }

.btn-outline-success {
border: 2px solid #00C851;
color: #00C851 !important;
background-color: transparent; }
.btn-outline-success:hover, .btn-outline-success:focus, .btn-outline-success:active, .btn-outline-success:active:focus, .btn-outline-success.active {
background-color: transparent;
color: #00C851;
border-color: #00C851; }
.btn-outline-success:not([disabled]):not(.disabled):active, .btn-outline-success:not([disabled]):not(.disabled).active,
.show > .btn-outline-success.dropdown-toggle {
background-color: transparent !important;
border-color: #00C851 !important; }

.btn-info {
background-color: #33b5e5 !important;
color: #fff !important; }
.btn-info:hover {
background-color: #4abde8; }
.btn-info:focus, .btn-info:active, .btn-info.active {
background-color: #1891be; }
.btn-info.dropdown-toggle {
background-color: #33b5e5 !important; }
.btn-info.dropdown-toggle:hover, .btn-info.dropdown-toggle:focus {
background-color: #4abde8 !important; }
.btn-info:not([disabled]):not(.disabled):active, .btn-info:not([disabled]):not(.disabled).active,
.show > .btn-info.dropdown-toggle {
background-color: #1891be !important; }

.btn-outline-info {
border: 2px solid #33b5e5;
color: #33b5e5 !important;
background-color: transparent; }
.btn-outline-info:hover, .btn-outline-info:focus, .btn-outline-info:active, .btn-outline-info:active:focus, .btn-outline-info.active {
background-color: transparent;
color: #33b5e5;
border-color: #33b5e5; }
.btn-outline-info:not([disabled]):not(.disabled):active, .btn-outline-info:not([disabled]):not(.disabled).active,
.show > .btn-outline-info.dropdown-toggle {
background-color: transparent !important;
border-color: #33b5e5 !important; }

.btn-default {
background-color: #2BBBAD !important;
color: #fff !important; }
.btn-default:hover {
background-color: #30cfc0; }
.btn-default:focus, .btn-default:active, .btn-default.active {
background-color: #1f857b; }
.btn-default.dropdown-toggle {
background-color: #2BBBAD !important; }
.btn-default.dropdown-toggle:hover, .btn-default.dropdown-toggle:focus {
background-color: #30cfc0 !important; }
.btn-default:not([disabled]):not(.disabled):active, .btn-default:not([disabled]):not(.disabled).active,
.show > .btn-default.dropdown-toggle {
background-color: #1f857b !important; }

.btn-outline-default {
border: 2px solid #2BBBAD;
color: #2BBBAD !important;
background-color: transparent; }
.btn-outline-default:hover, .btn-outline-default:focus, .btn-outline-default:active, .btn-outline-default:active:focus, .btn-outline-default.active {
background-color: transparent;
color: #2BBBAD;
border-color: #2BBBAD; }
.btn-outline-default:not([disabled]):not(.disabled):active, .btn-outline-default:not([disabled]):not(.disabled).active,
.show > .btn-outline-default.dropdown-toggle {
background-color: transparent !important;
border-color: #2BBBAD !important; }

.btn-secondary {
background-color: #aa66cc !important;
color: #fff !important; }
.btn-secondary:hover {
background-color: #b579d2; }
.btn-secondary:focus, .btn-secondary:active, .btn-secondary.active {
background-color: #8c3cb4; }
.btn-secondary.dropdown-toggle {
background-color: #aa66cc !important; }
.btn-secondary.dropdown-toggle:hover, .btn-secondary.dropdown-toggle:focus {
background-color: #b579d2 !important; }
.btn-secondary:not([disabled]):not(.disabled):active, .btn-secondary:not([disabled]):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
background-color: #8c3cb4 !important; }

.btn-outline-secondary {
border: 2px solid #aa66cc;
color: #aa66cc !important;
background-color: transparent; }
.btn-outline-secondary:hover, .btn-outline-secondary:focus, .btn-outline-secondary:active, .btn-outline-secondary:active:focus, .btn-outline-secondary.active {
background-color: transparent;
color: #aa66cc;
border-color: #aa66cc; }
.btn-outline-secondary:not([disabled]):not(.disabled):active, .btn-outline-secondary:not([disabled]):not(.disabled).active,
.show > .btn-outline-secondary.dropdown-toggle {
background-color: transparent !important;
border-color: #aa66cc !important; }

.btn-elegant {
background-color: #2E2E2E !important;
color: #fff !important; }
.btn-elegant:hover {
background-color: #3b3b3b; }
.btn-elegant:focus, .btn-elegant:active, .btn-elegant.active {
background-color: #0d0d0d; }
.btn-elegant.dropdown-toggle {
background-color: #2E2E2E !important; }
.btn-elegant.dropdown-toggle:hover, .btn-elegant.dropdown-toggle:focus {
background-color: #3b3b3b !important; }
.btn-elegant:not([disabled]):not(.disabled):active, .btn-elegant:not([disabled]):not(.disabled).active,
.show > .btn-elegant.dropdown-toggle {
background-color: #0d0d0d !important; }

.btn-outline-elegant {
border: 2px solid #2E2E2E;
color: #2E2E2E !important;
background-color: transparent; }
.btn-outline-elegant:hover, .btn-outline-elegant:focus, .btn-outline-elegant:active, .btn-outline-elegant:active:focus, .btn-outline-elegant.active {
background-color: transparent;
color: #2E2E2E;
border-color: #2E2E2E; }
.btn-outline-elegant:not([disabled]):not(.disabled):active, .btn-outline-elegant:not([disabled]):not(.disabled).active,
.show > .btn-outline-elegant.dropdown-toggle {
background-color: transparent !important;
border-color: #2E2E2E !important; }

.btn-unique {
background-color: #880e4f !important;
color: #fff !important; }
.btn-unique:hover {
background-color: #9f105c; }
.btn-unique:focus, .btn-unique:active, .btn-unique.active {
background-color: #4c082c; }
.btn-unique.dropdown-toggle {
background-color: #880e4f !important; }
.btn-unique.dropdown-toggle:hover, .btn-unique.dropdown-toggle:focus {
background-color: #9f105c !important; }
.btn-unique:not([disabled]):not(.disabled):active, .btn-unique:not([disabled]):not(.disabled).active,
.show > .btn-unique.dropdown-toggle {
background-color: #4c082c !important; }

.btn-outline-unique {
border: 2px solid #880e4f;
color: #880e4f !important;
background-color: transparent; }
.btn-outline-unique:hover, .btn-outline-unique:focus, .btn-outline-unique:active, .btn-outline-unique:active:focus, .btn-outline-unique.active {
background-color: transparent;
color: #880e4f;
border-color: #880e4f; }
.btn-outline-unique:not([disabled]):not(.disabled):active, .btn-outline-unique:not([disabled]):not(.disabled).active,
.show > .btn-outline-unique.dropdown-toggle {
background-color: transparent !important;
border-color: #880e4f !important; }

.btn-dark-green {
background-color: #388E3C !important;
color: #fff !important; }
.btn-dark-green:hover {
background-color: #3fa044; }
.btn-dark-green:focus, .btn-dark-green:active, .btn-dark-green.active {
background-color: #255e28; }
.btn-dark-green.dropdown-toggle {
background-color: #388E3C !important; }
.btn-dark-green.dropdown-toggle:hover, .btn-dark-green.dropdown-toggle:focus {
background-color: #3fa044 !important; }
.btn-dark-green:not([disabled]):not(.disabled):active, .btn-dark-green:not([disabled]):not(.disabled).active,
.show > .btn-dark-green.dropdown-toggle {
background-color: #255e28 !important; }

.btn-outline-dark-green {
border: 2px solid #388E3C;
color: #388E3C !important;
background-color: transparent; }
.btn-outline-dark-green:hover, .btn-outline-dark-green:focus, .btn-outline-dark-green:active, .btn-outline-dark-green:active:focus, .btn-outline-dark-green.active {
background-color: transparent;
color: #388E3C;
border-color: #388E3C; }
.btn-outline-dark-green:not([disabled]):not(.disabled):active, .btn-outline-dark-green:not([disabled]):not(.disabled).active,
.show > .btn-outline-dark-green.dropdown-toggle {
background-color: transparent !important;
border-color: #388E3C !important; }

.btn-mdb-color {
background-color: #59698D !important;
color: #fff !important; }
.btn-mdb-color:hover {
background-color: #63759d; }
.btn-mdb-color:focus, .btn-mdb-color:active, .btn-mdb-color.active {
background-color: #3f4b64; }
.btn-mdb-color.dropdown-toggle {
background-color: #59698D !important; }
.btn-mdb-color.dropdown-toggle:hover, .btn-mdb-color.dropdown-toggle:focus {
background-color: #63759d !important; }
.btn-mdb-color:not([disabled]):not(.disabled):active, .btn-mdb-color:not([disabled]):not(.disabled).active,
.show > .btn-mdb-color.dropdown-toggle {
background-color: #3f4b64 !important; }

.btn-outline-mdb-color {
border: 2px solid #59698D;
color: #59698D !important;
background-color: transparent; }
.btn-outline-mdb-color:hover, .btn-outline-mdb-color:focus, .btn-outline-mdb-color:active, .btn-outline-mdb-color:active:focus, .btn-outline-mdb-color.active {
background-color: transparent;
color: #59698D;
border-color: #59698D; }
.btn-outline-mdb-color:not([disabled]):not(.disabled):active, .btn-outline-mdb-color:not([disabled]):not(.disabled).active,
.show > .btn-outline-mdb-color.dropdown-toggle {
background-color: transparent !important;
border-color: #59698D !important; }

.btn-red {
background-color: #D32F2F !important;
color: #fff !important; }
.btn-red:hover {
background-color: #d74444; }
.btn-red:focus, .btn-red:active, .btn-red.active {
background-color: #9e2121; }
.btn-red.dropdown-toggle {
background-color: #D32F2F !important; }
.btn-red.dropdown-toggle:hover, .btn-red.dropdown-toggle:focus {
background-color: #d74444 !important; }
.btn-red:not([disabled]):not(.disabled):active, .btn-red:not([disabled]):not(.disabled).active,
.show > .btn-red.dropdown-toggle {
background-color: #9e2121 !important; }

.btn-outline-red {
border: 2px solid #D32F2F;
color: #D32F2F !important;
background-color: transparent; }
.btn-outline-red:hover, .btn-outline-red:focus, .btn-outline-red:active, .btn-outline-red:active:focus, .btn-outline-red.active {
background-color: transparent;
color: #D32F2F;
border-color: #D32F2F; }
.btn-outline-red:not([disabled]):not(.disabled):active, .btn-outline-red:not([disabled]):not(.disabled).active,
.show > .btn-outline-red.dropdown-toggle {
background-color: transparent !important;
border-color: #D32F2F !important; }

.btn-pink {
background-color: #ec407a !important;
color: #fff !important; }
.btn-pink:hover {
background-color: #ee578a; }
.btn-pink:focus, .btn-pink:active, .btn-pink.active {
background-color: #d51556; }
.btn-pink.dropdown-toggle {
background-color: #ec407a !important; }
.btn-pink.dropdown-toggle:hover, .btn-pink.dropdown-toggle:focus {
background-color: #ee578a !important; }
.btn-pink:not([disabled]):not(.disabled):active, .btn-pink:not([disabled]):not(.disabled).active,
.show > .btn-pink.dropdown-toggle {
background-color: #d51556 !important; }

.btn-outline-pink {
border: 2px solid #ec407a;
color: #ec407a !important;
background-color: transparent; }
.btn-outline-pink:hover, .btn-outline-pink:focus, .btn-outline-pink:active, .btn-outline-pink:active:focus, .btn-outline-pink.active {
background-color: transparent;
color: #ec407a;
border-color: #ec407a; }
.btn-outline-pink:not([disabled]):not(.disabled):active, .btn-outline-pink:not([disabled]):not(.disabled).active,
.show > .btn-outline-pink.dropdown-toggle {
background-color: transparent !important;
border-color: #ec407a !important; }

.btn-purple {
background-color: #8e24aa !important;
color: #fff !important; }
.btn-purple:hover {
background-color: #a028bf; }
.btn-purple:focus, .btn-purple:active, .btn-purple.active {
background-color: #601873; }
.btn-purple.dropdown-toggle {
background-color: #8e24aa !important; }
.btn-purple.dropdown-toggle:hover, .btn-purple.dropdown-toggle:focus {
background-color: #a028bf !important; }
.btn-purple:not([disabled]):not(.disabled):active, .btn-purple:not([disabled]):not(.disabled).active,
.show > .btn-purple.dropdown-toggle {
background-color: #601873 !important; }

.btn-outline-purple {
border: 2px solid #8e24aa;
color: #8e24aa !important;
background-color: transparent; }
.btn-outline-purple:hover, .btn-outline-purple:focus, .btn-outline-purple:active, .btn-outline-purple:active:focus, .btn-outline-purple.active {
background-color: transparent;
color: #8e24aa;
border-color: #8e24aa; }
.btn-outline-purple:not([disabled]):not(.disabled):active, .btn-outline-purple:not([disabled]):not(.disabled).active,
.show > .btn-outline-purple.dropdown-toggle {
background-color: transparent !important;
border-color: #8e24aa !important; }

.btn-deep-purple {
background-color: #512da8 !important;
color: #fff !important; }
.btn-deep-purple:hover {
background-color: #5b32bc; }
.btn-deep-purple:focus, .btn-deep-purple:active, .btn-deep-purple.active {
background-color: #381f74; }
.btn-deep-purple.dropdown-toggle {
background-color: #512da8 !important; }
.btn-deep-purple.dropdown-toggle:hover, .btn-deep-purple.dropdown-toggle:focus {
background-color: #5b32bc !important; }
.btn-deep-purple:not([disabled]):not(.disabled):active, .btn-deep-purple:not([disabled]):not(.disabled).active,
.show > .btn-deep-purple.dropdown-toggle {
background-color: #381f74 !important; }

.btn-outline-deep-purple {
border: 2px solid #512da8;
color: #512da8 !important;
background-color: transparent; }
.btn-outline-deep-purple:hover, .btn-outline-deep-purple:focus, .btn-outline-deep-purple:active, .btn-outline-deep-purple:active:focus, .btn-outline-deep-purple.active {
background-color: transparent;
color: #512da8;
border-color: #512da8; }
.btn-outline-deep-purple:not([disabled]):not(.disabled):active, .btn-outline-deep-purple:not([disabled]):not(.disabled).active,
.show > .btn-outline-deep-purple.dropdown-toggle {
background-color: transparent !important;
border-color: #512da8 !important; }

.btn-indigo {
background-color: #3f51b5 !important;
color: #fff !important; }
.btn-indigo:hover {
background-color: #4d5ec1; }
.btn-indigo:focus, .btn-indigo:active, .btn-indigo.active {
background-color: #2e3b84; }
.btn-indigo.dropdown-toggle {
background-color: #3f51b5 !important; }
.btn-indigo.dropdown-toggle:hover, .btn-indigo.dropdown-toggle:focus {
background-color: #4d5ec1 !important; }
.btn-indigo:not([disabled]):not(.disabled):active, .btn-indigo:not([disabled]):not(.disabled).active,
.show > .btn-indigo.dropdown-toggle {
background-color: #2e3b84 !important; }

.btn-outline-indigo {
border: 2px solid #3f51b5;
color: #3f51b5 !important;
background-color: transparent; }
.btn-outline-indigo:hover, .btn-outline-indigo:focus, .btn-outline-indigo:active, .btn-outline-indigo:active:focus, .btn-outline-indigo.active {
background-color: transparent;
color: #3f51b5;
border-color: #3f51b5; }
.btn-outline-indigo:not([disabled]):not(.disabled):active, .btn-outline-indigo:not([disabled]):not(.disabled).active,
.show > .btn-outline-indigo.dropdown-toggle {
background-color: transparent !important;
border-color: #3f51b5 !important; }

.btn-blue {
background-color: #1976D2 !important;
color: #fff !important; }
.btn-blue:hover {
background-color: #2083e4; }
.btn-blue:focus, .btn-blue:active, .btn-blue.active {
background-color: #125597; }
.btn-blue.dropdown-toggle {
background-color: #1976D2 !important; }
.btn-blue.dropdown-toggle:hover, .btn-blue.dropdown-toggle:focus {
background-color: #2083e4 !important; }
.btn-blue:not([disabled]):not(.disabled):active, .btn-blue:not([disabled]):not(.disabled).active,
.show > .btn-blue.dropdown-toggle {
background-color: #125597 !important; }

.btn-outline-blue {
border: 2px solid #1976D2;
color: #1976D2 !important;
background-color: transparent; }
.btn-outline-blue:hover, .btn-outline-blue:focus, .btn-outline-blue:active, .btn-outline-blue:active:focus, .btn-outline-blue.active {
background-color: transparent;
color: #1976D2;
border-color: #1976D2; }
.btn-outline-blue:not([disabled]):not(.disabled):active, .btn-outline-blue:not([disabled]):not(.disabled).active,
.show > .btn-outline-blue.dropdown-toggle {
background-color: transparent !important;
border-color: #1976D2 !important; }

.btn-light-blue {
background-color: #82B1FF !important;
color: #fff !important; }
.btn-light-blue:hover {
background-color: #9cc1ff; }
.btn-light-blue:focus, .btn-light-blue:active, .btn-light-blue.active {
background-color: #4088ff; }
.btn-light-blue.dropdown-toggle {
background-color: #82B1FF !important; }
.btn-light-blue.dropdown-toggle:hover, .btn-light-blue.dropdown-toggle:focus {
background-color: #9cc1ff !important; }
.btn-light-blue:not([disabled]):not(.disabled):active, .btn-light-blue:not([disabled]):not(.disabled).active,
.show > .btn-light-blue.dropdown-toggle {
background-color: #4088ff !important; }

.btn-outline-light-blue {
border: 2px solid #82B1FF;
color: #82B1FF !important;
background-color: transparent; }
.btn-outline-light-blue:hover, .btn-outline-light-blue:focus, .btn-outline-light-blue:active, .btn-outline-light-blue:active:focus, .btn-outline-light-blue.active {
background-color: transparent;
color: #82B1FF;
border-color: #82B1FF; }
.btn-outline-light-blue:not([disabled]):not(.disabled):active, .btn-outline-light-blue:not([disabled]):not(.disabled).active,
.show > .btn-outline-light-blue.dropdown-toggle {
background-color: transparent !important;
border-color: #82B1FF !important; }

.btn-cyan {
background-color: #00bcd4 !important;
color: #fff !important; }
.btn-cyan:hover {
background-color: #00d3ee; }
.btn-cyan:focus, .btn-cyan:active, .btn-cyan.active {
background-color: #008192; }
.btn-cyan.dropdown-toggle {
background-color: #00bcd4 !important; }
.btn-cyan.dropdown-toggle:hover, .btn-cyan.dropdown-toggle:focus {
background-color: #00d3ee !important; }
.btn-cyan:not([disabled]):not(.disabled):active, .btn-cyan:not([disabled]):not(.disabled).active,
.show > .btn-cyan.dropdown-toggle {
background-color: #008192 !important; }

.btn-outline-cyan {
border: 2px solid #00bcd4;
color: #00bcd4 !important;
background-color: transparent; }
.btn-outline-cyan:hover, .btn-outline-cyan:focus, .btn-outline-cyan:active, .btn-outline-cyan:active:focus, .btn-outline-cyan.active {
background-color: transparent;
color: #00bcd4;
border-color: #00bcd4; }
.btn-outline-cyan:not([disabled]):not(.disabled):active, .btn-outline-cyan:not([disabled]):not(.disabled).active,
.show > .btn-outline-cyan.dropdown-toggle {
background-color: transparent !important;
border-color: #00bcd4 !important; }

.btn-teal {
background-color: #00796b !important;
color: #fff !important; }
.btn-teal:hover {
background-color: #009382; }
.btn-teal:focus, .btn-teal:active, .btn-teal.active {
background-color: #003730; }
.btn-teal.dropdown-toggle {
background-color: #00796b !important; }
.btn-teal.dropdown-toggle:hover, .btn-teal.dropdown-toggle:focus {
background-color: #009382 !important; }
.btn-teal:not([disabled]):not(.disabled):active, .btn-teal:not([disabled]):not(.disabled).active,
.show > .btn-teal.dropdown-toggle {
background-color: #003730 !important; }

.btn-outline-teal {
border: 2px solid #00796b;
color: #00796b !important;
background-color: transparent; }
.btn-outline-teal:hover, .btn-outline-teal:focus, .btn-outline-teal:active, .btn-outline-teal:active:focus, .btn-outline-teal.active {
background-color: transparent;
color: #00796b;
border-color: #00796b; }
.btn-outline-teal:not([disabled]):not(.disabled):active, .btn-outline-teal:not([disabled]):not(.disabled).active,
.show > .btn-outline-teal.dropdown-toggle {
background-color: transparent !important;
border-color: #00796b !important; }

.btn-green {
background-color: #388E3C !important;
color: #fff !important; }
.btn-green:hover {
background-color: #3fa044; }
.btn-green:focus, .btn-green:active, .btn-green.active {
background-color: #255e28; }
.btn-green.dropdown-toggle {
background-color: #388E3C !important; }
.btn-green.dropdown-toggle:hover, .btn-green.dropdown-toggle:focus {
background-color: #3fa044 !important; }
.btn-green:not([disabled]):not(.disabled):active, .btn-green:not([disabled]):not(.disabled).active,
.show > .btn-green.dropdown-toggle {
background-color: #255e28 !important; }

.btn-outline-green {
border: 2px solid #388E3C;
color: #388E3C !important;
background-color: transparent; }
.btn-outline-green:hover, .btn-outline-green:focus, .btn-outline-green:active, .btn-outline-green:active:focus, .btn-outline-green.active {
background-color: transparent;
color: #388E3C;
border-color: #388E3C; }
.btn-outline-green:not([disabled]):not(.disabled):active, .btn-outline-green:not([disabled]):not(.disabled).active,
.show > .btn-outline-green.dropdown-toggle {
background-color: transparent !important;
border-color: #388E3C !important; }

.btn-light-green {
background-color: #8bc34a !important;
color: #fff !important; }
.btn-light-green:hover {
background-color: #97c95d; }
.btn-light-green:focus, .btn-light-green:active, .btn-light-green.active {
background-color: #699832; }
.btn-light-green.dropdown-toggle {
background-color: #8bc34a !important; }
.btn-light-green.dropdown-toggle:hover, .btn-light-green.dropdown-toggle:focus {
background-color: #97c95d !important; }
.btn-light-green:not([disabled]):not(.disabled):active, .btn-light-green:not([disabled]):not(.disabled).active,
.show > .btn-light-green.dropdown-toggle {
background-color: #699832 !important; }

.btn-outline-light-green {
border: 2px solid #8bc34a;
color: #8bc34a !important;
background-color: transparent; }
.btn-outline-light-green:hover, .btn-outline-light-green:focus, .btn-outline-light-green:active, .btn-outline-light-green:active:focus, .btn-outline-light-green.active {
background-color: transparent;
color: #8bc34a;
border-color: #8bc34a; }
.btn-outline-light-green:not([disabled]):not(.disabled):active, .btn-outline-light-green:not([disabled]):not(.disabled).active,
.show > .btn-outline-light-green.dropdown-toggle {
background-color: transparent !important;
border-color: #8bc34a !important; }

.btn-lime {
background-color: #afb42b !important;
color: #fff !important; }
.btn-lime:hover {
background-color: #c3c930; }
.btn-lime:focus, .btn-lime:active, .btn-lime.active {
background-color: #7b7e1e; }
.btn-lime.dropdown-toggle {
background-color: #afb42b !important; }
.btn-lime.dropdown-toggle:hover, .btn-lime.dropdown-toggle:focus {
background-color: #c3c930 !important; }
.btn-lime:not([disabled]):not(.disabled):active, .btn-lime:not([disabled]):not(.disabled).active,
.show > .btn-lime.dropdown-toggle {
background-color: #7b7e1e !important; }

.btn-outline-lime {
border: 2px solid #afb42b;
color: #afb42b !important;
background-color: transparent; }
.btn-outline-lime:hover, .btn-outline-lime:focus, .btn-outline-lime:active, .btn-outline-lime:active:focus, .btn-outline-lime.active {
background-color: transparent;
color: #afb42b;
border-color: #afb42b; }
.btn-outline-lime:not([disabled]):not(.disabled):active, .btn-outline-lime:not([disabled]):not(.disabled).active,
.show > .btn-outline-lime.dropdown-toggle {
background-color: transparent !important;
border-color: #afb42b !important; }

.btn-yellow {
background-color: #fbc02d !important;
color: #fff !important; }
.btn-yellow:hover {
background-color: #fbc846; }
.btn-yellow:focus, .btn-yellow:active, .btn-yellow.active {
background-color: #e1a204; }
.btn-yellow.dropdown-toggle {
background-color: #fbc02d !important; }
.btn-yellow.dropdown-toggle:hover, .btn-yellow.dropdown-toggle:focus {
background-color: #fbc846 !important; }
.btn-yellow:not([disabled]):not(.disabled):active, .btn-yellow:not([disabled]):not(.disabled).active,
.show > .btn-yellow.dropdown-toggle {
background-color: #e1a204 !important; }

.btn-outline-yellow {
border: 2px solid #fbc02d;
color: #fbc02d !important;
background-color: transparent; }
.btn-outline-yellow:hover, .btn-outline-yellow:focus, .btn-outline-yellow:active, .btn-outline-yellow:active:focus, .btn-outline-yellow.active {
background-color: transparent;
color: #fbc02d;
border-color: #fbc02d; }
.btn-outline-yellow:not([disabled]):not(.disabled):active, .btn-outline-yellow:not([disabled]):not(.disabled).active,
.show > .btn-outline-yellow.dropdown-toggle {
background-color: transparent !important;
border-color: #fbc02d !important; }

.btn-amber {
background-color: #ffa000 !important;
color: #fff !important; }
.btn-amber:hover {
background-color: #ffaa1a; }
.btn-amber:focus, .btn-amber:active, .btn-amber.active {
background-color: #bd7600; }
.btn-amber.dropdown-toggle {
background-color: #ffa000 !important; }
.btn-amber.dropdown-toggle:hover, .btn-amber.dropdown-toggle:focus {
background-color: #ffaa1a !important; }
.btn-amber:not([disabled]):not(.disabled):active, .btn-amber:not([disabled]):not(.disabled).active,
.show > .btn-amber.dropdown-toggle {
background-color: #bd7600 !important; }

.btn-outline-amber {
border: 2px solid #ffa000;
color: #ffa000 !important;
background-color: transparent; }
.btn-outline-amber:hover, .btn-outline-amber:focus, .btn-outline-amber:active, .btn-outline-amber:active:focus, .btn-outline-amber.active {
background-color: transparent;
color: #ffa000;
border-color: #ffa000; }
.btn-outline-amber:not([disabled]):not(.disabled):active, .btn-outline-amber:not([disabled]):not(.disabled).active,
.show > .btn-outline-amber.dropdown-toggle {
background-color: transparent !important;
border-color: #ffa000 !important; }

.btn-orange {
background-color: #f57c00 !important;
color: #fff !important; }
.btn-orange:hover {
background-color: #ff8910; }
.btn-orange:focus, .btn-orange:active, .btn-orange.active {
background-color: #b35a00; }
.btn-orange.dropdown-toggle {
background-color: #f57c00 !important; }
.btn-orange.dropdown-toggle:hover, .btn-orange.dropdown-toggle:focus {
background-color: #ff8910 !important; }
.btn-orange:not([disabled]):not(.disabled):active, .btn-orange:not([disabled]):not(.disabled).active,
.show > .btn-orange.dropdown-toggle {
background-color: #b35a00 !important; }

.btn-outline-orange {
border: 2px solid #f57c00;
color: #f57c00 !important;
background-color: transparent; }
.btn-outline-orange:hover, .btn-outline-orange:focus, .btn-outline-orange:active, .btn-outline-orange:active:focus, .btn-outline-orange.active {
background-color: transparent;
color: #f57c00;
border-color: #f57c00; }
.btn-outline-orange:not([disabled]):not(.disabled):active, .btn-outline-orange:not([disabled]):not(.disabled).active,
.show > .btn-outline-orange.dropdown-toggle {
background-color: transparent !important;
border-color: #f57c00 !important; }

.btn-deep-orange {
background-color: #ff7043 !important;
color: #fff !important; }
.btn-deep-orange:hover {
background-color: #ff835d; }
.btn-deep-orange:focus, .btn-deep-orange:active, .btn-deep-orange.active {
background-color: #ff3e01; }
.btn-deep-orange.dropdown-toggle {
background-color: #ff7043 !important; }
.btn-deep-orange.dropdown-toggle:hover, .btn-deep-orange.dropdown-toggle:focus {
background-color: #ff835d !important; }
.btn-deep-orange:not([disabled]):not(.disabled):active, .btn-deep-orange:not([disabled]):not(.disabled).active,
.show > .btn-deep-orange.dropdown-toggle {
background-color: #ff3e01 !important; }

.btn-outline-deep-orange {
border: 2px solid #ff7043;
color: #ff7043 !important;
background-color: transparent; }
.btn-outline-deep-orange:hover, .btn-outline-deep-orange:focus, .btn-outline-deep-orange:active, .btn-outline-deep-orange:active:focus, .btn-outline-deep-orange.active {
background-color: transparent;
color: #ff7043;
border-color: #ff7043; }
.btn-outline-deep-orange:not([disabled]):not(.disabled):active, .btn-outline-deep-orange:not([disabled]):not(.disabled).active,
.show > .btn-outline-deep-orange.dropdown-toggle {
background-color: transparent !important;
border-color: #ff7043 !important; }

.btn-brown {
background-color: #795548 !important;
color: #fff !important; }
.btn-brown:hover {
background-color: #896052; }
.btn-brown:focus, .btn-brown:active, .btn-brown.active {
background-color: #4f382f; }
.btn-brown.dropdown-toggle {
background-color: #795548 !important; }
.btn-brown.dropdown-toggle:hover, .btn-brown.dropdown-toggle:focus {
background-color: #896052 !important; }
.btn-brown:not([disabled]):not(.disabled):active, .btn-brown:not([disabled]):not(.disabled).active,
.show > .btn-brown.dropdown-toggle {
background-color: #4f382f !important; }

.btn-outline-brown {
border: 2px solid #795548;
color: #795548 !important;
background-color: transparent; }
.btn-outline-brown:hover, .btn-outline-brown:focus, .btn-outline-brown:active, .btn-outline-brown:active:focus, .btn-outline-brown.active {
background-color: transparent;
color: #795548;
border-color: #795548; }
.btn-outline-brown:not([disabled]):not(.disabled):active, .btn-outline-brown:not([disabled]):not(.disabled).active,
.show > .btn-outline-brown.dropdown-toggle {
background-color: transparent !important;
border-color: #795548 !important; }

.btn-grey {
background-color: #616161 !important;
color: #fff !important; }
.btn-grey:hover {
background-color: #6e6e6e; }
.btn-grey:focus, .btn-grey:active, .btn-grey.active {
background-color: #404040; }
.btn-grey.dropdown-toggle {
background-color: #616161 !important; }
.btn-grey.dropdown-toggle:hover, .btn-grey.dropdown-toggle:focus {
background-color: #6e6e6e !important; }
.btn-grey:not([disabled]):not(.disabled):active, .btn-grey:not([disabled]):not(.disabled).active,
.show > .btn-grey.dropdown-toggle {
background-color: #404040 !important; }

.btn-outline-grey {
border: 2px solid #616161;
color: #616161 !important;
background-color: transparent; }
.btn-outline-grey:hover, .btn-outline-grey:focus, .btn-outline-grey:active, .btn-outline-grey:active:focus, .btn-outline-grey.active {
background-color: transparent;
color: #616161;
border-color: #616161; }
.btn-outline-grey:not([disabled]):not(.disabled):active, .btn-outline-grey:not([disabled]):not(.disabled).active,
.show > .btn-outline-grey.dropdown-toggle {
background-color: transparent !important;
border-color: #616161 !important; }

.btn-blue-grey {
background-color: #78909c !important;
color: #fff !important; }
.btn-blue-grey:hover {
background-color: #879ca7; }
.btn-blue-grey:focus, .btn-blue-grey:active, .btn-blue-grey.active {
background-color: #596e79; }
.btn-blue-grey.dropdown-toggle {
background-color: #78909c !important; }
.btn-blue-grey.dropdown-toggle:hover, .btn-blue-grey.dropdown-toggle:focus {
background-color: #879ca7 !important; }
.btn-blue-grey:not([disabled]):not(.disabled):active, .btn-blue-grey:not([disabled]):not(.disabled).active,
.show > .btn-blue-grey.dropdown-toggle {
background-color: #596e79 !important; }

.btn-outline-blue-grey {
border: 2px solid #78909c;
color: #78909c !important;
background-color: transparent; }
.btn-outline-blue-grey:hover, .btn-outline-blue-grey:focus, .btn-outline-blue-grey:active, .btn-outline-blue-grey:active:focus, .btn-outline-blue-grey.active {
background-color: transparent;
color: #78909c;
border-color: #78909c; }
.btn-outline-blue-grey:not([disabled]):not(.disabled):active, .btn-outline-blue-grey:not([disabled]):not(.disabled).active,
.show > .btn-outline-blue-grey.dropdown-toggle {
background-color: transparent !important;
border-color: #78909c !important; }

.btn-dark {
background-color: #212121 !important;
color: #fff !important; }
.btn-dark:hover {
background-color: #2e2e2e; }
.btn-dark:focus, .btn-dark:active, .btn-dark.active {
background-color: black; }
.btn-dark.dropdown-toggle {
background-color: #212121 !important; }
.btn-dark.dropdown-toggle:hover, .btn-dark.dropdown-toggle:focus {
background-color: #2e2e2e !important; }
.btn-dark:not([disabled]):not(.disabled):active, .btn-dark:not([disabled]):not(.disabled).active,
.show > .btn-dark.dropdown-toggle {
background-color: black !important; }

.btn-outline-dark {
border: 2px solid #212121;
color: #212121 !important;
background-color: transparent; }
.btn-outline-dark:hover, .btn-outline-dark:focus, .btn-outline-dark:active, .btn-outline-dark:active:focus, .btn-outline-dark.active {
background-color: transparent;
color: #212121;
border-color: #212121; }
.btn-outline-dark:not([disabled]):not(.disabled):active, .btn-outline-dark:not([disabled]):not(.disabled).active,
.show > .btn-outline-dark.dropdown-toggle {
background-color: transparent !important;
border-color: #212121 !important; }

.btn-light {
background-color: #e0e0e0 !important;
color: #000 !important; }
.btn-light:hover {
background-color: #ededed; }
.btn-light:focus, .btn-light:active, .btn-light.active {
background-color: #bfbfbf; }
.btn-light.dropdown-toggle {
background-color: #e0e0e0 !important; }
.btn-light.dropdown-toggle:hover, .btn-light.dropdown-toggle:focus {
background-color: #ededed !important; }
.btn-light:not([disabled]):not(.disabled):active, .btn-light:not([disabled]):not(.disabled).active,
.show > .btn-light.dropdown-toggle {
background-color: #bfbfbf !important; }

.btn-outline-light {
border: 2px solid #e0e0e0;
color: #e0e0e0 !important;
background-color: transparent; }
.btn-outline-light:hover, .btn-outline-light:focus, .btn-outline-light:active, .btn-outline-light:active:focus, .btn-outline-light.active {
background-color: transparent;
color: #e0e0e0;
border-color: #e0e0e0; }
.btn-outline-light:not([disabled]):not(.disabled):active, .btn-outline-light:not([disabled]):not(.disabled).active,
.show > .btn-outline-light.dropdown-toggle {
background-color: transparent !important;
border-color: #e0e0e0 !important; }

.btn-white {
background-color: #fff !important;
color: #000 !important; }
.btn-white:hover {
background-color: white; }
.btn-white:focus, .btn-white:active, .btn-white.active {
background-color: #dedede; }
.btn-white.dropdown-toggle {
background-color: #fff !important; }
.btn-white.dropdown-toggle:hover, .btn-white.dropdown-toggle:focus {
background-color: white !important; }
.btn-white:not([disabled]):not(.disabled):active, .btn-white:not([disabled]):not(.disabled).active,
.show > .btn-white.dropdown-toggle {
background-color: #dedede !important; }

.btn-outline-white {
border: 2px solid #fff;
color: #fff !important;
background-color: transparent; }
.btn-outline-white:hover, .btn-outline-white:focus, .btn-outline-white:active, .btn-outline-white:active:focus, .btn-outline-white.active {
background-color: transparent;
color: #fff;
border-color: #fff; }
.btn-outline-white:not([disabled]):not(.disabled):active, .btn-outline-white:not([disabled]):not(.disabled).active,
.show > .btn-outline-white.dropdown-toggle {
background-color: transparent !important;
border-color: #fff !important; }

.btn-black {
background-color: #000 !important;
color: #fff !important; }
.btn-black:hover {
background-color: #0d0d0d; }
.btn-black:focus, .btn-black:active, .btn-black.active {
background-color: black; }
.btn-black.dropdown-toggle {
background-color: #000 !important; }
.btn-black.dropdown-toggle:hover, .btn-black.dropdown-toggle:focus {
background-color: #0d0d0d !important; }
.btn-black:not([disabled]):not(.disabled):active, .btn-black:not([disabled]):not(.disabled).active,
.show > .btn-black.dropdown-toggle {
background-color: black !important; }

.btn-outline-black {
border: 2px solid #000;
color: #000 !important;
background-color: transparent; }
.btn-outline-black:hover, .btn-outline-black:focus, .btn-outline-black:active, .btn-outline-black:active:focus, .btn-outline-black.active {
background-color: transparent;
color: #000;
border-color: #000; }
.btn-outline-black:not([disabled]):not(.disabled):active, .btn-outline-black:not([disabled]):not(.disabled).active,
.show > .btn-outline-black.dropdown-toggle {
background-color: transparent !important;
border-color: #000 !important; }

/*.btn-primary {
  color: #fff;
  background-color: #7460ee;
  border-color: #7460ee; }
  .btn-primary:hover {
    color: #fff;
    background-color: #563dea;
    border-color: #4c32e9; }
  .btn-primary:focus, .btn-primary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5); }
  .btn-primary.disabled, .btn-primary:disabled {
    color: #fff;
    background-color: #7460ee;
    border-color: #7460ee; }
  .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #4c32e9;
    border-color: #4226e8; }
    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5); }

.btn-secondary {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-secondary:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5; }
  .btn-secondary:focus, .btn-secondary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-secondary.disabled, .btn-secondary:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df; }
    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-success {
  color: #fff;
  background-color: #36bea6;
  border-color: #36bea6; }
  .btn-success:hover {
    color: #fff;
    background-color: #2ea08c;
    border-color: #2b9683; }
  .btn-success:focus, .btn-success.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.5); }
  .btn-success.disabled, .btn-success:disabled {
    color: #fff;
    background-color: #36bea6;
    border-color: #36bea6; }
  .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #2b9683;
    border-color: #288c7b; }
    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.5); }

.btn-info {
  color: #fff;
  background-color: #009efb;
  border-color: #009efb; }
  .btn-info:hover {
    color: #fff;
    background-color: #0086d5;
    border-color: #007ec8; }
  .btn-info:focus, .btn-info.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 158, 251, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(0, 158, 251, 0.5); }
  .btn-info.disabled, .btn-info:disabled {
    color: #fff;
    background-color: #009efb;
    border-color: #009efb; }
  .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
  .show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #007ec8;
    border-color: #0076bb; }
    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 158, 251, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(0, 158, 251, 0.5); }

.btn-warning {
  color: #212529;
  background-color: #ffbc34;
  border-color: #ffbc34; }
  .btn-warning:hover {
    color: #212529;
    background-color: #ffaf0e;
    border-color: #ffab01; }
  .btn-warning:focus, .btn-warning.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 188, 52, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(255, 188, 52, 0.5); }
  .btn-warning.disabled, .btn-warning:disabled {
    color: #212529;
    background-color: #ffbc34;
    border-color: #ffbc34; }
  .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
  .show > .btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #ffab01;
    border-color: #f3a300; }
    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 188, 52, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(255, 188, 52, 0.5); }

.btn-danger {
  color: #fff;
  background-color: #f62d51;
  border-color: #f62d51; }
  .btn-danger:hover {
    color: #fff;
    background-color: #f20a34;
    border-color: #e60a31; }
  .btn-danger:focus, .btn-danger.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(246, 45, 81, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(246, 45, 81, 0.5); }
  .btn-danger.disabled, .btn-danger:disabled {
    color: #fff;
    background-color: #f62d51;
    border-color: #f62d51; }
  .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
  .show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #e60a31;
    border-color: #da092f; }
    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(246, 45, 81, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(246, 45, 81, 0.5); }

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5; }
  .btn-light:focus, .btn-light.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-light.disabled, .btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df; }
    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40; }
  .btn-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124; }
  .btn-dark:focus, .btn-dark.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
  .btn-dark.disabled, .btn-dark:disabled {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40; }
  .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d; }
    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }

.btn-cyan {
  color: #fff;
  background-color: #01c0c8;
  border-color: #01c0c8; }
  .btn-cyan:hover {
    color: #fff;
    background-color: #019ba2;
    border-color: #018f95; }
  .btn-cyan:focus, .btn-cyan.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(1, 192, 200, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(1, 192, 200, 0.5); }
  .btn-cyan.disabled, .btn-cyan:disabled {
    color: #fff;
    background-color: #01c0c8;
    border-color: #01c0c8; }
  .btn-cyan:not(:disabled):not(.disabled):active, .btn-cyan:not(:disabled):not(.disabled).active,
  .show > .btn-cyan.dropdown-toggle {
    color: #fff;
    background-color: #018f95;
    border-color: #018389; }
    .btn-cyan:not(:disabled):not(.disabled):active:focus, .btn-cyan:not(:disabled):not(.disabled).active:focus,
    .show > .btn-cyan.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(1, 192, 200, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(1, 192, 200, 0.5); }

.btn-purple {
  color: #fff;
  background-color: #7460ee;
  border-color: #7460ee; }
  .btn-purple:hover {
    color: #fff;
    background-color: #563dea;
    border-color: #4c32e9; }
  .btn-purple:focus, .btn-purple.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5); }
  .btn-purple.disabled, .btn-purple:disabled {
    color: #fff;
    background-color: #7460ee;
    border-color: #7460ee; }
  .btn-purple:not(:disabled):not(.disabled):active, .btn-purple:not(:disabled):not(.disabled).active,
  .show > .btn-purple.dropdown-toggle {
    color: #fff;
    background-color: #4c32e9;
    border-color: #4226e8; }
    .btn-purple:not(:disabled):not(.disabled):active:focus, .btn-purple:not(:disabled):not(.disabled).active:focus,
    .show > .btn-purple.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5); }

.btn-outline-primary {
  color: #7460ee;
  background-color: transparent;
  background-image: none;
  border-color: #7460ee; }
  .btn-outline-primary:hover {
    color: #fff;
    background-color: #7460ee;
    border-color: #7460ee; }
  .btn-outline-primary:focus, .btn-outline-primary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5); }
  .btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #7460ee;
    background-color: transparent; }
  .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #7460ee;
    border-color: #7460ee; }
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5); }

.btn-outline-secondary {
  color: #f8f9fa;
  background-color: transparent;
  background-image: none;
  border-color: #f8f9fa; }
  .btn-outline-secondary:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-outline-secondary:focus, .btn-outline-secondary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #f8f9fa;
    background-color: transparent; }
  .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-secondary.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-outline-success {
  color: #36bea6;
  background-color: transparent;
  background-image: none;
  border-color: #36bea6; }
  .btn-outline-success:hover {
    color: #fff;
    background-color: #36bea6;
    border-color: #36bea6; }
  .btn-outline-success:focus, .btn-outline-success.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.5); }
  .btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #36bea6;
    background-color: transparent; }
  .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
  .show > .btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #36bea6;
    border-color: #36bea6; }
    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.5); }

.btn-outline-info {
  color: #009efb;
  background-color: transparent;
  background-image: none;
  border-color: #009efb; }
  .btn-outline-info:hover {
    color: #fff;
    background-color: #009efb;
    border-color: #009efb; }
  .btn-outline-info:focus, .btn-outline-info.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 158, 251, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(0, 158, 251, 0.5); }
  .btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #009efb;
    background-color: transparent; }
  .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
  .show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #009efb;
    border-color: #009efb; }
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 158, 251, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(0, 158, 251, 0.5); }

.btn-outline-warning {
  color: #ffbc34;
  background-color: transparent;
  background-image: none;
  border-color: #ffbc34; }
  .btn-outline-warning:hover {
    color: #212529;
    background-color: #ffbc34;
    border-color: #ffbc34; }
  .btn-outline-warning:focus, .btn-outline-warning.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 188, 52, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(255, 188, 52, 0.5); }
  .btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #ffbc34;
    background-color: transparent; }
  .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
  .show > .btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #ffbc34;
    border-color: #ffbc34; }
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 188, 52, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(255, 188, 52, 0.5); }

.btn-outline-danger {
  color: #f62d51;
  background-color: transparent;
  background-image: none;
  border-color: #f62d51; }
  .btn-outline-danger:hover {
    color: #fff;
    background-color: #f62d51;
    border-color: #f62d51; }
  .btn-outline-danger:focus, .btn-outline-danger.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(246, 45, 81, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(246, 45, 81, 0.5); }
  .btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #f62d51;
    background-color: transparent; }
  .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
  .show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #f62d51;
    border-color: #f62d51; }
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(246, 45, 81, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(246, 45, 81, 0.5); }

.btn-outline-light {
  color: #f8f9fa;
  background-color: transparent;
  background-image: none;
  border-color: #f8f9fa; }
  .btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-outline-light:focus, .btn-outline-light.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent; }
  .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-outline-dark {
  color: #343a40;
  background-color: transparent;
  background-image: none;
  border-color: #343a40; }
  .btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40; }
  .btn-outline-dark:focus, .btn-outline-dark.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
  .btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent; }
  .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40; }
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }

.btn-outline-cyan {
  color: #01c0c8;
  background-color: transparent;
  background-image: none;
  border-color: #01c0c8; }
  .btn-outline-cyan:hover {
    color: #fff;
    background-color: #01c0c8;
    border-color: #01c0c8; }
  .btn-outline-cyan:focus, .btn-outline-cyan.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(1, 192, 200, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(1, 192, 200, 0.5); }
  .btn-outline-cyan.disabled, .btn-outline-cyan:disabled {
    color: #01c0c8;
    background-color: transparent; }
  .btn-outline-cyan:not(:disabled):not(.disabled):active, .btn-outline-cyan:not(:disabled):not(.disabled).active,
  .show > .btn-outline-cyan.dropdown-toggle {
    color: #fff;
    background-color: #01c0c8;
    border-color: #01c0c8; }
    .btn-outline-cyan:not(:disabled):not(.disabled):active:focus, .btn-outline-cyan:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-cyan.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(1, 192, 200, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(1, 192, 200, 0.5); }

.btn-outline-purple {
  color: #7460ee;
  background-color: transparent;
  background-image: none;
  border-color: #7460ee; }
  .btn-outline-purple:hover {
    color: #fff;
    background-color: #7460ee;
    border-color: #7460ee; }
  .btn-outline-purple:focus, .btn-outline-purple.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5); }
  .btn-outline-purple.disabled, .btn-outline-purple:disabled {
    color: #7460ee;
    background-color: transparent; }
  .btn-outline-purple:not(:disabled):not(.disabled):active, .btn-outline-purple:not(:disabled):not(.disabled).active,
  .show > .btn-outline-purple.dropdown-toggle {
    color: #fff;
    background-color: #7460ee;
    border-color: #7460ee; }
    .btn-outline-purple:not(:disabled):not(.disabled):active:focus, .btn-outline-purple:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-purple.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(116, 96, 238, 0.5); }

.btn-link {
  font-weight: 400;
  color: #7460ee;
  background-color: transparent; }
  .btn-link:hover {
    color: #381be7;
    text-decoration: underline;
    background-color: transparent;
    border-color: transparent; }
  .btn-link:focus, .btn-link.focus {
    text-decoration: underline;
    border-color: transparent;
    -webkit-box-shadow: none;
    box-shadow: none; }
  .btn-link:disabled, .btn-link.disabled {*/
    color: #6c757d; }

.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.09375rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.76563rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.btn-block {
  display: block;
  width: 100%; }
  .btn-block + .btn-block {
    margin-top: 0.5rem; }

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%; }

.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear; }
  .fade.show {
    opacity: 1; }

.collapse {
  display: none; }
  .collapse.show {
    display: block; }

tr.collapse.show {
  display: table-row; }

tbody.collapse.show {
  display: table-row-group; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  -o-transition: height 0.35s ease;
  transition: height 0.35s ease; }

.dropup,
.dropdown {
  position: relative; }

.dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent; }

.dropdown-toggle:empty::after {
  margin-left: 0; }

.dropdown-menu {
  position: absolute;
  top: 100%;
  right: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  /*margin: 0.125rem 0 0;*/
  font-size: 0.875rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #e9ecef;
  border-radius: 0px 0px 5px 5px; 
  transition: 0.2s ease-in-out;
}

  .dropdown-menu2 {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  /*margin: 0.125rem 0 0;*/
  font-size: 0.875rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #e9ecef;
  border-radius: 0px 0px 5px 5px; }

.dropup .dropdown-menu {
  margin-top: 0;
  margin-bottom: 0.125rem; }

.dropup .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent; }

.dropup .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-menu {
  margin-top: 0;
  margin-left: 0.125rem; }

.dropright .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid; }

.dropright .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-toggle::after {
  vertical-align: 0; }

.dropleft .dropdown-menu {
  margin-top: 0;
  margin-right: 0.125rem; }

.dropleft .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: ""; }

.dropleft .dropdown-toggle::after {
  display: none; }

.dropleft .dropdown-toggle::before {
  display: inline-block;
  width: 0;
  height: 0;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent; }

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropleft .dropdown-toggle::before {
  vertical-align: 0; }

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #f8f9fa; }

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.65rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0; }
  .dropdown-item:hover, .dropdown-item:focus {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa; }
  .dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #009efb; }
  .dropdown-item.disabled, .dropdown-item:disabled {
    color: #6c757d;
    background-color: transparent; }

.dropdown-menu.show {
  display: block; }

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.76563rem;
  color: #6c757d;
  white-space: nowrap; }
.drop-left{
  left: 0%!important;
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle; }
  .btn-group > .btn,
  .btn-group-vertical > .btn {
    position: relative;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto; }
    .btn-group > .btn:hover,
    .btn-group-vertical > .btn:hover {
      z-index: 1; }
    .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .btn.active {
      z-index: 1; }
  .btn-group .btn + .btn,
  .btn-group .btn + .btn-group,
  .btn-group .btn-group + .btn,
  .btn-group .btn-group + .btn-group,
  .btn-group-vertical .btn + .btn,
  .btn-group-vertical .btn + .btn-group,
  .btn-group-vertical .btn-group + .btn,
  .btn-group-vertical .btn-group + .btn-group {
    margin-left: -1px; }

.btn-toolbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start; }
  .btn-toolbar .input-group {
    width: auto; }

.btn-group > .btn:first-child {
  margin-left: 0; }

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem; }
  .dropdown-toggle-split::after {
    margin-left: 0; }

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem; }

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem; }

.btn-group-vertical {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center; }
  .btn-group-vertical .btn,
  .btn-group-vertical .btn-group {
    width: 100%; }
  .btn-group-vertical > .btn + .btn,
  .btn-group-vertical > .btn + .btn-group,
  .btn-group-vertical > .btn-group + .btn,
  .btn-group-vertical > .btn-group + .btn-group {
    margin-top: -1px;
    margin-left: 0; }
  .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
  .btn-group-vertical > .btn-group:not(:last-child) > .btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0; }
  .btn-group-toggle > .btn input[type="radio"],
  .btn-group-toggle > .btn input[type="checkbox"],
  .btn-group-toggle > .btn-group > .btn input[type="radio"],
  .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none; }

.input-group {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%; }
  .input-group > .form-control,
  .input-group > .custom-select,
  .input-group > .custom-file {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0; }
    .input-group > .form-control:focus,
    .input-group > .custom-select:focus,
    .input-group > .custom-file:focus {
      z-index: 3; }
    .input-group > .form-control + .form-control,
    .input-group > .form-control + .custom-select,
    .input-group > .form-control + .custom-file,
    .input-group > .custom-select + .form-control,
    .input-group > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .input-group > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file {
      margin-left: -1px; }
  .input-group > .form-control:not(:last-child),
  .input-group > .custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; }
  .input-group > .form-control:not(:first-child),
  .input-group > .custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; }
  .input-group > .custom-file {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center; }
    .input-group > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::before {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0; }
    .input-group > .custom-file:not(:first-child) .custom-file-label,
    .input-group > .custom-file:not(:first-child) .custom-file-label::before {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0; }

.input-group-prepend,
.input-group-append {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }
  .input-group-prepend .btn,
  .input-group-append .btn {
    position: relative;
    z-index: 2; }
  .input-group-prepend .btn + .btn,
  .input-group-prepend .btn + .input-group-text,
  .input-group-prepend .input-group-text + .input-group-text,
  .input-group-prepend .input-group-text + .btn,
  .input-group-append .btn + .btn,
  .input-group-append .btn + .input-group-text,
  .input-group-append .input-group-text + .input-group-text,
  .input-group-append .input-group-text + .btn {
    margin-left: -1px; }

.input-group-prepend {
  margin-right: -1px; }

.input-group-append {
  margin-left: -1px; }

.input-group-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  color: #4F5467;
  text-align: center;
  white-space: nowrap;
  background-color: #f8f9fa;
  border: 1px solid #e9ecef;
  border-radius: 0.25rem; }
  .input-group-text input[type="radio"],
  .input-group-text input[type="checkbox"] {
    margin-top: 0; }

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem; }

.custom-control-inline {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-right: 1rem; }

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0; }
  .custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    background-color: #009efb; }
  .custom-control-input:focus ~ .custom-control-label::before {
    -webkit-box-shadow: 0 0 0 1px #edf1f5, transparent;
    box-shadow: 0 0 0 1px #edf1f5, transparent; }
  .custom-control-input:active ~ .custom-control-label::before {
    color: #fff;
    background-color: black; }
  .custom-control-input:disabled ~ .custom-control-label {
    color: #6c757d; }
    .custom-control-input:disabled ~ .custom-control-label::before {
      background-color: #e9ecef; }

.custom-control-label {
  margin-bottom: 0; }
  .custom-control-label::before {
    position: absolute;
    top: 0.25rem;
    left: 0;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #dee2e6; }
  .custom-control-label::after {
    position: absolute;
    top: 0.25rem;
    left: 0;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%; }

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem; }

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #009efb; }

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E"); }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  background-color: #009efb; }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E"); }

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(116, 96, 238, 0.5); }

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(116, 96, 238, 0.5); }

.custom-radio .custom-control-label::before {
  border-radius: 50%; }

.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #009efb; }

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E"); }

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(116, 96, 238, 0.5); }

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(2.0625rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  line-height: 1.5;
  color: #4F5467;
  vertical-align: middle;
  background: #fff str-replace(url(""), "%23") no-repeat right 0.75rem center;
  background-size: 8px 10px;
  border: 1px solid #e9ecef;
  border-radius: 0.25rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }
  .custom-select:focus {
    border-color: rgba(0, 0, 0, 0.1);
    outline: 0;
    -webkit-box-shadow: transparent;
    box-shadow: transparent; }
    .custom-select:focus::-ms-value {
      color: #4F5467;
      background-color: #fff; }
  .custom-select[multiple], .custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none; }
  .custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef; }
  .custom-select::-ms-expand {
    opacity: 0; }

.custom-select-sm {
  height: calc(1.64844rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 75%; }

.custom-select-lg {
  height: calc(2.64063rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 125%; }

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(2.0625rem + 2px);
  margin-bottom: 0; }

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(2.0625rem + 2px);
  margin: 0;
  opacity: 0; }
  .custom-file-input:focus ~ .custom-file-control {
    border-color: rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: transparent;
    box-shadow: transparent; }
    .custom-file-input:focus ~ .custom-file-control::before {
      border-color: rgba(0, 0, 0, 0.1); }
  .custom-file-input:lang(en) ~ .custom-file-label::after {
    content: "Browse"; }

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(2.0625rem + 2px);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #4F5467;
  background-color: #fff;
  border: 1px solid #e9ecef;
  border-radius: 0.25rem; }
  .custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(calc(2.0625rem + 2px) - 1px * 2);
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #4F5467;
    content: "Browse";
    background-color: #f8f9fa;
    border-left: 1px solid #e9ecef;
    border-radius: 0 0.25rem 0.25rem 0; }

.nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }

.nav-link {
  display: block;
  padding: 0.5rem 1rem; }
  .nav-link:hover, .nav-link:focus {
    text-decoration: none; }
  .nav-link.disabled {
    color: #6c757d; }

.nav-tabs {
  border-bottom: 1px solid #dee2e6; }
  .nav-tabs .nav-item {
    margin-bottom: -1px; }
  .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
      border-color: #e9ecef #e9ecef #dee2e6; }
    .nav-tabs .nav-link.disabled {
      color: #6c757d;
      background-color: transparent;
      border-color: transparent; }
  .nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #4F5467;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff; }
  .nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.nav-pills .nav-link {
  border-radius: 0.25rem; }

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #009efb; }

.nav-fill .nav-item {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  text-align: center; }

.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center; }

.tab-content > .tab-pane {
  display: none; }

.tab-content > .active {
  display: block; }

.navbar {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 0.5rem 1rem; }
  .navbar > .container,
  .navbar > .container-fluid {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between; }

.navbar-brand {
  display: inline-block;
  padding-top: 0.33594rem;
  padding-bottom: 0.33594rem;
  margin-right: 1rem;
  font-size: 1.09375rem;
  line-height: inherit;
  white-space: nowrap; }
  .navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none; }

.navbar-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }
  .navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0; }
  .navbar-nav .dropdown-menu {
    position: static;
    float: none; }

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.09375rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem; }
  .navbar-toggler:hover, .navbar-toggler:focus {
    text-decoration: none; }
  .navbar-toggler:not(:disabled):not(.disabled) {
    cursor: pointer; }

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%; }

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 576px) {
  .navbar-expand-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-sm .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-sm .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }
      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid {
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap; }
    .navbar-expand-sm .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-sm .navbar-toggler {
      display: none; }
    .navbar-expand-sm .dropup .dropdown-menu {
      top: auto;
      bottom: 100%; } }

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 768px) {
  .navbar-expand-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-md .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-md .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }
      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid {
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap; }
    .navbar-expand-md .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-md .navbar-toggler {
      display: none; }
    .navbar-expand-md .dropup .dropdown-menu {
      top: auto;
      bottom: 100%; } }

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 992px) {
  .navbar-expand-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-lg .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-lg .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid {
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap; }
    .navbar-expand-lg .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-lg .navbar-toggler {
      display: none; }
    .navbar-expand-lg .dropup .dropdown-menu {
      top: auto;
      bottom: 100%; } }

@media (max-width: 1599.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 1600px) {
  .navbar-expand-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-xl .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xl .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }
      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid {
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap; }
    .navbar-expand-xl .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-xl .navbar-toggler {
      display: none; }
    .navbar-expand-xl .dropup .dropdown-menu {
      top: auto;
      bottom: 100%; } }

.navbar-expand {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid {
    padding-right: 0;
    padding-left: 0; }
  .navbar-expand .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute; }
    .navbar-expand .navbar-nav .dropdown-menu-right {
      right: 0;
      left: auto; }
    .navbar-expand .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap; }
  .navbar-expand .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto; }
  .navbar-expand .navbar-toggler {
    display: none; }
  .navbar-expand .dropup .dropdown-menu {
    top: auto;
    bottom: 100%; }

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9); }
  .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7); }
  .navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3); }

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1); }

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9); }
    .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
      color: rgba(0, 0, 0, 0.9); }

.navbar-dark .navbar-brand {
  color: #fff; }
  .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #fff; }

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75); }
  .navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25); }

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff; }

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1); }

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-text a {
    color: #fff; }
    .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
      color: #fff; }

.card {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 0px solid transparent;
  border-radius: 0px; }
  .card > hr {
    margin-right: 0;
    margin-left: 0; }
  .card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0px;
    border-top-right-radius: 0px; }
  .card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px; }

.card-body {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1.25rem; }

.card-title {
  margin-bottom: 0.75rem; }

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link:hover {
  text-decoration: none; }

.card-link + .card-link {
  margin-left: 1.25rem; }

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 0px solid transparent; }
  .card-header:first-child {
    border-radius: calc(0px - 0px) calc(0px - 0px) 0 0; }
  .card-header + .list-group .list-group-item:first-child {
    border-top: 0; }

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 0px solid transparent; }
  .card-footer:last-child {
    border-radius: 0 0 calc(0px - 0px) calc(0px - 0px); }

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem; }

.card-img {
  width: 100%;
  border-radius: calc(0px - 0px); }

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0px - 0px);
  border-top-right-radius: calc(0px - 0px); }

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0px - 0px);
  border-bottom-left-radius: calc(0px - 0px); }

.card-deck {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column; }
  .card-deck .card {
    margin-bottom: 10px; }
  @media (min-width: 576px) {
    .card-deck {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap;
      margin-right: -10px;
      margin-left: -10px; }
      .card-deck .card {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-right: 10px;
        margin-bottom: 0;
        margin-left: 10px; } }

.card-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column; }
  .card-group > .card {
    margin-bottom: 10px; }
  @media (min-width: 576px) {
    .card-group {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap; }
      .card-group > .card {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        margin-bottom: 0; }
        .card-group > .card + .card {
          margin-left: 0;
          border-left: 0; }
        .card-group > .card:first-child {
          border-top-right-radius: 0;
          border-bottom-right-radius: 0; }
          .card-group > .card:first-child .card-img-top,
          .card-group > .card:first-child .card-header {
            border-top-right-radius: 0; }
          .card-group > .card:first-child .card-img-bottom,
          .card-group > .card:first-child .card-footer {
            border-bottom-right-radius: 0; }
        .card-group > .card:last-child {
          border-top-left-radius: 0;
          border-bottom-left-radius: 0; }
          .card-group > .card:last-child .card-img-top,
          .card-group > .card:last-child .card-header {
            border-top-left-radius: 0; }
          .card-group > .card:last-child .card-img-bottom,
          .card-group > .card:last-child .card-footer {
            border-bottom-left-radius: 0; }
        .card-group > .card:only-child {
          border-radius: 0px; }
          .card-group > .card:only-child .card-img-top,
          .card-group > .card:only-child .card-header {
            border-top-left-radius: 0px;
            border-top-right-radius: 0px; }
          .card-group > .card:only-child .card-img-bottom,
          .card-group > .card:only-child .card-footer {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px; }
        .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
          border-radius: 0; }
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
            border-radius: 0; } }

.card-columns .card {
  margin-bottom: 0.75rem; }

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 1.25rem;
    column-gap: 1.25rem; }
    .card-columns .card {
      display: inline-block;
      width: 100%; } }

.breadcrumb {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1.5rem;
  list-style: none;
  background-color: #fff;
  border-radius: 0.25rem; }

.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  padding-left: 0.5rem;
  color: #6c757d;
  content: "/"; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none; }

.breadcrumb-item.active {
  color: #6c757d; }

.pagination {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem; }

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #7460ee;
  background-color: #fff;
  border: 1px solid #dee2e6; }
  .page-link:hover {
    color: #381be7;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6; }
  .page-link:focus {
    z-index: 2;
    outline: 0;
    -webkit-box-shadow: transparent;
    box-shadow: transparent; }
  .page-link:not(:disabled):not(.disabled) {
    cursor: pointer; }

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem; }

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem; }

.page-item.active .page-link {
  z-index: 1;
  color: #fff;
  background-color: #009efb;
  border-color: #009efb; }

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6; }

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.09375rem;
  line-height: 1.5; }

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem; }

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem; }

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.76563rem;
  line-height: 1.5; }

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem; }

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem; }

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem; }
  .badge:empty {
    display: none; }

.btn .badge {
  position: relative;
  top: -1px; }

.badge-pill {
  padding-right: 0.2em;
  padding-left: 0.2em;
  border-radius: 10rem; }

.badge-primary {
  color: #fff;
  background-color: #7460ee; }
  .badge-primary[href]:hover, .badge-primary[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #4c32e9; }

.badge-secondary {
  color: #212529;
  background-color: #f8f9fa; }
  .badge-secondary[href]:hover, .badge-secondary[href]:focus {
    color: #212529;
    text-decoration: none;
    background-color: #dae0e5; }

.badge-success {
  color: #fff;
  background-color: #36bea6; }
  .badge-success[href]:hover, .badge-success[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #2b9683; }

.badge-info {
  color: #fff;
  background-color: #009efb; }
  .badge-info[href]:hover, .badge-info[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #007ec8; }

.badge-warning {
  color: #212529;
  background-color: #ffbc34; }
  .badge-warning[href]:hover, .badge-warning[href]:focus {
    color: #212529;
    text-decoration: none;
    background-color: #ffab01; }

.badge-danger {
  color: #fff;
  background-color: #f62d51; }
  .badge-danger[href]:hover, .badge-danger[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #e60a31; }

.badge-light {
  color: #212529;
  background-color: #f8f9fa; }
  .badge-light[href]:hover, .badge-light[href]:focus {
    color: #212529;
    text-decoration: none;
    background-color: #dae0e5; }

.badge-dark {
  color: #fff;
  background-color: #343a40; }
  .badge-dark[href]:hover, .badge-dark[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #1d2124; }

.badge-cyan {
  color: #fff;
  background-color: #01c0c8; }
  .badge-cyan[href]:hover, .badge-cyan[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #018f95; }

.badge-purple {
  color: #fff;
  background-color: #7460ee; }
  .badge-purple[href]:hover, .badge-purple[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #4c32e9; }

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem; }
  @media (min-width: 576px) {
    .jumbotron {
      padding: 4rem 2rem; } }

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0; }

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem; }

.alert-heading {
  color: inherit; }

.alert-link {
  font-weight: 700; }

.alert-dismissible {
  padding-right: 3.8125rem; }
  .alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit; }

.alert-primary {
  color: #3c327c;
  background-color: #e3dffc;
  border-color: #d8d2fa; }
  .alert-primary hr {
    border-top-color: #c4bbf7; }
  .alert-primary .alert-link {
    color: #2a2358; }

.alert-secondary {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe; }
  .alert-secondary hr {
    border-top-color: #ececf6; }
  .alert-secondary .alert-link {
    color: #686868; }

.alert-success {
  color: #1c6356;
  background-color: #d7f2ed;
  border-color: #c7ede6; }
  .alert-success hr {
    border-top-color: #b4e7dd; }
  .alert-success .alert-link {
    color: #113b33; }

.alert-info {
  color: #005283;
  background-color: #ccecfe;
  border-color: #b8e4fe; }
  .alert-info hr {
    border-top-color: #9fdafe; }
  .alert-info .alert-link {
    color: #003250; }

.alert-warning {
  color: #85621b;
  background-color: #fff2d6;
  border-color: #ffecc6; }
  .alert-warning hr {
    border-top-color: #ffe4ad; }
  .alert-warning .alert-link {
    color: #5b4312; }

.alert-danger {
  color: #80172a;
  background-color: #fdd5dc;
  border-color: #fcc4ce; }
  .alert-danger hr {
    border-top-color: #fbacba; }
  .alert-danger .alert-link {
    color: #550f1c; }

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe; }
  .alert-light hr {
    border-top-color: #ececf6; }
  .alert-light .alert-link {
    color: #686868; }

.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca; }
  .alert-dark hr {
    border-top-color: #b9bbbe; }
  .alert-dark .alert-link {
    color: #040505; }

.alert-cyan {
  color: #016468;
  background-color: #ccf2f4;
  border-color: #b8edf0; }
  .alert-cyan hr {
    border-top-color: #a3e8ec; }
  .alert-cyan .alert-link {
    color: #013335; }

.alert-purple {
  color: #3c327c;
  background-color: #e3dffc;
  border-color: #d8d2fa; }
  .alert-purple hr {
    border-top-color: #c4bbf7; }
  .alert-purple .alert-link {
    color: #2a2358; }



.progress {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: auto;
  overflow: hidden;
  font-size: 0.65625rem;
  background-color: #e9ecef;
  border-radius: 0.25rem; }

.progress-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  color: #fff;
  text-align: center;
  background-color: #7460ee;
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease; }

.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 200px 200px; 
  -webkit-animation: mymove 0.1s linear infinite;
  animation: mymove 0.1s infinite;
}

@keyframes mymove {
    from {left: -95px;}
    to {left: 230px;}
}

.progress-bar-animated {
   }

  @-webkit-keyframes progress {
  from {
    background-position: auto 0; }
  to {
    background-position: 0 0; } }

@keyframes progress {
  from {
    background-position: auto 0; }
  to {
    background-position: 0 0; } }

.media {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start; }

.media-body {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1; }

.list-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0; }

.list-group-item-action {
  width: 100%;
  color: #4F5467;
  text-align: inherit; }
  .list-group-item-action:hover, .list-group-item-action:focus {
    color: #4F5467;
    text-decoration: none;
    background-color: #f8f9fa; }
  .list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef; }

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125); }
  .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
  .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }
  .list-group-item:hover, .list-group-item:focus {
    z-index: 1;
    text-decoration: none; }
  .list-group-item.disabled, .list-group-item:disabled {
    color: #6c757d;
    background-color: #fff; }
  .list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #009efb;
    border-color: #009efb; }

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0; }

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0; }

.list-group-flush:last-child .list-group-item:last-child {
  border-bottom: 0; }

.list-group-item-primary {
  color: #3c327c;
  background-color: #d8d2fa; }
  .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #3c327c;
    background-color: #c4bbf7; }
  .list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #3c327c;
    border-color: #3c327c; }

.list-group-item-secondary {
  color: #818182;
  background-color: #fdfdfe; }
  .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #818182;
    background-color: #ececf6; }
  .list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182; }

.list-group-item-success {
  color: #1c6356;
  background-color: #c7ede6; }
  .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #1c6356;
    background-color: #b4e7dd; }
  .list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #1c6356;
    border-color: #1c6356; }

.list-group-item-info {
  color: #005283;
  background-color: #b8e4fe; }
  .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #005283;
    background-color: #9fdafe; }
  .list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #005283;
    border-color: #005283; }

.list-group-item-warning {
  color: #85621b;
  background-color: #ffecc6; }
  .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #85621b;
    background-color: #ffe4ad; }
  .list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #85621b;
    border-color: #85621b; }

.list-group-item-danger {
  color: #80172a;
  background-color: #fcc4ce; }
  .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #80172a;
    background-color: #fbacba; }
  .list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #80172a;
    border-color: #80172a; }

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe; }
  .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #818182;
    background-color: #ececf6; }
  .list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182; }

.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca; }
  .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #1b1e21;
    background-color: #b9bbbe; }
  .list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21; }

.list-group-item-cyan {
  color: #016468;
  background-color: #b8edf0; }
  .list-group-item-cyan.list-group-item-action:hover, .list-group-item-cyan.list-group-item-action:focus {
    color: #016468;
    background-color: #a3e8ec; }
  .list-group-item-cyan.list-group-item-action.active {
    color: #fff;
    background-color: #016468;
    border-color: #016468; }

.list-group-item-purple {
  color: #3c327c;
  background-color: #d8d2fa; }
  .list-group-item-purple.list-group-item-action:hover, .list-group-item-purple.list-group-item-action:focus {
    color: #3c327c;
    background-color: #c4bbf7; }
  .list-group-item-purple.list-group-item-action.active {
    color: #fff;
    background-color: #3c327c;
    border-color: #3c327c; }

.close {
  float: right;
  font-size: 1.3125rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5; }
  .close:hover, .close:focus {
    color: #000;
    text-decoration: none;
    opacity: .75; }
  .close:not(:disabled):not(.disabled) {
    cursor: pointer; }

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none; }

.modal-open {
  overflow: hidden; }

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  outline: 0; }
  .modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none; }
  .modal.fade .modal-dialog {
    -webkit-transition: -webkit-transform 0.3s ease-out;
    transition: -webkit-transform 0.3s ease-out;
    -o-transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
    -webkit-transform: translate(0, -25%);
    -ms-transform: translate(0, -25%);
    transform: translate(0, -25%); }
  .modal.show .modal-dialog {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0); }

.modal-dialog-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - (0.5rem * 2)); }

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000; }
  .modal-backdrop.fade {
    opacity: 0; }
  .modal-backdrop.show {
    opacity: 0.5; }

.modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem;
  border-bottom: 1px solid #e9ecef;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem; }
  .modal-header .close {
    padding: 1rem;
    margin: -1rem -1rem -1rem auto; }

.modal-title {
  margin-bottom: 0;
  line-height: 1.5; }

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem; }

.modal-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #e9ecef; }
  .modal-footer > :not(:first-child) {
    margin-left: .25rem; }
  .modal-footer > :not(:last-child) {
    margin-right: .25rem; }

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto; }
  .modal-dialog-centered {
    min-height: calc(100% - (1.75rem * 2)); }
  .modal-sm {
    max-width: 300px; } }

@media (min-width: 992px) {
  .modal-lg {
    max-width: 800px; } }

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: "Rubik", sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.76563rem;
  word-wrap: break-word;
  opacity: 0; }
  .tooltip.show {
    opacity: 0.9; }
  .tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem; }
    .tooltip .arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0; }
  .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0; }
    .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
      top: 0;
      border-width: 0.4rem 0.4rem 0;
      border-top-color: #000; }

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem; }
  .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
      right: 0;
      border-width: 0.4rem 0.4rem 0.4rem 0;
      border-right-color: #000; }

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0; }
  .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0; }
    .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
      bottom: 0;
      border-width: 0 0.4rem 0.4rem;
      border-bottom-color: #000; }

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem; }
  .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
      left: 0;
      border-width: 0.4rem 0 0.4rem 0.4rem;
      border-left-color: #000; }

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem; }

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: "Rubik", sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.76563rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem; }
  .popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.3rem; }
    .popover .arrow::before, .popover .arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem; }
  .bs-popover-top .arrow, .bs-popover-auto[x-placement^="top"] .arrow {
    bottom: calc((0.5rem + 1px) * -1); }
  .bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before,
  .bs-popover-top .arrow::after, .bs-popover-auto[x-placement^="top"] .arrow::after {
    border-width: 0.5rem 0.5rem 0; }
  .bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before {
    bottom: 0;
    border-top-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-top .arrow::after, .bs-popover-auto[x-placement^="top"] .arrow::after {
    bottom: 1px;
    border-top-color: #fff; }

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem; }
  .bs-popover-right .arrow, .bs-popover-auto[x-placement^="right"] .arrow {
    left: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
  .bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before,
  .bs-popover-right .arrow::after, .bs-popover-auto[x-placement^="right"] .arrow::after {
    border-width: 0.5rem 0.5rem 0.5rem 0; }
  .bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before {
    left: 0;
    border-right-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-right .arrow::after, .bs-popover-auto[x-placement^="right"] .arrow::after {
    left: 1px;
    border-right-color: #fff; }

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem; }
  .bs-popover-bottom .arrow, .bs-popover-auto[x-placement^="bottom"] .arrow {
    top: calc((0.5rem + 1px) * -1); }
  .bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before,
  .bs-popover-bottom .arrow::after, .bs-popover-auto[x-placement^="bottom"] .arrow::after {
    border-width: 0 0.5rem 0.5rem 0.5rem; }
  .bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before {
    top: 0;
    border-bottom-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-bottom .arrow::after, .bs-popover-auto[x-placement^="bottom"] .arrow::after {
    top: 1px;
    border-bottom-color: #fff; }
  .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7; }

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem; }
  .bs-popover-left .arrow, .bs-popover-auto[x-placement^="left"] .arrow {
    right: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
  .bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before,
  .bs-popover-left .arrow::after, .bs-popover-auto[x-placement^="left"] .arrow::after {
    border-width: 0.5rem 0 0.5rem 0.5rem; }
  .bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before {
    right: 0;
    border-left-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-left .arrow::after, .bs-popover-auto[x-placement^="left"] .arrow::after {
    right: 1px;
    border-left-color: #fff; }

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: inherit;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px); }
  .popover-header:empty {
    display: none; }

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529; }

.carousel {
  position: relative; }

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden; }

.carousel-item {
  position: relative;
  display: none;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  -webkit-transition: -webkit-transform 0.6s ease;
  transition: -webkit-transform 0.6s ease;
  -o-transition: transform 0.6s ease;
  transition: transform 0.6s ease;
  transition: transform 0.6s ease, -webkit-transform 0.6s ease;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-perspective: 1000px;
  perspective: 1000px; }

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block; }

.carousel-item-next,
.carousel-item-prev {
  position: absolute;
  top: 0; }

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
  -webkit-transform: translateX(0);
  -ms-transform: translateX(0);
  transform: translateX(0); }
  @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0); } }

.carousel-item-next,
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
  -ms-transform: translateX(100%);
  transform: translateX(100%); }
  @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
    .carousel-item-next,
    .active.carousel-item-right {
      -webkit-transform: translate3d(100%, 0, 0);
      transform: translate3d(100%, 0, 0); } }

.carousel-item-prev,
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  transform: translateX(-100%); }
  @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
    .carousel-item-prev,
    .active.carousel-item-left {
      -webkit-transform: translate3d(-100%, 0, 0);
      transform: translate3d(-100%, 0, 0); } }

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5; }
  .carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover,
  .carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9; }

.carousel-control-prev {
  left: 0; }

.carousel-control-next {
  right: 0; }

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: transparent no-repeat center center;
  background-size: 100% 100%; }

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E"); }

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E"); }

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 10px;
  left: 0;
  z-index: 15;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none; }
  .carousel-indicators li {
    position: relative;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: rgba(255, 255, 255, 0.5); }
    .carousel-indicators li::before {
      position: absolute;
      top: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: ""; }
    .carousel-indicators li::after {
      position: absolute;
      bottom: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: ""; }
  .carousel-indicators .active {
    background-color: #fff; }

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center; }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.bg-primary {
  background-color: #7460ee !important; }

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #4c32e9 !important; }

.bg-secondary {
  background-color: #f8f9fa !important; }

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #dae0e5 !important; }

.bg-success {
  background-color: #36bea6 !important; }

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #2b9683 !important; }

.bg-info {
  background-color: #009efb !important; }

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #007ec8 !important; }

.bg-warning {
  background-color: #ffbc34 !important; }

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #ffab01 !important; }

.bg-danger {
  background-color: #f62d51 !important; }

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #e60a31 !important; }

.bg-light {
  background-color: #f8f9fa !important; }

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important; }

.bg-dark {
  background-color: #343a40 !important; }

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1d2124 !important; }

.bg-cyan {
  background-color: #01c0c8 !important; }

a.bg-cyan:hover, a.bg-cyan:focus,
button.bg-cyan:hover,
button.bg-cyan:focus {
  background-color: #018f95 !important; }

.bg-purple {
  background-color: #7460ee !important; }

a.bg-purple:hover, a.bg-purple:focus,
button.bg-purple:hover,
button.bg-purple:focus {
  background-color: #4c32e9 !important; }

.bg-white {
  background-color: #fff !important; }

.bg-transparent {
  background-color: transparent !important; }

.border {
  border: 1px solid #e9ecef !important; }

.border-top {
  border-top: 1px solid #e9ecef !important; }

.border-right {
  border-right: 1px solid #e9ecef !important; }

.border-bottom {
  border-bottom: 1px solid #e9ecef !important; }

.border-left {
  border-left: 1px solid #e9ecef !important; }

.border-0 {
  border: 0 !important; }

.border-top-0 {
  border-top: 0 !important; }

.border-right-0 {
  border-right: 0 !important; }

.border-bottom-0 {
  border-bottom: 0 !important; }

.border-left-0 {
  border-left: 0 !important; }

.border-primary {
  border-color: #7460ee !important; }

.border-secondary {
  border-color: #f8f9fa !important; }

.border-success {
  border-color: #36bea6 !important; }

.border-info {
  border-color: #009efb !important; }

.border-warning {
  border-color: #ffbc34 !important; }

.border-danger {
  border-color: #f62d51 !important; }

.border-light {
  border-color: #f8f9fa !important; }

.border-dark {
  border-color: #343a40 !important; }

.border-cyan {
  border-color: #01c0c8 !important; }

.border-purple {
  border-color: #7460ee !important; }

.border-white {
  border-color: #fff !important; }

.rounded {
  border-radius: 0.25rem !important; }

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important; }

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important; }

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-circle {
  border-radius: 50% !important; }

.rounded-0 {
  border-radius: 0 !important; }

.clearfix::after {
  display: block;
  clear: both;
  content: ""; }

.d-none {
  display: none !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important; }

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important; }

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 768px) {
  .d-md-none {
    display: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 1600px) {
  .d-xl-none {
    display: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media print {
  .d-print-none {
    display: none !important; }
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden; }
  .embed-responsive::before {
    display: block;
    content: ""; }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0; }

.embed-responsive-21by9::before {
  padding-top: 42.85714%; }

.embed-responsive-16by9::before {
  padding-top: 56.25%; }

.embed-responsive-4by3::before {
  padding-top: 75%; }

.embed-responsive-1by1::before {
  padding-top: 100%; }

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: row !important;
  flex-direction: row !important; }

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: column !important;
  flex-direction: column !important; }

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important; }

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important; }

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important; }

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important; }

.justify-content-start {
  -webkit-box-pack: start !important;
  -ms-flex-pack: start !important;
  justify-content: flex-start !important; }

.justify-content-end {
  -webkit-box-pack: end !important;
  -ms-flex-pack: end !important;
  justify-content: flex-end !important; }

.justify-content-center {
  -webkit-box-pack: center !important;
  -ms-flex-pack: center !important;
  justify-content: center !important; }

.justify-content-between {
  -webkit-box-pack: justify !important;
  -ms-flex-pack: justify !important;
  justify-content: space-between !important; }

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important; }

.align-items-start {
  -webkit-box-align: start !important;
  -ms-flex-align: start !important;
  align-items: flex-start !important; }

.align-items-end {
  -webkit-box-align: end !important;
  -ms-flex-align: end !important;
  align-items: flex-end !important; }

.align-items-center {
  -webkit-box-align: center !important;
  -ms-flex-align: center !important;
  align-items: center !important; }

.align-items-baseline {
  -webkit-box-align: baseline !important;
  -ms-flex-align: baseline !important;
  align-items: baseline !important; }

.align-items-stretch {
  -webkit-box-align: stretch !important;
  -ms-flex-align: stretch !important;
  align-items: stretch !important; }

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important; }

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important; }

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important; }

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important; }

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important; }

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important; }

.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important; }

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important; }

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important; }

.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important; }

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important; }

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important; }

@media (min-width: 576px) {
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-sm-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-sm-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-sm-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; } }

@media (min-width: 768px) {
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-md-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-md-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-md-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; } }

@media (min-width: 992px) {
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-lg-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-lg-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-lg-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; } }

@media (min-width: 1600px) {
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-xl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-xl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-xl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; } }

.float-left {
  float: left !important; }

.float-right {
  float: right !important; }

.float-none {
  float: none !important; }

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important; }
  .float-sm-right {
    float: right !important; }
  .float-sm-none {
    float: none !important; } }

@media (min-width: 768px) {
  .float-md-left {
    float: left !important; }
  .float-md-right {
    float: right !important; }
  .float-md-none {
    float: none !important; } }

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important; }
  .float-lg-right {
    float: right !important; }
  .float-lg-none {
    float: none !important; } }

@media (min-width: 1600px) {
  .float-xl-left {
    float: left !important; }
  .float-xl-right {
    float: right !important; }
  .float-xl-none {
    float: none !important; } }

.position-static {
  position: static !important; }

.position-relative {
  position: relative !important; }

.position-absolute {
  position: absolute !important; }

.position-fixed {
  position: fixed !important; }

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important; }

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030; }

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020; } }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  -webkit-clip-path: inset(50%);
  clip-path: inset(50%);
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
  -webkit-clip-path: none;
  clip-path: none; }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.mw-100 {
  max-width: 100% !important; }

.mh-100 {
  max-height: 100% !important; }

.m-0 {
  margin: 0 !important; }

.mt-0,
.my-0 {
  margin-top: 0 !important; }

.mr-0,
.mx-0 {
  margin-right: 0 !important; }

.mb-0,
.my-0 {
  margin-bottom: 0 !important; }

.ml-0,
.mx-0 {
  margin-left: 0 !important; }

.m-1 {
  margin: 0.25rem !important; }

.mt-1,
.my-1 {
  margin-top: 0.25rem !important; }

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important; }

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important; }

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important; }

.m-2 {
  margin: 0.5rem !important; }

.mt-2,
.my-2 {
  margin-top: 0.5rem !important; }

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important; }

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important; }

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important; }

.m-3 {
  margin: 1rem !important; }

.mt-3,
.my-3 {
  margin-top: 1rem !important; }

.mr-3,
.mx-3 {
  margin-right: 1rem !important; }

.mb-3,
.my-3 {
  margin-bottom: 1rem !important; }

.ml-3,
.mx-3 {
  margin-left: 1rem !important; }

.m-4 {
  margin: 1.5rem !important; }

.mt-4,
.my-4 {
  margin-top: 1.5rem !important; }

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important; }

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important; }

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important; }

.m-5 {
  margin: 3rem !important; }

.mt-5,
.my-5 {
  margin-top: 3rem !important; }

.mr-5,
.mx-5 {
  margin-right: 3rem !important; }

.mb-5,
.my-5 {
  margin-bottom: 3rem !important; }

.ml-5,
.mx-5 {
  margin-left: 3rem !important; }

.p-0 {
  padding: 0 !important; }

.pt-0,
.py-0 {
  padding-top: 0 !important; }

.pr-0,
.px-0 {
  padding-right: 0 !important; }

.pb-0,
.py-0 {
  padding-bottom: 0 !important; }

.pl-0,
.px-0 {
  padding-left: 0 !important; }

.p-1 {
  padding: 0.25rem !important; }

.pt-1,
.py-1 {
  padding-top: 0.25rem !important; }

.pr-1,
.px-1 {
  padding-right: 0.25rem !important; }

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important; }

.pl-1,
.px-1 {
  padding-left: 0.25rem !important; }

.p-2 {
  padding: 0.5rem !important; }

.pt-2,
.py-2 {
  padding-top: 0.5rem !important; }

.pr-2,
.px-2 {
  padding-right: 0.5rem !important; }

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important; }

.pl-2,
.px-2 {
  padding-left: 0.5rem !important; }

.p-3 {
  padding: 1rem !important; }

.pt-3,
.py-3 {
  padding-top: 1rem !important; }

.pr-3,
.px-3 {
  padding-right: 1rem !important; }

.pb-3,
.py-3 {
  padding-bottom: 1rem !important; }

.pl-3,
.px-3 {
  padding-left: 1rem !important; }

.p-4 {
  padding: 1.5rem !important; }

.pt-4,
.py-4 {
  padding-top: 1.5rem !important; }

.pr-4,
.px-4 {
  padding-right: 1.5rem !important; }

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important; }

.pl-4,
.px-4 {
  padding-left: 1.5rem !important; }

.p-5 {
  padding: 3rem !important; }

.pt-5,
.py-5 {
  padding-top: 3rem !important; }

.pr-5,
.px-5 {
  padding-right: 3rem !important; }

.pb-5,
.py-5 {
  padding-bottom: 3rem !important; }

.pl-5,
.px-5 {
  padding-left: 3rem !important; }

.m-auto {
  margin: auto !important; }

.mt-auto,
.my-auto {
  margin-top: auto !important; }

.mr-auto,
.mx-auto {
  margin-right: auto !important; }

.mb-auto,
.my-auto {
  margin-bottom: auto !important; }

.ml-auto,
.mx-auto {
  margin-left: auto !important; }

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important; }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important; }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important; }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important; }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important; }
  .m-sm-1 {
    margin: 0.25rem !important; }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important; }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important; }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important; }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important; }
  .m-sm-2 {
    margin: 0.5rem !important; }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important; }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important; }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important; }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important; }
  .m-sm-3 {
    margin: 1rem !important; }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important; }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important; }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important; }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important; }
  .m-sm-4 {
    margin: 1.5rem !important; }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important; }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important; }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important; }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important; }
  .m-sm-5 {
    margin: 3rem !important; }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important; }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important; }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important; }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important; }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important; }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important; }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important; }
  .p-sm-1 {
    padding: 0.25rem !important; }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important; }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important; }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important; }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important; }
  .p-sm-2 {
    padding: 0.5rem !important; }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important; }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important; }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important; }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important; }
  .p-sm-3 {
    padding: 1rem !important; }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important; }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important; }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important; }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important; }
  .p-sm-4 {
    padding: 1.5rem !important; }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important; }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important; }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important; }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important; }
  .p-sm-5 {
    padding: 3rem !important; }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important; }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important; }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important; }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important; }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important; }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important; }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important; } }

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important; }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important; }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important; }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important; }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important; }
  .m-md-1 {
    margin: 0.25rem !important; }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important; }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important; }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important; }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important; }
  .m-md-2 {
    margin: 0.5rem !important; }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important; }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important; }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important; }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important; }
  .m-md-3 {
    margin: 1rem !important; }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important; }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important; }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important; }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important; }
  .m-md-4 {
    margin: 1.5rem !important; }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important; }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important; }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important; }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important; }
  .m-md-5 {
    margin: 3rem !important; }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important; }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important; }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important; }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important; }
  .p-md-0 {
    padding: 0 !important; }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important; }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important; }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important; }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important; }
  .p-md-1 {
    padding: 0.25rem !important; }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important; }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important; }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important; }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important; }
  .p-md-2 {
    padding: 0.5rem !important; }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important; }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important; }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important; }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important; }
  .p-md-3 {
    padding: 1rem !important; }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important; }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important; }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important; }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important; }
  .p-md-4 {
    padding: 1.5rem !important; }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important; }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important; }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important; }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important; }
  .p-md-5 {
    padding: 3rem !important; }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important; }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important; }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important; }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important; }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important; }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important; }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important; } }

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important; }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important; }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important; }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important; }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important; }
  .m-lg-1 {
    margin: 0.25rem !important; }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important; }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important; }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important; }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important; }
  .m-lg-2 {
    margin: 0.5rem !important; }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important; }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important; }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important; }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important; }
  .m-lg-3 {
    margin: 1rem !important; }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important; }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important; }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important; }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important; }
  .m-lg-4 {
    margin: 1.5rem !important; }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important; }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important; }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important; }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important; }
  .m-lg-5 {
    margin: 3rem !important; }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important; }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important; }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important; }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important; }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important; }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important; }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important; }
  .p-lg-1 {
    padding: 0.25rem !important; }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important; }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important; }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important; }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important; }
  .p-lg-2 {
    padding: 0.5rem !important; }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important; }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important; }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important; }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important; }
  .p-lg-3 {
    padding: 1rem !important; }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important; }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important; }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important; }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important; }
  .p-lg-4 {
    padding: 1.5rem !important; }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important; }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important; }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important; }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important; }
  .p-lg-5 {
    padding: 3rem !important; }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important; }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important; }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important; }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important; }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important; }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important; }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important; } }

@media (min-width: 1600px) {
  .m-xl-0 {
    margin: 0 !important; }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important; }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important; }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important; }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important; }
  .m-xl-1 {
    margin: 0.25rem !important; }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important; }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important; }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important; }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important; }
  .m-xl-2 {
    margin: 0.5rem !important; }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important; }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important; }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important; }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important; }
  .m-xl-3 {
    margin: 1rem !important; }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important; }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important; }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important; }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important; }
  .m-xl-4 {
    margin: 1.5rem !important; }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important; }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important; }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important; }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important; }
  .m-xl-5 {
    margin: 3rem !important; }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important; }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important; }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important; }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important; }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important; }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important; }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important; }
  .p-xl-1 {
    padding: 0.25rem !important; }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important; }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important; }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important; }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important; }
  .p-xl-2 {
    padding: 0.5rem !important; }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important; }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important; }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important; }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important; }
  .p-xl-3 {
    padding: 1rem !important; }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important; }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important; }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important; }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important; }
  .p-xl-4 {
    padding: 1.5rem !important; }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important; }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important; }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important; }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important; }
  .p-xl-5 {
    padding: 3rem !important; }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important; }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important; }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important; }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important; }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important; }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important; }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important; } }

.text-justify {
  text-align: justify !important; }

.text-nowrap {
  white-space: nowrap !important; }

.text-truncate {
  overflow: hidden;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  white-space: nowrap; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important; }
  .text-sm-right {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important; }
  .text-md-right {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important; }
  .text-lg-right {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1600px) {
  .text-xl-left {
    text-align: left !important; }
  .text-xl-right {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.font-weight-light {
  font-weight: 300 !important; }

.font-weight-normal {
  font-weight: 400 !important; }

.font-weight-bold {
  font-weight: 700 !important; }

.font-italic {
  font-style: italic !important; }

.text-white {
  color: #fff !important; }

.text-primary {
  color: #7460ee !important; }

a.text-primary:hover, a.text-primary:focus {
  color: #4c32e9 !important; }

/*.text-secondary {
  color: #f8f9fa !important; }*/

a.text-secondary:hover, a.text-secondary:focus {
  color: #dae0e5 !important; }

.text-success {
  color: #36bea6 !important; }

a.text-success:hover, a.text-success:focus {
  color: #2b9683 !important; }

.text-info {
  color: #009efb !important; }

a.text-info:hover, a.text-info:focus {
  color: #007ec8 !important; }

.text-warning {
  color: #ffbc34 !important; }

a.text-warning:hover, a.text-warning:focus {
  color: #ffab01 !important; }

.text-danger {
  color: #f62d51 !important; }

a.text-danger:hover, a.text-danger:focus {
  color: #e60a31 !important; }

.text-light {
  color: #f8f9fa !important; }

a.text-light:hover, a.text-light:focus {
  color: #dae0e5 !important; }

.text-dark {
  color: #343a40 !important; }

a.text-dark:hover, a.text-dark:focus {
  color: #1d2124 !important; }

.text-cyan {
  color: #01c0c8 !important; }

a.text-cyan:hover, a.text-cyan:focus {
  color: #018f95 !important; }

.text-purple {
  color: #7460ee !important; }

a.text-purple:hover, a.text-purple:focus {
  color: #4c32e9 !important; }

.text-muted {
  color: #adb5bd !important; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.visible {
  visibility: visible !important; }

.invisible {
  visibility: hidden !important; }

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important; }
  a:not(.btn) {
    text-decoration: underline; }
  abbr[title]::after {
    content: " (" attr(title) ")"; }
  pre {
    white-space: pre-wrap !important; }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid; }
  thead {
    display: table-header-group; }
  tr,
  img {
    page-break-inside: avoid; }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }
  h2,
  h3 {
    page-break-after: avoid; }
  @page {
    size: a3; }
  body {
    min-width: 992px !important; }
  .container {
    min-width: 992px !important; }
  .navbar {
    display: none; }
  .badge {
    border: 1px solid #000; }
  .table {
    border-collapse: collapse !important; }
    .table td,
    .table th {
      background-color: #fff !important; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important; } }

/*!
 * animate.css -http://daneden.me/animate
 * Version - 3.5.1
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2016 Daniel Eden
 */
.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both; }

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite; }

.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s; }

.animated.flipOutX, .animated.flipOutY, .animated.bounceIn, .animated.bounceOut {
  -webkit-animation-duration: .75s;
  animation-duration: .75s; }

@-webkit-keyframes bounce {
  from, 20%, 53%, 80%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  40%, 43% {
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0); }
  70% {
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -15px, 0);
    transform: translate3d(0, -15px, 0); }
  90% {
    -webkit-transform: translate3d(0, -4px, 0);
    transform: translate3d(0, -4px, 0); } }

@keyframes bounce {
  from, 20%, 53%, 80%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  40%, 43% {
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0); }
  70% {
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -15px, 0);
    transform: translate3d(0, -15px, 0); }
  90% {
    -webkit-transform: translate3d(0, -4px, 0);
    transform: translate3d(0, -4px, 0); } }

.bounce {
  -webkit-animation-name: bounce;
  animation-name: bounce;
  -webkit-transform-origin: center bottom;
  -ms-transform-origin: center bottom;
  transform-origin: center bottom; }

@-webkit-keyframes flash {
  from, 50%, to {
    opacity: 1; }
  25%, 75% {
    opacity: 0; } }

@keyframes flash {
  from, 50%, to {
    opacity: 1; }
  25%, 75% {
    opacity: 0; } }

.flash {
  -webkit-animation-name: flash;
  animation-name: flash; }

@-webkit-keyframes pulse {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); }
  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05); }
  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); } }

@keyframes pulse {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); }
  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05); }
  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); } }

.pulse {
  -webkit-animation-name: pulse;
  animation-name: pulse; }

@-webkit-keyframes rubberBand {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1); }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1); }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1); }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1); }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1); }
  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); } }

@keyframes rubberBand {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1); }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1); }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1); }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1); }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1); }
  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); } }

.rubberBand {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand; }

@-webkit-keyframes shake {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0); }
  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0); } }

@keyframes shake {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0); }
  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0); } }

.shake {
  -webkit-animation-name: shake;
  animation-name: shake; }

@-webkit-keyframes headShake {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  6.5% {
    -webkit-transform: translateX(-6px) rotateY(-9deg);
    transform: translateX(-6px) rotateY(-9deg); }
  18.5% {
    -webkit-transform: translateX(5px) rotateY(7deg);
    transform: translateX(5px) rotateY(7deg); }
  31.5% {
    -webkit-transform: translateX(-3px) rotateY(-5deg);
    transform: translateX(-3px) rotateY(-5deg); }
  43.5% {
    -webkit-transform: translateX(2px) rotateY(3deg);
    transform: translateX(2px) rotateY(3deg); }
  50% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@keyframes headShake {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  6.5% {
    -webkit-transform: translateX(-6px) rotateY(-9deg);
    transform: translateX(-6px) rotateY(-9deg); }
  18.5% {
    -webkit-transform: translateX(5px) rotateY(7deg);
    transform: translateX(5px) rotateY(7deg); }
  31.5% {
    -webkit-transform: translateX(-3px) rotateY(-5deg);
    transform: translateX(-3px) rotateY(-5deg); }
  43.5% {
    -webkit-transform: translateX(2px) rotateY(3deg);
    transform: translateX(2px) rotateY(3deg); }
  50% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

.headShake {
  -webkit-animation-timing-function: ease-in-out;
  animation-timing-function: ease-in-out;
  -webkit-animation-name: headShake;
  animation-name: headShake; }

@-webkit-keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg); }
  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg); }
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg); }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg); }
  to {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg); } }

@keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg); }
  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg); }
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg); }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg); }
  to {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg); } }

.swing {
  -webkit-transform-origin: top center;
  -ms-transform-origin: top center;
  transform-origin: top center;
  -webkit-animation-name: swing;
  animation-name: swing; }

@-webkit-keyframes tada {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); }
  10%, 20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg); }
  30%, 50%, 70%, 90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg); }
  40%, 60%, 80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg); }
  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); } }

@keyframes tada {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); }
  10%, 20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg); }
  30%, 50%, 70%, 90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg); }
  40%, 60%, 80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg); }
  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); } }

.tada {
  -webkit-animation-name: tada;
  animation-name: tada; }

@-webkit-keyframes wobble {
  from {
    -webkit-transform: none;
    transform: none; }
  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
    transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg); }
  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
    transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg); }
  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
    transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg); }
  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
    transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg); }
  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
    transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg); }
  to {
    -webkit-transform: none;
    transform: none; } }

@keyframes wobble {
  from {
    -webkit-transform: none;
    transform: none; }
  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
    transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg); }
  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
    transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg); }
  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
    transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg); }
  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
    transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg); }
  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
    transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg); }
  to {
    -webkit-transform: none;
    transform: none; } }

.wobble {
  -webkit-animation-name: wobble;
  animation-name: wobble; }

@-webkit-keyframes jello {
  from, 11.1%, to {
    -webkit-transform: none;
    transform: none; }
  22.2% {
    -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
    transform: skewX(-12.5deg) skewY(-12.5deg); }
  33.3% {
    -webkit-transform: skewX(6.25deg) skewY(6.25deg);
    transform: skewX(6.25deg) skewY(6.25deg); }
  44.4% {
    -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
    transform: skewX(-3.125deg) skewY(-3.125deg); }
  55.5% {
    -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
    transform: skewX(1.5625deg) skewY(1.5625deg); }
  66.6% {
    -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
    transform: skewX(-0.78125deg) skewY(-0.78125deg); }
  77.7% {
    -webkit-transform: skewX(0.39063deg) skewY(0.39063deg);
    transform: skewX(0.39063deg) skewY(0.39063deg); }
  88.8% {
    -webkit-transform: skewX(-0.19531deg) skewY(-0.19531deg);
    transform: skewX(-0.19531deg) skewY(-0.19531deg); } }

@keyframes jello {
  from, 11.1%, to {
    -webkit-transform: none;
    transform: none; }
  22.2% {
    -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
    transform: skewX(-12.5deg) skewY(-12.5deg); }
  33.3% {
    -webkit-transform: skewX(6.25deg) skewY(6.25deg);
    transform: skewX(6.25deg) skewY(6.25deg); }
  44.4% {
    -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
    transform: skewX(-3.125deg) skewY(-3.125deg); }
  55.5% {
    -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
    transform: skewX(1.5625deg) skewY(1.5625deg); }
  66.6% {
    -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
    transform: skewX(-0.78125deg) skewY(-0.78125deg); }
  77.7% {
    -webkit-transform: skewX(0.39063deg) skewY(0.39063deg);
    transform: skewX(0.39063deg) skewY(0.39063deg); }
  88.8% {
    -webkit-transform: skewX(-0.19531deg) skewY(-0.19531deg);
    transform: skewX(-0.19531deg) skewY(-0.19531deg); } }

.jello {
  -webkit-animation-name: jello;
  animation-name: jello;
  -webkit-transform-origin: center;
  -ms-transform-origin: center;
  transform-origin: center; }

@-webkit-keyframes bounceIn {
  from, 20%, 40%, 60%, 80%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3); }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1); }
  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9); }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03); }
  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
    transform: scale3d(0.97, 0.97, 0.97); }
  to {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); } }

@keyframes bounceIn {
  from, 20%, 40%, 60%, 80%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3); }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1); }
  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9); }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03); }
  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
    transform: scale3d(0.97, 0.97, 0.97); }
  to {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1); } }

.bounceIn {
  -webkit-animation-name: bounceIn;
  animation-name: bounceIn; }

@-webkit-keyframes bounceInDown {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
    transform: translate3d(0, -3000px, 0); }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
    transform: translate3d(0, 25px, 0); }
  75% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0); }
  90% {
    -webkit-transform: translate3d(0, 5px, 0);
    transform: translate3d(0, 5px, 0); }
  to {
    -webkit-transform: none;
    transform: none; } }

@keyframes bounceInDown {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
    transform: translate3d(0, -3000px, 0); }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
    transform: translate3d(0, 25px, 0); }
  75% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0); }
  90% {
    -webkit-transform: translate3d(0, 5px, 0);
    transform: translate3d(0, 5px, 0); }
  to {
    -webkit-transform: none;
    transform: none; } }

.bounceInDown {
  -webkit-animation-name: bounceInDown;
  animation-name: bounceInDown; }

@-webkit-keyframes bounceInLeft {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
    transform: translate3d(-3000px, 0, 0); }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0);
    transform: translate3d(25px, 0, 0); }
  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0); }
  90% {
    -webkit-transform: translate3d(5px, 0, 0);
    transform: translate3d(5px, 0, 0); }
  to {
    -webkit-transform: none;
    transform: none; } }

@keyframes bounceInLeft {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
    transform: translate3d(-3000px, 0, 0); }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0);
    transform: translate3d(25px, 0, 0); }
  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0); }
  90% {
    -webkit-transform: translate3d(5px, 0, 0);
    transform: translate3d(5px, 0, 0); }
  to {
    -webkit-transform: none;
    transform: none; } }

.bounceInLeft {
  -webkit-animation-name: bounceInLeft;
  animation-name: bounceInLeft; }

@-webkit-keyframes bounceInRight {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  from {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
    transform: translate3d(3000px, 0, 0); }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0); }
  75% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0); }
  90% {
    -webkit-transform: translate3d(-5px, 0, 0);
    transform: translate3d(-5px, 0, 0); }
  to {
    -webkit-transform: none;
    transform: none; } }

@keyframes bounceInRight {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  from {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
    transform: translate3d(3000px, 0, 0); }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0); }
  75% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0); }
  90% {
    -webkit-transform: translate3d(-5px, 0, 0);
    transform: translate3d(-5px, 0, 0); }
  to {
    -webkit-transform: none;
    transform: none; } }

.bounceInRight {
  -webkit-animation-name: bounceInRight;
  animation-name: bounceInRight; }

@-webkit-keyframes bounceInUp {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
    transform: translate3d(0, 3000px, 0); }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0); }
  75% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0); }
  90% {
    -webkit-transform: translate3d(0, -5px, 0);
    transform: translate3d(0, -5px, 0); }
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); } }

@keyframes bounceInUp {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
    transform: translate3d(0, 3000px, 0); }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0); }
  75% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0); }
  90% {
    -webkit-transform: translate3d(0, -5px, 0);
    transform: translate3d(0, -5px, 0); }
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); } }

.bounceInUp {
  -webkit-animation-name: bounceInUp;
  animation-name: bounceInUp; }

@-webkit-keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9); }
  50%, 55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1); }
  to {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3); } }

@keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9); }
  50%, 55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1); }
  to {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3); } }

.bounceOut {
  -webkit-animation-name: bounceOut;
  animation-name: bounceOut; }

@-webkit-keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0); }
  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0); }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0); } }

@keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0); }
  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0); }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0); } }

.bounceOutDown {
  -webkit-animation-name: bounceOutDown;
  animation-name: bounceOutDown; }

@-webkit-keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0); }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0); } }

@keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0); }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0); } }

.bounceOutLeft {
  -webkit-animation-name: bounceOutLeft;
  animation-name: bounceOutLeft; }

@-webkit-keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0);
    transform: translate3d(-20px, 0, 0); }
  to {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0); } }

@keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0);
    transform: translate3d(-20px, 0, 0); }
  to {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0); } }

.bounceOutRight {
  -webkit-animation-name: bounceOutRight;
  animation-name: bounceOutRight; }

@-webkit-keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0); }
  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0); }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0); } }

@keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0); }
  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0); }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0); } }

.bounceOutUp {
  -webkit-animation-name: bounceOutUp;
  animation-name: bounceOutUp; }

@-webkit-keyframes fadeIn {
  from {
    opacity: 0; }
  to {
    opacity: 1; } }

@keyframes fadeIn {
  from {
    opacity: 0; }
  to {
    opacity: 1; } }

.fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn; }

@-webkit-keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown; }

@-webkit-keyframes fadeInDownBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes fadeInDownBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.fadeInDownBig {
  -webkit-animation-name: fadeInDownBig;
  animation-name: fadeInDownBig; }

@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft; }

@-webkit-keyframes fadeInLeftBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes fadeInLeftBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.fadeInLeftBig {
  -webkit-animation-name: fadeInLeftBig;
  animation-name: fadeInLeftBig; }

@-webkit-keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.fadeInRight {
  -webkit-animation-name: fadeInRight;
  animation-name: fadeInRight; }

@-webkit-keyframes fadeInRightBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes fadeInRightBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.fadeInRightBig {
  -webkit-animation-name: fadeInRightBig;
  animation-name: fadeInRightBig; }

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp; }

@-webkit-keyframes fadeInUpBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes fadeInUpBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.fadeInUpBig {
  -webkit-animation-name: fadeInUpBig;
  animation-name: fadeInUpBig; }

@-webkit-keyframes fadeOut {
  from {
    opacity: 1; }
  to {
    opacity: 0; } }

@keyframes fadeOut {
  from {
    opacity: 1; }
  to {
    opacity: 0; } }

.fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut; }

@-webkit-keyframes fadeOutDown {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); } }

@keyframes fadeOutDown {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); } }

.fadeOutDown {
  -webkit-animation-name: fadeOutDown;
  animation-name: fadeOutDown; }

@-webkit-keyframes fadeOutDownBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0); } }

@keyframes fadeOutDownBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0); } }

.fadeOutDownBig {
  -webkit-animation-name: fadeOutDownBig;
  animation-name: fadeOutDownBig; }

@-webkit-keyframes fadeOutLeft {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0); } }

@keyframes fadeOutLeft {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0); } }

.fadeOutLeft {
  -webkit-animation-name: fadeOutLeft;
  animation-name: fadeOutLeft; }

@-webkit-keyframes fadeOutLeftBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0); } }

@keyframes fadeOutLeftBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0); } }

.fadeOutLeftBig {
  -webkit-animation-name: fadeOutLeftBig;
  animation-name: fadeOutLeftBig; }

@-webkit-keyframes fadeOutRight {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0); } }

@keyframes fadeOutRight {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0); } }

.fadeOutRight {
  -webkit-animation-name: fadeOutRight;
  animation-name: fadeOutRight; }

@-webkit-keyframes fadeOutRightBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0); } }

@keyframes fadeOutRightBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0); } }

.fadeOutRightBig {
  -webkit-animation-name: fadeOutRightBig;
  animation-name: fadeOutRightBig; }

@-webkit-keyframes fadeOutUp {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); } }

@keyframes fadeOutUp {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); } }

.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
  animation-name: fadeOutUp; }

@-webkit-keyframes fadeOutUpBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0); } }

@keyframes fadeOutUpBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0); } }

.fadeOutUpBig {
  -webkit-animation-name: fadeOutUpBig;
  animation-name: fadeOutUpBig; }

@-webkit-keyframes flip {
  from {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out; }
  40% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out; }
  50% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  80% {
    -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; } }

@keyframes flip {
  from {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out; }
  40% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out; }
  50% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  80% {
    -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; } }

.animated.flip {
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
  -webkit-animation-name: flip;
  animation-name: flip; }

@-webkit-keyframes flipInX {
  from {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1; }
  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg); }
  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px); } }

@keyframes flipInX {
  from {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1; }
  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg); }
  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px); } }

.flipInX {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInX;
  animation-name: flipInX; }

@-webkit-keyframes flipInY {
  from {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  60% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1; }
  80% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg); }
  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px); } }

@keyframes flipInY {
  from {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  60% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1; }
  80% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg); }
  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px); } }

.flipInY {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInY;
  animation-name: flipInY; }

@-webkit-keyframes flipOutX {
  from {
    -webkit-transform: perspective(400px);
    transform: perspective(400px); }
  30% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    opacity: 1; }
  to {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    opacity: 0; } }

@keyframes flipOutX {
  from {
    -webkit-transform: perspective(400px);
    transform: perspective(400px); }
  30% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    opacity: 1; }
  to {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    opacity: 0; } }

.flipOutX {
  -webkit-animation-name: flipOutX;
  animation-name: flipOutX;
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important; }

@-webkit-keyframes flipOutY {
  from {
    -webkit-transform: perspective(400px);
    transform: perspective(400px); }
  30% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    opacity: 1; }
  to {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    opacity: 0; } }

@keyframes flipOutY {
  from {
    -webkit-transform: perspective(400px);
    transform: perspective(400px); }
  30% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    opacity: 1; }
  to {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    opacity: 0; } }

.flipOutY {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipOutY;
  animation-name: flipOutY; }

@-webkit-keyframes lightSpeedIn {
  from {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
    transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0; }
  60% {
    -webkit-transform: skewX(20deg);
    transform: skewX(20deg);
    opacity: 1; }
  80% {
    -webkit-transform: skewX(-5deg);
    transform: skewX(-5deg);
    opacity: 1; }
  to {
    -webkit-transform: none;
    transform: none;
    opacity: 1; } }

@keyframes lightSpeedIn {
  from {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
    transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0; }
  60% {
    -webkit-transform: skewX(20deg);
    transform: skewX(20deg);
    opacity: 1; }
  80% {
    -webkit-transform: skewX(-5deg);
    transform: skewX(-5deg);
    opacity: 1; }
  to {
    -webkit-transform: none;
    transform: none;
    opacity: 1; } }

.lightSpeedIn {
  -webkit-animation-name: lightSpeedIn;
  animation-name: lightSpeedIn;
  -webkit-animation-timing-function: ease-out;
  animation-timing-function: ease-out; }

@-webkit-keyframes lightSpeedOut {
  from {
    opacity: 1; }
  to {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
    transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0; } }

@keyframes lightSpeedOut {
  from {
    opacity: 1; }
  to {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
    transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0; } }

.lightSpeedOut {
  -webkit-animation-name: lightSpeedOut;
  animation-name: lightSpeedOut;
  -webkit-animation-timing-function: ease-in;
  animation-timing-function: ease-in; }

@-webkit-keyframes rotateIn {
  from {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
    transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0; }
  to {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: none;
    transform: none;
    opacity: 1; } }

@keyframes rotateIn {
  from {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
    transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0; }
  to {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: none;
    transform: none;
    opacity: 1; } }

.rotateIn {
  -webkit-animation-name: rotateIn;
  animation-name: rotateIn; }

@-webkit-keyframes rotateInDownLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0; }
  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1; } }

@keyframes rotateInDownLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0; }
  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1; } }

.rotateInDownLeft {
  -webkit-animation-name: rotateInDownLeft;
  animation-name: rotateInDownLeft; }

@-webkit-keyframes rotateInDownRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0; }
  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1; } }

@keyframes rotateInDownRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0; }
  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1; } }

.rotateInDownRight {
  -webkit-animation-name: rotateInDownRight;
  animation-name: rotateInDownRight; }

@-webkit-keyframes rotateInUpLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0; }
  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1; } }

@keyframes rotateInUpLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0; }
  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1; } }

.rotateInUpLeft {
  -webkit-animation-name: rotateInUpLeft;
  animation-name: rotateInUpLeft; }

@-webkit-keyframes rotateInUpRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -90deg);
    transform: rotate3d(0, 0, 1, -90deg);
    opacity: 0; }
  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1; } }

@keyframes rotateInUpRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -90deg);
    transform: rotate3d(0, 0, 1, -90deg);
    opacity: 0; }
  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1; } }

.rotateInUpRight {
  -webkit-animation-name: rotateInUpRight;
  animation-name: rotateInUpRight; }

@-webkit-keyframes rotateOut {
  from {
    -webkit-transform-origin: center;
    transform-origin: center;
    opacity: 1; }
  to {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, 200deg);
    transform: rotate3d(0, 0, 1, 200deg);
    opacity: 0; } }

@keyframes rotateOut {
  from {
    -webkit-transform-origin: center;
    transform-origin: center;
    opacity: 1; }
  to {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, 200deg);
    transform: rotate3d(0, 0, 1, 200deg);
    opacity: 0; } }

.rotateOut {
  -webkit-animation-name: rotateOut;
  animation-name: rotateOut; }

@-webkit-keyframes rotateOutDownLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1; }
  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0; } }

@keyframes rotateOutDownLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1; }
  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0; } }

.rotateOutDownLeft {
  -webkit-animation-name: rotateOutDownLeft;
  animation-name: rotateOutDownLeft; }

@-webkit-keyframes rotateOutDownRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1; }
  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0; } }

@keyframes rotateOutDownRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1; }
  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0; } }

.rotateOutDownRight {
  -webkit-animation-name: rotateOutDownRight;
  animation-name: rotateOutDownRight; }

@-webkit-keyframes rotateOutUpLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1; }
  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0; } }

@keyframes rotateOutUpLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1; }
  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0; } }

.rotateOutUpLeft {
  -webkit-animation-name: rotateOutUpLeft;
  animation-name: rotateOutUpLeft; }

@-webkit-keyframes rotateOutUpRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1; }
  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
    transform: rotate3d(0, 0, 1, 90deg);
    opacity: 0; } }

@keyframes rotateOutUpRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1; }
  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
    transform: rotate3d(0, 0, 1, 90deg);
    opacity: 0; } }

.rotateOutUpRight {
  -webkit-animation-name: rotateOutUpRight;
  animation-name: rotateOutUpRight; }

@-webkit-keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  20%, 60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
    transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  40%, 80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
    transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1; }
  to {
    -webkit-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0; } }

@keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  20%, 60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
    transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  40%, 80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
    transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1; }
  to {
    -webkit-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0; } }

.hinge {
  -webkit-animation-name: hinge;
  animation-name: hinge; }

@-webkit-keyframes rollIn {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes rollIn {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.rollIn {
  -webkit-animation-name: rollIn;
  animation-name: rollIn; }

@-webkit-keyframes rollOut {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
    transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg); } }

@keyframes rollOut {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
    transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg); } }

.rollOut {
  -webkit-animation-name: rollOut;
  animation-name: rollOut; }

@-webkit-keyframes zoomIn {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3); }
  50% {
    opacity: 1; } }

@keyframes zoomIn {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3); }
  50% {
    opacity: 1; } }

.zoomIn {
  -webkit-animation-name: zoomIn;
  animation-name: zoomIn; }

@-webkit-keyframes zoomInDown {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

@keyframes zoomInDown {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

.zoomInDown {
  -webkit-animation-name: zoomInDown;
  animation-name: zoomInDown; }

@-webkit-keyframes zoomInLeft {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

@keyframes zoomInLeft {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

.zoomInLeft {
  -webkit-animation-name: zoomInLeft;
  animation-name: zoomInLeft; }

@-webkit-keyframes zoomInRight {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

@keyframes zoomInRight {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

.zoomInRight {
  -webkit-animation-name: zoomInRight;
  animation-name: zoomInRight; }

@-webkit-keyframes zoomInUp {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

@keyframes zoomInUp {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

.zoomInUp {
  -webkit-animation-name: zoomInUp;
  animation-name: zoomInUp; }

@-webkit-keyframes zoomOut {
  from {
    opacity: 1; }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3); }
  to {
    opacity: 0; } }

@keyframes zoomOut {
  from {
    opacity: 1; }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3); }
  to {
    opacity: 0; } }

.zoomOut {
  -webkit-animation-name: zoomOut;
  animation-name: zoomOut; }

@-webkit-keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  to {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

@keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  to {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

.zoomOutDown {
  -webkit-animation-name: zoomOutDown;
  animation-name: zoomOutDown; }

@-webkit-keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0); }
  to {
    opacity: 0;
    -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
    transform: scale(0.1) translate3d(-2000px, 0, 0);
    -webkit-transform-origin: left center;
    transform-origin: left center; } }

@keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0); }
  to {
    opacity: 0;
    -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
    transform: scale(0.1) translate3d(-2000px, 0, 0);
    -webkit-transform-origin: left center;
    transform-origin: left center; } }

.zoomOutLeft {
  -webkit-animation-name: zoomOutLeft;
  animation-name: zoomOutLeft; }

@-webkit-keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0); }
  to {
    opacity: 0;
    -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
    transform: scale(0.1) translate3d(2000px, 0, 0);
    -webkit-transform-origin: right center;
    transform-origin: right center; } }

@keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0); }
  to {
    opacity: 0;
    -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
    transform: scale(0.1) translate3d(2000px, 0, 0);
    -webkit-transform-origin: right center;
    transform-origin: right center; } }

.zoomOutRight {
  -webkit-animation-name: zoomOutRight;
  animation-name: zoomOutRight; }

@-webkit-keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  to {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

@keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  to {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

.zoomOutUp {
  -webkit-animation-name: zoomOutUp;
  animation-name: zoomOutUp; }

@-webkit-keyframes slideInDown {
  from {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
    visibility: visible; }
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); } }

@keyframes slideInDown {
  from {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
    visibility: visible; }
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); } }

.slideInDown {
  -webkit-animation-name: slideInDown;
  animation-name: slideInDown; }

@-webkit-keyframes slideInLeft {
  from {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible; }
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); } }

@keyframes slideInLeft {
  from {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible; }
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); } }

.slideInLeft {
  -webkit-animation-name: slideInLeft;
  animation-name: slideInLeft; }

@-webkit-keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible; }
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); } }

@keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible; }
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); } }

.slideInRight {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight; }

@-webkit-keyframes slideInUp {
  from {
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    visibility: visible; }
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); } }

@keyframes slideInUp {
  from {
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    visibility: visible; }
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); } }

.slideInUp {
  -webkit-animation-name: slideInUp;
  animation-name: slideInUp; }

@-webkit-keyframes slideOutDown {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); } }

@keyframes slideOutDown {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); } }

.slideOutDown {
  -webkit-animation-name: slideOutDown;
  animation-name: slideOutDown; }

@-webkit-keyframes slideOutLeft {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0); } }

@keyframes slideOutLeft {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0); } }

.slideOutLeft {
  -webkit-animation-name: slideOutLeft;
  animation-name: slideOutLeft; }

@-webkit-keyframes slideOutRight {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0); } }

@keyframes slideOutRight {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0); } }

.slideOutRight {
  -webkit-animation-name: slideOutRight;
  animation-name: slideOutRight; }

@-webkit-keyframes slideOutUp {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); } }

@keyframes slideOutUp {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); } }

.slideOutUp {
  -webkit-animation-name: slideOutUp;
  animation-name: slideOutUp; }

/*******************
Preloader
********************/
.preloader {
  width: 100%;
  height: 100%;
  top: 0px;
  position: fixed;
  z-index: 99999;
  background: #fff; }
  .preloader .cssload-speeding-wheel {
    position: absolute;
    top: calc(50% - 3.5px);
    left: calc(50% - 3.5px); }

.loader,
.loader__figure {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%); }

.loader {
  overflow: visible;
  padding-top: 2em;
  height: 0;
  width: 2em; }

.loader__figure {
  height: 0;
  width: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  border: 0 solid #4a5157;
  border-radius: 50%;
  -webkit-animation: loader-figure 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
  -moz-animation: loader-figure 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
  animation: loader-figure 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }

.loader__label {
  float: left;
  margin-left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  margin: 0.5em 0 0 50%;
  font-size: 0.875em;
  letter-spacing: 0.1em;
  line-height: 1.5em;
  color:#4a5157 ;
  white-space: nowrap;
  -webkit-animation: loader-label 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
  -moz-animation: loader-label 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
  animation: loader-label 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }

@-webkit-keyframes loader-figure {
  0% {
    height: 0;
    width: 0;
    background-color: #1976d2; }
  29% {
    background-color: #1976d2; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }

@-moz-keyframes loader-figure {
  0% {
    height: 0;
    width: 0;
    background-color: #1976d2; }
  29% {
    background-color: #1976d2; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }

@keyframes loader-figure {
  0% {
    height: 0;
    width: 0;
    background-color: #1976d2; }
  29% {
    background-color: #1976d2; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }

@-webkit-keyframes loader-label {
  0% {
    opacity: 0.25; }
  30% {
    opacity: 1; }
  100% {
    opacity: 0.25; } }

@-moz-keyframes loader-label {
  0% {
    opacity: 0.25; }
  30% {
    opacity: 1; }
  100% {
    opacity: 0.25; } }

@keyframes loader-label {
  0% {
    opacity: 0.25; }
  30% {
    opacity: 1; }
  100% {
    opacity: 0.25; } }

.btn-circle {
  border-radius: 100%;
  width: 40px;
  height: 40px;
  padding: 10px; }

.btn-circle.btn-sm, .btn-group-sm > .btn-circle.btn {
  width: 35px;
  height: 35px;
  padding: 8px 10px;
  font-size: 14px; }

.btn-circle.btn-lg, .btn-group-lg > .btn-circle.btn {
  width: 50px;
  height: 50px;
  padding: 14px 15px;
  font-size: 18px;
  line-height: 23px; }

.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 14px 15px;
  font-size: 24px; }

.btn-xs {
  padding: .25rem .5rem;
  font-size: 10px; }

.btn-rounded {
  border-radius: 60px;
  padding: 7px 18px; }
  .btn-rounded.btn-lg, .btn-group-lg > .btn-rounded.btn {
    padding: .75rem 1.5rem; }
  .btn-rounded.btn-sm, .btn-group-sm > .btn-rounded.btn {
    padding: .25rem .5rem;
    font-size: 12px; }
  .btn-rounded.btn-xs {
    padding: .25rem .5rem;
    font-size: 10px; }
  .btn-rounded.btn-md {
    padding: 12px 35px;
    font-size: 16px; }

.btn-primary, .btn-warning, .btn-outline-primary:hover, .btn-outline-warning:hover {
  color: #fff; }
  .btn-primary:hover, .btn-warning:hover, .btn-outline-primary:hover:hover, .btn-outline-warning:hover:hover {
    color: #fff; }

.btn-secondary {
  /*border-color: #dee2e6;*/ }

.btn-outline-secondary {
  color: #212529;
  background: #fff;
  border-color: #dee2e6; }
  .btn-outline-secondary:hover {
    border-color: #ced4da; }

.btn-facebook {
  color: #fff;
  background-color: #3b5998; }
  .btn-facebook:hover {
    color: #fff; }

.btn-twitter {
  color: #fff;
  background-color: #55acee; }
  .btn-twitter:hover {
    color: #fff; }

.btn-linkedin {
  color: #fff;
  background-color: #007bb6; }
  .btn-linkedin:hover {
    color: #fff; }

.btn-dribbble {
  color: #fff;
  background-color: #ea4c89; }
  .btn-dribbble:hover {
    color: #fff; }

.btn-googleplus {
  color: #fff;
  background-color: #dd4b39; }
  .btn-googleplus:hover {
    color: #fff; }

.btn-instagram {
  color: #fff;
  background-color: #3f729b; }

.btn-pinterest {
  color: #fff;
  background-color: #cb2027; }

.btn-dropbox {
  color: #fff;
  background-color: #007ee5; }

.btn-flickr {
  color: #fff;
  background-color: #ff0084; }

.btn-tumblr {
  color: #fff;
  background-color: #32506d; }

.btn-skype {
  color: #fff;
  background-color: #00aff0; }

.btn-youtube {
  color: #fff;
  background-color: #bb0000; }

.btn-github {
  color: #fff;
  background-color: #171515; }

.button-group .btn {
  margin-bottom: 5px;
  margin-right: 5px; }

.no-button-group .btn {
  margin-bottom: 5px;
  margin-right: 0px; }

.btn .text-active {
  display: none; }

.btn.active .text-active {
  display: inline-block; }

.btn.active .text {
  display: none; }

* {
  outline: none; }

body {
  margin: 0;
  overflow-x: hidden;
  color: #2f2f2f; }

html {
  position: relative;
  min-height: 100%; }

a {
  color: #ffac00; }

a:hover,
a:focus {
  text-decoration: none; }

a.link {
  color: #212529; }
  a.link:hover, a.link:focus {
    color: #009efb; }

.box {
  border-radius: 0.25rem;
  padding: 10px; }

.no-wrap td,
.no-wrap th {
  white-space: nowrap; }

/*******************
Blockquote
*******************/
html body blockquote {
  border-left: 5px solid #7460ee;
  border: 1px solid #e9ecef;
  padding: 15px; }

.clear {
  clear: both; }

ol li {
  margin: 5px 0; }

/*******************
Padding margin property 
*******************/
html body .m-t-5 {
  margin-top: 5px; }

html body .m-b-5 {
  margin-bottom: 5px; }

html body .m-r-5 {
  margin-right: 5px; }

html body .m-l-5 {
  margin-left: 5px; }

html body .p-t-5 {
  padding-top: 5px; }

html body .p-b-5 {
  padding-bottom: 5px; }

html body .p-r-5 {
  padding-right: 5px; }

html body .p-l-5 {
  padding-left: 5px; }

html body .p-5 {
  padding: 5px; }

html body .m-5 {
  margin: 5px; }

html body .m-t-10 {
  margin-top: 10px; }

html body .m-b-10 {
  margin-bottom: 10px; }

html body .m-r-10 {
  margin-right: 10px; }

html body .m-l-10 {
  margin-left: 10px; }

html body .p-t-10 {
  padding-top: 10px; }

html body .p-b-10 {
  padding-bottom: 10px; }

html body .p-r-10 {
  padding-right: 10px; }

html body .p-l-10 {
  padding-left: 10px; }

html body .p-10 {
  padding: 10px; }

html body .m-10 {
  margin: 10px; }

html body .m-t-15 {
  margin-top: 15px; }

html body .m-b-15 {
  margin-bottom: 15px; }

html body .m-r-15 {
  margin-right: 15px; }

html body .m-l-15 {
  margin-left: 15px; }

html body .p-t-15 {
  padding-top: 15px; }

html body .p-b-15 {
  padding-bottom: 15px; }

html body .p-r-15 {
  padding-right: 15px; }

html body .p-l-15 {
  padding-left: 15px; }

html body .p-15 {
  padding: 15px; }

html body .m-15 {
  margin: 15px; }

html body .m-t-20 {
  margin-top: 20px; }

html body .m-b-20 {
  margin-bottom: 20px; }

html body .m-r-20 {
  margin-right: 20px; }

html body .m-l-20 {
  margin-left: 20px; }

html body .p-t-20 {
  padding-top: 20px; }

html body .p-b-20 {
  padding-bottom: 20px; }

html body .p-r-20 {
  padding-right: 20px; }

html body .p-l-20 {
  padding-left: 20px; }

html body .p-20 {
  padding: 20px; }

html body .m-20 {
  margin: 20px; }

html body .m-t-25 {
  margin-top: 25px; }

html body .m-b-25 {
  margin-bottom: 25px; }

html body .m-r-25 {
  margin-right: 25px; }

html body .m-l-25 {
  margin-left: 25px; }

html body .p-t-25 {
  padding-top: 25px; }

html body .p-b-25 {
  padding-bottom: 25px; }

html body .p-r-25 {
  padding-right: 25px; }

html body .p-l-25 {
  padding-left: 25px; }

html body .p-25 {
  padding: 25px; }

html body .m-25 {
  margin: 25px; }

html body .m-t-30 {
  margin-top: 30px; }

html body .m-b-30 {
  margin-bottom: 30px; }

html body .m-r-30 {
  margin-right: 30px; }

html body .m-l-30 {
  margin-left: 30px; }

html body .p-t-30 {
  padding-top: 30px; }

html body .p-b-30 {
  padding-bottom: 30px; }

html body .p-r-30 {
  padding-right: 30px; }

html body .p-l-30 {
  padding-left: 30px; }

html body .p-30 {
  padding: 30px; }

html body .m-30 {
  margin: 30px; }

html body .m-t-40 {
  margin-top: 40px; }

html body .m-b-40 {
  margin-bottom: 40px; }

html body .m-r-40 {
  margin-right: 40px; }

html body .m-l-40 {
  margin-left: 40px; }

html body .p-t-40 {
  padding-top: 40px; }

html body .p-b-40 {
  padding-bottom: 40px; }

html body .p-r-40 {
  padding-right: 40px; }

html body .p-l-40 {
  padding-left: 40px; }

html body .p-40 {
  padding: 40px; }

html body .m-40 {
  margin: 40px; }

/** * Zero */
html body .m-0-0 {
  margin: 0; }

html body .m-t-0 {
  margin-top: 0; }

html body .m-r-0 {
  margin-right: 0; }

html body .m-b-0 {
  margin-bottom: 0; }

html body .m-l-0 {
  margin-left: 0; }

html body .p-0-0 {
  padding: 0; }

html body .p-t-0 {
  padding-top: 0; }

html body .p-r-0 {
  padding-right: 0; }

html body .p-b-0 {
  padding-bottom: 0; }

html body .p-l-0 {
  padding-left: 0; }

/*******************
Thumb size
*******************/
.thumb-sm {
  height: 32px;
  width: 32px; }

.thumb-md {
  height: 48px;
  width: 48px; }

.thumb-lg {
  height: 88px;
  width: 88px; }

.hide {
  display: none; }

.img-circle {
  border-radius: 100%; }

.img-responsive {
  max-width: 100%;
  height: auto; }

.radius {
  border-radius: 0.25rem; }

/*******************
Opacity
*******************/
.op-5 {
  opacity: 0.5; }

.op-3 {
  opacity: 0.3; }

/*******************
font weight
*******************/
html body .font-bold {
  font-weight: 700; }

html body .font-normal {
  font-weight: 400; }

html body .font-light {
  font-weight: 300; }

html body .font-medium {
  font-weight: 500; }

html body .font-16 {
  font-size: 16px; }

html body .font-12 {
  font-size: 12px; }

html body .font-14 {
  font-size: 14px; }

html body .font-10 {
  font-size: 10px; }

html body .font-18 {
  font-size: 18px; }

html body .font-20 {
  font-size: 20px; }

html body .display-5 {
  font-size: 3rem; }

html body .display-6 {
  font-size: 2.5rem; }

/*******************
Background colors
*******************/
html body .bg-megna {
  background-color: #01c0c8; }

html body .bg-theme {
  background-color: #009efb; }

html body .bg-inverse {
  background-color: #212529; }

html body .bg-purple {
  background-color: #7460ee; }

html body .bg-light {
  background-color: #e9ecef; }

html body .bg-white {
  background-color: #fff; }

/*******************
Rounds
*******************/
.round {
  line-height: 48px;
  color: #fff;
  width: 50px;
  height: 50px;
  display: inline-block;
  font-weight: 400;
  text-align: center;
  border-radius: 100%;
  background: #009efb;
  line-height: 52px; }
  .round img {
    border-radius: 100%; }
  .round.round-info {
    background: #009efb; }
  .round.round-warning {
    background: #ffbc34; }
  .round.round-danger {
    background: #f62d51; }
  .round.round-success {
    background: #36bea6; }
  .round.round-primary {
    background: #7460ee; }

.round-lg {
  line-height: 65px;
  width: 60px;
  height: 60px;
  font-size: 30px; }

/*******************
Labels
*******************/
.label-rounded {
  border-radius: 60px; }

/*******************
 Badge
******************/
.badge {
  font-weight: 400;
  line-height: normal; }
  .badge.badge-pill {
    padding: 0.20em 0.6em; }

.badge-xs {
  font-size: 9px; }

.badge-xs,
.badge-sm {
  -webkit-transform: translate(0, -2px);
  -ms-transform: translate(0, -2px);
  -o-transform: translate(0, -2px);
  transform: translate(0, -2px); }

/*******************
List-style-none
******************/
ul.list-style-none {
  margin: 0px;
  padding: 0px; }
  ul.list-style-none li {
    list-style: none; }
    ul.list-style-none li a {
      color: #212529;
      padding: 8px 0px;
      display: block;
      text-decoration: none; }
      ul.list-style-none li a:hover {
        color: #009efb; }

/*******************
Card
******************/
.card {
  margin-bottom: 20px; }
  .card .card-subtitle {
    font-weight: 300;
    margin-bottom: 15px;
    color: #adb5bd; }
  .card .card-title {
    position: relative;
    font-weight: 500; }
  .card .card-actions {
    float: right; }
    .card .card-actions a {
      padding: 0 5px;
      cursor: pointer; }

.card-alt {
  margin: 0 -20px;
  background: #e4e9ef; }

.card-group {
  margin-bottom: 20px; }
  .card-group .card {
    border-right: 1px solid #e9ecef; }

.card-fullscreen {
  position: fixed;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  overflow: auto; }

.oh {
  overflow: hidden; }

/*******************
Labels
*******************/
.label {
  padding: 3px 10px;
  line-height: 13px;
  color: #fff;
  font-weight: 400;
  border-radius: 0.25rem;
  font-size: 75%; }

.label-rounded {
  border-radius: 60px; }

.label-custom {
  background-color: #01c0c8; }

.label-success {
  background-color: #36bea6; }

.label-info {
  background-color: #009efb; }

.label-warning {
  background-color: #ffbc34; }

.label-danger {
  background-color: #f62d51; }

.label-megna {
  background-color: #01c0c8; }

.label-primary {
  background-color: #7460ee; }

.label-purple {
  background-color: #7460ee; }

.label-red {
  background-color: #f62d51; }

.label-inverse {
  background-color: #343a40; }

.label-default {
  background-color: #f8f9fa; }

.label-secondary {
background-color: #aa66cc; }

/*******************
Display Classes
*******************/
@media (max-width: 575px) {
  html body .hidden-xs-down {
    display: none; } }

@media (min-width: 769px) {
  html body .hidden-sm-up {
    display: none; } }

@media (max-width: 767px) {
  html body .hidden-sm-down {
    display: none; } }

@media (min-width: 768px) {
  html body .hidden-md-up {
    display: none; } }

@media (max-width: 991px) {
  html body .hidden-md-down {
    display: none; } }

@media (min-width: 992px) {
  html body .hidden-lg-up {
    display: none; } }

@media (max-width: 1199px) {
  html body .hidden-lg-down {
    display: none; } }

@media (min-width: 1200px) {
  html body .hidden-xl-up {
    display: none; } }

/*******************
 Topbar
*******************/
.topbar {
  position: relative;
  z-index: 50;
  -webkit-transition: 0.2s ease-in;
  -o-transition: 0.2s ease-in;
  transition: 0.2s ease-in;
  -webkit-box-shadow: 0px 1px 15px 1px rgba(69, 65, 78, 0.1);
  box-shadow: 0px 1px 15px 1px rgba(69, 65, 78, 0.1); }
  .topbar .navbar-collapse {
    padding: 0px; }
  .topbar .top-navbar {
    min-height: 50px;
    padding: 0px; }
    .topbar .top-navbar .dropdown-toggle::after {
      display: none; }
    .topbar .top-navbar .navbar-header {
      padding-right: 15px;
      line-height: 65px;
      padding-left: 15px;
      min-width: 70px;
      border-right: 1px solid rgba(0, 0, 0, 0.1); }
      .topbar .top-navbar .navbar-header .navbar-brand {
        margin-right: 0px;
        padding-bottom: 0px;
        padding-top: 0px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center; }
        .topbar .top-navbar .navbar-header .navbar-brand .light-logo {
          display: none; }
    .topbar .top-navbar .navbar-nav > .nav-item.show {
      background: #495056!important; }
    .topbar .top-navbar .navbar-nav > .nav-item > .nav-link {
      padding-left: 15px;
      padding-right: 15px;
      font-size: 18px;
      line-height: 50px; }
    .topbar .top-navbar .navbar-nav > .nav-item > span {
      line-height: 45px;
      font-size: 24px;
      font-weight: 500;
      color: #fff;
      padding: 0 10px; }
  .topbar .dropdown-menu {
    box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
    -webkit-box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
    -moz-box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
    border-color: #e9ecef; }
    .topbar .dropdown-menu .dropdown-item {
      padding: 7px 1.5rem; }
  .topbar .user-dd {
    width: 280px;
    padding-bottom: 10px; }

.search-box .app-search {
  position: absolute;
  margin: 0px;
  display: block;
  z-index: 110;
  width: 100%;
  top: -1px;
  -webkit-box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.2);
  display: none;
  left: 0px; }
  .search-box .app-search input {
    width: 100.5%;
    padding: 20px 40px 20px 20px;
    border-radius: 0px;
    font-size: 17px;
    -webkit-transition: 0.5s ease-in;
    -o-transition: 0.5s ease-in;
    transition: 0.5s ease-in; }
    .search-box .app-search input:focus {
      border-color: #fff; }
  .search-box .app-search .srh-btn {
    position: absolute;
    top: 23px;
    cursor: pointer;
    background: #fff;
    width: 15px;
    height: 15px;
    right: 20px;
    font-size: 14px; }

/*******************
Main sidebar
******************/
.left-sidebar {
  position: absolute;
  width: 260px;
  height: 100%;
  top: 0px;
  left: -200px;
  z-index: 50;
  padding-top: 0px;
  background: #fff;
  -webkit-box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
  box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
  -webkit-transition: 0.3s ease-in;
  -o-transition: 0.3s ease-in;
  transition: 0.3s ease-in; }
  .left-sidebar .nav-text-box {
    padding: 13px 25px 13px 15px;
    border-bottom: 1px solid #e9ecef; }

/*******************
sidebar navigation
******************/
.scroll-sidebar {
  height: calc(100% - 80px);
  position: relative;
  /*&.ps .ps__scrollbar-y-rail {
        left: 2px;
        right: auto;
        background: none;
        width: 6px;
        
    }*/ }

.collapse.in {
  display: block; }

.sidebar-nav {
  padding: 15px 0 0 0px; }
  .sidebar-nav ul {
    margin: 0px;
    padding: 0px; }
    .sidebar-nav ul li {
      list-style: none; }
      .sidebar-nav ul li a {
        color: #54667a;
        padding: 10px 15px 10px 15px;
        display: block;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center; }
        .sidebar-nav ul li a i {
          float: right;
          font-style: normal;
          width: 32px;
          text-align: center; }
        .sidebar-nav ul li a.active, .sidebar-nav ul li a:hover {
          color: #009efb; }
          .sidebar-nav ul li a.active i, .sidebar-nav ul li a:hover i {
            color: #009efb; }
        .sidebar-nav ul li a.active {
          color: #343a40; }
      .sidebar-nav ul li ul {
        padding: 10px 0px 10px 0px;
        background: rgba(0, 0, 0, 0.02); }
        .sidebar-nav ul li ul li a {
          padding: 7px 15px 7px 20px; }
        .sidebar-nav ul li ul ul {
          padding-left: 15px; }
      .sidebar-nav ul li.nav-small-cap {
        font-size: 12px;
        margin-bottom: 0px;
        margin: 20px 0px 20px 0px;
        color: #adb5bd;
        height: 1px;
        background: rgba(0, 0, 0, 0.1);
        font-weight: 500; }
      .sidebar-nav ul li.nav-devider {
        height: 1px;
        background: #e9ecef;
        display: block;
        margin: 15px 0; }
  .sidebar-nav > ul > li > a i {
    font-size: 16px;
    margin-top: 3px;
    vertical-align: middle;
    color: #a6b7bf; }
  .sidebar-nav > ul > li > a .badge {
    margin-right: 7px;
    vertical-align: top; }
  .sidebar-nav > ul > li {
    margin-bottom: 8px;
    margin-top: 8px; }
    .sidebar-nav > ul > li.selected > a {
      color: #009efb; }
      .sidebar-nav > ul > li.selected > a i {
        color: #009efb; }
  .sidebar-nav .waves-effect {
    transition: none;
    -webkit-transition: none;
    -o-transition: none; }

.sidebar-nav .has-arrow {
  position: relative; }
  .sidebar-nav .has-arrow::after {
    position: absolute;
    content: '';
    width: 7px;
    height: 7px;
    border-width: 1px 0 0 1px;
    border-style: solid;
    border-color: #54667a;
    margin-left: 10px;
    -webkit-transform: rotate(135deg) translate(0, -50%);
    -ms-transform: rotate(135deg) translate(0, -50%);
    -o-transform: rotate(135deg) translate(0, -50%);
    transform: rotate(135deg) translate(0, -50%);
    -webkit-transform-origin: top;
    -ms-transform-origin: top;
    -o-transform-origin: top;
    transform-origin: top;
    top: 21px;
    -webkit-transition: all .3s ease-out;
    -o-transition: all .3s ease-out;
    transition: all .3s ease-out; }

/*.sidebar-nav .active > .has-arrow::after,*/
.sidebar-nav li.selected > .has-arrow::after,
.sidebar-nav li > .has-arrow.active::after,
.sidebar-nav .has-arrow[aria-expanded="true"]::after {
  -webkit-transform: rotate(-135deg) translate(0, -50%);
  -ms-transform: rotate(-135deg) translate(0, -50%);
  -o-transform: rotate(-135deg) translate(0, -50%);
  top: 42%;
  width: 7px;
  transform: rotate(-135deg) translate(0, -50%); }

/* perfect-scrollbar v0.7.1 */
.ps {
  -ms-touch-action: auto;
  touch-action: auto;
  overflow: hidden !important;
  -ms-overflow-style: none; }

@supports (-ms-overflow-style: none) {
  .ps {
    overflow: auto !important; } }

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .ps {
    overflow: auto !important; } }

.ps.ps--active-x > .ps__scrollbar-x-rail,
.ps.ps--active-y > .ps__scrollbar-y-rail {
  display: block;
  background-color: transparent; }

.ps.ps--in-scrolling.ps--x > .ps__scrollbar-x-rail {
  background-color: #eee;
  opacity: 0.9; }

.ps.ps--in-scrolling.ps--y > .ps__scrollbar-y-rail > .ps__scrollbar-y {
  background-color: transparent;
  width: 8px; }

.ps > .ps__scrollbar-x-rail {
  display: none;
  position: absolute;
  /* please don't change 'position' */
  opacity: 0;
  bottom: 0px;
  /* there must be 'bottom' for ps__scrollbar-x-rail */
  height: 6px; }

.ps > .ps__scrollbar-x-rail > .ps__scrollbar-x {
  position: absolute;
  /* please don't change 'position' */
  background-color: rgba(255, 255, 255, 0.2);
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  bottom: 2px;
  /* there must be 'bottom' for ps__scrollbar-x */
  height: 6px; }

.ps > .ps__scrollbar-x-rail:hover > .ps__scrollbar-x,
.ps > .ps__scrollbar-x-rail:active > .ps__scrollbar-x {
  height: 6px; }

.ps > .ps__scrollbar-y-rail {
  display: none;
  position: absolute;
  /* please don't change 'position' */
  opacity: 0;
  right: 0;
  /* there must be 'right' for ps__scrollbar-y-rail */
  width: 6px; }

.ps > .ps__scrollbar-y-rail > .ps__scrollbar-y {
  position: absolute;
  /* please don't change 'position' */
  background-color: rgba(0, 0, 0, 0.2);
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  right: 2px;
  /* there must be 'right' for ps__scrollbar-y */
  width: 6px; }

.ps > .ps__scrollbar-y-rail:hover > .ps__scrollbar-y,
.ps > .ps__scrollbar-y-rail:active > .ps__scrollbar-y {
  width: 6px; }

.ps:hover.ps--in-scrolling.ps--x > .ps__scrollbar-x-rail {
  background-color: rgba(0, 0, 0, 0.2);
  opacity: 0.9; }

.ps:hover.ps--in-scrolling.ps--x > .ps__scrollbar-x-rail > .ps__scrollbar-x {
  background-color: rgba(0, 0, 0, 0.2);
  height: 6px; }

.ps:hover.ps--in-scrolling.ps--y > .ps__scrollbar-y-rail > .ps__scrollbar-y {
  background-color: rgba(0, 0, 0, 0.2);
  width: 6px; }

.ps:hover > .ps__scrollbar-x-rail,
.ps:hover > .ps__scrollbar-y-rail {
  opacity: 0.6; }

.ps:hover > .ps__scrollbar-x-rail:hover > .ps__scrollbar-x {
  background-color: rgba(0, 0, 0, 0.2); }

.ps:hover > .ps__scrollbar-y-rail:hover > .ps__scrollbar-y {
  background-color: rgba(0, 0, 0, 0.2); }

#slimtest3.ps .ps__scrollbar-y-rail {
  left: 3px;
  right: auto; }

#slimtest4.ps > .ps__scrollbar-y-rail > .ps__scrollbar-y {
  background-color: #01c0c8; }

#slimtest4.ps:hover.ps--in-scrolling.ps--y > .ps__scrollbar-y-rail > .ps__scrollbar-y {
  background-color: #01c0c8; }

#slimtest4.ps:hover > .ps__scrollbar-y-rail:hover > .ps__scrollbar-y {
  background-color: #01c0c8; }

/*******************
Custom-select
******************/
/*******************
textarea
******************/
/*textarea {
  resize: none; }
*/
/*******************
Form-control
******************/
.form-control {
  color: #212529;
  min-height: 38px;
  display: initial; }

.form-control-sm, .input-group-sm > .form-control,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  min-height: 20px; }

.form-control:disabled,
.form-control[readonly] {
  opacity: 0.7; }

.custom-control-input:focus ~ .custom-control-indicator {
  -webkit-box-shadow: none;
  box-shadow: none; }

.custom-control-input:checked ~ .custom-control-indicator {
  background-color: #36bea6; }

form label {
  font-weight: 400; }

/*.form-group {
  margin-bottom: 25px; }*/

.form-horizontal label {
  margin-bottom: 0px; }

.form-control-static {
  padding-top: 0px; }

.custom-control-label::before, .custom-control-label::after {
  top: 0.15rem; }

.form-bordered .form-group {
  border-bottom: 1px solid #e9ecef;
  padding-bottom: 20px; }

/*******************
Form Dropzone
******************/
.dropzone {
  border: 1px dashed #e9ecef; }
  .dropzone .dz-message {
    padding: 5% 0;
    margin: 0px; }

/*******************
Form Pickers
******************/
.asColorPicker-dropdown {
  max-width: 260px; }

.asColorPicker-trigger {
  position: absolute;
  top: 0;
  right: -35px;
  height: 38px;
  width: 37px;
  border: 0; }

.asColorPicker-clear {
  display: none;
  position: absolute;
  top: 5px;
  right: 10px;
  text-decoration: none; }

table th {
  font-weight: 400; }

.daterangepicker td.active,
.daterangepicker td.active:hover {
  background-color: #009efb; }

.datepicker table tr td.today,
.datepicker table tr td.today.disabled,
.datepicker table tr td.today.disabled:hover,
.datepicker table tr td.today:hover {
  background: #009efb;
  color: #fff; }

.datepicker td,
.datepicker th {
  padding: 5px 10px; }

/*******************
Form summernote
******************/
.note-popover,
.note-icon-caret {
  display: none; }

.note-editor.note-frame {
  border: 1px solid #e9ecef; }
  .note-editor.note-frame .panel-heading {
    padding: 6px 10px 10px;
    border-bottom: 1px solid #e9ecef; }

.label {
  display: inline-block; }

/*============================================================== 
Form addons page
============================================================== */
/*Bootstrap select*/
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
  width: 100%; }

.bootstrap-select .dropdown-menu li a {
  display: block;
  padding: 7px 20px;
  clear: both;
  font-weight: 400;
  line-height: 1.42857143;
  color: #212529;
  white-space: nowrap; }
  .bootstrap-select .dropdown-menu li a:hover, .bootstrap-select .dropdown-menu li a:focus {
    color: #009efb;
    background: #f8f9fa; }

.bootstrap-select .show > .dropdown-menu {
  display: block; }

.bootstrap-touchspin .input-group-btn-vertical > .btn {
  padding: 9px 10px; }

.select2-container--default .select2-selection--single {
  border-color: #e9ecef;
  height: 38px; }
  .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 38px; }
  .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 33px; }

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
  float: right;
  color: #fff;
  margin-right: 0px;
  margin-left: 4px; }

.select2-container--default .select2-selection--multiple .select2-selection__choice {
  background: #009efb;
  color: #fff;
  border-color: #009efb; }

.input-form .btn {
  padding: 8px 12px; }

/*============================================================== 
Form Material page
 ============================================================== */
/*Material inputs*/
.form-material .form-group {
  overflow: hidden; }

.form-material .form-control {
  background-color: transparent;
  background-position: center bottom, center calc(100% - 1px);
  background-repeat: no-repeat;
  background-size: 0 2px, 100% 1px;
  padding: 0;
  -webkit-transition: background 0s ease-out 0s;
  -o-transition: background 0s ease-out 0s;
  transition: background 0s ease-out 0s; }

.form-material .form-control,
.form-material .form-control.focus,
.form-material .form-control:focus {
  background-image: -webkit-gradient(linear, left top, left bottom, from(#009efb), to(#009efb)), -webkit-gradient(linear, left top, left bottom, from(#e9ecef), to(#e9ecef));
  background-image: -webkit-linear-gradient(#009efb, #009efb), -webkit-linear-gradient(#e9ecef, #e9ecef);
  background-image: -o-linear-gradient(#009efb, #009efb), -o-linear-gradient(#e9ecef, #e9ecef);
  background-image: linear-gradient(#009efb, #009efb), linear-gradient(#e9ecef, #e9ecef);
  border: 0 none;
  border-radius: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
  float: none; }

.form-material .form-control.focus,
.form-material .form-control:focus {
  background-size: 100% 2px, 100% 1px;
  outline: 0 none;
  -webkit-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s; }

.form-control-line .form-group {
  overflow: hidden; }

.form-control-line .form-control {
  border: 0px;
  border-radius: 0px;
  padding-left: 0px;
  border-bottom: 1px solid #e9ecef; }
  .form-control-line .form-control:focus {
    border-bottom: 1px solid #009efb; }

/*******************
Form validation error 
******************/
.error .help-block {
  color: #f62d51; }

/*******************
File Upload 
******************/
.fileupload {
  overflow: hidden;
  position: relative; }
  .fileupload input.upload {
    cursor: pointer;
    filter: alpha(opacity=0);
    font-size: 20px;
    margin: 0;
    opacity: 0;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0; }

.scale-up {
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  display: inline-block;
  -webkit-transform-origin: right 0px;
  -ms-transform-origin: right 0px;
  transform-origin: right 0px; }

.scale-up-left {
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  display: inline-block;
  -webkit-transform-origin: left 0px;
  -ms-transform-origin: left 0px;
  transform-origin: left 0px; }

.show > .scale-up {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  -webkit-transform-origin: right 0px;
  -ms-transform-origin: right 0px;
  transform-origin: right 0px; }

.show > .scale-up-left {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  -webkit-transform-origin: left 0px;
  -ms-transform-origin: left 0px;
  transform-origin: left 0px; }

/*Radio button*/
@-webkit-keyframes ripple {
  0% {
    -webkit-box-shadow: 0px 0px 0px 1px transparent;
    box-shadow: 0px 0px 0px 1px transparent; }
  50% {
    -webkit-box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1); }
  100% {
    -webkit-box-shadow: 0px 0px 0px 15px transparent;
    box-shadow: 0px 0px 0px 15px transparent; } }
@keyframes ripple {
  0% {
    -webkit-box-shadow: 0px 0px 0px 1px transparent;
    box-shadow: 0px 0px 0px 1px transparent; }
  50% {
    -webkit-box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1); }
  100% {
    -webkit-box-shadow: 0px 0px 0px 15px transparent;
    box-shadow: 0px 0px 0px 15px transparent; } }

/*Floating label*/
/*Bootstrap Select*/
.bootstrap-select.btn-group .dropdown-menu {
  -webkit-box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
  box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08); }

/*Form Validation*/
.help-block ul {
  padding: 0px;
  margin: 0px; }
  .help-block ul li {
    list-style: none; }

.error .form-control {
  border-color: #f62d51; }

.validate .form-control {
  border-color: #36bea6; }

/*Form Input States*/
.form-control-success,
.form-control-warning,
.form-control-danger {
  padding-right: 2.25rem;
  background-repeat: no-repeat;
  background-position: center right 0.5625rem;
  -webkit-background-size: 1.125rem 1.125rem;
  background-size: 1.125rem 1.125rem; }

.has-success .form-control-feedback,
.has-success .form-control-label,
.has-success .col-form-label,
.has-success .form-check-label,
.has-success .custom-control {
  color: #36bea6; }

.has-success .form-control {
  border-color: #36bea6; }

.has-success .input-group-addon {
  color: #36bea6;
  border-color: #36bea6; }

.has-success .form-control-success {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%235cb85c' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E"); }

.has-warning .form-control-feedback,
.has-warning .form-control-label,
.has-warning .col-form-label,
.has-warning .form-check-label,
.has-warning .custom-control {
  color: #ffbc34; }

.has-warning .form-control {
  border-color: #ffbc34; }

.has-warning .input-group-addon {
  color: #ffbc34;
  border-color: #ffbc34; }

.has-warning .form-control-warning {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23f0ad4e' d='M4.4 5.324h-.8v-2.46h.8zm0 1.42h-.8V5.89h.8zM3.76.63L.04 7.075c-.115.2.016.425.26.426h7.397c.242 0 .372-.226.258-.426C6.726 4.924 5.47 2.79 4.253.63c-.113-.174-.39-.174-.494 0z'/%3E%3C/svg%3E"); }

.has-danger .form-control-feedback,
.has-danger .form-control-label,
.has-danger .col-form-label,
.has-danger .form-check-label,
.has-danger .custom-control {
  color: #f62d51; }

.has-danger .form-control {
  border-color: #f62d51; }

.has-danger .input-group-addon {
  color: #f62d51;
  border-color: #f62d51; }

.has-danger .form-control-danger {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23d9534f' viewBox='-2 -2 7 7'%3E%3Cpath stroke='%23d9534f' d='M0 0l3 3m0-3L0 3'/%3E%3Ccircle r='.5'/%3E%3Ccircle cx='3' r='.5'/%3E%3Ccircle cy='3' r='.5'/%3E%3Ccircle cx='3' cy='3' r='.5'/%3E%3C/svg%3E"); }

/*
Template Name: Admin Template
Author: Wrappixel

File: scss
*/
/*Theme Colors*/
/**
 * Table Of Content
 *
 *  1. Color system
 *  2. Options
 *  3. Body
 *  4. Typography
 *  5. Breadcrumbs
 *  6. Cards
 *  7. Dropdowns
 *  8. Buttons
 *  9. Typography
 *  10. Progress bars
 *  11. Tables
 *  12. Forms
 *  14. Component
 */
/*******************
Table Cell
*******************/
.table-box {
  display: table;
  width: 100%; }

.cell {
  display: table-cell;
  vertical-align: middle; }

.table thead th,
.table th {
  font-weight: 500; }

.nowrap {
  white-space: nowrap; }

.lite-padding td {
  padding: 5px; }

.v-middle td,
.v-middle th {
  vertical-align: middle; }

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar; }

.table-striped tbody tr:nth-of-type(odd) {
  background: #f8f9fa; }

/*******************
Other comon scss for all pages
*******************/
.calendar-events {
  padding: 8px 10px;
  border: 1px solid #fff;
  cursor: move; }
  .calendar-events:hover {
    border: 1px dashed #e9ecef; }
  .calendar-events i {
    margin-right: 8px; }

.profile-tab li a.nav-link,
.customtab li a.nav-link {
  border: 0px;
  padding: 15px 20px;
  color: #212529; }
  .profile-tab li a.nav-link.active,
  .customtab li a.nav-link.active {
    border-bottom: 2px solid #009efb;
    color: #009efb; }
  .profile-tab li a.nav-link:hover,
  .customtab li a.nav-link:hover {
    color: #009efb; }

html body .jqstooltip,
html body .flotTip {
  width: auto !important;
  height: auto !important;
  background: #343a40;
  color: #fff;
  padding: 5px 10px; }

body .jqstooltip {
  border-color: transparent;
  border-radius: 60px; }

/*******************
Notification page Jquery toaster
******************/
.jq-icon-info {
  background-color: #01c0c8;
  color: #fff; }

.jq-icon-success {
  background-color: #36bea6;
  color: #fff; }

.jq-icon-error {
  background-color: #f62d51;
  color: #fff; }

.jq-icon-warning {
  background-color: #ffbc34;
  color: #fff; }

/*******************
c3 chart global
******************/
.c3 text {
  fill-opacity: 0.5; }

.no-shrink {
  -ms-flex-negative: 0;
  flex-shrink: 0; }

.up-img {
  background-size: cover;
  background-position: center center;
  min-height: 340px; }

.badge.badge-pill {
  padding: 0.2em 1em; }

/*******************
list-inline
******************/
ul.list-inline li {
  display: inline-block;
  margin: 0 5px; }

/*******************
icons path
*******************/
@font-face {
  font-family: 'icomoon';
  src: url("fonts/icomoon.ttf?-rdmvgc") format("truetype"); }

@font-face {
  font-family: 'simple-line-icons';
  src: url("fonts/Simple-Line-Icons.ttf?-i3a2kk") format("truetype"); }

@font-face {
  font-family: 'themify';
  src: url("fonts/themify.ttf") format("truetype"); }

@font-face {
  font-family: 'FontAwesome';
  src: url("fonts/fontawesome-webfont.ttf?v=4.7.0") format("truetype"); }

@font-face {
  font-family: 'Material Design Icons';
  src: url("fonts/materialdesignicons-webfont.ttf") format("truetype"); }

/*============================================================== 
 For all pages 
 ============================================================== */
#main-wrapper {
  width: 100%;
  overflow: hidden; }

.page-wrapper {
  background: #edf1f5;
  position: relative;
  -webkit-transition: 0.2s ease-in;
  -o-transition: 0.2s ease-in;
  transition: 0.2s ease-in; }

.container-fluid {
  padding: 0px 20px 20px 20px; }

/*******************
 Breadcrumb and page title
*******************/
.page-titles {
  padding: 14px 10px;
  /*margin: 15px -20px 15px -20px; */
}
  .page-titles h4 {
    margin-bottom: 0px;
    margin-top: 0px; }
  .page-titles .breadcrumb {
    padding: 0px;
    margin: 0px;
    background: transparent;
    font-size: 12px; }
    .page-titles .breadcrumb li a {
      color: #212529; }
    .page-titles .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
      content: "\e649";
      font-family: themify;
      color: #ced4da;
      font-size: 11px; }
    .page-titles .breadcrumb .breadcrumb-item.active {
      color: #009efb;
      font-weight: 500; }

.dropdown-menu {
  padding: 0px;
  border: 0px;
  -webkit-box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.1);
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.1); }
  .dropdown-menu .with-arrow {
    position: absolute;
    height: 10px;
    overflow: hidden;
    width: 40px;
    top: -10px; }
    .dropdown-menu .with-arrow > span {
      transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      -webkit-transform: rotate(45deg);
      -o-transform: rotate(45deg);
      -moz-transform: rotate(45deg);
      background-color: #fff;
      width: 15px;
      height: 15px;
      top: 3px;
      left: 15px;
      position: absolute;
      content: "";
      -moz-border-radius: 6px 0 0 0;
      border-radius: 6px 0 0 0;
      /*box-shadow:-3px -3px 8px rgba(0, 0, 0, 0.1);    */ }
  .dropdown-menu.dropdown-menu-right .with-arrow {
    right: 0px; }
    .dropdown-menu.dropdown-menu-right .with-arrow > span {
      right: 20px;
      left: auto; }



.dropdown-menu {
padding: 0px;
border: 0px;
-webkit-box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.1);
box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.1); }
.dropdown-menu .with-arrow {
position: absolute;
height: 10px;
overflow: hidden;
width: 40px;
top: -10px; }
.dropdown-menu .with-arrow > span {
transform: rotate(45deg);
-ms-transform: rotate(45deg);
-webkit-transform: rotate(45deg);
-o-transform: rotate(45deg);
-moz-transform: rotate(45deg);
background-color: #fff;
width: 15px;
height: 15px;
top: 3px;
left: 15px;
position: absolute;
content: "";
-moz-border-radius: 6px 0 0 0;
border-radius: 6px 0 0 0;
/*box-shadow:-3px -3px 8px rgba(0, 0, 0, 0.1);    */ }
.dropdown-menu.dropdown-menu-right .with-arrow {
right: 0px; }
.dropdown-menu.dropdown-menu-right .with-arrow > span {
right: 20px;
left: auto; }

/*******************
 Footer
*******************/
.footer {
  bottom: 0;
  color: #212529;
  left: 0px;
  padding: 17px 15px;
  right: 0;
  border-top: 1px solid #e9ecef;
  background: #fff; }

/*******************
Wave Effects
*******************/
.waves-effect {
  position: relative;
  cursor: pointer;
  display: inline-block;
  overflow: hidden;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: transparent;
  vertical-align: middle;
  z-index: 1;
  will-change: opacity, transform;
  -webkit-transition: all 0.1s ease-out;
  -moz-transition: all 0.1s ease-out;
  -o-transition: all 0.1s ease-out;
  -ms-transition: all 0.1s ease-out;
  transition: all 0.1s ease-out; }
  .waves-effect .waves-ripple {
    position: absolute;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    margin-top: -10px;
    margin-left: -10px;
    opacity: 0;
    background: rgba(0, 0, 0, 0.2);
    -webkit-transition: all 0.7s ease-out;
    -moz-transition: all 0.7s ease-out;
    -o-transition: all 0.7s ease-out;
    -ms-transition: all 0.7s ease-out;
    transition: all 0.7s ease-out;
    -webkit-transition-property: -webkit-transform, opacity;
    -moz-transition-property: -moz-transform, opacity;
    -o-transition-property: -o-transform, opacity;
    -webkit-transition-property: opacity, -webkit-transform;
    transition-property: opacity, -webkit-transform;
    -o-transition-property: transform, opacity;
    transition-property: transform, opacity;
    transition-property: transform, opacity, -webkit-transform;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
    pointer-events: none; }

.waves-effect.waves-light .waves-ripple {
  background-color: rgba(255, 255, 255, 0.45); }

.waves-effect.waves-red .waves-ripple {
  background-color: rgba(244, 67, 54, 0.7); }

.waves-effect.waves-yellow .waves-ripple {
  background-color: rgba(255, 235, 59, 0.7); }

.waves-effect.waves-orange .waves-ripple {
  background-color: rgba(255, 152, 0, 0.7); }

.waves-effect.waves-purple .waves-ripple {
  background-color: rgba(156, 39, 176, 0.7); }

.waves-effect.waves-green .waves-ripple {
  background-color: rgba(76, 175, 80, 0.7); }

.waves-effect.waves-teal .waves-ripple {
  background-color: rgba(0, 150, 136, 0.7); }

html body .waves-notransition {
  -webkit-transition: none;
  -moz-transition: none;
  -o-transition: none;
  -ms-transition: none;
  transition: none; }

.waves-circle {
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  text-align: center;
  width: 2.5em;
  height: 2.5em;
  line-height: 2.5em;
  border-radius: 50%;
  -webkit-mask-image: none; }

.waves-input-wrapper {
  border-radius: 0.2em;
  vertical-align: bottom; }
  .waves-input-wrapper .waves-button-input {
    position: relative;
    top: 0;
    left: 0;
    z-index: 1; }

.waves-block {
  display: block; }

/*******************
Fixed -sidebar
******************/
.fixed-sidebar .left-sidebar {
  position: fixed; }

.fixed-sidebar.mini-sidebar .navbar-collapse,
.fixed-sidebar.mini-sidebar .footer {
  margin-left: 70px; }

@media (max-width: 767px) {
  .fixed-sidebar.mini-sidebar .navbar-header {
    position: relative; }
  .fixed-sidebar.mini-sidebar .navbar-collapse {
    margin-left: 0px; } }

/*******************
Fixed -Header
******************/
.fixed-header .topbar {
  position: fixed;
  width: 100%; }

.fixed-header .page-wrapper {
  padding-top: 67px; }

.fixed-layout .left-sidebar,
.fixed-layout .topbar {
  position: fixed; }

.fixed-layout .topbar {
  width: 100%; }

.fixed-layout .page-wrapper {
  padding-top: 67px; }

/*******************
Mini sidebar
******************/
@media (min-width: 769px) {
  .left-sidebar:hover {
    left: 0px; }
  .navbar-header {
    /*margin-left: 60px;*/
    -ms-flex-negative: 0;
    flex-shrink: 0; }
    .navbar-header .navbar-brand {
      padding-top: 0px; }
  .lock-nav .left-sidebar {
    left: 0px;
    width: 220px; }
  .lock-nav .page-wrapper,
  .lock-nav .footer {
    margin-left: 220px; }
  .lock-nav .topbar {
    padding-left: 220px; }
    .lock-nav .topbar .navbar-header {
      margin-left: 0px; } }

@media (max-width: 768px) {
  .show-sidebar .left-sidebar {
    left: 0px; }
  .left-sidebar {
    left: -260px; } }

/*
Template Name: Admin Template
Author: Wrappixel

File: scss
*/
/*******************/
/*Feed widget*/
/*******************/
.feeds {
  margin: 0px;
  padding: 0px; }
  .feeds li {
    list-style: none;
    padding: 12px 15px;
    display: block; }
    .feeds li:hover {
      background: #f8f9fa; }
    .feeds li > div {
      width: 40px;
      height: 40px;
      margin-right: 5px;
      display: inline-block;
      text-align: center;
      vertical-align: middle;
      border-radius: 100%;
      color: #fff; }
      .feeds li > div i {
        line-height: 40px; }
    .feeds li span {
      float: right;
      width: auto;
      font-size: 12px; }

/*******************/
/*Steam line widget*/
/*******************/
.steamline {
  position: relative;
  border-left: 1px solid #e9ecef;
  margin-left: 0px; }
  .steamline .sl-left {
    float: left;
    margin-left: -10px;
    z-index: 1;
    width: 20px;
    line-height: 40px;
    text-align: center;
    height: 20px;
    border-radius: 100%;
    color: #fff;
    margin-right: 15px; }
    .steamline .sl-left img {
      max-width: 40px; }

.steamline .sl-right {
  padding-left: 25px; }
  .steamline .sl-right .desc,
  .steamline .sl-right .inline-photos {
    margin-bottom: 21px; }

.steamline .sl-item {
  border-bottom: 1px solid #e9ecef;
  margin: 10px 0; }

.sl-date {
  font-size: 10px;
  color: #adb5bd; }

.time-item {
  border-color: #e9ecef;
  padding-bottom: 1px;
  position: relative; }
  .time-item:before {
    content: " ";
    display: table; }
  .time-item:after {
    background-color: #fff;
    border-color: #e9ecef;
    border-radius: 10px;
    border-style: solid;
    border-width: 2px;
    bottom: 0;
    content: '';
    height: 14px;
    left: 0;
    margin-left: -8px;
    position: absolute;
    top: 5px;
    width: 14px; }

.time-item-item:after {
  content: " ";
  display: table; }

.item-info {
  margin-bottom: 15px;
  margin-left: 15px; }
  .item-info p {
    margin-bottom: 10px !important; }

/*******************/
/*social-profile-first*/
/*******************/
.social-profile-first {
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  margin-bottom: 96px; }
  .social-profile-first.bg-over {
    background: rgba(56, 83, 161, 0.7); }
  .social-profile-first .middle {
    vertical-align: middle; }

/*******************/
/*profile timeline widget*/
/*******************/
.profiletimeline {
  position: relative;
  padding-left: 40px;
  margin-right: 10px;
  border-left: 1px solid #e9ecef;
  margin-left: 30px; }
  .profiletimeline .sl-left {
    float: left;
    margin-left: -60px;
    z-index: 1;
    margin-right: 15px; }
    .profiletimeline .sl-left img {
      max-width: 40px; }

.profiletimeline .sl-item {
  margin-top: 8px;
  margin-bottom: 30px; }

.profiletimeline .sl-date {
  font-size: 12px;
  color: #adb5bd; }

.profiletimeline .time-item {
  border-color: #e9ecef;
  padding-bottom: 1px;
  position: relative; }
  .profiletimeline .time-item:before {
    content: " ";
    display: table; }
  .profiletimeline .time-item:after {
    background-color: #fff;
    border-color: #e9ecef;
    border-radius: 10px;
    border-style: solid;
    border-width: 2px;
    bottom: 0;
    content: '';
    height: 14px;
    left: 0;
    margin-left: -8px;
    position: absolute;
    top: 5px;
    width: 14px; }

.profiletimeline .time-item-item:after {
  content: " ";
  display: table; }

.profiletimeline .item-info {
  margin-bottom: 15px;
  margin-left: 15px; }
  .profiletimeline .item-info p {
    margin-bottom: 10px !important; }

/*little-profile*/
.little-profile .pro-img {
  margin-bottom: 20px; }
  .little-profile .pro-img img {
    width: 128px;
    height: 128px;
    -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    border-radius: 100%; }

.little-profile .soc-pro a {
  color: #adb5bd; }
  .little-profile .soc-pro a:hover {
    color: #343a40; }

/*******************
/*States row*/
/*******************/
.stats-row {
  margin-bottom: 20px; }
  .stats-row .stat-item {
    display: inline-block;
    padding-right: 15px; }
    .stats-row .stat-item + .stat-item {
      padding-left: 15px;
      border-left: 1px solid #e9ecef; }

/*******************/
/*Guage chart*/
/*******************/
.gaugejs-box {
  position: relative;
  margin: 0 auto; }

.gaugejs-box canvas.gaugejs {
  width: 100% !important;
  height: auto !important; }

/*******************/
/*country-state*/
/*******************/
.country-state {
  list-style: none;
  margin: 0;
  padding: 0 0 0 10px; }
  .country-state li {
    margin-top: 30px;
    margin-bottom: 10px; }
  .country-state h2 {
    margin-bottom: 0px;
    font-weight: 400; }

/*******************/
/*Msg box*/
/*******************/
.msg-item {
  margin-bottom: 20px; }

.msg-body {
  background: #fff;
  padding: 15px;
  font-size: 14px;
  position: relative; }
  .msg-body .dwn-aro {
    width: 0;
    position: absolute;
    bottom: -8px;
    height: 0;
    left: 10px;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-top: 8px solid #fff; }

.m-pic img {
  width: 40px;
  border-radius: 100%; }

.message-box ul li .drop-title {
  font-weight: 500;
  padding: 11px 20px 15px;
  border-bottom: 1px solid #e9ecef; }

.message-box ul li .nav-link {
  border-top: 1px solid #e9ecef;
  padding-top: 15px; }

.message-box .message-widget {
  position: relative; }
  .message-box .message-widget a {
    border-bottom: 1px solid #e9ecef;
    display: block;
    text-decoration: none;
    padding: 9px 15px; }
    .message-box .message-widget a:hover {
      background: #e9ecef; }
    .message-box .message-widget a:last-child {
      border-bottom: 0px; }
    .message-box .message-widget a div {
      white-space: normal; }
    .message-box .message-widget a .user-img {
      width: 45px;
      position: relative;
      display: inline-block;
      margin: 0 10px 15px 0; }
      .message-box .message-widget a .user-img img {
        width: 100%; }
      .message-box .message-widget a .user-img .profile-status {
        border: 2px solid #fff;
        border-radius: 50%;
        display: inline-block;
        height: 10px;
        left: 33px;
        position: absolute;
        top: -1px;
        width: 10px; }
      .message-box .message-widget a .user-img .online {
        background: #36bea6; }
      .message-box .message-widget a .user-img .busy {
        background: #f62d51; }
      .message-box .message-widget a .user-img .away {
        background: #ffbc34; }
      .message-box .message-widget a .user-img .offline {
        background: #ffbc34; }
    .message-box .message-widget a .mail-contnet {
      display: inline-block;
      width: 70%;
      vertical-align: middle; }
      .message-box .message-widget a .mail-contnet h5 {
        margin: 5px 0px 0;
        color: #212529; }
      .message-box .message-widget a .mail-contnet .mail-desc,
      .message-box .message-widget a .mail-contnet .time {
        display: block;
        margin: 1px 0;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        overflow: hidden;
        color: #adb5bd;
        white-space: nowrap; }
      .message-box .message-widget a .mail-contnet .time {
        color: #212529;
        font-size: 12px; }

/*
Template Name: Admin Template
Author: Wrappixel

File: scss
*/
/*============================================================== 
 For Desktop & above all (1650px) 
 ============================================================== */
/*============================================================== 
 For Laptop & above all (1370px) 
 ============================================================== */
/*-- ============================================================== 
 Small Desktop & above all (1024px) 
 ============================================================== */
@media (min-width: 1024px) {
  .page-wrapper, .footer {
    /*margin-left: 60px*/; } }

@media (max-width: 1023px) {
  .inbox-center a {
    width: 200px; }
  .d-flex {
    display: block !important; }
    .d-flex.no-block {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important; } }

/*-- ============================================================== 
 Ipad & above all(768px) 
 ============================================================== */
@media (min-width: 768px) {
  .page-titles .breadcrumb {
    float: right; }
  .mega-dropdown .dropdown-menu, .search-box .app-search {
    left: 160px;
    width: calc(100% - 60px); }
  .material-icon-list-demo .icons div {
    width: 33%;
    padding: 15px;
    display: inline-block;
    line-height: 40px; } }

/*-- ============================================================== 
 Phone and below ipad(767px) 
 ============================================================== */
@media (max-width: 767px) {
  .container-fluid {
    padding: 0px 15px 0px 15px;
    overflow: hidden; }
  /*Header*/
  .topbar {
    width: 100%;
    padding-right: 10px; }
    .topbar .top-navbar {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      -webkit-align-items: center; }
      .topbar .top-navbar .navbar-collapse {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%; }
      .topbar .top-navbar .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row; }
        .topbar .top-navbar .navbar-nav .nav-item > .nav-link {
          padding-left: 8px;
          padding-right: 8px;
          font-size: 15px; }
        .topbar .top-navbar .navbar-nav > .nav-item.show {
          position: static; }
          .topbar .top-navbar .navbar-nav > .nav-item.show .dropdown-menu {
            width: 100%;
            margin-top: 0px; }
        .topbar .top-navbar .navbar-nav .dropdown-menu {
          position: absolute; }
          .topbar .top-navbar .navbar-nav .dropdown-menu .with-arrow {
            display: none; }
  .mega-dropdown .dropdown-menu {
    height: 480px;
    overflow: auto; }
  .comment-text .comment-footer .action-icons {
    display: block;
    padding: 10px 0; }
  .vtabs .tabs-vertical {
    width: auto; }
  /*Footer*/
  .material-icon-list-demo .icons div {
    width: 100%; }
  .error-page .footer {
    position: fixed;
    bottom: 0px;
    z-index: 10; }
  .error-box {
    position: relative;
    padding-bottom: 60px; }
  .error-body {
    padding-top: 10%; }
    .error-body h1 {
      font-size: 100px;
      font-weight: 600;
      line-height: 100px; }
  .login-register {
    position: relative;
    overflow: hidden; }
  .login-box {
    width: 90%; }
  .login-sidebar {
    padding: 10% 0; }
    .login-sidebar .login-box {
      position: relative; }
  /*This is for chat page*/
  .chat-main-box .chat-left-aside {
    left: -250px;
    position: absolute;
    -webkit-transition: 0.5s ease-in;
    -o-transition: 0.5s ease-in;
    transition: 0.5s ease-in;
    background: #fff; }
    .chat-main-box .chat-left-aside.open-pnl {
      left: 0px; }
    .chat-main-box .chat-left-aside .open-panel {
      display: block; }
  .chat-main-box .chat-right-aside {
    width: 100%; }
  /*Timeline*/
  ul.timeline:before {
    left: 40px; }
  ul.timeline > li > .timeline-panel {
    width: calc(100% - 90px); }
  ul.timeline > li > .timeline-badge {
    top: 16px;
    left: 15px;
    margin-left: 0; }
  ul.timeline > li > .timeline-panel {
    float: right; }
  ul.timeline > li > .timeline-panel:before {
    right: auto;
    left: -15px;
    border-right-width: 15px;
    border-left-width: 0; }
  ul.timeline > li > .timeline-panel:after {
    right: auto;
    left: -14px;
    border-right-width: 14px;
    border-left-width: 0; }
  /*Contact app page*/
  .left-aside {
    width: 100%;
    position: relative;
    border: 0px; }
  .right-aside {
    margin-left: 0px; }
  .flex-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
    -webkit-flex-wrap: wrap !important; }
  .chat-list li .chat-content {
    width: calc(100% - 80px); }
  /*Calendar*/
  .fc-toolbar .fc-left, .fc-toolbar .fc-right, .fc-toolbar .fc-center {
    float: none;
    display: block;
    text-align: center;
    margin-top: 10px;
    overflow: hidden; } }
  .accordion {
  }
  .active, .accordion:hover {

  }
  .panel {
    padding: 0px 0px;
    background-color: #1d2029;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
  }

  div.panel>a.acc:hover{
    background-image: linear-gradient(to right, #ff6600 10%, #f7751f 30% , #1d2029 70%);
    transition: 0.2s ease-out;
  }

  #myTable_length>label>select, #myTable_filter>label>input{
   /* display: block;*/
   /* width: 100%;*/
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #4F5467;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e9ecef;
    border-radius: 0.25rem;
    -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  }
/*Padding, margin*/

.pad-0 {
    padding: 0px;
}
.pad-5 {
    padding: 5px;
}
.pad-10 {
    padding: 10px;
}
.pad-15 {
    padding: 15px;
}
.pad-20 {
    padding: 20px;
}
.pad-25 {
    padding: 25px;
}
.pad-30 {
    padding: 30px;
}
.pad-35 {
    padding: 35px;
}
.pad-40 {
    padding: 40px;
}
.pad-45 {
    padding: 45px;
}
.pad-50 {
    padding: 50px;
}
.pad-55 {
    padding: 55px;
}
.pad-60 {
    padding: 60px;
}
.pad-65 {
    padding: 65px;
}
.pad-70 {
    padding: 70px;
}
.pad-75 {
    padding: 75px;
}

.p-b-0 {
    padding-bottom: 0px;
}

.p-t-0 {
    padding-top: 0px;
}

.p-r-0 {
    padding-right: 0px;
}

.p-l-0 {
    padding-left: 0px;
}

.m-b-0 {
    margin-bottom: 0px;
}

.m-t-0 {
    margin-top: 0px;
}

.m-r-0 {
    margin-right: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.p-b-5 {
    padding-bottom: 5px;
}

.p-t-5 {
    padding-top: 5px;
}

.p-r-5 {
    padding-right: 5px;
}

.p-l-5 {
    padding-left: 5px;
}

.m-b-5 {
    margin-bottom: 5px;
}

.m-t-5 {
    margin-top: 5px;
}

.m-r-5 {
    margin-right: 5px;
}

.m-l-5 {
    margin-left: 5px;
}

.p-b-10 {
    padding-bottom: 10px;
}

.p-t-10 {
    padding-top: 10px;
}

.p-r-10 {
    padding-right: 10px;
}

.p-l-10 {
    padding-left: 10px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-10 {
    margin-top: 10px;
}

.m-r-10 {
    margin-right: 10px;
}

.m-l-10 {
    margin-left: 10px;
}

.p-b-15 {
    padding-bottom: 15px;
}

.p-t-15 {
    padding-top: 15px;
}

.p-r-15 {
    padding-right: 15px;
}

.p-l-15 {
    padding-left: 15px;
}

.m-b-15 {
    margin-bottom: 15px;
}

.m-t-15 {
    margin-top: 15px;
}

.m-r-15 {
    margin-right: 15px;
}

.m-l-15 {
    margin-left: 15px;
}

.p-b-20 {
    padding-bottom: 20px;
}

.p-t-20 {
    padding-top: 20px;
}

.p-r-20 {
    padding-right: 20px;
}

.p-l-20 {
    padding-left: 20px;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-t-20 {
    margin-top: 20px;
}

.m-r-20 {
    margin-right: 20px;
}

.m-l-20 {
    margin-left: 20px;
}

.p-b-25 {
    padding-bottom: 25px;
}

.p-t-25 {
    padding-top: 25px;
}

.p-r-25 {
    padding-right: 25px;
}

.p-l-25 {
    padding-left: 25px;
}

.m-b-25 {
    margin-bottom: 25px;
}

.m-t-25 {
    margin-top: 25px;
}

.m-r-25 {
    margin-right: 25px;
}

.m-l-25 {
    margin-left: 25px;
}

.p-b-30 {
    padding-bottom: 30px;
}

.p-t-30 {
    padding-top: 30px;
}

.p-r-30 {
    padding-right: 30px;
}

.p-l-30 {
    padding-left: 30px;
}

.m-b-30 {
    margin-bottom: 30px;
}

.m-t-30 {
    margin-top: 30px;
}

.m-r-30 {
    margin-right: 30px;
}

.m-l-30 {
    margin-left: 30px;
}

.p-b-35 {
    padding-bottom: 35px;
}

.p-t-35 {
    padding-top: 35px;
}

.p-r-35 {
    padding-right: 35px;
}

.p-l-35 {
    padding-left: 35px;
}

.m-b-35 {
    margin-bottom: 35px;
}

.m-t-35 {
    margin-top: 35px;
}

.m-r-35 {
    margin-right: 35px;
}

.m-l-35 {
    margin-left: 35px;
}

.p-b-40 {
    padding-bottom: 40px;
}

.p-t-40 {
    padding-top: 40px;
}

.p-r-40 {
    padding-right: 40px;
}

.p-l-40 {
    padding-left: 40px;
}

.m-b-40 {
    margin-bottom: 40px;
}

.m-t-40 {
    margin-top: 40px;
}

.m-r-40 {
    margin-right: 40px;
}

.m-l-40 {
    margin-left: 40px;
}

.p-b-45 {
    padding-bottom: 45px;
}

.p-t-45 {
    padding-top: 45px;
}

.p-r-45 {
    padding-right: 45px;
}

.p-l-45 {
    padding-left: 45px;
}

.m-b-45 {
    margin-bottom: 45px;
}

.m-t-45 {
    margin-top: 45px;
}

.m-r-45 {
    margin-right: 45px;
}

.m-l-45 {
    margin-left: 45px;
}

.p-b-50 {
    padding-bottom: 50px;
}

.p-t-50 {
    padding-top: 50px;
}

.p-r-50 {
    padding-right: 50px;
}

.p-l-50 {
    padding-left: 50px;
}

.m-b-50 {
    margin-bottom: 50px;
}

.m-t-50 {
    margin-top: 50px;
}

.m-r-50 {
    margin-right: 50px;
}

.m-l-50 {
    margin-left: 50px;
}

.p-b-55 {
    padding-bottom: 55px;
}

.p-t-55 {
    padding-top: 55px;
}

.p-r-55 {
    padding-right: 55px;
}

.p-l-55 {
    padding-left: 55px;
}

.m-b-55 {
    margin-bottom: 55px;
}

.m-t-55 {
    margin-top: 55px;
}

.m-r-55 {
    margin-right: 55px;
}

.m-l-55 {
    margin-left: 55px;
}

.p-b-60 {
    padding-bottom: 60px;
}

.p-t-60 {
    padding-top: 60px;
}

.p-r-60 {
    padding-right: 60px;
}

.p-l-60 {
    padding-left: 60px;
}

.m-b-60 {
    margin-bottom: 60px;
}

.m-t-60 {
    margin-top: 60px;
}

.m-r-60 {
    margin-right: 60px;
}

.m-l-60 {
    margin-left: 60px;
}

.p-b-65 {
    padding-bottom: 65px;
}

.p-t-65 {
    padding-top: 65px;
}

.p-r-65 {
    padding-right: 65px;
}

.p-l-65 {
    padding-left: 65px;
}

.m-b-65 {
    margin-bottom: 65px;
}

.m-t-65 {
    margin-top: 65px;
}

.m-r-65 {
    margin-right: 65px;
}

.m-l-65 {
    margin-left: 65px;
}

.p-b-70 {
    padding-bottom: 70px;
}

.p-t-70 {
    padding-top: 70px;
}

.p-r-70 {
    padding-right: 70px;
}

.p-l-70 {
    padding-left: 70px;
}

.m-b-70 {
    margin-bottom: 70px;
}

.m-t-70 {
    margin-top: 70px;
}

.m-r-70 {
    margin-right: 70px;
}

.m-l-70 {
    margin-left: 70px;
}

.p-b-75 {
    padding-bottom: 75px;
}

.p-t-75 {
    padding-top: 75px;
}

.p-r-75 {
    padding-right: 75px;
}

.p-l-75 {
    padding-left: 75px;
}

.m-b-75 {
    margin-bottom: 75px;
}

.m-t-75 {
    margin-top: 75px;
}

.m-r-75 {
    margin-right: 75px;
}

.m-l-75 {
    margin-left: 75px;
}

.p-b-80 {
    padding-bottom: 80px;
}

.p-t-80 {
    padding-top: 80px;
}

.p-r-80 {
    padding-right: 80px;
}

.p-l-80 {
    padding-left: 80px;
}

.m-b-80 {
    margin-bottom: 80px;
}

.m-t-80 {
    margin-top: 80px;
}

.m-r-80 {
    margin-right: 80px;
}

.m-l-80 {
    margin-left: 80px;
}

.p-b-85 {
    padding-bottom: 85px;
}

.p-t-85 {
    padding-top: 85px;
}

.p-r-85 {
    padding-right: 85px;
}

.p-l-85 {
    padding-left: 85px;
}

.m-b-85 {
    margin-bottom: 85px;
}

.m-t-85 {
    margin-top: 85px;
}

.m-r-85 {
    margin-right: 85px;
}

.m-l-85 {
    margin-left: 85px;
}

.p-b-90 {
    padding-bottom: 90px;
}

.p-t-90 {
    padding-top: 90px;
}

.p-r-90 {
    padding-right: 90px;
}

.p-l-90 {
    padding-left: 90px;
}

.m-b-90 {
    margin-bottom: 90px;
}

.m-t-90 {
    margin-top: 90px;
}

.m-r-90 {
    margin-right: 90px;
}

.m-l-90 {
    margin-left: 90px;
}

.p-b-95 {
    padding-bottom: 95px;
}

.p-t-95 {
    padding-top: 95px;
}

.p-r-95 {
    padding-right: 95px;
}

.p-l-95 {
    padding-left: 95px;
}

.m-b-95 {
    margin-bottom: 95px;
}

.m-t-95 {
    margin-top: 95px;
}

.m-r-95 {
    margin-right: 95px;
}

.m-l-95 {
    margin-left: 95px;
}

.p-b-100 {
    padding-bottom: 100px;
}

.p-t-100 {
    padding-top: 100px;
}

.p-r-100 {
    padding-right: 100px;
}

.p-l-100 {
    padding-left: 100px;
}

.m-b-100 {
    margin-bottom: 100px;
}

.m-t-100 {
    margin-top: 100px;
}

.m-r-100 {
    margin-right: 100px;
}

.m-l-100 {
    margin-left: 100px;
}

.p-b-105 {
    padding-bottom: 105px;
}

.p-t-105 {
    padding-top: 105px;
}

.p-r-105 {
    padding-right: 105px;
}

.p-l-105 {
    padding-left: 105px;
}

.m-b-105 {
    margin-bottom: 105px;
}

.m-t-105 {
    margin-top: 105px;
}

.m-r-105 {
    margin-right: 105px;
}

.m-l-105 {
    margin-left: 105px;
}

.p-b-110 {
    padding-bottom: 110px;
}

.p-t-110 {
    padding-top: 110px;
}

.p-r-110 {
    padding-right: 110px;
}

.p-l-110 {
    padding-left: 110px;
}

.m-b-110 {
    margin-bottom: 110px;
}

.m-t-110 {
    margin-top: 110px;
}

.m-r-110 {
    margin-right: 110px;
}

.m-l-110 {
    margin-left: 110px;
}

.p-b-115 {
    padding-bottom: 115px;
}

.p-t-115 {
    padding-top: 115px;
}

.p-r-115 {
    padding-right: 115px;
}

.p-l-115 {
    padding-left: 115px;
}

.m-b-115 {
    margin-bottom: 115px;
}

.m-t-115 {
    margin-top: 115px;
}

.m-r-115 {
    margin-right: 115px;
}

.m-l-115 {
    margin-left: 115px;
}

.p-b-120 {
    padding-bottom: 120px;
}

.p-t-120 {
    padding-top: 120px;
}

.p-r-120 {
    padding-right: 120px;
}

.p-l-120 {
    padding-left: 120px;
}

.m-b-120 {
    margin-bottom: 120px;
}

.m-t-120 {
    margin-top: 120px;
}

.m-r-120 {
    margin-right: 120px;
}

.m-l-120 {
    margin-left: 120px;
}

.p-b-125 {
    padding-bottom: 125px;
}

.p-t-125 {
    padding-top: 125px;
}

.p-r-125 {
    padding-right: 125px;
}

.p-l-125 {
    padding-left: 125px;
}

.m-b-125 {
    margin-bottom: 125px;
}

.m-t-125 {
    margin-top: 125px;
}

.m-r-125 {
    margin-right: 125px;
}

.m-l-125 {
    margin-left: 125px;
}

.p-b-130 {
    padding-bottom: 130px;
}

.p-t-130 {
    padding-top: 130px;
}

.p-r-130 {
    padding-right: 130px;
}

.p-l-130 {
    padding-left: 130px;
}

.m-b-130 {
    margin-bottom: 130px;
}

.m-t-130 {
    margin-top: 130px;
}

.m-r-130 {
    margin-right: 130px;
}

.m-l-130 {
    margin-left: 130px;
}

.p-b-135 {
    padding-bottom: 135px;
}

.p-t-135 {
    padding-top: 135px;
}

.p-r-135 {
    padding-right: 135px;
}

.p-l-135 {
    padding-left: 135px;
}

.m-b-135 {
    margin-bottom: 135px;
}

.m-t-135 {
    margin-top: 135px;
}

.m-r-135 {
    margin-right: 135px;
}

.m-l-135 {
    margin-left: 135px;
}

.p-b-140 {
    padding-bottom: 140px;
}

.p-t-140 {
    padding-top: 140px;
}

.p-r-140 {
    padding-right: 140px;
}

.p-l-140 {
    padding-left: 140px;
}

.m-b-140 {
    margin-bottom: 140px;
}

.m-t-140 {
    margin-top: 140px;
}

.m-r-140 {
    margin-right: 140px;
}

.m-l-140 {
    margin-left: 140px;
}

.p-b-145 {
    padding-bottom: 145px;
}

.p-t-145 {
    padding-top: 145px;
}

.p-r-145 {
    padding-right: 145px;
}

.p-l-145 {
    padding-left: 145px;
}

.m-b-145 {
    margin-bottom: 145px;
}

.m-t-145 {
    margin-top: 145px;
}

.m-r-145 {
    margin-right: 145px;
}

.m-l-145 {
    margin-left: 145px;
}

.p-b-150 {
    padding-bottom: 150px;
}

.p-t-150 {
    padding-top: 150px;
}

.p-r-150 {
    padding-right: 150px;
}

.p-l-150 {
    padding-left: 150px;
}

.m-b-150 {
    margin-bottom: 150px;
}

.m-t-150 {
    margin-top: 150px;
}

.m-r-150 {
    margin-right: 150px;
}

.m-l-150 {
    margin-left: 150px;
}

.p-b-155 {
    padding-bottom: 155px;
}

.p-t-155 {
    padding-top: 155px;
}

.p-r-155 {
    padding-right: 155px;
}

.p-l-155 {
    padding-left: 155px;
}

.m-b-155 {
    margin-bottom: 155px;
}

.m-t-155 {
    margin-top: 155px;
}

.m-r-155 {
    margin-right: 155px;
}

.m-l-155 {
    margin-left: 155px;
}

.p-b-160 {
    padding-bottom: 160px;
}

.p-t-160 {
    padding-top: 160px;
}

.p-r-160 {
    padding-right: 160px;
}

.p-l-160 {
    padding-left: 160px;
}

.m-b-160 {
    margin-bottom: 160px;
}

.m-t-160 {
    margin-top: 160px;
}

.m-r-160 {
    margin-right: 160px;
}

.m-l-160 {
    margin-left: 160px;
}

.p-b-165 {
    padding-bottom: 165px;
}

.p-t-165 {
    padding-top: 165px;
}

.p-r-165 {
    padding-right: 165px;
}

.p-l-165 {
    padding-left: 165px;
}

.m-b-165 {
    margin-bottom: 165px;
}

.m-t-165 {
    margin-top: 165px;
}

.m-r-165 {
    margin-right: 165px;
}

.m-l-165 {
    margin-left: 165px;
}

.p-b-170 {
    padding-bottom: 170px;
}

.p-t-170 {
    padding-top: 170px;
}

.p-r-170 {
    padding-right: 170px;
}

.p-l-170 {
    padding-left: 170px;
}

.m-b-170 {
    margin-bottom: 170px;
}

.m-t-170 {
    margin-top: 170px;
}

.m-r-170 {
    margin-right: 170px;
}

.m-l-170 {
    margin-left: 170px;
}

.p-b-175 {
    padding-bottom: 175px;
}

.p-t-175 {
    padding-top: 175px;
}

.p-r-175 {
    padding-right: 175px;
}

.p-l-175 {
    padding-left: 175px;
}

.m-b-175 {
    margin-bottom: 175px;
}

.m-t-175 {
    margin-top: 175px;
}

.m-r-175 {
    margin-right: 175px;
}

.m-l-175 {
    margin-left: 175px;
}

.p-b-180 {
    padding-bottom: 180px;
}

.p-t-180 {
    padding-top: 180px;
}

.p-r-180 {
    padding-right: 180px;
}

.p-l-180 {
    padding-left: 180px;
}

.m-b-180 {
    margin-bottom: 180px;
}

.m-t-180 {
    margin-top: 180px;
}

.m-r-180 {
    margin-right: 180px;
}

.m-l-180 {
    margin-left: 180px;
}

.p-b-185 {
    padding-bottom: 185px;
}

.p-t-185 {
    padding-top: 185px;
}

.p-r-185 {
    padding-right: 185px;
}

.p-l-185 {
    padding-left: 185px;
}

.m-b-185 {
    margin-bottom: 185px;
}

.m-t-185 {
    margin-top: 185px;
}

.m-r-185 {
    margin-right: 185px;
}

.m-l-185 {
    margin-left: 185px;
}

.p-b-190 {
    padding-bottom: 190px;
}

.p-t-190 {
    padding-top: 190px;
}

.p-r-190 {
    padding-right: 190px;
}

.p-l-190 {
    padding-left: 190px;
}

.m-b-190 {
    margin-bottom: 190px;
}

.m-t-190 {
    margin-top: 190px;
}

.m-r-190 {
    margin-right: 190px;
}

.m-l-190 {
    margin-left: 190px;
}

.p-b-195 {
    padding-bottom: 195px;
}

.p-t-195 {
    padding-top: 195px;
}

.p-r-195 {
    padding-right: 195px;
}

.p-l-195 {
    padding-left: 195px;
}

.m-b-195 {
    margin-bottom: 195px;
}

.m-t-195 {
    margin-top: 195px;
}

.m-r-195 {
    margin-right: 195px;
}

.m-l-195 {
    margin-left: 195px;
}

.p-b-200 {
    padding-bottom: 200px;
}

.p-t-200 {
    padding-top: 200px;
}

.p-r-200 {
    padding-right: 200px;
}

.p-l-200 {
    padding-left: 200px;
}

.m-b-200 {
    margin-bottom: 200px;
}

.m-t-200 {
    margin-top: 200px;
}

.m-r-200 {
    margin-right: 200px;
}

.m-l-200 {
    margin-left: 200px;
}

.p-b-205 {
    padding-bottom: 205px;
}

.p-t-205 {
    padding-top: 205px;
}

.p-r-205 {
    padding-right: 205px;
}

.p-l-205 {
    padding-left: 205px;
}

.m-b-205 {
    margin-bottom: 205px;
}

.m-t-205 {
    margin-top: 205px;
}

.m-r-205 {
    margin-right: 205px;
}

.m-l-205 {
    margin-left: 205px;
}

.p-b-210 {
    padding-bottom: 210px;
}

.p-t-210 {
    padding-top: 210px;
}

.p-r-210 {
    padding-right: 210px;
}

.p-l-210 {
    padding-left: 210px;
}

.m-b-210 {
    margin-bottom: 210px;
}

.m-t-210 {
    margin-top: 210px;
}

.m-r-210 {
    margin-right: 210px;
}

.m-l-210 {
    margin-left: 210px;
}

.p-b-215 {
    padding-bottom: 215px;
}

.p-t-215 {
    padding-top: 215px;
}

.p-r-215 {
    padding-right: 215px;
}

.p-l-215 {
    padding-left: 215px;
}

.m-b-215 {
    margin-bottom: 215px;
}

.m-t-215 {
    margin-top: 215px;
}

.m-r-215 {
    margin-right: 215px;
}

.m-l-215 {
    margin-left: 215px;
}

.p-b-220 {
    padding-bottom: 220px;
}

.p-t-220 {
    padding-top: 220px;
}

.p-r-220 {
    padding-right: 220px;
}

.p-l-220 {
    padding-left: 220px;
}

.m-b-220 {
    margin-bottom: 220px;
}

.m-t-220 {
    margin-top: 220px;
}

.m-r-220 {
    margin-right: 220px;
}

.m-l-220 {
    margin-left: 220px;
}

.p-b-225 {
    padding-bottom: 225px;
}

.p-t-225 {
    padding-top: 225px;
}

.p-r-225 {
    padding-right: 225px;
}

.p-l-225 {
    padding-left: 225px;
}

.m-b-225 {
    margin-bottom: 225px;
}

.m-t-225 {
    margin-top: 225px;
}

.m-r-225 {
    margin-right: 225px;
}

.m-l-225 {
    margin-left: 225px;
}

.p-b-230 {
    padding-bottom: 230px;
}

.p-t-230 {
    padding-top: 230px;
}

.p-r-230 {
    padding-right: 230px;
}

.p-l-230 {
    padding-left: 230px;
}

.m-b-230 {
    margin-bottom: 230px;
}

.m-t-230 {
    margin-top: 230px;
}

.m-r-230 {
    margin-right: 230px;
}

.m-l-230 {
    margin-left: 230px;
}

.p-b-235 {
    padding-bottom: 235px;
}

.p-t-235 {
    padding-top: 235px;
}

.p-r-235 {
    padding-right: 235px;
}

.p-l-235 {
    padding-left: 235px;
}

.m-b-235 {
    margin-bottom: 235px;
}

.m-t-235 {
    margin-top: 235px;
}

.m-r-235 {
    margin-right: 235px;
}

.m-l-235 {
    margin-left: 235px;
}

.p-b-240 {
    padding-bottom: 240px;
}

.p-t-240 {
    padding-top: 240px;
}

.p-r-240 {
    padding-right: 240px;
}

.p-l-240 {
    padding-left: 240px;
}

.m-b-240 {
    margin-bottom: 240px;
}

.m-t-240 {
    margin-top: 240px;
}

.m-r-240 {
    margin-right: 240px;
}

.m-l-240 {
    margin-left: 240px;
}

.p-b-245 {
    padding-bottom: 245px;
}

.p-t-245 {
    padding-top: 245px;
}

.p-r-245 {
    padding-right: 245px;
}

.p-l-245 {
    padding-left: 245px;
}

.m-b-245 {
    margin-bottom: 245px;
}

.m-t-245 {
    margin-top: 245px;
}

.m-r-245 {
    margin-right: 245px;
}

.m-l-245 {
    margin-left: 245px;
}

.p-b-250 {
    padding-bottom: 250px;
}

.p-t-250 {
    padding-top: 250px;
}

.p-r-250 {
    padding-right: 250px;
}

.p-l-250 {
    padding-left: 250px;
}

.m-b-250 {
    margin-bottom: 250px;
}

.m-t-250 {
    margin-top: 250px;
}

.m-r-250 {
    margin-right: 250px;
}

.m-l-250 {
    margin-left: 250px;
}

@media (max-width: 1023px) {
    .p-lg-b-0 {
        padding-bottom: 0px;
    }

    .p-lg-t-0 {
        padding-top: 0px;
    }

    .p-lg-r-0 {
        padding-right: 0px;
    }

    .p-lg-l-0 {
        padding-left: 0px;
    }

    .m-lg-b-0 {
        margin-bottom: 0px;
    }

    .m-lg-t-0 {
        margin-top: 0px;
    }

    .m-lg-r-0 {
        margin-right: 0px;
    }

    .m-lg-l-0 {
        margin-left: 0px;
    }
}

@media (max-width: 991px) {
    .p-md-b-0 {
        padding-bottom: 0px;
    }

    .p-md-t-0 {
        padding-top: 0px;
    }

    .p-md-r-0 {
        padding-right: 0px;
    }

    .p-md-l-0 {
        padding-left: 0px;
    }

    .m-md-b-0 {
        margin-bottom: 0px;
    }

    .m-md-t-0 {
        margin-top: 0px;
    }

    .m-md-r-0 {
        margin-right: 0px;
    }

    .m-md-l-0 {
        margin-left: 0px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-0 {
        padding-bottom: 0px;
    }

    .p-sm-t-0 {
        padding-top: 0px;
    }

    .p-sm-r-0 {
        padding-right: 0px;
    }

    .p-sm-l-0 {
        padding-left: 0px;
    }

    .m-sm-b-0 {
        margin-bottom: 0px;
    }

    .m-sm-t-0 {
        margin-top: 0px;
    }

    .m-sm-r-0 {
        margin-right: 0px;
    }

    .m-sm-l-0 {
        margin-left: 0px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-0 {
        padding-bottom: 0px;
    }

    .p-xs-t-0 {
        padding-top: 0px;
    }

    .p-xs-r-0 {
        padding-right: 0px;
    }

    .p-xs-l-0 {
        padding-left: 0px;
    }

    .m-xs-b-0 {
        margin-bottom: 0px;
    }

    .m-xs-t-0 {
        margin-top: 0px;
    }

    .m-xs-r-0 {
        margin-right: 0px;
    }

    .m-xs-l-0 {
        margin-left: 0px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-5 {
        padding-bottom: 5px;
    }

    .p-lg-t-5 {
        padding-top: 5px;
    }

    .p-lg-r-5 {
        padding-right: 5px;
    }

    .p-lg-l-5 {
        padding-left: 5px;
    }

    .m-lg-b-5 {
        margin-bottom: 5px;
    }

    .m-lg-t-5 {
        margin-top: 5px;
    }

    .m-lg-r-5 {
        margin-right: 5px;
    }

    .m-lg-l-5 {
        margin-left: 5px;
    }
}

@media (max-width: 991px) {
    .p-md-b-5 {
        padding-bottom: 5px;
    }

    .p-md-t-5 {
        padding-top: 5px;
    }

    .p-md-r-5 {
        padding-right: 5px;
    }

    .p-md-l-5 {
        padding-left: 5px;
    }

    .m-md-b-5 {
        margin-bottom: 5px;
    }

    .m-md-t-5 {
        margin-top: 5px;
    }

    .m-md-r-5 {
        margin-right: 5px;
    }

    .m-md-l-5 {
        margin-left: 5px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-5 {
        padding-bottom: 5px;
    }

    .p-sm-t-5 {
        padding-top: 5px;
    }

    .p-sm-r-5 {
        padding-right: 5px;
    }

    .p-sm-l-5 {
        padding-left: 5px;
    }

    .m-sm-b-5 {
        margin-bottom: 5px;
    }

    .m-sm-t-5 {
        margin-top: 5px;
    }

    .m-sm-r-5 {
        margin-right: 5px;
    }

    .m-sm-l-5 {
        margin-left: 5px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-5 {
        padding-bottom: 5px;
    }

    .p-xs-t-5 {
        padding-top: 5px;
    }

    .p-xs-r-5 {
        padding-right: 5px;
    }

    .p-xs-l-5 {
        padding-left: 5px;
    }

    .m-xs-b-5 {
        margin-bottom: 5px;
    }

    .m-xs-t-5 {
        margin-top: 5px;
    }

    .m-xs-r-5 {
        margin-right: 5px;
    }

    .m-xs-l-5 {
        margin-left: 5px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-10 {
        padding-bottom: 10px;
    }

    .p-lg-t-10 {
        padding-top: 10px;
    }

    .p-lg-r-10 {
        padding-right: 10px;
    }

    .p-lg-l-10 {
        padding-left: 10px;
    }

    .m-lg-b-10 {
        margin-bottom: 10px;
    }

    .m-lg-t-10 {
        margin-top: 10px;
    }

    .m-lg-r-10 {
        margin-right: 10px;
    }

    .m-lg-l-10 {
        margin-left: 10px;
    }
}

@media (max-width: 991px) {
    .p-md-b-10 {
        padding-bottom: 10px;
    }

    .p-md-t-10 {
        padding-top: 10px;
    }

    .p-md-r-10 {
        padding-right: 10px;
    }

    .p-md-l-10 {
        padding-left: 10px;
    }

    .m-md-b-10 {
        margin-bottom: 10px;
    }

    .m-md-t-10 {
        margin-top: 10px;
    }

    .m-md-r-10 {
        margin-right: 10px;
    }

    .m-md-l-10 {
        margin-left: 10px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-10 {
        padding-bottom: 10px;
    }

    .p-sm-t-10 {
        padding-top: 10px;
    }

    .p-sm-r-10 {
        padding-right: 10px;
    }

    .p-sm-l-10 {
        padding-left: 10px;
    }

    .m-sm-b-10 {
        margin-bottom: 10px;
    }

    .m-sm-t-10 {
        margin-top: 10px;
    }

    .m-sm-r-10 {
        margin-right: 10px;
    }

    .m-sm-l-10 {
        margin-left: 10px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-10 {
        padding-bottom: 10px;
    }

    .p-xs-t-10 {
        padding-top: 10px;
    }

    .p-xs-r-10 {
        padding-right: 10px;
    }

    .p-xs-l-10 {
        padding-left: 10px;
    }

    .m-xs-b-10 {
        margin-bottom: 10px;
    }

    .m-xs-t-10 {
        margin-top: 10px;
    }

    .m-xs-r-10 {
        margin-right: 10px;
    }

    .m-xs-l-10 {
        margin-left: 10px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-15 {
        padding-bottom: 15px;
    }

    .p-lg-t-15 {
        padding-top: 15px;
    }

    .p-lg-r-15 {
        padding-right: 15px;
    }

    .p-lg-l-15 {
        padding-left: 15px;
    }

    .m-lg-b-15 {
        margin-bottom: 15px;
    }

    .m-lg-t-15 {
        margin-top: 15px;
    }

    .m-lg-r-15 {
        margin-right: 15px;
    }

    .m-lg-l-15 {
        margin-left: 15px;
    }
}

@media (max-width: 991px) {
    .p-md-b-15 {
        padding-bottom: 15px;
    }

    .p-md-t-15 {
        padding-top: 15px;
    }

    .p-md-r-15 {
        padding-right: 15px;
    }

    .p-md-l-15 {
        padding-left: 15px;
    }

    .m-md-b-15 {
        margin-bottom: 15px;
    }

    .m-md-t-15 {
        margin-top: 15px;
    }

    .m-md-r-15 {
        margin-right: 15px;
    }

    .m-md-l-15 {
        margin-left: 15px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-15 {
        padding-bottom: 15px;
    }

    .p-sm-t-15 {
        padding-top: 15px;
    }

    .p-sm-r-15 {
        padding-right: 15px;
    }

    .p-sm-l-15 {
        padding-left: 15px;
    }

    .m-sm-b-15 {
        margin-bottom: 15px;
    }

    .m-sm-t-15 {
        margin-top: 15px;
    }

    .m-sm-r-15 {
        margin-right: 15px;
    }

    .m-sm-l-15 {
        margin-left: 15px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-15 {
        padding-bottom: 15px;
    }

    .p-xs-t-15 {
        padding-top: 15px;
    }

    .p-xs-r-15 {
        padding-right: 15px;
    }

    .p-xs-l-15 {
        padding-left: 15px;
    }

    .m-xs-b-15 {
        margin-bottom: 15px;
    }

    .m-xs-t-15 {
        margin-top: 15px;
    }

    .m-xs-r-15 {
        margin-right: 15px;
    }

    .m-xs-l-15 {
        margin-left: 15px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-20 {
        padding-bottom: 20px;
    }

    .p-lg-t-20 {
        padding-top: 20px;
    }

    .p-lg-r-20 {
        padding-right: 20px;
    }

    .p-lg-l-20 {
        padding-left: 20px;
    }

    .m-lg-b-20 {
        margin-bottom: 20px;
    }

    .m-lg-t-20 {
        margin-top: 20px;
    }

    .m-lg-r-20 {
        margin-right: 20px;
    }

    .m-lg-l-20 {
        margin-left: 20px;
    }
}

@media (max-width: 991px) {
    .p-md-b-20 {
        padding-bottom: 20px;
    }

    .p-md-t-20 {
        padding-top: 20px;
    }

    .p-md-r-20 {
        padding-right: 20px;
    }

    .p-md-l-20 {
        padding-left: 20px;
    }

    .m-md-b-20 {
        margin-bottom: 20px;
    }

    .m-md-t-20 {
        margin-top: 20px;
    }

    .m-md-r-20 {
        margin-right: 20px;
    }

    .m-md-l-20 {
        margin-left: 20px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-20 {
        padding-bottom: 20px;
    }

    .p-sm-t-20 {
        padding-top: 20px;
    }

    .p-sm-r-20 {
        padding-right: 20px;
    }

    .p-sm-l-20 {
        padding-left: 20px;
    }

    .m-sm-b-20 {
        margin-bottom: 20px;
    }

    .m-sm-t-20 {
        margin-top: 20px;
    }

    .m-sm-r-20 {
        margin-right: 20px;
    }

    .m-sm-l-20 {
        margin-left: 20px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-20 {
        padding-bottom: 20px;
    }

    .p-xs-t-20 {
        padding-top: 20px;
    }

    .p-xs-r-20 {
        padding-right: 20px;
    }

    .p-xs-l-20 {
        padding-left: 20px;
    }

    .m-xs-b-20 {
        margin-bottom: 20px;
    }

    .m-xs-t-20 {
        margin-top: 20px;
    }

    .m-xs-r-20 {
        margin-right: 20px;
    }

    .m-xs-l-20 {
        margin-left: 20px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-25 {
        padding-bottom: 25px;
    }

    .p-lg-t-25 {
        padding-top: 25px;
    }

    .p-lg-r-25 {
        padding-right: 25px;
    }

    .p-lg-l-25 {
        padding-left: 25px;
    }

    .m-lg-b-25 {
        margin-bottom: 25px;
    }

    .m-lg-t-25 {
        margin-top: 25px;
    }

    .m-lg-r-25 {
        margin-right: 25px;
    }

    .m-lg-l-25 {
        margin-left: 25px;
    }
}

@media (max-width: 991px) {
    .p-md-b-25 {
        padding-bottom: 25px;
    }

    .p-md-t-25 {
        padding-top: 25px;
    }

    .p-md-r-25 {
        padding-right: 25px;
    }

    .p-md-l-25 {
        padding-left: 25px;
    }

    .m-md-b-25 {
        margin-bottom: 25px;
    }

    .m-md-t-25 {
        margin-top: 25px;
    }

    .m-md-r-25 {
        margin-right: 25px;
    }

    .m-md-l-25 {
        margin-left: 25px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-25 {
        padding-bottom: 25px;
    }

    .p-sm-t-25 {
        padding-top: 25px;
    }

    .p-sm-r-25 {
        padding-right: 25px;
    }

    .p-sm-l-25 {
        padding-left: 25px;
    }

    .m-sm-b-25 {
        margin-bottom: 25px;
    }

    .m-sm-t-25 {
        margin-top: 25px;
    }

    .m-sm-r-25 {
        margin-right: 25px;
    }

    .m-sm-l-25 {
        margin-left: 25px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-25 {
        padding-bottom: 25px;
    }

    .p-xs-t-25 {
        padding-top: 25px;
    }

    .p-xs-r-25 {
        padding-right: 25px;
    }

    .p-xs-l-25 {
        padding-left: 25px;
    }

    .m-xs-b-25 {
        margin-bottom: 25px;
    }

    .m-xs-t-25 {
        margin-top: 25px;
    }

    .m-xs-r-25 {
        margin-right: 25px;
    }

    .m-xs-l-25 {
        margin-left: 25px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-30 {
        padding-bottom: 30px;
    }

    .p-lg-t-30 {
        padding-top: 30px;
    }

    .p-lg-r-30 {
        padding-right: 30px;
    }

    .p-lg-l-30 {
        padding-left: 30px;
    }

    .m-lg-b-30 {
        margin-bottom: 30px;
    }

    .m-lg-t-30 {
        margin-top: 30px;
    }

    .m-lg-r-30 {
        margin-right: 30px;
    }

    .m-lg-l-30 {
        margin-left: 30px;
    }
}

@media (max-width: 991px) {
    .p-md-b-30 {
        padding-bottom: 30px;
    }

    .p-md-t-30 {
        padding-top: 30px;
    }

    .p-md-r-30 {
        padding-right: 30px;
    }

    .p-md-l-30 {
        padding-left: 30px;
    }

    .m-md-b-30 {
        margin-bottom: 30px;
    }

    .m-md-t-30 {
        margin-top: 30px;
    }

    .m-md-r-30 {
        margin-right: 30px;
    }

    .m-md-l-30 {
        margin-left: 30px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-30 {
        padding-bottom: 30px;
    }

    .p-sm-t-30 {
        padding-top: 30px;
    }

    .p-sm-r-30 {
        padding-right: 30px;
    }

    .p-sm-l-30 {
        padding-left: 30px;
    }

    .m-sm-b-30 {
        margin-bottom: 30px;
    }

    .m-sm-t-30 {
        margin-top: 30px;
    }

    .m-sm-r-30 {
        margin-right: 30px;
    }

    .m-sm-l-30 {
        margin-left: 30px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-30 {
        padding-bottom: 30px;
    }

    .p-xs-t-30 {
        padding-top: 30px;
    }

    .p-xs-r-30 {
        padding-right: 30px;
    }

    .p-xs-l-30 {
        padding-left: 30px;
    }

    .m-xs-b-30 {
        margin-bottom: 30px;
    }

    .m-xs-t-30 {
        margin-top: 30px;
    }

    .m-xs-r-30 {
        margin-right: 30px;
    }

    .m-xs-l-30 {
        margin-left: 30px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-35 {
        padding-bottom: 35px;
    }

    .p-lg-t-35 {
        padding-top: 35px;
    }

    .p-lg-r-35 {
        padding-right: 35px;
    }

    .p-lg-l-35 {
        padding-left: 35px;
    }

    .m-lg-b-35 {
        margin-bottom: 35px;
    }

    .m-lg-t-35 {
        margin-top: 35px;
    }

    .m-lg-r-35 {
        margin-right: 35px;
    }

    .m-lg-l-35 {
        margin-left: 35px;
    }
}

@media (max-width: 991px) {
    .p-md-b-35 {
        padding-bottom: 35px;
    }

    .p-md-t-35 {
        padding-top: 35px;
    }

    .p-md-r-35 {
        padding-right: 35px;
    }

    .p-md-l-35 {
        padding-left: 35px;
    }

    .m-md-b-35 {
        margin-bottom: 35px;
    }

    .m-md-t-35 {
        margin-top: 35px;
    }

    .m-md-r-35 {
        margin-right: 35px;
    }

    .m-md-l-35 {
        margin-left: 35px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-35 {
        padding-bottom: 35px;
    }

    .p-sm-t-35 {
        padding-top: 35px;
    }

    .p-sm-r-35 {
        padding-right: 35px;
    }

    .p-sm-l-35 {
        padding-left: 35px;
    }

    .m-sm-b-35 {
        margin-bottom: 35px;
    }

    .m-sm-t-35 {
        margin-top: 35px;
    }

    .m-sm-r-35 {
        margin-right: 35px;
    }

    .m-sm-l-35 {
        margin-left: 35px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-35 {
        padding-bottom: 35px;
    }

    .p-xs-t-35 {
        padding-top: 35px;
    }

    .p-xs-r-35 {
        padding-right: 35px;
    }

    .p-xs-l-35 {
        padding-left: 35px;
    }

    .m-xs-b-35 {
        margin-bottom: 35px;
    }

    .m-xs-t-35 {
        margin-top: 35px;
    }

    .m-xs-r-35 {
        margin-right: 35px;
    }

    .m-xs-l-35 {
        margin-left: 35px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-40 {
        padding-bottom: 40px;
    }

    .p-lg-t-40 {
        padding-top: 40px;
    }

    .p-lg-r-40 {
        padding-right: 40px;
    }

    .p-lg-l-40 {
        padding-left: 40px;
    }

    .m-lg-b-40 {
        margin-bottom: 40px;
    }

    .m-lg-t-40 {
        margin-top: 40px;
    }

    .m-lg-r-40 {
        margin-right: 40px;
    }

    .m-lg-l-40 {
        margin-left: 40px;
    }
}

@media (max-width: 991px) {
    .p-md-b-40 {
        padding-bottom: 40px;
    }

    .p-md-t-40 {
        padding-top: 40px;
    }

    .p-md-r-40 {
        padding-right: 40px;
    }

    .p-md-l-40 {
        padding-left: 40px;
    }

    .m-md-b-40 {
        margin-bottom: 40px;
    }

    .m-md-t-40 {
        margin-top: 40px;
    }

    .m-md-r-40 {
        margin-right: 40px;
    }

    .m-md-l-40 {
        margin-left: 40px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-40 {
        padding-bottom: 40px;
    }

    .p-sm-t-40 {
        padding-top: 40px;
    }

    .p-sm-r-40 {
        padding-right: 40px;
    }

    .p-sm-l-40 {
        padding-left: 40px;
    }

    .m-sm-b-40 {
        margin-bottom: 40px;
    }

    .m-sm-t-40 {
        margin-top: 40px;
    }

    .m-sm-r-40 {
        margin-right: 40px;
    }

    .m-sm-l-40 {
        margin-left: 40px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-40 {
        padding-bottom: 40px;
    }

    .p-xs-t-40 {
        padding-top: 40px;
    }

    .p-xs-r-40 {
        padding-right: 40px;
    }

    .p-xs-l-40 {
        padding-left: 40px;
    }

    .m-xs-b-40 {
        margin-bottom: 40px;
    }

    .m-xs-t-40 {
        margin-top: 40px;
    }

    .m-xs-r-40 {
        margin-right: 40px;
    }

    .m-xs-l-40 {
        margin-left: 40px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-45 {
        padding-bottom: 45px;
    }

    .p-lg-t-45 {
        padding-top: 45px;
    }

    .p-lg-r-45 {
        padding-right: 45px;
    }

    .p-lg-l-45 {
        padding-left: 45px;
    }

    .m-lg-b-45 {
        margin-bottom: 45px;
    }

    .m-lg-t-45 {
        margin-top: 45px;
    }

    .m-lg-r-45 {
        margin-right: 45px;
    }

    .m-lg-l-45 {
        margin-left: 45px;
    }
}

@media (max-width: 991px) {
    .p-md-b-45 {
        padding-bottom: 45px;
    }

    .p-md-t-45 {
        padding-top: 45px;
    }

    .p-md-r-45 {
        padding-right: 45px;
    }

    .p-md-l-45 {
        padding-left: 45px;
    }

    .m-md-b-45 {
        margin-bottom: 45px;
    }

    .m-md-t-45 {
        margin-top: 45px;
    }

    .m-md-r-45 {
        margin-right: 45px;
    }

    .m-md-l-45 {
        margin-left: 45px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-45 {
        padding-bottom: 45px;
    }

    .p-sm-t-45 {
        padding-top: 45px;
    }

    .p-sm-r-45 {
        padding-right: 45px;
    }

    .p-sm-l-45 {
        padding-left: 45px;
    }

    .m-sm-b-45 {
        margin-bottom: 45px;
    }

    .m-sm-t-45 {
        margin-top: 45px;
    }

    .m-sm-r-45 {
        margin-right: 45px;
    }

    .m-sm-l-45 {
        margin-left: 45px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-45 {
        padding-bottom: 45px;
    }

    .p-xs-t-45 {
        padding-top: 45px;
    }

    .p-xs-r-45 {
        padding-right: 45px;
    }

    .p-xs-l-45 {
        padding-left: 45px;
    }

    .m-xs-b-45 {
        margin-bottom: 45px;
    }

    .m-xs-t-45 {
        margin-top: 45px;
    }

    .m-xs-r-45 {
        margin-right: 45px;
    }

    .m-xs-l-45 {
        margin-left: 45px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-50 {
        padding-bottom: 50px;
    }

    .p-lg-t-50 {
        padding-top: 50px;
    }

    .p-lg-r-50 {
        padding-right: 50px;
    }

    .p-lg-l-50 {
        padding-left: 50px;
    }

    .m-lg-b-50 {
        margin-bottom: 50px;
    }

    .m-lg-t-50 {
        margin-top: 50px;
    }

    .m-lg-r-50 {
        margin-right: 50px;
    }

    .m-lg-l-50 {
        margin-left: 50px;
    }
}

@media (max-width: 991px) {
    .p-md-b-50 {
        padding-bottom: 50px;
    }

    .p-md-t-50 {
        padding-top: 50px;
    }

    .p-md-r-50 {
        padding-right: 50px;
    }

    .p-md-l-50 {
        padding-left: 50px;
    }

    .m-md-b-50 {
        margin-bottom: 50px;
    }

    .m-md-t-50 {
        margin-top: 50px;
    }

    .m-md-r-50 {
        margin-right: 50px;
    }

    .m-md-l-50 {
        margin-left: 50px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-50 {
        padding-bottom: 50px;
    }

    .p-sm-t-50 {
        padding-top: 50px;
    }

    .p-sm-r-50 {
        padding-right: 50px;
    }

    .p-sm-l-50 {
        padding-left: 50px;
    }

    .m-sm-b-50 {
        margin-bottom: 50px;
    }

    .m-sm-t-50 {
        margin-top: 50px;
    }

    .m-sm-r-50 {
        margin-right: 50px;
    }

    .m-sm-l-50 {
        margin-left: 50px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-50 {
        padding-bottom: 50px;
    }

    .p-xs-t-50 {
        padding-top: 50px;
    }

    .p-xs-r-50 {
        padding-right: 50px;
    }

    .p-xs-l-50 {
        padding-left: 50px;
    }

    .m-xs-b-50 {
        margin-bottom: 50px;
    }

    .m-xs-t-50 {
        margin-top: 50px;
    }

    .m-xs-r-50 {
        margin-right: 50px;
    }

    .m-xs-l-50 {
        margin-left: 50px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-55 {
        padding-bottom: 55px;
    }

    .p-lg-t-55 {
        padding-top: 55px;
    }

    .p-lg-r-55 {
        padding-right: 55px;
    }

    .p-lg-l-55 {
        padding-left: 55px;
    }

    .m-lg-b-55 {
        margin-bottom: 55px;
    }

    .m-lg-t-55 {
        margin-top: 55px;
    }

    .m-lg-r-55 {
        margin-right: 55px;
    }

    .m-lg-l-55 {
        margin-left: 55px;
    }
}

@media (max-width: 991px) {
    .p-md-b-55 {
        padding-bottom: 55px;
    }

    .p-md-t-55 {
        padding-top: 55px;
    }

    .p-md-r-55 {
        padding-right: 55px;
    }

    .p-md-l-55 {
        padding-left: 55px;
    }

    .m-md-b-55 {
        margin-bottom: 55px;
    }

    .m-md-t-55 {
        margin-top: 55px;
    }

    .m-md-r-55 {
        margin-right: 55px;
    }

    .m-md-l-55 {
        margin-left: 55px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-55 {
        padding-bottom: 55px;
    }

    .p-sm-t-55 {
        padding-top: 55px;
    }

    .p-sm-r-55 {
        padding-right: 55px;
    }

    .p-sm-l-55 {
        padding-left: 55px;
    }

    .m-sm-b-55 {
        margin-bottom: 55px;
    }

    .m-sm-t-55 {
        margin-top: 55px;
    }

    .m-sm-r-55 {
        margin-right: 55px;
    }

    .m-sm-l-55 {
        margin-left: 55px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-55 {
        padding-bottom: 55px;
    }

    .p-xs-t-55 {
        padding-top: 55px;
    }

    .p-xs-r-55 {
        padding-right: 55px;
    }

    .p-xs-l-55 {
        padding-left: 55px;
    }

    .m-xs-b-55 {
        margin-bottom: 55px;
    }

    .m-xs-t-55 {
        margin-top: 55px;
    }

    .m-xs-r-55 {
        margin-right: 55px;
    }

    .m-xs-l-55 {
        margin-left: 55px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-60 {
        padding-bottom: 60px;
    }

    .p-lg-t-60 {
        padding-top: 60px;
    }

    .p-lg-r-60 {
        padding-right: 60px;
    }

    .p-lg-l-60 {
        padding-left: 60px;
    }

    .m-lg-b-60 {
        margin-bottom: 60px;
    }

    .m-lg-t-60 {
        margin-top: 60px;
    }

    .m-lg-r-60 {
        margin-right: 60px;
    }

    .m-lg-l-60 {
        margin-left: 60px;
    }
}

@media (max-width: 991px) {
    .p-md-b-60 {
        padding-bottom: 60px;
    }

    .p-md-t-60 {
        padding-top: 60px;
    }

    .p-md-r-60 {
        padding-right: 60px;
    }

    .p-md-l-60 {
        padding-left: 60px;
    }

    .m-md-b-60 {
        margin-bottom: 60px;
    }

    .m-md-t-60 {
        margin-top: 60px;
    }

    .m-md-r-60 {
        margin-right: 60px;
    }

    .m-md-l-60 {
        margin-left: 60px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-60 {
        padding-bottom: 60px;
    }

    .p-sm-t-60 {
        padding-top: 60px;
    }

    .p-sm-r-60 {
        padding-right: 60px;
    }

    .p-sm-l-60 {
        padding-left: 60px;
    }

    .m-sm-b-60 {
        margin-bottom: 60px;
    }

    .m-sm-t-60 {
        margin-top: 60px;
    }

    .m-sm-r-60 {
        margin-right: 60px;
    }

    .m-sm-l-60 {
        margin-left: 60px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-60 {
        padding-bottom: 60px;
    }

    .p-xs-t-60 {
        padding-top: 60px;
    }

    .p-xs-r-60 {
        padding-right: 60px;
    }

    .p-xs-l-60 {
        padding-left: 60px;
    }

    .m-xs-b-60 {
        margin-bottom: 60px;
    }

    .m-xs-t-60 {
        margin-top: 60px;
    }

    .m-xs-r-60 {
        margin-right: 60px;
    }

    .m-xs-l-60 {
        margin-left: 60px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-65 {
        padding-bottom: 65px;
    }

    .p-lg-t-65 {
        padding-top: 65px;
    }

    .p-lg-r-65 {
        padding-right: 65px;
    }

    .p-lg-l-65 {
        padding-left: 65px;
    }

    .m-lg-b-65 {
        margin-bottom: 65px;
    }

    .m-lg-t-65 {
        margin-top: 65px;
    }

    .m-lg-r-65 {
        margin-right: 65px;
    }

    .m-lg-l-65 {
        margin-left: 65px;
    }
}

@media (max-width: 991px) {
    .p-md-b-65 {
        padding-bottom: 65px;
    }

    .p-md-t-65 {
        padding-top: 65px;
    }

    .p-md-r-65 {
        padding-right: 65px;
    }

    .p-md-l-65 {
        padding-left: 65px;
    }

    .m-md-b-65 {
        margin-bottom: 65px;
    }

    .m-md-t-65 {
        margin-top: 65px;
    }

    .m-md-r-65 {
        margin-right: 65px;
    }

    .m-md-l-65 {
        margin-left: 65px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-65 {
        padding-bottom: 65px;
    }

    .p-sm-t-65 {
        padding-top: 65px;
    }

    .p-sm-r-65 {
        padding-right: 65px;
    }

    .p-sm-l-65 {
        padding-left: 65px;
    }

    .m-sm-b-65 {
        margin-bottom: 65px;
    }

    .m-sm-t-65 {
        margin-top: 65px;
    }

    .m-sm-r-65 {
        margin-right: 65px;
    }

    .m-sm-l-65 {
        margin-left: 65px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-65 {
        padding-bottom: 65px;
    }

    .p-xs-t-65 {
        padding-top: 65px;
    }

    .p-xs-r-65 {
        padding-right: 65px;
    }

    .p-xs-l-65 {
        padding-left: 65px;
    }

    .m-xs-b-65 {
        margin-bottom: 65px;
    }

    .m-xs-t-65 {
        margin-top: 65px;
    }

    .m-xs-r-65 {
        margin-right: 65px;
    }

    .m-xs-l-65 {
        margin-left: 65px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-70 {
        padding-bottom: 70px;
    }

    .p-lg-t-70 {
        padding-top: 70px;
    }

    .p-lg-r-70 {
        padding-right: 70px;
    }

    .p-lg-l-70 {
        padding-left: 70px;
    }

    .m-lg-b-70 {
        margin-bottom: 70px;
    }

    .m-lg-t-70 {
        margin-top: 70px;
    }

    .m-lg-r-70 {
        margin-right: 70px;
    }

    .m-lg-l-70 {
        margin-left: 70px;
    }
}

@media (max-width: 991px) {
    .p-md-b-70 {
        padding-bottom: 70px;
    }

    .p-md-t-70 {
        padding-top: 70px;
    }

    .p-md-r-70 {
        padding-right: 70px;
    }

    .p-md-l-70 {
        padding-left: 70px;
    }

    .m-md-b-70 {
        margin-bottom: 70px;
    }

    .m-md-t-70 {
        margin-top: 70px;
    }

    .m-md-r-70 {
        margin-right: 70px;
    }

    .m-md-l-70 {
        margin-left: 70px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-70 {
        padding-bottom: 70px;
    }

    .p-sm-t-70 {
        padding-top: 70px;
    }

    .p-sm-r-70 {
        padding-right: 70px;
    }

    .p-sm-l-70 {
        padding-left: 70px;
    }

    .m-sm-b-70 {
        margin-bottom: 70px;
    }

    .m-sm-t-70 {
        margin-top: 70px;
    }

    .m-sm-r-70 {
        margin-right: 70px;
    }

    .m-sm-l-70 {
        margin-left: 70px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-70 {
        padding-bottom: 70px;
    }

    .p-xs-t-70 {
        padding-top: 70px;
    }

    .p-xs-r-70 {
        padding-right: 70px;
    }

    .p-xs-l-70 {
        padding-left: 70px;
    }

    .m-xs-b-70 {
        margin-bottom: 70px;
    }

    .m-xs-t-70 {
        margin-top: 70px;
    }

    .m-xs-r-70 {
        margin-right: 70px;
    }

    .m-xs-l-70 {
        margin-left: 70px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-75 {
        padding-bottom: 75px;
    }

    .p-lg-t-75 {
        padding-top: 75px;
    }

    .p-lg-r-75 {
        padding-right: 75px;
    }

    .p-lg-l-75 {
        padding-left: 75px;
    }

    .m-lg-b-75 {
        margin-bottom: 75px;
    }

    .m-lg-t-75 {
        margin-top: 75px;
    }

    .m-lg-r-75 {
        margin-right: 75px;
    }

    .m-lg-l-75 {
        margin-left: 75px;
    }
}

@media (max-width: 991px) {
    .p-md-b-75 {
        padding-bottom: 75px;
    }

    .p-md-t-75 {
        padding-top: 75px;
    }

    .p-md-r-75 {
        padding-right: 75px;
    }

    .p-md-l-75 {
        padding-left: 75px;
    }

    .m-md-b-75 {
        margin-bottom: 75px;
    }

    .m-md-t-75 {
        margin-top: 75px;
    }

    .m-md-r-75 {
        margin-right: 75px;
    }

    .m-md-l-75 {
        margin-left: 75px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-75 {
        padding-bottom: 75px;
    }

    .p-sm-t-75 {
        padding-top: 75px;
    }

    .p-sm-r-75 {
        padding-right: 75px;
    }

    .p-sm-l-75 {
        padding-left: 75px;
    }

    .m-sm-b-75 {
        margin-bottom: 75px;
    }

    .m-sm-t-75 {
        margin-top: 75px;
    }

    .m-sm-r-75 {
        margin-right: 75px;
    }

    .m-sm-l-75 {
        margin-left: 75px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-75 {
        padding-bottom: 75px;
    }

    .p-xs-t-75 {
        padding-top: 75px;
    }

    .p-xs-r-75 {
        padding-right: 75px;
    }

    .p-xs-l-75 {
        padding-left: 75px;
    }

    .m-xs-b-75 {
        margin-bottom: 75px;
    }

    .m-xs-t-75 {
        margin-top: 75px;
    }

    .m-xs-r-75 {
        margin-right: 75px;
    }

    .m-xs-l-75 {
        margin-left: 75px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-80 {
        padding-bottom: 80px;
    }

    .p-lg-t-80 {
        padding-top: 80px;
    }

    .p-lg-r-80 {
        padding-right: 80px;
    }

    .p-lg-l-80 {
        padding-left: 80px;
    }

    .m-lg-b-80 {
        margin-bottom: 80px;
    }

    .m-lg-t-80 {
        margin-top: 80px;
    }

    .m-lg-r-80 {
        margin-right: 80px;
    }

    .m-lg-l-80 {
        margin-left: 80px;
    }
}

@media (max-width: 991px) {
    .p-md-b-80 {
        padding-bottom: 80px;
    }

    .p-md-t-80 {
        padding-top: 80px;
    }

    .p-md-r-80 {
        padding-right: 80px;
    }

    .p-md-l-80 {
        padding-left: 80px;
    }

    .m-md-b-80 {
        margin-bottom: 80px;
    }

    .m-md-t-80 {
        margin-top: 80px;
    }

    .m-md-r-80 {
        margin-right: 80px;
    }

    .m-md-l-80 {
        margin-left: 80px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-80 {
        padding-bottom: 80px;
    }

    .p-sm-t-80 {
        padding-top: 80px;
    }

    .p-sm-r-80 {
        padding-right: 80px;
    }

    .p-sm-l-80 {
        padding-left: 80px;
    }

    .m-sm-b-80 {
        margin-bottom: 80px;
    }

    .m-sm-t-80 {
        margin-top: 80px;
    }

    .m-sm-r-80 {
        margin-right: 80px;
    }

    .m-sm-l-80 {
        margin-left: 80px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-80 {
        padding-bottom: 80px;
    }

    .p-xs-t-80 {
        padding-top: 80px;
    }

    .p-xs-r-80 {
        padding-right: 80px;
    }

    .p-xs-l-80 {
        padding-left: 80px;
    }

    .m-xs-b-80 {
        margin-bottom: 80px;
    }

    .m-xs-t-80 {
        margin-top: 80px;
    }

    .m-xs-r-80 {
        margin-right: 80px;
    }

    .m-xs-l-80 {
        margin-left: 80px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-85 {
        padding-bottom: 85px;
    }

    .p-lg-t-85 {
        padding-top: 85px;
    }

    .p-lg-r-85 {
        padding-right: 85px;
    }

    .p-lg-l-85 {
        padding-left: 85px;
    }

    .m-lg-b-85 {
        margin-bottom: 85px;
    }

    .m-lg-t-85 {
        margin-top: 85px;
    }

    .m-lg-r-85 {
        margin-right: 85px;
    }

    .m-lg-l-85 {
        margin-left: 85px;
    }
}

@media (max-width: 991px) {
    .p-md-b-85 {
        padding-bottom: 85px;
    }

    .p-md-t-85 {
        padding-top: 85px;
    }

    .p-md-r-85 {
        padding-right: 85px;
    }

    .p-md-l-85 {
        padding-left: 85px;
    }

    .m-md-b-85 {
        margin-bottom: 85px;
    }

    .m-md-t-85 {
        margin-top: 85px;
    }

    .m-md-r-85 {
        margin-right: 85px;
    }

    .m-md-l-85 {
        margin-left: 85px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-85 {
        padding-bottom: 85px;
    }

    .p-sm-t-85 {
        padding-top: 85px;
    }

    .p-sm-r-85 {
        padding-right: 85px;
    }

    .p-sm-l-85 {
        padding-left: 85px;
    }

    .m-sm-b-85 {
        margin-bottom: 85px;
    }

    .m-sm-t-85 {
        margin-top: 85px;
    }

    .m-sm-r-85 {
        margin-right: 85px;
    }

    .m-sm-l-85 {
        margin-left: 85px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-85 {
        padding-bottom: 85px;
    }

    .p-xs-t-85 {
        padding-top: 85px;
    }

    .p-xs-r-85 {
        padding-right: 85px;
    }

    .p-xs-l-85 {
        padding-left: 85px;
    }

    .m-xs-b-85 {
        margin-bottom: 85px;
    }

    .m-xs-t-85 {
        margin-top: 85px;
    }

    .m-xs-r-85 {
        margin-right: 85px;
    }

    .m-xs-l-85 {
        margin-left: 85px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-90 {
        padding-bottom: 90px;
    }

    .p-lg-t-90 {
        padding-top: 90px;
    }

    .p-lg-r-90 {
        padding-right: 90px;
    }

    .p-lg-l-90 {
        padding-left: 90px;
    }

    .m-lg-b-90 {
        margin-bottom: 90px;
    }

    .m-lg-t-90 {
        margin-top: 90px;
    }

    .m-lg-r-90 {
        margin-right: 90px;
    }

    .m-lg-l-90 {
        margin-left: 90px;
    }
}

@media (max-width: 991px) {
    .p-md-b-90 {
        padding-bottom: 90px;
    }

    .p-md-t-90 {
        padding-top: 90px;
    }

    .p-md-r-90 {
        padding-right: 90px;
    }

    .p-md-l-90 {
        padding-left: 90px;
    }

    .m-md-b-90 {
        margin-bottom: 90px;
    }

    .m-md-t-90 {
        margin-top: 90px;
    }

    .m-md-r-90 {
        margin-right: 90px;
    }

    .m-md-l-90 {
        margin-left: 90px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-90 {
        padding-bottom: 90px;
    }

    .p-sm-t-90 {
        padding-top: 90px;
    }

    .p-sm-r-90 {
        padding-right: 90px;
    }

    .p-sm-l-90 {
        padding-left: 90px;
    }

    .m-sm-b-90 {
        margin-bottom: 90px;
    }

    .m-sm-t-90 {
        margin-top: 90px;
    }

    .m-sm-r-90 {
        margin-right: 90px;
    }

    .m-sm-l-90 {
        margin-left: 90px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-90 {
        padding-bottom: 90px;
    }

    .p-xs-t-90 {
        padding-top: 90px;
    }

    .p-xs-r-90 {
        padding-right: 90px;
    }

    .p-xs-l-90 {
        padding-left: 90px;
    }

    .m-xs-b-90 {
        margin-bottom: 90px;
    }

    .m-xs-t-90 {
        margin-top: 90px;
    }

    .m-xs-r-90 {
        margin-right: 90px;
    }

    .m-xs-l-90 {
        margin-left: 90px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-95 {
        padding-bottom: 95px;
    }

    .p-lg-t-95 {
        padding-top: 95px;
    }

    .p-lg-r-95 {
        padding-right: 95px;
    }

    .p-lg-l-95 {
        padding-left: 95px;
    }

    .m-lg-b-95 {
        margin-bottom: 95px;
    }

    .m-lg-t-95 {
        margin-top: 95px;
    }

    .m-lg-r-95 {
        margin-right: 95px;
    }

    .m-lg-l-95 {
        margin-left: 95px;
    }
}

@media (max-width: 991px) {
    .p-md-b-95 {
        padding-bottom: 95px;
    }

    .p-md-t-95 {
        padding-top: 95px;
    }

    .p-md-r-95 {
        padding-right: 95px;
    }

    .p-md-l-95 {
        padding-left: 95px;
    }

    .m-md-b-95 {
        margin-bottom: 95px;
    }

    .m-md-t-95 {
        margin-top: 95px;
    }

    .m-md-r-95 {
        margin-right: 95px;
    }

    .m-md-l-95 {
        margin-left: 95px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-95 {
        padding-bottom: 95px;
    }

    .p-sm-t-95 {
        padding-top: 95px;
    }

    .p-sm-r-95 {
        padding-right: 95px;
    }

    .p-sm-l-95 {
        padding-left: 95px;
    }

    .m-sm-b-95 {
        margin-bottom: 95px;
    }

    .m-sm-t-95 {
        margin-top: 95px;
    }

    .m-sm-r-95 {
        margin-right: 95px;
    }

    .m-sm-l-95 {
        margin-left: 95px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-95 {
        padding-bottom: 95px;
    }

    .p-xs-t-95 {
        padding-top: 95px;
    }

    .p-xs-r-95 {
        padding-right: 95px;
    }

    .p-xs-l-95 {
        padding-left: 95px;
    }

    .m-xs-b-95 {
        margin-bottom: 95px;
    }

    .m-xs-t-95 {
        margin-top: 95px;
    }

    .m-xs-r-95 {
        margin-right: 95px;
    }

    .m-xs-l-95 {
        margin-left: 95px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-100 {
        padding-bottom: 100px;
    }

    .p-lg-t-100 {
        padding-top: 100px;
    }

    .p-lg-r-100 {
        padding-right: 100px;
    }

    .p-lg-l-100 {
        padding-left: 100px;
    }

    .m-lg-b-100 {
        margin-bottom: 100px;
    }

    .m-lg-t-100 {
        margin-top: 100px;
    }

    .m-lg-r-100 {
        margin-right: 100px;
    }

    .m-lg-l-100 {
        margin-left: 100px;
    }
}

@media (max-width: 991px) {
    .p-md-b-100 {
        padding-bottom: 100px;
    }

    .p-md-t-100 {
        padding-top: 100px;
    }

    .p-md-r-100 {
        padding-right: 100px;
    }

    .p-md-l-100 {
        padding-left: 100px;
    }

    .m-md-b-100 {
        margin-bottom: 100px;
    }

    .m-md-t-100 {
        margin-top: 100px;
    }

    .m-md-r-100 {
        margin-right: 100px;
    }

    .m-md-l-100 {
        margin-left: 100px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-100 {
        padding-bottom: 100px;
    }

    .p-sm-t-100 {
        padding-top: 100px;
    }

    .p-sm-r-100 {
        padding-right: 100px;
    }

    .p-sm-l-100 {
        padding-left: 100px;
    }

    .m-sm-b-100 {
        margin-bottom: 100px;
    }

    .m-sm-t-100 {
        margin-top: 100px;
    }

    .m-sm-r-100 {
        margin-right: 100px;
    }

    .m-sm-l-100 {
        margin-left: 100px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-100 {
        padding-bottom: 100px;
    }

    .p-xs-t-100 {
        padding-top: 100px;
    }

    .p-xs-r-100 {
        padding-right: 100px;
    }

    .p-xs-l-100 {
        padding-left: 100px;
    }

    .m-xs-b-100 {
        margin-bottom: 100px;
    }

    .m-xs-t-100 {
        margin-top: 100px;
    }

    .m-xs-r-100 {
        margin-right: 100px;
    }

    .m-xs-l-100 {
        margin-left: 100px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-105 {
        padding-bottom: 105px;
    }

    .p-lg-t-105 {
        padding-top: 105px;
    }

    .p-lg-r-105 {
        padding-right: 105px;
    }

    .p-lg-l-105 {
        padding-left: 105px;
    }

    .m-lg-b-105 {
        margin-bottom: 105px;
    }

    .m-lg-t-105 {
        margin-top: 105px;
    }

    .m-lg-r-105 {
        margin-right: 105px;
    }

    .m-lg-l-105 {
        margin-left: 105px;
    }
}

@media (max-width: 991px) {
    .p-md-b-105 {
        padding-bottom: 105px;
    }

    .p-md-t-105 {
        padding-top: 105px;
    }

    .p-md-r-105 {
        padding-right: 105px;
    }

    .p-md-l-105 {
        padding-left: 105px;
    }

    .m-md-b-105 {
        margin-bottom: 105px;
    }

    .m-md-t-105 {
        margin-top: 105px;
    }

    .m-md-r-105 {
        margin-right: 105px;
    }

    .m-md-l-105 {
        margin-left: 105px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-105 {
        padding-bottom: 105px;
    }

    .p-sm-t-105 {
        padding-top: 105px;
    }

    .p-sm-r-105 {
        padding-right: 105px;
    }

    .p-sm-l-105 {
        padding-left: 105px;
    }

    .m-sm-b-105 {
        margin-bottom: 105px;
    }

    .m-sm-t-105 {
        margin-top: 105px;
    }

    .m-sm-r-105 {
        margin-right: 105px;
    }

    .m-sm-l-105 {
        margin-left: 105px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-105 {
        padding-bottom: 105px;
    }

    .p-xs-t-105 {
        padding-top: 105px;
    }

    .p-xs-r-105 {
        padding-right: 105px;
    }

    .p-xs-l-105 {
        padding-left: 105px;
    }

    .m-xs-b-105 {
        margin-bottom: 105px;
    }

    .m-xs-t-105 {
        margin-top: 105px;
    }

    .m-xs-r-105 {
        margin-right: 105px;
    }

    .m-xs-l-105 {
        margin-left: 105px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-110 {
        padding-bottom: 110px;
    }

    .p-lg-t-110 {
        padding-top: 110px;
    }

    .p-lg-r-110 {
        padding-right: 110px;
    }

    .p-lg-l-110 {
        padding-left: 110px;
    }

    .m-lg-b-110 {
        margin-bottom: 110px;
    }

    .m-lg-t-110 {
        margin-top: 110px;
    }

    .m-lg-r-110 {
        margin-right: 110px;
    }

    .m-lg-l-110 {
        margin-left: 110px;
    }
}

@media (max-width: 991px) {
    .p-md-b-110 {
        padding-bottom: 110px;
    }

    .p-md-t-110 {
        padding-top: 110px;
    }

    .p-md-r-110 {
        padding-right: 110px;
    }

    .p-md-l-110 {
        padding-left: 110px;
    }

    .m-md-b-110 {
        margin-bottom: 110px;
    }

    .m-md-t-110 {
        margin-top: 110px;
    }

    .m-md-r-110 {
        margin-right: 110px;
    }

    .m-md-l-110 {
        margin-left: 110px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-110 {
        padding-bottom: 110px;
    }

    .p-sm-t-110 {
        padding-top: 110px;
    }

    .p-sm-r-110 {
        padding-right: 110px;
    }

    .p-sm-l-110 {
        padding-left: 110px;
    }

    .m-sm-b-110 {
        margin-bottom: 110px;
    }

    .m-sm-t-110 {
        margin-top: 110px;
    }

    .m-sm-r-110 {
        margin-right: 110px;
    }

    .m-sm-l-110 {
        margin-left: 110px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-110 {
        padding-bottom: 110px;
    }

    .p-xs-t-110 {
        padding-top: 110px;
    }

    .p-xs-r-110 {
        padding-right: 110px;
    }

    .p-xs-l-110 {
        padding-left: 110px;
    }

    .m-xs-b-110 {
        margin-bottom: 110px;
    }

    .m-xs-t-110 {
        margin-top: 110px;
    }

    .m-xs-r-110 {
        margin-right: 110px;
    }

    .m-xs-l-110 {
        margin-left: 110px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-115 {
        padding-bottom: 115px;
    }

    .p-lg-t-115 {
        padding-top: 115px;
    }

    .p-lg-r-115 {
        padding-right: 115px;
    }

    .p-lg-l-115 {
        padding-left: 115px;
    }

    .m-lg-b-115 {
        margin-bottom: 115px;
    }

    .m-lg-t-115 {
        margin-top: 115px;
    }

    .m-lg-r-115 {
        margin-right: 115px;
    }

    .m-lg-l-115 {
        margin-left: 115px;
    }
}

@media (max-width: 991px) {
    .p-md-b-115 {
        padding-bottom: 115px;
    }

    .p-md-t-115 {
        padding-top: 115px;
    }

    .p-md-r-115 {
        padding-right: 115px;
    }

    .p-md-l-115 {
        padding-left: 115px;
    }

    .m-md-b-115 {
        margin-bottom: 115px;
    }

    .m-md-t-115 {
        margin-top: 115px;
    }

    .m-md-r-115 {
        margin-right: 115px;
    }

    .m-md-l-115 {
        margin-left: 115px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-115 {
        padding-bottom: 115px;
    }

    .p-sm-t-115 {
        padding-top: 115px;
    }

    .p-sm-r-115 {
        padding-right: 115px;
    }

    .p-sm-l-115 {
        padding-left: 115px;
    }

    .m-sm-b-115 {
        margin-bottom: 115px;
    }

    .m-sm-t-115 {
        margin-top: 115px;
    }

    .m-sm-r-115 {
        margin-right: 115px;
    }

    .m-sm-l-115 {
        margin-left: 115px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-115 {
        padding-bottom: 115px;
    }

    .p-xs-t-115 {
        padding-top: 115px;
    }

    .p-xs-r-115 {
        padding-right: 115px;
    }

    .p-xs-l-115 {
        padding-left: 115px;
    }

    .m-xs-b-115 {
        margin-bottom: 115px;
    }

    .m-xs-t-115 {
        margin-top: 115px;
    }

    .m-xs-r-115 {
        margin-right: 115px;
    }

    .m-xs-l-115 {
        margin-left: 115px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-120 {
        padding-bottom: 120px;
    }

    .p-lg-t-120 {
        padding-top: 120px;
    }

    .p-lg-r-120 {
        padding-right: 120px;
    }

    .p-lg-l-120 {
        padding-left: 120px;
    }

    .m-lg-b-120 {
        margin-bottom: 120px;
    }

    .m-lg-t-120 {
        margin-top: 120px;
    }

    .m-lg-r-120 {
        margin-right: 120px;
    }

    .m-lg-l-120 {
        margin-left: 120px;
    }
}

@media (max-width: 991px) {
    .p-md-b-120 {
        padding-bottom: 120px;
    }

    .p-md-t-120 {
        padding-top: 120px;
    }

    .p-md-r-120 {
        padding-right: 120px;
    }

    .p-md-l-120 {
        padding-left: 120px;
    }

    .m-md-b-120 {
        margin-bottom: 120px;
    }

    .m-md-t-120 {
        margin-top: 120px;
    }

    .m-md-r-120 {
        margin-right: 120px;
    }

    .m-md-l-120 {
        margin-left: 120px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-120 {
        padding-bottom: 120px;
    }

    .p-sm-t-120 {
        padding-top: 120px;
    }

    .p-sm-r-120 {
        padding-right: 120px;
    }

    .p-sm-l-120 {
        padding-left: 120px;
    }

    .m-sm-b-120 {
        margin-bottom: 120px;
    }

    .m-sm-t-120 {
        margin-top: 120px;
    }

    .m-sm-r-120 {
        margin-right: 120px;
    }

    .m-sm-l-120 {
        margin-left: 120px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-120 {
        padding-bottom: 120px;
    }

    .p-xs-t-120 {
        padding-top: 120px;
    }

    .p-xs-r-120 {
        padding-right: 120px;
    }

    .p-xs-l-120 {
        padding-left: 120px;
    }

    .m-xs-b-120 {
        margin-bottom: 120px;
    }

    .m-xs-t-120 {
        margin-top: 120px;
    }

    .m-xs-r-120 {
        margin-right: 120px;
    }

    .m-xs-l-120 {
        margin-left: 120px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-125 {
        padding-bottom: 125px;
    }

    .p-lg-t-125 {
        padding-top: 125px;
    }

    .p-lg-r-125 {
        padding-right: 125px;
    }

    .p-lg-l-125 {
        padding-left: 125px;
    }

    .m-lg-b-125 {
        margin-bottom: 125px;
    }

    .m-lg-t-125 {
        margin-top: 125px;
    }

    .m-lg-r-125 {
        margin-right: 125px;
    }

    .m-lg-l-125 {
        margin-left: 125px;
    }
}

@media (max-width: 991px) {
    .p-md-b-125 {
        padding-bottom: 125px;
    }

    .p-md-t-125 {
        padding-top: 125px;
    }

    .p-md-r-125 {
        padding-right: 125px;
    }

    .p-md-l-125 {
        padding-left: 125px;
    }

    .m-md-b-125 {
        margin-bottom: 125px;
    }

    .m-md-t-125 {
        margin-top: 125px;
    }

    .m-md-r-125 {
        margin-right: 125px;
    }

    .m-md-l-125 {
        margin-left: 125px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-125 {
        padding-bottom: 125px;
    }

    .p-sm-t-125 {
        padding-top: 125px;
    }

    .p-sm-r-125 {
        padding-right: 125px;
    }

    .p-sm-l-125 {
        padding-left: 125px;
    }

    .m-sm-b-125 {
        margin-bottom: 125px;
    }

    .m-sm-t-125 {
        margin-top: 125px;
    }

    .m-sm-r-125 {
        margin-right: 125px;
    }

    .m-sm-l-125 {
        margin-left: 125px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-125 {
        padding-bottom: 125px;
    }

    .p-xs-t-125 {
        padding-top: 125px;
    }

    .p-xs-r-125 {
        padding-right: 125px;
    }

    .p-xs-l-125 {
        padding-left: 125px;
    }

    .m-xs-b-125 {
        margin-bottom: 125px;
    }

    .m-xs-t-125 {
        margin-top: 125px;
    }

    .m-xs-r-125 {
        margin-right: 125px;
    }

    .m-xs-l-125 {
        margin-left: 125px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-130 {
        padding-bottom: 130px;
    }

    .p-lg-t-130 {
        padding-top: 130px;
    }

    .p-lg-r-130 {
        padding-right: 130px;
    }

    .p-lg-l-130 {
        padding-left: 130px;
    }

    .m-lg-b-130 {
        margin-bottom: 130px;
    }

    .m-lg-t-130 {
        margin-top: 130px;
    }

    .m-lg-r-130 {
        margin-right: 130px;
    }

    .m-lg-l-130 {
        margin-left: 130px;
    }
}

@media (max-width: 991px) {
    .p-md-b-130 {
        padding-bottom: 130px;
    }

    .p-md-t-130 {
        padding-top: 130px;
    }

    .p-md-r-130 {
        padding-right: 130px;
    }

    .p-md-l-130 {
        padding-left: 130px;
    }

    .m-md-b-130 {
        margin-bottom: 130px;
    }

    .m-md-t-130 {
        margin-top: 130px;
    }

    .m-md-r-130 {
        margin-right: 130px;
    }

    .m-md-l-130 {
        margin-left: 130px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-130 {
        padding-bottom: 130px;
    }

    .p-sm-t-130 {
        padding-top: 130px;
    }

    .p-sm-r-130 {
        padding-right: 130px;
    }

    .p-sm-l-130 {
        padding-left: 130px;
    }

    .m-sm-b-130 {
        margin-bottom: 130px;
    }

    .m-sm-t-130 {
        margin-top: 130px;
    }

    .m-sm-r-130 {
        margin-right: 130px;
    }

    .m-sm-l-130 {
        margin-left: 130px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-130 {
        padding-bottom: 130px;
    }

    .p-xs-t-130 {
        padding-top: 130px;
    }

    .p-xs-r-130 {
        padding-right: 130px;
    }

    .p-xs-l-130 {
        padding-left: 130px;
    }

    .m-xs-b-130 {
        margin-bottom: 130px;
    }

    .m-xs-t-130 {
        margin-top: 130px;
    }

    .m-xs-r-130 {
        margin-right: 130px;
    }

    .m-xs-l-130 {
        margin-left: 130px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-135 {
        padding-bottom: 135px;
    }

    .p-lg-t-135 {
        padding-top: 135px;
    }

    .p-lg-r-135 {
        padding-right: 135px;
    }

    .p-lg-l-135 {
        padding-left: 135px;
    }

    .m-lg-b-135 {
        margin-bottom: 135px;
    }

    .m-lg-t-135 {
        margin-top: 135px;
    }

    .m-lg-r-135 {
        margin-right: 135px;
    }

    .m-lg-l-135 {
        margin-left: 135px;
    }
}

@media (max-width: 991px) {
    .p-md-b-135 {
        padding-bottom: 135px;
    }

    .p-md-t-135 {
        padding-top: 135px;
    }

    .p-md-r-135 {
        padding-right: 135px;
    }

    .p-md-l-135 {
        padding-left: 135px;
    }

    .m-md-b-135 {
        margin-bottom: 135px;
    }

    .m-md-t-135 {
        margin-top: 135px;
    }

    .m-md-r-135 {
        margin-right: 135px;
    }

    .m-md-l-135 {
        margin-left: 135px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-135 {
        padding-bottom: 135px;
    }

    .p-sm-t-135 {
        padding-top: 135px;
    }

    .p-sm-r-135 {
        padding-right: 135px;
    }

    .p-sm-l-135 {
        padding-left: 135px;
    }

    .m-sm-b-135 {
        margin-bottom: 135px;
    }

    .m-sm-t-135 {
        margin-top: 135px;
    }

    .m-sm-r-135 {
        margin-right: 135px;
    }

    .m-sm-l-135 {
        margin-left: 135px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-135 {
        padding-bottom: 135px;
    }

    .p-xs-t-135 {
        padding-top: 135px;
    }

    .p-xs-r-135 {
        padding-right: 135px;
    }

    .p-xs-l-135 {
        padding-left: 135px;
    }

    .m-xs-b-135 {
        margin-bottom: 135px;
    }

    .m-xs-t-135 {
        margin-top: 135px;
    }

    .m-xs-r-135 {
        margin-right: 135px;
    }

    .m-xs-l-135 {
        margin-left: 135px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-140 {
        padding-bottom: 140px;
    }

    .p-lg-t-140 {
        padding-top: 140px;
    }

    .p-lg-r-140 {
        padding-right: 140px;
    }

    .p-lg-l-140 {
        padding-left: 140px;
    }

    .m-lg-b-140 {
        margin-bottom: 140px;
    }

    .m-lg-t-140 {
        margin-top: 140px;
    }

    .m-lg-r-140 {
        margin-right: 140px;
    }

    .m-lg-l-140 {
        margin-left: 140px;
    }
}

@media (max-width: 991px) {
    .p-md-b-140 {
        padding-bottom: 140px;
    }

    .p-md-t-140 {
        padding-top: 140px;
    }

    .p-md-r-140 {
        padding-right: 140px;
    }

    .p-md-l-140 {
        padding-left: 140px;
    }

    .m-md-b-140 {
        margin-bottom: 140px;
    }

    .m-md-t-140 {
        margin-top: 140px;
    }

    .m-md-r-140 {
        margin-right: 140px;
    }

    .m-md-l-140 {
        margin-left: 140px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-140 {
        padding-bottom: 140px;
    }

    .p-sm-t-140 {
        padding-top: 140px;
    }

    .p-sm-r-140 {
        padding-right: 140px;
    }

    .p-sm-l-140 {
        padding-left: 140px;
    }

    .m-sm-b-140 {
        margin-bottom: 140px;
    }

    .m-sm-t-140 {
        margin-top: 140px;
    }

    .m-sm-r-140 {
        margin-right: 140px;
    }

    .m-sm-l-140 {
        margin-left: 140px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-140 {
        padding-bottom: 140px;
    }

    .p-xs-t-140 {
        padding-top: 140px;
    }

    .p-xs-r-140 {
        padding-right: 140px;
    }

    .p-xs-l-140 {
        padding-left: 140px;
    }

    .m-xs-b-140 {
        margin-bottom: 140px;
    }

    .m-xs-t-140 {
        margin-top: 140px;
    }

    .m-xs-r-140 {
        margin-right: 140px;
    }

    .m-xs-l-140 {
        margin-left: 140px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-145 {
        padding-bottom: 145px;
    }

    .p-lg-t-145 {
        padding-top: 145px;
    }

    .p-lg-r-145 {
        padding-right: 145px;
    }

    .p-lg-l-145 {
        padding-left: 145px;
    }

    .m-lg-b-145 {
        margin-bottom: 145px;
    }

    .m-lg-t-145 {
        margin-top: 145px;
    }

    .m-lg-r-145 {
        margin-right: 145px;
    }

    .m-lg-l-145 {
        margin-left: 145px;
    }
}

@media (max-width: 991px) {
    .p-md-b-145 {
        padding-bottom: 145px;
    }

    .p-md-t-145 {
        padding-top: 145px;
    }

    .p-md-r-145 {
        padding-right: 145px;
    }

    .p-md-l-145 {
        padding-left: 145px;
    }

    .m-md-b-145 {
        margin-bottom: 145px;
    }

    .m-md-t-145 {
        margin-top: 145px;
    }

    .m-md-r-145 {
        margin-right: 145px;
    }

    .m-md-l-145 {
        margin-left: 145px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-145 {
        padding-bottom: 145px;
    }

    .p-sm-t-145 {
        padding-top: 145px;
    }

    .p-sm-r-145 {
        padding-right: 145px;
    }

    .p-sm-l-145 {
        padding-left: 145px;
    }

    .m-sm-b-145 {
        margin-bottom: 145px;
    }

    .m-sm-t-145 {
        margin-top: 145px;
    }

    .m-sm-r-145 {
        margin-right: 145px;
    }

    .m-sm-l-145 {
        margin-left: 145px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-145 {
        padding-bottom: 145px;
    }

    .p-xs-t-145 {
        padding-top: 145px;
    }

    .p-xs-r-145 {
        padding-right: 145px;
    }

    .p-xs-l-145 {
        padding-left: 145px;
    }

    .m-xs-b-145 {
        margin-bottom: 145px;
    }

    .m-xs-t-145 {
        margin-top: 145px;
    }

    .m-xs-r-145 {
        margin-right: 145px;
    }

    .m-xs-l-145 {
        margin-left: 145px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-150 {
        padding-bottom: 150px;
    }

    .p-lg-t-150 {
        padding-top: 150px;
    }

    .p-lg-r-150 {
        padding-right: 150px;
    }

    .p-lg-l-150 {
        padding-left: 150px;
    }

    .m-lg-b-150 {
        margin-bottom: 150px;
    }

    .m-lg-t-150 {
        margin-top: 150px;
    }

    .m-lg-r-150 {
        margin-right: 150px;
    }

    .m-lg-l-150 {
        margin-left: 150px;
    }
}

@media (max-width: 991px) {
    .p-md-b-150 {
        padding-bottom: 150px;
    }

    .p-md-t-150 {
        padding-top: 150px;
    }

    .p-md-r-150 {
        padding-right: 150px;
    }

    .p-md-l-150 {
        padding-left: 150px;
    }

    .m-md-b-150 {
        margin-bottom: 150px;
    }

    .m-md-t-150 {
        margin-top: 150px;
    }

    .m-md-r-150 {
        margin-right: 150px;
    }

    .m-md-l-150 {
        margin-left: 150px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-150 {
        padding-bottom: 150px;
    }

    .p-sm-t-150 {
        padding-top: 150px;
    }

    .p-sm-r-150 {
        padding-right: 150px;
    }

    .p-sm-l-150 {
        padding-left: 150px;
    }

    .m-sm-b-150 {
        margin-bottom: 150px;
    }

    .m-sm-t-150 {
        margin-top: 150px;
    }

    .m-sm-r-150 {
        margin-right: 150px;
    }

    .m-sm-l-150 {
        margin-left: 150px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-150 {
        padding-bottom: 150px;
    }

    .p-xs-t-150 {
        padding-top: 150px;
    }

    .p-xs-r-150 {
        padding-right: 150px;
    }

    .p-xs-l-150 {
        padding-left: 150px;
    }

    .m-xs-b-150 {
        margin-bottom: 150px;
    }

    .m-xs-t-150 {
        margin-top: 150px;
    }

    .m-xs-r-150 {
        margin-right: 150px;
    }

    .m-xs-l-150 {
        margin-left: 150px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-155 {
        padding-bottom: 155px;
    }

    .p-lg-t-155 {
        padding-top: 155px;
    }

    .p-lg-r-155 {
        padding-right: 155px;
    }

    .p-lg-l-155 {
        padding-left: 155px;
    }

    .m-lg-b-155 {
        margin-bottom: 155px;
    }

    .m-lg-t-155 {
        margin-top: 155px;
    }

    .m-lg-r-155 {
        margin-right: 155px;
    }

    .m-lg-l-155 {
        margin-left: 155px;
    }
}

@media (max-width: 991px) {
    .p-md-b-155 {
        padding-bottom: 155px;
    }

    .p-md-t-155 {
        padding-top: 155px;
    }

    .p-md-r-155 {
        padding-right: 155px;
    }

    .p-md-l-155 {
        padding-left: 155px;
    }

    .m-md-b-155 {
        margin-bottom: 155px;
    }

    .m-md-t-155 {
        margin-top: 155px;
    }

    .m-md-r-155 {
        margin-right: 155px;
    }

    .m-md-l-155 {
        margin-left: 155px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-155 {
        padding-bottom: 155px;
    }

    .p-sm-t-155 {
        padding-top: 155px;
    }

    .p-sm-r-155 {
        padding-right: 155px;
    }

    .p-sm-l-155 {
        padding-left: 155px;
    }

    .m-sm-b-155 {
        margin-bottom: 155px;
    }

    .m-sm-t-155 {
        margin-top: 155px;
    }

    .m-sm-r-155 {
        margin-right: 155px;
    }

    .m-sm-l-155 {
        margin-left: 155px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-155 {
        padding-bottom: 155px;
    }

    .p-xs-t-155 {
        padding-top: 155px;
    }

    .p-xs-r-155 {
        padding-right: 155px;
    }

    .p-xs-l-155 {
        padding-left: 155px;
    }

    .m-xs-b-155 {
        margin-bottom: 155px;
    }

    .m-xs-t-155 {
        margin-top: 155px;
    }

    .m-xs-r-155 {
        margin-right: 155px;
    }

    .m-xs-l-155 {
        margin-left: 155px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-160 {
        padding-bottom: 160px;
    }

    .p-lg-t-160 {
        padding-top: 160px;
    }

    .p-lg-r-160 {
        padding-right: 160px;
    }

    .p-lg-l-160 {
        padding-left: 160px;
    }

    .m-lg-b-160 {
        margin-bottom: 160px;
    }

    .m-lg-t-160 {
        margin-top: 160px;
    }

    .m-lg-r-160 {
        margin-right: 160px;
    }

    .m-lg-l-160 {
        margin-left: 160px;
    }
}

@media (max-width: 991px) {
    .p-md-b-160 {
        padding-bottom: 160px;
    }

    .p-md-t-160 {
        padding-top: 160px;
    }

    .p-md-r-160 {
        padding-right: 160px;
    }

    .p-md-l-160 {
        padding-left: 160px;
    }

    .m-md-b-160 {
        margin-bottom: 160px;
    }

    .m-md-t-160 {
        margin-top: 160px;
    }

    .m-md-r-160 {
        margin-right: 160px;
    }

    .m-md-l-160 {
        margin-left: 160px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-160 {
        padding-bottom: 160px;
    }

    .p-sm-t-160 {
        padding-top: 160px;
    }

    .p-sm-r-160 {
        padding-right: 160px;
    }

    .p-sm-l-160 {
        padding-left: 160px;
    }

    .m-sm-b-160 {
        margin-bottom: 160px;
    }

    .m-sm-t-160 {
        margin-top: 160px;
    }

    .m-sm-r-160 {
        margin-right: 160px;
    }

    .m-sm-l-160 {
        margin-left: 160px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-160 {
        padding-bottom: 160px;
    }

    .p-xs-t-160 {
        padding-top: 160px;
    }

    .p-xs-r-160 {
        padding-right: 160px;
    }

    .p-xs-l-160 {
        padding-left: 160px;
    }

    .m-xs-b-160 {
        margin-bottom: 160px;
    }

    .m-xs-t-160 {
        margin-top: 160px;
    }

    .m-xs-r-160 {
        margin-right: 160px;
    }

    .m-xs-l-160 {
        margin-left: 160px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-165 {
        padding-bottom: 165px;
    }

    .p-lg-t-165 {
        padding-top: 165px;
    }

    .p-lg-r-165 {
        padding-right: 165px;
    }

    .p-lg-l-165 {
        padding-left: 165px;
    }

    .m-lg-b-165 {
        margin-bottom: 165px;
    }

    .m-lg-t-165 {
        margin-top: 165px;
    }

    .m-lg-r-165 {
        margin-right: 165px;
    }

    .m-lg-l-165 {
        margin-left: 165px;
    }
}

@media (max-width: 991px) {
    .p-md-b-165 {
        padding-bottom: 165px;
    }

    .p-md-t-165 {
        padding-top: 165px;
    }

    .p-md-r-165 {
        padding-right: 165px;
    }

    .p-md-l-165 {
        padding-left: 165px;
    }

    .m-md-b-165 {
        margin-bottom: 165px;
    }

    .m-md-t-165 {
        margin-top: 165px;
    }

    .m-md-r-165 {
        margin-right: 165px;
    }

    .m-md-l-165 {
        margin-left: 165px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-165 {
        padding-bottom: 165px;
    }

    .p-sm-t-165 {
        padding-top: 165px;
    }

    .p-sm-r-165 {
        padding-right: 165px;
    }

    .p-sm-l-165 {
        padding-left: 165px;
    }

    .m-sm-b-165 {
        margin-bottom: 165px;
    }

    .m-sm-t-165 {
        margin-top: 165px;
    }

    .m-sm-r-165 {
        margin-right: 165px;
    }

    .m-sm-l-165 {
        margin-left: 165px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-165 {
        padding-bottom: 165px;
    }

    .p-xs-t-165 {
        padding-top: 165px;
    }

    .p-xs-r-165 {
        padding-right: 165px;
    }

    .p-xs-l-165 {
        padding-left: 165px;
    }

    .m-xs-b-165 {
        margin-bottom: 165px;
    }

    .m-xs-t-165 {
        margin-top: 165px;
    }

    .m-xs-r-165 {
        margin-right: 165px;
    }

    .m-xs-l-165 {
        margin-left: 165px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-170 {
        padding-bottom: 170px;
    }

    .p-lg-t-170 {
        padding-top: 170px;
    }

    .p-lg-r-170 {
        padding-right: 170px;
    }

    .p-lg-l-170 {
        padding-left: 170px;
    }

    .m-lg-b-170 {
        margin-bottom: 170px;
    }

    .m-lg-t-170 {
        margin-top: 170px;
    }

    .m-lg-r-170 {
        margin-right: 170px;
    }

    .m-lg-l-170 {
        margin-left: 170px;
    }
}

@media (max-width: 991px) {
    .p-md-b-170 {
        padding-bottom: 170px;
    }

    .p-md-t-170 {
        padding-top: 170px;
    }

    .p-md-r-170 {
        padding-right: 170px;
    }

    .p-md-l-170 {
        padding-left: 170px;
    }

    .m-md-b-170 {
        margin-bottom: 170px;
    }

    .m-md-t-170 {
        margin-top: 170px;
    }

    .m-md-r-170 {
        margin-right: 170px;
    }

    .m-md-l-170 {
        margin-left: 170px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-170 {
        padding-bottom: 170px;
    }

    .p-sm-t-170 {
        padding-top: 170px;
    }

    .p-sm-r-170 {
        padding-right: 170px;
    }

    .p-sm-l-170 {
        padding-left: 170px;
    }

    .m-sm-b-170 {
        margin-bottom: 170px;
    }

    .m-sm-t-170 {
        margin-top: 170px;
    }

    .m-sm-r-170 {
        margin-right: 170px;
    }

    .m-sm-l-170 {
        margin-left: 170px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-170 {
        padding-bottom: 170px;
    }

    .p-xs-t-170 {
        padding-top: 170px;
    }

    .p-xs-r-170 {
        padding-right: 170px;
    }

    .p-xs-l-170 {
        padding-left: 170px;
    }

    .m-xs-b-170 {
        margin-bottom: 170px;
    }

    .m-xs-t-170 {
        margin-top: 170px;
    }

    .m-xs-r-170 {
        margin-right: 170px;
    }

    .m-xs-l-170 {
        margin-left: 170px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-175 {
        padding-bottom: 175px;
    }

    .p-lg-t-175 {
        padding-top: 175px;
    }

    .p-lg-r-175 {
        padding-right: 175px;
    }

    .p-lg-l-175 {
        padding-left: 175px;
    }

    .m-lg-b-175 {
        margin-bottom: 175px;
    }

    .m-lg-t-175 {
        margin-top: 175px;
    }

    .m-lg-r-175 {
        margin-right: 175px;
    }

    .m-lg-l-175 {
        margin-left: 175px;
    }
}

@media (max-width: 991px) {
    .p-md-b-175 {
        padding-bottom: 175px;
    }

    .p-md-t-175 {
        padding-top: 175px;
    }

    .p-md-r-175 {
        padding-right: 175px;
    }

    .p-md-l-175 {
        padding-left: 175px;
    }

    .m-md-b-175 {
        margin-bottom: 175px;
    }

    .m-md-t-175 {
        margin-top: 175px;
    }

    .m-md-r-175 {
        margin-right: 175px;
    }

    .m-md-l-175 {
        margin-left: 175px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-175 {
        padding-bottom: 175px;
    }

    .p-sm-t-175 {
        padding-top: 175px;
    }

    .p-sm-r-175 {
        padding-right: 175px;
    }

    .p-sm-l-175 {
        padding-left: 175px;
    }

    .m-sm-b-175 {
        margin-bottom: 175px;
    }

    .m-sm-t-175 {
        margin-top: 175px;
    }

    .m-sm-r-175 {
        margin-right: 175px;
    }

    .m-sm-l-175 {
        margin-left: 175px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-175 {
        padding-bottom: 175px;
    }

    .p-xs-t-175 {
        padding-top: 175px;
    }

    .p-xs-r-175 {
        padding-right: 175px;
    }

    .p-xs-l-175 {
        padding-left: 175px;
    }

    .m-xs-b-175 {
        margin-bottom: 175px;
    }

    .m-xs-t-175 {
        margin-top: 175px;
    }

    .m-xs-r-175 {
        margin-right: 175px;
    }

    .m-xs-l-175 {
        margin-left: 175px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-180 {
        padding-bottom: 180px;
    }

    .p-lg-t-180 {
        padding-top: 180px;
    }

    .p-lg-r-180 {
        padding-right: 180px;
    }

    .p-lg-l-180 {
        padding-left: 180px;
    }

    .m-lg-b-180 {
        margin-bottom: 180px;
    }

    .m-lg-t-180 {
        margin-top: 180px;
    }

    .m-lg-r-180 {
        margin-right: 180px;
    }

    .m-lg-l-180 {
        margin-left: 180px;
    }
}

@media (max-width: 991px) {
    .p-md-b-180 {
        padding-bottom: 180px;
    }

    .p-md-t-180 {
        padding-top: 180px;
    }

    .p-md-r-180 {
        padding-right: 180px;
    }

    .p-md-l-180 {
        padding-left: 180px;
    }

    .m-md-b-180 {
        margin-bottom: 180px;
    }

    .m-md-t-180 {
        margin-top: 180px;
    }

    .m-md-r-180 {
        margin-right: 180px;
    }

    .m-md-l-180 {
        margin-left: 180px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-180 {
        padding-bottom: 180px;
    }

    .p-sm-t-180 {
        padding-top: 180px;
    }

    .p-sm-r-180 {
        padding-right: 180px;
    }

    .p-sm-l-180 {
        padding-left: 180px;
    }

    .m-sm-b-180 {
        margin-bottom: 180px;
    }

    .m-sm-t-180 {
        margin-top: 180px;
    }

    .m-sm-r-180 {
        margin-right: 180px;
    }

    .m-sm-l-180 {
        margin-left: 180px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-180 {
        padding-bottom: 180px;
    }

    .p-xs-t-180 {
        padding-top: 180px;
    }

    .p-xs-r-180 {
        padding-right: 180px;
    }

    .p-xs-l-180 {
        padding-left: 180px;
    }

    .m-xs-b-180 {
        margin-bottom: 180px;
    }

    .m-xs-t-180 {
        margin-top: 180px;
    }

    .m-xs-r-180 {
        margin-right: 180px;
    }

    .m-xs-l-180 {
        margin-left: 180px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-185 {
        padding-bottom: 185px;
    }

    .p-lg-t-185 {
        padding-top: 185px;
    }

    .p-lg-r-185 {
        padding-right: 185px;
    }

    .p-lg-l-185 {
        padding-left: 185px;
    }

    .m-lg-b-185 {
        margin-bottom: 185px;
    }

    .m-lg-t-185 {
        margin-top: 185px;
    }

    .m-lg-r-185 {
        margin-right: 185px;
    }

    .m-lg-l-185 {
        margin-left: 185px;
    }
}

@media (max-width: 991px) {
    .p-md-b-185 {
        padding-bottom: 185px;
    }

    .p-md-t-185 {
        padding-top: 185px;
    }

    .p-md-r-185 {
        padding-right: 185px;
    }

    .p-md-l-185 {
        padding-left: 185px;
    }

    .m-md-b-185 {
        margin-bottom: 185px;
    }

    .m-md-t-185 {
        margin-top: 185px;
    }

    .m-md-r-185 {
        margin-right: 185px;
    }

    .m-md-l-185 {
        margin-left: 185px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-185 {
        padding-bottom: 185px;
    }

    .p-sm-t-185 {
        padding-top: 185px;
    }

    .p-sm-r-185 {
        padding-right: 185px;
    }

    .p-sm-l-185 {
        padding-left: 185px;
    }

    .m-sm-b-185 {
        margin-bottom: 185px;
    }

    .m-sm-t-185 {
        margin-top: 185px;
    }

    .m-sm-r-185 {
        margin-right: 185px;
    }

    .m-sm-l-185 {
        margin-left: 185px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-185 {
        padding-bottom: 185px;
    }

    .p-xs-t-185 {
        padding-top: 185px;
    }

    .p-xs-r-185 {
        padding-right: 185px;
    }

    .p-xs-l-185 {
        padding-left: 185px;
    }

    .m-xs-b-185 {
        margin-bottom: 185px;
    }

    .m-xs-t-185 {
        margin-top: 185px;
    }

    .m-xs-r-185 {
        margin-right: 185px;
    }

    .m-xs-l-185 {
        margin-left: 185px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-190 {
        padding-bottom: 190px;
    }

    .p-lg-t-190 {
        padding-top: 190px;
    }

    .p-lg-r-190 {
        padding-right: 190px;
    }

    .p-lg-l-190 {
        padding-left: 190px;
    }

    .m-lg-b-190 {
        margin-bottom: 190px;
    }

    .m-lg-t-190 {
        margin-top: 190px;
    }

    .m-lg-r-190 {
        margin-right: 190px;
    }

    .m-lg-l-190 {
        margin-left: 190px;
    }
}

@media (max-width: 991px) {
    .p-md-b-190 {
        padding-bottom: 190px;
    }

    .p-md-t-190 {
        padding-top: 190px;
    }

    .p-md-r-190 {
        padding-right: 190px;
    }

    .p-md-l-190 {
        padding-left: 190px;
    }

    .m-md-b-190 {
        margin-bottom: 190px;
    }

    .m-md-t-190 {
        margin-top: 190px;
    }

    .m-md-r-190 {
        margin-right: 190px;
    }

    .m-md-l-190 {
        margin-left: 190px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-190 {
        padding-bottom: 190px;
    }

    .p-sm-t-190 {
        padding-top: 190px;
    }

    .p-sm-r-190 {
        padding-right: 190px;
    }

    .p-sm-l-190 {
        padding-left: 190px;
    }

    .m-sm-b-190 {
        margin-bottom: 190px;
    }

    .m-sm-t-190 {
        margin-top: 190px;
    }

    .m-sm-r-190 {
        margin-right: 190px;
    }

    .m-sm-l-190 {
        margin-left: 190px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-190 {
        padding-bottom: 190px;
    }

    .p-xs-t-190 {
        padding-top: 190px;
    }

    .p-xs-r-190 {
        padding-right: 190px;
    }

    .p-xs-l-190 {
        padding-left: 190px;
    }

    .m-xs-b-190 {
        margin-bottom: 190px;
    }

    .m-xs-t-190 {
        margin-top: 190px;
    }

    .m-xs-r-190 {
        margin-right: 190px;
    }

    .m-xs-l-190 {
        margin-left: 190px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-195 {
        padding-bottom: 195px;
    }

    .p-lg-t-195 {
        padding-top: 195px;
    }

    .p-lg-r-195 {
        padding-right: 195px;
    }

    .p-lg-l-195 {
        padding-left: 195px;
    }

    .m-lg-b-195 {
        margin-bottom: 195px;
    }

    .m-lg-t-195 {
        margin-top: 195px;
    }

    .m-lg-r-195 {
        margin-right: 195px;
    }

    .m-lg-l-195 {
        margin-left: 195px;
    }
}

@media (max-width: 991px) {
    .p-md-b-195 {
        padding-bottom: 195px;
    }

    .p-md-t-195 {
        padding-top: 195px;
    }

    .p-md-r-195 {
        padding-right: 195px;
    }

    .p-md-l-195 {
        padding-left: 195px;
    }

    .m-md-b-195 {
        margin-bottom: 195px;
    }

    .m-md-t-195 {
        margin-top: 195px;
    }

    .m-md-r-195 {
        margin-right: 195px;
    }

    .m-md-l-195 {
        margin-left: 195px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-195 {
        padding-bottom: 195px;
    }

    .p-sm-t-195 {
        padding-top: 195px;
    }

    .p-sm-r-195 {
        padding-right: 195px;
    }

    .p-sm-l-195 {
        padding-left: 195px;
    }

    .m-sm-b-195 {
        margin-bottom: 195px;
    }

    .m-sm-t-195 {
        margin-top: 195px;
    }

    .m-sm-r-195 {
        margin-right: 195px;
    }

    .m-sm-l-195 {
        margin-left: 195px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-195 {
        padding-bottom: 195px;
    }

    .p-xs-t-195 {
        padding-top: 195px;
    }

    .p-xs-r-195 {
        padding-right: 195px;
    }

    .p-xs-l-195 {
        padding-left: 195px;
    }

    .m-xs-b-195 {
        margin-bottom: 195px;
    }

    .m-xs-t-195 {
        margin-top: 195px;
    }

    .m-xs-r-195 {
        margin-right: 195px;
    }

    .m-xs-l-195 {
        margin-left: 195px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-200 {
        padding-bottom: 200px;
    }

    .p-lg-t-200 {
        padding-top: 200px;
    }

    .p-lg-r-200 {
        padding-right: 200px;
    }

    .p-lg-l-200 {
        padding-left: 200px;
    }

    .m-lg-b-200 {
        margin-bottom: 200px;
    }

    .m-lg-t-200 {
        margin-top: 200px;
    }

    .m-lg-r-200 {
        margin-right: 200px;
    }

    .m-lg-l-200 {
        margin-left: 200px;
    }
}

@media (max-width: 991px) {
    .p-md-b-200 {
        padding-bottom: 200px;
    }

    .p-md-t-200 {
        padding-top: 200px;
    }

    .p-md-r-200 {
        padding-right: 200px;
    }

    .p-md-l-200 {
        padding-left: 200px;
    }

    .m-md-b-200 {
        margin-bottom: 200px;
    }

    .m-md-t-200 {
        margin-top: 200px;
    }

    .m-md-r-200 {
        margin-right: 200px;
    }

    .m-md-l-200 {
        margin-left: 200px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-200 {
        padding-bottom: 200px;
    }

    .p-sm-t-200 {
        padding-top: 200px;
    }

    .p-sm-r-200 {
        padding-right: 200px;
    }

    .p-sm-l-200 {
        padding-left: 200px;
    }

    .m-sm-b-200 {
        margin-bottom: 200px;
    }

    .m-sm-t-200 {
        margin-top: 200px;
    }

    .m-sm-r-200 {
        margin-right: 200px;
    }

    .m-sm-l-200 {
        margin-left: 200px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-200 {
        padding-bottom: 200px;
    }

    .p-xs-t-200 {
        padding-top: 200px;
    }

    .p-xs-r-200 {
        padding-right: 200px;
    }

    .p-xs-l-200 {
        padding-left: 200px;
    }

    .m-xs-b-200 {
        margin-bottom: 200px;
    }

    .m-xs-t-200 {
        margin-top: 200px;
    }

    .m-xs-r-200 {
        margin-right: 200px;
    }

    .m-xs-l-200 {
        margin-left: 200px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-205 {
        padding-bottom: 205px;
    }

    .p-lg-t-205 {
        padding-top: 205px;
    }

    .p-lg-r-205 {
        padding-right: 205px;
    }

    .p-lg-l-205 {
        padding-left: 205px;
    }

    .m-lg-b-205 {
        margin-bottom: 205px;
    }

    .m-lg-t-205 {
        margin-top: 205px;
    }

    .m-lg-r-205 {
        margin-right: 205px;
    }

    .m-lg-l-205 {
        margin-left: 205px;
    }
}

@media (max-width: 991px) {
    .p-md-b-205 {
        padding-bottom: 205px;
    }

    .p-md-t-205 {
        padding-top: 205px;
    }

    .p-md-r-205 {
        padding-right: 205px;
    }

    .p-md-l-205 {
        padding-left: 205px;
    }

    .m-md-b-205 {
        margin-bottom: 205px;
    }

    .m-md-t-205 {
        margin-top: 205px;
    }

    .m-md-r-205 {
        margin-right: 205px;
    }

    .m-md-l-205 {
        margin-left: 205px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-205 {
        padding-bottom: 205px;
    }

    .p-sm-t-205 {
        padding-top: 205px;
    }

    .p-sm-r-205 {
        padding-right: 205px;
    }

    .p-sm-l-205 {
        padding-left: 205px;
    }

    .m-sm-b-205 {
        margin-bottom: 205px;
    }

    .m-sm-t-205 {
        margin-top: 205px;
    }

    .m-sm-r-205 {
        margin-right: 205px;
    }

    .m-sm-l-205 {
        margin-left: 205px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-205 {
        padding-bottom: 205px;
    }

    .p-xs-t-205 {
        padding-top: 205px;
    }

    .p-xs-r-205 {
        padding-right: 205px;
    }

    .p-xs-l-205 {
        padding-left: 205px;
    }

    .m-xs-b-205 {
        margin-bottom: 205px;
    }

    .m-xs-t-205 {
        margin-top: 205px;
    }

    .m-xs-r-205 {
        margin-right: 205px;
    }

    .m-xs-l-205 {
        margin-left: 205px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-210 {
        padding-bottom: 210px;
    }

    .p-lg-t-210 {
        padding-top: 210px;
    }

    .p-lg-r-210 {
        padding-right: 210px;
    }

    .p-lg-l-210 {
        padding-left: 210px;
    }

    .m-lg-b-210 {
        margin-bottom: 210px;
    }

    .m-lg-t-210 {
        margin-top: 210px;
    }

    .m-lg-r-210 {
        margin-right: 210px;
    }

    .m-lg-l-210 {
        margin-left: 210px;
    }
}

@media (max-width: 991px) {
    .p-md-b-210 {
        padding-bottom: 210px;
    }

    .p-md-t-210 {
        padding-top: 210px;
    }

    .p-md-r-210 {
        padding-right: 210px;
    }

    .p-md-l-210 {
        padding-left: 210px;
    }

    .m-md-b-210 {
        margin-bottom: 210px;
    }

    .m-md-t-210 {
        margin-top: 210px;
    }

    .m-md-r-210 {
        margin-right: 210px;
    }

    .m-md-l-210 {
        margin-left: 210px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-210 {
        padding-bottom: 210px;
    }

    .p-sm-t-210 {
        padding-top: 210px;
    }

    .p-sm-r-210 {
        padding-right: 210px;
    }

    .p-sm-l-210 {
        padding-left: 210px;
    }

    .m-sm-b-210 {
        margin-bottom: 210px;
    }

    .m-sm-t-210 {
        margin-top: 210px;
    }

    .m-sm-r-210 {
        margin-right: 210px;
    }

    .m-sm-l-210 {
        margin-left: 210px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-210 {
        padding-bottom: 210px;
    }

    .p-xs-t-210 {
        padding-top: 210px;
    }

    .p-xs-r-210 {
        padding-right: 210px;
    }

    .p-xs-l-210 {
        padding-left: 210px;
    }

    .m-xs-b-210 {
        margin-bottom: 210px;
    }

    .m-xs-t-210 {
        margin-top: 210px;
    }

    .m-xs-r-210 {
        margin-right: 210px;
    }

    .m-xs-l-210 {
        margin-left: 210px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-215 {
        padding-bottom: 215px;
    }

    .p-lg-t-215 {
        padding-top: 215px;
    }

    .p-lg-r-215 {
        padding-right: 215px;
    }

    .p-lg-l-215 {
        padding-left: 215px;
    }

    .m-lg-b-215 {
        margin-bottom: 215px;
    }

    .m-lg-t-215 {
        margin-top: 215px;
    }

    .m-lg-r-215 {
        margin-right: 215px;
    }

    .m-lg-l-215 {
        margin-left: 215px;
    }
}

@media (max-width: 991px) {
    .p-md-b-215 {
        padding-bottom: 215px;
    }

    .p-md-t-215 {
        padding-top: 215px;
    }

    .p-md-r-215 {
        padding-right: 215px;
    }

    .p-md-l-215 {
        padding-left: 215px;
    }

    .m-md-b-215 {
        margin-bottom: 215px;
    }

    .m-md-t-215 {
        margin-top: 215px;
    }

    .m-md-r-215 {
        margin-right: 215px;
    }

    .m-md-l-215 {
        margin-left: 215px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-215 {
        padding-bottom: 215px;
    }

    .p-sm-t-215 {
        padding-top: 215px;
    }

    .p-sm-r-215 {
        padding-right: 215px;
    }

    .p-sm-l-215 {
        padding-left: 215px;
    }

    .m-sm-b-215 {
        margin-bottom: 215px;
    }

    .m-sm-t-215 {
        margin-top: 215px;
    }

    .m-sm-r-215 {
        margin-right: 215px;
    }

    .m-sm-l-215 {
        margin-left: 215px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-215 {
        padding-bottom: 215px;
    }

    .p-xs-t-215 {
        padding-top: 215px;
    }

    .p-xs-r-215 {
        padding-right: 215px;
    }

    .p-xs-l-215 {
        padding-left: 215px;
    }

    .m-xs-b-215 {
        margin-bottom: 215px;
    }

    .m-xs-t-215 {
        margin-top: 215px;
    }

    .m-xs-r-215 {
        margin-right: 215px;
    }

    .m-xs-l-215 {
        margin-left: 215px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-220 {
        padding-bottom: 220px;
    }

    .p-lg-t-220 {
        padding-top: 220px;
    }

    .p-lg-r-220 {
        padding-right: 220px;
    }

    .p-lg-l-220 {
        padding-left: 220px;
    }

    .m-lg-b-220 {
        margin-bottom: 220px;
    }

    .m-lg-t-220 {
        margin-top: 220px;
    }

    .m-lg-r-220 {
        margin-right: 220px;
    }

    .m-lg-l-220 {
        margin-left: 220px;
    }
}

@media (max-width: 991px) {
    .p-md-b-220 {
        padding-bottom: 220px;
    }

    .p-md-t-220 {
        padding-top: 220px;
    }

    .p-md-r-220 {
        padding-right: 220px;
    }

    .p-md-l-220 {
        padding-left: 220px;
    }

    .m-md-b-220 {
        margin-bottom: 220px;
    }

    .m-md-t-220 {
        margin-top: 220px;
    }

    .m-md-r-220 {
        margin-right: 220px;
    }

    .m-md-l-220 {
        margin-left: 220px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-220 {
        padding-bottom: 220px;
    }

    .p-sm-t-220 {
        padding-top: 220px;
    }

    .p-sm-r-220 {
        padding-right: 220px;
    }

    .p-sm-l-220 {
        padding-left: 220px;
    }

    .m-sm-b-220 {
        margin-bottom: 220px;
    }

    .m-sm-t-220 {
        margin-top: 220px;
    }

    .m-sm-r-220 {
        margin-right: 220px;
    }

    .m-sm-l-220 {
        margin-left: 220px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-220 {
        padding-bottom: 220px;
    }

    .p-xs-t-220 {
        padding-top: 220px;
    }

    .p-xs-r-220 {
        padding-right: 220px;
    }

    .p-xs-l-220 {
        padding-left: 220px;
    }

    .m-xs-b-220 {
        margin-bottom: 220px;
    }

    .m-xs-t-220 {
        margin-top: 220px;
    }

    .m-xs-r-220 {
        margin-right: 220px;
    }

    .m-xs-l-220 {
        margin-left: 220px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-225 {
        padding-bottom: 225px;
    }

    .p-lg-t-225 {
        padding-top: 225px;
    }

    .p-lg-r-225 {
        padding-right: 225px;
    }

    .p-lg-l-225 {
        padding-left: 225px;
    }

    .m-lg-b-225 {
        margin-bottom: 225px;
    }

    .m-lg-t-225 {
        margin-top: 225px;
    }

    .m-lg-r-225 {
        margin-right: 225px;
    }

    .m-lg-l-225 {
        margin-left: 225px;
    }
}

@media (max-width: 991px) {
    .p-md-b-225 {
        padding-bottom: 225px;
    }

    .p-md-t-225 {
        padding-top: 225px;
    }

    .p-md-r-225 {
        padding-right: 225px;
    }

    .p-md-l-225 {
        padding-left: 225px;
    }

    .m-md-b-225 {
        margin-bottom: 225px;
    }

    .m-md-t-225 {
        margin-top: 225px;
    }

    .m-md-r-225 {
        margin-right: 225px;
    }

    .m-md-l-225 {
        margin-left: 225px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-225 {
        padding-bottom: 225px;
    }

    .p-sm-t-225 {
        padding-top: 225px;
    }

    .p-sm-r-225 {
        padding-right: 225px;
    }

    .p-sm-l-225 {
        padding-left: 225px;
    }

    .m-sm-b-225 {
        margin-bottom: 225px;
    }

    .m-sm-t-225 {
        margin-top: 225px;
    }

    .m-sm-r-225 {
        margin-right: 225px;
    }

    .m-sm-l-225 {
        margin-left: 225px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-225 {
        padding-bottom: 225px;
    }

    .p-xs-t-225 {
        padding-top: 225px;
    }

    .p-xs-r-225 {
        padding-right: 225px;
    }

    .p-xs-l-225 {
        padding-left: 225px;
    }

    .m-xs-b-225 {
        margin-bottom: 225px;
    }

    .m-xs-t-225 {
        margin-top: 225px;
    }

    .m-xs-r-225 {
        margin-right: 225px;
    }

    .m-xs-l-225 {
        margin-left: 225px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-230 {
        padding-bottom: 230px;
    }

    .p-lg-t-230 {
        padding-top: 230px;
    }

    .p-lg-r-230 {
        padding-right: 230px;
    }

    .p-lg-l-230 {
        padding-left: 230px;
    }

    .m-lg-b-230 {
        margin-bottom: 230px;
    }

    .m-lg-t-230 {
        margin-top: 230px;
    }

    .m-lg-r-230 {
        margin-right: 230px;
    }

    .m-lg-l-230 {
        margin-left: 230px;
    }
}

@media (max-width: 991px) {
    .p-md-b-230 {
        padding-bottom: 230px;
    }

    .p-md-t-230 {
        padding-top: 230px;
    }

    .p-md-r-230 {
        padding-right: 230px;
    }

    .p-md-l-230 {
        padding-left: 230px;
    }

    .m-md-b-230 {
        margin-bottom: 230px;
    }

    .m-md-t-230 {
        margin-top: 230px;
    }

    .m-md-r-230 {
        margin-right: 230px;
    }

    .m-md-l-230 {
        margin-left: 230px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-230 {
        padding-bottom: 230px;
    }

    .p-sm-t-230 {
        padding-top: 230px;
    }

    .p-sm-r-230 {
        padding-right: 230px;
    }

    .p-sm-l-230 {
        padding-left: 230px;
    }

    .m-sm-b-230 {
        margin-bottom: 230px;
    }

    .m-sm-t-230 {
        margin-top: 230px;
    }

    .m-sm-r-230 {
        margin-right: 230px;
    }

    .m-sm-l-230 {
        margin-left: 230px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-230 {
        padding-bottom: 230px;
    }

    .p-xs-t-230 {
        padding-top: 230px;
    }

    .p-xs-r-230 {
        padding-right: 230px;
    }

    .p-xs-l-230 {
        padding-left: 230px;
    }

    .m-xs-b-230 {
        margin-bottom: 230px;
    }

    .m-xs-t-230 {
        margin-top: 230px;
    }

    .m-xs-r-230 {
        margin-right: 230px;
    }

    .m-xs-l-230 {
        margin-left: 230px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-235 {
        padding-bottom: 235px;
    }

    .p-lg-t-235 {
        padding-top: 235px;
    }

    .p-lg-r-235 {
        padding-right: 235px;
    }

    .p-lg-l-235 {
        padding-left: 235px;
    }

    .m-lg-b-235 {
        margin-bottom: 235px;
    }

    .m-lg-t-235 {
        margin-top: 235px;
    }

    .m-lg-r-235 {
        margin-right: 235px;
    }

    .m-lg-l-235 {
        margin-left: 235px;
    }
}

@media (max-width: 991px) {
    .p-md-b-235 {
        padding-bottom: 235px;
    }

    .p-md-t-235 {
        padding-top: 235px;
    }

    .p-md-r-235 {
        padding-right: 235px;
    }

    .p-md-l-235 {
        padding-left: 235px;
    }

    .m-md-b-235 {
        margin-bottom: 235px;
    }

    .m-md-t-235 {
        margin-top: 235px;
    }

    .m-md-r-235 {
        margin-right: 235px;
    }

    .m-md-l-235 {
        margin-left: 235px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-235 {
        padding-bottom: 235px;
    }

    .p-sm-t-235 {
        padding-top: 235px;
    }

    .p-sm-r-235 {
        padding-right: 235px;
    }

    .p-sm-l-235 {
        padding-left: 235px;
    }

    .m-sm-b-235 {
        margin-bottom: 235px;
    }

    .m-sm-t-235 {
        margin-top: 235px;
    }

    .m-sm-r-235 {
        margin-right: 235px;
    }

    .m-sm-l-235 {
        margin-left: 235px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-235 {
        padding-bottom: 235px;
    }

    .p-xs-t-235 {
        padding-top: 235px;
    }

    .p-xs-r-235 {
        padding-right: 235px;
    }

    .p-xs-l-235 {
        padding-left: 235px;
    }

    .m-xs-b-235 {
        margin-bottom: 235px;
    }

    .m-xs-t-235 {
        margin-top: 235px;
    }

    .m-xs-r-235 {
        margin-right: 235px;
    }

    .m-xs-l-235 {
        margin-left: 235px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-240 {
        padding-bottom: 240px;
    }

    .p-lg-t-240 {
        padding-top: 240px;
    }

    .p-lg-r-240 {
        padding-right: 240px;
    }

    .p-lg-l-240 {
        padding-left: 240px;
    }

    .m-lg-b-240 {
        margin-bottom: 240px;
    }

    .m-lg-t-240 {
        margin-top: 240px;
    }

    .m-lg-r-240 {
        margin-right: 240px;
    }

    .m-lg-l-240 {
        margin-left: 240px;
    }
}

@media (max-width: 991px) {
    .p-md-b-240 {
        padding-bottom: 240px;
    }

    .p-md-t-240 {
        padding-top: 240px;
    }

    .p-md-r-240 {
        padding-right: 240px;
    }

    .p-md-l-240 {
        padding-left: 240px;
    }

    .m-md-b-240 {
        margin-bottom: 240px;
    }

    .m-md-t-240 {
        margin-top: 240px;
    }

    .m-md-r-240 {
        margin-right: 240px;
    }

    .m-md-l-240 {
        margin-left: 240px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-240 {
        padding-bottom: 240px;
    }

    .p-sm-t-240 {
        padding-top: 240px;
    }

    .p-sm-r-240 {
        padding-right: 240px;
    }

    .p-sm-l-240 {
        padding-left: 240px;
    }

    .m-sm-b-240 {
        margin-bottom: 240px;
    }

    .m-sm-t-240 {
        margin-top: 240px;
    }

    .m-sm-r-240 {
        margin-right: 240px;
    }

    .m-sm-l-240 {
        margin-left: 240px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-240 {
        padding-bottom: 240px;
    }

    .p-xs-t-240 {
        padding-top: 240px;
    }

    .p-xs-r-240 {
        padding-right: 240px;
    }

    .p-xs-l-240 {
        padding-left: 240px;
    }

    .m-xs-b-240 {
        margin-bottom: 240px;
    }

    .m-xs-t-240 {
        margin-top: 240px;
    }

    .m-xs-r-240 {
        margin-right: 240px;
    }

    .m-xs-l-240 {
        margin-left: 240px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-245 {
        padding-bottom: 245px;
    }

    .p-lg-t-245 {
        padding-top: 245px;
    }

    .p-lg-r-245 {
        padding-right: 245px;
    }

    .p-lg-l-245 {
        padding-left: 245px;
    }

    .m-lg-b-245 {
        margin-bottom: 245px;
    }

    .m-lg-t-245 {
        margin-top: 245px;
    }

    .m-lg-r-245 {
        margin-right: 245px;
    }

    .m-lg-l-245 {
        margin-left: 245px;
    }
}

@media (max-width: 991px) {
    .p-md-b-245 {
        padding-bottom: 245px;
    }

    .p-md-t-245 {
        padding-top: 245px;
    }

    .p-md-r-245 {
        padding-right: 245px;
    }

    .p-md-l-245 {
        padding-left: 245px;
    }

    .m-md-b-245 {
        margin-bottom: 245px;
    }

    .m-md-t-245 {
        margin-top: 245px;
    }

    .m-md-r-245 {
        margin-right: 245px;
    }

    .m-md-l-245 {
        margin-left: 245px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-245 {
        padding-bottom: 245px;
    }

    .p-sm-t-245 {
        padding-top: 245px;
    }

    .p-sm-r-245 {
        padding-right: 245px;
    }

    .p-sm-l-245 {
        padding-left: 245px;
    }

    .m-sm-b-245 {
        margin-bottom: 245px;
    }

    .m-sm-t-245 {
        margin-top: 245px;
    }

    .m-sm-r-245 {
        margin-right: 245px;
    }

    .m-sm-l-245 {
        margin-left: 245px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-245 {
        padding-bottom: 245px;
    }

    .p-xs-t-245 {
        padding-top: 245px;
    }

    .p-xs-r-245 {
        padding-right: 245px;
    }

    .p-xs-l-245 {
        padding-left: 245px;
    }

    .m-xs-b-245 {
        margin-bottom: 245px;
    }

    .m-xs-t-245 {
        margin-top: 245px;
    }

    .m-xs-r-245 {
        margin-right: 245px;
    }

    .m-xs-l-245 {
        margin-left: 245px;
    }
}

@media (max-width: 1023px) {
    .p-lg-b-250 {
        padding-bottom: 250px;
    }

    .p-lg-t-250 {
        padding-top: 250px;
    }

    .p-lg-r-250 {
        padding-right: 250px;
    }

    .p-lg-l-250 {
        padding-left: 250px;
    }

    .m-lg-b-250 {
        margin-bottom: 250px;
    }

    .m-lg-t-250 {
        margin-top: 250px;
    }

    .m-lg-r-250 {
        margin-right: 250px;
    }

    .m-lg-l-250 {
        margin-left: 250px;
    }
}

@media (max-width: 991px) {
    .p-md-b-250 {
        padding-bottom: 250px;
    }

    .p-md-t-250 {
        padding-top: 250px;
    }

    .p-md-r-250 {
        padding-right: 250px;
    }

    .p-md-l-250 {
        padding-left: 250px;
    }

    .m-md-b-250 {
        margin-bottom: 250px;
    }

    .m-md-t-250 {
        margin-top: 250px;
    }

    .m-md-r-250 {
        margin-right: 250px;
    }

    .m-md-l-250 {
        margin-left: 250px;
    }
}

@media (max-width: 767px) {
    .p-sm-b-250 {
        padding-bottom: 250px;
    }

    .p-sm-t-250 {
        padding-top: 250px;
    }

    .p-sm-r-250 {
        padding-right: 250px;
    }

    .p-sm-l-250 {
        padding-left: 250px;
    }

    .m-sm-b-250 {
        margin-bottom: 250px;
    }

    .m-sm-t-250 {
        margin-top: 250px;
    }

    .m-sm-r-250 {
        margin-right: 250px;
    }

    .m-sm-l-250 {
        margin-left: 250px;
    }
}

@media (max-width: 575px) {
    .p-xs-b-250 {
        padding-bottom: 250px;
    }

    .p-xs-t-250 {
        padding-top: 250px;
    }

    .p-xs-r-250 {
        padding-right: 250px;
    }

    .p-xs-l-250 {
        padding-left: 250px;
    }

    .m-xs-b-250 {
        margin-bottom: 250px;
    }

    .m-xs-t-250 {
        margin-top: 250px;
    }

    .m-xs-r-250 {
        margin-right: 250px;
    }

    .m-xs-l-250 {
        margin-left: 250px;
    }
}
/* Background*/
.bg-white {
    background: #fff;
}
.bg-dark {
    background: #23262e !important;
}
.bg-default{
   background: #8e9296;
}
.bg-main{
   background: #495056!important;
}


.shadow-login{
    box-shadow: 1px 1px 3px 0px #50575e;
}
.shadow{
    box-shadow:0px 2px 5px 1px #d0d0d0!important;
}
.bor-radius25rem{
    border-radius: .25rem;
}
.bor-radius100rem {
    border-radius: 100rem;
}
.bor-radius100{
    border-radius: 100%;
}
.bor-radius20{
    border-radius:20px;
}
.bor-radius10{
    border-radius: 10px;
}
.bor-radius5{
    border-radius: 5px;
}
.login-title{
  color:#1e2128;font-size: 100px;text-transform: uppercase; font-weight: 700; text-align: center
}
.login-back{
  background-image: url("../../../assets/images/dg4.jpg");
  height: 500px;
  background-color:#1e2128;
  background-position: center;
  background-size: 210% 150%;
  /*background-size: 120% 100%;*/

}
/*.login-form{
  background-image: url("../../../assets/images/logo.png");
  height: 500px;
  background-color: #fff;
  background-position: top;
  background-size: 50% 50%;
  background-repeat: no-repeat;
}*/
.body-login{
  background-color: #1e2128!important;
}

.btn-dark {
    color: #fff;
    background-color: #040811;
    border-color: #040811;
}


@-webkit-keyframes float {
  0% {
   
    -webkit-transform: translatey(0px);
            transform: translatey(0px);
  }
  50% {
    -webkit-transform: translatey(-20px);
            transform: translatey(-20px);
  }
  100% {
    -webkit-transform: translatey(0px);
            transform: translatey(0px);
  }
}

@keyframes float {
  0% {
    -webkit-transform: translatey(0px);
            transform: translatey(0px);
  }
  50% {
    -webkit-transform: translatey(-20px);
            transform: translatey(-20px);
  }
  100% {
    -webkit-transform: translatey(0px);
            transform: translatey(0px);
  }
}

.float {
  -webkit-animation: float 6s ease-in-out infinite;
          animation: float 6s ease-in-out infinite;
}
.text-primary{
  color: #7460ee;
}
.text-danger
{
  color: #f62d51;
}
.text-success
/*{
  color: green!important;
}*/
.text-info
{
  color: #009efb;
}
.text-warning
{
  color: #ffbc34
}
.text-secondary
{
  color: #aa66cc;
}
.text-white {
    color: #fff;
}
.back-white {
    background-color: #fff;
}
.text-dark {
    color: #343a40;
}
.text-dfault {
    color: #6c757d;
}
.text-dfault2 {
    color: #d8d8d8!important;
}
.tab {
  overflow: hidden;
  border: 1px solid #e2e2e2;
  background-color: #f1f1f1;
  border-bottom: none; 
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  color: #adb5bd;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
  color: #8a8a8a;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #4a5157;
  color: #fff;
}

/* Style the tab content */
.tabcontent {
  border: 1px solid #e2e2e2;
  width: 100%;
  /*border-left: none; */
  height: auto;
  max-height: auto;
  min-height: 510px;
  position: relative;
}
.proj-title{
  text-transform: uppercase;
}
.nobor-top
{
  border-top: 0px!important;
}

a table tr:hover{
  background-color: #495056!important;
  color: white!important;
  -webkit-animation-duration: 1s;
  transition: 0.6s;
  /* box-shadow: 0 0 0 10px rgba(219, 52, 59, 0)!important;*/
 /* animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite; 
  -webkit-animation-name: pulse_warning;
  animation-name: pulse_warning;   */
}

/*
@-webkit-keyframes pulse_warning {
  0% {
    -webkit-box-shadow: 0 0 0 0 rgba(219, 52, 59, 0.4);
  }
  70% {
      -webkit-box-shadow: 0 0 0 10px rgba(219, 52, 59, 0);
  }
  100% {
      -webkit-box-shadow: 0 0 0 0 rgba(219, 52, 59, 0);
  }
}
@keyframes pulse_warning {
  0% {
    -moz-box-shadow: 0 0 0 0 rgba(219, 52, 59, 0.4);
    box-shadow: 0 0 0 0 rgba(219, 52, 59, 0.4);
  }
  70% {
      -moz-box-shadow: 0 0 0 10px rgba(219, 52, 59, 0);
      box-shadow: 0 0 0 10px rgba(219, 52, 59, 0);
  }
  100% {
      -moz-box-shadow: 0 0 0 0 rgba(219, 52, 59, 0);
      box-shadow: 0 0 0 0 rgba(219, 52, 59, 0);
  }
}*/

@keyframes glowing {
  0% { box-shadow: 0 0 -10px red; }
  40% { box-shadow: 0 0 20px red; }
  60% { box-shadow: 0 0 20px red; }
  100% { box-shadow: 0 0 -10px red; }
}

.button-glow {
  animation: glowing 900ms infinite;
}
.fw500{
  font-weight: 500;
}
.fw600{
  font-weight: 600;
}
.fw700{
  font-weight: 700;
}
.fw800{
  font-weight: 800;
}
.fw900{
  font-weight: 900;
}
.fw1000{
  font-weight: 1000;
}

/*-----------------------accordion----------------------*/ 
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}

.accordion-ex {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 5px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}

.accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 10px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.panel-body{
  padding: 10px 0px;
}

/*-----------------------accordion----------------------*/ 

.va-top{
  vertical-align: top;
}
.va-bottom{
  vertical-align: bottom;
}
.va-middle{
  vertical-align: middle;
}
.sys-name{
  color: #9e9e9e;
  letter-spacing: 2px;
}

.backg{
  background-image: url("../../../assets/images/dg4.jpg")
}

.dropzone{
  min-height: 330px;
  border:1px solid #e5e5e5;
  width: 100%!important;
}
.borbottom{
  border-bottom: 1px solid #dee2e6!important;
}
.fixed_header{
    table-layout: fixed;
    border-collapse: collapse;
}

.fixed_header tbody{
  display:block;
  overflow: auto;
  height: 100px;
}

.fixed_header thead tr {
   display: block;
}

.fixed_header thead {
  background: white;
  color:#000;
}

.fixed_header th, .fixed_header td {
  padding: 5px;
 
}
.badge-jao{
  font-size: 12px;
  padding: 5px;
  height: 10px;
  width: 10px
}
.nosha{
  box-shadow: none;
}
.hover-high:hover{
  background: #d8d8d8!important;
}
</style><!-- 
<div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="" class="form-control" name="" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Input">
                    </div>    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-info-alt btn-block">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="export" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="" class="form-control" name="" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Input">
                    </div>    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-success-alt btn-block">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div> -->
>>>>>>> a5ee2806c2a37b37f4869dd47574f84332bc56de


<div class="page-wrapper">
    <div class="container-fluid" style="padding-bottom: 0px">
        <div class="card oh">
            <table class="table table-bordered" width="100%">
                <tr>
                    <td colspan="2">MARKET PRICES AND SCHEDULE</td>
                    <td colspan="1"></td>
                    <td colspan="10" rowspan="3" width="50%">
                        <div class="btn-group" style="padding: 0 5px 5px 5px;">
                            <button style="background:" class="btn btn-sm nosha"></button>
                            <button style="background: #ececec; width:100px" class="btn btn-sm nosha"></button>
                        </div>
                    </td>
                    <td rowspan="3" width="20%" align="center">
                        <a href="javascript:void(0);" class="btn btn-info-alt btn-sm" data-toggle="modal" data-target="#filter"><span class="fa fa-filter"></span>Filter</a>
                        <a href="javascript:void(0);" class="btn btn-success-alt btn-sm" data-toggle="modal" data-target="#export"><span class="fa fa-external-link"></span>Export</a>
                        <a href="<?php echo base_url(); ?>report/upload_rtd/" class="btn btn-warning-alt btn-sm"><span class="fa fa-upload"></span>Upload</a>
                    </td>
                </tr>
                <tr>
                    <td width="9%">START DATE:</td>
                    <td width="5%">2019-11-01</td>
                    <td width="5%"></td>
                </tr>
                <tr>
                    <td width="9%">END DATE:</td>
                    <td>2019-11-31</td>
                    <td width="5%"></td>
             
                </tr>
                <tr>
                    <td colspan="15"><br></td>
                </tr>
            </table>
            <div class="card-body" style="padding: 0px">
          
              <!--   <div style="overflow: scroll;height: 520px;background: white;" >
                    <table class="table table-bordered" width="100%">
                       <thead>                    
                            <tr>
                                <th rowspan="2" width="2%" class="va-bottom"><span class="m-l-5 m-r-5">Delivery_Hour</span></th>
                                <th rowspan="2" width="2%" class="va-bottom"><span class="m-l-5 m-r-5">Region_ID</span></th>
                                <th rowspan="2" width="2%" class="va-bottom"><span class="m-l-5 m-r-5">Type_ID</span></th>
                                <th rowspan="2" width="2%" class="va-bottom"><span class="m-l-5 m-r-5">Participant_ID</span></th>
                                <th rowspan="2" width="2%" class="va-bottom"><span class="m-l-5 m-r-5">Resource_ID</span></th>
<<<<<<< HEAD
                                <th colspan="3"><center></center></th>
=======
                                <?php for($x=1;$x<=$days;$x++){ ?>
                                <th colspan="3"><center><?php echo $x; ?></center></th>
                                <?php } ?>
>>>>>>> a5ee2806c2a37b37f4869dd47574f84332bc56de
                                         

                            </tr>
                            <tr>
<<<<<<< HEAD
                            <th><span class="m-l-60"></span> </th> 
=======
                                <?php for($x=1;$x<=$days;$x++){ ?>
                                <th><span class="m-l-60"></span> </th> 
>>>>>>> a5ee2806c2a37b37f4869dd47574f84332bc56de-->
                                <th><span class="m-l-20 m-r-20">MW</span></th>
                                <th><span class="m-l-30 m-r-30">Price</span></th>
                                <th><span class="m-l-20 m-r-20">Initial</span></th>                               
                            </tr>
                       </thead>
                       <tbody style="border-bottom: 2px solid #000!important">
                                <td align="center"><?php echo $rt->delivery_hour; ?></td>
                                <td align="center"><?php echo $rt->region_id; ?></td>
                                <td align="center"><?php echo $rt->type; ?></td>
                                <td align="center"><?php echo $rt->participant_id; ?></td>
                                <td align="center"><?php echo $rt->resource_id; ?></td>
 
                                     <?php for($x=1;$x<=$days;$x++){
                                        $date=$year."-".$month."-".str_pad($x, 2, "0", STR_PAD_LEFT); ?>
                                         <td><span class="m-l-20 m-r-20"><?php echo $ci->get_rtd_value("mw", $date, $rt->resource_id, $rt->delivery_hour,$rt->region_id); ?></span></td>
                                         <td><span class="m-l-30 m-r-30"><?php echo $ci->get_rtd_value("price", $date, $rt->resource_id, $rt->delivery_hour,$rt->region_id); ?> </span></td>
                                         <td><span class="m-l-20 m-r-20"><?php echo $ci->get_rtd_value("initial", $date, $rt->resource_id, $rt->delivery_hour,$rt->region_id); ?> </span></td> 
                                     <?php   
                                    } ?> 
                            </tr>
                            <?php } ?>
                       </tbody>
                    </table>
                </div> -->
            </div>      
        </div>  
    </div>
</div>