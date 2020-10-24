/* vendor section */
function Inventories_Controller($scope, $http, $mdSidenav) {
	"use strict";
	$scope.toggleFilter = buildToggler('ContentFilter');
	$scope.Create = buildToggler('Create');
	$scope.CreateGroup = buildToggler('CreateGroup');

	globals.get_countries();
	
	$scope.ManageStatus = function(ev) {
		getStatus();
		///$mdSidenav('EventForm').close();
		$mdSidenav('ManageStatus').toggle();
	}
	$scope.neweventtype = false;
	$scope.addingEventType = false;
	function getStatus() {
		$http.get(BASE_URL + 'inventories/get_status').then(function (AllStatus) {
			$scope.status = AllStatus.data;
		});
	}
	$scope.ShowStatusForm=function(){
		$scope.event_type = {
			warehouse_name : '',
			country_id : 0,
			state:0,
			city : '',
			id : 0
		}
		$scope.neweventtype = true;
	}
	$scope.AddNewStatus = function(action) {
		$scope.addingEventType = true;
		if (!$scope.event_type) {
			var dataObj = $.param({
				name : '',
				country_id: 0,
				state_id : 0,
				city :''
			});
		} else  {
			var dataObj = $.param({
				name: $scope.event_type.name,
				country_id : $scope.event_type.country_id,
				state_id : $scope.event_type.state_id,
				city : $scope.event_type.city
			});
		}
		var posturl = BASE_URL + 'inventories/add_status';
		$http.post(posturl, dataObj, config)
		.then(
		function (response) {
			$scope.addingEventType = false;
			if (response.data.success == true) {
				showToast(NTFTITLE, response.data.message, 'success');
				getStatus();
				$scope.event_type.name='';
				$scope.neweventtype = false;
			} else {
				globals.mdToast('error', response.data.message);
			}
		},
		function (response) {
			$scope.addingEventType = false;
		}
		);
	}
	
	$scope.EditNewStatus = function(action) {
		$scope.addingEventType = true;
		if (!$scope.event_type) {
			var dataObj = $.param({
				name: '',
				country_id : 0,
				state_id : 0,
				city : '',
			});
		} else  {
			var dataObj = $.param({
				name: $scope.event_type.name,
				country_id: $scope.event_type.country_id,
				state_id : $scope.event_type.state_id,
				city : $scope.event_type.city,
			});
		}
		var posturl = BASE_URL + 'inventories/update_status/'+$scope.event_type.id;
		$http.post(posturl, dataObj, config)
		.then(
		function (response) {
			$scope.addingEventType = false;
			if (response.data.success == true) {
				showToast(NTFTITLE, response.data.message, 'success');
				getStatus();
				$scope.event_type.name='';
				
				$scope.neweventtype = false;
			} else {
				globals.mdToast('error', response.data.message);
			}
			window.location.href = BASE_URL + 'inventories';
		},
		function (response) {
			$scope.addingEventType = false;
		}
		);
	}

	$scope.EditStatus = function (id, name,city,country_id,state_id,event) {
		$scope.neweventtype = true;
		$scope.getStates(country_id);
		$scope.event_type = {
			name : name,
			city : city,
			country_id : country_id,
			state_id : state_id,
			id:id
		}
	};
		
	$scope.DeleteStatus = function (index) {
		var name = $scope.status[index];
		globals.deleteDialog($scope.lang.attention, $scope.lang.delete_meesage+' '+$scope.lang.warehouse, name.id, $scope.lang.doIt, $scope.lang.cancel, 'inventories/remove_status/' + name.id, function(response) {
			if (response.success == true) {
				globals.mdToast('success', response.message);
				$http.get(BASE_URL + 'inventories/get_status').then(function (AllStatus) {
					$scope.status = AllStatus.data;
				});
			} else {
				globals.mdToast('error', response.message);
			}
		});
	};

	$scope.vendor_list = {
		order: '',
		limit: 5,
		page: 1
	};

	function buildToggler(navID) {
		return function () {
			$mdSidenav(navID).toggle();
		};
	}
	$scope.vendorsLoader = true;
	$scope.getStates = function (country) {
		$http.get(BASE_URL + 'api/get_states/' + country).then(function (States) {
			$scope.states = States.data;
		});
	};
	$scope.close = function () {
		$mdSidenav('ContentFilter').close();
		$mdSidenav('Create').close();
		$mdSidenav('CreateGroup').close();
		$mdSidenav('ManageStatus').close();///////Close Status SidePanel/////////////
		$scope.neweventtype = false;
	};
	var gdata;
	$http.get(BASE_URL + 'vendors/groups').then(function(Data){
		gdata = Data.data;
		var data = [];
		for(var i =0; i<gdata.length; i++){
			data.push([gdata[i].name,parseInt(gdata[i].y)]);
		}

		Highcharts.chart('container', {
			chart:{
				polar:true,
				plotBackgroundColor:'#f3f3f3',
				plotBorderWidth:0,
				plotShadow:false
			},
			title:{
				//text: 'Customer<br>Group',
				text: lang.vendor+'<br>'+ lang.group,
				align:'center',
				verticalAlign:'middle',
				y:-18
			},
			tooltip:{
				pointFormat: '<b>{point.y}</b>'
			},
			credits:{
				enabled:false
			},
			plotOptions:{
				pie:{
					dataLabels:{
						enabled:true,
						distance:-50,
						style:{
							fontWeight:'bold',
							color:'white'
						}
					},
					center:['50%','47%'],
					size:'100%'
				}
			},
			series:[
			{
				type:'pie',
				name:'',
				innerSize:'42%',
				data:data
			}
			],
			exporting:{
				buttons:{
					contextButton:{
						menuItems:['downloadPNG', 'downloadSVG','downloadPDF', 'downloadCSV', 'downloadXLS']
					}
				}
			}
		});
		function redrawchart(){
			var chart = $('#container').highcharts();
			var w = $('#container').closest(".wrapper").width();
			chart.setSize(       
				w,w * (3/4),false
				);
		}
		$(window).resize(redrawchart);
		redrawchart();
	});
	


	$http.get(BASE_URL + 'inventories/get_inventories').then(function (Vendors) {
		$scope.vendors = Vendors.data;

		$scope.limitOptions = [5, 10, 15, 20];
		if ($scope.vendors.length > 20) {
			$scope.limitOptions = [5, 10, 15, 20, $scope.vendors.length];
		}

		$scope.vendorsLoader = false;
		
			$http.get(BASE_URL + 'api/matunittype').then(function (Departments) {
		$scope.unittypes = Departments.data;
		
		$scope.NewUnitType = function (event) {
			globals.createDialog($scope.lang.new+' '+$scope.lang.unit, $scope.lang.department_title+' '+$scope.lang.unit+' '+$scope.lang.name, $scope.lang.unit+' '+$scope.lang.name,  event, $scope.lang.add, $scope.lang.cancel, 'material/add_unit', function(response) {
				if (response.success == true) {
					globals.mdToast('success', response.message);
					$http.get(BASE_URL + 'api/matunittype').then(function (Departments) {
						$scope.unittypes = Departments.data;
					});
				} else {
					globals.mdToast('error', response.message );
				}
			});
		};
        
		$scope.EditUnit = function (index) {
			
			var department = $scope.unittypes[index];
			globals.editDialog($scope.lang.update+' '+$scope.lang.unit, $scope.lang.department_title+' '+$scope.lang.unit+' '+$scope.lang.name, $scope.lang.status+' '+$scope.lang.name, department.name, '', $scope.lang.save, $scope.lang.cancel, 'material/update_unit/'+department.id, function(response) {
				if (response.success == true) {
					globals.mdToast('success', response.message);
					$http.get(BASE_URL + 'api/matunittype').then(function (Departments) {
						$scope.unittypes = Departments.data;
					});
				} else {
					globals.mdToast('error', response.message );
				}
			});
		};

		$scope.DeleteUnit = function (index) { 
			var department = $scope.unittypes[index];
			globals.deleteDialog($scope.lang.delete+' '+$scope.lang.unit, $scope.lang.delete_meesage+' '+$scope.lang.unit+'?', department.id, $scope.lang.delete, $scope.lang.cancel, 'material/remove_unit/'+department.id, function(response) {
				if (response.success == true) {
					globals.mdToast('success', response.message);
					$http.get(BASE_URL + 'api/matunittype').then(function (Departments) {
						$scope.unittypes = Departments.data;
					});
				} else {
					globals.mdToast('error', response.message );
				}
			});
		};
	});

	
		
			$http.get(BASE_URL + 'api/matdepartments').then(function (Departments) {
		$scope.departments = Departments.data;
		
		$scope.NewDepartment = function (event) {
			globals.createDialog($scope.lang.new+' '+$scope.lang.category, $scope.lang.department_title+' '+$scope.lang.category+' '+$scope.lang.name, $scope.lang.category+' '+$scope.lang.name,  event, $scope.lang.add, $scope.lang.cancel, 'material/add_department', function(response) {
				if (response.success == true) {
					globals.mdToast('success', response.message);
					$http.get(BASE_URL + 'api/matdepartments').then(function (Departments) {
						$scope.departments = Departments.data;
					});
				} else {
					globals.mdToast('error', response.message );
				}
			});
		};
		
	
        
		$scope.EditDepartment = function (index) {
			var department = $scope.departments[index];
			globals.editDialog($scope.lang.update+' '+$scope.lang.category, $scope.lang.department_title+' '+$scope.lang.category+' '+$scope.lang.name, $scope.lang.status+' '+$scope.lang.name, department.name, '', $scope.lang.save, $scope.lang.cancel, 'material/update_department/'+department.id, function(response) {
				if (response.success == true) {
					globals.mdToast('success', response.message);
					$http.get(BASE_URL + 'api/matdepartments').then(function (Departments) {
						$scope.departments = Departments.data;
					});
				} else {
					globals.mdToast('error', response.message );
				}
			});
		};

		$scope.DeleteDepartment = function (index) { 
			var department = $scope.departments[index];
			globals.deleteDialog($scope.lang.delete+' '+$scope.lang.category, $scope.lang.delete_meesage+' '+$scope.lang.category+'?', department.id, $scope.lang.delete, $scope.lang.cancel, 'material/remove_department/'+department.id, function(response) {
				if (response.success == true) {
					globals.mdToast('success', response.message);
					$http.get(BASE_URL + 'api/matdepartments').then(function (Departments) {
						$scope.departments = Departments.data;
					});
				} else {
					globals.mdToast('error', response.message );
				}
			});
		};
	});
		
		$http.get(BASE_URL + 'inventories/get_product_categories').then(function (Groups){
			$scope.group = Groups.data;
			

			$scope.NewGroup = function () {
				globals.createDialog(lang.new+' ' + lang.unit+' ' + lang.type, lang.unit+' ' + lang.type, lang.unit +' '+ lang.type, '', lang.add, lang.cancel, 'inventories/add_product_category/',  function(response) {
					if (response.success == true) {
						globals.mdToast('success', response.message);
					} else {
						globals.mdToast('error', response.message);
					}
					$http.get(BASE_URL + 'inventories/get_product_categories').then(function (Groups) {
						$scope.group = Groups.data;
					});
				});
			};

			$scope.EditGroup = function (id, name, event) {
				globals.editDialog(lang.edit+' ' + lang.unit+' ' + lang.type, lang.unit,  lang.unit +' '+ lang.type, name, event, lang.save, lang.cancel, 'inventories/update_product_category/' + id, function(response) {					
					if (response.success == true) {
						globals.mdToast('success', response.message);
						$http.get(BASE_URL + 'inventories/get_product_categories').then(function (Groups) {
							$scope.group = Groups.data;
						});
					} else {
						globals.mdToast('error', response.message);
					}
				});
			};

			$scope.DeleteVendorGroup = function (index) {
				var name = $scope.group[index];
				globals.deleteDialog(lang.attention, lang.delete_unit, name.id, lang.doIt, lang.cancel, 'inventories/remove_product_category/' + name.id, function(response) {
					if (response.success == true) {
						globals.mdToast('success', response.message);
						$http.get(BASE_URL + 'inventories/get_product_categories').then(function (Groups) {
							$scope.group = Groups.data;
						});
					} else {
						globals.mdToast('error', response.message);
					}
				});
			};
		});
		
		
			$http.get(BASE_URL + 'inventories/get_product_type').then(function (Types){
			$scope.type = Types.data;
		$scope.NewPtype = function () {
				globals.createDialog(lang.new+' ' + lang.product+' ' + lang.type, lang.product_type, lang.type , '', lang.add, lang.cancel, 'inventories/add_product_type/',  function(response) {
					if (response.success == true) {
						globals.mdToast('success', response.message);
					} else {
						globals.mdToast('error', response.message);
					}
					$http.get(BASE_URL + 'vendors/get_vendor_groups').then(function (Groups) {
						$scope.group = Groups.data;
					});
				});
			};
			});
			$http.get(BASE_URL + 'inventories/get_move_type').then(function (Moves){
			$scope.move = Moves.data;
			$scope.NewMtype = function () {
				globals.createDialog(lang.new+' ' + lang.move+' ' + lang.type, lang.move_type, lang.type , '', lang.add, lang.cancel, 'inventories/add_move_type/',  function(response) {
					if (response.success == true) {
						globals.mdToast('success', response.message);
					} else {
						globals.mdToast('error', response.message);
					}
					$http.get(BASE_URL + 'inventories/get_move_type').then(function (Moves) {
							$scope.move = Moves.data;
					});
				});
			};
			
				$scope.Edittype = function (id, name, event) {
				globals.editDialog(lang.edit+' ' + lang.move+' ' + lang.type, lang.move_type,  lang.move +' '+ lang.type, name, event, lang.save, lang.cancel, 'inventories/update_move_type/' + id, function(response) {					
					if (response.success == true) {
						globals.mdToast('success', response.message);
						$http.get(BASE_URL + 'inventories/get_move_type').then(function (Moves) {
							$scope.move = Moves.data;
						});
					} else {
						globals.mdToast('error', response.message);
					}
				});
			};

			$scope.Deletetype = function (index) {
				var name = $scope.move[index];
				globals.deleteDialog(lang.attention, lang.delete_move, name.id, lang.doIt, lang.cancel, 'inventories/remove_move_type/' + name.id, function(response) {
					if (response.success == true) {
						globals.mdToast('success', response.message);
						$http.get(BASE_URL + 'inventories/get_move_type').then(function (Moves) {
								$scope.move = Moves.data;
						});
					} else {
						globals.mdToast('error', response.message);
					}
				});
			};
			});

		$scope.AddVendor = function () {

			$scope.saving = true;
			if (!$scope.vendor) {
				var dataObj = $.param({
					name: '',
					product_category: '',
					product_type: '',
					cost: '',
					warehouse: '',
					stock: '',
					move_type: '',
				
					
				});
			} else {
								
		$scope.savingCustomer = true;
		
				var dataObj = $.param({
					name: $scope.vendor.service_name,
					product_category: $scope.vendor.product_category,
					product_type: $scope.vendor.product_type,
					cost: $scope.vendor.cost,
					warehouse: $scope.vendor.warehouse,
					stock: $scope.vendor.stock,
					move_type: $scope.vendor.move_type,
					
				});
			}
			var posturl = BASE_URL + 'inventories/create/';
			
			$http.post(posturl, dataObj, config)
			.then(
				function (response) {
					if (response.data.success == true) {
						if (response.data.id) {
							//window.location.href = BASE_URL + 'vendors/vendor/' + response.data.id;
							$mdSidenav('Create').close();
							globals.mdToast('success', response.data.message);
							
						} else {
							$scope.saving = false;
							globals.mdToast('error', response.data.message);
						}
					}else {
						$scope.saving = false;
						globals.mdToast('error', response.data.message);
					}
				},
				function (response) {
					console.log(response);
				}
				);
		};
		$scope.filter = {};
		$scope.getOptionsFor = function (propName) {
			return ($scope.vendors || []).map(function (item) {
				return item[propName];
			}).filter(function (item, idx, arr) {
				return arr.indexOf(item) === idx;
			}).sort();
		};
		$scope.FilteredData = function (item) {
				// Use this snippet for matching with AND
				var matchesAND = true;
				for (var prop in $scope.filter) {
					if (noSubFilter($scope.filter[prop])) {
						continue;
					}
					if (!$scope.filter[prop][item[prop]]) {
						matchesAND = false;
						break;
					}
				}
				return matchesAND;

			};

		function noSubFilter(subFilterObj) {
			for (var key in subFilterObj) {
				if (subFilterObj[key]) {
					return false;
				}
			}
			return true;
		}
		$scope.updateDropdown = function (_prop) {
			var _opt = this.filter_select,
			_optList = this.getOptionsFor(_prop),
			len = _optList.length;

			if (_opt == 'all') {
				for (var j = 0; j < len; j++) {
					$scope.filter[_prop][_optList[j]] = true;
				}
			} else {
				for (var j = 0; j < len; j++) {
					$scope.filter[_prop][_optList[j]] = false;
				}
				$scope.filter[_prop][_opt] = true;
			}
		};
	});
}

function Inventory_Controller($scope, $http, $filter, $mdSidenav, $mdDialog,fileUpload) {
	"use strict";
	$scope.ReminderForm = buildToggler('ReminderForm');
	$scope.NewContact = buildToggler('NewContact');
	$scope.Update = buildToggler('Update');
	$('.update-view').hide();
	
	
	$scope.editNote = false;
	$scope.saveNote = false;
	$scope.addNote = false;
	$http.get(BASE_URL + 'api/notes/vendor/' + VENDORRID).then(function (Notes) {
		$scope.notes = Notes.data;
		$scope.AddNote = function () {
			$scope.addNote = true;
			var dataObj = $.param({
				description: $scope.note,
				relation_type: 'vendor',
				relation: VENDORRID,
			});
			var config = {
				headers: {
					'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
				}
			};
			var posturl = BASE_URL + 'trivia/addnote';
			$http.post(posturl, dataObj, config)
				.then(
					function (response) {
						$scope.addNote = false;
						if (response.data.success == true) {
							showToast(NTFTITLE, response.data.message, ' success');
							$('.note-description').val('');
							$scope.note = '';
							$http.get(BASE_URL + 'api/notes/vendor/' + VENDORRID).then(function (Notes) {
								$scope.notes = Notes.data;
							});
						} else {
							showToast(NTFTITLE, response.data.message, ' danger');
						}
					},
					function (response) {
						$scope.addNote = false;
					}
				);
		};

		$scope.EditNote = function (index) {
			var note = $scope.notes[index];
			$scope.editNote = true;
			$scope.edit_note = note.description;
			$scope.edit_note_id = note.id;
			$('#note_focus').focus();
			$('html, body').animate({
				scrollTop: $("#note_focus").offset().top
			}, 1000);
		}

		$scope.SaveNote = function () {
			$scope.saveNote = true;
			var id = $scope.edit_note_id;
			if (id) {
				var dataObj = $.param({
					description: $scope.edit_note,
				});
				var config = {
					headers: {
						'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
					}
				};
				var posturl = BASE_URL + 'trivia/updatenote/' + id;
				$http.post(posturl, dataObj, config)
					.then(
						function (response) {
							$scope.editNote = false;
							$scope.saveNote = false;
							$scope.edit_note = '';
							$http.get(BASE_URL + 'api/notes/vendor/' + VENDORRID).then(function (Notes) {
								$scope.notes = Notes.data;
							});
							showToast(NTFTITLE, response.data, ' success');
						},
						function (response) {
							$scope.editNote = false;
							$scope.saveNote = false;
						}
					);
			} else {
				$scope.editNote = false;
			}
		};

		$scope.modifyNote = false;
		$scope.DeleteNote = function (index) {
			$scope.modifyNote = true;
			var note = $scope.notes[index];
			var dataObj = $.param({
				notes: note.id
			});
			var config = {
				headers: {
					'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
				}
			};
			var posturl = BASE_URL + 'trivia/removenote';
			$http.post(posturl, dataObj, config)
				.then(
					function (response) {
						$scope.modifyNote = false;
						$scope.notes.splice($scope.notes.indexOf(note), 1);
					},
					function (response) {
						$scope.modifyNote = false;
					}
				);
		};
	});
	
		$scope.uploading = false; 
	$scope.uploadProjectFile = function() {
		
		$scope.uploading = true;
        var file = $scope.project_file;
        var uploadUrl = BASE_URL+'vendors/add_file/'+VENDORRID;
        fileUpload.uploadFileToUrl(file, uploadUrl, function(response) {
        	if (response.success == true) {
        		globals.mdToast('success', response.message);
        	} else {
        		globals.mdToast('error', response.message);
        	}
        	$scope.projectFiles = true;
        	$http.get(BASE_URL + 'vendors/projectfiles/' + VENDORRID).then(function (Files) {
        		$scope.files = Files.data;
        		$scope.projectFiles = false;
        	});
        	$scope.uploading = false;
        	$mdDialog.hide();
        });
    };


	$scope.vendorsLoader = true;
	function buildToggler(navID) {
		return function () {
			$mdSidenav(navID).toggle();

		};
	}
	globals.get_countries();
	$scope.getStates = function (country) {
		$http.get(BASE_URL + 'api/get_states/' + country).then(function (States) {
			$scope.states = States.data;
		});
	};
	$scope.close = function () {
		$mdSidenav('ReminderForm').close();
		$mdSidenav('NewContact').close();
		$mdSidenav('Update').close();
	};
	$scope.UploadFile = function (ev) {
		$mdDialog.show({
			templateUrl: 'addfile-template.html',
			scope: $scope,
			preserveScope: true,
			targetEvent: ev
		});
	};
	
	$scope.projectFiles = true;
	$http.get(BASE_URL + 'vendors/projectfiles/' + VENDORRID).then(function (Files) {
		$scope.files = Files.data;
		$scope.projectFiles = false;

		$scope.itemsPerPage = 6;
		$scope.currentPage = 0;
		$scope.range = function () {
			var rangeSize = 6;
			var ps = [];
			var start;

			start = $scope.currentPage;
			if (start > $scope.pageCount() - rangeSize) {
				start = $scope.pageCount() - rangeSize + 1;
			}
			for (var i = start; i < start + rangeSize; i++) {
				if (i >= 0) {
					ps.push(i);
				}
			}
			return ps;
		};
		$scope.prevPage = function () {
			if ($scope.currentPage > 0) {
				$scope.currentPage--;
			}
		};
		$scope.DisablePrevPage = function () {
			return $scope.currentPage === 0 ? "disabled" : "";
		};
		$scope.nextPage = function () {
			if ($scope.currentPage < $scope.pageCount()) {
				$scope.currentPage++;
			}
		};
		$scope.DisableNextPage = function () {
			return $scope.currentPage === $scope.pageCount() ? "disabled" : "";
		};
		$scope.setPage = function (n) {
			$scope.currentPage = n;
		};
		$scope.pageCount = function () {
			return Math.ceil($scope.files.length / $scope.itemsPerPage) - 1;
		};
		
		$scope.ViewFile = function(index, image) {
			$scope.file = $scope.files[index];
			$mdDialog.show({
				templateUrl: 'view_image.html',
				scope: $scope,
				preserveScope: true,
				targetEvent: $scope.file.id
			});
		}

		$scope.DeleteFile = function(id) {
			var confirm = $mdDialog.confirm()
				.title($scope.lang.delete_file_title)
				.textContent($scope.lang.delete_file_message)
				.ariaLabel($scope.lang.delete_file_title)
				.targetEvent(VENDORRID)
				.ok($scope.lang.delete)
				.cancel($scope.lang.cancel);

			$mdDialog.show(confirm).then(function () {
				var config = {
					headers: {
						'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
					}
				};
				$http.post(BASE_URL + 'vendors/delete_file/' + id, config)
					.then(
						function (response) {
							if(response.data.success == true) {
								showToast(NTFTITLE, response.data.message, ' success');
								$http.get(BASE_URL + 'vendors/projectfiles/' + VENDORRID).then(function (Files) {
									$scope.files = Files.data;
								});
							} else {
								showToast(NTFTITLE, response.data.message, ' danger');
							}
						},
						function (response) {
							console.log(response);
						}
					);

			}, function() {
				//
			});
		};
	});
  

	$http.get(BASE_URL + 'vendors/get_vendor_groups').then(function (Groups){
		$scope.groups = Groups.data;
	});
	$http.get(BASE_URL + 'warehouses/get_warehouse/' + VENDORRID).then(function (Vendors) {
		$scope.vendor = Vendors.data;
		$scope.isActive = $scope.vendor.vendor_isActive;
		$scope.getStates($scope.vendor.country_id);
		$scope.vendorsLoader = false;
	});	
	
	$scope.savingCustomer = false;
	$scope.UpdateVendor = function () {
		var imgname=$('.imagename').map(function() {
    return this.value;
}).get().join(', ');
		$scope.savingCustomer = true;
		if ($scope.vendor.trade_expiry_date) {
					$scope.vendor.trade_expiry_date = moment($scope.vendor.trade_expiry_date).format("YYYY-MM-DD")
				}
		var dataObj = $.param({
			name: $scope.vendor.name,
			groupid: $scope.vendor.group_id,
			taxoffice: $scope.vendor.taxoffice,
			taxnumber: $scope.vendor.taxnumber,
			ssn: $scope.vendor.ssn,
			executive: $scope.vendor.executive,
			address: $scope.vendor.address,
			zipcode: $scope.vendor.zipcode,
			country_id: $scope.vendor.country_id,
			state: $scope.vendor.state,
			city: $scope.vendor.city,
			town: $scope.vendor.town,
			phone: $scope.vendor.phone,
			fax: $scope.vendor.fax,
			email: $scope.vendor.email,
			web: $scope.vendor.web,
			risk: 0,
			status_id: +$scope.vendor.vendor_status_id,
			company_name: $scope.vendor.company_name,
					contact_number: $scope.vendor.contact_number,
					company_person: $scope.vendor.company_person,
					credit_period: $scope.vendor.credit_period,
					credit_limit: $scope.vendor.credit_limit,
					terms: $scope.vendor.terms,
					notes: $scope.vendor.notes,
					licence_no: $scope.vendor.licence_no,
					trade_expiry_date: $scope.vendor.trade_expiry_date,					
					img_name:imgname,
		});
		var posturl = BASE_URL + 'vendors/vendor/' + VENDORRID;
		$http.post(posturl, dataObj, config)
		.then(
			function (response) {
				$scope.savingCustomer = false;
				if (response.data.success == true) {
					$mdSidenav('Update').close();
					globals.mdToast('success', response.data.message);
					$http.get(BASE_URL + 'vendors/get_vendor/' + VENDORRID).then(function (Vendors){
						$scope.vendor = Vendors.data;
					});
				}else {
					globals.mdToast('error', response.data.message);
				}
			},
			function (response) {
				$scope.savingCustomer = false;
			}
			);
		
	};
	$scope.Delete = function (index) {
		console.log("sdfs");
		globals.deleteDialog(lang.attention, lang.delete_vendor, VENDORRID, lang.doIt, lang.cancel, 'warehouses/remove/' + VENDORRID, function(response) {
			if (response.success == true) {
				window.location.href = BASE_URL + 'warehouses';
			} else {
				globals.mdToast('error', response.message);
			}
		});
	};
	$scope.CloseModal = function () {
		$mdDialog.cancel();
	};
}

CiuisCRM.controller('Inventories_Controller', Inventories_Controller);
CiuisCRM.controller('Inventory_Controller', Inventory_Controller);