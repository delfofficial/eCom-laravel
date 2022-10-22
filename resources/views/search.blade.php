
    @extends('master');
    @section("content")
    <div class="container custom-product">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach ($products as $item)
            <div class="trending-item">
                <a href="detail/{{$item['id']}}">
                <img class="trending-img" src="{{$item['gallery']}}" alt="Chania">
                <div class="">
                  <h3>{{$item['name']}}</h3>
                  <h5>{{$item['description']}}</h5>
                </div>
                </a>
            </div>

            @endforeach
          </div>



    </div>
    @endsection
<!--
   <img src="https://cdn.vectorstock.com/i/1000x1000/76/10/red-fridge-vector-9487610.webp" alt="channy">
    <img src="https://www.vectorstock.com/royalty-free-vector/red-fridge-vector-9487610" alt="">
-->

