@php
    $name = "mina";
    $arr = ["mina", "taro", "hanako"];
    $active = false;
@endphp
@foreach ($arr as $item)
    {!! $item . "<br>" !!}
@endforeach

<h1>Test page</h1>
<p><b>Name:</b> {{$name}}</p>
<p><b>Active:</b> {{ $active ? "Active" : "Inactive" }}</p>