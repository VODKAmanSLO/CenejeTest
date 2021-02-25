<div class="container">
    <div><a href="#" ></a> </div>
    <div>
        @foreach($shops as $shop)
            <div>{{ $shop->name }} {{ $shop->rating }}</div>
        @endforeach
    </div>

</div>
