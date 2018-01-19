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
	if ($page != 0) {
		$elements[] = '<div class="pager-element" data-page="0"><i class="fa fa-backward"></i></div>';
		$elements[] = '<div class="pager-element" data-page="'.($page - 1).'"><i class="fa fa-chevron-left"></i></div>';
	}
	
	if ($page > 2) {
		$elements[] = '<div class="pager-element">...</div>';
	}
	if (($page - 2) >= 0) {
		$elements[] = '<div class="pager-element" data-page="'.($page - 2).'">'.($page - 1).'</div>';
	}
	if (($page - 1) >= 0) {
		$elements[] = '<div class="pager-element" data-page="'.($page - 1).'">'.$page.'</div>';
	}
	$elements[] = '<div class="pager-element active">'.($page + 1).'</div>';
	if (($page + 1) < $total_pages) {
		$elements[] = '<div class="pager-element" data-page="'.($page + 1).'">'.($page + 2).'</div>';
	}
	if (($page + 2) < $total_pages) {
		$elements[] = '<div class="pager-element" data-page="'.($page + 2).'">'.($page + 3).'</div>';
	}
	if (($total_pages - $page) > 3) {
		$elements[] = '<div class="pager-element">...</div>';
	}
	
	if ($page != ($total_pages - 1)) {
		$elements[] = '<div class="pager-element" data-page="'.($page + 1).'"><i class="fa fa-chevron-right"></i></div>';
		$elements[] = '<div class="pager-element" data-page="'.($total_pages - 1).'"><i class="fa fa-forward"></i></div>';
	}
	
	return '<div class="list_pager">'.implode('', $elements).'</div>';
}