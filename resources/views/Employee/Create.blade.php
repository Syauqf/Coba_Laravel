<form method="POST" action="/Employee">
{{csrf_field()}}
<label for="txt_name">Name</label>
<input type="text" name="txt_name" id="txt_id"/><br/>
<label for="txt_address">Address</label>
<input type="text" name="txt_address" id="txt_id"/><br/>
<label for="txt_phone">Phone</label>
<input type="text" name="txt_phone" id="txt_id"/><br/>
<input type="submit" name="sbm_save" id="sbm_save" value="Save"/>
</Form>