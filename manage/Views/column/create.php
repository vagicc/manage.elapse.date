<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft">新增文章专栏</h3>
            <p class="animated fadeInDown">
                <a href="<?= site_url() ?>">首页</a>
                <span class="fa-angle-right fa"></span>
                <a href="<?= site_url('column/index/') ?>">专栏列表</a>
                <span class="fa-angle-right fa"></span> 新增
            </p>
        </div>
    </div>
</div>

<div class="form-element">
    <div class="col-md-12 padding-0">
        <div class="col-md-12">
            <div class="panel form-element-padding">
                <div class="panel-heading">
                    <a href="javascript:history.back(-1);" class="btn btn-default right">返回</a>
                    <h4>创建新专栏</h4>
                </div>
                <div class="panel-body" style="padding-bottom:30px;">
                    <div class="col-md-12">
                        <form method="post" class="form-horizontal" role="form">

                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">文章专栏名：</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" value="<?= old('title') ?>" class="form-control">
                                    <span class="bar"><?= \Config\Services::validation()->showError('title'); ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">副标题：</label>
                                <div class="col-sm-10">
                                    <input type="text" name="subhead" value="<?= old('subhead') ?>" class="form-control">
                                    <span class="bar"><?= \Config\Services::validation()->showError('subhead'); ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">封面图：</label>
                                <div class="col-sm-10">
                                    <input type="text" name="surface_plot" value="<?= old('surface_plot') ?>" class="form-control">
                                    <span class="bar"><?= \Config\Services::validation()->showError('surface_plot'); ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">作者：</label>
                                <div class="col-sm-10">
                                    <input type="text" name="author" value="<?= old('author') ?>" class="form-control">
                                    <span class="bar"><?= \Config\Services::validation()->showError('author'); ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">简介</label>
                                <div class="col-sm-10">
                                    <textarea name="excerpt" id="form-field-11" class="autosize-transition form-control" placeholder="SEO描述"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">排序</label>
                                <div class="input-group" style="margin-top: -15px;">
                                    <span class="input-group-addon" id="basic-addon3">从小排到大</span>
                                    <input type="text" name="order_by" value="1" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label text-right">是否显示</label>
                                <div class="col-sm-10">
                                    <input type="checkbox" id="show" checked>
                                    <input type="hidden" name="show" value="1">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">SEO标题</label>
                                <div class="col-sm-10">
                                    <input name="seo_title" id="form-field-11" class="autosize-transition form-control" placeholder="SEO标题">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">SEO关键词</label>
                                <div class="col-sm-10">
                                    <input name="seo_keywords" id="form-field-11" class="autosize-transition form-control" placeholder="SEO关键词">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right">SEO描述</label>
                                <div class="col-sm-10">
                                    <textarea name="seo_description" id="form-field-11" class="autosize-transition form-control" placeholder="SEO描述"></textarea>
                                </div>
                            </div>






                            <div class="form-group"><label class="col-sm-2 control-label text-right"> </label>
                                <div class="col-sm-10">
                                    <div class="col-sm-12 padding-0">
                                        <input type="hidden" name="create_id" id="category" value="<?= session('id') ?>">

                                        <input class="submit btn btn-danger" type="submit" value="提交">
                                        &nbsp; &nbsp; &nbsp;
                                        <input class="btn btn-default" type="reset" value="重置">
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" type="text/css" href="asset/css/bootstrap-switch.css">
<script src="asset/js/bootstrap-switch.js"></script>
<script type="text/javascript">
    $("#show").bootstrapSwitch({
        onText: '显示',
        offText: '隐藏',
        onColor: "info",
        offColor: "danger",
        size: "small",
        onSwitchChange: function(event, state) {
            if (state == true) {
                // alert('显示');
                $("input[name='show']").val(1);
            } else {
                // alert('不显示');
                $("input[name='show']").val(0);
            }
        }
    });
</script>