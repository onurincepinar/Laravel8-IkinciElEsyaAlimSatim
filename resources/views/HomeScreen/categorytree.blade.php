@foreach($children as $subcategory)
    <ul class="list-links">
        @if(count($subcategory->children))
            <li style="color: #9a2b2b">{{$subcategory->title}}</li>
            <ul class="list-links">
                @include('HomeScreen.categorytree',['children'=>$subcategory->$children])
            </ul>
            <hr>
        @else
            <li>
                <a href="{{route('category',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}"> {{$subcategory->title}} </a>
            </li>
        @endif
    </ul>
@endforeach



