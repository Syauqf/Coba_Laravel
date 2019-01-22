@foreach($Employee as $Employee)
<form action="{{ route('Employee.update', $Employee->employee_id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
<label for="txt_name">Name</label>
<input type="text" name="txt_name" id="txt_id" value="{{$Employee->employee_name}}"/><br/>
<label for="txt_addres">Address</label>
<input type="text" name="txt_address" id="txt_id" value="{{$Employee->employee_address}}"/><br/>
<label for="txt_phone">Phone</label>
<input type="text" name="txt_phone" id="txt_id" value="{{$Employee->employee_phone_number}}"/><br/>
<input type="submit" name="sbm_save" id="sbm_save" value="Save"/>
</Form>
@endforeach