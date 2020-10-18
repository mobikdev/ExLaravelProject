<h1>Users page</h1>
{{10+10}}

<h1>Count={{count($u)}}</h1>
@if($n=="bruce")
<h1>hello {{$n}}</h1>
@elseif($n=="sam")
<h1>hello {{$n}}<h1>
@else
<h1>Hi</h1>
@endif


@for($i=0;$i<10;$i++)
<span>{{$i}}</span>
@endfor


@foreach($u as $x)
<h1>{{$x}}</h1>
@endforeach
