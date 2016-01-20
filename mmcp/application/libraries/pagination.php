<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class pagination {

  public function print_page($page, $totalpage) {
    $paging = "";
    if ($totalpage > 1) {
      $initial = 0;
      if ($page - 4 > 1) {
        $initial = $page - 5;
      } else {
        $initial = 0;
      }

      $total = 0;
      if ($page + 4 <= $totalpage) {
        $total = $page + 4;
      } else {
        $total = $totalpage;
      }

      $paging = "";
      $paging .= "<li><a href='?page=1' class='page'>&laquo;</a></li>";
      for ($x = $initial; $x < $total; $x++) {
        $paging .= "<li><a href='?page=" . ($x + 1) . "' class='page'>" . ($x + 1) . "</a></li>";
      }
      $paging .= "<li><a href='?page=" . $totalpage . "' class='page'>&raquo;</a></li>";
    }

    return $paging;
    //end paging
  }

}
