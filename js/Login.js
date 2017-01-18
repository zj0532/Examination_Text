
$(function(){
	'use strict';
	$('#Layout_Log').layout();
	$('#accordion_info').accordion({
		fit:true
		});
	$('#center').panel();
	
	});
	
function Test(){
	'use strict';
	$("#center").load("Network_Test_Paper.php");	
}

function Approval(){
			$("#center").load("Marking.php");
			};
			
function Simple(){
			$("#center").load("Simple_Admin.php");
	};
		
function paper(){
		$('#center').load("Paper_Eedit.php");
	};

function Inf(){
		$('#center').load("Examination_Info.php");
	};

function Edit_Password(){
		$('#center').load("Edit_Password.php");
	};
function Set_Test(){
		$('#center').load("Set_Test/Set_Test.php");
	};

function Choose_Edit(){
		$('#center').load("Choose_Edit/Choose_Edit.php");
	};

function Radio_Edit(){
		$('#center').load("Radio_Edit/Radio_Edit.php");
}


