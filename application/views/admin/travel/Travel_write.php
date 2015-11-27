<!DOCTYPE html>
<html lang="en">

<head>
   <?$this->load->view('/admin/include/admin_common_script.php')?>
	<script src="/_common/js/admin/editor/external/google-code-prettify/prettify.js"></script>
	<link href="/_common/css/icheck/flat/green.css" rel="stylesheet">
	<script type="text/javascript" src="/_common/editor/smart_editor2/js/HuskyEZCreator.js" charset="utf-8"></script>
	<script type="text/javascript">
		var oEditors = [];
		function call_smartEditor2(){
			
			nhn.husky.EZCreator.createInIFrame({
    			oAppRef: oEditors,
    			elPlaceHolder: "blog_content",
    			sSkinURI: "/_common/editor/smart_editor2/SmartEditor2Skin.html",
    			htParams : {
    				bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
    				bUseVerticalResizer : true,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
    				bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
    				//aAdditionalFontList : aAdditionalFontSet,		// 추가 글꼴 목록
    				fOnBeforeUnload : function(){
    					//alert("완료!");
    				}
    			},
    			fCreator: "createSEditor2"
			});
		}

		$(document).ready(function () {
        	call_smartEditor2();
		});
	</script>
	
	<script type="text/javascript">
        $(document).ready(function () {
        	$('#birthday').daterangepicker({
            	singleDatePicker: true,
                calender_style: "picker_4"
            }, function (start, end, label) {
               console.log(start.toISOString(), end.toISOString(), label);
            });
        });
    </script>
    <script type="text/javascript">
		function delete_tagBtn(obj){
			console.log(obj);
			if(confirm("정말 이 태그를 삭제하시겠습니까?")){
				console.log(obj.target);
				obj.target.remove();
			}
		}
		
        $(document).ready(function () {

        	//태그 삭제버튼
			$('.tagBtn').bind("click",delete_tagBtn);

        	//서브밋 버튼
        	$('#demo-form2').bind('submit',function(){
        		oEditors.getById["blog_content"].exec("UPDATE_CONTENTS_FIELD", []);	// 에디터의 내용이 textarea에 적용됩니다.
            });


            //태그 추가버튼
	        $('.addBtn').click(function(){
	        	var tag_name = $('#tag-name').val();
	        	var tag_list = document.getElementsByClassName("tagBtn");
	        	var overlap_chk = true; 
	        	 
	        	$.each( tag_list, function(index,obj){
		        	if($(obj).text() == tag_name){
			        	alert("태그는 중복입력이 불가능합니다.");
			        	overlap_chk = false; 
			        	return false;
		        	}
	        	});

		        if(overlap_chk == true){
	    	        $('<div/>', {
	        	        type:"button",
	    	            text: tag_name,
	    	            id: 'tagBtn_'+tag_name,
	    	            class:"btn btn-success tagBtn"
	    	        }).appendTo(".tag_div");
	    	        
	    	        $('<input/>', {
	        	        type:"hidden",
	    	            name: "tag[]",
	    	            id: 'tagHidden_'+tag_name,
	    	            value: tag_name
	    	        }).appendTo("#tagBtn_"+tag_name);
		        }
		        $('.tagBtn').unbind('click');
    	        $(".tagBtn").bind("click",delete_tagBtn);
        	});
        });
    </script>
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <?$this->load->view('/admin/include/left_navi')?>
            </div>

            <!-- top navigation -->
            <?$this->load->view('/admin/include/top_navi')?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Form Elements</h3>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Design <small>different form elements</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="#">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">제목 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">내용 
                                            <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
												<textarea id="blog_content" name="content"  class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">태그 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12 tag_div" >
                                                <button type="button" class="addBtn btn btn-primary" style="margin-left: 10px; ">추가</button>
                                                <input type="text" id="tag-name" name="tag-name" style="line-height:30px;border-radius:0; width:15%;">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success submitBtn">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
                            <span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

            </div>

        </div>
    </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="/_common/js/admin/bootstrap.min.js"></script>

        <!-- chart js -->
        <script src="/_common/js/admin/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="/_common/js/admin/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="/_common/js/admin/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="/_common/js/admin/icheck/icheck.min.js"></script>
        <!-- tags -->
        <script src="/_common/js/admin/tags/jquery.tagsinput.min.js"></script>
        <!-- switchery -->
        <script src="/_common/js/admin/switchery/switchery.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="/_common/js/admin/moment.min2.js"></script>
        <script type="text/javascript" src="/_common/js/admin/datepicker/daterangepicker.js"></script>
        <!-- richtext editor -->
        <script src="/_common/js/admin/editor/bootstrap-wysiwyg.js"></script>
        <script src="/_common/js/admin/editor/external/jquery.hotkeys.js"></script>
        <script src="/_common/js/admin/editor/external/google-code-prettify/prettify.js"></script>
        <!-- select2 -->
        <script src="/_common/js/admin/select/select2.full.js"></script>
        <!-- form validation -->
        <script type="text/javascript" src="/_common/js/admin/parsley/parsley.min.js"></script>
        <!-- textarea resize -->
        <script src="/_common/js/admin/textarea/autosize.min.js"></script>
        <script>
            autosize($('.resizable_textarea'));
        </script>
        <!-- Autocomplete -->
        <script type="text/javascript" src="/_common/js/admin/autocomplete/countries.js"></script>
        <script src="/_common/js/admin/autocomplete/jquery.autocomplete.js"></script>
</body>

</html>