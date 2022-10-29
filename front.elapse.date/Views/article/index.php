<!-- Main -->
<!-- Five -->
<section id="five" class="wrapper style2 special fade">
    
    <div class="container">
        <header>
            <h2>旺财狗</h2>
            <p>能帮助你、我、他快速搜索查找！真一只乖狗狗</p>
        </header>
        <form method="post" action="#" class="container 50%">
            <div class="row uniform 50%">
                <div class="8u 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="旺财，快去搜索一下！！" /></div>
                <div class="4u$ 12u$(xsmall)"><input type="submit" value="放狗，搜一下" class="fit special" /></div>
            </div>
        </form>
    </div>
</section>
<div id="main" class="wrapper style1">


    <div class="container">
        <!-- <header class="major">
			<h2>Linux文章列表</h2>
			<p>这里做个简单的文章列表页</p>
		</header> -->

        <!-- Lists -->
        <section>
            <section>
                <h3>技术分享</h3>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>标题</th>
                                <th>最后修改</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) : ?>
                                <tr>
                                    <td>
                                        <a href="<?= site_url('article/detail/' . $value->id) ?>" title="<?= $value->title ?>" target="_blank" style="border-bottom:none;">
                                            <?= $value->title ?>
                                        </a>
                                    </td>
                                    <td><?= $value->last_time??$value->create ?></td>
                                </tr>
                                 
                            <?php endforeach; ?>

                             
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" style="text-align:center">
                                    <?= $pager->links() ?>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td colspan="2" style="text-align:center">
                                    <ul class="pagination">
                                        
                                        <li><a href="javascript:;" class="page active">1</a></li>
                                        <li><a href="#" class="page">2</a></li>
                                        <li><a href="#" class="page">3</a></li>
                                        <li><span>&hellip;</span></li>
                                        <li><a href="#" class="page">8</a></li>
                                        <li><a href="#" class="page">9</a></li>
                                        <li><a href="#" class="page">10</a></li>
                                        <li><a href="#" class="button">Next</a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:center">
                                    <ul class="pagination">
                                        <li><span class="button">上一页</span></li>
                                        <li><a href="#" class="page ">1</a></li>
                                        <li><a href="javascript:;" class="page active">2</a></li>
                                        <li><a href="#" class="page">3</a></li>
                                        <li><span>&hellip;</span></li>
                                        <li><a href="#" class="page">8</a></li>
                                        <li><a href="#" class="page">9</a></li>
                                        <li><a href="#" class="page">10</a></li>
                                        <li><a href="#" class="button">下一页</a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:center">
                                    <ul class="pagination">
                                        <li><span class="button">上一页</span></li>
                                        <li><a href="#" class="page ">1</a></li>
                                        <li><a href="#" class="page active">2</a></li>
                                        <li><a href="#" class="page">3</a></li>
                                        <li><span>&hellip;</span></li>
                                        <li><a href="#" class="page">8</a></li>
                                        <li><a href="#" class="page">9</a></li>
                                        <li><a href="#" class="page">10</a></li>
                                    </ul>
                                </td>
                            </tr> -->
                        </tfoot>
                    </table>
                </div>

            </section>
 
        </section>

    </div>

</div>