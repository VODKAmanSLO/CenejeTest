<div class="container">
    <div>
        <form action="./upload/store">
            <button>Add/Update shops</button>
        </form>
    </div>
    <div>
        <select name="filter">
            <option name="slo">Slovenia</option>
            <option name="cro">Croatia</option>
            <option name="all">All Countries</option>
        </select>
    </div>
    <div>
        @foreach($shops as $shop)
            <div style="padding: 10px; margin: 5px; border: #333 solid 1px;">
                <div>
                    <strong>{{ $shop->name }}</strong>
                    <div style="justify-content: space-between">
                        {{ $shop->country->country }}
                    </div>
                </div>
                <div>
                    image
                    {{ $shop->rating }}
                    <button>More</button>
                </div>
            </div>
        @endforeach
    </div>

</div>
