<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER["REQUEST_URI"])) {
    include("../../include/index-header.inc");
} else {
    include("include/index-header.inc");
}
?>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th colspan="2"><a href="http://www.open-mpi.org/community/lists/announce/2016/06/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">3 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2005-08-22 13:22:14</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:44</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>[Open MPI Announce] Open MPI v2.0.0 released</strong>
<ul><li><a href="0085.php">Jeff Squyres (jsquyres)</a> <a name="85"><em>(2016-07-12 18:19:12)</em></a></li></ul>
<li><strong>[Open MPI Announce] This list is migrating!</strong>
<ul><li><a href="0086.php">Jeff Squyres (jsquyres)</a> <a name="86"><em>(2016-07-19 16:41:34)</em></a></li></ul>
<li><strong>[Open MPI Announce] This list is suspended while migrating</strong>
<ul><li><a href="0087.php">Jeff Squyres (jsquyres)</a> <a name="87"><em>(2016-07-27 12:01:35)</em></a></li></ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-07-27 12:01:44</em></td>
<th>Archived on: </th><td><em>2016-07-27 12:02:09 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th colspan="2"><a href="http://www.open-mpi.org/community/lists/announce/2016/06/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/index.php">List of Folders</a></th></tr>
</table>
</div>
<!-- trailer="footer" -->
<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER{'REQUEST_URI'})) {
    include("../../include/index-footer.inc");
} else {
    include("include/index-footer.inc");
}
?>