<div class="panel box-shadow-none content-header">
	<div class="panel-body">
		<div class="col-md-12">
			<h3 class="animated fadeInLeft">菜单</h3>
			<p class="animated fadeInDown">
				菜单管理 <span class="fa-angle-right fa"></span> 修改
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
					<h4>菜单修改</h4>
				</div>
				<div class="panel-body" style="padding-bottom:30px;">
					<div class="col-md-12">
						<form method="post" class="form-horizontal" role="form">
							<div class="form-group"><label class="col-sm-2 control-label text-right">菜单名</label>
								<div class="col-sm-10"><input type="text" name="name" value="<?= $edit->name ?>" class="form-control"></div>
							</div>
							<div class="form-group"><label class="col-sm-2 control-label text-right">class</label>
								<div class="col-sm-10"><input type="text" name="class" value="<?= $edit->class ?>" class="form-control border-bottom" placeholder="请输入类名"></div>
							</div>
							<div class="form-group"><label class="col-sm-2 control-label text-right">method</label>
								<div class="col-sm-10"><input type="text" name="method" value="<?= $edit->method ?>" class="form-control border-bottom" placeholder="输入方法名"></div>
							</div>
							<div class="form-group"><label class="col-sm-2 control-label text-right">菜单层级</label>
								<div class="col-sm-10"><input type="number" name="level" value="<?= $edit->level ?>" class="form-control" placeholder="输入菜单级数"></div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label text-right">排序</label>
								<div class="input-group col-sm-10" style="margin-top: -15px;">
									<span class="input-group-addon" id="basic-addon3">前</span>
									<input type="range" name="order_by" min="1" max="10" value="<?= $edit->order_by ?>" class="form-control" id="basic-url" aria-describedby="basic-addon3">
									<span class="input-group-addon" id="basic-addon3">后</span>
								</div>
							</div>
							<div class="form-group"><label class="col-sm-2 control-label text-right">ICON</label>
								<div class="col-sm-10"><input type="text" name="icon" value="<?= $edit->icon ?>" class="form-control border-bottom" placeholder="icon小图标类名"></div>
							</div>


							<div class="form-group"><label class="col-sm-2 control-label text-right">是否显示</label>
								<div class="col-sm-10">
									<input type="checkbox" id="show" <?= $edit->is_show=='t' ? 'checked' : '' ?>>
									<input type="hidden" name="is_show" value="<?= $edit->is_show ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label text-right">所属上级</label>
								<div class="col-sm-10" style="margin-top: -30px;">
									<select name="parent" class="form-control">
										<option value="0">请选择</option>
										<?php if ($menus) : ?>
											<?php foreach ($menus as $key => $value) : ?>
												<option style="color: red;" value="<?= $value->id ?>" <?= $value->id == $edit->parent ? 'selected="selected"' : '' ?>>|<?= $value->name ?></option>
												<?php if ($value->child) : ?>
													<?php foreach ($value->child as $k => $val) : ?>
														<option value="<?= $val->id ?>" <?= $val->id == $edit->parent ? 'selected="selected"' : '' ?>>|-----<?= $val->name ?></option>
													<?php endforeach; ?>
												<?php endif; ?>
											<?php endforeach; ?>
										<?php endif; ?>

									</select>
								</div>
							</div>

							<div class="form-group"><label class="col-sm-2 control-label text-right">所属顶级</label>
								<div class="col-sm-10" style="margin-top: -30px;">
									<select name="department" class="form-control">
										<option value="">请选择</option>
										<?php foreach ($department as $key => $value) : ?>
											<option value="<?= $value->id ?>" <?= $edit->department == $value->id ? 'selected="selected"' : '' ?>><?= $value->name ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>

							<div class="form-group"><label class="col-sm-2 control-label text-right"> </label>
								<div class="col-sm-10">
									<div class="col-sm-12 padding-0">
										<input type="hidden" name="jumpURL" value="<?= site_url('menus/index/' . $edit->parent); ?>">

										<button class="btn btn-info btn-success" type="Submit">
											<i class="ace-icon fa fa-check bigger-110"></i>
											提交
										</button>

										&nbsp; &nbsp; &nbsp;
										<button class="btn" type="reset" onclick="javascript:history.back(-1);">
											<i class="ace-icon fa fa-undo bigger-110"></i>
											取消
										</button>
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
		onColor: "success",
		offColor: "danger",
		size: "small",
		onSwitchChange: function(event, state) {
			if (state == true) {
				// alert('显示');
				$("input[name='is_show']").val("true");
			} else {
				// alert('不显示');
				$("input[name='is_show']").val("false");
			}
		}
	});
</script>