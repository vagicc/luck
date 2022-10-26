<?php

/**
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */

$pager->setSurroundCount(2);
?>


<ul class="pagination">
	<?php if ($pager->hasPreviousPage()) : ?>

		<li>
			<a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
				<!-- <span aria-hidden="true"><?= lang('Pager.first') ?></span> -->
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>

		<li>
			<a href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
				<span aria-hidden="true"><?= lang('Pager.previous') ?></span>
			</a>
		</li>
	<?php endif ?>

	<?php foreach ($pager->links() as $link) : ?>
		<li <?= $link['active'] ? 'class="active"' : '' ?>>
			<a href="<?= $link['uri'] ?>">
				<?= $link['title'] ?>
			</a>
		</li>
	<?php endforeach ?>

	<?php if ($pager->hasNextPage()) : ?>
		<li>
			<a href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>">
				<span aria-hidden="true"><?= lang('Pager.next') ?></span>
			</a>
		</li>
		<li>
			<a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
				<!-- <span aria-hidden="true"><?= lang('Pager.last') ?></span> -->
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	<?php endif ?>
</ul>