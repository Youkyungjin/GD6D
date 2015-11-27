<!DOCTYPE html>
<html lang="en">

<head>
    <?$this->load->view('/admin/include/admin_common_script.php')?>
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
                            <h3>
                  			 여행 카테고리
                   			 <small>
                   			     광두와 육덩이의 여행에 대한 이야기
                   			 </small>
            			    </h3>
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
                                    <h2>여행 리스트 <small></small></h2>
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

                                    <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                        <thead>
                                            <tr class="headings">
<!--                                                 <th> -->
<!--                                                     <input type="checkbox" id="check-all" class="flat"> -->
<!--                                                 </th> -->
                                                <th class="column-title">번호 </th>
                                                <th class="column-title">등록날짜 </th>
                                                <th class="column-title">제목 </th>
                                                <th class="column-title">여행지 </th>
                                                <th class="column-title">상태 </th>
                                                <th class="column-title">Amount </th>
                                                <th class="column-title no-link last">
                                                	<span class="nobr">관리</span>
                                                </th>
                                                <th class="bulk-actions" colspan="7">
                                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                            </th>
                                </tr>
                            </thead>

                            <tbody>
                                			<tr class="even pointer">
<!--                                      			<td class="a-center "><input type="checkbox" class="flat" name="table_records" ></td> -->
        				                        <td class=" ">1</td>
                                    			<td class=" ">May 23, 2014 11:47:56 PM </td>
                                    			<td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                    			<td class=" ">John Blank L</td>
                                    			<td class=" ">Paid</td>
                                    			<td class="a-right a-right ">$7.45</td>
                                    			<td class=" last">
                                    				<a href="#">수정</a>
                                    				/
                                    				<a href="#">삭제</a>
                                                 </td>
                                            </tr>
<!--                                             <tr class="odd pointer"> -->
<!--                                                 <td class="a-center "> -->
<!--                                                     <input type="checkbox" class="flat" name="table_records"> -->
<!--                                                 </td> -->
<!--                                                 <td class=" ">121000039</td> -->
<!--                                                 <td class=" ">May 23, 2014 11:30:12 PM</td> -->
<!--                                                 <td class=" "> -->
<!--                                                 	<a href="#">홍콩</a> -->
<!--                                                 </td> -->
<!--                                                 <td class=" ">John Blank L</td> -->
<!--                                                 <td class=" ">Paid</td> -->
<!--                                                 <td class="a-right a-right ">$741.20</td> -->
<!--                                                 <td class=" last"><a href="#">View</a> -->
<!--                                                 </td> -->
<!--                                             </tr> -->
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

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
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="/_common/js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="/_common/js/admin/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="/_common/js/admin/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="/_common/js/admin/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="/_common/js/admin/icheck/icheck.min.js"></script>

    <script src="/_common/js/admin/custom.js"></script>

</body>

</html>