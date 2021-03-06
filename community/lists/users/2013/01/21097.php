<?
$subject_val = "Re: [OMPI users] problem: help-hostfile.txt: Too many open files in	system.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 10:28:29 2013" -->
<!-- isoreceived="20130110152829" -->
<!-- sent="Thu, 10 Jan 2013 15:28:23 +0000" -->
<!-- isosent="20130110152823" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem: help-hostfile.txt: Too many open files in	system." -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380B0B47_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="06F499EC-7749-4CCD-A264-74119B8976C6_at_yahoo.com.mx" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem: help-hostfile.txt: Too many open files in	system.<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-10 10:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21098.php">Ralph Castain: "Re: [OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
<li><strong>Previous message:</strong> <a href="21096.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>In reply to:</strong> <a href="21078.php">Mariana Vargas Magana: "[OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21098.php">Ralph Castain: "Re: [OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
<li><strong>Reply:</strong> <a href="21098.php">Ralph Castain: "Re: [OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's a weird one -- it looks like having too many open files on your system is causing a cascading set of failures.  
<br>
<p>Are you saying that your program runs for a while and then on iteration 32, it fails with errors like this?  If so, I'd like for a file descriptor leak in your program.
<br>
<p><p>On Jan 4, 2013, at 12:48 PM, Mariana Vargas Magana &lt;mmarianav_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello open MPI users:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was just running a program that usually works well in the cluster and suddenly in the 32 iteration I get this strange set of errors associated with. I will appreciate if someone could give me some hint of the problem and how to solve
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mariana
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ssh: error while loading shared libraries: libcrypt.so.1: cannot open shared object file: Error 23
</span><br>
<span class="quotelev1">&gt; /usr/bin/ssh: error while loading shared libraries: libutil.so.1: cannot open shared object file: Error 23
</span><br>
<span class="quotelev1">&gt; /usr/bin/ssh: error while loading shared libraries: libfipscheck.so.1: cannot open shared object file: Error 23
</span><br>
<span class="quotelev1">&gt; /usr/bin/ssh: error while loading shared libraries: libkrb5.so.3: cannot open shared object file: Error 23
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 1486) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;    no-hostfile
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;    /home/mvargas/openmpi/share/openmpi/help-hostfile.txt: Too many open files in system.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [ferrari:01490] [[65228,0],0] ORTE_ERROR_LOG: Not found in file base/ras_base_allocate.c at line 200
</span><br>
<span class="quotelev1">&gt; [ferrari:01490] [[65228,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev1">&gt; [ferrari:01490] [[65228,0],0] ORTE_ERROR_LOG: Not found in file plm_rsh_module.c at line 1167
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;    no-hostfile
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;    /home/mvargas/openmpi/share/openmpi/help-hostfile.txt: Too many open files in system.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [ferrari:01491] [[65229,0],0] ORTE_ERROR_LOG: Not found in file base/ras_base_allocate.c at line 200
</span><br>
<span class="quotelev1">&gt; [ferrari:01491] [[65229,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev1">&gt; [ferrari:01491] [[65229,0],0] ORTE_ERROR_LOG: Not found in file plm_rsh_module.c at line 1167
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21098.php">Ralph Castain: "Re: [OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
<li><strong>Previous message:</strong> <a href="21096.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>In reply to:</strong> <a href="21078.php">Mariana Vargas Magana: "[OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21098.php">Ralph Castain: "Re: [OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
<li><strong>Reply:</strong> <a href="21098.php">Ralph Castain: "Re: [OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
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
