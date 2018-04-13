{include file="../common/header.tpl"}
{include file="../common/sidebar.tpl"}
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>分类管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">添加分类</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="post" class="form-x" action="{$smarty.const.WEB}index.php?p=Back&c=Category&a=add">
          <div class="form-group">
            <div class="label">
              <label for="sitename">分类名称</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="name" name="cat_name" size="50" placeholder="分类名称" data-validate="required:请填写您的分类名称" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="sitename">所属类别</label>
            </div>
            <div class="field">
              <select class="select" name="pid">
              	  <option value="0">主类别</option>
                  {foreach $data as $v}
                  <option value="{$v.cat_id}">{str_repeat(' -- ',$v['level'])}{$v.cat_name}</option>
                  {/foreach}
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="readme">分类描述</label>
            </div>
            <div class="field">
              <textarea class="input" rows="5" cols="50" placeholder="请填写分类描述" data-validate="required:请填写分类描述" name="cat_desc"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">排序</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="sort" name="sort" size="50" placeholder="请填写排序编号" data-validate="required:请填写排序编号" />
            </div>
          </div>
          <div class="form-button">
            <button class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div style='height:20px; border-bottom:1px #DDD solid'></div>
</div>
</body>
</html>