@extends('layout')

@section('title','API test')


@section('content')

    <?php

    $option = new AlphaVantage\Options();
    $option->setApiKey('TPTOTMJP6XSHW9W3');
    $client = new AlphaVantage\Client($option);
    var_dump($client->foreignExchange()->currencyExchangeRate('BTC', 'CNY'));

    ?>

@endsection




