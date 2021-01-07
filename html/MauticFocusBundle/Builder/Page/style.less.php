<?php

/*
 * @copyright   2016 Mautic, Inc. All rights reserved
 * @author      Mautic, Inc
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');
.mf-page {
    position: fixed;
    opacity: 1;
    z-index: 20000;
    margin: auto;
    padding: 45px;
    background: #fff;
    border-radius: 0;
    border-width: 0;
    border-style: solid;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    text-align: center;

    .mf-content {
        position: absolute;
        min-width: 75%;
        top: 50%;
        left: 50%;
        right: 0;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        margin-bottom: 30px;
        font-family: 'Open Sans', sans-serif;

        .mf-headline {
            font-size: 2.5em;
            font-weight: 600;
            font-family: 'Open Sans', sans-serif;
        }

        .mf-tagline {
            font-size: 1.8em;
            font-weight: normal;
            margin-top: 4px;
            font-family: 'Open Sans', sans-serif;
        }
        .mf-inner-container {
            margin: 20px auto 0;
            
            .mf-link {
                font-family: 'Open Sans', sans-serif;
            }
        }
    }

    .mf-page-close {
        position: absolute;
        top: 20px;
        right: 20px;

        a {
            font-size: 16px;
            color: #000;
            opacity: 0;
            text-decoration: none;

            &:hover {
                opacity: 0;
                text-decoration: none;
            }
            &:before {
                content: '';
                display:block;
                background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAmElEQVR4Ae3TgQXAMBRF0Y8O1D2KoINklD9IRwzSIEDDJak8+JenQB2JWDQuiqJz3z+43Fb7dzZvK223LXZ1TCUUYGpfWT2po+1hFGP63KAFlABDKAGGUQIMowQYRgFGgAKMEuUmzAegLMdIUIBxeH17MfD6JBgToAADKAVmAwowClSawQDqtMWcMYz6+9qScYS6LIqi6NsLO/6TAUDU7/4AAAAASUVORK5CYII=');
                background-repeat: no-repeat;
                height: 36px;
                width: 36px;
                background-size: contain;
            }
        }
    }
}

<?php if (!empty($preview)): ?>
.mf-page {
    position: absolute !important;
}

<?php endif; ?>