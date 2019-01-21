
							<table border='1'>
								<thead>
									<tr>
										<th>Name</th>
										<th>Address</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($Supplier as $supplier): ?>
									<tr>
										<td width="150">
											<?php echo $supplier->Supplier_name ?>
										</td>
										<td>
											<?php echo $supplier->Supplier_address ?>
										</td>
										<td>
										<a href="http://localhost:8000/Supplier/{{$supplier->Supplier_id}}/edit"><button >Edit</button></a>
										</td>
										<td>
										<form method="POST" action="{{ route('Supplier.update', $supplier->Supplier_id) }}">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<input type="submit" name="delete" id="delete" value="hapus"/>
										</Form>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
							<a href="http://localhost:8000/Supplier/create"><button >Tambah</button></a>