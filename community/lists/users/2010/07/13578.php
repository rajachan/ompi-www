<?
$subject_val = "Re: [OMPI users] OpenMPI how large its buffer size ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 11 02:11:26 2010" -->
<!-- isoreceived="20100711061126" -->
<!-- sent="Sat, 10 Jul 2010 23:12:49 -0700" -->
<!-- isosent="20100711061249" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI how large its buffer size ?" -->
<!-- id="4C3960E1.5060208_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w645689305D8453B0910B1BCBB70_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI how large its buffer size ?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-11 02:12:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13579.php">jody: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Previous message:</strong> <a href="13577.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>In reply to:</strong> <a href="13577.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13580.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13580.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Jack Bryan wrote:
<blockquote cite="midSNT134-w645689305D8453B0910B1BCBB70@phx.gbl"
 type="cite">
  <style><!--
.hmmessage P
{
margin:0px;
padding:0px
}
body.hmmessage
{
font-size: 10pt;
font-family:Verdana
}
--></style>
  <div>The master node can receive message ( the same size) &nbsp;from 50
worker nodes.&nbsp;</div>
  <div>But, it cannot receive message from 51 nodes. It caused
"truncate error".</div>
</blockquote>
How big was the buffer that the program specified in the receive call?&nbsp;
How big was the message that was sent?<br>
<br>
MPI_ERR_TRUNCATE means that you posted a receive with an application
buffer that turned out to be too small to hold the message that was
received.&nbsp; It's a user application error that has nothing to do with
MPI's internal buffers.&nbsp; MPI's internal buffers don't need to be big
enough to hold that message.&nbsp; MPI could require the sender and receiver
to coordinate so that only part of the message is moved at a time.<br>
<blockquote cite="midSNT134-w645689305D8453B0910B1BCBB70@phx.gbl"
 type="cite">
  <div><br>
  </div>
  <div>I used the same buffer to get the message in 50 node case.&nbsp;</div>
  <div><br>
  </div>
  <div>About ""rendezvous" protocol", what is the meaning of "the
sender sends a short portion "?</div>
  <div>What is the "short portion", is it a small mart of the message
of the sender ?</div>
</blockquote>
It's at least the message header (communicator, tag, etc.) so that the
receiver can figure out if this is the expected message or not.&nbsp; In
practice, there is probably also some data in there as well.&nbsp; The
amount of that portion depends on the MPI implementation and, in
practice, the interconnect the message traveled over,
MPI-implementation-dependent environment variables set by the user,
etc.&nbsp; E.g., with OMPI over shared memory by default it's about 4Kbytes
(if I remember correctly).<br>
<blockquote cite="midSNT134-w645689305D8453B0910B1BCBB70@phx.gbl"
 type="cite">
  <div>This "rendezvous" protocol" can work automatically in background
without programmer</div>
  <div>indicates in his program ?</div>
</blockquote>
Right.&nbsp; MPI actually allows you to force such synchronization with
MPI_Ssend, but typically MPI implementations use it automatically for
"plain" long sends as well even if the user didn't not use MPI_Ssend.<br>
<blockquote cite="midSNT134-w645689305D8453B0910B1BCBB70@phx.gbl"
 type="cite">
  <div>The "acknowledgement " can be generated by the receiver only
when the</div>
  <div>corresponding mpi_irecv is posted by the receiver ?&nbsp;</div>
</blockquote>
Right.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13579.php">jody: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Previous message:</strong> <a href="13577.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>In reply to:</strong> <a href="13577.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13580.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13580.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
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