<!-- item-->
<a href="{{route('user.show',Auth::user()->id)}}" class="dropdown-item notify-item">
    <i {{$attributes->merge(['class' => ''])}}></i>
    <span>{{$itemName}}</span>
</a>
