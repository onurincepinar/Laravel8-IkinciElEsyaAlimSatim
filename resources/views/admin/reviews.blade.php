@extends('layouts.admin') @section('title','Product Panel') @section('content') <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Products</h4>
              <p class="card-description"></p>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Product List</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Id </th>
                          <th> Product </th>
                          <th> Subject </th>
                          <th> Review </th>
                          <th> Status </th>
                          <th> Date </th>
                          <th> Delete </th>
                        </tr>
                      </thead>
                      <tbody> @foreach($reviews as $key=>$rs) <tr class="table table-bordered">
                          <td>
                            {{$key+1}}
                          </td>
                          <td>
                            <a href="{{ route('product_detail',$rs->product->id)}}">{{$rs->product->title}}</a>
                          </td>
                          <td>
                            {{$rs->subject}}
                          </td>
                          <td>
                            @if (Str::of($rs->review)->length() >=10)
                            {{ Str::substr($rs->review, 0, 10) }}...
                            @else 
                            {{ $rs->review }}
                            @endif 
                          </td>
                          <td>
                             @if ($rs->status == "New")
                             <a class="text-danger" href="{{ route('status',[$rs->id,'enable']) }}">Disable</a>
                             @else
                             <a class="text-success" href="{{ route('status',[$rs->id,'disable']) }}">Enable</a>
                             @endif
                          </td>
                          <td>
                              {{ $rs->updated_at }}
                          </td>
                          <td>
                            <a href="{{ route('review_delete',$rs->id) }}" onclick="return confirm('Are you sure?')"> Delete </a>
                          </td>
                        </tr> @endforeach </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="template-demo"></div>
            </div>
          </div>
        </div>
      </div>
    </div> @endsection