<?php
/**
 * @var $name
 */
?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
</head>
<body>
<h1>
<!--?//= isset($greeting) ? "$greeting" : "Hello Laravel"; ?-->
  {{$greeting or 'Helo Laravel'}}
</h1>
<h2>
  <!--?= $name; ?-->
  {{$name}}
</h2>

<h2>Blade if</h2>
@if($itemCount = count($items))
  <p>{{$itemCount}} items found</p>
@else
  <p>no items</p>
@endif

<h2>Blade foreach</h2>
@foreach($items as $item)
  <li>{{$item}}</li>
@endforeach
</body>
</html>
