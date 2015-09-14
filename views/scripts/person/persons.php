
<!-- start: DYNAMIC TABLE PANEL -->
<div class="panel panel-white">
	<div class="panel-heading">
		<h4 class="panel-title">
			<?= $this->translate("Employee")?>
			<span class="text-bold"><?= $this->translate("Role")?> </span>
		</h4>
		<div class="panel-tools">
			<div class="dropdown">
				<a data-toggle="dropdown"
					class="btn btn-xs dropdown-toggle btn-transparent-grey"> <i
					class="fa fa-cog"></i>
				</a>
				<ul class="dropdown-menu dropdown-light pull-right" role="menu">
					<li><a class="panel-collapse collapses" href="#"><i
							class="fa fa-angle-up"></i> <span>Collapse</span> </a>
					</li>
					<li><a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i>
							<span>Refresh</span>
					</a>
					</li>
					<li><a class="panel-config" href="#panel-config"
						data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span>
					</a>
					</li>
					<li><a class="panel-expand" href="#"> <i class="fa fa-expand"></i>
							<span>Fullscreen</span>
					</a>
					</li>
				</ul>
			</div>
			<a class="btn btn-xs btn-link panel-close" href="#"> <i
				class="fa fa-times"></i>
			</a>
		</div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12 space20">
				<button href="#newContributor" class="btn btn-green new-contributor">
					<?= $this->translate("Add new employee")?>
					<i class="fa fa-plus"></i>
				</button>
				<button data-table="#list-employees"
					class="btn btn-orange print-table">
					<?= $this->translate("Print")?>
					<i class="fa fa-print"></i>
				</button>
				<div class="btn-group pull-right">
					<button data-toggle="dropdown"
						class="btn btn-green dropdown-toggle">
						Export <i class="fa fa-angle-down"></i>
					</button>
					<ul class="dropdown-menu dropdown-light pull-right">
						<li><a href="#" class="export-pdf" data-table="#list-employees"
							data-ignoreColumn="0,2,5"> <img
								src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/pdf.png'
								width='24px'> Save as PDF
						</a>
						</li>
						<li><a href="#" class="export-png" data-table="#list-employees"
							data-ignoreColumn="0,2,5"> <img
								src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/png.png'
								width='24px'> Save as PNG
						</a>
						</li>
						<li><a href="#" class="export-csv" data-table="#list-employees"
							data-ignoreColumn="0,2,5"> <img
								src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/csv.png'
								width='24px'> Save as CSV
						</a>
						</li>
						<li><a href="#" class="export-txt" data-table="#list-employees"
							data-ignoreColumn="0,2,5"> <img
								src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/txt.png'
								width='24px'> Save as TXT
						</a>
						</li>
						<li><a href="#" class="export-xml" data-table="#list-employees"
							data-ignoreColumn="0,2,5"> <img
								src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/xml.png'
								width='24px'> Save as XML
						</a>
						</li>
						<li><a href="#" class="export-sql" data-table="#list-employees"
							data-ignoreColumn="0,2,5"> <img
								src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/sql.png'
								width='24px'> Save as SQL
						</a>
						</li>
						<li><a href="#" class="export-json" data-table="#list-employees"
							data-ignoreColumn="0,2,5"> <img
								src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/json.png'
								width='24px'> Save as JSON
						</a>
						</li>
						<li><a href="#" class="export-excel" data-table="#list-employees"
							data-ignoreColumn="0,2,5"> <img
								src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/xls.png'
								width='24px'> Export to Excel
						</a>
						</li>
						<li><a href="#" class="export-doc" data-table="#list-employees"
							data-ignoreColumn="0,2,5"> <img
								src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/word.png'
								width='24px'> Export to Word
						</a>
						</li>
						<li><a href="#" class="export-powerpoint"
							data-table="#list-employees" data-ignoreColumn="0,2,5"> <img
								src='<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/icons/ppt.png'
								width='24px'> Export to PowerPoint
						</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<table class="table table-striped table-hover" id="list-employees">
				<thead>
					<tr>
						<th class="center"></th>
						<th class="center"><?= $this->translate("Name")?></th>
						<th class="center"><?= $this->translate("Role")?></th>
						<th class="hidden-xs"><?= $this->translate("Phone")?></th>
						<th class="hidden-xs"><?= $this->translate("Email")?></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<? if($this->employes): ?>
					<?php foreach($this->employes as $e) : $i++;?>
					<tr>
						<td class="center"><img
							src="<? if ( $e->getAvatar() ) { echo $e->getAvatar()->getThumbnail('avatar') ;} else { ?><?= PIMCORE_WEBSITE_LAYOUTS?>/assets/images/avatar-<?= $i;?>.jpg<? } ?>"
							alt="image" /></td>
						<td class="center"><?= $e->getFullName()?></td>
						<td class="center"><? if($this->locations ): ?> <? foreach ($this->locations as $l):?>
							<? if ($l->getPositions()):?>
							<h5 class="space15">
								<?= $l->getName() ?>
							</h5> <?php foreach($l->getPositions() as $p) :?>
							<div class="checkbox">
								<label class="checkbox-inline"> <input type="checkbox"
									data-person-id="<?=$e->getId()?>"
									data-full-name="<?=$e->getFullname()?>"
									data-position-id="<?=$p->getId()?>"
									<? if($e->checkPosition($p->getId())) echo 'checked' ;?>
									class=" checkbox-position grey"> <?= $p->getName()?>
								</label>
							</div> <? endforeach;?> <?endif ;?> <? endforeach;?> <? endif ; ?>
						</td>
						<td class="hidden-xs"><?= $e->getPhone();?></td>
						<td class="hidden-xs"><a
							href="<? if ($e->getEmail()): echo 'mailto:'.$e->getEmail(); else: echo'#'; endif;?>"
							rel="nofollow"> <?= $e->getEmail();?>
						</a></td>

						<td class="center hidden-print">
							<div
								class="visible-md visible-lg hidden-sm hidden-xs hidden-print">
								<a href="#newContributor"
									class="show-subviews edit-contributor btn btn-xs btn-blue tooltips"
									data-placement="top" data-index="<?= $e->getId();?>"
									data-id="<?= $e->getId()?>" data-original-title="Edit"><i
									class="fa fa-edit"></i> </a> <a href="#"
									class="btn btn-xs btn-green tooltips" data-placement="top"
									data-original-title="Share"><i class="fa fa-share"></i> </a> <a
									href="#" class="btn btn-xs btn-red tooltips"
									data-placement="top" data-original-title="Remove"><i
									class="fa fa-times fa fa-white"></i> </a>
							</div>
							<div
								class="visible-xs visible-sm hidden-md hidden-lg hidden-print">
								<div class="btn-group">
									<a class="btn btn-green dropdown-toggle btn-sm"
										data-toggle="dropdown" href="#"> <i class="fa fa-cog"></i> <span
										class="caret"></span>
									</a>
									<ul role="menu" class="dropdown-menu pull-right dropdown-dark">
										<li><a href="#newContributor"
											class="show-subviews edit-contributor"
											data-index="$e->getId()" data-id="$e->getId()"> <i
												class="fa fa-pencil"></i> Edit
										</a>
										</li>
										<li><a role="menuitem" tabindex="-1" href="#"> <i
												class="fa fa-share"></i> Share
										</a>
										</li>
										<li><a role="menuitem" tabindex="-1" href="#"> <i
												class="fa fa-times"></i> Remove
										</a>
										</li>
									</ul>
								</div>
							</div>
						</td>
					</tr>
					<? endforeach;?>
					<? else: ?>
					<tr>
						<?= $this->translate("TXT_NO_DATA");?>
					</tr>
					<? endif;?>
				</tbody>
			</table>
		</div>
	</div>

	<div class="hidden">
		<? if($this->locations ): ?>
		<div id="positions">
			<? foreach ($this->locations as $l):?>
			<? if ($l->getPositions()):?>
			<h5 class="space15">
				<?= $l->getName() ?>
			</h5>
			<?php foreach($l->getPositions() as $p) :?>
			<div class="checkbox">
				<label class="checkbox-inline"> <input type="checkbox"
					data-person-id="" data-full-name=""
					data-position-id="<?=$p->getId()?>" class="grey"> <?= $p->getName()?>
				</label>
			</div>
			<? endforeach;?>
			<?endif ;?>
			<? endforeach;?>
		</div>
		<? endif ; ?>
	</div>
	<!-- end: PAGE CONTENT-->
</div>
