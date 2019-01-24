								@extends('home')
								@section('isi')
									<?php foreach ($Customer as $customer): ?>
									<tr>
										<td width="150">
											<?php echo $customer->Customer_name ?>
										</td>
										<td>
											<?php echo $customer->Customer_address ?>
										</td>
										<td>
										<a href="http://localhost:8000/Customer/{{$customer->Customer_id}}/edit"><button >Edit</button></a>
										</td>
										<td>
										<form method="POST" action="{{ route('Customer.update', $customer->Customer_id) }}">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<input type="submit" name="delete" id="delete" value="hapus"/>
										</Form>
										</td>
									</tr>
									<?php endforeach; ?>
								@endsection
								@section('tambah')
								<a href="http://localhost:8000/Customer/create"><button >Tambah</button></a>
								@endsection
								
							
							
							
				