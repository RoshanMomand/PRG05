@props(['active'=>false,'type'=>'a'])

@if($type === 'a')
    <a class="{{ $active ? 'underline underline-offset-2 px-4': 'px-0'}}" {{$attributes}} >{{$slot}}</a>
@else
    <button class="{{ $active ? 'underline underline-offset-2 px-4': 'px-0'}}" {{$attributes}} >{{$slot}}</button>
@endif
