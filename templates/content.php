<section>
  <div class="page-header">
      <h1>
        <?php echo $title; ?>
        <?php include('api.php');?>
        <?php include('useloader.php');?>
        <?php include('wangwang.php');?>

      </h1>
  </div>  

  <div class="row-fluid">
    <div class="span19 demo-container">
      <iframe id="J_Demo" name="demo-form" class="demo-frame" src="" width="100%" height="100%" frameborder="0">
        
      </iframe>
    </div>
    <div class="span4 nav-list">
      <h2 class="nav-title">示例</h2>
      <div id="J_Menu">
        
      </div>
    </div>
  </div>
  <!---->
  <div id="tab"></div>
  <form action="../run/run.php" method="post" class="row-fluid" target="demo-form">
    <div id="panel" class="span20">
        <pre class="prettyprint linenums" id="J_Src"></pre>
        <div>
          <pre class="prettyprint linenums" id="J_Html"></pre>
          <textarea id="J_TxtHtml" name="html" class="span20 hide" rows="50"></textarea>
        </div>
        <div>
          <div class="button-group pull-right">
            <button class="button" type="button" id="J_Edit">编辑</button>
            <button class="button" id="J_Run">运行</button>
          </div>
          <textarea id="J_Txtjs" name="script" class="span20 hide" rows="50"></textarea>
          <pre class="prettyprint linenums" id="J_JS"></pre>
          <input id="J_use" type="hidden" name="useloader" value="true">
          <input id="J_kissy" type= "hidden" name="useKissy">
        </div>
    </div>

  </form>
 

  <script type="text/javascript">

  BUI.use(['bui/cookie','bui/menu','bui/tab'],function(Cookie,Menu,Tab){
    var loaderStr = Cookie.get('loader'), 
      loadParam = '?loader=' + loaderStr,
      regxScript = /<script[^><]*>[^<]*<\/script>/ig,
      indexStr = '<!--t为时间戳-->';

    var CLS_DOC = 'doc-content',
      demoEl = $('#J_Demo'),
      sideMenu = new Menu.Menu({//new BUI.Tab.Tab({
        render : '#J_Menu',
        autoRender : true,
        elCls : 'demo-menu',//'nav-tabs',
        idField : 'href',
        children : menus,
        itemTpl : '<a href="{href}'+ loadParam+'">{text}</a>'
      });

    sideMenu.get('el').delegate('a','click',function(ev){
      ev.preventDefault();
    });
    sideMenu.on('itemselected',function (ev) {
      resetDemo();
    });
    var navPage = getNavPage(),
      selectedItem = null;
    if(navPage){
      selectedItem = sideMenu.getItem(navPage);
    }
    selectedItem = selectedItem || sideMenu.getItemAt(0);
    sideMenu.setSelected(selectedItem);

    demoEl.on('load',function(){
      /*var frameDoc = demoEl[0].contentWindow.document,
        docBody = frameDoc.body||frameDoc.documentElement,
        docHeight = $(docBody).height() + 50,
        selectedItem = sideMenu.getSelected(),
        minHeight = selectedItem.get('minHeight') || 0,
        maxHeight = selectedItem.get('maxHeight'),
        finalHeight = minHeight > docHeight ? minHeight : docHeight;

      if(maxHeight && finalHeight > maxHeight){
        finalHeight = maxHeight;
      }
      demoEl.height(finalHeight);

      var docContent = $(docBody).find('.' + CLS_DOC),
        lastScript = $(docBody).find('script').last(),
        htmlEl = $(docBody).find('.demo-content');
      if(!lastScript.hasClass('ga-script')){
        setScript(lastScript.html());
      }
      
      setHtml(htmlEl.html());
      if(docContent.length){
        setSrc(docContent.html());
      }else{*/
        fetchSrc(selectedItem.get('href') + loadParam);
     // }
    });

    var tab = new Tab.TabPanel({
      render : '#tab',
      elCls : 'nav-tabs',
      panelContainer : '#panel',
      autoRender: true,
      children:[
        {text:'源代码',value:'1'}/*,
        {text:'HTML',value:'2'},
        {text:'JS',value:'3'}*/
      ]
    });
    tab.setSelected(tab.getItemAt(0));
    /*
    $('#J_Edit').on('click',function(){
      var sender = $(this);
      if(sender.text() == '编辑'){
        sender.text('取消');
        $('#J_Txtjs').show();
        $('#J_Txtjs').height($('#J_JS').height());
        $('#J_JS').hide();
      }else{
        sender.text('编辑');
        $('#J_JS').show();
        $('#J_Txtjs').hide();
      }
    });
    */
    $('#J_SelLoader').val(loaderStr);
    $('#J_SelLoader').on('change',function(){
      var loader = $('#J_SelLoader').val();
      Cookie.set('loader',loader);
      location.reload();
    });
    function resetDemo () {
      var item = sideMenu.getSelected(),
        href;
      if(item){
        href = item.get('href');
        demoEl.attr('src',href + loadParam);
        setNavPage(href);
      }
    }

    function setSrc(data){
      $('#J_Src').text(data);
      prettyPrint();
    }

    function setScript(script){
      $('#J_JS').text(script);
      $('#J_Txtjs').val(script);
    }
    function setHtml(html){
      var index = html.indexOf(indexStr);
      if(index !== -1){
        html = html.substring(0,index);
      }
      //html = html.replace(regxScript,'');
      $('#J_Html').text(html);
      $('#J_TxtHtml').text(html);
    }
    //source
    function fetchSrc (src) {
      if(src.indexOf('?') !== -1){
        src = src + '&source=true';
      }else{
        src = src + '?source=true';
      }
      $.get(src,function (data) {
        setSrc(data);
      })
    }

    //更改地址栏连接
    function setNavPage(href){
      href = href||'';

      var str = '#'+href;
      location.hash =str;
    }

    function getNavPage(){
      var str = location.hash,
        href = '';
      if(str){
        href = str.substring(1);
      }
      return href;
    }
  });
    
  </script>
</section>
