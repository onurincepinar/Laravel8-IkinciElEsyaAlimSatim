<div>

    <input wire:model="search" class="plh3" type="text" name="search" list="mylist" placeholder="Search...">

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
