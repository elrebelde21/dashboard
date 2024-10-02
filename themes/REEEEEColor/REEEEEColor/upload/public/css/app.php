<?php

$maincolor = config("SETTINGS::CUSTOMTHEME:MAIN_COLOR", "#343a40");
$secondarycolor = config("SETTINGS::CUSTOMTHEME:SECONDARY_COLOR", "#454D55");
$accent_color = config("SETTINGS::CUSTOMTHEME:ACCENT_COLOR","#007bff");
?>

<style>

@import url(https://fonts.googleapis.com/css?family=Source + Sans + Pro:300, 400, 400i, 700&display=fallback);
::-webkit-scrollbar {
width: 8px;
height: 8px;
}
::-webkit-scrollbar-thumb {
background: #3a4047;
border-radius: 9px;
}
::-webkit-scrollbar-thumb:hover {
background: #2e3339;
}
::-webkit-scrollbar-track {
background: <?php echo $maincolor;?>;
border-radius: 10px;
box-shadow: inset 7px 10px 12px <?php echo $maincolor;?>;
}

/*!
*   AdminLTE v3.1.0-rc
*   Author: Colorlib
*   Website: AdminLTE.io <https://adminlte.io>
*   License: Open source - MIT <https://opensource.org/licenses/MIT>
*/ /*!
* Bootstrap v4.5.3 (https://getbootstrap.com/)
* Copyright 2011-2020 The Bootstrap Authors
* Copyright 2011-2020 Twitter, Inc.
* Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
*/
:root {
--blue: <?php echo $accent_color;?>;
--indigo: #6610f2;
--purple: #6f42c1;
--pink: #e83e8c;
--red: #dc3545;
--orange: #fd7e14;
--yellow: #ffc107;
--green: #28a745;
--teal: #20c997;
--cyan: #17a2b8;
--white: #fff;
--gray: #6c757d;
--gray-dark: <?php echo $maincolor;?>;
--primary: <?php echo $accent_color;?>;
--secondary: #6c757d;
--success: #28a745;
--info: #17a2b8;
--warning: #ffc107;
--danger: #dc3545;
--light: #f8f9fa;
--dark: <?php echo $maincolor;?>;
--breakpoint-xs: 0;
--breakpoint-sm: 576px;
--breakpoint-md: 768px;
--breakpoint-lg: 992px;
--breakpoint-xl: 1200px;
--font-family-sans-serif: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
--font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}
*,
::after,
::before {
box-sizing: border-box;
}
html {
font-family: sans-serif;
line-height: 1.15;
-webkit-text-size-adjust: 100%;
-webkit-tap-highlight-color: transparent;
}
article,
aside,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section {
display: block;
}
body {
margin: 0;
font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
font-size: 1rem;
font-weight: 400;
line-height: 1.5;
color: #212529;
text-align: left;
background-color: #fff;


}
[tabindex="-1"]:focus:not(:focus-visible) {
outline: 0 !important;
}
hr {
box-sizing: content-box;
height: 0;
overflow: visible;
}
h1,
h2,
h3,
h4,
h5,
h6 {
margin-top: 0;
margin-bottom: 0.5rem;
}
p {
margin-top: 0;
margin-bottom: 1rem;
}
abbr[data-original-title],
abbr[title] {
text-decoration: underline;
-webkit-text-decoration: underline dotted;
text-decoration: underline dotted;
cursor: help;
border-bottom: 0;
-webkit-text-decoration-skip-ink: none;
text-decoration-skip-ink: none;
}
address {
margin-bottom: 1rem;
font-style: normal;
line-height: inherit;
}
dl,
ol,
ul {
margin-top: 0;
margin-bottom: 1rem;
}
ol ol,
ol ul,
ul ol,
ul ul {
margin-bottom: 0;
}
dt {
font-weight: 700;
}
dd {
margin-bottom: 0.5rem;
margin-left: 0;
}
blockquote {
margin: 0 0 1rem;
}
b,
strong {
font-weight: bolder;
}
small {
font-size: 80%;
}
sub,
sup {
position: relative;
font-size: 75%;
line-height: 0;
vertical-align: baseline;
}
sub {
bottom: -0.25em;
}
sup {
top: -0.5em;
}
a {
color: <?php echo $accent_color;?>;
text-decoration: none;
background-color: transparent;
}
a:hover {
color: #0056b3;
text-decoration: none;
}
a:not([href]):not([class]) {
color: inherit;
text-decoration: none;
}
a:not([href]):not([class]):hover {
color: inherit;
text-decoration: none;
}
code,
kbd,
pre,
samp {
font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
font-size: 1em;
}
pre {
margin-top: 0;
margin-bottom: 1rem;
overflow: auto;
-ms-overflow-style: scrollbar;
}
figure {
margin: 0 0 1rem;
}
img {
vertical-align: middle;
border-style: none;
}
svg {
overflow: hidden;
vertical-align: middle;
}
table {
border-collapse: collapse;
}
caption {
padding-top: 0.75rem;
padding-bottom: 0.75rem;
color: #6c757d;
text-align: left;
caption-side: bottom;
}
th {
text-align: inherit;
text-align: -webkit-match-parent;
}
label {
display: inline-block;
margin-bottom: 0.5rem;
}
button {
border-radius: 0;
}
button:focus {
outline: 1px dotted;
outline: 5px auto -webkit-focus-ring-color;
}
button,
input,
optgroup,
select,
textarea {
margin: 0;
font-family: inherit;
font-size: inherit;
line-height: inherit;
}
button,
input {
overflow: visible;
}
button,
select {
text-transform: none;
}
[role="button"] {
cursor: pointer;
}
select {
word-wrap: normal;
}
[type="button"],
[type="reset"],
[type="submit"],
button {
-webkit-appearance: button;
}
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled),
button:not(:disabled) {
cursor: pointer;
}
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner,
button::-moz-focus-inner {
padding: 0;
border-style: none;
}
input[type="checkbox"],
input[type="radio"] {
box-sizing: border-box;
padding: 0;
}
textarea {
overflow: auto;
resize: vertical;
}
fieldset {
min-width: 0;
padding: 0;
margin: 0;
border: 0;
}
legend {
display: block;
width: 100%;
max-width: 100%;
padding: 0;
margin-bottom: 0.5rem;
font-size: 1.5rem;
line-height: inherit;
color: inherit;
white-space: normal;
}
progress {
vertical-align: baseline;
}
[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
height: auto;
}
[type="search"] {
outline-offset: -2px;
-webkit-appearance: none;
}
[type="search"]::-webkit-search-decoration {
-webkit-appearance: none;
}
::-webkit-file-upload-button {
font: inherit;
-webkit-appearance: button;
}
output {
display: inline-block;
}
summary {
display: list-item;
cursor: pointer;
}
template {
display: none;
}
[hidden] {
display: none !important;
}
.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
margin-bottom: 0.5rem;
font-family: inherit;
font-weight: 500;
line-height: 1.2;
color: inherit;
}
.h1,
h1 {
font-size: 2.5rem;
}
.h2,
h2 {
font-size: 2rem;
}
.h3,
h3 {
font-size: 1.75rem;
}
.h4,
h4 {
font-size: 1.5rem;
}
.h5,
h5 {
font-size: 1.25rem;
}
.h6,
h6 {
font-size: 1rem;
}
.lead {
font-size: 1.25rem;
font-weight: 300;
}
.display-1 {
font-size: 6rem;
font-weight: 300;
line-height: 1.2;
}
.display-2 {
font-size: 5.5rem;
font-weight: 300;
line-height: 1.2;
}
.display-3 {
font-size: 4.5rem;
font-weight: 300;
line-height: 1.2;
}
.display-4 {
font-size: 3.5rem;
font-weight: 300;
line-height: 1.2;
}
hr {
margin-top: 1rem;
margin-bottom: 1rem;
border: 0;
border-top: 1px solid rgba(0, 0, 0, 0.1);
}
.small,
small {
font-size: 80%;
font-weight: 400;
}
.mark,
mark {
padding: 0.2em;
background-color: #fcf8e3;
}
.list-unstyled {
padding-left: 0;
list-style: none;
}
.list-inline {
padding-left: 0;
list-style: none;
}
.list-inline-item {
display: inline-block;
}
.list-inline-item:not(:last-child) {
margin-right: 0.5rem;
}
.initialism {
font-size: 90%;
text-transform: uppercase;
}
.blockquote {
margin-bottom: 1rem;
font-size: 1.25rem;
}
.blockquote-footer {
display: block;
font-size: 80%;
color: #6c757d;
}
.blockquote-footer::before {
content: "\2014\00A0";
}
.img-fluid {
max-width: 100%;
height: auto;
}
.img-thumbnail {
padding: 0.25rem;
background-color: #fff;
border: 1px solid #dee2e6;
border-radius: 0.25rem;
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
max-width: 100%;
height: auto;
}
.figure {
display: inline-block;
}
.figure-img {
margin-bottom: 0.5rem;
line-height: 1;
}
.figure-caption {
font-size: 90%;
color: #6c757d;
}
code {
font-size: 87.5%;
color: #e83e8c;
word-wrap: break-word;
}
a > code {
color: inherit;
}
kbd {
padding: 0.2rem 0.4rem;
font-size: 87.5%;
color: #fff;
background-color: #212529;
border-radius: 0.2rem;
box-shadow: inset 0 -0.1rem 0 rgba(0, 0, 0, 0.25);
}
kbd kbd {
padding: 0;
font-size: 100%;
font-weight: 700;
box-shadow: none;
}
pre {
display: block;
font-size: 87.5%;
color: #212529;
}
pre code {
font-size: inherit;
color: inherit;
word-break: normal;
}
.pre-scrollable {
max-height: 340px;
overflow-y: scroll;
}
.container,
.container-fluid,
.container-lg,
.container-md,
.container-sm,
.container-xl {
width: 100%;
padding-right: 7.5px;
padding-left: 7.5px;
margin-right: auto;
margin-left: auto;
}
@media (min-width: 576px) {
.container,
.container-sm {
max-width: 540px;
}
}
@media (min-width: 768px) {
.container,
.container-md,
.container-sm {
max-width: 720px;
}
}
@media (min-width: 992px) {
.container,
.container-lg,
.container-md,
.container-sm {
max-width: 960px;
}
}
@media (min-width: 1200px) {
.container,
.container-lg,
.container-md,
.container-sm,
.container-xl {
max-width: 1140px;
}
}
.row {
display: flex;
flex-wrap: wrap;
margin-right: -7.5px;
margin-left: -7.5px;
}
.no-gutters {
margin-right: 0;
margin-left: 0;
}
.no-gutters > .col,
.no-gutters > [class*="col-"] {
padding-right: 0;
padding-left: 0;
}
.col,
.col-1,
.col-10,
.col-11,
.col-12,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-auto,
.col-lg,
.col-lg-1,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-auto,
.col-md,
.col-md-1,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-auto,
.col-sm,
.col-sm-1,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-auto,
.col-xl,
.col-xl-1,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-auto {
position: relative;
width: 100%;
padding-right: 7.5px;
padding-left: 7.5px;
}
.col {
flex-basis: 0;
flex-grow: 1;
max-width: 100%;
}
.row-cols-1 > * {
flex: 0 0 100%;
max-width: 100%;
}
.row-cols-2 > * {
flex: 0 0 50%;
max-width: 50%;
}
.row-cols-3 > * {
flex: 0 0 33.333333%;
max-width: 33.333333%;
}
.row-cols-4 > * {
flex: 0 0 25%;
max-width: 25%;
}
.row-cols-5 > * {
flex: 0 0 20%;
max-width: 20%;
}
.row-cols-6 > * {
flex: 0 0 16.666667%;
max-width: 16.666667%;
}
.col-auto {
flex: 0 0 auto;
width: auto;
max-width: 100%;
}
.col-1 {
flex: 0 0 8.333333%;
max-width: 8.333333%;
}
.col-2 {
flex: 0 0 16.666667%;
max-width: 16.666667%;
}
.col-3 {
flex: 0 0 25%;
max-width: 25%;
}
.col-4 {
flex: 0 0 33.333333%;
max-width: 33.333333%;
}
.col-5 {
flex: 0 0 41.666667%;
max-width: 41.666667%;
}
.col-6 {
flex: 0 0 50%;
max-width: 50%;
}
.col-7 {
flex: 0 0 58.333333%;
max-width: 58.333333%;
}
.col-8 {
flex: 0 0 66.666667%;
max-width: 66.666667%;
}
.col-9 {
flex: 0 0 75%;
max-width: 75%;
}
.col-10 {
flex: 0 0 83.333333%;
max-width: 83.333333%;
}
.col-11 {
flex: 0 0 91.666667%;
max-width: 91.666667%;
}
.col-12 {
flex: 0 0 100%;
max-width: 100%;
}
.order-first {
order: -1;
}
.order-last {
order: 13;
}
.order-0 {
order: 0;
}
.order-1 {
order: 1;
}
.order-2 {
order: 2;
}
.order-3 {
order: 3;
}
.order-4 {
order: 4;
}
.order-5 {
order: 5;
}
.order-6 {
order: 6;
}
.order-7 {
order: 7;
}
.order-8 {
order: 8;
}
.order-9 {
order: 9;
}
.order-10 {
order: 10;
}
.order-11 {
order: 11;
}
.order-12 {
order: 12;
}
.offset-1 {
margin-left: 8.333333%;
}
.offset-2 {
margin-left: 16.666667%;
}
.offset-3 {
margin-left: 25%;
}
.offset-4 {
margin-left: 33.333333%;
}
.offset-5 {
margin-left: 41.666667%;
}
.offset-6 {
margin-left: 50%;
}
.offset-7 {
margin-left: 58.333333%;
}
.offset-8 {
margin-left: 66.666667%;
}
.offset-9 {
margin-left: 75%;
}
.offset-10 {
margin-left: 83.333333%;
}
.offset-11 {
margin-left: 91.666667%;
}
@media (min-width: 576px) {
.col-sm {
flex-basis: 0;
flex-grow: 1;
max-width: 100%;
}
.row-cols-sm-1 > * {
flex: 0 0 100%;
max-width: 100%;
}
.row-cols-sm-2 > * {
flex: 0 0 50%;
max-width: 50%;
}
.row-cols-sm-3 > * {
flex: 0 0 33.333333%;
max-width: 33.333333%;
}
.row-cols-sm-4 > * {
flex: 0 0 25%;
max-width: 25%;
}
.row-cols-sm-5 > * {
flex: 0 0 20%;
max-width: 20%;
}
.row-cols-sm-6 > * {
flex: 0 0 16.666667%;
max-width: 16.666667%;
}
.col-sm-auto {
flex: 0 0 auto;
width: auto;
max-width: 100%;
}
.col-sm-1 {
flex: 0 0 8.333333%;
max-width: 8.333333%;
}
.col-sm-2 {
flex: 0 0 16.666667%;
max-width: 16.666667%;
}
.col-sm-3 {
flex: 0 0 25%;
max-width: 25%;
}
.col-sm-4 {
flex: 0 0 33.333333%;
max-width: 33.333333%;
}
.col-sm-5 {
flex: 0 0 41.666667%;
max-width: 41.666667%;
}
.col-sm-6 {
flex: 0 0 50%;
max-width: 50%;
}
.col-sm-7 {
flex: 0 0 58.333333%;
max-width: 58.333333%;
}
.col-sm-8 {
flex: 0 0 66.666667%;
max-width: 66.666667%;
}
.col-sm-9 {
flex: 0 0 75%;
max-width: 75%;
}
.col-sm-10 {
flex: 0 0 83.333333%;
max-width: 83.333333%;
}
.col-sm-11 {
flex: 0 0 91.666667%;
max-width: 91.666667%;
}
.col-sm-12 {
flex: 0 0 100%;
max-width: 100%;
}
.order-sm-first {
order: -1;
}
.order-sm-last {
order: 13;
}
.order-sm-0 {
order: 0;
}
.order-sm-1 {
order: 1;
}
.order-sm-2 {
order: 2;
}
.order-sm-3 {
order: 3;
}
.order-sm-4 {
order: 4;
}
.order-sm-5 {
order: 5;
}
.order-sm-6 {
order: 6;
}
.order-sm-7 {
order: 7;
}
.order-sm-8 {
order: 8;
}
.order-sm-9 {
order: 9;
}
.order-sm-10 {
order: 10;
}
.order-sm-11 {
order: 11;
}
.order-sm-12 {
order: 12;
}
.offset-sm-0 {
margin-left: 0;
}
.offset-sm-1 {
margin-left: 8.333333%;
}
.offset-sm-2 {
margin-left: 16.666667%;
}
.offset-sm-3 {
margin-left: 25%;
}
.offset-sm-4 {
margin-left: 33.333333%;
}
.offset-sm-5 {
margin-left: 41.666667%;
}
.offset-sm-6 {
margin-left: 50%;
}
.offset-sm-7 {
margin-left: 58.333333%;
}
.offset-sm-8 {
margin-left: 66.666667%;
}
.offset-sm-9 {
margin-left: 75%;
}
.offset-sm-10 {
margin-left: 83.333333%;
}
.offset-sm-11 {
margin-left: 91.666667%;
}
}
@media (min-width: 768px) {
.col-md {
flex-basis: 0;
flex-grow: 1;
max-width: 100%;
}
.row-cols-md-1 > * {
flex: 0 0 100%;
max-width: 100%;
}
.row-cols-md-2 > * {
flex: 0 0 50%;
max-width: 50%;
}
.row-cols-md-3 > * {
flex: 0 0 33.333333%;
max-width: 33.333333%;
}
.row-cols-md-4 > * {
flex: 0 0 25%;
max-width: 25%;
}
.row-cols-md-5 > * {
flex: 0 0 20%;
max-width: 20%;
}
.row-cols-md-6 > * {
flex: 0 0 16.666667%;
max-width: 16.666667%;
}
.col-md-auto {
flex: 0 0 auto;
width: auto;
max-width: 100%;
}
.col-md-1 {
flex: 0 0 8.333333%;
max-width: 8.333333%;
}
.col-md-2 {
flex: 0 0 16.666667%;
max-width: 16.666667%;
}
.col-md-3 {
flex: 0 0 25%;
max-width: 25%;
}
.col-md-4 {
flex: 0 0 33.333333%;
max-width: 33.333333%;
}
.col-md-5 {
flex: 0 0 41.666667%;
max-width: 41.666667%;
}
.col-md-6 {
flex: 0 0 50%;
max-width: 50%;
}
.col-md-7 {
flex: 0 0 58.333333%;
max-width: 58.333333%;
}
.col-md-8 {
flex: 0 0 66.666667%;
max-width: 66.666667%;
}
.col-md-9 {
flex: 0 0 75%;
max-width: 75%;
}
.col-md-10 {
flex: 0 0 83.333333%;
max-width: 83.333333%;
}
.col-md-11 {
flex: 0 0 91.666667%;
max-width: 91.666667%;
}
.col-md-12 {
flex: 0 0 100%;
max-width: 100%;
}
.order-md-first {
order: -1;
}
.order-md-last {
order: 13;
}
.order-md-0 {
order: 0;
}
.order-md-1 {
order: 1;
}
.order-md-2 {
order: 2;
}
.order-md-3 {
order: 3;
}
.order-md-4 {
order: 4;
}
.order-md-5 {
order: 5;
}
.order-md-6 {
order: 6;
}
.order-md-7 {
order: 7;
}
.order-md-8 {
order: 8;
}
.order-md-9 {
order: 9;
}
.order-md-10 {
order: 10;
}
.order-md-11 {
order: 11;
}
.order-md-12 {
order: 12;
}
.offset-md-0 {
margin-left: 0;
}
.offset-md-1 {
margin-left: 8.333333%;
}
.offset-md-2 {
margin-left: 16.666667%;
}
.offset-md-3 {
margin-left: 25%;
}
.offset-md-4 {
margin-left: 33.333333%;
}
.offset-md-5 {
margin-left: 41.666667%;
}
.offset-md-6 {
margin-left: 50%;
}
.offset-md-7 {
margin-left: 58.333333%;
}
.offset-md-8 {
margin-left: 66.666667%;
}
.offset-md-9 {
margin-left: 75%;
}
.offset-md-10 {
margin-left: 83.333333%;
}
.offset-md-11 {
margin-left: 91.666667%;
}
}
@media (min-width: 992px) {
.col-lg {
flex-basis: 0;
flex-grow: 1;
max-width: 100%;
}
.row-cols-lg-1 > * {
flex: 0 0 100%;
max-width: 100%;
}
.row-cols-lg-2 > * {
flex: 0 0 50%;
max-width: 50%;
}
.row-cols-lg-3 > * {
flex: 0 0 33.333333%;
max-width: 33.333333%;
}
.row-cols-lg-4 > * {
flex: 0 0 25%;
max-width: 25%;
}
.row-cols-lg-5 > * {
flex: 0 0 20%;
max-width: 20%;
}
.row-cols-lg-6 > * {
flex: 0 0 16.666667%;
max-width: 16.666667%;
}
.col-lg-auto {
flex: 0 0 auto;
width: auto;
max-width: 100%;
}
.col-lg-1 {
flex: 0 0 8.333333%;
max-width: 8.333333%;
}
.col-lg-2 {
flex: 0 0 16.666667%;
max-width: 16.666667%;
}
.col-lg-3 {
flex: 0 0 25%;
max-width: 25%;
}
.col-lg-4 {
flex: 0 0 33.333333%;
max-width: 33.333333%;
}
.col-lg-5 {
flex: 0 0 41.666667%;
max-width: 41.666667%;
}
.col-lg-6 {
flex: 0 0 50%;
max-width: 50%;
}
.col-lg-7 {
flex: 0 0 58.333333%;
max-width: 58.333333%;
}
.col-lg-8 {
flex: 0 0 66.666667%;
max-width: 66.666667%;
}
.col-lg-9 {
flex: 0 0 75%;
max-width: 75%;
}
.col-lg-10 {
flex: 0 0 83.333333%;
max-width: 83.333333%;
}
.col-lg-11 {
flex: 0 0 91.666667%;
max-width: 91.666667%;
}
.col-lg-12 {
flex: 0 0 100%;
max-width: 100%;
}
.order-lg-first {
order: -1;
}
.order-lg-last {
order: 13;
}
.order-lg-0 {
order: 0;
}
.order-lg-1 {
order: 1;
}
.order-lg-2 {
order: 2;
}
.order-lg-3 {
order: 3;
}
.order-lg-4 {
order: 4;
}
.order-lg-5 {
order: 5;
}
.order-lg-6 {
order: 6;
}
.order-lg-7 {
order: 7;
}
.order-lg-8 {
order: 8;
}
.order-lg-9 {
order: 9;
}
.order-lg-10 {
order: 10;
}
.order-lg-11 {
order: 11;
}
.order-lg-12 {
order: 12;
}
.offset-lg-0 {
margin-left: 0;
}
.offset-lg-1 {
margin-left: 8.333333%;
}
.offset-lg-2 {
margin-left: 16.666667%;
}
.offset-lg-3 {
margin-left: 25%;
}
.offset-lg-4 {
margin-left: 33.333333%;
}
.offset-lg-5 {
margin-left: 41.666667%;
}
.offset-lg-6 {
margin-left: 50%;
}
.offset-lg-7 {
margin-left: 58.333333%;
}
.offset-lg-8 {
margin-left: 66.666667%;
}
.offset-lg-9 {
margin-left: 75%;
}
.offset-lg-10 {
margin-left: 83.333333%;
}
.offset-lg-11 {
margin-left: 91.666667%;
}
}
@media (min-width: 1200px) {
.col-xl {
flex-basis: 0;
flex-grow: 1;
max-width: 100%;
}
.row-cols-xl-1 > * {
flex: 0 0 100%;
max-width: 100%;
}
.row-cols-xl-2 > * {
flex: 0 0 50%;
max-width: 50%;
}
.row-cols-xl-3 > * {
flex: 0 0 33.333333%;
max-width: 33.333333%;
}
.row-cols-xl-4 > * {
flex: 0 0 25%;
max-width: 25%;
}
.row-cols-xl-5 > * {
flex: 0 0 20%;
max-width: 20%;
}
.row-cols-xl-6 > * {
flex: 0 0 16.666667%;
max-width: 16.666667%;
}
.col-xl-auto {
flex: 0 0 auto;
width: auto;
max-width: 100%;
}
.col-xl-1 {
flex: 0 0 8.333333%;
max-width: 8.333333%;
}
.col-xl-2 {
flex: 0 0 16.666667%;
max-width: 16.666667%;
}
.col-xl-3 {
flex: 0 0 25%;
max-width: 25%;
}
.col-xl-4 {
flex: 0 0 33.333333%;
max-width: 33.333333%;
}
.col-xl-5 {
flex: 0 0 41.666667%;
max-width: 41.666667%;
}
.col-xl-6 {
flex: 0 0 50%;
max-width: 50%;
}
.col-xl-7 {
flex: 0 0 58.333333%;
max-width: 58.333333%;
}
.col-xl-8 {
flex: 0 0 66.666667%;
max-width: 66.666667%;
}
.col-xl-9 {
flex: 0 0 75%;
max-width: 75%;
}
.col-xl-10 {
flex: 0 0 83.333333%;
max-width: 83.333333%;
}
.col-xl-11 {
flex: 0 0 91.666667%;
max-width: 91.666667%;
}
.col-xl-12 {
flex: 0 0 100%;
max-width: 100%;
}
.order-xl-first {
order: -1;
}
.order-xl-last {
order: 13;
}
.order-xl-0 {
order: 0;
}
.order-xl-1 {
order: 1;
}
.order-xl-2 {
order: 2;
}
.order-xl-3 {
order: 3;
}
.order-xl-4 {
order: 4;
}
.order-xl-5 {
order: 5;
}
.order-xl-6 {
order: 6;
}
.order-xl-7 {
order: 7;
}
.order-xl-8 {
order: 8;
}
.order-xl-9 {
order: 9;
}
.order-xl-10 {
order: 10;
}
.order-xl-11 {
order: 11;
}
.order-xl-12 {
order: 12;
}
.offset-xl-0 {
margin-left: 0;
}
.offset-xl-1 {
margin-left: 8.333333%;
}
.offset-xl-2 {
margin-left: 16.666667%;
}
.offset-xl-3 {
margin-left: 25%;
}
.offset-xl-4 {
margin-left: 33.333333%;
}
.offset-xl-5 {
margin-left: 41.666667%;
}
.offset-xl-6 {
margin-left: 50%;
}
.offset-xl-7 {
margin-left: 58.333333%;
}
.offset-xl-8 {
margin-left: 66.666667%;
}
.offset-xl-9 {
margin-left: 75%;
}
.offset-xl-10 {
margin-left: 83.333333%;
}
.offset-xl-11 {
margin-left: 91.666667%;
}
}
.table {
width: 100%;
margin-bottom: 1rem;
color: #212529;
background-color: transparent;
}
.table td,
.table th {
padding: 0.75rem;
vertical-align: top;
border-top: 1px solid #dee2e6;
}
.table thead th {
vertical-align: bottom;
border-bottom: 2px solid #dee2e6;
}
.table tbody + tbody {
border-top: 2px solid #dee2e6;
}
.table-sm td,
.table-sm th {
padding: 0.3rem;
}
.table-bordered {
border: 1px solid #dee2e6;
}
.table-bordered td,
.table-bordered th {
border: 1px solid #dee2e6;
}
.table-bordered thead td,
.table-bordered thead th {
border-bottom-width: 2px;
}
.table-borderless tbody + tbody,
.table-borderless td,
.table-borderless th,
.table-borderless thead th {
border: 0;
}
.table-striped tbody tr:nth-of-type(odd) {
background-color: rgba(0, 0, 0, 0.05);
}
.table-hover tbody tr:hover {
color: #212529;
background-color: rgba(0, 0, 0, 0.075);
}
.table-primary,
.table-primary > td,
.table-primary > th {
background-color: #b8daff;
}
.table-primary tbody + tbody,
.table-primary td,
.table-primary th,
.table-primary thead th {
border-color: #7abaff;
}
.table-hover .table-primary:hover {
background-color: #9fcdff;
}
.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
background-color: #9fcdff;
}
.table-secondary,
.table-secondary > td,
.table-secondary > th {
background-color: #d6d8db;
}
.table-secondary tbody + tbody,
.table-secondary td,
.table-secondary th,
.table-secondary thead th {
border-color: #b3b7bb;
}
.table-hover .table-secondary:hover {
background-color: #c8cbcf;
}
.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
background-color: #c8cbcf;
}
.table-success,
.table-success > td,
.table-success > th {
background-color: #c3e6cb;
}
.table-success tbody + tbody,
.table-success td,
.table-success th,
.table-success thead th {
border-color: #8fd19e;
}
.table-hover .table-success:hover {
background-color: #b1dfbb;
}
.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
background-color: #b1dfbb;
}
.table-info,
.table-info > td,
.table-info > th {
background-color: #bee5eb;
}
.table-info tbody + tbody,
.table-info td,
.table-info th,
.table-info thead th {
border-color: #86cfda;
}
.table-hover .table-info:hover {
background-color: #abdde5;
}
.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
background-color: #abdde5;
}
.table-warning,
.table-warning > td,
.table-warning > th {
background-color: #ffeeba;
}
.table-warning tbody + tbody,
.table-warning td,
.table-warning th,
.table-warning thead th {
border-color: #ffdf7e;
}
.table-hover .table-warning:hover {
background-color: #ffe8a1;
}
.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
background-color: #ffe8a1;
}
.table-danger,
.table-danger > td,
.table-danger > th {
background-color: #f5c6cb;
}
.table-danger tbody + tbody,
.table-danger td,
.table-danger th,
.table-danger thead th {
border-color: #ed969e;
}
.table-hover .table-danger:hover {
background-color: #f1b0b7;
}
.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
background-color: #f1b0b7;
}
.table-light,
.table-light > td,
.table-light > th {
background-color: #fdfdfe;
}
.table-light tbody + tbody,
.table-light td,
.table-light th,
.table-light thead th {
border-color: #fbfcfc;
}
.table-hover .table-light:hover {
background-color: #ececf6;
}
.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
background-color: #ececf6;
}
.table-dark,
.table-dark > td,
.table-dark > th {
background-color: #c6c8ca;
}
.table-dark tbody + tbody,
.table-dark td,
.table-dark th,
.table-dark thead th {
border-color: #95999c;
}
.table-hover .table-dark:hover {
background-color: #b9bbbe;
}
.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
background-color: #b9bbbe;
}
.table-active,
.table-active > td,
.table-active > th {
background-color: rgba(0, 0, 0, 0.075);
}
.table-hover .table-active:hover {
background-color: rgba(0, 0, 0, 0.075);
}
.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
background-color: rgba(0, 0, 0, 0.075);
}
.table .thead-dark th {
color: #fff;
background-color: #212529;
border-color: #383f45;
}
.table .thead-light th {
color: #495057;
background-color: #e9ecef;
border-color: #dee2e6;
}
.table-dark {
color: #fff;
background-color: #212529;
}
.table-dark td,
.table-dark th,
.table-dark thead th {
border-color: #383f45;
}
.table-dark.table-bordered {
border: 0;
}
.table-dark.table-striped tbody tr:nth-of-type(odd) {
background-color: rgba(255, 255, 255, 0.05);
}
.table-dark.table-hover tbody tr:hover {
color: #fff;
background-color: rgba(255, 255, 255, 0.075);
}
@media (max-width: 575.98px) {
.table-responsive-sm {
display: block;
width: 100%;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}
.table-responsive-sm > .table-bordered {
border: 0;
}
}
@media (max-width: 767.98px) {
.table-responsive-md {
display: block;
width: 100%;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}
.table-responsive-md > .table-bordered {
border: 0;
}
}
@media (max-width: 991.98px) {
.table-responsive-lg {
display: block;
width: 100%;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}
.table-responsive-lg > .table-bordered {
border: 0;
}
}
@media (max-width: 1199.98px) {
.table-responsive-xl {
display: block;
width: 100%;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}
.table-responsive-xl > .table-bordered {
border: 0;
}
}
.table-responsive {
display: block;
width: 100%;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}
.table-responsive > .table-bordered {
border: 0;
}
.form-control {
display: block;
width: 100%;
height: calc(2.25rem + 2px);
padding: 0.375rem 0.75rem;
font-size: 1rem;
font-weight: 400;
line-height: 1.5;
color: #495057;
background-color: #fff;
background-clip: padding-box;
border: 1px solid #ced4da;
border-radius: 0.25rem;
box-shadow: inset 0 0 0 transparent;
transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
.form-control {
transition: none;
}
}
.form-control::-ms-expand {
background-color: transparent;
border: 0;
}
.form-control:-moz-focusring {
color: transparent;
text-shadow: 0 0 0 #495057;
}
.form-control:focus {
color: #495057;
background-color: #fff;
border-color: #80bdff;
outline: 0;
box-shadow: inset 0 0 0 transparent;
}
.form-control::-moz-placeholder {
color: #939ba2;
opacity: 1;
}
.form-control:-ms-input-placeholder {
color: #939ba2;
opacity: 1;
}
.form-control::placeholder {
color: #939ba2;
opacity: 1;
}
.form-control:disabled,
.form-control[readonly] {
background-color: #e9ecef;
opacity: 1;
}
input[type="date"].form-control,
input[type="datetime-local"].form-control,
input[type="month"].form-control,
input[type="time"].form-control {
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
}
select.form-control:focus::-ms-value {
color: #495057;
background-color: #fff;
}
.form-control-file,
.form-control-range {
display: block;
width: 100%;
}
.col-form-label {
padding-top: calc(0.375rem + 1px);
padding-bottom: calc(0.375rem + 1px);
margin-bottom: 0;
font-size: inherit;
line-height: 1.5;
}
.col-form-label-lg {
padding-top: calc(0.5rem + 1px);
padding-bottom: calc(0.5rem + 1px);
font-size: 1.25rem;
line-height: 1.5;
}
.col-form-label-sm {
padding-top: calc(0.25rem + 1px);
padding-bottom: calc(0.25rem + 1px);
font-size: 0.875rem;
line-height: 1.5;
}
.form-control-plaintext {
display: block;
width: 100%;
padding: 0.375rem 0;
margin-bottom: 0;
font-size: 1rem;
line-height: 1.5;
color: #212529;
background-color: transparent;
border: solid transparent;
border-width: 1px 0;
}
.form-control-plaintext.form-control-lg,
.form-control-plaintext.form-control-sm {
padding-right: 0;
padding-left: 0;
}
.form-control-sm {
height: calc(1.8125rem + 2px);
padding: 0.25rem 0.5rem;
font-size: 0.875rem;
line-height: 1.5;
border-radius: 0.2rem;
}
.form-control-lg {
height: calc(2.875rem + 2px);
padding: 0.5rem 1rem;
font-size: 1.25rem;
line-height: 1.5;
border-radius: 0.3rem;
}
select.form-control[multiple],
select.form-control[size] {
height: auto;
}
textarea.form-control {
height: auto;
}
.form-group {
margin-bottom: 1rem;
}
.form-text {
display: block;
margin-top: 0.25rem;
}
.form-row {
display: flex;
flex-wrap: wrap;
margin-right: -5px;
margin-left: -5px;
}
.form-row > .col,
.form-row > [class*="col-"] {
padding-right: 5px;
padding-left: 5px;
}
.form-check {
position: relative;
display: block;
padding-left: 1.25rem;
}
.form-check-input {
position: absolute;
margin-top: 0.3rem;
margin-left: -1.25rem;
}
.form-check-input:disabled ~ .form-check-label,
.form-check-input[disabled] ~ .form-check-label {
color: #6c757d;
}
.form-check-label {
margin-bottom: 0;
}
.form-check-inline {
display: inline-flex;
align-items: center;
padding-left: 0;
margin-right: 0.75rem;
}
.form-check-inline .form-check-input {
position: static;
margin-top: 0;
margin-right: 0.3125rem;
margin-left: 0;
}
.valid-feedback {
display: none;
width: 100%;
margin-top: 0.25rem;
font-size: 80%;
color: #28a745;
}
.valid-tooltip {
position: absolute;
top: 100%;
left: 0;
z-index: 5;
display: none;
max-width: 100%;
padding: 0.25rem 0.5rem;
margin-top: 0.1rem;
font-size: 0.875rem;
line-height: 1.5;
color: #fff;
background-color: rgba(40, 167, 69, 0.9);
border-radius: 0.25rem;
}
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip,
.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip {
display: block;
}
.form-control.is-valid,
.was-validated .form-control:valid {
border-color: #28a745;
padding-right: 2.25rem;
background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
background-repeat: no-repeat;
background-position: right calc(0.375em + 0.1875rem) center;
background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.form-control.is-valid:focus,
.was-validated .form-control:valid:focus {
border-color: #28a745;
box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
}
.was-validated textarea.form-control:valid,
textarea.form-control.is-valid {
padding-right: 2.25rem;
background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}
.custom-select.is-valid,
.was-validated .custom-select:valid {
border-color: #28a745;
padding-right: calc(0.75em + 2.3125rem);
background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center/8px 10px,
url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e")
#fff no-repeat center right 1.75rem / calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.custom-select.is-valid:focus,
.was-validated .custom-select:valid:focus {
border-color: #28a745;
box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
}
.form-check-input.is-valid ~ .form-check-label,
.was-validated .form-check-input:valid ~ .form-check-label {
color: #28a745;
}
.form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip,
.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip {
display: block;
}
.custom-control-input.is-valid ~ .custom-control-label,
.was-validated .custom-control-input:valid ~ .custom-control-label {
color: #28a745;
}
.custom-control-input.is-valid ~ .custom-control-label::before,
.was-validated .custom-control-input:valid ~ .custom-control-label::before {
border-color: #28a745;
}
.custom-control-input.is-valid:checked ~ .custom-control-label::before,
.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before {
border-color: #34ce57;
background-color: #34ce57;
}
.custom-control-input.is-valid:focus ~ .custom-control-label::before,
.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
}
.custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before,
.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before {
border-color: #28a745;
}
.custom-file-input.is-valid ~ .custom-file-label,
.was-validated .custom-file-input:valid ~ .custom-file-label {
border-color: #28a745;
}
.custom-file-input.is-valid:focus ~ .custom-file-label,
.was-validated .custom-file-input:valid:focus ~ .custom-file-label {
border-color: #28a745;
box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
}
.invalid-feedback {
display: none;
width: 100%;
margin-top: 0.25rem;
font-size: 80%;
color: #dc3545;
}
.invalid-tooltip {
position: absolute;
top: 100%;
left: 0;
z-index: 5;
display: none;
max-width: 100%;
padding: 0.25rem 0.5rem;
margin-top: 0.1rem;
font-size: 0.875rem;
line-height: 1.5;
color: #fff;
background-color: rgba(220, 53, 69, 0.9);
border-radius: 0.25rem;
}
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip,
.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip {
display: block;
}
.form-control.is-invalid,
.was-validated .form-control:invalid {
border-color: #dc3545;
padding-right: 2.25rem;
background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
background-repeat: no-repeat;
background-position: right calc(0.375em + 0.1875rem) center;
background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.form-control.is-invalid:focus,
.was-validated .form-control:invalid:focus {
border-color: #dc3545;
box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
}
.was-validated textarea.form-control:invalid,
textarea.form-control.is-invalid {
padding-right: 2.25rem;
background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}
.custom-select.is-invalid,
.was-validated .custom-select:invalid {
border-color: #dc3545;
padding-right: calc(0.75em + 2.3125rem);
background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center/8px 10px,
url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e")
#fff no-repeat center right 1.75rem / calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.custom-select.is-invalid:focus,
.was-validated .custom-select:invalid:focus {
border-color: #dc3545;
box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
}
.form-check-input.is-invalid ~ .form-check-label,
.was-validated .form-check-input:invalid ~ .form-check-label {
color: #dc3545;
}
.form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip,
.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip {
display: block;
}
.custom-control-input.is-invalid ~ .custom-control-label,
.was-validated .custom-control-input:invalid ~ .custom-control-label {
color: #dc3545;
}
.custom-control-input.is-invalid ~ .custom-control-label::before,
.was-validated .custom-control-input:invalid ~ .custom-control-label::before {
border-color: #dc3545;
}
.custom-control-input.is-invalid:checked ~ .custom-control-label::before,
.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before {
border-color: #e4606d;
background-color: #e4606d;
}
.custom-control-input.is-invalid:focus ~ .custom-control-label::before,
.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
}
.custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before,
.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before {
border-color: #dc3545;
}
.custom-file-input.is-invalid ~ .custom-file-label,
.was-validated .custom-file-input:invalid ~ .custom-file-label {
border-color: #dc3545;
}
.custom-file-input.is-invalid:focus ~ .custom-file-label,
.was-validated .custom-file-input:invalid:focus ~ .custom-file-label {
border-color: #dc3545;
box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
}
.form-inline {
display: flex;
flex-flow: row wrap;
align-items: center;
}
.form-inline .form-check {
width: 100%;
}
@media (min-width: 576px) {
.form-inline label {
display: flex;
align-items: center;
justify-content: center;
margin-bottom: 0;
}
.form-inline .form-group {
display: flex;
flex: 0 0 auto;
flex-flow: row wrap;
align-items: center;
margin-bottom: 0;
}
.form-inline .form-control {
display: inline-block;
width: auto;
vertical-align: middle;
}
.form-inline .form-control-plaintext {
display: inline-block;
}
.form-inline .custom-select,
.form-inline .input-group {
width: auto;
}
.form-inline .form-check {
display: flex;
align-items: center;
justify-content: center;
width: auto;
padding-left: 0;
}
.form-inline .form-check-input {
position: relative;
flex-shrink: 0;
margin-top: 0;
margin-right: 0.25rem;
margin-left: 0;
}
.form-inline .custom-control {
align-items: center;
justify-content: center;
}
.form-inline .custom-control-label {
margin-bottom: 0;
}
}
.btn {
display: inline-block;
font-weight: 400;
color: #212529;
text-align: center;
vertical-align: middle;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
background-color: transparent;
border: 1px solid transparent;
padding: 0.375rem 0.75rem;
font-size: 1rem;
line-height: 1.5;
border-radius: 0.25rem;
transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
.btn {
transition: none;
}
}
.btn:hover {
color: #212529;
text-decoration: none;
}
.btn.focus,
.btn:focus {
outline: 0;
box-shadow: none;
}
.btn.disabled,
.btn:disabled {
opacity: 0.65;
box-shadow: none;
}
.btn:not(:disabled):not(.disabled) {
cursor: pointer;
}
.btn:not(:disabled):not(.disabled).active,
.btn:not(:disabled):not(.disabled):active {
box-shadow: none;
}
a.btn.disabled,
fieldset:disabled a.btn {
pointer-events: none;
}
.btn-primary {
color: #fff;
background-color: <?php echo $accent_color;?>;
border-color: <?php echo $accent_color;?>;
box-shadow: none;
}
.btn-primary:hover {
color: #fff;
background-color: #0069d9;
border-color: #0062cc;
}
.btn-primary.focus,
.btn-primary:focus {
color: #fff;
background-color: #0069d9;
border-color: #0062cc;
box-shadow: 0 0 0 0 rgba(38, 143, 255, 0.5);
}
.btn-primary.disabled,
.btn-primary:disabled {
color: #fff;
background-color: <?php echo $accent_color;?>;
border-color: <?php echo $accent_color;?>;
}
.btn-primary:not(:disabled):not(.disabled).active,
.btn-primary:not(:disabled):not(.disabled):active,
.show > .btn-primary.dropdown-toggle {
color: #fff;
background-color: #0062cc;
border-color: #005cbf;
}
.btn-primary:not(:disabled):not(.disabled).active:focus,
.btn-primary:not(:disabled):not(.disabled):active:focus,
.show > .btn-primary.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(38, 143, 255, 0.5);
}
.btn-secondary {
color: #fff;
background-color: #6c757d;
border-color: #6c757d;
box-shadow: none;
}
.btn-secondary:hover {
color: #fff;
background-color: #5a6268;
border-color: #545b62;
}
.btn-secondary.focus,
.btn-secondary:focus {
color: #fff;
background-color: #5a6268;
border-color: #545b62;
box-shadow: 0 0 0 0 rgba(130, 138, 145, 0.5);
}
.btn-secondary.disabled,
.btn-secondary:disabled {
color: #fff;
background-color: #6c757d;
border-color: #6c757d;
}
.btn-secondary:not(:disabled):not(.disabled).active,
.btn-secondary:not(:disabled):not(.disabled):active,
.show > .btn-secondary.dropdown-toggle {
color: #fff;
background-color: #545b62;
border-color: #4e555b;
}
.btn-secondary:not(:disabled):not(.disabled).active:focus,
.btn-secondary:not(:disabled):not(.disabled):active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(130, 138, 145, 0.5);
}
.btn-success {
color: #fff;
background-color: #28a745;
border-color: #28a745;
box-shadow: none;
}
.btn-success:hover {
color: #fff;
background-color: #218838;
border-color: #1e7e34;
}
.btn-success.focus,
.btn-success:focus {
color: #fff;
background-color: #218838;
border-color: #1e7e34;
box-shadow: 0 0 0 0 rgba(72, 180, 97, 0.5);
}
.btn-success.disabled,
.btn-success:disabled {
color: #fff;
background-color: #28a745;
border-color: #28a745;
}
.btn-success:not(:disabled):not(.disabled).active,
.btn-success:not(:disabled):not(.disabled):active,
.show > .btn-success.dropdown-toggle {
color: #fff;
background-color: #1e7e34;
border-color: #1c7430;
}
.btn-success:not(:disabled):not(.disabled).active:focus,
.btn-success:not(:disabled):not(.disabled):active:focus,
.show > .btn-success.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(72, 180, 97, 0.5);
}
.btn-info {
color: #fff;
background-color: #17a2b8;
border-color: #17a2b8;
box-shadow: none;
}
.btn-info:hover {
color: #fff;
background-color: #138496;
border-color: #117a8b;
}
.btn-info.focus,
.btn-info:focus {
color: #fff;
background-color: #138496;
border-color: #117a8b;
box-shadow: 0 0 0 0 rgba(58, 176, 195, 0.5);
}
.btn-info.disabled,
.btn-info:disabled {
color: #fff;
background-color: #17a2b8;
border-color: #17a2b8;
}
.btn-info:not(:disabled):not(.disabled).active,
.btn-info:not(:disabled):not(.disabled):active,
.show > .btn-info.dropdown-toggle {
color: #fff;
background-color: #117a8b;
border-color: #10707f;
}
.btn-info:not(:disabled):not(.disabled).active:focus,
.btn-info:not(:disabled):not(.disabled):active:focus,
.show > .btn-info.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(58, 176, 195, 0.5);
}
.btn-warning {
color: #1f2d3d;
background-color: #ffc107;
border-color: #ffc107;
box-shadow: none;
}
.btn-warning:hover {
color: #1f2d3d;
background-color: #e0a800;
border-color: #d39e00;
}
.btn-warning.focus,
.btn-warning:focus {
color: #1f2d3d;
background-color: #e0a800;
border-color: #d39e00;
box-shadow: 0 0 0 0 rgba(221, 171, 15, 0.5);
}
.btn-warning.disabled,
.btn-warning:disabled {
color: #1f2d3d;
background-color: #ffc107;
border-color: #ffc107;
}
.btn-warning:not(:disabled):not(.disabled).active,
.btn-warning:not(:disabled):not(.disabled):active,
.show > .btn-warning.dropdown-toggle {
color: #1f2d3d;
background-color: #d39e00;
border-color: #c69500;
}
.btn-warning:not(:disabled):not(.disabled).active:focus,
.btn-warning:not(:disabled):not(.disabled):active:focus,
.show > .btn-warning.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(221, 171, 15, 0.5);
}
.btn-danger {
color: #fff;
background-color: #dc3545;
border-color: #dc3545;
box-shadow: none;
}
.btn-danger:hover {
color: #fff;
background-color: #c82333;
border-color: #bd2130;
}
.btn-danger.focus,
.btn-danger:focus {
color: #fff;
background-color: #c82333;
border-color: #bd2130;
box-shadow: 0 0 0 0 rgba(225, 83, 97, 0.5);
}
.btn-danger.disabled,
.btn-danger:disabled {
color: #fff;
background-color: #dc3545;
border-color: #dc3545;
}
.btn-danger:not(:disabled):not(.disabled).active,
.btn-danger:not(:disabled):not(.disabled):active,
.show > .btn-danger.dropdown-toggle {
color: #fff;
background-color: #bd2130;
border-color: #b21f2d;
}
.btn-danger:not(:disabled):not(.disabled).active:focus,
.btn-danger:not(:disabled):not(.disabled):active:focus,
.show > .btn-danger.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(225, 83, 97, 0.5);
}
.btn-light {
color: #1f2d3d;
background-color: #f8f9fa;
border-color: #f8f9fa;
box-shadow: none;
}
.btn-light:hover {
color: #1f2d3d;
background-color: #e2e6ea;
border-color: #dae0e5;
}
.btn-light.focus,
.btn-light:focus {
color: #1f2d3d;
background-color: #e2e6ea;
border-color: #dae0e5;
box-shadow: 0 0 0 0 rgba(215, 218, 222, 0.5);
}
.btn-light.disabled,
.btn-light:disabled {
color: #1f2d3d;
background-color: #f8f9fa;
border-color: #f8f9fa;
}
.btn-light:not(:disabled):not(.disabled).active,
.btn-light:not(:disabled):not(.disabled):active,
.show > .btn-light.dropdown-toggle {
color: #1f2d3d;
background-color: #dae0e5;
border-color: #d3d9df;
}
.btn-light:not(:disabled):not(.disabled).active:focus,
.btn-light:not(:disabled):not(.disabled):active:focus,
.show > .btn-light.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(215, 218, 222, 0.5);
}
.btn-dark {
color: #fff;
background-color: <?php echo $maincolor;?>;
border-color: <?php echo $maincolor;?>;
box-shadow: none;
}
.btn-dark:hover {
color: #fff;
background-color: #23272b;
border-color: #1d2124;
}
.btn-dark.focus,
.btn-dark:focus {
color: #fff;
background-color: #23272b;
border-color: #1d2124;
box-shadow: 0 0 0 0 rgba(82, 88, 93, 0.5);
}
.btn-dark.disabled,
.btn-dark:disabled {
color: #fff;
background-color: <?php echo $maincolor;?>;
border-color: <?php echo $maincolor;?>;
}
.btn-dark:not(:disabled):not(.disabled).active,
.btn-dark:not(:disabled):not(.disabled):active,
.show > .btn-dark.dropdown-toggle {
color: #fff;
background-color: #1d2124;
border-color: #171a1d;
}
.btn-dark:not(:disabled):not(.disabled).active:focus,
.btn-dark:not(:disabled):not(.disabled):active:focus,
.show > .btn-dark.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(82, 88, 93, 0.5);
}
.btn-outline-primary {
color: <?php echo $accent_color;?>;
border-color: <?php echo $accent_color;?>;
}
.btn-outline-primary:hover {
color: #fff;
background-color: <?php echo $accent_color;?>;
border-color: <?php echo $accent_color;?>;
}
.btn-outline-primary.focus,
.btn-outline-primary:focus {
box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.5);
}
.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
color: <?php echo $accent_color;?>;
background-color: transparent;
}
.btn-outline-primary:not(:disabled):not(.disabled).active,
.btn-outline-primary:not(:disabled):not(.disabled):active,
.show > .btn-outline-primary.dropdown-toggle {
color: #fff;
background-color: <?php echo $accent_color;?>;
border-color: <?php echo $accent_color;?>;
}
.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.5);
}
.btn-outline-secondary {
color: #6c757d;
border-color: #6c757d;
}
.btn-outline-secondary:hover {
color: #fff;
background-color: #6c757d;
border-color: #6c757d;
}
.btn-outline-secondary.focus,
.btn-outline-secondary:focus {
box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
}
.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
color: #6c757d;
background-color: transparent;
}
.btn-outline-secondary:not(:disabled):not(.disabled).active,
.btn-outline-secondary:not(:disabled):not(.disabled):active,
.show > .btn-outline-secondary.dropdown-toggle {
color: #fff;
background-color: #6c757d;
border-color: #6c757d;
}
.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
}
.btn-outline-success {
color: #28a745;
border-color: #28a745;
}
.btn-outline-success:hover {
color: #fff;
background-color: #28a745;
border-color: #28a745;
}
.btn-outline-success.focus,
.btn-outline-success:focus {
box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
}
.btn-outline-success.disabled,
.btn-outline-success:disabled {
color: #28a745;
background-color: transparent;
}
.btn-outline-success:not(:disabled):not(.disabled).active,
.btn-outline-success:not(:disabled):not(.disabled):active,
.show > .btn-outline-success.dropdown-toggle {
color: #fff;
background-color: #28a745;
border-color: #28a745;
}
.btn-outline-success:not(:disabled):not(.disabled).active:focus,
.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-success.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
}
.btn-outline-info {
color: #17a2b8;
border-color: #17a2b8;
}
.btn-outline-info:hover {
color: #fff;
background-color: #17a2b8;
border-color: #17a2b8;
}
.btn-outline-info.focus,
.btn-outline-info:focus {
box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
}
.btn-outline-info.disabled,
.btn-outline-info:disabled {
color: #17a2b8;
background-color: transparent;
}
.btn-outline-info:not(:disabled):not(.disabled).active,
.btn-outline-info:not(:disabled):not(.disabled):active,
.show > .btn-outline-info.dropdown-toggle {
color: #fff;
background-color: #17a2b8;
border-color: #17a2b8;
}
.btn-outline-info:not(:disabled):not(.disabled).active:focus,
.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
}
.btn-outline-warning {
color: #ffc107;
border-color: #ffc107;
}
.btn-outline-warning:hover {
color: #1f2d3d;
background-color: #ffc107;
border-color: #ffc107;
}
.btn-outline-warning.focus,
.btn-outline-warning:focus {
box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
}
.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
color: #ffc107;
background-color: transparent;
}
.btn-outline-warning:not(:disabled):not(.disabled).active,
.btn-outline-warning:not(:disabled):not(.disabled):active,
.show > .btn-outline-warning.dropdown-toggle {
color: #1f2d3d;
background-color: #ffc107;
border-color: #ffc107;
}
.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
}
.btn-outline-danger {
color: #dc3545;
border-color: #dc3545;
}
.btn-outline-danger:hover {
color: #fff;
background-color: #dc3545;
border-color: #dc3545;
}
.btn-outline-danger.focus,
.btn-outline-danger:focus {
box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
}
.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
color: #dc3545;
background-color: transparent;
}
.btn-outline-danger:not(:disabled):not(.disabled).active,
.btn-outline-danger:not(:disabled):not(.disabled):active,
.show > .btn-outline-danger.dropdown-toggle {
color: #fff;
background-color: #dc3545;
border-color: #dc3545;
}
.btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
}
.btn-outline-light {
color: #f8f9fa;
border-color: #f8f9fa;
}
.btn-outline-light:hover {
color: #1f2d3d;
background-color: #f8f9fa;
border-color: #f8f9fa;
}
.btn-outline-light.focus,
.btn-outline-light:focus {
box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
}
.btn-outline-light.disabled,
.btn-outline-light:disabled {
color: #f8f9fa;
background-color: transparent;
}
.btn-outline-light:not(:disabled):not(.disabled).active,
.btn-outline-light:not(:disabled):not(.disabled):active,
.show > .btn-outline-light.dropdown-toggle {
color: #1f2d3d;
background-color: #f8f9fa;
border-color: #f8f9fa;
}
.btn-outline-light:not(:disabled):not(.disabled).active:focus,
.btn-outline-light:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-light.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
}
.btn-outline-dark {
color: <?php echo $maincolor;?>;
border-color: <?php echo $maincolor;?>;
}
.btn-outline-dark:hover {
color: #fff;
background-color: <?php echo $maincolor;?>;
border-color: <?php echo $maincolor;?>;
}
.btn-outline-dark.focus,
.btn-outline-dark:focus {
box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
}
.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
color: <?php echo $maincolor;?>;
background-color: transparent;
}
.btn-outline-dark:not(:disabled):not(.disabled).active,
.btn-outline-dark:not(:disabled):not(.disabled):active,
.show > .btn-outline-dark.dropdown-toggle {
color: #fff;
background-color: <?php echo $maincolor;?>;
border-color: <?php echo $maincolor;?>;
}
.btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus {
box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
}
.btn-link {
font-weight: 400;
color: <?php echo $accent_color;?>;
text-decoration: none;
}
.btn-link:hover {
color: #0056b3;
text-decoration: none;
}
.btn-link.focus,
.btn-link:focus {
text-decoration: none;
}
.btn-link.disabled,
.btn-link:disabled {
color: #6c757d;
pointer-events: none;
}
.btn-group-lg > .btn,
.btn-lg {
padding: 0.5rem 1rem;
font-size: 1.25rem;
line-height: 1.5;
border-radius: 0.3rem;
}
.btn-group-sm > .btn,
.btn-sm {
padding: 0.25rem 0.5rem;
font-size: 0.875rem;
line-height: 1.5;
border-radius: 0.2rem;
}
.btn-block {
display: block;
width: 100%;
}
.btn-block + .btn-block {
margin-top: 0.5rem;
}
input[type="button"].btn-block,
input[type="reset"].btn-block,
input[type="submit"].btn-block {
width: 100%;
}
.fade {
transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
.fade {
transition: none;
}
}
.fade:not(.show) {
opacity: 0;
}
.collapse:not(.show) {
display: none;
}
.collapsing {
position: relative;
height: 0;
overflow: hidden;
transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
.collapsing {
transition: none;
}
}
.dropdown,
.dropleft,
.dropright,
.dropup {
position: relative;
}
.dropdown-toggle {
white-space: nowrap;
}
.dropdown-toggle::after {
display: inline-block;
margin-left: 0.255em;
vertical-align: 0.255em;
content: "";
border-top: 0.3em solid;
border-right: 0.3em solid transparent;
border-bottom: 0;
border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
margin-left: 0;
}
.dropdown-menu {
position: absolute;
top: 100%;
left: 0;
z-index: 1000;
display: none;
float: left;
min-width: 10rem;
padding: 0.5rem 0;
margin: 0.125rem 0 0;
font-size: 1rem;
color: #212529;
text-align: left;
list-style: none;
background-color: #fff;
background-clip: padding-box;
border: 1px solid rgba(0, 0, 0, 0.15);
border-radius: 0.25rem;
box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.175);
}
.dropdown-menu-left {
right: auto;
left: 0;
}
.dropdown-menu-right {
right: 0;
left: auto;
}
@media (min-width: 576px) {
.dropdown-menu-sm-left {
right: auto;
left: 0;
}
.dropdown-menu-sm-right {
right: 0;
left: auto;
}
}
@media (min-width: 768px) {
.dropdown-menu-md-left {
right: auto;
left: 0;
}
.dropdown-menu-md-right {
right: 0;
left: auto;
}
}
@media (min-width: 992px) {
.dropdown-menu-lg-left {
right: auto;
left: 0;
}
.dropdown-menu-lg-right {
right: 0;
left: auto;
}
}
@media (min-width: 1200px) {
.dropdown-menu-xl-left {
right: auto;
left: 0;
}
.dropdown-menu-xl-right {
right: 0;
left: auto;
}
}
.dropup .dropdown-menu {
top: auto;
bottom: 100%;
margin-top: 0;
margin-bottom: 0.125rem;
}
.dropup .dropdown-toggle::after {
display: inline-block;
margin-left: 0.255em;
vertical-align: 0.255em;
content: "";
border-top: 0;
border-right: 0.3em solid transparent;
border-bottom: 0.3em solid;
border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
margin-left: 0;
}
.dropright .dropdown-menu {
top: 0;
right: auto;
left: 100%;
margin-top: 0;
margin-left: 0.125rem;
}
.dropright .dropdown-toggle::after {
display: inline-block;
margin-left: 0.255em;
vertical-align: 0.255em;
content: "";
border-top: 0.3em solid transparent;
border-right: 0;
border-bottom: 0.3em solid transparent;
border-left: 0.3em solid;
}
.dropright .dropdown-toggle:empty::after {
margin-left: 0;
}
.dropright .dropdown-toggle::after {
vertical-align: 0;
}
.dropleft .dropdown-menu {
top: 0;
right: 100%;
left: auto;
margin-top: 0;
margin-right: 0.125rem;
}
.dropleft .dropdown-toggle::after {
display: inline-block;
margin-left: 0.255em;
vertical-align: 0.255em;
content: "";
}
.dropleft .dropdown-toggle::after {
display: none;
}
.dropleft .dropdown-toggle::before {
display: inline-block;
margin-right: 0.255em;
vertical-align: 0.255em;
content: "";
border-top: 0.3em solid transparent;
border-right: 0.3em solid;
border-bottom: 0.3em solid transparent;
}
.dropleft .dropdown-toggle:empty::after {
margin-left: 0;
}
.dropleft .dropdown-toggle::before {
vertical-align: 0;
}
.dropdown-menu[x-placement^="bottom"],
.dropdown-menu[x-placement^="left"],
.dropdown-menu[x-placement^="right"],
.dropdown-menu[x-placement^="top"] {
right: auto;
bottom: auto;
}
.dropdown-divider {
height: 0;
margin: 0.5rem 0;
overflow: hidden;
border-top: 1px solid #e9ecef;
}
.dropdown-item {
display: block;
width: 100%;
padding: 0.25rem 1rem;
clear: both;
font-weight: 400;
color: #212529;
text-align: inherit;
white-space: nowrap;
background-color: transparent;
border: 0;
}
.dropdown-item:focus,
.dropdown-item:hover {
color: #16181b;
text-decoration: none;
background-color: #f8f9fa;
}
.dropdown-item.active,
.dropdown-item:active {
color: #fff;
text-decoration: none;
background-color: <?php echo $accent_color;?>;
}
.dropdown-item.disabled,
.dropdown-item:disabled {
color: #6c757d;
pointer-events: none;
background-color: transparent;
}
.dropdown-menu.show {
display: block;
}
.dropdown-header {
display: block;
padding: 0.5rem 1rem;
margin-bottom: 0;
font-size: 0.875rem;
color: #6c757d;
white-space: nowrap;
}
.dropdown-item-text {
display: block;
padding: 0.25rem 1rem;
color: #212529;
}
.btn-group,
.btn-group-vertical {
position: relative;
display: inline-flex;
vertical-align: middle;
}
.btn-group-vertical > .btn,
.btn-group > .btn {
position: relative;
flex: 1 1 auto;
}
.btn-group-vertical > .btn:hover,
.btn-group > .btn:hover {
z-index: 1;
}
.btn-group-vertical > .btn.active,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn:focus,
.btn-group > .btn.active,
.btn-group > .btn:active,
.btn-group > .btn:focus {
z-index: 1;
}
.btn-toolbar {
display: flex;
flex-wrap: wrap;
justify-content: flex-start;
}
.btn-toolbar .input-group {
width: auto;
}
.btn-group > .btn-group:not(:first-child),
.btn-group > .btn:not(:first-child) {
margin-left: -1px;
}
.btn-group > .btn-group:not(:last-child) > .btn,
.btn-group > .btn:not(:last-child):not(.dropdown-toggle) {
border-top-right-radius: 0;
border-bottom-right-radius: 0;
}
.btn-group > .btn-group:not(:first-child) > .btn,
.btn-group > .btn:not(:first-child) {
border-top-left-radius: 0;
border-bottom-left-radius: 0;
}
.dropdown-toggle-split {
padding-right: 0.5625rem;
padding-left: 0.5625rem;
}
.dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after {
margin-left: 0;
}
.dropleft .dropdown-toggle-split::before {
margin-right: 0;
}
.btn-group-sm > .btn + .dropdown-toggle-split,
.btn-sm + .dropdown-toggle-split {
padding-right: 0.375rem;
padding-left: 0.375rem;
}
.btn-group-lg > .btn + .dropdown-toggle-split,
.btn-lg + .dropdown-toggle-split {
padding-right: 0.75rem;
padding-left: 0.75rem;
}
.btn-group.show .dropdown-toggle {
box-shadow: none;
}
.btn-group.show .dropdown-toggle.btn-link {
box-shadow: none;
}
.btn-group-vertical {
flex-direction: column;
align-items: flex-start;
justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
width: 100%;
}
.btn-group-vertical > .btn-group:not(:first-child),
.btn-group-vertical > .btn:not(:first-child) {
margin-top: -1px;
}
.btn-group-vertical > .btn-group:not(:last-child) > .btn,
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle) {
border-bottom-right-radius: 0;
border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:not(:first-child) > .btn,
.btn-group-vertical > .btn:not(:first-child) {
border-top-left-radius: 0;
border-top-right-radius: 0;
}
.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
margin-bottom: 0;
}
.btn-group-toggle > .btn input[type="checkbox"],
.btn-group-toggle > .btn input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"] {
position: absolute;
clip: rect(0, 0, 0, 0);
pointer-events: none;
}
.input-group {
position: relative;
display: flex;
flex-wrap: wrap;
align-items: stretch;
width: 100%;
}
.input-group > .custom-file,
.input-group > .custom-select,
.input-group > .form-control,
.input-group > .form-control-plaintext {
position: relative;
flex: 1 1 auto;
width: 1%;
min-width: 0;
margin-bottom: 0;
}
.input-group > .custom-file + .custom-file,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .form-control,
.input-group > .custom-select + .custom-file,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .form-control,
.input-group > .form-control + .custom-file,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .form-control,
.input-group > .form-control-plaintext + .custom-file,
.input-group > .form-control-plaintext + .custom-select,
.input-group > .form-control-plaintext + .form-control {
margin-left: -1px;
}
.input-group > .custom-file .custom-file-input:focus ~ .custom-file-label,
.input-group > .custom-select:focus,
.input-group > .form-control:focus {
z-index: 3;
}
.input-group > .custom-file .custom-file-input:focus {
z-index: 4;
}
.input-group > .custom-select:not(:last-child),
.input-group > .form-control:not(:last-child) {
border-top-right-radius: 0;
border-bottom-right-radius: 0;
}
.input-group > .custom-select:not(:first-child),
.input-group > .form-control:not(:first-child) {
border-top-left-radius: 0;
border-bottom-left-radius: 0;
}
.input-group > .custom-file {
display: flex;
align-items: center;
}
.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label::after {
border-top-right-radius: 0;
border-bottom-right-radius: 0;
}
.input-group > .custom-file:not(:first-child) .custom-file-label {
border-top-left-radius: 0;
border-bottom-left-radius: 0;
}
.input-group-append,
.input-group-prepend {
display: flex;
}
.input-group-append .btn,
.input-group-prepend .btn {
position: relative;
z-index: 2;
}
.input-group-append .btn:focus,
.input-group-prepend .btn:focus {
z-index: 3;
}
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .btn,
.input-group-append .input-group-text + .input-group-text,
.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-prepend .input-group-text + .input-group-text {
margin-left: -1px;
}
.input-group-prepend {
margin-right: -1px;
}
.input-group-append {
margin-left: -1px;
}
.input-group-text {
display: flex;
align-items: center;
padding: 0.375rem 0.75rem;
margin-bottom: 0;
font-size: 1rem;
font-weight: 400;
line-height: 1.5;
color: #495057;
text-align: center;
white-space: nowrap;
background-color: #e9ecef;
border: 1px solid #ced4da;
border-radius: 0.25rem;
}
.input-group-text input[type="checkbox"],
.input-group-text input[type="radio"] {
margin-top: 0;
}
.input-group-lg > .custom-select,
.input-group-lg > .form-control:not(textarea) {
height: calc(2.875rem + 2px);
}
.input-group-lg > .custom-select,
.input-group-lg > .form-control,
.input-group-lg > .input-group-append > .btn,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-prepend > .input-group-text {
padding: 0.5rem 1rem;
font-size: 1.25rem;
line-height: 1.5;
border-radius: 0.3rem;
}
.input-group-sm > .custom-select,
.input-group-sm > .form-control:not(textarea) {
height: calc(1.8125rem + 2px);
}
.input-group-sm > .custom-select,
.input-group-sm > .form-control,
.input-group-sm > .input-group-append > .btn,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-prepend > .input-group-text {
padding: 0.25rem 0.5rem;
font-size: 0.875rem;
line-height: 1.5;
border-radius: 0.2rem;
}
.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
padding-right: 1.75rem;
}
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child),
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text {
border-top-right-radius: 0;
border-bottom-right-radius: 0;
}
.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child),
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text {
border-top-left-radius: 0;
border-bottom-left-radius: 0;
}
.custom-control {
position: relative;
z-index: 1;
display: block;
min-height: 1.5rem;
padding-left: 1.5rem;
-webkit-print-color-adjust: exact;
color-adjust: exact;
}
.custom-control-inline {
display: inline-flex;
margin-right: 1rem;
}
.custom-control-input {
position: absolute;
left: 0;
z-index: -1;
width: 1rem;
height: 1.25rem;
opacity: 0;
}
.custom-control-input:checked ~ .custom-control-label::before {
color: #fff;
border-color: <?php echo $accent_color;?>;
background-color: <?php echo $accent_color;?>;
box-shadow: none;
}
.custom-control-input:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
border-color: #80bdff;
}
.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
color: #fff;
background-color: #b3d7ff;
border-color: #b3d7ff;
box-shadow: none;
}
.custom-control-input:disabled ~ .custom-control-label,
.custom-control-input[disabled] ~ .custom-control-label {
color: #6c757d;
}
.custom-control-input:disabled ~ .custom-control-label::before,
.custom-control-input[disabled] ~ .custom-control-label::before {
background-color: #e9ecef;
}
.custom-control-label {
position: relative;
margin-bottom: 0;
vertical-align: top;
}
.custom-control-label::before {
position: absolute;
top: 0.25rem;
left: -1.5rem;
display: block;
width: 1rem;
height: 1rem;
pointer-events: none;
content: "";
background-color: #dee2e6;
border: #adb5bd solid 1px;
box-shadow: inset 0 0.25rem 0.25rem rgba(0, 0, 0, 0.1);
}
.custom-control-label::after {
position: absolute;
top: 0.25rem;
left: -1.5rem;
display: block;
width: 1rem;
height: 1rem;
content: "";
background: no-repeat 50%/50% 50%;
}
.custom-checkbox .custom-control-label::before {
border-radius: 0.25rem;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
border-color: <?php echo $accent_color;?>;
background-color: <?php echo $accent_color;?>;
box-shadow: none;
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E");
}
.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
background-color: rgba(0, 123, 255, 0.5);
}
.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
background-color: rgba(0, 123, 255, 0.5);
}
.custom-radio .custom-control-label::before {
border-radius: 50%;
}
.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E");
}
.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
background-color: rgba(0, 123, 255, 0.5);
}
.custom-switch {
padding-left: 2.25rem;
}
.custom-switch .custom-control-label::before {
left: -2.25rem;
width: 1.75rem;
pointer-events: all;
border-radius: 0.5rem;
}
.custom-switch .custom-control-label::after {
top: calc(0.25rem + 2px);
left: calc(-2.25rem + 2px);
width: calc(1rem - 4px);
height: calc(1rem - 4px);
background-color: #adb5bd;
border-radius: 0.5rem;
transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
.custom-switch .custom-control-label::after {
transition: none;
}
}
.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
background-color: #dee2e6;
transform: translateX(0.75rem);
}
.custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
background-color: rgba(0, 123, 255, 0.5);
}
.custom-select {
display: inline-block;
width: 100%;
height: calc(2.25rem + 2px);
padding: 0.375rem 1.75rem 0.375rem 0.75rem;
font-size: 1rem;
font-weight: 400;
line-height: 1.5;
color: #495057;
vertical-align: middle;
background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center/8px 10px;
border: 1px solid #ced4da;
border-radius: 0.25rem;
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
}
.custom-select:focus {
border-color: #80bdff;
outline: 0;
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
}
.custom-select:focus::-ms-value {
color: #495057;
background-color: #fff;
}
.custom-select[multiple],
.custom-select[size]:not([size="1"]) {
height: auto;
padding-right: 0.75rem;
background-image: none;
}
.custom-select:disabled {
color: #6c757d;
background-color: #e9ecef;
}
.custom-select::-ms-expand {
display: none;
}
.custom-select:-moz-focusring {
color: transparent;
text-shadow: 0 0 0 #495057;
}
.custom-select-sm {
height: calc(1.8125rem + 2px);
padding-top: 0.25rem;
padding-bottom: 0.25rem;
padding-left: 0.5rem;
font-size: 75%;
}
.custom-select-lg {
height: calc(2.875rem + 2px);
padding-top: 0.5rem;
padding-bottom: 0.5rem;
padding-left: 1rem;
font-size: 125%;
}
.custom-file {
position: relative;
display: inline-block;
width: 100%;
height: calc(2.25rem + 2px);
margin-bottom: 0;
}
.custom-file-input {
position: relative;
z-index: 2;
width: 100%;
height: calc(2.25rem + 2px);
margin: 0;
opacity: 0;
}
.custom-file-input:focus ~ .custom-file-label {
border-color: #80bdff;
box-shadow: none;
}
.custom-file-input:disabled ~ .custom-file-label,
.custom-file-input[disabled] ~ .custom-file-label {
background-color: #e9ecef;
}
.custom-file-input:lang(en) ~ .custom-file-label::after {
content: "Browse";
}
.custom-file-input ~ .custom-file-label[data-browse]::after {
content: attr(data-browse);
}
.custom-file-label {
position: absolute;
top: 0;
right: 0;
left: 0;
z-index: 1;
height: calc(2.25rem + 2px);
padding: 0.375rem 0.75rem;
font-weight: 400;
line-height: 1.5;
color: #495057;
background-color: #fff;
border: 1px solid #ced4da;
border-radius: 0.25rem;
box-shadow: none;
}
.custom-file-label::after {
position: absolute;
top: 0;
right: 0;
bottom: 0;
z-index: 3;
display: block;
height: 2.25rem;
padding: 0.375rem 0.75rem;
line-height: 1.5;
color: #495057;
content: "Browse";
background-color: #e9ecef;
border-left: inherit;
border-radius: 0 0.25rem 0.25rem 0;
}
.custom-range {
width: 100%;
height: 1rem;
padding: 0;
background-color: transparent;
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
}
.custom-range:focus {
outline: 0;
}
.custom-range:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.custom-range:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.custom-range:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.custom-range::-moz-focus-outer {
border: 0;
}
.custom-range::-webkit-slider-thumb {
width: 1rem;
height: 1rem;
margin-top: -0.25rem;
background-color: <?php echo $accent_color;?>;
border: 0;
border-radius: 1rem;
box-shadow: 0 0.1rem 0.25rem rgba(0, 0, 0, 0.1);
-webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
-webkit-appearance: none;
appearance: none;
}
@media (prefers-reduced-motion: reduce) {
.custom-range::-webkit-slider-thumb {
-webkit-transition: none;
transition: none;
}
}
.custom-range::-webkit-slider-thumb:active {
background-color: #b3d7ff;
}
.custom-range::-webkit-slider-runnable-track {
width: 100%;
height: 0.5rem;
color: transparent;
cursor: pointer;
background-color: #dee2e6;
border-color: transparent;
border-radius: 1rem;
box-shadow: inset 0 0.25rem 0.25rem rgba(0, 0, 0, 0.1);
}
.custom-range::-moz-range-thumb {
width: 1rem;
height: 1rem;
background-color: <?php echo $accent_color;?>;
border: 0;
border-radius: 1rem;
box-shadow: 0 0.1rem 0.25rem rgba(0, 0, 0, 0.1);
-moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
-moz-appearance: none;
appearance: none;
}
@media (prefers-reduced-motion: reduce) {
.custom-range::-moz-range-thumb {
-moz-transition: none;
transition: none;
}
}
.custom-range::-moz-range-thumb:active {
background-color: #b3d7ff;
}
.custom-range::-moz-range-track {
width: 100%;
height: 0.5rem;
color: transparent;
cursor: pointer;
background-color: #dee2e6;
border-color: transparent;
border-radius: 1rem;
box-shadow: inset 0 0.25rem 0.25rem rgba(0, 0, 0, 0.1);
}
.custom-range::-ms-thumb {
width: 1rem;
height: 1rem;
margin-top: 0;
margin-right: 0;
margin-left: 0;
background-color: <?php echo $accent_color;?>;
border: 0;
border-radius: 1rem;
box-shadow: 0 0.1rem 0.25rem rgba(0, 0, 0, 0.1);
-ms-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
appearance: none;
}
@media (prefers-reduced-motion: reduce) {
.custom-range::-ms-thumb {
-ms-transition: none;
transition: none;
}
}
.custom-range::-ms-thumb:active {
background-color: #b3d7ff;
}
.custom-range::-ms-track {
width: 100%;
height: 0.5rem;
color: transparent;
cursor: pointer;
background-color: transparent;
border-color: transparent;
border-width: 0.5rem;
box-shadow: inset 0 0.25rem 0.25rem rgba(0, 0, 0, 0.1);
}
.custom-range::-ms-fill-lower {
background-color: #dee2e6;
border-radius: 1rem;
}
.custom-range::-ms-fill-upper {
margin-right: 15px;
background-color: #dee2e6;
border-radius: 1rem;
}
.custom-range:disabled::-webkit-slider-thumb {
background-color: #adb5bd;
}
.custom-range:disabled::-webkit-slider-runnable-track {
cursor: default;
}
.custom-range:disabled::-moz-range-thumb {
background-color: #adb5bd;
}
.custom-range:disabled::-moz-range-track {
cursor: default;
}
.custom-range:disabled::-ms-thumb {
background-color: #adb5bd;
}
.custom-control-label::before,
.custom-file-label,
.custom-select {
transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
.custom-control-label::before,
.custom-file-label,
.custom-select {
transition: none;
}
}
.nav {
display: flex;
flex-wrap: wrap;
padding-left: 0;
margin-bottom: 0;
list-style: none;
}
.nav-link {
display: block;
padding: 0.5rem 1rem;
}
.nav-link:focus,
.nav-link:hover {
text-decoration: none;
}
.nav-link.disabled {
color: #6c757d;
pointer-events: none;
cursor: default;
}
.nav-tabs {
border-bottom: 1px solid #dee2e6;
}
.nav-tabs .nav-item {
margin-bottom: -1px;
}
.nav-tabs .nav-link {
border: 1px solid transparent;
border-top-left-radius: 0.25rem;
border-top-right-radius: 0.25rem;
}
.nav-tabs .nav-link:focus,
.nav-tabs .nav-link:hover {
border-color: #e9ecef #e9ecef #dee2e6;
}
.nav-tabs .nav-link.disabled {
color: #6c757d;
background-color: transparent;
border-color: transparent;
}
.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
color: #495057;
background-color: #fff;
border-color: #dee2e6 #dee2e6 #fff;
}
.nav-tabs .dropdown-menu {
margin-top: -1px;
border-top-left-radius: 0;
border-top-right-radius: 0;
}
.nav-pills .nav-link {
border-radius: 0.25rem;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
color: #fff;
background-color: <?php echo $accent_color;?>;
}
.nav-fill .nav-item,
.nav-fill > .nav-link {
flex: 1 1 auto;
text-align: center;
}
.nav-justified .nav-item,
.nav-justified > .nav-link {
flex-basis: 0;
flex-grow: 1;
text-align: center;
}
.tab-content > .tab-pane {
display: none;
}
.tab-content > .active {
display: block;
}
.navbar {
position: relative;
display: flex;
flex-wrap: wrap;
align-items: center;
justify-content: space-between;
padding: 0.5rem 0.5rem;
}
.navbar .container,
.navbar .container-fluid,
.navbar .container-lg,
.navbar .container-md,
.navbar .container-sm,
.navbar .container-xl {
display: flex;
flex-wrap: wrap;
align-items: center;
justify-content: space-between;
}
.navbar-brand {
display: inline-block;
padding-top: 0.3125rem;
padding-bottom: 0.3125rem;
margin-right: 0.5rem;
font-size: 1.25rem;
line-height: inherit;
white-space: nowrap;
}
.navbar-brand:focus,
.navbar-brand:hover {
text-decoration: none;
}
.navbar-nav {
display: flex;
flex-direction: column;
padding-left: 0;
margin-bottom: 0;
list-style: none;
}
.navbar-nav .nav-link {
padding-right: 0;
padding-left: 0;
}
.navbar-nav .dropdown-menu {
position: static;
float: none;
}
.navbar-text {
display: inline-block;
padding-top: 0.5rem;
padding-bottom: 0.5rem;
}
.navbar-collapse {
flex-basis: 100%;
flex-grow: 1;
align-items: center;
}
.navbar-toggler {
padding: 0.25rem 0.75rem;
font-size: 1.25rem;
line-height: 1;
background-color: transparent;
border: 1px solid transparent;
border-radius: 0.25rem;
}
.navbar-toggler:focus,
.navbar-toggler:hover {
text-decoration: none;
}
.navbar-toggler-icon {
display: inline-block;
width: 1.5em;
height: 1.5em;
vertical-align: middle;
content: "";
background: no-repeat center center;
background-size: 100% 100%;
}
@media (max-width: 575.98px) {
.navbar-expand-sm > .container,
.navbar-expand-sm > .container-fluid,
.navbar-expand-sm > .container-lg,
.navbar-expand-sm > .container-md,
.navbar-expand-sm > .container-sm,
.navbar-expand-sm > .container-xl {
padding-right: 0;
padding-left: 0;
}
}
@media (min-width: 576px) {
.navbar-expand-sm {
flex-flow: row nowrap;
justify-content: flex-start;
}
.navbar-expand-sm .navbar-nav {
flex-direction: row;
}
.navbar-expand-sm .navbar-nav .dropdown-menu {
position: absolute;
}
.navbar-expand-sm .navbar-nav .nav-link {
padding-right: 1rem;
padding-left: 1rem;
}
.navbar-expand-sm > .container,
.navbar-expand-sm > .container-fluid,
.navbar-expand-sm > .container-lg,
.navbar-expand-sm > .container-md,
.navbar-expand-sm > .container-sm,
.navbar-expand-sm > .container-xl {
flex-wrap: nowrap;
}
.navbar-expand-sm .navbar-collapse {
display: flex !important;
flex-basis: auto;
}
.navbar-expand-sm .navbar-toggler {
display: none;
}
}
@media (max-width: 767.98px) {
.navbar-expand-md > .container,
.navbar-expand-md > .container-fluid,
.navbar-expand-md > .container-lg,
.navbar-expand-md > .container-md,
.navbar-expand-md > .container-sm,
.navbar-expand-md > .container-xl {
padding-right: 0;
padding-left: 0;
}
}
@media (min-width: 768px) {
.navbar-expand-md {
flex-flow: row nowrap;
justify-content: flex-start;
}
.navbar-expand-md .navbar-nav {
flex-direction: row;
}
.navbar-expand-md .navbar-nav .dropdown-menu {
position: absolute;
}
.navbar-expand-md .navbar-nav .nav-link {
padding-right: 1rem;
padding-left: 1rem;
}
.navbar-expand-md > .container,
.navbar-expand-md > .container-fluid,
.navbar-expand-md > .container-lg,
.navbar-expand-md > .container-md,
.navbar-expand-md > .container-sm,
.navbar-expand-md > .container-xl {
flex-wrap: nowrap;
}
.navbar-expand-md .navbar-collapse {
display: flex !important;
flex-basis: auto;
}
.navbar-expand-md .navbar-toggler {
display: none;
}
}
@media (max-width: 991.98px) {
.navbar-expand-lg > .container,
.navbar-expand-lg > .container-fluid,
.navbar-expand-lg > .container-lg,
.navbar-expand-lg > .container-md,
.navbar-expand-lg > .container-sm,
.navbar-expand-lg > .container-xl {
padding-right: 0;
padding-left: 0;
}
}
@media (min-width: 992px) {
.navbar-expand-lg {
flex-flow: row nowrap;
justify-content: flex-start;
}
.navbar-expand-lg .navbar-nav {
flex-direction: row;
}
.navbar-expand-lg .navbar-nav .dropdown-menu {
position: absolute;
}
.navbar-expand-lg .navbar-nav .nav-link {
padding-right: 1rem;
padding-left: 1rem;
}
.navbar-expand-lg > .container,
.navbar-expand-lg > .container-fluid,
.navbar-expand-lg > .container-lg,
.navbar-expand-lg > .container-md,
.navbar-expand-lg > .container-sm,
.navbar-expand-lg > .container-xl {
flex-wrap: nowrap;
}
.navbar-expand-lg .navbar-collapse {
display: flex !important;
flex-basis: auto;
}
.navbar-expand-lg .navbar-toggler {
display: none;
}
}
@media (max-width: 1199.98px) {
.navbar-expand-xl > .container,
.navbar-expand-xl > .container-fluid,
.navbar-expand-xl > .container-lg,
.navbar-expand-xl > .container-md,
.navbar-expand-xl > .container-sm,
.navbar-expand-xl > .container-xl {
padding-right: 0;
padding-left: 0;
}
}
@media (min-width: 1200px) {
.navbar-expand-xl {
flex-flow: row nowrap;
justify-content: flex-start;
}
.navbar-expand-xl .navbar-nav {
flex-direction: row;
}
.navbar-expand-xl .navbar-nav .dropdown-menu {
position: absolute;
}
.navbar-expand-xl .navbar-nav .nav-link {
padding-right: 1rem;
padding-left: 1rem;
}
.navbar-expand-xl > .container,
.navbar-expand-xl > .container-fluid,
.navbar-expand-xl > .container-lg,
.navbar-expand-xl > .container-md,
.navbar-expand-xl > .container-sm,
.navbar-expand-xl > .container-xl {
flex-wrap: nowrap;
}
.navbar-expand-xl .navbar-collapse {
display: flex !important;
flex-basis: auto;
}
.navbar-expand-xl .navbar-toggler {
display: none;
}
}
.navbar-expand {
flex-flow: row nowrap;
justify-content: flex-start;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid,
.navbar-expand > .container-lg,
.navbar-expand > .container-md,
.navbar-expand > .container-sm,
.navbar-expand > .container-xl {
padding-right: 0;
padding-left: 0;
}
.navbar-expand .navbar-nav {
flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
padding-right: 1rem;
padding-left: 1rem;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid,
.navbar-expand > .container-lg,
.navbar-expand > .container-md,
.navbar-expand > .container-sm,
.navbar-expand > .container-xl {
flex-wrap: nowrap;
}
.navbar-expand .navbar-collapse {
display: flex !important;
flex-basis: auto;
}
.navbar-expand .navbar-toggler {
display: none;
}
.navbar-light .navbar-brand {
color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-brand:focus,
.navbar-light .navbar-brand:hover {
color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-nav .nav-link {
color: rgba(0, 0, 0, 0.5);
}
.navbar-light .navbar-nav .nav-link:focus,
.navbar-light .navbar-nav .nav-link:hover {
color: rgba(0, 0, 0, 0.7);
}
.navbar-light .navbar-nav .nav-link.disabled {
color: rgba(0, 0, 0, 0.3);
}
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .show > .nav-link {
color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-toggler {
color: rgba(0, 0, 0, 0.5);
border-color: rgba(0, 0, 0, 0.1);
}
.navbar-light .navbar-toggler-icon {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}
.navbar-light .navbar-text {
color: rgba(0, 0, 0, 0.5);
}
.navbar-light .navbar-text a {
color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-text a:focus,
.navbar-light .navbar-text a:hover {
color: rgba(0, 0, 0, 0.9);
}
.navbar-dark .navbar-brand {
color: #fff;
}
.navbar-dark .navbar-brand:focus,
.navbar-dark .navbar-brand:hover {
color: #fff;
}
.navbar-dark .navbar-nav .nav-link {
color: rgba(255, 255, 255, 0.75);
}
.navbar-dark .navbar-nav .nav-link:focus,
.navbar-dark .navbar-nav .nav-link:hover {
color: #fff;
}
.navbar-dark .navbar-nav .nav-link.disabled {
color: rgba(255, 255, 255, 0.25);
}
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .show > .nav-link {
color: #fff;
}
.navbar-dark .navbar-toggler {
color: rgba(255, 255, 255, 0.75);
border-color: rgba(255, 255, 255, 0.1);
}
.navbar-dark .navbar-toggler-icon {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.75%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}
.navbar-dark .navbar-text {
color: rgba(255, 255, 255, 0.75);
}
.navbar-dark .navbar-text a {
color: #fff;
}
.navbar-dark .navbar-text a:focus,
.navbar-dark .navbar-text a:hover {
color: #fff;
}
.card {
position: relative;
display: flex;
flex-direction: column;
min-width: 0;
word-wrap: break-word;
background-color: #fff;
background-clip: border-box;
border: 0 solid rgba(0, 0, 0, 0.125);
border-radius: 0.25rem;
}
.card > hr {
margin-right: 0;
margin-left: 0;
}
.card > .list-group {
border-top: inherit;
border-bottom: inherit;
}
.card > .list-group:first-child {
border-top-width: 0;
border-top-left-radius: calc(0.25rem - 0);
border-top-right-radius: calc(0.25rem - 0);
}
.card > .list-group:last-child {
border-bottom-width: 0;
border-bottom-right-radius: calc(0.25rem - 0);
border-bottom-left-radius: calc(0.25rem - 0);
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
border-top: 0;
}
.card-body {
flex: 1 1 auto;
min-height: 1px;
padding: 1.25rem;
}
.card-title {
margin-bottom: 0.75rem;
}
.card-subtitle {
margin-top: -0.375rem;
margin-bottom: 0;
}
.card-text:last-child {
margin-bottom: 0;
}
.card-link:hover {
text-decoration: none;
}
.card-link + .card-link {
margin-left: 1.25rem;
}
.card-header {
padding: 0.75rem 1.25rem;
margin-bottom: 0;
background-color: rgba(0, 0, 0, 0.03);
border-bottom: 0 solid rgba(0, 0, 0, 0.125);
}
.card-header:first-child {
border-radius: calc(0.25rem - 0) calc(0.25rem - 0) 0 0;
}
.card-footer {
padding: 0.75rem 1.25rem;
background-color: rgba(0, 0, 0, 0.03);
border-top: 0 solid rgba(0, 0, 0, 0.125);
}
.card-footer:last-child {
border-radius: 0 0 calc(0.25rem - 0) calc(0.25rem - 0);
}
.card-header-tabs {
margin-right: -0.625rem;
margin-bottom: -0.75rem;
margin-left: -0.625rem;
border-bottom: 0;
}
.card-header-pills {
margin-right: -0.625rem;
margin-left: -0.625rem;
}
.card-img-overlay {
position: absolute;
top: 0;
right: 0;
bottom: 0;
left: 0;
padding: 1.25rem;
border-radius: calc(0.25rem - 0);
}
.card-img,
.card-img-bottom,
.card-img-top {
flex-shrink: 0;
width: 100%;
}
.card-img,
.card-img-top {
border-top-left-radius: calc(0.25rem - 0);
border-top-right-radius: calc(0.25rem - 0);
}
.card-img,
.card-img-bottom {
border-bottom-right-radius: calc(0.25rem - 0);
border-bottom-left-radius: calc(0.25rem - 0);
}
.card-deck .card {
margin-bottom: 7.5px;
}
@media (min-width: 576px) {
.card-deck {
display: flex;
flex-flow: row wrap;
margin-right: -7.5px;
margin-left: -7.5px;
}
.card-deck .card {
flex: 1 0 0%;
margin-right: 7.5px;
margin-bottom: 0;
margin-left: 7.5px;
}
}
.card-group > .card {
margin-bottom: 7.5px;
}
@media (min-width: 576px) {
.card-group {
display: flex;
flex-flow: row wrap;
}
.card-group > .card {
flex: 1 0 0%;
margin-bottom: 0;
}
.card-group > .card + .card {
margin-left: 0;
border-left: 0;
}
.card-group > .card:not(:last-child) {
border-top-right-radius: 0;
border-bottom-right-radius: 0;
}
.card-group > .card:not(:last-child) .card-header,
.card-group > .card:not(:last-child) .card-img-top {
border-top-right-radius: 0;
}
.card-group > .card:not(:last-child) .card-footer,
.card-group > .card:not(:last-child) .card-img-bottom {
border-bottom-right-radius: 0;
}
.card-group > .card:not(:first-child) {
border-top-left-radius: 0;
border-bottom-left-radius: 0;
}
.card-group > .card:not(:first-child) .card-header,
.card-group > .card:not(:first-child) .card-img-top {
border-top-left-radius: 0;
}
.card-group > .card:not(:first-child) .card-footer,
.card-group > .card:not(:first-child) .card-img-bottom {
border-bottom-left-radius: 0;
}
}
.card-columns .card {
margin-bottom: 0.75rem;
}
@media (min-width: 576px) {
.card-columns {
-moz-column-count: 3;
column-count: 3;
-moz-column-gap: 1.25rem;
column-gap: 1.25rem;
orphans: 1;
widows: 1;
}
.card-columns .card {
display: inline-block;
width: 100%;
}
}
.accordion {
overflow-anchor: none;
}
.accordion > .card {
overflow: hidden;
}
.accordion > .card:not(:last-of-type) {
border-bottom: 0;
border-bottom-right-radius: 0;
border-bottom-left-radius: 0;
}
.accordion > .card:not(:first-of-type) {
border-top-left-radius: 0;
border-top-right-radius: 0;
}
.accordion > .card > .card-header {
border-radius: 0;
margin-bottom: 0;
}
.breadcrumb {
display: flex;
flex-wrap: wrap;
padding: 0.75rem 1rem;
margin-bottom: 1rem;
list-style: none;
background-color: #e9ecef;
border-radius: 0.25rem;
}
.breadcrumb-item {
display: flex;
}
.breadcrumb-item + .breadcrumb-item {
padding-left: 0.5rem;
}
.breadcrumb-item + .breadcrumb-item::before {
display: inline-block;
padding-right: 0.5rem;
color: #6c757d;
content: "/";
}
.breadcrumb-item + .breadcrumb-item:hover::before {
text-decoration: underline;
}
.breadcrumb-item + .breadcrumb-item:hover::before {
text-decoration: none;
}
.breadcrumb-item.active {
color: #6c757d;
}
.pagination {
display: flex;
padding-left: 0;
list-style: none;
border-radius: 0.25rem;
}
.page-link {
position: relative;
display: block;
padding: 0.5rem 0.75rem;
margin-left: -1px;
line-height: 1.25;
color: <?php echo $accent_color;?>;
background-color: #fff;
border: 1px solid #dee2e6;
}
.page-link:hover {
z-index: 2;
color: #0056b3;
text-decoration: none;
background-color: #e9ecef;
border-color: #dee2e6;
}
.page-link:focus {
z-index: 3;
outline: 0;
box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.page-item:first-child .page-link {
margin-left: 0;
border-top-left-radius: 0.25rem;
border-bottom-left-radius: 0.25rem;
}
.page-item:last-child .page-link {
border-top-right-radius: 0.25rem;
border-bottom-right-radius: 0.25rem;
}
.page-item.active .page-link {
z-index: 3;
color: #fff;
background-color: <?php echo $accent_color;?>;
border-color: <?php echo $accent_color;?>;
}
.page-item.disabled .page-link {
color: #6c757d;
pointer-events: none;
cursor: auto;
background-color: #fff;
border-color: #dee2e6;
}
.pagination-lg .page-link {
padding: 0.75rem 1.5rem;
font-size: 1.25rem;
line-height: 1.5;
}
.pagination-lg .page-item:first-child .page-link {
border-top-left-radius: 0.3rem;
border-bottom-left-radius: 0.3rem;
}
.pagination-lg .page-item:last-child .page-link {
border-top-right-radius: 0.3rem;
border-bottom-right-radius: 0.3rem;
}
.pagination-sm .page-link {
padding: 0.25rem 0.5rem;
font-size: 0.875rem;
line-height: 1.5;
}
.pagination-sm .page-item:first-child .page-link {
border-top-left-radius: 0.2rem;
border-bottom-left-radius: 0.2rem;
}
.pagination-sm .page-item:last-child .page-link {
border-top-right-radius: 0.2rem;
border-bottom-right-radius: 0.2rem;
}
.badge {
display: inline-block;
padding: 0.25em 0.4em;
font-size: 75%;
font-weight: 700;
line-height: 1;
text-align: center;
white-space: nowrap;
vertical-align: baseline;
border-radius: 0.25rem;
transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
.badge {
transition: none;
}
}
a.badge:focus,
a.badge:hover {
text-decoration: none;
}
.badge:empty {
display: none;
}
.btn .badge {
position: relative;
top: -1px;
}
.badge-pill {
padding-right: 0.6em;
padding-left: 0.6em;
border-radius: 10rem;
}
.badge-primary {
color: #fff;
background-color: <?php echo $accent_color;?>;
}
a.badge-primary:focus,
a.badge-primary:hover {
color: #fff;
background-color: #0062cc;
}
a.badge-primary.focus,
a.badge-primary:focus {
outline: 0;
box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}
.badge-secondary {
color: #fff;
background-color: #6c757d;
}
a.badge-secondary:focus,
a.badge-secondary:hover {
color: #fff;
background-color: #545b62;
}
a.badge-secondary.focus,
a.badge-secondary:focus {
outline: 0;
box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}
.badge-success {
color: #fff;
background-color: #28a745;
}
a.badge-success:focus,
a.badge-success:hover {
color: #fff;
background-color: #1e7e34;
}
a.badge-success.focus,
a.badge-success:focus {
outline: 0;
box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}
.badge-info {
color: #fff;
background-color: #17a2b8;
}
a.badge-info:focus,
a.badge-info:hover {
color: #fff;
background-color: #117a8b;
}
a.badge-info.focus,
a.badge-info:focus {
outline: 0;
box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}
.badge-warning {
color: #1f2d3d;
background-color: #ffc107;
}
a.badge-warning:focus,
a.badge-warning:hover {
color: #1f2d3d;
background-color: #d39e00;
}
a.badge-warning.focus,
a.badge-warning:focus {
outline: 0;
box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}
.badge-danger {
color: #fff;
background-color: #dc3545;
}
a.badge-danger:focus,
a.badge-danger:hover {
color: #fff;
background-color: #bd2130;
}
a.badge-danger.focus,
a.badge-danger:focus {
outline: 0;
box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}
.badge-light {
color: #1f2d3d;
background-color: #f8f9fa;
}
a.badge-light:focus,
a.badge-light:hover {
color: #1f2d3d;
background-color: #dae0e5;
}
a.badge-light.focus,
a.badge-light:focus {
outline: 0;
box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}
.badge-dark {
color: #fff;
background-color: <?php echo $maincolor;?>;
}
a.badge-dark:focus,
a.badge-dark:hover {
color: #fff;
background-color: #1d2124;
}
a.badge-dark.focus,
a.badge-dark:focus {
outline: 0;
box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}
.jumbotron {
padding: 2rem 1rem;
margin-bottom: 2rem;
background-color: #e9ecef;
border-radius: 0.3rem;
}
@media (min-width: 576px) {
.jumbotron {
padding: 4rem 2rem;
}
}
.jumbotron-fluid {
padding-right: 0;
padding-left: 0;
border-radius: 0;
}
.alert {
position: relative;
padding: 0.75rem 1.25rem;
margin-bottom: 1rem;
border: 1px solid transparent;
border-radius: 0.25rem;
}
.alert-heading {
color: inherit;
}
.alert-link {
font-weight: 700;
}
.alert-dismissible {
padding-right: 4rem;
}
.alert-dismissible .close,
.alert-dismissible .mailbox-attachment-close {
position: absolute;
top: 0;
right: 0;
z-index: 2;
padding: 0.75rem 1.25rem;
color: inherit;
}
.alert-primary {
color: #004085;
background-color: #cce5ff;
border-color: #b8daff;
}
.alert-primary hr {
border-top-color: #9fcdff;
}
.alert-primary .alert-link {
color: #002752;
}
.alert-secondary {
color: #383d41;
background-color: #e2e3e5;
border-color: #d6d8db;
}
.alert-secondary hr {
border-top-color: #c8cbcf;
}
.alert-secondary .alert-link {
color: #202326;
}
.alert-success {
color: #155724;
background-color: #d4edda;
border-color: #c3e6cb;
}
.alert-success hr {
border-top-color: #b1dfbb;
}
.alert-success .alert-link {
color: #0b2e13;
}
.alert-info {
color: #0c5460;
background-color: #d1ecf1;
border-color: #bee5eb;
}
.alert-info hr {
border-top-color: #abdde5;
}
.alert-info .alert-link {
color: #062c33;
}
.alert-warning {
color: #856404;
background-color: #fff3cd;
border-color: #ffeeba;
}
.alert-warning hr {
border-top-color: #ffe8a1;
}
.alert-warning .alert-link {
color: #533f03;
}
.alert-danger {
color: #721c24;
background-color: #f8d7da;
border-color: #f5c6cb;
}
.alert-danger hr {
border-top-color: #f1b0b7;
}
.alert-danger .alert-link {
color: #491217;
}
.alert-light {
color: #818182;
background-color: #fefefe;
border-color: #fdfdfe;
}
.alert-light hr {
border-top-color: #ececf6;
}
.alert-light .alert-link {
color: #686868;
}
.alert-dark {
color: #1b1e21;
background-color: #d6d8d9;
border-color: #c6c8ca;
}
.alert-dark hr {
border-top-color: #b9bbbe;
}
.alert-dark .alert-link {
color: #040505;
}
@-webkit-keyframes progress-bar-stripes {
from {
background-position: 1rem 0;
}
to {
background-position: 0 0;
}
}
@keyframes progress-bar-stripes {
from {
background-position: 1rem 0;
}
to {
background-position: 0 0;
}
}
.progress {
display: flex;
height: 1rem;
overflow: hidden;
line-height: 0;
font-size: 0.75rem;
background-color: #e9ecef;
border-radius: 0.25rem;
box-shadow: inset 0 0.1rem 0.1rem rgba(0, 0, 0, 0.1);
}
.progress-bar {
display: flex;
flex-direction: column;
justify-content: center;
overflow: hidden;
color: #fff;
text-align: center;
white-space: nowrap;
background-color: <?php echo $accent_color;?>;
transition: width 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
.progress-bar {
transition: none;
}
}
.progress-bar-striped {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
background-size: 1rem 1rem;
}
.progress-bar-animated {
-webkit-animation: progress-bar-stripes 1s linear infinite;
animation: progress-bar-stripes 1s linear infinite;
}
@media (prefers-reduced-motion: reduce) {
.progress-bar-animated {
-webkit-animation: none;
animation: none;
}
}
.media {
display: flex;
align-items: flex-start;
}
.media-body {
flex: 1;
}
.list-group {
display: flex;
flex-direction: column;
padding-left: 0;
margin-bottom: 0;
border-radius: 0.25rem;
}
.list-group-item-action {
width: 100%;
color: #495057;
text-align: inherit;
}
.list-group-item-action:focus,
.list-group-item-action:hover {
z-index: 1;
color: #495057;
text-decoration: none;
background-color: #f8f9fa;
}
.list-group-item-action:active {
color: #212529;
background-color: #e9ecef;
}
.list-group-item {
position: relative;
display: block;
padding: 0.75rem 1.25rem;
background-color: #fff;
border: 1px solid rgba(0, 0, 0, 0.125);
}
.list-group-item:first-child {
border-top-left-radius: inherit;
border-top-right-radius: inherit;
}
.list-group-item:last-child {
border-bottom-right-radius: inherit;
border-bottom-left-radius: inherit;
}
.list-group-item.disabled,
.list-group-item:disabled {
color: #6c757d;
pointer-events: none;
background-color: #fff;
}
.list-group-item.active {
z-index: 2;
color: #fff;
background-color: <?php echo $accent_color;?>;
border-color: <?php echo $accent_color;?>;
}
.list-group-item + .list-group-item {
border-top-width: 0;
}
.list-group-item + .list-group-item.active {
margin-top: -1px;
border-top-width: 1px;
}
.list-group-horizontal {
flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child {
border-bottom-left-radius: 0.25rem;
border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child {
border-top-right-radius: 0.25rem;
border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
border-top-width: 1px;
border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
margin-left: -1px;
border-left-width: 1px;
}
@media (min-width: 576px) {
.list-group-horizontal-sm {
flex-direction: row;
}
.list-group-horizontal-sm > .list-group-item:first-child {
border-bottom-left-radius: 0.25rem;
border-top-right-radius: 0;
}
.list-group-horizontal-sm > .list-group-item:last-child {
border-top-right-radius: 0.25rem;
border-bottom-left-radius: 0;
}
.list-group-horizontal-sm > .list-group-item.active {
margin-top: 0;
}
.list-group-horizontal-sm > .list-group-item + .list-group-item {
border-top-width: 1px;
border-left-width: 0;
}
.list-group-horizontal-sm > .list-group-item + .list-group-item.active {
margin-left: -1px;
border-left-width: 1px;
}
}
@media (min-width: 768px) {
.list-group-horizontal-md {
flex-direction: row;
}
.list-group-horizontal-md > .list-group-item:first-child {
border-bottom-left-radius: 0.25rem;
border-top-right-radius: 0;
}
.list-group-horizontal-md > .list-group-item:last-child {
border-top-right-radius: 0.25rem;
border-bottom-left-radius: 0;
}
.list-group-horizontal-md > .list-group-item.active {
margin-top: 0;
}
.list-group-horizontal-md > .list-group-item + .list-group-item {
border-top-width: 1px;
border-left-width: 0;
}
.list-group-horizontal-md > .list-group-item + .list-group-item.active {
margin-left: -1px;
border-left-width: 1px;
}
}
@media (min-width: 992px) {
.list-group-horizontal-lg {
flex-direction: row;
}
.list-group-horizontal-lg > .list-group-item:first-child {
border-bottom-left-radius: 0.25rem;
border-top-right-radius: 0;
}
.list-group-horizontal-lg > .list-group-item:last-child {
border-top-right-radius: 0.25rem;
border-bottom-left-radius: 0;
}
.list-group-horizontal-lg > .list-group-item.active {
margin-top: 0;
}
.list-group-horizontal-lg > .list-group-item + .list-group-item {
border-top-width: 1px;
border-left-width: 0;
}
.list-group-horizontal-lg > .list-group-item + .list-group-item.active {
margin-left: -1px;
border-left-width: 1px;
}
}
@media (min-width: 1200px) {
.list-group-horizontal-xl {
flex-direction: row;
}
.list-group-horizontal-xl > .list-group-item:first-child {
border-bottom-left-radius: 0.25rem;
border-top-right-radius: 0;
}
.list-group-horizontal-xl > .list-group-item:last-child {
border-top-right-radius: 0.25rem;
border-bottom-left-radius: 0;
}
.list-group-horizontal-xl > .list-group-item.active {
margin-top: 0;
}
.list-group-horizontal-xl > .list-group-item + .list-group-item {
border-top-width: 1px;
border-left-width: 0;
}
.list-group-horizontal-xl > .list-group-item + .list-group-item.active {
margin-left: -1px;
border-left-width: 1px;
}
}
.list-group-flush {
border-radius: 0;
}
.list-group-flush > .list-group-item {
border-width: 0 0 1px;
}
.list-group-flush > .list-group-item:last-child {
border-bottom-width: 0;
}
.list-group-item-primary {
color: #004085;
background-color: #b8daff;
}
.list-group-item-primary.list-group-item-action:focus,
.list-group-item-primary.list-group-item-action:hover {
color: #004085;
background-color: #9fcdff;
}
.list-group-item-primary.list-group-item-action.active {
color: #fff;
background-color: #004085;
border-color: #004085;
}
.list-group-item-secondary {
color: #383d41;
background-color: #d6d8db;
}
.list-group-item-secondary.list-group-item-action:focus,
.list-group-item-secondary.list-group-item-action:hover {
color: #383d41;
background-color: #c8cbcf;
}
.list-group-item-secondary.list-group-item-action.active {
color: #fff;
background-color: #383d41;
border-color: #383d41;
}
.list-group-item-success {
color: #155724;
background-color: #c3e6cb;
}
.list-group-item-success.list-group-item-action:focus,
.list-group-item-success.list-group-item-action:hover {
color: #155724;
background-color: #b1dfbb;
}
.list-group-item-success.list-group-item-action.active {
color: #fff;
background-color: #155724;
border-color: #155724;
}
.list-group-item-info {
color: #0c5460;
background-color: #bee5eb;
}
.list-group-item-info.list-group-item-action:focus,
.list-group-item-info.list-group-item-action:hover {
color: #0c5460;
background-color: #abdde5;
}
.list-group-item-info.list-group-item-action.active {
color: #fff;
background-color: #0c5460;
border-color: #0c5460;
}
.list-group-item-warning {
color: #856404;
background-color: #ffeeba;
}
.list-group-item-warning.list-group-item-action:focus,
.list-group-item-warning.list-group-item-action:hover {
color: #856404;
background-color: #ffe8a1;
}
.list-group-item-warning.list-group-item-action.active {
color: #fff;
background-color: #856404;
border-color: #856404;
}
.list-group-item-danger {
color: #721c24;
background-color: #f5c6cb;
}
.list-group-item-danger.list-group-item-action:focus,
.list-group-item-danger.list-group-item-action:hover {
color: #721c24;
background-color: #f1b0b7;
}
.list-group-item-danger.list-group-item-action.active {
color: #fff;
background-color: #721c24;
border-color: #721c24;
}
.list-group-item-light {
color: #818182;
background-color: #fdfdfe;
}
.list-group-item-light.list-group-item-action:focus,
.list-group-item-light.list-group-item-action:hover {
color: #818182;
background-color: #ececf6;
}
.list-group-item-light.list-group-item-action.active {
color: #fff;
background-color: #818182;
border-color: #818182;
}
.list-group-item-dark {
color: #1b1e21;
background-color: #c6c8ca;
}
.list-group-item-dark.list-group-item-action:focus,
.list-group-item-dark.list-group-item-action:hover {
color: #1b1e21;
background-color: #b9bbbe;
}
.list-group-item-dark.list-group-item-action.active {
color: #fff;
background-color: #1b1e21;
border-color: #1b1e21;
}
.close,
.mailbox-attachment-close {
float: right;
font-size: 1.5rem;
font-weight: 700;
line-height: 1;
color: #000;
text-shadow: 0 1px 0 #fff;
opacity: 0.5;
}
.close:hover,
.mailbox-attachment-close:hover {
color: #000;
text-decoration: none;
}
.close:not(:disabled):not(.disabled):focus,
.close:not(:disabled):not(.disabled):hover,
.mailbox-attachment-close:not(:disabled):not(.disabled):focus,
.mailbox-attachment-close:not(:disabled):not(.disabled):hover {
opacity: 0.75;
}
button.close,
button.mailbox-attachment-close {
padding: 0;
background-color: transparent;
border: 0;
}
a.close.disabled,
a.disabled.mailbox-attachment-close {
pointer-events: none;
}
.toast {
flex-basis: 350px;
max-width: 350px;
font-size: 0.875rem;
background-color: rgba(255, 255, 255, 0.85);
background-clip: padding-box;
border: 1px solid rgba(0, 0, 0, 0.1);
box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
opacity: 0;
border-radius: 0.25rem;
}
.toast:not(:last-child) {
margin-bottom: 0.75rem;
}
.toast.showing {
opacity: 1;
}
.toast.show {
display: block;
opacity: 1;
}
.toast.hide {
display: none;
}
.toast-header {
display: flex;
align-items: center;
padding: 0.25rem 0.75rem;
color: #6c757d;
background-color: rgba(255, 255, 255, 0.85);
background-clip: padding-box;
border-bottom: 1px solid rgba(0, 0, 0, 0.05);
border-top-left-radius: calc(0.25rem - 1px);
border-top-right-radius: calc(0.25rem - 1px);
}
.toast-body {
padding: 0.75rem;
}
.modal-open {
overflow: hidden;
}
.modal-open .modal {
overflow-x: hidden;
overflow-y: auto;
}
.modal {
position: fixed;
top: 0;
left: 0;
z-index: 1050;
display: none;
width: 100%;
height: 100%;
overflow: hidden;
outline: 0;
}
.modal-dialog {
position: relative;
width: auto;
margin: 0.5rem;
pointer-events: none;
}
.modal.fade .modal-dialog {
transition: transform 0.3s ease-out;
transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
.modal.fade .modal-dialog {
transition: none;
}
}
.modal.show .modal-dialog {
transform: none;
}
.modal.modal-static .modal-dialog {
transform: scale(1.02);
}
.modal-dialog-scrollable {
display: flex;
max-height: calc(100% - 1rem);
}
.modal-dialog-scrollable .modal-content {
max-height: calc(100vh - 1rem);
overflow: hidden;
}
.modal-dialog-scrollable .modal-footer,
.modal-dialog-scrollable .modal-header {
flex-shrink: 0;
}
.modal-dialog-scrollable .modal-body {
overflow-y: auto;
}
.modal-dialog-centered {
display: flex;
align-items: center;
min-height: calc(100% - 1rem);
}
.modal-dialog-centered::before {
display: block;
height: calc(100vh - 1rem);
height: -webkit-min-content;
height: -moz-min-content;
height: min-content;
content: "";
}
.modal-dialog-centered.modal-dialog-scrollable {
flex-direction: column;
justify-content: center;
height: 100%;
}
.modal-dialog-centered.modal-dialog-scrollable .modal-content {
max-height: none;
}
.modal-dialog-centered.modal-dialog-scrollable::before {
content: none;
}
.modal-content {
position: relative;
display: flex;
flex-direction: column;
width: 100%;
pointer-events: auto;
background-color: #fff;
background-clip: padding-box;
border: 1px solid rgba(0, 0, 0, 0.2);
border-radius: 0.3rem;
box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.5);
outline: 0;
}
.modal-backdrop {
position: fixed;
top: 0;
left: 0;
z-index: 1040;
width: 100vw;
height: 100vh;
background-color: #000;
}
.modal-backdrop.fade {
opacity: 0;
}
.modal-backdrop.show {
opacity: 0.5;
}
.modal-header {
display: flex;
align-items: flex-start;
justify-content: space-between;
padding: 1rem;
border-bottom: 1px solid #e9ecef;
border-top-left-radius: calc(0.3rem - 1px);
border-top-right-radius: calc(0.3rem - 1px);
}
.modal-header .close,
.modal-header .mailbox-attachment-close {
padding: 1rem;
margin: -1rem -1rem -1rem auto;
}
.modal-title {
margin-bottom: 0;
line-height: 1.5;
}
.modal-body {
position: relative;
flex: 1 1 auto;
padding: 1rem;
}
.modal-footer {
display: flex;
flex-wrap: wrap;
align-items: center;
justify-content: flex-end;
padding: 0.75rem;
border-top: 1px solid #e9ecef;
border-bottom-right-radius: calc(0.3rem - 1px);
border-bottom-left-radius: calc(0.3rem - 1px);
}
.modal-footer > * {
margin: 0.25rem;
}
.modal-scrollbar-measure {
position: absolute;
top: -9999px;
width: 50px;
height: 50px;
overflow: scroll;
}
@media (min-width: 576px) {
.modal-dialog {
max-width: 500px;
margin: 1.75rem auto;
}
.modal-dialog-scrollable {
max-height: calc(100% - 3.5rem);
}
.modal-dialog-scrollable .modal-content {
max-height: calc(100vh - 3.5rem);
}
.modal-dialog-centered {
min-height: calc(100% - 3.5rem);
}
.modal-dialog-centered::before {
height: calc(100vh - 3.5rem);
height: -webkit-min-content;
height: -moz-min-content;
height: min-content;
}
.modal-content {
box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.5);
}
.modal-sm {
max-width: 300px;
}
}
@media (min-width: 992px) {
.modal-lg,
.modal-xl {
max-width: 800px;
}
}
@media (min-width: 1200px) {
.modal-xl {
max-width: 1140px;
}
}
.tooltip {
position: absolute;
z-index: 1070;
display: block;
margin: 0;
font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
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
font-size: 0.875rem;
word-wrap: break-word;
opacity: 0;
}
.tooltip.show {
opacity: 0.9;
}
.tooltip .arrow {
position: absolute;
display: block;
width: 0.8rem;
height: 0.4rem;
}
.tooltip .arrow::before {
position: absolute;
content: "";
border-color: transparent;
border-style: solid;
}
.bs-tooltip-auto[x-placement^="top"],
.bs-tooltip-top {
padding: 0.4rem 0;
}
.bs-tooltip-auto[x-placement^="top"] .arrow,
.bs-tooltip-top .arrow {
bottom: 0;
}
.bs-tooltip-auto[x-placement^="top"] .arrow::before,
.bs-tooltip-top .arrow::before {
top: 0;
border-width: 0.4rem 0.4rem 0;
border-top-color: #000;
}
.bs-tooltip-auto[x-placement^="right"],
.bs-tooltip-right {
padding: 0 0.4rem;
}
.bs-tooltip-auto[x-placement^="right"] .arrow,
.bs-tooltip-right .arrow {
left: 0;
width: 0.4rem;
height: 0.8rem;
}
.bs-tooltip-auto[x-placement^="right"] .arrow::before,
.bs-tooltip-right .arrow::before {
right: 0;
border-width: 0.4rem 0.4rem 0.4rem 0;
border-right-color: #000;
}
.bs-tooltip-auto[x-placement^="bottom"],
.bs-tooltip-bottom {
padding: 0.4rem 0;
}
.bs-tooltip-auto[x-placement^="bottom"] .arrow,
.bs-tooltip-bottom .arrow {
top: 0;
}
.bs-tooltip-auto[x-placement^="bottom"] .arrow::before,
.bs-tooltip-bottom .arrow::before {
bottom: 0;
border-width: 0 0.4rem 0.4rem;
border-bottom-color: #000;
}
.bs-tooltip-auto[x-placement^="left"],
.bs-tooltip-left {
padding: 0 0.4rem;
}
.bs-tooltip-auto[x-placement^="left"] .arrow,
.bs-tooltip-left .arrow {
right: 0;
width: 0.4rem;
height: 0.8rem;
}
.bs-tooltip-auto[x-placement^="left"] .arrow::before,
.bs-tooltip-left .arrow::before {
left: 0;
border-width: 0.4rem 0 0.4rem 0.4rem;
border-left-color: #000;
}
.tooltip-inner {
max-width: 200px;
padding: 0.25rem 0.5rem;
color: #fff;
text-align: center;
background-color: #000;
border-radius: 0.25rem;
}
.popover {
position: absolute;
top: 0;
left: 0;
z-index: 1060;
display: block;
max-width: 276px;
font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
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
font-size: 0.875rem;
word-wrap: break-word;
background-color: #fff;
background-clip: padding-box;
border: 1px solid rgba(0, 0, 0, 0.2);
border-radius: 0.3rem;
box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.2);
}
.popover .arrow {
position: absolute;
display: block;
width: 1rem;
height: 0.5rem;
margin: 0 0.3rem;
}
.popover .arrow::after,
.popover .arrow::before {
position: absolute;
display: block;
content: "";
border-color: transparent;
border-style: solid;
}
.bs-popover-auto[x-placement^="top"],
.bs-popover-top {
margin-bottom: 0.5rem;
}
.bs-popover-auto[x-placement^="top"] > .arrow,
.bs-popover-top > .arrow {
bottom: calc(-0.5rem - 1px);
}
.bs-popover-auto[x-placement^="top"] > .arrow::before,
.bs-popover-top > .arrow::before {
bottom: 0;
border-width: 0.5rem 0.5rem 0;
border-top-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-auto[x-placement^="top"] > .arrow::after,
.bs-popover-top > .arrow::after {
bottom: 1px;
border-width: 0.5rem 0.5rem 0;
border-top-color: #fff;
}
.bs-popover-auto[x-placement^="right"],
.bs-popover-right {
margin-left: 0.5rem;
}
.bs-popover-auto[x-placement^="right"] > .arrow,
.bs-popover-right > .arrow {
left: calc(-0.5rem - 1px);
width: 0.5rem;
height: 1rem;
margin: 0.3rem 0;
}
.bs-popover-auto[x-placement^="right"] > .arrow::before,
.bs-popover-right > .arrow::before {
left: 0;
border-width: 0.5rem 0.5rem 0.5rem 0;
border-right-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-auto[x-placement^="right"] > .arrow::after,
.bs-popover-right > .arrow::after {
left: 1px;
border-width: 0.5rem 0.5rem 0.5rem 0;
border-right-color: #fff;
}
.bs-popover-auto[x-placement^="bottom"],
.bs-popover-bottom {
margin-top: 0.5rem;
}
.bs-popover-auto[x-placement^="bottom"] > .arrow,
.bs-popover-bottom > .arrow {
top: calc(-0.5rem - 1px);
}
.bs-popover-auto[x-placement^="bottom"] > .arrow::before,
.bs-popover-bottom > .arrow::before {
top: 0;
border-width: 0 0.5rem 0.5rem 0.5rem;
border-bottom-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-auto[x-placement^="bottom"] > .arrow::after,
.bs-popover-bottom > .arrow::after {
top: 1px;
border-width: 0 0.5rem 0.5rem 0.5rem;
border-bottom-color: #fff;
}
.bs-popover-auto[x-placement^="bottom"] .popover-header::before,
.bs-popover-bottom .popover-header::before {
position: absolute;
top: 0;
left: 50%;
display: block;
width: 1rem;
margin-left: -0.5rem;
content: "";
border-bottom: 1px solid #f7f7f7;
}
.bs-popover-auto[x-placement^="left"],
.bs-popover-left {
margin-right: 0.5rem;
}
.bs-popover-auto[x-placement^="left"] > .arrow,
.bs-popover-left > .arrow {
right: calc(-0.5rem - 1px);
width: 0.5rem;
height: 1rem;
margin: 0.3rem 0;
}
.bs-popover-auto[x-placement^="left"] > .arrow::before,
.bs-popover-left > .arrow::before {
right: 0;
border-width: 0.5rem 0 0.5rem 0.5rem;
border-left-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-auto[x-placement^="left"] > .arrow::after,
.bs-popover-left > .arrow::after {
right: 1px;
border-width: 0.5rem 0 0.5rem 0.5rem;
border-left-color: #fff;
}
.popover-header {
padding: 0.5rem 0.75rem;
margin-bottom: 0;
font-size: 1rem;
color: inherit;
background-color: #f7f7f7;
border-bottom: 1px solid #ebebeb;
border-top-left-radius: calc(0.3rem - 1px);
border-top-right-radius: calc(0.3rem - 1px);
}
.popover-header:empty {
display: none;
}
.popover-body {
padding: 0.5rem 0.75rem;
color: #212529;
}
.carousel {
position: relative;
}
.carousel.pointer-event {
touch-action: pan-y;
}
.carousel-inner {
position: relative;
width: 100%;
overflow: hidden;
}
.carousel-inner::after {
display: block;
clear: both;
content: "";
}
.carousel-item {
position: relative;
display: none;
float: left;
width: 100%;
margin-right: -100%;
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
transition: transform 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
.carousel-item {
transition: none;
}
}
.carousel-item-next,
.carousel-item-prev,
.carousel-item.active {
display: block;
}
.active.carousel-item-right,
.carousel-item-next:not(.carousel-item-left) {
transform: translateX(100%);
}
.active.carousel-item-left,
.carousel-item-prev:not(.carousel-item-right) {
transform: translateX(-100%);
}
.carousel-fade .carousel-item {
opacity: 0;
transition-property: opacity;
transform: none;
}
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right,
.carousel-fade .carousel-item.active {
z-index: 1;
opacity: 1;
}
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
z-index: 0;
opacity: 0;
transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
transition: none;
}
}
.carousel-control-next,
.carousel-control-prev {
position: absolute;
top: 0;
bottom: 0;
z-index: 1;
display: flex;
align-items: center;
justify-content: center;
width: 15%;
color: #fff;
text-align: center;
opacity: 0.5;
transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
.carousel-control-next,
.carousel-control-prev {
transition: none;
}
}
.carousel-control-next:focus,
.carousel-control-next:hover,
.carousel-control-prev:focus,
.carousel-control-prev:hover {
color: #fff;
text-decoration: none;
outline: 0;
opacity: 0.9;
}
.carousel-control-prev {
left: 0;
}
.carousel-control-next {
right: 0;
}
.carousel-control-next-icon,
.carousel-control-prev-icon {
display: inline-block;
width: 20px;
height: 20px;
background: no-repeat 50%/100% 100%;
}
.carousel-control-prev-icon {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}
.carousel-control-next-icon {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
}
.carousel-indicators {
position: absolute;
right: 0;
bottom: 0;
left: 0;
z-index: 15;
display: flex;
justify-content: center;
padding-left: 0;
margin-right: 15%;
margin-left: 15%;
list-style: none;
}
.carousel-indicators li {
box-sizing: content-box;
flex: 0 1 auto;
width: 30px;
height: 3px;
margin-right: 3px;
margin-left: 3px;
text-indent: -999px;
cursor: pointer;
background-color: #fff;
background-clip: padding-box;
border-top: 10px solid transparent;
border-bottom: 10px solid transparent;
opacity: 0.5;
transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
.carousel-indicators li {
transition: none;
}
}
.carousel-indicators .active {
opacity: 1;
}
.carousel-caption {
position: absolute;
right: 15%;
bottom: 20px;
left: 15%;
z-index: 10;
padding-top: 20px;
padding-bottom: 20px;
color: #fff;
text-align: center;
}
@-webkit-keyframes spinner-border {
to {
transform: rotate(360deg);
}
}
@keyframes spinner-border {
to {
transform: rotate(360deg);
}
}
.spinner-border {
display: inline-block;
width: 2rem;
height: 2rem;
vertical-align: text-bottom;
border: 0.25em solid currentColor;
border-right-color: transparent;
border-radius: 50%;
-webkit-animation: spinner-border 0.75s linear infinite;
animation: spinner-border 0.75s linear infinite;
}
.spinner-border-sm {
width: 1rem;
height: 1rem;
border-width: 0.2em;
}
@-webkit-keyframes spinner-grow {
0% {
transform: scale(0);
}
50% {
opacity: 1;
transform: none;
}
}
@keyframes spinner-grow {
0% {
transform: scale(0);
}
50% {
opacity: 1;
transform: none;
}
}
.spinner-grow {
display: inline-block;
width: 2rem;
height: 2rem;
vertical-align: text-bottom;
background-color: currentColor;
border-radius: 50%;
opacity: 0;
-webkit-animation: spinner-grow 0.75s linear infinite;
animation: spinner-grow 0.75s linear infinite;
}
.spinner-grow-sm {
width: 1rem;
height: 1rem;
}
.align-baseline {
vertical-align: baseline !important;
}
.align-top {
vertical-align: top !important;
}
.align-middle {
vertical-align: middle !important;
}
.align-bottom {
vertical-align: bottom !important;
}
.align-text-bottom {
vertical-align: text-bottom !important;
}
.align-text-top {
vertical-align: text-top !important;
}
.bg-primary {
background-color: <?php echo $accent_color;?>; !important;
}
a.bg-primary:focus,
a.bg-primary:hover,
button.bg-primary:focus,
button.bg-primary:hover {
background-color: #0062cc !important;
}
.bg-secondary {
background-color: #6c757d !important;
}
a.bg-secondary:focus,
a.bg-secondary:hover,
button.bg-secondary:focus,
button.bg-secondary:hover {
background-color: #545b62 !important;
}
.bg-success {
background-color: #28a745 !important;
}
a.bg-success:focus,
a.bg-success:hover,
button.bg-success:focus,
button.bg-success:hover {
background-color: #1e7e34 !important;
}
.bg-info {
background-color: #17a2b8 !important;
}
a.bg-info:focus,
a.bg-info:hover,
button.bg-info:focus,
button.bg-info:hover {
background-color: #117a8b !important;
}
.bg-warning {
background-color: #ffc107 !important;
}
a.bg-warning:focus,
a.bg-warning:hover,
button.bg-warning:focus,
button.bg-warning:hover {
background-color: #d39e00 !important;
}
.bg-danger {
background-color: #dc3545 !important;
}
a.bg-danger:focus,
a.bg-danger:hover,
button.bg-danger:focus,
button.bg-danger:hover {
background-color: #bd2130 !important;
}
.bg-light {
background-color: #f8f9fa !important;
}
a.bg-light:focus,
a.bg-light:hover,
button.bg-light:focus,
button.bg-light:hover {
background-color: #dae0e5 !important;
}
.bg-dark {
background-color: <?php echo $maincolor;?> !important;
}
a.bg-dark:focus,
a.bg-dark:hover,
button.bg-dark:focus,
button.bg-dark:hover {
background-color: #1d2124 !important;
}
.bg-white {
background-color: #fff !important;
}
.bg-transparent {
background-color: transparent !important;
}
.border {
border: 1px solid #dee2e6 !important;
}
.border-top {
border-top: 1px solid #dee2e6 !important;
}
.border-right {
border-right: 1px solid #dee2e6 !important;
}
.border-bottom {
border-bottom: 1px solid #dee2e6 !important;
}
.border-left {
border-left: 1px solid #dee2e6 !important;
}
.border-0 {
border: 0 !important;
}
.border-top-0 {
border-top: 0 !important;
}
.border-right-0 {
border-right: 0 !important;
}
.border-bottom-0 {
border-bottom: 0 !important;
}
.border-left-0 {
border-left: 0 !important;
}
.border-primary {
border-color: <?php echo $accent_color;?>; !important;
}
.border-secondary {
border-color: #6c757d !important;
}
.border-success {
border-color: #28a745 !important;
}
.border-info {
border-color: #17a2b8 !important;
}
.border-warning {
border-color: #ffc107 !important;
}
.border-danger {
border-color: #dc3545 !important;
}
.border-light {
border-color: #f8f9fa !important;
}
.border-dark {
border-color: <?php echo $maincolor;?> !important;
}
.border-white {
border-color: #fff !important;
}
.rounded-sm {
border-radius: 0.2rem !important;
}
.rounded {
border-radius: 0.25rem !important;
}
.rounded-top {
border-top-left-radius: 0.25rem !important;
border-top-right-radius: 0.25rem !important;
}
.rounded-right {
border-top-right-radius: 0.25rem !important;
border-bottom-right-radius: 0.25rem !important;
}
.rounded-bottom {
border-bottom-right-radius: 0.25rem !important;
border-bottom-left-radius: 0.25rem !important;
}
.rounded-left {
border-top-left-radius: 0.25rem !important;
border-bottom-left-radius: 0.25rem !important;
}
.rounded-lg {
border-radius: 0.3rem !important;
}
.rounded-circle {
border-radius: 50% !important;
}
.rounded-pill {
border-radius: 50rem !important;
}
.rounded-0 {
border-radius: 0 !important;
}
.clearfix::after {
display: block;
clear: both;
content: "";
}
.d-none {
display: none !important;
}
.d-inline {
display: inline !important;
}
.d-inline-block {
display: inline-block !important;
}
.d-block {
display: block !important;
}
.d-table {
display: table !important;
}
.d-table-row {
display: table-row !important;
}
.d-table-cell {
display: table-cell !important;
}
.d-flex {
display: flex !important;
}
.d-inline-flex {
display: inline-flex !important;
}
@media (min-width: 576px) {
.d-sm-none {
display: none !important;
}
.d-sm-inline {
display: inline !important;
}
.d-sm-inline-block {
display: inline-block !important;
}
.d-sm-block {
display: block !important;
}
.d-sm-table {
display: table !important;
}
.d-sm-table-row {
display: table-row !important;
}
.d-sm-table-cell {
display: table-cell !important;
}
.d-sm-flex {
display: flex !important;
}
.d-sm-inline-flex {
display: inline-flex !important;
}
}
@media (min-width: 768px) {
.d-md-none {
display: none !important;
}
.d-md-inline {
display: inline !important;
}
.d-md-inline-block {
display: inline-block !important;
}
.d-md-block {
display: block !important;
}
.d-md-table {
display: table !important;
}
.d-md-table-row {
display: table-row !important;
}
.d-md-table-cell {
display: table-cell !important;
}
.d-md-flex {
display: flex !important;
}
.d-md-inline-flex {
display: inline-flex !important;
}
}
@media (min-width: 992px) {
.d-lg-none {
display: none !important;
}
.d-lg-inline {
display: inline !important;
}
.d-lg-inline-block {
display: inline-block !important;
}
.d-lg-block {
display: block !important;
}
.d-lg-table {
display: table !important;
}
.d-lg-table-row {
display: table-row !important;
}
.d-lg-table-cell {
display: table-cell !important;
}
.d-lg-flex {
display: flex !important;
}
.d-lg-inline-flex {
display: inline-flex !important;
}
}
@media (min-width: 1200px) {
.d-xl-none {
display: none !important;
}
.d-xl-inline {
display: inline !important;
}
.d-xl-inline-block {
display: inline-block !important;
}
.d-xl-block {
display: block !important;
}
.d-xl-table {
display: table !important;
}
.d-xl-table-row {
display: table-row !important;
}
.d-xl-table-cell {
display: table-cell !important;
}
.d-xl-flex {
display: flex !important;
}
.d-xl-inline-flex {
display: inline-flex !important;
}
}
@media print {
.d-print-none {
display: none !important;
}
.d-print-inline {
display: inline !important;
}
.d-print-inline-block {
display: inline-block !important;
}
.d-print-block {
display: block !important;
}
.d-print-table {
display: table !important;
}
.d-print-table-row {
display: table-row !important;
}
.d-print-table-cell {
display: table-cell !important;
}
.d-print-flex {
display: flex !important;
}
.d-print-inline-flex {
display: inline-flex !important;
}
}
.embed-responsive {
position: relative;
display: block;
width: 100%;
padding: 0;
overflow: hidden;
}
.embed-responsive::before {
display: block;
content: "";
}
.embed-responsive .embed-responsive-item,
.embed-responsive embed,
.embed-responsive iframe,
.embed-responsive object,
.embed-responsive video {
position: absolute;
top: 0;
bottom: 0;
left: 0;
width: 100%;
height: 100%;
border: 0;
}
.embed-responsive-21by9::before {
padding-top: 42.857143%;
}
.embed-responsive-16by9::before {
padding-top: 56.25%;
}
.embed-responsive-4by3::before {
padding-top: 75%;
}
.embed-responsive-1by1::before {
padding-top: 100%;
}
.flex-row {
flex-direction: row !important;
}
.flex-column {
flex-direction: column !important;
}
.flex-row-reverse {
flex-direction: row-reverse !important;
}
.flex-column-reverse {
flex-direction: column-reverse !important;
}
.flex-wrap {
flex-wrap: wrap !important;
}
.flex-nowrap {
flex-wrap: nowrap !important;
}
.flex-wrap-reverse {
flex-wrap: wrap-reverse !important;
}
.flex-fill {
flex: 1 1 auto !important;
}
.flex-grow-0 {
flex-grow: 0 !important;
}
.flex-grow-1 {
flex-grow: 1 !important;
}
.flex-shrink-0 {
flex-shrink: 0 !important;
}
.flex-shrink-1 {
flex-shrink: 1 !important;
}
.justify-content-start {
justify-content: flex-start !important;
}
.justify-content-end {
justify-content: flex-end !important;
}
.justify-content-center {
justify-content: center !important;
}
.justify-content-between {
justify-content: space-between !important;
}
.justify-content-around {
justify-content: space-around !important;
}
.align-items-start {
align-items: flex-start !important;
}
.align-items-end {
align-items: flex-end !important;
}
.align-items-center {
align-items: center !important;
}
.align-items-baseline {
align-items: baseline !important;
}
.align-items-stretch {
align-items: stretch !important;
}
.align-content-start {
align-content: flex-start !important;
}
.align-content-end {
align-content: flex-end !important;
}
.align-content-center {
align-content: center !important;
}
.align-content-between {
align-content: space-between !important;
}
.align-content-around {
align-content: space-around !important;
}
.align-content-stretch {
align-content: stretch !important;
}
.align-self-auto {
align-self: auto !important;
}
.align-self-start {
align-self: flex-start !important;
}
.align-self-end {
align-self: flex-end !important;
}
.align-self-center {
align-self: center !important;
}
.align-self-baseline {
align-self: baseline !important;
}
.align-self-stretch {
align-self: stretch !important;
}
@media (min-width: 576px) {
.flex-sm-row {
flex-direction: row !important;
}
.flex-sm-column {
flex-direction: column !important;
}
.flex-sm-row-reverse {
flex-direction: row-reverse !important;
}
.flex-sm-column-reverse {
flex-direction: column-reverse !important;
}
.flex-sm-wrap {
flex-wrap: wrap !important;
}
.flex-sm-nowrap {
flex-wrap: nowrap !important;
}
.flex-sm-wrap-reverse {
flex-wrap: wrap-reverse !important;
}
.flex-sm-fill {
flex: 1 1 auto !important;
}
.flex-sm-grow-0 {
flex-grow: 0 !important;
}
.flex-sm-grow-1 {
flex-grow: 1 !important;
}
.flex-sm-shrink-0 {
flex-shrink: 0 !important;
}
.flex-sm-shrink-1 {
flex-shrink: 1 !important;
}
.justify-content-sm-start {
justify-content: flex-start !important;
}
.justify-content-sm-end {
justify-content: flex-end !important;
}
.justify-content-sm-center {
justify-content: center !important;
}
.justify-content-sm-between {
justify-content: space-between !important;
}
.justify-content-sm-around {
justify-content: space-around !important;
}
.align-items-sm-start {
align-items: flex-start !important;
}
.align-items-sm-end {
align-items: flex-end !important;
}
.align-items-sm-center {
align-items: center !important;
}
.align-items-sm-baseline {
align-items: baseline !important;
}
.align-items-sm-stretch {
align-items: stretch !important;
}
.align-content-sm-start {
align-content: flex-start !important;
}
.align-content-sm-end {
align-content: flex-end !important;
}
.align-content-sm-center {
align-content: center !important;
}
.align-content-sm-between {
align-content: space-between !important;
}
.align-content-sm-around {
align-content: space-around !important;
}
.align-content-sm-stretch {
align-content: stretch !important;
}
.align-self-sm-auto {
align-self: auto !important;
}
.align-self-sm-start {
align-self: flex-start !important;
}
.align-self-sm-end {
align-self: flex-end !important;
}
.align-self-sm-center {
align-self: center !important;
}
.align-self-sm-baseline {
align-self: baseline !important;
}
.align-self-sm-stretch {
align-self: stretch !important;
}
}
@media (min-width: 768px) {
.flex-md-row {
flex-direction: row !important;
}
.flex-md-column {
flex-direction: column !important;
}
.flex-md-row-reverse {
flex-direction: row-reverse !important;
}
.flex-md-column-reverse {
flex-direction: column-reverse !important;
}
.flex-md-wrap {
flex-wrap: wrap !important;
}
.flex-md-nowrap {
flex-wrap: nowrap !important;
}
.flex-md-wrap-reverse {
flex-wrap: wrap-reverse !important;
}
.flex-md-fill {
flex: 1 1 auto !important;
}
.flex-md-grow-0 {
flex-grow: 0 !important;
}
.flex-md-grow-1 {
flex-grow: 1 !important;
}
.flex-md-shrink-0 {
flex-shrink: 0 !important;
}
.flex-md-shrink-1 {
flex-shrink: 1 !important;
}
.justify-content-md-start {
justify-content: flex-start !important;
}
.justify-content-md-end {
justify-content: flex-end !important;
}
.justify-content-md-center {
justify-content: center !important;
}
.justify-content-md-between {
justify-content: space-between !important;
}
.justify-content-md-around {
justify-content: space-around !important;
}
.align-items-md-start {
align-items: flex-start !important;
}
.align-items-md-end {
align-items: flex-end !important;
}
.align-items-md-center {
align-items: center !important;
}
.align-items-md-baseline {
align-items: baseline !important;
}
.align-items-md-stretch {
align-items: stretch !important;
}
.align-content-md-start {
align-content: flex-start !important;
}
.align-content-md-end {
align-content: flex-end !important;
}
.align-content-md-center {
align-content: center !important;
}
.align-content-md-between {
align-content: space-between !important;
}
.align-content-md-around {
align-content: space-around !important;
}
.align-content-md-stretch {
align-content: stretch !important;
}
.align-self-md-auto {
align-self: auto !important;
}
.align-self-md-start {
align-self: flex-start !important;
}
.align-self-md-end {
align-self: flex-end !important;
}
.align-self-md-center {
align-self: center !important;
}
.align-self-md-baseline {
align-self: baseline !important;
}
.align-self-md-stretch {
align-self: stretch !important;
}
}
@media (min-width: 992px) {
.flex-lg-row {
flex-direction: row !important;
}
.flex-lg-column {
flex-direction: column !important;
}
.flex-lg-row-reverse {
flex-direction: row-reverse !important;
}
.flex-lg-column-reverse {
flex-direction: column-reverse !important;
}
.flex-lg-wrap {
flex-wrap: wrap !important;
}
.flex-lg-nowrap {
flex-wrap: nowrap !important;
}
.flex-lg-wrap-reverse {
flex-wrap: wrap-reverse !important;
}
.flex-lg-fill {
flex: 1 1 auto !important;
}
.flex-lg-grow-0 {
flex-grow: 0 !important;
}
.flex-lg-grow-1 {
flex-grow: 1 !important;
}
.flex-lg-shrink-0 {
flex-shrink: 0 !important;
}
.flex-lg-shrink-1 {
flex-shrink: 1 !important;
}
.justify-content-lg-start {
justify-content: flex-start !important;
}
.justify-content-lg-end {
justify-content: flex-end !important;
}
.justify-content-lg-center {
justify-content: center !important;
}
.justify-content-lg-between {
justify-content: space-between !important;
}
.justify-content-lg-around {
justify-content: space-around !important;
}
.align-items-lg-start {
align-items: flex-start !important;
}
.align-items-lg-end {
align-items: flex-end !important;
}
.align-items-lg-center {
align-items: center !important;
}
.align-items-lg-baseline {
align-items: baseline !important;
}
.align-items-lg-stretch {
align-items: stretch !important;
}
.align-content-lg-start {
align-content: flex-start !important;
}
.align-content-lg-end {
align-content: flex-end !important;
}
.align-content-lg-center {
align-content: center !important;
}
.align-content-lg-between {
align-content: space-between !important;
}
.align-content-lg-around {
align-content: space-around !important;
}
.align-content-lg-stretch {
align-content: stretch !important;
}
.align-self-lg-auto {
align-self: auto !important;
}
.align-self-lg-start {
align-self: flex-start !important;
}
.align-self-lg-end {
align-self: flex-end !important;
}
.align-self-lg-center {
align-self: center !important;
}
.align-self-lg-baseline {
align-self: baseline !important;
}
.align-self-lg-stretch {
align-self: stretch !important;
}
}
@media (min-width: 1200px) {
.flex-xl-row {
flex-direction: row !important;
}
.flex-xl-column {
flex-direction: column !important;
}
.flex-xl-row-reverse {
flex-direction: row-reverse !important;
}
.flex-xl-column-reverse {
flex-direction: column-reverse !important;
}
.flex-xl-wrap {
flex-wrap: wrap !important;
}
.flex-xl-nowrap {
flex-wrap: nowrap !important;
}
.flex-xl-wrap-reverse {
flex-wrap: wrap-reverse !important;
}
.flex-xl-fill {
flex: 1 1 auto !important;
}
.flex-xl-grow-0 {
flex-grow: 0 !important;
}
.flex-xl-grow-1 {
flex-grow: 1 !important;
}
.flex-xl-shrink-0 {
flex-shrink: 0 !important;
}
.flex-xl-shrink-1 {
flex-shrink: 1 !important;
}
.justify-content-xl-start {
justify-content: flex-start !important;
}
.justify-content-xl-end {
justify-content: flex-end !important;
}
.justify-content-xl-center {
justify-content: center !important;
}
.justify-content-xl-between {
justify-content: space-between !important;
}
.justify-content-xl-around {
justify-content: space-around !important;
}
.align-items-xl-start {
align-items: flex-start !important;
}
.align-items-xl-end {
align-items: flex-end !important;
}
.align-items-xl-center {
align-items: center !important;
}
.align-items-xl-baseline {
align-items: baseline !important;
}
.align-items-xl-stretch {
align-items: stretch !important;
}
.align-content-xl-start {
align-content: flex-start !important;
}
.align-content-xl-end {
align-content: flex-end !important;
}
.align-content-xl-center {
align-content: center !important;
}
.align-content-xl-between {
align-content: space-between !important;
}
.align-content-xl-around {
align-content: space-around !important;
}
.align-content-xl-stretch {
align-content: stretch !important;
}
.align-self-xl-auto {
align-self: auto !important;
}
.align-self-xl-start {
align-self: flex-start !important;
}
.align-self-xl-end {
align-self: flex-end !important;
}
.align-self-xl-center {
align-self: center !important;
}
.align-self-xl-baseline {
align-self: baseline !important;
}
.align-self-xl-stretch {
align-self: stretch !important;
}
}
.float-left {
float: left !important;
}
.float-right {
float: right !important;
}
.float-none {
float: none !important;
}
@media (min-width: 576px) {
.float-sm-left {
float: left !important;
}
.float-sm-right {
float: right !important;
}
.float-sm-none {
float: none !important;
}
}
@media (min-width: 768px) {
.float-md-left {
float: left !important;
}
.float-md-right {
float: right !important;
}
.float-md-none {
float: none !important;
}
}
@media (min-width: 992px) {
.float-lg-left {
float: left !important;
}
.float-lg-right {
float: right !important;
}
.float-lg-none {
float: none !important;
}
}
@media (min-width: 1200px) {
.float-xl-left {
float: left !important;
}
.float-xl-right {
float: right !important;
}
.float-xl-none {
float: none !important;
}
}
.user-select-all {
-webkit-user-select: all !important;
-moz-user-select: all !important;
-ms-user-select: all !important;
user-select: all !important;
}
.user-select-auto {
-webkit-user-select: auto !important;
-moz-user-select: auto !important;
-ms-user-select: auto !important;
user-select: auto !important;
}
.user-select-none {
-webkit-user-select: none !important;
-moz-user-select: none !important;
-ms-user-select: none !important;
user-select: none !important;
}
.overflow-auto {
overflow: auto !important;
}
.overflow-hidden {
overflow: hidden !important;
}
.position-static {
position: static !important;
}
.position-relative {
position: relative !important;
}
.position-absolute {
position: absolute !important;
}
.position-fixed {
position: fixed !important;
}
.position-sticky {
position: -webkit-sticky !important;
position: sticky !important;
}
.fixed-top {
position: fixed;
top: 0;
right: 0;
left: 0;
z-index: 1030;
}
.fixed-bottom {
position: fixed;
right: 0;
bottom: 0;
left: 0;
z-index: 1030;
}
@supports ((position: -webkit-sticky) or (position: sticky)) {
.sticky-top {
position: -webkit-sticky;
position: sticky;
top: 0;
z-index: 1020;
}
}
.sr-only {
position: absolute;
width: 1px;
height: 1px;
padding: 0;
margin: -1px;
overflow: hidden;
clip: rect(0, 0, 0, 0);
white-space: nowrap;
border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
position: static;
width: auto;
height: auto;
overflow: visible;
clip: auto;
white-space: normal;
}
.shadow-sm {
box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}
.shadow {
box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}
.shadow-lg {
box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}
.shadow-none {
box-shadow: none !important;
}
.w-25 {
width: 25% !important;
}
.w-50 {
width: 50% !important;
}
.w-75 {
width: 75% !important;
}
.w-100 {
width: 100% !important;
}
.w-auto {
width: auto !important;
}
.h-25 {
height: 25% !important;
}
.h-50 {
height: 50% !important;
}
.h-75 {
height: 75% !important;
}
.h-100 {
height: 100% !important;
}
.h-auto {
height: auto !important;
}
.mw-100 {
max-width: 100% !important;
}
.mh-100 {
max-height: 100% !important;
}
.min-vw-100 {
min-width: 100vw !important;
}
.min-vh-100 {
min-height: 100vh !important;
}
.vw-100 {
width: 100vw !important;
}
.vh-100 {
height: 100vh !important;
}
.m-0 {
margin: 0 !important;
}
.mt-0,
.my-0 {
margin-top: 0 !important;
}
.mr-0,
.mx-0 {
margin-right: 0 !important;
}
.mb-0,
.my-0 {
margin-bottom: 0 !important;
}
.ml-0,
.mx-0 {
margin-left: 0 !important;
}
.m-1 {
margin: 0.25rem !important;
}
.mt-1,
.my-1 {
margin-top: 0.25rem !important;
}
.mr-1,
.mx-1 {
margin-right: 0.25rem !important;
}
.mb-1,
.my-1 {
margin-bottom: 0.25rem !important;
}
.ml-1,
.mx-1 {
margin-left: 0.25rem !important;
}
.m-2 {
margin: 0.5rem !important;
}
.mt-2,
.my-2 {
margin-top: 0.5rem !important;
}
.mr-2,
.mx-2 {
margin-right: 0.5rem !important;
}
.mb-2,
.my-2 {
margin-bottom: 0.5rem !important;
}
.ml-2,
.mx-2 {
margin-left: 0.5rem !important;
}
.m-3 {
margin: 1rem !important;
}
.mt-3,
.my-3 {
margin-top: 1rem !important;
}
.mr-3,
.mx-3 {
margin-right: 1rem !important;
}
.mb-3,
.my-3 {
margin-bottom: 1rem !important;
}
.ml-3,
.mx-3 {
margin-left: 1rem !important;
}
.m-4 {
margin: 1.5rem !important;
}
.mt-4,
.my-4 {
margin-top: 1.5rem !important;
}
.mr-4,
.mx-4 {
margin-right: 1.5rem !important;
}
.mb-4,
.my-4 {
margin-bottom: 1.5rem !important;
}
.ml-4,
.mx-4 {
margin-left: 1.5rem !important;
}
.m-5 {
margin: 3rem !important;
}
.mt-5,
.my-5 {
margin-top: 3rem !important;
}
.mr-5,
.mx-5 {
margin-right: 3rem !important;
}
.mb-5,
.my-5 {
margin-bottom: 3rem !important;
}
.ml-5,
.mx-5 {
margin-left: 3rem !important;
}
.p-0 {
padding: 0 !important;
}
.pt-0,
.py-0 {
padding-top: 0 !important;
}
.pr-0,
.px-0 {
padding-right: 0 !important;
}
.pb-0,
.py-0 {
padding-bottom: 0 !important;
}
.pl-0,
.px-0 {
padding-left: 0 !important;
}
.p-1 {
padding: 0.25rem !important;
}
.pt-1,
.py-1 {
padding-top: 0.25rem !important;
}
.pr-1,
.px-1 {
padding-right: 0.25rem !important;
}
.pb-1,
.py-1 {
padding-bottom: 0.25rem !important;
}
.pl-1,
.px-1 {
padding-left: 0.25rem !important;
}
.p-2 {
padding: 0.5rem !important;
}
.pt-2,
.py-2 {
padding-top: 0.5rem !important;
}
.pr-2,
.px-2 {
padding-right: 0.5rem !important;
}
.pb-2,
.py-2 {
padding-bottom: 0.5rem !important;
}
.pl-2,
.px-2 {
padding-left: 0.5rem !important;
}
.p-3 {
padding: 1rem !important;
}
.pt-3,
.py-3 {
padding-top: 1rem !important;
}
.pr-3,
.px-3 {
padding-right: 1rem !important;
}
.pb-3,
.py-3 {
padding-bottom: 1rem !important;
}
.pl-3,
.px-3 {
padding-left: 1rem !important;
}
.p-4 {
padding: 1.5rem !important;
}
.pt-4,
.py-4 {
padding-top: 1.5rem !important;
}
.pr-4,
.px-4 {
padding-right: 1.5rem !important;
}
.pb-4,
.py-4 {
padding-bottom: 1.5rem !important;
}
.pl-4,
.px-4 {
padding-left: 1.5rem !important;
}
.p-5 {
padding: 3rem !important;
}
.pt-5,
.py-5 {
padding-top: 3rem !important;
}
.pr-5,
.px-5 {
padding-right: 3rem !important;
}
.pb-5,
.py-5 {
padding-bottom: 3rem !important;
}
.pl-5,
.px-5 {
padding-left: 3rem !important;
}
.m-n1 {
margin: -0.25rem !important;
}
.mt-n1,
.my-n1 {
margin-top: -0.25rem !important;
}
.mr-n1,
.mx-n1 {
margin-right: -0.25rem !important;
}
.mb-n1,
.my-n1 {
margin-bottom: -0.25rem !important;
}
.ml-n1,
.mx-n1 {
margin-left: -0.25rem !important;
}
.m-n2 {
margin: -0.5rem !important;
}
.mt-n2,
.my-n2 {
margin-top: -0.5rem !important;
}
.mr-n2,
.mx-n2 {
margin-right: -0.5rem !important;
}
.mb-n2,
.my-n2 {
margin-bottom: -0.5rem !important;
}
.ml-n2,
.mx-n2 {
margin-left: -0.5rem !important;
}
.m-n3 {
margin: -1rem !important;
}
.mt-n3,
.my-n3 {
margin-top: -1rem !important;
}
.mr-n3,
.mx-n3 {
margin-right: -1rem !important;
}
.mb-n3,
.my-n3 {
margin-bottom: -1rem !important;
}
.ml-n3,
.mx-n3 {
margin-left: -1rem !important;
}
.m-n4 {
margin: -1.5rem !important;
}
.mt-n4,
.my-n4 {
margin-top: -1.5rem !important;
}
.mr-n4,
.mx-n4 {
margin-right: -1.5rem !important;
}
.mb-n4,
.my-n4 {
margin-bottom: -1.5rem !important;
}
.ml-n4,
.mx-n4 {
margin-left: -1.5rem !important;
}
.m-n5 {
margin: -3rem !important;
}
.mt-n5,
.my-n5 {
margin-top: -3rem !important;
}
.mr-n5,
.mx-n5 {
margin-right: -3rem !important;
}
.mb-n5,
.my-n5 {
margin-bottom: -3rem !important;
}
.ml-n5,
.mx-n5 {
margin-left: -3rem !important;
}
.m-auto {
margin: auto !important;
}
.mt-auto,
.my-auto {
margin-top: auto !important;
}
.mr-auto,
.mx-auto {
margin-right: auto !important;
}
.mb-auto,
.my-auto {
margin-bottom: auto !important;
}
.ml-auto,
.mx-auto {
margin-left: auto !important;
}
@media (min-width: 576px) {
.m-sm-0 {
margin: 0 !important;
}
.mt-sm-0,
.my-sm-0 {
margin-top: 0 !important;
}
.mr-sm-0,
.mx-sm-0 {
margin-right: 0 !important;
}
.mb-sm-0,
.my-sm-0 {
margin-bottom: 0 !important;
}
.ml-sm-0,
.mx-sm-0 {
margin-left: 0 !important;
}
.m-sm-1 {
margin: 0.25rem !important;
}
.mt-sm-1,
.my-sm-1 {
margin-top: 0.25rem !important;
}
.mr-sm-1,
.mx-sm-1 {
margin-right: 0.25rem !important;
}
.mb-sm-1,
.my-sm-1 {
margin-bottom: 0.25rem !important;
}
.ml-sm-1,
.mx-sm-1 {
margin-left: 0.25rem !important;
}
.m-sm-2 {
margin: 0.5rem !important;
}
.mt-sm-2,
.my-sm-2 {
margin-top: 0.5rem !important;
}
.mr-sm-2,
.mx-sm-2 {
margin-right: 0.5rem !important;
}
.mb-sm-2,
.my-sm-2 {
margin-bottom: 0.5rem !important;
}
.ml-sm-2,
.mx-sm-2 {
margin-left: 0.5rem !important;
}
.m-sm-3 {
margin: 1rem !important;
}
.mt-sm-3,
.my-sm-3 {
margin-top: 1rem !important;
}
.mr-sm-3,
.mx-sm-3 {
margin-right: 1rem !important;
}
.mb-sm-3,
.my-sm-3 {
margin-bottom: 1rem !important;
}
.ml-sm-3,
.mx-sm-3 {
margin-left: 1rem !important;
}
.m-sm-4 {
margin: 1.5rem !important;
}
.mt-sm-4,
.my-sm-4 {
margin-top: 1.5rem !important;
}
.mr-sm-4,
.mx-sm-4 {
margin-right: 1.5rem !important;
}
.mb-sm-4,
.my-sm-4 {
margin-bottom: 1.5rem !important;
}
.ml-sm-4,
.mx-sm-4 {
margin-left: 1.5rem !important;
}
.m-sm-5 {
margin: 3rem !important;
}
.mt-sm-5,
.my-sm-5 {
margin-top: 3rem !important;
}
.mr-sm-5,
.mx-sm-5 {
margin-right: 3rem !important;
}
.mb-sm-5,
.my-sm-5 {
margin-bottom: 3rem !important;
}
.ml-sm-5,
.mx-sm-5 {
margin-left: 3rem !important;
}
.p-sm-0 {
padding: 0 !important;
}
.pt-sm-0,
.py-sm-0 {
padding-top: 0 !important;
}
.pr-sm-0,
.px-sm-0 {
padding-right: 0 !important;
}
.pb-sm-0,
.py-sm-0 {
padding-bottom: 0 !important;
}
.pl-sm-0,
.px-sm-0 {
padding-left: 0 !important;
}
.p-sm-1 {
padding: 0.25rem !important;
}
.pt-sm-1,
.py-sm-1 {
padding-top: 0.25rem !important;
}
.pr-sm-1,
.px-sm-1 {
padding-right: 0.25rem !important;
}
.pb-sm-1,
.py-sm-1 {
padding-bottom: 0.25rem !important;
}
.pl-sm-1,
.px-sm-1 {
padding-left: 0.25rem !important;
}
.p-sm-2 {
padding: 0.5rem !important;
}
.pt-sm-2,
.py-sm-2 {
padding-top: 0.5rem !important;
}
.pr-sm-2,
.px-sm-2 {
padding-right: 0.5rem !important;
}
.pb-sm-2,
.py-sm-2 {
padding-bottom: 0.5rem !important;
}
.pl-sm-2,
.px-sm-2 {
padding-left: 0.5rem !important;
}
.p-sm-3 {
padding: 1rem !important;
}
.pt-sm-3,
.py-sm-3 {
padding-top: 1rem !important;
}
.pr-sm-3,
.px-sm-3 {
padding-right: 1rem !important;
}
.pb-sm-3,
.py-sm-3 {
padding-bottom: 1rem !important;
}
.pl-sm-3,
.px-sm-3 {
padding-left: 1rem !important;
}
.p-sm-4 {
padding: 1.5rem !important;
}
.pt-sm-4,
.py-sm-4 {
padding-top: 1.5rem !important;
}
.pr-sm-4,
.px-sm-4 {
padding-right: 1.5rem !important;
}
.pb-sm-4,
.py-sm-4 {
padding-bottom: 1.5rem !important;
}
.pl-sm-4,
.px-sm-4 {
padding-left: 1.5rem !important;
}
.p-sm-5 {
padding: 3rem !important;
}
.pt-sm-5,
.py-sm-5 {
padding-top: 3rem !important;
}
.pr-sm-5,
.px-sm-5 {
padding-right: 3rem !important;
}
.pb-sm-5,
.py-sm-5 {
padding-bottom: 3rem !important;
}
.pl-sm-5,
.px-sm-5 {
padding-left: 3rem !important;
}
.m-sm-n1 {
margin: -0.25rem !important;
}
.mt-sm-n1,
.my-sm-n1 {
margin-top: -0.25rem !important;
}
.mr-sm-n1,
.mx-sm-n1 {
margin-right: -0.25rem !important;
}
.mb-sm-n1,
.my-sm-n1 {
margin-bottom: -0.25rem !important;
}
.ml-sm-n1,
.mx-sm-n1 {
margin-left: -0.25rem !important;
}
.m-sm-n2 {
margin: -0.5rem !important;
}
.mt-sm-n2,
.my-sm-n2 {
margin-top: -0.5rem !important;
}
.mr-sm-n2,
.mx-sm-n2 {
margin-right: -0.5rem !important;
}
.mb-sm-n2,
.my-sm-n2 {
margin-bottom: -0.5rem !important;
}
.ml-sm-n2,
.mx-sm-n2 {
margin-left: -0.5rem !important;
}
.m-sm-n3 {
margin: -1rem !important;
}
.mt-sm-n3,
.my-sm-n3 {
margin-top: -1rem !important;
}
.mr-sm-n3,
.mx-sm-n3 {
margin-right: -1rem !important;
}
.mb-sm-n3,
.my-sm-n3 {
margin-bottom: -1rem !important;
}
.ml-sm-n3,
.mx-sm-n3 {
margin-left: -1rem !important;
}
.m-sm-n4 {
margin: -1.5rem !important;
}
.mt-sm-n4,
.my-sm-n4 {
margin-top: -1.5rem !important;
}
.mr-sm-n4,
.mx-sm-n4 {
margin-right: -1.5rem !important;
}
.mb-sm-n4,
.my-sm-n4 {
margin-bottom: -1.5rem !important;
}
.ml-sm-n4,
.mx-sm-n4 {
margin-left: -1.5rem !important;
}
.m-sm-n5 {
margin: -3rem !important;
}
.mt-sm-n5,
.my-sm-n5 {
margin-top: -3rem !important;
}
.mr-sm-n5,
.mx-sm-n5 {
margin-right: -3rem !important;
}
.mb-sm-n5,
.my-sm-n5 {
margin-bottom: -3rem !important;
}
.ml-sm-n5,
.mx-sm-n5 {
margin-left: -3rem !important;
}
.m-sm-auto {
margin: auto !important;
}
.mt-sm-auto,
.my-sm-auto {
margin-top: auto !important;
}
.mr-sm-auto,
.mx-sm-auto {
margin-right: auto !important;
}
.mb-sm-auto,
.my-sm-auto {
margin-bottom: auto !important;
}
.ml-sm-auto,
.mx-sm-auto {
margin-left: auto !important;
}
}
@media (min-width: 768px) {
.m-md-0 {
margin: 0 !important;
}
.mt-md-0,
.my-md-0 {
margin-top: 0 !important;
}
.mr-md-0,
.mx-md-0 {
margin-right: 0 !important;
}
.mb-md-0,
.my-md-0 {
margin-bottom: 0 !important;
}
.ml-md-0,
.mx-md-0 {
margin-left: 0 !important;
}
.m-md-1 {
margin: 0.25rem !important;
}
.mt-md-1,
.my-md-1 {
margin-top: 0.25rem !important;
}
.mr-md-1,
.mx-md-1 {
margin-right: 0.25rem !important;
}
.mb-md-1,
.my-md-1 {
margin-bottom: 0.25rem !important;
}
.ml-md-1,
.mx-md-1 {
margin-left: 0.25rem !important;
}
.m-md-2 {
margin: 0.5rem !important;
}
.mt-md-2,
.my-md-2 {
margin-top: 0.5rem !important;
}
.mr-md-2,
.mx-md-2 {
margin-right: 0.5rem !important;
}
.mb-md-2,
.my-md-2 {
margin-bottom: 0.5rem !important;
}
.ml-md-2,
.mx-md-2 {
margin-left: 0.5rem !important;
}
.m-md-3 {
margin: 1rem !important;
}
.mt-md-3,
.my-md-3 {
margin-top: 1rem !important;
}
.mr-md-3,
.mx-md-3 {
margin-right: 1rem !important;
}
.mb-md-3,
.my-md-3 {
margin-bottom: 1rem !important;
}
.ml-md-3,
.mx-md-3 {
margin-left: 1rem !important;
}
.m-md-4 {
margin: 1.5rem !important;
}
.mt-md-4,
.my-md-4 {
margin-top: 1.5rem !important;
}
.mr-md-4,
.mx-md-4 {
margin-right: 1.5rem !important;
}
.mb-md-4,
.my-md-4 {
margin-bottom: 1.5rem !important;
}
.ml-md-4,
.mx-md-4 {
margin-left: 1.5rem !important;
}
.m-md-5 {
margin: 3rem !important;
}
.mt-md-5,
.my-md-5 {
margin-top: 3rem !important;
}
.mr-md-5,
.mx-md-5 {
margin-right: 3rem !important;
}
.mb-md-5,
.my-md-5 {
margin-bottom: 3rem !important;
}
.ml-md-5,
.mx-md-5 {
margin-left: 3rem !important;
}
.p-md-0 {
padding: 0 !important;
}
.pt-md-0,
.py-md-0 {
padding-top: 0 !important;
}
.pr-md-0,
.px-md-0 {
padding-right: 0 !important;
}
.pb-md-0,
.py-md-0 {
padding-bottom: 0 !important;
}
.pl-md-0,
.px-md-0 {
padding-left: 0 !important;
}
.p-md-1 {
padding: 0.25rem !important;
}
.pt-md-1,
.py-md-1 {
padding-top: 0.25rem !important;
}
.pr-md-1,
.px-md-1 {
padding-right: 0.25rem !important;
}
.pb-md-1,
.py-md-1 {
padding-bottom: 0.25rem !important;
}
.pl-md-1,
.px-md-1 {
padding-left: 0.25rem !important;
}
.p-md-2 {
padding: 0.5rem !important;
}
.pt-md-2,
.py-md-2 {
padding-top: 0.5rem !important;
}
.pr-md-2,
.px-md-2 {
padding-right: 0.5rem !important;
}
.pb-md-2,
.py-md-2 {
padding-bottom: 0.5rem !important;
}
.pl-md-2,
.px-md-2 {
padding-left: 0.5rem !important;
}
.p-md-3 {
padding: 1rem !important;
}
.pt-md-3,
.py-md-3 {
padding-top: 1rem !important;
}
.pr-md-3,
.px-md-3 {
padding-right: 1rem !important;
}
.pb-md-3,
.py-md-3 {
padding-bottom: 1rem !important;
}
.pl-md-3,
.px-md-3 {
padding-left: 1rem !important;
}
.p-md-4 {
padding: 1.5rem !important;
}
.pt-md-4,
.py-md-4 {
padding-top: 1.5rem !important;
}
.pr-md-4,
.px-md-4 {
padding-right: 1.5rem !important;
}
.pb-md-4,
.py-md-4 {
padding-bottom: 1.5rem !important;
}
.pl-md-4,
.px-md-4 {
padding-left: 1.5rem !important;
}
.p-md-5 {
padding: 3rem !important;
}
.pt-md-5,
.py-md-5 {
padding-top: 3rem !important;
}
.pr-md-5,
.px-md-5 {
padding-right: 3rem !important;
}
.pb-md-5,
.py-md-5 {
padding-bottom: 3rem !important;
}
.pl-md-5,
.px-md-5 {
padding-left: 3rem !important;
}
.m-md-n1 {
margin: -0.25rem !important;
}
.mt-md-n1,
.my-md-n1 {
margin-top: -0.25rem !important;
}
.mr-md-n1,
.mx-md-n1 {
margin-right: -0.25rem !important;
}
.mb-md-n1,
.my-md-n1 {
margin-bottom: -0.25rem !important;
}
.ml-md-n1,
.mx-md-n1 {
margin-left: -0.25rem !important;
}
.m-md-n2 {
margin: -0.5rem !important;
}
.mt-md-n2,
.my-md-n2 {
margin-top: -0.5rem !important;
}
.mr-md-n2,
.mx-md-n2 {
margin-right: -0.5rem !important;
}
.mb-md-n2,
.my-md-n2 {
margin-bottom: -0.5rem !important;
}
.ml-md-n2,
.mx-md-n2 {
margin-left: -0.5rem !important;
}
.m-md-n3 {
margin: -1rem !important;
}
.mt-md-n3,
.my-md-n3 {
margin-top: -1rem !important;
}
.mr-md-n3,
.mx-md-n3 {
margin-right: -1rem !important;
}
.mb-md-n3,
.my-md-n3 {
margin-bottom: -1rem !important;
}
.ml-md-n3,
.mx-md-n3 {
margin-left: -1rem !important;
}
.m-md-n4 {
margin: -1.5rem !important;
}
.mt-md-n4,
.my-md-n4 {
margin-top: -1.5rem !important;
}
.mr-md-n4,
.mx-md-n4 {
margin-right: -1.5rem !important;
}
.mb-md-n4,
.my-md-n4 {
margin-bottom: -1.5rem !important;
}
.ml-md-n4,
.mx-md-n4 {
margin-left: -1.5rem !important;
}
.m-md-n5 {
margin: -3rem !important;
}
.mt-md-n5,
.my-md-n5 {
margin-top: -3rem !important;
}
.mr-md-n5,
.mx-md-n5 {
margin-right: -3rem !important;
}
.mb-md-n5,
.my-md-n5 {
margin-bottom: -3rem !important;
}
.ml-md-n5,
.mx-md-n5 {
margin-left: -3rem !important;
}
.m-md-auto {
margin: auto !important;
}
.mt-md-auto,
.my-md-auto {
margin-top: auto !important;
}
.mr-md-auto,
.mx-md-auto {
margin-right: auto !important;
}
.mb-md-auto,
.my-md-auto {
margin-bottom: auto !important;
}
.ml-md-auto,
.mx-md-auto {
margin-left: auto !important;
}
}
@media (min-width: 992px) {
.m-lg-0 {
margin: 0 !important;
}
.mt-lg-0,
.my-lg-0 {
margin-top: 0 !important;
}
.mr-lg-0,
.mx-lg-0 {
margin-right: 0 !important;
}
.mb-lg-0,
.my-lg-0 {
margin-bottom: 0 !important;
}
.ml-lg-0,
.mx-lg-0 {
margin-left: 0 !important;
}
.m-lg-1 {
margin: 0.25rem !important;
}
.mt-lg-1,
.my-lg-1 {
margin-top: 0.25rem !important;
}
.mr-lg-1,
.mx-lg-1 {
margin-right: 0.25rem !important;
}
.mb-lg-1,
.my-lg-1 {
margin-bottom: 0.25rem !important;
}
.ml-lg-1,
.mx-lg-1 {
margin-left: 0.25rem !important;
}
.m-lg-2 {
margin: 0.5rem !important;
}
.mt-lg-2,
.my-lg-2 {
margin-top: 0.5rem !important;
}
.mr-lg-2,
.mx-lg-2 {
margin-right: 0.5rem !important;
}
.mb-lg-2,
.my-lg-2 {
margin-bottom: 0.5rem !important;
}
.ml-lg-2,
.mx-lg-2 {
margin-left: 0.5rem !important;
}
.m-lg-3 {
margin: 1rem !important;
}
.mt-lg-3,
.my-lg-3 {
margin-top: 1rem !important;
}
.mr-lg-3,
.mx-lg-3 {
margin-right: 1rem !important;
}
.mb-lg-3,
.my-lg-3 {
margin-bottom: 1rem !important;
}
.ml-lg-3,
.mx-lg-3 {
margin-left: 1rem !important;
}
.m-lg-4 {
margin: 1.5rem !important;
}
.mt-lg-4,
.my-lg-4 {
margin-top: 1.5rem !important;
}
.mr-lg-4,
.mx-lg-4 {
margin-right: 1.5rem !important;
}
.mb-lg-4,
.my-lg-4 {
margin-bottom: 1.5rem !important;
}
.ml-lg-4,
.mx-lg-4 {
margin-left: 1.5rem !important;
}
.m-lg-5 {
margin: 3rem !important;
}
.mt-lg-5,
.my-lg-5 {
margin-top: 3rem !important;
}
.mr-lg-5,
.mx-lg-5 {
margin-right: 3rem !important;
}
.mb-lg-5,
.my-lg-5 {
margin-bottom: 3rem !important;
}
.ml-lg-5,
.mx-lg-5 {
margin-left: 3rem !important;
}
.p-lg-0 {
padding: 0 !important;
}
.pt-lg-0,
.py-lg-0 {
padding-top: 0 !important;
}
.pr-lg-0,
.px-lg-0 {
padding-right: 0 !important;
}
.pb-lg-0,
.py-lg-0 {
padding-bottom: 0 !important;
}
.pl-lg-0,
.px-lg-0 {
padding-left: 0 !important;
}
.p-lg-1 {
padding: 0.25rem !important;
}
.pt-lg-1,
.py-lg-1 {
padding-top: 0.25rem !important;
}
.pr-lg-1,
.px-lg-1 {
padding-right: 0.25rem !important;
}
.pb-lg-1,
.py-lg-1 {
padding-bottom: 0.25rem !important;
}
.pl-lg-1,
.px-lg-1 {
padding-left: 0.25rem !important;
}
.p-lg-2 {
padding: 0.5rem !important;
}
.pt-lg-2,
.py-lg-2 {
padding-top: 0.5rem !important;
}
.pr-lg-2,
.px-lg-2 {
padding-right: 0.5rem !important;
}
.pb-lg-2,
.py-lg-2 {
padding-bottom: 0.5rem !important;
}
.pl-lg-2,
.px-lg-2 {
padding-left: 0.5rem !important;
}
.p-lg-3 {
padding: 1rem !important;
}
.pt-lg-3,
.py-lg-3 {
padding-top: 1rem !important;
}
.pr-lg-3,
.px-lg-3 {
padding-right: 1rem !important;
}
.pb-lg-3,
.py-lg-3 {
padding-bottom: 1rem !important;
}
.pl-lg-3,
.px-lg-3 {
padding-left: 1rem !important;
}
.p-lg-4 {
padding: 1.5rem !important;
}
.pt-lg-4,
.py-lg-4 {
padding-top: 1.5rem !important;
}
.pr-lg-4,
.px-lg-4 {
padding-right: 1.5rem !important;
}
.pb-lg-4,
.py-lg-4 {
padding-bottom: 1.5rem !important;
}
.pl-lg-4,
.px-lg-4 {
padding-left: 1.5rem !important;
}
.p-lg-5 {
padding: 3rem !important;
}
.pt-lg-5,
.py-lg-5 {
padding-top: 3rem !important;
}
.pr-lg-5,
.px-lg-5 {
padding-right: 3rem !important;
}
.pb-lg-5,
.py-lg-5 {
padding-bottom: 3rem !important;
}
.pl-lg-5,
.px-lg-5 {
padding-left: 3rem !important;
}
.m-lg-n1 {
margin: -0.25rem !important;
}
.mt-lg-n1,
.my-lg-n1 {
margin-top: -0.25rem !important;
}
.mr-lg-n1,
.mx-lg-n1 {
margin-right: -0.25rem !important;
}
.mb-lg-n1,
.my-lg-n1 {
margin-bottom: -0.25rem !important;
}
.ml-lg-n1,
.mx-lg-n1 {
margin-left: -0.25rem !important;
}
.m-lg-n2 {
margin: -0.5rem !important;
}
.mt-lg-n2,
.my-lg-n2 {
margin-top: -0.5rem !important;
}
.mr-lg-n2,
.mx-lg-n2 {
margin-right: -0.5rem !important;
}
.mb-lg-n2,
.my-lg-n2 {
margin-bottom: -0.5rem !important;
}
.ml-lg-n2,
.mx-lg-n2 {
margin-left: -0.5rem !important;
}
.m-lg-n3 {
margin: -1rem !important;
}
.mt-lg-n3,
.my-lg-n3 {
margin-top: -1rem !important;
}
.mr-lg-n3,
.mx-lg-n3 {
margin-right: -1rem !important;
}
.mb-lg-n3,
.my-lg-n3 {
margin-bottom: -1rem !important;
}
.ml-lg-n3,
.mx-lg-n3 {
margin-left: -1rem !important;
}
.m-lg-n4 {
margin: -1.5rem !important;
}
.mt-lg-n4,
.my-lg-n4 {
margin-top: -1.5rem !important;
}
.mr-lg-n4,
.mx-lg-n4 {
margin-right: -1.5rem !important;
}
.mb-lg-n4,
.my-lg-n4 {
margin-bottom: -1.5rem !important;
}
.ml-lg-n4,
.mx-lg-n4 {
margin-left: -1.5rem !important;
}
.m-lg-n5 {
margin: -3rem !important;
}
.mt-lg-n5,
.my-lg-n5 {
margin-top: -3rem !important;
}
.mr-lg-n5,
.mx-lg-n5 {
margin-right: -3rem !important;
}
.mb-lg-n5,
.my-lg-n5 {
margin-bottom: -3rem !important;
}
.ml-lg-n5,
.mx-lg-n5 {
margin-left: -3rem !important;
}
.m-lg-auto {
margin: auto !important;
}
.mt-lg-auto,
.my-lg-auto {
margin-top: auto !important;
}
.mr-lg-auto,
.mx-lg-auto {
margin-right: auto !important;
}
.mb-lg-auto,
.my-lg-auto {
margin-bottom: auto !important;
}
.ml-lg-auto,
.mx-lg-auto {
margin-left: auto !important;
}
}
@media (min-width: 1200px) {
.m-xl-0 {
margin: 0 !important;
}
.mt-xl-0,
.my-xl-0 {
margin-top: 0 !important;
}
.mr-xl-0,
.mx-xl-0 {
margin-right: 0 !important;
}
.mb-xl-0,
.my-xl-0 {
margin-bottom: 0 !important;
}
.ml-xl-0,
.mx-xl-0 {
margin-left: 0 !important;
}
.m-xl-1 {
margin: 0.25rem !important;
}
.mt-xl-1,
.my-xl-1 {
margin-top: 0.25rem !important;
}
.mr-xl-1,
.mx-xl-1 {
margin-right: 0.25rem !important;
}
.mb-xl-1,
.my-xl-1 {
margin-bottom: 0.25rem !important;
}
.ml-xl-1,
.mx-xl-1 {
margin-left: 0.25rem !important;
}
.m-xl-2 {
margin: 0.5rem !important;
}
.mt-xl-2,
.my-xl-2 {
margin-top: 0.5rem !important;
}
.mr-xl-2,
.mx-xl-2 {
margin-right: 0.5rem !important;
}
.mb-xl-2,
.my-xl-2 {
margin-bottom: 0.5rem !important;
}
.ml-xl-2,
.mx-xl-2 {
margin-left: 0.5rem !important;
}
.m-xl-3 {
margin: 1rem !important;
}
.mt-xl-3,
.my-xl-3 {
margin-top: 1rem !important;
}
.mr-xl-3,
.mx-xl-3 {
margin-right: 1rem !important;
}
.mb-xl-3,
.my-xl-3 {
margin-bottom: 1rem !important;
}
.ml-xl-3,
.mx-xl-3 {
margin-left: 1rem !important;
}
.m-xl-4 {
margin: 1.5rem !important;
}
.mt-xl-4,
.my-xl-4 {
margin-top: 1.5rem !important;
}
.mr-xl-4,
.mx-xl-4 {
margin-right: 1.5rem !important;
}
.mb-xl-4,
.my-xl-4 {
margin-bottom: 1.5rem !important;
}
.ml-xl-4,
.mx-xl-4 {
margin-left: 1.5rem !important;
}
.m-xl-5 {
margin: 3rem !important;
}
.mt-xl-5,
.my-xl-5 {
margin-top: 3rem !important;
}
.mr-xl-5,
.mx-xl-5 {
margin-right: 3rem !important;
}
.mb-xl-5,
.my-xl-5 {
margin-bottom: 3rem !important;
}
.ml-xl-5,
.mx-xl-5 {
margin-left: 3rem !important;
}
.p-xl-0 {
padding: 0 !important;
}
.pt-xl-0,
.py-xl-0 {
padding-top: 0 !important;
}
.pr-xl-0,
.px-xl-0 {
padding-right: 0 !important;
}
.pb-xl-0,
.py-xl-0 {
padding-bottom: 0 !important;
}
.pl-xl-0,
.px-xl-0 {
padding-left: 0 !important;
}
.p-xl-1 {
padding: 0.25rem !important;
}
.pt-xl-1,
.py-xl-1 {
padding-top: 0.25rem !important;
}
.pr-xl-1,
.px-xl-1 {
padding-right: 0.25rem !important;
}
.pb-xl-1,
.py-xl-1 {
padding-bottom: 0.25rem !important;
}
.pl-xl-1,
.px-xl-1 {
padding-left: 0.25rem !important;
}
.p-xl-2 {
padding: 0.5rem !important;
}
.pt-xl-2,
.py-xl-2 {
padding-top: 0.5rem !important;
}
.pr-xl-2,
.px-xl-2 {
padding-right: 0.5rem !important;
}
.pb-xl-2,
.py-xl-2 {
padding-bottom: 0.5rem !important;
}
.pl-xl-2,
.px-xl-2 {
padding-left: 0.5rem !important;
}
.p-xl-3 {
padding: 1rem !important;
}
.pt-xl-3,
.py-xl-3 {
padding-top: 1rem !important;
}
.pr-xl-3,
.px-xl-3 {
padding-right: 1rem !important;
}
.pb-xl-3,
.py-xl-3 {
padding-bottom: 1rem !important;
}
.pl-xl-3,
.px-xl-3 {
padding-left: 1rem !important;
}
.p-xl-4 {
padding: 1.5rem !important;
}
.pt-xl-4,
.py-xl-4 {
padding-top: 1.5rem !important;
}
.pr-xl-4,
.px-xl-4 {
padding-right: 1.5rem !important;
}
.pb-xl-4,
.py-xl-4 {
padding-bottom: 1.5rem !important;
}
.pl-xl-4,
.px-xl-4 {
padding-left: 1.5rem !important;
}
.p-xl-5 {
padding: 3rem !important;
}
.pt-xl-5,
.py-xl-5 {
padding-top: 3rem !important;
}
.pr-xl-5,
.px-xl-5 {
padding-right: 3rem !important;
}
.pb-xl-5,
.py-xl-5 {
padding-bottom: 3rem !important;
}
.pl-xl-5,
.px-xl-5 {
padding-left: 3rem !important;
}
.m-xl-n1 {
margin: -0.25rem !important;
}
.mt-xl-n1,
.my-xl-n1 {
margin-top: -0.25rem !important;
}
.mr-xl-n1,
.mx-xl-n1 {
margin-right: -0.25rem !important;
}
.mb-xl-n1,
.my-xl-n1 {
margin-bottom: -0.25rem !important;
}
.ml-xl-n1,
.mx-xl-n1 {
margin-left: -0.25rem !important;
}
.m-xl-n2 {
margin: -0.5rem !important;
}
.mt-xl-n2,
.my-xl-n2 {
margin-top: -0.5rem !important;
}
.mr-xl-n2,
.mx-xl-n2 {
margin-right: -0.5rem !important;
}
.mb-xl-n2,
.my-xl-n2 {
margin-bottom: -0.5rem !important;
}
.ml-xl-n2,
.mx-xl-n2 {
margin-left: -0.5rem !important;
}
.m-xl-n3 {
margin: -1rem !important;
}
.mt-xl-n3,
.my-xl-n3 {
margin-top: -1rem !important;
}
.mr-xl-n3,
.mx-xl-n3 {
margin-right: -1rem !important;
}
.mb-xl-n3,
.my-xl-n3 {
margin-bottom: -1rem !important;
}
.ml-xl-n3,
.mx-xl-n3 {
margin-left: -1rem !important;
}
.m-xl-n4 {
margin: -1.5rem !important;
}
.mt-xl-n4,
.my-xl-n4 {
margin-top: -1.5rem !important;
}
.mr-xl-n4,
.mx-xl-n4 {
margin-right: -1.5rem !important;
}
.mb-xl-n4,
.my-xl-n4 {
margin-bottom: -1.5rem !important;
}
.ml-xl-n4,
.mx-xl-n4 {
margin-left: -1.5rem !important;
}
.m-xl-n5 {
margin: -3rem !important;
}
.mt-xl-n5,
.my-xl-n5 {
margin-top: -3rem !important;
}
.mr-xl-n5,
.mx-xl-n5 {
margin-right: -3rem !important;
}
.mb-xl-n5,
.my-xl-n5 {
margin-bottom: -3rem !important;
}
.ml-xl-n5,
.mx-xl-n5 {
margin-left: -3rem !important;
}
.m-xl-auto {
margin: auto !important;
}
.mt-xl-auto,
.my-xl-auto {
margin-top: auto !important;
}
.mr-xl-auto,
.mx-xl-auto {
margin-right: auto !important;
}
.mb-xl-auto,
.my-xl-auto {
margin-bottom: auto !important;
}
.ml-xl-auto,
.mx-xl-auto {
margin-left: auto !important;
}
}
.stretched-link::after {
position: absolute;
top: 0;
right: 0;
bottom: 0;
left: 0;
z-index: 1;
pointer-events: auto;
content: "";
background-color: rgba(0, 0, 0, 0);
}
.text-monospace {
font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}
.text-justify {
text-align: justify !important;
}
.text-wrap {
white-space: normal !important;
}
.text-nowrap {
white-space: nowrap !important;
}
.text-truncate {
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
}
.text-left {
text-align: left !important;
}
.text-right {
text-align: right !important;
}
.text-center {
text-align: center !important;
}
@media (min-width: 576px) {
.text-sm-left {
text-align: left !important;
}
.text-sm-right {
text-align: right !important;
}
.text-sm-center {
text-align: center !important;
}
}
@media (min-width: 768px) {
.text-md-left {
text-align: left !important;
}
.text-md-right {
text-align: right !important;
}
.text-md-center {
text-align: center !important;
}
}
@media (min-width: 992px) {
.text-lg-left {
text-align: left !important;
}
.text-lg-right {
text-align: right !important;
}
.text-lg-center {
text-align: center !important;
}
}
@media (min-width: 1200px) {
.text-xl-left {
text-align: left !important;
}
.text-xl-right {
text-align: right !important;
}
.text-xl-center {
text-align: center !important;
}
}
.text-lowercase {
text-transform: lowercase !important;
}
.text-uppercase {
text-transform: uppercase !important;
}
.text-capitalize {
text-transform: capitalize !important;
}
.font-weight-light {
font-weight: 300 !important;
}
.font-weight-lighter {
font-weight: lighter !important;
}
.font-weight-normal {
font-weight: 400 !important;
}
.font-weight-bold {
font-weight: 700 !important;
}
.font-weight-bolder {
font-weight: bolder !important;
}
.font-italic {
font-style: italic !important;
}
.text-white {
color: #fff !important;
}
.text-primary {
color: <?php echo $accent_color;?>; !important;
}
a.text-primary:focus,
a.text-primary:hover {
color: #0056b3 !important;
}
.text-secondary {
color: #6c757d !important;
}
a.text-secondary:focus,
a.text-secondary:hover {
color: #494f54 !important;
}
.text-success {
color: #28a745 !important;
}
a.text-success:focus,
a.text-success:hover {
color: #19692c !important;
}
.text-info {
color: #17a2b8 !important;
}
a.text-info:focus,
a.text-info:hover {
color: #0f6674 !important;
}
.text-warning {
color: #ffc107 !important;
}
a.text-warning:focus,
a.text-warning:hover {
color: #ba8b00 !important;
}
.text-danger {
color: #dc3545 !important;
}
a.text-danger:focus,
a.text-danger:hover {
color: #a71d2a !important;
}
.text-light {
color: #f8f9fa !important;
}
a.text-light:focus,
a.text-light:hover {
color: #cbd3da !important;
}
.text-dark {
color: <?php echo $maincolor;?> !important;
}
a.text-dark:focus,
a.text-dark:hover {
color: #121416 !important;
}
.text-body {
color: #212529 !important;
}
.text-muted {
color: #6c757d !important;
}
.text-black-50 {
color: rgba(0, 0, 0, 0.5) !important;
}
.text-white-50 {
color: rgba(255, 255, 255, 0.5) !important;
}
.text-hide {
font: 0/0 a;
color: transparent;
text-shadow: none;
background-color: transparent;
border: 0;
}
.text-decoration-none {
text-decoration: none !important;
}
.text-break {
word-break: break-word !important;
word-wrap: break-word !important;
}
.text-reset {
color: inherit !important;
}
.visible {
visibility: visible !important;
}
.invisible {
visibility: hidden !important;
}
@media print {
*,
::after,
::before {
text-shadow: none !important;
box-shadow: none !important;
}
a:not(.btn) {
text-decoration: underline;
}
abbr[title]::after {
content: " (" attr(title) ")";
}
pre {
white-space: pre-wrap !important;
}
blockquote,
pre {
border: 1px solid #adb5bd;
page-break-inside: avoid;
}
thead {
display: table-header-group;
}
img,
tr {
page-break-inside: avoid;
}
h2,
h3,
p {
orphans: 3;
widows: 3;
}
h2,
h3 {
page-break-after: avoid;
}
@page {
size: a3;
}
body {
min-width: 992px !important;
}
.container {
min-width: 992px !important;
}
.navbar {
display: none;
}
.badge {
border: 1px solid #000;
}
.table {
border-collapse: collapse !important;
}
.table td,
.table th {
background-color: #fff !important;
}
.table-bordered td,
.table-bordered th {
border: 1px solid #dee2e6 !important;
}
.table-dark {
color: inherit;
}
.table-dark tbody + tbody,
.table-dark td,
.table-dark th,
.table-dark thead th {
border-color: #dee2e6;
}
.table .thead-dark th {
color: inherit;
border-color: #dee2e6;
}
}
html.scroll-smooth {
scroll-behavior: smooth;
}
.wrapper,
body,
html {
min-height: 100%;
}
.wrapper {
position: relative;
}
.wrapper .content-wrapper {
min-height: calc(100vh - calc(3.5rem + 1px) - calc(3.5rem + 1px));
}
.layout-boxed .wrapper {
box-shadow: 0 0 10 rgba(0, 0, 0, 0.3);
}
.layout-boxed .wrapper,
.layout-boxed .wrapper::before {
margin: 0 auto;
max-width: 1250px;
}
.layout-boxed .wrapper .main-sidebar {
left: inherit;
}
@supports not (-webkit-touch-callout: none) {
.layout-fixed .wrapper .sidebar {
height: calc(100vh - (3.5rem + 1px));
}
.layout-fixed.text-sm .wrapper .sidebar {
height: calc(100vh - (2.93725rem + 1px));
}
}
.layout-navbar-fixed.layout-fixed .wrapper .control-sidebar {
top: calc(3.5rem + 1px);
}
.layout-navbar-fixed.layout-fixed .wrapper .main-header.text-sm ~ .control-sidebar {
top: calc(2.93725rem + 1px);
}
.layout-navbar-fixed.layout-fixed .wrapper .sidebar {
margin-top: calc(3.5rem + 1px);
}
.layout-navbar-fixed.layout-fixed .wrapper .brand-link.text-sm ~ .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-navbar-fixed.layout-fixed.text-sm .wrapper .control-sidebar {
top: calc(2.93725rem + 1px);
}
.layout-navbar-fixed.layout-fixed.text-sm .wrapper .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-navbar-fixed.sidebar-mini-md.sidebar-collapse .wrapper .brand-link,
.layout-navbar-fixed.sidebar-mini.sidebar-collapse .wrapper .brand-link {
height: calc(3.5rem + 1px);
width: 4.6rem;
}
.layout-navbar-fixed.sidebar-mini-md.sidebar-collapse .wrapper .brand-link.text-sm,
.layout-navbar-fixed.sidebar-mini.sidebar-collapse .wrapper .brand-link.text-sm {
height: calc(2.93725rem + 1px);
}
.layout-navbar-fixed.sidebar-mini-md.sidebar-collapse.text-sm .wrapper .brand-link,
.layout-navbar-fixed.sidebar-mini.sidebar-collapse.text-sm .wrapper .brand-link {
height: calc(2.93725rem + 1px);
}
body:not(.layout-fixed).layout-navbar-fixed.text-sm .wrapper .main-sidebar {
margin-top: calc(calc(2.93725rem + 1px) / -1);
}
body:not(.layout-fixed).layout-navbar-fixed.text-sm .wrapper .main-sidebar .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-navbar-fixed .wrapper .control-sidebar {
top: 0;
}
.layout-navbar-fixed .wrapper a.anchor {
display: block;
position: relative;
top: calc((3.5rem + 1px + (0.5rem * 2)) / -1);
}
.layout-navbar-fixed .wrapper .main-sidebar:hover .brand-link {
transition: width 0.3s ease-in-out;
width: 250px;
}
.layout-navbar-fixed .wrapper .brand-link {
overflow: hidden;
position: fixed;
top: 0;
transition: width 0.3s ease-in-out;
width: 250px;
z-index: 1035;
}
.layout-navbar-fixed .wrapper .sidebar-dark-primary .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-primary .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-secondary .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-secondary .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-success .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-success .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-info .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-info .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-warning .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-warning .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-danger .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-danger .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-light .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-light .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-dark .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-dark .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .content-wrapper {
margin-top: calc(3.5rem + 1px);
}
.layout-navbar-fixed .wrapper .main-header.text-sm ~ .content-wrapper {
margin-top: calc(2.93725rem + 1px);
}
.layout-navbar-fixed .wrapper .main-header {
left: 0;
position: fixed;
right: 0;
top: 0;
z-index: 1033;
}
.layout-navbar-fixed.text-sm .wrapper .content-wrapper {
margin-top: calc(2.93725rem + 1px);
}
.layout-navbar-not-fixed .wrapper .brand-link {
position: static;
}
.layout-navbar-not-fixed .wrapper .content-wrapper,
.layout-navbar-not-fixed .wrapper .sidebar {
margin-top: 0;
}
.layout-navbar-not-fixed .wrapper .main-header {
position: static;
}
.layout-navbar-not-fixed.layout-fixed .wrapper .sidebar {
margin-top: 0;
}
.layout-navbar-fixed.layout-fixed .wrapper .control-sidebar {
top: calc(3.5rem + 1px);
}
.layout-navbar-fixed.layout-fixed .wrapper .main-header.text-sm ~ .control-sidebar,
.text-sm .layout-navbar-fixed.layout-fixed .wrapper .main-header ~ .control-sidebar {
top: calc(2.93725rem + 1px);
}
.layout-navbar-fixed.layout-fixed .wrapper .sidebar {
margin-top: calc(3.5rem + 1px);
}
.layout-navbar-fixed.layout-fixed .wrapper .brand-link.text-sm ~ .sidebar,
.text-sm .layout-navbar-fixed.layout-fixed .wrapper .brand-link ~ .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-navbar-fixed.layout-fixed.text-sm .wrapper .control-sidebar {
top: calc(2.93725rem + 1px);
}
.layout-navbar-fixed.layout-fixed.text-sm .wrapper .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-navbar-fixed .wrapper .control-sidebar {
top: 0;
}
.layout-navbar-fixed .wrapper a.anchor {
display: block;
position: relative;
top: calc((3.5rem + 1px + (0.5rem * 2)) / -1);
}
.layout-navbar-fixed .wrapper.sidebar-collapse .brand-link {
height: calc(3.5rem + 1px);
transition: width 0.3s ease-in-out;
width: 4.6rem;
}
.layout-navbar-fixed .wrapper.sidebar-collapse .brand-link.text-sm,
.text-sm .layout-navbar-fixed .wrapper.sidebar-collapse .brand-link {
height: calc(2.93725rem + 1px);
}
.layout-navbar-fixed .wrapper.sidebar-collapse .main-sidebar:hover .brand-link {
transition: width 0.3s ease-in-out;
width: 250px;
}
.layout-navbar-fixed .wrapper .brand-link {
overflow: hidden;
position: fixed;
top: 0;
transition: width 0.3s ease-in-out;
width: 250px;
z-index: 1035;
}
.layout-navbar-fixed .wrapper .sidebar-dark-primary .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-primary .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-secondary .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-secondary .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-success .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-success .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-info .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-info .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-warning .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-warning .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-danger .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-danger .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-light .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-light .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .sidebar-dark-dark .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-navbar-fixed .wrapper .sidebar-light-dark .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-navbar-fixed .wrapper .content-wrapper {
margin-top: calc(3.5rem + 1px);
}
.layout-navbar-fixed .wrapper .main-header.text-sm ~ .content-wrapper,
.text-sm .layout-navbar-fixed .wrapper .main-header ~ .content-wrapper {
margin-top: calc(2.93725rem + 1px);
}
.layout-navbar-fixed .wrapper .main-header {
left: 0;
position: fixed;
right: 0;
top: 0;
z-index: 1037;
}
.layout-navbar-fixed.text-sm .wrapper .content-wrapper {
margin-top: calc(2.93725rem + 1px);
}
body:not(.layout-fixed).layout-navbar-fixed.text-sm .wrapper .main-sidebar {
margin-top: calc(calc(2.93725rem + 1px) / -1);
}
body:not(.layout-fixed).layout-navbar-fixed.text-sm .wrapper .main-sidebar .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-navbar-not-fixed .wrapper .brand-link {
position: static;
}
.layout-navbar-not-fixed .wrapper .content-wrapper,
.layout-navbar-not-fixed .wrapper .sidebar {
margin-top: 0;
}
.layout-navbar-not-fixed .wrapper .main-header {
position: static;
}
.layout-navbar-not-fixed.layout-fixed .wrapper .sidebar {
margin-top: 0;
}
@media (min-width: 576px) {
.layout-sm-navbar-fixed.layout-fixed .wrapper .control-sidebar {
top: calc(3.5rem + 1px);
}
.layout-sm-navbar-fixed.layout-fixed .wrapper .main-header.text-sm ~ .control-sidebar,
.text-sm .layout-sm-navbar-fixed.layout-fixed .wrapper .main-header ~ .control-sidebar {
top: calc(2.93725rem + 1px);
}
.layout-sm-navbar-fixed.layout-fixed .wrapper .sidebar {
margin-top: calc(3.5rem + 1px);
}
.layout-sm-navbar-fixed.layout-fixed .wrapper .brand-link.text-sm ~ .sidebar,
.text-sm .layout-sm-navbar-fixed.layout-fixed .wrapper .brand-link ~ .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-sm-navbar-fixed.layout-fixed.text-sm .wrapper .control-sidebar {
top: calc(2.93725rem + 1px);
}
.layout-sm-navbar-fixed.layout-fixed.text-sm .wrapper .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-sm-navbar-fixed .wrapper .control-sidebar {
top: 0;
}
.layout-sm-navbar-fixed .wrapper a.anchor {
display: block;
position: relative;
top: calc((3.5rem + 1px + (0.5rem * 2)) / -1);
}
.layout-sm-navbar-fixed .wrapper.sidebar-collapse .brand-link {
height: calc(3.5rem + 1px);
transition: width 0.3s ease-in-out;
width: 4.6rem;
}
.layout-sm-navbar-fixed .wrapper.sidebar-collapse .brand-link.text-sm,
.text-sm .layout-sm-navbar-fixed .wrapper.sidebar-collapse .brand-link {
height: calc(2.93725rem + 1px);
}
.layout-sm-navbar-fixed .wrapper.sidebar-collapse .main-sidebar:hover .brand-link {
transition: width 0.3s ease-in-out;
width: 250px;
}
.layout-sm-navbar-fixed .wrapper .brand-link {
overflow: hidden;
position: fixed;
top: 0;
transition: width 0.3s ease-in-out;
width: 250px;
z-index: 1035;
}
.layout-sm-navbar-fixed .wrapper .sidebar-dark-primary .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-sm-navbar-fixed .wrapper .sidebar-light-primary .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-sm-navbar-fixed .wrapper .sidebar-dark-secondary .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-sm-navbar-fixed .wrapper .sidebar-light-secondary .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-sm-navbar-fixed .wrapper .sidebar-dark-success .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-sm-navbar-fixed .wrapper .sidebar-light-success .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-sm-navbar-fixed .wrapper .sidebar-dark-info .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-sm-navbar-fixed .wrapper .sidebar-light-info .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-sm-navbar-fixed .wrapper .sidebar-dark-warning .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-sm-navbar-fixed .wrapper .sidebar-light-warning .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-sm-navbar-fixed .wrapper .sidebar-dark-danger .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-sm-navbar-fixed .wrapper .sidebar-light-danger .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-sm-navbar-fixed .wrapper .sidebar-dark-light .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-sm-navbar-fixed .wrapper .sidebar-light-light .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-sm-navbar-fixed .wrapper .sidebar-dark-dark .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-sm-navbar-fixed .wrapper .sidebar-light-dark .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-sm-navbar-fixed .wrapper .content-wrapper {
margin-top: calc(3.5rem + 1px);
}
.layout-sm-navbar-fixed .wrapper .main-header.text-sm ~ .content-wrapper,
.text-sm .layout-sm-navbar-fixed .wrapper .main-header ~ .content-wrapper {
margin-top: calc(2.93725rem + 1px);
}
.layout-sm-navbar-fixed .wrapper .main-header {
left: 0;
position: fixed;
right: 0;
top: 0;
z-index: 1037;
}
.layout-sm-navbar-fixed.text-sm .wrapper .content-wrapper {
margin-top: calc(2.93725rem + 1px);
}
body:not(.layout-fixed).layout-sm-navbar-fixed.text-sm .wrapper .main-sidebar {
margin-top: calc(calc(2.93725rem + 1px) / -1);
}
body:not(.layout-fixed).layout-sm-navbar-fixed.text-sm .wrapper .main-sidebar .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-sm-navbar-not-fixed .wrapper .brand-link {
position: static;
}
.layout-sm-navbar-not-fixed .wrapper .content-wrapper,
.layout-sm-navbar-not-fixed .wrapper .sidebar {
margin-top: 0;
}
.layout-sm-navbar-not-fixed .wrapper .main-header {
position: static;
}
.layout-sm-navbar-not-fixed.layout-fixed .wrapper .sidebar {
margin-top: 0;
}
}
@media (min-width: 768px) {
.layout-md-navbar-fixed.layout-fixed .wrapper .control-sidebar {
top: calc(3.5rem + 1px);
}
.layout-md-navbar-fixed.layout-fixed .wrapper .main-header.text-sm ~ .control-sidebar,
.text-sm .layout-md-navbar-fixed.layout-fixed .wrapper .main-header ~ .control-sidebar {
top: calc(2.93725rem + 1px);
}
.layout-md-navbar-fixed.layout-fixed .wrapper .sidebar {
margin-top: calc(3.5rem + 1px);
}
.layout-md-navbar-fixed.layout-fixed .wrapper .brand-link.text-sm ~ .sidebar,
.text-sm .layout-md-navbar-fixed.layout-fixed .wrapper .brand-link ~ .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-md-navbar-fixed.layout-fixed.text-sm .wrapper .control-sidebar {
top: calc(2.93725rem + 1px);
}
.layout-md-navbar-fixed.layout-fixed.text-sm .wrapper .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-md-navbar-fixed .wrapper .control-sidebar {
top: 0;
}
.layout-md-navbar-fixed .wrapper a.anchor {
display: block;
position: relative;
top: calc((3.5rem + 1px + (0.5rem * 2)) / -1);
}
.layout-md-navbar-fixed .wrapper.sidebar-collapse .brand-link {
height: calc(3.5rem + 1px);
transition: width 0.3s ease-in-out;
width: 4.6rem;
}
.layout-md-navbar-fixed .wrapper.sidebar-collapse .brand-link.text-sm,
.text-sm .layout-md-navbar-fixed .wrapper.sidebar-collapse .brand-link {
height: calc(2.93725rem + 1px);
}
.layout-md-navbar-fixed .wrapper.sidebar-collapse .main-sidebar:hover .brand-link {
transition: width 0.3s ease-in-out;
width: 250px;
}
.layout-md-navbar-fixed .wrapper .brand-link {
overflow: hidden;
position: fixed;
top: 0;
transition: width 0.3s ease-in-out;
width: 250px;
z-index: 1035;
}
.layout-md-navbar-fixed .wrapper .sidebar-dark-primary .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-md-navbar-fixed .wrapper .sidebar-light-primary .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-md-navbar-fixed .wrapper .sidebar-dark-secondary .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-md-navbar-fixed .wrapper .sidebar-light-secondary .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-md-navbar-fixed .wrapper .sidebar-dark-success .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-md-navbar-fixed .wrapper .sidebar-light-success .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-md-navbar-fixed .wrapper .sidebar-dark-info .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-md-navbar-fixed .wrapper .sidebar-light-info .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-md-navbar-fixed .wrapper .sidebar-dark-warning .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-md-navbar-fixed .wrapper .sidebar-light-warning .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-md-navbar-fixed .wrapper .sidebar-dark-danger .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-md-navbar-fixed .wrapper .sidebar-light-danger .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-md-navbar-fixed .wrapper .sidebar-dark-light .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-md-navbar-fixed .wrapper .sidebar-light-light .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-md-navbar-fixed .wrapper .sidebar-dark-dark .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-md-navbar-fixed .wrapper .sidebar-light-dark .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-md-navbar-fixed .wrapper .content-wrapper {
margin-top: calc(3.5rem + 1px);
}
.layout-md-navbar-fixed .wrapper .main-header.text-sm ~ .content-wrapper,
.text-sm .layout-md-navbar-fixed .wrapper .main-header ~ .content-wrapper {
margin-top: calc(2.93725rem + 1px);
}
.layout-md-navbar-fixed .wrapper .main-header {
left: 0;
position: fixed;
right: 0;
top: 0;
z-index: 1037;
}
.layout-md-navbar-fixed.text-sm .wrapper .content-wrapper {
margin-top: calc(2.93725rem + 1px);
}
body:not(.layout-fixed).layout-md-navbar-fixed.text-sm .wrapper .main-sidebar {
margin-top: calc(calc(2.93725rem + 1px) / -1);
}
body:not(.layout-fixed).layout-md-navbar-fixed.text-sm .wrapper .main-sidebar .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-md-navbar-not-fixed .wrapper .brand-link {
position: static;
}
.layout-md-navbar-not-fixed .wrapper .content-wrapper,
.layout-md-navbar-not-fixed .wrapper .sidebar {
margin-top: 0;
}
.layout-md-navbar-not-fixed .wrapper .main-header {
position: static;
}
.layout-md-navbar-not-fixed.layout-fixed .wrapper .sidebar {
margin-top: 0;
}
}
@media (min-width: 992px) {
.layout-lg-navbar-fixed.layout-fixed .wrapper .control-sidebar {
top: calc(3.5rem + 1px);
}
.layout-lg-navbar-fixed.layout-fixed .wrapper .main-header.text-sm ~ .control-sidebar,
.text-sm .layout-lg-navbar-fixed.layout-fixed .wrapper .main-header ~ .control-sidebar {
top: calc(2.93725rem + 1px);
}
.layout-lg-navbar-fixed.layout-fixed .wrapper .sidebar {
margin-top: calc(3.5rem + 1px);
}
.layout-lg-navbar-fixed.layout-fixed .wrapper .brand-link.text-sm ~ .sidebar,
.text-sm .layout-lg-navbar-fixed.layout-fixed .wrapper .brand-link ~ .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-lg-navbar-fixed.layout-fixed.text-sm .wrapper .control-sidebar {
top: calc(2.93725rem + 1px);
}
.layout-lg-navbar-fixed.layout-fixed.text-sm .wrapper .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-lg-navbar-fixed .wrapper .control-sidebar {
top: 0;
}
.layout-lg-navbar-fixed .wrapper a.anchor {
display: block;
position: relative;
top: calc((3.5rem + 1px + (0.5rem * 2)) / -1);
}
.layout-lg-navbar-fixed .wrapper.sidebar-collapse .brand-link {
height: calc(3.5rem + 1px);
transition: width 0.3s ease-in-out;
width: 4.6rem;
}
.layout-lg-navbar-fixed .wrapper.sidebar-collapse .brand-link.text-sm,
.text-sm .layout-lg-navbar-fixed .wrapper.sidebar-collapse .brand-link {
height: calc(2.93725rem + 1px);
}
.layout-lg-navbar-fixed .wrapper.sidebar-collapse .main-sidebar:hover .brand-link {
transition: width 0.3s ease-in-out;
width: 250px;
}
.layout-lg-navbar-fixed .wrapper .brand-link {
overflow: hidden;
position: fixed;
top: 0;
transition: width 0.3s ease-in-out;
width: 250px;
z-index: 1035;
}
.layout-lg-navbar-fixed .wrapper .sidebar-dark-primary .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-lg-navbar-fixed .wrapper .sidebar-light-primary .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-lg-navbar-fixed .wrapper .sidebar-dark-secondary .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-lg-navbar-fixed .wrapper .sidebar-light-secondary .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-lg-navbar-fixed .wrapper .sidebar-dark-success .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-lg-navbar-fixed .wrapper .sidebar-light-success .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-lg-navbar-fixed .wrapper .sidebar-dark-info .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-lg-navbar-fixed .wrapper .sidebar-light-info .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-lg-navbar-fixed .wrapper .sidebar-dark-warning .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-lg-navbar-fixed .wrapper .sidebar-light-warning .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-lg-navbar-fixed .wrapper .sidebar-dark-danger .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-lg-navbar-fixed .wrapper .sidebar-light-danger .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-lg-navbar-fixed .wrapper .sidebar-dark-light .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-lg-navbar-fixed .wrapper .sidebar-light-light .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-lg-navbar-fixed .wrapper .sidebar-dark-dark .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-lg-navbar-fixed .wrapper .sidebar-light-dark .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-lg-navbar-fixed .wrapper .content-wrapper {
margin-top: calc(3.5rem + 1px);
}
.layout-lg-navbar-fixed .wrapper .main-header.text-sm ~ .content-wrapper,
.text-sm .layout-lg-navbar-fixed .wrapper .main-header ~ .content-wrapper {
margin-top: calc(2.93725rem + 1px);
}
.layout-lg-navbar-fixed .wrapper .main-header {
left: 0;
position: fixed;
right: 0;
top: 0;
z-index: 1037;
}
.layout-lg-navbar-fixed.text-sm .wrapper .content-wrapper {
margin-top: calc(2.93725rem + 1px);
}
body:not(.layout-fixed).layout-lg-navbar-fixed.text-sm .wrapper .main-sidebar {
margin-top: calc(calc(2.93725rem + 1px) / -1);
}
body:not(.layout-fixed).layout-lg-navbar-fixed.text-sm .wrapper .main-sidebar .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-lg-navbar-not-fixed .wrapper .brand-link {
position: static;
}
.layout-lg-navbar-not-fixed .wrapper .content-wrapper,
.layout-lg-navbar-not-fixed .wrapper .sidebar {
margin-top: 0;
}
.layout-lg-navbar-not-fixed .wrapper .main-header {
position: static;
}
.layout-lg-navbar-not-fixed.layout-fixed .wrapper .sidebar {
margin-top: 0;
}
}
@media (min-width: 1200px) {
.layout-xl-navbar-fixed.layout-fixed .wrapper .control-sidebar {
top: calc(3.5rem + 1px);
}
.layout-xl-navbar-fixed.layout-fixed .wrapper .main-header.text-sm ~ .control-sidebar,
.text-sm .layout-xl-navbar-fixed.layout-fixed .wrapper .main-header ~ .control-sidebar {
top: calc(2.93725rem + 1px);
}
.layout-xl-navbar-fixed.layout-fixed .wrapper .sidebar {
margin-top: calc(3.5rem + 1px);
}
.layout-xl-navbar-fixed.layout-fixed .wrapper .brand-link.text-sm ~ .sidebar,
.text-sm .layout-xl-navbar-fixed.layout-fixed .wrapper .brand-link ~ .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-xl-navbar-fixed.layout-fixed.text-sm .wrapper .control-sidebar {
top: calc(2.93725rem + 1px);
}
.layout-xl-navbar-fixed.layout-fixed.text-sm .wrapper .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-xl-navbar-fixed .wrapper .control-sidebar {
top: 0;
}
.layout-xl-navbar-fixed .wrapper a.anchor {
display: block;
position: relative;
top: calc((3.5rem + 1px + (0.5rem * 2)) / -1);
}
.layout-xl-navbar-fixed .wrapper.sidebar-collapse .brand-link {
height: calc(3.5rem + 1px);
transition: width 0.3s ease-in-out;
width: 4.6rem;
}
.layout-xl-navbar-fixed .wrapper.sidebar-collapse .brand-link.text-sm,
.text-sm .layout-xl-navbar-fixed .wrapper.sidebar-collapse .brand-link {
height: calc(2.93725rem + 1px);
}
.layout-xl-navbar-fixed .wrapper.sidebar-collapse .main-sidebar:hover .brand-link {
transition: width 0.3s ease-in-out;
width: 250px;
}
.layout-xl-navbar-fixed .wrapper .brand-link {
overflow: hidden;
position: fixed;
top: 0;
transition: width 0.3s ease-in-out;
width: 250px;
z-index: 1035;
}
.layout-xl-navbar-fixed .wrapper .sidebar-dark-primary .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-xl-navbar-fixed .wrapper .sidebar-light-primary .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-xl-navbar-fixed .wrapper .sidebar-dark-secondary .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-xl-navbar-fixed .wrapper .sidebar-light-secondary .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-xl-navbar-fixed .wrapper .sidebar-dark-success .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-xl-navbar-fixed .wrapper .sidebar-light-success .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-xl-navbar-fixed .wrapper .sidebar-dark-info .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-xl-navbar-fixed .wrapper .sidebar-light-info .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-xl-navbar-fixed .wrapper .sidebar-dark-warning .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-xl-navbar-fixed .wrapper .sidebar-light-warning .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-xl-navbar-fixed .wrapper .sidebar-dark-danger .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-xl-navbar-fixed .wrapper .sidebar-light-danger .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-xl-navbar-fixed .wrapper .sidebar-dark-light .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-xl-navbar-fixed .wrapper .sidebar-light-light .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-xl-navbar-fixed .wrapper .sidebar-dark-dark .brand-link:not([class*="navbar"]) {
background-color: <?php echo $maincolor;?>;
}
.layout-xl-navbar-fixed .wrapper .sidebar-light-dark .brand-link:not([class*="navbar"]) {
background-color: #fff;
}
.layout-xl-navbar-fixed .wrapper .content-wrapper {
margin-top: calc(3.5rem + 1px);
}
.layout-xl-navbar-fixed .wrapper .main-header.text-sm ~ .content-wrapper,
.text-sm .layout-xl-navbar-fixed .wrapper .main-header ~ .content-wrapper {
margin-top: calc(2.93725rem + 1px);
}
.layout-xl-navbar-fixed .wrapper .main-header {
left: 0;
position: fixed;
right: 0;
top: 0;
z-index: 1037;
}
.layout-xl-navbar-fixed.text-sm .wrapper .content-wrapper {
margin-top: calc(2.93725rem + 1px);
}
body:not(.layout-fixed).layout-xl-navbar-fixed.text-sm .wrapper .main-sidebar {
margin-top: calc(calc(2.93725rem + 1px) / -1);
}
body:not(.layout-fixed).layout-xl-navbar-fixed.text-sm .wrapper .main-sidebar .sidebar {
margin-top: calc(2.93725rem + 1px);
}
.layout-xl-navbar-not-fixed .wrapper .brand-link {
position: static;
}
.layout-xl-navbar-not-fixed .wrapper .content-wrapper,
.layout-xl-navbar-not-fixed .wrapper .sidebar {
margin-top: 0;
}
.layout-xl-navbar-not-fixed .wrapper .main-header {
position: static;
}
.layout-xl-navbar-not-fixed.layout-fixed .wrapper .sidebar {
margin-top: 0;
}
}
.layout-footer-fixed .wrapper .control-sidebar {
bottom: 0;
}
.layout-footer-fixed .wrapper .main-footer {
bottom: 0;
left: 0;
position: fixed;
right: 0;
z-index: 1032;
}
.layout-footer-not-fixed .wrapper .main-footer {
position: static;
}
.layout-footer-not-fixed .wrapper .content-wrapper {
margin-bottom: 0;
}
.layout-footer-fixed .wrapper .control-sidebar {
bottom: 0;
}
.layout-footer-fixed .wrapper .main-footer {
bottom: 0;
left: 0;
position: fixed;
right: 0;
z-index: 1032;
}
.layout-footer-fixed .wrapper .content-wrapper {
padding-bottom: calc(3.5rem + 1px);
}
.layout-footer-not-fixed .wrapper .main-footer {
position: static;
}
@media (min-width: 576px) {
.layout-sm-footer-fixed .wrapper .control-sidebar {
bottom: 0;
}
.layout-sm-footer-fixed .wrapper .main-footer {
bottom: 0;
left: 0;
position: fixed;
right: 0;
z-index: 1032;
}
.layout-sm-footer-fixed .wrapper .content-wrapper {
padding-bottom: calc(3.5rem + 1px);
}
.layout-sm-footer-not-fixed .wrapper .main-footer {
position: static;
}
}
@media (min-width: 768px) {
.layout-md-footer-fixed .wrapper .control-sidebar {
bottom: 0;
}
.layout-md-footer-fixed .wrapper .main-footer {
bottom: 0;
left: 0;
position: fixed;
right: 0;
z-index: 1032;
}
.layout-md-footer-fixed .wrapper .content-wrapper {
padding-bottom: calc(3.5rem + 1px);
}
.layout-md-footer-not-fixed .wrapper .main-footer {
position: static;
}
}
@media (min-width: 992px) {
.layout-lg-footer-fixed .wrapper .control-sidebar {
bottom: 0;
}
.layout-lg-footer-fixed .wrapper .main-footer {
bottom: 0;
left: 0;
position: fixed;
right: 0;
z-index: 1032;
}
.layout-lg-footer-fixed .wrapper .content-wrapper {
padding-bottom: calc(3.5rem + 1px);
}
.layout-lg-footer-not-fixed .wrapper .main-footer {
position: static;
}
}
@media (min-width: 1200px) {
.layout-xl-footer-fixed .wrapper .control-sidebar {
bottom: 0;
}
.layout-xl-footer-fixed .wrapper .main-footer {
bottom: 0;
left: 0;
position: fixed;
right: 0;
z-index: 1032;
}
.layout-xl-footer-fixed .wrapper .content-wrapper {
padding-bottom: calc(3.5rem + 1px);
}
.layout-xl-footer-not-fixed .wrapper .main-footer {
position: static;
}
}
.layout-top-nav .wrapper {
margin-left: 0;
}
.layout-top-nav .wrapper .main-header .brand-image {
margin-top: -0.5rem;
margin-right: 0.2rem;
height: 33px;
}
.layout-top-nav .wrapper .main-sidebar {
bottom: inherit;
height: inherit;
}
.layout-top-nav .wrapper .content-wrapper,
.layout-top-nav .wrapper .main-footer,
.layout-top-nav .wrapper .main-header {
margin-left: 0;
}
body.sidebar-collapse:not(.sidebar-mini-md):not(.sidebar-mini) .content-wrapper,
body.sidebar-collapse:not(.sidebar-mini-md):not(.sidebar-mini) .content-wrapper::before,
body.sidebar-collapse:not(.sidebar-mini-md):not(.sidebar-mini) .main-footer,
body.sidebar-collapse:not(.sidebar-mini-md):not(.sidebar-mini) .main-footer::before,
body.sidebar-collapse:not(.sidebar-mini-md):not(.sidebar-mini) .main-header,
body.sidebar-collapse:not(.sidebar-mini-md):not(.sidebar-mini) .main-header::before {
margin-left: 0;
}
@media (min-width: 768px) {
body:not(.sidebar-mini-md) .content-wrapper,
body:not(.sidebar-mini-md) .main-footer,
body:not(.sidebar-mini-md) .main-header {
transition: margin-left 0.3s ease-in-out;
margin-left: 250px;
}
}
@media (min-width: 768px) and (prefers-reduced-motion: reduce) {
body:not(.sidebar-mini-md) .content-wrapper,
body:not(.sidebar-mini-md) .main-footer,
body:not(.sidebar-mini-md) .main-header {
transition: none;
}
}
@media (min-width: 768px) {
.sidebar-collapse body:not(.sidebar-mini-md) .content-wrapper,
.sidebar-collapse body:not(.sidebar-mini-md) .main-footer,
.sidebar-collapse body:not(.sidebar-mini-md) .main-header {
margin-left: 0;
}
}
@media (max-width: 991.98px) {
body:not(.sidebar-mini-md) .content-wrapper,
body:not(.sidebar-mini-md) .content-wrapper::before,
body:not(.sidebar-mini-md) .main-footer,
body:not(.sidebar-mini-md) .main-footer::before,
body:not(.sidebar-mini-md) .main-header,
body:not(.sidebar-mini-md) .main-header::before {
margin-left: 0;
}
}
@media (min-width: 768px) {
.sidebar-mini-md .content-wrapper,
.sidebar-mini-md .main-footer,
.sidebar-mini-md .main-header {
transition: margin-left 0.3s ease-in-out;
margin-left: 250px;
}
}
@media (min-width: 768px) and (prefers-reduced-motion: reduce) {
.sidebar-mini-md .content-wrapper,
.sidebar-mini-md .main-footer,
.sidebar-mini-md .main-header {
transition: none;
}
}
@media (min-width: 768px) {
.sidebar-collapse .sidebar-mini-md .content-wrapper,
.sidebar-collapse .sidebar-mini-md .main-footer,
.sidebar-collapse .sidebar-mini-md .main-header {
margin-left: 4.6rem;
}
}
@media (max-width: 991.98px) {
.sidebar-mini-md .content-wrapper,
.sidebar-mini-md .content-wrapper::before,
.sidebar-mini-md .main-footer,
.sidebar-mini-md .main-footer::before,
.sidebar-mini-md .main-header,
.sidebar-mini-md .main-header::before {
margin-left: 4.6rem;
}
}
.content-wrapper {
background-color: #f4f6f9;
}
.content-wrapper > .content {
padding: 0 0.5rem;
}
.main-sidebar,
.main-sidebar::before {
transition: margin-left 0.3s ease-in-out, width 0.3s ease-in-out;
width: 250px;
}
@media (prefers-reduced-motion: reduce) {
.main-sidebar,
.main-sidebar::before {
transition: none;
}
}
.sidebar-collapse:not(.sidebar-mini):not(.sidebar-mini-md) .main-sidebar,
.sidebar-collapse:not(.sidebar-mini):not(.sidebar-mini-md) .main-sidebar::before {
box-shadow: none !important;
}
.sidebar-collapse .main-sidebar,
.sidebar-collapse .main-sidebar::before {
margin-left: -250px;
}
.sidebar-collapse .main-sidebar .nav-sidebar.nav-child-indent .nav-treeview {
padding: 0;
}
@media (max-width: 767.98px) {
.main-sidebar,
.main-sidebar::before {
box-shadow: none !important;
margin-left: -250px;
}
.sidebar-open .main-sidebar,
.sidebar-open .main-sidebar::before {
margin-left: 0;
}
}
:not(.layout-fixed) .main-sidebar {
height: inherit;
min-height: 100%;
position: absolute;
top: 0;
}
.layout-fixed .brand-link {
width: 250px;
}
.layout-fixed .main-sidebar {
bottom: 0;
float: none;
height: 100vh;
left: 0;
position: fixed;
top: 0;
}
.layout-fixed .control-sidebar {
bottom: 0;
float: none;
height: 100vh;
position: fixed;
top: 0;
}
.layout-fixed .control-sidebar .control-sidebar-content {
height: calc(100vh - calc(3.5rem + 1px));
}
@supports (-webkit-touch-callout: none) {
.layout-fixed .main-sidebar {
height: inherit;
}
}
.main-footer {
background-color: #fff;
border-top: 1px solid #dee2e6;
color: #869099;
padding: 1rem;
}
.main-footer.text-sm,
.text-sm .main-footer {
padding: 0.812rem;
}
.content-header {
padding: 15px 0.5rem;
}
.text-sm .content-header {
padding: 10px 0.5rem;
}
.content-header h1 {
font-size: 1.8rem;
margin: 0;
}
.text-sm .content-header h1 {
font-size: 1.5rem;
}
.content-header .breadcrumb {
background-color: transparent;
line-height: 1.8rem;
margin-bottom: 0;
padding: 0;
}
.text-sm .content-header .breadcrumb {
line-height: 1.5rem;
}
.hold-transition .content-wrapper,
.hold-transition .control-sidebar,
.hold-transition .control-sidebar *,
.hold-transition .main-footer,
.hold-transition .main-header,
.hold-transition .main-sidebar,
.hold-transition .main-sidebar * {
transition: none !important;
-webkit-animation-duration: 0s !important;
animation-duration: 0s !important;
}
.dark-mode {
<?php
if (config("SETTINGS::CUSTOMTHEME:ENABLE-BG") == "true" && \Illuminate\Support\Facades\Storage::disk('public')->exists('background.png')){
?>
    background-image: url("<?php echo asset('storage/background.png');?>");
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
<?php } ?>
background-color: <?php echo $secondarycolor;?> !important;
color: #fff;
}
.dark-mode .breadcrumb-item + .breadcrumb-item::before,
.dark-mode .breadcrumb-item.active {
color: #adb5bd;
}
.dark-mode .main-footer {
background-color: <?php echo $maincolor;?>;
border-color: #4b545c;
}
.dark-mode .content-wrapper {
<?php
if (config("SETTINGS::CUSTOMTHEME:ENABLE-BG") == "true" && \Illuminate\Support\Facades\Storage::disk('public')->exists('background.png')){
?>
    background-image: url("<?php echo asset('storage/background.png');?>");
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
<?php } ?>
background-color: <?php echo $secondarycolor;?>;
color: #fff;
}
.dark-mode .content-wrapper .content-header {
color: #fff;
}
.main-header {
border-bottom: 1px solid #dee2e6;
z-index: 1034;
}
.main-header .nav-link {
height: 2.5rem;
position: relative;
}
.main-header.text-sm .nav-link,
.text-sm .main-header .nav-link {
height: 1.93725rem;
padding: 0.35rem 1rem;
}
.main-header.text-sm .nav-link > .fa,
.main-header.text-sm .nav-link > .fab,
.main-header.text-sm .nav-link > .fad,
.main-header.text-sm .nav-link > .fal,
.main-header.text-sm .nav-link > .far,
.main-header.text-sm .nav-link > .fas,
.main-header.text-sm .nav-link > .ion,
.main-header.text-sm .nav-link > .svg-inline--fa,
.text-sm .main-header .nav-link > .fa,
.text-sm .main-header .nav-link > .fab,
.text-sm .main-header .nav-link > .fad,
.text-sm .main-header .nav-link > .fal,
.text-sm .main-header .nav-link > .far,
.text-sm .main-header .nav-link > .fas,
.text-sm .main-header .nav-link > .ion,
.text-sm .main-header .nav-link > .svg-inline--fa {
font-size: 0.875rem;
}
.main-header .navbar-nav .nav-item {
margin: 0;
}
.main-header .navbar-nav[class*="-right"] .dropdown-menu {
left: auto;
margin-top: -3px;
right: 0;
}
@media (max-width: 575.98px) {
.main-header .navbar-nav[class*="-right"] .dropdown-menu {
left: 0;
right: auto;
}
}
.main-header.dropdown-legacy .dropdown-menu {
top: 3rem;
margin-top: 0;
}
.navbar-img {
height: calc(3.5rem + 1px) / 2;
width: auto;
}
.navbar-badge {
font-size: 0.6rem;
font-weight: 300;
padding: 2px 4px;
position: absolute;
right: 5px;
top: 9px;
}
.btn-navbar {
background-color: transparent;
border-left-width: 0;
}
.form-control-navbar {
border-right-width: 0;
}
.form-control-navbar + .input-group-append {
margin-left: 0;
}
.btn-navbar,
.form-control-navbar {
transition: none;
}
.navbar-dark .btn-navbar,
.navbar-dark .form-control-navbar {
background-color: rgba(255, 255, 255, 0.2);
border: 0;
}
.navbar-dark .form-control-navbar::-moz-placeholder {
color: rgba(255, 255, 255, 0.6);
}
.navbar-dark .form-control-navbar:-ms-input-placeholder {
color: rgba(255, 255, 255, 0.6);
}
.navbar-dark .form-control-navbar::placeholder {
color: rgba(255, 255, 255, 0.6);
}
.navbar-dark .form-control-navbar + .input-group-append > .btn-navbar {
color: rgba(255, 255, 255, 0.6);
}
.navbar-dark .form-control-navbar:focus,
.navbar-dark .form-control-navbar:focus + .input-group-append .btn-navbar {
background-color: rgba(255, 255, 255, 0.6);
border: 0 !important;
color: <?php echo $maincolor;?>;
}
.navbar-light .btn-navbar,
.navbar-light .form-control-navbar {
background-color: #f2f4f6;
border: 0;
}
.navbar-light .form-control-navbar::-moz-placeholder {
color: rgba(0, 0, 0, 0.6);
}
.navbar-light .form-control-navbar:-ms-input-placeholder {
color: rgba(0, 0, 0, 0.6);
}
.navbar-light .form-control-navbar::placeholder {
color: rgba(0, 0, 0, 0.6);
}
.navbar-light .form-control-navbar + .input-group-append > .btn-navbar {
color: rgba(0, 0, 0, 0.6);
}
.navbar-light .form-control-navbar:focus,
.navbar-light .form-control-navbar:focus + .input-group-append .btn-navbar {
background-color: #e9ecef;
border: 0 !important;
color: <?php echo $maincolor;?>;
}
.brand-link {
display: block;
font-size: 1.25rem;
line-height: 1.5;
padding: 0.8125rem 0.5rem;
transition: width 0.3s ease-in-out;
white-space: nowrap;
}
.brand-link:hover {
color: #fff;
text-decoration: none;
}
.text-sm .brand-link {
font-size: inherit;
}
[class*="sidebar-dark"] .brand-link {
border-bottom: 1px solid #4b545c;
}
[class*="sidebar-dark"] .brand-link,
[class*="sidebar-dark"] .brand-link .pushmenu {
color: rgba(255, 255, 255, 0.8);
}
[class*="sidebar-dark"] .brand-link .pushmenu:hover,
[class*="sidebar-dark"] .brand-link:hover {
color: #fff;
}
[class*="sidebar-light"] .brand-link {
border-bottom: 1px solid #dee2e6;
}
[class*="sidebar-light"] .brand-link,
[class*="sidebar-light"] .brand-link .pushmenu {
color: rgba(0, 0, 0, 0.8);
}
[class*="sidebar-light"] .brand-link .pushmenu:hover,
[class*="sidebar-light"] .brand-link:hover {
color: #000;
}
.brand-link .pushmenu {
margin-right: 0.5rem;
font-size: 1rem;
}
.brand-link .brand-link {
padding: 0;
border-bottom: none;
}
.brand-link .brand-image {
float: left;
line-height: 0.8;
margin-left: 0.8rem;
margin-right: 0.5rem;
margin-top: -3px;
max-height: 33px;
width: auto;
}
.brand-link .brand-image-xs {
float: left;
line-height: 0.8;
margin-top: -0.1rem;
max-height: 33px;
width: auto;
}
.brand-link .brand-image-xl {
line-height: 0.8;
max-height: 40px;
width: auto;
}
.brand-link .brand-image-xl.single {
margin-top: -0.3rem;
}
.brand-link.text-sm .brand-image,
.text-sm .brand-link .brand-image {
height: 29px;
margin-bottom: -0.25rem;
margin-left: 0.95rem;
margin-top: -0.25rem;
}
.brand-link.text-sm .brand-image-xs,
.text-sm .brand-link .brand-image-xs {
margin-top: -0.2rem;
max-height: 29px;
}
.brand-link.text-sm .brand-image-xl,
.text-sm .brand-link .brand-image-xl {
margin-top: -0.225rem;
max-height: 38px;
}
.main-sidebar {
height: 100vh;
overflow-y: hidden;
z-index: 1038;
}
.main-sidebar a:-moz-focusring {
border: 0;
outline: 0;
}
.sidebar {
height: calc(100% - (3.5rem + 1px));
overflow-y: initial;
padding-bottom: 0;
padding-left: 0.5rem;
padding-right: 0.5rem;
padding-top: 0;
}
.user-panel {
position: relative;
}
[class*="sidebar-dark"] .user-panel {
border-bottom: 1px solid #4f5962;
}
[class*="sidebar-light"] .user-panel {
border-bottom: 1px solid #dee2e6;
}
.user-panel,
.user-panel .info {
overflow: hidden;
white-space: nowrap;
}
.user-panel .image {
display: inline-block;
padding-left: 0.8rem;
}
.user-panel img {
height: auto;
width: 2.1rem;
}
.user-panel .info {
display: inline-block;
padding: 5px 5px 5px 10px;
}
.user-panel .dropdown-menu,
.user-panel .status {
font-size: 0.875rem;
}
.nav-sidebar .nav-item > .nav-link {
margin-bottom: 0.2rem;
}
.nav-sidebar .nav-item > .nav-link .right {
transition: transform ease-in-out 0.3s;
}
@media (prefers-reduced-motion: reduce) {
.nav-sidebar .nav-item > .nav-link .right {
transition: none;
}
}
.nav-sidebar .nav-link > .right,
.nav-sidebar .nav-link > p > .right {
position: absolute;
right: 1rem;
top: 0.7rem;
}
.nav-sidebar .nav-link > .right i,
.nav-sidebar .nav-link > .right span,
.nav-sidebar .nav-link > p > .right i,
.nav-sidebar .nav-link > p > .right span {
margin-left: 0.5rem;
}
.nav-sidebar .nav-link > .right:nth-child(2),
.nav-sidebar .nav-link > p > .right:nth-child(2) {
right: 2.2rem;
}
.nav-sidebar .menu-open > .nav-treeview {
display: block;
}
.nav-sidebar .menu-is-opening > .nav-link i.right,
.nav-sidebar .menu-open > .nav-link i.right {
transform: rotate(-90deg);
}
.nav-sidebar > .nav-item {
margin-bottom: 0;
}
.nav-sidebar > .nav-item .nav-icon {
margin-left: 0.05rem;
font-size: 1.2rem;
margin-right: 0.2rem;
text-align: center;
width: 1.6rem;
}
.nav-sidebar > .nav-item .nav-icon.fa,
.nav-sidebar > .nav-item .nav-icon.fab,
.nav-sidebar > .nav-item .nav-icon.fad,
.nav-sidebar > .nav-item .nav-icon.fal,
.nav-sidebar > .nav-item .nav-icon.far,
.nav-sidebar > .nav-item .nav-icon.fas,
.nav-sidebar > .nav-item .nav-icon.ion,
.nav-sidebar > .nav-item .nav-icon.svg-inline--fa {
font-size: 1.1rem;
}
.nav-sidebar > .nav-item .float-right {
margin-top: 3px;
}
.nav-sidebar .nav-treeview {
display: none;
list-style: none;
padding: 0;
}
.nav-sidebar .nav-treeview > .nav-item > .nav-link > .nav-icon {
width: 1.6rem;
}
.nav-sidebar.nav-child-indent .nav-treeview {
transition: padding 0.3s ease-in-out;
padding-left: 1rem;
}
.text-sm .nav-sidebar.nav-child-indent .nav-treeview {
padding-left: 0.5rem;
}
.nav-sidebar.nav-child-indent.nav-legacy .nav-treeview .nav-treeview {
padding-left: 2rem;
margin-left: -1rem;
}
.text-sm .nav-sidebar.nav-child-indent.nav-legacy .nav-treeview .nav-treeview {
padding-left: 1rem;
margin-left: -0.5rem;
}
.nav-sidebar .nav-header {
font-size: 0.9rem;
padding: 0.5rem;
}
.nav-sidebar .nav-header:not(:first-of-type) {
padding: 1.7rem 1rem 0.5rem;
}
.nav-sidebar .nav-link p {
display: inline-block;
margin: 0;
}
.sidebar-is-opening .nav-sidebar .nav-link p {
-webkit-animation-name: fadeIn;
animation-name: fadeIn;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
}
#sidebar-overlay {
background-color: rgba(0, 0, 0, 0.1);
bottom: 0;
display: none;
left: 0;
position: fixed;
right: 0;
top: 0;
z-index: 1037;
}
@media (max-width: 991.98px) {
.sidebar-open #sidebar-overlay {
display: block;
}
}
[class*="sidebar-light-"] {
background-color: #fff;
}
[class*="sidebar-light-"] .user-panel a:hover {
color: #212529;
}
[class*="sidebar-light-"] .user-panel .status {
background-color: rgba(0, 0, 0, 0.1);
color: <?php echo $maincolor;?>;
}
[class*="sidebar-light-"] .user-panel .status:active,
[class*="sidebar-light-"] .user-panel .status:focus,
[class*="sidebar-light-"] .user-panel .status:hover {
background-color: rgba(0, 0, 0, 0.1);
color: #212529;
}
[class*="sidebar-light-"] .user-panel .dropdown-menu {
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
border-color: rgba(0, 0, 0, 0.1);
}
[class*="sidebar-light-"] .user-panel .dropdown-item {
color: #212529;
}
[class*="sidebar-light-"] .nav-sidebar > .nav-item > .nav-link:active,
[class*="sidebar-light-"] .nav-sidebar > .nav-item > .nav-link:focus {
color: <?php echo $maincolor;?>;
}
[class*="sidebar-light-"] .nav-sidebar > .nav-item.menu-open > .nav-link,
[class*="sidebar-light-"] .nav-sidebar > .nav-item:hover > .nav-link {
background-color: rgba(0, 0, 0, 0.1);
color: #212529;
}
[class*="sidebar-light-"] .nav-sidebar > .nav-item > .nav-link.active {
color: #000;
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}
[class*="sidebar-light-"] .nav-sidebar > .nav-item > .nav-treeview {
background-color: transparent;
}
[class*="sidebar-light-"] .nav-header {
background-color: inherit;
color: #292d32;
}
[class*="sidebar-light-"] .sidebar a {
color: <?php echo $maincolor;?>;
}
[class*="sidebar-light-"] .sidebar a:hover {
text-decoration: none;
}
[class*="sidebar-light-"] .nav-treeview > .nav-item > .nav-link {
color: #777;
}
[class*="sidebar-light-"] .nav-treeview > .nav-item > .nav-link.active,
[class*="sidebar-light-"] .nav-treeview > .nav-item > .nav-link.active:hover {
background-color: rgba(0, 0, 0, 0.1);
color: #212529;
}
[class*="sidebar-light-"] .nav-treeview > .nav-item > .nav-link:hover {
background-color: rgba(0, 0, 0, 0.1);
}
[class*="sidebar-light-"] .nav-flat .nav-item .nav-treeview .nav-treeview {
border-color: rgba(0, 0, 0, 0.1);
}
[class*="sidebar-light-"] .nav-flat .nav-item .nav-treeview > .nav-item > .nav-link,
[class*="sidebar-light-"] .nav-flat .nav-item .nav-treeview > .nav-item > .nav-link.active {
border-color: rgba(0, 0, 0, 0.1);
}
[class*="sidebar-dark-"] {
background-color: <?php echo $maincolor;?>;
}
[class*="sidebar-dark-"] .user-panel a:hover {
color: #fff;
}
[class*="sidebar-dark-"] .user-panel .status {
background-color: rgba(255, 255, 255, 0.1);
color: #c2c7d0;
}
[class*="sidebar-dark-"] .user-panel .status:active,
[class*="sidebar-dark-"] .user-panel .status:focus,
[class*="sidebar-dark-"] .user-panel .status:hover {
background-color: rgba(247, 247, 247, 0.1);
color: #fff;
}
[class*="sidebar-dark-"] .user-panel .dropdown-menu {
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
border-color: rgba(242, 242, 242, 0.1);
}
[class*="sidebar-dark-"] .user-panel .dropdown-item {
color: #212529;
}
[class*="sidebar-dark-"] .nav-sidebar > .nav-item > .nav-link:active {
color: #c2c7d0;
}
[class*="sidebar-dark-"] .nav-sidebar > .nav-item.menu-open > .nav-link,
[class*="sidebar-dark-"] .nav-sidebar > .nav-item:hover > .nav-link,
[class*="sidebar-dark-"] .nav-sidebar > .nav-item > .nav-link:focus {
background-color: rgba(255, 255, 255, 0.1);
color: #fff;
}
[class*="sidebar-dark-"] .nav-sidebar > .nav-item > .nav-link.active {
color: #fff;
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}
[class*="sidebar-dark-"] .nav-sidebar > .nav-item > .nav-treeview {
background-color: transparent;
}
[class*="sidebar-dark-"] .nav-header {
background-color: inherit;
color: #d0d4db;
}
[class*="sidebar-dark-"] .sidebar a {
color: #c2c7d0;
}
[class*="sidebar-dark-"] .sidebar a:focus,
[class*="sidebar-dark-"] .sidebar a:hover {
text-decoration: none;
}
[class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link {
color: #c2c7d0;
}
[class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link:focus,
[class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link:hover {
background-color: rgba(255, 255, 255, 0.1);
color: #fff;
}
[class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link.active,
[class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link.active:focus,
[class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link.active:hover {
background-color: rgba(255, 255, 255, 0.9);
color: <?php echo $maincolor;?>;
}
[class*="sidebar-dark-"] .nav-flat .nav-item .nav-treeview .nav-treeview {
border-color: rgba(255, 255, 255, 0.9);
}
[class*="sidebar-dark-"] .nav-flat .nav-item .nav-treeview > .nav-item > .nav-link,
[class*="sidebar-dark-"] .nav-flat .nav-item .nav-treeview > .nav-item > .nav-link.active {
border-color: rgba(255, 255, 255, 0.9);
}
.sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
background-color: <?php echo $accent_color;?>;
color: #fff;
}
.sidebar-dark-primary .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-primary .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: <?php echo $accent_color;?>;
}
.sidebar-dark-secondary .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-secondary .nav-sidebar > .nav-item > .nav-link.active {
background-color: #6c757d;
color: #fff;
}
.sidebar-dark-secondary .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-secondary .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #6c757d;
}
.sidebar-dark-success .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-success .nav-sidebar > .nav-item > .nav-link.active {
background-color: #28a745;
color: #fff;
}
.sidebar-dark-success .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-success .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #28a745;
}
.sidebar-dark-info .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-info .nav-sidebar > .nav-item > .nav-link.active {
background-color: #17a2b8;
color: #fff;
}
.sidebar-dark-info .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-info .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #17a2b8;
}
.sidebar-dark-warning .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-warning .nav-sidebar > .nav-item > .nav-link.active {
background-color: #ffc107;
color: #1f2d3d;
}
.sidebar-dark-warning .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-warning .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #ffc107;
}
.sidebar-dark-danger .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-danger .nav-sidebar > .nav-item > .nav-link.active {
background-color: #dc3545;
color: #fff;
}
.sidebar-dark-danger .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-danger .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #dc3545;
}
.sidebar-dark-light .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-light .nav-sidebar > .nav-item > .nav-link.active {
background-color: #f8f9fa;
color: #1f2d3d;
}
.sidebar-dark-light .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-light .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #f8f9fa;
}
.sidebar-dark-dark .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-dark .nav-sidebar > .nav-item > .nav-link.active {
background-color: <?php echo $maincolor;?>;
color: #fff;
}
.sidebar-dark-dark .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-dark .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: <?php echo $maincolor;?>;
}
.sidebar-dark-lightblue .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-lightblue .nav-sidebar > .nav-item > .nav-link.active {
background-color: #3c8dbc;
color: #fff;
}
.sidebar-dark-lightblue .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-lightblue .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #3c8dbc;
}
.sidebar-dark-navy .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-navy .nav-sidebar > .nav-item > .nav-link.active {
background-color: #001f3f;
color: #fff;
}
.sidebar-dark-navy .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-navy .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #001f3f;
}
.sidebar-dark-olive .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-olive .nav-sidebar > .nav-item > .nav-link.active {
background-color: #3d9970;
color: #fff;
}
.sidebar-dark-olive .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-olive .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #3d9970;
}
.sidebar-dark-lime .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-lime .nav-sidebar > .nav-item > .nav-link.active {
background-color: #01ff70;
color: #1f2d3d;
}
.sidebar-dark-lime .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-lime .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #01ff70;
}
.sidebar-dark-fuchsia .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-fuchsia .nav-sidebar > .nav-item > .nav-link.active {
background-color: #f012be;
color: #fff;
}
.sidebar-dark-fuchsia .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-fuchsia .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #f012be;
}
.sidebar-dark-maroon .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-maroon .nav-sidebar > .nav-item > .nav-link.active {
background-color: #d81b60;
color: #fff;
}
.sidebar-dark-maroon .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-maroon .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #d81b60;
}
.sidebar-dark-blue .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-blue .nav-sidebar > .nav-item > .nav-link.active {
background-color: <?php echo $accent_color;?>;
color: #fff;
}
.sidebar-dark-blue .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-blue .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: <?php echo $accent_color;?>;
}
.sidebar-dark-indigo .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-indigo .nav-sidebar > .nav-item > .nav-link.active {
background-color: #6610f2;
color: #fff;
}
.sidebar-dark-indigo .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-indigo .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #6610f2;
}
.sidebar-dark-purple .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-purple .nav-sidebar > .nav-item > .nav-link.active {
background-color: #6f42c1;
color: #fff;
}
.sidebar-dark-purple .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-purple .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #6f42c1;
}
.sidebar-dark-pink .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-pink .nav-sidebar > .nav-item > .nav-link.active {
background-color: #e83e8c;
color: #fff;
}
.sidebar-dark-pink .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-pink .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #e83e8c;
}
.sidebar-dark-red .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-red .nav-sidebar > .nav-item > .nav-link.active {
background-color: #dc3545;
color: #fff;
}
.sidebar-dark-red .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-red .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #dc3545;
}
.sidebar-dark-orange .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-orange .nav-sidebar > .nav-item > .nav-link.active {
background-color: #fd7e14;
color: #1f2d3d;
}
.sidebar-dark-orange .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-orange .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #fd7e14;
}
.sidebar-dark-yellow .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-yellow .nav-sidebar > .nav-item > .nav-link.active {
background-color: #ffc107;
color: #1f2d3d;
}
.sidebar-dark-yellow .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-yellow .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #ffc107;
}
.sidebar-dark-green .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-green .nav-sidebar > .nav-item > .nav-link.active {
background-color: #28a745;
color: #fff;
}
.sidebar-dark-green .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-green .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #28a745;
}
.sidebar-dark-teal .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-teal .nav-sidebar > .nav-item > .nav-link.active {
background-color: #20c997;
color: #fff;
}
.sidebar-dark-teal .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-teal .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #20c997;
}
.sidebar-dark-cyan .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-cyan .nav-sidebar > .nav-item > .nav-link.active {
background-color: #17a2b8;
color: #fff;
}
.sidebar-dark-cyan .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-cyan .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #17a2b8;
}
.sidebar-dark-white .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-white .nav-sidebar > .nav-item > .nav-link.active {
background-color: #fff;
color: #1f2d3d;
}
.sidebar-dark-white .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-white .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #fff;
}
.sidebar-dark-gray .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-gray .nav-sidebar > .nav-item > .nav-link.active {
background-color: #6c757d;
color: #fff;
}
.sidebar-dark-gray .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-gray .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: #6c757d;
}
.sidebar-dark-gray-dark .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-light-gray-dark .nav-sidebar > .nav-item > .nav-link.active {
background-color: <?php echo $maincolor;?>;
color: #fff;
}
.sidebar-dark-gray-dark .nav-sidebar.nav-legacy > .nav-item > .nav-link.active,
.sidebar-light-gray-dark .nav-sidebar.nav-legacy > .nav-item > .nav-link.active {
border-color: <?php echo $maincolor;?>;
}
.sidebar-mini .main-sidebar.sidebar-focused .nav-compact.nav-sidebar.nav-child-indent:not(.nav-flat) .nav-treeview,
.sidebar-mini .main-sidebar:not(.sidebar-no-expand) .nav-compact.nav-sidebar.nav-child-indent:not(.nav-flat) .nav-treeview,
.sidebar-mini .main-sidebar:not(.sidebar-no-expand):hover .nav-compact.nav-sidebar.nav-child-indent:not(.nav-flat) .nav-treeview,
.sidebar-mini-md .main-sidebar.sidebar-focused .nav-compact.nav-sidebar.nav-child-indent:not(.nav-flat) .nav-treeview,
.sidebar-mini-md .main-sidebar:not(.sidebar-no-expand) .nav-compact.nav-sidebar.nav-child-indent:not(.nav-flat) .nav-treeview,
.sidebar-mini-md .main-sidebar:not(.sidebar-no-expand):hover .nav-compact.nav-sidebar.nav-child-indent:not(.nav-flat) .nav-treeview {
padding-left: 1rem;
margin-left: -0.5rem;
}
.nav-flat {
margin: -0.25rem -0.5rem 0;
}
.nav-flat .nav-item > .nav-link {
border-radius: 0;
margin-bottom: 0;
}
.nav-flat .nav-item > .nav-link > .nav-icon {
margin-left: 0.55rem;
}
.nav-flat:not(.nav-child-indent) .nav-treeview .nav-item > .nav-link > .nav-icon {
margin-left: 0.4rem;
}
.nav-flat.nav-child-indent .nav-treeview {
padding-left: 0;
}
.nav-flat.nav-child-indent .nav-treeview .nav-icon {
margin-left: 0.85rem;
}
.nav-flat.nav-child-indent .nav-treeview .nav-treeview {
border-left: 0.2rem solid;
}
.nav-flat.nav-child-indent .nav-treeview .nav-treeview .nav-icon {
margin-left: 1.15rem;
}
.nav-flat.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-icon {
margin-left: 1.45rem;
}
.nav-flat.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-icon {
margin-left: 1.75rem;
}
.nav-flat.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-icon {
margin-left: 2.05rem;
}
.sidebar-collapse .nav-flat.nav-child-indent .nav-treeview .nav-icon {
margin-left: 0.55rem;
}
.sidebar-collapse .nav-flat.nav-child-indent .nav-treeview .nav-link {
padding-left: calc(1rem - 0.2rem);
}
.sidebar-collapse .nav-flat.nav-child-indent .nav-treeview .nav-treeview .nav-icon {
margin-left: 0.35rem;
}
.sidebar-collapse .nav-flat.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-icon {
margin-left: 0.15rem;
}
.sidebar-collapse .nav-flat.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-icon {
margin-left: -0.15rem;
}
.sidebar-collapse .nav-flat.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-icon {
margin-left: -0.35rem;
}
.sidebar-mini .main-sidebar.sidebar-focused .nav-flat.nav-compact.nav-sidebar .nav-treeview .nav-icon,
.sidebar-mini .main-sidebar:not(.sidebar-no-expand):hover .nav-flat.nav-compact.nav-sidebar .nav-treeview .nav-icon,
.sidebar-mini-md .main-sidebar.sidebar-focused .nav-flat.nav-compact.nav-sidebar .nav-treeview .nav-icon,
.sidebar-mini-md .main-sidebar:not(.sidebar-no-expand):hover .nav-flat.nav-compact.nav-sidebar .nav-treeview .nav-icon {
margin-left: 0.4rem;
}
.sidebar-mini .main-sidebar.sidebar-focused .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-icon,
.sidebar-mini .main-sidebar:not(.sidebar-no-expand):hover .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-icon,
.sidebar-mini-md .main-sidebar.sidebar-focused .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-icon,
.sidebar-mini-md .main-sidebar:not(.sidebar-no-expand):hover .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-icon {
margin-left: 0.85rem;
}
.sidebar-mini .main-sidebar.sidebar-focused .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-icon,
.sidebar-mini .main-sidebar:not(.sidebar-no-expand):hover .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-icon,
.sidebar-mini-md .main-sidebar.sidebar-focused .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-icon,
.sidebar-mini-md .main-sidebar:not(.sidebar-no-expand):hover .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-icon {
margin-left: 1.15rem;
}
.sidebar-mini .main-sidebar.sidebar-focused .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-icon,
.sidebar-mini .main-sidebar:not(.sidebar-no-expand):hover .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-icon,
.sidebar-mini-md .main-sidebar.sidebar-focused .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-icon,
.sidebar-mini-md .main-sidebar:not(.sidebar-no-expand):hover .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-icon {
margin-left: 1.45rem;
}
.sidebar-mini .main-sidebar.sidebar-focused .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-icon,
.sidebar-mini .main-sidebar:not(.sidebar-no-expand):hover .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-icon,
.sidebar-mini-md .main-sidebar.sidebar-focused .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-icon,
.sidebar-mini-md .main-sidebar:not(.sidebar-no-expand):hover .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-icon {
margin-left: 1.75rem;
}
.sidebar-mini .main-sidebar.sidebar-focused .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-icon,
.sidebar-mini .main-sidebar:not(.sidebar-no-expand):hover .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-icon,
.sidebar-mini-md .main-sidebar.sidebar-focused .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-icon,
.sidebar-mini-md .main-sidebar:not(.sidebar-no-expand):hover .nav-flat.nav-sidebar.nav-child-indent .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-treeview .nav-icon {
margin-left: 2.05rem;
}
.nav-flat .nav-icon {
transition: margin-left ease-in-out 0.3s;
}
@media (prefers-reduced-motion: reduce) {
.nav-flat .nav-icon {
transition: none;
}
}
.nav-flat .nav-treeview .nav-icon {
margin-left: -0.2rem;
}
.nav-flat.nav-sidebar > .nav-item .nav-treeview,
.nav-flat.nav-sidebar > .nav-item > .nav-treeview {
background-color: rgba(255, 255, 255, 0.05);
}
.nav-flat.nav-sidebar > .nav-item .nav-treeview .nav-item > .nav-link,
.nav-flat.nav-sidebar > .nav-item > .nav-treeview .nav-item > .nav-link {
border-left: 0.2rem solid;
}
.nav-legacy {
margin: -0.25rem -0.5rem 0;
}
.nav-legacy.nav-sidebar .nav-item > .nav-link {
border-radius: 0;
margin-bottom: 0;
}
.nav-legacy.nav-sidebar .nav-item > .nav-link > .nav-icon {
margin-left: 0.55rem;
}
.text-sm .nav-legacy.nav-sidebar .nav-item > .nav-link > .nav-icon {
margin-left: 0.75rem;
}
.nav-legacy.nav-sidebar > .nav-item > .nav-link.active {
background-color: inherit;
border-left: 3px solid transparent;
box-shadow: none;
}
.nav-legacy.nav-sidebar > .nav-item > .nav-link.active > .nav-icon {
margin-left: calc(0.55rem - 3px);
}
.text-sm .nav-legacy.nav-sidebar > .nav-item > .nav-link.active > .nav-icon {
margin-left: calc(0.75rem - 3px);
}
.text-sm .nav-legacy.nav-sidebar.nav-flat .nav-treeview .nav-item > .nav-link > .nav-icon {
margin-left: calc(0.75rem - 3px);
}
.sidebar-mini .nav-legacy > .nav-item .nav-link .nav-icon,
.sidebar-mini-md .nav-legacy > .nav-item .nav-link .nav-icon {
transition: margin-left ease-in-out 0.3s;
margin-left: 0.75rem;
}
@media (prefers-reduced-motion: reduce) {
.sidebar-mini .nav-legacy > .nav-item .nav-link .nav-icon,
.sidebar-mini-md .nav-legacy > .nav-item .nav-link .nav-icon {
transition: none;
}
}
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .nav-legacy.nav-child-indent .nav-treeview,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .nav-legacy.nav-child-indent .nav-treeview,
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .nav-legacy.nav-child-indent .nav-treeview,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .nav-legacy.nav-child-indent .nav-treeview {
padding-left: 1rem;
}
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .nav-legacy.nav-child-indent .nav-treeview .nav-treeview,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .nav-legacy.nav-child-indent .nav-treeview .nav-treeview,
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .nav-legacy.nav-child-indent .nav-treeview .nav-treeview,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .nav-legacy.nav-child-indent .nav-treeview .nav-treeview {
padding-left: 2rem;
margin-left: -1rem;
}
.sidebar-mini-md.sidebar-collapse.text-sm .main-sidebar.sidebar-focused .nav-legacy.nav-child-indent .nav-treeview,
.sidebar-mini-md.sidebar-collapse.text-sm .main-sidebar:hover .nav-legacy.nav-child-indent .nav-treeview,
.sidebar-mini.sidebar-collapse.text-sm .main-sidebar.sidebar-focused .nav-legacy.nav-child-indent .nav-treeview,
.sidebar-mini.sidebar-collapse.text-sm .main-sidebar:hover .nav-legacy.nav-child-indent .nav-treeview {
padding-left: 0.5rem;
}
.sidebar-mini-md.sidebar-collapse.text-sm .main-sidebar.sidebar-focused .nav-legacy.nav-child-indent .nav-treeview .nav-treeview,
.sidebar-mini-md.sidebar-collapse.text-sm .main-sidebar:hover .nav-legacy.nav-child-indent .nav-treeview .nav-treeview,
.sidebar-mini.sidebar-collapse.text-sm .main-sidebar.sidebar-focused .nav-legacy.nav-child-indent .nav-treeview .nav-treeview,
.sidebar-mini.sidebar-collapse.text-sm .main-sidebar:hover .nav-legacy.nav-child-indent .nav-treeview .nav-treeview {
padding-left: 1rem;
margin-left: -0.5rem;
}
.sidebar-mini-md.sidebar-collapse .nav-legacy > .nav-item > .nav-link .nav-icon,
.sidebar-mini.sidebar-collapse .nav-legacy > .nav-item > .nav-link .nav-icon {
margin-left: 0.55rem;
}
.sidebar-mini-md.sidebar-collapse .nav-legacy > .nav-item > .nav-link.active > .nav-icon,
.sidebar-mini.sidebar-collapse .nav-legacy > .nav-item > .nav-link.active > .nav-icon {
margin-left: 0.36rem;
}
.sidebar-mini-md.sidebar-collapse .nav-legacy.nav-child-indent .nav-treeview .nav-treeview,
.sidebar-mini.sidebar-collapse .nav-legacy.nav-child-indent .nav-treeview .nav-treeview {
padding-left: 0;
margin-left: 0;
}
.sidebar-mini-md.sidebar-collapse.text-sm .nav-legacy > .nav-item > .nav-link .nav-icon,
.sidebar-mini.sidebar-collapse.text-sm .nav-legacy > .nav-item > .nav-link .nav-icon {
margin-left: 0.75rem;
}
.sidebar-mini-md.sidebar-collapse.text-sm .nav-legacy > .nav-item > .nav-link.active > .nav-icon,
.sidebar-mini.sidebar-collapse.text-sm .nav-legacy > .nav-item > .nav-link.active > .nav-icon {
margin-left: calc(0.75rem - 3px);
}
[class*="sidebar-dark"] .nav-legacy.nav-sidebar > .nav-item .nav-treeview,
[class*="sidebar-dark"] .nav-legacy.nav-sidebar > .nav-item > .nav-treeview {
background-color: rgba(255, 255, 255, 0.05);
}
[class*="sidebar-dark"] .nav-legacy.nav-sidebar > .nav-item > .nav-link.active {
color: #fff;
}
[class*="sidebar-dark"] .nav-legacy .nav-treeview > .nav-item > .nav-link.active,
[class*="sidebar-dark"] .nav-legacy .nav-treeview > .nav-item > .nav-link:focus,
[class*="sidebar-dark"] .nav-legacy .nav-treeview > .nav-item > .nav-link:hover {
background-color: transparent;
color: #fff;
}
[class*="sidebar-light"] .nav-legacy.nav-sidebar > .nav-item .nav-treeview,
[class*="sidebar-light"] .nav-legacy.nav-sidebar > .nav-item > .nav-treeview {
background-color: rgba(0, 0, 0, 0.05);
}
[class*="sidebar-light"] .nav-legacy.nav-sidebar > .nav-item > .nav-link.active {
color: #000;
}
[class*="sidebar-light"] .nav-legacy .nav-treeview > .nav-item > .nav-link.active,
[class*="sidebar-light"] .nav-legacy .nav-treeview > .nav-item > .nav-link:focus,
[class*="sidebar-light"] .nav-legacy .nav-treeview > .nav-item > .nav-link:hover {
background-color: transparent;
color: #000;
}
.nav-collapse-hide-child .menu-open > .nav-treeview {
max-height: -webkit-min-content;
max-height: -moz-min-content;
max-height: min-content;
-webkit-animation-name: fadeIn;
animation-name: fadeIn;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
}
.sidebar-collapse .nav-collapse-hide-child .menu-open > .nav-treeview {
max-height: 0;
-webkit-animation-name: fadeOut;
animation-name: fadeOut;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
}
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .nav-collapse-hide-child .menu-open > .nav-treeview,
.sidebar-mini-md.sidebar-collapse .main-sidebar:not(.sidebar-no-expand):hover .nav-collapse-hide-child .menu-open > .nav-treeview,
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .nav-collapse-hide-child .menu-open > .nav-treeview,
.sidebar-mini.sidebar-collapse .main-sidebar:not(.sidebar-no-expand):hover .nav-collapse-hide-child .menu-open > .nav-treeview {
max-height: -webkit-min-content;
max-height: -moz-min-content;
max-height: min-content;
-webkit-animation-name: fadeIn;
animation-name: fadeIn;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
}
.nav-compact .nav-header,
.nav-compact .nav-link {
padding-top: 0.25rem;
padding-bottom: 0.25rem;
}
.nav-compact .nav-header:not(:first-of-type) {
padding-top: 0.75rem;
padding-bottom: 0.25rem;
}
.nav-compact .nav-link > .right,
.nav-compact .nav-link > p > .right {
top: 0.465rem;
}
.text-sm .nav-compact .nav-link > .right,
.text-sm .nav-compact .nav-link > p > .right {
top: 0.7rem;
}
[class*="sidebar-dark"] .btn-sidebar,
[class*="sidebar-dark"] .form-control-sidebar {
background-color: #3f474e;
border: 1px solid #56606a;
color: #fff;
}
[class*="sidebar-dark"] .btn-sidebar:focus,
[class*="sidebar-dark"] .form-control-sidebar:focus {
border: 1px solid #7a8793;
}
[class*="sidebar-dark"] .btn-sidebar:hover {
background-color: <?php echo $secondarycolor;?>;
}
[class*="sidebar-dark"] .btn-sidebar:focus {
background-color: #4b545c;
}
[class*="sidebar-dark"] .list-group-item {
background-color: <?php echo $secondarycolor;?>;
border-color: #56606a;
color: #c2c7d0;
}
[class*="sidebar-dark"] .list-group-item:hover {
background-color: #4b545c;
}
[class*="sidebar-dark"] .list-group-item:focus {
background-color: #515a63;
}
[class*="sidebar-dark"] .list-group-item .search-path {
color: #adb5bd;
}
[class*="sidebar-light"] .btn-sidebar,
[class*="sidebar-light"] .form-control-sidebar {
background-color: #f2f2f2;
border: 1px solid #d9d9d9;
color: #1f2d3d;
}
[class*="sidebar-light"] .btn-sidebar:focus,
[class*="sidebar-light"] .form-control-sidebar:focus {
border: 1px solid #b3b3b3;
}
[class*="sidebar-light"] .btn-sidebar:hover {
background-color: #ececec;
}
[class*="sidebar-light"] .btn-sidebar:focus {
background-color: #e6e6e6;
}
[class*="sidebar-light"] .list-group-item {
border-color: #d9d9d9;
}
[class*="sidebar-light"] .list-group-item:hover {
background-color: #ececec;
}
[class*="sidebar-light"] .list-group-item:focus {
background-color: #e6e6e6;
}
[class*="sidebar-light"] .list-group-item .search-path {
color: #6c757d;
}
.sidebar .form-inline .input-group {
width: 100%;
}
.sidebar nav .form-inline {
margin-bottom: 0.2rem;
}
.layout-boxed:not(.sidebar-mini):not(.sidebar-mini-md).sidebar-collapse .main-sidebar {
margin-left: 0;
}
.layout-boxed:not(.sidebar-mini):not(.sidebar-mini-md) .content-wrapper,
.layout-boxed:not(.sidebar-mini):not(.sidebar-mini-md) .main-footer,
.layout-boxed:not(.sidebar-mini):not(.sidebar-mini-md) .main-header {
z-index: 9999;
position: relative;
}
.sidebar-collapse .form-control-sidebar,
.sidebar-collapse .form-control-sidebar ~ .input-group-append,
.sidebar-collapse .sidebar-search-results {
display: none;
}
[data-widget="sidebar-search"] input[type="search"]::-ms-clear,
[data-widget="sidebar-search"] input[type="search"]::-ms-reveal {
display: none;
width: 0;
height: 0;
}
[data-widget="sidebar-search"] input[type="search"]::-webkit-search-cancel-button,
[data-widget="sidebar-search"] input[type="search"]::-webkit-search-decoration,
[data-widget="sidebar-search"] input[type="search"]::-webkit-search-results-button,
[data-widget="sidebar-search"] input[type="search"]::-webkit-search-results-decoration {
display: none;
}
.sidebar-search-results {
position: relative;
display: none;
width: 100%;
}
.sidebar-search-open .sidebar-search-results {
display: inline-block;
}
.sidebar-search-results .search-title {
margin-bottom: -0.1rem;
}
.sidebar-search-results .list-group {
position: absolute;
width: 100%;
z-index: 1039;
}
.sidebar-search-results .list-group > .list-group-item {
padding: 0.375rem 0.75rem;
}
.sidebar-search-results .list-group > .list-group-item:-moz-focusring {
margin-top: 0;
border-left: 1px solid transparent;
border-top: 0;
border-bottom: 1px solid transparent;
}
.sidebar-search-results .list-group > .list-group-item:first-child {
margin-top: 0;
border-top: 0;
border-top-left-radius: 0;
border-top-right-radius: 0;
}
.sidebar-search-results .search-path {
font-size: 80%;
}
.sidebar-search-open .btn,
.sidebar-search-open .form-control {
border-bottom-right-radius: 0;
border-bottom-left-radius: 0;
}
[class*="sidebar-dark"] .sidebar-custom {
border-top: 1px solid #4f5962;
}
[class*="sidebar-light"] .sidebar-custom {
border-top: 1px solid #dee2e6;
}
.layout-fixed.sidebar-collapse .hide-on-collapse {
display: none;
}
.layout-fixed.sidebar-collapse:hover .hide-on-collapse {
display: block;
}
.layout-fixed .main-sidebar-custom .sidebar {
height: calc(100% - ((3.5rem + 4rem) + 1px));
}
.layout-fixed .main-sidebar-custom .sidebar-custom {
height: 4rem;
padding: 0.85rem 0.5rem;
}
.layout-fixed .main-sidebar-custom-lg .sidebar {
height: calc(100% - ((3.5rem + 6rem) + 1px));
}
.layout-fixed .main-sidebar-custom-lg .sidebar-custom {
height: 6rem;
}
.layout-fixed .main-sidebar-custom-xl .sidebar {
height: calc(100% - ((3.5rem + 8rem) + 1px));
}
.layout-fixed .main-sidebar-custom-xl .sidebar-custom {
height: 8rem;
}
.layout-fixed .main-sidebar-custom .pos-right,
.layout-fixed .main-sidebar-custom-lg .pos-right,
.layout-fixed .main-sidebar-custom-xl .pos-right {
position: absolute;
right: 0.5rem;
}
.logo-xl,
.logo-xs {
opacity: 1;
position: absolute;
visibility: visible;
}
.logo-xl.brand-image-xs,
.logo-xs.brand-image-xs {
left: 18px;
top: 12px;
}
.logo-xl.brand-image-xl,
.logo-xs.brand-image-xl {
left: 12px;
top: 6px;
}
.logo-xs {
opacity: 0;
visibility: hidden;
}
.logo-xs.brand-image-xl {
left: 16px;
top: 8px;
}
.brand-link.logo-switch::before {
content: "\00a0";
}
@media (min-width: 992px) {
.sidebar-mini .nav-sidebar,
.sidebar-mini .nav-sidebar .nav-link,
.sidebar-mini .nav-sidebar > .nav-header {
white-space: nowrap;
overflow: hidden;
}
.sidebar-mini.sidebar-collapse .d-hidden-mini {
display: none;
}
.sidebar-mini.sidebar-collapse .content-wrapper,
.sidebar-mini.sidebar-collapse .main-footer,
.sidebar-mini.sidebar-collapse .main-header {
margin-left: 4.6rem !important;
}
.sidebar-mini.sidebar-collapse .nav-sidebar .nav-header {
display: none;
}
.sidebar-mini.sidebar-collapse .nav-sidebar .nav-link p {
width: 0;
}
.sidebar-mini.sidebar-collapse .brand-text,
.sidebar-mini.sidebar-collapse .nav-sidebar .nav-link p,
.sidebar-mini.sidebar-collapse .sidebar .user-panel > .info {
margin-left: -10px;
-webkit-animation-name: fadeOut;
animation-name: fadeOut;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
visibility: hidden;
}
.sidebar-mini.sidebar-collapse .logo-xl {
-webkit-animation-name: fadeOut;
animation-name: fadeOut;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
visibility: hidden;
}
.sidebar-mini.sidebar-collapse .logo-xs {
display: inline-block;
-webkit-animation-name: fadeIn;
animation-name: fadeIn;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
visibility: visible;
}
.sidebar-mini.sidebar-collapse .main-sidebar {
overflow-x: hidden;
}
.sidebar-mini.sidebar-collapse .main-sidebar,
.sidebar-mini.sidebar-collapse .main-sidebar::before {
margin-left: 0;
width: 4.6rem;
}
.sidebar-mini.sidebar-collapse .main-sidebar .user-panel .image {
float: none;
}
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused,
.sidebar-mini.sidebar-collapse .main-sidebar:hover {
width: 250px;
}
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .brand-link,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .brand-link {
width: 250px;
}
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .user-panel,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .user-panel {
text-align: left;
}
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .user-panel .image,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .user-panel .image {
float: left;
}
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .brand-text,
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .logo-xl,
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .nav-sidebar .nav-link p,
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .user-panel > .info,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .brand-text,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .logo-xl,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .nav-sidebar .nav-link p,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .user-panel > .info {
display: inline-block;
margin-left: 0;
-webkit-animation-name: fadeIn;
animation-name: fadeIn;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
visibility: visible;
}
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .logo-xs,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .logo-xs {
-webkit-animation-name: fadeOut;
animation-name: fadeOut;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
visibility: hidden;
}
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .brand-image,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .brand-image {
margin-right: 0.5rem;
}
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .sidebar-form,
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .user-panel > .info,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .sidebar-form,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .user-panel > .info {
display: block !important;
transform: translateZ(0);
}
.sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused .nav-sidebar > .nav-item > .nav-link > span,
.sidebar-mini.sidebar-collapse .main-sidebar:hover .nav-sidebar > .nav-item > .nav-link > span {
display: inline-block !important;
}
.sidebar-mini.sidebar-collapse .visible-sidebar-mini {
display: block !important;
}
.sidebar-mini.sidebar-collapse.layout-fixed .main-sidebar:hover .brand-link {
width: 250px;
}
.sidebar-mini.sidebar-collapse.layout-fixed .brand-link {
width: 4.6rem;
}
}
@media (max-width: 991.98px) {
.sidebar-mini.sidebar-collapse .main-sidebar {
box-shadow: none !important;
}
}
@media (min-width: 768px) {
.sidebar-mini-md .nav-sidebar,
.sidebar-mini-md .nav-sidebar .nav-link,
.sidebar-mini-md .nav-sidebar > .nav-header {
white-space: nowrap;
overflow: hidden;
}
.sidebar-mini-md.sidebar-collapse .d-hidden-mini {
display: none;
}
.sidebar-mini-md.sidebar-collapse .content-wrapper,
.sidebar-mini-md.sidebar-collapse .main-footer,
.sidebar-mini-md.sidebar-collapse .main-header {
margin-left: 4.6rem !important;
}
.sidebar-mini-md.sidebar-collapse .nav-sidebar .nav-header {
display: none;
}
.sidebar-mini-md.sidebar-collapse .nav-sidebar .nav-link p {
width: 0;
}
.sidebar-mini-md.sidebar-collapse .brand-text,
.sidebar-mini-md.sidebar-collapse .nav-sidebar .nav-link p,
.sidebar-mini-md.sidebar-collapse .sidebar .user-panel > .info {
margin-left: -10px;
-webkit-animation-name: fadeOut;
animation-name: fadeOut;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
visibility: hidden;
}
.sidebar-mini-md.sidebar-collapse .logo-xl {
-webkit-animation-name: fadeOut;
animation-name: fadeOut;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
visibility: hidden;
}
.sidebar-mini-md.sidebar-collapse .logo-xs {
display: inline-block;
-webkit-animation-name: fadeIn;
animation-name: fadeIn;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
visibility: visible;
}
.sidebar-mini-md.sidebar-collapse .main-sidebar {
overflow-x: hidden;
}
.sidebar-mini-md.sidebar-collapse .main-sidebar,
.sidebar-mini-md.sidebar-collapse .main-sidebar::before {
margin-left: 0;
width: 4.6rem;
}
.sidebar-mini-md.sidebar-collapse .main-sidebar .user-panel .image {
float: none;
}
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover {
width: 250px;
}
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .brand-link,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .brand-link {
width: 250px;
}
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .user-panel,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .user-panel {
text-align: left;
}
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .user-panel .image,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .user-panel .image {
float: left;
}
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .brand-text,
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .logo-xl,
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .nav-sidebar .nav-link p,
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .user-panel > .info,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .brand-text,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .logo-xl,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .nav-sidebar .nav-link p,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .user-panel > .info {
display: inline-block;
margin-left: 0;
-webkit-animation-name: fadeIn;
animation-name: fadeIn;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
visibility: visible;
}
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .logo-xs,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .logo-xs {
-webkit-animation-name: fadeOut;
animation-name: fadeOut;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
visibility: hidden;
}
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .brand-image,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .brand-image {
margin-right: 0.5rem;
}
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .sidebar-form,
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .user-panel > .info,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .sidebar-form,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .user-panel > .info {
display: block !important;
transform: translateZ(0);
}
.sidebar-mini-md.sidebar-collapse .main-sidebar.sidebar-focused .nav-sidebar > .nav-item > .nav-link > span,
.sidebar-mini-md.sidebar-collapse .main-sidebar:hover .nav-sidebar > .nav-item > .nav-link > span {
display: inline-block !important;
}
.sidebar-mini-md.sidebar-collapse .visible-sidebar-mini {
display: block !important;
}
.sidebar-mini-md.sidebar-collapse.layout-fixed .main-sidebar:hover .brand-link {
width: 250px;
}
.sidebar-mini-md.sidebar-collapse.layout-fixed .brand-link {
width: 4.6rem;
}
}
@media (max-width: 767.98px) {
.sidebar-mini-md.sidebar-collapse .main-sidebar {
box-shadow: none !important;
}
}
@-webkit-keyframes fadeIn {
from {
opacity: 0;
}
to {
opacity: 1;
}
}
@keyframes fadeIn {
from {
opacity: 0;
}
to {
opacity: 1;
}
}
@-webkit-keyframes fadeOut {
from {
opacity: 1;
}
to {
opacity: 0;
}
}
@keyframes fadeOut {
from {
opacity: 1;
}
to {
opacity: 0;
}
}
.sidebar-collapse .main-sidebar.sidebar-focused .nav-header,
.sidebar-collapse .main-sidebar:hover .nav-header {
display: inline-block;
}
.sidebar-collapse .sidebar-no-expand.main-sidebar.sidebar-focused,
.sidebar-collapse .sidebar-no-expand.main-sidebar:hover {
width: 4.6rem;
}
.sidebar-collapse .sidebar-no-expand.main-sidebar.sidebar-focused .nav-header,
.sidebar-collapse .sidebar-no-expand.main-sidebar:hover .nav-header {
display: none;
}
.sidebar-collapse .sidebar-no-expand.main-sidebar.sidebar-focused .brand-link,
.sidebar-collapse .sidebar-no-expand.main-sidebar:hover .brand-link {
width: 4.6rem !important;
}
.sidebar-collapse .sidebar-no-expand.main-sidebar.sidebar-focused .user-panel .image,
.sidebar-collapse .sidebar-no-expand.main-sidebar:hover .user-panel .image {
float: none !important;
}
.sidebar-collapse .sidebar-no-expand.main-sidebar.sidebar-focused .logo-xs,
.sidebar-collapse .sidebar-no-expand.main-sidebar:hover .logo-xs {
-webkit-animation-name: fadeIn;
animation-name: fadeIn;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
visibility: visible;
}
.sidebar-collapse .sidebar-no-expand.main-sidebar.sidebar-focused .logo-xl,
.sidebar-collapse .sidebar-no-expand.main-sidebar:hover .logo-xl {
-webkit-animation-name: fadeOut;
animation-name: fadeOut;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
visibility: hidden;
}
.sidebar-collapse .sidebar-no-expand.main-sidebar.sidebar-focused .nav-sidebar.nav-child-indent .nav-treeview,
.sidebar-collapse .sidebar-no-expand.main-sidebar:hover .nav-sidebar.nav-child-indent .nav-treeview {
padding-left: 0;
}
.sidebar-collapse .sidebar-no-expand.main-sidebar.sidebar-focused .brand-text,
.sidebar-collapse .sidebar-no-expand.main-sidebar.sidebar-focused .nav-sidebar .nav-link p,
.sidebar-collapse .sidebar-no-expand.main-sidebar.sidebar-focused .user-panel > .info,
.sidebar-collapse .sidebar-no-expand.main-sidebar:hover .brand-text,
.sidebar-collapse .sidebar-no-expand.main-sidebar:hover .nav-sidebar .nav-link p,
.sidebar-collapse .sidebar-no-expand.main-sidebar:hover .user-panel > .info {
margin-left: -10px;
-webkit-animation-name: fadeOut;
animation-name: fadeOut;
-webkit-animation-duration: 0.3s;
animation-duration: 0.3s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
visibility: hidden;
width: 0;
}
.sidebar-collapse .sidebar-no-expand.main-sidebar.sidebar-focused .nav-sidebar > .nav-item .nav-icon,
.sidebar-collapse .sidebar-no-expand.main-sidebar:hover .nav-sidebar > .nav-item .nav-icon {
margin-right: 0;
}
.nav-sidebar {
position: relative;
}
.nav-sidebar:hover {
overflow: visible;
}
.nav-sidebar > .nav-header,
.sidebar-form {
overflow: hidden;
text-overflow: clip;
}
.nav-sidebar .nav-item > .nav-link {
position: relative;
}
.nav-sidebar .nav-item > .nav-link > .float-right {
margin-top: -7px;
position: absolute;
right: 10px;
top: 50%;
}
.main-sidebar .brand-text,
.main-sidebar .logo-xl,
.main-sidebar .logo-xs,
.sidebar .nav-link p,
.sidebar .user-panel .info {
transition: margin-left 0.3s linear, opacity 0.3s ease, visibility 0.3s ease;
}
@media (prefers-reduced-motion: reduce) {
.main-sidebar .brand-text,
.main-sidebar .logo-xl,
.main-sidebar .logo-xs,
.sidebar .nav-link p,
.sidebar .user-panel .info {
transition: none;
}
}
html.control-sidebar-animate {
overflow-x: hidden;
}
.control-sidebar {
bottom: calc(3.5rem + 1px);
position: absolute;
top: calc(3.5rem + 1px);
z-index: 1031;
}
.control-sidebar,
.control-sidebar::before {
bottom: calc(3.5rem + 1px);
display: none;
right: -250px;
width: 250px;
transition: right 0.3s ease-in-out, display 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
.control-sidebar,
.control-sidebar::before {
transition: none;
}
}
.control-sidebar::before {
content: "";
display: block;
position: fixed;
top: 0;
z-index: -1;
}
body.text-sm .control-sidebar {
bottom: calc(2.9365rem + 1px);
top: calc(2.93725rem + 1px);
}
.main-header.text-sm ~ .control-sidebar {
top: calc(2.93725rem + 1px);
}
.main-footer.text-sm ~ .control-sidebar {
bottom: calc(2.9365rem + 1px);
}
.control-sidebar-push-slide .content-wrapper,
.control-sidebar-push-slide .main-footer {
transition: margin-right 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
.control-sidebar-push-slide .content-wrapper,
.control-sidebar-push-slide .main-footer {
transition: none;
}
}
.control-sidebar-open .control-sidebar {
display: block;
}
.control-sidebar-open .control-sidebar,
.control-sidebar-open .control-sidebar::before {
right: 0;
}
.control-sidebar-open.control-sidebar-push .content-wrapper,
.control-sidebar-open.control-sidebar-push .main-footer,
.control-sidebar-open.control-sidebar-push-slide .content-wrapper,
.control-sidebar-open.control-sidebar-push-slide .main-footer {
margin-right: 250px;
}
.control-sidebar-slide-open .control-sidebar {
display: block;
}
.control-sidebar-slide-open .control-sidebar,
.control-sidebar-slide-open .control-sidebar::before {
right: 0;
transition: right 0.3s ease-in-out, display 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
.control-sidebar-slide-open .control-sidebar,
.control-sidebar-slide-open .control-sidebar::before {
transition: none;
}
}
.control-sidebar-slide-open.control-sidebar-push .content-wrapper,
.control-sidebar-slide-open.control-sidebar-push .main-footer,
.control-sidebar-slide-open.control-sidebar-push-slide .content-wrapper,
.control-sidebar-slide-open.control-sidebar-push-slide .main-footer {
margin-right: 250px;
}
.control-sidebar-dark {
background-color: <?php echo $maincolor;?>;
}
.control-sidebar-dark,
.control-sidebar-dark .nav-link,
.control-sidebar-dark a {
color: #c2c7d0;
}
.control-sidebar-dark a:hover {
color: #fff;
}
.control-sidebar-dark h1,
.control-sidebar-dark h2,
.control-sidebar-dark h3,
.control-sidebar-dark h4,
.control-sidebar-dark h5,
.control-sidebar-dark h6,
.control-sidebar-dark label {
color: #fff;
}
.control-sidebar-dark .nav-tabs {
background-color: rgba(255, 255, 255, 0.1);
border-bottom: 0;
margin-bottom: 5px;
}
.control-sidebar-dark .nav-tabs .nav-item {
margin: 0;
}
.control-sidebar-dark .nav-tabs .nav-link {
border-radius: 0;
padding: 10px 20px;
position: relative;
text-align: center;
}
.control-sidebar-dark .nav-tabs .nav-link,
.control-sidebar-dark .nav-tabs .nav-link.active,
.control-sidebar-dark .nav-tabs .nav-link:active,
.control-sidebar-dark .nav-tabs .nav-link:focus,
.control-sidebar-dark .nav-tabs .nav-link:hover {
border: 0;
}
.control-sidebar-dark .nav-tabs .nav-link.active,
.control-sidebar-dark .nav-tabs .nav-link:active,
.control-sidebar-dark .nav-tabs .nav-link:focus,
.control-sidebar-dark .nav-tabs .nav-link:hover {
border-bottom-color: transparent;
border-left-color: transparent;
border-top-color: transparent;
color: #fff;
}
.control-sidebar-dark .nav-tabs .nav-link.active {
background-color: <?php echo $maincolor;?>;
}
.control-sidebar-dark .tab-pane {
padding: 10px 15px;
}
.control-sidebar-light {
color: #4b545c;
background-color: #fff;
border-left: 1px solid #dee2e6;
}
.text-sm .dropdown-menu {
font-size: 0.875rem !important;
}
.text-sm .dropdown-toggle::after {
vertical-align: 0.2rem;
}
.dropdown-item-title {
font-size: 1rem;
margin: 0;
}
.dropdown-icon::after {
margin-left: 0;
}
.dropdown-menu-lg {
max-width: 300px;
min-width: 280px;
padding: 0;
}
.dropdown-menu-lg .dropdown-divider {
margin: 0;
}
.dropdown-menu-lg .dropdown-item {
padding: 0.5rem 1rem;
}
.dropdown-menu-lg p {
margin: 0;
white-space: normal;
}
.dropdown-submenu {
position: relative;
}
.dropdown-submenu > a::after {
border-top: 0.3em solid transparent;
border-right: 0;
border-bottom: 0.3em solid transparent;
border-left: 0.3em solid;
float: right;
margin-left: 0.5rem;
margin-top: 0.5rem;
}
.dropdown-submenu > .dropdown-menu {
left: 100%;
margin-left: 0;
margin-top: 0;
top: 0;
}
.dropdown-hover .dropdown-submenu:hover > .dropdown-menu,
.dropdown-hover.dropdown-submenu:hover > .dropdown-menu,
.dropdown-hover.nav-item.dropdown:hover > .dropdown-menu,
.dropdown-hover:hover > .dropdown-menu {
display: block;
}
.dropdown-menu-xl {
max-width: 420px;
min-width: 360px;
padding: 0;
}
.dropdown-menu-xl .dropdown-divider {
margin: 0;
}
.dropdown-menu-xl .dropdown-item {
padding: 0.5rem 1rem;
}
.dropdown-menu-xl p {
margin: 0;
white-space: normal;
}
.dropdown-footer,
.dropdown-header {
display: block;
font-size: 0.875rem;
padding: 0.5rem 1rem;
text-align: center;
}
.open:not(.dropup) > .animated-dropdown-menu {
-webkit-animation: flipInX 0.7s both;
animation: flipInX 0.7s both;
-webkit-backface-visibility: visible !important;
backface-visibility: visible !important;
}
@-webkit-keyframes flipInX {
0% {
transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
transition-timing-function: ease-in;
opacity: 0;
}
40% {
transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
transition-timing-function: ease-in;
}
60% {
transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
opacity: 1;
}
80% {
transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
}
100% {
transform: perspective(400px);
}
}
@keyframes flipInX {
0% {
transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
transition-timing-function: ease-in;
opacity: 0;
}
40% {
transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
transition-timing-function: ease-in;
}
60% {
transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
opacity: 1;
}
80% {
transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
}
100% {
transform: perspective(400px);
}
}
.navbar-custom-menu > .navbar-nav > li {
position: relative;
}
.navbar-custom-menu > .navbar-nav > li > .dropdown-menu {
position: absolute;
right: 0;
left: auto;
}
@media (max-width: 767.98px) {
.navbar-custom-menu > .navbar-nav {
float: right;
}
.navbar-custom-menu > .navbar-nav > li {
position: static;
}
.navbar-custom-menu > .navbar-nav > li > .dropdown-menu {
position: absolute;
right: 5%;
left: auto;
border: 1px solid #ddd;
background-color: #fff;
}
}
.navbar-nav > .user-menu > .nav-link::after {
content: none;
}
.navbar-nav > .user-menu > .dropdown-menu {
border-top-left-radius: 0;
border-top-right-radius: 0;
padding: 0;
width: 280px;
}
.navbar-nav > .user-menu > .dropdown-menu,
.navbar-nav > .user-menu > .dropdown-menu > .user-body {
border-bottom-right-radius: 4px;
border-bottom-left-radius: 4px;
}
.navbar-nav > .user-menu > .dropdown-menu > li.user-header {
height: 175px;
padding: 10px;
text-align: center;
}
.navbar-nav > .user-menu > .dropdown-menu > li.user-header > img {
z-index: 5;
height: 90px;
width: 90px;
border: 3px solid;
border-color: transparent;
border-color: rgba(255, 255, 255, 0.2);
}
.navbar-nav > .user-menu > .dropdown-menu > li.user-header > p {
z-index: 5;
font-size: 17px;
margin-top: 10px;
}
.navbar-nav > .user-menu > .dropdown-menu > li.user-header > p > small {
display: block;
font-size: 12px;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-body {
border-bottom: 1px solid #495057;
border-top: 1px solid #dee2e6;
padding: 15px;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-body::after {
display: block;
clear: both;
content: "";
}
@media (min-width: 576px) {
.navbar-nav > .user-menu > .dropdown-menu > .user-body a {
background-color: #fff !important;
color: #495057 !important;
}
}
.navbar-nav > .user-menu > .dropdown-menu > .user-footer {
background-color: #f8f9fa;
padding: 10px;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-footer::after {
display: block;
clear: both;
content: "";
}
.navbar-nav > .user-menu > .dropdown-menu > .user-footer .btn-default {
color: #6c757d;
}
@media (min-width: 576px) {
.navbar-nav > .user-menu > .dropdown-menu > .user-footer .btn-default:hover {
background-color: #f8f9fa;
}
}
.navbar-nav > .user-menu .user-image {
border-radius: 50%;
float: left;
height: 2.1rem;
margin-right: 10px;
margin-top: -2px;
width: 2.1rem;
}
@media (min-width: 576px) {
.navbar-nav > .user-menu .user-image {
float: none;
line-height: 10px;
margin-right: 0.4rem;
margin-top: -8px;
}
}
.dark-mode .dropdown-menu {
background-color: <?php echo $maincolor;?>;
color: #fff;
}
.dark-mode .dropdown-item {
color: #fff;
}
.dark-mode .dropdown-item:focus,
.dark-mode .dropdown-item:hover {
background-color: #3f474e;
}
.dark-mode .dropdown-divider {
border-color: #6c757d;
}
.dark-mode .navbar-nav > .user-menu > .dropdown-menu > .user-footer {
background-color: #3a4047;
color: #fff;
}
.dark-mode .navbar-nav > .user-menu > .dropdown-menu > .user-footer .btn-default {
color: #fff;
}
.dark-mode .navbar-nav > .user-menu > .dropdown-menu > .user-footer .btn-default:focus,
.dark-mode .navbar-nav > .user-menu > .dropdown-menu > .user-footer .btn-default:hover {
background-color: #3f474e;
color: #dee2e6;
}
.dark-mode .navbar-nav > .user-menu > .dropdown-menu > .user-footer .btn-default:focus {
background-color: <?php echo $secondarycolor;?>;
}
.dark-mode .navbar-nav > .user-menu > .dropdown-menu > .user-body {
border-color: #6c757d;
}
.dark-mode .navbar-nav > .user-menu > .dropdown-menu > .user-body a {
background-color: transparent !important;
color: #fff !important;
}
.dark-mode .navbar-nav > .user-menu > .dropdown-menu > .user-body a:focus,
.dark-mode .navbar-nav > .user-menu > .dropdown-menu > .user-body a:hover {
color: #ced4da !important;
}
.nav-pills .nav-link {
color: #6c757d;
}
.nav-pills .nav-link:not(.active):hover {
color: <?php echo $accent_color;?>;
}
.nav-pills .nav-item.dropdown.show .nav-link:hover {
color: #fff;
}
.nav-tabs.flex-column {
border-bottom: 0;
border-right: 1px solid #dee2e6;
}
.nav-tabs.flex-column .nav-link {
border-bottom-left-radius: 0.25rem;
border-top-right-radius: 0;
margin-right: -1px;
}
.nav-tabs.flex-column .nav-link:focus,
.nav-tabs.flex-column .nav-link:hover {
border-color: #e9ecef transparent #e9ecef #e9ecef;
}
.nav-tabs.flex-column .nav-item.show .nav-link,
.nav-tabs.flex-column .nav-link.active {
border-color: #dee2e6 transparent #dee2e6 #dee2e6;
}
.nav-tabs.flex-column.nav-tabs-right {
border-left: 1px solid #dee2e6;
border-right: 0;
}
.nav-tabs.flex-column.nav-tabs-right .nav-link {
border-bottom-left-radius: 0;
border-bottom-right-radius: 0.25rem;
border-top-left-radius: 0;
border-top-right-radius: 0.25rem;
margin-left: -1px;
}
.nav-tabs.flex-column.nav-tabs-right .nav-link:focus,
.nav-tabs.flex-column.nav-tabs-right .nav-link:hover {
border-color: #e9ecef #e9ecef #e9ecef transparent;
}
.nav-tabs.flex-column.nav-tabs-right .nav-item.show .nav-link,
.nav-tabs.flex-column.nav-tabs-right .nav-link.active {
border-color: #dee2e6 #dee2e6 #dee2e6 transparent;
}
.navbar-no-expand {
flex-direction: row;
}
.navbar-no-expand .nav-link {
padding-left: 1rem;
padding-right: 1rem;
}
.navbar-no-expand .dropdown-menu {
position: absolute;
}
.navbar-light {
background-color: #f8f9fa;
}
.navbar-dark {
background-color: <?php echo $maincolor;?>;
border-color: #4b545c;
}
.navbar-primary {
background-color: <?php echo $accent_color;?>;
}
.navbar-secondary {
background-color: #6c757d;
}
.navbar-success {
background-color: #28a745;
}
.navbar-info {
background-color: #17a2b8;
}
.navbar-warning {
background-color: #ffc107;
}
.navbar-danger {
background-color: #dc3545;
}
.navbar-lightblue {
background-color: #3c8dbc;
}
.navbar-navy {
background-color: #001f3f;
}
.navbar-olive {
background-color: #3d9970;
}
.navbar-lime {
background-color: #01ff70;
}
.navbar-fuchsia {
background-color: #f012be;
}
.navbar-maroon {
background-color: #d81b60;
}
.navbar-blue {
background-color: <?php echo $accent_color;?>;
}
.navbar-indigo {
background-color: #6610f2;
}
.navbar-purple {
background-color: #6f42c1;
}
.navbar-pink {
background-color: #e83e8c;
}
.navbar-red {
background-color: #dc3545;
}
.navbar-orange {
background-color: #fd7e14;
}
.navbar-yellow {
background-color: #ffc107;
}
.navbar-green {
background-color: #28a745;
}
.navbar-teal {
background-color: #20c997;
}
.navbar-cyan {
background-color: #17a2b8;
}
.navbar-white {
background-color: #fff;
}
.navbar-gray {
background-color: #6c757d;
}
.navbar-gray-dark {
background-color: <?php echo $maincolor;?>;
}
.dark-mode .nav-pills .nav-link {
color: #ced4da;
}
.dark-mode .nav-tabs {
border-color: #56606a;
}
.dark-mode .nav-tabs .nav-link:focus,
.dark-mode .nav-tabs .nav-link:hover {
border-color: #56606a;
}
.dark-mode .nav-tabs .nav-item.show .nav-link,
.dark-mode .nav-tabs .nav-link.active {
background-color: <?php echo $maincolor;?>;
border-color: #56606a #56606a transparent #56606a;
color: #fff;
}
.dark-mode .nav-tabs.flex-column .nav-item.show .nav-link.active,
.dark-mode .nav-tabs.flex-column .nav-item.show .nav-link:focus,
.dark-mode .nav-tabs.flex-column .nav-item.show .nav-link:hover,
.dark-mode .nav-tabs.flex-column .nav-link.active,
.dark-mode .nav-tabs.flex-column .nav-link:focus,
.dark-mode .nav-tabs.flex-column .nav-link:hover {
border-color: #56606a transparent #56606a #56606a;
}
.dark-mode .nav-tabs.flex-column .nav-item.show .nav-link:focus,
.dark-mode .nav-tabs.flex-column .nav-item.show .nav-link:hover,
.dark-mode .nav-tabs.flex-column .nav-link:focus,
.dark-mode .nav-tabs.flex-column .nav-link:hover {
background-color: #3f474e;
}
.dark-mode .nav-tabs.flex-column.nav-tabs-right {
border-color: #56606a;
}
.dark-mode .nav-tabs.flex-column.nav-tabs-right .nav-link.active,
.dark-mode .nav-tabs.flex-column.nav-tabs-right .nav-link:focus,
.dark-mode .nav-tabs.flex-column.nav-tabs-right .nav-link:hover {
border-color: #56606a #56606a #56606a transparent;
}
.pagination-month .page-item {
justify-self: stretch;
}
.pagination-month .page-item .page-link {
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
box-shadow: none;
}
.pagination-month .page-item:first-child .page-link,
.pagination-month .page-item:last-child .page-link {
height: 100%;
font-size: 1.25rem;
}
.pagination-month .page-item .page-month {
margin-bottom: 0;
font-size: 1.25rem;
font-weight: 700;
}
.pagination-month .page-item .page-year {
margin-bottom: 0;
}
.pagination-month.pagination-lg .page-month {
font-size: 1.5625rem;
}
.pagination-month.pagination-sm .page-month {
font-size: 1rem;
}
.dark-mode .page-item.disabled .page-link {
background-color: #3a4047;
border-color: #6c757d;
color: #6c757d;
}
.dark-mode .page-item.active .page-link:focus,
.dark-mode .page-item.active .page-link:hover {
color: #ced4da;
}
.dark-mode .page-item:not(.active) .page-link {
background-color: <?php echo $maincolor;?>;
border-color: #6c757d;
}
.dark-mode .page-item:not(.active) .page-link:focus,
.dark-mode .page-item:not(.active) .page-link:hover {
color: #1a88ff;
background-color: #3f474e;
}
.form-group.has-icon {
position: relative;
}
.form-group.has-icon .form-control {
padding-right: 35px;
}
.form-group.has-icon .form-icon {
background-color: transparent;
border: 0;
cursor: pointer;
font-size: 1rem;
padding: 0.375rem 0.75rem;
position: absolute;
right: 3px;
top: 0;
}
.btn-group-vertical .btn.btn-flat:first-of-type,
.btn-group-vertical .btn.btn-flat:last-of-type {
border-radius: 0;
}
.form-control-feedback.fa,
.form-control-feedback.fab,
.form-control-feedback.fad,
.form-control-feedback.fal,
.form-control-feedback.far,
.form-control-feedback.fas,
.form-control-feedback.ion,
.form-control-feedback.svg-inline--fa {
line-height: calc(2.25rem + 2px);
}
.input-group-lg + .form-control-feedback.fa,
.input-group-lg + .form-control-feedback.fab,
.input-group-lg + .form-control-feedback.fad,
.input-group-lg + .form-control-feedback.fal,
.input-group-lg + .form-control-feedback.far,
.input-group-lg + .form-control-feedback.fas,
.input-group-lg + .form-control-feedback.ion,
.input-group-lg + .form-control-feedback.svg-inline--fa,
.input-lg + .form-control-feedback.fa,
.input-lg + .form-control-feedback.fab,
.input-lg + .form-control-feedback.fad,
.input-lg + .form-control-feedback.fal,
.input-lg + .form-control-feedback.far,
.input-lg + .form-control-feedback.fas,
.input-lg + .form-control-feedback.ion,
.input-lg + .form-control-feedback.svg-inline--fa {
line-height: calc(2.875rem + 2px);
}
.form-group-lg .form-control + .form-control-feedback.fa,
.form-group-lg .form-control + .form-control-feedback.fab,
.form-group-lg .form-control + .form-control-feedback.fad,
.form-group-lg .form-control + .form-control-feedback.fal,
.form-group-lg .form-control + .form-control-feedback.far,
.form-group-lg .form-control + .form-control-feedback.fas,
.form-group-lg .form-control + .form-control-feedback.ion,
.form-group-lg .form-control + .form-control-feedback.svg-inline--fa {
line-height: calc(2.875rem + 2px);
}
.input-group-sm + .form-control-feedback.fa,
.input-group-sm + .form-control-feedback.fab,
.input-group-sm + .form-control-feedback.fad,
.input-group-sm + .form-control-feedback.fal,
.input-group-sm + .form-control-feedback.far,
.input-group-sm + .form-control-feedback.fas,
.input-group-sm + .form-control-feedback.ion,
.input-group-sm + .form-control-feedback.svg-inline--fa,
.input-sm + .form-control-feedback.fa,
.input-sm + .form-control-feedback.fab,
.input-sm + .form-control-feedback.fad,
.input-sm + .form-control-feedback.fal,
.input-sm + .form-control-feedback.far,
.input-sm + .form-control-feedback.fas,
.input-sm + .form-control-feedback.ion,
.input-sm + .form-control-feedback.svg-inline--fa {
line-height: calc(1.8125rem + 2px);
}
.form-group-sm .form-control + .form-control-feedback.fa,
.form-group-sm .form-control + .form-control-feedback.fab,
.form-group-sm .form-control + .form-control-feedback.fad,
.form-group-sm .form-control + .form-control-feedback.fal,
.form-group-sm .form-control + .form-control-feedback.far,
.form-group-sm .form-control + .form-control-feedback.fas,
.form-group-sm .form-control + .form-control-feedback.ion,
.form-group-sm .form-control + .form-control-feedback.svg-inline--fa {
line-height: calc(1.8125rem + 2px);
}
label:not(.form-check-label):not(.custom-file-label) {
font-weight: 700;
}
.warning-feedback {
font-size: 80%;
color: #ffc107;
display: none;
margin-top: 0.25rem;
width: 100%;
}
.warning-tooltip {
border-radius: 0.25rem;
font-size: 0.875rem;
background-color: rgba(255, 193, 7, 0.9);
color: #1f2d3d;
display: none;
line-height: 1.5;
margin-top: 0.1rem;
max-width: 100%;
padding: 0.25rem 0.5rem;
position: absolute;
top: 100%;
z-index: 5;
}
.form-control.is-warning {
border-color: #ffc107;
}
.form-control.is-warning:focus {
border-color: #ffc107;
box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.25);
}
.form-control.is-warning ~ .warning-feedback,
.form-control.is-warning ~ .warning-tooltip {
display: block;
}
textarea.form-control.is-warning {
padding-right: 2.25rem;
background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}
.custom-select.is-warning {
border-color: #ffc107;
}
.custom-select.is-warning:focus {
border-color: #ffc107;
box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.25);
}
.custom-select.is-warning ~ .warning-feedback,
.custom-select.is-warning ~ .warning-tooltip {
display: block;
}
.form-control-file.is-warning ~ .warning-feedback,
.form-control-file.is-warning ~ .warning-tooltip {
display: block;
}
.form-check-input.is-warning ~ .form-check-label {
color: #ffc107;
}
.form-check-input.is-warning ~ .warning-feedback,
.form-check-input.is-warning ~ .warning-tooltip {
display: block;
}
.custom-control-input.is-warning ~ .custom-control-label {
color: #ffc107;
}
.custom-control-input.is-warning ~ .custom-control-label::before {
border-color: #ffc107;
}
.custom-control-input.is-warning ~ .warning-feedback,
.custom-control-input.is-warning ~ .warning-tooltip {
display: block;
}
.custom-control-input.is-warning:checked ~ .custom-control-label::before {
background-color: #ffce3a;
border-color: #ffce3a;
}
.custom-control-input.is-warning:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.25);
}
.custom-control-input.is-warning:focus:not(:checked) ~ .custom-control-label::before {
border-color: #ffc107;
}
.custom-file-input.is-warning ~ .custom-file-label {
border-color: #ffc107;
}
.custom-file-input.is-warning ~ .warning-feedback,
.custom-file-input.is-warning ~ .warning-tooltip {
display: block;
}
.custom-file-input.is-warning:focus ~ .custom-file-label {
border-color: #ffc107;
box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.25);
}
body.text-sm .input-group-text {
font-size: 0.875rem;
}
.custom-select.form-control-border,
.form-control.form-control-border {
border-top: 0;
border-left: 0;
border-right: 0;
border-radius: 0;
box-shadow: inherit;
}
.custom-select.form-control-border.border-width-2,
.form-control.form-control-border.border-width-2 {
border-bottom-width: 2px;
}
.custom-select.form-control-border.border-width-3,
.form-control.form-control-border.border-width-3 {
border-bottom-width: 3px;
}
.custom-switch.custom-switch-off-primary .custom-control-input ~ .custom-control-label::before {
background-color: <?php echo $accent_color;?>;
border-color: #004a99;
}
.custom-switch.custom-switch-off-primary .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 123, 255, 0.25);
}
.custom-switch.custom-switch-off-primary .custom-control-input ~ .custom-control-label::after {
background-color: #003e80;
}
.custom-switch.custom-switch-on-primary .custom-control-input:checked ~ .custom-control-label::before {
background-color: <?php echo $accent_color;?>;
border-color: #004a99;
}
.custom-switch.custom-switch-on-primary .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 123, 255, 0.25);
}
.custom-switch.custom-switch-on-primary .custom-control-input:checked ~ .custom-control-label::after {
background-color: #99caff;
}
.custom-switch.custom-switch-off-secondary .custom-control-input ~ .custom-control-label::before {
background-color: #6c757d;
border-color: #3d4246;
}
.custom-switch.custom-switch-off-secondary .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(108, 117, 125, 0.25);
}
.custom-switch.custom-switch-off-secondary .custom-control-input ~ .custom-control-label::after {
background-color: #313539;
}
.custom-switch.custom-switch-on-secondary .custom-control-input:checked ~ .custom-control-label::before {
background-color: #6c757d;
border-color: #3d4246;
}
.custom-switch.custom-switch-on-secondary .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(108, 117, 125, 0.25);
}
.custom-switch.custom-switch-on-secondary .custom-control-input:checked ~ .custom-control-label::after {
background-color: #bcc1c6;
}
.custom-switch.custom-switch-off-success .custom-control-input ~ .custom-control-label::before {
background-color: #28a745;
border-color: #145523;
}
.custom-switch.custom-switch-off-success .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(40, 167, 69, 0.25);
}
.custom-switch.custom-switch-off-success .custom-control-input ~ .custom-control-label::after {
background-color: #0f401b;
}
.custom-switch.custom-switch-on-success .custom-control-input:checked ~ .custom-control-label::before {
background-color: #28a745;
border-color: #145523;
}
.custom-switch.custom-switch-on-success .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(40, 167, 69, 0.25);
}
.custom-switch.custom-switch-on-success .custom-control-input:checked ~ .custom-control-label::after {
background-color: #86e29b;
}
.custom-switch.custom-switch-off-info .custom-control-input ~ .custom-control-label::before {
background-color: #17a2b8;
border-color: #0c525d;
}
.custom-switch.custom-switch-off-info .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(23, 162, 184, 0.25);
}
.custom-switch.custom-switch-off-info .custom-control-input ~ .custom-control-label::after {
background-color: #093e47;
}
.custom-switch.custom-switch-on-info .custom-control-input:checked ~ .custom-control-label::before {
background-color: #17a2b8;
border-color: #0c525d;
}
.custom-switch.custom-switch-on-info .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(23, 162, 184, 0.25);
}
.custom-switch.custom-switch-on-info .custom-control-input:checked ~ .custom-control-label::after {
background-color: #7adeee;
}
.custom-switch.custom-switch-off-warning .custom-control-input ~ .custom-control-label::before {
background-color: #ffc107;
border-color: #a07800;
}
.custom-switch.custom-switch-off-warning .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 193, 7, 0.25);
}
.custom-switch.custom-switch-off-warning .custom-control-input ~ .custom-control-label::after {
background-color: #876500;
}
.custom-switch.custom-switch-on-warning .custom-control-input:checked ~ .custom-control-label::before {
background-color: #ffc107;
border-color: #a07800;
}
.custom-switch.custom-switch-on-warning .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 193, 7, 0.25);
}
.custom-switch.custom-switch-on-warning .custom-control-input:checked ~ .custom-control-label::after {
background-color: #ffe7a0;
}
.custom-switch.custom-switch-off-danger .custom-control-input ~ .custom-control-label::before {
background-color: #dc3545;
border-color: #921925;
}
.custom-switch.custom-switch-off-danger .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(220, 53, 69, 0.25);
}
.custom-switch.custom-switch-off-danger .custom-control-input ~ .custom-control-label::after {
background-color: #7c151f;
}
.custom-switch.custom-switch-on-danger .custom-control-input:checked ~ .custom-control-label::before {
background-color: #dc3545;
border-color: #921925;
}
.custom-switch.custom-switch-on-danger .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(220, 53, 69, 0.25);
}
.custom-switch.custom-switch-on-danger .custom-control-input:checked ~ .custom-control-label::after {
background-color: #f3b7bd;
}
.custom-switch.custom-switch-off-light .custom-control-input ~ .custom-control-label::before {
background-color: #f8f9fa;
border-color: #bdc6d0;
}
.custom-switch.custom-switch-off-light .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(248, 249, 250, 0.25);
}
.custom-switch.custom-switch-off-light .custom-control-input ~ .custom-control-label::after {
background-color: #aeb9c5;
}
.custom-switch.custom-switch-on-light .custom-control-input:checked ~ .custom-control-label::before {
background-color: #f8f9fa;
border-color: #bdc6d0;
}
.custom-switch.custom-switch-on-light .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(248, 249, 250, 0.25);
}
.custom-switch.custom-switch-on-light .custom-control-input:checked ~ .custom-control-label::after {
background-color: #fff;
}
.custom-switch.custom-switch-off-dark .custom-control-input ~ .custom-control-label::before {
background-color: <?php echo $maincolor;?>;
border-color: #060708;
}
.custom-switch.custom-switch-off-dark .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(52, 58, 64, 0.25);
}
.custom-switch.custom-switch-off-dark .custom-control-input ~ .custom-control-label::after {
background-color: #000;
}
.custom-switch.custom-switch-on-dark .custom-control-input:checked ~ .custom-control-label::before {
background-color: <?php echo $maincolor;?>;
border-color: #060708;
}
.custom-switch.custom-switch-on-dark .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(52, 58, 64, 0.25);
}
.custom-switch.custom-switch-on-dark .custom-control-input:checked ~ .custom-control-label::after {
background-color: #7a8793;
}
.custom-switch.custom-switch-off-lightblue .custom-control-input ~ .custom-control-label::before {
background-color: #3c8dbc;
border-color: #23536f;
}
.custom-switch.custom-switch-off-lightblue .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(60, 141, 188, 0.25);
}
.custom-switch.custom-switch-off-lightblue .custom-control-input ~ .custom-control-label::after {
background-color: #1d455b;
}
.custom-switch.custom-switch-on-lightblue .custom-control-input:checked ~ .custom-control-label::before {
background-color: #3c8dbc;
border-color: #23536f;
}
.custom-switch.custom-switch-on-lightblue .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(60, 141, 188, 0.25);
}
.custom-switch.custom-switch-on-lightblue .custom-control-input:checked ~ .custom-control-label::after {
background-color: #acd0e5;
}
.custom-switch.custom-switch-off-navy .custom-control-input ~ .custom-control-label::before {
background-color: #001f3f;
border-color: #000;
}
.custom-switch.custom-switch-off-navy .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 31, 63, 0.25);
}
.custom-switch.custom-switch-off-navy .custom-control-input ~ .custom-control-label::after {
background-color: #000;
}
.custom-switch.custom-switch-on-navy .custom-control-input:checked ~ .custom-control-label::before {
background-color: #001f3f;
border-color: #000;
}
.custom-switch.custom-switch-on-navy .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 31, 63, 0.25);
}
.custom-switch.custom-switch-on-navy .custom-control-input:checked ~ .custom-control-label::after {
background-color: #006ad8;
}
.custom-switch.custom-switch-off-olive .custom-control-input ~ .custom-control-label::before {
background-color: #3d9970;
border-color: #20503b;
}
.custom-switch.custom-switch-off-olive .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(61, 153, 112, 0.25);
}
.custom-switch.custom-switch-off-olive .custom-control-input ~ .custom-control-label::after {
background-color: #193e2d;
}
.custom-switch.custom-switch-on-olive .custom-control-input:checked ~ .custom-control-label::before {
background-color: #3d9970;
border-color: #20503b;
}
.custom-switch.custom-switch-on-olive .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(61, 153, 112, 0.25);
}
.custom-switch.custom-switch-on-olive .custom-control-input:checked ~ .custom-control-label::after {
background-color: #99d6bb;
}
.custom-switch.custom-switch-off-lime .custom-control-input ~ .custom-control-label::before {
background-color: #01ff70;
border-color: #009a43;
}
.custom-switch.custom-switch-off-lime .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(1, 255, 112, 0.25);
}
.custom-switch.custom-switch-off-lime .custom-control-input ~ .custom-control-label::after {
background-color: #008138;
}
.custom-switch.custom-switch-on-lime .custom-control-input:checked ~ .custom-control-label::before {
background-color: #01ff70;
border-color: #009a43;
}
.custom-switch.custom-switch-on-lime .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(1, 255, 112, 0.25);
}
.custom-switch.custom-switch-on-lime .custom-control-input:checked ~ .custom-control-label::after {
background-color: #9affc6;
}
.custom-switch.custom-switch-off-fuchsia .custom-control-input ~ .custom-control-label::before {
background-color: #f012be;
border-color: #930974;
}
.custom-switch.custom-switch-off-fuchsia .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(240, 18, 190, 0.25);
}
.custom-switch.custom-switch-off-fuchsia .custom-control-input ~ .custom-control-label::after {
background-color: #7b0861;
}
.custom-switch.custom-switch-on-fuchsia .custom-control-input:checked ~ .custom-control-label::before {
background-color: #f012be;
border-color: #930974;
}
.custom-switch.custom-switch-on-fuchsia .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(240, 18, 190, 0.25);
}
.custom-switch.custom-switch-on-fuchsia .custom-control-input:checked ~ .custom-control-label::after {
background-color: #f9a2e5;
}
.custom-switch.custom-switch-off-maroon .custom-control-input ~ .custom-control-label::before {
background-color: #d81b60;
border-color: #7d1038;
}
.custom-switch.custom-switch-off-maroon .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(216, 27, 96, 0.25);
}
.custom-switch.custom-switch-off-maroon .custom-control-input ~ .custom-control-label::after {
background-color: #670d2e;
}
.custom-switch.custom-switch-on-maroon .custom-control-input:checked ~ .custom-control-label::before {
background-color: #d81b60;
border-color: #7d1038;
}
.custom-switch.custom-switch-on-maroon .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(216, 27, 96, 0.25);
}
.custom-switch.custom-switch-on-maroon .custom-control-input:checked ~ .custom-control-label::after {
background-color: #f29aba;
}
.custom-switch.custom-switch-off-blue .custom-control-input ~ .custom-control-label::before {
background-color: <?php echo $accent_color;?>;
border-color: #004a99;
}
.custom-switch.custom-switch-off-blue .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 123, 255, 0.25);
}
.custom-switch.custom-switch-off-blue .custom-control-input ~ .custom-control-label::after {
background-color: #003e80;
}
.custom-switch.custom-switch-on-blue .custom-control-input:checked ~ .custom-control-label::before {
background-color: <?php echo $accent_color;?>;
border-color: #004a99;
}
.custom-switch.custom-switch-on-blue .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 123, 255, 0.25);
}
.custom-switch.custom-switch-on-blue .custom-control-input:checked ~ .custom-control-label::after {
background-color: #99caff;
}
.custom-switch.custom-switch-off-indigo .custom-control-input ~ .custom-control-label::before {
background-color: #6610f2;
border-color: #3d0894;
}
.custom-switch.custom-switch-off-indigo .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(102, 16, 242, 0.25);
}
.custom-switch.custom-switch-off-indigo .custom-control-input ~ .custom-control-label::after {
background-color: #33077c;
}
.custom-switch.custom-switch-on-indigo .custom-control-input:checked ~ .custom-control-label::before {
background-color: #6610f2;
border-color: #3d0894;
}
.custom-switch.custom-switch-on-indigo .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(102, 16, 242, 0.25);
}
.custom-switch.custom-switch-on-indigo .custom-control-input:checked ~ .custom-control-label::after {
background-color: #c3a1fa;
}
.custom-switch.custom-switch-off-purple .custom-control-input ~ .custom-control-label::before {
background-color: #6f42c1;
border-color: #432776;
}
.custom-switch.custom-switch-off-purple .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(111, 66, 193, 0.25);
}
.custom-switch.custom-switch-off-purple .custom-control-input ~ .custom-control-label::after {
background-color: #382063;
}
.custom-switch.custom-switch-on-purple .custom-control-input:checked ~ .custom-control-label::before {
background-color: #6f42c1;
border-color: #432776;
}
.custom-switch.custom-switch-on-purple .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(111, 66, 193, 0.25);
}
.custom-switch.custom-switch-on-purple .custom-control-input:checked ~ .custom-control-label::after {
background-color: #c7b5e7;
}
.custom-switch.custom-switch-off-pink .custom-control-input ~ .custom-control-label::before {
background-color: #e83e8c;
border-color: #ac145a;
}
.custom-switch.custom-switch-off-pink .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(232, 62, 140, 0.25);
}
.custom-switch.custom-switch-off-pink .custom-control-input ~ .custom-control-label::after {
background-color: #95124e;
}
.custom-switch.custom-switch-on-pink .custom-control-input:checked ~ .custom-control-label::before {
background-color: #e83e8c;
border-color: #ac145a;
}
.custom-switch.custom-switch-on-pink .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(232, 62, 140, 0.25);
}
.custom-switch.custom-switch-on-pink .custom-control-input:checked ~ .custom-control-label::after {
background-color: #f8c7dd;
}
.custom-switch.custom-switch-off-red .custom-control-input ~ .custom-control-label::before {
background-color: #dc3545;
border-color: #921925;
}
.custom-switch.custom-switch-off-red .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(220, 53, 69, 0.25);
}
.custom-switch.custom-switch-off-red .custom-control-input ~ .custom-control-label::after {
background-color: #7c151f;
}
.custom-switch.custom-switch-on-red .custom-control-input:checked ~ .custom-control-label::before {
background-color: #dc3545;
border-color: #921925;
}
.custom-switch.custom-switch-on-red .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(220, 53, 69, 0.25);
}
.custom-switch.custom-switch-on-red .custom-control-input:checked ~ .custom-control-label::after {
background-color: #f3b7bd;
}
.custom-switch.custom-switch-off-orange .custom-control-input ~ .custom-control-label::before {
background-color: #fd7e14;
border-color: #aa4e01;
}
.custom-switch.custom-switch-off-orange .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(253, 126, 20, 0.25);
}
.custom-switch.custom-switch-off-orange .custom-control-input ~ .custom-control-label::after {
background-color: #904201;
}
.custom-switch.custom-switch-on-orange .custom-control-input:checked ~ .custom-control-label::before {
background-color: #fd7e14;
border-color: #aa4e01;
}
.custom-switch.custom-switch-on-orange .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(253, 126, 20, 0.25);
}
.custom-switch.custom-switch-on-orange .custom-control-input:checked ~ .custom-control-label::after {
background-color: #fed1ac;
}
.custom-switch.custom-switch-off-yellow .custom-control-input ~ .custom-control-label::before {
background-color: #ffc107;
border-color: #a07800;
}
.custom-switch.custom-switch-off-yellow .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 193, 7, 0.25);
}
.custom-switch.custom-switch-off-yellow .custom-control-input ~ .custom-control-label::after {
background-color: #876500;
}
.custom-switch.custom-switch-on-yellow .custom-control-input:checked ~ .custom-control-label::before {
background-color: #ffc107;
border-color: #a07800;
}
.custom-switch.custom-switch-on-yellow .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 193, 7, 0.25);
}
.custom-switch.custom-switch-on-yellow .custom-control-input:checked ~ .custom-control-label::after {
background-color: #ffe7a0;
}
.custom-switch.custom-switch-off-green .custom-control-input ~ .custom-control-label::before {
background-color: #28a745;
border-color: #145523;
}
.custom-switch.custom-switch-off-green .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(40, 167, 69, 0.25);
}
.custom-switch.custom-switch-off-green .custom-control-input ~ .custom-control-label::after {
background-color: #0f401b;
}
.custom-switch.custom-switch-on-green .custom-control-input:checked ~ .custom-control-label::before {
background-color: #28a745;
border-color: #145523;
}
.custom-switch.custom-switch-on-green .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(40, 167, 69, 0.25);
}
.custom-switch.custom-switch-on-green .custom-control-input:checked ~ .custom-control-label::after {
background-color: #86e29b;
}
.custom-switch.custom-switch-off-teal .custom-control-input ~ .custom-control-label::before {
background-color: #20c997;
border-color: #127155;
}
.custom-switch.custom-switch-off-teal .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(32, 201, 151, 0.25);
}
.custom-switch.custom-switch-off-teal .custom-control-input ~ .custom-control-label::after {
background-color: #0e5b44;
}
.custom-switch.custom-switch-on-teal .custom-control-input:checked ~ .custom-control-label::before {
background-color: #20c997;
border-color: #127155;
}
.custom-switch.custom-switch-on-teal .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(32, 201, 151, 0.25);
}
.custom-switch.custom-switch-on-teal .custom-control-input:checked ~ .custom-control-label::after {
background-color: #94eed3;
}
.custom-switch.custom-switch-off-cyan .custom-control-input ~ .custom-control-label::before {
background-color: #17a2b8;
border-color: #0c525d;
}
.custom-switch.custom-switch-off-cyan .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(23, 162, 184, 0.25);
}
.custom-switch.custom-switch-off-cyan .custom-control-input ~ .custom-control-label::after {
background-color: #093e47;
}
.custom-switch.custom-switch-on-cyan .custom-control-input:checked ~ .custom-control-label::before {
background-color: #17a2b8;
border-color: #0c525d;
}
.custom-switch.custom-switch-on-cyan .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(23, 162, 184, 0.25);
}
.custom-switch.custom-switch-on-cyan .custom-control-input:checked ~ .custom-control-label::after {
background-color: #7adeee;
}
.custom-switch.custom-switch-off-white .custom-control-input ~ .custom-control-label::before {
background-color: #fff;
border-color: #ccc;
}
.custom-switch.custom-switch-off-white .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 255, 255, 0.25);
}
.custom-switch.custom-switch-off-white .custom-control-input ~ .custom-control-label::after {
background-color: #bfbfbf;
}
.custom-switch.custom-switch-on-white .custom-control-input:checked ~ .custom-control-label::before {
background-color: #fff;
border-color: #ccc;
}
.custom-switch.custom-switch-on-white .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 255, 255, 0.25);
}
.custom-switch.custom-switch-on-white .custom-control-input:checked ~ .custom-control-label::after {
background-color: #fff;
}
.custom-switch.custom-switch-off-gray .custom-control-input ~ .custom-control-label::before {
background-color: #6c757d;
border-color: #3d4246;
}
.custom-switch.custom-switch-off-gray .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(108, 117, 125, 0.25);
}
.custom-switch.custom-switch-off-gray .custom-control-input ~ .custom-control-label::after {
background-color: #313539;
}
.custom-switch.custom-switch-on-gray .custom-control-input:checked ~ .custom-control-label::before {
background-color: #6c757d;
border-color: #3d4246;
}
.custom-switch.custom-switch-on-gray .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(108, 117, 125, 0.25);
}
.custom-switch.custom-switch-on-gray .custom-control-input:checked ~ .custom-control-label::after {
background-color: #bcc1c6;
}
.custom-switch.custom-switch-off-gray-dark .custom-control-input ~ .custom-control-label::before {
background-color: <?php echo $maincolor;?>;
border-color: #060708;
}
.custom-switch.custom-switch-off-gray-dark .custom-control-input:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(52, 58, 64, 0.25);
}
.custom-switch.custom-switch-off-gray-dark .custom-control-input ~ .custom-control-label::after {
background-color: #000;
}
.custom-switch.custom-switch-on-gray-dark .custom-control-input:checked ~ .custom-control-label::before {
background-color: <?php echo $maincolor;?>;
border-color: #060708;
}
.custom-switch.custom-switch-on-gray-dark .custom-control-input:checked:focus ~ .custom-control-label::before {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(52, 58, 64, 0.25);
}
.custom-switch.custom-switch-on-gray-dark .custom-control-input:checked ~ .custom-control-label::after {
background-color: #7a8793;
}
.custom-range.custom-range-primary:focus {
outline: 0;
}
.custom-range.custom-range-primary:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 123, 255, 0.25);
}
.custom-range.custom-range-primary:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 123, 255, 0.25);
}
.custom-range.custom-range-primary:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 123, 255, 0.25);
}
.custom-range.custom-range-primary::-webkit-slider-thumb {
background-color: <?php echo $accent_color;?>;
}
.custom-range.custom-range-primary::-webkit-slider-thumb:active {
background-color: #b3d7ff;
}
.custom-range.custom-range-primary::-moz-range-thumb {
background-color: <?php echo $accent_color;?>;
}
.custom-range.custom-range-primary::-moz-range-thumb:active {
background-color: #b3d7ff;
}
.custom-range.custom-range-primary::-ms-thumb {
background-color: <?php echo $accent_color;?>;
}
.custom-range.custom-range-primary::-ms-thumb:active {
background-color: #b3d7ff;
}
.custom-range.custom-range-secondary:focus {
outline: 0;
}
.custom-range.custom-range-secondary:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(108, 117, 125, 0.25);
}
.custom-range.custom-range-secondary:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(108, 117, 125, 0.25);
}
.custom-range.custom-range-secondary:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(108, 117, 125, 0.25);
}
.custom-range.custom-range-secondary::-webkit-slider-thumb {
background-color: #6c757d;
}
.custom-range.custom-range-secondary::-webkit-slider-thumb:active {
background-color: #caced1;
}
.custom-range.custom-range-secondary::-moz-range-thumb {
background-color: #6c757d;
}
.custom-range.custom-range-secondary::-moz-range-thumb:active {
background-color: #caced1;
}
.custom-range.custom-range-secondary::-ms-thumb {
background-color: #6c757d;
}
.custom-range.custom-range-secondary::-ms-thumb:active {
background-color: #caced1;
}
.custom-range.custom-range-success:focus {
outline: 0;
}
.custom-range.custom-range-success:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(40, 167, 69, 0.25);
}
.custom-range.custom-range-success:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(40, 167, 69, 0.25);
}
.custom-range.custom-range-success:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(40, 167, 69, 0.25);
}
.custom-range.custom-range-success::-webkit-slider-thumb {
background-color: #28a745;
}
.custom-range.custom-range-success::-webkit-slider-thumb:active {
background-color: #9be7ac;
}
.custom-range.custom-range-success::-moz-range-thumb {
background-color: #28a745;
}
.custom-range.custom-range-success::-moz-range-thumb:active {
background-color: #9be7ac;
}
.custom-range.custom-range-success::-ms-thumb {
background-color: #28a745;
}
.custom-range.custom-range-success::-ms-thumb:active {
background-color: #9be7ac;
}
.custom-range.custom-range-info:focus {
outline: 0;
}
.custom-range.custom-range-info:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(23, 162, 184, 0.25);
}
.custom-range.custom-range-info:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(23, 162, 184, 0.25);
}
.custom-range.custom-range-info:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(23, 162, 184, 0.25);
}
.custom-range.custom-range-info::-webkit-slider-thumb {
background-color: #17a2b8;
}
.custom-range.custom-range-info::-webkit-slider-thumb:active {
background-color: #90e4f1;
}
.custom-range.custom-range-info::-moz-range-thumb {
background-color: #17a2b8;
}
.custom-range.custom-range-info::-moz-range-thumb:active {
background-color: #90e4f1;
}
.custom-range.custom-range-info::-ms-thumb {
background-color: #17a2b8;
}
.custom-range.custom-range-info::-ms-thumb:active {
background-color: #90e4f1;
}
.custom-range.custom-range-warning:focus {
outline: 0;
}
.custom-range.custom-range-warning:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 193, 7, 0.25);
}
.custom-range.custom-range-warning:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 193, 7, 0.25);
}
.custom-range.custom-range-warning:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 193, 7, 0.25);
}
.custom-range.custom-range-warning::-webkit-slider-thumb {
background-color: #ffc107;
}
.custom-range.custom-range-warning::-webkit-slider-thumb:active {
background-color: #ffeeba;
}
.custom-range.custom-range-warning::-moz-range-thumb {
background-color: #ffc107;
}
.custom-range.custom-range-warning::-moz-range-thumb:active {
background-color: #ffeeba;
}
.custom-range.custom-range-warning::-ms-thumb {
background-color: #ffc107;
}
.custom-range.custom-range-warning::-ms-thumb:active {
background-color: #ffeeba;
}
.custom-range.custom-range-danger:focus {
outline: 0;
}
.custom-range.custom-range-danger:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(220, 53, 69, 0.25);
}
.custom-range.custom-range-danger:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(220, 53, 69, 0.25);
}
.custom-range.custom-range-danger:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(220, 53, 69, 0.25);
}
.custom-range.custom-range-danger::-webkit-slider-thumb {
background-color: #dc3545;
}
.custom-range.custom-range-danger::-webkit-slider-thumb:active {
background-color: #f6cdd1;
}
.custom-range.custom-range-danger::-moz-range-thumb {
background-color: #dc3545;
}
.custom-range.custom-range-danger::-moz-range-thumb:active {
background-color: #f6cdd1;
}
.custom-range.custom-range-danger::-ms-thumb {
background-color: #dc3545;
}
.custom-range.custom-range-danger::-ms-thumb:active {
background-color: #f6cdd1;
}
.custom-range.custom-range-light:focus {
outline: 0;
}
.custom-range.custom-range-light:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(248, 249, 250, 0.25);
}
.custom-range.custom-range-light:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(248, 249, 250, 0.25);
}
.custom-range.custom-range-light:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(248, 249, 250, 0.25);
}
.custom-range.custom-range-light::-webkit-slider-thumb {
background-color: #f8f9fa;
}
.custom-range.custom-range-light::-webkit-slider-thumb:active {
background-color: #fff;
}
.custom-range.custom-range-light::-moz-range-thumb {
background-color: #f8f9fa;
}
.custom-range.custom-range-light::-moz-range-thumb:active {
background-color: #fff;
}
.custom-range.custom-range-light::-ms-thumb {
background-color: #f8f9fa;
}
.custom-range.custom-range-light::-ms-thumb:active {
background-color: #fff;
}
.custom-range.custom-range-dark:focus {
outline: 0;
}
.custom-range.custom-range-dark:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(52, 58, 64, 0.25);
}
.custom-range.custom-range-dark:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(52, 58, 64, 0.25);
}
.custom-range.custom-range-dark:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(52, 58, 64, 0.25);
}
.custom-range.custom-range-dark::-webkit-slider-thumb {
background-color: <?php echo $maincolor;?>;
}
.custom-range.custom-range-dark::-webkit-slider-thumb:active {
background-color: #88939e;
}
.custom-range.custom-range-dark::-moz-range-thumb {
background-color: <?php echo $maincolor;?>;
}
.custom-range.custom-range-dark::-moz-range-thumb:active {
background-color: #88939e;
}
.custom-range.custom-range-dark::-ms-thumb {
background-color: <?php echo $maincolor;?>;
}
.custom-range.custom-range-dark::-ms-thumb:active {
background-color: #88939e;
}
.custom-range.custom-range-lightblue:focus {
outline: 0;
}
.custom-range.custom-range-lightblue:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(60, 141, 188, 0.25);
}
.custom-range.custom-range-lightblue:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(60, 141, 188, 0.25);
}
.custom-range.custom-range-lightblue:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(60, 141, 188, 0.25);
}
.custom-range.custom-range-lightblue::-webkit-slider-thumb {
background-color: #3c8dbc;
}
.custom-range.custom-range-lightblue::-webkit-slider-thumb:active {
background-color: #c0dbeb;
}
.custom-range.custom-range-lightblue::-moz-range-thumb {
background-color: #3c8dbc;
}
.custom-range.custom-range-lightblue::-moz-range-thumb:active {
background-color: #c0dbeb;
}
.custom-range.custom-range-lightblue::-ms-thumb {
background-color: #3c8dbc;
}
.custom-range.custom-range-lightblue::-ms-thumb:active {
background-color: #c0dbeb;
}
.custom-range.custom-range-navy:focus {
outline: 0;
}
.custom-range.custom-range-navy:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 31, 63, 0.25);
}
.custom-range.custom-range-navy:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 31, 63, 0.25);
}
.custom-range.custom-range-navy:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 31, 63, 0.25);
}
.custom-range.custom-range-navy::-webkit-slider-thumb {
background-color: #001f3f;
}
.custom-range.custom-range-navy::-webkit-slider-thumb:active {
background-color: #0077f2;
}
.custom-range.custom-range-navy::-moz-range-thumb {
background-color: #001f3f;
}
.custom-range.custom-range-navy::-moz-range-thumb:active {
background-color: #0077f2;
}
.custom-range.custom-range-navy::-ms-thumb {
background-color: #001f3f;
}
.custom-range.custom-range-navy::-ms-thumb:active {
background-color: #0077f2;
}
.custom-range.custom-range-olive:focus {
outline: 0;
}
.custom-range.custom-range-olive:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(61, 153, 112, 0.25);
}
.custom-range.custom-range-olive:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(61, 153, 112, 0.25);
}
.custom-range.custom-range-olive:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(61, 153, 112, 0.25);
}
.custom-range.custom-range-olive::-webkit-slider-thumb {
background-color: #3d9970;
}
.custom-range.custom-range-olive::-webkit-slider-thumb:active {
background-color: #abdec7;
}
.custom-range.custom-range-olive::-moz-range-thumb {
background-color: #3d9970;
}
.custom-range.custom-range-olive::-moz-range-thumb:active {
background-color: #abdec7;
}
.custom-range.custom-range-olive::-ms-thumb {
background-color: #3d9970;
}
.custom-range.custom-range-olive::-ms-thumb:active {
background-color: #abdec7;
}
.custom-range.custom-range-lime:focus {
outline: 0;
}
.custom-range.custom-range-lime:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(1, 255, 112, 0.25);
}
.custom-range.custom-range-lime:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(1, 255, 112, 0.25);
}
.custom-range.custom-range-lime:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(1, 255, 112, 0.25);
}
.custom-range.custom-range-lime::-webkit-slider-thumb {
background-color: #01ff70;
}
.custom-range.custom-range-lime::-webkit-slider-thumb:active {
background-color: #b4ffd4;
}
.custom-range.custom-range-lime::-moz-range-thumb {
background-color: #01ff70;
}
.custom-range.custom-range-lime::-moz-range-thumb:active {
background-color: #b4ffd4;
}
.custom-range.custom-range-lime::-ms-thumb {
background-color: #01ff70;
}
.custom-range.custom-range-lime::-ms-thumb:active {
background-color: #b4ffd4;
}
.custom-range.custom-range-fuchsia:focus {
outline: 0;
}
.custom-range.custom-range-fuchsia:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(240, 18, 190, 0.25);
}
.custom-range.custom-range-fuchsia:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(240, 18, 190, 0.25);
}
.custom-range.custom-range-fuchsia:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(240, 18, 190, 0.25);
}
.custom-range.custom-range-fuchsia::-webkit-slider-thumb {
background-color: #f012be;
}
.custom-range.custom-range-fuchsia::-webkit-slider-thumb:active {
background-color: #fbbaec;
}
.custom-range.custom-range-fuchsia::-moz-range-thumb {
background-color: #f012be;
}
.custom-range.custom-range-fuchsia::-moz-range-thumb:active {
background-color: #fbbaec;
}
.custom-range.custom-range-fuchsia::-ms-thumb {
background-color: #f012be;
}
.custom-range.custom-range-fuchsia::-ms-thumb:active {
background-color: #fbbaec;
}
.custom-range.custom-range-maroon:focus {
outline: 0;
}
.custom-range.custom-range-maroon:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(216, 27, 96, 0.25);
}
.custom-range.custom-range-maroon:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(216, 27, 96, 0.25);
}
.custom-range.custom-range-maroon:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(216, 27, 96, 0.25);
}
.custom-range.custom-range-maroon::-webkit-slider-thumb {
background-color: #d81b60;
}
.custom-range.custom-range-maroon::-webkit-slider-thumb:active {
background-color: #f5b0c9;
}
.custom-range.custom-range-maroon::-moz-range-thumb {
background-color: #d81b60;
}
.custom-range.custom-range-maroon::-moz-range-thumb:active {
background-color: #f5b0c9;
}
.custom-range.custom-range-maroon::-ms-thumb {
background-color: #d81b60;
}
.custom-range.custom-range-maroon::-ms-thumb:active {
background-color: #f5b0c9;
}
.custom-range.custom-range-blue:focus {
outline: 0;
}
.custom-range.custom-range-blue:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 123, 255, 0.25);
}
.custom-range.custom-range-blue:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 123, 255, 0.25);
}
.custom-range.custom-range-blue:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(0, 123, 255, 0.25);
}
.custom-range.custom-range-blue::-webkit-slider-thumb {
background-color: <?php echo $accent_color;?>;
}
.custom-range.custom-range-blue::-webkit-slider-thumb:active {
background-color: #b3d7ff;
}
.custom-range.custom-range-blue::-moz-range-thumb {
background-color: <?php echo $accent_color;?>;
}
.custom-range.custom-range-blue::-moz-range-thumb:active {
background-color: #b3d7ff;
}
.custom-range.custom-range-blue::-ms-thumb {
background-color: <?php echo $accent_color;?>;
}
.custom-range.custom-range-blue::-ms-thumb:active {
background-color: #b3d7ff;
}
.custom-range.custom-range-indigo:focus {
outline: 0;
}
.custom-range.custom-range-indigo:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(102, 16, 242, 0.25);
}
.custom-range.custom-range-indigo:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(102, 16, 242, 0.25);
}
.custom-range.custom-range-indigo:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(102, 16, 242, 0.25);
}
.custom-range.custom-range-indigo::-webkit-slider-thumb {
background-color: #6610f2;
}
.custom-range.custom-range-indigo::-webkit-slider-thumb:active {
background-color: #d2b9fb;
}
.custom-range.custom-range-indigo::-moz-range-thumb {
background-color: #6610f2;
}
.custom-range.custom-range-indigo::-moz-range-thumb:active {
background-color: #d2b9fb;
}
.custom-range.custom-range-indigo::-ms-thumb {
background-color: #6610f2;
}
.custom-range.custom-range-indigo::-ms-thumb:active {
background-color: #d2b9fb;
}
.custom-range.custom-range-purple:focus {
outline: 0;
}
.custom-range.custom-range-purple:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(111, 66, 193, 0.25);
}
.custom-range.custom-range-purple:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(111, 66, 193, 0.25);
}
.custom-range.custom-range-purple:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(111, 66, 193, 0.25);
}
.custom-range.custom-range-purple::-webkit-slider-thumb {
background-color: #6f42c1;
}
.custom-range.custom-range-purple::-webkit-slider-thumb:active {
background-color: #d5c8ed;
}
.custom-range.custom-range-purple::-moz-range-thumb {
background-color: #6f42c1;
}
.custom-range.custom-range-purple::-moz-range-thumb:active {
background-color: #d5c8ed;
}
.custom-range.custom-range-purple::-ms-thumb {
background-color: #6f42c1;
}
.custom-range.custom-range-purple::-ms-thumb:active {
background-color: #d5c8ed;
}
.custom-range.custom-range-pink:focus {
outline: 0;
}
.custom-range.custom-range-pink:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(232, 62, 140, 0.25);
}
.custom-range.custom-range-pink:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(232, 62, 140, 0.25);
}
.custom-range.custom-range-pink:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(232, 62, 140, 0.25);
}
.custom-range.custom-range-pink::-webkit-slider-thumb {
background-color: #e83e8c;
}
.custom-range.custom-range-pink::-webkit-slider-thumb:active {
background-color: #fbddeb;
}
.custom-range.custom-range-pink::-moz-range-thumb {
background-color: #e83e8c;
}
.custom-range.custom-range-pink::-moz-range-thumb:active {
background-color: #fbddeb;
}
.custom-range.custom-range-pink::-ms-thumb {
background-color: #e83e8c;
}
.custom-range.custom-range-pink::-ms-thumb:active {
background-color: #fbddeb;
}
.custom-range.custom-range-red:focus {
outline: 0;
}
.custom-range.custom-range-red:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(220, 53, 69, 0.25);
}
.custom-range.custom-range-red:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(220, 53, 69, 0.25);
}
.custom-range.custom-range-red:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(220, 53, 69, 0.25);
}
.custom-range.custom-range-red::-webkit-slider-thumb {
background-color: #dc3545;
}
.custom-range.custom-range-red::-webkit-slider-thumb:active {
background-color: #f6cdd1;
}
.custom-range.custom-range-red::-moz-range-thumb {
background-color: #dc3545;
}
.custom-range.custom-range-red::-moz-range-thumb:active {
background-color: #f6cdd1;
}
.custom-range.custom-range-red::-ms-thumb {
background-color: #dc3545;
}
.custom-range.custom-range-red::-ms-thumb:active {
background-color: #f6cdd1;
}
.custom-range.custom-range-orange:focus {
outline: 0;
}
.custom-range.custom-range-orange:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(253, 126, 20, 0.25);
}
.custom-range.custom-range-orange:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(253, 126, 20, 0.25);
}
.custom-range.custom-range-orange:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(253, 126, 20, 0.25);
}
.custom-range.custom-range-orange::-webkit-slider-thumb {
background-color: #fd7e14;
}
.custom-range.custom-range-orange::-webkit-slider-thumb:active {
background-color: #ffdfc5;
}
.custom-range.custom-range-orange::-moz-range-thumb {
background-color: #fd7e14;
}
.custom-range.custom-range-orange::-moz-range-thumb:active {
background-color: #ffdfc5;
}
.custom-range.custom-range-orange::-ms-thumb {
background-color: #fd7e14;
}
.custom-range.custom-range-orange::-ms-thumb:active {
background-color: #ffdfc5;
}
.custom-range.custom-range-yellow:focus {
outline: 0;
}
.custom-range.custom-range-yellow:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 193, 7, 0.25);
}
.custom-range.custom-range-yellow:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 193, 7, 0.25);
}
.custom-range.custom-range-yellow:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 193, 7, 0.25);
}
.custom-range.custom-range-yellow::-webkit-slider-thumb {
background-color: #ffc107;
}
.custom-range.custom-range-yellow::-webkit-slider-thumb:active {
background-color: #ffeeba;
}
.custom-range.custom-range-yellow::-moz-range-thumb {
background-color: #ffc107;
}
.custom-range.custom-range-yellow::-moz-range-thumb:active {
background-color: #ffeeba;
}
.custom-range.custom-range-yellow::-ms-thumb {
background-color: #ffc107;
}
.custom-range.custom-range-yellow::-ms-thumb:active {
background-color: #ffeeba;
}
.custom-range.custom-range-green:focus {
outline: 0;
}
.custom-range.custom-range-green:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(40, 167, 69, 0.25);
}
.custom-range.custom-range-green:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(40, 167, 69, 0.25);
}
.custom-range.custom-range-green:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(40, 167, 69, 0.25);
}
.custom-range.custom-range-green::-webkit-slider-thumb {
background-color: #28a745;
}
.custom-range.custom-range-green::-webkit-slider-thumb:active {
background-color: #9be7ac;
}
.custom-range.custom-range-green::-moz-range-thumb {
background-color: #28a745;
}
.custom-range.custom-range-green::-moz-range-thumb:active {
background-color: #9be7ac;
}
.custom-range.custom-range-green::-ms-thumb {
background-color: #28a745;
}
.custom-range.custom-range-green::-ms-thumb:active {
background-color: #9be7ac;
}
.custom-range.custom-range-teal:focus {
outline: 0;
}
.custom-range.custom-range-teal:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(32, 201, 151, 0.25);
}
.custom-range.custom-range-teal:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(32, 201, 151, 0.25);
}
.custom-range.custom-range-teal:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(32, 201, 151, 0.25);
}
.custom-range.custom-range-teal::-webkit-slider-thumb {
background-color: #20c997;
}
.custom-range.custom-range-teal::-webkit-slider-thumb:active {
background-color: #aaf1dc;
}
.custom-range.custom-range-teal::-moz-range-thumb {
background-color: #20c997;
}
.custom-range.custom-range-teal::-moz-range-thumb:active {
background-color: #aaf1dc;
}
.custom-range.custom-range-teal::-ms-thumb {
background-color: #20c997;
}
.custom-range.custom-range-teal::-ms-thumb:active {
background-color: #aaf1dc;
}
.custom-range.custom-range-cyan:focus {
outline: 0;
}
.custom-range.custom-range-cyan:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(23, 162, 184, 0.25);
}
.custom-range.custom-range-cyan:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(23, 162, 184, 0.25);
}
.custom-range.custom-range-cyan:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(23, 162, 184, 0.25);
}
.custom-range.custom-range-cyan::-webkit-slider-thumb {
background-color: #17a2b8;
}
.custom-range.custom-range-cyan::-webkit-slider-thumb:active {
background-color: #90e4f1;
}
.custom-range.custom-range-cyan::-moz-range-thumb {
background-color: #17a2b8;
}
.custom-range.custom-range-cyan::-moz-range-thumb:active {
background-color: #90e4f1;
}
.custom-range.custom-range-cyan::-ms-thumb {
background-color: #17a2b8;
}
.custom-range.custom-range-cyan::-ms-thumb:active {
background-color: #90e4f1;
}
.custom-range.custom-range-white:focus {
outline: 0;
}
.custom-range.custom-range-white:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 255, 255, 0.25);
}
.custom-range.custom-range-white:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 255, 255, 0.25);
}
.custom-range.custom-range-white:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(255, 255, 255, 0.25);
}
.custom-range.custom-range-white::-webkit-slider-thumb {
background-color: #fff;
}
.custom-range.custom-range-white::-webkit-slider-thumb:active {
background-color: #fff;
}
.custom-range.custom-range-white::-moz-range-thumb {
background-color: #fff;
}
.custom-range.custom-range-white::-moz-range-thumb:active {
background-color: #fff;
}
.custom-range.custom-range-white::-ms-thumb {
background-color: #fff;
}
.custom-range.custom-range-white::-ms-thumb:active {
background-color: #fff;
}
.custom-range.custom-range-gray:focus {
outline: 0;
}
.custom-range.custom-range-gray:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(108, 117, 125, 0.25);
}
.custom-range.custom-range-gray:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(108, 117, 125, 0.25);
}
.custom-range.custom-range-gray:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(108, 117, 125, 0.25);
}
.custom-range.custom-range-gray::-webkit-slider-thumb {
background-color: #6c757d;
}
.custom-range.custom-range-gray::-webkit-slider-thumb:active {
background-color: #caced1;
}
.custom-range.custom-range-gray::-moz-range-thumb {
background-color: #6c757d;
}
.custom-range.custom-range-gray::-moz-range-thumb:active {
background-color: #caced1;
}
.custom-range.custom-range-gray::-ms-thumb {
background-color: #6c757d;
}
.custom-range.custom-range-gray::-ms-thumb:active {
background-color: #caced1;
}
.custom-range.custom-range-gray-dark:focus {
outline: 0;
}
.custom-range.custom-range-gray-dark:focus::-webkit-slider-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(52, 58, 64, 0.25);
}
.custom-range.custom-range-gray-dark:focus::-moz-range-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(52, 58, 64, 0.25);
}
.custom-range.custom-range-gray-dark:focus::-ms-thumb {
box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(52, 58, 64, 0.25);
}
.custom-range.custom-range-gray-dark::-webkit-slider-thumb {
background-color: <?php echo $maincolor;?>;
}
.custom-range.custom-range-gray-dark::-webkit-slider-thumb:active {
background-color: #88939e;
}
.custom-range.custom-range-gray-dark::-moz-range-thumb {
background-color: <?php echo $maincolor;?>;
}
.custom-range.custom-range-gray-dark::-moz-range-thumb:active {
background-color: #88939e;
}
.custom-range.custom-range-gray-dark::-ms-thumb {
background-color: <?php echo $maincolor;?>;
}
.custom-range.custom-range-gray-dark::-ms-thumb:active {
background-color: #88939e;
}
.custom-control-input-primary:checked ~ .custom-control-label::before {
border-color: <?php echo $accent_color;?>;
background-color: <?php echo $accent_color;?>;
}
.custom-control-input-primary.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23007bff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-primary.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23007bff'/%3E%3C/svg%3E") !important;
}
.custom-control-input-primary:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.custom-control-input-primary:focus:not(:checked) ~ .custom-control-label::before {
border-color: #80bdff;
}
.custom-control-input-primary:not(:disabled):active ~ .custom-control-label::before {
background-color: #b3d7ff;
border-color: #b3d7ff;
}
.custom-control-input-secondary:checked ~ .custom-control-label::before {
border-color: #6c757d;
background-color: #6c757d;
}
.custom-control-input-secondary.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%236c757d' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-secondary.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%236c757d'/%3E%3C/svg%3E") !important;
}
.custom-control-input-secondary:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(108, 117, 125, 0.25);
}
.custom-control-input-secondary:focus:not(:checked) ~ .custom-control-label::before {
border-color: #afb5ba;
}
.custom-control-input-secondary:not(:disabled):active ~ .custom-control-label::before {
background-color: #caced1;
border-color: #caced1;
}
.custom-control-input-success:checked ~ .custom-control-label::before {
border-color: #28a745;
background-color: #28a745;
}
.custom-control-input-success.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2328a745' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-success.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%2328a745'/%3E%3C/svg%3E") !important;
}
.custom-control-input-success:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}
.custom-control-input-success:focus:not(:checked) ~ .custom-control-label::before {
border-color: #71dd8a;
}
.custom-control-input-success:not(:disabled):active ~ .custom-control-label::before {
background-color: #9be7ac;
border-color: #9be7ac;
}
.custom-control-input-info:checked ~ .custom-control-label::before {
border-color: #17a2b8;
background-color: #17a2b8;
}
.custom-control-input-info.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2317a2b8' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-info.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%2317a2b8'/%3E%3C/svg%3E") !important;
}
.custom-control-input-info:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(23, 162, 184, 0.25);
}
.custom-control-input-info:focus:not(:checked) ~ .custom-control-label::before {
border-color: #63d9ec;
}
.custom-control-input-info:not(:disabled):active ~ .custom-control-label::before {
background-color: #90e4f1;
border-color: #90e4f1;
}
.custom-control-input-warning:checked ~ .custom-control-label::before {
border-color: #ffc107;
background-color: #ffc107;
}
.custom-control-input-warning.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23ffc107' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-warning.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23ffc107'/%3E%3C/svg%3E") !important;
}
.custom-control-input-warning:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
}
.custom-control-input-warning:focus:not(:checked) ~ .custom-control-label::before {
border-color: #ffe187;
}
.custom-control-input-warning:not(:disabled):active ~ .custom-control-label::before {
background-color: #ffeeba;
border-color: #ffeeba;
}
.custom-control-input-danger:checked ~ .custom-control-label::before {
border-color: #dc3545;
background-color: #dc3545;
}
.custom-control-input-danger.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23dc3545' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-danger.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23dc3545'/%3E%3C/svg%3E") !important;
}
.custom-control-input-danger:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}
.custom-control-input-danger:focus:not(:checked) ~ .custom-control-label::before {
border-color: #efa2a9;
}
.custom-control-input-danger:not(:disabled):active ~ .custom-control-label::before {
background-color: #f6cdd1;
border-color: #f6cdd1;
}
.custom-control-input-light:checked ~ .custom-control-label::before {
border-color: #f8f9fa;
background-color: #f8f9fa;
}
.custom-control-input-light.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23f8f9fa' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-light.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23f8f9fa'/%3E%3C/svg%3E") !important;
}
.custom-control-input-light:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(248, 249, 250, 0.25);
}
.custom-control-input-light:focus:not(:checked) ~ .custom-control-label::before {
border-color: #fff;
}
.custom-control-input-light:not(:disabled):active ~ .custom-control-label::before {
background-color: #fff;
border-color: #fff;
}
.custom-control-input-dark:checked ~ .custom-control-label::before {
border-color: <?php echo $maincolor;?>;
background-color: <?php echo $maincolor;?>;
}
.custom-control-input-dark.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23343a40' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-dark.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23343a40'/%3E%3C/svg%3E") !important;
}
.custom-control-input-dark:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(52, 58, 64, 0.25);
}
.custom-control-input-dark:focus:not(:checked) ~ .custom-control-label::before {
border-color: #6d7a86;
}
.custom-control-input-dark:not(:disabled):active ~ .custom-control-label::before {
background-color: #88939e;
border-color: #88939e;
}
.custom-control-input-lightblue:checked ~ .custom-control-label::before {
border-color: #3c8dbc;
background-color: #3c8dbc;
}
.custom-control-input-lightblue.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%233c8dbc' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-lightblue.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%233c8dbc'/%3E%3C/svg%3E") !important;
}
.custom-control-input-lightblue:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(60, 141, 188, 0.25);
}
.custom-control-input-lightblue:focus:not(:checked) ~ .custom-control-label::before {
border-color: #99c5de;
}
.custom-control-input-lightblue:not(:disabled):active ~ .custom-control-label::before {
background-color: #c0dbeb;
border-color: #c0dbeb;
}
.custom-control-input-navy:checked ~ .custom-control-label::before {
border-color: #001f3f;
background-color: #001f3f;
}
.custom-control-input-navy.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23001f3f' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-navy.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23001f3f'/%3E%3C/svg%3E") !important;
}
.custom-control-input-navy:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(0, 31, 63, 0.25);
}
.custom-control-input-navy:focus:not(:checked) ~ .custom-control-label::before {
border-color: #005ebf;
}
.custom-control-input-navy:not(:disabled):active ~ .custom-control-label::before {
background-color: #0077f2;
border-color: #0077f2;
}
.custom-control-input-olive:checked ~ .custom-control-label::before {
border-color: #3d9970;
background-color: #3d9970;
}
.custom-control-input-olive.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%233d9970' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-olive.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%233d9970'/%3E%3C/svg%3E") !important;
}
.custom-control-input-olive:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(61, 153, 112, 0.25);
}
.custom-control-input-olive:focus:not(:checked) ~ .custom-control-label::before {
border-color: #87cfaf;
}
.custom-control-input-olive:not(:disabled):active ~ .custom-control-label::before {
background-color: #abdec7;
border-color: #abdec7;
}
.custom-control-input-lime:checked ~ .custom-control-label::before {
border-color: #01ff70;
background-color: #01ff70;
}
.custom-control-input-lime.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2301ff70' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-lime.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%2301ff70'/%3E%3C/svg%3E") !important;
}
.custom-control-input-lime:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(1, 255, 112, 0.25);
}
.custom-control-input-lime:focus:not(:checked) ~ .custom-control-label::before {
border-color: #81ffb8;
}
.custom-control-input-lime:not(:disabled):active ~ .custom-control-label::before {
background-color: #b4ffd4;
border-color: #b4ffd4;
}
.custom-control-input-fuchsia:checked ~ .custom-control-label::before {
border-color: #f012be;
background-color: #f012be;
}
.custom-control-input-fuchsia.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23f012be' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-fuchsia.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23f012be'/%3E%3C/svg%3E") !important;
}
.custom-control-input-fuchsia:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(240, 18, 190, 0.25);
}
.custom-control-input-fuchsia:focus:not(:checked) ~ .custom-control-label::before {
border-color: #f88adf;
}
.custom-control-input-fuchsia:not(:disabled):active ~ .custom-control-label::before {
background-color: #fbbaec;
border-color: #fbbaec;
}
.custom-control-input-maroon:checked ~ .custom-control-label::before {
border-color: #d81b60;
background-color: #d81b60;
}
.custom-control-input-maroon.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23d81b60' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-maroon.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23d81b60'/%3E%3C/svg%3E") !important;
}
.custom-control-input-maroon:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(216, 27, 96, 0.25);
}
.custom-control-input-maroon:focus:not(:checked) ~ .custom-control-label::before {
border-color: #f083ab;
}
.custom-control-input-maroon:not(:disabled):active ~ .custom-control-label::before {
background-color: #f5b0c9;
border-color: #f5b0c9;
}
.custom-control-input-blue:checked ~ .custom-control-label::before {
border-color: <?php echo $accent_color;?>;
background-color: <?php echo $accent_color;?>;
}
.custom-control-input-blue.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23007bff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-blue.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23007bff'/%3E%3C/svg%3E") !important;
}
.custom-control-input-blue:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.custom-control-input-blue:focus:not(:checked) ~ .custom-control-label::before {
border-color: #80bdff;
}
.custom-control-input-blue:not(:disabled):active ~ .custom-control-label::before {
background-color: #b3d7ff;
border-color: #b3d7ff;
}
.custom-control-input-indigo:checked ~ .custom-control-label::before {
border-color: #6610f2;
background-color: #6610f2;
}
.custom-control-input-indigo.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%236610f2' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-indigo.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%236610f2'/%3E%3C/svg%3E") !important;
}
.custom-control-input-indigo:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(102, 16, 242, 0.25);
}
.custom-control-input-indigo:focus:not(:checked) ~ .custom-control-label::before {
border-color: #b389f9;
}
.custom-control-input-indigo:not(:disabled):active ~ .custom-control-label::before {
background-color: #d2b9fb;
border-color: #d2b9fb;
}
.custom-control-input-purple:checked ~ .custom-control-label::before {
border-color: #6f42c1;
background-color: #6f42c1;
}
.custom-control-input-purple.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%236f42c1' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-purple.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%236f42c1'/%3E%3C/svg%3E") !important;
}
.custom-control-input-purple:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(111, 66, 193, 0.25);
}
.custom-control-input-purple:focus:not(:checked) ~ .custom-control-label::before {
border-color: #b8a2e0;
}
.custom-control-input-purple:not(:disabled):active ~ .custom-control-label::before {
background-color: #d5c8ed;
border-color: #d5c8ed;
}
.custom-control-input-pink:checked ~ .custom-control-label::before {
border-color: #e83e8c;
background-color: #e83e8c;
}
.custom-control-input-pink.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23e83e8c' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-pink.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23e83e8c'/%3E%3C/svg%3E") !important;
}
.custom-control-input-pink:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(232, 62, 140, 0.25);
}
.custom-control-input-pink:focus:not(:checked) ~ .custom-control-label::before {
border-color: #f6b0d0;
}
.custom-control-input-pink:not(:disabled):active ~ .custom-control-label::before {
background-color: #fbddeb;
border-color: #fbddeb;
}
.custom-control-input-red:checked ~ .custom-control-label::before {
border-color: #dc3545;
background-color: #dc3545;
}
.custom-control-input-red.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23dc3545' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-red.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23dc3545'/%3E%3C/svg%3E") !important;
}
.custom-control-input-red:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}
.custom-control-input-red:focus:not(:checked) ~ .custom-control-label::before {
border-color: #efa2a9;
}
.custom-control-input-red:not(:disabled):active ~ .custom-control-label::before {
background-color: #f6cdd1;
border-color: #f6cdd1;
}
.custom-control-input-orange:checked ~ .custom-control-label::before {
border-color: #fd7e14;
background-color: #fd7e14;
}
.custom-control-input-orange.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fd7e14' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-orange.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fd7e14'/%3E%3C/svg%3E") !important;
}
.custom-control-input-orange:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(253, 126, 20, 0.25);
}
.custom-control-input-orange:focus:not(:checked) ~ .custom-control-label::before {
border-color: #fec392;
}
.custom-control-input-orange:not(:disabled):active ~ .custom-control-label::before {
background-color: #ffdfc5;
border-color: #ffdfc5;
}
.custom-control-input-yellow:checked ~ .custom-control-label::before {
border-color: #ffc107;
background-color: #ffc107;
}
.custom-control-input-yellow.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23ffc107' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-yellow.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23ffc107'/%3E%3C/svg%3E") !important;
}
.custom-control-input-yellow:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
}
.custom-control-input-yellow:focus:not(:checked) ~ .custom-control-label::before {
border-color: #ffe187;
}
.custom-control-input-yellow:not(:disabled):active ~ .custom-control-label::before {
background-color: #ffeeba;
border-color: #ffeeba;
}
.custom-control-input-green:checked ~ .custom-control-label::before {
border-color: #28a745;
background-color: #28a745;
}
.custom-control-input-green.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2328a745' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-green.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%2328a745'/%3E%3C/svg%3E") !important;
}
.custom-control-input-green:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}
.custom-control-input-green:focus:not(:checked) ~ .custom-control-label::before {
border-color: #71dd8a;
}
.custom-control-input-green:not(:disabled):active ~ .custom-control-label::before {
background-color: #9be7ac;
border-color: #9be7ac;
}
.custom-control-input-teal:checked ~ .custom-control-label::before {
border-color: #20c997;
background-color: #20c997;
}
.custom-control-input-teal.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2320c997' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-teal.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%2320c997'/%3E%3C/svg%3E") !important;
}
.custom-control-input-teal:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(32, 201, 151, 0.25);
}
.custom-control-input-teal:focus:not(:checked) ~ .custom-control-label::before {
border-color: #7eeaca;
}
.custom-control-input-teal:not(:disabled):active ~ .custom-control-label::before {
background-color: #aaf1dc;
border-color: #aaf1dc;
}
.custom-control-input-cyan:checked ~ .custom-control-label::before {
border-color: #17a2b8;
background-color: #17a2b8;
}
.custom-control-input-cyan.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2317a2b8' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-cyan.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%2317a2b8'/%3E%3C/svg%3E") !important;
}
.custom-control-input-cyan:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(23, 162, 184, 0.25);
}
.custom-control-input-cyan:focus:not(:checked) ~ .custom-control-label::before {
border-color: #63d9ec;
}
.custom-control-input-cyan:not(:disabled):active ~ .custom-control-label::before {
background-color: #90e4f1;
border-color: #90e4f1;
}
.custom-control-input-white:checked ~ .custom-control-label::before {
border-color: #fff;
background-color: #fff;
}
.custom-control-input-white.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-white.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E") !important;
}
.custom-control-input-white:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
}
.custom-control-input-white:focus:not(:checked) ~ .custom-control-label::before {
border-color: #fff;
}
.custom-control-input-white:not(:disabled):active ~ .custom-control-label::before {
background-color: #fff;
border-color: #fff;
}
.custom-control-input-gray:checked ~ .custom-control-label::before {
border-color: #6c757d;
background-color: #6c757d;
}
.custom-control-input-gray.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%236c757d' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-gray.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%236c757d'/%3E%3C/svg%3E") !important;
}
.custom-control-input-gray:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(108, 117, 125, 0.25);
}
.custom-control-input-gray:focus:not(:checked) ~ .custom-control-label::before {
border-color: #afb5ba;
}
.custom-control-input-gray:not(:disabled):active ~ .custom-control-label::before {
background-color: #caced1;
border-color: #caced1;
}
.custom-control-input-gray-dark:checked ~ .custom-control-label::before {
border-color: <?php echo $maincolor;?>;
background-color: <?php echo $maincolor;?>;
}
.custom-control-input-gray-dark.custom-control-input-outline:checked[type="checkbox"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23343a40' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") !important;
}
.custom-control-input-gray-dark.custom-control-input-outline:checked[type="radio"] ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23343a40'/%3E%3C/svg%3E") !important;
}
.custom-control-input-gray-dark:focus ~ .custom-control-label::before {
box-shadow: inset 0 0 0 transparent, 0 0 0 0.2rem rgba(52, 58, 64, 0.25);
}
.custom-control-input-gray-dark:focus:not(:checked) ~ .custom-control-label::before {
border-color: #6d7a86;
}
.custom-control-input-gray-dark:not(:disabled):active ~ .custom-control-label::before {
background-color: #88939e;
border-color: #88939e;
}
.custom-control-input-outline ~ .custom-control-label::before {
background-color: transparent !important;
box-shadow: none;
}
.custom-control-input-outline:checked ~ .custom-control-label::before {
background-color: transparent;
}
.dark-mode .custom-control-label::before,
.dark-mode .custom-file-label,
.dark-mode .custom-file-label::after,
.dark-mode .custom-select,
.dark-mode .form-control,
.dark-mode .input-group-text {
background-color: <?php echo $maincolor;?>;
color: #fff;
}
.dark-mode .form-control:not(.form-control-navbar):not(.is-invalid):not(:focus) {
border-color: #6c757d;
}
.dark-mode select {
background-color: <?php echo $maincolor;?>;
color: #fff;
border-color: #6c757d;
}
.dark-mode .input-group-text {
border-color: #6c757d;
}
.dark-mode .custom-control-input:disabled ~ .custom-control-label::before,
.dark-mode .custom-control-input[disabled] ~ .custom-control-label::before {
background-color: #3f474e;
border-color: #6c757d;
color: #fff;
}
.dark-mode .custom-range::-webkit-slider-runnable-track {
background-color: <?php echo $secondarycolor;?>;
}
.dark-mode .custom-range::-moz-range-track {
background-color: <?php echo $secondarycolor;?>;
}
.dark-mode .custom-range::-ms-track {
background-color: <?php echo $secondarycolor;?>;
}
.dark-mode .navbar-dark .btn-navbar,
.dark-mode .navbar-dark .form-control-navbar {
background-color: <?php echo $maincolor;?>;
border: 1px solid #6c757d;
}
.dark-mode .navbar-dark .btn-navbar:hover {
background-color: <?php echo $secondarycolor;?>;
}
.dark-mode .navbar-dark .btn-navbar:focus {
background-color: #4b545c;
}
.dark-mode .navbar-dark .form-control-navbar + .input-group-append > .btn-navbar,
.dark-mode .navbar-dark .form-control-navbar + .input-group-prepend > .btn-navbar {
background-color: #3f474e;
color: #fff;
border: 1px solid #6c757d;
border-left: none;
}
.progress {
box-shadow: none;
border-radius: 1px;
}
.progress.vertical {
display: inline-block;
height: 200px;
margin-right: 10px;
position: relative;
width: 30px;
}
.progress.vertical > .progress-bar {
bottom: 0;
position: absolute;
width: 100%;
}
.progress.vertical.progress-sm,
.progress.vertical.sm {
width: 20px;
}
.progress.vertical.progress-xs,
.progress.vertical.xs {
width: 10px;
}
.progress.vertical.progress-xxs,
.progress.vertical.xxs {
width: 3px;
}
.progress-group {
margin-bottom: 0.5rem;
}
.progress-sm {
height: 10px;
}
.progress-xs {
height: 7px;
}
.progress-xxs {
height: 3px;
}
.table tr > td .progress {
margin: 0;
}
.dark-mode .progress {
background: <?php echo $secondarycolor;?>;
}
.card-primary:not(.card-outline) > .card-header {
background-color: <?php echo $accent_color;?>;
}
.card-primary:not(.card-outline) > .card-header,
.card-primary:not(.card-outline) > .card-header a {
color: #fff;
}
.card-primary:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-primary.card-outline {
border-top: 3px solid <?php echo $accent_color;?>;
}
.card-primary.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-primary.card-outline-tabs > .card-header a.active {
border-top: 3px solid <?php echo $accent_color;?>;
}
.bg-gradient-primary .btn-tool,
.bg-primary .btn-tool,
.card-primary:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-primary .btn-tool:hover,
.bg-primary .btn-tool:hover,
.card-primary:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-primary .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-primary .bootstrap-datetimepicker-widget .table th,
.card.bg-primary .bootstrap-datetimepicker-widget .table td,
.card.bg-primary .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-primary .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-primary .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-primary .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-primary .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-primary .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-primary .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-primary .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-primary .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-primary .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-primary .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #0067d6;
color: #fff;
}
.card.bg-gradient-primary .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-primary .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-primary .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-primary .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-primary .bootstrap-datetimepicker-widget table td.active,
.card.bg-primary .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #3395ff;
color: #fff;
}
.card-secondary:not(.card-outline) > .card-header {
background-color: #6c757d;
}
.card-secondary:not(.card-outline) > .card-header,
.card-secondary:not(.card-outline) > .card-header a {
color: #fff;
}
.card-secondary:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-secondary.card-outline {
border-top: 3px solid #6c757d;
}
.card-secondary.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-secondary.card-outline-tabs > .card-header a.active {
border-top: 3px solid #6c757d;
}
.bg-gradient-secondary .btn-tool,
.bg-secondary .btn-tool,
.card-secondary:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-secondary .btn-tool:hover,
.bg-secondary .btn-tool:hover,
.card-secondary:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-secondary .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-secondary .bootstrap-datetimepicker-widget .table th,
.card.bg-secondary .bootstrap-datetimepicker-widget .table td,
.card.bg-secondary .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-secondary .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-secondary .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-secondary .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-secondary .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-secondary .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-secondary .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-secondary .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-secondary .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-secondary .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-secondary .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #596167;
color: #fff;
}
.card.bg-gradient-secondary .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-secondary .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-secondary .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-secondary .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-secondary .bootstrap-datetimepicker-widget table td.active,
.card.bg-secondary .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #868e96;
color: #fff;
}
.card-success:not(.card-outline) > .card-header {
background-color: #28a745;
}
.card-success:not(.card-outline) > .card-header,
.card-success:not(.card-outline) > .card-header a {
color: #fff;
}
.card-success:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-success.card-outline {
border-top: 3px solid #28a745;
}
.card-success.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-success.card-outline-tabs > .card-header a.active {
border-top: 3px solid #28a745;
}
.bg-gradient-success .btn-tool,
.bg-success .btn-tool,
.card-success:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-success .btn-tool:hover,
.bg-success .btn-tool:hover,
.card-success:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-success .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-success .bootstrap-datetimepicker-widget .table th,
.card.bg-success .bootstrap-datetimepicker-widget .table td,
.card.bg-success .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-success .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-success .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-success .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-success .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-success .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-success .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-success .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-success .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-success .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-success .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #208637;
color: #fff;
}
.card.bg-gradient-success .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-success .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-success .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-success .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-success .bootstrap-datetimepicker-widget table td.active,
.card.bg-success .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #34ce57;
color: #fff;
}
.card-info:not(.card-outline) > .card-header {
background-color: #17a2b8;
}
.card-info:not(.card-outline) > .card-header,
.card-info:not(.card-outline) > .card-header a {
color: #fff;
}
.card-info:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-info.card-outline {
border-top: 3px solid #17a2b8;
}
.card-info.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-info.card-outline-tabs > .card-header a.active {
border-top: 3px solid #17a2b8;
}
.bg-gradient-info .btn-tool,
.bg-info .btn-tool,
.card-info:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-info .btn-tool:hover,
.bg-info .btn-tool:hover,
.card-info:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-info .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-info .bootstrap-datetimepicker-widget .table th,
.card.bg-info .bootstrap-datetimepicker-widget .table td,
.card.bg-info .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-info .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-info .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-info .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-info .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-info .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-info .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-info .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-info .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-info .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-info .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #128294;
color: #fff;
}
.card.bg-gradient-info .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-info .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-info .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-info .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-info .bootstrap-datetimepicker-widget table td.active,
.card.bg-info .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #1fc8e3;
color: #fff;
}
.card-warning:not(.card-outline) > .card-header {
background-color: #ffc107;
}
.card-warning:not(.card-outline) > .card-header,
.card-warning:not(.card-outline) > .card-header a {
color: #1f2d3d;
}
.card-warning:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-warning.card-outline {
border-top: 3px solid #ffc107;
}
.card-warning.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-warning.card-outline-tabs > .card-header a.active {
border-top: 3px solid #ffc107;
}
.bg-gradient-warning .btn-tool,
.bg-warning .btn-tool,
.card-warning:not(.card-outline) .btn-tool {
color: rgba(31, 45, 61, 0.8);
}
.bg-gradient-warning .btn-tool:hover,
.bg-warning .btn-tool:hover,
.card-warning:not(.card-outline) .btn-tool:hover {
color: #1f2d3d;
}
.card.bg-gradient-warning .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-warning .bootstrap-datetimepicker-widget .table th,
.card.bg-warning .bootstrap-datetimepicker-widget .table td,
.card.bg-warning .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-warning .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-warning .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-warning .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-warning .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-warning .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-warning .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-warning .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-warning .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-warning .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-warning .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #dda600;
color: #1f2d3d;
}
.card.bg-gradient-warning .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-warning .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #1f2d3d;
}
.card.bg-gradient-warning .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-warning .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-warning .bootstrap-datetimepicker-widget table td.active,
.card.bg-warning .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #ffce3a;
color: #1f2d3d;
}
.card-danger:not(.card-outline) > .card-header {
background-color: #dc3545;
}
.card-danger:not(.card-outline) > .card-header,
.card-danger:not(.card-outline) > .card-header a {
color: #fff;
}
.card-danger:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-danger.card-outline {
border-top: 3px solid #dc3545;
}
.card-danger.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-danger.card-outline-tabs > .card-header a.active {
border-top: 3px solid #dc3545;
}
.bg-danger .btn-tool,
.bg-gradient-danger .btn-tool,
.card-danger:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-danger .btn-tool:hover,
.bg-gradient-danger .btn-tool:hover,
.card-danger:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-danger .bootstrap-datetimepicker-widget .table td,
.card.bg-danger .bootstrap-datetimepicker-widget .table th,
.card.bg-gradient-danger .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-danger .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-danger .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-danger .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-danger .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-danger .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-danger .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-gradient-danger .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-danger .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-danger .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-danger .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-danger .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #c62232;
color: #fff;
}
.card.bg-danger .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-gradient-danger .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-danger .bootstrap-datetimepicker-widget table td.active,
.card.bg-danger .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-gradient-danger .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-danger .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #e4606d;
color: #fff;
}
.card-light:not(.card-outline) > .card-header {
background-color: #f8f9fa;
}
.card-light:not(.card-outline) > .card-header,
.card-light:not(.card-outline) > .card-header a {
color: #1f2d3d;
}
.card-light:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-light.card-outline {
border-top: 3px solid #f8f9fa;
}
.card-light.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-light.card-outline-tabs > .card-header a.active {
border-top: 3px solid #f8f9fa;
}
.bg-gradient-light .btn-tool,
.bg-light .btn-tool,
.card-light:not(.card-outline) .btn-tool {
color: rgba(31, 45, 61, 0.8);
}
.bg-gradient-light .btn-tool:hover,
.bg-light .btn-tool:hover,
.card-light:not(.card-outline) .btn-tool:hover {
color: #1f2d3d;
}
.card.bg-gradient-light .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-light .bootstrap-datetimepicker-widget .table th,
.card.bg-light .bootstrap-datetimepicker-widget .table td,
.card.bg-light .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-light .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-light .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-light .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-light .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-light .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-light .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-light .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-light .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-light .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-light .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #e0e5e9;
color: #1f2d3d;
}
.card.bg-gradient-light .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-light .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #1f2d3d;
}
.card.bg-gradient-light .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-light .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-light .bootstrap-datetimepicker-widget table td.active,
.card.bg-light .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #fff;
color: #1f2d3d;
}
.card-dark:not(.card-outline) > .card-header {
background-color: <?php echo $maincolor;?>;
}
.card-dark:not(.card-outline) > .card-header,
.card-dark:not(.card-outline) > .card-header a {
color: #fff;
}
.card-dark:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-dark.card-outline {
border-top: 3px solid <?php echo $maincolor;?>;
}
.card-dark.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-dark.card-outline-tabs > .card-header a.active {
border-top: 3px solid <?php echo $maincolor;?>;
}
.bg-dark .btn-tool,
.bg-gradient-dark .btn-tool,
.card-dark:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-dark .btn-tool:hover,
.bg-gradient-dark .btn-tool:hover,
.card-dark:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-dark .bootstrap-datetimepicker-widget .table td,
.card.bg-dark .bootstrap-datetimepicker-widget .table th,
.card.bg-gradient-dark .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-dark .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-dark .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-dark .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-dark .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-dark .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-dark .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-gradient-dark .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-dark .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-dark .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-dark .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-dark .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #222629;
color: #fff;
}
.card.bg-dark .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-gradient-dark .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-dark .bootstrap-datetimepicker-widget table td.active,
.card.bg-dark .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-gradient-dark .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-dark .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #4b545c;
color: #fff;
}
.card-lightblue:not(.card-outline) > .card-header {
background-color: #3c8dbc;
}
.card-lightblue:not(.card-outline) > .card-header,
.card-lightblue:not(.card-outline) > .card-header a {
color: #fff;
}
.card-lightblue:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-lightblue.card-outline {
border-top: 3px solid #3c8dbc;
}
.card-lightblue.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-lightblue.card-outline-tabs > .card-header a.active {
border-top: 3px solid #3c8dbc;
}
.bg-gradient-lightblue .btn-tool,
.bg-lightblue .btn-tool,
.card-lightblue:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-lightblue .btn-tool:hover,
.bg-lightblue .btn-tool:hover,
.card-lightblue:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-lightblue .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-lightblue .bootstrap-datetimepicker-widget .table th,
.card.bg-lightblue .bootstrap-datetimepicker-widget .table td,
.card.bg-lightblue .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-lightblue .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-lightblue .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-lightblue .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-lightblue .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-lightblue .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-lightblue .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-lightblue .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-lightblue .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-lightblue .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-lightblue .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #32769d;
color: #fff;
}
.card.bg-gradient-lightblue .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-lightblue .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-lightblue .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-lightblue .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-lightblue .bootstrap-datetimepicker-widget table td.active,
.card.bg-lightblue .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #5fa4cc;
color: #fff;
}
.card-navy:not(.card-outline) > .card-header {
background-color: #001f3f;
}
.card-navy:not(.card-outline) > .card-header,
.card-navy:not(.card-outline) > .card-header a {
color: #fff;
}
.card-navy:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-navy.card-outline {
border-top: 3px solid #001f3f;
}
.card-navy.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-navy.card-outline-tabs > .card-header a.active {
border-top: 3px solid #001f3f;
}
.bg-gradient-navy .btn-tool,
.bg-navy .btn-tool,
.card-navy:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-navy .btn-tool:hover,
.bg-navy .btn-tool:hover,
.card-navy:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-navy .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-navy .bootstrap-datetimepicker-widget .table th,
.card.bg-navy .bootstrap-datetimepicker-widget .table td,
.card.bg-navy .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-navy .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-navy .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-navy .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-navy .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-navy .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-navy .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-navy .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-navy .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-navy .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-navy .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #000b16;
color: #fff;
}
.card.bg-gradient-navy .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-navy .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-navy .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-navy .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-navy .bootstrap-datetimepicker-widget table td.active,
.card.bg-navy .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #003872;
color: #fff;
}
.card-olive:not(.card-outline) > .card-header {
background-color: #3d9970;
}
.card-olive:not(.card-outline) > .card-header,
.card-olive:not(.card-outline) > .card-header a {
color: #fff;
}
.card-olive:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-olive.card-outline {
border-top: 3px solid #3d9970;
}
.card-olive.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-olive.card-outline-tabs > .card-header a.active {
border-top: 3px solid #3d9970;
}
.bg-gradient-olive .btn-tool,
.bg-olive .btn-tool,
.card-olive:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-olive .btn-tool:hover,
.bg-olive .btn-tool:hover,
.card-olive:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-olive .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-olive .bootstrap-datetimepicker-widget .table th,
.card.bg-olive .bootstrap-datetimepicker-widget .table td,
.card.bg-olive .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-olive .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-olive .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-olive .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-olive .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-olive .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-olive .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-olive .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-olive .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-olive .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-olive .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #317c5b;
color: #fff;
}
.card.bg-gradient-olive .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-olive .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-olive .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-olive .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-olive .bootstrap-datetimepicker-widget table td.active,
.card.bg-olive .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #50b98a;
color: #fff;
}
.card-lime:not(.card-outline) > .card-header {
background-color: #01ff70;
}
.card-lime:not(.card-outline) > .card-header,
.card-lime:not(.card-outline) > .card-header a {
color: #1f2d3d;
}
.card-lime:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-lime.card-outline {
border-top: 3px solid #01ff70;
}
.card-lime.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-lime.card-outline-tabs > .card-header a.active {
border-top: 3px solid #01ff70;
}
.bg-gradient-lime .btn-tool,
.bg-lime .btn-tool,
.card-lime:not(.card-outline) .btn-tool {
color: rgba(31, 45, 61, 0.8);
}
.bg-gradient-lime .btn-tool:hover,
.bg-lime .btn-tool:hover,
.card-lime:not(.card-outline) .btn-tool:hover {
color: #1f2d3d;
}
.card.bg-gradient-lime .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-lime .bootstrap-datetimepicker-widget .table th,
.card.bg-lime .bootstrap-datetimepicker-widget .table td,
.card.bg-lime .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-lime .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-lime .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-lime .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-lime .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-lime .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-lime .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-lime .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-lime .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-lime .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-lime .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #00d75e;
color: #1f2d3d;
}
.card.bg-gradient-lime .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-lime .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #1f2d3d;
}
.card.bg-gradient-lime .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-lime .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-lime .bootstrap-datetimepicker-widget table td.active,
.card.bg-lime .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #34ff8d;
color: #1f2d3d;
}
.card-fuchsia:not(.card-outline) > .card-header {
background-color: #f012be;
}
.card-fuchsia:not(.card-outline) > .card-header,
.card-fuchsia:not(.card-outline) > .card-header a {
color: #fff;
}
.card-fuchsia:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-fuchsia.card-outline {
border-top: 3px solid #f012be;
}
.card-fuchsia.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-fuchsia.card-outline-tabs > .card-header a.active {
border-top: 3px solid #f012be;
}
.bg-fuchsia .btn-tool,
.bg-gradient-fuchsia .btn-tool,
.card-fuchsia:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-fuchsia .btn-tool:hover,
.bg-gradient-fuchsia .btn-tool:hover,
.card-fuchsia:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-fuchsia .bootstrap-datetimepicker-widget .table td,
.card.bg-fuchsia .bootstrap-datetimepicker-widget .table th,
.card.bg-gradient-fuchsia .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-fuchsia .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-fuchsia .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-fuchsia .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-fuchsia .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-fuchsia .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-fuchsia .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-gradient-fuchsia .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-fuchsia .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-fuchsia .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-fuchsia .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-fuchsia .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #cc0da1;
color: #fff;
}
.card.bg-fuchsia .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-gradient-fuchsia .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-fuchsia .bootstrap-datetimepicker-widget table td.active,
.card.bg-fuchsia .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-gradient-fuchsia .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-fuchsia .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #f342cb;
color: #fff;
}
.card-maroon:not(.card-outline) > .card-header {
background-color: #d81b60;
}
.card-maroon:not(.card-outline) > .card-header,
.card-maroon:not(.card-outline) > .card-header a {
color: #fff;
}
.card-maroon:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-maroon.card-outline {
border-top: 3px solid #d81b60;
}
.card-maroon.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-maroon.card-outline-tabs > .card-header a.active {
border-top: 3px solid #d81b60;
}
.bg-gradient-maroon .btn-tool,
.bg-maroon .btn-tool,
.card-maroon:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-maroon .btn-tool:hover,
.bg-maroon .btn-tool:hover,
.card-maroon:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-maroon .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-maroon .bootstrap-datetimepicker-widget .table th,
.card.bg-maroon .bootstrap-datetimepicker-widget .table td,
.card.bg-maroon .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-maroon .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-maroon .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-maroon .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-maroon .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-maroon .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-maroon .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-maroon .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-maroon .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-maroon .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-maroon .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #b41650;
color: #fff;
}
.card.bg-gradient-maroon .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-maroon .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-maroon .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-maroon .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-maroon .bootstrap-datetimepicker-widget table td.active,
.card.bg-maroon .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #e73f7c;
color: #fff;
}
.card-blue:not(.card-outline) > .card-header {
background-color: <?php echo $accent_color;?>;
}
.card-blue:not(.card-outline) > .card-header,
.card-blue:not(.card-outline) > .card-header a {
color: #fff;
}
.card-blue:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-blue.card-outline {
border-top: 3px solid <?php echo $accent_color;?>;
}
.card-blue.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-blue.card-outline-tabs > .card-header a.active {
border-top: 3px solid <?php echo $accent_color;?>;
}
.bg-blue .btn-tool,
.bg-gradient-blue .btn-tool,
.card-blue:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-blue .btn-tool:hover,
.bg-gradient-blue .btn-tool:hover,
.card-blue:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-blue .bootstrap-datetimepicker-widget .table td,
.card.bg-blue .bootstrap-datetimepicker-widget .table th,
.card.bg-gradient-blue .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-blue .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-blue .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-blue .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-blue .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-blue .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-blue .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-gradient-blue .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-blue .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-blue .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-blue .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-blue .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #0067d6;
color: #fff;
}
.card.bg-blue .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-gradient-blue .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-blue .bootstrap-datetimepicker-widget table td.active,
.card.bg-blue .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-gradient-blue .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-blue .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #3395ff;
color: #fff;
}
.card-indigo:not(.card-outline) > .card-header {
background-color: #6610f2;
}
.card-indigo:not(.card-outline) > .card-header,
.card-indigo:not(.card-outline) > .card-header a {
color: #fff;
}
.card-indigo:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-indigo.card-outline {
border-top: 3px solid #6610f2;
}
.card-indigo.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-indigo.card-outline-tabs > .card-header a.active {
border-top: 3px solid #6610f2;
}
.bg-gradient-indigo .btn-tool,
.bg-indigo .btn-tool,
.card-indigo:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-indigo .btn-tool:hover,
.bg-indigo .btn-tool:hover,
.card-indigo:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-indigo .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-indigo .bootstrap-datetimepicker-widget .table th,
.card.bg-indigo .bootstrap-datetimepicker-widget .table td,
.card.bg-indigo .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-indigo .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-indigo .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-indigo .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-indigo .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-indigo .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-indigo .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-indigo .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-indigo .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-indigo .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-indigo .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #550bce;
color: #fff;
}
.card.bg-gradient-indigo .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-indigo .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-indigo .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-indigo .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-indigo .bootstrap-datetimepicker-widget table td.active,
.card.bg-indigo .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #8540f5;
color: #fff;
}
.card-purple:not(.card-outline) > .card-header {
background-color: #6f42c1;
}
.card-purple:not(.card-outline) > .card-header,
.card-purple:not(.card-outline) > .card-header a {
color: #fff;
}
.card-purple:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-purple.card-outline {
border-top: 3px solid #6f42c1;
}
.card-purple.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-purple.card-outline-tabs > .card-header a.active {
border-top: 3px solid #6f42c1;
}
.bg-gradient-purple .btn-tool,
.bg-purple .btn-tool,
.card-purple:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-purple .btn-tool:hover,
.bg-purple .btn-tool:hover,
.card-purple:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-purple .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-purple .bootstrap-datetimepicker-widget .table th,
.card.bg-purple .bootstrap-datetimepicker-widget .table td,
.card.bg-purple .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-purple .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-purple .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-purple .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-purple .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-purple .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-purple .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-purple .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-purple .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-purple .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-purple .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #5d36a4;
color: #fff;
}
.card.bg-gradient-purple .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-purple .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-purple .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-purple .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-purple .bootstrap-datetimepicker-widget table td.active,
.card.bg-purple .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #8c68ce;
color: #fff;
}
.card-pink:not(.card-outline) > .card-header {
background-color: #e83e8c;
}
.card-pink:not(.card-outline) > .card-header,
.card-pink:not(.card-outline) > .card-header a {
color: #fff;
}
.card-pink:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-pink.card-outline {
border-top: 3px solid #e83e8c;
}
.card-pink.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-pink.card-outline-tabs > .card-header a.active {
border-top: 3px solid #e83e8c;
}
.bg-gradient-pink .btn-tool,
.bg-pink .btn-tool,
.card-pink:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-pink .btn-tool:hover,
.bg-pink .btn-tool:hover,
.card-pink:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-pink .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-pink .bootstrap-datetimepicker-widget .table th,
.card.bg-pink .bootstrap-datetimepicker-widget .table td,
.card.bg-pink .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-pink .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-pink .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-pink .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-pink .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-pink .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-pink .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-pink .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-pink .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-pink .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-pink .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #e21b76;
color: #fff;
}
.card.bg-gradient-pink .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-pink .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-pink .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-pink .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-pink .bootstrap-datetimepicker-widget table td.active,
.card.bg-pink .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #ed6ca7;
color: #fff;
}
.card-red:not(.card-outline) > .card-header {
background-color: #dc3545;
}
.card-red:not(.card-outline) > .card-header,
.card-red:not(.card-outline) > .card-header a {
color: #fff;
}
.card-red:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-red.card-outline {
border-top: 3px solid #dc3545;
}
.card-red.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-red.card-outline-tabs > .card-header a.active {
border-top: 3px solid #dc3545;
}
.bg-gradient-red .btn-tool,
.bg-red .btn-tool,
.card-red:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-red .btn-tool:hover,
.bg-red .btn-tool:hover,
.card-red:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-red .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-red .bootstrap-datetimepicker-widget .table th,
.card.bg-red .bootstrap-datetimepicker-widget .table td,
.card.bg-red .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-red .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-red .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-red .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-red .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-red .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-red .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-red .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-red .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-red .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-red .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #c62232;
color: #fff;
}
.card.bg-gradient-red .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-red .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-red .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-red .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-red .bootstrap-datetimepicker-widget table td.active,
.card.bg-red .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #e4606d;
color: #fff;
}
.card-orange:not(.card-outline) > .card-header {
background-color: #fd7e14;
}
.card-orange:not(.card-outline) > .card-header,
.card-orange:not(.card-outline) > .card-header a {
color: #1f2d3d;
}
.card-orange:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-orange.card-outline {
border-top: 3px solid #fd7e14;
}
.card-orange.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-orange.card-outline-tabs > .card-header a.active {
border-top: 3px solid #fd7e14;
}
.bg-gradient-orange .btn-tool,
.bg-orange .btn-tool,
.card-orange:not(.card-outline) .btn-tool {
color: rgba(31, 45, 61, 0.8);
}
.bg-gradient-orange .btn-tool:hover,
.bg-orange .btn-tool:hover,
.card-orange:not(.card-outline) .btn-tool:hover {
color: #1f2d3d;
}
.card.bg-gradient-orange .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-orange .bootstrap-datetimepicker-widget .table th,
.card.bg-orange .bootstrap-datetimepicker-widget .table td,
.card.bg-orange .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-orange .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-orange .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-orange .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-orange .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-orange .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-orange .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-orange .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-orange .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-orange .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-orange .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #e66a02;
color: #1f2d3d;
}
.card.bg-gradient-orange .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-orange .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #1f2d3d;
}
.card.bg-gradient-orange .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-orange .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-orange .bootstrap-datetimepicker-widget table td.active,
.card.bg-orange .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #fd9a47;
color: #1f2d3d;
}
.card-yellow:not(.card-outline) > .card-header {
background-color: #ffc107;
}
.card-yellow:not(.card-outline) > .card-header,
.card-yellow:not(.card-outline) > .card-header a {
color: #1f2d3d;
}
.card-yellow:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-yellow.card-outline {
border-top: 3px solid #ffc107;
}
.card-yellow.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-yellow.card-outline-tabs > .card-header a.active {
border-top: 3px solid #ffc107;
}
.bg-gradient-yellow .btn-tool,
.bg-yellow .btn-tool,
.card-yellow:not(.card-outline) .btn-tool {
color: rgba(31, 45, 61, 0.8);
}
.bg-gradient-yellow .btn-tool:hover,
.bg-yellow .btn-tool:hover,
.card-yellow:not(.card-outline) .btn-tool:hover {
color: #1f2d3d;
}
.card.bg-gradient-yellow .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-yellow .bootstrap-datetimepicker-widget .table th,
.card.bg-yellow .bootstrap-datetimepicker-widget .table td,
.card.bg-yellow .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-yellow .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-yellow .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-yellow .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-yellow .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-yellow .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-yellow .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-yellow .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-yellow .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-yellow .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-yellow .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #dda600;
color: #1f2d3d;
}
.card.bg-gradient-yellow .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-yellow .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #1f2d3d;
}
.card.bg-gradient-yellow .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-yellow .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-yellow .bootstrap-datetimepicker-widget table td.active,
.card.bg-yellow .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #ffce3a;
color: #1f2d3d;
}
.card-green:not(.card-outline) > .card-header {
background-color: #28a745;
}
.card-green:not(.card-outline) > .card-header,
.card-green:not(.card-outline) > .card-header a {
color: #fff;
}
.card-green:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-green.card-outline {
border-top: 3px solid #28a745;
}
.card-green.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-green.card-outline-tabs > .card-header a.active {
border-top: 3px solid #28a745;
}
.bg-gradient-green .btn-tool,
.bg-green .btn-tool,
.card-green:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-green .btn-tool:hover,
.bg-green .btn-tool:hover,
.card-green:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-green .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-green .bootstrap-datetimepicker-widget .table th,
.card.bg-green .bootstrap-datetimepicker-widget .table td,
.card.bg-green .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-green .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-green .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-green .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-green .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-green .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-green .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-green .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-green .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-green .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-green .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #208637;
color: #fff;
}
.card.bg-gradient-green .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-green .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-green .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-green .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-green .bootstrap-datetimepicker-widget table td.active,
.card.bg-green .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #34ce57;
color: #fff;
}
.card-teal:not(.card-outline) > .card-header {
background-color: #20c997;
}
.card-teal:not(.card-outline) > .card-header,
.card-teal:not(.card-outline) > .card-header a {
color: #fff;
}
.card-teal:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-teal.card-outline {
border-top: 3px solid #20c997;
}
.card-teal.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-teal.card-outline-tabs > .card-header a.active {
border-top: 3px solid #20c997;
}
.bg-gradient-teal .btn-tool,
.bg-teal .btn-tool,
.card-teal:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-teal .btn-tool:hover,
.bg-teal .btn-tool:hover,
.card-teal:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-teal .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-teal .bootstrap-datetimepicker-widget .table th,
.card.bg-teal .bootstrap-datetimepicker-widget .table td,
.card.bg-teal .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-teal .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-teal .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-teal .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-teal .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-teal .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-teal .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-teal .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-teal .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-teal .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-teal .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #1aa67d;
color: #fff;
}
.card.bg-gradient-teal .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-teal .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-teal .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-teal .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-teal .bootstrap-datetimepicker-widget table td.active,
.card.bg-teal .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #3ce0af;
color: #fff;
}
.card-cyan:not(.card-outline) > .card-header {
background-color: #17a2b8;
}
.card-cyan:not(.card-outline) > .card-header,
.card-cyan:not(.card-outline) > .card-header a {
color: #fff;
}
.card-cyan:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-cyan.card-outline {
border-top: 3px solid #17a2b8;
}
.card-cyan.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-cyan.card-outline-tabs > .card-header a.active {
border-top: 3px solid #17a2b8;
}
.bg-cyan .btn-tool,
.bg-gradient-cyan .btn-tool,
.card-cyan:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-cyan .btn-tool:hover,
.bg-gradient-cyan .btn-tool:hover,
.card-cyan:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-cyan .bootstrap-datetimepicker-widget .table td,
.card.bg-cyan .bootstrap-datetimepicker-widget .table th,
.card.bg-gradient-cyan .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-cyan .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-cyan .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-cyan .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-cyan .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-cyan .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-cyan .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-gradient-cyan .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-cyan .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-cyan .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-cyan .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-cyan .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #128294;
color: #fff;
}
.card.bg-cyan .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-gradient-cyan .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-cyan .bootstrap-datetimepicker-widget table td.active,
.card.bg-cyan .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-gradient-cyan .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-cyan .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #1fc8e3;
color: #fff;
}
.card-white:not(.card-outline) > .card-header {
background-color: #fff;
}
.card-white:not(.card-outline) > .card-header,
.card-white:not(.card-outline) > .card-header a {
color: #1f2d3d;
}
.card-white:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-white.card-outline {
border-top: 3px solid #fff;
}
.card-white.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-white.card-outline-tabs > .card-header a.active {
border-top: 3px solid #fff;
}
.bg-gradient-white .btn-tool,
.bg-white .btn-tool,
.card-white:not(.card-outline) .btn-tool {
color: rgba(31, 45, 61, 0.8);
}
.bg-gradient-white .btn-tool:hover,
.bg-white .btn-tool:hover,
.card-white:not(.card-outline) .btn-tool:hover {
color: #1f2d3d;
}
.card.bg-gradient-white .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-white .bootstrap-datetimepicker-widget .table th,
.card.bg-white .bootstrap-datetimepicker-widget .table td,
.card.bg-white .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-white .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-white .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-white .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-white .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-white .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-white .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-white .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-white .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-white .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-white .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #ebebeb;
color: #1f2d3d;
}
.card.bg-gradient-white .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-white .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #1f2d3d;
}
.card.bg-gradient-white .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-white .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-white .bootstrap-datetimepicker-widget table td.active,
.card.bg-white .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #fff;
color: #1f2d3d;
}
.card-gray:not(.card-outline) > .card-header {
background-color: #6c757d;
}
.card-gray:not(.card-outline) > .card-header,
.card-gray:not(.card-outline) > .card-header a {
color: #fff;
}
.card-gray:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-gray.card-outline {
border-top: 3px solid #6c757d;
}
.card-gray.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-gray.card-outline-tabs > .card-header a.active {
border-top: 3px solid #6c757d;
}
.bg-gradient-gray .btn-tool,
.bg-gray .btn-tool,
.card-gray:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-gray .btn-tool:hover,
.bg-gray .btn-tool:hover,
.card-gray:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-gray .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-gray .bootstrap-datetimepicker-widget .table th,
.card.bg-gray .bootstrap-datetimepicker-widget .table td,
.card.bg-gray .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-gray .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-gray .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-gray .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-gray .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-gray .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-gray .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gray .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gray .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gray .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gray .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #596167;
color: #fff;
}
.card.bg-gradient-gray .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-gray .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-gray .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-gray .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-gray .bootstrap-datetimepicker-widget table td.active,
.card.bg-gray .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #868e96;
color: #fff;
}
.card-gray-dark:not(.card-outline) > .card-header {
background-color: <?php echo $maincolor;?>;
}
.card-gray-dark:not(.card-outline) > .card-header,
.card-gray-dark:not(.card-outline) > .card-header a {
color: #fff;
}
.card-gray-dark:not(.card-outline) > .card-header a.active {
color: #1f2d3d;
}
.card-gray-dark.card-outline {
border-top: 3px solid <?php echo $maincolor;?>;
}
.card-gray-dark.card-outline-tabs > .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card-gray-dark.card-outline-tabs > .card-header a.active {
border-top: 3px solid <?php echo $maincolor;?>;
}
.bg-gradient-gray-dark .btn-tool,
.bg-gray-dark .btn-tool,
.card-gray-dark:not(.card-outline) .btn-tool {
color: rgba(255, 255, 255, 0.8);
}
.bg-gradient-gray-dark .btn-tool:hover,
.bg-gray-dark .btn-tool:hover,
.card-gray-dark:not(.card-outline) .btn-tool:hover {
color: #fff;
}
.card.bg-gradient-gray-dark .bootstrap-datetimepicker-widget .table td,
.card.bg-gradient-gray-dark .bootstrap-datetimepicker-widget .table th,
.card.bg-gray-dark .bootstrap-datetimepicker-widget .table td,
.card.bg-gray-dark .bootstrap-datetimepicker-widget .table th {
border: none;
}
.card.bg-gradient-gray-dark .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gradient-gray-dark .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gradient-gray-dark .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gradient-gray-dark .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gradient-gray-dark .bootstrap-datetimepicker-widget table thead tr:first-child th:hover,
.card.bg-gray-dark .bootstrap-datetimepicker-widget table td.day:hover,
.card.bg-gray-dark .bootstrap-datetimepicker-widget table td.hour:hover,
.card.bg-gray-dark .bootstrap-datetimepicker-widget table td.minute:hover,
.card.bg-gray-dark .bootstrap-datetimepicker-widget table td.second:hover,
.card.bg-gray-dark .bootstrap-datetimepicker-widget table thead tr:first-child th:hover {
background-color: #222629;
color: #fff;
}
.card.bg-gradient-gray-dark .bootstrap-datetimepicker-widget table td.today::before,
.card.bg-gray-dark .bootstrap-datetimepicker-widget table td.today::before {
border-bottom-color: #fff;
}
.card.bg-gradient-gray-dark .bootstrap-datetimepicker-widget table td.active,
.card.bg-gradient-gray-dark .bootstrap-datetimepicker-widget table td.active:hover,
.card.bg-gray-dark .bootstrap-datetimepicker-widget table td.active,
.card.bg-gray-dark .bootstrap-datetimepicker-widget table td.active:hover {
background-color: #4b545c;
color: #fff;
}
.card {
box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
margin-bottom: 1rem;
}
.card.bg-dark .card-header {
border-color: #383f45;
}
.card.bg-dark,
.card.bg-dark .card-body {
color: #fff;
}
.card.maximized-card {
height: 100% !important;
left: 0;
max-height: 100% !important;
max-width: 100% !important;
position: fixed;
top: 0;
width: 100% !important;
z-index: 1040;
}
.card.maximized-card.was-collapsed .card-body {
display: block !important;
}
.card.maximized-card .card-body {
overflow: auto;
}
.card.maximized-card [data-widget="collapse"] {
display: none;
}
.card.maximized-card .card-footer,
.card.maximized-card .card-header {
border-radius: 0 !important;
}
.card.collapsed-card .card-body,
.card.collapsed-card .card-footer {
display: none;
}
.card .nav.flex-column > li {
border-bottom: 1px solid rgba(0, 0, 0, 0.125);
margin: 0;
}
.card .nav.flex-column > li:last-of-type {
border-bottom: 0;
}
.card.height-control .card-body {
max-height: 300px;
overflow: auto;
}
.card .border-right {
border-right: 1px solid rgba(0, 0, 0, 0.125);
}
.card .border-left {
border-left: 1px solid rgba(0, 0, 0, 0.125);
}
.card.card-tabs:not(.card-outline) > .card-header {
border-bottom: 0;
}
.card.card-tabs:not(.card-outline) > .card-header .nav-item:first-child .nav-link {
border-left-color: transparent;
}
.card.card-tabs.card-outline .nav-item {
border-bottom: 0;
}
.card.card-tabs.card-outline .nav-item:first-child .nav-link {
border-left: 0;
margin-left: 0;
}
.card.card-tabs .card-tools {
margin: 0.3rem 0.5rem;
}
.card.card-tabs:not(.expanding-card).collapsed-card .card-header {
border-bottom: 0;
}
.card.card-tabs:not(.expanding-card).collapsed-card .card-header .nav-tabs {
border-bottom: 0;
}
.card.card-tabs:not(.expanding-card).collapsed-card .card-header .nav-tabs .nav-item {
margin-bottom: 0;
}
.card.card-tabs.expanding-card .card-header .nav-tabs .nav-item {
margin-bottom: -1px;
}
.card.card-outline-tabs {
border-top: 0;
}
.card.card-outline-tabs .card-header .nav-item:first-child .nav-link {
border-left: 0;
margin-left: 0;
}
.card.card-outline-tabs .card-header a {
border-top: 3px solid transparent;
}
.card.card-outline-tabs .card-header a:hover {
border-top: 3px solid #dee2e6;
}
.card.card-outline-tabs .card-header a.active:hover {
margin-top: 0;
}
.card.card-outline-tabs .card-tools {
margin: 0.5rem 0.5rem 0.3rem;
}
.card.card-outline-tabs:not(.expanding-card).collapsed-card .card-header {
border-bottom: 0;
}
.card.card-outline-tabs:not(.expanding-card).collapsed-card .card-header .nav-tabs {
border-bottom: 0;
}
.card.card-outline-tabs:not(.expanding-card).collapsed-card .card-header .nav-tabs .nav-item {
margin-bottom: 0;
}
.card.card-outline-tabs.expanding-card .card-header .nav-tabs .nav-item {
margin-bottom: -1px;
}
html.maximized-card {
overflow: hidden;
}
.card-body::after,
.card-footer::after,
.card-header::after {
display: block;
clear: both;
content: "";
}
.card-header {
background-color: transparent;
border-bottom: 1px solid rgba(0, 0, 0, 0.125);
padding: 0.75rem 1.25rem;
position: relative;
border-top-left-radius: 0.25rem;
border-top-right-radius: 0.25rem;
}
.collapsed-card .card-header {
border-bottom: 0;
}
.card-header > .card-tools {
float: right;
margin-right: -0.625rem;
}
.card-header > .card-tools .input-group,
.card-header > .card-tools .nav,
.card-header > .card-tools .pagination {
margin-bottom: -0.3rem;
margin-top: -0.3rem;
}
.card-header > .card-tools [data-toggle="tooltip"] {
position: relative;
}
.card-title {
float: left;
font-size: 1.1rem;
font-weight: 400;
margin: 0;
}
.card-text {
clear: both;
}
.btn-tool {
background-color: transparent;
color: #adb5bd;
font-size: 0.875rem;
margin: -0.75rem 0;
padding: 0.25rem 0.5rem;
}
.btn-group.show .btn-tool,
.btn-tool:hover {
color: #495057;
}
.btn-tool:focus,
.show .btn-tool {
box-shadow: none !important;
}
.text-sm .card-title {
font-size: 1rem;
}
.text-sm .nav-link {
padding: 0.4rem 0.8rem;
}
.card-body > .table {
margin-bottom: 0;
}
.card-body > .table > thead > tr > td,
.card-body > .table > thead > tr > th {
border-top-width: 0;
}
.card-body .fc {
margin-top: 5px;
}
.card-body .full-width-chart {
margin: -19px;
}
.card-body.p-0 .full-width-chart {
margin: -9px;
}
.chart-legend {
padding-left: 0;
list-style: none;
margin: 10px 0;
}
@media (max-width: 576px) {
.chart-legend > li {
float: left;
margin-right: 10px;
}
}
.card-comments {
background-color: #f8f9fa;
}
.card-comments .card-comment {
border-bottom: 1px solid #e9ecef;
padding: 8px 0;
}
.card-comments .card-comment::after {
display: block;
clear: both;
content: "";
}
.card-comments .card-comment:last-of-type {
border-bottom: 0;
}
.card-comments .card-comment:first-of-type {
padding-top: 0;
}
.card-comments .card-comment img {
height: 1.875rem;
width: 1.875rem;
float: left;
}
.card-comments .comment-text {
color: #78838e;
margin-left: 40px;
}
.card-comments .username {
color: #495057;
display: block;
font-weight: 600;
}
.card-comments .text-muted {
font-size: 12px;
font-weight: 400;
}
.todo-list {
list-style: none;
margin: 0;
overflow: auto;
padding: 0;
}
.todo-list > li {
border-radius: 2px;
background-color: #f8f9fa;
border-left: 2px solid #e9ecef;
color: #495057;
margin-bottom: 2px;
padding: 10px;
}
.todo-list > li:last-of-type {
margin-bottom: 0;
}
.todo-list > li > input[type="checkbox"] {
margin: 0 10px 0 5px;
}
.todo-list > li .text {
display: inline-block;
font-weight: 600;
margin-left: 5px;
}
.todo-list > li .badge {
font-size: 0.7rem;
margin-left: 10px;
}
.todo-list > li .tools {
color: #dc3545;
display: none;
float: right;
}
.todo-list > li .tools > .fa,
.todo-list > li .tools > .fab,
.todo-list > li .tools > .fad,
.todo-list > li .tools > .fal,
.todo-list > li .tools > .far,
.todo-list > li .tools > .fas,
.todo-list > li .tools > .ion,
.todo-list > li .tools > .svg-inline--fa {
cursor: pointer;
margin-right: 5px;
}
.todo-list > li:hover .tools {
display: inline-block;
}
.todo-list > li.done {
color: #697582;
}
.todo-list > li.done .text {
font-weight: 500;
text-decoration: line-through;
}
.todo-list > li.done .badge {
background-color: #adb5bd !important;
}
.todo-list .primary {
border-left-color: <?php echo $accent_color;?>;
}
.todo-list .secondary {
border-left-color: #6c757d;
}
.todo-list .success {
border-left-color: #28a745;
}
.todo-list .info {
border-left-color: #17a2b8;
}
.todo-list .warning {
border-left-color: #ffc107;
}
.todo-list .danger {
border-left-color: #dc3545;
}
.todo-list .light {
border-left-color: #f8f9fa;
}
.todo-list .dark {
border-left-color: <?php echo $maincolor;?>;
}
.todo-list .lightblue {
border-left-color: #3c8dbc;
}
.todo-list .navy {
border-left-color: #001f3f;
}
.todo-list .olive {
border-left-color: #3d9970;
}
.todo-list .lime {
border-left-color: #01ff70;
}
.todo-list .fuchsia {
border-left-color: #f012be;
}
.todo-list .maroon {
border-left-color: #d81b60;
}
.todo-list .blue {
border-left-color: <?php echo $accent_color;?>;
}
.todo-list .indigo {
border-left-color: #6610f2;
}
.todo-list .purple {
border-left-color: #6f42c1;
}
.todo-list .pink {
border-left-color: #e83e8c;
}
.todo-list .red {
border-left-color: #dc3545;
}
.todo-list .orange {
border-left-color: #fd7e14;
}
.todo-list .yellow {
border-left-color: #ffc107;
}
.todo-list .green {
border-left-color: #28a745;
}
.todo-list .teal {
border-left-color: #20c997;
}
.todo-list .cyan {
border-left-color: #17a2b8;
}
.todo-list .white {
border-left-color: #fff;
}
.todo-list .gray {
border-left-color: #6c757d;
}
.todo-list .gray-dark {
border-left-color: <?php echo $maincolor;?>;
}
.todo-list .handle {
cursor: move;
display: inline-block;
margin: 0 5px;
}
.card-input {
max-width: 200px;
}
.card-default .nav-item:first-child .nav-link {
border-left: 0;
}
.dark-mode .card {
background-color: <?php echo $maincolor;?>;
color: #fff;
}
.dark-mode .card .card {
background-color: #3f474e;
color: #fff;
}
.dark-mode .card .nav.flex-column > li {
border-bottom-color: #6c757d;
}
.dark-mode .card .card-footer {
background-color: rgba(0, 0, 0, 0.1);
}
.dark-mode .card.card-outline-tabs .card-header a:hover {
border-color: #6c757d;
}
.dark-mode .card:not(.card-outline) > .card-header a.active {
color: #fff;
}
.dark-mode .card-comments {
background-color: #373d44;
}
.dark-mode .card-comments .username {
color: #ced4da;
}
.dark-mode .card-comments .card-comment {
border-bottom-color: <?php echo $secondarycolor;?>;
}
.dark-mode .todo-list > li {
background-color: #3f474e;
border-color: <?php echo $secondarycolor;?>;
color: #fff;
}
.modal-dialog .overlay {
background-color: #000;
display: block;
height: 100%;
left: 0;
opacity: 0.7;
position: absolute;
top: 0;
width: 100%;
z-index: 1052;
}
.modal-content.bg-warning .modal-footer,
.modal-content.bg-warning .modal-header {
border-color: <?php echo $maincolor;?>;
}
.modal-content.bg-danger .close,
.modal-content.bg-danger .mailbox-attachment-close,
.modal-content.bg-info .close,
.modal-content.bg-info .mailbox-attachment-close,
.modal-content.bg-primary .close,
.modal-content.bg-primary .mailbox-attachment-close,
.modal-content.bg-secondary .close,
.modal-content.bg-secondary .mailbox-attachment-close,
.modal-content.bg-success .close,
.modal-content.bg-success .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.dark-mode .modal-footer,
.dark-mode .modal-header {
border-color: #6c757d;
}
.dark-mode .modal-content {
background-color: <?php echo $maincolor;?>;
}
.dark-mode .modal-content.bg-warning .modal-footer,
.dark-mode .modal-content.bg-warning .modal-header {
border-color: #6c757d;
}
.dark-mode .modal-content.bg-warning .close,
.dark-mode .modal-content.bg-warning .mailbox-attachment-close {
color: <?php echo $maincolor;?> !important;
text-shadow: 0 1px 0 #495057 !important;
}
.dark-mode .modal-content.bg-danger .modal-footer,
.dark-mode .modal-content.bg-danger .modal-header,
.dark-mode .modal-content.bg-info .modal-footer,
.dark-mode .modal-content.bg-info .modal-header,
.dark-mode .modal-content.bg-primary .modal-footer,
.dark-mode .modal-content.bg-primary .modal-header,
.dark-mode .modal-content.bg-secondary .modal-footer,
.dark-mode .modal-content.bg-secondary .modal-header,
.dark-mode .modal-content.bg-success .modal-footer,
.dark-mode .modal-content.bg-success .modal-header {
border-color: #fff;
}
.toasts-top-right {
position: absolute;
right: 0;
top: 0;
z-index: 1040;
}
.toasts-top-right.fixed {
position: fixed;
}
.toasts-top-left {
left: 0;
position: absolute;
top: 0;
z-index: 1040;
}
.toasts-top-left.fixed {
position: fixed;
}
.toasts-bottom-right {
bottom: 0;
position: absolute;
right: 0;
z-index: 1040;
}
.toasts-bottom-right.fixed {
position: fixed;
}
.toasts-bottom-left {
bottom: 0;
left: 0;
position: absolute;
z-index: 1040;
}
.toasts-bottom-left.fixed {
position: fixed;
}
.dark-mode .toast {
background-color: rgba(52, 58, 64, 0.85);
color: #fff;
}
.dark-mode .toast .toast-header {
background-color: rgba(52, 58, 64, 0.7);
color: #f8f9fa;
}
.toast.bg-primary {
background-color: rgba(0, 123, 255, 0.9) !important;
}
.toast.bg-primary .close,
.toast.bg-primary .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-primary .toast-header {
background-color: rgba(0, 123, 255, 0.85);
color: #fff;
}
.toast.bg-secondary {
background-color: rgba(108, 117, 125, 0.9) !important;
}
.toast.bg-secondary .close,
.toast.bg-secondary .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-secondary .toast-header {
background-color: rgba(108, 117, 125, 0.85);
color: #fff;
}
.toast.bg-success {
background-color: rgba(40, 167, 69, 0.9) !important;
}
.toast.bg-success .close,
.toast.bg-success .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-success .toast-header {
background-color: rgba(40, 167, 69, 0.85);
color: #fff;
}
.toast.bg-info {
background-color: rgba(23, 162, 184, 0.9) !important;
}
.toast.bg-info .close,
.toast.bg-info .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-info .toast-header {
background-color: rgba(23, 162, 184, 0.85);
color: #fff;
}
.toast.bg-warning {
background-color: rgba(255, 193, 7, 0.9) !important;
}
.toast.bg-warning .toast-header {
background-color: rgba(255, 193, 7, 0.85);
color: #1f2d3d;
}
.toast.bg-danger {
background-color: rgba(220, 53, 69, 0.9) !important;
}
.toast.bg-danger .close,
.toast.bg-danger .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-danger .toast-header {
background-color: rgba(220, 53, 69, 0.85);
color: #fff;
}
.toast.bg-light {
background-color: rgba(248, 249, 250, 0.9) !important;
}
.toast.bg-light .toast-header {
background-color: rgba(248, 249, 250, 0.85);
color: #1f2d3d;
}
.toast.bg-dark {
background-color: rgba(52, 58, 64, 0.9) !important;
}
.toast.bg-dark .close,
.toast.bg-dark .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-dark .toast-header {
background-color: rgba(52, 58, 64, 0.85);
color: #fff;
}
.toast.bg-lightblue {
background-color: rgba(60, 141, 188, 0.9) !important;
}
.toast.bg-lightblue .close,
.toast.bg-lightblue .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-lightblue .toast-header {
background-color: rgba(60, 141, 188, 0.85);
color: #fff;
}
.toast.bg-navy {
background-color: rgba(0, 31, 63, 0.9) !important;
}
.toast.bg-navy .close,
.toast.bg-navy .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-navy .toast-header {
background-color: rgba(0, 31, 63, 0.85);
color: #fff;
}
.toast.bg-olive {
background-color: rgba(61, 153, 112, 0.9) !important;
}
.toast.bg-olive .close,
.toast.bg-olive .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-olive .toast-header {
background-color: rgba(61, 153, 112, 0.85);
color: #fff;
}
.toast.bg-lime {
background-color: rgba(1, 255, 112, 0.9) !important;
}
.toast.bg-lime .toast-header {
background-color: rgba(1, 255, 112, 0.85);
color: #1f2d3d;
}
.toast.bg-fuchsia {
background-color: rgba(240, 18, 190, 0.9) !important;
}
.toast.bg-fuchsia .close,
.toast.bg-fuchsia .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-fuchsia .toast-header {
background-color: rgba(240, 18, 190, 0.85);
color: #fff;
}
.toast.bg-maroon {
background-color: rgba(216, 27, 96, 0.9) !important;
}
.toast.bg-maroon .close,
.toast.bg-maroon .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-maroon .toast-header {
background-color: rgba(216, 27, 96, 0.85);
color: #fff;
}
.toast.bg-blue {
background-color: rgba(0, 123, 255, 0.9) !important;
}
.toast.bg-blue .close,
.toast.bg-blue .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-blue .toast-header {
background-color: rgba(0, 123, 255, 0.85);
color: #fff;
}
.toast.bg-indigo {
background-color: rgba(102, 16, 242, 0.9) !important;
}
.toast.bg-indigo .close,
.toast.bg-indigo .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-indigo .toast-header {
background-color: rgba(102, 16, 242, 0.85);
color: #fff;
}
.toast.bg-purple {
background-color: rgba(111, 66, 193, 0.9) !important;
}
.toast.bg-purple .close,
.toast.bg-purple .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-purple .toast-header {
background-color: rgba(111, 66, 193, 0.85);
color: #fff;
}
.toast.bg-pink {
background-color: rgba(232, 62, 140, 0.9) !important;
}
.toast.bg-pink .close,
.toast.bg-pink .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-pink .toast-header {
background-color: rgba(232, 62, 140, 0.85);
color: #fff;
}
.toast.bg-red {
background-color: rgba(220, 53, 69, 0.9) !important;
}
.toast.bg-red .close,
.toast.bg-red .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-red .toast-header {
background-color: rgba(220, 53, 69, 0.85);
color: #fff;
}
.toast.bg-orange {
background-color: rgba(253, 126, 20, 0.9) !important;
}
.toast.bg-orange .toast-header {
background-color: rgba(253, 126, 20, 0.85);
color: #1f2d3d;
}
.toast.bg-yellow {
background-color: rgba(255, 193, 7, 0.9) !important;
}
.toast.bg-yellow .toast-header {
background-color: rgba(255, 193, 7, 0.85);
color: #1f2d3d;
}
.toast.bg-green {
background-color: rgba(40, 167, 69, 0.9) !important;
}
.toast.bg-green .close,
.toast.bg-green .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-green .toast-header {
background-color: rgba(40, 167, 69, 0.85);
color: #fff;
}
.toast.bg-teal {
background-color: rgba(32, 201, 151, 0.9) !important;
}
.toast.bg-teal .close,
.toast.bg-teal .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-teal .toast-header {
background-color: rgba(32, 201, 151, 0.85);
color: #fff;
}
.toast.bg-cyan {
background-color: rgba(23, 162, 184, 0.9) !important;
}
.toast.bg-cyan .close,
.toast.bg-cyan .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-cyan .toast-header {
background-color: rgba(23, 162, 184, 0.85);
color: #fff;
}
.toast.bg-white {
background-color: rgba(255, 255, 255, 0.9) !important;
}
.toast.bg-white .toast-header {
background-color: rgba(255, 255, 255, 0.85);
color: #1f2d3d;
}
.toast.bg-gray {
background-color: rgba(108, 117, 125, 0.9) !important;
}
.toast.bg-gray .close,
.toast.bg-gray .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-gray .toast-header {
background-color: rgba(108, 117, 125, 0.85);
color: #fff;
}
.toast.bg-gray-dark {
background-color: rgba(52, 58, 64, 0.9) !important;
}
.toast.bg-gray-dark .close,
.toast.bg-gray-dark .mailbox-attachment-close {
color: #fff;
text-shadow: 0 1px 0 #000;
}
.toast.bg-gray-dark .toast-header {
background-color: rgba(52, 58, 64, 0.85);
color: #fff;
}
.btn.disabled,
.btn:disabled {
cursor: not-allowed;
}
.btn.btn-flat {
border-radius: 0;
border-width: 1px;
box-shadow: none;
}
.btn.btn-file {
overflow: hidden;
position: relative;
}
.btn.btn-file > input[type="file"] {
background-color: #fff;
cursor: inherit;
display: block;
font-size: 100px;
min-height: 100%;
min-width: 100%;
opacity: 0;
outline: 0;
position: absolute;
right: 0;
text-align: right;
top: 0;
}
.text-sm .btn {
font-size: 0.875rem !important;
}
.btn-default {
background-color: #f8f9fa;
border-color: #ddd;
color: #444;
}
.btn-default.hover,
.btn-default:active,
.btn-default:hover {
background-color: #e9ecef;
color: #2b2b2b;
}
.btn-app {
border-radius: 3px;
background-color: #f8f9fa;
border: 1px solid #ddd;
color: #6c757d;
font-size: 12px;
height: 60px;
margin: 0 0 10px 10px;
min-width: 80px;
padding: 15px 5px;
position: relative;
text-align: center;
}
.btn-app > .fa,
.btn-app > .fab,
.btn-app > .fad,
.btn-app > .fal,
.btn-app > .far,
.btn-app > .fas,
.btn-app > .ion,
.btn-app > .svg-inline--fa {
display: block;
font-size: 20px;
}
.btn-app > .svg-inline--fa {
margin: 0 auto;
}
.btn-app:hover {
background-color: #f8f9fa;
border-color: #aaa;
color: #444;
}
.btn-app:active,
.btn-app:focus {
box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-app > .badge {
font-size: 10px;
font-weight: 400;
position: absolute;
right: -10px;
top: -3px;
}
.btn-xs {
padding: 0.125rem 0.25rem;
font-size: 0.75rem;
line-height: 1.5;
border-radius: 0.15rem;
}
.dark-mode .btn-app,
.dark-mode .btn-default {
background-color: #3a4047;
color: #fff;
border-color: #6c757d;
}
.dark-mode .btn-app:focus,
.dark-mode .btn-app:hover,
.dark-mode .btn-default:focus,
.dark-mode .btn-default:hover {
background-color: #3f474e;
color: #dee2e6;
border-color: #727b84;
}
.dark-mode .btn-light {
background-color: <?php echo $secondarycolor;?>;
color: #fff;
border-color: #6c757d;
}
.dark-mode .btn-light:focus,
.dark-mode .btn-light:hover {
background-color: #4b545c;
color: #dee2e6;
border-color: #78828a;
}
.callout {
border-radius: 0.25rem;
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
background-color: #fff;
border-left: 5px solid #e9ecef;
margin-bottom: 1rem;
padding: 1rem;
}
.callout a {
color: #495057;
text-decoration: underline;
}
.callout a:hover {
color: #e9ecef;
}
.callout p:last-child {
margin-bottom: 0;
}
.callout.callout-danger {
border-left-color: #bd2130;
}
.callout.callout-warning {
border-left-color: #d39e00;
}
.callout.callout-info {
border-left-color: #117a8b;
}
.callout.callout-success {
border-left-color: #1e7e34;
}
.dark-mode .callout {
background-color: #3f474e;
}
.alert .icon {
margin-right: 10px;
}
.alert .close,
.alert .mailbox-attachment-close {
color: #000;
opacity: 0.2;
}
.alert .close:hover,
.alert .mailbox-attachment-close:hover {
opacity: 0.5;
}
.alert a {
color: #fff;
text-decoration: underline;
}
.alert-primary {
color: #fff;
background-color: <?php echo $accent_color;?>;
border-color: #006fe6;
}
.alert-default-primary {
color: #004085;
background-color: #cce5ff;
border-color: #b8daff;
}
.alert-default-primary hr {
border-top-color: #9fcdff;
}
.alert-default-primary .alert-link {
color: #002752;
}
.alert-secondary {
color: #fff;
background-color: #6c757d;
border-color: #60686f;
}
.alert-default-secondary {
color: #383d41;
background-color: #e2e3e5;
border-color: #d6d8db;
}
.alert-default-secondary hr {
border-top-color: #c8cbcf;
}
.alert-default-secondary .alert-link {
color: #202326;
}
.alert-success {
color: #fff;
background-color: #28a745;
border-color: #23923d;
}
.alert-default-success {
color: #155724;
background-color: #d4edda;
border-color: #c3e6cb;
}
.alert-default-success hr {
border-top-color: #b1dfbb;
}
.alert-default-success .alert-link {
color: #0b2e13;
}
.alert-info {
color: #fff;
background-color: #17a2b8;
border-color: #148ea1;
}
.alert-default-info {
color: #0c5460;
background-color: #d1ecf1;
border-color: #bee5eb;
}
.alert-default-info hr {
border-top-color: #abdde5;
}
.alert-default-info .alert-link {
color: #062c33;
}
.alert-warning {
color: #1f2d3d;
background-color: #ffc107;
border-color: #edb100;
}
.alert-default-warning {
color: #856404;
background-color: #fff3cd;
border-color: #ffeeba;
}
.alert-default-warning hr {
border-top-color: #ffe8a1;
}
.alert-default-warning .alert-link {
color: #533f03;
}
.alert-danger {
color: #fff;
background-color: #dc3545;
border-color: #d32535;
}
.alert-default-danger {
color: #721c24;
background-color: #f8d7da;
border-color: #f5c6cb;
}
.alert-default-danger hr {
border-top-color: #f1b0b7;
}
.alert-default-danger .alert-link {
color: #491217;
}
.alert-light {
color: #1f2d3d;
background-color: #f8f9fa;
border-color: #e9ecef;
}
.alert-default-light {
color: #818182;
background-color: #fefefe;
border-color: #fdfdfe;
}
.alert-default-light hr {
border-top-color: #ececf6;
}
.alert-default-light .alert-link {
color: #686868;
}
.alert-dark {
color: #fff;
background-color: <?php echo $maincolor;?>;
border-color: #292d32;
}
.alert-default-dark {
color: #1b1e21;
background-color: #d6d8d9;
border-color: #c6c8ca;
}
.alert-default-dark hr {
border-top-color: #b9bbbe;
}
.alert-default-dark .alert-link {
color: #040505;
}
.table:not(.table-dark) {
color: inherit;
}
.table.table-head-fixed thead tr:nth-child(1) th {
background-color: #fff;
border-bottom: 0;
box-shadow: inset 0 1px 0 #dee2e6, inset 0 -1px 0 #dee2e6;
position: -webkit-sticky;
position: sticky;
top: 0;
z-index: 10;
}
.table.table-head-fixed.table-dark thead tr:nth-child(1) th {
background-color: #212529;
box-shadow: inset 0 1px 0 #383f45, inset 0 -1px 0 #383f45;
}
.table.no-border,
.table.no-border td,
.table.no-border th {
border: 0;
}
.table.text-center,
.table.text-center td,
.table.text-center th {
text-align: center;
}
.table.table-valign-middle tbody > tr > td,
.table.table-valign-middle tbody > tr > th,
.table.table-valign-middle thead > tr > td,
.table.table-valign-middle thead > tr > th {
vertical-align: middle;
}
.card-body.p-0 .table tbody > tr > td:first-of-type,
.card-body.p-0 .table tbody > tr > th:first-of-type,
.card-body.p-0 .table tfoot > tr > td:first-of-type,
.card-body.p-0 .table tfoot > tr > th:first-of-type,
.card-body.p-0 .table thead > tr > td:first-of-type,
.card-body.p-0 .table thead > tr > th:first-of-type {
padding-left: 1.5rem;
}
.card-body.p-0 .table tbody > tr > td:last-of-type,
.card-body.p-0 .table tbody > tr > th:last-of-type,
.card-body.p-0 .table tfoot > tr > td:last-of-type,
.card-body.p-0 .table tfoot > tr > th:last-of-type,
.card-body.p-0 .table thead > tr > td:last-of-type,
.card-body.p-0 .table thead > tr > th:last-of-type {
padding-right: 1.5rem;
}
.table-hover tbody tr.expandable-body:hover {
background-color: inherit !important;
}
[data-widget="expandable-table"] {
cursor: pointer;
}
[data-widget="expandable-table"] i {
transition: transform 0.3s linear;
}
[data-widget="expandable-table"][aria-expanded="true"] td > i[class*="right"] {
transform: rotate(90deg);
}
[data-widget="expandable-table"][aria-expanded="true"] td > i[class*="left"] {
transform: rotate(-90deg);
}
.expandable-body > td {
padding: 0 !important;
width: 100%;
}
.expandable-body > td > div,
.expandable-body > td > p {
padding: 0.75rem;
}
.expandable-body .table {
width: calc(100% - 0.75rem);
margin: 0 0 0 0.75rem;
}
.expandable-body .table tr:first-child td,
.expandable-body .table tr:first-child th {
border-top: none;
}
.dark-mode .table-bordered,
.dark-mode .table-bordered td,
.dark-mode .table-bordered th {
border-color: #6c757d;
}
.dark-mode .table-hover tbody tr:hover {
color: #dee2e6;
background-color: #3a4047;
border-color: #6c757d;
}
.dark-mode .table thead th {
border-bottom-color: #6c757d;
}
.dark-mode .table td,
.dark-mode .table th {
border-top-color: #6c757d;
}
.dark-mode .table.table-head-fixed thead tr:nth-child(1) th {
background-color: #3f474e;
}
.carousel-control-prev .carousel-control-custom-icon {
margin-left: -20px;
}
.carousel-control-next .carousel-control-custom-icon {
margin-right: 20px;
}
.carousel-control-custom-icon > .fa,
.carousel-control-custom-icon > .fab,
.carousel-control-custom-icon > .fad,
.carousel-control-custom-icon > .fal,
.carousel-control-custom-icon > .far,
.carousel-control-custom-icon > .fas,
.carousel-control-custom-icon > .ion,
.carousel-control-custom-icon > .svg-inline--fa {
display: inline-block;
font-size: 40px;
margin-top: -20px;
position: absolute;
top: 50%;
z-index: 5;
}
.close,
.mailbox-attachment-close {
float: right;
font-size: 1.5rem;
font-weight: 700;
line-height: 1;
color: #000;
text-shadow: 0 1px 0 #fff;
opacity: 0.5;
}
.close:hover,
.mailbox-attachment-close:hover {
color: #000;
text-decoration: none;
}
.close:not(:disabled):not(.disabled):focus,
.close:not(:disabled):not(.disabled):hover,
.mailbox-attachment-close:not(:disabled):not(.disabled):focus,
.mailbox-attachment-close:not(:disabled):not(.disabled):hover {
opacity: 0.75;
}
.close:focus,
.mailbox-attachment-close:focus {
outline: 0;
}
button.close,
button.mailbox-attachment-close {
padding: 0;
background-color: transparent;
border: 0;
}
a.close.disabled,
a.disabled.mailbox-attachment-close {
pointer-events: none;
}
.small-box {
border-radius: 0.25rem;
box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
display: block;
margin-bottom: 20px;
position: relative;
}
.small-box > .inner {
padding: 10px;
}
.small-box > .small-box-footer {
background-color: rgba(0, 0, 0, 0.1);
color: rgba(255, 255, 255, 0.8);
display: block;
padding: 3px 0;
position: relative;
text-align: center;
text-decoration: none;
z-index: 10;
}
.small-box > .small-box-footer:hover {
background-color: rgba(0, 0, 0, 0.15);
color: #fff;
}
.small-box h3 {
font-size: 2.2rem;
font-weight: 700;
margin: 0 0 10px;
padding: 0;
white-space: nowrap;
}
@media (min-width: 992px) {
.col-lg-2 .small-box h3,
.col-md-2 .small-box h3,
.col-xl-2 .small-box h3 {
font-size: 1.6rem;
}
.col-lg-3 .small-box h3,
.col-md-3 .small-box h3,
.col-xl-3 .small-box h3 {
font-size: 1.6rem;
}
}
@media (min-width: 1200px) {
.col-lg-2 .small-box h3,
.col-md-2 .small-box h3,
.col-xl-2 .small-box h3 {
font-size: 2.2rem;
}
.col-lg-3 .small-box h3,
.col-md-3 .small-box h3,
.col-xl-3 .small-box h3 {
font-size: 2.2rem;
}
}
.small-box p {
font-size: 1rem;
}
.small-box p > small {
color: #f8f9fa;
display: block;
font-size: 0.9rem;
margin-top: 5px;
}
.small-box h3,
.small-box p {
z-index: 5;
}
.small-box .icon {
color: rgba(0, 0, 0, 0.15);
z-index: 0;
}
.small-box .icon > i {
font-size: 90px;
position: absolute;
right: 15px;
top: 15px;
transition: transform 0.3s linear;
}
.small-box .icon > i.fa,
.small-box .icon > i.fab,
.small-box .icon > i.fad,
.small-box .icon > i.fal,
.small-box .icon > i.far,
.small-box .icon > i.fas,
.small-box .icon > i.ion {
font-size: 70px;
top: 20px;
}
.small-box .icon svg {
font-size: 70px;
position: absolute;
right: 15px;
top: 15px;
transition: transform 0.3s linear;
}
.small-box:hover {
text-decoration: none;
}
.small-box:hover .icon > i,
.small-box:hover .icon > i.fa,
.small-box:hover .icon > i.fab,
.small-box:hover .icon > i.fad,
.small-box:hover .icon > i.fal,
.small-box:hover .icon > i.far,
.small-box:hover .icon > i.fas,
.small-box:hover .icon > i.ion {
transform: scale(1.1);
}
.small-box:hover .icon > svg {
transform: scale(1.1);
}
@media (max-width: 767.98px) {
.small-box {
text-align: center;
}
.small-box .icon {
display: none;
}
.small-box p {
font-size: 12px;
}
}
.info-box {
box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
border-radius: 0.25rem;
background-color: #fff;
display: flex;
margin-bottom: 1rem;
min-height: 80px;
padding: 0.5rem;
position: relative;
width: 100%;
}
.info-box .progress {
background-color: rgba(0, 0, 0, 0.125);
height: 2px;
margin: 5px 0;
}
.info-box .progress .progress-bar {
background-color: #fff;
}
.info-box .info-box-icon {
border-radius: 0.25rem;
align-items: center;
display: flex;
font-size: 1.875rem;
justify-content: center;
text-align: center;
width: 70px;
}
.info-box .info-box-icon > img {
max-width: 100%;
}
.info-box .info-box-content {
display: flex;
flex-direction: column;
justify-content: center;
line-height: 1.8;
flex: 1;
padding: 0 10px;
}
.info-box .info-box-number {
display: block;
margin-top: 0.25rem;
font-weight: 700;
}
.info-box .info-box-text,
.info-box .progress-description {
display: block;
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
}
.info-box .info-box .bg-gradient-primary,
.info-box .info-box .bg-primary {
color: #fff;
}
.info-box .info-box .bg-gradient-primary .progress-bar,
.info-box .info-box .bg-primary .progress-bar {
background-color: #fff;
}
.info-box .info-box .bg-gradient-secondary,
.info-box .info-box .bg-secondary {
color: #fff;
}
.info-box .info-box .bg-gradient-secondary .progress-bar,
.info-box .info-box .bg-secondary .progress-bar {
background-color: #fff;
}
.info-box .info-box .bg-gradient-success,
.info-box .info-box .bg-success {
color: #fff;
}
.info-box .info-box .bg-gradient-success .progress-bar,
.info-box .info-box .bg-success .progress-bar {
background-color: #fff;
}
.info-box .info-box .bg-gradient-info,
.info-box .info-box .bg-info {
color: #fff;
}
.info-box .info-box .bg-gradient-info .progress-bar,
.info-box .info-box .bg-info .progress-bar {
background-color: #fff;
}
.info-box .info-box .bg-gradient-warning,
.info-box .info-box .bg-warning {
color: #1f2d3d;
}
.info-box .info-box .bg-gradient-warning .progress-bar,
.info-box .info-box .bg-warning .progress-bar {
background-color: #1f2d3d;
}
.info-box .info-box .bg-danger,
.info-box .info-box .bg-gradient-danger {
color: #fff;
}
.info-box .info-box .bg-danger .progress-bar,
.info-box .info-box .bg-gradient-danger .progress-bar {
background-color: #fff;
}
.info-box .info-box .bg-gradient-light,
.info-box .info-box .bg-light {
color: #1f2d3d;
}
.info-box .info-box .bg-gradient-light .progress-bar,
.info-box .info-box .bg-light .progress-bar {
background-color: #1f2d3d;
}
.info-box .info-box .bg-dark,
.info-box .info-box .bg-gradient-dark {
color: #fff;
}
.info-box .info-box .bg-dark .progress-bar,
.info-box .info-box .bg-gradient-dark .progress-bar {
background-color: #fff;
}
.info-box .info-box-more {
display: block;
}
.info-box .progress-description {
margin: 0;
}
@media (min-width: 768px) {
.col-lg-2 .info-box .progress-description,
.col-md-2 .info-box .progress-description,
.col-xl-2 .info-box .progress-description {
display: none;
}
.col-lg-3 .info-box .progress-description,
.col-md-3 .info-box .progress-description,
.col-xl-3 .info-box .progress-description {
display: none;
}
}
@media (min-width: 992px) {
.col-lg-2 .info-box .progress-description,
.col-md-2 .info-box .progress-description,
.col-xl-2 .info-box .progress-description {
font-size: 0.75rem;
display: block;
}
.col-lg-3 .info-box .progress-description,
.col-md-3 .info-box .progress-description,
.col-xl-3 .info-box .progress-description {
font-size: 0.75rem;
display: block;
}
}
@media (min-width: 1200px) {
.col-lg-2 .info-box .progress-description,
.col-md-2 .info-box .progress-description,
.col-xl-2 .info-box .progress-description {
font-size: 1rem;
display: block;
}
.col-lg-3 .info-box .progress-description,
.col-md-3 .info-box .progress-description,
.col-xl-3 .info-box .progress-description {
font-size: 1rem;
display: block;
}
}
.dark-mode .info-box {
background-color: <?php echo $maincolor;?>;
color: #fff;
}
.timeline {
margin: 0 0 45px;
padding: 0;
position: relative;
}
.timeline::before {
border-radius: 0.25rem;
background-color: #dee2e6;
bottom: 0;
content: "";
left: 31px;
margin: 0;
position: absolute;
top: 0;
width: 4px;
}
.timeline > div {
margin-bottom: 15px;
margin-right: 10px;
position: relative;
}
.timeline > div::after,
.timeline > div::before {
content: "";
display: table;
}
.timeline > div > .timeline-item {
box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
border-radius: 0.25rem;
background-color: #fff;
color: #495057;
margin-left: 60px;
margin-right: 15px;
margin-top: 0;
padding: 0;
position: relative;
}
.timeline > div > .timeline-item > .time {
color: #999;
float: right;
font-size: 12px;
padding: 10px;
}
.timeline > div > .timeline-item > .timeline-header {
border-bottom: 1px solid rgba(0, 0, 0, 0.125);
color: #495057;
font-size: 16px;
line-height: 1.1;
margin: 0;
padding: 10px;
}
.timeline > div > .timeline-item > .timeline-header > a {
font-weight: 600;
}
.timeline > div > .timeline-item > .timeline-body,
.timeline > div > .timeline-item > .timeline-footer {
padding: 10px;
}
.timeline > div > .timeline-item > .timeline-body > img {
margin: 10px;
}
.timeline > div > .timeline-item > .timeline-body ol,
.timeline > div > .timeline-item > .timeline-body ul,
.timeline > div > .timeline-item > .timeline-body > dl {
margin: 0;
}
.timeline > div > .timeline-item > .timeline-footer > a {
color: #fff;
}
.timeline > div > .fa,
.timeline > div > .fab,
.timeline > div > .fad,
.timeline > div > .fal,
.timeline > div > .far,
.timeline > div > .fas,
.timeline > div > .ion,
.timeline > div > .svg-inline--fa {
background-color: #adb5bd;
border-radius: 50%;
font-size: 16px;
height: 30px;
left: 18px;
line-height: 30px;
position: absolute;
text-align: center;
top: 0;
width: 30px;
}
.timeline > div > .svg-inline--fa {
padding: 7px;
}
.timeline > .time-label > span {
border-radius: 4px;
background-color: #fff;
display: inline-block;
font-weight: 600;
padding: 5px;
}
.timeline-inverse > div > .timeline-item {
box-shadow: none;
background-color: #f8f9fa;
border: 1px solid #dee2e6;
}
.timeline-inverse > div > .timeline-item > .timeline-header {
border-bottom-color: #dee2e6;
}
.dark-mode .timeline::before {
background-color: #6c757d;
}
.dark-mode .timeline > div > .timeline-item {
background-color: <?php echo $maincolor;?>;
color: #fff;
border-color: #6c757d;
}
.dark-mode .timeline > div > .timeline-item > .timeline-header {
color: #ced4da;
border-color: #6c757d;
}
.dark-mode .timeline > div > .timeline-item > .time {
color: #ced4da;
}
.products-list {
list-style: none;
margin: 0;
padding: 0;
}
.products-list > .item {
border-radius: 0.25rem;
background-color: #fff;
padding: 10px 0;
}
.products-list > .item::after {
display: block;
clear: both;
content: "";
}
.products-list .product-img {
float: left;
}
.products-list .product-img img {
height: 50px;
width: 50px;
}
.products-list .product-info {
margin-left: 60px;
}
.products-list .product-title {
font-weight: 600;
}
.products-list .product-description {
color: #6c757d;
display: block;
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
}
.product-list-in-card > .item {
border-radius: 0;
border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
.product-list-in-card > .item:last-of-type {
border-bottom-width: 0;
}
.dark-mode .products-list > .item {
background-color: <?php echo $maincolor;?>;
color: #fff;
border-bottom-color: #6c757d;
}
.dark-mode .product-description {
color: #ced4da;
}
.direct-chat .card-body {
overflow-x: hidden;
padding: 0;
position: relative;
}
.direct-chat.chat-pane-open .direct-chat-contacts {
transform: translate(0, 0);
}
.direct-chat.timestamp-light .direct-chat-timestamp {
color: #30465f;
}
.direct-chat.timestamp-dark .direct-chat-timestamp {
color: #ccc;
}
.direct-chat-messages {
transform: translate(0, 0);
height: 250px;
overflow: auto;
padding: 10px;
}
.direct-chat-msg,
.direct-chat-text {
display: block;
}
.direct-chat-msg {
margin-bottom: 10px;
}
.direct-chat-msg::after {
display: block;
clear: both;
content: "";
}
.direct-chat-contacts,
.direct-chat-messages {
transition: transform 0.5s ease-in-out;
}
.direct-chat-text {
border-radius: 0.3rem;
background-color: #d2d6de;
border: 1px solid #d2d6de;
color: #444;
margin: 5px 0 0 50px;
padding: 5px 10px;
position: relative;
}
.direct-chat-text::after,
.direct-chat-text::before {
border: solid transparent;
border-right-color: #d2d6de;
content: " ";
height: 0;
pointer-events: none;
position: absolute;
right: 100%;
top: 15px;
width: 0;
}
.direct-chat-text::after {
border-width: 5px;
margin-top: -5px;
}
.direct-chat-text::before {
border-width: 6px;
margin-top: -6px;
}
.right .direct-chat-text {
margin-left: 0;
margin-right: 50px;
}
.right .direct-chat-text::after,
.right .direct-chat-text::before {
border-left-color: #d2d6de;
border-right-color: transparent;
left: 100%;
right: auto;
}
.direct-chat-img {
border-radius: 50%;
float: left;
height: 40px;
width: 40px;
}
.right .direct-chat-img {
float: right;
}
.direct-chat-infos {
display: block;
font-size: 0.875rem;
margin-bottom: 2px;
}
.direct-chat-name {
font-weight: 600;
}
.direct-chat-timestamp {
color: #697582;
}
.direct-chat-contacts-open .direct-chat-contacts {
transform: translate(0, 0);
}
.direct-chat-contacts {
transform: translate(101%, 0);
background-color: <?php echo $maincolor;?>;
bottom: 0;
color: #fff;
height: 250px;
overflow: auto;
position: absolute;
top: 0;
width: 100%;
}
.direct-chat-contacts-light {
background-color: #f8f9fa;
}
.direct-chat-contacts-light .contacts-list-name {
color: #495057;
}
.direct-chat-contacts-light .contacts-list-date {
color: #6c757d;
}
.direct-chat-contacts-light .contacts-list-msg {
color: #545b62;
}
.contacts-list {
padding-left: 0;
list-style: none;
}
.contacts-list > li {
border-bottom: 1px solid rgba(0, 0, 0, 0.2);
margin: 0;
padding: 10px;
}
.contacts-list > li::after {
display: block;
clear: both;
content: "";
}
.contacts-list > li:last-of-type {
border-bottom: 0;
}
.contacts-list-img {
border-radius: 50%;
float: left;
width: 40px;
}
.contacts-list-info {
color: #fff;
margin-left: 45px;
}
.contacts-list-name,
.contacts-list-status {
display: block;
}
.contacts-list-name {
font-weight: 600;
}
.contacts-list-status {
font-size: 0.875rem;
}
.contacts-list-date {
color: #ced4da;
font-weight: 400;
}
.contacts-list-msg {
color: #b1bbc4;
}
.direct-chat-primary .right > .direct-chat-text {
background-color: <?php echo $accent_color;?>;
border-color: <?php echo $accent_color;?>;
color: #fff;
}
.direct-chat-primary .right > .direct-chat-text::after,
.direct-chat-primary .right > .direct-chat-text::before {
border-left-color: <?php echo $accent_color;?>;
}
.direct-chat-secondary .right > .direct-chat-text {
background-color: #6c757d;
border-color: #6c757d;
color: #fff;
}
.direct-chat-secondary .right > .direct-chat-text::after,
.direct-chat-secondary .right > .direct-chat-text::before {
border-left-color: #6c757d;
}
.direct-chat-success .right > .direct-chat-text {
background-color: #28a745;
border-color: #28a745;
color: #fff;
}
.direct-chat-success .right > .direct-chat-text::after,
.direct-chat-success .right > .direct-chat-text::before {
border-left-color: #28a745;
}
.direct-chat-info .right > .direct-chat-text {
background-color: #17a2b8;
border-color: #17a2b8;
color: #fff;
}
.direct-chat-info .right > .direct-chat-text::after,
.direct-chat-info .right > .direct-chat-text::before {
border-left-color: #17a2b8;
}
.direct-chat-warning .right > .direct-chat-text {
background-color: #ffc107;
border-color: #ffc107;
color: #1f2d3d;
}
.direct-chat-warning .right > .direct-chat-text::after,
.direct-chat-warning .right > .direct-chat-text::before {
border-left-color: #ffc107;
}
.direct-chat-danger .right > .direct-chat-text {
background-color: #dc3545;
border-color: #dc3545;
color: #fff;
}
.direct-chat-danger .right > .direct-chat-text::after,
.direct-chat-danger .right > .direct-chat-text::before {
border-left-color: #dc3545;
}
.direct-chat-light .right > .direct-chat-text {
background-color: #f8f9fa;
border-color: #f8f9fa;
color: #1f2d3d;
}
.direct-chat-light .right > .direct-chat-text::after,
.direct-chat-light .right > .direct-chat-text::before {
border-left-color: #f8f9fa;
}
.direct-chat-dark .right > .direct-chat-text {
background-color: <?php echo $maincolor;?>;
border-color: <?php echo $maincolor;?>;
color: #fff;
}
.direct-chat-dark .right > .direct-chat-text::after,
.direct-chat-dark .right > .direct-chat-text::before {
border-left-color: <?php echo $maincolor;?>;
}
.direct-chat-lightblue .right > .direct-chat-text {
background-color: #3c8dbc;
border-color: #3c8dbc;
color: #fff;
}
.direct-chat-lightblue .right > .direct-chat-text::after,
.direct-chat-lightblue .right > .direct-chat-text::before {
border-left-color: #3c8dbc;
}
.direct-chat-navy .right > .direct-chat-text {
background-color: #001f3f;
border-color: #001f3f;
color: #fff;
}
.direct-chat-navy .right > .direct-chat-text::after,
.direct-chat-navy .right > .direct-chat-text::before {
border-left-color: #001f3f;
}
.direct-chat-olive .right > .direct-chat-text {
background-color: #3d9970;
border-color: #3d9970;
color: #fff;
}
.direct-chat-olive .right > .direct-chat-text::after,
.direct-chat-olive .right > .direct-chat-text::before {
border-left-color: #3d9970;
}
.direct-chat-lime .right > .direct-chat-text {
background-color: #01ff70;
border-color: #01ff70;
color: #1f2d3d;
}
.direct-chat-lime .right > .direct-chat-text::after,
.direct-chat-lime .right > .direct-chat-text::before {
border-left-color: #01ff70;
}
.direct-chat-fuchsia .right > .direct-chat-text {
background-color: #f012be;
border-color: #f012be;
color: #fff;
}
.direct-chat-fuchsia .right > .direct-chat-text::after,
.direct-chat-fuchsia .right > .direct-chat-text::before {
border-left-color: #f012be;
}
.direct-chat-maroon .right > .direct-chat-text {
background-color: #d81b60;
border-color: #d81b60;
color: #fff;
}
.direct-chat-maroon .right > .direct-chat-text::after,
.direct-chat-maroon .right > .direct-chat-text::before {
border-left-color: #d81b60;
}
.direct-chat-blue .right > .direct-chat-text {
background-color: <?php echo $accent_color;?>;
border-color: <?php echo $accent_color;?>;
color: #fff;
}
.direct-chat-blue .right > .direct-chat-text::after,
.direct-chat-blue .right > .direct-chat-text::before {
border-left-color: <?php echo $accent_color;?>;
}
.direct-chat-indigo .right > .direct-chat-text {
background-color: #6610f2;
border-color: #6610f2;
color: #fff;
}
.direct-chat-indigo .right > .direct-chat-text::after,
.direct-chat-indigo .right > .direct-chat-text::before {
border-left-color: #6610f2;
}
.direct-chat-purple .right > .direct-chat-text {
background-color: #6f42c1;
border-color: #6f42c1;
color: #fff;
}
.direct-chat-purple .right > .direct-chat-text::after,
.direct-chat-purple .right > .direct-chat-text::before {
border-left-color: #6f42c1;
}
.direct-chat-pink .right > .direct-chat-text {
background-color: #e83e8c;
border-color: #e83e8c;
color: #fff;
}
.direct-chat-pink .right > .direct-chat-text::after,
.direct-chat-pink .right > .direct-chat-text::before {
border-left-color: #e83e8c;
}
.direct-chat-red .right > .direct-chat-text {
background-color: #dc3545;
border-color: #dc3545;
color: #fff;
}
.direct-chat-red .right > .direct-chat-text::after,
.direct-chat-red .right > .direct-chat-text::before {
border-left-color: #dc3545;
}
.direct-chat-orange .right > .direct-chat-text {
background-color: #fd7e14;
border-color: #fd7e14;
color: #1f2d3d;
}
.direct-chat-orange .right > .direct-chat-text::after,
.direct-chat-orange .right > .direct-chat-text::before {
border-left-color: #fd7e14;
}
.direct-chat-yellow .right > .direct-chat-text {
background-color: #ffc107;
border-color: #ffc107;
color: #1f2d3d;
}
.direct-chat-yellow .right > .direct-chat-text::after,
.direct-chat-yellow .right > .direct-chat-text::before {
border-left-color: #ffc107;
}
.direct-chat-green .right > .direct-chat-text {
background-color: #28a745;
border-color: #28a745;
color: #fff;
}
.direct-chat-green .right > .direct-chat-text::after,
.direct-chat-green .right > .direct-chat-text::before {
border-left-color: #28a745;
}
.direct-chat-teal .right > .direct-chat-text {
background-color: #20c997;
border-color: #20c997;
color: #fff;
}
.direct-chat-teal .right > .direct-chat-text::after,
.direct-chat-teal .right > .direct-chat-text::before {
border-left-color: #20c997;
}
.direct-chat-cyan .right > .direct-chat-text {
background-color: #17a2b8;
border-color: #17a2b8;
color: #fff;
}
.direct-chat-cyan .right > .direct-chat-text::after,
.direct-chat-cyan .right > .direct-chat-text::before {
border-left-color: #17a2b8;
}
.direct-chat-white .right > .direct-chat-text {
background-color: #fff;
border-color: #fff;
color: #1f2d3d;
}
.direct-chat-white .right > .direct-chat-text::after,
.direct-chat-white .right > .direct-chat-text::before {
border-left-color: #fff;
}
.direct-chat-gray .right > .direct-chat-text {
background-color: #6c757d;
border-color: #6c757d;
color: #fff;
}
.direct-chat-gray .right > .direct-chat-text::after,
.direct-chat-gray .right > .direct-chat-text::before {
border-left-color: #6c757d;
}
.direct-chat-gray-dark .right > .direct-chat-text {
background-color: <?php echo $maincolor;?>;
border-color: <?php echo $maincolor;?>;
color: #fff;
}
.direct-chat-gray-dark .right > .direct-chat-text::after,
.direct-chat-gray-dark .right > .direct-chat-text::before {
border-left-color: <?php echo $maincolor;?>;
}
.dark-mode .direct-chat-text {
background-color: <?php echo $secondarycolor;?>;
border-color: #4b545c;
color: #fff;
}
.dark-mode .direct-chat-text::after,
.dark-mode .direct-chat-text::before {
border-right-color: #4b545c;
}
.dark-mode .direct-chat-timestamp {
color: #adb5bd;
}
.dark-mode .right > .direct-chat-text::after,
.dark-mode .right > .direct-chat-text::before {
border-right-color: transparent;
}
.users-list {
padding-left: 0;
list-style: none;
}
.users-list > li {
float: left;
padding: 10px;
text-align: center;
width: 25%;
}
.users-list > li img {
border-radius: 50%;
height: auto;
max-width: 100%;
}
.users-list > li > a:hover,
.users-list > li > a:hover .users-list-name {
color: #999;
}
.users-list-date,
.users-list-name {
display: block;
}
.users-list-name {
color: #495057;
font-size: 0.875rem;
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
}
.users-list-date {
color: #748290;
font-size: 12px;
}
.dark-mode .users-list-name {
color: #ced4da;
}
.dark-mode .users-list-date {
color: #adb5bd;
}
.card-widget {
border: 0;
position: relative;
}
.widget-user .widget-user-header {
border-top-left-radius: 0.25rem;
border-top-right-radius: 0.25rem;
height: 135px;
padding: 1rem;
text-align: center;
}
.widget-user .widget-user-username {
font-size: 25px;
font-weight: 300;
margin-bottom: 0;
margin-top: 0;
text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
}
.widget-user .widget-user-desc {
margin-top: 0;
}
.widget-user .widget-user-image {
left: 50%;
margin-left: -45px;
position: absolute;
top: 80px;
}
.widget-user .widget-user-image > img {
border: 3px solid #fff;
height: auto;
width: 90px;
}
.widget-user .card-footer {
padding-top: 50px;
}
.widget-user-2 .widget-user-header {
border-top-left-radius: 0.25rem;
border-top-right-radius: 0.25rem;
padding: 1rem;
}
.widget-user-2 .widget-user-username {
font-size: 25px;
font-weight: 300;
margin-bottom: 5px;
margin-top: 5px;
}
.widget-user-2 .widget-user-desc {
margin-top: 0;
}
.widget-user-2 .widget-user-desc,
.widget-user-2 .widget-user-username {
margin-left: 75px;
}
.widget-user-2 .widget-user-image > img {
float: left;
height: auto;
width: 65px;
}
.mailbox-messages > .table {
margin: 0;
}
.mailbox-controls {
padding: 5px;
}
.mailbox-controls.with-border {
border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
.mailbox-read-info {
border-bottom: 1px solid rgba(0, 0, 0, 0.125);
padding: 10px;
}
.mailbox-read-info h3 {
font-size: 20px;
margin: 0;
}
.mailbox-read-info h5 {
margin: 0;
padding: 5px 0 0;
}
.mailbox-read-time {
color: #999;
font-size: 13px;
}
.mailbox-read-message {
padding: 10px;
}
.mailbox-attachments {
padding-left: 0;
list-style: none;
}
.mailbox-attachments li {
border: 1px solid #eee;
float: left;
margin-bottom: 10px;
margin-right: 10px;
width: 200px;
}
.mailbox-attachment-name {
color: #666;
font-weight: 700;
}
.mailbox-attachment-icon,
.mailbox-attachment-info,
.mailbox-attachment-size {
display: block;
}
.mailbox-attachment-info {
background-color: #f8f9fa;
padding: 10px;
}
.mailbox-attachment-size {
color: #999;
font-size: 12px;
}
.mailbox-attachment-size > span {
display: inline-block;
padding-top: 0.75rem;
}
.mailbox-attachment-icon {
color: #666;
font-size: 65px;
max-height: 132.5px;
padding: 20px 10px;
text-align: center;
}
.mailbox-attachment-icon.has-img {
padding: 0;
}
.mailbox-attachment-icon.has-img > img {
height: auto;
max-width: 100%;
}
.lockscreen {
background-color: #e9ecef;
}
.lockscreen .lockscreen-name {
font-weight: 600;
text-align: center;
}
.lockscreen-logo {
font-size: 35px;
font-weight: 300;
margin-bottom: 25px;
text-align: center;
}
.lockscreen-logo a {
color: #495057;
}
.lockscreen-wrapper {
margin: 0 auto;
margin-top: 10%;
max-width: 400px;
}
.lockscreen-item {
border-radius: 4px;
background-color: #fff;
margin: 10px auto 30px;
padding: 0;
position: relative;
width: 290px;
}
.lockscreen-image {
border-radius: 50%;
background-color: #fff;
left: -10px;
padding: 5px;
position: absolute;
top: -25px;
z-index: 10;
}
.lockscreen-image > img {
border-radius: 50%;
height: 70px;
width: 70px;
}
.lockscreen-credentials {
margin-left: 70px;
}
.lockscreen-credentials .form-control {
border: 0;
}
.lockscreen-credentials .btn {
background-color: #fff;
border: 0;
padding: 0 10px;
}
.lockscreen-footer {
margin-top: 10px;
}
.dark-mode .lockscreen-item {
background-color: <?php echo $maincolor;?>;
}
.dark-mode .lockscreen-logo a {
color: #fff;
}
.dark-mode .lockscreen-credentials .btn {
background-color: <?php echo $maincolor;?>;
}
.dark-mode .lockscreen-image {
background-color: #6c757d;
}
.login-logo,
.register-logo {
font-size: 2.1rem;
font-weight: 300;
margin-bottom: 0.9rem;
text-align: center;
}
.login-logo a,
.register-logo a {
color: #495057;
}
.login-page,
.register-page {
align-items: center;
background-color: #e9ecef;
display: flex;
flex-direction: column;
height: 100vh;
justify-content: center;
}
.login-box,
.register-box {
width: 360px;
}
@media (max-width: 576px) {
.login-box,
.register-box {
margin-top: 0.5rem;
width: 90%;
}
}
.login-box .card,
.register-box .card {
margin-bottom: 0;
}
.login-card-body,
.register-card-body {
background-color: #fff;
border-top: 0;
color: #666;
padding: 20px;
}
.login-card-body .input-group .form-control,
.register-card-body .input-group .form-control {
border-right: 0;
}
.login-card-body .input-group .form-control:focus,
.register-card-body .input-group .form-control:focus {
box-shadow: none;
}
.login-card-body .input-group .form-control:focus ~ .input-group-append .input-group-text,
.login-card-body .input-group .form-control:focus ~ .input-group-prepend .input-group-text,
.register-card-body .input-group .form-control:focus ~ .input-group-append .input-group-text,
.register-card-body .input-group .form-control:focus ~ .input-group-prepend .input-group-text {
border-color: #80bdff;
}
.login-card-body .input-group .form-control.is-valid:focus,
.register-card-body .input-group .form-control.is-valid:focus {
box-shadow: none;
}
.login-card-body .input-group .form-control.is-valid ~ .input-group-append .input-group-text,
.login-card-body .input-group .form-control.is-valid ~ .input-group-prepend .input-group-text,
.register-card-body .input-group .form-control.is-valid ~ .input-group-append .input-group-text,
.register-card-body .input-group .form-control.is-valid ~ .input-group-prepend .input-group-text {
border-color: #28a745;
}
.login-card-body .input-group .form-control.is-invalid:focus,
.register-card-body .input-group .form-control.is-invalid:focus {
box-shadow: none;
}
.login-card-body .input-group .form-control.is-invalid ~ .input-group-append .input-group-text,
.register-card-body .input-group .form-control.is-invalid ~ .input-group-append .input-group-text {
border-color: #dc3545;
}
.login-card-body .input-group .input-group-text,
.register-card-body .input-group .input-group-text {
background-color: transparent;
border-bottom-right-radius: 0.25rem;
border-left: 0;
border-top-right-radius: 0.25rem;
color: #777;
transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.login-box-msg,
.register-box-msg {
margin: 0;
padding: 0 20px 20px;
text-align: center;
}
.social-auth-links {
margin: 10px 0;
}
.dark-mode .login-card-body,
.dark-mode .register-card-body {
background-color: <?php echo $maincolor;?>;
border-color: #6c757d;
color: #fff;
}
.dark-mode .login-logo a,
.dark-mode .register-logo a {
color: #fff;
}
.error-page {
margin: 20px auto 0;
width: 600px;
}
@media (max-width: 767.98px) {
.error-page {
width: 100%;
}
}
.error-page > .headline {
float: left;
font-size: 100px;
font-weight: 300;
}
@media (max-width: 767.98px) {
.error-page > .headline {
float: none;
text-align: center;
}
}
.error-page > .error-content {
display: block;
margin-left: 190px;
}
@media (max-width: 767.98px) {
.error-page > .error-content {
margin-left: 0;
}
}
.error-page > .error-content > h3 {
font-size: 25px;
font-weight: 300;
}
@media (max-width: 767.98px) {
.error-page > .error-content > h3 {
text-align: center;
}
}
.invoice {
background-color: #fff;
border: 1px solid rgba(0, 0, 0, 0.125);
position: relative;
}
.invoice-title {
margin-top: 0;
}
.dark-mode .invoice {
background-color: <?php echo $maincolor;?>;
}
.profile-user-img {
border: 3px solid #adb5bd;
margin: 0 auto;
padding: 3px;
width: 100px;
}
.profile-username {
font-size: 21px;
margin-top: 5px;
}
.post {
border-bottom: 1px solid #adb5bd;
color: #666;
margin-bottom: 15px;
padding-bottom: 15px;
}
.post:last-of-type {
border-bottom: 0;
margin-bottom: 0;
padding-bottom: 0;
}
.post .user-block {
margin-bottom: 15px;
width: 100%;
}
.post .row {
width: 100%;
}
.dark-mode .post {
color: #fff;
border-color: #6c757d;
}
.product-image {
max-width: 100%;
height: auto;
width: 100%;
}
.product-image-thumbs {
align-items: stretch;
display: flex;
margin-top: 2rem;
}
.product-image-thumb {
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
border-radius: 0.25rem;
background-color: #fff;
border: 1px solid #dee2e6;
display: flex;
margin-right: 1rem;
max-width: 7rem;
padding: 0.5rem;
}
.product-image-thumb img {
max-width: 100%;
height: auto;
align-self: center;
}
.product-image-thumb:hover {
opacity: 0.5;
}
.product-share a {
margin-right: 0.5rem;
}
.projects td {
vertical-align: middle;
}
.projects .list-inline {
margin-bottom: 0;
}
.projects .table-avatar img,
.projects img.table-avatar {
border-radius: 50%;
display: inline;
width: 2.5rem;
}
.projects .project-state {
text-align: center;
}
body.iframe-mode .main-sidebar {
display: none;
}
body.iframe-mode .content-wrapper {
margin-left: 0 !important;
margin-top: 0 !important;
padding-bottom: 0 !important;
}
body.iframe-mode .main-footer,
body.iframe-mode .main-header {
display: none;
}
body.iframe-mode-fullscreen {
overflow: hidden;
}
.content-wrapper {
height: 100%;
}
.content-wrapper.iframe-mode .navbar-nav {
overflow-y: auto;
width: 100%;
}
.content-wrapper.iframe-mode .navbar-nav .nav-link {
white-space: nowrap;
}
.content-wrapper.iframe-mode .tab-content {
position: relative;
}
.content-wrapper.iframe-mode .tab-empty {
width: 100%;
display: flex;
justify-content: center;
align-items: center;
}
.content-wrapper.iframe-mode .tab-loading {
position: absolute;
top: 0;
left: 0;
width: 100%;
display: none;
background-color: #f4f6f9;
}
.content-wrapper.iframe-mode .tab-loading > div {
display: flex;
justify-content: center;
align-items: center;
width: 100%;
height: 100%;
}
.content-wrapper.iframe-mode iframe {
border: 0;
width: 100%;
height: 100%;
}
.content-wrapper.iframe-mode iframe .content-wrapper {
padding-bottom: 0 !important;
}
body.iframe-mode-fullscreen .content-wrapper.iframe-mode {
position: absolute;
left: 0;
top: 0;
right: 0;
bottom: 0;
margin-left: 0 !important;
height: 100%;
min-height: 100%;
z-index: 1048;
}
.content-wrapper.kanban {
height: 1px;
}
.content-wrapper.kanban .content {
height: 100%;
overflow-x: auto;
overflow-y: hidden;
}
.content-wrapper.kanban .content .container,
.content-wrapper.kanban .content .container-fluid,
.content-wrapper.kanban .content .container-lg,
.content-wrapper.kanban .content .container-md,
.content-wrapper.kanban .content .container-sm,
.content-wrapper.kanban .content .container-xl {
width: -webkit-max-content;
width: -moz-max-content;
width: max-content;
display: flex;
align-items: stretch;
}
.content-wrapper.kanban .content-header + .content {
height: calc(100% - ((2 * 15px) + (1.8rem * 1.2)));
}
.content-wrapper.kanban .card .card-body {
padding: 0.5rem;
}
.content-wrapper.kanban .card.card-row {
width: 340px;
display: inline-block;
margin: 0 0.5rem;
}
.content-wrapper.kanban .card.card-row:first-child {
margin-left: 0;
}
.content-wrapper.kanban .card.card-row .card-body {
height: 100%;
overflow-y: auto;
}
.content-wrapper.kanban .card.card-row .card .card-header {
padding: 0.5rem 0.75rem;
}
.content-wrapper.kanban .card.card-row .card .card-body {
padding: 0.75rem;
}
.content-wrapper.kanban .btn-tool.btn-link {
text-decoration: underline;
padding-left: 0;
padding-right: 0;
}
.fc-button {
background: #f8f9fa;
background-image: none;
border-bottom-color: #ddd;
border-color: #ddd;
color: #495057;
}
.fc-button.hover,
.fc-button:active,
.fc-button:hover {
background-color: #e9e9e9;
}
.fc-header-title h2 {
color: #666;
font-size: 15px;
line-height: 1.6em;
margin-left: 10px;
}
.fc-header-right {
padding-right: 10px;
}
.fc-header-left {
padding-left: 10px;
}
.fc-widget-header {
background: #fafafa;
}
.fc-grid {
border: 0;
width: 100%;
}
.fc-widget-content:first-of-type,
.fc-widget-header:first-of-type {
border-left: 0;
border-right: 0;
}
.fc-widget-content:last-of-type,
.fc-widget-header:last-of-type {
border-right: 0;
}
.fc-toolbar,
.fc-toolbar.fc-header-toolbar {
margin: 0;
padding: 1rem;
}
@media (max-width: 575.98px) {
.fc-toolbar {
flex-direction: column;
}
.fc-toolbar .fc-left {
order: 1;
margin-bottom: 0.5rem;
}
.fc-toolbar .fc-center {
order: 0;
margin-bottom: 0.375rem;
}
.fc-toolbar .fc-right {
order: 2;
}
}
.fc-day-number {
font-size: 20px;
font-weight: 300;
padding-right: 10px;
}
.fc-color-picker {
list-style: none;
margin: 0;
padding: 0;
}
.fc-color-picker > li {
float: left;
font-size: 30px;
line-height: 30px;
margin-right: 5px;
}
.fc-color-picker > li .fa,
.fc-color-picker > li .fab,
.fc-color-picker > li .fad,
.fc-color-picker > li .fal,
.fc-color-picker > li .far,
.fc-color-picker > li .fas,
.fc-color-picker > li .ion,
.fc-color-picker > li .svg-inline--fa {
transition: transform linear 0.3s;
}
.fc-color-picker > li .fa:hover,
.fc-color-picker > li .fab:hover,
.fc-color-picker > li .fad:hover,
.fc-color-picker > li .fal:hover,
.fc-color-picker > li .far:hover,
.fc-color-picker > li .fas:hover,
.fc-color-picker > li .ion:hover,
.fc-color-picker > li .svg-inline--fa:hover {
transform: rotate(30deg);
}
#add-new-event {
transition: all linear 0.3s;
}
.external-event {
box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
border-radius: 0.25rem;
cursor: move;
font-weight: 700;
margin-bottom: 4px;
padding: 5px 10px;
}
.external-event:hover {
box-shadow: inset 0 0 90px rgba(0, 0, 0, 0.2);
}
.select2-container--default .select2-selection--single {
border: 1px solid #ced4da;
padding: 0.46875rem 0.75rem;
height: calc(2.25rem + 2px);
}
.select2-container--default.select2-container--open .select2-selection--single {
border-color: #80bdff;
}
.select2-container--default .select2-dropdown {
border: 1px solid #ced4da;
}
.select2-container--default .select2-results__option {
padding: 6px 12px;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
padding-left: 0;
height: auto;
margin-top: -3px;
}
.select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__rendered {
padding-right: 6px;
padding-left: 20px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
height: 31px;
right: 6px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
margin-top: 0;
}
.select2-container--default .select2-dropdown .select2-search__field,
.select2-container--default .select2-search--inline .select2-search__field {
border: 1px solid #ced4da;
}
.select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-search--inline .select2-search__field:focus {
outline: 0;
border: 1px solid #80bdff;
}
.select2-container--default .select2-dropdown.select2-dropdown--below {
border-top: 0;
}
.select2-container--default .select2-dropdown.select2-dropdown--above {
border-bottom: 0;
}
.select2-container--default .select2-results__option[aria-disabled="true"] {
color: #6c757d;
}
.select2-container--default .select2-results__option[aria-selected="true"] {
background-color: #dee2e6;
}
.select2-container--default .select2-results__option[aria-selected="true"],
.select2-container--default .select2-results__option[aria-selected="true"]:hover {
color: #1f2d3d;
}
.select2-container--default .select2-results__option--highlighted {
background-color: <?php echo $accent_color;?>;
color: #fff;
}
.select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #0074f0;
color: #fff;
}
.select2-container--default .select2-selection--multiple {
border: 1px solid #ced4da;
min-height: calc(2.25rem + 2px);
}
.select2-container--default .select2-selection--multiple:focus {
border-color: #80bdff;
}
.select2-container--default .select2-selection--multiple .select2-selection__rendered {
padding: 0 0.375rem 0.375rem;
margin-bottom: -0.375rem;
}
.select2-container--default .select2-selection--multiple .select2-selection__rendered li:first-child.select2-search.select2-search--inline {
width: 100%;
margin-left: 0.375rem;
}
.select2-container--default .select2-selection--multiple .select2-selection__rendered li:first-child.select2-search.select2-search--inline .select2-search__field {
width: 100% !important;
}
.select2-container--default .select2-selection--multiple .select2-selection__rendered .select2-search.select2-search--inline .select2-search__field {
border: 0;
margin-top: 6px;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: <?php echo $accent_color;?>;
border-color: #006fe6;
color: #fff;
padding: 0 10px;
margin-top: 0.31rem;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
float: right;
margin-left: 5px;
margin-right: -2px;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-selection--multiple.text-sm .select2-search.select2-search--inline .select2-search__field,
.text-sm .select2-container--default .select2-selection--multiple .select2-search.select2-search--inline .select2-search__field {
margin-top: 8px;
}
.select2-container--default .select2-selection--multiple.text-sm .select2-selection__choice,
.text-sm .select2-container--default .select2-selection--multiple .select2-selection__choice {
margin-top: 0.4rem;
}
.select2-container--default.select2-container--focus .select2-selection--multiple,
.select2-container--default.select2-container--focus .select2-selection--single {
border-color: #80bdff;
}
.select2-container--default.select2-container--focus .select2-search__field {
border: 0;
}
.select2-container--default .select2-selection--single .select2-selection__rendered li {
padding-right: 10px;
}
.input-group-prepend ~ .select2-container--default .select2-selection {
border-bottom-left-radius: 0;
border-top-left-radius: 0;
}
.input-group > .select2-container--default:not(:last-child) .select2-selection {
border-bottom-right-radius: 0;
border-top-right-radius: 0;
}
.select2-container--bootstrap4.select2-container--focus .select2-selection {
box-shadow: none;
}
select.form-control-sm ~ .select2-container--default {
font-size: 0.875rem;
}
.text-sm .select2-container--default .select2-selection--single,
select.form-control-sm ~ .select2-container--default .select2-selection--single {
height: calc(1.8125rem + 2px);
}
.text-sm .select2-container--default .select2-selection--single .select2-selection__rendered,
select.form-control-sm ~ .select2-container--default .select2-selection--single .select2-selection__rendered {
margin-top: -0.4rem;
}
.text-sm .select2-container--default .select2-selection--single .select2-selection__arrow,
select.form-control-sm ~ .select2-container--default .select2-selection--single .select2-selection__arrow {
top: -0.12rem;
}
.text-sm .select2-container--default .select2-selection--multiple,
select.form-control-sm ~ .select2-container--default .select2-selection--multiple {
min-height: calc(1.8125rem + 2px);
}
.text-sm .select2-container--default .select2-selection--multiple .select2-selection__rendered,
select.form-control-sm ~ .select2-container--default .select2-selection--multiple .select2-selection__rendered {
padding: 0 0.25rem 0.25rem;
margin-top: -0.1rem;
}
.text-sm .select2-container--default .select2-selection--multiple .select2-selection__rendered li:first-child.select2-search.select2-search--inline,
select.form-control-sm ~ .select2-container--default .select2-selection--multiple .select2-selection__rendered li:first-child.select2-search.select2-search--inline {
margin-left: 0.25rem;
}
.text-sm .select2-container--default .select2-selection--multiple .select2-selection__rendered .select2-search.select2-search--inline .select2-search__field,
select.form-control-sm ~ .select2-container--default .select2-selection--multiple .select2-selection__rendered .select2-search.select2-search--inline .select2-search__field {
margin-top: 6px;
}
.maximized-card .select2-dropdown {
z-index: 9999;
}
.select2-primary + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #80bdff;
}
.select2-primary + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #80bdff;
}
.select2-container--default .select2-primary .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-primary .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-primary.select2-dropdown .select2-search__field:focus,
.select2-primary .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-primary .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-primary .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #80bdff;
}
.select2-container--default .select2-primary .select2-results__option--highlighted,
.select2-primary .select2-container--default .select2-results__option--highlighted {
background-color: <?php echo $accent_color;?>;
color: #fff;
}
.select2-container--default .select2-primary .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-primary .select2-results__option--highlighted[aria-selected]:hover,
.select2-primary .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-primary .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #0074f0;
color: #fff;
}
.select2-container--default .select2-primary .select2-selection--multiple:focus,
.select2-primary .select2-container--default .select2-selection--multiple:focus {
border-color: #80bdff;
}
.select2-container--default .select2-primary .select2-selection--multiple .select2-selection__choice,
.select2-primary .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: <?php echo $accent_color;?>;
border-color: #006fe6;
color: #fff;
}
.select2-container--default .select2-primary .select2-selection--multiple .select2-selection__choice__remove,
.select2-primary .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-primary .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-primary .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-primary.select2-container--focus .select2-selection--multiple,
.select2-primary .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #80bdff;
}
.select2-secondary + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #afb5ba;
}
.select2-secondary + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #afb5ba;
}
.select2-container--default .select2-secondary .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-secondary .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-secondary.select2-dropdown .select2-search__field:focus,
.select2-secondary .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-secondary .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-secondary .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #afb5ba;
}
.select2-container--default .select2-secondary .select2-results__option--highlighted,
.select2-secondary .select2-container--default .select2-results__option--highlighted {
background-color: #6c757d;
color: #fff;
}
.select2-container--default .select2-secondary .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-secondary .select2-results__option--highlighted[aria-selected]:hover,
.select2-secondary .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-secondary .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #656d75;
color: #fff;
}
.select2-container--default .select2-secondary .select2-selection--multiple:focus,
.select2-secondary .select2-container--default .select2-selection--multiple:focus {
border-color: #afb5ba;
}
.select2-container--default .select2-secondary .select2-selection--multiple .select2-selection__choice,
.select2-secondary .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #6c757d;
border-color: #60686f;
color: #fff;
}
.select2-container--default .select2-secondary .select2-selection--multiple .select2-selection__choice__remove,
.select2-secondary .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-secondary .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-secondary .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-secondary.select2-container--focus .select2-selection--multiple,
.select2-secondary .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #afb5ba;
}
.select2-success + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #71dd8a;
}
.select2-success + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #71dd8a;
}
.select2-container--default .select2-success .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-success .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-success.select2-dropdown .select2-search__field:focus,
.select2-success .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-success .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-success .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #71dd8a;
}
.select2-container--default .select2-success .select2-results__option--highlighted,
.select2-success .select2-container--default .select2-results__option--highlighted {
background-color: #28a745;
color: #fff;
}
.select2-container--default .select2-success .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-success .select2-results__option--highlighted[aria-selected]:hover,
.select2-success .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-success .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #259b40;
color: #fff;
}
.select2-container--default .select2-success .select2-selection--multiple:focus,
.select2-success .select2-container--default .select2-selection--multiple:focus {
border-color: #71dd8a;
}
.select2-container--default .select2-success .select2-selection--multiple .select2-selection__choice,
.select2-success .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #28a745;
border-color: #23923d;
color: #fff;
}
.select2-container--default .select2-success .select2-selection--multiple .select2-selection__choice__remove,
.select2-success .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-success .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-success .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-success.select2-container--focus .select2-selection--multiple,
.select2-success .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #71dd8a;
}
.select2-info + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #63d9ec;
}
.select2-info + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #63d9ec;
}
.select2-container--default .select2-info .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-info .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-info.select2-dropdown .select2-search__field:focus,
.select2-info .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-info .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-info .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #63d9ec;
}
.select2-container--default .select2-info .select2-results__option--highlighted,
.select2-info .select2-container--default .select2-results__option--highlighted {
background-color: #17a2b8;
color: #fff;
}
.select2-container--default .select2-info .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-info .select2-results__option--highlighted[aria-selected]:hover,
.select2-info .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-info .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #1596aa;
color: #fff;
}
.select2-container--default .select2-info .select2-selection--multiple:focus,
.select2-info .select2-container--default .select2-selection--multiple:focus {
border-color: #63d9ec;
}
.select2-container--default .select2-info .select2-selection--multiple .select2-selection__choice,
.select2-info .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #17a2b8;
border-color: #148ea1;
color: #fff;
}
.select2-container--default .select2-info .select2-selection--multiple .select2-selection__choice__remove,
.select2-info .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-info .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-info .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-info.select2-container--focus .select2-selection--multiple,
.select2-info .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #63d9ec;
}
.select2-warning + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #ffe187;
}
.select2-warning + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #ffe187;
}
.select2-container--default .select2-warning .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-warning .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-warning.select2-dropdown .select2-search__field:focus,
.select2-warning .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-warning .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-warning .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #ffe187;
}
.select2-container--default .select2-warning .select2-results__option--highlighted,
.select2-warning .select2-container--default .select2-results__option--highlighted {
background-color: #ffc107;
color: #1f2d3d;
}
.select2-container--default .select2-warning .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-warning .select2-results__option--highlighted[aria-selected]:hover,
.select2-warning .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-warning .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #f7b900;
color: #1f2d3d;
}
.select2-container--default .select2-warning .select2-selection--multiple:focus,
.select2-warning .select2-container--default .select2-selection--multiple:focus {
border-color: #ffe187;
}
.select2-container--default .select2-warning .select2-selection--multiple .select2-selection__choice,
.select2-warning .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #ffc107;
border-color: #edb100;
color: #1f2d3d;
}
.select2-container--default .select2-warning .select2-selection--multiple .select2-selection__choice__remove,
.select2-warning .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(31, 45, 61, 0.7);
}
.select2-container--default .select2-warning .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-warning .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #1f2d3d;
}
.select2-container--default .select2-warning.select2-container--focus .select2-selection--multiple,
.select2-warning .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #ffe187;
}
.select2-danger + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #efa2a9;
}
.select2-danger + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #efa2a9;
}
.select2-container--default .select2-danger .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-danger .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-danger.select2-dropdown .select2-search__field:focus,
.select2-danger .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-danger .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-danger .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #efa2a9;
}
.select2-container--default .select2-danger .select2-results__option--highlighted,
.select2-danger .select2-container--default .select2-results__option--highlighted {
background-color: #dc3545;
color: #fff;
}
.select2-container--default .select2-danger .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-danger .select2-results__option--highlighted[aria-selected]:hover,
.select2-danger .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-danger .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #da2839;
color: #fff;
}
.select2-container--default .select2-danger .select2-selection--multiple:focus,
.select2-danger .select2-container--default .select2-selection--multiple:focus {
border-color: #efa2a9;
}
.select2-container--default .select2-danger .select2-selection--multiple .select2-selection__choice,
.select2-danger .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #dc3545;
border-color: #d32535;
color: #fff;
}
.select2-container--default .select2-danger .select2-selection--multiple .select2-selection__choice__remove,
.select2-danger .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-danger .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-danger .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-danger.select2-container--focus .select2-selection--multiple,
.select2-danger .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #efa2a9;
}
.select2-light + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #fff;
}
.select2-light + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #fff;
}
.select2-container--default .select2-light .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-light .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-light.select2-dropdown .select2-search__field:focus,
.select2-light .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-light .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-light .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #fff;
}
.select2-container--default .select2-light .select2-results__option--highlighted,
.select2-light .select2-container--default .select2-results__option--highlighted {
background-color: #f8f9fa;
color: #1f2d3d;
}
.select2-container--default .select2-light .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-light .select2-results__option--highlighted[aria-selected]:hover,
.select2-light .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-light .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #eff1f4;
color: #1f2d3d;
}
.select2-container--default .select2-light .select2-selection--multiple:focus,
.select2-light .select2-container--default .select2-selection--multiple:focus {
border-color: #fff;
}
.select2-container--default .select2-light .select2-selection--multiple .select2-selection__choice,
.select2-light .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #f8f9fa;
border-color: #e9ecef;
color: #1f2d3d;
}
.select2-container--default .select2-light .select2-selection--multiple .select2-selection__choice__remove,
.select2-light .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(31, 45, 61, 0.7);
}
.select2-container--default .select2-light .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-light .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #1f2d3d;
}
.select2-container--default .select2-light.select2-container--focus .select2-selection--multiple,
.select2-light .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #fff;
}
.select2-dark + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #6d7a86;
}
.select2-dark + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #6d7a86;
}
.select2-container--default .select2-dark .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-dark .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-dark.select2-dropdown .select2-search__field:focus,
.select2-dark .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-dark .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-dark .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #6d7a86;
}
.select2-container--default .select2-dark .select2-results__option--highlighted,
.select2-dark .select2-container--default .select2-results__option--highlighted {
background-color: <?php echo $maincolor;?>;
color: #fff;
}
.select2-container--default .select2-dark .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-dark .select2-results__option--highlighted[aria-selected]:hover,
.select2-dark .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-dark .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #2d3238;
color: #fff;
}
.select2-container--default .select2-dark .select2-selection--multiple:focus,
.select2-dark .select2-container--default .select2-selection--multiple:focus {
border-color: #6d7a86;
}
.select2-container--default .select2-dark .select2-selection--multiple .select2-selection__choice,
.select2-dark .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: <?php echo $maincolor;?>;
border-color: #292d32;
color: #fff;
}
.select2-container--default .select2-dark .select2-selection--multiple .select2-selection__choice__remove,
.select2-dark .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-dark .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-dark .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-dark.select2-container--focus .select2-selection--multiple,
.select2-dark .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #6d7a86;
}
.select2-lightblue + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #99c5de;
}
.select2-lightblue + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #99c5de;
}
.select2-container--default .select2-lightblue .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-lightblue .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-lightblue.select2-dropdown .select2-search__field:focus,
.select2-lightblue .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-lightblue .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-lightblue .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #99c5de;
}
.select2-container--default .select2-lightblue .select2-results__option--highlighted,
.select2-lightblue .select2-container--default .select2-results__option--highlighted {
background-color: #3c8dbc;
color: #fff;
}
.select2-container--default .select2-lightblue .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-lightblue .select2-results__option--highlighted[aria-selected]:hover,
.select2-lightblue .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-lightblue .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #3884b0;
color: #fff;
}
.select2-container--default .select2-lightblue .select2-selection--multiple:focus,
.select2-lightblue .select2-container--default .select2-selection--multiple:focus {
border-color: #99c5de;
}
.select2-container--default .select2-lightblue .select2-selection--multiple .select2-selection__choice,
.select2-lightblue .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #3c8dbc;
border-color: #367fa9;
color: #fff;
}
.select2-container--default .select2-lightblue .select2-selection--multiple .select2-selection__choice__remove,
.select2-lightblue .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-lightblue .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-lightblue .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-lightblue.select2-container--focus .select2-selection--multiple,
.select2-lightblue .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #99c5de;
}
.select2-navy + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #005ebf;
}
.select2-navy + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #005ebf;
}
.select2-container--default .select2-navy .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-navy .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-navy.select2-dropdown .select2-search__field:focus,
.select2-navy .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-navy .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-navy .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #005ebf;
}
.select2-container--default .select2-navy .select2-results__option--highlighted,
.select2-navy .select2-container--default .select2-results__option--highlighted {
background-color: #001f3f;
color: #fff;
}
.select2-container--default .select2-navy .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-navy .select2-results__option--highlighted[aria-selected]:hover,
.select2-navy .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-navy .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #001730;
color: #fff;
}
.select2-container--default .select2-navy .select2-selection--multiple:focus,
.select2-navy .select2-container--default .select2-selection--multiple:focus {
border-color: #005ebf;
}
.select2-container--default .select2-navy .select2-selection--multiple .select2-selection__choice,
.select2-navy .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #001f3f;
border-color: #001226;
color: #fff;
}
.select2-container--default .select2-navy .select2-selection--multiple .select2-selection__choice__remove,
.select2-navy .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-navy .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-navy .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-navy.select2-container--focus .select2-selection--multiple,
.select2-navy .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #005ebf;
}
.select2-olive + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #87cfaf;
}
.select2-olive + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #87cfaf;
}
.select2-container--default .select2-olive .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-olive .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-olive.select2-dropdown .select2-search__field:focus,
.select2-olive .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-olive .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-olive .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #87cfaf;
}
.select2-container--default .select2-olive .select2-results__option--highlighted,
.select2-olive .select2-container--default .select2-results__option--highlighted {
background-color: #3d9970;
color: #fff;
}
.select2-container--default .select2-olive .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-olive .select2-results__option--highlighted[aria-selected]:hover,
.select2-olive .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-olive .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #398e68;
color: #fff;
}
.select2-container--default .select2-olive .select2-selection--multiple:focus,
.select2-olive .select2-container--default .select2-selection--multiple:focus {
border-color: #87cfaf;
}
.select2-container--default .select2-olive .select2-selection--multiple .select2-selection__choice,
.select2-olive .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #3d9970;
border-color: #368763;
color: #fff;
}
.select2-container--default .select2-olive .select2-selection--multiple .select2-selection__choice__remove,
.select2-olive .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-olive .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-olive .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-olive.select2-container--focus .select2-selection--multiple,
.select2-olive .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #87cfaf;
}
.select2-lime + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #81ffb8;
}
.select2-lime + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #81ffb8;
}
.select2-container--default .select2-lime .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-lime .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-lime.select2-dropdown .select2-search__field:focus,
.select2-lime .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-lime .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-lime .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #81ffb8;
}
.select2-container--default .select2-lime .select2-results__option--highlighted,
.select2-lime .select2-container--default .select2-results__option--highlighted {
background-color: #01ff70;
color: #1f2d3d;
}
.select2-container--default .select2-lime .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-lime .select2-results__option--highlighted[aria-selected]:hover,
.select2-lime .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-lime .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #00f169;
color: #1f2d3d;
}
.select2-container--default .select2-lime .select2-selection--multiple:focus,
.select2-lime .select2-container--default .select2-selection--multiple:focus {
border-color: #81ffb8;
}
.select2-container--default .select2-lime .select2-selection--multiple .select2-selection__choice,
.select2-lime .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #01ff70;
border-color: #00e765;
color: #1f2d3d;
}
.select2-container--default .select2-lime .select2-selection--multiple .select2-selection__choice__remove,
.select2-lime .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(31, 45, 61, 0.7);
}
.select2-container--default .select2-lime .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-lime .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #1f2d3d;
}
.select2-container--default .select2-lime.select2-container--focus .select2-selection--multiple,
.select2-lime .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #81ffb8;
}
.select2-fuchsia + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #f88adf;
}
.select2-fuchsia + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #f88adf;
}
.select2-container--default .select2-fuchsia .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-fuchsia .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-fuchsia.select2-dropdown .select2-search__field:focus,
.select2-fuchsia .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-fuchsia .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-fuchsia .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #f88adf;
}
.select2-container--default .select2-fuchsia .select2-results__option--highlighted,
.select2-fuchsia .select2-container--default .select2-results__option--highlighted {
background-color: #f012be;
color: #fff;
}
.select2-container--default .select2-fuchsia .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-fuchsia .select2-results__option--highlighted[aria-selected]:hover,
.select2-fuchsia .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-fuchsia .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #e40eb4;
color: #fff;
}
.select2-container--default .select2-fuchsia .select2-selection--multiple:focus,
.select2-fuchsia .select2-container--default .select2-selection--multiple:focus {
border-color: #f88adf;
}
.select2-container--default .select2-fuchsia .select2-selection--multiple .select2-selection__choice,
.select2-fuchsia .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #f012be;
border-color: #db0ead;
color: #fff;
}
.select2-container--default .select2-fuchsia .select2-selection--multiple .select2-selection__choice__remove,
.select2-fuchsia .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-fuchsia .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-fuchsia .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-fuchsia.select2-container--focus .select2-selection--multiple,
.select2-fuchsia .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #f88adf;
}
.select2-maroon + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #f083ab;
}
.select2-maroon + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #f083ab;
}
.select2-container--default .select2-maroon .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-maroon .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-maroon.select2-dropdown .select2-search__field:focus,
.select2-maroon .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-maroon .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-maroon .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #f083ab;
}
.select2-container--default .select2-maroon .select2-results__option--highlighted,
.select2-maroon .select2-container--default .select2-results__option--highlighted {
background-color: #d81b60;
color: #fff;
}
.select2-container--default .select2-maroon .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-maroon .select2-results__option--highlighted[aria-selected]:hover,
.select2-maroon .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-maroon .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #ca195a;
color: #fff;
}
.select2-container--default .select2-maroon .select2-selection--multiple:focus,
.select2-maroon .select2-container--default .select2-selection--multiple:focus {
border-color: #f083ab;
}
.select2-container--default .select2-maroon .select2-selection--multiple .select2-selection__choice,
.select2-maroon .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #d81b60;
border-color: #c11856;
color: #fff;
}
.select2-container--default .select2-maroon .select2-selection--multiple .select2-selection__choice__remove,
.select2-maroon .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-maroon .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-maroon .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-maroon.select2-container--focus .select2-selection--multiple,
.select2-maroon .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #f083ab;
}
.select2-blue + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #80bdff;
}
.select2-blue + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #80bdff;
}
.select2-blue .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-blue .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-blue .select2-container--default.select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-blue .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-blue .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-blue.select2-dropdown .select2-search__field:focus {
border: 1px solid #80bdff;
}
.select2-blue .select2-container--default .select2-results__option--highlighted,
.select2-container--default .select2-blue .select2-results__option--highlighted {
background-color: <?php echo $accent_color;?>;
color: #fff;
}
.select2-blue .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-blue .select2-container--default .select2-results__option--highlighted[aria-selected]:hover,
.select2-container--default .select2-blue .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-blue .select2-results__option--highlighted[aria-selected]:hover {
background-color: #0074f0;
color: #fff;
}
.select2-blue .select2-container--default .select2-selection--multiple:focus,
.select2-container--default .select2-blue .select2-selection--multiple:focus {
border-color: #80bdff;
}
.select2-blue .select2-container--default .select2-selection--multiple .select2-selection__choice,
.select2-container--default .select2-blue .select2-selection--multiple .select2-selection__choice {
background-color: <?php echo $accent_color;?>;
border-color: #006fe6;
color: #fff;
}
.select2-blue .select2-container--default .select2-selection--multiple .select2-selection__choice__remove,
.select2-container--default .select2-blue .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-blue .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-container--default .select2-blue .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-blue .select2-container--default.select2-container--focus .select2-selection--multiple,
.select2-container--default .select2-blue.select2-container--focus .select2-selection--multiple {
border-color: #80bdff;
}
.select2-indigo + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #b389f9;
}
.select2-indigo + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #b389f9;
}
.select2-container--default .select2-indigo .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-indigo .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-indigo.select2-dropdown .select2-search__field:focus,
.select2-indigo .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-indigo .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-indigo .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #b389f9;
}
.select2-container--default .select2-indigo .select2-results__option--highlighted,
.select2-indigo .select2-container--default .select2-results__option--highlighted {
background-color: #6610f2;
color: #fff;
}
.select2-container--default .select2-indigo .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-indigo .select2-results__option--highlighted[aria-selected]:hover,
.select2-indigo .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-indigo .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #5f0de6;
color: #fff;
}
.select2-container--default .select2-indigo .select2-selection--multiple:focus,
.select2-indigo .select2-container--default .select2-selection--multiple:focus {
border-color: #b389f9;
}
.select2-container--default .select2-indigo .select2-selection--multiple .select2-selection__choice,
.select2-indigo .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #6610f2;
border-color: #5b0cdd;
color: #fff;
}
.select2-container--default .select2-indigo .select2-selection--multiple .select2-selection__choice__remove,
.select2-indigo .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-indigo .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-indigo .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-indigo.select2-container--focus .select2-selection--multiple,
.select2-indigo .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #b389f9;
}
.select2-purple + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #b8a2e0;
}
.select2-purple + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #b8a2e0;
}
.select2-container--default .select2-purple .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-purple .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-purple.select2-dropdown .select2-search__field:focus,
.select2-purple .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-purple .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-purple .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #b8a2e0;
}
.select2-container--default .select2-purple .select2-results__option--highlighted,
.select2-purple .select2-container--default .select2-results__option--highlighted {
background-color: #6f42c1;
color: #fff;
}
.select2-container--default .select2-purple .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-purple .select2-results__option--highlighted[aria-selected]:hover,
.select2-purple .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-purple .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #683cb8;
color: #fff;
}
.select2-container--default .select2-purple .select2-selection--multiple:focus,
.select2-purple .select2-container--default .select2-selection--multiple:focus {
border-color: #b8a2e0;
}
.select2-container--default .select2-purple .select2-selection--multiple .select2-selection__choice,
.select2-purple .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #6f42c1;
border-color: #643ab0;
color: #fff;
}
.select2-container--default .select2-purple .select2-selection--multiple .select2-selection__choice__remove,
.select2-purple .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-purple .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-purple .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-purple.select2-container--focus .select2-selection--multiple,
.select2-purple .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #b8a2e0;
}
.select2-pink + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #f6b0d0;
}
.select2-pink + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #f6b0d0;
}
.select2-container--default .select2-pink .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-pink .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-pink.select2-dropdown .select2-search__field:focus,
.select2-pink .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-pink .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-pink .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #f6b0d0;
}
.select2-container--default .select2-pink .select2-results__option--highlighted,
.select2-pink .select2-container--default .select2-results__option--highlighted {
background-color: #e83e8c;
color: #fff;
}
.select2-container--default .select2-pink .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-pink .select2-results__option--highlighted[aria-selected]:hover,
.select2-pink .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-pink .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #e63084;
color: #fff;
}
.select2-container--default .select2-pink .select2-selection--multiple:focus,
.select2-pink .select2-container--default .select2-selection--multiple:focus {
border-color: #f6b0d0;
}
.select2-container--default .select2-pink .select2-selection--multiple .select2-selection__choice,
.select2-pink .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #e83e8c;
border-color: #e5277e;
color: #fff;
}
.select2-container--default .select2-pink .select2-selection--multiple .select2-selection__choice__remove,
.select2-pink .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-pink .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-pink .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-pink.select2-container--focus .select2-selection--multiple,
.select2-pink .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #f6b0d0;
}
.select2-red + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #efa2a9;
}
.select2-red + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #efa2a9;
}
.select2-container--default .select2-red .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-red .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-red.select2-dropdown .select2-search__field:focus,
.select2-red .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-red .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-red .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #efa2a9;
}
.select2-container--default .select2-red .select2-results__option--highlighted,
.select2-red .select2-container--default .select2-results__option--highlighted {
background-color: #dc3545;
color: #fff;
}
.select2-container--default .select2-red .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-red .select2-results__option--highlighted[aria-selected]:hover,
.select2-red .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-red .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #da2839;
color: #fff;
}
.select2-container--default .select2-red .select2-selection--multiple:focus,
.select2-red .select2-container--default .select2-selection--multiple:focus {
border-color: #efa2a9;
}
.select2-container--default .select2-red .select2-selection--multiple .select2-selection__choice,
.select2-red .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #dc3545;
border-color: #d32535;
color: #fff;
}
.select2-container--default .select2-red .select2-selection--multiple .select2-selection__choice__remove,
.select2-red .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-red .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-red .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-red.select2-container--focus .select2-selection--multiple,
.select2-red .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #efa2a9;
}
.select2-orange + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #fec392;
}
.select2-orange + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #fec392;
}
.select2-container--default .select2-orange .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-orange .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-orange.select2-dropdown .select2-search__field:focus,
.select2-orange .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-orange .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-orange .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #fec392;
}
.select2-container--default .select2-orange .select2-results__option--highlighted,
.select2-orange .select2-container--default .select2-results__option--highlighted {
background-color: #fd7e14;
color: #1f2d3d;
}
.select2-container--default .select2-orange .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-orange .select2-results__option--highlighted[aria-selected]:hover,
.select2-orange .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-orange .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #fd7605;
color: #fff;
}
.select2-container--default .select2-orange .select2-selection--multiple:focus,
.select2-orange .select2-container--default .select2-selection--multiple:focus {
border-color: #fec392;
}
.select2-container--default .select2-orange .select2-selection--multiple .select2-selection__choice,
.select2-orange .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #fd7e14;
border-color: #f57102;
color: #1f2d3d;
}
.select2-container--default .select2-orange .select2-selection--multiple .select2-selection__choice__remove,
.select2-orange .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(31, 45, 61, 0.7);
}
.select2-container--default .select2-orange .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-orange .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #1f2d3d;
}
.select2-container--default .select2-orange.select2-container--focus .select2-selection--multiple,
.select2-orange .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #fec392;
}
.select2-yellow + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #ffe187;
}
.select2-yellow + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #ffe187;
}
.select2-container--default .select2-yellow .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-yellow .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-yellow.select2-dropdown .select2-search__field:focus,
.select2-yellow .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-yellow .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-yellow .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #ffe187;
}
.select2-container--default .select2-yellow .select2-results__option--highlighted,
.select2-yellow .select2-container--default .select2-results__option--highlighted {
background-color: #ffc107;
color: #1f2d3d;
}
.select2-container--default .select2-yellow .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-yellow .select2-results__option--highlighted[aria-selected]:hover,
.select2-yellow .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-yellow .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #f7b900;
color: #1f2d3d;
}
.select2-container--default .select2-yellow .select2-selection--multiple:focus,
.select2-yellow .select2-container--default .select2-selection--multiple:focus {
border-color: #ffe187;
}
.select2-container--default .select2-yellow .select2-selection--multiple .select2-selection__choice,
.select2-yellow .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #ffc107;
border-color: #edb100;
color: #1f2d3d;
}
.select2-container--default .select2-yellow .select2-selection--multiple .select2-selection__choice__remove,
.select2-yellow .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(31, 45, 61, 0.7);
}
.select2-container--default .select2-yellow .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-yellow .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #1f2d3d;
}
.select2-container--default .select2-yellow.select2-container--focus .select2-selection--multiple,
.select2-yellow .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #ffe187;
}
.select2-green + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #71dd8a;
}
.select2-green + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #71dd8a;
}
.select2-container--default .select2-green .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-green .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-green.select2-dropdown .select2-search__field:focus,
.select2-green .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-green .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-green .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #71dd8a;
}
.select2-container--default .select2-green .select2-results__option--highlighted,
.select2-green .select2-container--default .select2-results__option--highlighted {
background-color: #28a745;
color: #fff;
}
.select2-container--default .select2-green .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-green .select2-results__option--highlighted[aria-selected]:hover,
.select2-green .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-green .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #259b40;
color: #fff;
}
.select2-container--default .select2-green .select2-selection--multiple:focus,
.select2-green .select2-container--default .select2-selection--multiple:focus {
border-color: #71dd8a;
}
.select2-container--default .select2-green .select2-selection--multiple .select2-selection__choice,
.select2-green .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #28a745;
border-color: #23923d;
color: #fff;
}
.select2-container--default .select2-green .select2-selection--multiple .select2-selection__choice__remove,
.select2-green .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-green .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-green .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-green.select2-container--focus .select2-selection--multiple,
.select2-green .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #71dd8a;
}
.select2-teal + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #7eeaca;
}
.select2-teal + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #7eeaca;
}
.select2-container--default .select2-teal .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-teal .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-teal.select2-dropdown .select2-search__field:focus,
.select2-teal .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-teal .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-teal .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #7eeaca;
}
.select2-container--default .select2-teal .select2-results__option--highlighted,
.select2-teal .select2-container--default .select2-results__option--highlighted {
background-color: #20c997;
color: #fff;
}
.select2-container--default .select2-teal .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-teal .select2-results__option--highlighted[aria-selected]:hover,
.select2-teal .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-teal .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #1ebc8d;
color: #fff;
}
.select2-container--default .select2-teal .select2-selection--multiple:focus,
.select2-teal .select2-container--default .select2-selection--multiple:focus {
border-color: #7eeaca;
}
.select2-container--default .select2-teal .select2-selection--multiple .select2-selection__choice,
.select2-teal .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #20c997;
border-color: #1cb386;
color: #fff;
}
.select2-container--default .select2-teal .select2-selection--multiple .select2-selection__choice__remove,
.select2-teal .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-teal .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-teal .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-teal.select2-container--focus .select2-selection--multiple,
.select2-teal .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #7eeaca;
}
.select2-cyan + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #63d9ec;
}
.select2-cyan + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #63d9ec;
}
.select2-container--default .select2-cyan .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-cyan .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-cyan.select2-dropdown .select2-search__field:focus,
.select2-cyan .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-cyan .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-cyan .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #63d9ec;
}
.select2-container--default .select2-cyan .select2-results__option--highlighted,
.select2-cyan .select2-container--default .select2-results__option--highlighted {
background-color: #17a2b8;
color: #fff;
}
.select2-container--default .select2-cyan .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-cyan .select2-results__option--highlighted[aria-selected]:hover,
.select2-cyan .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-cyan .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #1596aa;
color: #fff;
}
.select2-container--default .select2-cyan .select2-selection--multiple:focus,
.select2-cyan .select2-container--default .select2-selection--multiple:focus {
border-color: #63d9ec;
}
.select2-container--default .select2-cyan .select2-selection--multiple .select2-selection__choice,
.select2-cyan .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #17a2b8;
border-color: #148ea1;
color: #fff;
}
.select2-container--default .select2-cyan .select2-selection--multiple .select2-selection__choice__remove,
.select2-cyan .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-cyan .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-cyan .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-cyan.select2-container--focus .select2-selection--multiple,
.select2-cyan .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #63d9ec;
}
.select2-white + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #fff;
}
.select2-white + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #fff;
}
.select2-container--default .select2-white .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-white .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-white.select2-dropdown .select2-search__field:focus,
.select2-white .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-white .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-white .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #fff;
}
.select2-container--default .select2-white .select2-results__option--highlighted,
.select2-white .select2-container--default .select2-results__option--highlighted {
background-color: #fff;
color: #1f2d3d;
}
.select2-container--default .select2-white .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-white .select2-results__option--highlighted[aria-selected]:hover,
.select2-white .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-white .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #f7f7f7;
color: #1f2d3d;
}
.select2-container--default .select2-white .select2-selection--multiple:focus,
.select2-white .select2-container--default .select2-selection--multiple:focus {
border-color: #fff;
}
.select2-container--default .select2-white .select2-selection--multiple .select2-selection__choice,
.select2-white .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #fff;
border-color: #f2f2f2;
color: #1f2d3d;
}
.select2-container--default .select2-white .select2-selection--multiple .select2-selection__choice__remove,
.select2-white .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(31, 45, 61, 0.7);
}
.select2-container--default .select2-white .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-white .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #1f2d3d;
}
.select2-container--default .select2-white.select2-container--focus .select2-selection--multiple,
.select2-white .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #fff;
}
.select2-gray + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #afb5ba;
}
.select2-gray + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #afb5ba;
}
.select2-container--default .select2-gray .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-gray .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-gray.select2-dropdown .select2-search__field:focus,
.select2-gray .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-gray .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-gray .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #afb5ba;
}
.select2-container--default .select2-gray .select2-results__option--highlighted,
.select2-gray .select2-container--default .select2-results__option--highlighted {
background-color: #6c757d;
color: #fff;
}
.select2-container--default .select2-gray .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-gray .select2-results__option--highlighted[aria-selected]:hover,
.select2-gray .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-gray .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #656d75;
color: #fff;
}
.select2-container--default .select2-gray .select2-selection--multiple:focus,
.select2-gray .select2-container--default .select2-selection--multiple:focus {
border-color: #afb5ba;
}
.select2-container--default .select2-gray .select2-selection--multiple .select2-selection__choice,
.select2-gray .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #6c757d;
border-color: #60686f;
color: #fff;
}
.select2-container--default .select2-gray .select2-selection--multiple .select2-selection__choice__remove,
.select2-gray .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-gray .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-gray .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-gray.select2-container--focus .select2-selection--multiple,
.select2-gray .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #afb5ba;
}
.select2-gray-dark + .select2-container--default.select2-container--open .select2-selection--single {
border-color: #6d7a86;
}
.select2-gray-dark + .select2-container--default.select2-container--focus .select2-selection--single {
border-color: #6d7a86;
}
.select2-container--default .select2-gray-dark .select2-dropdown .select2-search__field:focus,
.select2-container--default .select2-gray-dark .select2-search--inline .select2-search__field:focus,
.select2-container--default .select2-gray-dark.select2-dropdown .select2-search__field:focus,
.select2-gray-dark .select2-container--default .select2-dropdown .select2-search__field:focus,
.select2-gray-dark .select2-container--default .select2-search--inline .select2-search__field:focus,
.select2-gray-dark .select2-container--default.select2-dropdown .select2-search__field:focus {
border: 1px solid #6d7a86;
}
.select2-container--default .select2-gray-dark .select2-results__option--highlighted,
.select2-gray-dark .select2-container--default .select2-results__option--highlighted {
background-color: <?php echo $maincolor;?>;
color: #fff;
}
.select2-container--default .select2-gray-dark .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-gray-dark .select2-results__option--highlighted[aria-selected]:hover,
.select2-gray-dark .select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-gray-dark .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {
background-color: #2d3238;
color: #fff;
}
.select2-container--default .select2-gray-dark .select2-selection--multiple:focus,
.select2-gray-dark .select2-container--default .select2-selection--multiple:focus {
border-color: #6d7a86;
}
.select2-container--default .select2-gray-dark .select2-selection--multiple .select2-selection__choice,
.select2-gray-dark .select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: <?php echo $maincolor;?>;
border-color: #292d32;
color: #fff;
}
.select2-container--default .select2-gray-dark .select2-selection--multiple .select2-selection__choice__remove,
.select2-gray-dark .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
color: rgba(255, 255, 255, 0.7);
}
.select2-container--default .select2-gray-dark .select2-selection--multiple .select2-selection__choice__remove:hover,
.select2-gray-dark .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
color: #fff;
}
.select2-container--default .select2-gray-dark.select2-container--focus .select2-selection--multiple,
.select2-gray-dark .select2-container--default.select2-container--focus .select2-selection--multiple {
border-color: #6d7a86;
}
.dark-mode .select2-selection {
background-color: <?php echo $maincolor;?>;
border-color: #6c757d;
}
.dark-mode .select2-container--disabled .select2-selection--single {
background-color: <?php echo $secondarycolor;?>;
}
.dark-mode .select2-selection--single {
background-color: <?php echo $maincolor;?>;
border-color: #6c757d;
}
.dark-mode .select2-selection--single .select2-selection__rendered {
color: #fff;
}
.dark-mode .select2-dropdown .select2-search__field,
.dark-mode .select2-search--inline .select2-search__field {
background-color: <?php echo $maincolor;?>;
border-color: #6c757d;
color: #fff;
}
.dark-mode .select2-dropdown {
background-color: <?php echo $maincolor;?>;
border-color: #6c757d;
color: #fff;
}
.dark-mode .select2-results__option[aria-selected="true"] {
background-color: #3f474e !important;
color: #dee2e6;
}
.dark-mode .select2-container .select2-search--inline .select2-search__field {
background-color: transparent;
color: #fff;
}
.dark-mode .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice {
color: #fff;
}
.slider .tooltip.in {
opacity: 0.9;
}
.slider.slider-vertical {
height: 100%;
}
.slider.slider-horizontal {
width: 100%;
}
.slider-primary .slider .slider-selection {
background: <?php echo $accent_color;?>;
}
.slider-secondary .slider .slider-selection {
background: #6c757d;
}
.slider-success .slider .slider-selection {
background: #28a745;
}
.slider-info .slider .slider-selection {
background: #17a2b8;
}
.slider-warning .slider .slider-selection {
background: #ffc107;
}
.slider-danger .slider .slider-selection {
background: #dc3545;
}
.slider-light .slider .slider-selection {
background: #f8f9fa;
}
.slider-dark .slider .slider-selection {
background: <?php echo $maincolor;?>;
}
.slider-lightblue .slider .slider-selection {
background: #3c8dbc;
}
.slider-navy .slider .slider-selection {
background: #001f3f;
}
.slider-olive .slider .slider-selection {
background: #3d9970;
}
.slider-lime .slider .slider-selection {
background: #01ff70;
}
.slider-fuchsia .slider .slider-selection {
background: #f012be;
}
.slider-maroon .slider .slider-selection {
background: #d81b60;
}
.slider-blue .slider .slider-selection {
background: <?php echo $accent_color;?>;
}
.slider-indigo .slider .slider-selection {
background: #6610f2;
}
.slider-purple .slider .slider-selection {
background: #6f42c1;
}
.slider-pink .slider .slider-selection {
background: #e83e8c;
}
.slider-red .slider .slider-selection {
background: #dc3545;
}
.slider-orange .slider .slider-selection {
background: #fd7e14;
}
.slider-yellow .slider .slider-selection {
background: #ffc107;
}
.slider-green .slider .slider-selection {
background: #28a745;
}
.slider-teal .slider .slider-selection {
background: #20c997;
}
.slider-cyan .slider .slider-selection {
background: #17a2b8;
}
.slider-white .slider .slider-selection {
background: #fff;
}
.slider-gray .slider .slider-selection {
background: #6c757d;
}
.slider-gray-dark .slider .slider-selection {
background: <?php echo $maincolor;?>;
}
.dark-mode .slider-track {
background-color: #4b545c;
background-image: none;
}
.icheck-primary > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-primary > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: <?php echo $accent_color;?>;
}
.icheck-primary > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-primary > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: <?php echo $accent_color;?>;
}
.icheck-primary > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-primary > input:first-child:checked + label::before {
background-color: <?php echo $accent_color;?>;
border-color: <?php echo $accent_color;?>;
}
.icheck-secondary > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-secondary > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #6c757d;
}
.icheck-secondary > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-secondary > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #6c757d;
}
.icheck-secondary > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-secondary > input:first-child:checked + label::before {
background-color: #6c757d;
border-color: #6c757d;
}
.icheck-success > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-success > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #28a745;
}
.icheck-success > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-success > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #28a745;
}
.icheck-success > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-success > input:first-child:checked + label::before {
background-color: #28a745;
border-color: #28a745;
}
.icheck-info > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-info > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #17a2b8;
}
.icheck-info > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-info > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #17a2b8;
}
.icheck-info > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-info > input:first-child:checked + label::before {
background-color: #17a2b8;
border-color: #17a2b8;
}
.icheck-warning > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-warning > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #ffc107;
}
.icheck-warning > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-warning > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #ffc107;
}
.icheck-warning > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-warning > input:first-child:checked + label::before {
background-color: #ffc107;
border-color: #ffc107;
}
.icheck-danger > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-danger > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #dc3545;
}
.icheck-danger > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-danger > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #dc3545;
}
.icheck-danger > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-danger > input:first-child:checked + label::before {
background-color: #dc3545;
border-color: #dc3545;
}
.icheck-light > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-light > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #f8f9fa;
}
.icheck-light > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-light > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #f8f9fa;
}
.icheck-light > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-light > input:first-child:checked + label::before {
background-color: #f8f9fa;
border-color: #f8f9fa;
}
.icheck-dark > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-dark > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: <?php echo $maincolor;?>;
}
.icheck-dark > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-dark > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: <?php echo $maincolor;?>;
}
.icheck-dark > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-dark > input:first-child:checked + label::before {
background-color: <?php echo $maincolor;?>;
border-color: <?php echo $maincolor;?>;
}
.icheck-lightblue > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-lightblue > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #3c8dbc;
}
.icheck-lightblue > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-lightblue > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #3c8dbc;
}
.icheck-lightblue > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-lightblue > input:first-child:checked + label::before {
background-color: #3c8dbc;
border-color: #3c8dbc;
}
.icheck-navy > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-navy > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #001f3f;
}
.icheck-navy > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-navy > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #001f3f;
}
.icheck-navy > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-navy > input:first-child:checked + label::before {
background-color: #001f3f;
border-color: #001f3f;
}
.icheck-olive > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-olive > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #3d9970;
}
.icheck-olive > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-olive > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #3d9970;
}
.icheck-olive > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-olive > input:first-child:checked + label::before {
background-color: #3d9970;
border-color: #3d9970;
}
.icheck-lime > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-lime > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #01ff70;
}
.icheck-lime > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-lime > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #01ff70;
}
.icheck-lime > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-lime > input:first-child:checked + label::before {
background-color: #01ff70;
border-color: #01ff70;
}
.icheck-fuchsia > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-fuchsia > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #f012be;
}
.icheck-fuchsia > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-fuchsia > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #f012be;
}
.icheck-fuchsia > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-fuchsia > input:first-child:checked + label::before {
background-color: #f012be;
border-color: #f012be;
}
.icheck-maroon > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-maroon > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #d81b60;
}
.icheck-maroon > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-maroon > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #d81b60;
}
.icheck-maroon > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-maroon > input:first-child:checked + label::before {
background-color: #d81b60;
border-color: #d81b60;
}
.icheck-blue > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-blue > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: <?php echo $accent_color;?>;
}
.icheck-blue > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-blue > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: <?php echo $accent_color;?>;
}
.icheck-blue > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-blue > input:first-child:checked + label::before {
background-color: <?php echo $accent_color;?>;
border-color: <?php echo $accent_color;?>;
}
.icheck-indigo > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-indigo > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #6610f2;
}
.icheck-indigo > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-indigo > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #6610f2;
}
.icheck-indigo > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-indigo > input:first-child:checked + label::before {
background-color: #6610f2;
border-color: #6610f2;
}
.icheck-purple > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-purple > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #6f42c1;
}
.icheck-purple > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-purple > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #6f42c1;
}
.icheck-purple > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-purple > input:first-child:checked + label::before {
background-color: #6f42c1;
border-color: #6f42c1;
}
.icheck-pink > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-pink > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #e83e8c;
}
.icheck-pink > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-pink > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #e83e8c;
}
.icheck-pink > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-pink > input:first-child:checked + label::before {
background-color: #e83e8c;
border-color: #e83e8c;
}
.icheck-red > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-red > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #dc3545;
}
.icheck-red > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-red > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #dc3545;
}
.icheck-red > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-red > input:first-child:checked + label::before {
background-color: #dc3545;
border-color: #dc3545;
}
.icheck-orange > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-orange > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #fd7e14;
}
.icheck-orange > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-orange > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #fd7e14;
}
.icheck-orange > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-orange > input:first-child:checked + label::before {
background-color: #fd7e14;
border-color: #fd7e14;
}
.icheck-yellow > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-yellow > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #ffc107;
}
.icheck-yellow > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-yellow > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #ffc107;
}
.icheck-yellow > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-yellow > input:first-child:checked + label::before {
background-color: #ffc107;
border-color: #ffc107;
}
.icheck-green > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-green > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #28a745;
}
.icheck-green > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-green > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #28a745;
}
.icheck-green > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-green > input:first-child:checked + label::before {
background-color: #28a745;
border-color: #28a745;
}
.icheck-teal > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-teal > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #20c997;
}
.icheck-teal > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-teal > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #20c997;
}
.icheck-teal > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-teal > input:first-child:checked + label::before {
background-color: #20c997;
border-color: #20c997;
}
.icheck-cyan > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-cyan > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #17a2b8;
}
.icheck-cyan > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-cyan > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #17a2b8;
}
.icheck-cyan > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-cyan > input:first-child:checked + label::before {
background-color: #17a2b8;
border-color: #17a2b8;
}
.icheck-white > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-white > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #fff;
}
.icheck-white > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-white > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #fff;
}
.icheck-white > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-white > input:first-child:checked + label::before {
background-color: #fff;
border-color: #fff;
}
.icheck-gray > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-gray > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: #6c757d;
}
.icheck-gray > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-gray > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: #6c757d;
}
.icheck-gray > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-gray > input:first-child:checked + label::before {
background-color: #6c757d;
border-color: #6c757d;
}
.icheck-gray-dark > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before,
.icheck-gray-dark > input:first-child:not(:checked):not(:disabled):hover + label::before {
border-color: <?php echo $maincolor;?>;
}
.icheck-gray-dark > input:first-child:not(:checked):not(:disabled):focus + input[type="hidden"] + label::before,
.icheck-gray-dark > input:first-child:not(:checked):not(:disabled):focus + label::before {
border-color: <?php echo $maincolor;?>;
}
.icheck-gray-dark > input:first-child:checked + input[type="hidden"] + label::before,
.icheck-gray-dark > input:first-child:checked + label::before {
background-color: <?php echo $maincolor;?>;
border-color: <?php echo $maincolor;?>;
}
.dark-mode [class*="icheck-"] > input:first-child:not(:checked) + input[type="hidden"] + label::before,
.dark-mode [class*="icheck-"] > input:first-child:not(:checked) + label::before {
border-color: #6c757d;
}
.mapael .map {
position: relative;
}
.mapael .mapTooltip {
font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
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
border-radius: 0.25rem;
font-size: 0.875rem;
background-color: #000;
color: #fff;
display: block;
max-width: 200px;
padding: 0.25rem 0.5rem;
position: absolute;
text-align: center;
word-wrap: break-word;
z-index: 1070;
}
.mapael .myLegend {
background-color: #f8f9fa;
border: 1px solid #adb5bd;
padding: 10px;
width: 600px;
}
.mapael .zoomButton {
background-color: #f8f9fa;
border: 1px solid #ddd;
border-radius: 0.25rem;
color: #444;
cursor: pointer;
font-weight: 700;
height: 16px;
left: 10px;
line-height: 14px;
padding-left: 1px;
position: absolute;
text-align: center;
top: 0;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
width: 16px;
}
.mapael .zoomButton.hover,
.mapael .zoomButton:active,
.mapael .zoomButton:hover {
background-color: #e9ecef;
color: #2b2b2b;
}
.mapael .zoomReset {
line-height: 12px;
top: 10px;
}
.mapael .zoomIn {
top: 30px;
}
.mapael .zoomOut {
top: 50px;
}
.jqvmap-zoomin,
.jqvmap-zoomout {
background-color: #f8f9fa;
border: 1px solid #ddd;
border-radius: 0.25rem;
color: #444;
height: 15px;
width: 15px;
}
.jqvmap-zoomin.hover,
.jqvmap-zoomin:active,
.jqvmap-zoomin:hover,
.jqvmap-zoomout.hover,
.jqvmap-zoomout:active,
.jqvmap-zoomout:hover {
background-color: #e9ecef;
color: #2b2b2b;
}
.swal2-icon.swal2-info {
border-color: ligthen(#17a2b8, 20%);
color: #17a2b8;
}
.swal2-icon.swal2-warning {
border-color: ligthen(#ffc107, 20%);
color: #ffc107;
}
.swal2-icon.swal2-error {
border-color: ligthen(#dc3545, 20%);
color: #dc3545;
}
.swal2-icon.swal2-question {
border-color: ligthen(#6c757d, 20%);
color: #6c757d;
}
.swal2-icon.swal2-success {
border-color: ligthen(#28a745, 20%);
color: #28a745;
}
.swal2-icon.swal2-success .swal2-success-ring {
border-color: ligthen(#28a745, 20%);
}
.swal2-icon.swal2-success [class^="swal2-success-line"] {
background-color: #28a745;
}
.dark-mode .swal2-popup {
background-color: <?php echo $maincolor;?>;
color: #e9ecef;
}
.dark-mode .swal2-popup .swal2-content,
.dark-mode .swal2-popup .swal2-title {
color: #e9ecef;
}
#toast-container .toast {
background-color: <?php echo $accent_color;?>;
}
#toast-container .toast-success {
background-color: #28a745;
}
#toast-container .toast-error {
background-color: #dc3545;
}
#toast-container .toast-info {
background-color: #17a2b8;
}
#toast-container .toast-warning {
background-color: #ffc107;
}
.toast-bottom-full-width .toast,
.toast-top-full-width .toast {
max-width: inherit;
}
.pace {
z-index: 1048;
}
.pace .pace-progress {
z-index: 1049;
}
.pace .pace-activity {
z-index: 1050;
}
.pace-primary .pace .pace-progress {
background: <?php echo $accent_color;?>;
}
.pace-barber-shop-primary .pace {
background: #fff;
}
.pace-barber-shop-primary .pace .pace-progress {
background: <?php echo $accent_color;?>;
}
.pace-barber-shop-primary .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-primary .pace .pace-progress::after {
color: rgba(0, 123, 255, 0.2);
}
.pace-bounce-primary .pace .pace-activity {
background: <?php echo $accent_color;?>;
}
.pace-center-atom-primary .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-primary .pace-progress::before {
background: <?php echo $accent_color;?>;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-primary .pace-activity {
border-color: <?php echo $accent_color;?>;
}
.pace-center-atom-primary .pace-activity::after,
.pace-center-atom-primary .pace-activity::before {
border-color: <?php echo $accent_color;?>;
}
.pace-center-circle-primary .pace .pace-progress {
background: rgba(0, 123, 255, 0.8);
color: #fff;
}
.pace-center-radar-primary .pace .pace-activity {
border-color: <?php echo $accent_color;?>; transparent transparent;
}
.pace-center-radar-primary .pace .pace-activity::before {
border-color: <?php echo $accent_color;?>; transparent transparent;
}
.pace-center-simple-primary .pace {
background: #fff;
border-color: <?php echo $accent_color;?>;
}
.pace-center-simple-primary .pace .pace-progress {
background: <?php echo $accent_color;?>;
}
.pace-material-primary .pace {
color: <?php echo $accent_color;?>;
}
.pace-corner-indicator-primary .pace .pace-activity {
background: <?php echo $accent_color;?>;
}
.pace-corner-indicator-primary .pace .pace-activity::after,
.pace-corner-indicator-primary .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-primary .pace .pace-activity::before {
border-right-color: rgba(0, 123, 255, 0.2);
border-left-color: rgba(0, 123, 255, 0.2);
}
.pace-corner-indicator-primary .pace .pace-activity::after {
border-top-color: rgba(0, 123, 255, 0.2);
border-bottom-color: rgba(0, 123, 255, 0.2);
}
.pace-fill-left-primary .pace .pace-progress {
background-color: rgba(0, 123, 255, 0.2);
}
.pace-flash-primary .pace .pace-progress {
background: <?php echo $accent_color;?>;
}
.pace-flash-primary .pace .pace-progress-inner {
box-shadow: 0 0 10px <?php echo $accent_color;?>;, 0 0 5px <?php echo $accent_color;?>;
}
.pace-flash-primary .pace .pace-activity {
border-top-color: <?php echo $accent_color;?>;
border-left-color: <?php echo $accent_color;?>;
}
.pace-loading-bar-primary .pace .pace-progress {
background: <?php echo $accent_color;?>;
color: <?php echo $accent_color;?>;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-primary .pace .pace-activity {
box-shadow: inset 0 0 0 2px <?php echo $accent_color;?>;, inset 0 0 0 7px #fff;
}
.pace-mac-osx-primary .pace .pace-progress {
background-color: <?php echo $accent_color;?>;
box-shadow: inset -1px 0 <?php echo $accent_color;?>;, inset 0 -1px <?php echo $accent_color;?>;, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-primary .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-primary .pace-progress {
color: <?php echo $accent_color;?>;
}
.pace-secondary .pace .pace-progress {
background: #6c757d;
}
.pace-barber-shop-secondary .pace {
background: #fff;
}
.pace-barber-shop-secondary .pace .pace-progress {
background: #6c757d;
}
.pace-barber-shop-secondary .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-secondary .pace .pace-progress::after {
color: rgba(108, 117, 125, 0.2);
}
.pace-bounce-secondary .pace .pace-activity {
background: #6c757d;
}
.pace-center-atom-secondary .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-secondary .pace-progress::before {
background: #6c757d;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-secondary .pace-activity {
border-color: #6c757d;
}
.pace-center-atom-secondary .pace-activity::after,
.pace-center-atom-secondary .pace-activity::before {
border-color: #6c757d;
}
.pace-center-circle-secondary .pace .pace-progress {
background: rgba(108, 117, 125, 0.8);
color: #fff;
}
.pace-center-radar-secondary .pace .pace-activity {
border-color: #6c757d transparent transparent;
}
.pace-center-radar-secondary .pace .pace-activity::before {
border-color: #6c757d transparent transparent;
}
.pace-center-simple-secondary .pace {
background: #fff;
border-color: #6c757d;
}
.pace-center-simple-secondary .pace .pace-progress {
background: #6c757d;
}
.pace-material-secondary .pace {
color: #6c757d;
}
.pace-corner-indicator-secondary .pace .pace-activity {
background: #6c757d;
}
.pace-corner-indicator-secondary .pace .pace-activity::after,
.pace-corner-indicator-secondary .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-secondary .pace .pace-activity::before {
border-right-color: rgba(108, 117, 125, 0.2);
border-left-color: rgba(108, 117, 125, 0.2);
}
.pace-corner-indicator-secondary .pace .pace-activity::after {
border-top-color: rgba(108, 117, 125, 0.2);
border-bottom-color: rgba(108, 117, 125, 0.2);
}
.pace-fill-left-secondary .pace .pace-progress {
background-color: rgba(108, 117, 125, 0.2);
}
.pace-flash-secondary .pace .pace-progress {
background: #6c757d;
}
.pace-flash-secondary .pace .pace-progress-inner {
box-shadow: 0 0 10px #6c757d, 0 0 5px #6c757d;
}
.pace-flash-secondary .pace .pace-activity {
border-top-color: #6c757d;
border-left-color: #6c757d;
}
.pace-loading-bar-secondary .pace .pace-progress {
background: #6c757d;
color: #6c757d;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-secondary .pace .pace-activity {
box-shadow: inset 0 0 0 2px #6c757d, inset 0 0 0 7px #fff;
}
.pace-mac-osx-secondary .pace .pace-progress {
background-color: #6c757d;
box-shadow: inset -1px 0 #6c757d, inset 0 -1px #6c757d, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-secondary .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-secondary .pace-progress {
color: #6c757d;
}
.pace-success .pace .pace-progress {
background: #28a745;
}
.pace-barber-shop-success .pace {
background: #fff;
}
.pace-barber-shop-success .pace .pace-progress {
background: #28a745;
}
.pace-barber-shop-success .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-success .pace .pace-progress::after {
color: rgba(40, 167, 69, 0.2);
}
.pace-bounce-success .pace .pace-activity {
background: #28a745;
}
.pace-center-atom-success .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-success .pace-progress::before {
background: #28a745;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-success .pace-activity {
border-color: #28a745;
}
.pace-center-atom-success .pace-activity::after,
.pace-center-atom-success .pace-activity::before {
border-color: #28a745;
}
.pace-center-circle-success .pace .pace-progress {
background: rgba(40, 167, 69, 0.8);
color: #fff;
}
.pace-center-radar-success .pace .pace-activity {
border-color: #28a745 transparent transparent;
}
.pace-center-radar-success .pace .pace-activity::before {
border-color: #28a745 transparent transparent;
}
.pace-center-simple-success .pace {
background: #fff;
border-color: #28a745;
}
.pace-center-simple-success .pace .pace-progress {
background: #28a745;
}
.pace-material-success .pace {
color: #28a745;
}
.pace-corner-indicator-success .pace .pace-activity {
background: #28a745;
}
.pace-corner-indicator-success .pace .pace-activity::after,
.pace-corner-indicator-success .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-success .pace .pace-activity::before {
border-right-color: rgba(40, 167, 69, 0.2);
border-left-color: rgba(40, 167, 69, 0.2);
}
.pace-corner-indicator-success .pace .pace-activity::after {
border-top-color: rgba(40, 167, 69, 0.2);
border-bottom-color: rgba(40, 167, 69, 0.2);
}
.pace-fill-left-success .pace .pace-progress {
background-color: rgba(40, 167, 69, 0.2);
}
.pace-flash-success .pace .pace-progress {
background: #28a745;
}
.pace-flash-success .pace .pace-progress-inner {
box-shadow: 0 0 10px #28a745, 0 0 5px #28a745;
}
.pace-flash-success .pace .pace-activity {
border-top-color: #28a745;
border-left-color: #28a745;
}
.pace-loading-bar-success .pace .pace-progress {
background: #28a745;
color: #28a745;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-success .pace .pace-activity {
box-shadow: inset 0 0 0 2px #28a745, inset 0 0 0 7px #fff;
}
.pace-mac-osx-success .pace .pace-progress {
background-color: #28a745;
box-shadow: inset -1px 0 #28a745, inset 0 -1px #28a745, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-success .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-success .pace-progress {
color: #28a745;
}
.pace-info .pace .pace-progress {
background: #17a2b8;
}
.pace-barber-shop-info .pace {
background: #fff;
}
.pace-barber-shop-info .pace .pace-progress {
background: #17a2b8;
}
.pace-barber-shop-info .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-info .pace .pace-progress::after {
color: rgba(23, 162, 184, 0.2);
}
.pace-bounce-info .pace .pace-activity {
background: #17a2b8;
}
.pace-center-atom-info .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-info .pace-progress::before {
background: #17a2b8;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-info .pace-activity {
border-color: #17a2b8;
}
.pace-center-atom-info .pace-activity::after,
.pace-center-atom-info .pace-activity::before {
border-color: #17a2b8;
}
.pace-center-circle-info .pace .pace-progress {
background: rgba(23, 162, 184, 0.8);
color: #fff;
}
.pace-center-radar-info .pace .pace-activity {
border-color: #17a2b8 transparent transparent;
}
.pace-center-radar-info .pace .pace-activity::before {
border-color: #17a2b8 transparent transparent;
}
.pace-center-simple-info .pace {
background: #fff;
border-color: #17a2b8;
}
.pace-center-simple-info .pace .pace-progress {
background: #17a2b8;
}
.pace-material-info .pace {
color: #17a2b8;
}
.pace-corner-indicator-info .pace .pace-activity {
background: #17a2b8;
}
.pace-corner-indicator-info .pace .pace-activity::after,
.pace-corner-indicator-info .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-info .pace .pace-activity::before {
border-right-color: rgba(23, 162, 184, 0.2);
border-left-color: rgba(23, 162, 184, 0.2);
}
.pace-corner-indicator-info .pace .pace-activity::after {
border-top-color: rgba(23, 162, 184, 0.2);
border-bottom-color: rgba(23, 162, 184, 0.2);
}
.pace-fill-left-info .pace .pace-progress {
background-color: rgba(23, 162, 184, 0.2);
}
.pace-flash-info .pace .pace-progress {
background: #17a2b8;
}
.pace-flash-info .pace .pace-progress-inner {
box-shadow: 0 0 10px #17a2b8, 0 0 5px #17a2b8;
}
.pace-flash-info .pace .pace-activity {
border-top-color: #17a2b8;
border-left-color: #17a2b8;
}
.pace-loading-bar-info .pace .pace-progress {
background: #17a2b8;
color: #17a2b8;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-info .pace .pace-activity {
box-shadow: inset 0 0 0 2px #17a2b8, inset 0 0 0 7px #fff;
}
.pace-mac-osx-info .pace .pace-progress {
background-color: #17a2b8;
box-shadow: inset -1px 0 #17a2b8, inset 0 -1px #17a2b8, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-info .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-info .pace-progress {
color: #17a2b8;
}
.pace-warning .pace .pace-progress {
background: #ffc107;
}
.pace-barber-shop-warning .pace {
background: #1f2d3d;
}
.pace-barber-shop-warning .pace .pace-progress {
background: #ffc107;
}
.pace-barber-shop-warning .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(31, 45, 61, 0.2) 25%, transparent 25%, transparent 50%, rgba(31, 45, 61, 0.2) 50%, rgba(31, 45, 61, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-warning .pace .pace-progress::after {
color: rgba(255, 193, 7, 0.2);
}
.pace-bounce-warning .pace .pace-activity {
background: #ffc107;
}
.pace-center-atom-warning .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-warning .pace-progress::before {
background: #ffc107;
color: #1f2d3d;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-warning .pace-activity {
border-color: #ffc107;
}
.pace-center-atom-warning .pace-activity::after,
.pace-center-atom-warning .pace-activity::before {
border-color: #ffc107;
}
.pace-center-circle-warning .pace .pace-progress {
background: rgba(255, 193, 7, 0.8);
color: #1f2d3d;
}
.pace-center-radar-warning .pace .pace-activity {
border-color: #ffc107 transparent transparent;
}
.pace-center-radar-warning .pace .pace-activity::before {
border-color: #ffc107 transparent transparent;
}
.pace-center-simple-warning .pace {
background: #1f2d3d;
border-color: #ffc107;
}
.pace-center-simple-warning .pace .pace-progress {
background: #ffc107;
}
.pace-material-warning .pace {
color: #ffc107;
}
.pace-corner-indicator-warning .pace .pace-activity {
background: #ffc107;
}
.pace-corner-indicator-warning .pace .pace-activity::after,
.pace-corner-indicator-warning .pace .pace-activity::before {
border: 5px solid #1f2d3d;
}
.pace-corner-indicator-warning .pace .pace-activity::before {
border-right-color: rgba(255, 193, 7, 0.2);
border-left-color: rgba(255, 193, 7, 0.2);
}
.pace-corner-indicator-warning .pace .pace-activity::after {
border-top-color: rgba(255, 193, 7, 0.2);
border-bottom-color: rgba(255, 193, 7, 0.2);
}
.pace-fill-left-warning .pace .pace-progress {
background-color: rgba(255, 193, 7, 0.2);
}
.pace-flash-warning .pace .pace-progress {
background: #ffc107;
}
.pace-flash-warning .pace .pace-progress-inner {
box-shadow: 0 0 10px #ffc107, 0 0 5px #ffc107;
}
.pace-flash-warning .pace .pace-activity {
border-top-color: #ffc107;
border-left-color: #ffc107;
}
.pace-loading-bar-warning .pace .pace-progress {
background: #ffc107;
color: #ffc107;
box-shadow: 120px 0 #1f2d3d, 240px 0 #1f2d3d;
}
.pace-loading-bar-warning .pace .pace-activity {
box-shadow: inset 0 0 0 2px #ffc107, inset 0 0 0 7px #1f2d3d;
}
.pace-mac-osx-warning .pace .pace-progress {
background-color: #ffc107;
box-shadow: inset -1px 0 #ffc107, inset 0 -1px #ffc107, inset 0 2px rgba(31, 45, 61, 0.5), inset 0 6px rgba(31, 45, 61, 0.3);
}
.pace-mac-osx-warning .pace .pace-activity {
background-image: radial-gradient(rgba(31, 45, 61, 0.65) 0, rgba(31, 45, 61, 0.15) 100%);
height: 12px;
}
.pace-progress-color-warning .pace-progress {
color: #ffc107;
}
.pace-danger .pace .pace-progress {
background: #dc3545;
}
.pace-barber-shop-danger .pace {
background: #fff;
}
.pace-barber-shop-danger .pace .pace-progress {
background: #dc3545;
}
.pace-barber-shop-danger .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-danger .pace .pace-progress::after {
color: rgba(220, 53, 69, 0.2);
}
.pace-bounce-danger .pace .pace-activity {
background: #dc3545;
}
.pace-center-atom-danger .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-danger .pace-progress::before {
background: #dc3545;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-danger .pace-activity {
border-color: #dc3545;
}
.pace-center-atom-danger .pace-activity::after,
.pace-center-atom-danger .pace-activity::before {
border-color: #dc3545;
}
.pace-center-circle-danger .pace .pace-progress {
background: rgba(220, 53, 69, 0.8);
color: #fff;
}
.pace-center-radar-danger .pace .pace-activity {
border-color: #dc3545 transparent transparent;
}
.pace-center-radar-danger .pace .pace-activity::before {
border-color: #dc3545 transparent transparent;
}
.pace-center-simple-danger .pace {
background: #fff;
border-color: #dc3545;
}
.pace-center-simple-danger .pace .pace-progress {
background: #dc3545;
}
.pace-material-danger .pace {
color: #dc3545;
}
.pace-corner-indicator-danger .pace .pace-activity {
background: #dc3545;
}
.pace-corner-indicator-danger .pace .pace-activity::after,
.pace-corner-indicator-danger .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-danger .pace .pace-activity::before {
border-right-color: rgba(220, 53, 69, 0.2);
border-left-color: rgba(220, 53, 69, 0.2);
}
.pace-corner-indicator-danger .pace .pace-activity::after {
border-top-color: rgba(220, 53, 69, 0.2);
border-bottom-color: rgba(220, 53, 69, 0.2);
}
.pace-fill-left-danger .pace .pace-progress {
background-color: rgba(220, 53, 69, 0.2);
}
.pace-flash-danger .pace .pace-progress {
background: #dc3545;
}
.pace-flash-danger .pace .pace-progress-inner {
box-shadow: 0 0 10px #dc3545, 0 0 5px #dc3545;
}
.pace-flash-danger .pace .pace-activity {
border-top-color: #dc3545;
border-left-color: #dc3545;
}
.pace-loading-bar-danger .pace .pace-progress {
background: #dc3545;
color: #dc3545;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-danger .pace .pace-activity {
box-shadow: inset 0 0 0 2px #dc3545, inset 0 0 0 7px #fff;
}
.pace-mac-osx-danger .pace .pace-progress {
background-color: #dc3545;
box-shadow: inset -1px 0 #dc3545, inset 0 -1px #dc3545, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-danger .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-danger .pace-progress {
color: #dc3545;
}
.pace-light .pace .pace-progress {
background: #f8f9fa;
}
.pace-barber-shop-light .pace {
background: #1f2d3d;
}
.pace-barber-shop-light .pace .pace-progress {
background: #f8f9fa;
}
.pace-barber-shop-light .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(31, 45, 61, 0.2) 25%, transparent 25%, transparent 50%, rgba(31, 45, 61, 0.2) 50%, rgba(31, 45, 61, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-light .pace .pace-progress::after {
color: rgba(248, 249, 250, 0.2);
}
.pace-bounce-light .pace .pace-activity {
background: #f8f9fa;
}
.pace-center-atom-light .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-light .pace-progress::before {
background: #f8f9fa;
color: #1f2d3d;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-light .pace-activity {
border-color: #f8f9fa;
}
.pace-center-atom-light .pace-activity::after,
.pace-center-atom-light .pace-activity::before {
border-color: #f8f9fa;
}
.pace-center-circle-light .pace .pace-progress {
background: rgba(248, 249, 250, 0.8);
color: #1f2d3d;
}
.pace-center-radar-light .pace .pace-activity {
border-color: #f8f9fa transparent transparent;
}
.pace-center-radar-light .pace .pace-activity::before {
border-color: #f8f9fa transparent transparent;
}
.pace-center-simple-light .pace {
background: #1f2d3d;
border-color: #f8f9fa;
}
.pace-center-simple-light .pace .pace-progress {
background: #f8f9fa;
}
.pace-material-light .pace {
color: #f8f9fa;
}
.pace-corner-indicator-light .pace .pace-activity {
background: #f8f9fa;
}
.pace-corner-indicator-light .pace .pace-activity::after,
.pace-corner-indicator-light .pace .pace-activity::before {
border: 5px solid #1f2d3d;
}
.pace-corner-indicator-light .pace .pace-activity::before {
border-right-color: rgba(248, 249, 250, 0.2);
border-left-color: rgba(248, 249, 250, 0.2);
}
.pace-corner-indicator-light .pace .pace-activity::after {
border-top-color: rgba(248, 249, 250, 0.2);
border-bottom-color: rgba(248, 249, 250, 0.2);
}
.pace-fill-left-light .pace .pace-progress {
background-color: rgba(248, 249, 250, 0.2);
}
.pace-flash-light .pace .pace-progress {
background: #f8f9fa;
}
.pace-flash-light .pace .pace-progress-inner {
box-shadow: 0 0 10px #f8f9fa, 0 0 5px #f8f9fa;
}
.pace-flash-light .pace .pace-activity {
border-top-color: #f8f9fa;
border-left-color: #f8f9fa;
}
.pace-loading-bar-light .pace .pace-progress {
background: #f8f9fa;
color: #f8f9fa;
box-shadow: 120px 0 #1f2d3d, 240px 0 #1f2d3d;
}
.pace-loading-bar-light .pace .pace-activity {
box-shadow: inset 0 0 0 2px #f8f9fa, inset 0 0 0 7px #1f2d3d;
}
.pace-mac-osx-light .pace .pace-progress {
background-color: #f8f9fa;
box-shadow: inset -1px 0 #f8f9fa, inset 0 -1px #f8f9fa, inset 0 2px rgba(31, 45, 61, 0.5), inset 0 6px rgba(31, 45, 61, 0.3);
}
.pace-mac-osx-light .pace .pace-activity {
background-image: radial-gradient(rgba(31, 45, 61, 0.65) 0, rgba(31, 45, 61, 0.15) 100%);
height: 12px;
}
.pace-progress-color-light .pace-progress {
color: #f8f9fa;
}
.pace-dark .pace .pace-progress {
background: <?php echo $maincolor;?>;
}
.pace-barber-shop-dark .pace {
background: #fff;
}
.pace-barber-shop-dark .pace .pace-progress {
background: <?php echo $maincolor;?>;
}
.pace-barber-shop-dark .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-dark .pace .pace-progress::after {
color: rgba(52, 58, 64, 0.2);
}
.pace-bounce-dark .pace .pace-activity {
background: <?php echo $maincolor;?>;
}
.pace-center-atom-dark .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-dark .pace-progress::before {
background: <?php echo $maincolor;?>;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-dark .pace-activity {
border-color: <?php echo $maincolor;?>;
}
.pace-center-atom-dark .pace-activity::after,
.pace-center-atom-dark .pace-activity::before {
border-color: <?php echo $maincolor;?>;
}
.pace-center-circle-dark .pace .pace-progress {
background: rgba(52, 58, 64, 0.8);
color: #fff;
}
.pace-center-radar-dark .pace .pace-activity {
border-color: <?php echo $maincolor;?> transparent transparent;
}
.pace-center-radar-dark .pace .pace-activity::before {
border-color: <?php echo $maincolor;?> transparent transparent;
}
.pace-center-simple-dark .pace {
background: #fff;
border-color: <?php echo $maincolor;?>;
}
.pace-center-simple-dark .pace .pace-progress {
background: <?php echo $maincolor;?>;
}
.pace-material-dark .pace {
color: <?php echo $maincolor;?>;
}
.pace-corner-indicator-dark .pace .pace-activity {
background: <?php echo $maincolor;?>;
}
.pace-corner-indicator-dark .pace .pace-activity::after,
.pace-corner-indicator-dark .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-dark .pace .pace-activity::before {
border-right-color: rgba(52, 58, 64, 0.2);
border-left-color: rgba(52, 58, 64, 0.2);
}
.pace-corner-indicator-dark .pace .pace-activity::after {
border-top-color: rgba(52, 58, 64, 0.2);
border-bottom-color: rgba(52, 58, 64, 0.2);
}
.pace-fill-left-dark .pace .pace-progress {
background-color: rgba(52, 58, 64, 0.2);
}
.pace-flash-dark .pace .pace-progress {
background: <?php echo $maincolor;?>;
}
.pace-flash-dark .pace .pace-progress-inner {
box-shadow: 0 0 10px <?php echo $maincolor;?>, 0 0 5px <?php echo $maincolor;?>;
}
.pace-flash-dark .pace .pace-activity {
border-top-color: <?php echo $maincolor;?>;
border-left-color: <?php echo $maincolor;?>;
}
.pace-loading-bar-dark .pace .pace-progress {
background: <?php echo $maincolor;?>;
color: <?php echo $maincolor;?>;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-dark .pace .pace-activity {
box-shadow: inset 0 0 0 2px <?php echo $maincolor;?>, inset 0 0 0 7px #fff;
}
.pace-mac-osx-dark .pace .pace-progress {
background-color: <?php echo $maincolor;?>;
box-shadow: inset -1px 0 <?php echo $maincolor;?>, inset 0 -1px <?php echo $maincolor;?>, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-dark .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-dark .pace-progress {
color: <?php echo $maincolor;?>;
}
.pace-lightblue .pace .pace-progress {
background: #3c8dbc;
}
.pace-barber-shop-lightblue .pace {
background: #fff;
}
.pace-barber-shop-lightblue .pace .pace-progress {
background: #3c8dbc;
}
.pace-barber-shop-lightblue .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-lightblue .pace .pace-progress::after {
color: rgba(60, 141, 188, 0.2);
}
.pace-bounce-lightblue .pace .pace-activity {
background: #3c8dbc;
}
.pace-center-atom-lightblue .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-lightblue .pace-progress::before {
background: #3c8dbc;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-lightblue .pace-activity {
border-color: #3c8dbc;
}
.pace-center-atom-lightblue .pace-activity::after,
.pace-center-atom-lightblue .pace-activity::before {
border-color: #3c8dbc;
}
.pace-center-circle-lightblue .pace .pace-progress {
background: rgba(60, 141, 188, 0.8);
color: #fff;
}
.pace-center-radar-lightblue .pace .pace-activity {
border-color: #3c8dbc transparent transparent;
}
.pace-center-radar-lightblue .pace .pace-activity::before {
border-color: #3c8dbc transparent transparent;
}
.pace-center-simple-lightblue .pace {
background: #fff;
border-color: #3c8dbc;
}
.pace-center-simple-lightblue .pace .pace-progress {
background: #3c8dbc;
}
.pace-material-lightblue .pace {
color: #3c8dbc;
}
.pace-corner-indicator-lightblue .pace .pace-activity {
background: #3c8dbc;
}
.pace-corner-indicator-lightblue .pace .pace-activity::after,
.pace-corner-indicator-lightblue .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-lightblue .pace .pace-activity::before {
border-right-color: rgba(60, 141, 188, 0.2);
border-left-color: rgba(60, 141, 188, 0.2);
}
.pace-corner-indicator-lightblue .pace .pace-activity::after {
border-top-color: rgba(60, 141, 188, 0.2);
border-bottom-color: rgba(60, 141, 188, 0.2);
}
.pace-fill-left-lightblue .pace .pace-progress {
background-color: rgba(60, 141, 188, 0.2);
}
.pace-flash-lightblue .pace .pace-progress {
background: #3c8dbc;
}
.pace-flash-lightblue .pace .pace-progress-inner {
box-shadow: 0 0 10px #3c8dbc, 0 0 5px #3c8dbc;
}
.pace-flash-lightblue .pace .pace-activity {
border-top-color: #3c8dbc;
border-left-color: #3c8dbc;
}
.pace-loading-bar-lightblue .pace .pace-progress {
background: #3c8dbc;
color: #3c8dbc;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-lightblue .pace .pace-activity {
box-shadow: inset 0 0 0 2px #3c8dbc, inset 0 0 0 7px #fff;
}
.pace-mac-osx-lightblue .pace .pace-progress {
background-color: #3c8dbc;
box-shadow: inset -1px 0 #3c8dbc, inset 0 -1px #3c8dbc, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-lightblue .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-lightblue .pace-progress {
color: #3c8dbc;
}
.pace-navy .pace .pace-progress {
background: #001f3f;
}
.pace-barber-shop-navy .pace {
background: #fff;
}
.pace-barber-shop-navy .pace .pace-progress {
background: #001f3f;
}
.pace-barber-shop-navy .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-navy .pace .pace-progress::after {
color: rgba(0, 31, 63, 0.2);
}
.pace-bounce-navy .pace .pace-activity {
background: #001f3f;
}
.pace-center-atom-navy .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-navy .pace-progress::before {
background: #001f3f;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-navy .pace-activity {
border-color: #001f3f;
}
.pace-center-atom-navy .pace-activity::after,
.pace-center-atom-navy .pace-activity::before {
border-color: #001f3f;
}
.pace-center-circle-navy .pace .pace-progress {
background: rgba(0, 31, 63, 0.8);
color: #fff;
}
.pace-center-radar-navy .pace .pace-activity {
border-color: #001f3f transparent transparent;
}
.pace-center-radar-navy .pace .pace-activity::before {
border-color: #001f3f transparent transparent;
}
.pace-center-simple-navy .pace {
background: #fff;
border-color: #001f3f;
}
.pace-center-simple-navy .pace .pace-progress {
background: #001f3f;
}
.pace-material-navy .pace {
color: #001f3f;
}
.pace-corner-indicator-navy .pace .pace-activity {
background: #001f3f;
}
.pace-corner-indicator-navy .pace .pace-activity::after,
.pace-corner-indicator-navy .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-navy .pace .pace-activity::before {
border-right-color: rgba(0, 31, 63, 0.2);
border-left-color: rgba(0, 31, 63, 0.2);
}
.pace-corner-indicator-navy .pace .pace-activity::after {
border-top-color: rgba(0, 31, 63, 0.2);
border-bottom-color: rgba(0, 31, 63, 0.2);
}
.pace-fill-left-navy .pace .pace-progress {
background-color: rgba(0, 31, 63, 0.2);
}
.pace-flash-navy .pace .pace-progress {
background: #001f3f;
}
.pace-flash-navy .pace .pace-progress-inner {
box-shadow: 0 0 10px #001f3f, 0 0 5px #001f3f;
}
.pace-flash-navy .pace .pace-activity {
border-top-color: #001f3f;
border-left-color: #001f3f;
}
.pace-loading-bar-navy .pace .pace-progress {
background: #001f3f;
color: #001f3f;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-navy .pace .pace-activity {
box-shadow: inset 0 0 0 2px #001f3f, inset 0 0 0 7px #fff;
}
.pace-mac-osx-navy .pace .pace-progress {
background-color: #001f3f;
box-shadow: inset -1px 0 #001f3f, inset 0 -1px #001f3f, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-navy .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-navy .pace-progress {
color: #001f3f;
}
.pace-olive .pace .pace-progress {
background: #3d9970;
}
.pace-barber-shop-olive .pace {
background: #fff;
}
.pace-barber-shop-olive .pace .pace-progress {
background: #3d9970;
}
.pace-barber-shop-olive .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-olive .pace .pace-progress::after {
color: rgba(61, 153, 112, 0.2);
}
.pace-bounce-olive .pace .pace-activity {
background: #3d9970;
}
.pace-center-atom-olive .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-olive .pace-progress::before {
background: #3d9970;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-olive .pace-activity {
border-color: #3d9970;
}
.pace-center-atom-olive .pace-activity::after,
.pace-center-atom-olive .pace-activity::before {
border-color: #3d9970;
}
.pace-center-circle-olive .pace .pace-progress {
background: rgba(61, 153, 112, 0.8);
color: #fff;
}
.pace-center-radar-olive .pace .pace-activity {
border-color: #3d9970 transparent transparent;
}
.pace-center-radar-olive .pace .pace-activity::before {
border-color: #3d9970 transparent transparent;
}
.pace-center-simple-olive .pace {
background: #fff;
border-color: #3d9970;
}
.pace-center-simple-olive .pace .pace-progress {
background: #3d9970;
}
.pace-material-olive .pace {
color: #3d9970;
}
.pace-corner-indicator-olive .pace .pace-activity {
background: #3d9970;
}
.pace-corner-indicator-olive .pace .pace-activity::after,
.pace-corner-indicator-olive .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-olive .pace .pace-activity::before {
border-right-color: rgba(61, 153, 112, 0.2);
border-left-color: rgba(61, 153, 112, 0.2);
}
.pace-corner-indicator-olive .pace .pace-activity::after {
border-top-color: rgba(61, 153, 112, 0.2);
border-bottom-color: rgba(61, 153, 112, 0.2);
}
.pace-fill-left-olive .pace .pace-progress {
background-color: rgba(61, 153, 112, 0.2);
}
.pace-flash-olive .pace .pace-progress {
background: #3d9970;
}
.pace-flash-olive .pace .pace-progress-inner {
box-shadow: 0 0 10px #3d9970, 0 0 5px #3d9970;
}
.pace-flash-olive .pace .pace-activity {
border-top-color: #3d9970;
border-left-color: #3d9970;
}
.pace-loading-bar-olive .pace .pace-progress {
background: #3d9970;
color: #3d9970;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-olive .pace .pace-activity {
box-shadow: inset 0 0 0 2px #3d9970, inset 0 0 0 7px #fff;
}
.pace-mac-osx-olive .pace .pace-progress {
background-color: #3d9970;
box-shadow: inset -1px 0 #3d9970, inset 0 -1px #3d9970, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-olive .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-olive .pace-progress {
color: #3d9970;
}
.pace-lime .pace .pace-progress {
background: #01ff70;
}
.pace-barber-shop-lime .pace {
background: #1f2d3d;
}
.pace-barber-shop-lime .pace .pace-progress {
background: #01ff70;
}
.pace-barber-shop-lime .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(31, 45, 61, 0.2) 25%, transparent 25%, transparent 50%, rgba(31, 45, 61, 0.2) 50%, rgba(31, 45, 61, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-lime .pace .pace-progress::after {
color: rgba(1, 255, 112, 0.2);
}
.pace-bounce-lime .pace .pace-activity {
background: #01ff70;
}
.pace-center-atom-lime .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-lime .pace-progress::before {
background: #01ff70;
color: #1f2d3d;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-lime .pace-activity {
border-color: #01ff70;
}
.pace-center-atom-lime .pace-activity::after,
.pace-center-atom-lime .pace-activity::before {
border-color: #01ff70;
}
.pace-center-circle-lime .pace .pace-progress {
background: rgba(1, 255, 112, 0.8);
color: #1f2d3d;
}
.pace-center-radar-lime .pace .pace-activity {
border-color: #01ff70 transparent transparent;
}
.pace-center-radar-lime .pace .pace-activity::before {
border-color: #01ff70 transparent transparent;
}
.pace-center-simple-lime .pace {
background: #1f2d3d;
border-color: #01ff70;
}
.pace-center-simple-lime .pace .pace-progress {
background: #01ff70;
}
.pace-material-lime .pace {
color: #01ff70;
}
.pace-corner-indicator-lime .pace .pace-activity {
background: #01ff70;
}
.pace-corner-indicator-lime .pace .pace-activity::after,
.pace-corner-indicator-lime .pace .pace-activity::before {
border: 5px solid #1f2d3d;
}
.pace-corner-indicator-lime .pace .pace-activity::before {
border-right-color: rgba(1, 255, 112, 0.2);
border-left-color: rgba(1, 255, 112, 0.2);
}
.pace-corner-indicator-lime .pace .pace-activity::after {
border-top-color: rgba(1, 255, 112, 0.2);
border-bottom-color: rgba(1, 255, 112, 0.2);
}
.pace-fill-left-lime .pace .pace-progress {
background-color: rgba(1, 255, 112, 0.2);
}
.pace-flash-lime .pace .pace-progress {
background: #01ff70;
}
.pace-flash-lime .pace .pace-progress-inner {
box-shadow: 0 0 10px #01ff70, 0 0 5px #01ff70;
}
.pace-flash-lime .pace .pace-activity {
border-top-color: #01ff70;
border-left-color: #01ff70;
}
.pace-loading-bar-lime .pace .pace-progress {
background: #01ff70;
color: #01ff70;
box-shadow: 120px 0 #1f2d3d, 240px 0 #1f2d3d;
}
.pace-loading-bar-lime .pace .pace-activity {
box-shadow: inset 0 0 0 2px #01ff70, inset 0 0 0 7px #1f2d3d;
}
.pace-mac-osx-lime .pace .pace-progress {
background-color: #01ff70;
box-shadow: inset -1px 0 #01ff70, inset 0 -1px #01ff70, inset 0 2px rgba(31, 45, 61, 0.5), inset 0 6px rgba(31, 45, 61, 0.3);
}
.pace-mac-osx-lime .pace .pace-activity {
background-image: radial-gradient(rgba(31, 45, 61, 0.65) 0, rgba(31, 45, 61, 0.15) 100%);
height: 12px;
}
.pace-progress-color-lime .pace-progress {
color: #01ff70;
}
.pace-fuchsia .pace .pace-progress {
background: #f012be;
}
.pace-barber-shop-fuchsia .pace {
background: #fff;
}
.pace-barber-shop-fuchsia .pace .pace-progress {
background: #f012be;
}
.pace-barber-shop-fuchsia .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-fuchsia .pace .pace-progress::after {
color: rgba(240, 18, 190, 0.2);
}
.pace-bounce-fuchsia .pace .pace-activity {
background: #f012be;
}
.pace-center-atom-fuchsia .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-fuchsia .pace-progress::before {
background: #f012be;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-fuchsia .pace-activity {
border-color: #f012be;
}
.pace-center-atom-fuchsia .pace-activity::after,
.pace-center-atom-fuchsia .pace-activity::before {
border-color: #f012be;
}
.pace-center-circle-fuchsia .pace .pace-progress {
background: rgba(240, 18, 190, 0.8);
color: #fff;
}
.pace-center-radar-fuchsia .pace .pace-activity {
border-color: #f012be transparent transparent;
}
.pace-center-radar-fuchsia .pace .pace-activity::before {
border-color: #f012be transparent transparent;
}
.pace-center-simple-fuchsia .pace {
background: #fff;
border-color: #f012be;
}
.pace-center-simple-fuchsia .pace .pace-progress {
background: #f012be;
}
.pace-material-fuchsia .pace {
color: #f012be;
}
.pace-corner-indicator-fuchsia .pace .pace-activity {
background: #f012be;
}
.pace-corner-indicator-fuchsia .pace .pace-activity::after,
.pace-corner-indicator-fuchsia .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-fuchsia .pace .pace-activity::before {
border-right-color: rgba(240, 18, 190, 0.2);
border-left-color: rgba(240, 18, 190, 0.2);
}
.pace-corner-indicator-fuchsia .pace .pace-activity::after {
border-top-color: rgba(240, 18, 190, 0.2);
border-bottom-color: rgba(240, 18, 190, 0.2);
}
.pace-fill-left-fuchsia .pace .pace-progress {
background-color: rgba(240, 18, 190, 0.2);
}
.pace-flash-fuchsia .pace .pace-progress {
background: #f012be;
}
.pace-flash-fuchsia .pace .pace-progress-inner {
box-shadow: 0 0 10px #f012be, 0 0 5px #f012be;
}
.pace-flash-fuchsia .pace .pace-activity {
border-top-color: #f012be;
border-left-color: #f012be;
}
.pace-loading-bar-fuchsia .pace .pace-progress {
background: #f012be;
color: #f012be;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-fuchsia .pace .pace-activity {
box-shadow: inset 0 0 0 2px #f012be, inset 0 0 0 7px #fff;
}
.pace-mac-osx-fuchsia .pace .pace-progress {
background-color: #f012be;
box-shadow: inset -1px 0 #f012be, inset 0 -1px #f012be, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-fuchsia .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-fuchsia .pace-progress {
color: #f012be;
}
.pace-maroon .pace .pace-progress {
background: #d81b60;
}
.pace-barber-shop-maroon .pace {
background: #fff;
}
.pace-barber-shop-maroon .pace .pace-progress {
background: #d81b60;
}
.pace-barber-shop-maroon .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-maroon .pace .pace-progress::after {
color: rgba(216, 27, 96, 0.2);
}
.pace-bounce-maroon .pace .pace-activity {
background: #d81b60;
}
.pace-center-atom-maroon .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-maroon .pace-progress::before {
background: #d81b60;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-maroon .pace-activity {
border-color: #d81b60;
}
.pace-center-atom-maroon .pace-activity::after,
.pace-center-atom-maroon .pace-activity::before {
border-color: #d81b60;
}
.pace-center-circle-maroon .pace .pace-progress {
background: rgba(216, 27, 96, 0.8);
color: #fff;
}
.pace-center-radar-maroon .pace .pace-activity {
border-color: #d81b60 transparent transparent;
}
.pace-center-radar-maroon .pace .pace-activity::before {
border-color: #d81b60 transparent transparent;
}
.pace-center-simple-maroon .pace {
background: #fff;
border-color: #d81b60;
}
.pace-center-simple-maroon .pace .pace-progress {
background: #d81b60;
}
.pace-material-maroon .pace {
color: #d81b60;
}
.pace-corner-indicator-maroon .pace .pace-activity {
background: #d81b60;
}
.pace-corner-indicator-maroon .pace .pace-activity::after,
.pace-corner-indicator-maroon .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-maroon .pace .pace-activity::before {
border-right-color: rgba(216, 27, 96, 0.2);
border-left-color: rgba(216, 27, 96, 0.2);
}
.pace-corner-indicator-maroon .pace .pace-activity::after {
border-top-color: rgba(216, 27, 96, 0.2);
border-bottom-color: rgba(216, 27, 96, 0.2);
}
.pace-fill-left-maroon .pace .pace-progress {
background-color: rgba(216, 27, 96, 0.2);
}
.pace-flash-maroon .pace .pace-progress {
background: #d81b60;
}
.pace-flash-maroon .pace .pace-progress-inner {
box-shadow: 0 0 10px #d81b60, 0 0 5px #d81b60;
}
.pace-flash-maroon .pace .pace-activity {
border-top-color: #d81b60;
border-left-color: #d81b60;
}
.pace-loading-bar-maroon .pace .pace-progress {
background: #d81b60;
color: #d81b60;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-maroon .pace .pace-activity {
box-shadow: inset 0 0 0 2px #d81b60, inset 0 0 0 7px #fff;
}
.pace-mac-osx-maroon .pace .pace-progress {
background-color: #d81b60;
box-shadow: inset -1px 0 #d81b60, inset 0 -1px #d81b60, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-maroon .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-maroon .pace-progress {
color: #d81b60;
}
.pace-blue .pace .pace-progress {
background: <?php echo $accent_color;?>;
}
.pace-barber-shop-blue .pace {
background: #fff;
}
.pace-barber-shop-blue .pace .pace-progress {
background: <?php echo $accent_color;?>;
}
.pace-barber-shop-blue .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-blue .pace .pace-progress::after {
color: rgba(0, 123, 255, 0.2);
}
.pace-bounce-blue .pace .pace-activity {
background: <?php echo $accent_color;?>;
}
.pace-center-atom-blue .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-blue .pace-progress::before {
background: <?php echo $accent_color;?>;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-blue .pace-activity {
border-color: <?php echo $accent_color;?>;
}
.pace-center-atom-blue .pace-activity::after,
.pace-center-atom-blue .pace-activity::before {
border-color: <?php echo $accent_color;?>;
}
.pace-center-circle-blue .pace .pace-progress {
background: rgba(0, 123, 255, 0.8);
color: #fff;
}
.pace-center-radar-blue .pace .pace-activity {
border-color: <?php echo $accent_color;?>; transparent transparent;
}
.pace-center-radar-blue .pace .pace-activity::before {
border-color: <?php echo $accent_color;?>; transparent transparent;
}
.pace-center-simple-blue .pace {
background: #fff;
border-color: <?php echo $accent_color;?>;
}
.pace-center-simple-blue .pace .pace-progress {
background: <?php echo $accent_color;?>;
}
.pace-material-blue .pace {
color: <?php echo $accent_color;?>;
}
.pace-corner-indicator-blue .pace .pace-activity {
background: <?php echo $accent_color;?>;
}
.pace-corner-indicator-blue .pace .pace-activity::after,
.pace-corner-indicator-blue .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-blue .pace .pace-activity::before {
border-right-color: rgba(0, 123, 255, 0.2);
border-left-color: rgba(0, 123, 255, 0.2);
}
.pace-corner-indicator-blue .pace .pace-activity::after {
border-top-color: rgba(0, 123, 255, 0.2);
border-bottom-color: rgba(0, 123, 255, 0.2);
}
.pace-fill-left-blue .pace .pace-progress {
background-color: rgba(0, 123, 255, 0.2);
}
.pace-flash-blue .pace .pace-progress {
background: <?php echo $accent_color;?>;
}
.pace-flash-blue .pace .pace-progress-inner {
box-shadow: 0 0 10px <?php echo $accent_color;?>;, 0 0 5px <?php echo $accent_color;?>;
}
.pace-flash-blue .pace .pace-activity {
border-top-color: <?php echo $accent_color;?>;
border-left-color: <?php echo $accent_color;?>;
}
.pace-loading-bar-blue .pace .pace-progress {
background: <?php echo $accent_color;?>;
color: <?php echo $accent_color;?>;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-blue .pace .pace-activity {
box-shadow: inset 0 0 0 2px <?php echo $accent_color;?>;, inset 0 0 0 7px #fff;
}
.pace-mac-osx-blue .pace .pace-progress {
background-color: <?php echo $accent_color;?>;
box-shadow: inset -1px 0 <?php echo $accent_color;?>;, inset 0 -1px <?php echo $accent_color;?>;, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-blue .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-blue .pace-progress {
color: <?php echo $accent_color;?>;
}
.pace-indigo .pace .pace-progress {
background: #6610f2;
}
.pace-barber-shop-indigo .pace {
background: #fff;
}
.pace-barber-shop-indigo .pace .pace-progress {
background: #6610f2;
}
.pace-barber-shop-indigo .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-indigo .pace .pace-progress::after {
color: rgba(102, 16, 242, 0.2);
}
.pace-bounce-indigo .pace .pace-activity {
background: #6610f2;
}
.pace-center-atom-indigo .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-indigo .pace-progress::before {
background: #6610f2;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-indigo .pace-activity {
border-color: #6610f2;
}
.pace-center-atom-indigo .pace-activity::after,
.pace-center-atom-indigo .pace-activity::before {
border-color: #6610f2;
}
.pace-center-circle-indigo .pace .pace-progress {
background: rgba(102, 16, 242, 0.8);
color: #fff;
}
.pace-center-radar-indigo .pace .pace-activity {
border-color: #6610f2 transparent transparent;
}
.pace-center-radar-indigo .pace .pace-activity::before {
border-color: #6610f2 transparent transparent;
}
.pace-center-simple-indigo .pace {
background: #fff;
border-color: #6610f2;
}
.pace-center-simple-indigo .pace .pace-progress {
background: #6610f2;
}
.pace-material-indigo .pace {
color: #6610f2;
}
.pace-corner-indicator-indigo .pace .pace-activity {
background: #6610f2;
}
.pace-corner-indicator-indigo .pace .pace-activity::after,
.pace-corner-indicator-indigo .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-indigo .pace .pace-activity::before {
border-right-color: rgba(102, 16, 242, 0.2);
border-left-color: rgba(102, 16, 242, 0.2);
}
.pace-corner-indicator-indigo .pace .pace-activity::after {
border-top-color: rgba(102, 16, 242, 0.2);
border-bottom-color: rgba(102, 16, 242, 0.2);
}
.pace-fill-left-indigo .pace .pace-progress {
background-color: rgba(102, 16, 242, 0.2);
}
.pace-flash-indigo .pace .pace-progress {
background: #6610f2;
}
.pace-flash-indigo .pace .pace-progress-inner {
box-shadow: 0 0 10px #6610f2, 0 0 5px #6610f2;
}
.pace-flash-indigo .pace .pace-activity {
border-top-color: #6610f2;
border-left-color: #6610f2;
}
.pace-loading-bar-indigo .pace .pace-progress {
background: #6610f2;
color: #6610f2;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-indigo .pace .pace-activity {
box-shadow: inset 0 0 0 2px #6610f2, inset 0 0 0 7px #fff;
}
.pace-mac-osx-indigo .pace .pace-progress {
background-color: #6610f2;
box-shadow: inset -1px 0 #6610f2, inset 0 -1px #6610f2, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-indigo .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-indigo .pace-progress {
color: #6610f2;
}
.pace-purple .pace .pace-progress {
background: #6f42c1;
}
.pace-barber-shop-purple .pace {
background: #fff;
}
.pace-barber-shop-purple .pace .pace-progress {
background: #6f42c1;
}
.pace-barber-shop-purple .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-purple .pace .pace-progress::after {
color: rgba(111, 66, 193, 0.2);
}
.pace-bounce-purple .pace .pace-activity {
background: #6f42c1;
}
.pace-center-atom-purple .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-purple .pace-progress::before {
background: #6f42c1;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-purple .pace-activity {
border-color: #6f42c1;
}
.pace-center-atom-purple .pace-activity::after,
.pace-center-atom-purple .pace-activity::before {
border-color: #6f42c1;
}
.pace-center-circle-purple .pace .pace-progress {
background: rgba(111, 66, 193, 0.8);
color: #fff;
}
.pace-center-radar-purple .pace .pace-activity {
border-color: #6f42c1 transparent transparent;
}
.pace-center-radar-purple .pace .pace-activity::before {
border-color: #6f42c1 transparent transparent;
}
.pace-center-simple-purple .pace {
background: #fff;
border-color: #6f42c1;
}
.pace-center-simple-purple .pace .pace-progress {
background: #6f42c1;
}
.pace-material-purple .pace {
color: #6f42c1;
}
.pace-corner-indicator-purple .pace .pace-activity {
background: #6f42c1;
}
.pace-corner-indicator-purple .pace .pace-activity::after,
.pace-corner-indicator-purple .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-purple .pace .pace-activity::before {
border-right-color: rgba(111, 66, 193, 0.2);
border-left-color: rgba(111, 66, 193, 0.2);
}
.pace-corner-indicator-purple .pace .pace-activity::after {
border-top-color: rgba(111, 66, 193, 0.2);
border-bottom-color: rgba(111, 66, 193, 0.2);
}
.pace-fill-left-purple .pace .pace-progress {
background-color: rgba(111, 66, 193, 0.2);
}
.pace-flash-purple .pace .pace-progress {
background: #6f42c1;
}
.pace-flash-purple .pace .pace-progress-inner {
box-shadow: 0 0 10px #6f42c1, 0 0 5px #6f42c1;
}
.pace-flash-purple .pace .pace-activity {
border-top-color: #6f42c1;
border-left-color: #6f42c1;
}
.pace-loading-bar-purple .pace .pace-progress {
background: #6f42c1;
color: #6f42c1;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-purple .pace .pace-activity {
box-shadow: inset 0 0 0 2px #6f42c1, inset 0 0 0 7px #fff;
}
.pace-mac-osx-purple .pace .pace-progress {
background-color: #6f42c1;
box-shadow: inset -1px 0 #6f42c1, inset 0 -1px #6f42c1, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-purple .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-purple .pace-progress {
color: #6f42c1;
}
.pace-pink .pace .pace-progress {
background: #e83e8c;
}
.pace-barber-shop-pink .pace {
background: #fff;
}
.pace-barber-shop-pink .pace .pace-progress {
background: #e83e8c;
}
.pace-barber-shop-pink .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-pink .pace .pace-progress::after {
color: rgba(232, 62, 140, 0.2);
}
.pace-bounce-pink .pace .pace-activity {
background: #e83e8c;
}
.pace-center-atom-pink .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-pink .pace-progress::before {
background: #e83e8c;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-pink .pace-activity {
border-color: #e83e8c;
}
.pace-center-atom-pink .pace-activity::after,
.pace-center-atom-pink .pace-activity::before {
border-color: #e83e8c;
}
.pace-center-circle-pink .pace .pace-progress {
background: rgba(232, 62, 140, 0.8);
color: #fff;
}
.pace-center-radar-pink .pace .pace-activity {
border-color: #e83e8c transparent transparent;
}
.pace-center-radar-pink .pace .pace-activity::before {
border-color: #e83e8c transparent transparent;
}
.pace-center-simple-pink .pace {
background: #fff;
border-color: #e83e8c;
}
.pace-center-simple-pink .pace .pace-progress {
background: #e83e8c;
}
.pace-material-pink .pace {
color: #e83e8c;
}
.pace-corner-indicator-pink .pace .pace-activity {
background: #e83e8c;
}
.pace-corner-indicator-pink .pace .pace-activity::after,
.pace-corner-indicator-pink .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-pink .pace .pace-activity::before {
border-right-color: rgba(232, 62, 140, 0.2);
border-left-color: rgba(232, 62, 140, 0.2);
}
.pace-corner-indicator-pink .pace .pace-activity::after {
border-top-color: rgba(232, 62, 140, 0.2);
border-bottom-color: rgba(232, 62, 140, 0.2);
}
.pace-fill-left-pink .pace .pace-progress {
background-color: rgba(232, 62, 140, 0.2);
}
.pace-flash-pink .pace .pace-progress {
background: #e83e8c;
}
.pace-flash-pink .pace .pace-progress-inner {
box-shadow: 0 0 10px #e83e8c, 0 0 5px #e83e8c;
}
.pace-flash-pink .pace .pace-activity {
border-top-color: #e83e8c;
border-left-color: #e83e8c;
}
.pace-loading-bar-pink .pace .pace-progress {
background: #e83e8c;
color: #e83e8c;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-pink .pace .pace-activity {
box-shadow: inset 0 0 0 2px #e83e8c, inset 0 0 0 7px #fff;
}
.pace-mac-osx-pink .pace .pace-progress {
background-color: #e83e8c;
box-shadow: inset -1px 0 #e83e8c, inset 0 -1px #e83e8c, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-pink .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-pink .pace-progress {
color: #e83e8c;
}
.pace-red .pace .pace-progress {
background: #dc3545;
}
.pace-barber-shop-red .pace {
background: #fff;
}
.pace-barber-shop-red .pace .pace-progress {
background: #dc3545;
}
.pace-barber-shop-red .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-red .pace .pace-progress::after {
color: rgba(220, 53, 69, 0.2);
}
.pace-bounce-red .pace .pace-activity {
background: #dc3545;
}
.pace-center-atom-red .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-red .pace-progress::before {
background: #dc3545;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-red .pace-activity {
border-color: #dc3545;
}
.pace-center-atom-red .pace-activity::after,
.pace-center-atom-red .pace-activity::before {
border-color: #dc3545;
}
.pace-center-circle-red .pace .pace-progress {
background: rgba(220, 53, 69, 0.8);
color: #fff;
}
.pace-center-radar-red .pace .pace-activity {
border-color: #dc3545 transparent transparent;
}
.pace-center-radar-red .pace .pace-activity::before {
border-color: #dc3545 transparent transparent;
}
.pace-center-simple-red .pace {
background: #fff;
border-color: #dc3545;
}
.pace-center-simple-red .pace .pace-progress {
background: #dc3545;
}
.pace-material-red .pace {
color: #dc3545;
}
.pace-corner-indicator-red .pace .pace-activity {
background: #dc3545;
}
.pace-corner-indicator-red .pace .pace-activity::after,
.pace-corner-indicator-red .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-red .pace .pace-activity::before {
border-right-color: rgba(220, 53, 69, 0.2);
border-left-color: rgba(220, 53, 69, 0.2);
}
.pace-corner-indicator-red .pace .pace-activity::after {
border-top-color: rgba(220, 53, 69, 0.2);
border-bottom-color: rgba(220, 53, 69, 0.2);
}
.pace-fill-left-red .pace .pace-progress {
background-color: rgba(220, 53, 69, 0.2);
}
.pace-flash-red .pace .pace-progress {
background: #dc3545;
}
.pace-flash-red .pace .pace-progress-inner {
box-shadow: 0 0 10px #dc3545, 0 0 5px #dc3545;
}
.pace-flash-red .pace .pace-activity {
border-top-color: #dc3545;
border-left-color: #dc3545;
}
.pace-loading-bar-red .pace .pace-progress {
background: #dc3545;
color: #dc3545;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-red .pace .pace-activity {
box-shadow: inset 0 0 0 2px #dc3545, inset 0 0 0 7px #fff;
}
.pace-mac-osx-red .pace .pace-progress {
background-color: #dc3545;
box-shadow: inset -1px 0 #dc3545, inset 0 -1px #dc3545, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-red .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-red .pace-progress {
color: #dc3545;
}
.pace-orange .pace .pace-progress {
background: #fd7e14;
}
.pace-barber-shop-orange .pace {
background: #1f2d3d;
}
.pace-barber-shop-orange .pace .pace-progress {
background: #fd7e14;
}
.pace-barber-shop-orange .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(31, 45, 61, 0.2) 25%, transparent 25%, transparent 50%, rgba(31, 45, 61, 0.2) 50%, rgba(31, 45, 61, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-orange .pace .pace-progress::after {
color: rgba(253, 126, 20, 0.2);
}
.pace-bounce-orange .pace .pace-activity {
background: #fd7e14;
}
.pace-center-atom-orange .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-orange .pace-progress::before {
background: #fd7e14;
color: #1f2d3d;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-orange .pace-activity {
border-color: #fd7e14;
}
.pace-center-atom-orange .pace-activity::after,
.pace-center-atom-orange .pace-activity::before {
border-color: #fd7e14;
}
.pace-center-circle-orange .pace .pace-progress {
background: rgba(253, 126, 20, 0.8);
color: #1f2d3d;
}
.pace-center-radar-orange .pace .pace-activity {
border-color: #fd7e14 transparent transparent;
}
.pace-center-radar-orange .pace .pace-activity::before {
border-color: #fd7e14 transparent transparent;
}
.pace-center-simple-orange .pace {
background: #1f2d3d;
border-color: #fd7e14;
}
.pace-center-simple-orange .pace .pace-progress {
background: #fd7e14;
}
.pace-material-orange .pace {
color: #fd7e14;
}
.pace-corner-indicator-orange .pace .pace-activity {
background: #fd7e14;
}
.pace-corner-indicator-orange .pace .pace-activity::after,
.pace-corner-indicator-orange .pace .pace-activity::before {
border: 5px solid #1f2d3d;
}
.pace-corner-indicator-orange .pace .pace-activity::before {
border-right-color: rgba(253, 126, 20, 0.2);
border-left-color: rgba(253, 126, 20, 0.2);
}
.pace-corner-indicator-orange .pace .pace-activity::after {
border-top-color: rgba(253, 126, 20, 0.2);
border-bottom-color: rgba(253, 126, 20, 0.2);
}
.pace-fill-left-orange .pace .pace-progress {
background-color: rgba(253, 126, 20, 0.2);
}
.pace-flash-orange .pace .pace-progress {
background: #fd7e14;
}
.pace-flash-orange .pace .pace-progress-inner {
box-shadow: 0 0 10px #fd7e14, 0 0 5px #fd7e14;
}
.pace-flash-orange .pace .pace-activity {
border-top-color: #fd7e14;
border-left-color: #fd7e14;
}
.pace-loading-bar-orange .pace .pace-progress {
background: #fd7e14;
color: #fd7e14;
box-shadow: 120px 0 #1f2d3d, 240px 0 #1f2d3d;
}
.pace-loading-bar-orange .pace .pace-activity {
box-shadow: inset 0 0 0 2px #fd7e14, inset 0 0 0 7px #1f2d3d;
}
.pace-mac-osx-orange .pace .pace-progress {
background-color: #fd7e14;
box-shadow: inset -1px 0 #fd7e14, inset 0 -1px #fd7e14, inset 0 2px rgba(31, 45, 61, 0.5), inset 0 6px rgba(31, 45, 61, 0.3);
}
.pace-mac-osx-orange .pace .pace-activity {
background-image: radial-gradient(rgba(31, 45, 61, 0.65) 0, rgba(31, 45, 61, 0.15) 100%);
height: 12px;
}
.pace-progress-color-orange .pace-progress {
color: #fd7e14;
}
.pace-yellow .pace .pace-progress {
background: #ffc107;
}
.pace-barber-shop-yellow .pace {
background: #1f2d3d;
}
.pace-barber-shop-yellow .pace .pace-progress {
background: #ffc107;
}
.pace-barber-shop-yellow .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(31, 45, 61, 0.2) 25%, transparent 25%, transparent 50%, rgba(31, 45, 61, 0.2) 50%, rgba(31, 45, 61, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-yellow .pace .pace-progress::after {
color: rgba(255, 193, 7, 0.2);
}
.pace-bounce-yellow .pace .pace-activity {
background: #ffc107;
}
.pace-center-atom-yellow .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-yellow .pace-progress::before {
background: #ffc107;
color: #1f2d3d;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-yellow .pace-activity {
border-color: #ffc107;
}
.pace-center-atom-yellow .pace-activity::after,
.pace-center-atom-yellow .pace-activity::before {
border-color: #ffc107;
}
.pace-center-circle-yellow .pace .pace-progress {
background: rgba(255, 193, 7, 0.8);
color: #1f2d3d;
}
.pace-center-radar-yellow .pace .pace-activity {
border-color: #ffc107 transparent transparent;
}
.pace-center-radar-yellow .pace .pace-activity::before {
border-color: #ffc107 transparent transparent;
}
.pace-center-simple-yellow .pace {
background: #1f2d3d;
border-color: #ffc107;
}
.pace-center-simple-yellow .pace .pace-progress {
background: #ffc107;
}
.pace-material-yellow .pace {
color: #ffc107;
}
.pace-corner-indicator-yellow .pace .pace-activity {
background: #ffc107;
}
.pace-corner-indicator-yellow .pace .pace-activity::after,
.pace-corner-indicator-yellow .pace .pace-activity::before {
border: 5px solid #1f2d3d;
}
.pace-corner-indicator-yellow .pace .pace-activity::before {
border-right-color: rgba(255, 193, 7, 0.2);
border-left-color: rgba(255, 193, 7, 0.2);
}
.pace-corner-indicator-yellow .pace .pace-activity::after {
border-top-color: rgba(255, 193, 7, 0.2);
border-bottom-color: rgba(255, 193, 7, 0.2);
}
.pace-fill-left-yellow .pace .pace-progress {
background-color: rgba(255, 193, 7, 0.2);
}
.pace-flash-yellow .pace .pace-progress {
background: #ffc107;
}
.pace-flash-yellow .pace .pace-progress-inner {
box-shadow: 0 0 10px #ffc107, 0 0 5px #ffc107;
}
.pace-flash-yellow .pace .pace-activity {
border-top-color: #ffc107;
border-left-color: #ffc107;
}
.pace-loading-bar-yellow .pace .pace-progress {
background: #ffc107;
color: #ffc107;
box-shadow: 120px 0 #1f2d3d, 240px 0 #1f2d3d;
}
.pace-loading-bar-yellow .pace .pace-activity {
box-shadow: inset 0 0 0 2px #ffc107, inset 0 0 0 7px #1f2d3d;
}
.pace-mac-osx-yellow .pace .pace-progress {
background-color: #ffc107;
box-shadow: inset -1px 0 #ffc107, inset 0 -1px #ffc107, inset 0 2px rgba(31, 45, 61, 0.5), inset 0 6px rgba(31, 45, 61, 0.3);
}
.pace-mac-osx-yellow .pace .pace-activity {
background-image: radial-gradient(rgba(31, 45, 61, 0.65) 0, rgba(31, 45, 61, 0.15) 100%);
height: 12px;
}
.pace-progress-color-yellow .pace-progress {
color: #ffc107;
}
.pace-green .pace .pace-progress {
background: #28a745;
}
.pace-barber-shop-green .pace {
background: #fff;
}
.pace-barber-shop-green .pace .pace-progress {
background: #28a745;
}
.pace-barber-shop-green .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-green .pace .pace-progress::after {
color: rgba(40, 167, 69, 0.2);
}
.pace-bounce-green .pace .pace-activity {
background: #28a745;
}
.pace-center-atom-green .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-green .pace-progress::before {
background: #28a745;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-green .pace-activity {
border-color: #28a745;
}
.pace-center-atom-green .pace-activity::after,
.pace-center-atom-green .pace-activity::before {
border-color: #28a745;
}
.pace-center-circle-green .pace .pace-progress {
background: rgba(40, 167, 69, 0.8);
color: #fff;
}
.pace-center-radar-green .pace .pace-activity {
border-color: #28a745 transparent transparent;
}
.pace-center-radar-green .pace .pace-activity::before {
border-color: #28a745 transparent transparent;
}
.pace-center-simple-green .pace {
background: #fff;
border-color: #28a745;
}
.pace-center-simple-green .pace .pace-progress {
background: #28a745;
}
.pace-material-green .pace {
color: #28a745;
}
.pace-corner-indicator-green .pace .pace-activity {
background: #28a745;
}
.pace-corner-indicator-green .pace .pace-activity::after,
.pace-corner-indicator-green .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-green .pace .pace-activity::before {
border-right-color: rgba(40, 167, 69, 0.2);
border-left-color: rgba(40, 167, 69, 0.2);
}
.pace-corner-indicator-green .pace .pace-activity::after {
border-top-color: rgba(40, 167, 69, 0.2);
border-bottom-color: rgba(40, 167, 69, 0.2);
}
.pace-fill-left-green .pace .pace-progress {
background-color: rgba(40, 167, 69, 0.2);
}
.pace-flash-green .pace .pace-progress {
background: #28a745;
}
.pace-flash-green .pace .pace-progress-inner {
box-shadow: 0 0 10px #28a745, 0 0 5px #28a745;
}
.pace-flash-green .pace .pace-activity {
border-top-color: #28a745;
border-left-color: #28a745;
}
.pace-loading-bar-green .pace .pace-progress {
background: #28a745;
color: #28a745;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-green .pace .pace-activity {
box-shadow: inset 0 0 0 2px #28a745, inset 0 0 0 7px #fff;
}
.pace-mac-osx-green .pace .pace-progress {
background-color: #28a745;
box-shadow: inset -1px 0 #28a745, inset 0 -1px #28a745, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-green .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-green .pace-progress {
color: #28a745;
}
.pace-teal .pace .pace-progress {
background: #20c997;
}
.pace-barber-shop-teal .pace {
background: #fff;
}
.pace-barber-shop-teal .pace .pace-progress {
background: #20c997;
}
.pace-barber-shop-teal .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-teal .pace .pace-progress::after {
color: rgba(32, 201, 151, 0.2);
}
.pace-bounce-teal .pace .pace-activity {
background: #20c997;
}
.pace-center-atom-teal .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-teal .pace-progress::before {
background: #20c997;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-teal .pace-activity {
border-color: #20c997;
}
.pace-center-atom-teal .pace-activity::after,
.pace-center-atom-teal .pace-activity::before {
border-color: #20c997;
}
.pace-center-circle-teal .pace .pace-progress {
background: rgba(32, 201, 151, 0.8);
color: #fff;
}
.pace-center-radar-teal .pace .pace-activity {
border-color: #20c997 transparent transparent;
}
.pace-center-radar-teal .pace .pace-activity::before {
border-color: #20c997 transparent transparent;
}
.pace-center-simple-teal .pace {
background: #fff;
border-color: #20c997;
}
.pace-center-simple-teal .pace .pace-progress {
background: #20c997;
}
.pace-material-teal .pace {
color: #20c997;
}
.pace-corner-indicator-teal .pace .pace-activity {
background: #20c997;
}
.pace-corner-indicator-teal .pace .pace-activity::after,
.pace-corner-indicator-teal .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-teal .pace .pace-activity::before {
border-right-color: rgba(32, 201, 151, 0.2);
border-left-color: rgba(32, 201, 151, 0.2);
}
.pace-corner-indicator-teal .pace .pace-activity::after {
border-top-color: rgba(32, 201, 151, 0.2);
border-bottom-color: rgba(32, 201, 151, 0.2);
}
.pace-fill-left-teal .pace .pace-progress {
background-color: rgba(32, 201, 151, 0.2);
}
.pace-flash-teal .pace .pace-progress {
background: #20c997;
}
.pace-flash-teal .pace .pace-progress-inner {
box-shadow: 0 0 10px #20c997, 0 0 5px #20c997;
}
.pace-flash-teal .pace .pace-activity {
border-top-color: #20c997;
border-left-color: #20c997;
}
.pace-loading-bar-teal .pace .pace-progress {
background: #20c997;
color: #20c997;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-teal .pace .pace-activity {
box-shadow: inset 0 0 0 2px #20c997, inset 0 0 0 7px #fff;
}
.pace-mac-osx-teal .pace .pace-progress {
background-color: #20c997;
box-shadow: inset -1px 0 #20c997, inset 0 -1px #20c997, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-teal .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-teal .pace-progress {
color: #20c997;
}
.pace-cyan .pace .pace-progress {
background: #17a2b8;
}
.pace-barber-shop-cyan .pace {
background: #fff;
}
.pace-barber-shop-cyan .pace .pace-progress {
background: #17a2b8;
}
.pace-barber-shop-cyan .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-cyan .pace .pace-progress::after {
color: rgba(23, 162, 184, 0.2);
}
.pace-bounce-cyan .pace .pace-activity {
background: #17a2b8;
}
.pace-center-atom-cyan .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-cyan .pace-progress::before {
background: #17a2b8;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-cyan .pace-activity {
border-color: #17a2b8;
}
.pace-center-atom-cyan .pace-activity::after,
.pace-center-atom-cyan .pace-activity::before {
border-color: #17a2b8;
}
.pace-center-circle-cyan .pace .pace-progress {
background: rgba(23, 162, 184, 0.8);
color: #fff;
}
.pace-center-radar-cyan .pace .pace-activity {
border-color: #17a2b8 transparent transparent;
}
.pace-center-radar-cyan .pace .pace-activity::before {
border-color: #17a2b8 transparent transparent;
}
.pace-center-simple-cyan .pace {
background: #fff;
border-color: #17a2b8;
}
.pace-center-simple-cyan .pace .pace-progress {
background: #17a2b8;
}
.pace-material-cyan .pace {
color: #17a2b8;
}
.pace-corner-indicator-cyan .pace .pace-activity {
background: #17a2b8;
}
.pace-corner-indicator-cyan .pace .pace-activity::after,
.pace-corner-indicator-cyan .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-cyan .pace .pace-activity::before {
border-right-color: rgba(23, 162, 184, 0.2);
border-left-color: rgba(23, 162, 184, 0.2);
}
.pace-corner-indicator-cyan .pace .pace-activity::after {
border-top-color: rgba(23, 162, 184, 0.2);
border-bottom-color: rgba(23, 162, 184, 0.2);
}
.pace-fill-left-cyan .pace .pace-progress {
background-color: rgba(23, 162, 184, 0.2);
}
.pace-flash-cyan .pace .pace-progress {
background: #17a2b8;
}
.pace-flash-cyan .pace .pace-progress-inner {
box-shadow: 0 0 10px #17a2b8, 0 0 5px #17a2b8;
}
.pace-flash-cyan .pace .pace-activity {
border-top-color: #17a2b8;
border-left-color: #17a2b8;
}
.pace-loading-bar-cyan .pace .pace-progress {
background: #17a2b8;
color: #17a2b8;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-cyan .pace .pace-activity {
box-shadow: inset 0 0 0 2px #17a2b8, inset 0 0 0 7px #fff;
}
.pace-mac-osx-cyan .pace .pace-progress {
background-color: #17a2b8;
box-shadow: inset -1px 0 #17a2b8, inset 0 -1px #17a2b8, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-cyan .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-cyan .pace-progress {
color: #17a2b8;
}
.pace-white .pace .pace-progress {
background: #fff;
}
.pace-barber-shop-white .pace {
background: #1f2d3d;
}
.pace-barber-shop-white .pace .pace-progress {
background: #fff;
}
.pace-barber-shop-white .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(31, 45, 61, 0.2) 25%, transparent 25%, transparent 50%, rgba(31, 45, 61, 0.2) 50%, rgba(31, 45, 61, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-white .pace .pace-progress::after {
color: rgba(255, 255, 255, 0.2);
}
.pace-bounce-white .pace .pace-activity {
background: #fff;
}
.pace-center-atom-white .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-white .pace-progress::before {
background: #fff;
color: #1f2d3d;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-white .pace-activity {
border-color: #fff;
}
.pace-center-atom-white .pace-activity::after,
.pace-center-atom-white .pace-activity::before {
border-color: #fff;
}
.pace-center-circle-white .pace .pace-progress {
background: rgba(255, 255, 255, 0.8);
color: #1f2d3d;
}
.pace-center-radar-white .pace .pace-activity {
border-color: #fff transparent transparent;
}
.pace-center-radar-white .pace .pace-activity::before {
border-color: #fff transparent transparent;
}
.pace-center-simple-white .pace {
background: #1f2d3d;
border-color: #fff;
}
.pace-center-simple-white .pace .pace-progress {
background: #fff;
}
.pace-material-white .pace {
color: #fff;
}
.pace-corner-indicator-white .pace .pace-activity {
background: #fff;
}
.pace-corner-indicator-white .pace .pace-activity::after,
.pace-corner-indicator-white .pace .pace-activity::before {
border: 5px solid #1f2d3d;
}
.pace-corner-indicator-white .pace .pace-activity::before {
border-right-color: rgba(255, 255, 255, 0.2);
border-left-color: rgba(255, 255, 255, 0.2);
}
.pace-corner-indicator-white .pace .pace-activity::after {
border-top-color: rgba(255, 255, 255, 0.2);
border-bottom-color: rgba(255, 255, 255, 0.2);
}
.pace-fill-left-white .pace .pace-progress {
background-color: rgba(255, 255, 255, 0.2);
}
.pace-flash-white .pace .pace-progress {
background: #fff;
}
.pace-flash-white .pace .pace-progress-inner {
box-shadow: 0 0 10px #fff, 0 0 5px #fff;
}
.pace-flash-white .pace .pace-activity {
border-top-color: #fff;
border-left-color: #fff;
}
.pace-loading-bar-white .pace .pace-progress {
background: #fff;
color: #fff;
box-shadow: 120px 0 #1f2d3d, 240px 0 #1f2d3d;
}
.pace-loading-bar-white .pace .pace-activity {
box-shadow: inset 0 0 0 2px #fff, inset 0 0 0 7px #1f2d3d;
}
.pace-mac-osx-white .pace .pace-progress {
background-color: #fff;
box-shadow: inset -1px 0 #fff, inset 0 -1px #fff, inset 0 2px rgba(31, 45, 61, 0.5), inset 0 6px rgba(31, 45, 61, 0.3);
}
.pace-mac-osx-white .pace .pace-activity {
background-image: radial-gradient(rgba(31, 45, 61, 0.65) 0, rgba(31, 45, 61, 0.15) 100%);
height: 12px;
}
.pace-progress-color-white .pace-progress {
color: #fff;
}
.pace-gray .pace .pace-progress {
background: #6c757d;
}
.pace-barber-shop-gray .pace {
background: #fff;
}
.pace-barber-shop-gray .pace .pace-progress {
background: #6c757d;
}
.pace-barber-shop-gray .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-gray .pace .pace-progress::after {
color: rgba(108, 117, 125, 0.2);
}
.pace-bounce-gray .pace .pace-activity {
background: #6c757d;
}
.pace-center-atom-gray .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-gray .pace-progress::before {
background: #6c757d;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-gray .pace-activity {
border-color: #6c757d;
}
.pace-center-atom-gray .pace-activity::after,
.pace-center-atom-gray .pace-activity::before {
border-color: #6c757d;
}
.pace-center-circle-gray .pace .pace-progress {
background: rgba(108, 117, 125, 0.8);
color: #fff;
}
.pace-center-radar-gray .pace .pace-activity {
border-color: #6c757d transparent transparent;
}
.pace-center-radar-gray .pace .pace-activity::before {
border-color: #6c757d transparent transparent;
}
.pace-center-simple-gray .pace {
background: #fff;
border-color: #6c757d;
}
.pace-center-simple-gray .pace .pace-progress {
background: #6c757d;
}
.pace-material-gray .pace {
color: #6c757d;
}
.pace-corner-indicator-gray .pace .pace-activity {
background: #6c757d;
}
.pace-corner-indicator-gray .pace .pace-activity::after,
.pace-corner-indicator-gray .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-gray .pace .pace-activity::before {
border-right-color: rgba(108, 117, 125, 0.2);
border-left-color: rgba(108, 117, 125, 0.2);
}
.pace-corner-indicator-gray .pace .pace-activity::after {
border-top-color: rgba(108, 117, 125, 0.2);
border-bottom-color: rgba(108, 117, 125, 0.2);
}
.pace-fill-left-gray .pace .pace-progress {
background-color: rgba(108, 117, 125, 0.2);
}
.pace-flash-gray .pace .pace-progress {
background: #6c757d;
}
.pace-flash-gray .pace .pace-progress-inner {
box-shadow: 0 0 10px #6c757d, 0 0 5px #6c757d;
}
.pace-flash-gray .pace .pace-activity {
border-top-color: #6c757d;
border-left-color: #6c757d;
}
.pace-loading-bar-gray .pace .pace-progress {
background: #6c757d;
color: #6c757d;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-gray .pace .pace-activity {
box-shadow: inset 0 0 0 2px #6c757d, inset 0 0 0 7px #fff;
}
.pace-mac-osx-gray .pace .pace-progress {
background-color: #6c757d;
box-shadow: inset -1px 0 #6c757d, inset 0 -1px #6c757d, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-gray .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-gray .pace-progress {
color: #6c757d;
}
.pace-gray-dark .pace .pace-progress {
background: <?php echo $maincolor;?>;
}
.pace-barber-shop-gray-dark .pace {
background: #fff;
}
.pace-barber-shop-gray-dark .pace .pace-progress {
background: <?php echo $maincolor;?>;
}
.pace-barber-shop-gray-dark .pace .pace-activity {
background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
}
.pace-big-counter-gray-dark .pace .pace-progress::after {
color: rgba(52, 58, 64, 0.2);
}
.pace-bounce-gray-dark .pace .pace-activity {
background: <?php echo $maincolor;?>;
}
.pace-center-atom-gray-dark .pace-progress {
height: 100px;
width: 80px;
}
.pace-center-atom-gray-dark .pace-progress::before {
background: <?php echo $maincolor;?>;
color: #fff;
font-size: 0.8rem;
line-height: 0.7rem;
padding-top: 17%;
}
.pace-center-atom-gray-dark .pace-activity {
border-color: <?php echo $maincolor;?>;
}
.pace-center-atom-gray-dark .pace-activity::after,
.pace-center-atom-gray-dark .pace-activity::before {
border-color: <?php echo $maincolor;?>;
}
.pace-center-circle-gray-dark .pace .pace-progress {
background: rgba(52, 58, 64, 0.8);
color: #fff;
}
.pace-center-radar-gray-dark .pace .pace-activity {
border-color: <?php echo $maincolor;?> transparent transparent;
}
.pace-center-radar-gray-dark .pace .pace-activity::before {
border-color: <?php echo $maincolor;?> transparent transparent;
}
.pace-center-simple-gray-dark .pace {
background: #fff;
border-color: <?php echo $maincolor;?>;
}
.pace-center-simple-gray-dark .pace .pace-progress {
background: <?php echo $maincolor;?>;
}
.pace-material-gray-dark .pace {
color: <?php echo $maincolor;?>;
}
.pace-corner-indicator-gray-dark .pace .pace-activity {
background: <?php echo $maincolor;?>;
}
.pace-corner-indicator-gray-dark .pace .pace-activity::after,
.pace-corner-indicator-gray-dark .pace .pace-activity::before {
border: 5px solid #fff;
}
.pace-corner-indicator-gray-dark .pace .pace-activity::before {
border-right-color: rgba(52, 58, 64, 0.2);
border-left-color: rgba(52, 58, 64, 0.2);
}
.pace-corner-indicator-gray-dark .pace .pace-activity::after {
border-top-color: rgba(52, 58, 64, 0.2);
border-bottom-color: rgba(52, 58, 64, 0.2);
}
.pace-fill-left-gray-dark .pace .pace-progress {
background-color: rgba(52, 58, 64, 0.2);
}
.pace-flash-gray-dark .pace .pace-progress {
background: <?php echo $maincolor;?>;
}
.pace-flash-gray-dark .pace .pace-progress-inner {
box-shadow: 0 0 10px <?php echo $maincolor;?>, 0 0 5px <?php echo $maincolor;?>;
}
.pace-flash-gray-dark .pace .pace-activity {
border-top-color: <?php echo $maincolor;?>;
border-left-color: <?php echo $maincolor;?>;
}
.pace-loading-bar-gray-dark .pace .pace-progress {
background: <?php echo $maincolor;?>;
color: <?php echo $maincolor;?>;
box-shadow: 120px 0 #fff, 240px 0 #fff;
}
.pace-loading-bar-gray-dark .pace .pace-activity {
box-shadow: inset 0 0 0 2px <?php echo $maincolor;?>, inset 0 0 0 7px #fff;
}
.pace-mac-osx-gray-dark .pace .pace-progress {
background-color: <?php echo $maincolor;?>;
box-shadow: inset -1px 0 <?php echo $maincolor;?>, inset 0 -1px <?php echo $maincolor;?>, inset 0 2px rgba(255, 255, 255, 0.5), inset 0 6px rgba(255, 255, 255, 0.3);
}
.pace-mac-osx-gray-dark .pace .pace-activity {
background-image: radial-gradient(rgba(255, 255, 255, 0.65) 0, rgba(255, 255, 255, 0.15) 100%);
height: 12px;
}
.pace-progress-color-gray-dark .pace-progress {
color: <?php echo $maincolor;?>;
}
.bootstrap-switch {
border: 1px solid #ced4da;
border-radius: 0.25rem;
cursor: pointer;
direction: ltr;
display: inline-block;
line-height: 0.5rem;
overflow: hidden;
position: relative;
text-align: left;
transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
vertical-align: middle;
z-index: 0;
}
.bootstrap-switch .bootstrap-switch-container {
border-radius: 0.25rem;
display: inline-block;
top: 0;
transform: translate3d(0, 0, 0);
}
.bootstrap-switch:focus-within {
box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.bootstrap-switch .bootstrap-switch-handle-off,
.bootstrap-switch .bootstrap-switch-handle-on,
.bootstrap-switch .bootstrap-switch-label {
box-sizing: border-box;
cursor: pointer;
display: table-cell;
font-size: 1rem;
font-weight: 500;
line-height: 1.2rem;
padding: 0.25rem 0.5rem;
vertical-align: middle;
}
.bootstrap-switch .bootstrap-switch-handle-off,
.bootstrap-switch .bootstrap-switch-handle-on {
text-align: center;
z-index: 1;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-default {
background: #e9ecef;
color: #1f2d3d;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-primary,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-primary {
background: <?php echo $accent_color;?>;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-secondary,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-secondary {
background: #6c757d;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-success,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-success {
background: #28a745;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-info,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-info {
background: #17a2b8;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-warning,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-warning {
background: #ffc107;
color: #1f2d3d;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-danger,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-danger {
background: #dc3545;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-light,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-light {
background: #f8f9fa;
color: #1f2d3d;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-dark,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-dark {
background: <?php echo $maincolor;?>;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-lightblue,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-lightblue {
background: #3c8dbc;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-navy,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-navy {
background: #001f3f;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-olive,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-olive {
background: #3d9970;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-lime,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-lime {
background: #01ff70;
color: #1f2d3d;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-fuchsia,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-fuchsia {
background: #f012be;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-maroon,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-maroon {
background: #d81b60;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-blue,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-blue {
background: <?php echo $accent_color;?>;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-indigo,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-indigo {
background: #6610f2;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-purple,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-purple {
background: #6f42c1;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-pink,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-pink {
background: #e83e8c;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-red,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-red {
background: #dc3545;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-orange,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-orange {
background: #fd7e14;
color: #1f2d3d;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-yellow,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-yellow {
background: #ffc107;
color: #1f2d3d;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-green,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-green {
background: #28a745;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-teal,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-teal {
background: #20c997;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-cyan,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-cyan {
background: #17a2b8;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-white,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-white {
background: #fff;
color: #1f2d3d;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-gray,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-gray {
background: #6c757d;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-gray-dark,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-gray-dark {
background: <?php echo $maincolor;?>;
color: #fff;
}
.bootstrap-switch .bootstrap-switch-handle-on {
border-bottom-left-radius: 0.1rem;
border-top-left-radius: 0.1rem;
}
.bootstrap-switch .bootstrap-switch-handle-off {
border-bottom-right-radius: 0.1rem;
border-top-right-radius: 0.1rem;
}
.bootstrap-switch input[type="checkbox"],
.bootstrap-switch input[type="radio"] {
left: 0;
margin: 0;
opacity: 0;
position: absolute;
top: 0;
visibility: hidden;
z-index: -1;
}
.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-label {
font-size: 0.875rem;
line-height: 1.5;
padding: 0.1rem 0.3rem;
}
.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-label {
font-size: 0.875rem;
line-height: 1.5;
padding: 0.2rem 0.4rem;
}
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-label {
font-size: 1.25rem;
line-height: 1.3333333rem;
padding: 0.3rem 0.5rem;
}
.bootstrap-switch.bootstrap-switch-disabled,
.bootstrap-switch.bootstrap-switch-indeterminate,
.bootstrap-switch.bootstrap-switch-readonly {
cursor: default;
}
.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-label {
cursor: default;
opacity: 0.5;
}
.bootstrap-switch.bootstrap-switch-animate .bootstrap-switch-container {
transition: margin-left 0.5s;
}
.bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-on {
border-radius: 0 0.1rem 0.1rem 0;
}
.bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-off {
border-radius: 0.1rem 0 0 0.1rem;
}
.bootstrap-switch.bootstrap-switch-inverse.bootstrap-switch-off .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-label {
border-bottom-right-radius: 0.1rem;
border-top-right-radius: 0.1rem;
}
.bootstrap-switch.bootstrap-switch-inverse.bootstrap-switch-on .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-label {
border-bottom-left-radius: 0.1rem;
border-top-left-radius: 0.1rem;
}
.dark-mode .bootstrap-switch {
border-color: #6c757d;
}
.dark-mode .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default,
.dark-mode .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-default {
background-color: #3a4047;
color: #fff;
border-color: <?php echo $secondarycolor;?>;
}
.jqstooltip {
height: auto !important;
padding: 5px !important;
width: auto !important;
}
.connectedSortable {
min-height: 100px;
}
.ui-helper-hidden-accessible {
border: 0;
clip: rect(0 0 0 0);
height: 1px;
margin: -1px;
overflow: hidden;
padding: 0;
position: absolute;
width: 1px;
}
.sort-highlight {
background: #f8f9fa;
border: 1px dashed #dee2e6;
margin-bottom: 10px;
}
.chart {
overflow: hidden;
position: relative;
}
.dark-mode .irs--flat .irs-line {
background-color: #4b545c;
}
.dark-mode .jsgrid-alt-row > .jsgrid-cell,
.dark-mode .jsgrid-edit-row > .jsgrid-cell,
.dark-mode .jsgrid-filter-row > .jsgrid-cell,
.dark-mode .jsgrid-grid-body,
.dark-mode .jsgrid-grid-header,
.dark-mode .jsgrid-header-row > .jsgrid-header-cell,
.dark-mode .jsgrid-insert-row > .jsgrid-cell,
.dark-mode .jsgrid-row > .jsgrid-cell {
border-color: #6c757d;
}
.dark-mode .jsgrid-header-row > .jsgrid-header-cell,
.dark-mode .jsgrid-row > .jsgrid-cell {
background-color: <?php echo $maincolor;?>;
}
.dark-mode .jsgrid-alt-row > .jsgrid-cell {
background-color: #3a4047;
}
.dark-mode .jsgrid-selected-row > .jsgrid-cell {
background-color: #3f474e;
}
.border-transparent {
border-color: transparent !important;
}
.description-block {
display: block;
margin: 10px 0;
text-align: center;
}
.description-block.margin-bottom {
margin-bottom: 25px;
}
.description-block > .description-header {
font-size: 16px;
font-weight: 600;
margin: 0;
padding: 0;
}
.description-block > .description-text {
text-transform: uppercase;
}
.description-block .description-icon {
font-size: 16px;
}
.list-group-unbordered > .list-group-item {
border-left: 0;
border-radius: 0;
border-right: 0;
padding-left: 0;
padding-right: 0;
}
.list-header {
color: #6c757d;
font-size: 15px;
font-weight: 700;
padding: 10px 4px;
}
.list-seperator {
background-color: rgba(0, 0, 0, 0.125);
height: 1px;
margin: 15px 0 9px;
}
.list-link > a {
color: #6c757d;
padding: 4px;
}
.list-link > a:hover {
color: #212529;
}
.user-block {
float: left;
}
.user-block img {
float: left;
height: 40px;
width: 40px;
}
.user-block .comment,
.user-block .description,
.user-block .username {
display: block;
margin-left: 50px;
}
.user-block .username {
font-size: 16px;
font-weight: 600;
margin-top: -1px;
}
.user-block .description {
color: #6c757d;
font-size: 13px;
margin-top: -3px;
}
.user-block.user-block-sm img {
width: 1.875rem;
height: 1.875rem;
}
.user-block.user-block-sm .comment,
.user-block.user-block-sm .description,
.user-block.user-block-sm .username {
margin-left: 40px;
}
.user-block.user-block-sm .username {
font-size: 14px;
}
.img-lg,
.img-md,
.img-sm {
float: left;
}
.img-sm {
height: 1.875rem;
width: 1.875rem;
}
.img-sm + .img-push {
margin-left: 2.5rem;
}
.img-md {
width: 3.75rem;
height: 3.75rem;
}
.img-md + .img-push {
margin-left: 4.375rem;
}
.img-lg {
width: 6.25rem;
height: 6.25rem;
}
.img-lg + .img-push {
margin-left: 6.875rem;
}
.img-bordered {
border: 3px solid #adb5bd;
padding: 3px;
}
.img-bordered-sm {
border: 2px solid #adb5bd;
padding: 2px;
}
.img-rounded {
border-radius: 0.25rem;
}
.img-circle {
border-radius: 50%;
}
.img-size-32,
.img-size-50,
.img-size-64 {
height: auto;
}
.img-size-64 {
width: 64px;
}
.img-size-50 {
width: 50px;
}
.img-size-32 {
width: 32px;
}
.size-32,
.size-40,
.size-50 {
display: block;
text-align: center;
}
.size-32 {
height: 32px;
line-height: 32px;
width: 32px;
}
.size-40 {
height: 40px;
line-height: 40px;
width: 40px;
}
.size-50 {
height: 50px;
line-height: 50px;
width: 50px;
}
.attachment-block {
background-color: #f8f9fa;
border: 1px solid rgba(0, 0, 0, 0.125);
margin-bottom: 10px;
padding: 5px;
}
.attachment-block .attachment-img {
float: left;
height: auto;
max-height: 100px;
max-width: 100px;
}
.attachment-block .attachment-pushed {
margin-left: 110px;
}
.attachment-block .attachment-heading {
margin: 0;
}
.attachment-block .attachment-text {
color: #495057;
}
.card > .loading-img,
.card > .overlay,
.info-box > .loading-img,
.info-box > .overlay,
.overlay-wrapper > .loading-img,
.overlay-wrapper > .overlay,
.small-box > .loading-img,
.small-box > .overlay {
height: 100%;
left: 0;
position: absolute;
top: 0;
width: 100%;
}
.card .overlay,
.info-box .overlay,
.overlay-wrapper .overlay,
.small-box .overlay {
border-radius: 0.25rem;
align-items: center;
background-color: rgba(255, 255, 255, 0.7);
display: flex;
justify-content: center;
z-index: 50;
}
.card .overlay > .fa,
.card .overlay > .fab,
.card .overlay > .fad,
.card .overlay > .fal,
.card .overlay > .far,
.card .overlay > .fas,
.card .overlay > .ion,
.card .overlay > .svg-inline--fa,
.info-box .overlay > .fa,
.info-box .overlay > .fab,
.info-box .overlay > .fad,
.info-box .overlay > .fal,
.info-box .overlay > .far,
.info-box .overlay > .fas,
.info-box .overlay > .ion,
.info-box .overlay > .svg-inline--fa,
.overlay-wrapper .overlay > .fa,
.overlay-wrapper .overlay > .fab,
.overlay-wrapper .overlay > .fad,
.overlay-wrapper .overlay > .fal,
.overlay-wrapper .overlay > .far,
.overlay-wrapper .overlay > .fas,
.overlay-wrapper .overlay > .ion,
.overlay-wrapper .overlay > .svg-inline--fa,
.small-box .overlay > .fa,
.small-box .overlay > .fab,
.small-box .overlay > .fad,
.small-box .overlay > .fal,
.small-box .overlay > .far,
.small-box .overlay > .fas,
.small-box .overlay > .ion,
.small-box .overlay > .svg-inline--fa {
color: <?php echo $maincolor;?>;
}
.card .overlay.dark,
.info-box .overlay.dark,
.overlay-wrapper .overlay.dark,
.small-box .overlay.dark {
background-color: rgba(0, 0, 0, 0.5);
}
.card .overlay.dark > .fa,
.card .overlay.dark > .fab,
.card .overlay.dark > .fad,
.card .overlay.dark > .fal,
.card .overlay.dark > .far,
.card .overlay.dark > .fas,
.card .overlay.dark > .ion,
.card .overlay.dark > .svg-inline--fa,
.info-box .overlay.dark > .fa,
.info-box .overlay.dark > .fab,
.info-box .overlay.dark > .fad,
.info-box .overlay.dark > .fal,
.info-box .overlay.dark > .far,
.info-box .overlay.dark > .fas,
.info-box .overlay.dark > .ion,
.info-box .overlay.dark > .svg-inline--fa,
.overlay-wrapper .overlay.dark > .fa,
.overlay-wrapper .overlay.dark > .fab,
.overlay-wrapper .overlay.dark > .fad,
.overlay-wrapper .overlay.dark > .fal,
.overlay-wrapper .overlay.dark > .far,
.overlay-wrapper .overlay.dark > .fas,
.overlay-wrapper .overlay.dark > .ion,
.overlay-wrapper .overlay.dark > .svg-inline--fa,
.small-box .overlay.dark > .fa,
.small-box .overlay.dark > .fab,
.small-box .overlay.dark > .fad,
.small-box .overlay.dark > .fal,
.small-box .overlay.dark > .far,
.small-box .overlay.dark > .fas,
.small-box .overlay.dark > .ion,
.small-box .overlay.dark > .svg-inline--fa {
color: #ced4da;
}
.tab-pane > .overlay-wrapper {
position: relative;
}
.tab-pane > .overlay-wrapper > .overlay {
border-top-left-radius: 0;
border-top-right-radius: 0;
flex-direction: column;
margin-top: -1.25rem;
margin-left: -1.25rem;
height: calc(100% + 2 * 1.25rem);
width: calc(100% + 2 * 1.25rem);
}
.tab-pane > .overlay-wrapper > .overlay.dark {
color: #fff;
}
.ribbon-wrapper {
height: 70px;
overflow: hidden;
position: absolute;
right: -2px;
top: -2px;
width: 70px;
z-index: 10;
}
.ribbon-wrapper.ribbon-lg {
height: 120px;
width: 120px;
}
.ribbon-wrapper.ribbon-lg .ribbon {
right: 0;
top: 26px;
width: 160px;
}
.ribbon-wrapper.ribbon-xl {
height: 180px;
width: 180px;
}
.ribbon-wrapper.ribbon-xl .ribbon {
right: 4px;
top: 47px;
width: 240px;
}
.ribbon-wrapper .ribbon {
box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
font-size: 0.8rem;
line-height: 100%;
padding: 0.375rem 0;
position: relative;
right: -2px;
text-align: center;
text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
text-transform: uppercase;
top: 10px;
transform: rotate(45deg);
width: 90px;
}
.ribbon-wrapper .ribbon::after,
.ribbon-wrapper .ribbon::before {
border-left: 3px solid transparent;
border-right: 3px solid transparent;
border-top: 3px solid #9e9e9e;
bottom: -3px;
content: "";
position: absolute;
}
.ribbon-wrapper .ribbon::before {
left: 0;
}
.ribbon-wrapper .ribbon::after {
right: 0;
}
.back-to-top {
bottom: 1.25rem;
position: fixed;
right: 1.25rem;
z-index: 1032;
}
.back-to-top:focus {
box-shadow: none;
}
pre {
padding: 0.75rem;
}
blockquote {
background-color: #fff;
border-left: 0.7rem solid <?php echo $accent_color;?>;
margin: 1.5em 0.7rem;
padding: 0.5em 0.7rem;
}
.box blockquote {
background-color: #e9ecef;
}
blockquote p:last-child {
margin-bottom: 0;
}
blockquote h1,
blockquote h2,
blockquote h3,
blockquote h4,
blockquote h5,
blockquote h6 {
color: <?php echo $accent_color;?>;
font-size: 1.25rem;
font-weight: 600;
}
blockquote.quote-primary {
border-color: <?php echo $accent_color;?>;
}
blockquote.quote-primary h1,
blockquote.quote-primary h2,
blockquote.quote-primary h3,
blockquote.quote-primary h4,
blockquote.quote-primary h5,
blockquote.quote-primary h6 {
color: <?php echo $accent_color;?>;
}
blockquote.quote-secondary {
border-color: #6c757d;
}
blockquote.quote-secondary h1,
blockquote.quote-secondary h2,
blockquote.quote-secondary h3,
blockquote.quote-secondary h4,
blockquote.quote-secondary h5,
blockquote.quote-secondary h6 {
color: #6c757d;
}
blockquote.quote-success {
border-color: #28a745;
}
blockquote.quote-success h1,
blockquote.quote-success h2,
blockquote.quote-success h3,
blockquote.quote-success h4,
blockquote.quote-success h5,
blockquote.quote-success h6 {
color: #28a745;
}
blockquote.quote-info {
border-color: #17a2b8;
}
blockquote.quote-info h1,
blockquote.quote-info h2,
blockquote.quote-info h3,
blockquote.quote-info h4,
blockquote.quote-info h5,
blockquote.quote-info h6 {
color: #17a2b8;
}
blockquote.quote-warning {
border-color: #ffc107;
}
blockquote.quote-warning h1,
blockquote.quote-warning h2,
blockquote.quote-warning h3,
blockquote.quote-warning h4,
blockquote.quote-warning h5,
blockquote.quote-warning h6 {
color: #ffc107;
}
blockquote.quote-danger {
border-color: #dc3545;
}
blockquote.quote-danger h1,
blockquote.quote-danger h2,
blockquote.quote-danger h3,
blockquote.quote-danger h4,
blockquote.quote-danger h5,
blockquote.quote-danger h6 {
color: #dc3545;
}
blockquote.quote-light {
border-color: #f8f9fa;
}
blockquote.quote-light h1,
blockquote.quote-light h2,
blockquote.quote-light h3,
blockquote.quote-light h4,
blockquote.quote-light h5,
blockquote.quote-light h6 {
color: #f8f9fa;
}
blockquote.quote-dark {
border-color: <?php echo $maincolor;?>;
}
blockquote.quote-dark h1,
blockquote.quote-dark h2,
blockquote.quote-dark h3,
blockquote.quote-dark h4,
blockquote.quote-dark h5,
blockquote.quote-dark h6 {
color: <?php echo $maincolor;?>;
}
blockquote.quote-lightblue {
border-color: #3c8dbc;
}
blockquote.quote-lightblue h1,
blockquote.quote-lightblue h2,
blockquote.quote-lightblue h3,
blockquote.quote-lightblue h4,
blockquote.quote-lightblue h5,
blockquote.quote-lightblue h6 {
color: #3c8dbc;
}
blockquote.quote-navy {
border-color: #001f3f;
}
blockquote.quote-navy h1,
blockquote.quote-navy h2,
blockquote.quote-navy h3,
blockquote.quote-navy h4,
blockquote.quote-navy h5,
blockquote.quote-navy h6 {
color: #001f3f;
}
blockquote.quote-olive {
border-color: #3d9970;
}
blockquote.quote-olive h1,
blockquote.quote-olive h2,
blockquote.quote-olive h3,
blockquote.quote-olive h4,
blockquote.quote-olive h5,
blockquote.quote-olive h6 {
color: #3d9970;
}
blockquote.quote-lime {
border-color: #01ff70;
}
blockquote.quote-lime h1,
blockquote.quote-lime h2,
blockquote.quote-lime h3,
blockquote.quote-lime h4,
blockquote.quote-lime h5,
blockquote.quote-lime h6 {
color: #01ff70;
}
blockquote.quote-fuchsia {
border-color: #f012be;
}
blockquote.quote-fuchsia h1,
blockquote.quote-fuchsia h2,
blockquote.quote-fuchsia h3,
blockquote.quote-fuchsia h4,
blockquote.quote-fuchsia h5,
blockquote.quote-fuchsia h6 {
color: #f012be;
}
blockquote.quote-maroon {
border-color: #d81b60;
}
blockquote.quote-maroon h1,
blockquote.quote-maroon h2,
blockquote.quote-maroon h3,
blockquote.quote-maroon h4,
blockquote.quote-maroon h5,
blockquote.quote-maroon h6 {
color: #d81b60;
}
blockquote.quote-blue {
border-color: <?php echo $accent_color;?>;
}
blockquote.quote-blue h1,
blockquote.quote-blue h2,
blockquote.quote-blue h3,
blockquote.quote-blue h4,
blockquote.quote-blue h5,
blockquote.quote-blue h6 {
color: <?php echo $accent_color;?>;
}
blockquote.quote-indigo {
border-color: #6610f2;
}
blockquote.quote-indigo h1,
blockquote.quote-indigo h2,
blockquote.quote-indigo h3,
blockquote.quote-indigo h4,
blockquote.quote-indigo h5,
blockquote.quote-indigo h6 {
color: #6610f2;
}
blockquote.quote-purple {
border-color: #6f42c1;
}
blockquote.quote-purple h1,
blockquote.quote-purple h2,
blockquote.quote-purple h3,
blockquote.quote-purple h4,
blockquote.quote-purple h5,
blockquote.quote-purple h6 {
color: #6f42c1;
}
blockquote.quote-pink {
border-color: #e83e8c;
}
blockquote.quote-pink h1,
blockquote.quote-pink h2,
blockquote.quote-pink h3,
blockquote.quote-pink h4,
blockquote.quote-pink h5,
blockquote.quote-pink h6 {
color: #e83e8c;
}
blockquote.quote-red {
border-color: #dc3545;
}
blockquote.quote-red h1,
blockquote.quote-red h2,
blockquote.quote-red h3,
blockquote.quote-red h4,
blockquote.quote-red h5,
blockquote.quote-red h6 {
color: #dc3545;
}
blockquote.quote-orange {
border-color: #fd7e14;
}
blockquote.quote-orange h1,
blockquote.quote-orange h2,
blockquote.quote-orange h3,
blockquote.quote-orange h4,
blockquote.quote-orange h5,
blockquote.quote-orange h6 {
color: #fd7e14;
}
blockquote.quote-yellow {
border-color: #ffc107;
}
blockquote.quote-yellow h1,
blockquote.quote-yellow h2,
blockquote.quote-yellow h3,
blockquote.quote-yellow h4,
blockquote.quote-yellow h5,
blockquote.quote-yellow h6 {
color: #ffc107;
}
blockquote.quote-green {
border-color: #28a745;
}
blockquote.quote-green h1,
blockquote.quote-green h2,
blockquote.quote-green h3,
blockquote.quote-green h4,
blockquote.quote-green h5,
blockquote.quote-green h6 {
color: #28a745;
}
blockquote.quote-teal {
border-color: #20c997;
}
blockquote.quote-teal h1,
blockquote.quote-teal h2,
blockquote.quote-teal h3,
blockquote.quote-teal h4,
blockquote.quote-teal h5,
blockquote.quote-teal h6 {
color: #20c997;
}
blockquote.quote-cyan {
border-color: #17a2b8;
}
blockquote.quote-cyan h1,
blockquote.quote-cyan h2,
blockquote.quote-cyan h3,
blockquote.quote-cyan h4,
blockquote.quote-cyan h5,
blockquote.quote-cyan h6 {
color: #17a2b8;
}
blockquote.quote-white {
border-color: #fff;
}
blockquote.quote-white h1,
blockquote.quote-white h2,
blockquote.quote-white h3,
blockquote.quote-white h4,
blockquote.quote-white h5,
blockquote.quote-white h6 {
color: #fff;
}
blockquote.quote-gray {
border-color: #6c757d;
}
blockquote.quote-gray h1,
blockquote.quote-gray h2,
blockquote.quote-gray h3,
blockquote.quote-gray h4,
blockquote.quote-gray h5,
blockquote.quote-gray h6 {
color: #6c757d;
}
blockquote.quote-gray-dark {
border-color: <?php echo $maincolor;?>;
}
blockquote.quote-gray-dark h1,
blockquote.quote-gray-dark h2,
blockquote.quote-gray-dark h3,
blockquote.quote-gray-dark h4,
blockquote.quote-gray-dark h5,
blockquote.quote-gray-dark h6 {
color: <?php echo $maincolor;?>;
}
.tab-custom-content {
border-top: 1px solid #dee2e6;
margin-top: 0.5rem;
padding-top: 0.5rem;
}
.nav + .tab-custom-content {
border-top: none;
border-bottom: 1px solid #dee2e6;
margin-top: 0;
margin-bottom: 0.5rem;
padding-bottom: 0.5rem;
}
.badge-btn {
border-radius: 0.15rem;
font-size: 0.75rem;
font-weight: 400;
padding: 0.25rem 0.5rem;
}
.badge-btn.badge-pill {
padding: 0.375rem 0.6rem;
}
.dark-mode a:not(.btn):hover {
color: #3395ff;
}
.dark-mode .attachment-block {
background-color: #3d444b;
}
.dark-mode .attachment-block .attachment-text {
color: #ced4da;
}
.dark-mode blockquote {
background-color: #3f474e;
}
.dark-mode .close,
.dark-mode .mailbox-attachment-close {
color: #adb5bd;
text-shadow: 0 1px 0 #495057;
}
.dark-mode .tab-custom-content {
border-color: #6c757d;
}
.dark-mode .list-group-item {
background-color: <?php echo $maincolor;?>;
border-color: #6c757d;
}
@media print {
.content-header,
.main-header,
.main-sidebar,
.no-print {
display: none !important;
}
.content-wrapper,
.main-footer {
transform: translate(0, 0);
margin-left: 0 !important;
min-height: 0 !important;
}
.layout-fixed .content-wrapper {
padding-top: 0 !important;
}
.invoice {
border: 0;
margin: 0;
padding: 0;
width: 100%;
}
.invoice-col {
float: left;
width: 33.3333333%;
}
.table-responsive {
overflow: auto;
}
.table-responsive > .table tr td,
.table-responsive > .table tr th {
white-space: normal !important;
}
}
.text-bold,
.text-bold.table td,
.text-bold.table th {
font-weight: 700;
}
.text-xs {
font-size: 0.75rem !important;
}
.text-sm {
font-size: 0.875rem !important;
}
.text-md {
font-size: 1rem !important;
}
.text-lg {
font-size: 1.25rem !important;
}
.text-xl {
font-size: 2rem !important;
}
.text-lightblue {
color: #3c8dbc !important;
}
.text-navy {
color: #001f3f !important;
}
.text-olive {
color: #3d9970 !important;
}
.text-lime {
color: #01ff70 !important;
}
.text-fuchsia {
color: #f012be !important;
}
.text-maroon {
color: #d81b60 !important;
}
.text-blue {
color: <?php echo $accent_color;?>; !important;
}
.text-indigo {
color: #6610f2 !important;
}
.text-purple {
color: #6f42c1 !important;
}
.text-pink {
color: #e83e8c !important;
}
.text-red {
color: #dc3545 !important;
}
.text-orange {
color: #fd7e14 !important;
}
.text-yellow {
color: #ffc107 !important;
}
.text-green {
color: #28a745 !important;
}
.text-teal {
color: #20c997 !important;
}
.text-cyan {
color: #17a2b8 !important;
}
.text-white {
color: #fff !important;
}
.text-gray {
color: #6c757d !important;
}
.text-gray-dark {
color: <?php echo $maincolor;?> !important;
}
.dark-mode .text-muted {
color: #adb5bd !important;
}
.elevation-0 {
box-shadow: none !important;
}
.elevation-1 {
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24) !important;
}
.elevation-2 {
box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23) !important;
}
.elevation-3 {
box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23) !important;
}
.elevation-4 {
box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22) !important;
}
.elevation-5 {
box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22) !important;
}
.bg-primary {
background-color: <?php echo $accent_color;?>; !important;
}
.bg-primary,
.bg-primary > a {
color: #fff !important;
}
.bg-primary.btn:hover {
border-color: #0062cc;
color: #ececec;
}
.bg-primary.btn.active,
.bg-primary.btn:active,
.bg-primary.btn:not(:disabled):not(.disabled).active,
.bg-primary.btn:not(:disabled):not(.disabled):active {
background-color: #0062cc !important;
border-color: #005cbf;
color: #fff;
}
.bg-secondary {
background-color: #6c757d !important;
}
.bg-secondary,
.bg-secondary > a {
color: #fff !important;
}
.bg-secondary.btn:hover {
border-color: #545b62;
color: #ececec;
}
.bg-secondary.btn.active,
.bg-secondary.btn:active,
.bg-secondary.btn:not(:disabled):not(.disabled).active,
.bg-secondary.btn:not(:disabled):not(.disabled):active {
background-color: #545b62 !important;
border-color: #4e555b;
color: #fff;
}
.bg-success {
background-color: #28a745 !important;
}
.bg-success,
.bg-success > a {
color: #fff !important;
}
.bg-success.btn:hover {
border-color: #1e7e34;
color: #ececec;
}
.bg-success.btn.active,
.bg-success.btn:active,
.bg-success.btn:not(:disabled):not(.disabled).active,
.bg-success.btn:not(:disabled):not(.disabled):active {
background-color: #1e7e34 !important;
border-color: #1c7430;
color: #fff;
}
.bg-info {
background-color: #17a2b8 !important;
}
.bg-info,
.bg-info > a {
color: #fff !important;
}
.bg-info.btn:hover {
border-color: #117a8b;
color: #ececec;
}
.bg-info.btn.active,
.bg-info.btn:active,
.bg-info.btn:not(:disabled):not(.disabled).active,
.bg-info.btn:not(:disabled):not(.disabled):active {
background-color: #117a8b !important;
border-color: #10707f;
color: #fff;
}
.bg-warning {
background-color: #ffc107 !important;
}
.bg-warning,
.bg-warning > a {
color: #1f2d3d !important;
}
.bg-warning.btn:hover {
border-color: #d39e00;
color: #121a24;
}
.bg-warning.btn.active,
.bg-warning.btn:active,
.bg-warning.btn:not(:disabled):not(.disabled).active,
.bg-warning.btn:not(:disabled):not(.disabled):active {
background-color: #d39e00 !important;
border-color: #c69500;
color: #1f2d3d;
}
.bg-danger {
background-color: #dc3545 !important;
}
.bg-danger,
.bg-danger > a {
color: #fff !important;
}
.bg-danger.btn:hover {
border-color: #bd2130;
color: #ececec;
}
.bg-danger.btn.active,
.bg-danger.btn:active,
.bg-danger.btn:not(:disabled):not(.disabled).active,
.bg-danger.btn:not(:disabled):not(.disabled):active {
background-color: #bd2130 !important;
border-color: #b21f2d;
color: #fff;
}
.bg-light {
background-color: #f8f9fa !important;
}
.bg-light,
.bg-light > a {
color: #1f2d3d !important;
}
.bg-light.btn:hover {
border-color: #dae0e5;
color: #121a24;
}
.bg-light.btn.active,
.bg-light.btn:active,
.bg-light.btn:not(:disabled):not(.disabled).active,
.bg-light.btn:not(:disabled):not(.disabled):active {
background-color: #dae0e5 !important;
border-color: #d3d9df;
color: #1f2d3d;
}
.bg-dark {
background-color: <?php echo $maincolor;?> !important;
}
.bg-dark,
.bg-dark > a {
color: #fff !important;
}
.bg-dark.btn:hover {
border-color: #1d2124;
color: #ececec;
}
.bg-dark.btn.active,
.bg-dark.btn:active,
.bg-dark.btn:not(:disabled):not(.disabled).active,
.bg-dark.btn:not(:disabled):not(.disabled):active {
background-color: #1d2124 !important;
border-color: #171a1d;
color: #fff;
}
.bg-lightblue {
background-color: #3c8dbc !important;
}
.bg-lightblue,
.bg-lightblue > a {
color: #fff !important;
}
.bg-lightblue.btn:hover {
border-color: #307095;
color: #ececec;
}
.bg-lightblue.btn.active,
.bg-lightblue.btn:active,
.bg-lightblue.btn:not(:disabled):not(.disabled).active,
.bg-lightblue.btn:not(:disabled):not(.disabled):active {
background-color: #307095 !important;
border-color: #2d698c;
color: #fff;
}
.bg-navy {
background-color: #001f3f !important;
}
.bg-navy,
.bg-navy > a {
color: #fff !important;
}
.bg-navy.btn:hover {
border-color: #00060c;
color: #ececec;
}
.bg-navy.btn.active,
.bg-navy.btn:active,
.bg-navy.btn:not(:disabled):not(.disabled).active,
.bg-navy.btn:not(:disabled):not(.disabled):active {
background-color: #00060c !important;
border-color: #000;
color: #fff;
}
.bg-olive {
background-color: #3d9970 !important;
}
.bg-olive,
.bg-olive > a {
color: #fff !important;
}
.bg-olive.btn:hover {
border-color: #2e7555;
color: #ececec;
}
.bg-olive.btn.active,
.bg-olive.btn:active,
.bg-olive.btn:not(:disabled):not(.disabled).active,
.bg-olive.btn:not(:disabled):not(.disabled):active {
background-color: #2e7555 !important;
border-color: #2b6b4f;
color: #fff;
}
.bg-lime {
background-color: #01ff70 !important;
}
.bg-lime,
.bg-lime > a {
color: #1f2d3d !important;
}
.bg-lime.btn:hover {
border-color: #00cd5a;
color: #121a24;
}
.bg-lime.btn.active,
.bg-lime.btn:active,
.bg-lime.btn:not(:disabled):not(.disabled).active,
.bg-lime.btn:not(:disabled):not(.disabled):active {
background-color: #00cd5a !important;
border-color: #00c054;
color: #fff;
}
.bg-fuchsia {
background-color: #f012be !important;
}
.bg-fuchsia,
.bg-fuchsia > a {
color: #fff !important;
}
.bg-fuchsia.btn:hover {
border-color: #c30c9a;
color: #ececec;
}
.bg-fuchsia.btn.active,
.bg-fuchsia.btn:active,
.bg-fuchsia.btn:not(:disabled):not(.disabled).active,
.bg-fuchsia.btn:not(:disabled):not(.disabled):active {
background-color: #c30c9a !important;
border-color: #b70c90;
color: #fff;
}
.bg-maroon {
background-color: #d81b60 !important;
}
.bg-maroon,
.bg-maroon > a {
color: #fff !important;
}
.bg-maroon.btn:hover {
border-color: #ab154c;
color: #ececec;
}
.bg-maroon.btn.active,
.bg-maroon.btn:active,
.bg-maroon.btn:not(:disabled):not(.disabled).active,
.bg-maroon.btn:not(:disabled):not(.disabled):active {
background-color: #ab154c !important;
border-color: #9f1447;
color: #fff;
}
.bg-blue {
background-color: <?php echo $accent_color;?>; !important;
}
.bg-blue,
.bg-blue > a {
color: #fff !important;
}
.bg-blue.btn:hover {
border-color: #0062cc;
color: #ececec;
}
.bg-blue.btn.active,
.bg-blue.btn:active,
.bg-blue.btn:not(:disabled):not(.disabled).active,
.bg-blue.btn:not(:disabled):not(.disabled):active {
background-color: #0062cc !important;
border-color: #005cbf;
color: #fff;
}
.bg-indigo {
background-color: #6610f2 !important;
}
.bg-indigo,
.bg-indigo > a {
color: #fff !important;
}
.bg-indigo.btn:hover {
border-color: #510bc4;
color: #ececec;
}
.bg-indigo.btn.active,
.bg-indigo.btn:active,
.bg-indigo.btn:not(:disabled):not(.disabled).active,
.bg-indigo.btn:not(:disabled):not(.disabled):active {
background-color: #510bc4 !important;
border-color: #4c0ab8;
color: #fff;
}
.bg-purple {
background-color: #6f42c1 !important;
}
.bg-purple,
.bg-purple > a {
color: #fff !important;
}
.bg-purple.btn:hover {
border-color: #59339d;
color: #ececec;
}
.bg-purple.btn.active,
.bg-purple.btn:active,
.bg-purple.btn:not(:disabled):not(.disabled).active,
.bg-purple.btn:not(:disabled):not(.disabled):active {
background-color: #59339d !important;
border-color: #533093;
color: #fff;
}
.bg-pink {
background-color: #e83e8c !important;
}
.bg-pink,
.bg-pink > a {
color: #fff !important;
}
.bg-pink.btn:hover {
border-color: #d91a72;
color: #ececec;
}
.bg-pink.btn.active,
.bg-pink.btn:active,
.bg-pink.btn:not(:disabled):not(.disabled).active,
.bg-pink.btn:not(:disabled):not(.disabled):active {
background-color: #d91a72 !important;
border-color: #ce196c;
color: #fff;
}
.bg-red {
background-color: #dc3545 !important;
}
.bg-red,
.bg-red > a {
color: #fff !important;
}
.bg-red.btn:hover {
border-color: #bd2130;
color: #ececec;
}
.bg-red.btn.active,
.bg-red.btn:active,
.bg-red.btn:not(:disabled):not(.disabled).active,
.bg-red.btn:not(:disabled):not(.disabled):active {
background-color: #bd2130 !important;
border-color: #b21f2d;
color: #fff;
}
.bg-orange {
background-color: #fd7e14 !important;
}
.bg-orange,
.bg-orange > a {
color: #1f2d3d !important;
}
.bg-orange.btn:hover {
border-color: #dc6502;
color: #121a24;
}
.bg-orange.btn.active,
.bg-orange.btn:active,
.bg-orange.btn:not(:disabled):not(.disabled).active,
.bg-orange.btn:not(:disabled):not(.disabled):active {
background-color: #dc6502 !important;
border-color: #cf5f02;
color: #fff;
}
.bg-yellow {
background-color: #ffc107 !important;
}
.bg-yellow,
.bg-yellow > a {
color: #1f2d3d !important;
}
.bg-yellow.btn:hover {
border-color: #d39e00;
color: #121a24;
}
.bg-yellow.btn.active,
.bg-yellow.btn:active,
.bg-yellow.btn:not(:disabled):not(.disabled).active,
.bg-yellow.btn:not(:disabled):not(.disabled):active {
background-color: #d39e00 !important;
border-color: #c69500;
color: #1f2d3d;
}
.bg-green {
background-color: #28a745 !important;
}
.bg-green,
.bg-green > a {
color: #fff !important;
}
.bg-green.btn:hover {
border-color: #1e7e34;
color: #ececec;
}
.bg-green.btn.active,
.bg-green.btn:active,
.bg-green.btn:not(:disabled):not(.disabled).active,
.bg-green.btn:not(:disabled):not(.disabled):active {
background-color: #1e7e34 !important;
border-color: #1c7430;
color: #fff;
}
.bg-teal {
background-color: #20c997 !important;
}
.bg-teal,
.bg-teal > a {
color: #fff !important;
}
.bg-teal.btn:hover {
border-color: #199d76;
color: #ececec;
}
.bg-teal.btn.active,
.bg-teal.btn:active,
.bg-teal.btn:not(:disabled):not(.disabled).active,
.bg-teal.btn:not(:disabled):not(.disabled):active {
background-color: #199d76 !important;
border-color: #17926e;
color: #fff;
}
.bg-cyan {
background-color: #17a2b8 !important;
}
.bg-cyan,
.bg-cyan > a {
color: #fff !important;
}
.bg-cyan.btn:hover {
border-color: #117a8b;
color: #ececec;
}
.bg-cyan.btn.active,
.bg-cyan.btn:active,
.bg-cyan.btn:not(:disabled):not(.disabled).active,
.bg-cyan.btn:not(:disabled):not(.disabled):active {
background-color: #117a8b !important;
border-color: #10707f;
color: #fff;
}
.bg-white {
background-color: #fff !important;
}
.bg-white,
.bg-white > a {
color: #1f2d3d !important;
}
.bg-white.btn:hover {
border-color: #e6e6e6;
color: #121a24;
}
.bg-white.btn.active,
.bg-white.btn:active,
.bg-white.btn:not(:disabled):not(.disabled).active,
.bg-white.btn:not(:disabled):not(.disabled):active {
background-color: #e6e6e6 !important;
border-color: #dfdfdf;
color: #1f2d3d;
}
.bg-gray {
background-color: #6c757d !important;
}
.bg-gray,
.bg-gray > a {
color: #fff !important;
}
.bg-gray.btn:hover {
border-color: #545b62;
color: #ececec;
}
.bg-gray.btn.active,
.bg-gray.btn:active,
.bg-gray.btn:not(:disabled):not(.disabled).active,
.bg-gray.btn:not(:disabled):not(.disabled):active {
background-color: #545b62 !important;
border-color: #4e555b;
color: #fff;
}
.bg-gray-dark {
background-color: <?php echo $maincolor;?> !important;
}
.bg-gray-dark,
.bg-gray-dark > a {
color: #fff !important;
}
.bg-gray-dark.btn:hover {
border-color: #1d2124;
color: #ececec;
}
.bg-gray-dark.btn.active,
.bg-gray-dark.btn:active,
.bg-gray-dark.btn:not(:disabled):not(.disabled).active,
.bg-gray-dark.btn:not(:disabled):not(.disabled):active {
background-color: #1d2124 !important;
border-color: #171a1d;
color: #fff;
}
.bg-gray {
background-color: #adb5bd;
color: #1f2d3d;
}
.bg-gray-light {
background-color: #f2f4f5;
color: #1f2d3d !important;
}
.bg-black {
background-color: #000;
color: #fff !important;
}
.bg-white {
background-color: #fff;
color: #1f2d3d !important;
}
.bg-gradient-primary {
background: <?php echo $accent_color;?>; linear-gradient(180deg, #268fff, <?php echo $accent_color;?>;) repeat-x !important;
color: #fff;
}
.bg-gradient-primary.btn.disabled,
.bg-gradient-primary.btn:disabled,
.bg-gradient-primary.btn:not(:disabled):not(.disabled).active,
.bg-gradient-primary.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-primary.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-primary.btn:hover {
background: <?php echo $accent_color;?>; linear-gradient(180deg, #267fde, #0069d9) repeat-x !important;
border-color: #0062cc;
color: #ececec;
}
.bg-gradient-primary.btn.active,
.bg-gradient-primary.btn:active,
.bg-gradient-primary.btn:not(:disabled):not(.disabled).active,
.bg-gradient-primary.btn:not(:disabled):not(.disabled):active {
background: <?php echo $accent_color;?>; linear-gradient(180deg, #267ad4, #0062cc) repeat-x !important;
border-color: #005cbf;
color: #fff;
}
.bg-gradient-secondary {
background: #6c757d linear-gradient(180deg, #828a91, #6c757d) repeat-x !important;
color: #fff;
}
.bg-gradient-secondary.btn.disabled,
.bg-gradient-secondary.btn:disabled,
.bg-gradient-secondary.btn:not(:disabled):not(.disabled).active,
.bg-gradient-secondary.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-secondary.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-secondary.btn:hover {
background: #6c757d linear-gradient(180deg, #73797f, #5a6268) repeat-x !important;
border-color: #545b62;
color: #ececec;
}
.bg-gradient-secondary.btn.active,
.bg-gradient-secondary.btn:active,
.bg-gradient-secondary.btn:not(:disabled):not(.disabled).active,
.bg-gradient-secondary.btn:not(:disabled):not(.disabled):active {
background: #6c757d linear-gradient(180deg, #6e7479, #545b62) repeat-x !important;
border-color: #4e555b;
color: #fff;
}
.bg-gradient-success {
background: #28a745 linear-gradient(180deg, #48b461, #28a745) repeat-x !important;
color: #fff;
}
.bg-gradient-success.btn.disabled,
.bg-gradient-success.btn:disabled,
.bg-gradient-success.btn:not(:disabled):not(.disabled).active,
.bg-gradient-success.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-success.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-success.btn:hover {
background: #28a745 linear-gradient(180deg, #429a56, #218838) repeat-x !important;
border-color: #1e7e34;
color: #ececec;
}
.bg-gradient-success.btn.active,
.bg-gradient-success.btn:active,
.bg-gradient-success.btn:not(:disabled):not(.disabled).active,
.bg-gradient-success.btn:not(:disabled):not(.disabled):active {
background: #28a745 linear-gradient(180deg, #409152, #1e7e34) repeat-x !important;
border-color: #1c7430;
color: #fff;
}
.bg-gradient-info {
background: #17a2b8 linear-gradient(180deg, #3ab0c3, #17a2b8) repeat-x !important;
color: #fff;
}
.bg-gradient-info.btn.disabled,
.bg-gradient-info.btn:disabled,
.bg-gradient-info.btn:not(:disabled):not(.disabled).active,
.bg-gradient-info.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-info.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-info.btn:hover {
background: #17a2b8 linear-gradient(180deg, #3697a6, #138496) repeat-x !important;
border-color: #117a8b;
color: #ececec;
}
.bg-gradient-info.btn.active,
.bg-gradient-info.btn:active,
.bg-gradient-info.btn:not(:disabled):not(.disabled).active,
.bg-gradient-info.btn:not(:disabled):not(.disabled):active {
background: #17a2b8 linear-gradient(180deg, #358e9c, #117a8b) repeat-x !important;
border-color: #10707f;
color: #fff;
}
.bg-gradient-warning {
background: #ffc107 linear-gradient(180deg, #ffca2c, #ffc107) repeat-x !important;
color: #1f2d3d;
}
.bg-gradient-warning.btn.disabled,
.bg-gradient-warning.btn:disabled,
.bg-gradient-warning.btn:not(:disabled):not(.disabled).active,
.bg-gradient-warning.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-warning.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-warning.btn:hover {
background: #ffc107 linear-gradient(180deg, #e4b526, #e0a800) repeat-x !important;
border-color: #d39e00;
color: #121a24;
}
.bg-gradient-warning.btn.active,
.bg-gradient-warning.btn:active,
.bg-gradient-warning.btn:not(:disabled):not(.disabled).active,
.bg-gradient-warning.btn:not(:disabled):not(.disabled):active {
background: #ffc107 linear-gradient(180deg, #daad26, #d39e00) repeat-x !important;
border-color: #c69500;
color: #1f2d3d;
}
.bg-gradient-danger {
background: #dc3545 linear-gradient(180deg, #e15361, #dc3545) repeat-x !important;
color: #fff;
}
.bg-gradient-danger.btn.disabled,
.bg-gradient-danger.btn:disabled,
.bg-gradient-danger.btn:not(:disabled):not(.disabled).active,
.bg-gradient-danger.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-danger.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-danger.btn:hover {
background: #dc3545 linear-gradient(180deg, #d04451, #c82333) repeat-x !important;
border-color: #bd2130;
color: #ececec;
}
.bg-gradient-danger.btn.active,
.bg-gradient-danger.btn:active,
.bg-gradient-danger.btn:not(:disabled):not(.disabled).active,
.bg-gradient-danger.btn:not(:disabled):not(.disabled):active {
background: #dc3545 linear-gradient(180deg, #c7424f, #bd2130) repeat-x !important;
border-color: #b21f2d;
color: #fff;
}
.bg-gradient-light {
background: #f8f9fa linear-gradient(180deg, #f9fafb, #f8f9fa) repeat-x !important;
color: #1f2d3d;
}
.bg-gradient-light.btn.disabled,
.bg-gradient-light.btn:disabled,
.bg-gradient-light.btn:not(:disabled):not(.disabled).active,
.bg-gradient-light.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-light.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-light.btn:hover {
background: #f8f9fa linear-gradient(180deg, #e6eaed, #e2e6ea) repeat-x !important;
border-color: #dae0e5;
color: #121a24;
}
.bg-gradient-light.btn.active,
.bg-gradient-light.btn:active,
.bg-gradient-light.btn:not(:disabled):not(.disabled).active,
.bg-gradient-light.btn:not(:disabled):not(.disabled):active {
background: #f8f9fa linear-gradient(180deg, #e0e4e9, #dae0e5) repeat-x !important;
border-color: #d3d9df;
color: #1f2d3d;
}
.bg-gradient-dark {
background: <?php echo $maincolor;?> linear-gradient(180deg, #52585d, <?php echo $maincolor;?>) repeat-x !important;
color: #fff;
}
.bg-gradient-dark.btn.disabled,
.bg-gradient-dark.btn:disabled,
.bg-gradient-dark.btn:not(:disabled):not(.disabled).active,
.bg-gradient-dark.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-dark.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-dark.btn:hover {
background: <?php echo $maincolor;?> linear-gradient(180deg, #44474b, #23272b) repeat-x !important;
border-color: #1d2124;
color: #ececec;
}
.bg-gradient-dark.btn.active,
.bg-gradient-dark.btn:active,
.bg-gradient-dark.btn:not(:disabled):not(.disabled).active,
.bg-gradient-dark.btn:not(:disabled):not(.disabled):active {
background: <?php echo $maincolor;?> linear-gradient(180deg, #3f4245, #1d2124) repeat-x !important;
border-color: #171a1d;
color: #fff;
}
.bg-gradient-lightblue {
background: #3c8dbc linear-gradient(180deg, #599ec6, #3c8dbc) repeat-x !important;
color: #fff;
}
.bg-gradient-lightblue.btn.disabled,
.bg-gradient-lightblue.btn:disabled,
.bg-gradient-lightblue.btn:not(:disabled):not(.disabled).active,
.bg-gradient-lightblue.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-lightblue.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-lightblue.btn:hover {
background: #3c8dbc linear-gradient(180deg, #518cad, #33779f) repeat-x !important;
border-color: #307095;
color: #ececec;
}
.bg-gradient-lightblue.btn.active,
.bg-gradient-lightblue.btn:active,
.bg-gradient-lightblue.btn:not(:disabled):not(.disabled).active,
.bg-gradient-lightblue.btn:not(:disabled):not(.disabled):active {
background: #3c8dbc linear-gradient(180deg, #4f85a5, #307095) repeat-x !important;
border-color: #2d698c;
color: #fff;
}
.bg-gradient-navy {
background: #001f3f linear-gradient(180deg, #26415c, #001f3f) repeat-x !important;
color: #fff;
}
.bg-gradient-navy.btn.disabled,
.bg-gradient-navy.btn:disabled,
.bg-gradient-navy.btn:not(:disabled):not(.disabled).active,
.bg-gradient-navy.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-navy.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-navy.btn:hover {
background: #001f3f linear-gradient(180deg, #26313b, #000c19) repeat-x !important;
border-color: #00060c;
color: #ececec;
}
.bg-gradient-navy.btn.active,
.bg-gradient-navy.btn:active,
.bg-gradient-navy.btn:not(:disabled):not(.disabled).active,
.bg-gradient-navy.btn:not(:disabled):not(.disabled):active {
background: #001f3f linear-gradient(180deg, #262b30, #00060c) repeat-x !important;
border-color: #000;
color: #fff;
}
.bg-gradient-olive {
background: #3d9970 linear-gradient(180deg, #5aa885, #3d9970) repeat-x !important;
color: #fff;
}
.bg-gradient-olive.btn.disabled,
.bg-gradient-olive.btn:disabled,
.bg-gradient-olive.btn:not(:disabled):not(.disabled).active,
.bg-gradient-olive.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-olive.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-olive.btn:hover {
background: #3d9970 linear-gradient(180deg, #519174, #327e5c) repeat-x !important;
border-color: #2e7555;
color: #ececec;
}
.bg-gradient-olive.btn.active,
.bg-gradient-olive.btn:active,
.bg-gradient-olive.btn:not(:disabled):not(.disabled).active,
.bg-gradient-olive.btn:not(:disabled):not(.disabled):active {
background: #3d9970 linear-gradient(180deg, #4e896f, #2e7555) repeat-x !important;
border-color: #2b6b4f;
color: #fff;
}
.bg-gradient-lime {
background: #01ff70 linear-gradient(180deg, #27ff85, #01ff70) repeat-x !important;
color: #1f2d3d;
}
.bg-gradient-lime.btn.disabled,
.bg-gradient-lime.btn:disabled,
.bg-gradient-lime.btn:not(:disabled):not(.disabled).active,
.bg-gradient-lime.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-lime.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-lime.btn:hover {
background: #01ff70 linear-gradient(180deg, #26df77, #00da5f) repeat-x !important;
border-color: #00cd5a;
color: #121a24;
}
.bg-gradient-lime.btn.active,
.bg-gradient-lime.btn:active,
.bg-gradient-lime.btn:not(:disabled):not(.disabled).active,
.bg-gradient-lime.btn:not(:disabled):not(.disabled):active {
background: #01ff70 linear-gradient(180deg, #26d572, #00cd5a) repeat-x !important;
border-color: #00c054;
color: #fff;
}
.bg-gradient-fuchsia {
background: #f012be linear-gradient(180deg, #f236c8, #f012be) repeat-x !important;
color: #fff;
}
.bg-gradient-fuchsia.btn.disabled,
.bg-gradient-fuchsia.btn:disabled,
.bg-gradient-fuchsia.btn:not(:disabled):not(.disabled).active,
.bg-gradient-fuchsia.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-fuchsia.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-fuchsia.btn:hover {
background: #f012be linear-gradient(180deg, #d631b1, #cf0da3) repeat-x !important;
border-color: #c30c9a;
color: #ececec;
}
.bg-gradient-fuchsia.btn.active,
.bg-gradient-fuchsia.btn:active,
.bg-gradient-fuchsia.btn:not(:disabled):not(.disabled).active,
.bg-gradient-fuchsia.btn:not(:disabled):not(.disabled):active {
background: #f012be linear-gradient(180deg, #cc31a9, #c30c9a) repeat-x !important;
border-color: #b70c90;
color: #fff;
}
.bg-gradient-maroon {
background: #d81b60 linear-gradient(180deg, #de3d78, #d81b60) repeat-x !important;
color: #fff;
}
.bg-gradient-maroon.btn.disabled,
.bg-gradient-maroon.btn:disabled,
.bg-gradient-maroon.btn:not(:disabled):not(.disabled).active,
.bg-gradient-maroon.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-maroon.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-maroon.btn:hover {
background: #d81b60 linear-gradient(180deg, #c13a6b, #b61751) repeat-x !important;
border-color: #ab154c;
color: #ececec;
}
.bg-gradient-maroon.btn.active,
.bg-gradient-maroon.btn:active,
.bg-gradient-maroon.btn:not(:disabled):not(.disabled).active,
.bg-gradient-maroon.btn:not(:disabled):not(.disabled):active {
background: #d81b60 linear-gradient(180deg, #b73867, #ab154c) repeat-x !important;
border-color: #9f1447;
color: #fff;
}
.bg-gradient-blue {
background: <?php echo $accent_color;?>; linear-gradient(180deg, #268fff, <?php echo $accent_color;?>;) repeat-x !important;
color: #fff;
}
.bg-gradient-blue.btn.disabled,
.bg-gradient-blue.btn:disabled,
.bg-gradient-blue.btn:not(:disabled):not(.disabled).active,
.bg-gradient-blue.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-blue.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-blue.btn:hover {
background: <?php echo $accent_color;?>; linear-gradient(180deg, #267fde, #0069d9) repeat-x !important;
border-color: #0062cc;
color: #ececec;
}
.bg-gradient-blue.btn.active,
.bg-gradient-blue.btn:active,
.bg-gradient-blue.btn:not(:disabled):not(.disabled).active,
.bg-gradient-blue.btn:not(:disabled):not(.disabled):active {
background: <?php echo $accent_color;?>; linear-gradient(180deg, #267ad4, #0062cc) repeat-x !important;
border-color: #005cbf;
color: #fff;
}
.bg-gradient-indigo {
background: #6610f2 linear-gradient(180deg, #7d34f4, #6610f2) repeat-x !important;
color: #fff;
}
.bg-gradient-indigo.btn.disabled,
.bg-gradient-indigo.btn:disabled,
.bg-gradient-indigo.btn:not(:disabled):not(.disabled).active,
.bg-gradient-indigo.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-indigo.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-indigo.btn:hover {
background: #6610f2 linear-gradient(180deg, #7030d7, #560bd0) repeat-x !important;
border-color: #510bc4;
color: #ececec;
}
.bg-gradient-indigo.btn.active,
.bg-gradient-indigo.btn:active,
.bg-gradient-indigo.btn:not(:disabled):not(.disabled).active,
.bg-gradient-indigo.btn:not(:disabled):not(.disabled):active {
background: #6610f2 linear-gradient(180deg, #6b2fcd, #510bc4) repeat-x !important;
border-color: #4c0ab8;
color: #fff;
}
.bg-gradient-purple {
background: #6f42c1 linear-gradient(180deg, #855eca, #6f42c1) repeat-x !important;
color: #fff;
}
.bg-gradient-purple.btn.disabled,
.bg-gradient-purple.btn:disabled,
.bg-gradient-purple.btn:not(:disabled):not(.disabled).active,
.bg-gradient-purple.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-purple.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-purple.btn:hover {
background: #6f42c1 linear-gradient(180deg, #7655b4, #5e37a6) repeat-x !important;
border-color: #59339d;
color: #ececec;
}
.bg-gradient-purple.btn.active,
.bg-gradient-purple.btn:active,
.bg-gradient-purple.btn:not(:disabled):not(.disabled).active,
.bg-gradient-purple.btn:not(:disabled):not(.disabled):active {
background: #6f42c1 linear-gradient(180deg, #7252ab, #59339d) repeat-x !important;
border-color: #533093;
color: #fff;
}
.bg-gradient-pink {
background: #e83e8c linear-gradient(180deg, #eb5b9d, #e83e8c) repeat-x !important;
color: #fff;
}
.bg-gradient-pink.btn.disabled,
.bg-gradient-pink.btn:disabled,
.bg-gradient-pink.btn:not(:disabled):not(.disabled).active,
.bg-gradient-pink.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-pink.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-pink.btn:hover {
background: #e83e8c linear-gradient(180deg, #e83e8c, #e41c78) repeat-x !important;
border-color: #d91a72;
color: #ececec;
}
.bg-gradient-pink.btn.active,
.bg-gradient-pink.btn:active,
.bg-gradient-pink.btn:not(:disabled):not(.disabled).active,
.bg-gradient-pink.btn:not(:disabled):not(.disabled):active {
background: #e83e8c linear-gradient(180deg, #df3c87, #d91a72) repeat-x !important;
border-color: #ce196c;
color: #fff;
}
.bg-gradient-red {
background: #dc3545 linear-gradient(180deg, #e15361, #dc3545) repeat-x !important;
color: #fff;
}
.bg-gradient-red.btn.disabled,
.bg-gradient-red.btn:disabled,
.bg-gradient-red.btn:not(:disabled):not(.disabled).active,
.bg-gradient-red.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-red.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-red.btn:hover {
background: #dc3545 linear-gradient(180deg, #d04451, #c82333) repeat-x !important;
border-color: #bd2130;
color: #ececec;
}
.bg-gradient-red.btn.active,
.bg-gradient-red.btn:active,
.bg-gradient-red.btn:not(:disabled):not(.disabled).active,
.bg-gradient-red.btn:not(:disabled):not(.disabled):active {
background: #dc3545 linear-gradient(180deg, #c7424f, #bd2130) repeat-x !important;
border-color: #b21f2d;
color: #fff;
}
.bg-gradient-orange {
background: #fd7e14 linear-gradient(180deg, #fd9137, #fd7e14) repeat-x !important;
color: #1f2d3d;
}
.bg-gradient-orange.btn.disabled,
.bg-gradient-orange.btn:disabled,
.bg-gradient-orange.btn:not(:disabled):not(.disabled).active,
.bg-gradient-orange.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-orange.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-orange.btn:hover {
background: #fd7e14 linear-gradient(180deg, #ec8128, #e96b02) repeat-x !important;
border-color: #dc6502;
color: #121a24;
}
.bg-gradient-orange.btn.active,
.bg-gradient-orange.btn:active,
.bg-gradient-orange.btn:not(:disabled):not(.disabled).active,
.bg-gradient-orange.btn:not(:disabled):not(.disabled):active {
background: #fd7e14 linear-gradient(180deg, #e17c28, #dc6502) repeat-x !important;
border-color: #cf5f02;
color: #fff;
}
.bg-gradient-yellow {
background: #ffc107 linear-gradient(180deg, #ffca2c, #ffc107) repeat-x !important;
color: #1f2d3d;
}
.bg-gradient-yellow.btn.disabled,
.bg-gradient-yellow.btn:disabled,
.bg-gradient-yellow.btn:not(:disabled):not(.disabled).active,
.bg-gradient-yellow.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-yellow.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-yellow.btn:hover {
background: #ffc107 linear-gradient(180deg, #e4b526, #e0a800) repeat-x !important;
border-color: #d39e00;
color: #121a24;
}
.bg-gradient-yellow.btn.active,
.bg-gradient-yellow.btn:active,
.bg-gradient-yellow.btn:not(:disabled):not(.disabled).active,
.bg-gradient-yellow.btn:not(:disabled):not(.disabled):active {
background: #ffc107 linear-gradient(180deg, #daad26, #d39e00) repeat-x !important;
border-color: #c69500;
color: #1f2d3d;
}
.bg-gradient-green {
background: #28a745 linear-gradient(180deg, #48b461, #28a745) repeat-x !important;
color: #fff;
}
.bg-gradient-green.btn.disabled,
.bg-gradient-green.btn:disabled,
.bg-gradient-green.btn:not(:disabled):not(.disabled).active,
.bg-gradient-green.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-green.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-green.btn:hover {
background: #28a745 linear-gradient(180deg, #429a56, #218838) repeat-x !important;
border-color: #1e7e34;
color: #ececec;
}
.bg-gradient-green.btn.active,
.bg-gradient-green.btn:active,
.bg-gradient-green.btn:not(:disabled):not(.disabled).active,
.bg-gradient-green.btn:not(:disabled):not(.disabled):active {
background: #28a745 linear-gradient(180deg, #409152, #1e7e34) repeat-x !important;
border-color: #1c7430;
color: #fff;
}
.bg-gradient-teal {
background: #20c997 linear-gradient(180deg, #41d1a7, #20c997) repeat-x !important;
color: #fff;
}
.bg-gradient-teal.btn.disabled,
.bg-gradient-teal.btn:disabled,
.bg-gradient-teal.btn:not(:disabled):not(.disabled).active,
.bg-gradient-teal.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-teal.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-teal.btn:hover {
background: #20c997 linear-gradient(180deg, #3db592, #1ba87e) repeat-x !important;
border-color: #199d76;
color: #ececec;
}
.bg-gradient-teal.btn.active,
.bg-gradient-teal.btn:active,
.bg-gradient-teal.btn:not(:disabled):not(.disabled).active,
.bg-gradient-teal.btn:not(:disabled):not(.disabled):active {
background: #20c997 linear-gradient(180deg, #3bac8b, #199d76) repeat-x !important;
border-color: #17926e;
color: #fff;
}
.bg-gradient-cyan {
background: #17a2b8 linear-gradient(180deg, #3ab0c3, #17a2b8) repeat-x !important;
color: #fff;
}
.bg-gradient-cyan.btn.disabled,
.bg-gradient-cyan.btn:disabled,
.bg-gradient-cyan.btn:not(:disabled):not(.disabled).active,
.bg-gradient-cyan.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-cyan.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-cyan.btn:hover {
background: #17a2b8 linear-gradient(180deg, #3697a6, #138496) repeat-x !important;
border-color: #117a8b;
color: #ececec;
}
.bg-gradient-cyan.btn.active,
.bg-gradient-cyan.btn:active,
.bg-gradient-cyan.btn:not(:disabled):not(.disabled).active,
.bg-gradient-cyan.btn:not(:disabled):not(.disabled):active {
background: #17a2b8 linear-gradient(180deg, #358e9c, #117a8b) repeat-x !important;
border-color: #10707f;
color: #fff;
}
.bg-gradient-white {
background: #fff linear-gradient(180deg, #fff, #fff) repeat-x !important;
color: #1f2d3d;
}
.bg-gradient-white.btn.disabled,
.bg-gradient-white.btn:disabled,
.bg-gradient-white.btn:not(:disabled):not(.disabled).active,
.bg-gradient-white.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-white.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-white.btn:hover {
background: #fff linear-gradient(180deg, #efefef, #ececec) repeat-x !important;
border-color: #e6e6e6;
color: #121a24;
}
.bg-gradient-white.btn.active,
.bg-gradient-white.btn:active,
.bg-gradient-white.btn:not(:disabled):not(.disabled).active,
.bg-gradient-white.btn:not(:disabled):not(.disabled):active {
background: #fff linear-gradient(180deg, #e9e9e9, #e6e6e6) repeat-x !important;
border-color: #dfdfdf;
color: #1f2d3d;
}
.bg-gradient-gray {
background: #6c757d linear-gradient(180deg, #828a91, #6c757d) repeat-x !important;
color: #fff;
}
.bg-gradient-gray.btn.disabled,
.bg-gradient-gray.btn:disabled,
.bg-gradient-gray.btn:not(:disabled):not(.disabled).active,
.bg-gradient-gray.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-gray.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-gray.btn:hover {
background: #6c757d linear-gradient(180deg, #73797f, #5a6268) repeat-x !important;
border-color: #545b62;
color: #ececec;
}
.bg-gradient-gray.btn.active,
.bg-gradient-gray.btn:active,
.bg-gradient-gray.btn:not(:disabled):not(.disabled).active,
.bg-gradient-gray.btn:not(:disabled):not(.disabled):active {
background: #6c757d linear-gradient(180deg, #6e7479, #545b62) repeat-x !important;
border-color: #4e555b;
color: #fff;
}
.bg-gradient-gray-dark {
background: <?php echo $maincolor;?> linear-gradient(180deg, #52585d, <?php echo $maincolor;?>) repeat-x !important;
color: #fff;
}
.bg-gradient-gray-dark.btn.disabled,
.bg-gradient-gray-dark.btn:disabled,
.bg-gradient-gray-dark.btn:not(:disabled):not(.disabled).active,
.bg-gradient-gray-dark.btn:not(:disabled):not(.disabled):active,
.show > .bg-gradient-gray-dark.btn.dropdown-toggle {
background-image: none !important;
}
.bg-gradient-gray-dark.btn:hover {
background: <?php echo $maincolor;?> linear-gradient(180deg, #44474b, #23272b) repeat-x !important;
border-color: #1d2124;
color: #ececec;
}
.bg-gradient-gray-dark.btn.active,
.bg-gradient-gray-dark.btn:active,
.bg-gradient-gray-dark.btn:not(:disabled):not(.disabled).active,
.bg-gradient-gray-dark.btn:not(:disabled):not(.disabled):active {
background: <?php echo $maincolor;?> linear-gradient(180deg, #3f4245, #1d2124) repeat-x !important;
border-color: #171a1d;
color: #fff;
}
[class^="bg-"].disabled {
opacity: 0.65;
}
a.text-muted:hover {
color: <?php echo $accent_color;?>; !important;
}
.link-muted {
color: #5d6974;
}
.link-muted:focus,
.link-muted:hover {
color: #464f58;
}
.link-black {
color: #6c757d;
}
.link-black:focus,
.link-black:hover {
color: #e6e8ea;
}
.accent-primary .btn-link,
.accent-primary a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: <?php echo $accent_color;?>;
}
.accent-primary .btn-link:hover,
.accent-primary a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #0056b3;
}
.accent-primary .dropdown-item.active,
.accent-primary .dropdown-item:active {
background-color: <?php echo $accent_color;?>;
color: #fff;
}
.accent-primary .custom-control-input:checked ~ .custom-control-label::before {
background-color: <?php echo $accent_color;?>;
border-color: #004a99;
}
.accent-primary .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-primary .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-primary .custom-file-input:focus ~ .custom-file-label,
.accent-primary .custom-select:focus,
.accent-primary .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #80bdff;
}
.accent-primary .page-item .page-link {
color: <?php echo $accent_color;?>;
}
.accent-primary .page-item.active .page-link,
.accent-primary .page-item.active a {
background-color: <?php echo $accent_color;?>;
border-color: <?php echo $accent_color;?>;
color: #fff;
}
.accent-primary .page-item.disabled .page-link,
.accent-primary .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-primary [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-primary [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-primary [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-primary [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-primary .page-item .page-link:focus,
.dark-mode.accent-primary .page-item .page-link:hover {
color: #1a88ff;
}
.accent-secondary .btn-link,
.accent-secondary a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #6c757d;
}
.accent-secondary .btn-link:hover,
.accent-secondary a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #494f54;
}
.accent-secondary .dropdown-item.active,
.accent-secondary .dropdown-item:active {
background-color: #6c757d;
color: #fff;
}
.accent-secondary .custom-control-input:checked ~ .custom-control-label::before {
background-color: #6c757d;
border-color: #3d4246;
}
.accent-secondary .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-secondary .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-secondary .custom-file-input:focus ~ .custom-file-label,
.accent-secondary .custom-select:focus,
.accent-secondary .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #afb5ba;
}
.accent-secondary .page-item .page-link {
color: #6c757d;
}
.accent-secondary .page-item.active .page-link,
.accent-secondary .page-item.active a {
background-color: #6c757d;
border-color: #6c757d;
color: #fff;
}
.accent-secondary .page-item.disabled .page-link,
.accent-secondary .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-secondary [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-secondary [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-secondary [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-secondary [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-secondary .page-item .page-link:focus,
.dark-mode.accent-secondary .page-item .page-link:hover {
color: #78828a;
}
.accent-success .btn-link,
.accent-success a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #28a745;
}
.accent-success .btn-link:hover,
.accent-success a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #19692c;
}
.accent-success .dropdown-item.active,
.accent-success .dropdown-item:active {
background-color: #28a745;
color: #fff;
}
.accent-success .custom-control-input:checked ~ .custom-control-label::before {
background-color: #28a745;
border-color: #145523;
}
.accent-success .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-success .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-success .custom-file-input:focus ~ .custom-file-label,
.accent-success .custom-select:focus,
.accent-success .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #71dd8a;
}
.accent-success .page-item .page-link {
color: #28a745;
}
.accent-success .page-item.active .page-link,
.accent-success .page-item.active a {
background-color: #28a745;
border-color: #28a745;
color: #fff;
}
.accent-success .page-item.disabled .page-link,
.accent-success .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-success [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-success [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-success [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-success [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-success .page-item .page-link:focus,
.dark-mode.accent-success .page-item .page-link:hover {
color: #2dbc4e;
}
.accent-info .btn-link,
.accent-info a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #17a2b8;
}
.accent-info .btn-link:hover,
.accent-info a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #0f6674;
}
.accent-info .dropdown-item.active,
.accent-info .dropdown-item:active {
background-color: #17a2b8;
color: #fff;
}
.accent-info .custom-control-input:checked ~ .custom-control-label::before {
background-color: #17a2b8;
border-color: #0c525d;
}
.accent-info .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-info .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-info .custom-file-input:focus ~ .custom-file-label,
.accent-info .custom-select:focus,
.accent-info .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #63d9ec;
}
.accent-info .page-item .page-link {
color: #17a2b8;
}
.accent-info .page-item.active .page-link,
.accent-info .page-item.active a {
background-color: #17a2b8;
border-color: #17a2b8;
color: #fff;
}
.accent-info .page-item.disabled .page-link,
.accent-info .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-info [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-info [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-info [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-info [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-info .page-item .page-link:focus,
.dark-mode.accent-info .page-item .page-link:hover {
color: #1ab6cf;
}
.accent-warning .btn-link,
.accent-warning a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #ffc107;
}
.accent-warning .btn-link:hover,
.accent-warning a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #ba8b00;
}
.accent-warning .dropdown-item.active,
.accent-warning .dropdown-item:active {
background-color: #ffc107;
color: #1f2d3d;
}
.accent-warning .custom-control-input:checked ~ .custom-control-label::before {
background-color: #ffc107;
border-color: #a07800;
}
.accent-warning .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%231f2d3d' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-warning .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-warning .custom-file-input:focus ~ .custom-file-label,
.accent-warning .custom-select:focus,
.accent-warning .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #ffe187;
}
.accent-warning .page-item .page-link {
color: #ffc107;
}
.accent-warning .page-item.active .page-link,
.accent-warning .page-item.active a {
background-color: #ffc107;
border-color: #ffc107;
color: #fff;
}
.accent-warning .page-item.disabled .page-link,
.accent-warning .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-warning [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-warning [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-warning [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-warning [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-warning .page-item .page-link:focus,
.dark-mode.accent-warning .page-item .page-link:hover {
color: #ffc721;
}
.accent-danger .btn-link,
.accent-danger a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #dc3545;
}
.accent-danger .btn-link:hover,
.accent-danger a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #a71d2a;
}
.accent-danger .dropdown-item.active,
.accent-danger .dropdown-item:active {
background-color: #dc3545;
color: #fff;
}
.accent-danger .custom-control-input:checked ~ .custom-control-label::before {
background-color: #dc3545;
border-color: #921925;
}
.accent-danger .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-danger .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-danger .custom-file-input:focus ~ .custom-file-label,
.accent-danger .custom-select:focus,
.accent-danger .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #efa2a9;
}
.accent-danger .page-item .page-link {
color: #dc3545;
}
.accent-danger .page-item.active .page-link,
.accent-danger .page-item.active a {
background-color: #dc3545;
border-color: #dc3545;
color: #fff;
}
.accent-danger .page-item.disabled .page-link,
.accent-danger .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-danger [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-danger [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-danger [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-danger [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-danger .page-item .page-link:focus,
.dark-mode.accent-danger .page-item .page-link:hover {
color: #e04b59;
}
.accent-light .btn-link,
.accent-light a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #f8f9fa;
}
.accent-light .btn-link:hover,
.accent-light a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #cbd3da;
}
.accent-light .dropdown-item.active,
.accent-light .dropdown-item:active {
background-color: #f8f9fa;
color: #1f2d3d;
}
.accent-light .custom-control-input:checked ~ .custom-control-label::before {
background-color: #f8f9fa;
border-color: #bdc6d0;
}
.accent-light .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%231f2d3d' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-light .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-light .custom-file-input:focus ~ .custom-file-label,
.accent-light .custom-select:focus,
.accent-light .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #fff;
}
.accent-light .page-item .page-link {
color: #f8f9fa;
}
.accent-light .page-item.active .page-link,
.accent-light .page-item.active a {
background-color: #f8f9fa;
border-color: #f8f9fa;
color: #fff;
}
.accent-light .page-item.disabled .page-link,
.accent-light .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-light [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-light [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-light [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-light [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-light .page-item .page-link:focus,
.dark-mode.accent-light .page-item .page-link:hover {
color: #fff;
}
.accent-dark .btn-link,
.accent-dark a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: <?php echo $maincolor;?>;
}
.accent-dark .btn-link:hover,
.accent-dark a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #121416;
}
.accent-dark .dropdown-item.active,
.accent-dark .dropdown-item:active {
background-color: <?php echo $maincolor;?>;
color: #fff;
}
.accent-dark .custom-control-input:checked ~ .custom-control-label::before {
background-color: <?php echo $maincolor;?>;
border-color: #060708;
}
.accent-dark .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-dark .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-dark .custom-file-input:focus ~ .custom-file-label,
.accent-dark .custom-select:focus,
.accent-dark .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #6d7a86;
}
.accent-dark .page-item .page-link {
color: <?php echo $maincolor;?>;
}
.accent-dark .page-item.active .page-link,
.accent-dark .page-item.active a {
background-color: <?php echo $maincolor;?>;
border-color: <?php echo $maincolor;?>;
color: #fff;
}
.accent-dark .page-item.disabled .page-link,
.accent-dark .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-dark [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-dark [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-dark [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-dark [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-dark .page-item .page-link:focus,
.dark-mode.accent-dark .page-item .page-link:hover {
color: #3f474e;
}
.accent-lightblue .btn-link,
.accent-lightblue a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #3c8dbc;
}
.accent-lightblue .btn-link:hover,
.accent-lightblue a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #296282;
}
.accent-lightblue .dropdown-item.active,
.accent-lightblue .dropdown-item:active {
background-color: #3c8dbc;
color: #fff;
}
.accent-lightblue .custom-control-input:checked ~ .custom-control-label::before {
background-color: #3c8dbc;
border-color: #23536f;
}
.accent-lightblue .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-lightblue .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-lightblue .custom-file-input:focus ~ .custom-file-label,
.accent-lightblue .custom-select:focus,
.accent-lightblue .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #99c5de;
}
.accent-lightblue .page-item .page-link {
color: #3c8dbc;
}
.accent-lightblue .page-item.active .page-link,
.accent-lightblue .page-item.active a {
background-color: #3c8dbc;
border-color: #3c8dbc;
color: #fff;
}
.accent-lightblue .page-item.disabled .page-link,
.accent-lightblue .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-lightblue [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-lightblue [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-lightblue [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-lightblue [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-lightblue .page-item .page-link:focus,
.dark-mode.accent-lightblue .page-item .page-link:hover {
color: #4c99c6;
}
.accent-navy .btn-link,
.accent-navy a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #001f3f;
}
.accent-navy .btn-link:hover,
.accent-navy a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #000;
}
.accent-navy .dropdown-item.active,
.accent-navy .dropdown-item:active {
background-color: #001f3f;
color: #fff;
}
.accent-navy .custom-control-input:checked ~ .custom-control-label::before {
background-color: #001f3f;
border-color: #000;
}
.accent-navy .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-navy .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-navy .custom-file-input:focus ~ .custom-file-label,
.accent-navy .custom-select:focus,
.accent-navy .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #005ebf;
}
.accent-navy .page-item .page-link {
color: #001f3f;
}
.accent-navy .page-item.active .page-link,
.accent-navy .page-item.active a {
background-color: #001f3f;
border-color: #001f3f;
color: #fff;
}
.accent-navy .page-item.disabled .page-link,
.accent-navy .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-navy [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-navy [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-navy [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-navy [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-navy .page-item .page-link:focus,
.dark-mode.accent-navy .page-item .page-link:hover {
color: #002c59;
}
.accent-olive .btn-link,
.accent-olive a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #3d9970;
}
.accent-olive .btn-link:hover,
.accent-olive a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #276248;
}
.accent-olive .dropdown-item.active,
.accent-olive .dropdown-item:active {
background-color: #3d9970;
color: #fff;
}
.accent-olive .custom-control-input:checked ~ .custom-control-label::before {
background-color: #3d9970;
border-color: #20503b;
}
.accent-olive .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-olive .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-olive .custom-file-input:focus ~ .custom-file-label,
.accent-olive .custom-select:focus,
.accent-olive .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #87cfaf;
}
.accent-olive .page-item .page-link {
color: #3d9970;
}
.accent-olive .page-item.active .page-link,
.accent-olive .page-item.active a {
background-color: #3d9970;
border-color: #3d9970;
color: #fff;
}
.accent-olive .page-item.disabled .page-link,
.accent-olive .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-olive [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-olive [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-olive [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-olive [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-olive .page-item .page-link:focus,
.dark-mode.accent-olive .page-item .page-link:hover {
color: #44ab7d;
}
.accent-lime .btn-link,
.accent-lime a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #01ff70;
}
.accent-lime .btn-link:hover,
.accent-lime a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #00b44e;
}
.accent-lime .dropdown-item.active,
.accent-lime .dropdown-item:active {
background-color: #01ff70;
color: #1f2d3d;
}
.accent-lime .custom-control-input:checked ~ .custom-control-label::before {
background-color: #01ff70;
border-color: #009a43;
}
.accent-lime .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%231f2d3d' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-lime .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-lime .custom-file-input:focus ~ .custom-file-label,
.accent-lime .custom-select:focus,
.accent-lime .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #81ffb8;
}
.accent-lime .page-item .page-link {
color: #01ff70;
}
.accent-lime .page-item.active .page-link,
.accent-lime .page-item.active a {
background-color: #01ff70;
border-color: #01ff70;
color: #fff;
}
.accent-lime .page-item.disabled .page-link,
.accent-lime .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-lime [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-lime [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-lime [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-lime [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-lime .page-item .page-link:focus,
.dark-mode.accent-lime .page-item .page-link:hover {
color: #1bff7e;
}
.accent-fuchsia .btn-link,
.accent-fuchsia a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #f012be;
}
.accent-fuchsia .btn-link:hover,
.accent-fuchsia a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #ab0b87;
}
.accent-fuchsia .dropdown-item.active,
.accent-fuchsia .dropdown-item:active {
background-color: #f012be;
color: #fff;
}
.accent-fuchsia .custom-control-input:checked ~ .custom-control-label::before {
background-color: #f012be;
border-color: #930974;
}
.accent-fuchsia .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-fuchsia .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-fuchsia .custom-file-input:focus ~ .custom-file-label,
.accent-fuchsia .custom-select:focus,
.accent-fuchsia .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #f88adf;
}
.accent-fuchsia .page-item .page-link {
color: #f012be;
}
.accent-fuchsia .page-item.active .page-link,
.accent-fuchsia .page-item.active a {
background-color: #f012be;
border-color: #f012be;
color: #fff;
}
.accent-fuchsia .page-item.disabled .page-link,
.accent-fuchsia .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-fuchsia [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-fuchsia [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-fuchsia [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-fuchsia [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-fuchsia .page-item .page-link:focus,
.dark-mode.accent-fuchsia .page-item .page-link:hover {
color: #f22ac5;
}
.accent-maroon .btn-link,
.accent-maroon a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #d81b60;
}
.accent-maroon .btn-link:hover,
.accent-maroon a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #941342;
}
.accent-maroon .dropdown-item.active,
.accent-maroon .dropdown-item:active {
background-color: #d81b60;
color: #fff;
}
.accent-maroon .custom-control-input:checked ~ .custom-control-label::before {
background-color: #d81b60;
border-color: #7d1038;
}
.accent-maroon .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-maroon .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-maroon .custom-file-input:focus ~ .custom-file-label,
.accent-maroon .custom-select:focus,
.accent-maroon .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #f083ab;
}
.accent-maroon .page-item .page-link {
color: #d81b60;
}
.accent-maroon .page-item.active .page-link,
.accent-maroon .page-item.active a {
background-color: #d81b60;
border-color: #d81b60;
color: #fff;
}
.accent-maroon .page-item.disabled .page-link,
.accent-maroon .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-maroon [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-maroon [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-maroon [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-maroon [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-maroon .page-item .page-link:focus,
.dark-mode.accent-maroon .page-item .page-link:hover {
color: #e4286d;
}
.accent-blue .btn-link,
.accent-blue a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: <?php echo $accent_color;?>;
}
.accent-blue .btn-link:hover,
.accent-blue a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #0056b3;
}
.accent-blue .dropdown-item.active,
.accent-blue .dropdown-item:active {
background-color: <?php echo $accent_color;?>;
color: #fff;
}
.accent-blue .custom-control-input:checked ~ .custom-control-label::before {
background-color: <?php echo $accent_color;?>;
border-color: #004a99;
}
.accent-blue .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-blue .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-blue .custom-file-input:focus ~ .custom-file-label,
.accent-blue .custom-select:focus,
.accent-blue .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #80bdff;
}
.accent-blue .page-item .page-link {
color: <?php echo $accent_color;?>;
}
.accent-blue .page-item.active .page-link,
.accent-blue .page-item.active a {
background-color: <?php echo $accent_color;?>;
border-color: <?php echo $accent_color;?>;
color: #fff;
}
.accent-blue .page-item.disabled .page-link,
.accent-blue .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-blue [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-blue [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-blue [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-blue [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-blue .page-item .page-link:focus,
.dark-mode.accent-blue .page-item .page-link:hover {
color: #1a88ff;
}
.accent-indigo .btn-link,
.accent-indigo a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #6610f2;
}
.accent-indigo .btn-link:hover,
.accent-indigo a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #4709ac;
}
.accent-indigo .dropdown-item.active,
.accent-indigo .dropdown-item:active {
background-color: #6610f2;
color: #fff;
}
.accent-indigo .custom-control-input:checked ~ .custom-control-label::before {
background-color: #6610f2;
border-color: #3d0894;
}
.accent-indigo .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-indigo .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-indigo .custom-file-input:focus ~ .custom-file-label,
.accent-indigo .custom-select:focus,
.accent-indigo .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #b389f9;
}
.accent-indigo .page-item .page-link {
color: #6610f2;
}
.accent-indigo .page-item.active .page-link,
.accent-indigo .page-item.active a {
background-color: #6610f2;
border-color: #6610f2;
color: #fff;
}
.accent-indigo .page-item.disabled .page-link,
.accent-indigo .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-indigo [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-indigo [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-indigo [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-indigo [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-indigo .page-item .page-link:focus,
.dark-mode.accent-indigo .page-item .page-link:hover {
color: #7528f3;
}
.accent-purple .btn-link,
.accent-purple a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #6f42c1;
}
.accent-purple .btn-link:hover,
.accent-purple a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #4e2d89;
}
.accent-purple .dropdown-item.active,
.accent-purple .dropdown-item:active {
background-color: #6f42c1;
color: #fff;
}
.accent-purple .custom-control-input:checked ~ .custom-control-label::before {
background-color: #6f42c1;
border-color: #432776;
}
.accent-purple .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-purple .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-purple .custom-file-input:focus ~ .custom-file-label,
.accent-purple .custom-select:focus,
.accent-purple .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #b8a2e0;
}
.accent-purple .page-item .page-link {
color: #6f42c1;
}
.accent-purple .page-item.active .page-link,
.accent-purple .page-item.active a {
background-color: #6f42c1;
border-color: #6f42c1;
color: #fff;
}
.accent-purple .page-item.disabled .page-link,
.accent-purple .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-purple [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-purple [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-purple [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-purple [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-purple .page-item .page-link:focus,
.dark-mode.accent-purple .page-item .page-link:hover {
color: #7e55c7;
}
.accent-pink .btn-link,
.accent-pink a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #e83e8c;
}
.accent-pink .btn-link:hover,
.accent-pink a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #c21766;
}
.accent-pink .dropdown-item.active,
.accent-pink .dropdown-item:active {
background-color: #e83e8c;
color: #fff;
}
.accent-pink .custom-control-input:checked ~ .custom-control-label::before {
background-color: #e83e8c;
border-color: #ac145a;
}
.accent-pink .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-pink .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-pink .custom-file-input:focus ~ .custom-file-label,
.accent-pink .custom-select:focus,
.accent-pink .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #f6b0d0;
}
.accent-pink .page-item .page-link {
color: #e83e8c;
}
.accent-pink .page-item.active .page-link,
.accent-pink .page-item.active a {
background-color: #e83e8c;
border-color: #e83e8c;
color: #fff;
}
.accent-pink .page-item.disabled .page-link,
.accent-pink .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-pink [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-pink [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-pink [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-pink [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-pink .page-item .page-link:focus,
.dark-mode.accent-pink .page-item .page-link:hover {
color: #eb559a;
}
.accent-red .btn-link,
.accent-red a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #dc3545;
}
.accent-red .btn-link:hover,
.accent-red a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #a71d2a;
}
.accent-red .dropdown-item.active,
.accent-red .dropdown-item:active {
background-color: #dc3545;
color: #fff;
}
.accent-red .custom-control-input:checked ~ .custom-control-label::before {
background-color: #dc3545;
border-color: #921925;
}
.accent-red .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-red .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-red .custom-file-input:focus ~ .custom-file-label,
.accent-red .custom-select:focus,
.accent-red .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #efa2a9;
}
.accent-red .page-item .page-link {
color: #dc3545;
}
.accent-red .page-item.active .page-link,
.accent-red .page-item.active a {
background-color: #dc3545;
border-color: #dc3545;
color: #fff;
}
.accent-red .page-item.disabled .page-link,
.accent-red .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-red [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-red [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-red [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-red [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-red .page-item .page-link:focus,
.dark-mode.accent-red .page-item .page-link:hover {
color: #e04b59;
}
.accent-orange .btn-link,
.accent-orange a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #fd7e14;
}
.accent-orange .btn-link:hover,
.accent-orange a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #c35a02;
}
.accent-orange .dropdown-item.active,
.accent-orange .dropdown-item:active {
background-color: #fd7e14;
color: #1f2d3d;
}
.accent-orange .custom-control-input:checked ~ .custom-control-label::before {
background-color: #fd7e14;
border-color: #aa4e01;
}
.accent-orange .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%231f2d3d' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-orange .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-orange .custom-file-input:focus ~ .custom-file-label,
.accent-orange .custom-select:focus,
.accent-orange .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #fec392;
}
.accent-orange .page-item .page-link {
color: #fd7e14;
}
.accent-orange .page-item.active .page-link,
.accent-orange .page-item.active a {
background-color: #fd7e14;
border-color: #fd7e14;
color: #fff;
}
.accent-orange .page-item.disabled .page-link,
.accent-orange .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-orange [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-orange [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-orange [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-orange [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-orange .page-item .page-link:focus,
.dark-mode.accent-orange .page-item .page-link:hover {
color: #fd8c2d;
}
.accent-yellow .btn-link,
.accent-yellow a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #ffc107;
}
.accent-yellow .btn-link:hover,
.accent-yellow a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #ba8b00;
}
.accent-yellow .dropdown-item.active,
.accent-yellow .dropdown-item:active {
background-color: #ffc107;
color: #1f2d3d;
}
.accent-yellow .custom-control-input:checked ~ .custom-control-label::before {
background-color: #ffc107;
border-color: #a07800;
}
.accent-yellow .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%231f2d3d' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-yellow .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-yellow .custom-file-input:focus ~ .custom-file-label,
.accent-yellow .custom-select:focus,
.accent-yellow .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #ffe187;
}
.accent-yellow .page-item .page-link {
color: #ffc107;
}
.accent-yellow .page-item.active .page-link,
.accent-yellow .page-item.active a {
background-color: #ffc107;
border-color: #ffc107;
color: #fff;
}
.accent-yellow .page-item.disabled .page-link,
.accent-yellow .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-yellow [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-yellow [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-yellow [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-yellow [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-yellow .page-item .page-link:focus,
.dark-mode.accent-yellow .page-item .page-link:hover {
color: #ffc721;
}
.accent-green .btn-link,
.accent-green a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #28a745;
}
.accent-green .btn-link:hover,
.accent-green a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #19692c;
}
.accent-green .dropdown-item.active,
.accent-green .dropdown-item:active {
background-color: #28a745;
color: #fff;
}
.accent-green .custom-control-input:checked ~ .custom-control-label::before {
background-color: #28a745;
border-color: #145523;
}
.accent-green .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-green .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-green .custom-file-input:focus ~ .custom-file-label,
.accent-green .custom-select:focus,
.accent-green .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #71dd8a;
}
.accent-green .page-item .page-link {
color: #28a745;
}
.accent-green .page-item.active .page-link,
.accent-green .page-item.active a {
background-color: #28a745;
border-color: #28a745;
color: #fff;
}
.accent-green .page-item.disabled .page-link,
.accent-green .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-green [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-green [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-green [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-green [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-green .page-item .page-link:focus,
.dark-mode.accent-green .page-item .page-link:hover {
color: #2dbc4e;
}
.accent-teal .btn-link,
.accent-teal a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #20c997;
}
.accent-teal .btn-link:hover,
.accent-teal a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #158765;
}
.accent-teal .dropdown-item.active,
.accent-teal .dropdown-item:active {
background-color: #20c997;
color: #fff;
}
.accent-teal .custom-control-input:checked ~ .custom-control-label::before {
background-color: #20c997;
border-color: #127155;
}
.accent-teal .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-teal .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-teal .custom-file-input:focus ~ .custom-file-label,
.accent-teal .custom-select:focus,
.accent-teal .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #7eeaca;
}
.accent-teal .page-item .page-link {
color: #20c997;
}
.accent-teal .page-item.active .page-link,
.accent-teal .page-item.active a {
background-color: #20c997;
border-color: #20c997;
color: #fff;
}
.accent-teal .page-item.disabled .page-link,
.accent-teal .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-teal [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-teal [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-teal [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-teal [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-teal .page-item .page-link:focus,
.dark-mode.accent-teal .page-item .page-link:hover {
color: #26dca6;
}
.accent-cyan .btn-link,
.accent-cyan a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #17a2b8;
}
.accent-cyan .btn-link:hover,
.accent-cyan a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #0f6674;
}
.accent-cyan .dropdown-item.active,
.accent-cyan .dropdown-item:active {
background-color: #17a2b8;
color: #fff;
}
.accent-cyan .custom-control-input:checked ~ .custom-control-label::before {
background-color: #17a2b8;
border-color: #0c525d;
}
.accent-cyan .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-cyan .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-cyan .custom-file-input:focus ~ .custom-file-label,
.accent-cyan .custom-select:focus,
.accent-cyan .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #63d9ec;
}
.accent-cyan .page-item .page-link {
color: #17a2b8;
}
.accent-cyan .page-item.active .page-link,
.accent-cyan .page-item.active a {
background-color: #17a2b8;
border-color: #17a2b8;
color: #fff;
}
.accent-cyan .page-item.disabled .page-link,
.accent-cyan .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-cyan [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-cyan [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-cyan [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-cyan [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-cyan .page-item .page-link:focus,
.dark-mode.accent-cyan .page-item .page-link:hover {
color: #1ab6cf;
}
.accent-white .btn-link,
.accent-white a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #fff;
}
.accent-white .btn-link:hover,
.accent-white a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #d9d9d9;
}
.accent-white .dropdown-item.active,
.accent-white .dropdown-item:active {
background-color: #fff;
color: #1f2d3d;
}
.accent-white .custom-control-input:checked ~ .custom-control-label::before {
background-color: #fff;
border-color: #ccc;
}
.accent-white .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%231f2d3d' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-white .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-white .custom-file-input:focus ~ .custom-file-label,
.accent-white .custom-select:focus,
.accent-white .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #fff;
}
.accent-white .page-item .page-link {
color: #fff;
}
.accent-white .page-item.active .page-link,
.accent-white .page-item.active a {
background-color: #fff;
border-color: #fff;
color: #fff;
}
.accent-white .page-item.disabled .page-link,
.accent-white .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-white [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-white [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-white [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-white [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-white .page-item .page-link:focus,
.dark-mode.accent-white .page-item .page-link:hover {
color: #fff;
}
.accent-gray .btn-link,
.accent-gray a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: #6c757d;
}
.accent-gray .btn-link:hover,
.accent-gray a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #494f54;
}
.accent-gray .dropdown-item.active,
.accent-gray .dropdown-item:active {
background-color: #6c757d;
color: #fff;
}
.accent-gray .custom-control-input:checked ~ .custom-control-label::before {
background-color: #6c757d;
border-color: #3d4246;
}
.accent-gray .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-gray .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-gray .custom-file-input:focus ~ .custom-file-label,
.accent-gray .custom-select:focus,
.accent-gray .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #afb5ba;
}
.accent-gray .page-item .page-link {
color: #6c757d;
}
.accent-gray .page-item.active .page-link,
.accent-gray .page-item.active a {
background-color: #6c757d;
border-color: #6c757d;
color: #fff;
}
.accent-gray .page-item.disabled .page-link,
.accent-gray .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-gray [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-gray [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-gray [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-gray [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-gray .page-item .page-link:focus,
.dark-mode.accent-gray .page-item .page-link:hover {
color: #78828a;
}
.accent-gray-dark .btn-link,
.accent-gray-dark a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn) {
color: <?php echo $maincolor;?>;
}
.accent-gray-dark .btn-link:hover,
.accent-gray-dark a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):not(.page-link):not(.btn):hover {
color: #121416;
}
.accent-gray-dark .dropdown-item.active,
.accent-gray-dark .dropdown-item:active {
background-color: <?php echo $maincolor;?>;
color: #fff;
}
.accent-gray-dark .custom-control-input:checked ~ .custom-control-label::before {
background-color: <?php echo $maincolor;?>;
border-color: #060708;
}
.accent-gray-dark .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
.accent-gray-dark .custom-control-input:focus:not(:checked) ~ .custom-control-label::before,
.accent-gray-dark .custom-file-input:focus ~ .custom-file-label,
.accent-gray-dark .custom-select:focus,
.accent-gray-dark .form-control:focus:not(.is-invalid):not(.is-warning):not(.is-valid) {
border-color: #6d7a86;
}
.accent-gray-dark .page-item .page-link {
color: <?php echo $maincolor;?>;
}
.accent-gray-dark .page-item.active .page-link,
.accent-gray-dark .page-item.active a {
background-color: <?php echo $maincolor;?>;
border-color: <?php echo $maincolor;?>;
color: #fff;
}
.accent-gray-dark .page-item.disabled .page-link,
.accent-gray-dark .page-item.disabled a {
background-color: #fff;
border-color: #dee2e6;
color: #6c757d;
}
.accent-gray-dark [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: #c2c7d0;
}
.accent-gray-dark [class*="sidebar-dark-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #fff;
}
.accent-gray-dark [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link) {
color: <?php echo $maincolor;?>;
}
.accent-gray-dark [class*="sidebar-light-"] .sidebar a:not(.dropdown-item):not(.btn-app):not(.nav-link):not(.brand-link):hover {
color: #212529;
}
.dark-mode.accent-gray-dark .page-item .page-link:focus,
.dark-mode.accent-gray-dark .page-item .page-link:hover {
color: #3f474e;
}
[class*="accent-"] a.btn-primary {
color: #fff;
}
[class*="accent-"] a.btn-secondary {
color: #fff;
}
[class*="accent-"] a.btn-success {
color: #fff;
}
[class*="accent-"] a.btn-info {
color: #fff;
}
[class*="accent-"] a.btn-warning {
color: #1f2d3d;
}
[class*="accent-"] a.btn-danger {
color: #fff;
}
[class*="accent-"] a.btn-light {
color: #1f2d3d;
}
[class*="accent-"] a.btn-dark {
color: #fff;
}
.dark-mode .bg-light {
<?php
if (config("SETTINGS::CUSTOMTHEME:ENABLE-BG") == "true" && \Illuminate\Support\Facades\Storage::disk('public')->exists('background.png')){
?>
    background-image: url("<?php echo asset('storage/background.png');?>");
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
<?php } ?>
background-color: <?php echo $secondarycolor;?> !important;
color: #fff !important;
}
.dark-mode .link-black,
.dark-mode .link-dark,
.dark-mode .text-black,
.dark-mode .text-dark {
color: #ced4da;
}
/*# sourceMappingURL=adminlte.min.css.map */

/*
* Slim v4.19.0 - Image Cropping Made Easy
* Copyright (c) 2018 Rik Schennink - http://slimimagecropper.com
*/
.slim-file-hopper {
position: absolute;
left: 0;
top: 0;
right: 0;
bottom: 0;
}
.slim-image-editor {
position: relative;
height: 100%;
text-align: left;
z-index: 1;
}
.slim-image-editor .slim-container {
position: relative;
height: calc(100% - 8em);
width: 100%;
z-index: 2;
direction: ltr;
}
.slim-image-editor .slim-editor-btn-group,
.slim-image-editor .slim-editor-utils-group {
flex-shrink: 0;
}
.slim-image-editor .slim-stage {
position: absolute;
line-height: 0;
}
.slim-image-editor .slim-wrapper {
position: absolute;
z-index: 2;
}
.slim-image-editor .slim-crop-preview {
position: absolute;
left: 0;
top: 0;
right: 0;
bottom: 0;
line-height: 0;
}
.slim-image-editor .slim-stage {
z-index: 4;
}
.slim-image-editor .slim-crop-preview {
z-index: 3;
border-radius: 4px;
}
.slim-image-editor .slim-crop-preview:after,
.slim-image-editor .slim-crop-preview canvas,
.slim-image-editor .slim-crop-preview img {
position: absolute;
display: block;
border-radius: inherit;
left: 0;
top: 0;
}
.slim-image-editor .slim-crop-preview .slim-crop {
z-index: 3;
}
.slim-image-editor .slim-crop-preview:after {
z-index: 2;
right: 0;
bottom: 0;
content: "";
}
.slim-image-editor .slim-crop-preview .slim-crop-blur {
-moz-filter: contrast(0.7);
filter: contrast(0.7);
z-index: 1;
}
.slim-image-editor .slim-editor-utils-group {
text-align: center;
}
.slim-image-editor .slim-editor-utils-group button {
width: 2.5em;
height: 2.5em;
padding: 0;
font-size: 1em;
cursor: pointer;
outline: none;
box-shadow: inset 0 -1px 2px rgba(0, 0, 0, 0.1), inset 0 1px 0 0 hsla(0, 0%, 100%, 0.15);
background-color: transparent;
background-size: 50% 50%;
background-position: 50%;
background-repeat: no-repeat;
}
.slim-image-editor .slim-editor-utils-group button:active {
background-color: rgba(0, 0, 0, 0.1);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15);
}
.slim-image-editor .slim-editor-btn-group {
text-align: center;
}
.slim-image-editor .slim-editor-btn-group button {
position: relative;
display: inline-block;
vertical-align: top;
font-size: 1em;
margin: 0 0.75em;
padding: 0.75em 1.5em 0.875em;
cursor: pointer;
overflow: hidden;
transition: color 0.25s, box-shadow 0.25s, background-color 0.25s;
box-shadow: inset 0 -1px 2px rgba(0, 0, 0, 0.1), inset 0 1px 0 0 hsla(0, 0%, 100%, 0.15);
background-color: transparent;
outline: none;
}
.slim-image-editor .slim-editor-btn-group button:active {
padding: 0.875em 1.5em 0.75em;
background-color: rgba(0, 0, 0, 0.1);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15);
}
.slim-rotation-disabled .slim-container {
height: calc(100% - 4em);
}
.slim-rotation-disabled .slim-editor-utils-group {
display: none;
}
.slim-editor-btn,
.slim-editor-utils-btn {
color: hsla(0, 0%, 100%, 0.75);
border: 2px solid rgba(0, 0, 0, 0.25);
}
.slim-editor-btn:focus,
.slim-editor-btn:hover,
.slim-editor-utils-btn:focus,
.slim-editor-utils-btn:hover {
color: hsla(0, 0%, 100%, 0.9);
}
.slim-editor-utils-btn {
border-radius: 0.6875em;
}
.slim-editor-btn {
border-radius: 0.5em;
}
.slim-image-editor-preview:after {
background-color: rgba(244, 250, 255, 0.4);
box-shadow: inset 0 0 0 1px hsla(0, 0%, 100%, 0.07), 0 1px 5px rgba(0, 0, 0, 0.3);
}
.slim-btn-rotate {
background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='252' height='287' viewBox='0 0 252 287' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M134.762.626v36.15c65.016 4.594 116.34 58.75 116.34 124.936 0 69.198-56.09 125.288-125.29 125.288C56.616 287 .525 230.91.525 161.71c0-30.036 10.592-57.59 28.215-79.17l31.934 31.934C51.03 127.75 45.27 144.04 45.27 161.71c0 44.485 36.06 80.544 80.544 80.544 44.484 0 80.544-36.058 80.544-80.543 0-41.454-31.327-75.56-71.594-80.017v35.272l-62.646-57.89L134.762.625zm-8.95 196.883c-19.77 0-35.796-16.028-35.796-35.798 0-19.77 16.027-35.796 35.797-35.796 19.77 0 35.797 16.026 35.797 35.796s-16.027 35.797-35.797 35.797z' fill='rgba(255,255,255,.8)' fill-rule='evenodd'/%3E%3C/svg%3E");
}
.slim-editor-btn-group,
.slim-editor-utils-group {
padding: 1em 0 0;
}
@media (min-width: 40em) {
.slim-btn-group {
padding-top: 2em;
}
}
.slim-crop-area {
position: absolute;
box-shadow: inset 0 0 0 1px hsla(0, 0%, 100%, 0.75), 0 0 0 1px hsla(0, 0%, 100%, 0.75);
}
.slim-crop-area .grid {
overflow: hidden;
}
.slim-crop-area .grid:after,
.slim-crop-area .grid:before {
position: absolute;
z-index: 2;
content: "";
opacity: 0;
transition: opacity 0.5s;
}
.slim-crop-area .grid:before {
top: 33.333%;
bottom: 33.333%;
left: 1px;
right: 1px;
box-shadow: inset 0 -1px 0 0 hsla(0, 0%, 100%, 0.35), inset 0 1px 0 0 hsla(0, 0%, 100%, 0.35);
}
.slim-crop-area .grid:after {
top: 1px;
bottom: 1px;
left: 33.333%;
right: 33.333%;
box-shadow: inset -1px 0 0 0 hsla(0, 0%, 100%, 0.35), inset 1px 0 0 0 hsla(0, 0%, 100%, 0.35);
}
.slim-crop-area button {
position: absolute;
background: #fafafa;
box-shadow: inset 0 1px 0 0 #fff, 0 1px 1px rgba(0, 0, 0, 0.15);
border: none;
padding: 0;
margin: 0;
width: 16px;
height: 16px;
margin-top: -8px;
margin-left: -8px;
border-radius: 8px;
z-index: 3;
}
.slim-crop-area [class*="n"] {
top: 0;
}
.slim-crop-area [class*="s"] {
top: 100%;
}
.slim-crop-area [class*="w"] {
left: 0;
}
.slim-crop-area [class*="e"] {
left: 100%;
}
.slim-crop-area .e,
.slim-crop-area .w {
top: 50%;
cursor: ew-resize;
height: 30px;
margin-top: -15px;
}
.slim-crop-area .n,
.slim-crop-area .s {
left: 50%;
cursor: ns-resize;
width: 30px;
margin-left: -15px;
}
.slim-crop-area .ne,
.slim-crop-area .sw {
cursor: nesw-resize;
}
.slim-crop-area .nw,
.slim-crop-area .se {
cursor: nwse-resize;
}
.slim-crop-area .c {
top: 10px;
left: 10px;
width: calc(100% - 20px);
height: calc(100% - 20px);
margin: 0;
border-radius: 0;
border: none;
z-index: 2;
box-shadow: none;
opacity: 0;
cursor: move;
}
.slim-crop-area button:not(.c):after {
content: "";
position: absolute;
left: -12px;
right: -12px;
top: -12px;
bottom: -12px;
}
.slim-crop-area .slim-crop-mask {
position: absolute;
left: 0;
top: 0;
right: 0;
bottom: 0;
overflow: hidden;
z-index: 1;
}
.slim-crop-area .slim-crop-mask img {
position: absolute;
transform-origin: 0 0;
transform: translateZ(0);
margin: 0 !important;
width: auto;
height: auto;
max-width: none;
min-width: 0;
}
.slim-crop-area[data-dragging="true"] .grid:after,
.slim-crop-area[data-dragging="true"] .grid:before {
opacity: 1;
}
.slim-popover {
touch-action: none;
position: fixed;
left: 0;
top: 0;
width: 100%;
height: 100%;
padding: 1em;
font-size: 16px;
background: rgba(25, 27, 29, 0.99);
z-index: 2147483647;
overflow: hidden;
}
.slim-popover[data-state="off"] {
left: -100%;
}
.slim-popover:after {
position: absolute;
left: 0;
top: 0;
right: 0;
bottom: 0;
content: "";
background: radial-gradient(ellipse at center, hsla(0, 0%, 100%, 0.15) 0, hsla(0, 0%, 100%, 0) 80%);
}
@media (min-width: 40em) {
.slim-popover {
padding: 2em;
}
}
.slim,
.slim-crop-area,
.slim-image-editor,
.slim-popover {
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
box-sizing: border-box;
}
.slim-crop-area button,
.slim-image-editor button,
.slim-popover button,
.slim button {
-webkit-highlight: none;
-webkit-tap-highlight-color: transparent;
}
.slim *,
.slim-crop-area *,
.slim-image-editor *,
.slim-popover * {
box-sizing: inherit;
}
.slim-crop-area img,
.slim-image-editor img,
.slim-popover img,
.slim img {
background-color: #eee;
background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAABG2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+Gkqr6gAAAYBpQ0NQc1JHQiBJRUM2MTk2Ni0yLjEAACiRdZHPK0RRFMc/M4gYERaKxUvDamhQExtlJqEmTWOUwWbmzS81P17vzaTJVtlOUWLj14K/gK2yVopISdlZExv0nGfUSObc7rmf+73nnO49F+yhtJoxat2Qyeb14KRXmQ8vKPWP2OjCQRtKRDW08UDAT1V7u5Fosat+q1b1uH+tKRY3VLA1CI+pmp4XnhL2r+Q1izeFO9RUJCZ8LOzS5YLC15YeLfOTxckyf1ish4I+sLcKK8lfHP3FakrPCMvLcWbSBfXnPtZLHPHs3KysPTK7MQgyiReFaSbw4WGQUfEe+hliQHZUyXd/58+Qk1xVvEYRnWWSpMjjErUg1eOyJkSPy0hTtPr/t69GYnioXN3hhboH03zphfoN+CyZ5vu+aX4eQM09nGUr+bk9GHkVvVTRnLvQsgYn5xUtugWn69B5p0X0yLdUI9OeSMDzETSHof0SGhfLPfs55/AWQqvyVRewvQN9Et+y9AUyt2fOEwKMEgAAAAlwSFlzAAALEwAACxMBAJqcGAAAAC9JREFUOI1jZGBgkGIgDjwjRhETkYYRDUYNHDVwMBjISIJaonLU4PfyqIGjBpIBAPvwAUFW9TOIAAAAAElFTkSuQmCC");
}
.slim img {
width: 100%;
height: auto;
}
span.slim {
display: block;
}
.slim {
position: relative;
font-size: inherit;
background-color: #eee;
transition: background-color 0.25s;
padding-bottom: 0.025px;
}
@-webkit-keyframes rotate {
0% {
transform: rotate(0deg);
}
to {
transform: rotate(1turn);
}
}
@keyframes rotate {
0% {
transform: rotate(0deg);
}
to {
transform: rotate(1turn);
}
}
.slim[data-state*="file-over"] .slim-btn {
pointer-events: none;
}
.slim[data-state*="empty"]:hover {
background-color: #ddd;
}
.slim[data-state*="empty"] .slim-label {
visibility: visible;
opacity: 1;
}
.slim[data-state*="busy"] .slim-label {
opacity: 0;
}
.slim[data-state*="loading"] .slim-label {
display: none;
}
.slim[data-state*="loading"] .slim-label-loading {
opacity: 1;
display: block;
}
.slim[data-state*="preview"] .slim-label {
visibility: hidden;
}
.slim[data-state*="error"] {
background-color: #e8a69f !important;
color: #702010;
}
.slim > img,
.slim > input[type="file"] {
display: block !important;
opacity: 0 !important;
width: 0 !important;
height: 0 !important;
padding: 0 !important;
margin-left: 0 !important;
margin-right: 0 !important;
margin-top: 0 !important;
border: 0 !important;
}
.slim > img + input[type="file"],
.slim > input[type="file"] + img {
margin-bottom: 0 !important;
}
.slim > input[type="hidden"] {
position: absolute;
width: 1px;
height: 1px;
margin: -1px;
opacity: 0;
}
.slim .slim-label-loading {
display: none;
}
.slim .slim-label {
visibility: hidden;
transition: opacity 0.25s;
}
.slim .slim-error,
.slim .slim-label,
.slim .slim-label-loading {
max-width: 100%;
}
.slim .slim-file-hopper {
z-index: 3;
background: rgba(0, 0, 0, 0.0001);
}
.slim .slim-area,
.slim .slim-drip,
.slim .slim-ratio,
.slim .slim-result,
.slim .slim-status {
border-radius: inherit;
}
.slim .slim-area {
width: 100%;
color: inherit;
overflow: hidden;
}
.slim .slim-area :only-of-type {
margin: 0;
}
.slim .slim-area .slim-loader {
pointer-events: none;
position: absolute;
right: 0.875em;
top: 0.875em;
width: 23px;
height: 23px;
z-index: 1;
}
.slim .slim-area .slim-loader svg {
display: block;
width: 100%;
height: 100%;
opacity: 0;
}
.slim .slim-area .slim-upload-status {
position: absolute;
right: 1em;
top: 1em;
z-index: 1;
opacity: 0;
transition: opacity 0.25s;
white-space: nowrap;
line-height: 1.65;
font-weight: 400;
}
.slim .slim-area .slim-upload-status-icon {
display: inline-block;
opacity: 0.9;
}
.slim .slim-area .slim-drip,
.slim .slim-area .slim-result,
.slim .slim-area .slim-status {
left: 0;
top: 0;
right: 0;
bottom: 0;
}
.slim .slim-area .slim-drip,
.slim .slim-area .slim-result {
position: absolute;
}
.slim .slim-area .slim-status {
padding: 3em 1.5em;
display: flex;
align-items: center;
justify-content: center;
text-align: center;
flex-direction: column;
pointer-events: none;
}
.slim .slim-area .slim-drip {
z-index: 1;
overflow: hidden;
}
.slim .slim-area .slim-drip > span {
position: absolute;
left: 0;
top: 0;
opacity: 0;
margin-left: -25%;
margin-top: -25%;
width: 50%;
padding-bottom: 50%;
}
.slim .slim-area .slim-drip > span > span {
position: absolute;
width: 100%;
height: 100%;
background-color: rgba(0, 0, 0, 0.25);
border-radius: 50%;
opacity: 0.5;
left: 0;
top: 0;
}
.slim .slim-area .slim-result {
overflow: hidden;
-webkit-perspective: 1px;
}
.slim .slim-area .slim-result img {
display: block;
width: 100%;
position: absolute;
left: 0;
top: 0;
}
.slim .slim-area .slim-result img:not([src]),
.slim .slim-area .slim-result img[src=""] {
visibility: hidden;
}
.slim .slim-btn-group {
position: absolute;
right: 0;
bottom: 0;
left: 0;
z-index: 3;
overflow: hidden;
pointer-events: none;
}
.slim .slim-btn-group button {
pointer-events: all;
cursor: pointer;
}
.slim[data-ratio*=":"] {
min-height: 0;
}
.slim[data-ratio*=":"] .slim-status {
position: absolute;
padding: 0 1.5em;
}
.slim[data-ratio="16:10"] > img,
.slim[data-ratio="16:10"] > input[type="file"] {
margin-bottom: 62.5%;
}
.slim[data-ratio="10:16"] > img,
.slim[data-ratio="10:16"] > input[type="file"] {
margin-bottom: 160%;
}
.slim[data-ratio="16:9"] > img,
.slim[data-ratio="16:9"] > input[type="file"] {
margin-bottom: 56.25%;
}
.slim[data-ratio="9:16"] > img,
.slim[data-ratio="9:16"] > input[type="file"] {
margin-bottom: 177.77778%;
}
.slim[data-ratio="5:3"] > img,
.slim[data-ratio="5:3"] > input[type="file"] {
margin-bottom: 60%;
}
.slim[data-ratio="3:5"] > img,
.slim[data-ratio="3:5"] > input[type="file"] {
margin-bottom: 166.66667%;
}
.slim[data-ratio="5:4"] > img,
.slim[data-ratio="5:4"] > input[type="file"] {
margin-bottom: 80%;
}
.slim[data-ratio="4:5"] > img,
.slim[data-ratio="4:5"] > input[type="file"] {
margin-bottom: 125%;
}
.slim[data-ratio="4:3"] > img,
.slim[data-ratio="4:3"] > input[type="file"] {
margin-bottom: 75%;
}
.slim[data-ratio="3:4"] > img,
.slim[data-ratio="3:4"] > input[type="file"] {
margin-bottom: 133.33333%;
}
.slim[data-ratio="3:2"] > img,
.slim[data-ratio="3:2"] > input[type="file"] {
margin-bottom: 66.66667%;
}
.slim[data-ratio="2:3"] > img,
.slim[data-ratio="2:3"] > input[type="file"] {
margin-bottom: 150%;
}
.slim[data-ratio="1:1"] > img,
.slim[data-ratio="1:1"] > input[type="file"] {
margin-bottom: 100%;
}
.slim-btn-group {
padding: 1.5em 0;
text-align: center;
}
.slim-btn {
position: relative;
padding: 0;
margin: 0 7.2px;
font-size: 0;
outline: none;
width: 36px;
height: 36px;
border: none;
color: #fff;
background-color: rgba(0, 0, 0, 0.7);
background-repeat: no-repeat;
background-size: 50% 50%;
background-position: 50%;
border-radius: 50%;
}
.slim-btn:before {
border-radius: inherit;
position: absolute;
box-sizing: border-box;
left: -3px;
right: -3px;
bottom: -3px;
top: -3px;
border: 3px solid #fff;
content: "";
transform: scale(0.95);
opacity: 0;
transition: all 0.25s;
z-index: -1;
pointer-events: none;
}
.slim-btn:focus:before,
.slim-btn:hover:before {
opacity: 1;
transform: scale(1);
}
.slim-btn * {
pointer-events: none;
}
.slim-btn-remove {
background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 269 269' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd' stroke-linejoin='round' stroke-miterlimit='1.414'%3E%3Cpath d='M63.12 250.254s3.998 18.222 24.582 18.222h93.072c20.583 0 24.582-18.222 24.582-18.222l18.374-178.66H44.746l18.373 178.66zM170.034 98.442a8.95 8.95 0 0 1 17.9 0l-8.95 134.238a8.95 8.95 0 0 1-17.9 0l8.95-134.238zm-44.746 0a8.949 8.949 0 1 1 17.898 0V232.68a8.95 8.95 0 1 1-17.9 0V98.442zm-35.798-8.95a8.95 8.95 0 0 1 8.95 8.95l8.95 134.237c0 4.942-4.008 8.948-8.95 8.948a8.95 8.95 0 0 1-8.95-8.95L80.54 98.441a8.95 8.95 0 0 1 8.95-8.95zm128.868-53.68h-39.376V17.898c0-13.578-4.39-17.9-17.898-17.9H107.39C95 0 89.492 6 89.492 17.9v17.91H50.116c-7.914 0-14.32 6.007-14.32 13.43 0 7.424 6.406 13.43 14.32 13.43H218.36c7.914 0 14.32-6.006 14.32-13.43 0-7.423-6.406-13.43-14.32-13.43zm-57.274 0H107.39l.002-17.914h53.695V35.81z' fill='%23fff'/%3E%3C/svg%3E");
}
.slim-btn-download {
background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 269 269' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd' stroke-linejoin='round' stroke-miterlimit='1.414'%3E%3Cpath d='M232.943 223.73H35.533c-12.21 0-22.11 10.017-22.11 22.373 0 12.356 9.9 22.373 22.11 22.373h197.41c12.21 0 22.11-10.017 22.11-22.373 0-12.356-9.9-22.373-22.11-22.373zM117.88 199.136c4.035 4.04 9.216 6.147 14.492 6.508.626.053 1.227.188 1.866.188.633 0 1.228-.135 1.847-.186 5.284-.357 10.473-2.464 14.512-6.51l70.763-70.967c8.86-8.876 8.86-23.268 0-32.143-8.86-8.876-23.225-8.876-32.086 0l-32.662 32.756V22.373C156.612 10.017 146.596 0 134.238 0c-12.356 0-22.372 10.017-22.372 22.373v106.41L79.204 96.027c-8.86-8.876-23.226-8.876-32.086 0-8.86 8.875-8.86 23.267 0 32.142l70.763 70.966z' fill='%23fff'/%3E%3C/svg%3E");
}
.slim-btn-upload {
background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='243' height='269' viewBox='0 0 243 269' xmlns='http://www.w3.org/2000/svg'%3E%3Ctitle%3EDownload%3C/title%3E%3Cpath d='M219.943 223.73H22.533c-12.21 0-22.11 10.017-22.11 22.373 0 12.356 9.9 22.373 22.11 22.373h197.41c12.21 0 22.11-10.017 22.11-22.373 0-12.356-9.9-22.373-22.11-22.373zM104.88 6.696c4.035-4.04 9.216-6.147 14.492-6.508C119.998.135 120.6 0 121.238 0c.633 0 1.228.135 1.847.186 5.284.357 10.473 2.464 14.512 6.51l70.763 70.967c8.86 8.875 8.86 23.267 0 32.142-8.86 8.876-23.225 8.876-32.086 0L143.612 77.05v106.41c0 12.355-10.016 22.372-22.374 22.372-12.356 0-22.372-10.017-22.372-22.373V77.05l-32.662 32.755c-8.86 8.876-23.226 8.876-32.086 0-8.86-8.875-8.86-23.267 0-32.142L104.88 6.696z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}
.slim-btn-edit {
background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 269 269' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd' stroke-linejoin='round' stroke-miterlimit='1.414'%3E%3Cpath d='M161.36 56.337c-7.042-7.05-18.46-7.05-25.5 0l-6.373 6.38-89.243 89.338.023.023-2.812 2.82s-8.968 9.032-29.216 74.4c-.143.456-.284.91-.427 1.373-.36 1.172-.726 2.362-1.094 3.568a785.126 785.126 0 0 0-.988 3.25c-.28.922-.556 1.835-.84 2.778-.64 2.14-1.29 4.318-1.954 6.567-1.455 4.937-5.01 16.07-.99 20.1 3.87 3.882 15.12.467 20.043-.993a1275.615 1275.615 0 0 0 9.41-2.83c1.032-.314 2.058-.626 3.063-.935 1.27-.39 2.52-.775 3.75-1.157l1.09-.34c62.193-19.365 73.358-28.453 74.286-29.284l.01-.01.067-.06 2.88-2.886.192.193 89.244-89.336 6.373-6.382c7.04-7.048 7.04-18.476 0-25.525l-50.998-51.05zM103.4 219.782c-.08.053-.185.122-.297.193l-.21.133c-.076.047-.158.098-.245.15l-.243.148c-2.97 1.777-11.682 6.362-32.828 14.017-2.47.894-5.162 1.842-7.98 2.82l-30.06-30.092c.98-2.84 1.928-5.55 2.825-8.04 7.638-21.235 12.22-29.974 13.986-32.94l.12-.2c.063-.1.12-.196.175-.283l.126-.2c.07-.11.14-.217.192-.296l2.2-2.205 54.485 54.542-2.248 2.255zM263.35 56.337l-50.996-51.05c-7.04-7.048-18.456-7.048-25.498 0L174.108 18.05c-7.04 7.048-7.04 18.476 0 25.524l50.996 51.05c7.04 7.048 18.457 7.048 25.498 0l12.75-12.762c7.04-7.05 7.04-18.477 0-25.525z' fill='%23fff'/%3E%3C/svg%3E");
}
.slim-loader-background {
stroke: rgba(0, 0, 0, 0.15);
}
.slim-loader-foreground {
stroke: rgba(0, 0, 0, 0.65);
}
.slim[data-state*="preview"] .slim-loader-background {
stroke: hsla(0, 0%, 100%, 0.25);
}
.slim[data-state*="preview"] .slim-loader-foreground {
stroke: #fff;
}
.slim-upload-status {
padding: 0 0.5em;
border-radius: 0.3125em;
font-size: 0.75em;
box-shadow: 0 0.125em 0.25em rgba(0, 0, 0, 0.25);
}
.slim-upload-status[data-state="success"] {
background-color: #d1ed8f;
color: #323e15;
}
.slim-upload-status[data-state="success"] .slim-upload-status-icon {
width: 0.5em;
height: 0.75em;
transform: rotate(45deg);
border: 0.1875em solid currentColor;
border-left: none;
border-top: none;
margin-right: 0.325em;
margin-left: 0.25em;
margin-bottom: 0.0625em;
}
.slim-upload-status[data-state="error"] {
background: #efd472;
color: #574016;
}
.slim-upload-status[data-state="error"] .slim-upload-status-icon {
margin-left: -0.125em;
margin-right: 0.5em;
width: 0.5625em;
height: 1em;
position: relative;
transform: rotate(45deg);
}
.slim-upload-status[data-state="error"] .slim-upload-status-icon:after,
.slim-upload-status[data-state="error"] .slim-upload-status-icon:before {
content: "";
position: absolute;
box-sizing: content-box;
width: 0;
height: 0;
border: 0.09em solid currentColor;
background-color: currentColor;
transform: translate(-50%, -50%) translate(0.5em, 0.5em);
}
.slim-upload-status[data-state="error"] .slim-upload-status-icon:before {
width: 0.66666666667em;
}
.slim-upload-status[data-state="error"] .slim-upload-status-icon:after {
height: 0.66666666667em;
}

</style>
