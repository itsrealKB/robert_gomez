 <div class="dashboard-content">
     <div class="inner-head-wrap2">
         <ul class="inner-head2">
             <button class="link text-decoration-none" id="addAssignmentBtn">
                 <li class="inner-list inner-list-1">New Assignment</li>
             </button>
             <button class="link text-decoration-none" id="importAssignment">
                 <li class="inner-list inner-list-1">New Assignment Import</li>
             </button>
             <a href="{{ route('admin.assign.task') }}" class="link text-decoration-none">
                 <li class="inner-list inner-list-1">Task Assigned</li>
             </a>
             <button class="link text-decoration-none" id="searchAssignment">
                 <li class="inner-list inner-list-1 text-light">Search Assignments</li>
             </button>
             <a href="{{ route('admin.assign.complete') }}" class="link text-decoration-none">
                 <li class="inner-list inner-list-1">Complete Assignments</li>
             </a>
             <a href="{{ route('admin.assign.assignments.map') }}" class="link text-decoration-none">
                 <li class="inner-list inner-list-1">Assignments Map</li>
             </a>
         </ul>
     </div>
 </div>
