 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link collapsed" href="/admin/Dashboard">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li><!-- End Dashboard Nav -->

         @if (Auth::user()->role === 'admin')
             <li class="nav-item">
                 <a class="nav-link collapsed" href="/admin/student">
                     <i class="bi bi-person"></i>
                     <span>Student</span>
                 </a>
                 @endif
                 
             <li class="nav-item">
                 <a class="nav-link collapsed" href="/admin/course">
                     <i class="bi bi-list-task"></i>
                     <span>Course</span>
                 </a>
             </li><!-- End Dashboard Nav -->


     </ul>

 </aside><!-- End Sidebar-->
