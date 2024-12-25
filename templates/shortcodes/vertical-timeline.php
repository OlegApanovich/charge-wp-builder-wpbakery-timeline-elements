<?php
/**
 * The template for displaying [wpbakery-plus-vertical-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var \WpbPlusTimeline\Shortcodes\VerticalTimeline $_this
 */

defined( 'ABSPATH' ) || exit;
?>
<div <?php $_this->outputShortcodeWrapperAttributes(); ?>>
    <ul class="wpplus-timeline">
        <?php echo do_shortcode( $content ); ?>
    </ul>
</div>

<style>
    .wpplus-hexa{
        border: 0px;
        float: left;
        text-align: center;
        height: 35px;
        width: 60px;
        font-size: 22px;
        background: #f0f0f0;
        color: #3c3c3c;
        position: relative;
        margin-top: 15px;
    }

    .wpplus-hexa:before{
        content: "";
        position: absolute;
        left: 0;
        width: 0;
        height: 0;
        border-bottom: 15px solid #f0f0f0;
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;
        top: -15px;
    }

    .wpplus-hexa:after{
        content: "";
        position: absolute;
        left: 0;
        width: 0;
        height: 0;
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;
        border-top: 15px solid #f0f0f0;
        bottom: -15px;
    }

    .wpplus-timeline {
        position: relative;
        padding: 0;
        width: 100%;
        margin-top: 20px;
        list-style-type: none;
    }

    .wpplus-timeline:before {
        position: absolute;
        left: 50%;
        top: 0;
        content: ' ';
        display: block;
        width: 2px;
        height: 100%;
        margin-left: -1px;
        background: rgb(213,213,213);
        background: -moz-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,1)));
        background: -webkit-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
        background: -o-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
        background: -ms-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
        background: linear-gradient(to bottom, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
        z-index: 5;
    }

    .wpplus-timeline li {
        padding: 2em 0;
    }

    .wpplus-timeline .wpplus-hexa{
        width: 16px;
        height: 10px;
        position: absolute;
        background: #00c4f3;
        z-index: 5;
        left: 0;
        right: 0;
        margin-left:auto;
        margin-right:auto;
        top: -30px;
        margin-top: 0;
    }

    .wpplus-timeline .wpplus-hexa:before {
        border-bottom: 4px solid #00c4f3;
        border-left-width: 8px;
        border-right-width: 8px;
        top: -4px;
    }

    .wpplus-timeline .wpplus-hexa:after {
        border-left-width: 8px;
        border-right-width: 8px;
        border-top: 4px solid #00c4f3;
        bottom: -4px;
    }

    .wpplus-direction-l,
    .wpplus-direction-r {
        float: none;
        width: 100%;
        text-align: center;
    }

    .wpplus-flag-wrapper {
        text-align: center;
        position: relative;
    }

    .wpplus-flag {
        position: relative;
        display: inline;
        background: rgb(255,255,255);
        font-weight: 600;
        z-index: 15;
        padding: 6px 10px;
        text-align: left;
        border-radius: 5px;
    }

    .wpplus-direction-l .wpplus-flag:after,
    .wpplus-direction-r .wpplus-flag:after {
        content: "";
        position: absolute;
        left: 50%;
        top: -15px;
        height: 0;
        width: 0;
        margin-left: -8px;
        border: solid transparent;
        border-bottom-color: rgb(255,255,255);
        border-width: 8px;
        pointer-events: none;
    }

    .wpplus-direction-l .wpplus-flag {
        -webkit-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
        -moz-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
        box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
    }

    .wpplus-direction-r .wpplus-flag {
        -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
        -moz-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
        box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
    }

    .wpplus-time-wrapper {
        display: block;
        position: relative;
        margin: 4px 0 0 0;
        z-index: 14;
        line-height: 1em;
        vertical-align: middle;
        color: #fff;
    }

    .wpplus-direction-l .wpplus-time-wrapper {
        float: none;
    }

    .wpplus-direction-r .wpplus-time-wrapper {
        float: none;
    }

    .wpplus-time {
        background: #00c4f3;
        display: inline-block;
        padding: 8px;
    }

    .wpplus-desc {
        position: relative;
        margin: 1em 0 0 0;
        padding: 1em;
        background: rgb(254,254,254);
        -webkit-box-shadow: 0 0 1px rgba(0,0,0,0.20);
        -moz-box-shadow: 0 0 1px rgba(0,0,0,0.20);
        box-shadow: 0 0 1px rgba(0,0,0,0.20);
        z-index: 15;
    }

    .wpplus-direction-l .desc,
    .wpplus-direction-r .desc {
        position: relative;
        margin: 1em 1em 0 1em;
        padding: 1em;
        z-index: 15;
    }

    @media(min-width: 768px){
        .wpplus-timeline {
            width: 660px;
            margin: 0 auto;
            margin-top: 20px;
        }

        .wpplus-timeline li:after {
            content: "";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }

        .wpplus-timeline .wpplus-hexa {
            left: -28px;
            right: auto;
            top: 8px;
        }

        .wpplus-timeline .wpplus-direction-l .wpplus-hexa {
            left: auto;
            right: -28px;
        }

        .wpplus-direction-l {
            position: relative;
            width: 310px;
            float: left;
            text-align: right;
        }

        .wpplus-direction-r {
            position: relative;
            width: 310px;
            float: right;
            text-align: left;
        }

        .wpplus-flag-wrapper {
            display: inline-block;
        }

        .wpplus-flag {
            font-size: 18px;
        }

        .wpplus-direction-l .wpplus-flag:after {
            left: auto;
            right: -16px;
            top: 50%;
            margin-top: -8px;
            border: solid transparent;
            border-left-color: rgb(254,254,254);
            border-width: 8px;
        }

        .wpplus-direction-r .wpplus-flag:after {
            top: 50%;
            margin-top: -8px;
            border: solid transparent;
            border-right-color: rgb(254,254,254);
            border-width: 8px;
            left: -8px;
        }

        .wpplus-time-wrapper {
            display: inline;
            vertical-align: middle;
            margin: 0;
        }

        .wpplus-direction-l .wpplus-time-wrapper {
            float: left;
        }

        .wpplus-direction-r .wpplus-time-wrapper {
            float: right;
        }

        .wpplus-time {
            padding: 5px 10px;
        }

        .wpplus-direction-r .wpplus-desc {
            margin: 1em 0 0 0.75em;
        }
    }

    @media(min-width: 992px){
        .wpplus-timeline {
            width: 800px;
            margin: 0 auto;
            margin-top: 20px;
        }

        .wpplus-direction-l {
            position: relative;
            width: 380px;
            float: left;
            text-align: right;
        }

        .wpplus-direction-r {
            position: relative;
            width: 380px;
            float: right;
            text-align: left;
        }
    }
</style>
