<li>
    <a href="#{{$Name}}" data-toggle="collapse">
        {{$Name}}
        <span class="{{$collapseSymbol}}"></span>
    </a>
    <div class="collapse" id="{{$Name}}">
        <ul class="nav-second-level">
            {{$slot}}
        </ul>
    </div>
</li>
