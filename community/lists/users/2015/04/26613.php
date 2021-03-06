<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  5 21:10:33 2015" -->
<!-- isoreceived="20150406011033" -->
<!-- sent="Sun, 5 Apr 2015 18:10:30 -0700" -->
<!-- isosent="20150406011030" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()" -->
<!-- id="39526887-8C96-4844-A577-2AEC54273A48_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CACRiV2ivhqAHgTRbGZAQSA2gACjgAk3RC+Hix=d7OSAqJVAM5A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-05 21:10:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26614.php">Filippo Spiga: "[OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Previous message:</strong> <a href="26612.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26610.php">Hamidreza Anvari: "[OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26615.php">Howard Pritchard: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Reply:</strong> <a href="26615.php">Howard Pritchard: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If not too much trouble, can you extract just the alltoallv portion and provide us with a small reproducer?
<br>
<p><p><span class="quotelev1">&gt; On Apr 5, 2015, at 12:11 PM, Hamidreza Anvari &lt;hr.anvari_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am converting an existing MPI program in C++ to Java using OpenMPI 1.8.4,
</span><br>
<span class="quotelev1">&gt; At some point I have a allToAllv() code which works fine in C++ but receives error in Java version:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI.COMM_WORLD.allToAllv(data, subpartition_size, subpartition_offset, MPI.INT &lt;<a href="http://mpi.int/">http://mpi.int/</a>&gt;,
</span><br>
<span class="quotelev1">&gt; data2,subpartition_size2,subpartition_offset2,MPI.INT &lt;<a href="http://mpi.int/">http://mpi.int/</a>&gt;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error:
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Alltoallv
</span><br>
<span class="quotelev1">&gt; *** reported by process [3621322753,9223372036854775811]
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 3 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are the values for parameters:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; data.length = 5
</span><br>
<span class="quotelev1">&gt; data2.length = 20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------- Rank 0 of 4 ----------
</span><br>
<span class="quotelev1">&gt; subpartition_offset:0,2,3,3,
</span><br>
<span class="quotelev1">&gt; subpartition_size:2,1,0,2,
</span><br>
<span class="quotelev1">&gt; subpartition_offset2:0,5,10,15,
</span><br>
<span class="quotelev1">&gt; subpartition_size2:5,5,5,5,
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; ---------- Rank 1 of 4 ----------
</span><br>
<span class="quotelev1">&gt; subpartition_offset:0,2,3,4,
</span><br>
<span class="quotelev1">&gt; subpartition_size:2,1,1,1,
</span><br>
<span class="quotelev1">&gt; subpartition_offset2:0,5,10,15,
</span><br>
<span class="quotelev1">&gt; subpartition_size2:5,5,5,5,
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; ---------- Rank 2 of 4 ----------
</span><br>
<span class="quotelev1">&gt; subpartition_offset:0,1,2,3,
</span><br>
<span class="quotelev1">&gt; subpartition_size:1,1,1,2,
</span><br>
<span class="quotelev1">&gt; subpartition_offset2:0,5,10,15,
</span><br>
<span class="quotelev1">&gt; subpartition_size2:5,5,5,5,
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; ---------- Rank 3 of 4 ----------
</span><br>
<span class="quotelev1">&gt; subpartition_offset:0,1,2,4,
</span><br>
<span class="quotelev1">&gt; subpartition_size:1,1,2,1,
</span><br>
<span class="quotelev1">&gt; subpartition_offset2:0,5,10,15,
</span><br>
<span class="quotelev1">&gt; subpartition_size2:5,5,5,5,
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, this is a code which works in C++ version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help or advice is greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -- HR
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26610.php">http://www.open-mpi.org/community/lists/users/2015/04/26610.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26613/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26614.php">Filippo Spiga: "[OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Previous message:</strong> <a href="26612.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26610.php">Hamidreza Anvari: "[OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26615.php">Howard Pritchard: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Reply:</strong> <a href="26615.php">Howard Pritchard: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
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
