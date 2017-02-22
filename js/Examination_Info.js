var mydate=new Date();
var year=mydate.getFullYear();
var month=mydate.getMonth()+1;
month=(month<10?"0"+month:month);
var str=(year.toString()+'-'+month.toString());
$(function(){
	
	$('#Examination_Info').datagrid({
		title:'考试成绩排行榜',
		loadingMessage:'正在努力加载中......',
		url:'Examination_Info/Examination_Info_data.php?str='+str+'',
		fitColumns:true,
		singleSelect:'true',
		sortName:'Total',
		sortOrder:'desc',
		rownumbers:true,
		columns:[[
		{field:'Result_ID',hidden:true},  
        {field:'Name',title:'姓名',width:100,align:'center',sortable:true},    
        {field:'Radio_Results',title:'单选题得分',width:100,align:'center',sortable:true},    
        {field:'Multiselect_Results',title:'多选题得分',width:100,align:'center',sortable:true},
		{field:'Simple_Results',title:'简答题得分',width:100,align:'center',sortable:true},
		{field:'Total',title:'总分',width:100,align:'center',sortable:true},
		{field:'Result_Date',title:'考试日期',width:300,align:'center',sortable:true}   
		]],  
		toolbar:'#dd'
		});
	
	$('#myselect').change(function(){
		//alert($(this).children('option:selected').val());
		var p1 = $(this).children('option:selected').val();
		$('#Examination_Info').datagrid('load',{
			str:p1
		});
	});
		 
	});
