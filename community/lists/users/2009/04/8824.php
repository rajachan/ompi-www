<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 15:18:52 2009" -->
<!-- isoreceived="20090407191852" -->
<!-- sent="Tue, 7 Apr 2009 15:18:31 -0400" -->
<!-- isosent="20090407191831" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="AC3096AC-5032-455F-8E73-129A2890CB05_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090407183110.GA91737_at_troutmask.apl.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Factor of 10 loss in performance with 1.3.x<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 15:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8825.php">Ethan Mallove: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8823.php">Mostyn Lewis: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8821.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8827.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8827.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve,
<br>
<p>I spotted a strange value for the mpi_yield_when_idle MCA parameter. 1  
<br>
means your processor is oversubscribed, and this trigger a call to  
<br>
sched_yield after each check on the SM. Are you running the job  
<br>
oversubscribed? If not it looks like somehow we don't correctly  
<br>
identify that there are multiple cores ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Apr 7, 2009, at 14:31 , Steve Kargl wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Apr 07, 2009 at 09:10:21AM -0700, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Steve Kargl wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can rebuild 1.2.9 and 1.3.1. Is there any particular configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options that I should enable/disable?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope someone else will chime in here, because I'm somewhat out of
</span><br>
<span class="quotelev2">&gt;&gt; ideas.  All I'm saying is that 10-usec latencies on sm with 1.3.0 or
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.1 are out of line with what other people see and I don't think  
</span><br>
<span class="quotelev2">&gt;&gt; it's
</span><br>
<span class="quotelev2">&gt;&gt; simply a 1.2.9/1.3.0 issue here.  I'm stumped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With 1.3.2 pre-release, I ran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.2/bin/mpiexec --mca btl sm,self \
</span><br>
<span class="quotelev1">&gt; --mca mpi_show_mca_params all -machinefile mf_ompi_2 -n 2 ./z | &amp;  
</span><br>
<span class="quotelev1">&gt; tee sgk.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've placed a file with the output from '--mca mpi_show_mca_params  
</span><br>
<span class="quotelev1">&gt; all' at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://troutmask.apl.washington.edu/~kargl/mca_all_params.txt">http://troutmask.apl.washington.edu/~kargl/mca_all_params.txt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps, someone with more knowledge of the parameters can take a
</span><br>
<span class="quotelev1">&gt; quick look.  I do observe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node20.cimu.org:90002] btl_sm_bandwidth=900 (default value)
</span><br>
<span class="quotelev1">&gt; [node20.cimu.org:90002] btl_sm_latency=100 (default value)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are these values tunable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Steve
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8825.php">Ethan Mallove: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8823.php">Mostyn Lewis: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8821.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8827.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8827.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
