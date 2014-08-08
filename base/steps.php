<?php $page="base"?>
<?php $title="步骤条"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<div class="row">
    <div class="page-header">
        <h1>
            步骤条<small>页面流程步骤</small>
            <?php  include("../templates/wangwang.php"); ?>
        </h1>
    </div>
    <div class="row">
        <div class="flow-steps">
            <ol class="num4 unstyled">
                <li class="first">
                    1. 确认订单信息
                </li>
                <li class="">
                    2. 付款到支付宝
                </li>
                <li class="">
                    3. 确认收货
                </li>
                <li class="last">
                    4. 确认收货
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="flow-steps">
            <ol class="num4 unstyled">
                <li class="first current">
                    1. 确认订单信息
                </li>
                <li class="">
                    2. 付款到支付宝
                </li>
                <li class="">
                    3. 确认收货
                </li>
                <li class="last">
                    4. 确认收货
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="flow-steps">
            <ol class="num4 unstyled">
                <li class="first current-prev">
                     <i class="icon-ok"></i> 1. 确认订单信息
                </li>
                <li class="current">
                    2. 付款到支付宝
                </li>
                <li class="">
                    3. 确认收货
                </li>
                <li class="last">
                    4. 确认收货
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="flow-steps">
            <ol class="num4 unstyled">
                <li class="first done">
                     <i class="icon-ok"></i> 1. 确认订单信息
                </li>
                <li class="current-prev">
                     <i class="icon-ok"></i> 2. 付款到支付宝
                </li>
                <li class="current">
                    3. 确认收货
                </li>
                <li class="last">
                    4. 确认收货
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="flow-steps">
            <ol class="num4 unstyled">
                <li class="first done">
                    <i class="icon-ok"></i> 1. 确认订单信息
                </li>
                <li class="done">
                    <i class="icon-ok"></i> 2. 付款到支付宝
                </li>
                <li class="current-prev">
                     <i class="icon-ok"></i> 3. 确认收货
                </li>
                <li class="last current">
                    4. 确认收货
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="span8">
            <h2>说明</h2>
            
            <p>steps下面的第一个li和最后一个li需要加上.first和.last这两个class</p>
            <p>ol和ul的.num4是用来控制有几步的，已经定义的步骤有：.num3,.num4,.num5,.num6</p>
            <p>当某一步骤处于激活状态时，需要加上.current这个class，还在需要为上一个步骤的li加上current-prev这个class</p>
            <p>当某一步骤已经完成时，需要加上.done这个class，current-prev本身就已经代表完成，所以不需要再加</p>
        </div>
        <div class="span16">
            
            <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"flow-steps"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"num4"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"first"</span><span class="tag">&gt;</span><span class="pln">1.步骤1</span><span class="tag">&lt;/li&gt;</span></li><li class="L3"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">""</span><span class="tag">&gt;</span><span class="pln">1.步骤2</span><span class="tag">&lt;/li&gt;</span></li><li class="L4"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">""</span><span class="tag">&gt;</span><span class="pln">1.步骤3</span><span class="tag">&lt;/li&gt;</span></li><li class="L5"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"last"</span><span class="tag">&gt;</span><span class="pln">1.步骤4</span><span class="tag">&lt;/li&gt;</span></li><li class="L6"><span class="pln">  </span><span class="tag">&lt;/ol&gt;</span></li><li class="L7"><span class="tag">&lt;/div&gt;</span></li><li class="L8"><span class="pln">            </span></li></ol></pre>

        </div>
    </div>
</div>

<?php  include("../templates/footer.php"); ?>
