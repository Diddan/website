<div class="ajax-white-backdrop" style="display: block;"></div>
<!-- start: DYNAMIC TABLE PANEL -->
<div class="panel panel-white">
	<div class="panel-heading">
		<div class="col-md-12 space20">
			<h4 class="panel-title">
				<span class="actionitems">
					<span class="text-bold"><?= $this->translate("TXT_DATE")?>: <?php echo $this->calendar;?>/ <?php echo $this->translate("TXT_SERVING")?>: <?= strtoupper($this->servingname);?></span>
				</span>
				<span class="guestactionitems" class="no-display">
					<span class="text-bold"><?= $this->translate("TXT_GUEST")?>: <?php echo $this->guestname;?>/ <?php echo $this->translate("TXT_TEL")?>: <?= strtoupper($this->guesttel);?>  </span>
				</span>
			</h4>
		</div>
		<input id='calendar' class='no-display' value='<?php echo $this->calendar;?>'>
		<input id='servingid' class='no-display' value='<?php echo $this->getParam("servingid");?>'>
		<input id='guestid' class='no-display' value='<?php echo $this->getParam("guestid");?>'>
		<input id='warning' class='no-display' value='<?php echo $this->warning;?>'>
		<input id='cancelled' class='no-display' value='<?php echo $this->cancelled;?>'>
		<input id='arrived' class='no-display' value='<?php echo $this->arrived;?>'>
		<div class="panel-tools">
			<a class="panel-expand" href="#"> <i class="fa fa-expand"></i><span> <?= $this->translate("TXT_FULLSCREEN")?></span></a>
		</div>
	</div>
	<input id='selectedLocationId' class="no-display" value='<?php echo $this->selectedLocation->getId();?>'>
	<div class="panel-body">
		<div class="row">
		
			<div class="col-md-12">
		
			<div class="panel panel-white">
				<div class="panel-heading">
					<h4 class="panel-title" style="color:#FFFFFF"><?= $this->translate("TXT_CONFIGURATION_PANEL")?></h4>
					<div class="panel-tools">
						<a class="panel-collapse expand" href="#"><i class="fa fa-angle-up fa-rotate-180"></i> <span>Expand</span> </a>
					</div>
				</div>
				<div class="panel-body" style="display:none">
					<div class="col-md-12 space20">
						<span class="actionitems">
							<a href="/liste-reservations-search?selectedLocationId=<?php echo $this->selectedLocation->getId();?>&" class="btn btn-green"><?= $this->translate("TXT_NEW_SEARCH")?> <i class="fa fa-search"></i></a>
							<div class="btn-group">
								<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
									Date <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li role="presentation" class="dropdown-header"><?= $this->translate("TXT_DATE_SELECTION")?></li>
									<li><a href="#"><?= $this->translate("TXT_TODAY")?></a></li>
									<li><a href="/liste-reservations?servingid=<?php echo $this->getParam('servingid');?>&calendar=<?php $today=new Zend_date();$tomorrow=$today->add('1', Zend_Date::DAY);echo $today->get('dd-MM-yyyy');?>"><?= $this->translate("TXT_TOMORROW")?></a></li>
									<li><a href="/liste-reservations?servingid=<?php echo $this->getParam('servingid');?>&calendar=<?php $today=new Zend_date();$tomorrow=$today->add('2', Zend_Date::DAY);echo $today->get('dd-MM-yyyy');?>"><?= $this->translate("TXT_DAY_AFTER_TOMORROW")?></a></li>
								</ul>
							</div>
							<input id="checkarrived" type="checkbox" class="checkbox-inline checkbox make-switch" data-on-text="Arrived" data-off-text="Arrived">
							<input id="checkcancelled" type="checkbox" class="checkbox-inline checkbox make-switch" data-on-text="Cancelled" data-off-text="Cancelled">
							<div class="pull-right">
								<button data-table="#reservationList" class="btn btn-orange print-table">
									<?= $this->translate("Print")?>
									<i class="fa fa-print"></i>
								</button> 
								<button data-toggle="dropdown" class="btn btn-green dropdown-toggle">Export <i class="fa fa-angle-down"></i></button>
								<ul class="dropdown-menu dropdown-light pull-right">
									<li><a href="#" class="export-pdf" data-table="#reservationList"
										data-ignoreColumn="0,2,5"> <img
											src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/pdf.png'
											width='24px'> Save as PDF
									</a>
									</li>
									<li><a href="#" class="export-png" data-table="#reservationList"
										data-ignoreColumn="0,2,5"> <img
											src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/png.png'
											width='24px'> Save as PNG
									</a>
									</li>
									<li><a href="#" class="export-csv" data-table="#reservationList"
										data-ignoreColumn="0,2,5"> <img
											src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/csv.png'
											width='24px'> Save as CSV
									</a>
									</li>
									<li><a href="#" class="export-txt" data-table="#reservationList"
										data-ignoreColumn="0,2,5"> <img
											src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/txt.png'
											width='24px'> Save as TXT
									</a>
									</li>
									<li><a href="#" class="export-xml" data-table="#reservationList"
										data-ignoreColumn="0,2,5"> <img
											src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/xml.png'
											width='24px'> Save as XML
									</a>
									</li>
									<li><a href="#" class="export-sql" data-table="#reservationList"
										data-ignoreColumn="0,2,5"> <img
											src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/sql.png'
											width='24px'> Save as SQL
									</a>
									</li>
									<li><a href="#" class="export-json" data-table="#reservationList"
										data-ignoreColumn="0,2,5"> <img
											src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/json.png'
											width='24px'> Save as JSON
									</a>
									</li>
									<li><a href="#" class="export-excel" data-table="#reservationList"
										data-ignoreColumn="0,2,5"> <img
											src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/xls.png'
											width='24px'> Export to Excel
									</a>
									</li>
									<li><a href="#" class="export-doc" data-table="#reservationList"
										data-ignoreColumn="0,2,5"> <img
											src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/word.png'
											width='24px'> Export to Word
									</a>
									</li>
									<li><a href="#" class="export-powerpoint"
										data-table="#reservationList" data-ignoreColumn="0,2,5"> <img
											src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/ppt.png'
											width='24px'> Export to PowerPoint
									</a>
									</li>
								</ul>
							</div>
						</span>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="form-field-select-4" style="color:#FFFFFF">
								<?= $this->translate("DROPDOWN_MULTIPLE_SELECT")?>
							</label>
							<select multiple="multiple" id="form-field-select-4" class="form-control search-select">
								<option value="2" <?php if(in_array( '2', $this->viewcol ) ){echo "selected";}?>><?= $this->translate("TXT_HEADER_DATE_RESERVATION")?></option>
								<option value="3" <?php if(in_array( '3', $this->viewcol ) ){echo "selected";}?>><?= $this->translate("TXT_HEADER_TIMESLOT")?></option>
								<option value="4" <?php if(in_array( '4', $this->viewcol ) ){echo "selected";}?>><?= $this->translate("TXT_HEADER_REF")?></option>
								<option value="5" <?php if(in_array( '5', $this->viewcol ) ){echo "selected";}?>><?= $this->translate("TXT_HEADER_GUESTNAME")?></option>
								<option value="6" <?php if(in_array( '6', $this->viewcol ) ){echo "selected";}?>><?= $this->translate("TXT_HEADER_PARTYSIZE")?></option>
								<option value="7" <?php if(in_array( '7', $this->viewcol ) ){echo "selected";}?>><?= $this->translate("TXT_HEADER_REFERENCE")?></option>
								<option value="8" <?php if(in_array( '8', $this->viewcol ) ){echo "selected";}?>><?= $this->translate("TXT_HEADER_NOTES")?></option>
								<option value="9" <?php if(in_array( '9', $this->viewcol ) ){echo "selected";}?>><?= $this->translate("TXT_HEADER_STATUS")?></option>
								<option value="10" <?php if(in_array( '10', $this->viewcol ) ){echo "selected";}?>><?= $this->translate("TXT_HEADER_ARRIVED")?></option>
								<option value="14" <?php if(in_array( '14', $this->viewcol ) ){echo "selected";}?>><?= $this->translate("TXT_HEADER_GUEST_EMAIL")?></option>
								<option value="15" <?php if(in_array( '15', $this->viewcol ) ){echo "selected";}?>><?= $this->translate("TXT_HEADER_GUEST_TEL")?></option>
							</select>
						</div>
					</div>
				</div>
			</div>
			</div>
		
		</div>
		

		<div class="row">
			<!-- le contenu ici -->
			<div class="table-responsive col-md-12 space20">
				<table id="reservationList" class="display table table-striped">
					<thead>
						<tr>
							<th></th>
							<th></th>
							<th><?= $this->translate("TXT_HEADER_DATE_RESERVATION")?></th>
							<th><?= $this->translate("TXT_HEADER_TIMESLOT")?></th>
							<th><?= $this->translate("TXT_HEADER_REF")?></th>
							<th><?= $this->translate("TXT_HEADER_GUESTNAME")?></th>
							<th><?= $this->translate("TXT_HEADER_PARTYSIZE")?></th>
							<th><?= $this->translate("TXT_HEADER_REFERENCE")?></th>
							<th><?= $this->translate("TXT_HEADER_NOTES")?></th>
							<th><?= $this->translate("TXT_HEADER_STATUS")?></th>
							<th><?= $this->translate("TXT_HEADER_ARRIVED")?></th>
							<th><?= $this->translate("TXT_HEADER_GUESTID")?></th>
							<th><?= $this->translate("TXT_EDIT")?></th>
							<th><?= $this->translate("TXT_HEADER_DEL")?></th>
							<th><?= $this->translate("TXT_HEADER_GUEST_EMAIL")?></th>
							<th><?= $this->translate("TXT_HEADER_GUEST_TEL")?></th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
	<!-- Small modal -->
	<div id="ajax-modal" class="modal extended-modal fade no-display" tabindex="-1"></div>
</div>
