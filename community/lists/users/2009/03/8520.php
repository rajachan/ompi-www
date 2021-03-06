<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 13:07:29 2009" -->
<!-- isoreceived="20090319170729" -->
<!-- sent="Thu, 19 Mar 2009 13:07:10 -0400" -->
<!-- isosent="20090319170710" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1" -->
<!-- id="49C27BBE.90503_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8F77913624F7524AACD2A92EAF3BFA5402651BA4DA_at_SJMEMXMBS11.stjude.sjcrh.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 13:07:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8521.php">Gary Draving: "[OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>Previous message:</strong> <a href="8519.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>In reply to:</strong> <a href="8518.php">Malone, Scott: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your understanding is exactly right.  This issue came up earlier today.
<br>
The suggestion was to add one of the following to your mpirun command.
<br>
<p>--mca orte_leave_session_attached 1
<br>
-leave-session-attached
<br>
<p>Here is the thread from earlier.
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/03/8511.php">http://www.open-mpi.org/community/lists/users/2009/03/8511.php</a>
<br>
<p>Rolf
<br>
<p><p>&nbsp;&nbsp;Follow this email thread
<br>
<p>On 03/19/09 12:19, Malone, Scott wrote:
<br>
<span class="quotelev1">&gt; Since I'm new to openMPI I wanted to make sure that I understand this.  When the jobs starts orted is daemonized and because of this they are not bound the sge_shephered on each node.  This results in the loss of account for those processes.  I guess that when I start mpirun with debugging, the orted is no longer daemonized and is attached to the sge_shephered?  If this is true, is their anyway to started the orted not daemonized without turning on debugging until 1.3.2 is available?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scott Malone
</span><br>
<span class="quotelev1">&gt; Manager, High Performance Computing Facility
</span><br>
<span class="quotelev1">&gt; Information Sciences - Research Informatics
</span><br>
<span class="quotelev1">&gt; St. Jude Children's Research Hospital
</span><br>
<span class="quotelev1">&gt; 332 North Lauderdale
</span><br>
<span class="quotelev1">&gt; Memphis, TN 38105
</span><br>
<span class="quotelev1">&gt; 901.495.4947
</span><br>
<span class="quotelev1">&gt; scott.malone_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Reuti
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, March 19, 2009 10:32 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 19.03.2009 um 16:07 schrieb Malone, Scott:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am having two problem with the integration of OpenMPI 1.3 and SGE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6.2u1, which we are new with both.  The troubles are getting jobs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to suspend/resume and collect cpu time correctly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For suspend/resume I have added the following to my mpirun command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca orte_forward_job_control 1 --mca plm_rsh_daemonize_qrsh 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; why? In 1.3 the orted is already daemonizing because of a bug and I
</span><br>
<span class="quotelev2">&gt;&gt; only found that it's necessary for the notify feature to daemonize
</span><br>
<span class="quotelev2">&gt;&gt; the orted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  and adjusted the suspend_method for the queue that it's running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in.  I have not gotten it to place any process into the T state.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Although this is not a huge problem, I hope to have this working in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the future.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My main problem is getting the cpu time correct.  On a multiple cpu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job only the master nodes shows  the cpu time correct for that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process, the others are very short and not sure what they are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; measuring. (I believe startup time).  Here's and example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When the orted daemonize, they are no longer bound to the
</span><br>
<span class="quotelev2">&gt;&gt; sge_shephered. As a result of this, there is noone tracking their
</span><br>
<span class="quotelev2">&gt;&gt; accounting on the nodes. This will be fixed AFAIK in 1.3.2, so that
</span><br>
<span class="quotelev2">&gt;&gt; the daemons are still bound to a running sge_shephered.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you need the -notify feature and corerct accouting, you will need
</span><br>
<span class="quotelev2">&gt;&gt; to wait until the qrsh_starter in SGE is fixed not to exit when they
</span><br>
<span class="quotelev2">&gt;&gt; receive a usr1/2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          0.360
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          0.480
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          0.470
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          0.490
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          0.530
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          0.470
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          0.680
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          464.305
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And from watching the runs that time is close to the wall clock
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time and match what I see for that single process.  Now I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gotten it to give what I believe are correct values, but I have to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include --debug-daemons option to our mpirun command.  With that I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          73.146
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          72.982
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          73.381
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          73.142
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          73.029
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          73.183
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          73.117
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          73.265
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu          73.236
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have noticed that when I get the cpu time correctly I get qrsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process that startup (my understanding is that this is what starts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the processes on the remote machines) and they stay running until
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the jobs is finished.  When I don't get the correct cpu time, I see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the qrsh processes start on the master node, but die off once they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start the process on the remote nodes.  The PE environment looks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pe_name            orte
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots              560
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation_rule    $round_robin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accounting_summary FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please let me know if I can provide any more information to help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; figure this out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scott Malone
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Manager, High Performance Computing Facility
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Information Sciences - Research Informatics
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; St. Jude Children's Research Hospital
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 332 North Lauderdale
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memphis, TN 38105
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 901.495.4947
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scott.malone_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email Disclaimer: www.stjude.org/emaildisclaimer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8521.php">Gary Draving: "[OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>Previous message:</strong> <a href="8519.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>In reply to:</strong> <a href="8518.php">Malone, Scott: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<!-- nextthread="start" -->
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
