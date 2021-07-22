<li>
    <a href="#{{$name}}" data-toggle="collapse">
        <i data-feather="{{$symbol}}"></i>
        <span> {{$name}} </span>
        <span class="{{$collapseSymbol}}"></span>
    </a>
    <div class="collapse" id="{{$name}}">
        <ul class="nav-second-level">
            {{$slot}}
        </ul>
    </div>
</li>
