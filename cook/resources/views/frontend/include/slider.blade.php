
<!-- shopping cart/ slider  -->


<section class="home">

    <div class="slides-container">

        @forelse ($products as $item)

            <div class="slide active">
                <div class="content">
                    <span> {{ $item->category->name }} </span>
                    <h3>{{ $item->product_name }}</h3>
                    <p>{{ $item->product_des }}</p>
                    <a href="#" class="btn">View</a>
                </div>
                <div class="image">
                    <img src="web-style/image/a.png" alt="">
                </div>
            </div>


            @empty

            nothing to found

        @endforelse



    </div>

    <div id="slide-next" onclick="next()" class="fas fa-angle-right"></div>
    <div id="slide-prev" onclick="prev()" class="fas fa-angle-left"></div>

</section>


