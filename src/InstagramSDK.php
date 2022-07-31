<?php

namespace phpsdks;

define(API_VERSION, 'v14.0');
define(API_URL, 'https://graph.facebook.com/');

class InstagramSDK{


    public static function getRedirectUrl($app_id, $permissions, $callback, $status = "foo")
    {
        $permissions = implode(",", $permissions);
        return "https://www.facebook.com/dialog/oauth?client_id=$app_id&response_type=code&redirect_uri=$callback&scope=$permissions&status=$status";
    }

    public static function exchangeCodeForAccessData($code, $app_id, $app_secret, $callback)
    {

    }

    public static function getAllAccounts($access_token)
    {

    }

    private static function getAllPages($access_token)
    {

    }

    private static function getAllAccountsLinkedToPage($page_id, $page_access_token)
    {

    }

    public static function getAccountDetails($account_id, $access_token)
    {

    }

    public static function postImage($caption, $image_url, $account_id, $access_token)
    {

    }

    public static function postVideo($caption, $video_url, $account_id, $access_token)
    {

    }

    public static function postReel($caption, $video_url, $account_id, $access_token)
    {

    }

    public static function postSlide($caption, $media_urls_list, $account_id, $access_token)
    {

    }

    public static function getPostInsights($post_id, $access_token)
    {

    }

    public static function commentOnPost($message, $post_id, $access_token)
    {

    }



}
?>