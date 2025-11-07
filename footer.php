<?php

/**
 * Template part: Stylish Custom Footer
 */
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<style>
  *, ::before, ::after {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}

::backdrop {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}

/*
! tailwindcss v3.4.18 | MIT License | https://tailwindcss.com
*/

/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: #e5e7eb;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/

html,
:host {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */
  font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 4 */
  font-feature-settings: normal;
  /* 5 */
  font-variation-settings: normal;
  /* 6 */
  -webkit-tap-highlight-color: transparent;
  /* 7 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  /* 1 */
  font-feature-settings: normal;
  /* 2 */
  font-variation-settings: normal;
  /* 3 */
  font-size: 1em;
  /* 4 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-feature-settings: inherit;
  /* 1 */
  font-variation-settings: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  font-weight: inherit;
  /* 1 */
  line-height: inherit;
  /* 1 */
  letter-spacing: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
input:where([type='button']),
input:where([type='reset']),
input:where([type='submit']) {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Reset default styling for dialogs.
*/

dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */

[hidden]:where(:not([hidden="until-found"])) {
  display: none;
}

.visible {
  visibility: visible;
}

.static {
  position: static;
}

.fixed {
  position: fixed;
}

.absolute {
  position: absolute;
}

.relative {
  position: relative;
}

.-top-8 {
  top: -2rem;
}

.left-6 {
  left: 1.5rem;
}

.right-0 {
  right: 0px;
}

.top-0 {
  top: 0px;
}

.z-10 {
  z-index: 10;
}

.z-50 {
  z-index: 50;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.mb-10 {
  margin-bottom: 2.5rem;
}

.mb-12 {
  margin-bottom: 3rem;
}

.mb-16 {
  margin-bottom: 4rem;
}

.mb-2 {
  margin-bottom: 0.5rem;
}

.mb-3 {
  margin-bottom: 0.75rem;
}

.mb-4 {
  margin-bottom: 1rem;
}

.mb-6 {
  margin-bottom: 1.5rem;
}

.mb-8 {
  margin-bottom: 2rem;
}

.mt-1 {
  margin-top: 0.25rem;
}

.mt-10 {
  margin-top: 2.5rem;
}

.mt-12 {
  margin-top: 3rem;
}

.mt-2 {
  margin-top: 0.5rem;
}

.mt-4 {
  margin-top: 1rem;
}

.mt-6 {
  margin-top: 1.5rem;
}

.mt-8 {
  margin-top: 2rem;
}

.block {
  display: block;
}

.inline-block {
  display: inline-block;
}

.flex {
  display: flex;
}

.table {
  display: table;
}

.grid {
  display: grid;
}

.hidden {
  display: none;
}

.h-10 {
  height: 2.5rem;
}

.h-12 {
  height: 3rem;
}

.h-14 {
  height: 3.5rem;
}

.h-16 {
  height: 4rem;
}

.h-4 {
  height: 1rem;
}

.h-8 {
  height: 2rem;
}

.h-\[350px\] {
  height: 350px;
}

.h-auto {
  height: auto;
}

.h-full {
  height: 100%;
}

.min-h-\[72px\] {
  min-height: 72px;
}

.w-1\/4 {
  width: 25%;
}

.w-10 {
  width: 2.5rem;
}

.w-12 {
  width: 3rem;
}

.w-16 {
  width: 4rem;
}

.w-3\/4 {
  width: 75%;
}

.w-4 {
  width: 1rem;
}

.w-8 {
  width: 2rem;
}

.w-\[15\%\] {
  width: 15%;
}

.w-\[60\%\] {
  width: 60%;
}

.w-full {
  width: 100%;
}

.min-w-\[220px\] {
  min-width: 220px;
}

.min-w-full {
  min-width: 100%;
}

.max-w-2xl {
  max-width: 42rem;
}

.max-w-\[280px\] {
  max-width: 280px;
}

.max-w-\[80\%\] {
  max-width: 80%;
}

.max-w-full {
  max-width: 100%;
}

.flex-shrink-0 {
  flex-shrink: 0;
}

.rotate-180 {
  --tw-rotate: 180deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.cursor-pointer {
  cursor: pointer;
}

.list-inside {
  list-style-position: inside;
}

.list-disc {
  list-style-type: disc;
}

.grid-cols-1 {
  grid-template-columns: repeat(1, minmax(0, 1fr));
}

.flex-col {
  flex-direction: column;
}

.items-start {
  align-items: flex-start;
}

.items-center {
  align-items: center;
}

.justify-start {
  justify-content: flex-start;
}

.justify-end {
  justify-content: flex-end;
}

.justify-center {
  justify-content: center;
}

.justify-between {
  justify-content: space-between;
}

.justify-items-center {
  justify-items: center;
}

.gap-10 {
  gap: 2.5rem;
}

.gap-16 {
  gap: 4rem;
}

.gap-2 {
  gap: 0.5rem;
}

.gap-20 {
  gap: 5rem;
}

.gap-3 {
  gap: 0.75rem;
}

.gap-4 {
  gap: 1rem;
}

.gap-6 {
  gap: 1.5rem;
}

.gap-8 {
  gap: 2rem;
}

.space-x-14 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(3.5rem * var(--tw-space-x-reverse));
  margin-left: calc(3.5rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-2 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(0.5rem * var(--tw-space-x-reverse));
  margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-4 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(1rem * var(--tw-space-x-reverse));
  margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-6 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(1.5rem * var(--tw-space-x-reverse));
  margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-y-2 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
}

.space-y-4 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(1rem * var(--tw-space-y-reverse));
}

.space-y-6 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
}

.space-x-8 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(2rem * var(--tw-space-x-reverse));
  margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
}

.divide-y > :not([hidden]) ~ :not([hidden]) {
  --tw-divide-y-reverse: 0;
  border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
  border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
}

.divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
  --tw-divide-opacity: 1;
  border-color: rgb(55 65 81 / var(--tw-divide-opacity, 1));
}

.overflow-hidden {
  overflow: hidden;
}

.overflow-x-auto {
  overflow-x: auto;
}

.rounded-2xl {
  border-radius: 1rem;
}

.rounded-3xl {
  border-radius: 1.5rem;
}

.rounded-full {
  border-radius: 9999px;
}

.rounded-lg {
  border-radius: 0.5rem;
}

.rounded-xl {
  border-radius: 0.75rem;
}

.border {
  border-width: 1px;
}

.border-t {
  border-top-width: 1px;
}

.border-\[\#f5ede0\] {
  --tw-border-opacity: 1;
  border-color: rgb(245 237 224 / var(--tw-border-opacity, 1));
}

.border-gray-700 {
  --tw-border-opacity: 1;
  border-color: rgb(55 65 81 / var(--tw-border-opacity, 1));
}

.border-gray-800 {
  --tw-border-opacity: 1;
  border-color: rgb(31 41 55 / var(--tw-border-opacity, 1));
}

.bg-\[\#0B0D16\] {
  --tw-bg-opacity: 1;
  background-color: rgb(11 13 22 / var(--tw-bg-opacity, 1));
}

.bg-\[\#0d0d15\] {
  --tw-bg-opacity: 1;
  background-color: rgb(13 13 21 / var(--tw-bg-opacity, 1));
}

.bg-\[\#1a1a2e\] {
  --tw-bg-opacity: 1;
  background-color: rgb(26 26 46 / var(--tw-bg-opacity, 1));
}

.bg-\[\#252542\] {
  --tw-bg-opacity: 1;
  background-color: rgb(37 37 66 / var(--tw-bg-opacity, 1));
}

.bg-\[\#A0A3BA33\] {
  background-color: #A0A3BA33;
}

.bg-\[\#A0A3BA80\] {
  background-color: #A0A3BA80;
}

.bg-\[\#A89469\] {
  --tw-bg-opacity: 1;
  background-color: rgb(168 148 105 / var(--tw-bg-opacity, 1));
}

.bg-\[\#E6E7F01A\] {
  background-color: #E6E7F01A;
}

.bg-\[\#FFF4E433\] {
  background-color: #FFF4E433;
}

.bg-\[\#FFF4E4\] {
  --tw-bg-opacity: 1;
  background-color: rgb(255 244 228 / var(--tw-bg-opacity, 1));
}

.bg-\[\#b49a6c\] {
  --tw-bg-opacity: 1;
  background-color: rgb(180 154 108 / var(--tw-bg-opacity, 1));
}

.bg-\[\#f5ede0\] {
  --tw-bg-opacity: 1;
  background-color: rgb(245 237 224 / var(--tw-bg-opacity, 1));
}

.bg-\[\#fdf4e3\] {
  --tw-bg-opacity: 1;
  background-color: rgb(253 244 227 / var(--tw-bg-opacity, 1));
}

.bg-black {
  --tw-bg-opacity: 1;
  background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1));
}

.bg-indigo-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(99 102 241 / var(--tw-bg-opacity, 1));
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1));
}

.bg-white\/20 {
  background-color: rgb(255 255 255 / 0.2);
}

.bg-\[linear-gradient\(68deg\2c \#04061C_-29\.7\%\2c \#1E2F68_60\.3\%\2c \#D9B464_105\.88\%\)\] {
  background-image: linear-gradient(68deg,#04061C -29.7%,#1E2F68 60.3%,#D9B464 105.88%);
}

.bg-gradient-to-tr {
  background-image: linear-gradient(to top right, var(--tw-gradient-stops));
}

.from-\[\#04061C\] {
  --tw-gradient-from: #04061C var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(4 6 28 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.via-\[\#1E2F68\] {
  --tw-gradient-to: rgb(30 47 104 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), #1E2F68 var(--tw-gradient-via-position), var(--tw-gradient-to);
}

.to-\[\#D9B464\] {
  --tw-gradient-to: #D9B464 var(--tw-gradient-to-position);
}

.bg-cover {
  background-size: cover;
}

.bg-center {
  background-position: center;
}

.bg-no-repeat {
  background-repeat: no-repeat;
}

.object-contain {
  -o-object-fit: contain;
     object-fit: contain;
}

.object-cover {
  -o-object-fit: cover;
     object-fit: cover;
}

.p-1 {
  padding: 0.25rem;
}

.p-6 {
  padding: 1.5rem;
}

.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}

.px-6 {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}

.py-12 {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.py-16 {
  padding-top: 4rem;
  padding-bottom: 4rem;
}

.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.py-20 {
  padding-top: 5rem;
  padding-bottom: 5rem;
}

.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.py-4 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}

.py-5 {
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
}

.py-6 {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

.py-8 {
  padding-top: 2rem;
  padding-bottom: 2rem;
}

.pl-4 {
  padding-left: 1rem;
}

.pt-6 {
  padding-top: 1.5rem;
}

.text-left {
  text-align: left;
}

.text-center {
  text-align: center;
}

.text-start {
  text-align: start;
}

.text-2xl {
  font-size: 1.5rem;
  line-height: 2rem;
}

.text-3xl {
  font-size: 1.875rem;
  line-height: 2.25rem;
}

.text-\[26px\] {
  font-size: 26px;
}

.text-base {
  font-size: 1rem;
  line-height: 1.5rem;
}

.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.text-xl {
  font-size: 1.25rem;
  line-height: 1.75rem;
}

.text-xs {
  font-size: 0.75rem;
  line-height: 1rem;
}

.font-bold {
  font-weight: 700;
}

.font-extrabold {
  font-weight: 800;
}

.font-medium {
  font-weight: 500;
}

.font-normal {
  font-weight: 400;
}

.font-semibold {
  font-weight: 600;
}

.uppercase {
  text-transform: uppercase;
}

.leading-\[130\%\] {
  line-height: 130%;
}

.leading-relaxed {
  line-height: 1.625;
}

.leading-tight {
  line-height: 1.25;
}

.text-\[\#f5ede0\] {
  --tw-text-opacity: 1;
  color: rgb(245 237 224 / var(--tw-text-opacity, 1));
}

.text-black {
  --tw-text-opacity: 1;
  color: rgb(0 0 0 / var(--tw-text-opacity, 1));
}

.text-gray-200 {
  --tw-text-opacity: 1;
  color: rgb(229 231 235 / var(--tw-text-opacity, 1));
}

.text-gray-300 {
  --tw-text-opacity: 1;
  color: rgb(209 213 219 / var(--tw-text-opacity, 1));
}

.text-gray-400 {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity, 1));
}

.text-green-400 {
  --tw-text-opacity: 1;
  color: rgb(74 222 128 / var(--tw-text-opacity, 1));
}

.text-red-400 {
  --tw-text-opacity: 1;
  color: rgb(248 113 113 / var(--tw-text-opacity, 1));
}

.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity, 1));
}

.shadow {
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-lg {
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-md {
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-sm {
  --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
  --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.blur {
  --tw-blur: blur(8px);
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.backdrop-blur-md {
  --tw-backdrop-blur: blur(12px);
  backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}

.backdrop-filter {
  backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}

.transition {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-colors {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-transform {
  transition-property: transform;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.hover\:border-purple-500:hover {
  --tw-border-opacity: 1;
  border-color: rgb(168 85 247 / var(--tw-border-opacity, 1));
}

.hover\:bg-\[\#A0A3BA55\]:hover {
  background-color: #A0A3BA55;
}

.hover\:bg-\[\#f5ede0\]\/10:hover {
  background-color: rgb(245 237 224 / 0.1);
}

.hover\:bg-\[\#fbe8c7\]:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(251 232 199 / var(--tw-bg-opacity, 1));
}

.hover\:bg-\[\#fff4e4ee\]:hover {
  background-color: #fff4e4ee;
}

.hover\:bg-gray-200:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity, 1));
}

.hover\:bg-indigo-600:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(79 70 229 / var(--tw-bg-opacity, 1));
}

.hover\:bg-white:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1));
}

.hover\:bg-white\/10:hover {
  background-color: rgb(255 255 255 / 0.1);
}

.hover\:text-white:hover {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity, 1));
}

.hover\:underline:hover {
  text-decoration-line: underline;
}

@media (min-width: 640px) {
  .sm\:h-14 {
    height: 3.5rem;
  }

  .sm\:h-20 {
    height: 5rem;
  }

  .sm\:w-14 {
    width: 3.5rem;
  }

  .sm\:w-20 {
    width: 5rem;
  }

  .sm\:w-\[200px\] {
    width: 200px;
  }

  .sm\:w-\[520px\] {
    width: 520px;
  }

  .sm\:max-w-2xl {
    max-width: 42rem;
  }

  .sm\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .sm\:flex-col {
    flex-direction: column;
  }

  .sm\:gap-4 {
    gap: 1rem;
  }

  .sm\:text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
  }

  .sm\:text-base {
    font-size: 1rem;
    line-height: 1.5rem;
  }

  .sm\:text-sm {
    font-size: 0.875rem;
    line-height: 1.25rem;
  }
}

@media (min-width: 768px) {
  .md\:absolute {
    position: absolute;
  }

  .md\:relative {
    position: relative;
  }

  .md\:top-0 {
    top: 0px;
  }

  .md\:mt-0 {
    margin-top: 0px;
  }

  .md\:mt-8 {
    margin-top: 2rem;
  }

  .md\:flex {
    display: flex;
  }

  .md\:hidden {
    display: none;
  }

  .md\:h-\[420px\] {
    height: 420px;
  }

  .md\:h-\[480px\] {
    height: 480px;
  }

  .md\:h-\[500px\] {
    height: 500px;
  }

  .md\:h-\[600px\] {
    height: 600px;
  }

  .md\:w-auto {
    width: auto;
  }

  .md\:max-w-\[320px\] {
    max-width: 320px;
  }

  .md\:max-w-md {
    max-width: 28rem;
  }

  .md\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .md\:flex-row {
    flex-direction: row;
  }

  .md\:justify-start {
    justify-content: flex-start;
  }

  .md\:gap-10 {
    gap: 2.5rem;
  }

  .md\:gap-12 {
    gap: 3rem;
  }

  .md\:space-y-8 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(2rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(2rem * var(--tw-space-y-reverse));
  }

  .md\:px-10 {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }

  .md\:px-12 {
    padding-left: 3rem;
    padding-right: 3rem;
  }

  .md\:px-16 {
    padding-left: 4rem;
    padding-right: 4rem;
  }

  .md\:py-16 {
    padding-top: 4rem;
    padding-bottom: 4rem;
  }

  .md\:text-left {
    text-align: left;
  }

  .md\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .md\:text-\[26px\] {
    font-size: 26px;
  }

  .md\:text-\[41px\] {
    font-size: 41px;
  }

  .md\:text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
  }
}

@media (min-width: 1024px) {
  .lg\:h-\[600px\] {
    height: 600px;
  }

  .lg\:max-w-xl {
    max-width: 36rem;
  }

  .lg\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .lg\:px-20 {
    padding-left: 5rem;
    padding-right: 5rem;
  }

  .lg\:px-24 {
    padding-left: 6rem;
    padding-right: 6rem;
  }

  .lg\:text-6xl {
    font-size: 3.75rem;
    line-height: 1;
  }
}

@media (min-width: 1280px) {
  .xl\:h-\[600px\] {
    height: 600px;
  }

  .xl\:max-w-4xl {
    max-width: 56rem;
  }

  .xl\:space-x-24 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(6rem * var(--tw-space-x-reverse));
    margin-left: calc(6rem * calc(1 - var(--tw-space-x-reverse)));
  }
}

</style>

<footer class="bg-[#0d0d15] border-t [#A89469bl] py-20 px-4 md:px-12 lg:px-20">
  <div class="flex flex-col md:flex-row justify-between items-start gap-10">

    <!-- Logo & Social -->
    <div class="w-full md:w-auto">
       <div class="w-[65%] text-2xl font-bold"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-vertical.png" alt="Logo"></div>
     <div class="flex space-x-6 mt-12 w-full justify-around">
          <a href="#" class="text-gray-400 hover:text-white ml-0" ><i class="fab fa-x-twitter" style="height:20px; width:20px"></i></a>
          <a href="#" class="text-gray-400 hover:text-white ml-0" style="height:20px; width:20px"><i class="fab fa-facebook" style="height:20px; width:20px"></i> </a>
          <a href="#" class="text-gray-400 hover:text-white ml-0" style="height:20px; width:20px"><i class="fab fa-instagram" style="height:20px; width:20px"></i></a>
          <a href="#" class="text-gray-400 hover:text-white ml-0" style="height:20px; width:20px"><i class="fab fa-linkedin" style="height:20px; width:20px"></i></a>
        </div>
    </div>

    <!-- About -->
    <div class="w-full md:w-auto">
      <h4 class="font-semibold mb-4">About</h4>
      <ul class="space-y-2 text-sm text-gray-400">
        <li><a href="about-overview/" class="hover:text-white">About Us</a></li>
        <li><a href="faqs/" class="hover:text-white">FAQs</a></li>
        <!-- <li><a href="pricing-and-fees/" class="hover:text-white">Pricing & Fees</a></li> -->
        <!-- <li><a href="#" class="hover:text-white">Affiliate Program</a></li> -->
        <li><a href="contact-us/" class="hover:text-white">Contact Us</a></li>
      </ul>
    </div>

    <!-- Trading -->
    <div class="w-full md:w-auto">
      <h4 class="font-semibold mb-4">Trading</h4>
      <ul class="space-y-2 text-sm text-gray-400">
         <li><a href="/cfd-trading" class="hover:text-white">CFD Trading</a></li>
        <li><a href="/etd-trading" class="hover:text-white">ETD Trading</a></li> 
        <li><a href="/cme-futures" class="hover:text-white">CME Group Futures</a></li> 
        <li><a href="/cme-options" class="hover:text-white">CME Group Options</a></li> 

      </ul>
    </div>

    <!-- Markets -->
    <div class="w-full md:w-auto">
      <h4 class="font-semibold mb-4">Markets</h4>
      <ul class="space-y-2 text-sm text-gray-400">
        <li><a href="/indices" class="hover:text-white">Indices</a></li>
        <li><a href="/forex" class="hover:text-white">Forex</a></li>
        <li><a href="/commodities" class="hover:text-white">Commodities</a></li>
        <li><a href="/shares" class="hover:text-white">Shares</a></li>
        <li><a href="/etf" class="hover:text-white">ETFs</a></li>
        <li><a href="/treasuries" class="hover:text-white">Treasuries</a></li>
      </ul>
    </div>

    <!-- Platforms -->
    <div class="w-full md:w-auto">
      <h4 class="font-semibold mb-4">Platforms</h4>
      <ul class="space-y-2 text-sm text-gray-400">
        <li><a href="/meta-trader-5" class="hover:text-white">Meta Trader</a></li>
        <li><a href="/cqg" class="hover:text-white">CQG</a></li>
        <li><a href="/trading-technologies" class="hover:text-white">TT</a></li>
        <li><a href="/rithmic" class="hover:text-white">Rithmic</a></li>
      </ul>
    </div>

    <!-- Resources -->
    <div class="w-full md:w-auto">
      <h4 class="font-semibold mb-4">Resources</h4>
      <ul class="space-y-2 text-sm text-gray-400">
        <li><a href="/policy-regulation" class="hover:text-white">Privacy & Regulation</a></li>
      </ul>
      
      <ul class="space-y-2 text-sm text-gray-400">
        <li><a href="/glossary" class="hover:text-white">Glossary</a></li>
      </ul>
    </div>

  </div>

  <!-- Bottom Bar -->
  <div class="mt-12 flex flex-col md:flex-row justify-between items-center text-gray-400 text-sm">
    <p>© Lunaro. All Rights Reserved.</p>
    <a href="#top" class="mt-4 md:mt-0 hover:text-white">Back to top ↑</a>
  </div>
</footer>
<?php

wp_footer(); ?>