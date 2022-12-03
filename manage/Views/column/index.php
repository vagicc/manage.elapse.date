<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft">文章专栏</h3>
            <div class="row">
                <ol class="animated fadeInDown breadcrumb col-md-2 col-sm-12 col-xs-12">
                    <li><a href="<?= site_url() ?>">首页</a></li>
                    <li class="active">列表</li>

                    <!--按钮-->
                    <span class="hidden-md hidden-lg pull-right" id="search-btn" style="display: inline-block;cursor: pointer;">
                        搜索
                        <span class="caret"></span>
                    </span>
                </ol>
                <!--搜索内容-->
                <div class="col-md-10 col-sm-12 col-xs-12" id="search">
                    <ul class="">
                        <form method="get" class="input-group">

                            <!-- <li class="input-group">
                                <span class="input-group-addon">分类名</span>
                                <input class="form-control" type="text" name="category" value="<?= $_GET['category'] ?? '' ?>" placeholder="" style="height:35px;width:130px">
                            </li> -->

                            <!-- <li class="input-group">
                                <span class="input-group-addon" style="height:34px;">创建时间</span>
                                <input type="text" name="create" value="<?= $_GET['create'] ?? '' ?>" placeholder="请选择日期" id="date" class="form-control" style="height:35px;width:100px">
                            </li> -->

                            <li class="input-group">
                                <select name="show" class="form-control">
                                    <option value="">是否显示</option>
                                    <option value="0" <?= isset($_GET['show']) && $_GET['show'] == '0' ? 'selected="selected"' : '' ?>>不显示</option>
                                    <option value="1" <?= isset($_GET['show']) && $_GET['show'] == '1' ? 'selected="selected"' : '' ?>>显示</option>

                                </select>
                            </li>

                            <li>
                                <input type="submit" class="btn btn-outline btn-success" value="搜索" style="padding-right: 20px; padding-left: 20px;padding-top:5px;padding-bottom: 5px;">
                            </li>
                            <li>
                                <a href="<?= site_url($className . '/index') ?>" class="btn btn-outline btn-warning" style="padding-right: 20px; padding-left: 20px;padding-top:5px;padding-bottom: 5px;">重置</a>
                            </li>

                            <!-- <li>
 								<input type="submit" class="btn btn btn-gradient btn-info" value="搜索">
 							</li>
 							<li>
 								<a href="" class="btn btn-gradient btn-warning">重置</a>
 							</li> -->
                        </form>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">

                <!-- 警告(提示) start -->
                <?= view('alert/fade') ?>
                <!-- 警告(提示) end -->

                <div class="col-md-12 " style="padding-bottom:20px;">
                    <!-- <a href="javascript:history.back(-1);" class="right btn btn-gradient btn-default" style="margin-left:8px;" >后退</a> -->
                    <a href="<?= site_url('column/create/') ?>" title="新增" class="right btn btn-gradient btn-info">新增</a>
                    <h4 style="padding-left:10px;">列表（<?= $total ?>条）</h4>
                </div>

                <div class="responsive-table">
                    <form method="post" action="<?= site_url($className . '/expurgate/') ?>">
                        <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" class="icheck gou" name="checkbox1" />
                                    </th>
                                    <th>专栏名</th>
                                    <th>封面</th>
                                    <th>副标题</th>
                                    <th>作者</th>
                                    <th>价格</th>
                                    <th>收藏</th>
                                    <th>文章数</th>
                                    <th>SEO标题</th>
                                    <th>SEO关键词</th>
                                    <th>用户ID</th>
                                    <th>创建时间</th>

                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($list) : ?>

                                    <?php foreach ($list as $key => $value) : ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="icheck none" name="id[<?= $key ?>]" value="<?= $value->id ?>" />
                                            </td>
                                            <td><b class="hidden-md hidden-lg">专栏名：</b><?= $value->title ?></td>
                                            <td><b class="hidden-md hidden-lg">封面：</b><?= $value->surface_plot ?></td>
                                            <td><b class="hidden-md hidden-lg">副标题：</b><?= $value->subhead ?></td>
                                            <td><b class="hidden-md hidden-lg">作者：</b><?= $value->author ?></td>
                                            <td><b class="hidden-md hidden-lg">价格：</b><?= $value->price ?></td>
                                            <td><b class="hidden-md hidden-lg">收藏：</b><?= $value->collect ?></td>
                                            <td><b class="hidden-md hidden-lg">文章数：</b><?= $value->complete.'/'.$value->amount ?></td>
                                            <td><b class="hidden-md hidden-lg">SEO标题：</b><?= $value->seo_title ?></td>
                                            <td><b class="hidden-md hidden-lg">SEO关键词：</b><?= $value->seo_keywords ?></td>
                                            <td><b class="hidden-md hidden-lg">用户ID：</b><?= $value->create_id ?></td>
                                            
                                            <td><b class="hidden-md hidden-lg">创建时间：</b><?=$value->create_time?></td>
                                            
                                            <td>
                                                <a href="<?= site_url('article/index/?columns_id='.$value->id) ?>" style="color:#27C24C;"><i class="fa fa-cny"></i>此分类文章 <span class="text-muted"></span></a> |
                                                <a href="<?= site_url('column/edit/' . $value->id) ?>"><i class="fa fa-edit"></i>修改 <span class="text-muted"></span></a> |
                                                <a style="color: red;" href="<?= site_url('column/delete/' . $value->id) ?>" onclick="return confirm('是否要删除ID:<?= $value->id ?>（是否要删除文章：<?= $value->title ?>）？？');"><i class="fa fa-trash-o"></i>删除</a>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td colspan="999">
                                            <div class="pull-right">
                                                <?= $pager->links() ?>
                                            </div>

                                            <input type="checkbox" class="icheck pull-left gou" name="checkbox1" />

                                            <!-- <input type="button" class="btn btn-gradient btn-danger" value="删除" /> -->
                                            <input type="Submit" onclick="return confirm('是否删除选中的数据？？');" class="btn btn-gradient btn-danger" value="删除" />

                                            <!-- <input type="button" class=" btn btn-gradient btn-primary" value="修改" /> -->
                                            <a href="<?= site_url('column/create/') ?>" title="新增" class="btn  btn-gradient btn-success">新增</a>
                                            <!-- <input type="button" class="btn btn-gradient btn-default" value="返回" /> -->
                                            <input type="button" class="btn btn-gradient btn-default" value="后退" onclick="javascript:history.back(-1);" />

                                            <!-- <input type="button" class="btn btn-gradient btn-warning" value="警告" /> -->
                                            <!-- <input type="button" class="btn btn-gradient btn-info" value="通知" /> -->



                                        </td>

                                    </tr>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="200" style="text-align: center;">
                                            暂无数据!! 现在<a href="<?= site_url('column/create/') ?>">新增</a>数据
                                        </td>
                                    </tr>

                                <?php endif; ?>

                            </tbody>
                        </table>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>


<script src="asset/js/plugins/icheck.min.js"></script>

<link rel="stylesheet" type="text/css" href="asset/css/datepicker.css" />
<script type="text/javascript" src="asset/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="asset/js/locales/bootstrap-datepicker.zh-CN.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // 选项样式
        $('input').iCheck({
            checkboxClass: 'icheckbox_flat-red',
            radioClass: 'iradio_flat-red'
        });
        /*全选与反选*/
        var num = 0;
        $('.gou').next().each(function(i) {
            $(this).on('click', function() {

                if (num == 0) {
                    $('.icheck').prop('checked', true).parent().addClass('checked');
                    num += 1;
                } else {
                    $('.icheck').prop('checked', false).parent().removeClass('checked');
                    num = 0;
                }
            });
        });

        /*搜索居右设置*/
        var width = $(window).width();
        if (width > 990) {
            $('#search ul').addClass('pull-right');
        }
        $("#search-btn").click(function() {
            $('#search').toggle();
        });

        /*选择日期*/
        $("#date").datepicker({
            language: "zh-CN",
            autoclose: true, //选中之后自动隐藏日期选择框
            clearBtn: true, //清除按钮
            todayBtn: true, //今日按钮
            format: "yyyy-mm-dd" //日期格式，
        });

    });
</script>