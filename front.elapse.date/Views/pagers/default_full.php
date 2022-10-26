<?php

/**
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */

$pager->setSurroundCount(2);
?>


<ul class="pagination">
	<?php if ($pager->hasPreviousPage()) : ?>

		<li>
			<a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>" class="page">
				<!-- <span aria-hidden="true"><?= lang('Pager.first') ?></span> -->
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>

		<!-- 上一页 -->
		<li>
			<a href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>" class="button">
				<span aria-hidden="true"><?= lang('Pager.previous') ?></span>
			</a>
		</li>
	<?php endif ?>

	<!-- 数字页 -->
	<?php foreach ($pager->links() as $link) : ?>
		<li>
			<a href="<?= $link['active'] ? 'javascript:;' : $link['uri'] ?>" <?= $link['active'] ? 'class="page active"' : 'class="page"' ?>>
				<?= $link['title'] ?>
			</a>
		</li>
	<?php endforeach ?>

	<?php if ($pager->hasNextPage()) : ?>
		<li>
			<a href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>" class="button">
				<span aria-hidden="true"><?= lang('Pager.next') ?></span>
			</a>
		</li>
		<li>
			<a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>" class="page">
				<!-- <span aria-hidden="true"><?= lang('Pager.last') ?></span> -->
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	<?php endif ?>
</ul>