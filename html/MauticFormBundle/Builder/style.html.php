<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<style type="text/css" scoped>
  html {
    font-family: Open Sans,-apple-system,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.56;
    -webkit-text-size-adjust: 100%;
    background: #fff;
    color: #201c1d;
    text-rendering: geometricPrecision;
    -webkit-backface-visibility: hidden;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.mauticform_wrapper {
    max-width: 94%;
}
.mauticform-row {
    display: block;
    margin-bottom: 16px;
}
.mauticform-row label {
    text-transform: uppercase;
    font-size: 12px;
    margin-bottom: 4px;
    font-weight: 600;
    color: #635461;
    width:100%;
    display:block;
}
.mauticform-row input, .mauticform-row textarea {
    display: inline-block;
    min-height: 45px;
    width: 400px;
    max-width: 100%;
    border: 0;
    padding: 0 10px;
    background: #fff;
    color: #201c1d;
    border: 1px solid transparent;
    border-radius: 2px;
    font-size: 16px;
    font-family: 'Open sans';
}
.mauticform-row textarea{
    padding-top:10px;
    padding-bottom:10px;
}
.mauticform-row input:focus,.mauticform-row input:active, .mauticform-row textarea:focus, .mauticform-row textarea:active {
    border: 1px solid #00495f;
    outline:none;
}
.mauticform-button {
    margin: 0;
    border: none;
    overflow: visible;
    font: inherit;
    color: inherit;
    text-transform: none;
    display: inline-block;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0 32px;
    vertical-align: middle;
    font-size: 15px;
    line-height: 50px;
    text-align: center;
    text-decoration: none;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 2px;
    position: relative;
    font-weight: 600;
    border: 2px solid transparent;
    -webkit-transition: all .3s!important;
    -o-transition: all .3s!important;
    transition: all .3s!important;
}
.mauticform-button:not(:disabled) {
    cursor: pointer;
}
.mauticform-button.btn-default {
    background-color: #d60f2c;
    color: #fff;
}
.mauticform-button-wrapper {
    width: fit-content;
    height: fit-content;
    background-color: #be0d27;
}
.mauticform-button.btn-default:hover {
    filter: brightness(80%);
}
.mauticform-button:focus {
    outline: none;
}
.mauticform-errormsg {
    color: #d60f2c;
    font-size: 12px;
    font-weight: 600;
    margin-top: 5px;
    text-align: left;
    display: block;
}
.mauticform-helpmessage{
    color: #a2a2a2;
    font-size: 12px;
    font-weight: 400;
    margin-top: 5px;
    text-align: left;
    display: block;
}
.mauticform-checkboxgrp-row input {
    display: inline-block;
    width: 20px;
    max-width: 20%;
    margin-right: 10px;
}
.mauticform-checkboxgrp-row label {
    display: inline-block;
    width: 300px;
    max-width: 75%;
    vertical-align: bottom;
    padding: 13px 0;
    margin: 5px;
    text-transform: inherit;
    font-weight: 400;
}
.mf-content {
    background: #000;
}
</style>