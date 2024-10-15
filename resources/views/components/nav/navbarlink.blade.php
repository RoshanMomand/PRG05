@props(['active'])
{{-- Props houdt in dat je bepaalde attributes uit kan sluiten die je NIET WILT--}}
<a {{$attributes}} >{{$slot}}</a>

