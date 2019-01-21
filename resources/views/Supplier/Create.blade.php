<form method="POST" action="/Supplier">
{{csrf_field()}}
<label for="txt_name">Name</label>
<input type="text" name="txt_name" id="txt_id"/><br/>
<label for="txt_addres">Address</label>
<input type="text" name="txt_addres" id="txt_id"/><br/>
<input type="submit" name="sbm_save" id="sbm_save" value="Save"/>
</Form>