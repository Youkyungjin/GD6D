
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <?$this->load->view('/admin/include/admin_common_script.php')?>
    <script src="/_common/js/common/admin/member/member.js"></script>
</head>


<body class="nav-md">
    <div class="container body">
        <div class="main_container">
	            <div class="col-md-3 left_col">
                <?$this->load->view('/admin/include/left_navi')?>
            <!-- top navigation -->
            <?$this->load->view('/admin/include/top_navi')?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>사용자 관리</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                        	<div class="x_panel">
                                <div class="x_title">
                                    <h2>사용자 정보 <small>현재 등록된 사용자 정보입니다.</small></h2>
                     	           	<div class="input-group navbar-right top_search" style="width:150px;">
                                    	<input type="text" class="form-control" placeholder="Search...">
                                    	<span class="input-group-btn">
                            				<button class="btn btn-default" type="button">Go!</button>
                            			</span>
                            		</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content" style="max-height:236px;overflow-y: auto;">
                                    <table class="table table-hover" >
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>아이디</th>
                                                <th>이름</th>
                                                <th>사용여부</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	
                                        	<?foreach ($member_list as $key){?>
                                            <tr class="member_row" seq="<?=$key['seq']?>">
                                                <th scope="row" ><?=$key['seq']?></th>
                                                <td><?echo $key['id']?></td>
                                                <td><?echo $key['name']?></td>
                                                <td><?echo ($key['state'])? "사용" : "사용안함";?></td>
                                            </tr>
                                            <?}?>
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>사용자 등록 <small>사용자 등록 창 입니다.</small></h2>
                                    <div class="nav navbar-right panel_toolbox">
                                        <button class="btn btn-round btn-primary">신규 등록</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form id="member_reg_fm" class="form-horizontal form-label-left" action="">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">아이디</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="mem_id" required="required" class="form-control" placeholder="아이디를 입력해주세요">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">이름</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="mem_name" class="form-control" placeholder="이름을 입력해주세요">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">비밀번호</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" id="mem_pw" class="form-control" value="passwordonetwo">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                             <label class="control-label col-md-3 col-sm-3 col-xs-12">비밀번호 확인</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" id="mem_pw2" class="form-control" value="passwordonetwo">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn  btn-success" >저장</button>
                                                <button type="submit" class="btn  btn-danger" >취소</button>
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
        <script type="text/javascript">
            $(function () {
                'use strict';
                var countriesArray = $.map(countries, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });
                // Initialize autocomplete with custom appendTo:
                $('#autocomplete-custom-append').autocomplete({
                    lookup: countriesArray,
                    appendTo: '#autocomplete-container'
                });
            });
        </script>
        <script src="/_common/js/admin/custom.js"></script>


        <!-- select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
        <!-- /select2 -->
        <!-- input tags -->
        <script>
            function onAddTag(tag) {
                alert("Added a tag: " + tag);
            }

            function onRemoveTag(tag) {
                alert("Removed a tag: " + tag);
            }

            function onChangeTag(input, tag) {
                alert("Changed a tag: " + tag);
            }

            $(function () {
                $('#tags_1').tagsInput({
                    width: 'auto'
                });
            });
        </script>
        <!-- /input tags -->
        <!-- form validation -->
        <script type="text/javascript">
            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form .btn').on('click', function () {
                    $('#demo-form').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });

            $(document).ready(function () {
				$('#member_reg_fm').submit(function(){
					
					
					return false;
				});
					
                
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form2 .btn').on('click', function () {
                    $('#demo-form2').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form2').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });
            try {
                hljs.initHighlightingOnLoad();
            } catch (err) {}
        </script>
        <!-- /form validation -->
        <!-- editor -->
        <script>
            $(document).ready(function () {
                $('.xcxc').click(function () {
                    $('#descr').val($('#editor').html());
                });
            });

            $(function () {
                function initToolbarBootstrapBindings() {
                    var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'],
                        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                    $.each(fonts, function (idx, fontName) {
                        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                    });
                    $('a[title]').tooltip({
                        container: 'body'
                    });
                    $('.dropdown-menu input').click(function () {
                            return false;
                        })
                        .change(function () {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                        })
                        .keydown('esc', function () {
                            this.value = '';
                            $(this).change();
                        });

                    $('[data-role=magic-overlay]').each(function () {
                        var overlay = $(this),
                            target = $(overlay.data('target'));
                        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                    });
                    if ("onwebkitspeechchange" in document.createElement("input")) {
                        var editorOffset = $('#editor').offset();
                        $('#voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                        });
                    } else {
                        $('#voiceBtn').hide();
                    }
                };

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                };
                initToolbarBootstrapBindings();
                $('#editor').wysiwyg({
                    fileUploadError: showErrorAlert
                });
                window.prettyPrint && prettyPrint();
            });
        </script>
        <!-- /editor -->
</body>

</html>