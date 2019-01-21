@foreach($Supplier as $Supplier)
<form action="{{ route('Supplier.update', $Supplier->Supplier_id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
<label for="txt_name">Name</label>
<input type="text" name="txt_name" id="txt_id" value="{{$Supplier->Supplier_name}}"/><br/>
<label for="txt_addres">Address</label>
<input type="text" name="txt_address" id="txt_id" value="{{$Supplier->Supplier_address}}"/><br/>
<input type="submit" name="sbm_save" id="sbm_save" value="Save"/>
</Form>
@endforeach