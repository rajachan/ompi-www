<?
$subject_val = "Re: [OMPI users] Memory allocation error when linking with MPI	libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  8 00:58:33 2010" -->
<!-- isoreceived="20100808045833" -->
<!-- sent="Sun, 08 Aug 2010 14:58:22 +1000" -->
<!-- isosent="20100808045822" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory allocation error when linking with MPI	libraries" -->
<!-- id="1281243502.5777.39.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="AANLkTin-4ErVnw6Mjh_sz5-j4gYzqKM2-inDkStU44eC_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory allocation error when linking with MPI	libraries<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-08 00:58:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13926.php">Nicolas Deladerriere: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="13924.php">David Zhang: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13917.php">Nicolas Deladerriere: "[OMPI users] Memory allocation error when linking with MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13926.php">Nicolas Deladerriere: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>Reply:</strong> <a href="13926.php">Nicolas Deladerriere: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're trying to do a 6GB allocate.  Can your underlying system handle
<br>
that?  IF you compile without the wrapper, does it work?
<br>
<p>I see your executable is using the OMPI memory stuff.  IIRC there are
<br>
switches to turn that off.
<br>
<p><p>On Fri, 2010-08-06 at 15:05 +0200, Nicolas Deladerriere wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'am having an sigsegv error when using simple program compiled and
</span><br>
<span class="quotelev1">&gt; link with openmpi.
</span><br>
<span class="quotelev1">&gt; I have reproduce the problem using really simple fortran code. It
</span><br>
<span class="quotelev1">&gt; actually does not even use MPI, but just link with mpi shared
</span><br>
<span class="quotelev1">&gt; libraries. (problem does not appear when I do not link with mpi
</span><br>
<span class="quotelev1">&gt; libraries)
</span><br>
<span class="quotelev1">&gt;    % cat allocate.F90
</span><br>
<span class="quotelev1">&gt;    program test
</span><br>
<span class="quotelev1">&gt;    implicit none
</span><br>
<span class="quotelev1">&gt;        integer, dimension(:), allocatable :: z
</span><br>
<span class="quotelev1">&gt;        integer(kind=8) :: l
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        write(*,*) &quot;l ?&quot;
</span><br>
<span class="quotelev1">&gt;        read(*,*) l
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;        ALLOCATE(z(l))
</span><br>
<span class="quotelev1">&gt;        z(1) = 111
</span><br>
<span class="quotelev1">&gt;        z(l) = 222
</span><br>
<span class="quotelev1">&gt;        DEALLOCATE(z)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    end program test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using openmpi 1.4.2 and gfortran for my tests. Here is the
</span><br>
<span class="quotelev1">&gt; compilation :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    % ./openmpi-1.4.2/build/bin/mpif90 --showme -g -o testallocate
</span><br>
<span class="quotelev1">&gt; allocate.F90
</span><br>
<span class="quotelev1">&gt;    gfortran -g -o testallocate allocate.F90
</span><br>
<span class="quotelev1">&gt; -I/s0/scr1/TOMOT_19311_HAL_/openmpi-1.4.2/build/include -pthread
</span><br>
<span class="quotelev1">&gt; -I/s0/scr1/TOMOT_19311_HAL_/openmpi-1.4.2/build/lib
</span><br>
<span class="quotelev1">&gt; -L/s0/scr1/TOMOT_19311_HAL_/openmpi-1.4.2/build/lib -lmpi_f90
</span><br>
<span class="quotelev1">&gt; -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl
</span><br>
<span class="quotelev1">&gt; -lutil -lm -ldl -pthread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I am running that test with different length, I sometimes get a
</span><br>
<span class="quotelev1">&gt; &quot;Segmentation fault&quot; error. Here are two examples using two specific
</span><br>
<span class="quotelev1">&gt; values, but error happens for many other values of length (I did not
</span><br>
<span class="quotelev1">&gt; manage to find which values of lenght gives that error)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    %  ./testallocate
</span><br>
<span class="quotelev1">&gt;     l ?
</span><br>
<span class="quotelev1">&gt;    1600000000
</span><br>
<span class="quotelev1">&gt;    Segmentation fault
</span><br>
<span class="quotelev1">&gt;    % ./testallocate
</span><br>
<span class="quotelev1">&gt;     l ?
</span><br>
<span class="quotelev1">&gt;    2000000000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used debugger with re-compiled version of openmpi using debug flag.
</span><br>
<span class="quotelev1">&gt; I got the folowing error in function sYSMALLOc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt;    0x00002aaaab70b3b3 in sYSMALLOc (nb=6400000016, av=0x2aaaab930200)
</span><br>
<span class="quotelev1">&gt; at malloc.c:3239
</span><br>
<span class="quotelev1">&gt;    3239        set_head(remainder, remainder_size | PREV_INUSE);
</span><br>
<span class="quotelev1">&gt;    Current language:  auto; currently c
</span><br>
<span class="quotelev1">&gt;    (gdb) bt
</span><br>
<span class="quotelev1">&gt;    #0  0x00002aaaab70b3b3 in sYSMALLOc (nb=6400000016,
</span><br>
<span class="quotelev1">&gt; av=0x2aaaab930200) at malloc.c:3239
</span><br>
<span class="quotelev1">&gt;    #1  0x00002aaaab70d0db in opal_memory_ptmalloc2_int_malloc
</span><br>
<span class="quotelev1">&gt; (av=0x2aaaab930200, bytes=6400000000) at malloc.c:4322
</span><br>
<span class="quotelev1">&gt;    #2  0x00002aaaab70b773 in opal_memory_ptmalloc2_malloc
</span><br>
<span class="quotelev1">&gt; (bytes=6400000000) at malloc.c:3435
</span><br>
<span class="quotelev1">&gt;    #3  0x00002aaaab70a665 in opal_memory_ptmalloc2_malloc_hook
</span><br>
<span class="quotelev1">&gt; (sz=6400000000, caller=0x2aaaabf8534d) at hooks.c:667
</span><br>
<span class="quotelev1">&gt;    #4  0x00002aaaabf8534d in _gfortran_internal_free ()
</span><br>
<span class="quotelev1">&gt; from /usr/lib64/libgfortran.so.1
</span><br>
<span class="quotelev1">&gt;    #5  0x0000000000400bcc in MAIN__ () at allocate.F90:11
</span><br>
<span class="quotelev1">&gt;    #6  0x0000000000400c4e in main ()
</span><br>
<span class="quotelev1">&gt;    (gdb) display
</span><br>
<span class="quotelev1">&gt;    (gdb) list
</span><br>
<span class="quotelev1">&gt;    3234      if ((unsigned long)(size) &gt;= (unsigned long)(nb +
</span><br>
<span class="quotelev1">&gt; MINSIZE)) {
</span><br>
<span class="quotelev1">&gt;    3235        remainder_size = size - nb;
</span><br>
<span class="quotelev1">&gt;    3236        remainder = chunk_at_offset(p, nb);
</span><br>
<span class="quotelev1">&gt;    3237        av-&gt;top = remainder;
</span><br>
<span class="quotelev1">&gt;    3238        set_head(p, nb | PREV_INUSE | (av != &amp;main_arena ?
</span><br>
<span class="quotelev1">&gt; NON_MAIN_ARENA : 0));
</span><br>
<span class="quotelev1">&gt;    3239        set_head(remainder, remainder_size | PREV_INUSE);
</span><br>
<span class="quotelev1">&gt;    3240        check_malloced_chunk(av, p, nb);
</span><br>
<span class="quotelev1">&gt;    3241        return chunk2mem(p);
</span><br>
<span class="quotelev1">&gt;    3242      }
</span><br>
<span class="quotelev1">&gt;    3243
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also did the same test in C and I got the same problem. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does someone has any idea that could help me understand what's going
</span><br>
<span class="quotelev1">&gt; on ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Nicolas
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13926.php">Nicolas Deladerriere: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="13924.php">David Zhang: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13917.php">Nicolas Deladerriere: "[OMPI users] Memory allocation error when linking with MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13926.php">Nicolas Deladerriere: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>Reply:</strong> <a href="13926.php">Nicolas Deladerriere: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
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
