
<style>
	.tt-menu { width:300px; }
	ul.typeahead{margin:0px;padding:10px 0px;}
	ul.typeahead.dropdown-menu li a {padding: 10px !important;	border-bottom:#CCC 1px solid;color:#000;}
	ul.typeahead.dropdown-menu li:last-child a { border-bottom:0px !important; }
	.bgcolor {max-width: 550px;min-width: 290px;max-height:340px;background:url("world-contries.jpg") no-repeat center center;padding: 100px 10px 130px;border-radius:4px;text-align:center;margin:10px;}
	.demo-label {font-size:1.5em;color: #686868;font-weight: 500;color:#000;}
	.dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover {
		text-decoration: none;
		background-color: #26c281 !important;
		outline: 0;
		color:#fff !important;
	}
	
    .pen body {
	padding-top:50px;
}

/* Social Buttons - Twitter, Facebook, Google Plus */
.btn-twitter {
	background: #00acee;
	color: #fff
}
.btn-twitter:link, .btn-twitter:visited {
	color: #fff
}
.btn-twitter:active, .btn-twitter:hover {
	background: #0087bd;
	color: #fff
}

.btn-instagram {
	color:#fff;
	background-color:#3f729b;
	border-color:rgba(0,0,0,0.2);
}
.btn-instagram:focus,.btn-instagram.focus {
	color:#fff;
	background-color:#305777;
	border-color:rgba(0,0,0,0.2);
}
.btn-instagram:hover {
	color:#fff;
	background-color:#305777;
	border-color:rgba(0,0,0,0.2);
}

.btn-github {
	color:#fff;
	background-color:#444;
	border-color:rgba(0,0,0,0.2);
}
.btn-github:focus,.btn-github.focus {
	color:#fff;
	background-color:#2b2b2b;
	border-color:rgba(0,0,0,0.2);
}
.btn-github:hover {
	color:#fff;
	background-color:#2b2b2b;
	border-color:rgba(0,0,0,0.2);
}

/* MODAL FADE LEFT RIGHT BOTTOM */
.modal.fade:not(.in).left .modal-dialog {
	-webkit-transform: translate3d(-25%, 0, 0);
	transform: translate3d(-25%, 0, 0);
}
.modal.fade:not(.in).right .modal-dialog {
	-webkit-transform: translate3d(25%, 0, 0);
	transform: translate3d(25%, 0, 0);
}
.modal.fade:not(.in).bottom .modal-dialog {
	-webkit-transform: translate3d(0, 25%, 0);
	transform: translate3d(0, 25%, 0);
}

.modal.right .modal-dialog {
	position:absolute;
	top:0;
	right:0;
	margin:0;
}

.modal.left .modal-dialog {
	position:absolute;
	top:0;
	left:0;
	margin:0;
}

.modal.left .modal-dialog.modal-sm {
	max-width:300px;
}

.modal.left .modal-content, .modal.right .modal-content {
    min-height:100vh;
	border:0;
}


.switchToggle input[type=checkbox]{height: 0; width: 0; visibility: hidden; position: absolute; }
.switchToggle label {cursor: pointer; text-indent: -9999px; width: 70px; max-width: 70px; height: 24px; background: #d1d1d1; display: block; border-radius: 100px; position: relative; }
.switchToggle label:after {content: ''; position: absolute; top: 2px; left: 2px; width: 20px; height: 20px; background: #fff; border-radius: 90px; transition: 0.3s; }
.switchToggle input:checked + label, .switchToggle input:checked + input + label  {background: #3e98d3; }
.switchToggle input + label:before, .switchToggle input + input + label:before {content: 'Out'; position: absolute; top: 3px; left: 35px; width: 26px; height: 26px; border-radius: 90px; transition: 0.3s; text-indent: 0; color: #fff; }
.switchToggle input:checked + label:before, .switchToggle input:checked + input + label:before {content: 'In'; position: absolute; top: 2px; left: 10px; width: 26px; height: 26px; border-radius: 90px; transition: 0.3s; text-indent: 0; color: #fff; }
.switchToggle input:checked + label:after, .switchToggle input:checked + input + label:after {left: calc(100% - 2px); transform: translateX(-100%); }
.switchToggle label:active:after {width: 60px; } 
.toggle-switchArea { margin: 10px 0 10px 0; }

.switchToggle1 input[type=checkbox]{height: 0; width: 0; visibility: hidden; position: absolute; }
.switchToggle1 label {cursor: pointer; text-indent: -9999px; width: 70px; max-width: 70px; height: 24px; background: #d1d1d1; display: block; border-radius: 100px; position: relative; }
.switchToggle1 label:after {content: ''; position: absolute; top: 2px; left: 2px; width: 20px; height: 20px; background: #fff; border-radius: 90px; transition: 0.3s; }
.switchToggle1 input:checked + label, .switchToggle1 input:checked + input + label  {background: #3e98d3; }
.switchToggle1 input + label:before, .switchToggle1 input + input + label:before {content: 'No'; position: absolute; top: 3px; left: 35px; width: 26px; height: 26px; border-radius: 90px; transition: 0.3s; text-indent: 0; color: #fff; }
.switchToggle1 input:checked + label:before, .switchToggle1 input:checked + input + label:before {content: 'Yes'; position: absolute; top: 2px; left: 10px; width: 26px; height: 26px; border-radius: 90px; transition: 0.3s; text-indent: 0; color: #fff; }
.switchToggle1 input:checked + label:after, .switchToggle1 input:checked + input + label:after {left: calc(100% - 2px); transform: translateX(-100%); }
.switchToggle1 label:active:after {width: 60px; } 

.switchToggle2 input[type=checkbox]{height: 0; width: 0; visibility: hidden; position: absolute; }
.switchToggle2 label {cursor: pointer; text-indent: -9999px; width: 70px; max-width: 70px; height: 24px; background: #d1d1d1; display: block; border-radius: 100px; position: relative; }
.switchToggle2 label:after {content: ''; position: absolute; top: 2px; left: 2px; width: 20px; height: 20px; background: #fff; border-radius: 90px; transition: 0.3s; }
.switchToggle2 input:checked + label, .switchToggle2 input:checked + input + label  {background: #3e98d3; }
.switchToggle2 input + label:before, .switchToggle2 input + input + label:before {content: 'No'; position: absolute; top: 3px; left: 35px; width: 26px; height: 26px; border-radius: 90px; transition: 0.3s; text-indent: 0; color: #fff; }
.switchToggle2 input:checked + label:before, .switchToggle2 input:checked + input + label:before {content: 'Yes'; position: absolute; top: 2px; left: 10px; width: 26px; height: 26px; border-radius: 90px; transition: 0.3s; text-indent: 0; color: #fff; }
.switchToggle2 input:checked + label:after, .switchToggle2 input:checked + input + label:after {left: calc(100% - 2px); transform: translateX(-100%); }
.switchToggle2 label:active:after {width: 60px; } 
.toggle-switchArea { margin: 10px 0 10px 0; }

.inputfile:focus + label,
.inputfile.has-focus + label {
    outline: 1px dotted #000;
    outline: -webkit-focus-ring-color auto 5px;
}
.inputfile + label svg {
    width: 1em;
    height: 1em;
    vertical-align: middle;
    fill: currentColor;
    margin-top: -0.25em;
}

.inputfile-6 + label {
    color: #0a9408;
}
.inputfile-6 + label {
    border: 1px solid #0a9408;
    background-color: #f1e5e6;
    padding: 0;
}

.inputfile-6:focus + label,
.inputfile-6.has-focus + label,
.inputfile-6 + label:hover {
    border-color: #09612c;
}

.inputfile-6 + label span,
.inputfile-6 + label strong {
    padding: 0.625rem 1.25rem;
    /* 10px 20px */
}

.inputfile-6 + label span {
    width: 200px;
    min-height: 2em;
    display: inline-block;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    vertical-align: top;
}

.inputfile-6 + label strong {
    color: #eeffe8;
    background-color: #18b11c;
    display: inline-block;
}
.inputfile-6:focus + label strong,
.inputfile-6.has-focus + label strong,
.inputfile-6 + label:hover strong {
    background-color: #09612c;
}
@media screen and (max-width: 50em) {
	.inputfile-6 + label strong {
		display: block;
	}
}
.toBold { 
    color: orange !important;
};
</style>
<?php include_once( APPPATH . 'views/inc/ciuis_data_table_header.php' ); ?>
<?php $appconfig = get_appconfig(); ?>

<div class="ciuis-body-content" ng-controller="Document_Controller">
<!---<div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>-->
  <div class="main-content container-fluid col-xs-12 col-md-12 col-lg-9" layout="row" layout-wrap>
    <md-toolbar ng-show="!customersLoader" class="toolbar-white" style="margin: 0px 8px 8px 8px;">
    <div class="md-toolbar-tools">
      <md-button class="md-icon-button" aria-label="File">
        <md-icon><i class="ico-ciuis-staff text-muted"></i></md-icon>
      </md-button>
      <h2 flex md-truncate><?php echo lang('documents'); ?> <small>(<span ng-bind="staff.length"></span>)</small></h2>
      <div class="ciuis-external-search-in-table">
        <input ng-model="search.name" class="search-table-external" id="search" name="search" type="text" placeholder="<?php echo lang('search').' '.lang('staff') ?>">
        <md-button class="md-icon-button" aria-label="Search" ng-cloak>
          <md-icon><i class="ion-search text-muted"></i></md-icon>
        </md-button>
      </div>
      <md-button ng-click="toggleFilter()" class="md-icon-button" aria-label="Filter" ng-cloak>
          <md-tooltip md-direction="bottom"><?php echo lang('filter') ?></md-tooltip>
          <md-icon><i class="ion-android-funnel text-muted"></i></md-icon>
        </md-button>
     
      <?php if (check_privilege('document', 'create')) { ?>
        <md-button ng-click="Create()" class="md-icon-button" aria-label="New" ng-cloak>
          <md-tooltip md-direction="bottom"><?php echo lang('create').' '.lang('document') ?></md-tooltip>
          <md-icon><i class="ion-android-add-circle text-success"></i></md-icon>
        </md-button>
      <?php }?>
    </div>
  </md-toolbar>
  <br>
    <div ng-show="showGrid==true" flex-gt-xs="33" flex-xs="100" ng-repeat="member in staff | filter:search | pagination : currentPage*itemsPerPage | limitTo: 6" style="padding: 0px;margin: 0px" ng-cloak>
      <md-card md-theme-watch style="margin-top:0px"> 
        <md-card-title>
          <md-card-title-media style="width:100px;height:100px"> 
            <img src="<?php echo base_url('uploads/images/{{member.avatar}}'); ?>" alt="Avatar" class="staff_img"></md-card-title-media>
           <md-card-title-text class="md-ml-20 xs-ml-20" style="margin-top: -10px;"> 
             <a class="md-headline cursor" ng-click="ViewStaff(member.id)">
               <span ng-bind="member.name"></span><sup class="sup-label" style="background: <?php echo '{{member.color}}' ?>" ng-bind="member.type"></sup>
             </a>
             <span class="md-subhead" ng-bind="member.staff_number"></span>
             <span class="md-subhead" ng-bind="member.department"></span> 
             <span class="md-subhead"><a href="tel:{{member.phone}}">{{member.phone}}</a></span> 
           <!--  <span class="md-subhead"><a href="tel:{{member.email}}">{{member.email}}</a></span>  -->
           </md-card-title-text>
         </md-card-title>
         <md-card-actions layout="row" layout-align="end center">
          <md-button ng-click="ViewStaff(member.id)"><?php echo lang('view')?></md-button>
        </md-card-actions>
      </md-card>
    </div> 
    <div ng-show="showGrid==true" class="text-center pagination-center" ng-cloak>
      <md-content ng-show="!staff.length" class="md-padding no-item-data"><?php echo lang('notdata') ?></md-content>
      <div class="pagination-div text-center" ng-show="staff.length > 5">
        <ul class="pagination">
          <li ng-class="DisablePrevPage()"> <a href ng-click="prevPage()"><i class="ion-ios-arrow-back"></i></a> </li>
          <li ng-repeat="n in range()" ng-class="{active: n == currentPage}" ng-click="setPage(n)"> <a href="#" ng-bind="n+1"></a> </li>
          <li ng-class="DisableNextPage()"> <a href ng-click="nextPage()"><i class="ion-ios-arrow-right"></i></a> </li>
        </ul>
      </div>
    </div>
    <md-content flex-gt-xs="100" flex-xs="100" ng-show="showList==true" class="bg-white" ng-cloak style="margin: -20px 8px 8px 8px;">
      <md-table-container ng-show="staff.length > 0">
        <table md-table  md-progress="promise">
          <thead md-head md-order="staff_list.order">
            <tr md-row>            
         <th md-column><span>Name Or Number</span></th>         
           <th md-column><span>Expiry Date</span></th>
              <th md-column><span>Authorised Company Name</span></th>
         <th md-column ><span>Attachments</span></th>
          <th md-column><span>Created By</span></th>                         
              <!-- <th md-column md-order-by="total"><span><?php //echo lang('amount'); ?></span></th> -->
            </tr>
          </thead>		  
          <tbody md-body>
              <?php //print_r($staff); ?>
            <tr class="select_row" md-row ng-repeat="member in staff | orderBy: staff_list.order | filter: search | filter: FilteredData | limitTo: staff_list.limit : (staff_list.page -1) * staff_list.limit   ">
            
              <td md-cell >
			  <!-- <div id="{{member.id}}" onclick="materialview(this.id)" class="table-icon deleteIcon"><a class="link cursor"><b>{{member.name}}</b></a></div> -->
			  <strong>
			    <a class="link" ng-href="<?php echo base_url('document/docview/')?>{{member.id}}">
                   <b>{{member.name}}</b></strong></a> <br>

              </td>                   
              <td md-cell>
                   <!---<div id="{{member.id}}" onclick="materialview(this.id)" class="table-icon deleteIcon"><a class="link cursor"><b>{{member.expiry_date | date : "dd-MM-yyyy" : 0}}</b></a></div>-->
					<div id="{{member.id}}" class="table-icon deleteIcon"><b>{{member.expiry_date | date : "dd-MM-yyyy" : 0}}</b></div>
              </td>        
         <td md-cell>
               <b>{{member.company_name}}</b>
              </td>                           
              <td md-cell>                            
<div id="inline">
     <?php /* if (check_privilege('document', 'edit')){ ?> 
		<div class="col-sm-3" id="{{member.id}}" onclick="update(this.id)"><i class="ion-compose  text-muted"></i></div>
	 <?php } 
	  if(check_privilege('document', 'delete')){
	  ?>
		<div class="col-sm-3" id="{{member.id}}" onclick="deletematerial(this.id)"><i class="ion-trash-b text-muted"></i></div>
	 <?php  }  */ ?>
          
             <div class="col-sm-3" ng-if="member.doc_count == 0"><span  style='color:black'>-</span></div>
             <div class="col-sm-3" ng-if="member.doc_count >= 1"><span  class="glyphicon glyphicon-file"></span></div>
</div>
              </td>
              
			   <td md-cell>
			      
			     <div style="margin-top: 5px;" data-toggle="tooltip" data-placement="left" data-container="body" title="" data-original-title="Created by: {{member.staffname}}" class="assigned-staff-for-this-lead user-avatar"><img  ng-src="<?php echo base_url('uploads/images/{{member.staffavatar}}')?>" alt="{{member.staffname}}"></div>             
              </td>            
            </tr>
          </tbody>
        </table>
      </md-table-container>
      <md-table-pagination ng-show="staff.length > 0" md-limit="staff_list.limit" md-limit-options="limitOptions" md-page="staff_list.page" md-total="{{staff.length}}" ></md-table-pagination>
    </md-content>    
  </div>
  <div class="main-content container-fluid col-xs-12 col-md-12 col-lg-3 md-pl-0">     
    <md-toolbar class="toolbar-white">
      <div class="md-toolbar-tools"> 
        <h2 class="md-pl-10" flex md-truncate><?php echo 'Category' ?></h2>
        <?php if (check_privilege('staff', 'create')) { ?>
          <md-button ng-click="NewDepartment()" class="md-icon-button" aria-label="Department" ng-cloak>
            <md-tooltip md-direction="left"><?php echo lang('addCategory') ?></md-tooltip>
            <md-icon><i class="ion-android-add text-muted"></i></md-icon>
          </md-button>
        <?php } ?>
      </div>
    </md-toolbar>
    <md-content class="bg-white">
      <md-list flex class="md-p-0 sm-p-0 lg-p-0" ng-cloak>
        <md-list-item ng-repeat="doccat in docscat" ng-click="EditDepartment($index)" aria-label="Project">
          <p><strong ng-bind="doccat.name"></strong></p>
          <?php if (check_privilege('staff', 'delete')) { ?>
            <md-button ng-click="DeleteDepartment($index)" class="md-icon-button" aria-label="Create">
              <md-tooltip md-direction="bottom"><?php echo lang('delete') ?></md-tooltip>
              <md-icon><i class="ion-trash-b text-muted"></i></md-icon>
            </md-button>
          <?php } ?>
          <md-divider></md-divider>
        </md-list-item>
      </md-list>
      <md-content ng-show="!docscat.length" class="md-padding bg-white no-item-data" ng-cloak><?php echo lang('notdata') ?></md-content>
    </md-content>
		
	<!-- <md-toolbar class="toolbar-white">
      <div class="md-toolbar-tools"> 
        <h2 class="md-pl-10" flex md-truncate>Unit Type</h2>
        <?php //if (check_privilege('staff', 'create')) { ?>
          <md-button ng-click="NewUnitType()" class="md-icon-button" aria-label="Unit Type" ng-cloak>
            <md-tooltip md-direction="left">Add Unit Type</md-tooltip>
            <md-icon><i class="ion-android-add text-muted"></i></md-icon>
          </md-button>
        <?php //} ?>
      </div>
    </md-toolbar>
    <md-content class="bg-white">
      <md-list flex class="md-p-0 sm-p-0 lg-p-0" ng-cloak>
        <md-list-item ng-repeat="unittype in unittypes" ng-click="EditUnit($index)" aria-label="Unit">
          <p><strong ng-bind="unittype.name"></strong></p>
          <?php //if (check_privilege('staff', 'delete')) { ?>
            <md-button ng-click="DeleteUnit($index)" class="md-icon-button" aria-label="Create">
              <md-tooltip md-direction="bottom"><?php //echo lang('delete') ?></md-tooltip>
              <md-icon><i class="ion-trash-b text-muted"></i></md-icon>
            </md-button>
          <?php //} ?>
          <md-divider></md-divider>
        </md-list-item>
      </md-list>
      <md-content ng-show="!unittypes.length" class="md-padding bg-white no-item-data" ng-cloak><?php //echo lang('notdata') ?></md-content>
    </md-content>   -->
  </div>
  <div class="modal fade right" id="sidebar-right" tabindex="-1" role="dialog">
<div class="modal-dialog modal-sm" role="document" style="width: 400px;">
<div class="modal-content">

<div class="modal-body">

<div id="update_details"></div>
		   
		



</div>
</div>
</div>
</div>
  <div class="modal fade right" id="sidebar-filter" tabindex="-1" role="dialog">
<div class="modal-dialog modal-sm" role="document" style="width: 400px;">
<md-toolbar class="md-theme-light" style="background:#262626">
      <div class="md-toolbar-tools">
        <md-button ng-click="close()" class="md-icon-button" aria-label="Close"> <i class="ion-android-arrow-forward"></i> </md-button>
        <md-truncate><?php echo lang('filter') ?></md-truncate>
      </div>
    </md-toolbar>
<div class="modal-content">

<div class="modal-body">
 <div ng-repeat="(prop, ignoredValue) in staff[0]" ng-init="filter[prop]={}" ng-if="prop != 'id' && prop != 'staffavatar'  && prop != 'name' && prop != 'expiry_date' && prop != 'created' && prop != 'remarks' && prop != 'documents' && prop != 'doc_count' && prop != 'company_name' && prop != 'category'&& prop != 'staffname' && prop != 'category'">
        <div class="filter col-md-12">
          <h4 class="text-muted text-uppercase"><strong>{{prop}}</strong></h4>
          <hr>
          <div class="labelContainer" ng-repeat="opt in getOptionsFor(prop)">
            <md-checkbox id="{{[opt]}}" ng-model="filter[prop][opt]" aria-label="{{opt}}"><span class="text-uppercase">{{opt}}</span></md-checkbox>
          </div>
        </div>
      </div>
</div>
</div>
</div>
</div> 
</div>
   <md-sidenav class="md-sidenav-right md-whiteframe-4dp" md-component-id="Create" ng-cloak style="width: 450px;">
       <form id="form1" method="post" id="myForm" action="<?php echo base_url('document/create');?>" enctype="multipart/form-data"  onsubmit="return Validation()">
           
    <md-toolbar class="toolbar-white">
      <div class="md-toolbar-tools">
        <md-button ng-click="close()" class="md-icon-button" aria-label="Close"> <i class="ion-android-arrow-forward"></i> </md-button>
        <h2 flex md-truncate><?php echo lang('create') ?></h2>
       <!--  <md-switch ng-model="staff.active" aria-label="Type"><strong class="text-muted"><?php //echo lang('active') ?></strong></md-switch> -->
       <!--- <div class="form-group">
               <label for="others">Others</label>
               <label class="switch">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
           </div>  -->
          
      </div>
    </md-toolbar>  
    <md-content>
      <md-content layout-padding>
       <div >           
    <input type="radio" id="switch" name="status" checked> <label>Public</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
     <input type="radio" id="switch" name="status" value="off"> <label>Confidential</label> 
    <!-- <label for="switch">Toggle</label> -->
</div>
  <div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" id="category" name="category" required>
<option value=""> Select..</option>
	<?php if(isset($categories)){
		foreach($categories as $eachCat){?>
		<option value="<?php print $eachCat['doc_cat_id'];?>"><?php print $eachCat['doc_cat_name'];?></option>
		<?php }?>
	<?php }?>
    </select>
  </div>
  <div class="form-group code">
    <label for="exampleInputPassword1">Name or Number</label>
    <input type="text" class="form-control" id="name" placeholder="Name or Number" name="name" value="" required>
  </div><br>
   	<md-input-container class="md-block">
		<label for=""><b>Expiry Date/Remind Date</b></label>
		<input mdc-datetime-picker="" date="true" time="true" type="text" id="datetime" placeholder="<?php echo lang('chooseadate') ?>" required show-todays-date="" minutes="true" min-date="date"show-icon="true" ng-model="reminder_date" format="DD-MM-YYYY hh:mm a" name="expiry_date" class=" dtp-no-msclear dtp-input md-input" >
	</md-input-container>
	
    <div class="form-group">
		<label for="exampleInputPassword1">Remind Before</label>
		<div class="row">
			<div class="col-sm-6">
				<input type="text" class="form-control" id="remind_before" placeholder="Remind Before" name="remind_before" value="" required>
			</div>
			<div class="col-sm-6">
				<select class="form-control" id="reminder_type" name="reminder_type" required>
					<option value="Minute"> Minute(S)</option>
					<option value="Hours"> Hours</option>
					<option value="Days"> Days</option>
					
				</select>
			</div>
		</div>
	</div>
  <div class="form-group">
			<div class="row" >
				<label class="col-sm-8" for="exampleInputPassword1">Repeat Interval</label>
				<div class="switchToggle col-sm-4">
					<input type="checkbox" id="switchrepeat" ng-model='checkStatusinterval' ng-click='check_status_interval(checkStatusinterval)' name="checkinterval" value="0">
					<label for="switchrepeat">Toggle</label>
				</div>
			</div><br>
			<div class="col-sm-12" ng-show="repeatinerval">
				<input type="button" id="weekly" ng-model='weekly' value="Weekly" class="btn btn-default" style="border: 1px solid;padding: 0px 14px;" ng-click="setinterval('Weekly')" ng-class="{toBold: setBold=='Weekly'}" >&nbsp;&nbsp;
				<input type="hidden" name="intervalvalue1" id="weeklynew" value="">
				
				<input type="button" id="Monthly" ng-model='Monthly' value="Monthly" class="btn btn-default" style="border: 1px solid;padding: 0px 14px;" ng-click="setinterval('Monthly')" ng-class="{toBold: setBold=='Monthly'}"   >&nbsp;&nbsp;
				<input type="hidden" id="Monthlynew" name="intervalvalue2" value="">
				
				<input type="button" id="Quarterly" ng-model='Quarterly' value="Quarterly" class="btn btn-default" style="border: 1px solid;padding: 0px 14px;"  ng-click="setinterval('Quarterly')" ng-class="{toBold: setBold=='Quarterly'}"  >&nbsp;&nbsp;
				<input type="hidden" id="Quarterlynew" name="intervalvalue3" value="">
				
				<input type="button" id="Yearly" ng-model='Yearly' value="Yearly" class="btn btn-default" style="border: 1px solid;padding: 0px 14px;" ng-click="setinterval('Yearly')" ng-class="{toBold: setBold=='Yearly'}"  >
				<input type="hidden" id="Yearlynew" name="intervalvalue4" value="">
			</div>
		</div><br>
		
		<div class="form-group">
			<div class="row" >
				<label class="col-sm-8" for="exampleInputPassword1">Remind of Staff</label>
				<div class="switchToggle1 col-sm-4">
					<input type="checkbox" id="switchremindstaff" ng-model='switchremindstaff' ng-click='check_status_staff(switchremindstaff)' name="checkremind" >
					<label for="switchremindstaff">Toggle</label>
				</div>
			</div>
		</div>
		<div class="form-group" ng-show="remindstaff">
			<label for="staff">Staff</label>
			<select class="form-control" id="remind_staff" name="remind_staff" >
				<option value=""> Select..</option>
				<?php if(isset($staff)){
					foreach($staff as $eachCat){?>
					<option value="<?php print $eachCat['id'];?>"><?php print $eachCat['staffname'];?></option>
					<?php }?>
				<?php }?>
			</select>
		</div>
		
		<div class="form-group">
			<div class="row" >
				<label class="col-sm-8" for="exampleInputPassword1">Contact Details</label>
				<div class="switchToggle2 col-sm-4">
					<input type="checkbox" id="contactdetails" ng-model='contactdetails' ng-click='ShowContactDetails(contactdetails)' name="contactdetails" >
					<label for="contactdetails">Toggle</label>
				</div>
			</div>
		</div>
  <div><hr style="height:2px;border-width:0;color:blue;background-color:black"></div>
    <div ng-show="contactdetailsdiv">
		<div class="form-group">
			<label for="itemname">Authorised Company Name</label>
			<input type="text" class="form-control" id="company_name" placeholder="Authorised Company Name" name="company_name" value="" >
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Contact Person</label>
			<input id="contact_person" type="text" class="form-control" name="contact_person" placeholder="Contact Person"  >
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Contact Number</label>
			<input type="text" class="form-control" id="contact_number" placeholder="Contact Number" name="contact_number" value="" >
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Email</label>
			<input type="email" class="form-control" id="email" placeholder="Email" name="email" value="" >
		</div>
	</div>
   <div class="form-group">
    <label for="exampleInputPassword1">Attachment</label>
    <!---<input type="file" multiple class="form-control-file" id="upload_file" name="upload_file[]" onchange="preview_image();" required>--->
	<input type="file" name="upload_file[]" id="upload_file" class="inputfile inputfile-6" data-multiple-caption="{count} files selected"   multiple required style="display:none">
	<label for="upload_file"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="5" viewBox="0 0 20 17"></svg> Choose a file&hellip;</strong></label>
  <div class="loder col-md-1"></div>
  <!---<div id="image_preview" class="col-md-12"></div> -->
  </div> 
  <input type="submit" class="btn btn-success col-md-12"  value="Add">
</form>
      </md-content>
     
    </md-content>
  </md-sidenav>
  <md-sidenav class="md-sidenav-right md-whiteframe-4dp" md-component-id="ContentFilter" ng-cloak style="width: 450px;">
    <md-toolbar class="md-theme-light" style="background:#262626">
      <div class="md-toolbar-tools">
        <md-button ng-click="close()" class="md-icon-button" aria-label="Close"> <i class="ion-android-arrow-forward"></i> </md-button>
        <md-truncate><?php echo lang('filter') ?></md-truncate>
      </div>
    </md-toolbar>
    <md-content layout-padding="">
      <div ng-repeat="(prop, ignoredValue) in staff[0]" ng-init="filter[prop]={}" ng-if="prop != 'id'">
        <div class="filter col-md-12">
          <h4 class="text-muted text-uppercase"><strong>{{prop}}</strong></h4>
          <hr>
          <div class="labelContainer" ng-repeat="opt in getOptionsFor(prop)">
            <md-checkbox id="{{[opt]}}" ng-model="filter[prop][opt]" aria-label="{{opt}}"><span class="text-uppercase">{{opt}}</span></md-checkbox>
          </div>
        </div>
      </div>
    </md-content>
  </md-sidenav>

</div>
<?php include_once( APPPATH . 'views/inc/other_footer.php' ); ?>
<!-- Loader Css -->
<link rel="stylesheet" href="<?=base_url();?>assets/loader.css">
<script src="<?php echo base_url('assets/js/ciuis_data_table.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/document.js?v=1'); ?>"></script>
<?php include_once( APPPATH . 'views/inc/validate_footer.php' ); ?>
 <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/datepicker/css/bootstrap-datepicker.min.css'); ?>">
  <!-- datepicker -->
<script src="<?php echo base_url('assets/datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/moment/moment.min.js'); ?>"></script>
<link href="<?php echo base_url('assets/select2/select2.min.css'); ?>" rel="stylesheet" />

<script src="<?php echo base_url('assets/select2/select2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/typeahead.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/custom-file-input.js'); ?>"></script>
<script type="text/javascript">
     //Date picker
	 
    $(document).ready(function() {
		
        $('#expiry_date').datepicker({
			autoclose: true,
			format: 'dd/mm/yyyy',
			 orientation: "bottom right",
			 autoclose: true,
	    });
    });
   /*  $(document).ready(function(){
    $('#myForm').submit(function() {
    $("#loader-wrapper").show();
      return true;
    });
}); */
</script>
<style>
#inline{height:auto;display:flex;}
.one,.two{width:30%;height:100px;margin:10px;}
.ion-trash-b{font-size:20px;}
.ion-compose{font-size:20px;}
</style>

  <script>
 /* ClassicEditor
            .create( document.querySelector( '#itemdescription' ) )
            .catch( error => {
                console.error( error );
            } );
			ClassicEditor
            .create( document.querySelector( '#longdescription' ) )
            .catch( error => {
                console.error( error );
            } ); */
 	
	
	// only for demo purposes
/* $.validator.setDefaults({
	submitHandler: function() {
		$('#form1').submit();
	}
});
  var validator = $("#form1").validate({
		errorPlacement: function(error, element) {
			// Append error within linked label
			$( element )
				.closest( "form" )
					.find( "label[for='" + element.attr( "id" ) + "']" )
						.append( error );
		},
		errorElement: "span",
		messages: {
			category: {
				required: " (required)"
				
			},
			itemname: {
				required: " (required)"
			},
			unittype: {
				required: " (required)"
			},
			
		}
	});

	$(".cancel").click(function() {
		validator.resetForm();
	}); */
	



function select_code(value){
    
    var item_code = value;
    
    
    	 $.ajax({
              url : "<?php echo base_url(); ?>material/validate_itemcode",
              data:{item_code : item_code},
              method:'POST',
              dataType:'json',
              success:function(response) {
                 // alert(response.item_code);
             if(response.item_code != null){
                 alert("Enetered Item Code is already exists");
                 $('#item_code').val('');
             }
            }
          }); 
}

	function preview_image() 
{
 var total_file=document.getElementById("upload_file").files.length;

 for(var i=0;i<total_file;i++)
 {
 //console.log(event.target.files[i]['name']);
 //$('.loder').html('<img src="<?php print base_url();?>front/LoaderIcon.gif">');
 var file_data = event.target.files[i];   
        var form_data = new FormData();                  
        form_data.append('file', file_data);
		
  $.ajax({
            url: '<?php print base_url();?>document/form_add_image',
			 type        : 'post',
            cache       : false,
        contentType : false,
        processData : false,
        data        : form_data,
            success: function(response){
                if(response != 0){
					if(response.error){
					$('.error').show();
					$('.error').html(response.error);
					$('input[name="csrf_test_name"]').val(response.csrf_hash);
					}else{
					//$('.loder').html('');
                    //$("#img").attr("src",response); 
                    //$(".preview img").show(); // Display image element
					$('input[name="csrf_test_name"]').val(response.csrf_hash);
					$('#image_preview').append("<div class='col-md-3' id='clients-edit-wrapper'><div class='close-wrapper'> <a  class='close-div text-danger'>Delete</a></div><input type='hidden' name='test_image[]' value='"+response.image_name+"'><a href='<?php print base_url();?>uploads/images/"+response.image_name+"' target='_blank' class='text-success'>View<a/></div>");
					}
                }else{
                    alert('file not uploaded');
                }
            },
        });  
 
 }
}
$(document).on('click', '.close-div', function(){
	
    $(this).closest("#clients-edit-wrapper").remove();
});

	function supplierModal(str)
	{
		
		 $.ajax({
            url: '<?php print base_url();?>material/form_supplier/'+str,
			 type        : 'post',
            cache       : false,
        contentType : true,
        processData : true,
        
            success: function(response){
				$('#supplier_details').html(response);
				$('#exampleModal').modal('show');
                
            },
        }); 
		
		
	}
	function materialview(id)
	{
		
		 $.ajax({
            url: '<?php print base_url();?>document/view_material/'+id,
			 type        : 'post',
            cache       : false,
        contentType : true,
        processData : true,
        
            success: function(response){
				$('#material_details').html(response);
				$('#exampleModal1').modal('show');
				 $("#exampleModal1").appendTo("body");
				 
				 
				 
				 
				    $(function() {
           $( "#dialog-4" ).dialog({
               autoOpen: false, 
               modal: true,
               buttons: {
                  OK: function() {$(this).dialog("close");}
               },
            }); 
            $( "#opener-4" ).click(function() {
                //alert('sdsd00');
            //( "#dialog-4" ).dialog( "open" );
              $('#exampleModal2').modal('show');
              $("#exampleModal2").appendTo("body");
            });
         }); 
                
            },
        }); 
		
		
	}
	function add_cost(val){
	    var cost = val;
	    var cost_value = val*1.25;
	    $('#last_selling_price').val(cost_value);
	    
	}
	 function select_switch(value){
	  //var status =   document.getElementById("switch").checked = true;

    if ($('#switch').is(':checked')) {
         $('.code').show();
          $("#item_code").removeAttr('disabled');
          $('#item_code').attr('required', 'required');
          
    }else{
         $("#item_code").prop("disabled", true);
         $('#item_code').removeAttr('required');
       $('.code').hide();
    }

    
} 
	 $(document).ready(function(){
		 $('#supplier0').typeahead({
    source: function (query, process) {
		
		
		$.ajax({
                    url: '<?php print base_url();?>supplier/get_supplier_list',
					data: 'str=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						//console.log(data);
						if(data == '0'){
							//alert("fds");
							$('#supplier_hidden_id0').val('-1');
						}else{
						 map = {};
						 states = [];
						$.each(data, function (i, state) {
							
      map[state.name] = state;
      states.push(state.name);
    });
    process(states);
                    }
					}  
                });  
				
 
    
    },
    matcher: function (item) {
    if (item.toLowerCase().indexOf(this.query.trim().toLowerCase()) != -1) {
    return true;
    }
    },
    sorter: function (items) {
        return items;//items.sort();
    },
    highlighter: function (item) {
        var regex = new RegExp( '(' + this.query + ')', 'gi' );
        return item.replace( regex, "<strong>$1</strong>" );
    },
    updater: function (item) {
      
        SelectedCode=map[item].id;
      
        SelectedCityName=map[item].name;
        //console.log(SelectedCityName);
        // Get hidden field id from data-hidden-field-id attribute
        var hiddenFieldId = this.$element.data('hiddenFieldId')
        // Save SelectedCode to hiddenfield
        $(`#${hiddenFieldId}`).val(SelectedCode);
        
        return SelectedCityName;
    },
	 templates: { 
empty: 'No results found.'
	 }
});	         
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
   
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
		
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            var fieldHTML = '<div class="row col-md-12" ><div class="form-group col-md-4"><label for="inputZip">Supplier </label>';
             fieldHTML += '<input type="text" class="form-control typeahead" data-provide="typeahead" data-hidden-field-id="supplier_hidden_id'+x+'" name="supp[newsupplier][]" id="supplier'+x+'" placeholder="Enter Supplier" autocomplete="off"/><input type="hidden" name="supp[supplier][]" id="supplier_hidden_id'+x+'" autocomplete="off" value=""/></div>';
            fieldHTML += '<div class="form-group col-md-4"><label for="exampleInputFile">Ref Code</label><input type="text" name="supp[shortname][]" placeholder="Enter Short Name" id="short-name" title="Short Name" aria-describedby="" class="form-control"></div>';
             fieldHTML +=  '<div class="form-group col-md-3"><label for="exampleInputFile">Price</label><input type="text" name="supp[price][]" placeholder="price" id="price" title="Price" aria-describedby="" class="form-control"></div><a href="javascript:void(0);" class="add_button" title="Add field"></a><a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-circle text-danger" style="font-size: 20px;"></i></a></div><br>'; 
            //New input field html 
            $(wrapper).append(fieldHTML); //Add field html
			
			  //('#supplier'+x).addClass('selectpicker required');
			  
			  /*
			  $('#supplier'+x).select2({
    
  tags: true
});*/


  $('#supplier'+x).typeahead({
           source: function (query, process) {
		
		
		$.ajax({
                    url: '<?php print base_url();?>supplier/get_supplier_list',
					data: 'str=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						if(data == '0'){
							//alert("fds");
							$('#supplier_hidden_id'+x).val('-1');
						}else{
						 map = {};
						 states = [];
						$.each(data, function (i, state) {
							
      map[state.name] = state;
      states.push(state.name);
    });
    process(states);
                    }
					}
                });  
				
 
    
    },
    matcher: function (item) {
    if (item.toLowerCase().indexOf(this.query.trim().toLowerCase()) != -1) {
    return true;
    }
    },
    sorter: function (items) {
        return items;//items.sort();
    },
    highlighter: function (item) {
        var regex = new RegExp( '(' + this.query + ')', 'gi' );
        return item.replace( regex, "<strong>$1</strong>" );
    },
    updater: function (item) {
      
        SelectedCode=map[item].id;
      
        SelectedCityName=map[item].name;
        
        // Get hidden field id from data-hidden-field-id attribute
        var hiddenFieldId = this.$element.data('hiddenFieldId')
        // Save SelectedCode to hiddenfield
        $(`#${hiddenFieldId}`).val(SelectedCode);
        
        return SelectedCityName;
    },
	
        });

			 
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        //e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
		return false;
        x--; //Decrement field counter
    });
});

	function save_session()
	{
		$('#exampleModal').modal('hide');
		var datastring = $("#formsupplier").serialize();
		$.ajax({
			type: "POST",
			url: "<?php print base_url();?>material/add_supplier_price",
			data: datastring,
			dataType: "json",
			success: function(data) {
				//alert(data);
				//var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
				// do what ever you want with the server response
				$("#div1-wrapper").load(location.href + "/refresh_staff", function(responseText) {
                        if(responseText != '') $('#div1').html(responseText).delay(1000);
						$('.selectpicker').selectpicker('refresh');
                    });
			},
			error: function() {
				//alert('error handling here');
				 $("#div1-wrapper").load(location.href + "/refresh_staff", function(responseText) {
                        if(responseText != '') $('#div1').html(responseText).delay(1000);
						$('.selectpicker').selectpicker('refresh');
                    }); 
			}
		});
		
	}
	
	function change_margin(str){
		
		if(str=='fixed'){
			$('#fixed').show();
			$('#percentage').hide();
		}else{
			$('#fixed').hide();
			$('#percentage').show();
			
		}
	}
	
		function addnewsupplier(){
	 
	    $.ajax({
            url: '<?php print base_url();?>material/form_supplier_new',
			 type        : 'post',
            cache       : false,
        contentType : true,
        processData : true,
        
            success: function(response){
				    $('#supplier_details').html(response);
                    $("#exampleModal").modal("show");
                    $("#exampleModal").appendTo("body");
                
            },
        });
        
           
		
	}
	
	function deletematerial(id){
             var r = confirm("Are you sure to delete the record");

	     if (r == true) {
	         	 $.ajax({
              url : "<?php echo base_url(); ?>document/delete_mat",
              data:{id : id},
              method:'POST',
              dataType:'json',
              success:function(response) {
             
               window.location.reload();
            }
          }); 
	     }
	     else{
	         
	        
	     }
        
    }
   
    
    function update(id){
        //alert(id);
               
           	 $.ajax({
              url : "<?php echo base_url(); ?>document/edit_mat",
              data:{id : id},
              method:'POST',
             // dataType:'json',
              success:function(response) {
                 // alert("dsafds");
                  //console.log(response)
                  $('#update_details').html(response);
               $("#sidebar-right").modal ("show");
                $('.selectpicker').selectpicker('refresh');
               
               
               
              
                $(function() {
           $( "#dialog-4" ).dialog({
               autoOpen: false, 
               modal: true,
               buttons: {
                  OK: function() {$(this).dialog("close");}
               },
            }); 
            $( "#opener-4" ).click(function() {
                //alert('sdsd00');
            //( "#dialog-4" ).dialog( "open" );
              $('#exampleModal2').modal('show');
              $("#exampleModal2").appendTo("body");
            });
         }); 
        var status = $('#switch').is(':checked');
        //alert(status);
        if(status == false){
            
              $("#item_code").prop("disabled", true);
              $("#item_code").removeAttr('required');
             $('.code').hide();
        
        }
        else{
            $('.code').show();
            $("#item_code").removeAttr('disabled');
             $('#item_code').attr('required', 'required');

        }
         function select_switch(){
                   
	   
    if ($('#switch').is(':checked')) {
        
       
         $('.code').show();
         $("#item_code").removeAttr('disabled');

          
    }else{
         
          $("#item_code").prop("disabled", true);
        $('.code').hide();
     
    }

    
} 
       var rd_status = $('#per').is(':checked');
       //alert(rd_status);
       if(rd_status == false){
             $('#percentage').hide();
        
        }
        else{
            $('#percentage').show();
        }
        
        
       var rd_status1 = $('#fix').is(':checked');
        //alert(rd_status1);
        if(rd_status1 == false){
             $('#fixed').hide();
        
        }
        else{
            $('#fixed').show();
        }
        
  	function change_margin(str){
	//	alert(str);
		
	}
	
  
   var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button1'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var val = $('#count').val();
   
   
    var x = val; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
             var fieldHTML = '<div class="row col-md-12" ><div class="form-group col-md-4"><label for="inputZip">Supplier</label>';
             fieldHTML += '<input type="text" class="form-control typeahead" data-provide="typeahead" data-hidden-field-id="supplier_hidden_id'+x+'" name="supp[newsupplier][]" id="supplier'+x+'" placeholder="Enter Supplier" autocomplete="off"/><input type="hidden" name="supp[supplier][]" id="supplier_hidden_id'+x+'" autocomplete="off" value=""/></div>';
            fieldHTML += '<div class="form-group col-md-4"><label for="exampleInputFile">Ref Code</label><input type="text" name="supp[shortname][]" placeholder="Enter Short Name" id="short-name" title="Short Name" aria-describedby="" class="form-control"></div>';
             fieldHTML +=  '<div class="form-group col-md-3"><label for="exampleInputFile">Price</label><input type="text" name="supp[price][]" placeholder="price" id="price" title="Price" aria-describedby="" class="form-control"></div><a href="javascript:void(0);" class="add_button" title="Add field"></a><a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-circle text-danger" style="font-size: 20px;"></i></a></div><br>';
            //New input field html 
            $(wrapper).append(fieldHTML); //Add field html
			
				 $('#supplier'+x).typeahead({
           source: function (query, process) {
		
		
		$.ajax({
                    url: '<?php print base_url();?>supplier/get_supplier_list',
					data: 'str=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						if(data == '0'){
							//alert("fds");
							$('#supplier_hidden_id'+x).val('-1');
						}else{
						 map = {};
						 states = [];
						$.each(data, function (i, state) {
							
      map[state.name] = state;
      states.push(state.name);
    });
    process(states);
                    }
					}
                });  
				
 
    
    },
    matcher: function (item) {
    if (item.toLowerCase().indexOf(this.query.trim().toLowerCase()) != -1) {
    return true;
    }
    },
    sorter: function (items) {
        return items;//items.sort();
    },
    highlighter: function (item) {
        var regex = new RegExp( '(' + this.query + ')', 'gi' );
        return item.replace( regex, "<strong>$1</strong>" );
    },
    updater: function (item) {
      
        SelectedCode=map[item].id;
      
        SelectedCityName=map[item].name;
        
        // Get hidden field id from data-hidden-field-id attribute
        var hiddenFieldId = this.$element.data('hiddenFieldId')
        // Save SelectedCode to hiddenfield
        $(`#${hiddenFieldId}`).val(SelectedCode);
        
        return SelectedCityName;
    },
	
        });
			


			  
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        //e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
		return false;
        x--; //Decrement field counter
    });
         
            }
          });  
	    
    }
    
    $ (document).ready (function () {
	$ (".modal a").not (".dropdown-toggle").on ("click", function () {
		$ (".modal").modal ("hide");
	});
});
</script>

<script>

   function show_post(id)
  {
     $.ajax({
              url : "<?php echo base_url(); ?>material/img/"+id,
              data:{id : id},
              method:'POST',
             // dataType:'json',
              success:function(response) {
                 // alert("dsafds");
                 // console.log(response)
                  $('#img_details').html(response);
                     $("#editModal").modal('show');
                    $("#editModal").appendTo("body");
              }
              
     });
  }
  
  
   function show_post_pdf(id)
  {
      //alert(id);
     $.ajax({
              url : "<?php echo base_url(); ?>material/pdf/"+id,
              data:{id : id},
              method:'POST',
             // dataType:'json',
              success:function(response) {
                 // alert("dsafds");
                 // console.log(response)
                  $('#pdfdetails').html(response);
                     $("#pdfModal").modal('show');
                    $("#pdfModal").appendTo("body");
              }
              
     });
  }
  
  
 function select_image_name(val, id){
         var val =  val;
         
         var id = id;
        
         
         var r = confirm("Are you sure to delete the file");

	     if (r == true) {
	         	 $.ajax({
              url : "<?php echo base_url(); ?>document/delete_file",
              data:{val : val ,  id : id },
              method:'POST',
              dataType:'json',
              success:function(response) {
               
               window.location.reload();
            }
          }); 
	     }
	     else{
	         
	         
	     } 
        
      }
	  
	  function myFunction(str,id){
		  console.log(str);
		   var site_url = "<?php echo site_url(); ?>";
		   var input = $("#supplier"+id);
		    $.post(site_url+'supplier/get_supplier_list', function(data){
                        input.typeahead({
                            source: data,
                            minLength: 1,
                        });
            }, 'json');

            input.change(function(){
                var current = input.typeahead("getActive");
				console.log(current);
                $('#supplier_hidden_id'+id+'').val(current.name);
            });
			
		  	 input.typeahead({
    source: function (str, process) {
		
		
		$.ajax({
                    url: '<?php print base_url();?>supplier/get_supplier_list',
					data: 'str=' + str,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						//console.log(data);
						if(data == '0'){
							//alert("fds");
							$('#supplier_hidden_id'+id+'').val('-1');
						}else{
						 map = {};
						 states = [];
						$.each(data, function (i, state) {
							
      map[state.name] = state;
      states.push(state.name);
    });
    process(states);
                    }
					}  
                });  
				
 
    
    },
    matcher: function (item) {
    if (item.toLowerCase().indexOf(this.str.trim().toLowerCase()) != -1) {
    return true;
    }
    },
    sorter: function (items) {
        return items;//items.sort();
    },
    highlighter: function (item) {
        var regex = new RegExp( '(' + this.str + ')', 'gi' );
        return item.replace( regex, "<strong>$1</strong>" );
    },
    updater: function (item) {
      
        SelectedCode=map[item].id;
      
        SelectedCityName=map[item].name;
        //console.log(SelectedCityName);
        // Get hidden field id from data-hidden-field-id attribute
        var hiddenFieldId = this.$element.data('hiddenFieldId')
        // Save SelectedCode to hiddenfield
        $(`#${hiddenFieldId}`).val(SelectedCode);
        
        return SelectedCityName;
    },
	 templates: { 
empty: 'No results found.'
	 }
	

});
	  }
         
  </script>
 
       
  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h5>Supplier Details
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
	  <div id="supplier_details"></div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="save_session()">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h5>View
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
	  <div id="material_details"></div>
      
      </div>
     
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h5>View
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
	  <div id="img_details"></div>
      
      </div>
     
    </div>
  </div>
</div>


 <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body form-group">
	
          <div id="pdfdetails"></div>
          
        </div>
        <div class="modal-footer ">
          </span>
        </div>
      </div>      
    </div>
  </div>
