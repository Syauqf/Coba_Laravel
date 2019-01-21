@foreach($Customer as $customer)
<form action="{{ route('Customer.update', $customer->customer_id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
<label for="txt_name">Name</label>
<input type="text" name="txt_name" id="txt_id" value="{{$customer->name}}"/><br/>
<label for="txt_addres">Address</label>
<input type="text" name="txt_addres" id="txt_id" value="{{$customer->addres}}"/><br/>
<input type="submit" name="sbm_save" id="sbm_save" value="Save"/>
</Form>
@endforeach