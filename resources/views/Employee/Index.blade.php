
							<table border='1'>
								<thead>
									<tr>
										<th>Name</th>
										<th>Address</th>
                                        <th>Phone</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($Employee as $Employee): ?>
									<tr>
										<td width="150">
											<?php echo $Employee->employee_name ?>
										</td>
										<td>
											<?php echo $Employee->employee_address ?>
										</td>
                                        <td>
											<?php echo $Employee->employee_phone_number ?>
										</td>
										<td>
										<a href="http://localhost:8000/Employee/{{$Employee->employee_id}}/edit"><button >Edit</button></a>
										</td>
										<td>
										<form method="POST" action="{{ route('Employee.update', $Employee->employee_id) }}">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<input type="submit" name="delete" id="delete" value="hapus"/>
										</Form>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
							<a href="http://localhost:8000/Employee/create"><button >Tambah</button></a>