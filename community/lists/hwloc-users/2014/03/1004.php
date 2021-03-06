<?
$subject_val = "Re: [hwloc-users] BGQ question.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 08:49:27 2014" -->
<!-- isoreceived="20140326124927" -->
<!-- sent="Wed, 26 Mar 2014 06:49:30 -0600" -->
<!-- isosent="20140326124930" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] BGQ question." -->
<!-- id="005401cf48f1$d4a3da60$7deb8f20$_at_wattsys.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9699581.gd7ovJmWxJ_at_quad" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [hwloc-users] BGQ question.<br>
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-26 08:49:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1005.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="1003.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="1003.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1005.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="1005.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a difference between INK and CNK? I recall (maybe incorrectly) this was launched in an IO node.
<br>
<p>Ken
<br>
<p>-----Original Message-----
<br>
From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Chris Samuel
<br>
Sent: Wednesday, March 26, 2014 6:42 AM
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] BGQ question.
<br>
<p>On Wed, 26 Mar 2014 11:56:08 AM Biddiscombe, John A. wrote:
<br>
<p><span class="quotelev1">&gt; I can&#226;&#128;&#153;t test this as the system is down for maintenance, but if memory 
</span><br>
<span class="quotelev1">&gt; serves me correctly, the GCC compiled lstopo also showed 60 cores 
</span><br>
<span class="quotelev1">&gt; instead of 64/68.
</span><br>
<p>It can only report what the kernel reports and it appears your kernel is not reporting the same number of cores on an IO node as ours.
<br>
<p>It would be interesting to compare kernel version and boot command line.
<br>
<p>Ours are:
<br>
<p>-bash-4.1# uname -a
<br>
Linux r00-id-j01.pcf.vlsci.unimelb.edu.au 2.6.32-279.14.1.bgq.el6_V1R2M0_36.ppc64 #1 SMP Tue Jun 11 15:50:53 CDT 2013 ppc64 ppc64 ppc64 GNU/Linux
<br>
<p><p>-bash-4.1# cat /proc/cmdline
<br>
root=/dev/ram0 rdinit=/init raid=noautodetect loglevel=5
<br>
<p><p>This is the end of our /proc/cpuinfo showing 68 hardware threads
<br>
(17 cores exposed).
<br>
<p>-bash-4.1# tail -n 9 /proc/cpuinfo 
<br>
<p>processor       : 67
<br>
cpu             : A2 (Blue Gene/Q)
<br>
clock           : 1600.000000MHz
<br>
revision        : 2.0 (pvr 0049 0200)
<br>
<p>timebase        : 1600000000
<br>
platform        : Blue Gene/Q
<br>
model           : ibm,bluegeneq
<br>
<p><p><span class="quotelev1">&gt; I am not certain if this gcc was in any was &#226;&#128;&#152;special&#226;&#128;&#153; for bgq.
</span><br>
<p>There is a GCC cross compiler, but it's not the /usr/bin/gcc one.
<br>
<p>cheers!
<br>
Chris
<br>
<pre>
-- 
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
_______________________________________________
hwloc-users mailing list
hwloc-users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
-----
No virus found in this message.
Checked by AVG - www.avg.com
Version: 2014.0.4354 / Virus Database: 3722/7248 - Release Date: 03/25/14
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1005.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="1003.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="1003.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1005.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="1005.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
