@props(['active'=>false])
{{-- Props houdt in dat je bepaalde attributes uit kan sluiten die je NIET WILT--}}
<a {{$attributes}} class="{{ $active ? 'active': "noActive" }}">{{$slot}}</a>

