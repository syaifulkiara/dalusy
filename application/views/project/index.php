<h3 class="modal-title" id="exampleModalLabel" style="color: firebrick; font-family: Impact"><img src="<?php echo base_url('assets/img/work.png')?>" width="40px" class="img-responsive" />   Add / Edit Project</h3>

<table width="100%" id="modal_table" border="0">
	<tr>
		<td width="40%">				
			<table width="100%" border="0">
				<tr>
					<th>Project No</th>
					<td>:</td>
					<td><input id="iproj_no" type="test" class="input-group-text alert-default" style="width: 100%" value=""></td>
					<td style="display: none" id="iid_proj" value=""></td>
				</tr>
				<tr>
					<th>Customer</th>
					<td>:</td>
					<td>
						<form autocomplete="off" action="/action_page.php">
							<div class="autocomplete" style="width:100%;">
								<input id="iproj_cust" class="input-group-lg form-control" style="width: 100%">
							</div>
						</form>
					</td>        							
				</tr>        	
				<tr>
					<th>Project Name</th>
					<td>:</td>        	
					<td>
						<textarea class="form-control"  style="width: 100%" id="iproj_name"></textarea>															
					</td>
				</tr>
				<tr>
					<th>User</th>
					<td>:</td>        	
					<td><input id="iproj_user" type="text" class="input-group-text form-control" value=""></td>
				</tr>        	
				<tr>
					<th>PIC HW</th>
					<td>:</td>
					<td class="form-group">
						<select class="custom-select" id="iproj_pic_hw">
							<option value="30">-NO PIC-</option>						
							<option value="11">ABCDEFG</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>PIC SW</th>
					<td>:</td>
					<td class="form-group">
						<select class="custom-select" id="iproj_pic_sw">
							<option value="">-NO PIC-</option>						
							<option value="1">ABCDEFG</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Supported</th>
					<td>:</td>
					<td class="form-group">
						<select class="custom-select" id="iproj_pic_sup">
							<option value="">-NO PIC-</option>						
							<option value="373">ABCDEFG</option>
						</select>
					</td>
				</tr>						
				<tr><td><br></td></tr>
				<tr>
					<td colspan="3">
						<table width="100%">
							<tr>
								<td style="font-weight: bold">Notes</td>
							</tr>
							<tr>
								<td colspan="5">
									<textarea class="form-control"  style="width: 100%" id="iproj_note"></textarea>
								</td>
							</tr>														
						</table>
					</td>
				</tr>
			</table>
		</td>
		<td width="2%"></td>
		<td width="55%">
			<table border="0">
				<tr>
					<th>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="ist_business" required>
							<label class="custom-control-label" style="padding-top: 4px" for="ist_business">BUSINESS</label>
						</div>
					</th>
				</tr>
			</table>
			<div style="border: solid 2px #989898; border-radius: 10px 10px 10px 10px; padding: 10px">													
				<table border="0">
					<tr>
						<td>
							<table border="0">
								<tr>
									<td colspan="5">
										<table width="100%" border="0">
											<thead>
												<th width="30%">Refference</th>																						
												<th width="30%">PR / PO no.</th>
												<th width="30%">Purchase Order Date</th>
											</thead>
											<tr>
												<td width="30%">
													<input type="text" class="form-control" style="text-align: center" id="ireff">
												</td>										
												<td width="30%">
													<input type="text" class="form-control" style="text-align: center" id="iproj_po_no">
												</td>
												<td width="30%">
													<input type="date"  class="form-control" style="text-align: center" id="iproj_po">
												</td>
											</tr>
											<tr>
												<td><br></td>
											</tr>
											<thead>
												<th width="30%">Final BA</th>
												<th width="30%">Good Receipt</th>
												<th width="30%">Invoice</th>
											</thead>
											<tr>
												<td>
													<input type="date" class="form-control" style="text-align: center" id="iproj_fba" value="">
												</td>
												<td width="30%">
													<input type="date"  class="form-control" style="text-align: center" id="iproj_gr" value="">
												</td>
												<td width="30%">
													<input type="date"  class="form-control alert-success" style="text-align: center" id="iproj_inv" value="">
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table width="80%">
								<tr>
									<th>Status</th>
									<td>:</td>
									<td colspan="3">
										<select class="custom-select" required style="width: 50%" id=iproj_issue>
											<option value="" required>-Select Status-</option>
											<option value="Waiting Order (PO)">Waiting Order (PO)</option>									
											<option value="Submit BA + DO">Submit BA + DO</option>									
										</select>
									</td>
								</tr>
							</table>	
						</td>
					</tr>						
				</table>
			</div>								
			<br>		
			<table>
				<tr>
					<th>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="ist_work" required>
							<label class="custom-control-label" style="padding-top: 4px" for="ist_work">WORK</label>
						</div>
					</th>								
				</tr>
			</table>
			<div style="border: solid 2px #989898; border-radius: 10px 10px 10px 10px; padding: 10px">
				<table border="0">
					<tr>
						<td colspan="2">
							<table width="100%" border="0">
								<tr>
									<th style="width: 35%">Progress Status</th>
									<td width="1%">:</td>
									<td>
										<div class="input-group" style="width: 50%">
											<input id="iproj_status" type="number" class="form-control" value="0" min="0" max="100">									
											<div class="input-group-append">
												<span class="input-group-text">%</span>				
											</div>
										</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr><td><br></td></tr>
					<tr>
						<td>
							<table>
								<tr>
									<th width="30%">Delivered</th>
									<th width="30%">Completed</th>
								</tr>
								<tr>
									<td width="30%">
										<input type="date" class="form-control" style="text-align: center" id="iproj_deliver_date">
									</td>
									<td width="30%">
										<input type="date" class="form-control alert-success" style="text-align: center" id="iproj_complete_date">
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
</table>
<div class="modal-footer">
	<div style="border: solid 2px #FF0004; border-radius: 4px; padding: 5px; padding-right: 30px; padding-left: 10px ">
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input alert-danger" id="ist_cancel" required>
			<label class="custom-control-label" style="padding-top: 4px; color: red; font-weight: bold" for="ist_cancel">PROJECT CANCEL</label>
		</div>
	</div>       
	<button type="submit" class="btn btn-primary">Save changes</button>
</div>
</div>

