var mydate=new Date();
var str=""+mydate.getFullYear()+"年";
str +=(mydate.getMonth()+1)+"月";
console.log(str);
$(function(){
	$('#Examination_Info').datagrid({
		title:str+'份考试成绩排行榜',
		loadingMessage:'正在努力加载中......',
		url:'Examination_Info_data.php',
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
		toolbar: [{
		text:'删除成绩',
		iconCls: 'icon-cancel',
		handler: function(){
			var row = $('#Examination_Info').datagrid('getSelected');
			if (row){
				$.messager.confirm('删除','确认删除此题吗？',function(r){
					if (r){
						$.post('Examination_Info_data_delect.php',{Result_ID:row.Result_ID},function(result){
							console.log(result)
							if (result.success){
								$.messager.show({	// show error message
									title: '删除成功',
									msg: '成绩已删除！'
								});
								$('#Examination_Info').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: '错误',
									msg: result.msg
								});
							}
						},'json');
					}
				});
			}
		
			}	
	}]
	
		});
		 
	});