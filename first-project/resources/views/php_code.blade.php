{{-- data comming from controller --}}

<h1>data comming from controller</h1>
{{ "a:$a \n b:$b \n array:arr" }}

<br>
{{-- if condition  --}}
@if ($a > $b)
    {{ "$a is greater than $b" }}
@elseif($b > $a)
    {{ "$a is leass than $b " }}
@endif

<br>
<h1>length of array</h1>
{{ count($arr) }}

<br>
<h1>for loop</h1>
{{-- for loop  --}}
@php
    $len = count($arr);
@endphp
@for ($i = 0; $i < $len; $i++)
    <h5> {{ $arr[$i] }}</h5>
@endfor


<br>
<h1>for each loop</h1>
{{-- for each loop  --}}
@foreach ($arr as $value)
    <h5>{{ $value }}</h5>
@endforeach
