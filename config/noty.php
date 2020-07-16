<?php

return [
    /*
    * Title configuration color
    */
    'titleColor' => '',

    /*
    * Title configuration size
    */
    'titleSize' => '',

    /*
    * Title configuration line hight
    */
    'titleLineHeight' => '',

    /*
    * Message configuration color
    */
    'messageColor' => '',

    /*
    * Message configuration size
    */
    'messageSize' => '',

    /*
    * Message configuration line hight
    */
    'messageLineHeight' => '',

    /*
     * Positions:  bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
     */
    'position' => 'topRight',

    /*
     * Themes:  light, dark
     */
    'theme' => 'light',

    /*
     * Layout:  1 (title inline with message), 2 (title on top of message)
     */
    'layout' => 1,

    /*
    * [integer|boolean] - Delay for closing event in milliseconds. Set false for sticky notifications.
    */
    'timeout' => 4000,

    /*
     * [boolean] - Displays a progress bar.
     */
    'progressBar' => true,

    /*
     * [string] - Progress bar color
     */
    'progressBarColor' => 'rgb(0, 255, 184)',

    /*
     * [string] - Progress bar linear / ease
     */
    'progressBarEasing' => 'linear',

    /*
     * [boolean] - Balloon
     */
    'balloon' => true,

    /*
     * [boolean] - enable to close?
     */
    'close' => true,

    /*
     * [boolean] - Close on click
     */
    'closeOnClick' => false,

    /*
     * [boolean] - Close on escape?
     */
    'closeOnEscape' => false,

    /*
     * Animate inside
     */
    'animateInside' => true, // bool

    /*
     * Enable drag for close
     */
    'drag' => true, // bool

    /*
     * Pause on hover
     */
    'pauseOnHover' => true, // bool

    /*
     * Reset on hover
     */
    'resetOnHover' => false, // bool

    /*
     * [string] - Transition In
     * Default toast open animation. It can be: bounceInLeft, bounceInRight, bounceInUp, bounceInDown, fadeIn, fadeInDown, fadeInUp, fadeInLeft, fadeInRight or flipInX.
     */
    'transitionIn' => 'fadeInUp',

    /*
     * [string] - Transition Out
     * Default toast close animation. It can be: fadeOut, fadeOutUp, fadeOutDown, fadeOutLeft, fadeOutRight, flipOutX
     */
    'transitionOut' => 'fadeOut',

    /*
     * [string] - Transition In Mobile
     */
    'transitionInMobile' => 'fadeInUp',

    /*
     * [string] - Transition Out Mobile
     */
    'transitionOutMobile' => 'fadeOutDown',
];
