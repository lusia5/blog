{include file="../common/header.tpl"}
{include file="../common/sidebar.tpl"}
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>站长管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">站长信息</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="post" class="form-x" action="" >
          <div class="form-group">
            <div class="label">
              <label for="sitename">网名</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="nickname" name="nickname" size="50" placeholder="站长网名" data-validate="required:请填写站长网名" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">职业</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="job" name="job" size="50" placeholder="请填写您的职业" data-validate="required:请填写您的职业" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">籍贯</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="address" name="address" size="50" placeholder="请填写您的籍贯" data-validate="required:请填写您的籍贯" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">电话</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="tel" name="tel" size="50" placeholder="请填写您的电话" data-validate="required:请填写您的电话" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">邮箱</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="email" name="email" size="50" placeholder="请填写您的邮箱" data-validate="required:请填写您的邮箱" />
            </div>
          </div>
          <div class="form-button">
            <button name="submit" class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>
    <div style='height:40px; border-bottom:1px #DDD solid'></div>
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建 </p>  
</div>