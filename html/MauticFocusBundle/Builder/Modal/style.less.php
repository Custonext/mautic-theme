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

.mf-modal {
    position: fixed;
    opacity: 1;
    z-index: 2000;
    margin: auto;
    padding: 45px;
    border-radius: 0;
    border-width: 0;
    border-style: solid;
    border-color: #000;
    background: #fff;
    width: 40em;
    max-width: 40em;
    text-align: left;
    box-shadow: 0 0 15px 0px #22222238;

    .mf-content {
        line-height: 1.4;
        margin-bottom: 30px;

        .mf-headline {
            font-size: 1.6em;
            font-weight: 600;
        }

        .mf-tagline {
            font-size: 1.2em;
            font-weight: normal;
            margin-top: 4px;
        }
    }

    .mf-modal-close {
        position: absolute;
        top: 10px;
        right: 10px;
        text-align:right;

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
                height: 18px;
                width: 18px;
                background-size: contain;
            }
        }
    }
    .mauticform-input, .mauticform-row select, .mauticform-button {
        width: 100%;
        height: 28px;
        margin-bottom: 2px;
    }
}

.mf-responsive.mf-modal, .mf-responsive .mf-modal {
    width: 90%;
    padding: 10px;
}
.mf-content a.mf-link, .mf-content .mauticform-button {
    border-radius:0;
}
.mf-inner-container {
    width: fit-content;
    height: fit-content;
    background-color: #be0d27;

    .mf-link {
        margin: 0;
        border: none;
        min-height: 45px;
        overflow: visible;
        text-transform: none;
        display: inline-block !important;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0 32px !important;
        vertical-align: middle;
        font-size: 15px;
        font-family: 'Open Sans', sans-serif;
        line-height: 52px;
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
        border-radius: 0;
        position: relative;
        font-weight: 600;
        border: 2px solid transparent;
        -webkit-transition: all .3s!important;
        -o-transition: all .3s!important;
        transition: all .3s!important;
        background-color: #d60f2c;
        color: #ffffff;
        z-index:1;
    
        &:hover {
            filter: brightness(80%);
        }   
    }
}
<?php if (!empty($preview)): ?>
<?php echo $view->render('MauticFocusBundle:Builder\Modal:animations.less.php'); ?>
<?php echo $view->render('MauticFocusBundle:Builder\Modal:overlay.less.php'); ?>

.mf-modal, .mf-modal-overlay {
    position: absolute !important;
}

.mf-modal {
    z-index: 1023;
    left: 50%;
    &.mf-animate {
        .modalAnimate();
    }

    &.mf-modal-top {
        top: 10px;
        .modalTranslate(-50%, 0);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-down-top);
        }
    }

    &.mf-modal-middle {
        top: 50%;
        .modalTranslate(-50%, -50%);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-down-middle);
        }
    }

    &.mf-modal-bottom {
        bottom: 10px;
        .modalTranslate(-50%, 0);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-up-bottom);
        }
    }

}

.mf-modal-overlay {
    z-index: 1022;
}
<?php endif; ?>