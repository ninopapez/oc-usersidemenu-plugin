<?php

namespace VojtaSvoboda\UserSideMenu\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\Validation as ValidationTrait;

class Settings extends Model
{
    use ValidationTrait;

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'vojtasvoboda_usersidemenu_settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [
        'base_order'   => 'numeric',
        'first_order'  => 'numeric',
        'second_order' => 'numeric',
        'third_order'  => 'numeric',
        'fourth_order' => 'numeric',
        'fifth_order'  => 'numeric',
    ];

    /**
     * Get settings for Main menu icon
     *
     * @return array|null
     */
    public static function getBaseIconSettings()
    {
        $ident = 'base';

        return self::getIconSettings($ident);
    }

    /**
     * Get settings for first icon
     *
     * @return array|null
     */
    public static function getFirstIconSettings()
    {
        $ident = 'first';
        $enabled = self::get($ident . '_enabled', false);
        if (!$enabled) {
            return null;
        }

        return [
            'label'       => self::get($ident . '_label', 'rainlab.user::lang.users.new_user'),
            'url'         => self::get($ident . '_url', 'rainlab/user/users/create'),
            'order'       => self::get($ident . '_order', 100),
            'icon'        => self::get($ident . '_icon', 'icon-plus'),
            'permissions' => self::get($ident . '_permissions', 'rainlab.users.access_users'),
        ];
    }

    /**
     * Get settings for second icon
     *
     * @return array|null
     */
    public static function getSecondIconSettings()
    {
        $ident = 'second';
        $enabled = self::get($ident . '_enabled', true);
        if (!$enabled) {
            return null;
        }

        return [
            'label'       => self::get($ident . '_label', 'rainlab.user::lang.users.menu_label'),
            'url'         => self::get($ident . '_url', 'rainlab/user/users'),
            'order'       => self::get($ident . '_order', 200),
            'icon'        => self::get($ident . '_icon', 'icon-user'),
            'permissions' => self::get($ident . '_permissions', 'rainlab.users.access_users'),
        ];
    }

    /**
     * Get settings for third icon
     *
     * @return array|null
     */
    public static function getThirdIconSettings()
    {
        $ident = 'third';
        $enabled = self::get($ident . '_enabled', true);
        if (!$enabled) {
            return null;
        }

        return [
            'label'       => self::get($ident . '_label', 'rainlab.user::lang.groups.menu_label'),
            'url'         => self::get($ident . '_url', 'rainlab/user/usergroups'),
            'order'       => self::get($ident . '_order', 300),
            'icon'        => self::get($ident . '_icon', 'icon-group'),
            'permissions' => self::get($ident . '_permissions', 'rainlab.users.access_groups'),
        ];
    }

    /**
     * Get settings for fourth icon
     *
     * @return array|null
     */
    public static function getFourthIconSettings()
    {
        $ident = 'fourth';

        return self::getIconSettings($ident);
    }

    /**
     * Get settings for fifth icon
     *
     * @return array|null
     */
    public static function getFifthIconSettings()
    {
        $ident = 'fifth';

        return self::getIconSettings($ident);
    }

    /**
     * Universal method for getting icon settings
     *
     * @param $ident
     *
     * @return array|null
     */
    private static function getIconSettings($ident)
    {
        $enabled = self::get($ident . '_enabled', false);
        if (!$enabled) {
            return null;
        }

        return [
            'label'       => self::get($ident . '_label'),
            'url'         => self::get($ident . '_url'),
            'order'       => self::get($ident . '_order'),
            'icon'        => self::get($ident . '_icon'),
            'permissions' => self::get($ident . '_permissions', 'rainlab.users.*'),
        ];
    }
    
    public static function getBaseIconOptions()
    {
        return self::getIconOptions();
    }

    public static function getFirstIconOptions()
    {
        return self::getIconOptions();
    }

    public static function getSecondIconOptions()
    {
        return self::getIconOptions();
    }

    public static function getThirdIconOptions()
    {
        return self::getIconOptions();
    }

    public static function getFourthIconOptions()
    {
        return self::getIconOptions();
    }

    public static function getFifthIconOptions()
    {
        return self::getIconOptions();
    }

    public static function getSixtIconOptions()
    {
        return self::getIconOptions();
    }

    /**
     * Returns array of Font Autumn icons
     *
     * @return array
     */
    public static function getIconOptions()
    {
        return [
            'icon-adjust' => ['adjust', 'icon-adjust'],
            'icon-adn' => ['adn', 'icon-adn'],
            'icon-align-center' => ['align-center', 'icon-align-center'],
            'icon-align-justify' => ['align-justify', 'icon-align-justify'],
            'icon-align-left' => ['align-left', 'icon-align-left'],
            'icon-align-right' => ['align-right', 'icon-align-right'],
            'icon-ambulance' => ['ambulance', 'icon-ambulance'],
            'icon-anchor' => ['anchor', 'icon-anchor'],
            'icon-android' => ['android', 'icon-android'],
            'icon-angellist' => ['angellist', 'icon-angellist'],
            'icon-angle-double-down' => ['angle-double-down', 'icon-angle-double-down'],
            'icon-angle-double-left' => ['angle-double-left', 'icon-angle-double-left'],
            'icon-angle-double-right' => ['angle-double-right', 'icon-angle-double-right'],
            'icon-angle-double-up' => ['angle-double-up', 'icon-angle-double-up'],
            'icon-angle-down' => ['angle-down', 'icon-angle-down'],
            'icon-angle-left' => ['angle-left', 'icon-angle-left'],
            'icon-angle-right' => ['angle-right', 'icon-angle-right'],
            'icon-angle-up' => ['angle-up', 'icon-angle-up'],
            'icon-apple' => ['apple', 'icon-apple'],
            'icon-archive' => ['archive', 'icon-archive'],
            'icon-area-chart' => ['area-chart', 'icon-area-chart'],
            'icon-arrow-circle-down' => ['arrow-circle-down', 'icon-arrow-circle-down'],
            'icon-arrow-circle-left' => ['arrow-circle-left', 'icon-arrow-circle-left'],
            'icon-arrow-circle-o-down' => ['arrow-circle-o-down', 'icon-arrow-circle-o-down'],
            'icon-arrow-circle-o-left' => ['arrow-circle-o-left', 'icon-arrow-circle-o-left'],
            'icon-arrow-circle-o-right' => ['arrow-circle-o-right', 'icon-arrow-circle-o-right'],
            'icon-arrow-circle-o-up' => ['arrow-circle-o-up', 'icon-arrow-circle-o-up'],
            'icon-arrow-circle-right' => ['arrow-circle-right', 'icon-arrow-circle-right'],
            'icon-arrow-circle-up' => ['arrow-circle-up', 'icon-arrow-circle-up'],
            'icon-arrow-down' => ['arrow-down', 'icon-arrow-down'],
            'icon-arrow-left' => ['arrow-left', 'icon-arrow-left'],
            'icon-arrow-right' => ['arrow-right', 'icon-arrow-right'],
            'icon-arrow-up' => ['arrow-up', 'icon-arrow-up'],
            'icon-arrows' => ['arrows', 'icon-arrows'],
            'icon-arrows-alt' => ['arrows-alt', 'icon-arrows-alt'],
            'icon-arrows-h' => ['arrows-h', 'icon-arrows-h'],
            'icon-arrows-v' => ['arrows-v', 'icon-arrows-v'],
            'icon-asterisk' => ['asterisk', 'icon-asterisk'],
            'icon-at' => ['at', 'icon-at'],
            'icon-automobile' => ['automobile', 'icon-automobile'],
            'icon-backward' => ['backward', 'icon-backward'],
            'icon-ban' => ['ban', 'icon-ban'],
            'icon-bank' => ['bank', 'icon-bank'],
            'icon-bar-chart' => ['bar-chart', 'icon-bar-chart'],
            'icon-bar-chart-o' => ['bar-chart-o', 'icon-bar-chart-o'],
            'icon-barcode' => ['barcode', 'icon-barcode'],
            'icon-bars' => ['bars', 'icon-bars'],
            'icon-bed' => ['bed', 'icon-bed'],
            'icon-beer' => ['beer', 'icon-beer'],
            'icon-behance' => ['behance', 'icon-behance'],
            'icon-behance-square' => ['behance-square', 'icon-behance-square'],
            'icon-bell' => ['bell', 'icon-bell'],
            'icon-bell-o' => ['bell-o', 'icon-bell-o'],
            'icon-bell-slash' => ['bell-slash', 'icon-bell-slash'],
            'icon-bell-slash-o' => ['bell-slash-o', 'icon-bell-slash-o'],
            'icon-bicycle' => ['bicycle', 'icon-bicycle'],
            'icon-binoculars' => ['binoculars', 'icon-binoculars'],
            'icon-birthday-cake' => ['birthday-cake', 'icon-birthday-cake'],
            'icon-bitbucket' => ['bitbucket', 'icon-bitbucket'],
            'icon-bitbucket-square' => ['bitbucket-square', 'icon-bitbucket-square'],
            'icon-bitcoin' => ['bitcoin', 'icon-bitcoin'],
            'icon-bold' => ['bold', 'icon-bold'],
            'icon-bolt' => ['bolt', 'icon-bolt'],
            'icon-bomb' => ['bomb', 'icon-bomb'],
            'icon-book' => ['book', 'icon-book'],
            'icon-bookmark' => ['bookmark', 'icon-bookmark'],
            'icon-bookmark-o' => ['bookmark-o', 'icon-bookmark-o'],
            'icon-briefcase' => ['briefcase', 'icon-briefcase'],
            'icon-btc' => ['btc', 'icon-btc'],
            'icon-bug' => ['bug', 'icon-bug'],
            'icon-building' => ['building', 'icon-building'],
            'icon-building-o' => ['building-o', 'icon-building-o'],
            'icon-bullhorn' => ['bullhorn', 'icon-bullhorn'],
            'icon-bullseye' => ['bullseye', 'icon-bullseye'],
            'icon-bus' => ['bus', 'icon-bus'],
            'icon-buysellads' => ['buysellads', 'icon-buysellads'],
            'icon-cab' => ['cab', 'icon-cab'],
            'icon-calculator' => ['calculator', 'icon-calculator'],
            'icon-calendar' => ['calendar', 'icon-calendar'],
            'icon-calendar-o' => ['calendar-o', 'icon-calendar-o'],
            'icon-camera' => ['camera', 'icon-camera'],
            'icon-camera-retro' => ['camera-retro', 'icon-camera-retro'],
            'icon-car' => ['car', 'icon-car'],
            'icon-caret-down' => ['caret-down', 'icon-caret-down'],
            'icon-caret-left' => ['caret-left', 'icon-caret-left'],
            'icon-caret-right' => ['caret-right', 'icon-caret-right'],
            'icon-caret-square-o-down' => ['caret-square-o-down', 'icon-caret-square-o-down'],
            'icon-caret-square-o-left' => ['caret-square-o-left', 'icon-caret-square-o-left'],
            'icon-caret-square-o-right' => ['caret-square-o-right', 'icon-caret-square-o-right'],
            'icon-caret-square-o-up' => ['caret-square-o-up', 'icon-caret-square-o-up'],
            'icon-caret-up' => ['caret-up', 'icon-caret-up'],
            'icon-cart-arrow-down' => ['cart-arrow-down', 'icon-cart-arrow-down'],
            'icon-cart-plus' => ['cart-plus', 'icon-cart-plus'],
            'icon-cc' => ['cc', 'icon-cc'],
            'icon-cc-amex' => ['cc-amex', 'icon-cc-amex'],
            'icon-cc-discover' => ['cc-discover', 'icon-cc-discover'],
            'icon-cc-mastercard' => ['cc-mastercard', 'icon-cc-mastercard'],
            'icon-cc-paypal' => ['cc-paypal', 'icon-cc-paypal'],
            'icon-cc-stripe' => ['cc-stripe', 'icon-cc-stripe'],
            'icon-cc-visa' => ['cc-visa', 'icon-cc-visa'],
            'icon-certificate' => ['certificate', 'icon-certificate'],
            'icon-chain' => ['chain', 'icon-chain'],
            'icon-chain-broken' => ['chain-broken', 'icon-chain-broken'],
            'icon-check' => ['check', 'icon-check'],
            'icon-check-circle' => ['check-circle', 'icon-check-circle'],
            'icon-check-circle-o' => ['check-circle-o', 'icon-check-circle-o'],
            'icon-check-square' => ['check-square', 'icon-check-square'],
            'icon-check-square-o' => ['check-square-o', 'icon-check-square-o'],
            'icon-chevron-circle-down' => ['chevron-circle-down', 'icon-chevron-circle-down'],
            'icon-chevron-circle-left' => ['chevron-circle-left', 'icon-chevron-circle-left'],
            'icon-chevron-circle-right' => ['chevron-circle-right', 'icon-chevron-circle-right'],
            'icon-chevron-circle-up' => ['chevron-circle-up', 'icon-chevron-circle-up'],
            'icon-chevron-down' => ['chevron-down', 'icon-chevron-down'],
            'icon-chevron-left' => ['chevron-left', 'icon-chevron-left'],
            'icon-chevron-right' => ['chevron-right', 'icon-chevron-right'],
            'icon-chevron-up' => ['chevron-up', 'icon-chevron-up'],
            'icon-child' => ['child', 'icon-child'],
            'icon-circle' => ['circle', 'icon-circle'],
            'icon-circle-o' => ['circle-o', 'icon-circle-o'],
            'icon-circle-o-notch' => ['circle-o-notch', 'icon-circle-o-notch'],
            'icon-circle-thin' => ['circle-thin', 'icon-circle-thin'],
            'icon-clipboard' => ['clipboard', 'icon-clipboard'],
            'icon-clock-o' => ['clock-o', 'icon-clock-o'],
            'icon-close' => ['close', 'icon-close'],
            'icon-cloud' => ['cloud', 'icon-cloud'],
            'icon-cloud-download' => ['cloud-download', 'icon-cloud-download'],
            'icon-cloud-upload' => ['cloud-upload', 'icon-cloud-upload'],
            'icon-cny' => ['cny', 'icon-cny'],
            'icon-code' => ['code', 'icon-code'],
            'icon-code-fork' => ['code-fork', 'icon-code-fork'],
            'icon-codepen' => ['codepen', 'icon-codepen'],
            'icon-coffee' => ['coffee', 'icon-coffee'],
            'icon-cog' => ['cog', 'icon-cog'],
            'icon-cogs' => ['cogs', 'icon-cogs'],
            'icon-columns' => ['columns', 'icon-columns'],
            'icon-comment' => ['comment', 'icon-comment'],
            'icon-comment-o' => ['comment-o', 'icon-comment-o'],
            'icon-comments' => ['comments', 'icon-comments'],
            'icon-comments-o' => ['comments-o', 'icon-comments-o'],
            'icon-compass' => ['compass', 'icon-compass'],
            'icon-compress' => ['compress', 'icon-compress'],
            'icon-connectdevelop' => ['connectdevelop', 'icon-connectdevelop'],
            'icon-copy' => ['copy', 'icon-copy'],
            'icon-copyright' => ['copyright', 'icon-copyright'],
            'icon-credit-card' => ['credit-card', 'icon-credit-card'],
            'icon-crop' => ['crop', 'icon-crop'],
            'icon-crosshairs' => ['crosshairs', 'icon-crosshairs'],
            'icon-css3' => ['css3', '|'],
            'icon-cube' => ['cube', 'icon-cube'],
            'icon-cubes' => ['cubes', 'icon-cubes'],
            'icon-cut' => ['cut', 'icon-cut'],
            'icon-cutlery' => ['cutlery', 'icon-cutlery'],
            'icon-dashboard' => ['dashboard', 'icon-dashboard'],
            'icon-dashcube' => ['dashcube', 'icon-dashcube'],
            'icon-database' => ['database', 'icon-database'],
            'icon-dedent' => ['dedent', 'icon-dedent'],
            'icon-delicious' => ['delicious', 'icon-delicious'],
            'icon-desktop' => ['desktop', 'icon-desktop'],
            'icon-deviantart' => ['deviantart', 'icon-deviantart'],
            'icon-diamond' => ['diamond', 'icon-diamond'],
            'icon-digg' => ['digg', 'icon-digg'],
            'icon-dollar' => ['dollar', 'icon-dollar'],
            'icon-dot-circle-o' => ['dot-circle-o', 'icon-dot-circle-o'],
            'icon-download' => ['download', 'icon-download'],
            'icon-dribbble' => ['dribbble', 'icon-dribbble'],
            'icon-dropbox' => ['dropbox', 'icon-dropbox'],
            'icon-drupal' => ['drupal', 'icon-drupal'],
            'icon-edit' => ['edit', 'icon-edit'],
            'icon-eject' => ['eject', 'icon-eject'],
            'icon-ellipsis-h' => ['ellipsis-h', 'icon-ellipsis-h'],
            'icon-ellipsis-v' => ['ellipsis-v', 'icon-ellipsis-v'],
            'icon-empire' => ['empire', 'icon-empire'],
            'icon-envelope' => ['envelope', 'icon-envelope'],
            'icon-envelope-o' => ['envelope-o', 'icon-envelope-o'],
            'icon-envelope-square' => ['envelope-square', 'icon-envelope-square'],
            'icon-eraser' => ['eraser', 'icon-eraser'],
            'icon-eur' => ['eur', 'icon-eur'],
            'icon-euro' => ['euro', 'icon-euro'],
            'icon-exchange' => ['exchange', 'icon-exchange'],
            'icon-exclamation' => ['exclamation', 'icon-exclamation'],
            'icon-exclamation-circle' => ['exclamation-circle', 'icon-exclamation-circle'],
            'icon-exclamation-triangle' => ['exclamation-triangle', 'icon-exclamation-triangle'],
            'icon-expand' => ['expand', 'icon-expand'],
            'icon-external-link' => ['external-link', 'icon-external-link'],
            'icon-external-link-square' => ['external-link-square', 'icon-external-link-square'],
            'icon-eye' => ['eye', 'icon-eye'],
            'icon-eye-slash' => ['eye-slash', 'icon-eye-slash'],
            'icon-eyedropper' => ['eyedropper', 'icon-eyedropper'],
            'icon-facebook' => ['facebook', 'icon-facebook'],
            'icon-facebook-f' => ['facebook-f', 'icon-facebook-f'],
            'icon-facebook-official' => ['facebook-official', 'icon-facebook-official'],
            'icon-facebook-square' => ['facebook-square', 'icon-facebook-square'],
            'icon-fast-backward' => ['fast-backward', 'icon-fast-backward'],
            'icon-fast-forward' => ['fast-forward', 'icon-fast-forward'],
            'icon-fax' => ['fax', 'icon-fax'],
            'icon-female' => ['female', 'icon-female'],
            'icon-fighter-jet' => ['fighter-jet', 'icon-fighter-jet'],
            'icon-file' => ['file', 'icon-file'],
            'icon-file-archive-o' => ['file-archive-o', 'icon-file-archive-o'],
            'icon-file-audio-o' => ['file-audio-o', 'icon-file-audio-o'],
            'icon-file-code-o' => ['file-code-o', 'icon-file-code-o'],
            'icon-file-excel-o' => ['file-excel-o', 'icon-file-excel-o'],
            'icon-file-image-o' => ['file-image-o', 'icon-file-image-o'],
            'icon-file-movie-o' => ['file-movie-o', 'icon-file-movie-o'],
            'icon-file-o' => ['file-o', 'icon-file-o'],
            'icon-file-pdf-o' => ['file-pdf-o', 'icon-file-pdf-o'],
            'icon-file-photo-o' => ['file-photo-o', 'icon-file-photo-o'],
            'icon-file-picture-o' => ['file-picture-o', 'icon-file-picture-o'],
            'icon-file-powerpoint-o' => ['file-powerpoint-o', 'icon-file-powerpoint-o'],
            'icon-file-sound-o' => ['file-sound-o', 'icon-file-sound-o'],
            'icon-file-text' => ['file-text', 'icon-file-text'],
            'icon-file-text-o' => ['file-text-o', 'icon-file-text-o'],
            'icon-file-video-o' => ['file-video-o', 'icon-file-video-o'],
            'icon-file-word-o' => ['file-word-o', 'icon-file-word-o'],
            'icon-file-zip-o' => ['file-zip-o', 'icon-file-zip-o'],
            'icon-files-o' => ['files-o', 'icon-files-o'],
            'icon-film' => ['film', 'icon-film'],
            'icon-filter' => ['filter', 'icon-filter'],
            'icon-fire' => ['fire', 'icon-fire'],
            'icon-fire-extinguisher' => ['fire-extinguisher', 'icon-fire-extinguisher'],
            'icon-flag' => ['flag', 'icon-flag'],
            'icon-flag-checkered' => ['flag-checkered', 'icon-flag-checkered'],
            'icon-flag-o' => ['flag-o', 'icon-flag-o'],
            'icon-flash' => ['flash', 'icon-flash'],
            'icon-flask' => ['flask', 'icon-flask'],
            'icon-flickr' => ['flickr', 'icon-flickr'],
            'icon-floppy-o' => ['floppy-o', 'icon-floppy-o'],
            'icon-folder' => ['folder', 'icon-folder'],
            'icon-folder-o' => ['folder-o', 'icon-folder-o'],
            'icon-folder-open' => ['folder-open', 'icon-folder-open'],
            'icon-folder-open-o' => ['folder-open-o', 'icon-folder-open-o'],
            'icon-font' => ['font', 'icon-font'],
            'icon-forumbee' => ['forumbee', 'icon-forumbee'],
            'icon-forward' => ['forward', 'icon-forward'],
            'icon-foursquare' => ['foursquare', 'icon-foursquare'],
            'icon-frown-o' => ['frown-o', 'icon-frown-o'],
            'icon-futbol-o' => ['futbol-o', 'icon-futbol-o'],
            'icon-gamepad' => ['gamepad', 'icon-gamepad'],
            'icon-gavel' => ['gavel', 'icon-gavel'],
            'icon-gbp' => ['gbp', 'icon-gbp'],
            'icon-ge' => ['ge', 'icon-ge'],
            'icon-gear' => ['gear', 'icon-gear'],
            'icon-gears' => ['gears', 'icon-gears'],
            'icon-genderless' => ['genderless', 'icon-genderless'],
            'icon-gift' => ['gift', 'icon-gift'],
            'icon-git' => ['git', 'icon-git'],
            'icon-git-square' => ['git-square', 'icon-git-square'],
            'icon-github' => ['github', 'icon-github'],
            'icon-github-alt' => ['github-alt', 'icon-github-alt'],
            'icon-github-square' => ['github-square', 'icon-github-square'],
            'icon-gittip' => ['gittip', 'icon-gittip'],
            'icon-glass' => ['glass', 'icon-glass'],
            'icon-globe' => ['globe', 'icon-globe'],
            'icon-google' => ['google', 'icon-google'],
            'icon-google-plus' => ['google-plus', 'icon-google-plus'],
            'icon-google-plus-square' => ['google-plus-square', 'icon-google-plus-square'],
            'icon-google-wallet' => ['google-wallet', 'icon-google-wallet'],
            'icon-graduation-cap' => ['graduation-cap', 'icon-graduation-cap'],
            'icon-gratipay' => ['gratipay', 'icon-gratipay'],
            'icon-group' => ['group', 'icon-group'],
            'icon-h-square' => ['h-square', 'icon-h-square'],
            'icon-hacker-news' => ['hacker-news', 'icon-hacker-news'],
            'icon-hand-o-down' => ['hand-o-down', 'icon-hand-o-down'],
            'icon-hand-o-left' => ['hand-o-left', 'icon-hand-o-left'],
            'icon-hand-o-right' => ['hand-o-right', 'icon-hand-o-right'],
            'icon-hand-o-up' => ['hand-o-up', 'icon-hand-o-up'],
            'icon-hdd-o' => ['hdd-o', 'icon-hdd-o'],
            'icon-header' => ['header', 'icon-header'],
            'icon-headphones' => ['headphones', 'icon-headphones'],
            'icon-heart' => ['heart', 'icon-heart'],
            'icon-heart-o' => ['heart-o', 'icon-heart-o'],
            'icon-heartbeat' => ['heartbeat', 'icon-heartbeat'],
            'icon-history' => ['history', 'icon-history'],
            'icon-home' => ['home', 'icon-home'],
            'icon-hospital-o' => ['hospital-o', 'icon-hospital-o'],
            'icon-hotel' => ['hotel', 'icon-hotel'],
            'icon-html5' => ['html5', '|'],
            'icon-ils' => ['ils', 'icon-ils'],
            'icon-image' => ['image', 'icon-image'],
            'icon-inbox' => ['inbox', 'icon-inbox'],
            'icon-indent' => ['indent', 'icon-indent'],
            'icon-info' => ['info', 'icon-info'],
            'icon-info-circle' => ['info-circle', 'icon-info-circle'],
            'icon-inr' => ['inr', 'icon-inr'],
            'icon-instagram' => ['instagram', 'icon-instagram'],
            'icon-institution' => ['institution', 'icon-institution'],
            'icon-ioxhost' => ['ioxhost', 'icon-ioxhost'],
            'icon-italic' => ['italic', 'icon-italic'],
            'icon-joomla' => ['joomla', 'icon-joomla'],
            'icon-jpy' => ['jpy', 'icon-jpy'],
            'icon-jsfiddle' => ['jsfiddle', 'icon-jsfiddle'],
            'icon-key' => ['key', 'icon-key'],
            'icon-keyboard-o' => ['keyboard-o', 'icon-keyboard-o'],
            'icon-krw' => ['krw', 'icon-krw'],
            'icon-language' => ['language', 'icon-language'],
            'icon-laptop' => ['laptop', 'icon-laptop'],
            'icon-lastfm' => ['lastfm', 'icon-lastfm'],
            'icon-lastfm-square' => ['lastfm-square', 'icon-lastfm-square'],
            'icon-leaf' => ['leaf', 'icon-leaf'],
            'icon-leanpub' => ['leanpub', 'icon-leanpub'],
            'icon-legal' => ['legal', 'icon-legal'],
            'icon-lemon-o' => ['lemon-o', 'icon-lemon-o'],
            'icon-level-down' => ['level-down', 'icon-level-down'],
            'icon-level-up' => ['level-up', 'icon-level-up'],
            'icon-life-bouy' => ['life-bouy', 'icon-life-bouy'],
            'icon-lightbulb-o' => ['lightbulb-o', 'icon-lightbulb-o'],
            'icon-line-chart' => ['line-chart', 'icon-line-chart'],
            'icon-link' => ['link', 'icon-link'],
            'icon-linkedin' => ['linkedin', 'icon-linkedin'],
            'icon-linkedin-square' => ['linkedin-square', 'icon-linkedin-square'],
            'icon-linux' => ['linux', 'icon-linux'],
            'icon-list' => ['list', 'icon-list'],
            'icon-list-alt' => ['list-alt', 'icon-list-alt'],
            'icon-list-ol' => ['list-ol', 'icon-list-ol'],
            'icon-list-ul' => ['list-ul', 'icon-list-ul'],
            'icon-location-arrow' => ['location-arrow', 'icon-location-arrow'],
            'icon-lock' => ['lock', 'icon-lock'],
            'icon-long-arrow-down' => ['long-arrow-down', 'icon-long-arrow-down'],
            'icon-long-arrow-left' => ['long-arrow-left', 'icon-long-arrow-left'],
            'icon-long-arrow-right' => ['long-arrow-right', 'icon-long-arrow-right'],
            'icon-long-arrow-up' => ['long-arrow-up', 'icon-long-arrow-up'],
            'icon-magic' => ['magic', 'icon-magic'],
            'icon-magnet' => ['magnet', 'icon-magnet'],
            'icon-mail-forward' => ['mail-forward', 'icon-mail-forward'],
            'icon-mail-reply' => ['mail-reply', 'icon-mail-reply'],
            'icon-mail-reply-all' => ['mail-reply-all', 'icon-mail-reply-all'],
            'icon-male' => ['male', 'icon-male'],
            'icon-map-marker' => ['map-marker', 'icon-map-marker'],
            'icon-mars' => ['mars', 'icon-mars'],
            'icon-mars-double' => ['mars-double', 'icon-mars-double'],
            'icon-mars-stroke' => ['mars-stroke', 'icon-mars-stroke'],
            'icon-mars-stroke-h' => ['mars-stroke-h', 'icon-mars-stroke-h'],
            'icon-mars-stroke-v' => ['mars-stroke-v', 'icon-mars-stroke-v'],
            'icon-maxcdn' => ['maxcdn', 'icon-maxcdn'],
            'icon-meanpath' => ['meanpath', 'icon-meanpath'],
            'icon-medium' => ['medium', 'icon-medium'],
            'icon-medkit' => ['medkit', 'icon-medkit'],
            'icon-meh-o' => ['meh-o', 'icon-meh-o'],
            'icon-mercury' => ['mercury', 'icon-mercury'],
            'icon-microphone' => ['microphone', 'icon-microphone'],
            'icon-microphone-slash' => ['microphone-slash', 'icon-microphone-slash'],
            'icon-minus' => ['minus', 'icon-minus'],
            'icon-minus-circle' => ['minus-circle', 'icon-minus-circle'],
            'icon-minus-square' => ['minus-square', 'icon-minus-square'],
            'icon-minus-square-o' => ['minus-square-o', 'icon-minus-square-o'],
            'icon-mobile' => ['mobile', 'icon-mobile'],
            'icon-mobile-phone' => ['mobile-phone', 'icon-mobile-phone'],
            'icon-money' => ['money', 'icon-money'],
            'icon-moon-o' => ['moon-o', 'icon-moon-o'],
            'icon-mortar-board' => ['mortar-board', 'icon-mortar-board'],
            'icon-motorcycle' => ['motorcycle', 'icon-motorcycle'],
            'icon-music' => ['music', 'icon-music'],
            'icon-navicon' => ['navicon', 'icon-navicon'],
            'icon-neuter' => ['neuter', 'icon-neuter'],
            'icon-newspaper-o' => ['newspaper-o', 'icon-newspaper-o'],
            'icon-openid' => ['openid', 'icon-openid'],
            'icon-outdent' => ['outdent', 'icon-outdent'],
            'icon-pagelines' => ['pagelines', 'icon-pagelines'],
            'icon-paint-brush' => ['paint-brush', 'icon-paint-brush'],
            'icon-paper-plane' => ['paper-plane', 'icon-paper-plane'],
            'icon-paper-plane-o' => ['paper-plane-o', 'icon-paper-plane-o'],
            'icon-paperclip' => ['paperclip', 'icon-paperclip'],
            'icon-paragraph' => ['paragraph', 'icon-paragraph'],
            'icon-paste' => ['paste', 'icon-paste'],
            'icon-pause' => ['pause', 'icon-pause'],
            'icon-paw' => ['paw', 'icon-paw'],
            'icon-paypal' => ['paypal', 'icon-paypal'],
            'icon-pencil' => ['pencil', 'icon-pencil'],
            'icon-pencil-square' => ['pencil-square', 'icon-pencil-square'],
            'icon-pencil-square-o' => ['pencil-square-o', 'icon-pencil-square-o'],
            'icon-phone' => ['phone', 'icon-phone'],
            'icon-phone-square' => ['phone-square', 'icon-phone-square'],
            'icon-photo' => ['photo', 'icon-photo'],
            'icon-picture-o' => ['picture-o', 'icon-picture-o'],
            'icon-pie-chart' => ['pie-chart', 'icon-pie-chart'],
            'icon-pied-piper' => ['pied-piper', 'icon-pied-piper'],
            'icon-pied-piper-alt' => ['pied-piper-alt', 'icon-pied-piper-alt'],
            'icon-pinterest' => ['pinterest', 'icon-pinterest'],
            'icon-pinterest-p' => ['pinterest-p', 'icon-pinterest-p'],
            'icon-pinterest-square' => ['pinterest-square', 'icon-pinterest-square'],
            'icon-plane' => ['plane', 'icon-plane'],
            'icon-play' => ['play', 'icon-play'],
            'icon-play-circle' => ['play-circle', 'icon-play-circle'],
            'icon-play-circle-o' => ['play-circle-o', 'icon-play-circle-o'],
            'icon-plug' => ['plug', 'icon-plug'],
            'icon-plus' => ['plus', 'icon-plus'],
            'icon-plus-circle' => ['plus-circle', 'icon-plus-circle'],
            'icon-plus-square' => ['plus-square', 'icon-plus-square'],
            'icon-plus-square-o' => ['plus-square-o', 'icon-plus-square-o'],
            'icon-power-off' => ['power-off', 'icon-power-off'],
            'icon-print' => ['print', 'icon-print'],
            'icon-puzzle-piece' => ['puzzle-piece', 'icon-puzzle-piece'],
            'icon-qq' => ['qq', 'icon-qq'],
            'icon-qrcode' => ['qrcode', 'icon-qrcode'],
            'icon-question' => ['question', 'icon-question'],
            'icon-question-circle' => ['question-circle', 'icon-question-circle'],
            'icon-quote-left' => ['quote-left', 'icon-quote-left'],
            'icon-quote-right' => ['quote-right', 'icon-quote-right'],
            'icon-ra' => ['ra', 'icon-ra'],
            'icon-random' => ['random', 'icon-random'],
            'icon-rebel' => ['rebel', 'icon-rebel'],
            'icon-recycle' => ['recycle', 'icon-recycle'],
            'icon-reddit' => ['reddit', 'icon-reddit'],
            'icon-reddit-square' => ['reddit-square', 'icon-reddit-square'],
            'icon-refresh' => ['refresh', 'icon-refresh'],
            'icon-remove' => ['remove', 'icon-remove'],
            'icon-renren' => ['renren', 'icon-renren'],
            'icon-reorder' => ['reorder', 'icon-reorder'],
            'icon-repeat' => ['repeat', 'icon-repeat'],
            'icon-reply' => ['reply', 'icon-reply'],
            'icon-reply-all' => ['reply-all', 'icon-reply-all'],
            'icon-retweet' => ['retweet', 'icon-retweet'],
            'icon-rmb' => ['rmb', 'icon-rmb'],
            'icon-road' => ['road', 'icon-road'],
            'icon-rocket' => ['rocket', 'icon-rocket'],
            'icon-rotate-left' => ['rotate-left', 'icon-rotate-left'],
            'icon-rotate-right' => ['rotate-right', 'icon-rotate-right'],
            'icon-rouble' => ['rouble', 'icon-rouble'],
            'icon-rss' => ['rss', 'icon-rss'],
            'icon-rss-square' => ['rss-square', 'icon-rss-square'],
            'icon-rub' => ['rub', 'icon-rub'],
            'icon-ruble' => ['ruble', 'icon-ruble'],
            'icon-rupee' => ['rupee', 'icon-rupee'],
            'icon-save' => ['save', 'icon-save'],
            'icon-scissors' => ['scissors', 'icon-scissors'],
            'icon-search' => ['search', 'icon-search'],
            'icon-search-minus' => ['search-minus', 'icon-search-minus'],
            'icon-search-plus' => ['search-plus', 'icon-search-plus'],
            'icon-sellsy' => ['sellsy', 'icon-sellsy'],
            'icon-send' => ['send', 'icon-send'],
            'icon-send-o' => ['send-o', 'icon-send-o'],
            'icon-server' => ['server', 'icon-server'],
            'icon-share' => ['share', 'icon-share'],
            'icon-share-alt' => ['share-alt', 'icon-share-alt'],
            'icon-share-alt-square' => ['share-alt-square', 'icon-share-alt-square'],
            'icon-share-square' => ['share-square', 'icon-share-square'],
            'icon-share-square-o' => ['share-square-o', 'icon-share-square-o'],
            'icon-shekel' => ['shekel', 'icon-shekel'],
            'icon-sheqel' => ['sheqel', 'icon-sheqel'],
            'icon-shield' => ['shield', 'icon-shield'],
            'icon-ship' => ['ship', 'icon-ship'],
            'icon-shirtsinbulk' => ['shirtsinbulk', 'icon-shirtsinbulk'],
            'icon-shopping-cart' => ['shopping-cart', 'icon-shopping-cart'],
            'icon-sign-in' => ['sign-in', 'icon-sign-in'],
            'icon-sign-out' => ['sign-out', 'icon-sign-out'],
            'icon-signal' => ['signal', 'icon-signal'],
            'icon-simplybuilt' => ['simplybuilt', 'icon-simplybuilt'],
            'icon-sitemap' => ['sitemap', 'icon-sitemap'],
            'icon-skyatlas' => ['skyatlas', 'icon-skyatlas'],
            'icon-skype' => ['skype', 'icon-skype'],
            'icon-slack' => ['slack', 'icon-slack'],
            'icon-sliders' => ['sliders', 'icon-sliders'],
            'icon-slideshare' => ['slideshare', 'icon-slideshare'],
            'icon-smile-o' => ['smile-o', 'icon-smile-o'],
            'icon-soccer-ball-o' => ['soccer-ball-o', 'icon-soccer-ball-o'],
            'icon-sort' => ['sort', 'icon-sort'],
            'icon-sort-alpha-asc' => ['sort-alpha-asc', 'icon-sort-alpha-asc'],
            'icon-sort-alpha-desc' => ['sort-alpha-desc', 'icon-sort-alpha-desc'],
            'icon-sort-amount-asc' => ['sort-amount-asc', 'icon-sort-amount-asc'],
            'icon-sort-amount-desc' => ['sort-amount-desc', 'icon-sort-amount-desc'],
            'icon-sort-asc' => ['sort-asc', 'icon-sort-asc'],
            'icon-sort-desc' => ['sort-desc', 'icon-sort-desc'],
            'icon-sort-down' => ['sort-down', 'icon-sort-down'],
            'icon-sort-numeric-asc' => ['sort-numeric-asc', 'icon-sort-numeric-asc'],
            'icon-sort-numeric-desc' => ['sort-numeric-desc', 'icon-sort-numeric-desc'],
            'icon-sort-up' => ['sort-up', 'icon-sort-up'],
            'icon-soundcloud' => ['soundcloud', 'icon-soundcloud'],
            'icon-space-shuttle' => ['space-shuttle', 'icon-space-shuttle'],
            'icon-spinner' => ['spinner', 'icon-spinner'],
            'icon-spoon' => ['spoon', 'icon-spoon'],
            'icon-spotify' => ['spotify', 'icon-spotify'],
            'icon-square' => ['square', 'icon-square'],
            'icon-square-o' => ['square-o', 'icon-square-o'],
            'icon-stack-exchange' => ['stack-exchange', 'icon-stack-exchange'],
            'icon-stack-overflow' => ['stack-overflow', 'icon-stack-overflow'],
            'icon-star' => ['star', 'icon-star'],
            'icon-star-half' => ['star-half', 'icon-star-half'],
            'icon-star-half-empty' => ['star-half-empty', 'icon-star-half-empty'],
            'icon-star-half-full' => ['star-half-full', 'icon-star-half-full'],
            'icon-star-half-o' => ['star-half-o', 'icon-star-half-o'],
            'icon-star-o' => ['star-o', 'icon-star-o'],
            'icon-steam' => ['steam', 'icon-steam'],
            'icon-steam-square' => ['steam-square', 'icon-steam-square'],
            'icon-step-backward' => ['step-backward', 'icon-step-backward'],
            'icon-step-forward' => ['step-forward', 'icon-step-forward'],
            'icon-stethoscope' => ['stethoscope', 'icon-stethoscope'],
            'icon-stop' => ['stop', 'icon-stop'],
            'icon-street-view' => ['street-view', 'icon-street-view'],
            'icon-strikethrough' => ['strikethrough', 'icon-strikethrough'],
            'icon-stumbleupon' => ['stumbleupon', 'icon-stumbleupon'],
            'icon-stumbleupon-circle' => ['stumbleupon-circle', 'icon-stumbleupon-circle'],
            'icon-subscript' => ['subscript', 'icon-subscript'],
            'icon-subway' => ['subway', 'icon-subway'],
            'icon-suitcase' => ['suitcase', 'icon-suitcase'],
            'icon-sun-o' => ['sun-o', 'icon-sun-o'],
            'icon-superscript' => ['superscript', 'icon-superscript'],
            'icon-support' => ['support', 'icon-support'],
            'icon-table' => ['table', 'icon-table'],
            'icon-tablet' => ['tablet', 'icon-tablet'],
            'icon-tachometer' => ['tachometer', 'icon-tachometer'],
            'icon-tag' => ['tag', 'icon-tag'],
            'icon-tags' => ['tags', 'icon-tags'],
            'icon-tasks' => ['tasks', 'icon-tasks'],
            'icon-taxi' => ['taxi', 'icon-taxi'],
            'icon-tencent-weibo' => ['tencent-weibo', 'icon-tencent-weibo'],
            'icon-terminal' => ['terminal', 'icon-terminal'],
            'icon-text-height' => ['text-height', 'icon-text-height'],
            'icon-text-width' => ['text-width', 'icon-text-width'],
            'icon-th' => ['th', 'icon-th'],
            'icon-th-large' => ['th-large', 'icon-th-large'],
            'icon-th-list' => ['th-list', 'icon-th-list'],
            'icon-thumb-tack' => ['thumb-tack', 'icon-thumb-tack'],
            'icon-thumbs-down' => ['thumbs-down', 'icon-thumbs-down'],
            'icon-thumbs-o-down' => ['thumbs-o-down', 'icon-thumbs-o-down'],
            'icon-thumbs-o-up' => ['thumbs-o-up', 'icon-thumbs-o-up'],
            'icon-thumbs-up' => ['thumbs-up', 'icon-thumbs-up'],
            'icon-ticket' => ['ticket', 'icon-ticket'],
            'icon-times' => ['times', 'icon-times'],
            'icon-times-circle' => ['times-circle', 'icon-times-circle'],
            'icon-times-circle-o' => ['times-circle-o', 'icon-times-circle-o'],
            'icon-tint' => ['tint', 'icon-tint'],
            'icon-toggle-down' => ['toggle-down', 'icon-toggle-down'],
            'icon-toggle-left' => ['toggle-left', 'icon-toggle-left'],
            'icon-toggle-off' => ['toggle-off', 'icon-toggle-off'],
            'icon-toggle-on' => ['toggle-on', 'icon-toggle-on'],
            'icon-toggle-right' => ['toggle-right', 'icon-toggle-right'],
            'icon-toggle-up' => ['toggle-up', 'icon-toggle-up'],
            'icon-train' => ['train', 'icon-train'],
            'icon-transgender' => ['transgender', 'icon-transgender'],
            'icon-transgender-alt' => ['transgender-alt', 'icon-transgender-alt'],
            'icon-trash' => ['trash', 'icon-trash'],
            'icon-trash-o' => ['trash-o', 'icon-trash-o'],
            'icon-tree' => ['tree', 'icon-tree'],
            'icon-trello' => ['trello', 'icon-trello'],
            'icon-trophy' => ['trophy', 'icon-trophy'],
            'icon-truck' => ['truck', 'icon-truck'],
            'icon-try' => ['try', 'icon-try'],
            'icon-tty' => ['tty', 'icon-tty'],
            'icon-tumblr' => ['tumblr', 'icon-tumblr'],
            'icon-tumblr-square' => ['tumblr-square', 'icon-tumblr-square'],
            'icon-turkish-lira' => ['turkish-lira', 'icon-turkish-lira'],
            'icon-twitch' => ['twitch', 'icon-twitch'],
            'icon-twitter' => ['twitter', 'icon-twitter'],
            'icon-twitter-square' => ['twitter-square', 'icon-twitter-square'],
            'icon-umbrella' => ['umbrella', 'icon-umbrella'],
            'icon-underline' => ['underline', 'icon-underline'],
            'icon-undo' => ['undo', 'icon-undo'],
            'icon-university' => ['university', 'icon-university'],
            'icon-unlink' => ['unlink', 'icon-unlink'],
            'icon-unlock' => ['unlock', 'icon-unlock'],
            'icon-unlock-alt' => ['unlock-alt', 'icon-unlock-alt'],
            'icon-unsorted' => ['unsorted', 'icon-unsorted'],
            'icon-upload' => ['upload', 'icon-upload'],
            'icon-usd' => ['usd', 'icon-usd'],
            'icon-user' => ['user', 'icon-user'],
            'icon-user-md' => ['user-md', 'icon-user-md'],
            'icon-user-plus' => ['user-plus', 'icon-user-plus'],
            'icon-user-secret' => ['user-secret', 'icon-user-secret'],
            'icon-user-times' => ['user-times', 'icon-user-times'],
            'icon-users' => ['users', 'icon-users'],
            'icon-venus' => ['venus', 'icon-venus'],
            'icon-venus-double' => ['venus-double', 'icon-venus-double'],
            'icon-venus-mars' => ['venus-mars', 'icon-venus-mars'],
            'icon-viacoin' => ['viacoin', 'icon-viacoin'],
            'icon-video-camera' => ['video-camera', 'icon-video-camera'],
            'icon-vimeo-square' => ['vimeo-square', 'icon-vimeo-square'],
            'icon-vine' => ['vine', 'icon-vine'],
            'icon-vk' => ['vk', 'icon-vk'],
            'icon-volume-down' => ['volume-down', 'icon-volume-down'],
            'icon-volume-off' => ['volume-off', 'icon-volume-off'],
            'icon-volume-up' => ['volume-up', 'icon-volume-up'],
            'icon-warning' => ['warning', 'icon-warning'],
            'icon-wechat' => ['wechat', 'icon-wechat'],
            'icon-weibo' => ['weibo', 'icon-weibo'],
            'icon-weixin' => ['weixin', 'icon-weixin'],
            'icon-whatsapp' => ['whatsapp', 'icon-whatsapp'],
            'icon-wheelchair' => ['wheelchair', 'icon-wheelchair'],
            'icon-wifi' => ['wifi', 'icon-wifi'],
            'icon-windows' => ['windows', 'icon-windows'],
            'icon-won' => ['won', 'icon-won'],
            'icon-wordpress' => ['wordpress', 'icon-wordpress'],
            'icon-wrench' => ['wrench', 'icon-wrench'],
            'icon-xing' => ['xing', 'icon-xing'],
            'icon-xing-square' => ['xing-square', 'icon-xing-square'],
            'icon-yahoo' => ['yahoo', 'icon-yahoo'],
            'icon-yelp' => ['yelp', 'icon-yelp'],
            'icon-yen' => ['yen', 'icon-yen'],
            'icon-youtube' => ['youtube', 'icon-youtube'],
            'icon-youtube-play' => ['youtube-play', 'icon-youtube-play'],
            'icon-youtube-square' => ['youtube-square', 'icon-youtube-square']
        ];
    }
}
