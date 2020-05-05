@extends ('layouts.master')

@section ('head.title')
List House
@stop
@section('body.content')
<div class="container">
    <br>
    <h2>Home selling</h2>
    <hr>
    <div class="row">
        @foreach($apartments as $item)
        <div style="border: 1px solid; margin: 0px 25px 25px 25px; background-color: #ECECEC;" class="col-sm-3">
            <img style="height:120px; width: 100%; margin-top: 5px;" src="{{ $item->image}}">
            <ul>
                <li><strong>Name</strong> : {{$item->name}}</li>
                <li><strong>Address</strong> : {{$item->address}}</li>
                <li><strong>Price</strong>: {{$item->price}} vnd</li>
                <li><strong>Information</strong>: {{$item->infomation}}</li>
                <li><strong>Details</strong>: {{$item->details}}</li>
            </ul>
        </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            {!! $apartments->render() !!}
        </div>
    </div>
</div>

@stop