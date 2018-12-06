<?php

class get_paging {

    var $record_per_page = 10;
    var $pages = 5;
    var $tbl, $file_names, $order, $query;

///////// GET THE VALUE OF START VARIABLE////////////////

    function start() {
        if (isset($_REQUEST["start"]))
            return $start = $_REQUEST["start"];
        else
            return $start = 0;
    }

//////////////  END OF START FUNCTION///////////////////
//////////////  GET THE CURRENT FILE NAME ///////////////////

    function file_names() {
        $pt = explode("/", $_SERVER['SCRIPT_FILENAME']);
        $totpt = count($pt);
        //return $this->file_names = $pt[$totpt - 1];
    }

//////////////  END OF FILE_NAME FUNCTION///////////////////

    function runquery($query) {
        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
        return mysqli_query($con, $query);
    }

    function number_pagingid_manual($query, $record_per_page = '', $pages = '', $detail = '', $bottom = '', $simple = '', $cur_page = "", $query_string = "", $from_date, $to_date) {
        $this->file_names();
        $this->query = $query;

        if ($record_per_page > 0)
            $this->record_per_page = $record_per_page;

        if ($pages > 0)
            $this->pages = $pages;

        $result = $this->runquery($this->query);
        $totalrows = mysqli_affected_rows();

        $start = $this->start();

        //$order = $_GET['order'];
        $this->query.=" limit $start," . $this->record_per_page;
        $result = $this->runquery($this->query);
        $total = mysqli_affected_rows();

        $total_pages = ceil($totalrows / $this->record_per_page);
        $last_page = ($total_pages - 1) * $this->record_per_page;
        $current_page = ($start + $this->record_per_page) / $this->record_per_page;
        $loop_counter = ceil($current_page / $this->pages);
        $start_loop = ($loop_counter * $this->pages - $this->pages) + 1;
        $end_loop = ($this->pages * $loop_counter) + 1;

        if ($current_page > 2)
            $start_loop = $current_page - 2;

        if ($total_pages >= $current_page + 3) {
            $end_loop = $current_page + 3;
        }

        if ($end_loop > $total_pages)
            $end_loop = $total_pages + 1;

        $tmpva = "";
        foreach ($_GET as $V => $K) {
            if ($V != "start")
                $tmpva.="&" . $V . "=" . $K;
        }


        if ($detail != "N" || $simple != "N")
        // $this->tbl = "<div class='pagingpdiv'>Showing Result " . ($start + 1) . " - " . ($start + $total) . " of " . $totalrows . " Records</div>";
        //$this->tbl .= '<div class="lipagingdiv"><ul><li>';
            if ($cur_page == "")
                $cur_page = $this->file_names;

        if ($start > 0) {
            // $this->tbl.="<a class='paging' href='" . $cur_page . "&start=" . (0) . $query_string . "' >First</a>&nbsp;&nbsp;";

            $this->tbl.="<li><a class='paging' href='" . $cur_page . "&from_date=" . $from_date . "&to_date=" . $to_date . "&start=" . ($start - $this->record_per_page) . $query_string . " 'title=Previous>Previous</a></li>";
        }

        //$this->tbl.="&nbsp;</td><td width='70%' align='center' class='bluenormaltahoma'>&nbsp;";

        if ($simple != 'N') {

            for ($i = $start_loop; $i < $end_loop; $i++) {
                if ($current_page == $i) {
                    $this->tbl.="<li class='active'><a class='paging active' href='" . $cur_page . "&from_date=" . $from_date . "&to_date=" . $to_date . "&start=" . ($i - 1) * $this->record_per_page . $query_string . "' >" . $i . "</a></li>";
                } else {
                    $this->tbl.="<li><a class='paging' href='" . $cur_page . "&from_date=" . $from_date . "&to_date=" . $to_date . "&start=" . ($i - 1) * $this->record_per_page . $query_string . "' title= " . $i . ">" . $i . "</a></li>";
                }
            }
        }

        //$this->tbl.="&nbsp;</td><td width='15%' align='right'>";
        if ($start + $this->record_per_page < $totalrows) {

            $this->tbl.="<li><a class='paging' href='" . $cur_page . "&from_date=" . $from_date . "&to_date=" . $to_date . "&start=" . ($start + $this->record_per_page) . $query_string . "' title= Next>Next</a></li>";

            //$this->tbl.="&nbsp;&nbsp;<a class='paging' href='" . $cur_page . "&start=" . ($last_page) . $query_string . "' >Last</a>";
        }

        $this->tbl.="</li></ul>";



        if ($bottom == "Y") {
            return $result = array($result, $this->tbl);
        } else {
            //echo $this->tbl;
            return $result;
        }
    }

    function number_pagingid_therapist($query, $record_per_page = '', $pages = '', $detail = '', $bottom = '', $simple = '', $cur_page = "", $query_string = "", $from_date, $to_date, $therapist) {
        $this->file_names();
        $this->query = $query;

        if ($record_per_page > 0)
            $this->record_per_page = $record_per_page;

        if ($pages > 0)
            $this->pages = $pages;

        $result = $this->runquery($this->query);
        $totalrows = mysqli_affected_rows();

        $start = $this->start();

        //$order = $_GET['order'];
        $this->query.=" limit $start," . $this->record_per_page;
        $result = $this->runquery($this->query);
        $total = mysqli_affected_rows();

        $total_pages = ceil($totalrows / $this->record_per_page);
        $last_page = ($total_pages - 1) * $this->record_per_page;
        $current_page = ($start + $this->record_per_page) / $this->record_per_page;
        $loop_counter = ceil($current_page / $this->pages);
        $start_loop = ($loop_counter * $this->pages - $this->pages) + 1;
        $end_loop = ($this->pages * $loop_counter) + 1;

        if ($current_page > 2)
            $start_loop = $current_page - 2;

        if ($total_pages >= $current_page + 3) {
            $end_loop = $current_page + 3;
        }

        if ($end_loop > $total_pages)
            $end_loop = $total_pages + 1;

        $tmpva = "";
        foreach ($_GET as $V => $K) {
            if ($V != "start")
                $tmpva.="&" . $V . "=" . $K;
        }


        if ($detail != "N" || $simple != "N")
        // $this->tbl = "<div class='pagingpdiv'>Showing Result " . ($start + 1) . " - " . ($start + $total) . " of " . $totalrows . " Records</div>";
        //$this->tbl .= '<div class="lipagingdiv"><ul><li>';
            if ($cur_page == "")
                $cur_page = $this->file_names;

        if ($start > 0) {
            // $this->tbl.="<a class='paging' href='" . $cur_page . "&start=" . (0) . $query_string . "' >First</a>&nbsp;&nbsp;";

            $this->tbl.="<li><a class='paging' href='" . $cur_page . "&name=" . $therapist . "&from_date=" . $from_date . "&to_date=" . $to_date . "&start=" . ($start - $this->record_per_page) . $query_string . " 'title=Previous>Previous</a></li>";
        }

        //$this->tbl.="&nbsp;</td><td width='70%' align='center' class='bluenormaltahoma'>&nbsp;";

        if ($simple != 'N') {

            for ($i = $start_loop; $i < $end_loop; $i++) {
                if ($current_page == $i) {
                    $this->tbl.="<li class='active'><a class='paging active' href='" . $cur_page . "&name=" . $therapist . "&from_date=" . $from_date . "&to_date=" . $to_date . "&start=" . ($i - 1) * $this->record_per_page . $query_string . "' >" . $i . "</a></li>";
                } else {
                    $this->tbl.="<li><a class='paging' href='" . $cur_page . "&name=" . $therapist . "&from_date=" . $from_date . "&to_date=" . $to_date . "&start=" . ($i - 1) * $this->record_per_page . $query_string . "' title= " . $i . ">" . $i . "</a></li>";
                }
            }
        }

        //$this->tbl.="&nbsp;</td><td width='15%' align='right'>";
        if ($start + $this->record_per_page < $totalrows) {

            $this->tbl.="<li><a class='paging' href='" . $cur_page . "&name=" . $therapist . "&from_date=" . $from_date . "&to_date=" . $to_date . "&start=" . ($start + $this->record_per_page) . $query_string . "' title= Next>Next</a></li>";

            //$this->tbl.="&nbsp;&nbsp;<a class='paging' href='" . $cur_page . "&start=" . ($last_page) . $query_string . "' >Last</a>";
        }

        $this->tbl.="</li></ul>";



        if ($bottom == "Y") {
            return $result = array($result, $this->tbl);
        } else {
            //echo $this->tbl;
            return $result;
        }
    }

///////////// NUMERIC FUNCTION WITH RECORD DESTAIL//////////////////////////////////////
    function number_paging($query, $record_per_page = '', $pages = '', $detail = '', $bottom = '', $simple = '', $cur_page = "", $query_string = "") {
        $this->file_names();
        $this->query = $query;

        if ($record_per_page > 0)
            $this->record_per_page = $record_per_page;

        if ($pages > 0)
            $this->pages = $pages;

        $result = $this->runquery($this->query);
        $totalrows = mysqli_affected_rows();

        $start = $this->start();

        //$order = $_GET['order'];
        $this->query.=" limit $start," . $this->record_per_page;
        $result = $this->runquery($this->query);
        $total = mysqli_affected_rows();

        $total_pages = ceil($totalrows / $this->record_per_page);
        $last_page = ($total_pages - 1) * $this->record_per_page;
        $current_page = ($start + $this->record_per_page) / $this->record_per_page;
        $loop_counter = ceil($current_page / $this->pages);
        $start_loop = ($loop_counter * $this->pages - $this->pages) + 1;
        $end_loop = ($this->pages * $loop_counter) + 1;

        if ($current_page > 2)
            $start_loop = $current_page - 2;

        if ($total_pages >= $current_page + 3) {
            $end_loop = $current_page + 3;
        }

        if ($end_loop > $total_pages)
            $end_loop = $total_pages + 1;

        $tmpva = "";
        foreach ($_GET as $V => $K) {
            if ($V != "start")
                $tmpva.="&" . $V . "=" . $K;
        }


        if ($detail != "N" || $simple != "N")
        // $this->tbl = "<div class='pagingpdiv'>Showing Result " . ($start + 1) . " - " . ($start + $total) . " of " . $totalrows . " Records</div>";
        //$this->tbl .= '<div class="lipagingdiv"><ul><li>';
            if ($cur_page == "")
                $cur_page = $this->file_names;

        if ($start > 0) {
            // $this->tbl.="<a class='paging' href='" . $cur_page . "&start=" . (0) . $query_string . "' >First</a>&nbsp;&nbsp;";

            $this->tbl.="<li><a class='paging' href='" . $cur_page . "&start=" . ($start - $this->record_per_page) . $query_string . " 'title=Previous>Previous</a></li>";
        }

        //$this->tbl.="&nbsp;</td><td width='70%' align='center' class='bluenormaltahoma'>&nbsp;";

        if ($simple != 'N') {

            for ($i = $start_loop; $i < $end_loop; $i++) {
                if ($current_page == $i) {
                    $this->tbl.="<li class='active'><a class='paging active' href='" . $cur_page . "&start=" . ($i - 1) * $this->record_per_page . $query_string . "' >" . $i . "</a></li>";
                } else {
                    $this->tbl.="<li><a class='paging' href='" . $cur_page . "&start=" . ($i - 1) * $this->record_per_page . $query_string . "' title= " . $i . ">" . $i . "</a></li>";
                }
            }
        }

        //$this->tbl.="&nbsp;</td><td width='15%' align='right'>";
        if ($start + $this->record_per_page < $totalrows) {

            $this->tbl.="<li><a class='paging' href='" . $cur_page . "&start=" . ($start + $this->record_per_page) . $query_string . "' title= Next>Next</a></li>";

            //$this->tbl.="&nbsp;&nbsp;<a class='paging' href='" . $cur_page . "&start=" . ($last_page) . $query_string . "' >Last</a>";
        }

        $this->tbl.="</li></ul>";



        if ($bottom == "Y") {
            return $result = array($result, $this->tbl);
        } else {
            //echo $this->tbl;
            return $result;
        }
    }

    function number_pagingid($query, $record_per_page = '', $pages = '', $detail = '', $bottom = '', $simple = '', $cur_page = "", $query_string = "", $id_agent = "", $date = "") {
        $this->file_names();
        $this->query = $query;

        if ($record_per_page > 0)
            $this->record_per_page = $record_per_page;

        if ($pages > 0)
            $this->pages = $pages;

        $result = $this->runquery($this->query);
        $totalrows = mysqli_affected_rows();

        $start = $this->start();

        //$order = $_GET['order'];
        $this->query.=" limit $start," . $this->record_per_page;
        $result = $this->runquery($this->query);
        $total = mysqli_affected_rows();

        $total_pages = ceil($totalrows / $this->record_per_page);
        $last_page = ($total_pages - 1) * $this->record_per_page;
        $current_page = ($start + $this->record_per_page) / $this->record_per_page;
        $loop_counter = ceil($current_page / $this->pages);
        $start_loop = ($loop_counter * $this->pages - $this->pages) + 1;
        $end_loop = ($this->pages * $loop_counter) + 1;

        if ($current_page > 2)
            $start_loop = $current_page - 2;

        if ($total_pages >= $current_page + 3) {
            $end_loop = $current_page + 3;
        }

        if ($end_loop > $total_pages)
            $end_loop = $total_pages + 1;

        $tmpva = "";
        foreach ($_GET as $V => $K) {
            if ($V != "start")
                $tmpva.="&" . $V . "=" . $K;
        }


        if ($detail != "N" || $simple != "N")
        // $this->tbl = "<div class='pagingpdiv'>Showing Result " . ($start + 1) . " - " . ($start + $total) . " of " . $totalrows . " Records</div>";
        //$this->tbl .= '<div class="lipagingdiv"><ul><li>';
            if ($cur_page == "")
                $cur_page = $this->file_names;

        if ($start > 0) {
            // $this->tbl.="<a class='paging' href='" . $cur_page . "&start=" . (0) . $query_string . "' >First</a>&nbsp;&nbsp;";

            $this->tbl.="<li><a class='paging' href='" . $cur_page . "&id=" . $id_agent . "&date=" . $date . "&start=" . ($start - $this->record_per_page) . $query_string . " 'title=Previous>Previous</a></li>";
        }

        //$this->tbl.="&nbsp;</td><td width='70%' align='center' class='bluenormaltahoma'>&nbsp;";

        if ($simple != 'N') {

            for ($i = $start_loop; $i < $end_loop; $i++) {
                if ($current_page == $i) {
                    $this->tbl.="<li class='active'><a class='paging active' href='" . $cur_page . "&id=" . $id_agent . "&date=" . $date . "&start=" . ($i - 1) * $this->record_per_page . $query_string . "' >" . $i . "</a></li>";
                } else {
                    $this->tbl.="<li><a class='paging' href='" . $cur_page . "&id=" . $id_agent . "&date=" . $date . "&start=" . ($i - 1) * $this->record_per_page . $query_string . "' title= " . $i . ">" . $i . "</a></li>";
                }
            }
        }

        //$this->tbl.="&nbsp;</td><td width='15%' align='right'>";
        if ($start + $this->record_per_page < $totalrows) {

            $this->tbl.="<li><a class='paging' href='" . $cur_page . "&id=" . $id_agent . "&date=" . $date . "&start=" . ($start + $this->record_per_page) . $query_string . "' title= Next>Next</a></li>";

            //$this->tbl.="&nbsp;&nbsp;<a class='paging' href='" . $cur_page . "&start=" . ($last_page) . $query_string . "' >Last</a>";
        }

        $this->tbl.="</li></ul>";



        if ($bottom == "Y") {
            return $result = array($result, $this->tbl);
        } else {
            //echo $this->tbl;
            return $result;
        }
    }

    function number_pagingbyid_tra($query, $record_per_page = '', $pages = '', $detail = '', $bottom = '', $simple = '', $cur_page = "", $query_string = "", $id_agent = "") {
        $this->file_names();
        $this->query = $query;

        if ($record_per_page > 0)
            $this->record_per_page = $record_per_page;

        if ($pages > 0)
            $this->pages = $pages;

        $result = $this->runquery($this->query);
        $totalrows = mysqli_affected_rows();

        $start = $this->start();

        //$order = $_GET['order'];
        $this->query.=" limit $start," . $this->record_per_page;
        $result = $this->runquery($this->query);
        $total = mysqli_affected_rows();

        $total_pages = ceil($totalrows / $this->record_per_page);
        $last_page = ($total_pages - 1) * $this->record_per_page;
        $current_page = ($start + $this->record_per_page) / $this->record_per_page;
        $loop_counter = ceil($current_page / $this->pages);
        $start_loop = ($loop_counter * $this->pages - $this->pages) + 1;
        $end_loop = ($this->pages * $loop_counter) + 1;

        if ($current_page > 2)
            $start_loop = $current_page - 2;

        if ($total_pages >= $current_page + 3) {
            $end_loop = $current_page + 3;
        }

        if ($end_loop > $total_pages)
            $end_loop = $total_pages + 1;

        $tmpva = "";
        foreach ($_GET as $V => $K) {
            if ($V != "start")
                $tmpva.="&" . $V . "=" . $K;
        }


        if ($detail != "N" || $simple != "N")
        // $this->tbl = "<div class='pagingpdiv'>Showing Result " . ($start + 1) . " - " . ($start + $total) . " of " . $totalrows . " Records</div>";
        //$this->tbl .= '<div class="lipagingdiv"><ul><li>';
            if ($cur_page == "")
                $cur_page = $this->file_names;

        if ($start > 0) {
            // $this->tbl.="<a class='paging' href='" . $cur_page . "&start=" . (0) . $query_string . "' >First</a>&nbsp;&nbsp;";

            $this->tbl.="<li><a class='paging' href='" . $cur_page . "&id=" . $id_agent . "&start=" . ($start - $this->record_per_page) . $query_string . " 'title=Previous>Previous</a></li>";
        }

        //$this->tbl.="&nbsp;</td><td width='70%' align='center' class='bluenormaltahoma'>&nbsp;";

        if ($simple != 'N') {

            for ($i = $start_loop; $i < $end_loop; $i++) {
                if ($current_page == $i) {
                    $this->tbl.="<li class='active'><a class='paging active' href='" . $cur_page . "&id=" . $id_agent . "&start=" . ($i - 1) * $this->record_per_page . $query_string . "' >" . $i . "</a></li>";
                } else {
                    $this->tbl.="<li><a class='paging' href='" . $cur_page . "&id=" . $id_agent . "&start=" . ($i - 1) * $this->record_per_page . $query_string . "' title= " . $i . ">" . $i . "</a></li>";
                }
            }
        }

        //$this->tbl.="&nbsp;</td><td width='15%' align='right'>";
        if ($start + $this->record_per_page < $totalrows) {

            $this->tbl.="<li><a class='paging' href='" . $cur_page . "&id=" . $id_agent . "&start=" . ($start + $this->record_per_page) . $query_string . "' title= Next>Next</a></li>";

            //$this->tbl.="&nbsp;&nbsp;<a class='paging' href='" . $cur_page . "&start=" . ($last_page) . $query_string . "' >Last</a>";
        }

        $this->tbl.="</li></ul>";



        if ($bottom == "Y") {
            return $result = array($result, $this->tbl);
        } else {
            //echo $this->tbl;
            return $result;
        }
    }

    function number_paging_client($query, $record_per_page = '', $pages = '', $detail = '', $bottom = '', $simple = '', $cur_page = "", $query_string = "") {
        $this->file_names();
        $this->query = $query;

        if ($record_per_page > 0)
            $this->record_per_page = $record_per_page;

        if ($pages > 0)
            $this->pages = $pages;

        $result = $this->runquery($this->query);
        $totalrows = mysqli_affected_rows();

        $start = $this->start();

        //$order = $_GET['order'];
        $this->query.=" limit $start," . $this->record_per_page;
        $result = $this->runquery($this->query);
        $total = mysqli_affected_rows();

        $total_pages = ceil($totalrows / $this->record_per_page);
        $last_page = ($total_pages - 1) * $this->record_per_page;
        $current_page = ($start + $this->record_per_page) / $this->record_per_page;
        $loop_counter = ceil($current_page / $this->pages);
        $start_loop = ($loop_counter * $this->pages - $this->pages) + 1;
        $end_loop = ($this->pages * $loop_counter) + 1;

        if ($current_page > 2)
            $start_loop = $current_page - 2;

        if ($total_pages >= $current_page + 3) {
            $end_loop = $current_page + 3;
        }

        if ($end_loop > $total_pages)
            $end_loop = $total_pages + 1;

        $tmpva = "";
        foreach ($_GET as $V => $K) {
            if ($V != "start")
                $tmpva.="&" . $V . "=" . $K;
        }


        if ($detail != "N" || $simple != "N")
        // $this->tbl = "<div class='pagingpdiv'>Showing Result " . ($start + 1) . " - " . ($start + $total) . " of " . $totalrows . " Records</div>";
        //$this->tbl .= '<div class="lipagingdiv"><ul><li>';
            if ($cur_page == "")
                $cur_page = $this->file_names;

        if ($start > 0) {
            // $this->tbl.="<a class='paging' href='" . $cur_page . "&start=" . (0) . $query_string . "' >First</a>&nbsp;&nbsp;";

            $this->tbl.="<li><a class='paging' href='" . $cur_page . ($start - $this->record_per_page) . $query_string . "/ 'title=Previous>Previous</a></li>&nbsp;&nbsp;";
        }

        //$this->tbl.="&nbsp;</td><td width='70%' align='center' class='bluenormaltahoma'>&nbsp;";

        if ($simple != 'N') {

            for ($i = $start_loop; $i < $end_loop; $i++) {
                if ($current_page == $i) {
                    $this->tbl.="<li class='active'><a class='paging active' href='" . $cur_page . ($i - 1) * $this->record_per_page . $query_string . "/' >" . $i . "</a></li>&nbsp;&nbsp;";
                } else {
                    $this->tbl.="<li><a class='paging' href='" . $cur_page . ($i - 1) * $this->record_per_page . $query_string . "/' title= " . $i . ">" . $i . "</a></li>&nbsp;&nbsp;";
                }
            }
        }

        //$this->tbl.="&nbsp;</td><td width='15%' align='right'>";
        if ($start + $this->record_per_page < $totalrows) {

            $this->tbl.="<li><a class='paging' href='" . $cur_page . ($start + $this->record_per_page) . $query_string . "/' title= Next>Next</a></li>";

            //$this->tbl.="&nbsp;&nbsp;<a class='paging' href='" . $cur_page . "&start=" . ($last_page) . $query_string . "' >Last</a>";
        }

        $this->tbl.="&nbsp;&nbsp;&nbsp;</li></ul>";



        if ($bottom == "Y") {
            return $result = array($result, $this->tbl);
        } else {
            echo $this->tbl;
            return $result;
        }
    }

}

?>