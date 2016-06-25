<h1> Produtos </h1>

<ul>
    @foreach($product as $product)
        <li>{{$product->name}}, {{$product->description}}</li>
    @endforeach
</ul>
