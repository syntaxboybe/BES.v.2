<!DOCTYPE html>
<html>
<head>
  <!-- Other head elements -->
  <style>
    .highlight {
      background-color: #f5f5f5;
      font-weight: bold;
    }
  </style>
  
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var dropdownBtn1 = document.getElementById('dropdown-btn1');
      var dropdownContainer1 = document.getElementById('dropdown1');
      var dropdownBtn2 = document.getElementById('dropdown-btn2');
      var dropdownContainer2 = document.getElementById('dropdown2');
      var dropdownBtn3 = document.getElementById('dropdown-btn3');
      var dropdownContainer3 = document.getElementById('dropdown3');
      
      dropdownBtn1.addEventListener('click', function() {
        if (dropdownContainer1.style.display === "none") {
          dropdownContainer1.style.display = "block";
          dropdownBtn1.classList.add('highlight');
        } else {
          dropdownContainer1.style.display = "none";
          dropdownBtn1.classList.remove('highlight');
        }
      });
  
      dropdownBtn2.addEventListener('click', function() {
        if (dropdownContainer2.style.display === "none") {
          dropdownContainer2.style.display = "block";
          dropdownBtn2.classList.add('highlight');
        } else {
          dropdownContainer2.style.display = "none";
          dropdownBtn2.classList.remove('highlight');
        }
      });

      dropdownBtn3.addEventListener('click', function() {
        if (dropdownContainer3.style.display === "none") {
          dropdownContainer3.style.display = "block";
          dropdownBtn3.classList.add('highlight');
        } else {
          dropdownContainer3.style.display = "none";
          dropdownBtn3.classList.remove('highlight');
        }
        }
      );
    });
  </script>
<?php

echo '
	<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        
                        <div class="pull-left info">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Hello, ' . $_SESSION['role'] . '</h4>

                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    ';
if ($_SESSION['role'] == "Administrator") {
    echo '
                    <ul class="sidebar-menu">
                            <li>
                                <a href="../dashboard/dashboard.php">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="../officials/officials.php">
                                    <i class="fa fa-users"></i> <span>Officials</span>
                                </a>
                            </li>
                            <li>
                                <a href="../blotter/blotter.php">
                                    <i class="fa fa-inbox"></i> <span>Blotters</span>
                                </a>
                            </li>
                            </li>
                            <div class="dropdown3">
                              <button id="dropdown-btn3" class="dropdown-btn3 list-group-item list-group-item-action bg-blue text-adjust active">
                                <i class="fa fa-info-circle icon-adjust"></i> <span>Profiling</span>
                                <i class="fa fa-angle-left pull-right"></i>
                              </button>
                              <div class="dropdown-container3" id="dropdown3" style="display: none">
                                <ul class="list-group bg-blue text-adjust sidebar-menu"> <!-- Add a valid list element here -->
                                  <li>
                                    <a href="../household/household.php">
                                      <i class="fa fa-home"></i> <span>Households</span>
                                    </a>
                                  </li>
                                  <li>
                                  <a href="../resident/resident.php">
                                      <i class="fa fa-users"></i> <span>Residents</span>
                                  </a>
                              </li>
                                </ul>
                              </div>
                            </div>
                            </li>
                            <li>
                                <a href="../activity/activity.php">
                                    <i class="fa fa-calendar"></i> <span>Announcements</span>
                                </a>
                            </li>
                            <div class="dropdown2">
                            <button id="dropdown-btn2" class="dropdown-btn2 list-group-item list-group-item-action bg-blue text-adjust active">
                              <i class="fa fa-file icon-adjust"></i> <span>Issuances</span>
                              <i class="fa fa-angle-left pull-right"></i>
                            </button>
                            <div class="dropdown-container2" id="dropdown2" style="display: none">
                              <ul class="list-group bg-blue text-adjust sidebar-menu"> <!-- Add a valid list element here -->
                                <li>
                                  <a href="../permit/permit.php">
                                    <i class="fa fa-certificate"></i> <span>Permits</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="../clearance/clearance.php">
                                    <i class="fa fa-certificate"></i> <span>Clearances</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          </li>

                            
                            <li>
                            <a href="../report/report.php">
                                <i class="fa fa-bar-chart"></i> <span>Reports</span>
                            </a>
                        </li>
                           
                        <div class="dropdown1">
                        <button id="dropdown-btn1" class="dropdown-btn1 list-group-item list-group-item-action bg-blue text-adjust active">
                          <i class="fa fa-user-secret icon-adjust"></i> <span>Accounts</span>
                          <i class="fa fa-angle-left pull-right"></i>
                        </button>
                        <div class="dropdown-container1" id="dropdown1" style="display: none">
                          <ul class="list-group bg-blue text-adjust sidebar-menu"> <!-- Add a valid list element here -->
                            <li>
                              <a href="../staff/staff.php">
                                <i class="fa fa-user"></i> <span>Staffs</span>
                              </a>
                            </li>
                            <li>
                              <a href="../captain/captain.php">
                                <i class="fa fa-user"></i> <span>Captain</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      </li>
                            
                            <li>
                                <a href="../logs/logs.php">
                                    <i class="fa fa-history"></i> <span>Logs</span>
                                </a>
                            </li>                            
                            
                    </ul>';
} elseif ($_SESSION['role'] == "Barangay Captain") {
    echo '
                        <ul class="sidebar-menu">
                        
                        <div class="dropdown1">
                        <button id="dropdown-btn1" class="dropdown-btn1 list-group-item list-group-item-action bg-blue text-adjust active">
                          <i class="fa fa-envelope icon-adjust"></i> <span>Requested Issuances</span>
                          <i class="fa fa-angle-left pull-right"></i>
                        </button>
                        <div class="dropdown-container1" id="dropdown1" style="display: none">
                          <ul class="list-group bg-blue text-adjust sidebar-menu">
                            
                            <li>
                                <a href="../permit/permit.php">
                                    <i class="fa fa-certificate"></i> <span>Permits</span>
                                </a>
                            </li>
                            <li>
                                <a href="../clearance/clearance.php">
                                    <i class="fa fa-certificate"></i> <span>Clearances</span>
                                </a>
                            </li>
                        </ul>';
} elseif (isset($_SESSION['staff'])) {
    echo '
                        <ul class="sidebar-menu">

                            <li>
                                <a href="../activity/activity.php">
                            <i class="fa fa-calendar"></i> <span>Announcements</span>
                            </a>
                            </li>

                            <li>
                                <a href="../resident/resident.php">
                                    <i class="fa fa-users"></i> <span>Residents</span>
                                </a>
                            </li>
                            
                            <div class="dropdown1">
                        <button id="dropdown-btn1" class="dropdown-btn1 list-group-item list-group-item-action bg-blue text-adjust active">
                          <i class="fa fa-envelope icon-adjust"></i> <span>Requested Issuances</span>
                          <i class="fa fa-angle-left pull-right"></i>
                        </button>
                        <div class="dropdown-container1" id="dropdown1" style="display: none">
                          <ul class="list-group bg-blue text-adjust sidebar-menu">

                            <li>
                                <a href="../blotter/blotter.php">
                                    <i class="fa fa-inbox"></i> <span>Blotters</span>
                                </a>
                            </li>
                        
                            <li>
                                <a href="../permit/permit.php">
                                    <i class="fa fa-certificate"></i> <span>Permits</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="../clearance/clearance.php">
                                    <i class="fa fa-certificate"></i> <span>Clearances</span>
                                </a>
                            </li>
                            
                        </ul>';
} else {
    echo '
                        <ul class="sidebar-menu">
                         
                        <li>
                        <a href="../activity/activity.php">
                            <i class="fa fa-calendar"></i> <span>Announcements</span>
                        </a>
                    </li>

                        <div class="dropdown1">
                        <button id="dropdown-btn1" class="dropdown-btn1 list-group-item list-group-item-action bg-blue text-adjust active">
                          <i class="fa fa-envelope icon-adjust"></i> <span>Request Issuance</span>
                          <i class="fa fa-angle-left pull-right"></i>
                        </button>
                        <div class="dropdown-container1" id="dropdown1" style="display: none">
                          <ul class="list-group bg-blue text-adjust sidebar-menu">
                        
                            <li>
                                <a href="../permit/permit.php">
                                    <i class="fa fa-certificate"></i> <span>Permit</span>
                                </a>
                            </li>
                            <li>
                                <a href="../clearance/clearance.php">
                                    <i class="fa fa-certificate"></i> <span>Clearance</span>
                                </a>
                            </li>
                        </ul>';
}
echo '
                </section>
                <!-- /.sidebar -->
            </aside>
	';
