@extends('HomeScreen.master') @section('title',$setting->title) 
@section('script')
<script>
$('.btn-num-product-down').on('click', function(){
	var numProduct = Number($(this).next().val());
	if(numProduct > 0) $(this).next().val(numProduct - 1);
});

$('.btn-num-product-up').on('click', function(){
	var numProduct = Number($(this).prev().val());
	console.log(numProduct)
	$(this).prev().val(numProduct + 1);
});
</script>
@endsection
@section('description',$setting->description) @section('keywords',$setting->keywords) @section('content') 

<form class="bg0 p-t-125 p-b-85" action="{{route('checkout')}}" method="post">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
				<div class="m-l-25 m-r--38 m-lr-0-xl">
					<div class="wrap-table-shopping-cart">
						<table class="table-shopping-cart">
							<tbody><tr class="table_head">
								<th class="column-1">Product</th>
								<th class="column-2"></th>
								<th class="column-3">Price</th>
								<th class="column-4">Quantity</th>
								<th class="column-5">Total</th>
							</tr>

							@foreach ($products as $item)
							<tr class="table_row">
								<td class="column-1">
									<div class="how-itemcart1">
										<img src="{{ Storage::url($item->product->image) }}" alt="IMG">
									</div>
								</td>
								<td class="column-2">{{$item->product->title}}</td>
								<td class="column-3">{{ $item->product->price }}</td>
								<td class="column-4">
									<div class="wrap-num-product flex-w m-l-auto m-r-0">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>
										<input class="mtext-104 cl3 txt-center num-product" type="number" value="{{$item->quantity}}">
										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>
								</td>
								<td class="column-5">{{ $item->product->price*$item->quantity }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
				<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
					<h4 class="mtext-109 cl2">
						Cart Totals
					</h4>
					<div class="flex-w flex-t bor12 p-t-15 p-b-30">

						<div style="width:100%" class="p-r-18 p-r-0-sm w-full-ssm">					
							<div class="p-t-15">
								<span class="stext-112 cl8">
									Order Detail
								</span>
								<div class="bor8 bg0 m-b-12">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="name" placeholder="name">
								</div>
								<div class="bor8 bg0 m-b-12">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="email" placeholder="email">
								</div>
								<div class="bor8 bg0 m-b-12">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="address">
								</div>
								<div class="bor8 bg0 m-b-12">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="phone" placeholder="phone">
								</div>
								<div class="bor8 bg0 m-b-12">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="note" placeholder="note">
								</div>


								<div class="bor8 bg0 m-b-12">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="cart" placeholder="cart number">
								</div>

								<div class="bor8 bg0 m-b-12">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="cvv" placeholder="cvv">
								</div>

								<div class="bor8 bg0 m-b-12">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="dates" placeholder="valid dates">
								</div>
							</div>
						</div>
					</div>

					<div class="flex-w flex-t p-t-27 p-b-33">
						<div class="size-208">
							<span class="mtext-101 cl2">
								Total:
							</span>
						</div>

						<div class="size-209 p-t-1">
							<span class="mtext-110 cl2">
								{{$total}}
							</span>
						</div>
					</div>

					<button type="submit" name="checkout" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						Proceed to Checkout
					</button>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection