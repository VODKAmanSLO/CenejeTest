<div class="container">
    <div>
        <form action="./upload/store">
            <button>Add/Update shops</button>
        </form>
    </div>

    <dropdown-filter></dropdown-filter>
    <div>
        @foreach($shops as $shop)
            <div style="padding: 10px; margin: 5px; border: #333 solid 1px;">
                <strong>{{ $shop->name }}</strong>
                <div>
                    {{ $shop->country->country }}
                </div>
                <div>
                    <img style="max-width: 30px;"
                         src="https://www.nomadfoods.com/wp-content/uploads/2018/08/placeholder-1-e1533569576673.png">
                    {{ $shop->rating }}
                    <button>More</button>
                </div>
            </div>
    </div>
    @endforeach
</div>
<script src="./js/app.js"></script>
