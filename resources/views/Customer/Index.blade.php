
							<table border='1' >
								<thead>
									<tr>
										<th>Name</th>
										<th>Address</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($Customer as $customer): ?>
									<tr>
										<td width="150">
											<?php echo $customer->name ?>
										</td>
										<td>
											<?php echo $customer->addres ?>
										</td>
										<td>
										<a href="http://localhost:8000/Customer/{{$customer->customer_id}}/edit"><button >Edit</button></a>
										</td>
										<td>
										<form method="POST" action="{{ route('Customer.update', $customer->customer_id) }}">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<input type="submit" name="delete" id="delete" value="hapus"/>
										</Form>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
							<a href="http://localhost:8000/Customer/create"><button >Tambah</button></a>
						