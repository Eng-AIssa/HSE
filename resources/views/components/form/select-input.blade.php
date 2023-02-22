<div {{ $attributes->merge(['class' =>'form-group mb-3'])}} >
    <label for="example-date">{{$label}}</label>
    <select class="custom-select ">
        {{$slot}}
    </select>
</div>
