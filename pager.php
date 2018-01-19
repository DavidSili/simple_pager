<?php
/**
 * A simple pager
 * This pager is used in combination with jQuery since it does not have any actual links.
 * @author David Šili
 *         agapetos@gmail.com
 *
 * @param $total_pages  integer     Total number of pages
 * @param $page         integer     Number of pages (zero based)
 *
 * @return string
 */
function pager($total_pages, $page) {
	$elements = array();
	$slot = array(
		($page == 0) ? ' pager-hidden' : '',
		($page == 0) ? ' pager-hidden' : '',
		($page <= 2) ? ' pager-hidden' : '',
		(($page - 2) < 0) ? ' pager-hidden' : '',
		(($page - 1) < 0) ? ' pager-hidden' : '',
		'',
		(($page + 1) >= $total_pages) ? ' pager-hidden' : '',
		(($page + 2) >= $total_pages) ? ' pager-hidden' : '',
		(($total_pages - $page) <= 3) ? ' pager-hidden' : '',
		($page == ($total_pages - 1)) ? ' pager-hidden' : '',
		($page == ($total_pages - 1)) ? ' pager-hidden' : '',
	);
	
	$elements[] = '<div class="pager-element'.$slot[0].'" data-page="0"><i class="fa fa-backward"></i></div>';
	$elements[] = '<div class="pager-element'.$slot[1].'" data-page="'.($page - 1).'"><i class="fa fa-chevron-left"></i></div>';
	$elements[] = '<div class="pager-element'.$slot[2].'">...</div>';
	$elements[] = '<div class="pager-element'.$slot[3].'" data-page="'.($page - 2).'">'.($page - 1).'</div>';
	$elements[] = '<div class="pager-element'.$slot[4].'" data-page="'.($page - 1).'">'.$page.'</div>';
	$elements[] = '<div class="pager-element active'.$slot[5].'">'.($page + 1).'</div>';
	$elements[] = '<div class="pager-element'.$slot[6].'" data-page="'.($page + 1).'">'.($page + 2).'</div>';
	$elements[] = '<div class="pager-element'.$slot[7].'" data-page="'.($page + 2).'">'.($page + 3).'</div>';
	$elements[] = '<div class="pager-element'.$slot[8].'">...</div>';
	$elements[] = '<div class="pager-element'.$slot[9].'" data-page="'.($page + 1).'"><i class="fa fa-chevron-right"></i></div>';
	$elements[] = '<div class="pager-element'.$slot[10].'" data-page="'.($total_pages - 1).'"><i class="fa fa-forward"></i></div>';
	
	return '<div class="list_pager">'.implode('', $elements).'</div>';
}
