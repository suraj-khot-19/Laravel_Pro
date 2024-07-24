<p> Welcome Page </p>
<a href="/about">About Page</a></br>
<a href="/contact">Contact Page</a>

{{-- this is comment in blade --}}

{{-- do not include $ here with variable --}}
<x-DemoComponent arg="This is argument passing here in Welcome Page" />

{{-- using php in blade --}}
{{-- 1. operations --}}
10+2 {{--  not work --}}

{{ 10 + 2 }} {{-- 12 --}}

@php
    echo 10 + 2; //12
@endphp

<?php
echo 10 + 2; //12
?>

{{-- if condition --}}

<?php
$a = 10;
$b = 20;
if ($a > $b) {
    echo "$a>$b";
} elseif ($b > $a) {
    echo "$b>$a";
} else {
    echo "$a==$b";
}
?>

@if ($a > $b)
    {{ "$a>$b" }}
@elseif ($b > $a)
    {{ "$b>$a" }}
@else
    {{ "$a==$b" }}
@endif
