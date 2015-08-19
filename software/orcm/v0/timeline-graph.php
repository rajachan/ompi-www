<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# The v0 series isn't done yet
$beyond_end_date = strftime("%Y-%m-%d", time() + (90 * 24 * 60 * 60));

//////////////////////////////////////////////////////////////////////////
// v0 release series
series("v0 series",  "2014-10-01", $beyond_end_date, $data, $vpos, $graph);
milestone("branch",  "2014-10-01", $data, $vpos);
milestone("v0.5.0",  "2014-11-05", $data, $vpos);
milestone("v0.7.0",  "2015-02-25", $data, $vpos);
milestone("v0.9.0",  "2015-06-29", $data, $vpos);
milestone("v0.11.0", "2015-08-19", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke(); 
