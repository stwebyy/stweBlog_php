<?php

namespace App\Service;

class QiitaApiService
{
    /**
     * @var string
     */
    protected $qiita_token;

    /**
     * construct
     * 
     * @return void
     */
    public function __construct()
    {
        $this->qiita_token = env('QIITA_API_KEY');
    }

    /**
     * cURLの設定、実行
     * 
     * @param string 対象URL
     * @param string HTTPメソッド
     * 
     * @return json APIから取得したjson
     */
    public function execCurlToQiitaApi($url, $method)
    {
        $ch = curl_init();
        $option = [
            CURLOPT_URL => env('QIITA_BASE_URL') . $url,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => [
              'Authorization: Bearer ' . $this->qiita_token,
              'Content-Type: application/json',
            ],
        ];
        curl_setopt_array($ch, $option);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result);
    }

    /**
     * Qiitaから自分の記事一覧を取得する
     * 
     * @return json
     */
    public function fetchQiitaArticleByApi()
    {
        $url = 'authenticated_user/items';

        return $this->execCurlToQiitaApi($url, 'GET');
    }
}